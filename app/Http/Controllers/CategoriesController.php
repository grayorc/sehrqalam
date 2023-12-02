<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query();
        if($keyword = \request('search')){
            $categories->where('name', 'LIKE', "%{$keyword}%");
        }
        $categories = $categories->paginate(20);
        return view('' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['string','required','unique:categories,name'],
        ]);
        $category=new Category();
        $category->name=$request['name'];
        $category->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $category=Category::find($category->id);
        return view('',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $category=Category::find($category->id);
        return view('',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>['string','required','unique:categories,name'],
        ]);
        $category->name=$request['name'];
        $category->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return back();
    }
}
