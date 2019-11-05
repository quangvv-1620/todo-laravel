<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::paginate(5);
        // dd($todos->currentPage());
        return view('todos.index')->with('todos', $todos);
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoRequest $request)
    {
        $todo = new Todo();
        $todo->name = $request['name'];
        $todo->description = $request['description'];
        $todo->completed = $request['completed'];
        $todo->save();

        return redirect('/todos');
    }

    public function edit($id)
    {
        return view('todos.edit')->with('todo', Todo::find($id));
    }

    public function update(TodoRequest $request, Todo $todo)
    {
        // $this->validate(request()->all(), [
        //     'name' => 'required'
        // ]);

        // $this->validate($request, [
        //     'name' => 'required'
        // ]);

        $todo->name = $request['name'];
        $todo->description = $request['description'];
        $todo->completed = $request['completed'];
        $todo->save();

        session()->flash('success', 'Todo created successfully.');
        return redirect('/todos');
    }
}
