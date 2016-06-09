<?php

use Illuminate\Database\Seeder;
use App\Model\OptionSet;

class OptionSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('option_sets')->truncate();
        $option_sets = [
        	[
        		'type' => 'text'
        	],
        	[
        		'type' => 'textarea'
        	],
        	[
        		'type' => 'number'
        	],
        	[
        		'type' => 'date'
        	],
        	[
        		'type' => 'radio',
        		'multiple' => true
        	],
        	[
        		'type' => 'select',
        		'multiple' => true
        	],
        	[
        		'type' => 'checkbox',
        		'multiple' => true
        	],
        ];

        foreach ($option_sets as $set) {
        	OptionSet::create($set);
        }
    }
}
