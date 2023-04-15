<?php

namespace App\Solid\Traits;

trait RoleUserTrait
{
    public function created()
    {
        $role = $this->returnRole();

        return 'created '.$role;
    }
}
