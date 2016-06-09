<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\OptionGroup;
use App\Model\OptionSet;
use App\Model\OptionValue;

class Option extends Model
{
    protected $fillable = [
    	'option_name',
        'isRequired'
    ];

    public function optionGroup()
    {
    	return $this->belongsTo(OptionGroup::class);
    }

    public function optionSet()
    {
    	return $this->belongsTo(OptionSet::class);
    }


    public function optionValue()
    {
        // if ($this->optionSet->multiple) {
            return $this->hasMany(OptionValue::class);
         //}

       
    }
}
