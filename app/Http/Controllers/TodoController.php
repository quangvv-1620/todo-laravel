<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::paginate(5);
        $categories = Category::all();
        // dd($todos->currentPage());
        return view('todos.index')->with(['todos' => $todos, 'categories' => $categories]);
    }

    public function search(Request $request)
    {
        dd($request->input());
    }

    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        $categories = Category::all();
        return view('todos.create')->with('categories', $categories);
    }

    public function store(TodoRequest $request)
    {
        $todo = new Todo($request->input());
        // $todo->name = $request['name'];
        // $todo->description = $request['description'];
        // $todo->completed = $request['completed'];
        $todo->save();

        return redirect('/todos');
    }

    public function edit($id)
    {
        $categories = Category::all();
        return view('todos.edit')->with(['todo' => Todo::find($id), 'categories' => $categories]);
    }

    public function update(TodoRequest $request, Todo $todo)
    {
        // $this->validate(request()->all(), [
        //     'name' => 'required'
        // ]);

        // $this->validate($request, [
        //     'name' => 'required'
        // ]);

        // $todo->name = $request['name'];
        // $todo->description = $request['description'];
        // $todo->completed = $request['completed'];
        $todo->update($request->input());
        // $todo->save();

        session()->flash('success', 'Todo update successfully.');
        return redirect('/todos');
    }
}
