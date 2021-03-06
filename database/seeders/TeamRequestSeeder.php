<?php

namespace Database\Seeders;

use App\Models\TeamRequest;
use Illuminate\Database\Seeder;

class TeamRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamRequest::factory()
            ->count(20)
            ->create();
    }
}
