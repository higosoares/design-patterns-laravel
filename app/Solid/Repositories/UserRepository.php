<?php

namespace App\Solid\Repositories;

use App\Solid\Interfaces\UserRepositoryInterface;
use App\Solid\Models\Role;
use App\Solid\Models\User;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function list(): Collection
    {
        return User::all();
    }

    public function listByRole(Role $role): Collection
    {
        return User::with('roles')->whereHas('roles', function ($query) use ($role) {
            $query->where('name', $role->name);
        })->get();
    }
}
