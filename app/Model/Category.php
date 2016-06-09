<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Layout;
use App\Model\Product;
class Category extends Model
{
    protected $fillable = [
    	'category _title',
    	'category_description'
    ];

    public function layouts()
    {
    	return $this->hasMany(Layout::class);
    }

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
