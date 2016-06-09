<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Option;

class OptionGroup extends Model
{
    protected $fillable = [
    	'option_group_name',
    	'option_group_description'
    ];

    public function options()
    {
    	return $this->hasMany(Option::class);
    }

    
}
