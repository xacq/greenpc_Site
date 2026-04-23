<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Green PC — Powerful Digital Solutions & AI</title>
  <meta name="description" content="Green PC — Web development, AI automation, UX design, mobile apps & cybersecurity. Serving 600+ happy clients worldwide across 8+ countries.">
  <meta name="keywords" content="web development, AI, artificial intelligence, UX design, cybersecurity, mobile apps, digital solutions, automation, Green PC">
  <meta property="og:title" content="Green PC — Powerful Digital Solutions & AI">
  <meta property="og:description" content="Web development, AI automation, UX design, mobile apps and cybersecurity for businesses worldwide.">
  <meta property="og:image" content="https://greenpc.dev/assets/img/logo.png">
  <meta property="og:url" content="https://greenpc.dev/">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Green PC — Powerful Digital Solutions & AI">
  <meta name="twitter:description" content="Web development, AI automation, UX design, mobile apps and cybersecurity for businesses worldwide.">
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
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="./blog.php">Blog</a></li>
          <li><a href="./programacion.php">Programming</a></li>
          <!--li><a href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li-->

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="./index_es.php"> <i class="bi bi-translate"></i> Español</a>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background hero-landing">

      <img src="assets/img/hero-bg.jpg" alt="Digital product background for Green PC" data-aos="fade-in">

      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-7 hero-landing-copy" data-aos="fade-up" data-aos-delay="100">
            <span class="hero-badge-pill"><i class="bi bi-stars"></i> Web, AI, UX and Security</span>
            <h2>Powerful digital solutions for teams that need execution, not just ideas.</h2>
            <p class="hero-lead">We design and build web platforms, AI workflows, UX systems, mobile apps and cybersecurity layers that help businesses move faster, simplify operations and launch with more confidence.</p>
            <div class="hero-action-row">
              <a class="hero-primary-btn" href="#services"><i class="bi bi-grid-1x2-fill"></i> Explore services</a>
              <a class="hero-secondary-btn" href="#portfolio"><i class="bi bi-briefcase-fill"></i> See portfolio</a>
            </div>
            <div class="hero-proof-grid">
              <div class="hero-proof-card">
                <strong>600+</strong>
                <span>clients across multiple industries</span>
              </div>
              <div class="hero-proof-card">
                <strong>400+</strong>
                <span>projects delivered and refined</span>
              </div>
              <div class="hero-proof-card">
                <strong>AI + UX</strong>
                <span>built into practical business systems</span>
              </div>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-left" data-aos-delay="180">
            <aside class="hero-focus-card">
              <span class="hero-focus-label">What we build</span>
              <h3>From concept to product launch.</h3>
              <p>Green PC combines engineering, design and automation so each delivery solves a real workflow instead of becoming another disconnected tool.</p>
              <ul>
                <li><i class="bi bi-check2-circle"></i><span>Custom platforms for operations, content, education, legal and internal processes.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>AI-powered automation to reduce repetitive work and improve visibility.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>Product design and frontends that feel intentional, not generic.</span></li>
                <li><i class="bi bi-check2-circle"></i><span>Security-minded development for systems that handle real business data.</span></li>
              </ul>
            </aside>
          </div>
        </div>

        <div class="row gy-4 mt-4 justify-content-center" data-aos="fade-up" data-aos-delay="220">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="#services">Research</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-bullseye"></i>
              <h3><a href="#services">Development</a></h3>
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
              <h3><a href="#features">AI</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="icon-box">
              <i class="bi bi-fingerprint"></i>
              <h3><a href="#services">Cybersecurity</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>ABOUT US</h2>
        <p>Who we are</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about.jpg" class="img-fluid" alt="Green PC team collaboration and technology strategy">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content home-about-copy">
            <h3>About Us</h3>
            <p class="lead-copy">We work at the intersection of software engineering, product design and AI implementation. Our goal is straightforward: help organizations turn complex ideas into digital systems people can actually use, scale and trust.</p>
            <p class="lead-copy">Instead of offering disconnected services, we treat research, development, UX, automation and security as parts of the same delivery pipeline. That makes the final product more coherent and easier to grow.</p>
            <ul class="about-highlight-list">
              <li><i class="bi bi-check2"></i><span>Custom development tailored to business workflows, not generic templates.</span></li>
              <li><i class="bi bi-check2"></i><span>AI and automation designed to remove friction and surface better decisions.</span></li>
              <li><i class="bi bi-check2"></i><span>UX thinking applied from the first draft through implementation.</span></li>
              <li><i class="bi bi-check2"></i><span>Technical rigor focused on performance, maintainability and security.</span></li>
            </ul>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>ARTIFICIAL INTELLIGENCE</h2>
        <p>Our 4 principal goals</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/features-bg.jpg" alt=""></div>
          <div class="col-lg-6">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-clipboard-pulse flex-shrink-0"></i>
              <div>
                <h4>Transparency</h4>
                <p>We design our AI solutions with clarity in mind, ensuring that processes and decision-making are understandable and 
                  accessible to all stakeholders.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-person-video2 flex-shrink-0"></i>
              <div>
                <h4>Fairness and Inclusivity</h4>
                <p>Our commitment is to build unbiased systems that serve all users equitably, fostering diversity and eliminating 
                  discrimination.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-calendar2-week flex-shrink-0"></i>
              <div>
                <h4>Accountability</h4>
                <p>We hold ourselves responsible for the impact of our AI, rigorously testing and refining our solutions to uphold 
                  ethical standards.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-bezier2 flex-shrink-0"></i>
              <div>
                <h4>Innovation with Integrity</h4>
                <p>While pushing the boundaries of technology, we ensure that our advancements are rooted in respect for privacy, 
                  security, and ethical practices.</p>
              </div>
            </div><!-- End Features Item-->

          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SERVICES</h2>
        <p>Check our Services</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-globe" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalWebDev">
                <h3>Web Dev</h3>
              </a>
              <p class="service-desc">Custom websites &amp; web apps built with modern frameworks and best practices.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-ui-radios" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalUXDesign">
                <h3>UX Design</h3>
              </a>
              <p class="service-desc">Human-centered design that makes your digital product intuitive and engaging.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-journal-richtext" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalResearch">
                <h3>Research</h3>
              </a>
              <p class="service-desc">Data-driven market and technology research to inform smarter decisions.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-robot" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalAutomation">
                <h3>Automation</h3>
              </a>
              <p class="service-desc">AI-powered automation to eliminate repetitive tasks and scale workflows.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-phone" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalMobileApps">
                <h3>Mobile Apps</h3>
              </a>
              <p class="service-desc">Native and cross-platform mobile apps for iOS and Android.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-fingerprint" style="font-size: 4rem;"></i>
              </div>
              <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#modalCybersecurity">
                <h3>Cybersecurity</h3>
              </a>
              <p class="service-desc">Protect your systems with security audits, testing, and compliance support.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>PORTFOLIO</h2>
        <p>Check our Portfolio</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Design</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="Screenshot of the Favian Lema Lawyers PHP web system">
              <div class="portfolio-info">
                <h4>Favian Lema Lawyers</h4>
                <p>PHP Web System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Favian Lema PHP Web System" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.favianlema.com/" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="Screenshot of the Obsidiam Corp Java Spring Boot platform">
              <div class="portfolio-info">
                <h4>Obsidiam Corp.</h4>
                <p>Java Spring Boot System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Obsidiam Java System for Criptocoins" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.obsidiam.com" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="Screenshot of the ElPeriodicoDeCeuta WordPress website">
              <div class="portfolio-info">
                <h4>ElPeriodicoDeCeuta</h4>
                <p>WordPress System </p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="elperiodicodeceuta.es WordPress System" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.elperiodicodeceuta.es/" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg" ></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="Screenshot of the Openwebinars React web platform">
              <div class="portfolio-info">
                <h4>Openwebinars</h4>
                <p>React Web System + Researching IT</p>
                <a href="https://openwebinars.net/autor/xavicq/">Professional Profile</a>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="Openwebinars React System + Researching IT Documentation" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://openwebinars.net/" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="Screenshot of the Masquealdia WordPress news site">
              <div class="portfolio-info">
                <h4>Masquealdia</h4>
                <p>Wordpress System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Masquealdia Newspaper Wordpress" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://masquealdia.com/" title="More Details" class="details-link" target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="Screenshot of the TeleCeuta WordPress publishing platform">
              <div class="portfolio-info">
                <h4>TeleCeuta</h4>
                <p>Wordpress System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="TeleCeuta Wordpress System" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.teleceuta.com" title="More Details" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="Screenshot of the CHC Empresarial accountability website">
              <div class="portfolio-info">
                <h4>CHC Empresarial</h4>
                <p>Wordpress Accountability System</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="Wordpress Accountability System Solution" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://chcempresarial.com/index.php" title="More Details" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="Screenshot of the ULANS tutorials and web design platform">
              <div class="portfolio-info">
                <h4>ULANS</h4>
                <p>Tutorials and Web Design on React + Node JS</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="ULANS Tutorials and Web Design on on React + Node JS" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://universidadulans.com/campus/login/index.php" title="More Details" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="Screenshot of the AINNOVA Technologies medical AI platform">
              <div class="portfolio-info">
                <h4>AINNOVA Technologies</h4>
               <p>Django Medical System supported with AI and Models Trained</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Django Medical System supported with AI and Models Trained" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.ainnovatech.com/" title="More Details" class="details-link"  target="_blank" rel="noopener"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-10.jpg" class="img-fluid" alt="Screenshot of the PUCE Ecuador Moodle platform">
              <div class="portfolio-info">
                <h4>PUCE Ecuador</h4>
               <p>Moodle Platform System with PHP and Tailwind UX</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-10.jpg" title="PUCE Moodle Platform System with PHP and Tailwind UX" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://auth-eva.puce.edu.ec:8443/login?service=https%3A%2F%2Fssoserver2.puce.edu.ec%2F"  target="_blank" rel="noopener" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-12.jpg" class="img-fluid" alt="Preview of the Green PC Behance design portfolio">
              <div class="portfolio-info">
                <h4>Behance</h4>
               <p>Folder with design works</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-12.jpg" title="Behance Folder with design works" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://www.behance.net/xaviercalvas"  target="_blank" rel="noopener" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-11.jpg" class="img-fluid" alt="Preview of the RHEA platform under development">
              <div class="portfolio-info">
                <h4>RHEA System Platform (on dev)</h4>
               <p>Django System with AI Automatization Support</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-11.jpg" title="RHEA System Platform with Django and AI Automatization Support (developing)" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <!--a href="#"  target="_blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a-->
              </div>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>METRICS</h2>
        <p>Our Background</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-lg-6">
            <img src="assets/img/stats-img.jpg" alt="Green PC metrics and project growth illustration" class="img-fluid stats-visual" width="600px">
          </div>

          <div class="col-lg-6">

            <div class="row gy-2">

              <div class="col-lg-6 ">
                <div class="stats-item d-flex">
                  <i class="bi bi-emoji-smile flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="600" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> <span>around the world: Ecuador, España, Mexico, Argentina, Estados Unidos, Colombia, Peru, Costa Rica and more.</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6 ">
                <div class="stats-item d-flex">
                  <i class="bi bi-journal-richtext flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> <span>using around 10 technologies like Frameworks, Designs Tools, AI Developments and more.</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6 ">
                <div class="stats-item d-flex">
                  <i class="bi bi-clock-history flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="200000" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hours</strong> <span>on developing and Researching</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6 ">
                <div class="stats-item d-flex">
                  <i class="bi bi-robot flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Automation </strong> <span>using AI Tools and Services</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Stats Section -->


<!-- Clients Section -->
<section id="clients" class="clients section">

  <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>SKILLS</h2>
      <p>What Technologies Do We Use</p>
    </div><!-- End Section Title -->
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

</section><!-- /Clients Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

  <img src="assets/img/cta-bg.jpg" alt="Background for Green PC contact section">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="text-center cta-panel" data-aos="zoom-in" data-aos-delay="100">
          <h3>Need a clearer roadmap for your next digital product?</h3>
          <p>Tell us what you need to build, automate, redesign or secure. We can help define scope, priorities and the right technology mix before the project turns into noise.</p>
          <a class="cta-btn btn-lg" href="https://wa.link/hczezg"> <i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Call To Action Section -->

  </main>

  <!-- ===== SERVICE MODALS (EN) ===== -->

  <!-- Modal: Web Dev -->
  <div class="modal fade" id="modalWebDev" tabindex="-1" aria-labelledby="modalWebDevLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-globe" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalWebDevLabel" >Web Dev</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Web Dev image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/webdev.jpg" alt="Web Development" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is Web Development?</h6> -->
              <!-- <p>Web development is the process of building, programming, and maintaining websites and web applications that live on the internet. It encompasses everything from simple static pages to complex dynamic platforms.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Custom websites and web applications</li>
                <li><i class="bi bi-check-circle-fill"></i> Modern frameworks: React, Node.js, Laravel, Django, etc.</li>
                <li><i class="bi bi-check-circle-fill"></i> Fully responsive &amp; mobile-first design</li>
                <li><i class="bi bi-check-circle-fill"></i> RESTful APIs &amp; backend integration</li>
                <li><i class="bi bi-check-circle-fill"></i> Performance optimization &amp; SEO</li>
                <li><i class="bi bi-check-circle-fill"></i> Ongoing maintenance &amp; support</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: Web Dev -->

  <!-- Modal: UX Design -->
  <div class="modal fade" id="modalUXDesign" tabindex="-1" aria-labelledby="modalUXDesignLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-ui-radios" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalUXDesignLabel">UX Design</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your UX Design image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/uxdesign.jpg" alt="UX Design" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is UX Design?</h6> -->
              <!-- <p>User Experience (UX) Design focuses on creating products that deliver meaningful, relevant, and enjoyable experiences to users. It covers the entire journey of interaction between a person and a product.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> User research &amp; persona creation</li>
                <li><i class="bi bi-check-circle-fill"></i> Wireframing &amp; prototyping</li>
                <li><i class="bi bi-check-circle-fill"></i> UI design systems &amp; style guides</li>
                <li><i class="bi bi-check-circle-fill"></i> Usability testing &amp; iteration</li>
                <li><i class="bi bi-check-circle-fill"></i> Accessible &amp; inclusive design</li>
                <li><i class="bi bi-check-circle-fill"></i> Design handoff for developers</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: UX Design -->

  <!-- Modal: Research -->
  <div class="modal fade" id="modalResearch" tabindex="-1" aria-labelledby="modalResearchLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-journal-richtext" style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalResearchLabel">Research</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Research image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/research.jpg" alt="Research" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is Technology Research?</h6>
              <p>Technology research involves systematically gathering, analyzing, and interpreting data to uncover insights that drive better strategic decisions, product development, and competitive advantage.</p> -->
              
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Market &amp; competitive analysis</li>
                <li><i class="bi bi-check-circle-fill"></i> Technology feasibility studies</li>
                <li><i class="bi bi-check-circle-fill"></i> Data collection &amp; analytics</li>
                <li><i class="bi bi-check-circle-fill"></i> AI-assisted research reports</li>
                <li><i class="bi bi-check-circle-fill"></i> Trend forecasting &amp; insights</li>
                <li><i class="bi bi-check-circle-fill"></i> Academic &amp; industry documentation</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: Research -->

  <!-- Modal: Automation -->
  <div class="modal fade" id="modalAutomation" tabindex="-1" aria-labelledby="modalAutomationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-robot"style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalAutomationLabel">Automation</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Automation image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/automation.jpg" alt="Automation" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is AI Automation?</h6>
              <p>AI Automation uses artificial intelligence and machine learning to perform repetitive tasks, optimize workflows, and make intelligent decisions — freeing your team to focus on what matters most.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Workflow &amp; process automation</li>
                <li><i class="bi bi-check-circle-fill"></i> AI chatbots &amp; virtual assistants</li>
                <li><i class="bi bi-check-circle-fill"></i> RPA (Robotic Process Automation)</li>
                <li><i class="bi bi-check-circle-fill"></i> Integration with Make, Zapier, n8n</li>
                <li><i class="bi bi-check-circle-fill"></i> Custom automation scripts &amp; APIs</li>
                <li><i class="bi bi-check-circle-fill"></i> Business intelligence dashboards</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: Automation -->

  <!-- Modal: Mobile Apps -->
  <div class="modal fade" id="modalMobileApps" tabindex="-1" aria-labelledby="modalMobileAppsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-phone"style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalMobileAppsLabel">Mobile Apps</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Mobile Apps image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/mobileapps.jpg" alt="Mobile Apps" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What are Mobile Apps?</h6>
              <p>Mobile applications are software programs designed to run on smartphones and tablets. They provide users with quick, touchscreen-optimized access to services, information, and tools from anywhere.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Native iOS &amp; Android development</li>
                <li><i class="bi bi-check-circle-fill"></i> Cross-platform apps (React Native, Flutter)</li>
                <li><i class="bi bi-check-circle-fill"></i> UI/UX design for mobile</li>
                <li><i class="bi bi-check-circle-fill"></i> API &amp; backend integration</li>
                <li><i class="bi bi-check-circle-fill"></i> App Store &amp; Google Play publishing</li>
                <li><i class="bi bi-check-circle-fill"></i> Maintenance &amp; version updates</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer service-modal-footer">
          
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>
      </div>
    </div>
  </div><!-- End Modal: Mobile Apps -->

  <!-- Modal: Cybersecurity -->
  <div class="modal fade" id="modalCybersecurity" tabindex="-1" aria-labelledby="modalCybersecurityLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content service-modal-content">
        <div class="modal-header service-modal-header">
          <div class="service-modal-icon"><i class="bi bi-fingerprint"style="color: black; font-size: 40px;"></i></div>
          <h5 class="modal-title" id="modalCybersecurityLabel">Cybersecurity</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <!-- IMAGE PLACEHOLDER: replace src with your Cybersecurity image -->
              <div class="service-modal-img-wrapper">
                <img src="assets/img/services/cybersecurity.jpg" alt="Cybersecurity" class="img-fluid rounded service-modal-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="service-modal-img-placeholder" style="display:none">
                  <i class="bi bi-image"></i>
                  <span>Image coming soon</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <h6 class="service-modal-subtitle">What is Cybersecurity?</h6>
              <p>Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks. It involves defending against unauthorized access, data breaches, ransomware, and other cyber threats.</p> -->
              <h6 class="service-modal-subtitle mt-3">What we offer</h6>
              <ul class="service-modal-list">
                <li><i class="bi bi-check-circle-fill"></i> Security audits &amp; vulnerability assessments</li>
                <li><i class="bi bi-check-circle-fill"></i> Penetration testing</li>
                <li><i class="bi bi-check-circle-fill"></i> Data encryption &amp; secure protocols</li>
                <li><i class="bi bi-check-circle-fill"></i> Firewall &amp; intrusion detection</li>
                <li><i class="bi bi-check-circle-fill"></i> Security training for teams</li>
                <li><i class="bi bi-check-circle-fill"></i> Compliance (GDPR, ISO 27001)</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="modal-footer service-modal-footer">
          <a href="https://wa.link/hczezg" class="btn service-modal-btn" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i> Contact Us</a>
        </div>

      </div>
    </div>
  </div><!-- End Modal: Cybersecurity -->

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
include_once './assets/includes/footer.php';
?>
