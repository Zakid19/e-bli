<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $pagination = 9;
        $categories = Category::all();

        if (request()->category) {
            $product = Product::with('categories')->whereHas('categories', function($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = $categories->where('slug', request()->category)->first()->name;
        } else {
            $products = Product::where('featured', true);
            $categoryName = 'Featured';
        }

        if (request()-> sort == 'low_high') {
            $products = $products->orderBy('price')->simplePaginate($pagination);
        } elseif (request()-> sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->simplePaginate($pagination);
        } else {
            $products = $products->simplePaginate($pagination);
        }

       return view('frontend.shop', [
        'products' => $products,
        'categories' => $categories,
        'categoryName' => $categoryName,
       ]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $mightAlsoLike = Product::mightAlsoLike();

        return view('frontend.product', [
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
}
