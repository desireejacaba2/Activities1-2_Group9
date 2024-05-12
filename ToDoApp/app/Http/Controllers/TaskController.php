<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Controllers\Controller; 

class TaskController extends Controller
{
    // Display all tasks
    public function index()
    {
        $tasks = Task::all();
        return view('viewall', compact('tasks')); // Loading viewall.blade.php with tasks data
    }

    // Show the form for creating a new task
    public function create()
    {
        return view('maketask'); // Loading maketask.blade.php for creating a new task
    }

    // Store a new task
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required',
            'task_type' => 'required',
            'task_date' => 'required',
            'description' => 'required',
        ]); // Validating request data

        Task::create($request->all()); // Creating a new task with request data

        return redirect()->route('tasks.index')->with('success', 'You have made a new task'); // Redirecting to tasks index page with success message
    }

    public function edit(Task $task) 
    {
        return view('edit', compact('task')); // Loading edit.blade.php with task data for editing
    }

    // Update the specified task
    public function update(Request $request, Task $task) 
    {
        $request->validate([
            'task_name' => 'required',
            'task_type' => 'required',
            'task_date' => 'required',
            'description' => 'required',
        ]); // Validating request data

        $task->update($request->all()); // Updating task with request data

        return redirect()->route('tasks.index')->with('success'); // Redirecting to tasks index page with success message
    }

    // Delete the specified task
    public function destroy(Task $task) // Changed $tasks to $task
    {
        $task->delete(); // Deleting the specified task
        return redirect()->route('tasks.index')->with('success'); // Redirecting to tasks index page with success message
    }

    // Mark the specified task as completed
    public function complete(Task $task)
    {
        $task->update(['completed' => true]); // Marking the specified task as completed
        return redirect()->route('tasks.index')->with('success'); // Redirecting to tasks index page with success message
    }
}