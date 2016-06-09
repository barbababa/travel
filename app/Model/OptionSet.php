<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Option;

class OptionSet extends Model
{
    protected $fillable = [
    	'type',
    	'multiple'
    ];

    public function options()
    {
    	return $this->hasMany(Option::class);
    }
    
}
