<?php

use Illuminate\Database\Seeder;

class MedecinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('medicines')->insert([
            'name'=>'alopurinol',
            'form'=>'tab 100 mg',
            'formula'=> '30 tab/bulan',
            'description'=>'Tidak diberikan pada saat nyeri akut',
            'price'=>20000,
            'category_id'=> 1,
            'faskes_1'=>1,
            'faskes_2'=>1,
            'faskes_3'=> 1,
        ]);

        DB::table('medicines')->insert([
            'name'=>'kolkisin',
            'form'=>'tab 500 mcg',
            'formula'=> '30 tab/bulan',
            'description'=>'Obat yang digunakan untuk meredakan gout akut',
            'price'=>75000,
            'category_id'=> 1,
            'faskes_1'=>1,
            'faskes_2'=>1,
            'faskes_3'=> 1,
        ]);

        //2
        DB::table('medicines')->insert([
            'name'=>'gabapentin',
            'form'=>'kaps 100 mg',
            'formula'=> '60 kaps/bulan',
            'description'=>'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
            'price'=>50000,
            'category_id'=> 2,
            'faskes_1'=>0,
            'faskes_2'=>1,
            'faskes_3'=> 1,
        ]);

        DB::table('medicines')->insert([
            'name'=>'karbamazepin',
            'form'=>'tab 100 mg',
            'formula'=> '60 tab/bulan',
            'description'=>'Hanya untuk neuralgia trigeminal',
            'price'=>20000,
            'category_id'=> 2,
            'faskes_1'=>1,
            'faskes_2'=>1,
            'faskes_3'=> 1,
        ]);
    }
}
