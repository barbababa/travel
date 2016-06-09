<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\LayoutStep;
use App\Model\Category;

class Layout extends Model
{
    protected $fillable = [
    	'layout_type'
    ];

    public function layoutSteps()
    {
    	return $this->hasMany(LayoutStep::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}