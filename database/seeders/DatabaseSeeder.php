<?php

namespace Database\Seeders;

use App\Actions\Products\SaveVariants;
use App\Actions\Products\SyncTags;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Nguyen Viet',
            'email'    => 'bang@daudau.cc',
            'password' => '$2y$10$oInm2t3h1vltaWHNNvzXV.PTxFOBGMw.vPcSLsVmUeR7KQjJ5kkrW',
        ]);

        User::create([
            'name'     => 'Admin Sweb',
            'email'    => 'admin@sweb.vn',
            'password' => Hash::make('123456'),
        ]);

    }
}
