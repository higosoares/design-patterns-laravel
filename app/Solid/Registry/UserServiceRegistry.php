<?php

namespace App\Solid\Registry;

use App\Solid\Interfaces\UserInterface;
use Exception;

class UserServiceRegistry
{
    protected $services = [];

    /**
     * Register the multiples user services
     *
     * @param $name
     * @param UserInterface $userInterface
     * @return $this
     */
    public function register($name, UserInterface $userInterface)
    {
        $this->services[$name] = $userInterface;
        return $this;
    }

    /**
     * Get instance of type user service
     *
     * @param string $name
     * @return \App\Solid\Interfaces\UserInterface|\App\Solid\Interfaces\UserServiceInterface
     * @throws Exception
     */
    public function get(string $name)
    {
        if (!array_key_exists($name, $this->services)) {
            throw new Exception("Invalid user service");
        }
        return $this->services[$name];
    }
}
