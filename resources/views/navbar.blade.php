<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Full-Patch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorías
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('bares') }}">Bares</a></li>
            <li><a class="dropdown-item" href="{{ route('hoteles') }}">Hoteles</a></li>
            <li><a class="dropdown-item" href="{{ route('restaurantes') }}">Restaurantes</a></li>
            
          </ul>
        </li>

        <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('contacto') }}">Contacto</a>
</li>


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Sobre Garzon(H)</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

</body>
</html>