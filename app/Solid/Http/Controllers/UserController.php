<?php

namespace App\Solid\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Solid\Models\User;
use App\Solid\Registry\UserServiceRegistry;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected UserServiceRegistry $userServiceRegistry
    ) {}

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function list(Request $request)
    {
        $service = $this->userServiceRegistry->get($this->getRoleName());
        $users = $service->newList($this->getRole());

        return response()->json($users, 200);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function create(Request $request)
    {
        $service = $this->userServiceRegistry->get($this->getRoleName());
        $user = $service->create();

        return response()->json($user, 201);
    }

    /**
     * @return mixed
     */
    protected function getRole()
    {
        return User::find(1)->roles()->first();
    }

    /**
     * @return string
     */
    protected function getRoleName()
    {
        return $this->getRole()->name;
    }
}
