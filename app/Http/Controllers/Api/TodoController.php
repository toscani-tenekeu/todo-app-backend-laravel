<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // List all todos
    public function index()
    {
        return response()->json(Todo::all());
    }

    // Store a new todo
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255'
        ]);

        $todo = Todo::create([
            'title' => $request->title,
            'completed' => $request->completed ?? false,
        ]);

        return response()->json($todo, 201);
    }

    // Show a single todo
    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    // Update a todo
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'completed' => 'sometimes|required|boolean'
        ]);

        $todo->update($request->all());

        return response()->json($todo);
    }

    // Delete a todo
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json(null, 204);
    }
}
