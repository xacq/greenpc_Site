<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Green PC — Soluciones Digitales Potentes & IA</title>
  <meta name="description" content="Green PC — Desarrollo web, automatización con IA, diseño UX, apps móviles y ciberseguridad. Más de 600 clientes satisfechos en todo el mundo.">
  <meta name="keywords" content="desarrollo web, automatización IA, diseño UX, ciberseguridad, apps móviles, soluciones digitales, Green PC, inteligencia artificial">
  <meta property="og:title" content="Green PC — Soluciones Digitales Potentes & IA">
  <meta property="og:description" content="Desarrollo web, automatización con IA, diseño UX, apps móviles y ciberseguridad para empresas en todo el mundo.">
  <meta property="og:image" content="https://greenpc.dev/assets/img/logo.png">
  <meta property="og:url" content="https://greenpc.dev/index_es.php">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Green PC — Soluciones Digitales Potentes & IA">
  <meta name="twitter:description" content="Desarrollo web, automatización con IA, diseño UX, apps móviles y ciberseguridad para empresas en todo el mundo.">
  <meta name="twitter:image" content="https://greenpc.dev/assets/img/logo.png">

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

  <style>
    .index-page .main {
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
      width: min(220px, 28vw);
      border-radius: 14px;
      border: 1px solid rgba(0,230,118,0.2);
      box-shadow: 0 0 0 0 rgba(0,230,118,0);
      transition: box-shadow 0.3s ease, transform 0.15s ease, border-color 0.3s ease;
      will-change: transform;
      display: block;
    }

    .hero-landing {
      min-height: 100vh;
      max-height: none;
      padding: 164px 0 108px;
    }

    .hero-landing::before {
      background:
        radial-gradient(circle at 15% 18%, rgba(0, 230, 118, 0.15), transparent 28%),
        radial-gradient(circle at 84% 22%, rgba(52, 152, 219, 0.3), transparent 32%),
        linear-gradient(135deg, rgba(3, 9, 18, 0.94), rgba(7, 23, 41, 0.78));
    }

    .hero-landing h2::after {
      content: none;
    }

    .hero-badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 22px;
      padding: 8px 14px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,0.14);
      background: rgba(255,255,255,0.06);
      color: rgba(255,255,255,0.86);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }

    .hero-landing-copy {
      text-align: left;
    }

    .hero-landing-copy h2 {
      font-size: clamp(2.7rem, 5vw, 5rem);
      line-height: 1.02;
      margin-bottom: 18px;
      font-family: var(--nav-font);
    }

    .hero-lead {
      max-width: 680px;
      margin: 0;
      color: rgba(255,255,255,0.8);
      font-size: 1.08rem;
      line-height: 1.85;
    }

    .hero-action-row {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-top: 30px;
    }

    .hero-primary-btn,
    .hero-secondary-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      min-width: 190px;
      padding: 14px 24px;
      border-radius: 999px;
      font-size: 14px;
      font-weight: 700;
      transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease, border-color 0.2s ease;
    }

    .hero-primary-btn {
      background: linear-gradient(135deg, var(--accent-color), #0aa1ff);
      color: #fff;
      box-shadow: 0 18px 36px rgba(52, 152, 219, 0.28);
    }

    .hero-primary-btn:hover {
      transform: translateY(-2px);
      color: #fff;
      box-shadow: 0 24px 40px rgba(52, 152, 219, 0.34);
    }

    .hero-secondary-btn {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.24);
      color: #fff;
    }

    .hero-secondary-btn:hover {
      transform: translateY(-2px);
      color: #fff;
      background: rgba(255,255,255,0.1);
    }

    .hero-proof-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 14px;
      margin-top: 30px;
    }

    .hero-proof-card {
      padding: 18px 18px 16px;
      border-radius: 20px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.09);
      backdrop-filter: blur(10px);
    }

    .hero-proof-card strong {
      display: block;
      color: #fff;
      font-size: 1.7rem;
      line-height: 1;
      margin-bottom: 6px;
      font-family: var(--heading-font);
    }

    .hero-proof-card span {
      color: rgba(255,255,255,0.74);
      font-size: 0.92rem;
    }

    .hero-focus-card {
      padding: 28px;
      border-radius: 28px;
      background: linear-gradient(180deg, rgba(8,24,42,0.88), rgba(8,18,31,0.72));
      border: 1px solid rgba(255,255,255,0.1);
      box-shadow: 0 30px 70px rgba(0,0,0,0.24);
    }

    .hero-focus-label {
      display: inline-flex;
      margin-bottom: 14px;
      color: var(--accent-color);
      font-size: 12px;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      font-weight: 700;
    }

    .hero-focus-card h3 {
      color: #fff;
      margin-bottom: 12px;
      font-size: 1.5rem;
    }

    .hero-focus-card p {
      color: rgba(255,255,255,0.72);
      line-height: 1.8;
      font-size: 0.98rem;
      margin-bottom: 18px;
    }

    .hero-focus-card ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 12px;
    }

    .hero-focus-card li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: rgba(255,255,255,0.84);
      line-height: 1.7;
      font-size: 0.96rem;
    }

    .hero-focus-card li i {
      color: #8df4c7;
      margin-top: 5px;
    }

    .home-about-copy .lead-copy {
      color: color-mix(in srgb, var(--default-color), var(--contrast-color) 22%);
      line-height: 1.9;
      margin-bottom: 18px;
    }

    .about-highlight-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 12px;
    }

    .about-highlight-list li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: var(--default-color);
      line-height: 1.75;
    }

    .about-highlight-list li i {
      color: var(--accent-color);
      margin-top: 5px;
      font-size: 1rem;
    }

    .pricing-showcase {
      position: relative;
      overflow: hidden;
    }

    .pricing-showcase::before {
      content: "";
      position: absolute;
      inset: 0;
      background:
        radial-gradient(circle at 10% 20%, rgba(0, 230, 118, 0.08), transparent 24%),
        radial-gradient(circle at 88% 18%, rgba(52, 152, 219, 0.12), transparent 28%),
        linear-gradient(180deg, #f7fbff 0%, #eef5fb 100%);
      pointer-events: none;
    }

    .pricing-shell {
      position: relative;
      z-index: 1;
    }

    .pricing-intro {
      max-width: 760px;
      margin-bottom: 34px;
    }

    .pricing-kicker {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 8px 14px;
      border-radius: 999px;
      background: rgba(52, 152, 219, 0.1);
      color: #1e88d8;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      margin-bottom: 18px;
    }

    .pricing-intro h2 {
      font-size: clamp(2rem, 4vw, 3.35rem);
      line-height: 1.06;
      margin-bottom: 16px;
    }

    .pricing-intro p {
      color: #5a6a7e;
      line-height: 1.85;
      margin-bottom: 0;
    }

    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 20px;
    }

    .pricing-card {
      position: relative;
      padding: 28px;
      border-radius: 28px;
      background: rgba(255,255,255,0.9);
      border: 1px solid rgba(52, 152, 219, 0.12);
      box-shadow: 0 24px 60px rgba(15, 42, 71, 0.1);
      backdrop-filter: blur(10px);
      height: 100%;
    }

    .pricing-card--featured {
      background: linear-gradient(180deg, rgba(10, 24, 44, 0.98), rgba(7, 22, 40, 0.92));
      border-color: rgba(255,255,255,0.08);
      transform: translateY(-8px);
    }

    .pricing-topline {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      margin-bottom: 22px;
    }

    .pricing-icon {
      width: 56px;
      height: 56px;
      border-radius: 18px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.35rem;
      color: #fff;
      background: linear-gradient(135deg, #3498db, #0aa1ff);
      box-shadow: 0 16px 34px rgba(52, 152, 219, 0.28);
    }

    .pricing-card--featured .pricing-icon {
      background: linear-gradient(135deg, #00d26a, #0aa1ff);
      box-shadow: 0 18px 38px rgba(0, 210, 106, 0.22);
    }

    .pricing-tag {
      display: inline-flex;
      align-items: center;
      padding: 7px 12px;
      border-radius: 999px;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: #1e88d8;
      background: rgba(52, 152, 219, 0.1);
    }

    .pricing-card--featured .pricing-tag {
      color: #fff;
      background: rgba(255,255,255,0.1);
    }

    .pricing-card h3 {
      font-size: 1.45rem;
      margin-bottom: 10px;
    }

    .pricing-card p {
      color: #5a6a7e;
      line-height: 1.8;
      margin-bottom: 20px;
    }

    .pricing-card--featured h3,
    .pricing-card--featured p,
    .pricing-card--featured li,
    .pricing-card--featured .pricing-base-label,
    .pricing-card--featured .payment-copy,
    .pricing-card--featured .payment-note {
      color: rgba(255,255,255,0.86);
    }

    .pricing-base {
      margin-bottom: 20px;
    }

    .pricing-base-label {
      display: block;
      color: #6d7e92;
      font-size: 0.82rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      margin-bottom: 8px;
    }

    .pricing-amount {
      display: flex;
      align-items: baseline;
      gap: 10px;
      font-family: var(--heading-font);
      color: #0f2742;
    }

    .pricing-card--featured .pricing-amount {
      color: #fff;
    }

    .pricing-amount strong {
      font-size: clamp(2.2rem, 5vw, 3.3rem);
      line-height: 1;
    }

    .pricing-amount span {
      font-size: 0.92rem;
      color: #6d7e92;
    }

    .pricing-card--featured .pricing-amount span {
      color: rgba(255,255,255,0.6);
    }

    .pricing-list {
      list-style: none;
      padding: 0;
      margin: 0 0 24px;
      display: grid;
      gap: 12px;
    }

    .pricing-list li {
      display: flex;
      gap: 10px;
      align-items: flex-start;
      color: #415468;
      line-height: 1.7;
    }

    .pricing-list i {
      color: #00c96b;
      margin-top: 5px;
    }

    .payment-box {
      padding: 18px 18px 16px;
      border-radius: 20px;
      background: rgba(5, 25, 48, 0.04);
      border: 1px solid rgba(52, 152, 219, 0.1);
    }

    .pricing-card--featured .payment-box {
      background: rgba(255,255,255,0.06);
      border-color: rgba(255,255,255,0.08);
    }

    .payment-title {
      display: block;
      font-weight: 700;
      margin-bottom: 10px;
      color: #0f2742;
    }

    .pricing-card--featured .payment-title {
      color: #fff;
    }

    .payment-logos {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 12px;
    }

    .payment-logo {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 9px 12px;
      border-radius: 999px;
      background: rgba(255,255,255,0.88);
      border: 1px solid rgba(52, 152, 219, 0.12);
      color: #10314f;
      font-size: 0.83rem;
      font-weight: 700;
    }

    .payment-logo i {
      font-size: 1rem;
      color: #1e88d8;
    }

    .payment-copy,
    .payment-note {
      margin: 0;
      font-size: 0.92rem;
      line-height: 1.7;
    }

    .payment-note {
      margin-top: 8px;
      color: #6d7e92;
    }

    @media (max-width: 991px) {
      .pricing-grid {
        grid-template-columns: 1fr;
      }

      .pricing-card--featured {
        transform: none;
      }
    }

    @media (max-width: 767px) {
      .pricing-showcase {
        padding-top: 56px;
        padding-bottom: 56px;
      }

      .pricing-intro {
        margin-bottom: 26px;
      }

      .pricing-intro h2 {
        font-size: clamp(1.7rem, 8vw, 2.35rem);
        line-height: 1.12;
      }

      .pricing-card {
        padding: 22px 18px;
        border-radius: 22px;
      }

      .pricing-topline {
        align-items: flex-start;
        flex-direction: column;
        margin-bottom: 18px;
      }

      .pricing-icon {
        width: 50px;
        height: 50px;
        border-radius: 16px;
        font-size: 1.15rem;
      }

      .pricing-card h3 {
        font-size: 1.25rem;
      }

      .pricing-amount {
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
      }

      .pricing-amount strong {
        font-size: clamp(2rem, 12vw, 2.8rem);
      }

      .payment-box {
        padding: 16px 14px 14px;
        border-radius: 18px;
      }

      .payment-logos {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 8px;
      }

      .payment-logo {
        justify-content: center;
        width: 100%;
        min-width: 0;
        padding: 9px 10px;
        font-size: 0.76rem;
        text-align: center;
      }
    }

    @media (max-width: 420px) {
      .pricing-card {
        padding: 20px 16px;
      }

      .payment-logos {
        grid-template-columns: 1fr;
      }

      .payment-logo {
        font-size: 0.8rem;
      }
    }

    .cta-panel {
      padding: 34px;
      border-radius: 30px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.12);
      backdrop-filter: blur(10px);
      box-shadow: 0 24px 60px rgba(0,0,0,0.22);
    }

    .cta-panel h3 {
      color: #fff;
      font-size: clamp(2rem, 3vw, 3rem);
      margin-bottom: 14px;
    }

    .cta-panel p {
      max-width: 760px;
      margin: 0 auto 22px;
      color: rgba(255,255,255,0.78);
      font-size: 1.05rem;
      line-height: 1.8;
    }

    @media (max-width: 991px) {
      .hero-landing {
        padding: 148px 0 92px;
      }

      .hero-focus-card {
        margin-top: 8px;
      }
    }

    @media (max-width: 767px) {
      .floating-commit {
        right: 12px;
        bottom: 12px;
      }

      .floating-commit__img {
        width: min(160px, 40vw);
      }

      .hero-landing-copy {
        text-align: center;
      }

      .hero-lead {
        margin: 0 auto;
      }

      .hero-action-row {
        justify-content: center;
      }

      .hero-primary-btn,
      .hero-secondary-btn {
        width: 100%;
        min-width: 0;
      }

      .hero-proof-grid {
        grid-template-columns: 1fr;
      }

      .cta-panel {
        padding: 26px 22px;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .floating-commit__img,
      .hero-primary-btn,
      .hero-secondary-btn {
        transition: none !important;
      }
    }
  </style>

</head>

<body class="index-page">

<!-- LOGO FLOTANTE -->
<div id="logo-float-wrap" class="floating-commit">
  <a href="https://commit.greenpc.dev" target="_blank" rel="noopener" id="logo-link" class="floating-commit__link">
    <img
      src="./assets/img/commit_logo.png"
      id="logo-float"
      class="floating-commit__img"
      alt="COMMIT by GreenPC"
    />
  </a>
</div>

<script>
(function(){
  const logo = document.getElementById('logo-float');
  const link = document.getElementById('logo-link');
  if (!logo || !link) return;

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
  }

  if (canTilt) {
    document.addEventListener('mousemove', function(e){
      const rect = logo.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      currentMouseX = Math.min(Math.max((e.clientX - cx) / (window.innerWidth / 2), -1), 1);
      currentMouseY = Math.min(Math.max((e.clientY - cy) / (window.innerHeight / 2), -1), 1);
      updateTransform();
    });
  }

  /* ── HOVER glow ── */
  link.addEventListener('mouseenter', function(){
    logo.style.boxShadow = '0 0 28px rgba(0,230,118,0.45), 0 0 60px rgba(0,230,118,0.15)';
    logo.style.borderColor = 'rgba(0,230,118,0.6)';
  });
  link.addEventListener('mouseleave', function(){
    logo.style.boxShadow = '0 0 0 0 rgba(0,230,118,0)';
    logo.style.borderColor = 'rgba(0,230,118,0.2)';
    currentMouseX = 0;
    currentMouseY = 0;
    updateTransform();
  });
})();
</script>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="./index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="./assets/img/logo.png" alt="Logo Green PC">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Inicio<br></a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#pricing">Precios</a></li>
          <li><a href="#portfolio">Portafolio</a></li>
          <li><a href="./blog.php">Blogs</a></li>
          <li><a href="./programacion.php">Programación</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="./index.php"> <i class="bi bi-translate"></i> English</a>
    </div>
  </header>

  <main class="main">

    <!-- Sección Hero -->
    <section id="hero" class="hero section dark-background hero-landing">

      <img src="assets/img/hero-bg.jpg" alt="Fondo de productos digitales de Green PC" data-aos="fade-in">

      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-7 hero-landing-copy" data-aos="fade-up" data-aos-delay="100">
            <span class="hero-badge-pill"><i class="bi bi-stars"></i> Web, IA, UX y Seguridad</span>
            <h2>Soluciones digitales potentes para equipos que necesitan ejecución, no solo ideas.</h2>
            <p class="hero-lead">Diseñamos y construimos plataformas web, flujos con IA, sistemas UX, apps móviles y capas de ciberseguridad que ayudan a las empresas a avanzar más rápido, simplificar operaciones y lanzar con mayor confianza.</p>
            <div class="hero-action-row">
              <a class="hero-primary-btn" href="#services"><i class="bi bi-grid-1x2-fill"></i> Explorar servicios</a>
              <a class="hero-secondary-btn" href="#portfolio"><i class="bi bi-briefcase-fill"></i> Ver portafolio</a>
            </div>
            <div class="hero-proof-grid">
              <div class="hero-proof-card">
                <strong>600+</strong>
                <span>clientes en múltiples industrias</span>
              </div>
              <div class="hero-proof-card">
                <strong>400+</strong>
                <span>proyectos entregados y refinados</span>
              </div>
              <div class="hero-proof-card">
                <strong>IA + UX</strong>
                <span>aplicadas a sistemas útiles para negocio</span>
              </div>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-left" data-aos-delay="180">
            <aside class="hero-focus-card">
              <span class="hero-focus-label">Lo que construimos</span>
              <h3>Del concepto al lanzamiento.</h3>
              <p>Green PC combina ingeniería, diseño y automatización para que cada entrega resuelva un flujo real en lugar de convertirse en otra herramienta desconectada.</p>
              <ul>
                <li><i class="bi bi-check2-circle"></i><span>Plataformas a medida para operación, contenidos, educación, legal y procesos internos.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>Automatización con IA para reducir fricción y mejorar visibilidad.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>Diseño de producto y frontends con intención, no plantillas genéricas.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>Desarrollo con criterio de seguridad para sistemas con datos reales de negocio.</span></li>
              </ul>
            </aside>
          </div>
        </div>

        <div class="row gy-4 mt-4 justify-content-center" data-aos="fade-up" data-aos-delay="220">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="#services">Investigación</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-bullseye"></i>
              <h3><a href="#services">Desarrollo</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-fullscreen-exit"></i>
              <h3><a href="#services">UI / UX</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-robot"></i>
              <h3><a href="#features">IA</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="icon-box">
              <i class="bi bi-fingerprint"></i>
              <h3><a href="#services">Ciberseguridad</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Sección Hero -->

    <!-- Sección Acerca de -->
    <section id="about" class="about section">
      
      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SOBRE NOSOTROS</h2>
        <p>Quiénes somos</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about.jpg" class="img-fluid" alt="Equipo de Green PC colaborando en estrategia y tecnología">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content home-about-copy">
            <h3>Sobre Nosotros</h3>
            <p class="lead-copy">Trabajamos en la intersección entre ingeniería de software, diseño de producto e implementación de IA. El objetivo es simple: ayudar a las organizaciones a convertir ideas complejas en sistemas digitales que la gente realmente pueda usar, escalar y confiar.</p>
            <p class="lead-copy">En lugar de ofrecer servicios aislados, tratamos investigación, desarrollo, UX, automatización y seguridad como partes del mismo flujo de entrega. Eso hace que el producto final sea más coherente y más fácil de evolucionar.</p>
            <ul class="about-highlight-list">
              <li><i class="bi bi-check2"></i><span>Desarrollo a medida orientado a flujos reales de negocio, no plantillas genéricas.</span></li>
              <li><i class="bi bi-check2"></i><span>IA y automatización pensadas para quitar fricción y mejorar decisiones.</span></li>
              <li><i class="bi bi-check2"></i><span>Visión UX aplicada desde el primer borrador hasta la implementación.</span></li>
              <li><i class="bi bi-check2"></i><span>Rigor técnico enfocado en rendimiento, mantenibilidad y seguridad.</span></li>
            </ul>
          </div>
        </div>

      </div>

    </section><!-- /Sección Acerca de -->

    <!-- Sección de Inteligencia Artificial -->
    <section id="features" class="features section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>INTELIGENCIA ARTIFICIAL</h2>
        <p>Nuestros 4 objetivos principales</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container">

        <div class="row gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/features-bg.jpg" alt=""></div>
          <div class="col-lg-6">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-clipboard-pulse flex-shrink-0"></i>
              <div>
                <h4>Transparencia</h4>
                <p>Diseñamos nuestras soluciones de IA con claridad, asegurando que los procesos y la toma de decisiones sean comprensibles y accesibles para todos los interesados.</p>
              </div>
            </div><!-- Fin del Ítem de Característica-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-person-video2 flex-shrink-0"></i>
              <div>
                <h4>Equidad e Inclusión</h4>
                <p>Nuestro compromiso es construir sistemas imparciales que sirvan equitativamente a todos los usuarios, fomentando la diversidad y eliminando la discriminación.</p>
              </div>
            </div><!-- Fin del Ítem de Característica-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-calendar2-week flex-shrink-0"></i>
              <div>
                <h4>Responsabilidad</h4>
                <p>Nos responsabilizamos por el impacto de nuestra IA, probando y refinando rigurosamente nuestras soluciones para mantener los estándares éticos.</p>
              </div>
            </div><!-- Fin del Ítem de Característica-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-bezier2 flex-shrink-0"></i>
              <div>
                <h4>Innovación con Integridad</h4>
                <p>Mientras ampliamos los límites de la tecnología, aseguramos que nuestros avances estén basados en el respeto a la privacidad, la seguridad y las prácticas éticas.</p>
              </div>
            </div><!-- Fin del Ítem de Característica-->

          </div>
        </div>

      </div>

    </section><!-- /Sección de Inteligencia Artificial -->

    <!-- Sección de Servicios -->
    <section id="services" class="services section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SERVICIOS</h2>
        <p>Consulta nuestros servicios</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-globe" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalDesarrolloWeb">
                <h3>Desarrollo Web</h3>
              </a>
              <p class="service-desc">Sitios web y apps a medida con frameworks modernos y mejores prácticas.</p>
            </div>
          </div><!-- Fin del Ítem de Servicio -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-ui-radios" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalDisenoUX">
                <h3>Diseño UX</h3>
              </a>
              <p class="service-desc">Diseño centrado en el usuario que hace tu producto intuitivo y atractivo.</p>
            </div>
          </div><!-- Fin del Ítem de Servicio -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-journal-richtext" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalInvestigacion">
                <h3>Investigación</h3>
              </a>
              <p class="service-desc">Investigación de mercado y tecnología basada en datos para decisiones más inteligentes.</p>
            </div>
          </div><!-- Fin del Ítem de Servicio -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-robot" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalAutomatizacion">
                <h3>Automatización</h3>
              </a>
              <p class="service-desc">Automatización con IA para eliminar tareas repetitivas y escalar tus procesos.</p>
            </div>
          </div><!-- Fin del Ítem de Servicio -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-phone" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalAppsMoviles">
                <h3>Aplicaciones Móviles</h3>
              </a>
              <p class="service-desc">Apps nativas y multiplataforma para iOS y Android.</p>
            </div>
          </div><!-- Fin del Ítem de Servicio -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-fingerprint" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalCiberseguridad">
                <h3>Ciberseguridad</h3>
              </a>
              <p class="service-desc">Protege tus sistemas con auditorías, pruebas de penetración y cumplimiento normativo.</p>
            </div>
          </div><!-- Fin del Ítem de Servicio -->

        </div>

      </div>

    </section><!-- /Sección de Servicios -->

    <section id="pricing" class="pricing-showcase section">
      <div class="container pricing-shell">
        <div class="pricing-intro" data-aos="fade-up">
          <span class="pricing-kicker"><i class="bi bi-cash-coin"></i> Cotización base</span>
          <h2>Tres puntos de partida comunes para proyectos que necesitan alcance claro y una decisión rápida.</h2>
          <p>Estos valores son referenciales para una primera etapa. El precio final depende de complejidad, integraciones, profundidad del diseño, infraestructura y velocidad de entrega.</p>
        </div>

        <div class="pricing-grid">
          <article class="pricing-card" data-aos="fade-up" data-aos-delay="50">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-window-stack"></i></span>
              <span class="pricing-tag">Web</span>
            </div>
            <h3>Páginas web</h3>
            <p>Ideal para landing pages, catálogos, sitios de servicios y webs corporativas pequeñas que necesitan buena presentación y una base técnica sólida.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Cotización base desde</span>
              <div class="pricing-amount"><strong>150 USD</strong><span>alcance inicial</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Diseño responsive y dirección visual moderna.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Páginas clave, contacto y estructura lista para publicar.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Adecuado para lanzamiento, validación o posicionamiento de servicios.</span></li>
            </ul>
            <div class="payment-box">
              <span class="payment-title">Métodos de pago</span>
              <div class="payment-logos">
                <span class="payment-logo"><i class="bi bi-bank"></i> Transferencia</span>
                <span class="payment-logo"><i class="bi bi-currency-bitcoin"></i> Bitcoin</span>
                <span class="payment-logo"><i class="bi bi-paypal"></i> PayPal</span>
                <span class="payment-logo"><i class="bi bi-cash-stack"></i> Western Union</span>
              </div>
             
              <p class="payment-note">PayPal puede requerir un pequeño ajuste en el precio por comisiones y conversión.</p>
            </div>
          </article>

          <article class="pricing-card pricing-card--featured" data-aos="fade-up" data-aos-delay="120">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-diagram-3"></i></span>
              <span class="pricing-tag">Operación</span>
            </div>
            <h3>Sistemas de control</h3>
            <p>Pensado para dashboards, herramientas internas, paneles administrativos, flujos operativos y plataformas de control con datos reales de negocio.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Cotización base desde</span>
              <div class="pricing-amount"><strong>800 USD</strong><span>alcance inicial</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Flujos por roles, trazabilidad de datos y vistas administrativas.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Más adecuado para control, productividad y ejecución interna.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Escalable hacia módulos, reportes y automatizaciones personalizadas.</span></li>
            </ul>
            <div class="payment-box">
              <span class="payment-title">Métodos de pago</span>
              <div class="payment-logos">
                <span class="payment-logo"><i class="bi bi-bank"></i> Transferencia</span>
                <span class="payment-logo"><i class="bi bi-currency-bitcoin"></i> Bitcoin</span>
                <span class="payment-logo"><i class="bi bi-paypal"></i> PayPal</span>
                <span class="payment-logo"><i class="bi bi-cash-stack"></i> Western Union</span>
              </div>
             
              <p class="payment-note">PayPal puede requerir un pequeño ajuste en el precio por comisiones y conversión.</p>
            </div>
          </article>

          <article class="pricing-card" data-aos="fade-up" data-aos-delay="190">
            <div class="pricing-topline">
              <span class="pricing-icon"><i class="bi bi-stars"></i></span>
              <span class="pricing-tag">IA</span>
            </div>
            <h3>Integraciones con IA</h3>
            <p>Orientado a equipos que necesitan asistentes, flujos automáticos, formularios enriquecidos con IA, procesamiento documental o soporte operativo sobre sistemas existentes.</p>
            <div class="pricing-base">
              <span class="pricing-base-label">Cotización base desde</span>
              <div class="pricing-amount"><strong>400 USD</strong><span>alcance inicial</span></div>
            </div>
            <ul class="pricing-list">
              <li><i class="bi bi-check2-circle"></i><span>Conecta IA a procesos actuales en lugar de sumar otra herramienta aislada.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Útil para soporte, clasificación, resúmenes y tareas repetitivas.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Se puede integrar con webs, sistemas administrativos o procesos internos.</span></li>
            </ul>
            <div class="payment-box">
              <span class="payment-title">Métodos de pago</span>
              <div class="payment-logos">
                <span class="payment-logo"><i class="bi bi-bank"></i> Transferencia</span>
                <span class="payment-logo"><i class="bi bi-currency-bitcoin"></i> Bitcoin</span>
                <span class="payment-logo"><i class="bi bi-paypal"></i> PayPal</span>
                <span class="payment-logo"><i class="bi bi-cash-stack"></i> Western Union</span>
              </div>
             
              <p class="payment-note">PayPal puede requerir un pequeño ajuste en el precio por comisiones y conversión.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Sección de Portafolio -->
    <section id="portfolio" class="portfolio section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>PORTAFOLIO</h2>
        <p>Consulta nuestro portafolio</p>
      </div><!-- Fin del Título de la Sección -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Diseño</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- Fin de Filtros del Portafolio -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="Captura del sistema web PHP de Favian Lema Lawyers">
              <div class="portfolio-info">
                <h4>Favian Lema Lawyers</h4>
                <p>Sistema Web PHP</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Sistema Web PHP Favian Lema" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.favianlema.com/" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="Captura de la plataforma Java de Obsidiam Corp">
              <div class="portfolio-info">
                <h4>Obsidiam Corp.</h4>
                <p>Sistema Java Spring Boot</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Sistema Java de Obsidiam para Criptomonedas" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.obsidiam.com" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="Captura del sitio WordPress de ElPeriodicoDeCeuta">
              <div class="portfolio-info">
                <h4>ElPeriodicoDeCeuta</h4>
                <p>Wordpress Sistema Web</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="ElPeriodicoDeCeuta Wordpress Sistema Web" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.elperiodicodeceuta.es/" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg" ></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="Captura de la plataforma React de Openwebinars">
              <div class="portfolio-info">
                <h4>Openwebinars</h4>
                <p>Sistema Web con React + Investigación en TI</p>
                <a href="https://openwebinars.net/autor/xavicq/">Perfil Profesional</a>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="Documentación del Sistema React de Openwebinars + Investigación TI" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://openwebinars.net/" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="Captura del periodico digital Masquealdia en WordPress">
              <div class="portfolio-info">
                <h4>Masquealdia</h4>
                <p>Sistema Wordpress</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Masquealdia Newspaper Wordpress" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://masquealdia.com/" title="Más detalles" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="Captura de la plataforma editorial TeleCeuta en WordPress">
              <div class="portfolio-info">
                <h4>TeleCeuta</h4>
                <p>Wordpress Sistema Web</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="TeleCeuta Wordpress Sistema Web" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.teleceuta.com" title="Más detalles" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="Captura del sistema de responsabilidad empresarial de CHC Empresarial">
              <div class="portfolio-info">
                <h4>CHC Empresarial</h4>
                <p>Sistema de Responsabilidad en Wordpress</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="Solución de Sistema de Responsabilidad en Wordpress" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://chcempresarial.com/index.php" title="Más detalles" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="Captura de la plataforma ULANS de tutoriales y diseno web">
              <div class="portfolio-info">
                <h4>ULANS</h4>
                <p>Tutoriales y Diseño Web en React + Node JS</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Tutoriales y Diseño Web en React + Node JS de ULANS" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://universidadulans.com/campus/login/index.php" title="Más detalles" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="Captura de la plataforma medica con IA de AINNOVA Technologies">
              <div class="portfolio-info">
                <h4>AINNOVA Technologies</h4>
                <p>Sistema Médico Django respaldado con IA y Modelos Entrenados</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Sistema Médico Django respaldado con IA y Modelos Entrenados" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.ainnovatech.com/" title="Más detalles" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-10.jpg" class="img-fluid" alt="Captura de la plataforma Moodle de la PUCE Ecuador">
              <div class="portfolio-info">
                <h4>PUCE Ecuador</h4>
                <p>Sistema de Plataforma Moodle con PHP y Tailwind UX</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-10.jpg" title="Sistema de Plataforma Moodle de PUCE con PHP y Tailwind UX" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://auth-eva.puce.edu.ec:8443/login?service=https%3A%2F%2Fssoserver2.puce.edu.ec%2F"  target="_blank" rel="noopener" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-12.jpg" class="img-fluid" alt="Vista previa del portafolio de diseno en Behance de Green PC">
              <div class="portfolio-info">
                <h4>Behance</h4>
               <p>Carpeta con trabajos de diseño</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-12.jpg" title="Carpeta de Behance con trabajos de diseño" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.behance.net/xaviercalvas"  target="_blank" rel="noopener" title="Más detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-11.jpg" class="img-fluid" alt="Vista previa de la plataforma RHEA en desarrollo">
              <div class="portfolio-info">
                <h4>RHEA System Platform (en desarrollo)</h4>
                <p>Sistema Django con Soporte de Automatización con IA</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-11.jpg" title="Plataforma RHEA con soporte de automatización con Django e IA (en desarrollo)" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- Fin del Ítem del Portafolio -->

          </div><!-- Fin del Contenedor del Portafolio -->
        </div>
      </div>
    </section><!-- /Sección de Portafolio -->

    <!-- Sección de Métricas -->
    <section id="stats" class="stats section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>MÉTRICAS</h2>
        <p>Nuestra trayectoria</p>
      </div><!-- Fin del Título de la Sección -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-lg-6">
            <img src="assets/img/stats-img.jpg" alt="Ilustracion del crecimiento y las metricas de Green PC" class="img-fluid stats-visual" width="600px">
          </div>

          <div class="col-lg-6">

            <div class="row gy-2">

              <div class="col-lg-6 ">
                <div class="stats-item d-flex">
                  <i class="bi bi-emoji-smile flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="600" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Clientes Satisfechos</strong> <span>alrededor del mundo: Ecuador, España, México, Argentina, Estados Unidos, Colombia, Perú, Costa Rica y más.</span></p>
                  </div>
                </div>
              </div><!-- Fin del Ítem de Métrica -->

              <div class="col-lg-6 ">
                <div class="stats-item d-flex">
                  <i class="bi bi-journal-richtext flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Proyectos</strong> <span>utilizando alrededor de 10 tecnologías como frameworks, herramientas de diseño, desarrollos de IA y más.</span></p>
                  </div>
                </div>
              </div><!-- Fin del Ítem de Métrica -->

              <div class="col-lg-6 ">
                <div class="stats-item d-flex">
                  <i class="bi bi-clock-history flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="200000" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Horas</strong> <span>dedicadas al desarrollo e investigación</span></p>
                  </div>
                </div>
              </div><!-- Fin del Ítem de Métrica -->

              <div class="col-lg-6 ">
                <div class="stats-item d-flex">
                  <i class="bi bi-robot flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Automatización</strong> <span>utilizando herramientas y servicios de IA</span></p>
                  </div>
                </div>
              </div><!-- Fin del Ítem de Métrica -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Sección de Métricas -->


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
                "delay": 1500,
                "pauseOnMouseEnter": true
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

  <img src="assets/img/cta-bg.jpg" alt="Fondo de la sección de contacto de Green PC">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="text-center cta-panel" data-aos="zoom-in" data-aos-delay="100">
          <h3>¿Necesitas una hoja de ruta más clara para tu próximo producto digital?</h3>
          <p>Cuéntanos qué necesitas construir, automatizar, rediseñar o proteger. Podemos ayudarte a definir alcance, prioridades y la mezcla tecnológica correcta antes de que el proyecto se convierta en ruido.</p>
          <a class="cta-btn btn-lg" href="https://wa.link/hczezg"> <i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Call To Action Section -->

  </main>

  <!-- ===== MODALES DE SERVICIOS (ES) ===== -->

  <!-- Modal: Desarrollo Web -->
  <div class="modal fade" id="modalDesarrolloWeb" tabindex="-1" aria-labelledby="modalDesarrolloWebLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-globe" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalDesarrolloWebLabel">Desarrollo Web</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Desarrollo Web -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/webdev.jpg" alt="Desarrollo Web" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es el Desarrollo Web?</h6>
              <p>El desarrollo web es el proceso de construir, programar y mantener sitios web y aplicaciones que funcionan en internet. Abarca desde páginas estáticas simples hasta plataformas dinámicas y complejas.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Sitios web y aplicaciones web a medida</li>
                <li><i class="bi bi-check-circle-fill"></i> Frameworks modernos: React, Vue, Laravel, Django</li>
                <li><i class="bi bi-check-circle-fill"></i> Diseño responsivo y mobile-first</li>
                <li><i class="bi bi-check-circle-fill"></i> APIs RESTful e integración de backends</li>
                <li><i class="bi bi-check-circle-fill"></i> Optimización de rendimiento y SEO</li>
                <li><i class="bi bi-check-circle-fill"></i> Mantenimiento y soporte continuo</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Desarrollo Web -->

  <!-- Modal: Diseño UX -->
  <div class="modal fade" id="modalDisenoUX" tabindex="-1" aria-labelledby="modalDisenoUXLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-ui-radios" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalDisenoUXLabel">Diseño UX</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Diseño UX -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/uxdesign.jpg" alt="Diseño UX" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es el Diseño UX?</h6>
              <p>El Diseño de Experiencia de Usuario (UX) se enfoca en crear productos que brinden experiencias significativas, relevantes y agradables. Cubre todo el recorrido de interacción entre una persona y un producto digital.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Investigación de usuarios y creación de personas</li>
                <li><i class="bi bi-check-circle-fill"></i> Wireframing y prototipado</li>
                <li><i class="bi bi-check-circle-fill"></i> Sistemas de diseño UI y guías de estilo</li>
                <li><i class="bi bi-check-circle-fill"></i> Pruebas de usabilidad e iteración</li>
                <li><i class="bi bi-check-circle-fill"></i> Diseño accesible e inclusivo</li>
                <li><i class="bi bi-check-circle-fill"></i> Entrega de diseño para desarrolladores</li>
              </ul>
            </div>
          </div>
        </div>
          <div class="modal-footer service-modal-footer">
            <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
          </div>
      </div>
    </div>
  </div><!-- Fin Modal: Diseño UX -->

  <!-- Modal: Investigación -->
  <div class="modal fade" id="modalInvestigacion" tabindex="-1" aria-labelledby="modalInvestigacionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-journal-richtext" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalInvestigacionLabel">Investigación</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Investigación -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/research.jpg" alt="Investigación" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es la Investigación Tecnológica?</h6>
              <p>La investigación tecnológica implica recopilar, analizar e interpretar datos de forma sistemática para descubrir perspectivas que impulsen mejores decisiones estratégicas, desarrollo de productos y ventaja competitiva.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Análisis de mercado y competencia</li>
                <li><i class="bi bi-check-circle-fill"></i> Estudios de viabilidad tecnológica</li>
                <li><i class="bi bi-check-circle-fill"></i> Recopilación y análisis de datos</li>
                <li><i class="bi bi-check-circle-fill"></i> Informes de investigación asistidos por IA</li>
                <li><i class="bi bi-check-circle-fill"></i> Pronóstico de tendencias e insights</li>
                <li><i class="bi bi-check-circle-fill"></i> Documentación académica e industrial</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Investigación -->

  <!-- Modal: Automatización -->
  <div class="modal fade" id="modalAutomatizacion" tabindex="-1" aria-labelledby="modalAutomatizacionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-robot" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalAutomatizacionLabel">Automatización</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Automatización -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/automation.jpg" alt="Automatización" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es la Automatización con IA?</h6>
              <p>La automatización con IA utiliza inteligencia artificial y aprendizaje automático para ejecutar tareas repetitivas, optimizar flujos de trabajo y tomar decisiones inteligentes, liberando a tu equipo para enfocarse en lo que más importa.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Automatización de flujos y procesos</li>
                <li><i class="bi bi-check-circle-fill"></i> Chatbots de IA y asistentes virtuales</li>
                <li><i class="bi bi-check-circle-fill"></i> RPA (Automatización Robótica de Procesos)</li>
                <li><i class="bi bi-check-circle-fill"></i> Integración con Make, Zapier, n8n</li>
                <li><i class="bi bi-check-circle-fill"></i> Scripts de automatización personalizados y APIs</li>
                <li><i class="bi bi-check-circle-fill"></i> Dashboards de inteligencia de negocio</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Automatización -->

  <!-- Modal: Aplicaciones Móviles -->
  <div class="modal fade" id="modalAppsMoviles" tabindex="-1" aria-labelledby="modalAppsMovilesLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-phone" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalAppsMovilesLabel">Aplicaciones Móviles</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Aplicaciones Móviles -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/mobileapps.jpg" alt="Aplicaciones Móviles" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué son las Aplicaciones Móviles?</h6>
              <p>Las aplicaciones móviles son programas de software diseñados para ejecutarse en smartphones y tabletas. Brindan acceso rápido y optimizado para pantalla táctil a servicios, información y herramientas desde cualquier lugar.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Desarrollo nativo para iOS y Android</li>
                <li><i class="bi bi-check-circle-fill"></i> Apps multiplataforma (React Native, Flutter)</li>
                <li><i class="bi bi-check-circle-fill"></i> Diseño UI/UX para móvil</li>
                <li><i class="bi bi-check-circle-fill"></i> Integración de APIs y backends</li>
                <li><i class="bi bi-check-circle-fill"></i> Publicación en App Store y Google Play</li>
                <li><i class="bi bi-check-circle-fill"></i> Mantenimiento y actualizaciones de versiones</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Aplicaciones Móviles -->

  <!-- Modal: Ciberseguridad -->
  <div class="modal fade" id="modalCiberseguridad" tabindex="-1" aria-labelledby="modalCiberseguridadLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-fingerprint" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalCiberseguridadLabel">Ciberseguridad</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- ESPACIO PARA IMAGEN: reemplaza src con tu imagen de Ciberseguridad -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/cybersecurity.jpg" alt="Ciberseguridad" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Imagen próximamente</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!--<h6 class="service-modal-subtitle">¿Qué es la Ciberseguridad?</h6>
              <p>La ciberseguridad es la práctica de proteger sistemas, redes y programas de ataques digitales. Implica defenderse contra el acceso no autorizado, brechas de datos, ransomware y otras amenazas cibernéticas.</p>-->
              <h6 class="service-modal-subtitle mt-3">Lo que ofrecemos</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Auditorías de seguridad y evaluación de vulnerabilidades</li>
                <li><i class="bi bi-check-circle-fill"></i> Pruebas de penetración</li>
                <li><i class="bi bi-check-circle-fill"></i> Cifrado de datos y protocolos seguros</li>
                <li><i class="bi bi-check-circle-fill"></i> Firewall y detección de intrusiones</li>
                <li><i class="bi bi-check-circle-fill"></i> Capacitación en seguridad para equipos</li>
                <li><i class="bi bi-check-circle-fill"></i> Cumplimiento normativo (GDPR, ISO 27001)</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contáctanos</a>
        </div>
      </div>
    </div>
  </div><!-- Fin Modal: Ciberseguridad -->

  <!-- ===== SERVICE MODAL STYLES ===== -->
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

include_once './assets/includes/footer-es.php'; // Include the footer file

?>
