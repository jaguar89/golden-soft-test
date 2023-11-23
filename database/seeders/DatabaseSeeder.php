<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MainCategory;
use App\Models\Service;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Mohammad',
             'email' => 'admin@admin.com',
             'password' => '11223344'
         ]);

        $main_Cat = ['سخانات','مكيفات','السباكة','الكهرباء','المكيفات'];
        foreach ($main_Cat as $item){
            MainCategory::create([
                'name' => $item
            ]);
        }

        $main_Cat = ['المغاسل','دورات المياه','خدمات دينمو','كشف و إصلاح تسريبات','معالجة ارتفاع فواتير المياه'];
        foreach ($main_Cat as $item){
            SubCategory::create([
                'name' => $item,
                'main_cat_id' => 3
            ]);
        }

        $main_Cat = ['تركيب مغسلة عادي','تركيب مغسلة دولاب أو رخام','تركيب أو تبديل حوض','تركيب أو تبديل خلاط'];
        foreach ($main_Cat as $item){
            Service::create([
                'name' => $item,
                'cost' => 3125 ,
                'sub_cat_id' => 1
            ]);
        }

    }
}
