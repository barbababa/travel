<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Category;
use App\Model\OptionGroup;


class HomeController extends Controller
{
    public function index()
    {
    	// $layouts = Category::with('layouts')->limit(5)->get();
    	// $opg = OptionGroup::all();
    	// return  view('dashboard.index',[
    	// 	"categories" => $layouts,
    	// 	'optionGroup' => $opg
    	// ]);
        $res = OptionGroup::with('options', 'options.optionSet', 'options.optionValue')->get(); 
        return  view('dashboard.result', [
            'res' => $res
        ]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'option_group_name' => 'required|max:100', 
    		'option_group_description' => 'max:255'
    	]);

    	OptionGroup::create([
    		'option_group_name' => $request->option_group_name,
    		'option_group_description' => $request->option_group_description
    	]);

    	return back();
    }
}
