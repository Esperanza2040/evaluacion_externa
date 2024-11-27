<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Devuelves todas las tareas en formato JSON
        return response()->json(Task::all());
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

        // Crea la tarea y la retorna como respuesta
        $task = Task::create($request->all());
        return response()->json($task, 201); // 201 para indicar que se ha creado
    }

   
    public function show(Task $task)
    {
        return response()->json($task);
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
        return response()->json($task);
    }

  
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204); // 204 para indicar que la tarea se ha eliminado con éxito
    }
}