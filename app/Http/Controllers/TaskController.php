<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Resources\TaskCollection;

class TaskController extends Controller
{
    public function getTasks()
    {
        $tasks = Task::all();

        return new TaskCollection($tasks);
    }
}
