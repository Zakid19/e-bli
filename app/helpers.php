<?php

function presentPrice($price)
{
    return $attributes['price'] = sprintf('$ %s', number_format((int) $price / 100));
}

function getNumbers() {

    $tax = config('cart.tax') / 100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $newSubtotal = ((int)Cart::subtotal() - (int)$discount);
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal + (1 + $newTax);

    return collect([
        'discount' => $discount,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}
