<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    <title>Activity 11</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link @if(Request::path() == '/') active @endif" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if(Request::path() == 'photos') active @endif" href="{{ url('/photos') }}">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if(Request::path() == 'contact') active @endif" href="{{ url('/contact') }}">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5 mb-5">
  @yield('content')
</div>

<footer class="bg-light py-3 fixed-bottom">
  <div class="container">
    <p class="text-center mb-0">Made by Jose Eduardo Cerino Sastre 👨‍💻</p>
  </div>
</footer>

    
</body>
</html>
