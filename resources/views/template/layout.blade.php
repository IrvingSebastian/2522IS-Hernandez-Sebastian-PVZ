<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
    <title>
        @yield('Titulo')
    </title>  

    <link href="/main.3da94fde.css" rel="stylesheet">
</head>

<body>

<header>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      <nav class="navbar-fullscreen" id="navbar-middle">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul class="navbar-fullscreen-links">
          <li><a href="{{route('index')}}" title="">Inicio</a></li>
          <li><a href="{{route('acercaDe')}}" title="">Dinosaurios</a></li>
          <li><a href="{{route('acercaDe')}}" title="">Acerca De</a></li>
        </ul>

        <div class="footer-container">
           
          <p><small>© Dinoanimales | Todos los Derechos Reservados 2022</p>
          <p class="footer-share-icons">
              <a href="https://blog-cliente-servidor.herokuapp.com" class="fa-icon" title="">
                <i class="fa fa-globe" aria-hidden="true"></i>
              </a>
              <a href="https://www.linkedin.com" class="fa-icon" title="">
                <i class="fa fa-globe" aria-hidden="true"></i>
              </a>
          </p>             
        </div>
      </nav> 
    </div>
  </nav>
</header>

@yield('Cuerpo')
  
<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navbarFixedTopAnimation();
    closeMenuBeforeGoingToPage();
  });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
</script>
<script type="text/javascript" src="/main.4c6e144e.js"></script></body>

</html>