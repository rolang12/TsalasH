<?php

namespace Database\Seeders;

use App\Models\SaborStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            SaborStockSeeder::class,
            OrderSeeder::class,
            ProductOrderSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
