<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Layout;
use App\Model\LayoutStepOption;

class LayoutStep extends Model
{
    protected $fillable = [
    	'layout_step_heading',
    	'layout_step_description'
    ];

    public function layout()
    {
    	return $this->belongsTo(Layout::class);
    }

    public function layoutStepOptions()
    {
    	return $this->hasMany(LayoutStepOption::class);
    }
}
