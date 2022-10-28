<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(9)->get();
        $categories = Category::all();

       return view('admin.product.product', [
        'products' => $products,
        'categories' => $categories,
       ]);
    }

    public function create()
    {
       return view('admin.product.create', [
        'categories' => Category::all(),
       ]);
    }

    public function store(ProductRequest $request)
    {
        // dd($request->all());

        $image = $request->file('image')->store('public/image/product');

       $product = Product::create([
            'name' => $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'featured' => $request->input('featured') ? true : false,
            'description' => $request->description,
            'slug' => Str::slug(request('name')),
            'image' => $image,
        ]);

        if ($request->has('categories')) {
            $product->categories()->attach($request->categories);
        }

        return redirect('admin/product/product');
    }

    public function edit(Product $product)
    {

        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required'],
            'details' => ['required'],
            'price' => ['integer'],
            'description' => ['required'],
        ]);

        $image = $product->image;

        if (request()->hasFile('image')) {
            Storage::delete($product->image);
            $image = $request->file('image')->store('public/image/product');
        }

        $product->update([
            'name' => $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'featured' => $request->input('featured') ? true : false,
            'description' => $request->description,
            'slug' => Str::slug(request('name')),
            'image' => $image,
        ]);

        if ($request->has('categories')) {
            $product->categories()->sync($request->categories);
        }
    }

    public function destroy(Product $product)
    {
        Storage::delete($product->image);
        $product->categories()->detach();
        $product->delete();

        return back();
    }
}
