<?php

// Definición de variables para el artículo
$articleId = 'qwen';
$articleTitle = 'QWEN - La Revolución China en IA';
$audioFile = '../audio/articles/' . $articleId . '.mp3';
$audioTitle = $articleTitle;
$audioImage = '../assets/img/audio.jpg'; // Imagen por defecto si no se proporciona una
$audioDuration = '3.25'; // Podrías calcular esto con PHP o JS

    include '../assets/includes/head-es-blog.php';
?>

  <title>QWEN - Green PC</title>

  <?php
include_once '../assets/includes/header-es-blog.php';
?>


    <section id="hero" class="hero section dark-background">
        <img src="../assets/img/blog/qwen-bg.jpg" alt="" data-aos="fade-in">
        <div class="container text-center">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xl-6 col-lg-8">
                <h2 class="color-primario">Q W E N</h2>
            </div>
            </div>

            <p data-aos="fade-up" data-aos-delay="200">La Revolución China en IA</p>
        </div>
    </section>


    <div class="container py-5">
        <div class="row">
            <!-- Contenido principal -->
            <div class="col-lg-8">
                <article>
                    <!-- Encabezado con estilo mejorado -->
                    <header class="mb-3 text-center border-bottom pb-4">
                        <h1 class="display-4 fw-bold mb-3 color-primario">QWEN <br>La Revolución China en IA</h1>
                        <div class="d-flex justify-content-center gap-4 text-muted">
                            <span><i class="bi bi-calendar me-2"></i>11 de abril de 2025</span>
                            <span><i class="bi bi-person me-2"></i>Xavier Calvas</span>
                            <span><i class="bi bi-briefcase me-2"></i>Especialista en IA - Green PC</span>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-primary me-2">Inteligencia Artificial</span>
                            <span class="badge bg-secondary me-2">Modelos de Lenguaje</span>
                            <span class="badge bg-info">Tecnología China</span>
                        </div>
                    </header>


                    <!-- Reproductor de audio -->
                <?php include '../assets/includes/player.php'; ?>

                    <!-- Introducción con card -->
                    <section class="mb-3" id="introduccion">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h2 class="h3 mb-3 color-secundario"><strong><i class="bi bi-info-square me-2"></i>Introducción</strong></h2>
                                <p class="lead">
                                    En los últimos años, China ha emergido como un actor clave en el desarrollo de inteligencia artificial (IA), con empresas como Alibaba liderando la innovación.
                                </p>
                                <p>
                                    Su modelo de lenguaje, Qwen (también conocido como Tongyi Qianwen), representa un avance significativo en el campo de los modelos de lenguaje de gran escala (LLM), destacándose por su rendimiento y versatilidad en diversas aplicaciones.
                                </p>
                                <div class="alert alert-secondary mt-3 ">
                                    <i class="bi bi-lightbulb me-2"></i> <strong>¿Sabías qué?</strong> Qwen significa "Qianwen" en chino, que se traduce como "mil preguntas", reflejando su capacidad para responder a una amplia gama de consultas.
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Aspectos Relevantes con acordeón interactivo -->
                    <section class="mb-3" id="aspectos">
                        <h2 class="h3 mb-3 color-secundario d-flex align-items-center">
                            <strong><i class="bi bi-aspect-ratio me-2"></i>Aspectos Clave de QWEN </strong>
                        </h2>
                        
                        <div class="accordion" id="aspectosAccordion">
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#aspecto1">
                                        <i class="bi bi-graph-up-arrow text-primary me-2"></i> Desarrollo y Evolución
                                    </button>
                                </h3>
                                <div id="aspecto1" class="accordion-collapse collapse" data-bs-parent="#aspectosAccordion">
                                    <div class="accordion-body">
                                        Qwen fue lanzado inicialmente en 2023 y ha evolucionado hasta su versión más reciente, Qwen 2.5-Max, presentada en enero de 2025. Esta versión ha demostrado superar a modelos reconocidos como DeepSeek-V3 en diversas pruebas de rendimiento (Alibaba, 2025).
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#aspecto2">
                                        <i class="bi bi-diagram-3 text-primary me-2"></i> Arquitectura Avanzada
                                    </button>
                                </h3>
                                <div id="aspecto2" class="accordion-collapse collapse" data-bs-parent="#aspectosAccordion">
                                    <div class="accordion-body">
                                        Qwen 2.5-Max utiliza una arquitectura de mezcla de expertos (MoE), entrenada con más de 20 billones de tokens y afinada mediante técnicas de aprendizaje reforzado con retroalimentación humana (RLHF), lo que mejora su capacidad de comprensión y generación de texto (Qwen Team, 2025).
                                        <div class="mt-3">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Versión</th>
                                                            <th>Tokens entrenados</th>
                                                            <th>Arquitectura</th>
                                                            <th>Lanzamiento</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>QWEN 1.0</td>
                                                            <td>5 billones</td>
                                                            <td>Transformer</td>
                                                            <td>2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td>QWEN 2.0</td>
                                                            <td>12 billones</td>
                                                            <td>Transformer++</td>
                                                            <td>2024</td>
                                                        </tr>
                                                        <tr class="table-primary">
                                                            <td>QWEN 2.5-Max</td>
                                                            <td>20+ billones</td>
                                                            <td>MoE</td>
                                                            <td>2025</td>
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
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#aspecto3">
                                        <i class="bi bi-collection text-primary me-2"></i> Multimodalidad
                                    </button>
                                </h3>
                                <div id="aspecto3" class="accordion-collapse collapse" data-bs-parent="#aspectosAccordion">
                                    <div class="accordion-body">
                                        La familia Qwen incluye modelos especializados como Qwen-VL para procesamiento de imágenes, Qwen-Audio para audio, Qwen-Coder para programación y Qwen-Math para razonamiento matemático, ampliando su aplicabilidad en distintos campos (Alibaba Cloud, 2025).
                                        <div class="row mt-3">
                                            <div class="col-md-6 mb-3">
                                                <div class="card h-100 border-0 shadow-sm">
                                                    <div class="card-body text-center">
                                                        <i class="bi bi-image text-primary fs-1 mb-2"></i>
                                                        <h4 class="h5">QWEN-VL</h4>
                                                        <p class="small text-muted">Procesamiento avanzado de imágenes y visión por computadora</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="card h-100 border-0 shadow-sm">
                                                    <div class="card-body text-center">
                                                        <i class="bi bi-mic text-primary fs-1 mb-2"></i>
                                                        <h4 class="h5">QWEN-Audio</h4>
                                                        <p class="small text-muted">Reconocimiento y procesamiento de audio</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#aspecto4">
                                        <i class="bi bi-speedometer2 text-primary me-2"></i> Rendimiento Competitivo
                                    </button>
                                </h3>
                                <div id="aspecto4" class="accordion-collapse collapse" data-bs-parent="#aspectosAccordion">
                                    <div class="accordion-body">
                                        Qwen ha sido reconocido por su alto rendimiento en tareas de razonamiento, codificación y resolución de problemas, posicionándose como uno de los modelos más avanzados desarrollados en China (Reuters, 2025).
                                        <div class="mt-3">
                                            <canvas id="performanceChart" height="200"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Aplicaciones con grid de tarjetas -->
                    <section class="mb-3" id="aplicaciones">
                        <h2 class="h3 mb-3 color-secundario"><strong><i class="bi bi-bezier2 me-2"></i>Aplicaciones de QWEN</h2></strong>
                        <p class="mb-4">La versatilidad de Qwen permite su implementación en múltiples sectores:</p>
                        
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-3">
                                <div class="card h-100 border-0 shadow-sm hover-shadow">
                                    <div class="card-body text-center">
                                        <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                                            <i class="bi bi-book text-white fs-4"></i>
                                        </div>
                                        <h3 class="h5">Educación</h3>
                                        <p class="small text-muted">Generación de contenido educativo, asistencia en redacción académica y tutoría personalizada.</p>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-3">
                                <div class="card h-100 border-0 shadow-sm hover-shadow">
                                    <div class="card-body text-center">
                                        <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                                            <i class="bi bi-heart-pulse text-white fs-4"></i>
                                        </div>
                                        <h3 class="h5">Salud</h3>
                                        <p class="small text-muted">Análisis de datos clínicos, apoyo en diagnósticos y gestión de información médica.</p>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-3">
                                <div class="card h-100 border-0 shadow-sm hover-shadow">
                                    <div class="card-body text-center">
                                        <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                                            <i class="bi bi-briefcase  text-white fs-4"></i>
                                        </div>
                                        <h3 class="h5">Negocios</h3>
                                        <p class="small text-muted">Automatización de atención al cliente, análisis de mercado y generación de informes.</p>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-3">
                                <div class="card h-100 border-0 shadow-sm hover-shadow">
                                    <div class="card-body text-center">
                                        <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                                            <i class="bi bi-code-square  text-white  fs-4"></i>
                                        </div>
                                        <h3 class="h5">Tecnología</h3>
                                        <p class="small text-muted">Asistencia en programación, depuración de código y desarrollo de software.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Conclusiones con estilo destacado -->
                    <section class="mb-3" id="conclusiones">
                        <div class="card">
                            <div class="card-header bg-secondary text-white"><h2 class="h4 mb-0"><i class="bi bi-check-circle me-2"></i><strong></strong>Conclusiones</strong></h2>
                            </div>
                            <div class="card-body">
                                <p class="lead">
                                    Qwen representa un hito en el desarrollo de inteligencia artificial en China, demostrando capacidades que rivalizan con modelos líderes a nivel mundial.
                                </p>
                                <p>
                                    Su arquitectura avanzada, enfoque multimodal y rendimiento competitivo lo posicionan como una herramienta valiosa en diversos sectores. A medida que la IA continúa evolucionando, Qwen ejemplifica el potencial de la innovación china en este campo.
                                </p>
                                <div class="alert alert-secondary mt-3">
                                    <i class="bi bi-exclamation-triangle me-2"></i> <strong>Perspectiva futura:</strong> Se espera que Qwen continúe evolucionando con capacidades aún más avanzadas en los próximos años.
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Bibliografía con estilo mejorado -->
                    <section class="mb-3" id="bibliografia">
                        <h2 class="h3 mb-3 color-secundario"><strong><i class="bi bi-journal-text me-2"></i>Bibliografía</h2></strong>
                        
                        <div class="list-group">
                            <a href="https://www.alibabacloud.com/en/solutions/generative-ai/qwen" target="_blank" class=" list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Tongyi Qianwen (Qwen)</h5>
                                    <small class="text-muted">Alibaba Cloud, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://www.alibabacloud.com/en/solutions/generative-ai/qwen</p>
                            </a>
                            
                            <a href="https://qwenlm.github.io/blog/qwen2.5-max/" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Qwen2.5-Max: Exploring the Intelligence of Large-scale MoE Model</h5>
                                    <small class="text-muted">Qwen Team, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://qwenlm.github.io/blog/qwen2.5-max/</p>
                            </a>
                            
                            <a href="https://www.reuters.com/technology/artificial-intelligence/alibaba-releases-ai-model-it-claims-surpasses-deepseek-v3-2025-01-29/" target="_blank" class="list-group-item list-group-item-action border-1 shadow-sm rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Alibaba releases AI model it says surpasses DeepSeek</h5>
                                    <small class="text-muted">Reuters, 2025</small>
                                </div>
                                <p class="mb-1 small text-muted">https://www.reuters.com/technology/artificial-intelligence/alibaba-releases-ai-model-it-claims-surpasses-deepseek-v3-2025-01-29/</p>
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
                            <h3 class="h5 mb-0 color-secundario"><i class="bi bi-list-ul me-2 "></i>Índice</h3>
                        </div>
                        <div class="card-body color-primario">
                            <nav class="nav flex-column">
                                <a class="link-primario" href="#introduccion"><i class="bi bi-arrow-right me-2"></i>Introducción</a>
                                <a class="link-primario" href="#aspectos"><i class="bi bi-arrow-right me-2"></i>Aspectos Clave</a>
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
                                <a href="https://www.casaasia.es/actualidad/el-auge-de-la-inteligencia-artificial-en-china/" target="_blank" class="list-group-item list-group-item-action border-0 link-primario">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">El auge de la IA en China</h5>
                                        <small class="text-muted">Ene 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Cómo China y otros países asiáticos están liderando la investigación en IA</p>
                                </a>
                                <a href="https://www.linkedin.com/pulse/ai-wars-chatgpt-vs-alibaba-qwen-deepseek-who-wins-future-atul-yadav-xljwc" target="_blank" class="list-group-item list-group-item-action border-0 link-primario">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">QWEN vs GPT vs DeepSeek</h5>
                                        <small class="text-muted">Feb 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Análisis detallado de los modelos de lenguaje más avanzados</p>
                                </a>
                                <a href="https://deepseekespanol.net/deepseek-v2-innovacion-en-modelos-de-lenguaje-con-arquitectura-moe/" target="_blank" class="list-group-item list-group-item-action border-0 link-primario">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 h6">MoE en DeepSeek</h5>
                                        <small class="text-muted">Ene 2025</small>
                                    </div>
                                    <p class="mb-1 small text-muted">Cómo funciona la mezcla de expertos en modelos de lenguaje</p>
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



    </section>


  </main>


  <?php 
    include '../assets/includes/footer-es-blog.php';
?>