<?php

namespace Database\Seeders;

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
        $this->call(UserTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
    }
}
