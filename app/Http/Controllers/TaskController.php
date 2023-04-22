<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        
        $validated = $request
                        ->safe()
                        ->only(['name', 'description', 'due_date', 'status_id']);

        $task = new Task();
        $task->name = $validated['name'];
        $task->description = $validated['description'];
        $task->due_date = $validated['due_date'];
        $task->status_id = $validated['status_id'];
        $task->save();

        return $task;
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        
        return $task;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        
        $validated = $request
                        ->safe()
                        ->only(['name', 'description', 'due_date', 'status_id']);

        $task->name = $validated['name'];
        $task->description = $validated['description'];
        $task->due_date = $validated['due_date'];
        $task->status_id = $validated['status_id'];

        return $task->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        
        return $task->delete();
    }
}
