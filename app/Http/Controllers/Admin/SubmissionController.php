<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.Submission.all');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Submission $bookRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submission $bookRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submission $bookRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submission $bookRequest)
    {
        //
    }
}
