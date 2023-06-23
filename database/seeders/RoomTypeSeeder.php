<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{


    public function run(): void
    {
        RoomType::factory(10)->create();

    }
}
