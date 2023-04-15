<?php

namespace App\DomainDrivenDesign\Domain\Task\Actions;

use App\DomainDrivenDesign\Domain\Task\DataTransferObject\TaskDto;
use App\DomainDrivenDesign\Domain\Task\Models\Task;

final class CreateTaskAction
{
    public function __invoke(TaskDto $taskData): Task
    {
        return Task::create([
            'name' => $taskData->name,
            'category' => $taskData->category
        ]);
    }
}
