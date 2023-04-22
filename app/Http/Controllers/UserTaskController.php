<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserTaskRequest;
use App\Http\Requests\UpdateUserTaskRequest;
use App\Models\UserTask;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return UserTask::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserTaskRequest $request)
    {
        
        $validated = $request
                        ->safe()
                        ->only(['due_date', 'start_time', 'end_time', 'remarks', 'user_id', 'task_id', 'status_id']);

        $userTask = new UserTask();
        $userTask->due_date = $validated['due_date'];
        $userTask->start_time = $validated['start_time'];
        $userTask->end_time = $validated['end_time'];
        $userTask->remarks = $validated['remarks'];
        $userTask->user_id = $validated['user_id'];
        $userTask->task_id = $validated['task_id'];
        $userTask->status_id = $validated['status_id'];

        return $userTask->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(UserTask $userTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserTask $userTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserTaskRequest $request, UserTask $userTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTask $userTask)
    {
        //
    }
}
