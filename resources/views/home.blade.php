<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding Exam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark text-light">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{ route('home.index') }}">Coding Exam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto"> 
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button type="submit" class="nav-link active text-light btn btn-link" aria-current="page" >Logout</button>
                    </form>
                   
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">


  <div class="card mt-5">
    <div class="card-header">
      <h3>Welcome</h3>
    </div>
    <div class="card-body ">
      Hi, {{ auth()->user()->full_name }}
    </div>
  </div>



</div>


</body>

</html>
