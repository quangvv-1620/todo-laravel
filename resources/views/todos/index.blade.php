@extends('layouts.app')

@section('title', 'Lits Todos')

@section('content')
  <h1 class="text-center my-5">TODOS</h1>
  <div class="row justofy-content-center">
    <div class="col-md-8 offset-md-2">
      <div class="card card-default">
        <div class="card-header">
          Todos
        </div>

        <div class="card-body">
          @foreach($todos as $todo)
            <ul class="list-group">
              <li class="list-group-item">
                {{ $todo->name }}
                <a href="/todos/{{ $todo->id }}/edit"><button class="btn btn-primary btn-sm float-right">Edit</button></a>
                <a href="/todos/{{ $todo->id }}"><button class="btn btn-primary btn-sm float-right">View</button></a>
              </li>
            </ul>
          @endforeach

          {{ $todos->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection