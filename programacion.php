<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inicio - Green PC</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> 

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

<!-- LOGO FLOTANTE -->
<div id="logo-float-wrap" style="display:inline-block; position:fixed; bottom:20px; right:20px; z-index:9999;">
  <a href="https://commit.greenpc.dev" target="_blank" rel="noopener" id="logo-link"
    style="display:block; text-decoration:none;">
    <img
      src="./assets/img/commit_logo.png" 
      id="logo-float"
      alt="COMMIT by GreenPC"
      style="
        width:220px;
        border-radius:14px;
        border:1px solid rgba(0,230,118,0.2);
        box-shadow:0 0 0 0 rgba(0,230,118,0);
        transition:box-shadow 0.3s, transform 0.15s, border-color 0.3s;
        will-change:transform;
        display:block;
      "
    />
  </a>
</div>

<script>
(function(){
  const logo = document.getElementById('logo-float');
  const link = document.getElementById('logo-link');
  
  let currentScrollY = 0;
  let currentMouseX = 0;
  let currentMouseY = 0;
  
  function updateTransform() {
    // Combinar scroll + tilt
    const scrollTranslate = currentScrollY * -0.01;
    const scrollRotate = currentScrollY * 0.001;
    const tiltX = currentMouseX * 12;
    const tiltY = currentMouseY * -12;
    
    logo.style.transform = `
      translateY(${scrollTranslate}px) 
      rotate(${scrollRotate}deg) 
      perspective(600px) 
      rotateY(${tiltX}deg) 
      rotateX(${tiltY}deg)
    `;
  }

  /* ── PARALLAX con scroll ── */
  let ticking = false;
  window.addEventListener('scroll', function(){
    if(!ticking){
      requestAnimationFrame(function(){
        currentScrollY = window.scrollY;
        updateTransform();
        ticking = false;
      });
      ticking = true;
    }
  });

  /* ── TILT con movimiento del mouse ── */
  document.addEventListener('mousemove', function(e){
    const rect = logo.getBoundingClientRect();
    const cx = rect.left + rect.width / 2;
    const cy = rect.top + rect.height / 2;
    // Limitar valores entre -1 y 1 para evitar inclinación excesiva
    currentMouseX = Math.min(Math.max((e.clientX - cx) / (window.innerWidth / 2), -1), 1);
    currentMouseY = Math.min(Math.max((e.clientY - cy) / (window.innerHeight / 2), -1), 1);
    updateTransform();
  });

  /* ── HOVER glow ── */
  link.addEventListener('mouseenter', function(){
    logo.style.boxShadow = '0 0 28px rgba(0,230,118,0.45), 0 0 60px rgba(0,230,118,0.15)';
    logo.style.borderColor = 'rgba(0,230,118,0.6)';
  });
  link.addEventListener('mouseleave', function(){
    logo.style.boxShadow = '0 0 0 0 rgba(0,230,118,0)';
    logo.style.borderColor = 'rgba(0,230,118,0.2)';
    // Resetear tilt al salir (opcional)
    currentMouseX = 0;
    currentMouseY = 0;
    updateTransform();
  });
})();
</script>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="./index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="./assets/img/logo.png" alt="logo">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="./index_es.php" class="active">Inicio<br></a></li>
          <li><a href="./programacion.php">Programación</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="./index.php"> <i class="bi bi-translate"></i> English</a>
    </div>
  </header>

  <main class="main">

    <!-- Sección Hero -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
      <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Programación a la medida</h2>
          </div>
        </div>
      </div>
    </section><!-- /Sección Hero -->

    <!-- Sección OLPDP-->
    <section id="about" class="about section">
      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Ley Organica de Protección de Datos Personales</h2>
        <p>Portal de Protección de Datos</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/lopdp.jpg" class="img-fluid" alt="">
            <div class="row">
              <div class="col-md-12">
                <a href="./portal_lopdp.php" class="btn btn-outline-primary mt-2 mb-2" style="width: 100%;">Ver Demo (mockup)..!</a>
              </div>
            </div>
          </div>            
          <div class="col-lg-7 order-1 order-lg-1 content">
              <div class="software-features">
                <h2>Portal de Protección de Datos</h2>
                <h3>Portal de Privacidad - Protección de Datos Personales</h3>
                <p>Un portal de privacidad es una página web o sección de un sitio web que recopila, organiza y presenta información relacionada con la privacidad y protección de datos personales de los usuarios. Su objetivo principal es informar a los usuarios sobre cómo se recopilan, utilizan, almacenan y protegen sus datos personales, así como proporcionarles herramientas y recursos para ejercer sus derechos como titulares de esos datos.</p>  
                <p>En el contexto de la Ley Orgánica de Protección de Datos Personales (LOPDP) de Ecuador, un portal de privacidad es una herramienta fundamental para que las organizaciones cumplan con sus obligaciones legales y para que los titulares de los datos puedan ejercer sus derechos de manera efectiva.</p>
                  <hr>
                  <p>Adaptado a la <strong>normativa ecuatoriana.</strong> <br><strong class="text-danger" style="font-size: 12px;">(Se aplican restricciones segun la cantidad de servicios que se desea en el sistema modular). </p>
              </div>
          </div>

        </div>

      </div>

    </section><!-- /Sección Acerca de -->


    <!-- Sección Crediticia-->
    <section id="about" class="about section">
      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sistemas con Modelos Entrenados (ML)</h2>
        <p>Predicción de riesgo crediticio, Texto Predictivo, ML e IA</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/modelo_risk.jpg" class="img-fluid" alt="">
            <div class="row">
              <div class="col-md-6">
                <a href="./modelo_risk_mockup.php" class="btn btn-outline-primary mt-2 mb-2" style="width: 100%;">Ver Demo (mockup)..!</a>
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-outline-success mt-2 mb-2" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#videoModalRisk"><i style="color: #ffc107;"class="bi bi-play-circle-fill me-1"></i> Ver Video..!</a>
              </div>
            </div>
          </div>  
          <div class="col-lg-7 order-2 order-lg-1 content">
            <h3>CARACTERISTICAS</h3>
              <div class="software-features">
                <h2>Sistema Integral de Riesgo Crediticio</h2>
                <h3>Módulos navegables (barra lateral/superior):</h3>
                <ul style="font-size: 12px;">
                    <li><strong>Dashboard:</strong> con KPIs en tiempo real, gráficas, evolución mensual del riesgo y alertas.</li>
                    <li><strong>Cargar datos:</strong> importación desde CSV/XLS/XLSX con selección de modo de carga, whitelist de columnas y trazabilidad .</li>
                    <li><strong>Batches:</strong> historial de importaciones con fecha, usuario, modo, estado, total de registros cargados y omitidos.</li>
                    <li><strong>Clientes:</strong> cartera agregada con filtros por oficina, tipo de crédito, categoría vigente, estado y nivel de riesgo ML.</li>
                    <li><strong>Ver / Evaluar cliente:</strong> ficha completa del cliente (oficina, crédito, garantía, sexo, operaciones, monto, saldo, patrimonio, mora).</li>
                    <li><strong>Scoring ML — Modelo predictivo:</strong> clasificación del cliente; muestra ML crudo, probabilidad, calificación de contraste, riesgo.</li>
                    <li><strong>Operaciones crediticias:</strong> créditos por cliente con tipo, garantía, monto, saldo, mora, categoría y estado; filtros de busqueda.</li>
                    <li><strong>Historial de reevaluaciones:</strong> auditoría: crédito, mora, categoría anterior, nivel, score, probabilidad y predicción.</li>
                </ul>

                  <hr>
                  
                  <p>Adaptado a la <strong>normativa ecuatoriana.</strong> <br><strong class="text-danger" style="font-size: 12px;">(Se aplican restricciones segun la cantidad de servicios que se desea en el sistema modular). </p>
              </div>
          </div>

        </div>

      </div>

    </section><!-- /Sección Acerca de -->

        <!-- Seccion OCR predictivo-->
    <section id="about" class="about section">
      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gestión Documental</h2>
        <p>Extracción de datos de documentos y predicción (OCR).</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/gestor.jpg" class="img-fluid" alt="">
            <div class="row">
              <div class="col-md-12">
                <a href="#" class="btn btn-outline-success mt-2 mb-2" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#videoModalGestor"><i style="color: #ffc107;"class="bi bi-play-circle-fill me-1"></i> Ver Video..!</a>
              </div>
            </div>
          </div>  
          <div class="col-lg-7 order-2 order-lg-1 content">
            <h3>CARACTERISTICAS</h3>
              <div class="software-features">
                <h2>Sistema Integral de Gestión Documental + OCR + INTRANET (sin acceso externo)</h2>
                <h3>Módulos navegables:</h3>
                <ul style="font-size: 12px;">
                    <li><strong>Dashboard:</strong> con KPIs en tiempo real, gráficas, evolución mensual del riesgo y alertas.</li>
                    <li><strong>Cargar datos:</strong> importación desde CSV/XLS/XLSX con selección de modo de carga, whitelist de columnas y trazabilidad .</li>
                    <li><strong>Batches:</strong> historial de importaciones con fecha, usuario, modo, estado, total de registros cargados y omitidos.</li>
                    <li><strong>Clientes:</strong> cartera agregada con filtros por oficina, tipo de crédito, categoría vigente, estado y nivel de riesgo ML.</li>
                    <li><strong>Ver / Evaluar cliente:</strong> ficha completa del cliente (oficina, crédito, garantía, sexo, operaciones, monto, saldo, patrimonio, mora).</li>
                    <li><strong>Scoring ML — Modelo predictivo:</strong> clasificación del cliente; muestra ML crudo, probabilidad, calificación de contraste, riesgo.</li>
                    <li><strong>Operaciones crediticias:</strong> créditos por cliente con tipo, garantía, monto, saldo, mora, categoría y estado; filtros de busqueda.</li>
                    <li><strong>Historial de reevaluaciones:</strong> auditoría: crédito, mora, categoría anterior, nivel, score, probabilidad y predicción.</li>
                </ul>

                  <hr>
                  
                  <p>Adaptado a la <strong>normativa ecuatoriana.</strong> <br><strong class="text-danger" style="font-size: 12px;">(Se aplican restricciones segun la cantidad de servicios que se desea en el sistema modular). </p>
              </div>
          </div>

        </div>

      </div>

    </section><!-- /Sección Acerca de -->

    <!-- Sección Servicios contables -->
    <section id="about" class="about section">
      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sistemas de Información</h2>
        <p>Sistemas contables, inventarios, facturación, etc.</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/contable.jpg" class="img-fluid" alt="">
              <a href="./contable_mockup.php" class="btn btn-outline-primary mt-2 mb-2" style="width: 100%;">Ver Demo (mockup)..!</a>
          </div>
          <div class="col-lg-7 order-2 order-lg-1 content">
            <h3>CARACTERISTICAS</h3>
              <div class="software-features">
                  <h2>Multi-empresa / Multi-RUC</h2>
                  <h3>Módulos navegables (barra lateral):</h3>
                  <ul style="font-size: 12px;">
                      <li><strong>Dashboard:</strong> con KPIs, comprobantes recientes y alertas tributarias.</li>
                      <li><strong>Libro diario:</strong> con asientos de partida doble completos (incluye IVA 15%, IESS, retenciones).</li>
                      <li><strong>Plan de cuentas NIIF:</strong> con jerarquía de 4 niveles (1 → 1.1 → 1.1.1 → 1.1.1.01).</li>
                      <li><strong>Mayor general:</strong> por cuenta con saldo acumulado.</li>
                      <li><strong>Facturación electrónica:</strong> con estado de autorización SRI.</li>
                      <li><strong>IVA 15%:</strong> con liquidación del formulario 104.</li>
                      <li><strong>Retenciones en la fuente:</strong> con códigos SRI (303, 312, 320) y resumen form. 103.</li>
                      <li><strong>Declaraciones SRI:</strong> con historial y vencimientos.</li>
                      <li><strong>Balance general:</strong> con verificación de partida doble.</li>
                      <li><strong>Estado de resultados mensual:</strong> con participación trabajadores (15%) e impuesto a la renta (25%).</li>
                  </ul>

                  <hr>
                  
                  <p>Adaptado a la <strong>normativa ecuatoriana</strong>: RUC de 13 dígitos, IVA 15%, retenciones según tabla SRI, formularios 101/103/104, régimen RISE y NIIF PYMES <br><strong class="text-danger" style="font-size: 12px;">(Se aplican restricciones segun la cantidad de servicios que se desea en el sistema modular). </p>
              </div>
          </div>

        </div>

      </div>

    </section><!-- /Sección Acerca de -->


    <!-- Sección Gobernanza Digital-->
    <section id="about" class="about section">
      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sistemas de Gobernanza Digital</h2>
        <p>Sistemas de gestión de riesgos, auditoría interna, etc.</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/gobernanza.jpg" class="img-fluid" alt="">
              <a href="./gobernanza_mockup.php" class="btn btn-outline-primary mt-2 mb-2" style="width: 100%;">Ver Demo (mockup)..!</a>
          </div>
          <div class="col-lg-7 order-2 order-lg-1 content">
            <h3>CARACTERISTICAS</h3>
              <div class="software-features">
            <h2>GeoVerde — Gestión Ambiental</h2>
            <h3>Módulos navegables (barra lateral):</h3>
            <ul style="font-size: 12px;">
                <li><strong>Dashboard:</strong> Vista central con KPIs de cumplimiento global, alertas de obligaciones críticas y registro cronológico de actividades.</li>
                <li><strong>Seguimiento Ambiental:</strong> Control detallado del Plan de Manejo Ambiental (PMA) con gestión de evidencias (fotos/PDF) por área técnica.</li>
                <li><strong>Auditoría e Informes:</strong> Historial de auditorías anuales, verificación de cumplimiento normativo y programación de inspecciones.</li>
                <li><strong>Monitoreos Ambientales:</strong> Registro de parámetros físicos y bióticos (agua, suelo, aire, ruido) con integración de resultados de laboratorio.</li>
                <li><strong>Residuos Sólidos:</strong> Sistema de trazabilidad de desechos con historial de declaraciones trimestrales y control de gestores autorizados.</li>
                <li><strong>Informes Ambientales:</strong> Generación automática de reportes de cumplimiento y documentos oficiales para entidades de control.</li>
                <li><strong>Empresas & Proyectos:</strong> Gestión multi-empresa que permite administrar diferentes sedes o sucursales de forma independiente.</li>
                <li><strong>Calendario:</strong> Visualización mensual de actividades programadas, monitoreos pendientes y fechas de vencimiento de licencias.</li>
            </ul>

                  <hr>
                  
                  <p>Adaptado a la <strong>normativa ecuatoriana</strong>: RUC de 13 dígitos, IVA 15%, retenciones según tabla SRI, formularios 101/103/104, régimen RISE y NIIF PYMES <br><strong class="text-danger" style="font-size: 12px;">(Se aplican restricciones segun la cantidad de servicios que se desea en el sistema modular). </p>
              </div>
          </div>

        </div>

      </div>

    </section><!-- /Sección Acerca de -->



    <!-- Sección Movil-->
    <section id="about" class="about section">
      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sistemas Moviles</h2>
        <p>Aplicaciones moviles para Android e iOS</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/movil_mockup.jpg" class="img-fluid" alt="">
              <a href="./movil_mockup.php" class="btn btn-outline-primary mt-2 mb-2" style="width: 100%;">Ver Demo (mockup)..!</a>
          </div>
          <div class="col-lg-7 order-2 order-lg-1 content">
            <h3>CARACTERISTICAS</h3>
              <div class="software-features">
                <h2>GeoVerde — App Móvil (Mockup)</h2>
                <h3>Módulos y funcionalidades clave:</h3>
                <ul style="font-size: 12px;">
                    <li><strong>Dashboard de Inicio:</strong> Visualización del cumplimiento global (78%), métricas de tareas cumplidas/pendientes y alertas urgentes.</li>
                    <li><strong>Seguimiento Ambiental:</strong> Gestión de obligaciones filtradas por Plan de Manejo, Normativa y Licencias con estados de avance.</li>
                    <li><strong>Detalle de Obligación:</strong> Información técnica específica, marco normativo, historial de cumplimiento y gestión evidencias.</li>
                    <li><strong>Captura de Evidencia:</strong> Herramienta de cámara con captura guiada, asociación automática a obligaciones y metadatos.</li>
                    <li><strong>Sincronización (Sync):</strong> Cola de envío para registros capturados sin internet, con monitoreo de almacenamiento local.</li>
                    <li><strong>Modo Offline-First:</strong> Capacidad nativa de trabajar y almacenar datos localmente para asegurar la operatividad.</li>
                    <li><strong>Gestión de Proyectos:</strong> Navegación y visualización específica según la sucursal o sede operativa seleccionada.</li>
                </ul>

                  <hr>
                  
                  <p>Adaptado a la <strong>normativa ecuatoriana.</strong> <br><strong class="text-danger" style="font-size: 12px;">(Se aplican restricciones segun la cantidad de servicios que se desea en el sistema modular). </p>
              </div>
          </div>

        </div>

      </div>

    </section><!-- /Sección Acerca de -->


        <!-- Sección Educacion-->
    <section id="about" class="about section">
      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sistemas de Control Educativo</h2>
        <p>Sistemas de gestion de control de calidad Educativa + IA</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/academico.jpg" class="img-fluid" alt="">
              <a href="./academico_mockup.php" class="btn btn-outline-primary mt-2 mb-2" style="width: 100%;">Ver Demo (mockup)..!</a>
          </div>
          <div class="col-lg-7 order-2 order-lg-1 content">
            <h3>CARACTERISTICAS</h3>
              <div class="software-features">
                <h2>EduTrack AI (Mockup)</h2>
                <h3>Módulos y funcionalidades clave:</h3>
                  <ul style="font-size: 12px;">
                    <li>Panel KPI con 4 métricas clave: promedio general, estudiantes activos, materias y tasa de aprobación</li>
                    <li>Gráfica de barras comparativa de promedios por materia para los 3 cursos simultáneamente</li>
                    <li>Línea de tendencia mensual con doble eje: evolución de notas y porcentaje de aprobados</li>
                    <li>Donut interactivo de distribución de calificaciones por rango (excelente, bueno, regular, bajo)</li>
                    <li>Mapa de calor materia × semana con código de colores para identificar rendimiento de un vistazo</li>
                    <li>Tabla de estudiantes con avatares, notas de aporte, examen, calificación final, barra de progreso y tendencia</li>
                    <li>Búsqueda en tiempo real de estudiantes por nombre, materia, curso o código</li>
                    <li>Ranking de los 6 mejores estudiantes del grupo con medallas y puntuación</li>
                    <li>Franja de alerta automática para estudiantes en riesgo de reprobación con acciones directas</li>
                    <li>Asistente IA integrado (Claude) con consultas rápidas, chat libre y análisis ejecutivo del grupo</li>
                  </ul>

                  <hr>
                  
                  <p>Adaptado a la <strong>normativa ecuatoriana.</strong> <br><strong class="text-danger" style="font-size: 12px;">(Se aplican restricciones segun la cantidad de servicios que se desea en el sistema modular). </p>
              </div>
          </div>

        </div>

      </div>

    </section><!-- /Sección Acerca de -->




    <!-- Sección de Tecnologías -->
    <section id="clients" class="clients section">

      <!-- Título de la Sección -->
        <div class="container section-title" data-aos="fade-up">
          <h2>TECNOLOGÍAS</h2>
          <p>¿Qué tecnologías usamos?</p>
        </div><!-- Fin del Título de la Sección -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 1000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-10.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-11.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-12.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-13.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-14.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-15.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-16.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-17.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-18.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-19.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-20.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-21.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Sección de Tecnologías -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

  <img src="assets/img/cta-bg.jpg" alt="">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="text-center">
          <a class="cta-btn btn-lg" href="https://wa.link/hczezg"> <i class="bi bi-whatsapp"></i> Call To Action</a>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Call To Action Section -->

  <!-- Modal de Video - Riesgo Crediticio -->
  <div class="modal fade" id="videoModalRisk" tabindex="-1" aria-labelledby="videoModalRiskLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content" style="background: #0d0d0d; border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; overflow: hidden; box-shadow: 0 25px 60px rgba(0,0,0,0.6);">
        <div class="modal-header border-0" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); padding: 1rem 1.5rem;">
          <h5 class="modal-title text-white d-flex align-items-center gap-2" id="videoModalRiskLabel">
            <i class="bi bi-play-circle-fill" style="color: #ffc107;"></i>
            Video — Sistema de Riesgo Crediticio
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body p-0" style="position: relative; background: #000;">
          <!-- Opción 1: Video local (MP4) - Descomenta y ajusta la ruta si tienes un archivo local -->
          <video id="videoPlayerRisk" class="w-100" controls controlsList="nodownload" style="display: block; max-height: 75vh; object-fit: contain;" poster="assets/img/modelo_risk.jpg">
            <source src="assets/video/video_riesgo.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
          </video>

          <!-- Opción 2: Video de YouTube - Descomenta y reemplaza VIDEO_ID si prefieres YouTube -->
          <!-- <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
            <iframe id="ytPlayerRisk" style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;" 
              src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen></iframe>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Modal de Video - Riesgo -->
  <div class="modal fade" id="videoModalRisk" tabindex="-1" aria-labelledby="videoModalGestorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content" style="background: #0d0d0d; border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; overflow: hidden; box-shadow: 0 25px 60px rgba(0,0,0,0.6);">
        <div class="modal-header border-0" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); padding: 1rem 1.5rem;">
          <h5 class="modal-title text-white d-flex align-items-center gap-2" id="videoModalGestorLabel">
            <i class="bi bi-play-circle-fill" style="color: #ffc107;"></i>
            Video — Sistema de Riesgo Crediticio
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body p-0" style="position: relative; background: #000;">
          <!-- Opción 1: Video local (MP4) - Descomenta y ajusta la ruta si tienes un archivo local -->
          <video id="videoPlayerRisk" class="w-100" controls controlsList="nodownload" style="display: block; max-height: 75vh; object-fit: contain;" poster="assets/img/modelo_risk.jpg">
            <source src="assets/video/video_riesgo.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
          </video>

          <!-- Opción 2: Video de YouTube - Descomenta y reemplaza VIDEO_ID si prefieres YouTube -->
          <!-- <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
            <iframe id="ytPlayerRisk" style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;" 
              src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen></iframe>
          </div> -->
        </div>
      </div>
    </div>
  </div>


  <!-- Modal de Video - Gestor Doucmental -->
  <div class="modal fade" id="videoModalGestor" tabindex="-1" aria-labelledby="videoModalGestorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content" style="background: #0d0d0d; border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; overflow: hidden; box-shadow: 0 25px 60px rgba(0,0,0,0.6);">
        <div class="modal-header border-0" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); padding: 1rem 1.5rem;">
          <h5 class="modal-title text-white d-flex align-items-center gap-2" id="videoModalGestorLabel">
            <i class="bi bi-play-circle-fill" style="color: #ffc107;"></i>
            Video — Sistema de Gestión Documental + OCR + LAN
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body p-0" style="position: relative; background: #000;">
          <!-- Opción 1: Video local (MP4) - Descomenta y ajusta la ruta si tienes un archivo local -->
          <video id="videoPlayerRisk" class="w-100" controls controlsList="nodownload" style="display: block; max-height: 75vh; object-fit: contain;" poster="assets/img/gestor.jpg">
            <source src="assets/video/video_gestor.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
          </video>

          <!-- Opción 2: Video de YouTube - Descomenta y reemplaza VIDEO_ID si prefieres YouTube -->
          <!-- <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
            <iframe id="ytPlayerRisk" style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;" 
              src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen></iframe>
          </div> -->
        </div>
      </div>
    </div>
  </div>


  <!-- Script para pausar video al cerrar modal -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const videoModal = document.getElementById('videoModalRisk');
      
      if (videoModal) {
        // Pausar video local al cerrar
        videoModal.addEventListener('hidden.bs.modal', function () {
          const video = document.getElementById('videoPlayerRisk');
          if (video) {
            video.pause();
            video.currentTime = 0;
          }

          // Si usas YouTube, descomenta esto:
          // const ytPlayer = document.getElementById('ytPlayerRisk');
          // if (ytPlayer) { ytPlayer.src = ''; }
        });

        // Si usas YouTube, descomenta esto para cargar el video al abrir:
        // videoModal.addEventListener('shown.bs.modal', function () {
        //   const ytPlayer = document.getElementById('ytPlayerRisk');
        //   if (ytPlayer) { ytPlayer.src = 'https://www.youtube.com/embed/VIDEO_ID?autoplay=1'; }
        // });
      }
    });
  </script>

  <style>
    /* Animación premium para el modal de video */
    #videoModalRisk .modal-content {
      animation: modalSlideIn 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    }
    @keyframes modalSlideIn {
      from { transform: scale(0.85) translateY(30px); opacity: 0; }
      to   { transform: scale(1) translateY(0); opacity: 1; }
    }
    #videoModalRisk .modal-dialog {
      max-width: 900px;
    }
    #videoModalRisk .btn-close-white:hover {
      opacity: 1;
      transform: rotate(90deg);
      transition: all 0.3s ease;
    }
    #videoModalRisk .btn-close-white {
      transition: all 0.3s ease;
    }
    #videoModalRisk .modal-backdrop {
      backdrop-filter: blur(8px);
    }
    #videoModalRisk video:focus {
      outline: none;
    }
  </style>

  </main>


<?php 

include_once './assets/includes/footer-es.php'; // Include the footer file

?>