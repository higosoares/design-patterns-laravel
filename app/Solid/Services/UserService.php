<?php

namespace App\Solid\Services;

use App\Solid\Interfaces\UserRepositoryInterface;
use App\Solid\Interfaces\UserServiceInterface;
use App\Solid\Models\Role;
use App\Solid\Traits\RoleUserTrait;
use Illuminate\Support\Collection;

class UserService implements UserServiceInterface
{
    use RoleUserTrait;

    public function __construct(
        protected UserRepositoryInterface $userRepositoryInterface
    ) { }

    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return $this->userRepositoryInterface->list();
    }

    /**
     * @param Role $role
     * @return Collection
     */
    public function listByRole(Role $role): Collection
    {
        return $this->userRepositoryInterface->listByRole($role);
    }

    /**
     * @return string
     */
    public function create(): string
    {
        return $this->created();
    }

    /**
     * @return string
     */
    protected function returnRole()
    {
        return '';
    }
}
