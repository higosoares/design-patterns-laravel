<?php

namespace App\Facade\Permission;

use Illuminate\Support\Facades\Facade;

class Permission extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'permission';
    }
}
