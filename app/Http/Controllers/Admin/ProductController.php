<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query();
        if($keyword = \request('search')){
            $products->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('detail', '', "%{$keyword}%")
                ->orWhere(\DB::raw('LOWER(detail)'), 'LIKE', "%".strtolower($keyword)."%")
                ->orWhere('slug', 'LIKE', "%{$keyword}%");
        }
        $products = $products->paginate(20);
        return view('admin.products.all' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
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
                'slug' => ['required', 'max:128', 'unique:products', 'alpha_dash'],
                'price' => ['required' , 'integer'],
                'detail' => ['required']
            ]);

            $category = Category::where('name', $data['category'])->first();

            if ($category) {
                $product = new Product();
                $product->title = $data['title'];
                $product->detail = $data['detail'];
                $product->slug = $data['slug'];
                $product->price = $data['price'];
                $product->user_id = Auth::id();
                $product->category_id = $category->id;
                $product->save();
            } else {
                $newCategory = new Category();
                $newCategory->name = $data['category'];
                $newCategory->save();

                $product = new Product();
                $product->user_id = Auth::id();
                $product->title = $data['title'];
                $product->detail = $data['detail'];
                $product->price = $data['price'];
                $product->slug = $data['slug'];
                $product->category_id = $newCategory->id;
                $product->save();
            }

            return response()->json('Product created', 201);
        }catch(\Exeption $e){
            \Log::error($e);
            return response()->json(['message' => 'Product creation failed. Please try again later.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => ['required', 'min:4', 'max:128'],
            'category' => ['required'],
            'slug' => ['required', 'max:128', Rule::unique('products')->ignore($product->id)],
            'price' => ['required' , 'integer'],
            'detail' => ['required']
        ]);

        $category = Category::where('name', $data['category'])->first();

        if ($category) {
            $product->title = $data['title'];
            $product->detail = $data['detail'];
            $product->slug = $data['slug'];
            $product->price = $data['price'];
            $product->user_id = Auth::id();
            $product->category_id = $category->id;
            $product->update($data);
        } else {
            $newCategory = new Category();
            $newCategory->name = $data['category'];
            $newCategory->save();

            $product->user_id = Auth::id();
            $product->title = $data['title'];
            $product->detail = $data['detail'];
            $product->price = $data['price'];
            $product->slug = $data['slug'];
            $product->category_id = $newCategory->id;
            $product->update();
        }

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
