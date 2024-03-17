<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tasks = User::find(2)->tasks;
        // $user = Task::find(1)->user;

        // $user = Auth::user();


        // $tasks = User::find($user->id)->tasks;


        // return view('tasks/all-task', [
        //     "tasks" => $tasks
        // ]);
        
        return view('tasks/all-task');

        // foreach ($tasks as $task) {

        // }
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks/create-task');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $user = Auth::user();

        $task = new Task;
 
        $task->title = $request->title;

        $task->description = $request->description;

        $task->user_id = $user->id;
 
        $task->save();

        return redirect('/tasks');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task, $id)
    {
        $task = Task::find($id);
        
        return view('tasks/show-task', [
            "task" => $task
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task, $id)
    {

        $task = Task::find($id);

        return view('tasks/edit-task', [
            "task" => $task
        ]);

        // return view('tasks/edit-task');
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, $id)
    {
        $user = Auth::user();

        $task = Task::find($id);

 
        $task->title = $request->title;

        $task->description = $request->description;

        $task->user_id = $user->id;
 
        $task->save();

        return redirect("/tasks/{$id}");
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task, $id)
    {
        $task = Task::find($id)->first();

        $task->delete();

        return redirect('/tasks');
        //
    }
}
