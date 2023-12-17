<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\AgeCategory;
use App\Models\Category;
use App\Models\Fee;
use App\Models\Ostan;
use App\Models\Submission;
use App\Models\Translator;
use App\Models\User;
use App\Models\Writer;
use App\Rules\NationalCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $ageCategories= AgeCategory::all();
        $ostans = Ostan::all();

        return view('profile.submission.index',compact('categories','ageCategories','ostans'));
    }

    public function getCities($ostanId)
    {
        $cities = getCitiesByOstan($ostanId);
        return response()->json($cities);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fees = Fee::all();
        foreach ($fees as $fee){
            $prices[$fee->name] = $fee->price;
        }

        $price = 0;
        if(request()->has('status')) {
            $data = $request->validate([
                'writerId.*' => ['required', 'numeric'],
                'writerName.*' => ['required', 'min:3'],
                'bookTitle' => ['required', 'min:3', 'max:128'],
                'seconderyTitle' => ['min:3', 'max:128'],
                'enTitle' => ['min:3', 'max:128', 'regex:/[pLs]+/'],
                'coverDiscretion' => ['required', 'min:3', 'max:128'],
                'file' => ['required', 'mimes:doc,docx', 'max:1048576'],
                'type' => ['required', 'numeric', 'exists:categories,id'],
                'age' => ['required', 'numeric', 'exists:age_category,id'],
                'fullName' => ['required'],
                'nationalCode' => ['required', 'numeric', (new NationalCode)],
                'phoneNumber' => ['required', 'numeric'],
                'rule' => ['required'],
                'zipCode' => ['required'],
                'ostan' => ['required', 'exists:ostan,id'],
                'shahr' => ['required', 'exists:shahr,id'],
            ]);

            $type = "تالیفی";
            $writerIds = request()->input('writerId.*');
            $writerNames = request()->input('writerName.*');
            $writers = array_combine($writerIds, $writerNames);

            $path  = Storage::putFileAs('private', $request->file('file'),  Carbon::now()->format('Y-m-d_H-i-s').'_'.$request->file('file')->getClientOriginalName(), 'private');
            $wordCont = wordCounter(Storage::path($path));
            $price += $prices['word_fee'] * $wordCont;

            if(request()->has('cover')){
                $price += $prices['cover_design'];
            }
            if(request()->has('permission')){
                $price += $prices['licence'];
            }
            if(request()->has('virastary')){
                $price += $prices['editing'];
            }
            if(request()->has('atlas')){
                $price += $prices['atlas'];
            }


            $submission = Submission::create([
                'title' => $data['bookTitle'],
                'type' => $type,
                'user_id' => Auth::id(),
                'price'=>$price,
                'name' => $data['fullName'],
                'secondary_title' => $data['seconderyTitle'],
                'english_title' => $data['enTitle'],
                'category_id' => $data['type'],
                'age_category_id' => $data['age'],
                'word_number' => $wordCont,
                'editing' => request()->has('virastary'),
                'cover_design' => request()->has('atlas'),
                'cover_detail' => request()->has('cover'),
                'file_path' => $path,
                'licence' => request()->has('permission'),
                'code_meli' => $data['nationalCode'],
                'code_posti' => $data['zipCode'],
                'phone_number' => $data['phoneNumber'],
                'shahr_id' => $data['shahr'],
                'ostan_id' => $data['ostan'],
                'status' => "در انتظار پرداخت"
            ]);

            $submission_id = $submission->id;

            foreach ($writers as $id => $value) {
                Writer::create([
                    'submission_id' => $submission_id,
                    'name' => $value,
                    'code_meli' => $id
                ]);
            }
        }else{
            $data = $request->validate([
                'writerName.*' => ['required', 'min:3'],
                'translatorId.*' => ['required', 'numeric'],
                'translatorName.*' => ['required', 'min:3'],
                'bookTitle' => ['required', 'min:3', 'max:128'],
                'seconderyTitle' => ['min:3', 'max:128'],
                'enTitle' => ['min:3', 'max:128', 'regex:/[pLs]+/'],
                'coverDiscretion' => ['required', 'min:3', 'max:128'],
                'file' => ['required', 'mimes:doc,docx', 'max:1048576'],
                'type' => ['required', 'numeric', 'exists:categories,id'],
                'age' => ['required', 'numeric', 'exists:age_category,id'],
                'fullName' => ['required'],
                'nationalCode' => ['required', 'numeric', (new NationalCode)],
                'phoneNumber' => ['required', 'numeric'],
                'rule' => ['required'],
                'zipCode' => ['required'],
                'ostan' => ['required', 'exists:ostan,id'],
                'shahr' => ['required', 'exists:shahr,id'],
            ]);

            $type = "ترجمه شده";

            $writerNames = request()->input('writerName.*');
            $writers = $writerNames;

            $translatorIds = request()->input('translatorId.*');
            $translatorNames = request()->input('translatorName.*');
            $translators = array_combine($translatorIds, $translatorNames);

            $path  = Storage::putFileAs('private', $request->file('file'),  Carbon::now()->format('Y-m-d_H-i-s').'_'.$request->file('file')->getClientOriginalName(), 'private');
            $wordCont = wordCounter(Storage::path($path));
            $price += $prices['word_fee'] * $wordCont;

            if(request()->has('cover')){
                $price += $prices['cover_design'];
            }
            if(request()->has('permission')){
                $price += $prices['licence'];
            }
            if(request()->has('virastary')){
                $price += $prices['editing'];
            }
            if(request()->has('atlas')){
                $price += $prices['atlas'];
            }


            $submission = Submission::create([
                'title' => $data['bookTitle'],
                'type'=>$type,
                'price'=>$price,
                'user_id' => Auth::id(),
                'name' => $data['fullName'],
                'secondary_title' => $data['seconderyTitle'],
                'english_title' => $data['enTitle'],
                'category_id' => $data['type'],
                'age_category_id' => $data['age'],
                'word_number' => $wordCont,
                'editing' => request()->has('virastary'),
                'cover_design' => request()->has('atlas'),
                'cover_detail' => request()->has('cover'),
                'file_path' => $path,
                'licence' => request()->has('permission'),
                'code_meli' => $data['nationalCode'],
                'code_posti' => $data['zipCode'],
                'phone_number' => $data['phoneNumber'],
                'shahr_id' => $data['shahr'],
                'ostan_id' => $data['ostan'],
                'status' => "در انتظار پرداخت"
            ]);

            $submission_id = $submission->id;

            foreach ($writers as $id => $value) {
                Writer::create([
                    'submission_id' => $submission_id,
                    'name' => $value
                ]);
            }

            foreach ($translators as $id => $value) {
                Translator::create([
                    'submission_id' => $submission_id,
                    'name' => $value,
                    'code_meli' => $id,
                ]);
            }
        }

        return redirect("profile/receipt/$submission->id");
    }
    public function receipt($submission_id){
        //check for user id
        $user_id = Auth::id();
        $submission = Submission::find($submission_id);
        if($submission->user_id != $user_id){
            //403 if user asking for other users submission
            abort(403);
        }
        //getting prices form fee table
        $fees = Fee::all();
        foreach ($fees as $fee){
            $prices[$fee->name] = $fee->price;
        }

        if($submission){
            return view('profile.receipt.index',compact('submission','prices'));
        }else{
            //404 if the submission does not exist
            abort(404);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
