<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'featured' => 'boolean',
    ];

    protected $fillable = ['name', 'slug', 'details', 'price', 'description', 'featured', 'image', 'images'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function presentPrice()
    {
        return $this->attributes['price'] = sprintf('$ %s', number_format((int) $this->price / 100));
    }

    public function scopeMightAlsolike($query)
    {
       return $query->inRandomOrder()->take(4);
    }
}
