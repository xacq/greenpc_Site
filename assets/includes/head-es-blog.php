<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= htmlspecialchars($pageTitle ?? (($articleTitle ?? 'Blog de Tecnologia') . ' - Green PC')) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription ?? 'Analisis, tendencias y herramientas sobre inteligencia artificial, desarrollo web, ciberseguridad y producto digital en el blog de Green PC.') ?>">
  <meta name="keywords" content="blog tecnologia, inteligencia artificial, desarrollo web, ciberseguridad, green pc, herramientas digitales">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon"> 

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

  <style>
    .article-page {
      background:
        radial-gradient(circle at top right, rgba(52, 152, 219, 0.06), transparent 28%),
        linear-gradient(180deg, #06111d 0%, #091728 19%, #f5f9fd 19%, #f8fbff 100%);
    }

    .article-page .main {
      overflow: clip;
    }

    .article-page .hero {
      min-height: 72vh;
      max-height: none;
      padding: 168px 0 118px;
    }

    .article-page .hero::before {
      background:
        radial-gradient(circle at 15% 18%, rgba(0, 230, 118, 0.12), transparent 24%),
        radial-gradient(circle at 82% 18%, rgba(52, 152, 219, 0.22), transparent 32%),
        linear-gradient(135deg, rgba(3, 9, 18, 0.94), rgba(7, 23, 41, 0.78));
    }

    .article-page .hero h2::after {
      content: none;
    }

    .article-page .hero h2 {
      font-size: clamp(2.7rem, 5vw, 4.8rem);
      line-height: 1.02;
      margin-bottom: 16px;
    }

    .article-page .hero p {
      font-size: 1.06rem;
      line-height: 1.8;
      color: rgba(255,255,255,0.78);
      max-width: 720px;
      margin-left: auto;
      margin-right: auto;
    }

    .article-page .container.py-5 {
      margin-top: -56px;
      position: relative;
      z-index: 4;
    }

    .article-page article > header:first-child {
      background: rgba(255,255,255,0.94);
      border: 1px solid rgba(52, 152, 219, 0.12);
      border-radius: 30px;
      padding: 32px 28px !important;
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.1);
    }

    .article-page article > header:first-child h1 {
      color: #0f2539;
      line-height: 1.08;
      margin-bottom: 16px !important;
    }

    .article-page article > header:first-child .badge {
      border-radius: 999px;
      padding: 0.6rem 0.85rem;
      font-weight: 700;
    }

    .article-page article section[id] {
      scroll-margin-top: 118px;
    }

    .article-page .sticky-sidebar {
      top: 112px;
    }

    .article-page .card {
      border-radius: 24px;
      overflow: hidden;
      border-color: rgba(52, 152, 219, 0.12);
      box-shadow: 0 18px 44px rgba(15, 23, 42, 0.08);
    }

    .article-page .card-header {
      padding: 1rem 1.25rem;
      border-bottom-color: rgba(52, 152, 219, 0.1);
    }

    .article-page .card-body {
      padding: 1.35rem 1.4rem;
    }

    .article-page .list-group-item {
      border-radius: 16px !important;
    }

    .article-page .timeline-item + .timeline-item {
      margin-top: 4px;
    }

    .article-page .tech-badge {
      margin-right: 8px;
      margin-bottom: 8px;
      border-radius: 999px;
      padding: 0.55rem 0.85rem;
      font-weight: 600;
    }

    .article-page .progress-container {
      height: 4px;
    }

    @media (max-width: 991px) {
      .article-page .hero {
        padding: 148px 0 104px;
      }

      .article-page .sticky-sidebar {
        top: 92px;
      }
    }

    @media (max-width: 767px) {
      .article-page .container.py-5 {
        margin-top: -36px;
      }

      .article-page article > header:first-child {
        padding: 24px 20px !important;
      }
    }
  </style>
