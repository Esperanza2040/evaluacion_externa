<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'dni' => 'required',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}