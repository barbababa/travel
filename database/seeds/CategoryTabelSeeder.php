<?php

use Illuminate\Database\Seeder;
use App\Model\Category;
use App\Model\Layout;

class CategoryTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->truncate();
    	DB::table('layouts')->truncate();
    	$categories = [
    		[
    			'category_title' => 'Hotels'
    		],
    		[
    			'category_title' => 'Vocational Rentals'
    		],
    		[
    			'category_title' => 'Restaurants'
    		],
    		[
    			'category_title' => 'BnB'
    		],

    	];


    	foreach ($categories as  $cat) {
    		Category::create($cat);
    	}
    	$laydown = new Layout;
    	$laydown->layout_type = 'create';
    	Category::first()->layouts()->save($laydown);
        
    }
}
