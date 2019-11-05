@extends('layouts.default')

@section('title')
  Single Todo: {{ $todo->name }}
@endsection

@section('content')
  <h1 class="text-center my-5">{{ $todo->name }}</h1>
  <div class="row justofy-content-center">
    <div class="col-md-8 offset-md-2">
      <div class="card card-default">
        <div class="card-header">
          Description
        </div>

        <div class="card-body">
          <p>{{ $todo->description }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
