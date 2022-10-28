<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class SaveForLaterController extends Controller
{
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        return back()->with('success', 'Item save has been Removed');
    }

    public function switchToCart($id)
    {
        $item = Cart::instance('saveForLater')->get($id);
        Cart::instance('saveForLater')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect('cart')->with('warning', 'Item is already in your Cart !');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
        ->associate('App\Models\Product');

        return redirect('cart')->with('success', 'Item has been Moved to Cart !');
    }
}
