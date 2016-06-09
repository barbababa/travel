<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

class Product extends Model
{
    protected $fillable = [
    	'product_title',
    	'product_description',
    	'product_owner'
    ];


    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
