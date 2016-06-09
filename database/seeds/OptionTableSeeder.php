<?php

use Illuminate\Database\Seeder;
use App\Model\Option;
use App\Model\OptionSet;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('options')->truncate();
        $options= [
        	[
        		'option_name' => 'Accommodates',
        		'isRequired' => true,
        		'option_set_id' => 3,
        		'option_group_id' => 1
        	],
        	[
        		'option_name' => 'Bathrooms',
        		'isRequired' => true,
        		'option_set_id' => 3,
        		'option_group_id' => 1
        	],
        	[
        		'option_name' => 'Bed type',
        		'isRequired' => true,
        		'option_set_id' => 6,
        		'option_group_id' => 1
        	],
        	[
        		'option_name' => 'Bedrooms',
        		'isRequired' => true,
        		'option_set_id' => 3,
        		'option_group_id' => 1
        	],
        	[
        		'option_name' => 'Beds',
        		'isRequired' => true,
        		'option_set_id' => 3,
        		'option_group_id' => 1
        	],
        	[
        		'option_name' => 'Check In',
        		'isRequired' => true,
        		'option_set_id' => 6,
        		'option_group_id' => 1
        	],
        	[
        		'option_name' => 'Check Out',
        		'isRequired' => true,
        		'option_set_id' => 6,
        		'option_group_id' => 1
        	],
        	[
        		'option_name' => 'Amenities',
        		'isRequired' => true,
        		'option_set_id' => 7,
        		'option_group_id' => 2
        	],

        	[
        		'option_name' => 'Extra people',
        		'isRequired' => true,
        		'option_set_id' => 6,
        		'option_group_id' => 3
        	],
        	[
        		'option_name' => 'Cleaning Fee',
        		'isRequired' => true,
        		'option_set_id' => 3,
        		'option_group_id' => 3
        	],
        	[
        		'option_name' => 'The Space',
        		'isRequired' => true,
        		'option_set_id' => 2,
        		'option_group_id' => 4
        	],
        	[
        		'option_name' => 'The Space',
        		'isRequired' => true,
        		'option_set_id' => 2,
        		'option_group_id' => 4
        	],
        	[
        		'option_name' => 'The Neighborhood',
        		'isRequired' => true,
        		'option_set_id' => 2,
        		'option_group_id' => 4
        	],


        ];

        foreach ($options as $option) {
        	$opt = new Option;
        	$opt->option_name = $option['option_name'];
        	$opt->isRequired = $option['isRequired'];
        	$opt->option_set_id = $option['option_set_id'];
        	$opt->option_group_id = $option['option_group_id'];
        	$opt->save();
        }

    }
}
