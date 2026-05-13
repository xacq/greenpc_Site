<?php
$solutions = [
    [
        'id' => 'lopdp',
        'category' => 'Privacidad y Cumplimiento',
        'title' => 'Portal de Proteccion de Datos',
        'subtitle' => 'LOPDP para organizaciones que necesitan evidencia, trazabilidad y autoservicio.',
        'description' => 'Centraliza politicas, consentimientos, solicitudes y seguimiento del tratamiento de datos en una experiencia clara para usuarios y equipos internos.',
        'image' => 'assets/img/lopdp.jpg',
        'alt' => 'Vista del portal de proteccion de datos personales',
        'tags' => ['LOPDP', 'Portal web', 'Cumplimiento'],
        'highlights' => [
            'Portal de privacidad con informacion organizada para titulares y responsables.',
            'Gestion de solicitudes y derechos del titular con trazabilidad.',
            'Espacios para politicas, consentimientos, avisos y evidencias.',
            'Base pensada para ajustarse a flujos reales de cumplimiento.',
        ],
        'note' => 'Adaptado a la normativa ecuatoriana. El alcance final depende del numero de modulos y servicios requeridos.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './portal_lopdp.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'ml',
        'category' => 'Machine Learning',
        'title' => 'Sistema Integral de Riesgo Crediticio',
        'subtitle' => 'Scoring, trazabilidad operativa y analitica aplicada a cartera.',
        'description' => 'Un sistema pensado para importar informacion, evaluar clientes, revisar lotes y tomar decisiones con apoyo de modelos entrenados y reglas de negocio.',
        'image' => 'assets/img/modelo_risk.jpg',
        'alt' => 'Panel de riesgo crediticio con analitica y scoring',
        'tags' => ['ML', 'Scoring', 'Finanzas'],
        'highlights' => [
            'Dashboard con KPIs, alertas y evolucion mensual del riesgo.',
            'Importacion de datos con trazabilidad por batch y usuario.',
            'Ficha completa de cliente, credito y reevaluaciones historicas.',
            'Scoring predictivo con probabilidad, contraste y clasificacion.',
        ],
        'note' => 'Puede desplegarse por modulos para equipos de credito, analitica o auditoria.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './modelo_risk_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
            [
                'type' => 'modal',
                'target' => '#videoModalRisk',
                'label' => 'Ver video',
                'icon' => 'bi bi-play-circle-fill',
                'class' => 'btn btn-outline-secondary',
            ],
        ],
    ],
    [
        'id' => 'ocr',
        'category' => 'Gestion Documental + OCR',
        'title' => 'Sistema Documental con OCR e Intranet',
        'subtitle' => 'Captura, lectura y gestion segura de documentos sin exposicion externa.',
        'description' => 'Digitaliza procesos documentales internos con extraccion automatica de datos, control operativo y administracion cerrada en red local.',
        'image' => 'assets/img/gestor.jpg',
        'alt' => 'Sistema documental con OCR y administracion interna',
        'tags' => ['OCR', 'Intranet', 'Automatizacion'],
        'highlights' => [
            'Panel operativo con indicadores, alertas y seguimiento.',
            'Carga y clasificacion documental con trazabilidad completa.',
            'Extraccion de datos y apoyo a validaciones de procesos.',
            'Arquitectura pensada para intranet sin acceso externo.',
        ],
        'note' => 'Adecuado para organizaciones que priorizan control interno, confidencialidad y velocidad de consulta.',
        'actions' => [
            [
                'type' => 'modal',
                'target' => '#videoModalGestor',
                'label' => 'Ver video',
                'icon' => 'bi bi-play-circle-fill',
                'class' => 'btn btn-outline-secondary',
            ],
        ],
    ],
    [
        'id' => 'erp',
        'category' => 'Sistemas de Informacion',
        'title' => 'Plataformas Contables, Inventario y Facturacion',
        'subtitle' => 'Operacion multiempresa con foco en control, tributacion y reportes.',
        'description' => 'Modelamos sistemas administrativos para procesos de facturacion, contabilidad, libros, reportes y obligaciones tributarias con estructura escalable.',
        'image' => 'assets/img/contable.jpg',
        'alt' => 'Sistema contable con modulos financieros y tributarios',
        'tags' => ['ERP', 'Facturacion', 'Multiempresa'],
        'highlights' => [
            'Dashboard con comprobantes recientes y alertas tributarias.',
            'Libro diario, mayor general y plan de cuentas NIIF.',
            'Facturacion electronica y control de IVA, retenciones y formularios.',
            'Reportes financieros con enfoque operativo y de cumplimiento.',
        ],
        'note' => 'Adaptado a normativa ecuatoriana: RUC, IVA, formularios SRI y NIIF PYMES.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './contable_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'gobernanza',
        'category' => 'Gobernanza Digital',
        'title' => 'Gestion Ambiental y Seguimiento de Cumplimiento',
        'subtitle' => 'Operacion ambiental, auditoria y control multiempresa en un solo entorno.',
        'description' => 'Construimos tableros y flujos para PMA, auditorias, residuos, monitoreos y reportes, con prioridades y evidencias visibles para todo el equipo.',
        'image' => 'assets/img/gobernanza.jpg',
        'alt' => 'Plataforma de gobernanza y gestion ambiental',
        'tags' => ['Auditoria', 'Ambiental', 'Trazabilidad'],
        'highlights' => [
            'KPIs de cumplimiento, alertas criticas y cronologia de actividades.',
            'Seguimiento de PMA con carga de evidencias por area.',
            'Monitoreos, auditorias e informes con historial operativo.',
            'Calendario y gestion multiempresa por sede o proyecto.',
        ],
        'note' => 'El modelo tambien puede adaptarse a riesgos, control interno o seguimiento normativo sectorial.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './gobernanza_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'movil',
        'category' => 'Movil',
        'title' => 'Apps Android e iOS para Operacion en Campo',
        'subtitle' => 'Experiencias moviles conectadas a procesos reales, incluso offline.',
        'description' => 'Aplicaciones para captura de evidencia, gestion de tareas, sincronizacion y consulta rapida de informacion critica desde terreno.',
        'image' => 'assets/img/movil_mockup.jpg',
        'alt' => 'Aplicacion movil para gestion operativa en campo',
        'tags' => ['Android', 'iOS', 'Offline-first'],
        'highlights' => [
            'Dashboard inicial con tareas, alertas y estado operativo.',
            'Detalle tecnico por obligacion, proyecto o proceso.',
            'Captura guiada de evidencia con metadatos.',
            'Sincronizacion diferida y operacion offline-first.',
        ],
        'note' => 'Ideal para equipos de campo, supervision, auditoria o levantamiento de informacion.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './movil_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
    [
        'id' => 'educacion',
        'category' => 'Educacion + IA',
        'title' => 'Control Academico y Analitica Educativa',
        'subtitle' => 'Indicadores, rendimiento y acompanamiento con apoyo de IA.',
        'description' => 'Paneles pensados para instituciones que necesitan revisar rendimiento, detectar riesgo academico y activar acciones con mayor velocidad.',
        'image' => 'assets/img/academico.jpg',
        'alt' => 'Plataforma educativa con paneles y analitica academica',
        'tags' => ['Educacion', 'Analitica', 'IA'],
        'highlights' => [
            'KPIs academicos, ranking y alertas por rendimiento.',
            'Graficas comparativas, linea de tendencia y heatmap.',
            'Busquedas en tiempo real por estudiante, materia o curso.',
            'Asistente IA para consultas y lectura ejecutiva del grupo.',
        ],
        'note' => 'Puede integrarse con flujos de seguimiento docente, coordinacion o calidad educativa.',
        'actions' => [
            [
                'type' => 'link',
                'href' => './academico_mockup.php',
                'label' => 'Ver demo',
                'icon' => 'bi bi-box-arrow-up-right',
                'class' => 'btn btn-primary',
            ],
        ],
    ],
];

$musicastScreens = [
    ['icon' => 'bi bi-music-note-beamed', 'name' => 'Splash / Bienvenida'],
    ['icon' => 'bi bi-person-plus-fill',  'name' => 'Registro Cliente / Proveedor'],
    ['icon' => 'bi bi-shield-lock-fill',  'name' => 'Login con autenticacion social'],
    ['icon' => 'bi bi-house-heart-fill',  'name' => 'Home con categorias y proveedores'],
    ['icon' => 'bi bi-funnel-fill',       'name' => 'Busqueda con filtros por genero'],
    ['icon' => 'bi bi-images',            'name' => 'Detalle del proveedor con galeria'],
    ['icon' => 'bi bi-calendar2-check',   'name' => 'Formulario de reserva (paso 1/3)'],
    ['icon' => 'bi bi-credit-card-2-front-fill', 'name' => 'Pasarela de pago (3 metodos)'],
    ['icon' => 'bi bi-patch-check-fill',  'name' => 'Confirmacion con numero de reserva'],
    ['icon' => 'bi bi-person-circle',     'name' => 'Perfil completo del usuario'],
];

$videoModals = [
    [
        'id' => 'videoModalRisk',
        'title' => 'Video - Sistema de Riesgo Crediticio',
        'poster' => 'assets/img/modelo_risk.jpg',
        'src' => 'assets/video/video_riesgo.mp4',
    ],
    [
        'id' => 'videoModalGestor',
        'title' => 'Video - Sistema de Gestion Documental + OCR + LAN',
        'poster' => 'assets/img/gestor.jpg',
        'src' => 'assets/video/video_gestor.mp4',
    ],
];

$demoCount = 0;
foreach ($solutions as $solution) {
    foreach ($solution['actions'] as $action) {
        if ($action['type'] === 'link') {
            $demoCount++;
        }
    }
}

$videoCount = count($videoModals);
$solutionCount = count($solutions);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Programacion a la Medida - Green PC</title>
  <meta name="description" content="Soluciones de software a la medida: portales, sistemas web, OCR, ML, apps moviles y plataformas operativas para empresas en Ecuador.">
  <meta name="keywords" content="software a la medida, desarrollo web, machine learning, OCR, apps moviles, Green PC">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .programming-page {
      --program-surface: #f5f9ff;
      --program-border: rgba(52, 152, 219, 0.18);
      --program-shadow: 0 24px 60px rgba(11, 36, 69, 0.12);
      --program-dark: #061728;
      --program-emerald: #00a67d;
    }

    .programming-page .main {
      overflow: clip;
    }

    .floating-commit {
      position: fixed;
      right: 18px;
      bottom: 18px;
      z-index: 999;
      display: inline-flex;
    }

    .floating-commit__link {
      display: block;
      text-decoration: none;
    }

    .floating-commit__img {
      width: min(220px, 34vw);
      border-radius: 16px;
      border: 1px solid rgba(0, 230, 118, 0.22);
      box-shadow: 0 0 0 0 rgba(0, 230, 118, 0);
      transition: box-shadow 0.3s ease, transform 0.2s ease, border-color 0.3s ease;
      will-change: transform;
      display: block;
      background: rgba(6, 23, 40, 0.7);
      backdrop-filter: blur(8px);
    }

    .program-hero {
      min-height: 100vh;
      max-height: none;
      padding: 168px 0 110px;
    }

    .program-hero::before {
      background:
        radial-gradient(circle at 15% 20%, rgba(0, 230, 118, 0.18), transparent 28%),
        radial-gradient(circle at 85% 18%, rgba(52, 152, 219, 0.32), transparent 32%),
        linear-gradient(135deg, rgba(3, 9, 18, 0.96), rgba(7, 23, 41, 0.82));
    }

    .program-hero__eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 8px 14px;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      background: rgba(255, 255, 255, 0.06);
      color: rgba(255, 255, 255, 0.88);
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 22px;
    }

    .program-hero h1 {
      font-family: var(--nav-font);
      font-size: clamp(2.6rem, 4.8vw, 4.9rem);
      line-height: 1.02;
      margin-bottom: 18px;
      color: #fff;
    }

    .program-hero p {
      font-size: 1.08rem;
      line-height: 1.8;
      color: rgba(255, 255, 255, 0.82);
      margin-bottom: 0;
      max-width: 700px;
    }

    .program-hero__actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-top: 32px;
    }

    .program-hero__actions .btn {
      min-width: 190px;
      padding: 14px 24px;
      border-radius: 999px;
      font-weight: 600;
      border-width: 1px;
      box-shadow: 0 14px 32px rgba(0, 0, 0, 0.18);
    }

    .program-hero__actions .btn-primary {
      background: linear-gradient(135deg, var(--accent-color), #0aa1ff);
      border-color: transparent;
    }

    .program-hero__actions .btn-outline-light {
      background: rgba(255, 255, 255, 0.05);
      border-color: rgba(255, 255, 255, 0.28);
    }

    .program-hero__stats {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 16px;
      margin-top: 34px;
    }

    .program-stat {
      padding: 18px 18px 16px;
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
    }

    .program-stat strong {
      display: block;
      color: #fff;
      font-size: 1.8rem;
      line-height: 1;
      margin-bottom: 8px;
      font-family: var(--heading-font);
    }

    .program-stat span {
      color: rgba(255, 255, 255, 0.72);
      font-size: 0.95rem;
    }

    .program-hero__panel {
      position: relative;
      padding: 28px;
      border-radius: 30px;
      background: linear-gradient(180deg, rgba(8, 24, 42, 0.88), rgba(8, 18, 31, 0.72));
      border: 1px solid rgba(255, 255, 255, 0.09);
      box-shadow: 0 30px 70px rgba(0, 0, 0, 0.24);
      overflow: hidden;
    }

    .program-hero__panel::before {
      content: "";
      position: absolute;
      inset: auto -70px -70px auto;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0, 230, 118, 0.24), transparent 70%);
      pointer-events: none;
    }

    .program-hero__panel h2 {
      margin-bottom: 12px;
      font-size: 1.35rem;
      color: #fff;
    }

    .program-hero__panel p {
      font-size: 0.98rem;
      color: rgba(255, 255, 255, 0.74);
      line-height: 1.75;
    }

    .program-hero__checklist {
      list-style: none;
      padding: 0;
      margin: 24px 0 0;
      display: grid;
      gap: 12px;
    }

    .program-hero__checklist li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: rgba(255, 255, 255, 0.84);
      font-size: 0.96rem;
      line-height: 1.65;
    }

    .program-hero__checklist i {
      color: #8df4c7;
      font-size: 1.05rem;
      margin-top: 4px;
    }

    .solutions-section {
      position: relative;
      background:
        radial-gradient(circle at top right, rgba(52, 152, 219, 0.08), transparent 28%),
        linear-gradient(180deg, #ffffff, #f6fbff 46%, #eef6fc 100%);
    }

    .solutions-jump-nav {
      position: sticky;
      top: 82px;
      z-index: 12;
      margin-bottom: 34px;
      padding: 14px;
      border-radius: 22px;
      background: rgba(255, 255, 255, 0.86);
      border: 1px solid rgba(15, 23, 42, 0.08);
      box-shadow: 0 12px 40px rgba(15, 23, 42, 0.08);
      backdrop-filter: blur(14px);
    }

    .solutions-jump-nav__label {
      display: block;
      font-size: 0.85rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #60758a;
      margin-bottom: 12px;
      font-weight: 700;
    }

    .solutions-jump-nav__items {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .solutions-jump-nav__items a {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 16px;
      border-radius: 999px;
      color: #17324d;
      background: #edf6ff;
      border: 1px solid transparent;
      font-weight: 600;
      font-size: 0.95rem;
    }

    .solutions-jump-nav__items a:hover {
      color: #0b2033;
      background: #dff0ff;
      border-color: rgba(52, 152, 219, 0.18);
      transform: translateY(-1px);
    }

    .solution-card {
      scroll-margin-top: 122px;
      margin-bottom: 34px;
      border-radius: 34px;
      overflow: hidden;
      border: 1px solid var(--program-border);
      background: rgba(255, 255, 255, 0.92);
      box-shadow: var(--program-shadow);
    }

    .solution-card__media {
      position: relative;
      min-height: 100%;
      background: #0b2033;
    }

    .solution-card__media img {
      width: 100%;
      height: 100%;
      min-height: 320px;
      object-fit: cover;
      display: block;
    }

    .solution-card__overlay {
      position: absolute;
      inset: auto 18px 18px 18px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .solution-card__overlay span,
    .solution-chip {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 8px 12px;
      border-radius: 999px;
      background: rgba(6, 23, 40, 0.8);
      border: 1px solid rgba(255, 255, 255, 0.14);
      color: #fff;
      font-size: 0.84rem;
      font-weight: 600;
      backdrop-filter: blur(10px);
    }

    .solution-card__content {
      padding: 34px;
    }

    .solution-card__kicker {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 14px;
      color: #43637f;
      font-size: 0.84rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .solution-card__kicker::before {
      content: "";
      width: 28px;
      height: 1px;
      background: rgba(52, 152, 219, 0.45);
    }

    .solution-card__content h3 {
      font-size: clamp(1.75rem, 2vw, 2.3rem);
      line-height: 1.1;
      margin-bottom: 12px;
      color: #0d2236;
    }

    .solution-card__subtitle {
      font-size: 1.05rem;
      color: #234664;
      font-weight: 600;
      margin-bottom: 14px;
    }

    .solution-card__description {
      color: #56697d;
      line-height: 1.85;
      margin-bottom: 22px;
      font-size: 0.99rem;
    }

    .solution-card__chips {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 22px;
    }

    .solution-chip {
      background: #f0f8ff;
      color: #1f4e75;
      border-color: rgba(52, 152, 219, 0.14);
      backdrop-filter: none;
    }

    .solution-card__list {
      list-style: none;
      padding: 0;
      margin: 0 0 22px;
      display: grid;
      gap: 12px;
    }

    .solution-card__list li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: #334a60;
      line-height: 1.7;
    }

    .solution-card__list i {
      color: var(--program-emerald);
      font-size: 1rem;
      margin-top: 5px;
    }

    .solution-card__note {
      padding: 16px 18px;
      border-radius: 18px;
      background: linear-gradient(180deg, rgba(52, 152, 219, 0.08), rgba(52, 152, 219, 0.03));
      border: 1px solid rgba(52, 152, 219, 0.12);
      color: #36546f;
      font-size: 0.94rem;
      line-height: 1.7;
      margin-bottom: 24px;
    }

    .solution-card__actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }

    .solution-card__actions .btn {
      padding: 12px 18px;
      border-radius: 14px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    /* ── MUSICAST special section ── */
    .musicast-section {
      background: linear-gradient(160deg, #0a0a0f 0%, #10080e 40%, #0d0b00 100%);
      position: relative;
      overflow: hidden;
    }

    .musicast-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse at 20% 50%, rgba(212, 160, 23, 0.12) 0%, transparent 55%),
        radial-gradient(ellipse at 80% 20%, rgba(180, 60, 120, 0.10) 0%, transparent 45%),
        radial-gradient(ellipse at 60% 90%, rgba(212, 160, 23, 0.07) 0%, transparent 40%);
      pointer-events: none;
    }

    .musicast-section .section-title h2 {
      color: #fff;
    }

    .musicast-section .section-title p {
      color: rgba(255,255,255,0.68);
    }

    .musicast-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 7px 16px;
      border-radius: 999px;
      border: 1px solid rgba(212, 160, 23, 0.45);
      background: rgba(212, 160, 23, 0.10);
      color: #f0c040;
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      margin-bottom: 18px;
    }

    .musicast-headline {
      font-family: var(--heading-font);
      font-size: clamp(2.4rem, 4vw, 4rem);
      font-weight: 800;
      line-height: 1.05;
      color: #ffffff;
      margin-bottom: 8px;
    }

    .musicast-headline span {
      background: linear-gradient(90deg, #f0c040, #e07b30, #f0c040);
      background-size: 200% auto;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: musicastShine 4s linear infinite;
    }

    @keyframes musicastShine {
      to { background-position: 200% center; }
    }

    .musicast-tagline {
      font-size: 1.05rem;
      color: rgba(255,255,255,0.75);
      line-height: 1.8;
      max-width: 540px;
      margin-bottom: 28px;
    }

    .musicast-nav-info {
      padding: 18px 22px;
      border-radius: 18px;
      background: rgba(212, 160, 23, 0.08);
      border: 1px solid rgba(212, 160, 23, 0.22);
      color: rgba(255,255,255,0.80);
      font-size: 0.93rem;
      line-height: 1.75;
      margin-bottom: 28px;
    }

    .musicast-nav-info strong {
      color: #f0c040;
    }

    .musicast-screens-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      margin-bottom: 28px;
    }

    .musicast-screen-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 14px;
      border-radius: 14px;
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(212, 160, 23, 0.14);
      transition: background 0.25s, border-color 0.25s;
    }

    .musicast-screen-item:hover {
      background: rgba(212, 160, 23, 0.10);
      border-color: rgba(212, 160, 23, 0.35);
    }

    .musicast-screen-num {
      flex-shrink: 0;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: linear-gradient(135deg, #d4a017, #e07b30);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.75rem;
      font-weight: 700;
      color: #0a0a0f;
    }

    .musicast-screen-icon {
      color: #f0c040;
      font-size: 1rem;
    }

    .musicast-screen-name {
      color: rgba(255,255,255,0.85);
      font-size: 0.88rem;
      font-weight: 500;
    }

    .musicast-palette {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 28px;
    }

    .musicast-palette-chip {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 14px;
      border-radius: 999px;
      font-size: 0.84rem;
      font-weight: 600;
      border: 1px solid;
    }

    .musicast-chip-dark {
      background: rgba(10,10,15,0.8);
      color: rgba(255,255,255,0.88);
      border-color: rgba(255,255,255,0.14);
    }

    .musicast-chip-gold {
      background: rgba(212, 160, 23, 0.15);
      color: #f0c040;
      border-color: rgba(212, 160, 23, 0.40);
    }

    .musicast-chip-type {
      background: rgba(255,255,255,0.07);
      color: rgba(255,255,255,0.78);
      border-color: rgba(255,255,255,0.10);
    }

    .musicast-chip-gradient {
      background: linear-gradient(135deg, rgba(212,160,23,0.12), rgba(180,60,120,0.12));
      color: rgba(255,255,255,0.84);
      border-color: rgba(212,160,23,0.25);
    }

    .musicast-img-frame {
      position: relative;
      border-radius: 28px;
      overflow: hidden;
      box-shadow:
        0 0 0 1px rgba(212, 160, 23, 0.25),
        0 40px 100px rgba(0,0,0,0.55),
        0 0 80px rgba(212, 160, 23, 0.08);
    }

    .musicast-img-frame img {
      display: block;
      width: 100%;
      height: 100%;
      min-height: 480px;
      object-fit: cover;
    }

    .musicast-img-badge {
      position: absolute;
      top: 18px;
      left: 18px;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 9px 14px;
      border-radius: 999px;
      background: rgba(10,8,0,0.80);
      border: 1px solid rgba(212,160,23,0.40);
      backdrop-filter: blur(12px);
      color: #f0c040;
      font-size: 0.84rem;
      font-weight: 700;
      letter-spacing: 0.04em;
    }

    .musicast-img-screens-badge {
      position: absolute;
      bottom: 18px;
      right: 18px;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 16px;
      border-radius: 16px;
      background: rgba(10,8,0,0.82);
      border: 1px solid rgba(212,160,23,0.30);
      backdrop-filter: blur(12px);
    }

    .musicast-img-screens-badge strong {
      font-size: 1.5rem;
      font-weight: 800;
      color: #f0c040;
      line-height: 1;
    }

    .musicast-img-screens-badge span {
      font-size: 0.82rem;
      color: rgba(255,255,255,0.72);
      line-height: 1.3;
    }

    .musicast-glow-line {
      position: absolute;
      inset: auto 0 -1px 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, rgba(212,160,23,0.6), transparent);
    }

    @media (max-width: 991px) {
      .musicast-img-frame img { min-height: 340px; }
      .musicast-screens-grid { grid-template-columns: 1fr; }
    }
    /* ── END MUSICAST ── */

    .program-process {
      background: linear-gradient(180deg, #071727, #0b2236);
    }

    .program-process .section-title h2,
    .program-process .section-title p {
      color: #fff;
    }

    .process-card {
      height: 100%;
      padding: 28px;
      border-radius: 28px;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.22);
    }

    .process-card__step {
      display: inline-flex;
      width: 48px;
      height: 48px;
      align-items: center;
      justify-content: center;
      border-radius: 16px;
      margin-bottom: 18px;
      font-size: 1.15rem;
      font-weight: 700;
      color: #fff;
      background: linear-gradient(135deg, var(--accent-color), #0aa1ff);
    }

    .process-card h3 {
      color: #fff;
      margin-bottom: 12px;
      font-size: 1.3rem;
    }

    .process-card p {
      color: rgba(255, 255, 255, 0.74);
      line-height: 1.8;
      margin-bottom: 0;
    }

    .program-tech .swiper {
      padding: 12px 8px 36px;
      border-radius: 28px;
      background: linear-gradient(180deg, #ffffff, #f8fbff);
      border: 1px solid rgba(52, 152, 219, 0.12);
      box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
    }

    .program-tech .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 110px;
    }

    .program-tech .swiper-slide img {
      max-height: 58px;
    }

    .program-cta {
      padding: 90px 0;
      position: relative;
      overflow: hidden;
    }

    .program-cta img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .program-cta::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(3, 9, 18, 0.88), rgba(7, 23, 41, 0.72));
      z-index: 2;
    }

    .program-cta .container {
      position: relative;
      z-index: 3;
    }

    .program-cta__panel {
      padding: 34px;
      border-radius: 32px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(10px);
      text-align: center;
      box-shadow: 0 26px 60px rgba(0, 0, 0, 0.2);
    }

    .program-cta__panel h2 {
      color: #fff;
      font-size: clamp(2rem, 3vw, 3rem);
      margin-bottom: 14px;
    }

    .program-cta__panel p {
      color: rgba(255, 255, 255, 0.78);
      font-size: 1.05rem;
      line-height: 1.8;
      max-width: 760px;
      margin: 0 auto 24px;
    }

    .program-video-modal .modal-content {
      background: #081320;
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 22px;
      overflow: hidden;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
      animation: modalSlideIn 0.35s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .program-video-modal .modal-header {
      background: linear-gradient(135deg, #10253a, #0b1828);
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .program-video-modal .modal-title {
      color: #fff;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .program-video-modal .modal-body {
      background: #000;
      padding: 0;
    }

    .program-video-modal video {
      display: block;
      width: 100%;
      max-height: 75vh;
      object-fit: contain;
    }

    @keyframes modalSlideIn {
      from {
        transform: scale(0.92) translateY(20px);
        opacity: 0;
      }

      to {
        transform: scale(1) translateY(0);
        opacity: 1;
      }
    }

    @media (max-width: 991px) {
      .program-hero {
        padding: 148px 0 80px;
      }

      .program-hero__panel {
        margin-top: 28px;
      }

      .solution-card__content {
        padding: 28px;
      }

      .solutions-jump-nav {
        top: 74px;
      }
    }

    @media (max-width: 767px) {
      .floating-commit {
        right: 12px;
        bottom: 12px;
      }

      .floating-commit__img {
        width: min(160px, 42vw);
      }

      .program-hero__stats {
        grid-template-columns: 1fr;
      }

      .program-hero__actions .btn,
      .program-cta__panel .btn {
        width: 100%;
        min-width: 0;
      }

      .solution-card {
        border-radius: 26px;
      }

      .solution-card__content {
        padding: 24px 22px;
      }

      .solution-card__media img {
        min-height: 260px;
      }

      .solutions-jump-nav {
        position: relative;
        top: 0;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .floating-commit__img,
      .solutions-jump-nav__items a,
      .solution-card__actions .btn,
      .program-hero__actions .btn,
      .program-video-modal .modal-content {
        transition: none !important;
        animation: none !important;
      }
    }
  </style>
</head>

<body class="index-page programming-page">

<div id="logo-float-wrap" class="floating-commit">
  <a href="https://commit.greenpc.dev" target="_blank" rel="noopener" id="logo-link" class="floating-commit__link" aria-label="Abrir COMMIT by Green PC">
    <img src="./assets/img/commit_logo.png" id="logo-float" class="floating-commit__img" alt="COMMIT by Green PC">
  </a>
</div>

<script>
(function () {
  const logo = document.getElementById('logo-float');
  const link = document.getElementById('logo-link');

  if (!logo || !link) {
    return;
  }

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const canTilt = window.matchMedia('(pointer:fine)').matches && !reduceMotion;

  let currentScrollY = 0;
  let currentMouseX = 0;
  let currentMouseY = 0;

  function updateTransform() {
    const scrollTranslate = reduceMotion ? 0 : currentScrollY * -0.01;
    const scrollRotate = reduceMotion ? 0 : currentScrollY * 0.001;
    const tiltX = canTilt ? currentMouseX * 12 : 0;
    const tiltY = canTilt ? currentMouseY * -12 : 0;

    logo.style.transform = 'translateY(' + scrollTranslate + 'px) rotate(' + scrollRotate + 'deg) perspective(600px) rotateY(' + tiltX + 'deg) rotateX(' + tiltY + 'deg)';
  }

  if (!reduceMotion) {
    let ticking = false;
    window.addEventListener('scroll', function () {
      if (!ticking) {
        requestAnimationFrame(function () {
          currentScrollY = window.scrollY;
          updateTransform();
          ticking = false;
        });
        ticking = true;
      }
    });
  }

  if (canTilt) {
    document.addEventListener('mousemove', function (e) {
      const rect = logo.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      currentMouseX = Math.min(Math.max((e.clientX - cx) / (window.innerWidth / 2), -1), 1);
      currentMouseY = Math.min(Math.max((e.clientY - cy) / (window.innerHeight / 2), -1), 1);
      updateTransform();
    });
  }

  link.addEventListener('mouseenter', function () {
    logo.style.boxShadow = '0 0 28px rgba(0,230,118,0.4), 0 0 60px rgba(0,230,118,0.16)';
    logo.style.borderColor = 'rgba(0,230,118,0.55)';
  });

  link.addEventListener('mouseleave', function () {
    logo.style.boxShadow = '0 0 0 0 rgba(0,230,118,0)';
    logo.style.borderColor = 'rgba(0,230,118,0.22)';
    currentMouseX = 0;
    currentMouseY = 0;
    updateTransform();
  });
})();
</script>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="./index_es.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="./assets/img/logo.png" alt="Logo de Green PC">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="./index_es.php#hero">Inicio</a></li>
          <li><a href="./index_es.php#about">Acerca de</a></li>
          <li><a href="./index_es.php#services">Servicios</a></li>
          <li><a href="./index_es.php#portfolio">Portafolio</a></li>
          <li><a href="./blog.php">Blogs</a></li>
          <li><a href="./programacion.php" class="active">Programacion</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="./index.php"><i class="bi bi-translate"></i> English</a>
    </div>
  </header>

  <main class="main">
    <section id="hero" class="hero section dark-background program-hero">
      <img src="assets/img/hero-bg.jpg" alt="Fondo tecnologico para servicios de programacion" data-aos="fade-in">
      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <span class="program-hero__eyebrow"><i class="bi bi-cpu"></i> Green PC Software Factory</span>
            <h1>Software a la medida para procesos que no pueden depender de hojas sueltas y parches temporales.</h1>
            <p>Disenamos plataformas web, apps moviles, OCR, analitica y sistemas operativos orientados a cumplimiento, control y ejecucion real. Aqui puedes comparar enfoques, revisar demos y detectar con rapidez que linea encaja mejor con tu operacion.</p>

            <div class="program-hero__actions">
              <a class="btn btn-primary" href="#soluciones"><i class="bi bi-grid-1x2-fill"></i> Explorar soluciones</a>
              <a class="btn btn-outline-light" href="https://wa.link/hczezg" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Solicitar alcance</a>
            </div>

            <div class="program-hero__stats">
              <div class="program-stat">
                <strong><?= $solutionCount; ?></strong>
                <span>lineas de solucion listas para revisar</span>
              </div>
              <div class="program-stat">
                <strong><?= $demoCount; ?></strong>
                <span>demos navegables para validar enfoque</span>
              </div>
              <div class="program-stat">
                <strong><?= $videoCount; ?></strong>
                <span>casos con video para ver el flujo</span>
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade-left" data-aos-delay="180">
            <aside class="program-hero__panel">
              <h2>Que puedes esperar del servicio</h2>
              <p>Cada solucion parte de un problema operativo concreto y se aterriza en modulos, flujos y entregables claros. El objetivo no es solo "tener un sistema", sino reducir friccion y mejorar control.</p>
              <ul class="program-hero__checklist">
                <li><i class="bi bi-check2-circle"></i><span>Alcance modular para crecer por fases sin rehacer todo.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>Demos y mockups para validar interfaz y prioridades antes de invertir fuerte.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>Arquitectura alineada con control, trazabilidad y seguridad operativa.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>Integracion posible con procesos internos, intranet o aplicaciones moviles.</span></li>
              </ul>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <section id="soluciones" class="section solutions-section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Soluciones</h2>
        <p>Explora la linea que mejor se ajusta a tu operacion</p>
      </div>

      <div class="container">
        <div class="solutions-jump-nav" data-aos="fade-up" data-aos-delay="100">
          <span class="solutions-jump-nav__label">Navegacion rapida</span>
          <div class="solutions-jump-nav__items">
            <?php foreach ($solutions as $solution): ?>
              <a href="#<?= htmlspecialchars($solution['id']); ?>"><i class="bi bi-arrow-down-right-circle"></i><?= htmlspecialchars($solution['title']); ?></a>
            <?php endforeach; ?>
          </div>
        </div>

        <?php foreach ($solutions as $index => $solution): ?>
          <?php $isReversed = $index % 2 !== 0; ?>
          <article id="<?= htmlspecialchars($solution['id']); ?>" class="solution-card" data-aos="fade-up" data-aos-delay="<?= 120 + ($index * 20); ?>">
            <div class="row g-0 align-items-stretch">
              <div class="col-lg-5 <?= $isReversed ? 'order-lg-2' : ''; ?>">
                <div class="solution-card__media">
                  <img src="<?= htmlspecialchars($solution['image']); ?>" alt="<?= htmlspecialchars($solution['alt']); ?>" loading="lazy">
                  <div class="solution-card__overlay">
                    <span><?= htmlspecialchars($solution['category']); ?></span>
                    <?php if (!empty($solution['actions'])): ?>
                      <span><?= count($solution['actions']); ?> accion<?= count($solution['actions']) > 1 ? 'es' : ''; ?></span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 <?= $isReversed ? 'order-lg-1' : ''; ?>">
                <div class="solution-card__content">
                  <span class="solution-card__kicker"><?= htmlspecialchars($solution['category']); ?></span>
                  <h3><?= htmlspecialchars($solution['title']); ?></h3>
                  <p class="solution-card__subtitle"><?= htmlspecialchars($solution['subtitle']); ?></p>
                  <p class="solution-card__description"><?= htmlspecialchars($solution['description']); ?></p>

                  <div class="solution-card__chips">
                    <?php foreach ($solution['tags'] as $tag): ?>
                      <span class="solution-chip"><?= htmlspecialchars($tag); ?></span>
                    <?php endforeach; ?>
                  </div>

                  <ul class="solution-card__list">
                    <?php foreach ($solution['highlights'] as $highlight): ?>
                      <li><i class="bi bi-check2"></i><span><?= htmlspecialchars($highlight); ?></span></li>
                    <?php endforeach; ?>
                  </ul>

                  <div class="solution-card__note">
                    <strong>Enfoque:</strong> <?= htmlspecialchars($solution['note']); ?>
                  </div>

                  <div class="solution-card__actions">
                    <?php foreach ($solution['actions'] as $action): ?>
                      <?php if ($action['type'] === 'link'): ?>
                        <a href="<?= htmlspecialchars($action['href']); ?>" class="<?= htmlspecialchars($action['class']); ?>">
                          <i class="<?= htmlspecialchars($action['icon']); ?>"></i><?= htmlspecialchars($action['label']); ?>
                        </a>
                      <?php endif; ?>
                      <?php if ($action['type'] === 'modal'): ?>
                        <button type="button" class="<?= htmlspecialchars($action['class']); ?>" data-bs-toggle="modal" data-bs-target="<?= htmlspecialchars($action['target']); ?>">
                          <i class="<?= htmlspecialchars($action['icon']); ?>"></i><?= htmlspecialchars($action['label']); ?>
                        </button>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- ══════════════ MUSICAST SECTION ══════════════ -->
    <section id="musicast" class="section musicast-section dark-background">
      <div class="musicast-glow-line" style="top:0;bottom:auto;"></div>

      <div class="container section-title" data-aos="fade-up">
        <h2>App Movil Destacada</h2>
        <p>Una experiencia completa, disenada con identidad y flujo reales</p>
      </div>

      <div class="container">
        <div class="row align-items-center gy-5">

          <!-- LEFT: image -->
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
            <div class="musicast-img-frame">
              <img src="assets/img/services/musicast.jpg" alt="MUSICAST — App movil para reserva de servicios musicales" loading="lazy">
              <div class="musicast-img-badge">
                <i class="bi bi-music-note-beamed"></i> MUSICAST
              </div>
              <div class="musicast-img-screens-badge">
                <strong>10</strong>
                <span>pantallas<br>del flujo</span>
              </div>
            </div>
          </div>

          <!-- RIGHT: content -->
          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="160">
            <span class="musicast-eyebrow"><i class="bi bi-music-note-list"></i> App Movil &mdash; Marketplace Musical</span>
            <h3 class="musicast-headline">Reserva tu <span>sonido perfecto</span></h3>
            <p class="musicast-tagline">
              Plataforma movil que conecta clientes con proveedores de servicios musicales: desde la busqueda por genero hasta el pago y la confirmacion, todo en una experiencia pulida y cohesiva.
            </p>

            <div class="musicast-nav-info">
              <strong>Navegacion interactiva</strong> &mdash; puedes moverte entre pantallas con los botones del nav superior, las flechas del panel derecho, o haciendo clic en los botones internos de la app (ej: &ldquo;Reservar&rdquo; te lleva a la pantalla de reserva, &ldquo;Comenzar&rdquo; al registro, etc.).
            </div>

            <p style="color:rgba(255,255,255,0.62); font-size:0.88rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; margin-bottom:12px;">Las 10 pantallas del flujo completo</p>
            <div class="musicast-screens-grid">
              <?php foreach ($musicastScreens as $i => $screen): ?>
                <div class="musicast-screen-item">
                  <span class="musicast-screen-num"><?= $i + 1 ?></span>
                  <i class="musicast-screen-icon <?= htmlspecialchars($screen['icon']) ?>"></i>
                  <span class="musicast-screen-name"><?= htmlspecialchars($screen['name']) ?></span>
                </div>
              <?php endforeach; ?>
            </div>

            <p style="color:rgba(255,255,255,0.62); font-size:0.88rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; margin-bottom:12px;">Paleta de diseno</p>
            <div class="musicast-palette">
              <span class="musicast-palette-chip musicast-chip-dark"><i class="bi bi-circle-fill" style="font-size:0.7rem;"></i> Fondo oscuro</span>
              <span class="musicast-palette-chip musicast-chip-gold"><i class="bi bi-circle-fill" style="font-size:0.7rem;"></i> Acento dorado</span>
              <span class="musicast-palette-chip musicast-chip-type"><i class="bi bi-type"></i> Tipografia limpia</span>
              <span class="musicast-palette-chip musicast-chip-gradient"><i class="bi bi-layers-fill"></i> Cards con gradientes</span>
            </div>

            <a href="./musicast.php" target="_blank" rel="noopener"
               style="display:inline-flex; align-items:center; gap:10px; padding:14px 26px; border-radius:999px; font-weight:700; font-size:0.97rem; background:linear-gradient(135deg,#d4a017,#e07b30); color:#0a0a0f; text-decoration:none; box-shadow:0 12px 35px rgba(212,160,23,0.35); transition:transform 0.2s,box-shadow 0.2s;"
               onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 18px 45px rgba(212,160,23,0.45)';"
               onmouseout="this.style.transform='';this.style.boxShadow='0 12px 35px rgba(212,160,23,0.35)';">
              </i> DEMO MUSICAST
            </a>

            <a href="./musicast2.php" target="_blank" rel="noopener"
               style="display:inline-flex; align-items:center; gap:10px; padding:14px 26px; border-radius:999px; font-weight:700; font-size:0.97rem; background:linear-gradient(135deg,#d4a017,#e07b30); color:#0a0a0f; text-decoration:none; box-shadow:0 12px 35px rgba(212,160,23,0.35); transition:transform 0.2s,box-shadow 0.2s;"
               onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 18px 45px rgba(212,160,23,0.45)';"
               onmouseout="this.style.transform='';this.style.boxShadow='0 12px 35px rgba(212,160,23,0.35)';">
              </i> DEMO MUSICAST 2DA FASE
            </a>
          </div>

        </div>
      </div>

      <div class="musicast-glow-line"></div>
    </section>
    <!-- ══════════════ END MUSICAST ══════════════ -->

    <section class="section program-process dark-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Proceso</h2>
        <p>Como aterrizamos una solucion antes de construirla</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="process-card">
              <span class="process-card__step">01</span>
              <h3>Descubrimiento operativo</h3>
              <p>Primero entendemos flujo, actores, restricciones, cumplimiento y cuellos de botella. La conversacion deja de ser "quiero un sistema" y pasa a ser "que decision o tarea debe resolverse mejor".</p>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="160">
            <div class="process-card">
              <span class="process-card__step">02</span>
              <h3>Mockup y arquitectura</h3>
              <p>Definimos pantallas, modulos, prioridades y datos. Esto reduce ambiguedad comercial y evita que el proyecto se convierta en una lista interminable de ajustes tardios.</p>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="220">
            <div class="process-card">
              <span class="process-card__step">03</span>
              <h3>Construccion por entregables</h3>
              <p>El desarrollo se divide en modulos verificables. Cada entrega debe aportar una capacidad usable: dashboard, carga, consulta, aprobacion, reporte o integracion.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="clients" class="clients section program-tech">
      <div class="container section-title" data-aos="fade-up">
        <h2>Tecnologias</h2>
        <p>Stack de trabajo habitual para backend, frontend, datos e integracion</p>
      </div>

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
            <?php for ($i = 1; $i <= 21; $i++): ?>
              <div class="swiper-slide"><img src="assets/img/clients/client-<?= $i; ?>.png" class="img-fluid" alt="" aria-hidden="true" loading="lazy"></div>
            <?php endfor; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>




    <section id="contacto-programacion" class="program-cta call-to-action section dark-background">
      <img src="assets/img/cta-bg.jpg" alt="Fondo de contacto para software a medida">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="program-cta__panel" data-aos="zoom-in" data-aos-delay="100">
              <h2>Si ya tienes un proceso claro, podemos convertirlo en una demo funcional.</h2>
              <p>Comparte tu caso por WhatsApp y te ayudamos a definir alcance, modulos prioritarios y el formato correcto: portal, sistema interno, app movil, OCR o plataforma analitica.</p>

                <a href="https://wa.link/hczezg" class="cta-btn btn-lg" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>

            </div>
          </div>
        </div>
      </div>
    </section>

    <?php foreach ($videoModals as $modal): ?>
      <div class="modal fade program-video-modal video-modal" id="<?= htmlspecialchars($modal['id']); ?>" tabindex="-1" aria-labelledby="<?= htmlspecialchars($modal['id']); ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="<?= htmlspecialchars($modal['id']); ?>Label">
                <i class="bi bi-play-circle-fill" style="color:#ffc107;"></i>
                <?= htmlspecialchars($modal['title']); ?>
              </h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <video controls controlsList="nodownload" poster="<?= htmlspecialchars($modal['poster']); ?>">
                <source src="<?= htmlspecialchars($modal['src']); ?>" type="video/mp4">
                Tu navegador no soporta el elemento de video.
              </video>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.video-modal').forEach(function (modal) {
          modal.addEventListener('hidden.bs.modal', function () {
            const video = modal.querySelector('video');
            if (video) {
              video.pause();
              video.currentTime = 0;
            }
          });
        });
      });
    </script>
  </main>

  <style>
    .service-modal-content {
      border: none;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(113, 112, 112, 0.25);
    }
    .service-modal-header {
      background: linear-gradient(135deg, #3498db 0%, #065d98ff 100%);
      color: #fff;
      padding: 1.4rem 1.6rem;
      border-bottom: none;
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .service-modal-header .modal-title {
      font-size: 1.3rem;
      font-weight: 700;
      letter-spacing: 0.5px;
      color: #fff;
    }
    .service-modal-icon {
      width: 48px;
      height: 48px;
      background: #3498db;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      color: #fff;
      flex-shrink: 0;
    }
    .modal-body {
      padding: 1.8rem;
      background: #f9fafb;
    }
    .service-modal-subtitle {
      font-weight: 700;
      color: #3498db;
      font-size: 0.95rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      border-left: 3px solid #065d98ff;
      padding-left: 8px;
      margin-bottom: 0.6rem;
    }
    .service-modal-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .service-modal-list li {
      padding: 5px 0;
      font-size: 0.9rem;
      color: #444;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .service-modal-list li i {
      color: #3498db;
      font-size: 0.85rem;
      flex-shrink: 0;
    }
    .service-modal-img-wrapper {
      width: 100%;
      height: 220px;
      border-radius: 12px;
      overflow: hidden;
      background: #e8f5e9;
    }
    .service-modal-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .service-modal-img-placeholder {
      width: 100%;
      height: 220px;
      border-radius: 12px;
      background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color:  #3498db;
      gap: 8px;
    }
    .service-modal-img-placeholder i {
      font-size: 2.5rem;
      opacity: 0.6;
    }
    .service-modal-img-placeholder span {
      font-size: 0.85rem;
      opacity: 0.7;
      font-style: italic;
    }
    .service-modal-footer {
      background: #fff;
      border-top: 1px solid #e0e0e0;
      padding: 1rem 1.6rem;
    }
    .service-modal-btn {
      background: linear-gradient(135deg, #3498db, #065d98ff);
      color: #fff;
      border: none;
      padding: 0.5rem 1.4rem;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    .service-modal-btn:hover {
      background: linear-gradient(135deg, #3498db, #065d98ff);
      color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px #3498db;
    }
    .service-modal-btn i {
      margin-right: 6px;
    }
    @media (max-width: 576px) {
      .service-modal-img-wrapper, .service-modal-img-placeholder { height: 160px; }
    }
    .service-desc {
      font-size: 0.85rem;
      color: #5a6a7e;
      margin-top: 0.5rem;
      line-height: 1.4;
      padding: 0 0.5rem 0.75rem;
    }
  </style>
  
<?php
include_once './assets/includes/footer-es.php';
?>
