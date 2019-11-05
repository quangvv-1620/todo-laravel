<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Todos App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/todos">List</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/todos/create">Create todos</a>
          </li>
        </ul>
      </div>
    </nav>
    
    @if(session()->has('success'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session()->get('success')}}
      </div>
    @endif

    @yield('content')
  </div>
</body>
</html>