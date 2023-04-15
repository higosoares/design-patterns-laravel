<?php

namespace App\Facade\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Facade\Permission\Permission;

class PermissionController extends Controller
{
    public function get()
    {
        return response()->json(Permission::verify(1), 200);
    }
}
