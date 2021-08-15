<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tags = new Collection([
            'PHP', 
            'Java', 
            'Javascript', 
            'C', 
            'C#', 
            '.NET', 
            'Python', 
            'Laravel', 
            'API', 
            'REST', 
            'Frontend', 
            'Backend',
            'Mobile',
            'DevOps',
            'AWS',
            'Google Services'
        ]);

        $contracts = Contract::all();

        foreach($contracts as $contract) {
            $contract->attachTags([$tags->random(),$tags->random(),$tags->random()]);
        }

        $users = User::all();

        foreach($users as $user) {
            $user->attachTags([$tags->random(),$tags->random(),$tags->random()]);
        }
    }
}
