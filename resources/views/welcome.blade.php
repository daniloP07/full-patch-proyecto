<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilos para el efecto de movimiento */
        .image-container {
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            transition: transform 0.3s;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        /* Estilos para el pie de página */
        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
    </style>
    <title>Dashboard</title>
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.enel.com.co/content/enel-co/es/megamenu/prensa/news/2016/11/el-quimbo-reinicia-su-operacion/_jcr_content/carousel/items/image.img.jpg/1543918417223.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.enel.com.co/content/enel-co/es/megamenu/prensa/news/2016/11/el-quimbo-reinicia-su-operacion/_jcr_content/carousel/items/image.img.jpg/1543918417223.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.enel.com.co/content/enel-co/es/megamenu/prensa/news/2016/11/el-quimbo-reinicia-su-operacion/_jcr_content/carousel/items/image.img.jpg/1543918417223.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="image-container">
          <h2>Bares</h2>
          <a href="{{ route('bares') }}">
              <img src="https://ingenieriademenu.com/wp-content/uploads/2022/04/Diferentes-tipos-de-bares-que-existen-y-su-clasificacion.jpg" alt="Bar 1">
          </a>
          <p>Nombre del bar</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image-container">
          <h2>Hoteles</h2>
          <a href="{{ route('hoteles') }}">
              <img src="https://planestodoincluido.com/img/hoteles/mexico/puertovallarta/secrets-vallarta-bay-800x600.jpg" alt="Hotel 1">
          </a>
          <p>Nombre del hotel</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image-container">
        <h2>Restaurantes</h2>
        <a href="{{ route('restaurantes') }}">
            <img src="https://www.neo2.com/wp-content/uploads/2021/11/mejores-interiorismos-restaurantes-bares-2021-06.jpg" alt="Restaurante 1">
        </a>
        <p>Nombre del restaurante</p>
      </div>
    </div>
  </div>
</div>

<!-- Pie de página -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
            </div>
            <div class="col-6">
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
