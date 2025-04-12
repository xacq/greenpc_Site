<?php

include_once './assets/includes/head-blog.php'; // Include the head file for the blog page

?>

  <!-- Contenido Principal -->
  <main class="main"> <!-- margen para evitar superposición con header fijo -->

    <!-- Sección Hero para el Blog -->
    <section id="hero" class="hero section dark-background">
    <img src="assets/img/blog-hero-bg.jpg" alt="" data-aos="fade-in">
      <div class="container text-center">
      <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2 class="color-primario">Blog de Tecnología</h2>
          </div>
        </div>

        <p data-aos="fade-up" data-aos-delay="200">Descubre las últimas tendencias e innovaciones en el mundo digital.</p>
      </div>
    </section>
    <!-- Fin Sección Hero -->

 <!-- Sección de Publicaciones -->
 <section id="blog-posts" class="section dark-background">
      <div class="container">
        <div class="row gy-4" data-aos="fade-up">

          <!-- Publicación 1 -->
          <div class="col-lg-4 col-md-6">
            <div class="card border-dark bg-dark">
              <img src="assets/img/blog/qwen.jpg" class="card-img-top" alt="Imagen Post 1">
              <div class="card-body d-flex flex-column text-end">
                <h4 class="card-title color-primario text-center "><strong>QWEN <br>La Revolución China en IA</strong></h4>
                <p class="card-text color-secundario">Explora cómo QWEN está revolucionando la industria, desde la automatización hasta el análisis predictivo...</p>
                <a href="./blogs/qwen-v1.php" class="link-primario">Leer más</a>
              </div>
            </div>
          </div>

          <!-- Publicación 2 -->
          <div class="col-lg-4 col-md-6">
          <div class="card border-dark bg-dark">
              <img src="assets/img/blog/web-2025.jpg" class="card-img-top" alt="Imagen Post 2">
              <div class="card-body d-flex flex-column text-end">
                <h4 class="card-title color-primario text-center"><strong>Tendencias en Desarrollo Web 2025</strong></h4>
                <p class="card-text color-secundario">Descubre las nuevas herramientas y frameworks que están dando forma al futuro del desarrollo web...</p>
                <a href="./blogs/web-v1.php" class="link-primario">Leer más</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
          <div class="card border-dark bg-dark">
              <img src="assets/img/blog/ciberseguridad.png" class="card-img-top" alt="Imagen Post 2">
              <div class="card-body d-flex flex-column text-end">
                <h4 class="card-title color-primario text-center"><strong>Ciberseguridad <br> en la era de la IA</strong></h4>
                <p class="card-text color-secundario">Un análisis profundo sobre cómo proteger tus datos y prevenir ataques cibernéticos en un mundo interconectado...</p>
                <a href="./blogs/ciber-v1.php" class="link-primario">Leer más</a>
              </div>
            </div>
          </div>

        </div>
      </div>    

    </section>
    <!-- Fin Sección de Publicaciones -->



  </main>
<?php

include_once 'assets/includes/footer-es.php'; // Include the footer file

?>