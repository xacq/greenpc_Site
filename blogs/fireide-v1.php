<?php

// Definición de variables para el artículo
$articleId = 'firebase';
$articleTitle = 'Firebase Studio - El IDE del Futuro';
$audioFile = '../audio/articles/' . $articleId . '.mp3';
$audioTitle = $articleTitle;
$audioImage = '../assets/img/audio.jpg'; // Imagen por defecto si no se proporciona una
$audioDuration = '3.25'; // Podrías calcular esto con PHP o JS

include_once '../assets/includes/head-es-blog.php';
?>

<title>Firebase Studio: El IDE del Futuro</title>

<?php
  include_once '../assets/includes/header-es-blog.php';
?>

    <section id="hero" class="hero section dark-background">
        <img src="../assets/img/blog/firebase-bg.png" alt="" data-aos="fade-in">
            <div class="container text-center">
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8 ">
                        <h2 class="color-primario">Firebase Studio</h2>
                    </div>
                </div>
            <p data-aos="fade-up" data-aos-delay="200">El IDE del Futuro</p>
        </div>
    </section>


    <div class="container py-5">
        <div class="row">
            <!-- Contenido principal -->
            <div class="col-lg-8">
                <article>
                    <!-- Encabezado con estilo mejorado -->
                    <header class="mb-5 text-center border-bottom pb-4">
                        <h1 class="display-4 fw-bold mb-3 text-primary">Firebase Studio: El IDE del Futuro</h1>
                        <div class="d-flex justify-content-center gap-4 text-muted">
                            <span><i class="bi bi-calendar me-2"></i>11 de abril de 2025</span>
                            <span><i class="bi bi-person me-2"></i>Xavier Calvas</span>
                            <span><i class="bi bi-briefcase me-2"></i>Desarrollador Full Stack - Green PC</span>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-primary me-2">Firebase</span>
                            <span class="badge bg-secondary me-2">Desarrollo Web</span>
                            <span class="badge bg-info">Inteligencia Artificial</span>
                        </div>
                    </header>

                    <!-- Reproductor de audio -->
                    <?php include '../assets/includes/player.php'; ?>

                    <!-- Introducción con card -->
                    <section class="mb-5" id="introduccion">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h2 class="h3 mb-4 color-secundario"><strong><i class="bi bi-info-circle me-2"></i>Introducción</h2></strong>
                                <p class="lead">
                                    En abril de 2025, Google presentó Firebase Studio, una evolución significativa en el desarrollo de aplicaciones.
                                </p>
                                <p>
                                    Esta plataforma unifica herramientas como Project IDX, Genkit y Gemini en Firebase, ofreciendo un entorno de desarrollo en la nube que permite a los desarrolladores crear aplicaciones completas con asistencia de inteligencia artificial (IA) directamente desde el navegador.
                                </p>
                                <div class="alert alert-secondary mt-3">
                                    <i class="bi bi-lightbulb me-2"></i> <strong>Novedad:</strong> Firebase Studio representa la mayor actualización de la plataforma Firebase desde su lanzamiento inicial.
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Características principales -->
                    <section class="mb-5" id="caracteristicas">
                        <h2 class="h3 mb-4 color-secundario d-flex align-items-center"><strong><i class="bi bi-stars me-2"></i>Características Principales</h2></strong>
                        
                        <div class="row g-4">
                            <!-- Prototipado Rápido -->
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm hover-shadow feature-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="bi bi-lightning-charge-fill text-white fs-4"></i>
                                            </div>
                                            <h3 class="h5 mb-0">Prototipado Rápido</h3>
                                        </div>
                                        <p>Con el agente de prototipado de aplicaciones, los desarrolladores pueden generar prototipos funcionales utilizando lenguaje natural, imágenes o bocetos.</p>
                                        <div class="mt-3">
                                            <span class="badge bg-light text-dark tech-badge">Lenguaje natural</span>
                                            <span class="badge bg-light text-dark tech-badge">Bocetos a código</span>
                                            <span class="badge bg-light text-dark tech-badge">Minutos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Asistencia de IA -->
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm hover-shadow feature-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="bi bi-robot text-white fs-4"></i>
                                            </div>
                                            <h3 class="h5 mb-0">Asistencia de IA con Gemini</h3>
                                        </div>
                                        <p>Gemini en Firebase proporciona asistencia continua en tareas como escritura de código, depuración, pruebas y documentación.</p>
                                        <div class="mt-3">
                                            <span class="badge bg-light text-dark tech-badge">Generación de código</span>
                                            <span class="badge bg-light text-dark tech-badge">Depuración</span>
                                            <span class="badge bg-light text-dark tech-badge">Documentación</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Entorno Personalizable -->
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm hover-shadow feature-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="bi bi-sliders text-white fs-4"></i>
                                            </div>
                                            <h3 class="h5 mb-0">Entorno Personalizable</h3>
                                        </div>
                                        <p>Basado en Code OSS y ejecutado en Google Cloud, permite personalización completa del entorno usando Nix.</p>
                                        <div class="mt-3">
                                            <span class="badge bg-light text-dark tech-badge">Code OSS</span>
                                            <span class="badge bg-light text-dark tech-badge">Google Cloud</span>
                                            <span class="badge bg-light text-dark tech-badge">Nix</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Integración Firebase -->
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm hover-shadow feature-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="bi bi-plug text-white fs-4"></i>
                                            </div>
                                            <h3 class="h5 mb-0">Integración con Firebase</h3>
                                        </div>
                                        <p>Integración nativa con servicios como Authentication, Firestore, Cloud Functions y Hosting.</p>
                                        <div class="mt-3">
                                            <span class="badge bg-light text-dark tech-badge">Firestore</span>
                                            <span class="badge bg-light text-dark tech-badge">Cloud Functions</span>
                                            <span class="badge bg-light text-dark tech-badge">Hosting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Demostración en video -->
                    <section class="mb-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h3 class="h5 mb-0"><i class="bi bi-play-circle me-2"></i>Vista Rápida de Firebase Studio</h3>
                            </div>
                            <div class="card-body">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/dAE4YloBUgI" allowfullscreen></iframe>
                            </div>
                                <div class="mt-3 small text-muted">
                                    Demostración de las capacidades de prototipado rápido y asistencia de IA en Firebase Studio.
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Aplicaciones con timeline visual -->
                    <section class="mb-5" id="aplicaciones">
                        <h2 class="h3 mb-4 color-secundario"><strong><i class="bi bi-app-indicator me-2"></i>Aplicaciones Prácticas</h2></strong>
                        <p class="mb-4">Firebase Studio se adapta a diversas necesidades de desarrollo:</p>
                        
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="card border-0 shadow-sm mb-3">
                                    <div class="card-body">
                                        <h3 class="h5 text-primary"><i class="bi bi-robot me-2"></i>Desarrollo de Aplicaciones IA</h3>
                                        <p>Facilita la creación de aplicaciones que integran funcionalidades de IA, como chatbots, asistentes virtuales y sistemas de recomendación.</p>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge bg-light text-dark me-2 mb-2">Chatbots</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Asistentes</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Recomendaciones</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="card border-0 shadow-sm mb-3">
                                    <div class="card-body">
                                        <h3 class="h5 text-primary"><i class="bi bi-mortarboard me-2"></i>Educación y Formación</h3>
                                        <p>Su entorno accesible y asistido por IA lo convierte en una herramienta ideal para la enseñanza de programación.</p>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge bg-light text-dark me-2 mb-2">Aprendizaje</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Bootcamps</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Cursos online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h3 class="h5 text-primary"><i class="bi bi-building me-2"></i>Proyectos Empresariales</h3>
                                        <p>Permite desarrollar y desplegar aplicaciones de manera eficiente, con soporte para pruebas, monitoreo y escalabilidad.</p>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge bg-light text-dark me-2 mb-2">SaaS</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">APIs</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Microservicios</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Comparativa con otros IDEs -->
                    <section class="mb-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h3 class="h5 mb-0"><i class="bi bi-clipboard2-data me-2"></i>Firebase Studio vs. Otros IDEs</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Característica</th>
                                                <th>Firebase Studio</th>
                                                <th>VS Code</th>
                                                <th>IntelliJ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Asistencia de IA integrada</td>
                                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                                <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                                                <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Prototipado con lenguaje natural</td>
                                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                                <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                                                <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Integración nativa con Firebase</td>
                                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                                <td><i class="bi bi-dash-circle-fill text-warning"></i></td>
                                                <td><i class="bi bi-dash-circle-fill text-warning"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Desarrollo en la nube</td>
                                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                                <td><i class="bi bi-dash-circle-fill text-warning"></i></td>
                                                <td><i class="bi bi-dash-circle-fill text-warning"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="alert alert-secondary mt-3 small">
                                    <i class="bi bi-info-circle me-2"></i> Firebase Studio combina lo mejor de los IDEs tradicionales con capacidades de IA y desarrollo en la nube.
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Conclusiones con estilo destacado -->
                    <section class="mb-5" id="conclusiones">
                        <div class="card ">
                            <div class="card-header bg-secondary text-white">
                                <h2 class="h4 mb-0"><i class="bi bi-check-circle me-2"></i>Conclusiones</h2>
                            </div>
                            <div class="card-body">
                                <p class="lead">
                                    Firebase Studio representa un avance significativo en el desarrollo de aplicaciones, integrando herramientas de IA y servicios en la nube en un entorno unificado.
                                </p>
                                <p>
                                    Su capacidad para acelerar el ciclo de desarrollo, facilitar la colaboración y adaptarse a diversas necesidades lo posiciona como una herramienta esencial para los desarrolladores en la era de la inteligencia artificial.
                                </p>
                                <div class="alert alert-secondary mt-3">
                                    <i class="bi bi-exclamation-triangle me-2"></i> <strong>Futuro:</strong> Se espera que Firebase Studio continúe evolucionando con más integraciones y capacidades de IA en los próximos años.
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Bibliografía con estilo mejorado -->
                    <section class="mb-5" id="bibliografia">
                        <h2 class="h3 mb-4 color-secundario"><strong><i class="bi bi-journal-text me-2"></i>Bibliografía</h2></strong>
                        
                        <div class="list-group">
                            <a href="https://firebase.google.com/docs/studio" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Firebase Studio</h5>
                                    <small class="text-muted">Google Firebase, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://firebase.google.com/docs/studio</p>
                            </a>
                            
                            <a href="https://firebase.blog/posts/2025/04/introducing-firebase-studio/" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Introducing Firebase Studio</h5>
                                    <small class="text-muted">Davis & Boateng, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://firebase.blog/posts/2025/04/introducing-firebase-studio/</p>
                            </a>
                            
                            <a href="https://cloud.google.com/blog/products/application-development/firebase-studio-lets-you-build-full-stack-ai-apps-with-gemini" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Firebase Studio lets you build full-stack AI apps with Gemini</h5>
                                    <small class="text-muted">Google Cloud, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://cloud.google.com/blog/products/application-development/firebase-studio-lets-you-build-full-stack-ai-apps-with-gemini</p>
                            </a>
                            
                            <a href="https://firebase.google.com/docs/studio/idx-is-firebase-studio" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Project IDX is now part of Firebase Studio</h5>
                                    <small class="text-muted">Google Firebase, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://firebase.google.com/docs/studio/idx-is-firebase-studio</p>
                            </a>
                        </div>
                    </section>

                    <?php include '../assets/includes/like-share.php'; ?>

                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-sidebar">
                    <!-- Índice del artículo -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h3 class="h5 mb-0 color-secundario"><i class="bi bi-list-ul me-2"></i>Índice</h3>
                        </div>
                        <div class="card-body">
                            <nav class="nav flex-column">
                                <a class="link-primario" href="#introduccion"><i class="bi bi-arrow-right me-2"></i>Introducción</a>
                                <a class="link-primario" href="#caracteristicas"><i class="bi bi-arrow-right me-2"></i>Características</a>
                                <a class="link-primario" href="#aplicaciones"><i class="bi bi-arrow-right me-2"></i>Aplicaciones</a>
                                <a class="link-primario" href="#conclusiones"><i class="bi bi-arrow-right me-2"></i>Conclusiones</a>
                                <a class="link-primario" href="#bibliografia"><i class="bi bi-arrow-right me-2"></i>Bibliografía</a>
                            </nav>
                        </div>
                    </div>

                    <!-- Tecnologías integradas -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h3 class="h5 mb-0 color-secundario"><i class="bi bi-puzzle me-2"></i>Tecnologías Integradas</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <span class="badge bg-primary tech-badge">Project IDX</span>
                                <span class="badge bg-primary tech-badge">Genkit</span>
                                <span class="badge bg-primary tech-badge">Gemini</span>
                                <span class="badge bg-primary tech-badge">Firestore</span>
                                <span class="badge bg-primary tech-badge">Cloud Functions</span>
                                <span class="badge bg-primary tech-badge">Authentication</span>
                                <span class="badge bg-primary tech-badge">Code OSS</span>
                                <span class="badge bg-primary tech-badge">Nix</span>
                            </div>
                        </div>
                    </div>

                    <!-- Artículos relacionados -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h3 class="h5 mb-0 color-secundario"><i class="bi bi-collection me-2"></i>Artículos Relacionados</h3>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush ">
                                <a href="https://firebase.google.com/docs/studio/get-started?hl=es-419" class="list-group-item list-group-item-action border-0 link-primario">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">Guía completa de Firebase en 2025</h5>
                                        <small class="text-muted">Abr 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Todo lo que necesitas saber sobre la plataforma Firebase</p>
                                </a>
                                <a href="https://cloud.google.com/ai/gemini?hl=es" class="list-group-item list-group-item-action border-0 link-primario">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">Gemini para desarrolladores</h5>
                                        <small class="text-muted">Mar 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Cómo aprovechar la IA de Google en tus proyectos</p>
                                </a>
                                <a href="https://www.datacamp.com/es/blog/best-cloud-ide" class="list-group-item list-group-item-action border-0 link-primario" >
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">IDEs basados en la nube</h5>
                                        <small class="text-muted">Ene 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Comparativa de entornos de desarrollo en la nube</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Suscripción -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-secondary text-white">
                            <h3 class="h5 mb-0"><i class="bi bi-envelope me-2"></i>Recibe más contenido</h3>
                        </div>
                        <div class="card-body">
                            <p class="small">Suscríbete para recibir artículos similares directamente en tu correo.</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-sm" placeholder="Tu correo electrónico">
                                </div>
                                <button type="submit" class="btn btn-sm btn-secundario w-100">Suscribirme</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php 
include_once('../assets/includes/footer-es-blog.php');
?>


<script>
    // Barra de progreso de lectura
    window.onscroll = function() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    };

    // Inicializar tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>