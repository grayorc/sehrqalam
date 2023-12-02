<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PostController extends Controller
{

    protected $table = 'posts';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query();

        if($keyword = request('search')){
            $posts->where('title', 'LIKE', "%{$keyword}%")
                ->orwhere(\DB::raw('LOWER(detail)'), 'LIKE', "%".strtolower($keyword)."%");
        }

        $posts = $posts->paginate(20);
        return view('admin.posts.all',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'title' => ['required', 'min:4', 'max:128'],
                'category' => ['required'],
                'slug' => ['required', 'max:128', 'unique:posts', 'alpha_dash'],
                'content' => ['required']
            ]);
            $category = Category::where('name', $data['category'])->first();

            if ($category) {
                $post = new Post();
                $post->title = $data['title'];
                $post->content = $data['content'];
                $post->slug = $data['slug'];
                $post->user_id = Auth::id();
                $post->category_id = $category->id;
                $post->save();
            } else {
                $newCategory = new Category();
                $newCategory->name = $data['category'];
                $newCategory->save();

                $post = new Post();
                $post->user_id = Auth::id();
                $post->title = $data['title'];
                $post->content = $data['content'];
                $post->slug = $data['slug'];
                $post->category_id = $newCategory->id;
                $post->save();
            }

            return response()->json('Post created', 201);
        }catch(\Exeption $e){
            \Log::error($e);
            return response()->json(['message' => 'Post creation failed. Please try again later.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
               $data = $request->validate([
                    'title' => ['required', 'min:4', 'max:128'],
                    'category' => ['required'],
                    'slug' => ['required', 'max:128', Rule::unique('posts')->ignore($post->id)],
                    'content' => ['required']
                ]);

                $category = Category::where('name', $data['category'])->first();

                if ($category) {
                    $post->title = $data['title'];
                    $post->content = $data['content'];
                    $post->slug = $data['slug'];
                    $post->user_id = Auth::id();
                    $post->category_id = $category->id;
                    $post->update($data);
                } else {
                    $newCategory = new Category();
                    $newCategory->name = $data['category'];
                    $newCategory->save();

                    $post->user_id = Auth::id();
                    $post->title = $data['title'];
                    $post->content = $data['content'];
                    $post->slug = $data['slug'];
                    $post->category_id = $newCategory->id;
                    $post->update();
                }

                return redirect(route('admin.posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return back();
    }


}
