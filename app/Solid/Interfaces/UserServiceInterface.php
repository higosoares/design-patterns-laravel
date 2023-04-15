<?php

namespace App\Solid\Interfaces;

use App\Solid\Models\Role;
use Illuminate\Support\Collection;

interface UserServiceInterface
{
    public function list() : Collection;

    public function listByRole(Role $role) : Collection;

    public function create() : string;
}
