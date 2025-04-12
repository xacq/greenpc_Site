<?php

// Definición de variables para el artículo
$articleId = 'web';
$articleTitle = 'Web 2025 - Las Nuevas Tendencias';
$audioFile = '../audio/articles/' . $articleId . '.mp3';
$audioTitle = $articleTitle;
$audioImage = '../assets/img/audio.jpg'; // Imagen por defecto si no se proporciona una
$audioDuration = '3.25'; // Podrías calcular esto con PHP o JS

include_once '../assets/includes/head-es-blog.php'; // Include the header file
?>

  <title>Web 2025 - Green PC</title>


<?php
include_once '../assets/includes/header-es-blog.php';
?>




    <section id="hero" class="hero section dark-background">
      <img src="../assets/img/blog/web-2025-bg.jpg" alt="" data-aos="fade-in">
        <div class="container text-center">
          <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xl-6 col-lg-8">
              <h2 class="color-primario">Web 2025</h2>
            </div>
          </div>
          <p data-aos="fade-up" data-aos-delay="200">Las Nuevas Tendencias</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <!-- Contenido principal -->
            <div class="col-lg-8">
                <article>
                    <!-- Encabezado con estilo mejorado -->
                    <header class="mb-5 text-center border-bottom pb-4">
                        <h1 class="display-4 fw-bold mb-3 text-primary">Web 2025 <br> Las Nuevas Tendencias </h1>
                        <div class="d-flex justify-content-center gap-4 text-muted">
                            <span><i class="bi bi-calendar me-2"></i>11 de abril de 2025</span>
                            <span><i class="bi bi-person me-2"></i>Xavier Calvas</span>
                            <span><i class="bi bi-briefcase me-2"></i>CEO - Green PC</span>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-primary me-2">Desarrollo Web</span>
                            <span class="badge bg-secondary me-2">Tecnología</span>
                            <span class="badge bg-info">Tendencias</span>
                        </div>
                    </header>

                    <!-- Reproductor de audio -->
                    <?php include '../assets/includes/player.php'; ?>

                    <!-- Introducción con card -->
                    <section class="mb-5" id="introduccion">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h2 class="h3 mb-4 color-secundario"><strong><i class="bi bi-info-square me-2"></i>Introducción</h2></strong>
                                <p class="lead">
                                    El desarrollo web en 2025 está experimentando una transformación significativa, impulsada por avances tecnológicos y cambios en las expectativas de los usuarios.
                                </p>
                                <p>
                                    Las tendencias actuales reflejan un enfoque hacia la personalización, la eficiencia y la accesibilidad, marcando una nueva era en la creación y gestión de sitios web.
                                </p>
                                <div class="alert alert-secondary mt-3">
                                    <i class="bi bi-lightbulb me-2"></i> <strong>Dato clave:</strong> El 78% de las empresas están adoptando al menos una de estas tendencias en sus proyectos web actuales (The Bridge, 2024).
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Aspectos Relevantes con acordeón interactivo -->
                    <section class="mb-5" id="aspectos">
                        <h2 class="h3 mb-4 d-flex align-items-center  color-secundario"> <strong><i class="bi bi-aspect-ratio me-2"></i>Tendencias Clave</strong></h2>
                        
                        <div class="accordion" id="tendenciasAccordion">
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#tendencia1">
                                        <i class="bi bi-robot text-primary me-2"></i> Inteligencia Artificial (IA) y Aprendizaje Automático
                                    </button>
                                </h3>
                                <div id="tendencia1" class="accordion-collapse collapse" data-bs-parent="#tendenciasAccordion">
                                    <div class="accordion-body">
                                        <p>La integración de IA en el desarrollo web permite la automatización de tareas, personalización de contenido y mejora en la experiencia del usuario. Herramientas como chatbots avanzados y asistentes virtuales se están convirtiendo en estándar en muchos sitios web.</p>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <h4 class="h6">Aplicaciones comunes:</h4>
                                                <ul class="small">
                                                    <li>Generación automática de código</li>
                                                    <li>Optimización de contenido</li>
                                                    <li>Pruebas automatizadas</li>
                                                    <li>Personalización en tiempo real</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card bg-light border-0">
                                                    <div class="card-body">
                                                        <h4 class="h6">Ejemplo práctico:</h4>
                                                        <p class="small mb-0">Sitios que adaptan su diseño y contenido basado en el comportamiento previo del usuario, aumentando la conversión hasta un 35%.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#tendencia2">
                                        <i class="bi bi-speedometer2 text-primary me-2"></i> WebAssembly (WASM)
                                    </button>
                                </h3>
                                <div id="tendencia2" class="accordion-collapse collapse" data-bs-parent="#tendenciasAccordion">
                                    <div class="accordion-body">
                                        <p>Esta tecnología permite ejecutar código de alto rendimiento en navegadores, mejorando la velocidad y eficiencia de las aplicaciones web, especialmente aquellas que requieren procesamiento intensivo.</p>
                                        <div class="mt-3">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Aplicación</th>
                                                            <th>Beneficio</th>
                                                            <th>Ejemplo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Edición multimedia</td>
                                                            <td>90% más rápido que JS</td>
                                                            <td>Editores de video online</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Juegos en navegador</td>
                                                            <td>Rendimiento cercano a nativo</td>
                                                            <td>Plataformas de gaming</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Aplicaciones CAD</td>
                                                            <td>Procesamiento complejo</td>
                                                            <td>Diseño 3D en web</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#tendencia3">
                                        <i class="bi bi-phone text-primary me-2"></i> Aplicaciones Web Progresivas (PWA)
                                    </button>
                                </h3>
                                <div id="tendencia3" class="accordion-collapse collapse" data-bs-parent="#tendenciasAccordion">
                                    <div class="accordion-body">
                                        <p>Las PWA ofrecen experiencias similares a las aplicaciones nativas, con capacidades offline y tiempos de carga rápidos, mejorando la accesibilidad y usabilidad en dispositivos móviles.</p>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <h4 class="h6">Ventajas clave:</h4>
                                                <ul class="small">
                                                    <li>Funcionamiento offline</li>
                                                    <li>Notificaciones push</li>
                                                    <li>Instalación sin tienda de apps</li>
                                                    <li>Actualizaciones automáticas</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card bg-light border-0">
                                                    <div class="card-body">
                                                        <h4 class="h6">Impacto en métricas:</h4>
                                                        <ul class="small mb-0">
                                                            <li>+25% en tiempo de sesión</li>
                                                            <li>+40% en conversiones móviles</li>
                                                            <li>-80% en uso de datos</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#tendencia4">
                                        <i class="bi bi-universal-access text-primary me-2"></i> Diseño Sostenible y Accesible
                                    </button>
                                </h3>
                                <div id="tendencia4" class="accordion-collapse collapse" data-bs-parent="#tendenciasAccordion">
                                    <div class="accordion-body">
                                        <p>Se enfatiza en la creación de sitios web que sean accesibles para todos los usuarios, incluyendo aquellos con discapacidades, y que minimicen el impacto ambiental mediante prácticas de diseño sostenible.</p>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <h4 class="h6">Prácticas de sostenibilidad:</h4>
                                                <ul class="small">
                                                    <li>Optimización de recursos</li>
                                                    <li>Diseño de bajo consumo</li>
                                                    <li>Hosting ecológico</li>
                                                    <li>Minimización de transferencia de datos</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="h6">Estándares de accesibilidad:</h4>
                                                <ul class="small">
                                                    <li>WCAG 2.2</li>
                                                    <li>Navegación por teclado</li>
                                                    <li>Contraste adecuado</li>
                                                    <li>Texto alternativo</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#tendencia5">
                                        <i class="bi bi-code-square text-primary me-2"></i> Desarrollo Low-Code/No-Code
                                    </button>
                                </h3>
                                <div id="tendencia5" class="accordion-collapse collapse" data-bs-parent="#tendenciasAccordion">
                                    <div class="accordion-body">
                                        <p>Plataformas que permiten la creación de sitios web sin necesidad de programación están ganando popularidad, democratizando el acceso al desarrollo web y permitiendo a más personas construir y gestionar sus propias plataformas digitales.</p>
                                        <div class="mt-3">
                                            <h4 class="h6">Plataformas destacadas:</h4>
                                            <div class="d-flex flex-wrap">
                                                <a href="https://webflow.com/" target="_blank"><span class="badge bg-primary tech-badge"><i class="bi bi-check-circle me-1"></i>Webflow</span> </a> 
                                                <a href="https://bubble.io/"  target="_blank"> <span class="badge bg-primary tech-badge"><i class="bi bi-check-circle me-1"></i>Bubble</span></a>
                                                <a href="https://www.adalo.com/"  target="_blank"> <span class="badge bg-primary tech-badge"><i class="bi bi-check-circle me-1"></i>Adalo</span> </a>
                                                <a href="https://www.glideapps.com/"  target="_blank"> <span class="badge bg-primary tech-badge"><i class="bi bi-check-circle me-1"></i>Glide</span></a>
                                                <a href="https://www.outsystems.com/"  target="_blank"> <span class="badge bg-primary tech-badge"><i class="bi bi-check-circle me-1"></i>OutSystems</span></a>
                                            </div>
                                            <div class="alert alert-secondary mt-3 small">
                                                <i class="bi bi-exclamation-triangle me-2"></i> Estas plataformas no reemplazan el desarrollo tradicional, pero son ideales para prototipado rápido y proyectos simples.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Aplicaciones con timeline visual -->
                    <section class="mb-5" id="aplicaciones">
                        <h2 class="h3 mb-4 color-secundario"><strong><i class="bi bi-app-indicator me-2"></i>Aplicaciones por Sector</h2></strong>
                        <p class="mb-4">Las tendencias actuales en desarrollo web tienen aplicaciones en diversos sectores:</p>
                        
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="card border-0 shadow-sm mb-3">
                                    <div class="card-body">
                                        <h3 class="h5 text-primary"><i class="bi bi-mortarboard me-2"></i>Educación</h3>
                                        <p>Plataformas educativas utilizan IA para personalizar el aprendizaje y proporcionar recursos adaptados a las necesidades de cada estudiante.</p>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge bg-light text-dark me-2 mb-2">Aprendizaje adaptativo</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Tutores virtuales</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Evaluación automática</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="card border-0 shadow-sm mb-3">
                                    <div class="card-body">
                                        <h3 class="h5 text-primary"><i class="bi bi-cart me-2"></i>Comercio Electrónico</h3>
                                        <p>Sitios de e-commerce implementan PWA y herramientas de IA para mejorar la experiencia de compra y ofrecer recomendaciones personalizadas.</p>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge bg-light text-dark me-2 mb-2">Carrito offline</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Recomendaciones IA</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Pagos rápidos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="card border-0 shadow-sm mb-3">
                                    <div class="card-body">
                                        <h3 class="h5 text-primary"><i class="bi bi-heart-pulse me-2"></i>Salud</h3>
                                        <p>Aplicaciones web en el sector salud utilizan tecnologías avanzadas para ofrecer servicios como consultas virtuales y seguimiento de pacientes en tiempo real.</p>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge bg-light text-dark me-2 mb-2">Telemedicina</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Historial accesible</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Diagnóstico asistido</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h3 class="h5 text-primary"><i class="bi bi-building me-2"></i>Gobierno</h3>
                                        <p>Portales gubernamentales adoptan prácticas de diseño accesible y sostenible para servir mejor a la ciudadanía y reducir la huella ambiental.</p>
                                        <div class="d-flex flex-wrap">
                                            <span class="badge bg-light text-dark me-2 mb-2">WCAG 2.2</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Hosting verde</span>
                                            <span class="badge bg-light text-dark me-2 mb-2">Servicios inclusivos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Conclusiones con estilo destacado -->
                    <section class="mb-5" id="conclusiones">
                        <div class="card border-primary">
                            <div class="card-header bg-secondary text-white">
                                <h2 class="h4 mb-0"><i class="bi bi-check-circle me-2"></i>Conclusiones</h2>
                            </div>
                            <div class="card-body">
                                <p class="lead">
                                    El desarrollo web en 2025 está marcado por una convergencia de tecnologías que buscan mejorar la eficiencia, accesibilidad y personalización de los sitios web.
                                </p>
                                <p>
                                    La adopción de IA, PWA, WebAssembly y plataformas low-code/no-code está redefiniendo la manera en que se construyen y experimentan las aplicaciones web. Es esencial para los desarrolladores y empresas mantenerse actualizados con estas tendencias para ofrecer experiencias digitales relevantes y efectivas.
                                </p>
                                <div class="alert alert-secondary mt-3">
                                    <i class="bi bi-graph-up me-2"></i> <strong>Perspectiva:</strong> Se espera que estas tendencias continúen evolucionando, con un mayor enfoque en la integración de realidad aumentada y metaverso en los próximos años.
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Bibliografía con estilo mejorado -->
                    <section class="mb-5" id="bibliografia">
                        <h2 class="h3 mb-4 color-secundario"><strong><i class="bi bi-journal-text me-2"></i>Bibliografía</h2></strong>
                        
                        <div class="list-group">
                            <a href="https://thebridge.tech/blog/tendecias-desarrollo-web/" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Top 5 tendencias de Desarrollo Web para el año 2025</h5>
                                    <small class="text-muted">The Bridge, 2024</small>
                                </div>
                                <p class="mb-1 small text-muted">https://thebridge.tech/blog/tendecias-desarrollo-web/</p>
                            </a>
                            
                            <a href="https://www.arsys.es/blog/tendencias-desarrollo-web" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Las 5 tendencias de desarrollo web para 2025</h5>
                                    <small class="text-muted">Arsys, 2024</small>
                                </div>
                                <p class="mb-1 small text-muted">https://www.arsys.es/blog/tendencias-desarrollo-web</p>
                            </a>
                            
                            <a href="https://www.hostgator.mx/blog/tendencias-del-desarrollo-web/" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Futuro del Desarrollo Web en 2025</h5>
                                    <small class="text-muted">HostGator, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://www.hostgator.mx/blog/tendencias-del-desarrollo-web/</p>
                            </a>
                            
                            <a href="https://www.latevaweb.com/diseno-web-2025" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Tendencias en diseño web 2025</h5>
                                    <small class="text-muted">La Teva Web, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://www.latevaweb.com/diseno-web-2025</p>
                            </a>
                            
                            <a href="https://www.uax.com/blog/tendencias-en-desarrollo-web" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Tendencias en desarrollo y diseño web en 2025</h5>
                                    <small class="text-muted">UAX, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://www.uax.com/blog/tendencias-en-desarrollo-web</p>
                            </a>
                        </div>
                    </section>

                    <!-- Compartir en redes sociales -->
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
                                <a class="link-primario" href="#aspectos"><i class="bi bi-arrow-right me-2"></i>Tendencias Clave</a>
                                <a class="link-primario" href="#aplicaciones"><i class="bi bi-arrow-right me-2"></i>Aplicaciones</a>
                                <a class="link-primario" href="#conclusiones"><i class="bi bi-arrow-right me-2"></i>Conclusiones</a>
                                <a class="link-primario" href="#bibliografia"><i class="bi bi-arrow-right me-2"></i>Bibliografía</a>
                            </nav>
                        </div>
                    </div>

                    <!-- Artículos relacionados -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h3 class="h5 mb-0 color-secundario"><i class="bi bi-collection me-2"></i>Artículos Relacionados</h3>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a href="https://www.campusmvp.es/recursos/post/tendencias-en-programacion-javascript-para-2025.aspx" target="_blank" class="list-group-item list-group-item-action border-0 link-primario">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">JavaScript en 2025</h5>
                                        <small class="text-muted">Ene 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Nuevas características y tendencias en el lenguaje más popular de la web</p>
                                </a>
                                <a href="https://neoattack.com/blog/tendencias-ux/" target="_blank" class="list-group-item list-group-item-action border-0 link-primario">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">UI/UX Tendencias 2025</h5>
                                        <small class="text-muted">Feb 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Cómo las nuevas tendencias están cambiando la interacción usuario-web</p>
                                </a>
                                <a href="./ciber-v1.php" target= "_blank" class="list-group-item list-group-item-action border-0 link-primario">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">Ciberseguridad en la era de la IA</h5>
                                        <small class="text-muted">Mar 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Protegiendo tus aplicaciones contra las nuevas amenazas</p>
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

  </main>


<?php 

    include_once '../assets/includes/footer-es-blog.php';

?>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const audioPlayer = new Audio('audio/article-audio.mp3');
    const playPauseBtn = document.querySelector('.btn-audio-play-pause');
    const playBtn = document.querySelector('.btn-audio-play');
    const backwardBtn = document.querySelector('.btn-audio-backward');
    const forwardBtn = document.querySelector('.btn-audio-forward');
    const progressBar = document.querySelector('.progress-bar');
    const currentTimeEl = document.querySelector('.audio-current-time');
    const durationEl = document.querySelector('.audio-duration');
    const speedBtns = document.querySelectorAll('[data-speed]');
    
    // Formatear tiempo a MM:SS
    function formatTime(seconds) {
        const mins = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${mins}:${secs < 10 ? '0' : ''}${secs}`;
    }
    
    // Actualizar barra de progreso y tiempo
    function updateProgress() {
        const { currentTime, duration } = audioPlayer;
        const progressPercent = (currentTime / duration) * 100;
        progressBar.style.width = `${progressPercent}%`;
        currentTimeEl.textContent = formatTime(currentTime);
    }
    
    // Actualizar duración total
    audioPlayer.addEventListener('loadedmetadata', () => {
        durationEl.textContent = formatTime(audioPlayer.duration);
    });
    
    // Play/Pause
    function togglePlayPause() {
        if (audioPlayer.paused) {
            audioPlayer.play();
            playPauseBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
            playBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
        } else {
            audioPlayer.pause();
            playPauseBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
            playBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
        }
    }
    
    playPauseBtn.addEventListener('click', togglePlayPause);
    playBtn.addEventListener('click', togglePlayPause);
    
    // Retroceder 15 segundos
    backwardBtn.addEventListener('click', () => {
        audioPlayer.currentTime = Math.max(0, audioPlayer.currentTime - 15);
    });
    
    // Adelantar 15 segundos
    forwardBtn.addEventListener('click', () => {
        audioPlayer.currentTime = Math.min(audioPlayer.duration, audioPlayer.currentTime + 15);
    });
    
    // Click en la barra de progreso
    document.querySelector('.progress').addEventListener('click', (e) => {
        const width = e.target.clientWidth;
        const clickX = e.offsetX;
        const duration = audioPlayer.duration;
        audioPlayer.currentTime = (clickX / width) * duration;
    });
    
    // Actualizar progreso continuamente
    audioPlayer.addEventListener('timeupdate', updateProgress);
    
    // Cambiar velocidad
    speedBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const speed = parseFloat(this.getAttribute('data-speed'));
            audioPlayer.playbackRate = speed;
            
            // Actualizar UI
            document.querySelector('#audioSpeedDropdown').textContent = `Velocidad: ${speed}x`;
            speedBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });
    
    // Reiniciar icono cuando termina
    audioPlayer.addEventListener('ended', () => {
        playPauseBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
        playBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
    });
});
</script>
