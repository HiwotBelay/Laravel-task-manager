<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Show form and tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    // Store new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index');
    }
    public function update(Request $request, Task $task)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    $task->update([
        'title' => $request->title,
        'description' => $request->description,
    ]);

    return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
}


public function destroy(Task $task)
{
    $task->delete();

    return redirect()->route('tasks.index');
}

public function toggleStatus(Task $task)
{
    $task->is_completed = !$task->is_completed;
    $task->save();

    return redirect()->route('tasks.index');
}
public function edit(Task $task)
{
    return view('edit', compact('task'));
}

}
