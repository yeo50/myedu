<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();

        return view("todos.index", ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("todos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request;
        $request->validate([
            'name' => 'required | max:50',
            'completed' => '| integer'
        ]);
        // first way
        // $todo = new Todo([
        //     'name' => $request->name,
        //     'completed' => $request->completed ?? 0
        // ]);
        // another way
        $todo = Todo::create([
            'name' => $request->name,
            'completed' => $request->completed ?? 0
        ]);
        $res = $todo->save();
        if ($res) {
            return redirect()->route('todos.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
        // return $todo;
        return view('todos.show', ["todo" => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
        // return $todo;
        return view('todos.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        // return $request;
        $request->validate([
            'name' => 'required | max:50',
            'completed' => '| integer'
        ]);


        $res = $todo->update([
            'name' => $request->name,
            'completed' => $request->completed ?? 0
        ]);
        if ($res) {
            return redirect()->route('todos.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
