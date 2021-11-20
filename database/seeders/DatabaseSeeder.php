<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product_Category;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Tablet'
        ]);

        Category::create([
            'name' => 'Mini PC'
        ]);

        Category::create([
            'name' => 'Laptop'
        ]);
    }
}
