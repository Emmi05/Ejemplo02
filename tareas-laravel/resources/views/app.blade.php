<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link rel="stylesheet" href="../css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    
    }
    .color-container{
        width: 16px;
        height: 16px;
        display: inline-block;
        border-radius: 4px;
    }
    a{
        text-decoration: none;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="logoempisinfondo.png" alt="">
    </a>
<!-- href es para re dirigirlo a la carpeta todos  -->
    <a class="navbar-brand" href="{{ route('todos') }}">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold fs-5" href="#">Tareas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold fs-5" href="{{ route('nosotros') }}">Nosotros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

</body>
</html>