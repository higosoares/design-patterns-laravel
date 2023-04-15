<?php

namespace Database\Seeders;

use App\Solid\Models\Role;
use App\Solid\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::factory()
            ->count(2)
            ->sequence(
                ['name' => 'admin'],
                ['name' => 'common'],
            )
            ->create();

        User::factory()
            ->count(2)
            ->hasAttached($roles)
            ->create();
    }
}
