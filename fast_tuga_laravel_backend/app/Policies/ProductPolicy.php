<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Product $product)
    {
        return true;
    }

    public function create(User $user)
    {
        return $user->isManager();
    }

    public function update(User $user, Product $product)
    {
        return $user->isManager();
    }

    public function delete(User $user, Product $product)
    {
        return $user->isManager();
    }

    public function restore(User $user, Product $product)
    {
        return $user->isManager();
    }

    public function forceDelete(User $user, Product $product)
    {
        return $user->isManager();
    }
}
