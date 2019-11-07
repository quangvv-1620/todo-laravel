@extends('layouts.default')

@section('title')
  Edit Todo: {{ $todo->name }}
@endsection

@section('content')
  <h1 class="text-center my-5">Create Todos</h1>
  <div class="row justofy-content-center">
    <div class="col-md-8 offset-md-2">
      <div class="card card-default">
        <div class="card-header">
          Edit Todo
        </div>

        <div class="card-body">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul class="list-group">
                  @foreach($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
          @endif
          <form action="/todos/{{ $todo->id }}" method="POST" class="form-horizontal" role="form">
          @csrf
          {{ method_field('PATCH') }}
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" value='{{ $todo->name }}' name="name" placeholder="Enter name">
            </div>

            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control" id="category" name="category_id">
                <option value="">Choose a category</option>
                @foreach($categories as $category)
                  <option value={{ $category->id }} {{ $category->id == $todo->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="completed" name="completed" value="1" {{ $todo->completed === true ? 'checked' : '' }}>
              <label class="form-check-label" for="completed">Completed</label>
            </div>
            
            <div class="form-group">
              <label for="description">Description</label>
              <textarea row="3" class="form-control" id="description" name="description" placeholder="Description">{{ $todo->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection