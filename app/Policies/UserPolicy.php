<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function edit(User $currentUser, User $user) 
    {
        return $currentUser->is($user);
    }
}
