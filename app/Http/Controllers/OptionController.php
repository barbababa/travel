<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\OptionGroup;
use App\Model\OptionSet;

class OptionController extends Controller
{
    public function index($id)
    {
    	$opg = OptionGroup::where('id', $id)->with('options', 'options.optionSet')->first();
    	$type_sets = OptionSet::all();
    	return view('dashboard.option', [
    		'option_set' => $opg,
    		'type_sets' => $type_sets
    	]);
    }

    public function store()
    {
    	
    }

    
}
