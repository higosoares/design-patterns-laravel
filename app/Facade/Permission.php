<?php

namespace App\Facade;

class Permission
{
    public static function verify(int $group): bool
    {
        return 1 == $group;
    }
}
