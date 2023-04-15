<?php

namespace App\DomainDrivenDesign\App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use App\DomainDrivenDesign\App\Web\Task\Requests\TaskRequest;
use App\DomainDrivenDesign\Domain\Task\Actions\CreateTaskAction;
use App\DomainDrivenDesign\Domain\Task\DataTransferObject\TaskDto;
use App\DomainDrivenDesign\Domain\Task\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function get()
    {
        $tasks = Task::all();

        return response()->json($tasks, 200);
    }

    public function create(TaskRequest $taskRequest, CreateTaskAction $createTaskAction)
    {
        $data = TaskDto::fromRequest($taskRequest);
        $task = $createTaskAction($data);

        return response()->json($task, 201);
    }
}
