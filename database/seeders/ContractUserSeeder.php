<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContractUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach($users as $user) {
            $user->contracts()->attach(random_int(1,50));
            $user->contracts()->attach(random_int(1,50));
            $user->contracts()->attach(random_int(1,50));
        }
    }
}
