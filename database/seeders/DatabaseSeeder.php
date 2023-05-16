<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $data = [
            [
                'name' => 'yemeni1',
                'value' => '/webAsset/pictures/yemeni1.jpeg',
            ],
            [
                'name' => 'yemeni2',
                'value' => '/webAsset/pictures/yemeni2.jpeg',
            ],
            [
                'name' => 'morocan1',
                'value' => '/webAsset/pictures/morocan2.jpeg',
            ],
            [
                'name' => 'morocan2',
                'value' => '/webAsset/pictures/morocan1.jpeg',
            ],
            [
                'name' => 'modern1',
                'value' => '/webAsset/pictures/modern1.jpeg',
            ],
            [
                'name' => 'modern2',
                'value' => '/webAsset/pictures/modern2.jpeg',
            ],
            [
                'name' => 'curtains1',
                'value' => '/webAsset/pictures/curtains1.jpeg',
            ],
            [
                'name' => 'curtains2',
                'value' => '/webAsset/pictures/curtains2.jpeg',
            ],


        ];



        foreach ($data as $record) {
            Settings::create($record);
        }



    }
}
