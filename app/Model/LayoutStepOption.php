<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Option;
use App\Model\LayoutStep;

class LayoutStepOption extends Model
{
    public function option()
    {
    	$this->belongsTo(Option::class);
    }

    public function layoutStep()
    {
    	$this->belongsTo(LayoutStep::class);
    }
}
