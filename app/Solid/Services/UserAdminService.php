<?php

namespace App\Solid\Services;

use App\Solid\Interfaces\UserInterface;
use App\Solid\Models\Role;
use Illuminate\Support\Collection;

class UserAdminService extends UserService implements UserInterface
{
    /**
     * @param Role|null $role
     * @return Collection
     */
    public function newList(?Role $role): Collection
    {
        return $this->list();
    }

    /**
     * @return string
     */
    protected function returnRole()
    {
        return 'admin';
    }
}
