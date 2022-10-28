<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CouponController extends Controller
{
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            return redirect('checkout')->with('warning', 'Invalid coupon code, Please try again.');
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' =>$coupon->discount(Cart::subtotal()),
        ]);

        return redirect('checkout')->with('success', 'Coupon has been applied!');
    }

    public function destroy()
    {
        session()->forget('coupon');

        return redirect('checkout')->with('warning', 'Coupon has been removed!');
    }
}
