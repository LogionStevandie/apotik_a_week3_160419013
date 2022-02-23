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
        //
        DB::table('categories')->insert([
            'category_name'=>' ANTIPIRAI',
            'description'=>'Menurunkan kadar asam urat',
        ]);

        DB::table('categories')->insert([
            'category_name'=>'NYERI NEUROPATIK',
            'description'=>'Gejala gangguan atau penyakit pada saraf di tubuh',
        ]);
    }
}
