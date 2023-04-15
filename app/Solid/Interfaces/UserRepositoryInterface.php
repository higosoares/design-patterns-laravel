<?php

namespace App\Solid\Interfaces;

use App\Solid\Models\Role;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function list() : Collection;

    public function listByRole(Role $role) : Collection;
}
