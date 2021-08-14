<?php

namespace App\Services;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TeamService 
{
    public static function canViewTeam(Team $team, User $user) {
        if(!$team->public) {
            return $team->users->contains($user) ? true : false;
        }

        return true;
    }
}