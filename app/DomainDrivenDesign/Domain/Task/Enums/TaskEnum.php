<?php

namespace App\DomainDrivenDesign\Domain\Task\Enums;

enum TaskEnum
{
    const ACTIVE = 1;
    const INATIVE = 2;

    public static function getNameStatus($status): string
    {
        return $status == self::ACTIVE ? 'Active' : 'Disabled';
    }
}
