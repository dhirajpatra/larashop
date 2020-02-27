<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'url',
        'description',
        'price',
        'content',
        'image',
    ];

    public function getImage()
    {
        return "images/$this->image";
    }
}