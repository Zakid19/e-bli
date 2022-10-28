<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $mightAlsoLike = Product::mightAlsoLike()->get();
        return view('frontend.cart', [
            'mightAlsoLike' => $mightAlsoLike,
            'discount' => getNumbers()->get('discount'),
            'newSubtotal' => getNumbers()->get('newSubtotal'),
            'newTax' => getNumbers()->get('newTax'),
            'newTotal' => getNumbers()->get('newTotal'),
        ]);
    }

    public function store(Request $request)
    {
        $duplicates = Cart::search(function($cartItem, $rowItem) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect('cart')->with('warning', 'Item is already in your your cart !');
        }

        Cart::add($request->id, $request->name, 1, $request->price)
        ->associate('App\Models\Product');

        return redirect('cart')->with('success', 'Item was Added to your cart !');
    }

    public function update(Request $request, $id)
    {
        Cart::update($id, $request->quantity);
        session()->flash('success', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
       Cart::remove($id);

       return back();
    }

    public function  switchToSaveForLater($id)
    {
        $item = Cart::get($id);
        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect('cart')->with('warning', 'Item is already Saved for Later !');
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
        ->associate('App\Models\Product');

        return redirect('cart')->with('success', 'Item has been Saved For Later !');
    }
}
