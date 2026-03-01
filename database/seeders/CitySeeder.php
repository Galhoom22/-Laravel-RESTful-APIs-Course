<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cairo = \App\Models\City::create(['name' => 'القاهرة']);
        $cairo->districts()->createMany([
            ['name' => 'المعادي'],
            ['name' => 'مدينة نصر'],
            ['name' => 'مصر الجديدة'],
        ]);

        $giza = \App\Models\City::create(['name' => 'الجيزة']);
        $giza->districts()->createMany([
            ['name' => 'الدقي'],
            ['name' => 'المهندسين'],
            ['name' => 'الهرم'],
        ]);

        $alexandria = \App\Models\City::create(['name' => 'الإسكندرية']);
        $alexandria->districts()->createMany([
            ['name' => 'سموحة'],
            ['name' => 'ميامي'],
            ['name' => 'محطة الرمل'],
        ]);
    }
}
