<?php

use Database\Seeders\AuthorSeeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;
use PharIo\Manifest\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(AuthorSeeder::class);
    }
}
