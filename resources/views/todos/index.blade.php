@extends('layouts.app')

@section('title', 'Lits Todos')

@section('content')
  <h1 class="text-center my-5">TODOS</h1>
  <div class="row justofy-content-center">
    <div class="col-md-8 offset-md-2">
      <div class="card card-default">
        <div class="card-header">
          <div class="row">
            <div class="col-md-3">
              <h4>Todos</h4>
            </div>
            
            <div class="col-md-9">
              <form action="todos/search" method="GET" class="form-inline" role="form">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
              </form>
            </div>
          </div>
        </div>

        <div class="card-body">
          @foreach($todos as $todo)
            <ul class="list-group">
              <li class="list-group-item">
                {{ $todo->name }}
                @if($todo->completed == true)
                  <span class="badge badge-success">Completed</span>
                @else
                  <span class="badge badge-info">Open</span>
                @endif
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