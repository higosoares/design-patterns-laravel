<?php

namespace App\DomainDrivenDesign\Domain\Task\DataTransferObject;

use App\DomainDrivenDesign\App\Web\Task\Requests\TaskRequest;

class TaskDto
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $category;

    public static function fromRequest(TaskRequest $taskRequest): TaskDto
    {
        $self = new self();
        $self->name = $taskRequest['name'];
        $self->category = $taskRequest['category'];

        return $self;
    }
}
