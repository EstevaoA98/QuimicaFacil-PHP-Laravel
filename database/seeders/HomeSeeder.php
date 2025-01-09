<?php

namespace Database\Seeders;

use App\Models\home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        home::firstCreate(
            ['id'=>1],
            [
                '' => '',
                '' => '',
                '' => '',

                '' => '',
                '' => '',

                '' => '',

                '' => '',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
            ],
        );
    }
}