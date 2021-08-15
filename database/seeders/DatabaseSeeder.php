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
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            ContractSeeder::class,
            TeamSeeder::class,
            TeamRequestSeeder::class,
            TeamUserSeeder::class,
            ContractUserSeeder::class,
            TagsSeeder::class,
        ]);
    }
}
