<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, User $model)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, User $model)
    {
        //
    }

    public function delete(User $user, User $model)
    {
        //
    }

    public function restore(User $user, User $model)
    {
        //
    }

    public function forceDelete(User $user, User $model)
    {
        //
    }
}
