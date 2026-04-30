
</head>

<body class="index-page article-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="../index_es.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="../assets/img/logo.png" alt="Logo Green PC">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index_es.php#hero">Inicio<br></a></li>
          <li><a href="../index_es.php#about">Acerca de</a></li>
          <li><a href="../index_es.php#services">Servicios</a></li>
          <li><a href="../index_es.php#portfolio">Portafolio</a></li>
          <li><a href="../blog.php" id="nav-blogs-link" class="active">Blogs<br></a></li>
          <li><a href="../programacion.php">Programación</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="../index.php"> <i class="bi bi-translate"></i> English</a>
    </div>
  </header>

  <!-- Fix: mantiene 'Blogs' activo en artículos del blog (scroll-spy del tema puede sobreescribirlo) -->
  <script>
    function forceBlogsActive() {
      var links = document.querySelectorAll('#navmenu a');
      links.forEach(function(a) { a.classList.remove('active'); });
      var blogsLink = document.getElementById('nav-blogs-link');
      if (blogsLink) blogsLink.classList.add('active');
    }
    // Ejecutar en DOMContentLoaded y en window.load para cubrir el scroll-spy tardío
    document.addEventListener('DOMContentLoaded', forceBlogsActive);
    window.addEventListener('load', function() {
      forceBlogsActive();
      // Segunda pasada por si el scroll-spy se inicializa después del load
      setTimeout(forceBlogsActive, 300);
    });
  </script>

  <!-- Contenido Principal -->
  <main class="main">

      <!-- Barra de progreso -->
      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>

