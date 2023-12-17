<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating default values
        Fee::create([
            'name' => 'cover_design',
            'label'=>'طراحی جلد',
            'price'=>1450000
        ]);

        Fee::create([
            'name' => 'editing',
            'label'=>'ویراستاری',
            'price'=>1800000
        ]);

        Fee::create([
            'name' => 'atlas',
            'label'=>'طرح اطلس',
            'price'=>1450000
        ]);

        Fee::create([
            'name' => 'licence',
            'label'=>'کسب مجوز',
            'price'=>500000
        ]);

        Fee::create([
            'name' => 'word_fee',
            'label'=>'هزینه به ازای هر کلمه',
            'price'=>2000
        ]);
    }
}
