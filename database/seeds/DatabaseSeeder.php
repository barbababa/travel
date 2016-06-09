<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         $this->call(CategoryTabelSeeder::class);
         $this->call(OptionSetSeeder::class);
         $this->call(OptionGroupTableSeeder::class);
         $this->call(OptionTableSeeder::class);
         $this->call(OptionValueSeeder::class);
         $this->call(LayoutTableSeeder::class);
         DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
