<?php

use Illuminate\Database\Seeder;
use App\Model\OptionValue;

class OptionValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('option_values')->truncate();

        $option_value_sets = [
        	[
        		'option_id' => 3,
        		'option_value_name' => 'Real Bed',
        		'option_value_value' => 'Real Bed',
        	],
        	[
        		'option_id' => 3,
        		'option_value_name' => 'King Sized Bed',
        		'option_value_value' => 'King Sized Bed',
        	],
        	[
        		'option_id' => 3,
        		'option_value_name' => 'Single Bed',
        		'option_value_value' => 'Single Bed',
        	],
        	[
        		'option_id' => 3,
        		'option_value_name' => 'Double Bed',
        		'option_value_value' => 'Double Bed',
        	],
        	[
        		'option_id' => 6,
        		'option_value_name' => 'Anytime after 2PM',
        		'option_value_value' => 'Anytime after 2PM',
        	],
        	[
        		'option_id' => 6,
        		'option_value_name' => 'Anytime after 1PM',
        		'option_value_value' => 'Anytime after 1PM',
        	],
        	[
        		'option_id' => 6,
        		'option_value_name' => 'Anytime after 12PM',
        		'option_value_value' => 'Anytime after 12PM',
        	],
        	[
        		'option_id' => 6,
        		'option_value_name' => 'Anytime after 11PM',
        		'option_value_value' => 'Anytime after 11PM',
        	],
        	[
        		'option_id' => 7,
        		'option_value_name' => '11PM',
        		'option_value_value' => '11PM',
        	],
        	[
        		'option_id' => 7,
        		'option_value_name' => '10PM',
        		'option_value_value' => '10PM',
        	],
        	[
        		'option_id' => 7,
        		'option_value_name' => '9PM',
        		'option_value_value' => '9PM',
        	],
        	[
        		'option_id' => 7,
        		'option_value_name' => '12PM',
        		'option_value_value' => '12PM',
        	],
        	[
        		'option_id' => 8,
        		'option_value_name' => 'Kitchen',
        		'option_value_value' => 'Kitchen',
        	],
        	[
        		'option_id' => 8,
        		'option_value_name' => 'Internet',
        		'option_value_value' => 'Internet',
        	],
        	[
        		'option_id' => 8,
        		'option_value_name' => 'Internet',
        		'option_value_value' => 'Internet',
        	],
        	[
        		'option_id' => 8,
        		'option_value_name' => 'TV',
        		'option_value_value' => 'TV',
        	],
        	[
        		'option_id' => 8,
        		'option_value_name' => 'Essentials',
        		'option_value_value' => 'Towel, Bed Sheet, Toilet Paper',
        	],
        	[
        		'option_id' => 8,
        		'option_value_name' => 'Shampoo',
        		'option_value_value' => 'Shampoo',
        	],
        	[
        		'option_id' => 9,
        		'option_value_name' => 'No Charge',
        		'option_value_value' => 'No Charge',
        	],
        	[
        		'option_id' => 9,
        		'option_value_name' => '10%',
        		'option_value_value' => '10%',
        	],
        	[
        		'option_id' => 9,
        		'option_value_name' => '20%',
        		'option_value_value' => '20%',
        	],
        	[
        		'option_id' => 9,
        		'option_value_name' => '30%',
        		'option_value_value' => '30%',
        	],
        	[
        		'option_id' => 9,
        		'option_value_name' => '40%',
        		'option_value_value' => '40%',
        	],
        ];

        foreach ($option_value_sets as $set) {
        	$option_value =  new OptionValue;
        	$option_value->option_id = $set['option_id'];
        	$option_value->option_value_name = $set['option_value_name'];
        	$option_value->option_value_value = $set['option_value_value'];

			$option_value->save();        	
        }
    }
}
