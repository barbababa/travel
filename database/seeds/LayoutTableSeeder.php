<?php

use Illuminate\Database\Seeder;
use App\Model\Layout;
use App\Model\Category;

class LayoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layouts')->truncate();

        $categories = Category::all();

        foreach ($categories as $cat) {
        	$layout = new Layout;
        	$layout->layout_type = "create";
        	$cat->products()->save($layout);
        }
    }
}
