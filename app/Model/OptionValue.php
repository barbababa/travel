<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Option;

class OptionValue extends Model
{
    protected $fillable = [
    	'option_value_name',
    	'option_value_value'
    ];

    public function option()
    {
    	return $this->belongsTo(Option::class);
    }
}
