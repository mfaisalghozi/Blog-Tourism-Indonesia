<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'beach'
        ]);
        DB::table('categories')->insert([
            'name' => 'mountain'
        ]);
        DB::table('categories')->insert([
            'name' => 'themepark'
        ]);
        DB::table('categories')->insert([
            'name' => 'city'
        ]);
        DB::table('categories')->insert([
            'name' => 'nature'
        ]);
    }
}
