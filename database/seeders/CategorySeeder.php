<?php

namespace Database\Seeders;

use App\Models\AgeCategory;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AgeCategory::create([
            'name' => 'kids',
            'label' => 'کودک'
        ]);
        AgeCategory::create([
            'name' =>'teens',
            'label' => 'نوجوان'
        ]);
        AgeCategory::create([
            'name'=>'adults',
            'label' => 'بزرگسال'
        ]);
        Category::create([
            'name'=>'political',
            'label' => 'سیاسی'
        ]);
        Category::create([
            'name' => 'psychology',
            'label' => 'روانشناسی'
        ]);
        Category::create([
            'name'=>'history',
            'label' => 'تاریخی'
        ]);
        Category::create([
            'name'=>'philosophy',
            'label' => 'فلسفه'
        ]);
        Category::create([
            'name' => 'science',
            'label' => 'علمی'
        ]);


    }
}
