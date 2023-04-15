<?php

namespace App\Solid\Interfaces;

use App\Solid\Models\Role;
use Illuminate\Support\Collection;

interface UserInterface
{
    public function newList(?Role $role) : Collection;
}
