<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;
use App\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Status::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatusRequest $request)
    {
        
        $validated = $request->safe()->only(['name']);

        $status = new Status();
        $status->name = $validated['name'];
        $status->save();

        return $status;
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {

        return $status;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatusRequest $request, Status $status)
    {
        
        $validated = $request->safe()->only(['name']);
        
        $status->name = $validated['name'];
        $status->save();

        return $status;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        
        return $status->delete();
    }
}
