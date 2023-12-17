<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    protected $table = 'users';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //for search
        $users = User::query();
        if($keyword = request('search')){
            $users->where('email' , 'LIKE', "%{$keyword}%")
                ->orwhere('name' , 'LIKE', "%{$keyword}%")
                ->orwhere('id' , 'LIKE', "%{$keyword}%");
        }

        if(request('admin') == 1){
            $users->where('is_superuser' , 1);
        }

        if(request('staff') == 1){
            $users->where('is_staff' , 1);
        }

        $users = $users->paginate(20);
        return view('admin.users.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phoneNumber' => ['required', 'regex:/^(09)[0-9]{9}$/', 'digits:11', 'numeric'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $user = User::create($data);

            return response()->json(['message' => 'User created successfully'], 201);
        } catch (\Exception $e) {
            \Log::error($e);
            return response()->json(['message' => 'User creation failed. Please try again later.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'wallet' => ['required', 'numeric'],
                'phone_number' => ['required', 'regex:/^(09)[0-9]{9}$/', 'digits:11', 'numeric',Rule::unique('users')->ignore($user->id)],
            ]);
            if(! is_null($request->password)){
                $request->validate([
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                ]);

                $data['password'] = $request->password;

            }

            if($request->has('use') && $request->promote != "null"){
                $request->validate([
                    'promote' => ['required_if:use,1|in:staff,admin'],
                ]);
                if($request->promote == "staff"){
                    $data['is_staff'] = 1;
                    $data['is_superuser'] = 0;
                }elseif($request->promote == "admin"){
                    $data['is_superuser'] = 1;
                    $data['is_staff'] = 0;
                }else{
                    $data['is_superuser'] = 0;
                    $data['is_staff'] = 0;
                }
            }
            $user->update($data);
        }catch (\Exception $e){
            dd($e);
        }
        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
