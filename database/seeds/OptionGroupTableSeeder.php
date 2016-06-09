<?php

use Illuminate\Database\Seeder;
use App\Model\OptionGroup;

class OptionGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('option_groups')->truncate();
        $option_groups = [
        	[
        		'option_group_name' => 'The Space'
        	],
        	[
        		'option_group_name' => 'Amenities'
        	],
        	[
        		'option_group_name' => 'Prices'
        	],
        	[
        		'option_group_name' => 'Description',

        	],
        	[
        		'option_group_name' => 'House Rules' 
        	],
        	[
        		'option_group_name' => 'Availability'
        	]
        ];

        foreach ($option_groups as $opg ) {
        	OptionGroup::create($opg);
        }
    }
}
