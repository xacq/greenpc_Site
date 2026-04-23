<?php
$posts = [
    [
        'title' => 'QWEN: La Revolucion China en IA',
        'excerpt' => 'Una mirada rapida a como QWEN amplia el mapa competitivo de la inteligencia artificial con modelos multimodales, escalabilidad y enfoque practico.',
        'image' => 'assets/img/blog/qwen.jpg',
        'alt' => 'Portada del articulo sobre QWEN y su impacto en inteligencia artificial',
        'href' => './blogs/qwen-v1.php',
        'category' => 'IA',
        'read_time' => '8 min',
        'badge' => 'Destacado',
    ],
    [
        'title' => 'Tendencias en Desarrollo Web 2025',
        'excerpt' => 'Frameworks, experiencia de usuario, performance y nuevas expectativas del mercado para productos web que necesitan seguir siendo competitivos.',
        'image' => 'assets/img/blog/web-2025.jpg',
        'alt' => 'Portada del articulo sobre tendencias de desarrollo web para 2025',
        'href' => './blogs/web-v1.php',
        'category' => 'Web',
        'read_time' => '7 min',
        'badge' => 'Tendencias',
    ],
    [
        'title' => 'Ciberseguridad en la era de la IA',
        'excerpt' => 'Riesgos, oportunidades y nuevas capas de defensa cuando la inteligencia artificial se vuelve parte del problema y tambien de la solucion.',
        'image' => 'assets/img/blog/ciberseguridad.png',
        'alt' => 'Portada del articulo sobre ciberseguridad e inteligencia artificial',
        'href' => './blogs/ciber-v1.php',
        'category' => 'Ciberseguridad',
        'read_time' => '9 min',
        'badge' => 'Seguridad',
    ],
    [
        'title' => 'Firebase Studio: el IDE del Futuro',
        'excerpt' => 'Que cambia cuando Google unifica IDE en la nube, asistencia con IA y flujo full-stack en una sola experiencia de desarrollo.',
        'image' => 'assets/img/blog/firebase.png',
        'alt' => 'Portada del articulo sobre Firebase Studio',
        'href' => './blogs/fireide-v1.php',
        'category' => 'Herramientas',
        'read_time' => '6 min',
        'badge' => 'Producto',
    ],
];

$featuredPost = $posts[0];
$secondaryPosts = array_slice($posts, 1);

include_once './assets/includes/head-blog.php';
?>

<style>
  .blog-home {
    background:
      radial-gradient(circle at top right, rgba(52, 152, 219, 0.08), transparent 28%),
      linear-gradient(180deg, #06111d 0%, #091728 22%, #f4f8fc 22%, #f8fbff 100%);
  }

  .blog-home .main {
    overflow: clip;
  }

  .blog-hero {
    min-height: 92vh;
    max-height: none;
    padding: 168px 0 112px;
  }

  .blog-hero::before {
    background:
      radial-gradient(circle at 15% 18%, rgba(0, 230, 118, 0.14), transparent 26%),
      radial-gradient(circle at 82% 18%, rgba(52, 152, 219, 0.28), transparent 32%),
      linear-gradient(135deg, rgba(3, 9, 18, 0.94), rgba(7, 23, 41, 0.76));
  }

  .blog-hero h2::after {
    content: none;
  }

  .blog-hero-copy {
    text-align: left;
  }

  .blog-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 22px;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.14);
    color: rgba(255, 255, 255, 0.86);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
  }

  .blog-hero-copy h2 {
    font-size: clamp(2.8rem, 5vw, 5rem);
    line-height: 1.02;
    margin-bottom: 18px;
    font-family: var(--nav-font);
  }

  .blog-hero-copy p {
    max-width: 700px;
    margin: 0;
    color: rgba(255, 255, 255, 0.8);
    font-size: 1.08rem;
    line-height: 1.85;
  }

  .blog-hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 30px;
  }

  .blog-primary-btn,
  .blog-secondary-btn {
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

  .blog-primary-btn {
    background: linear-gradient(135deg, var(--accent-color), #0aa1ff);
    color: #fff;
    box-shadow: 0 18px 36px rgba(52, 152, 219, 0.28);
  }

  .blog-primary-btn:hover {
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 24px 40px rgba(52, 152, 219, 0.34);
  }

  .blog-secondary-btn {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.24);
    color: #fff;
  }

  .blog-secondary-btn:hover {
    color: #fff;
    transform: translateY(-2px);
    background: rgba(255, 255, 255, 0.1);
  }

  .blog-hero-stats {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
    margin-top: 30px;
  }

  .blog-stat-card {
    padding: 18px 18px 16px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.09);
    backdrop-filter: blur(10px);
  }

  .blog-stat-card strong {
    display: block;
    color: #fff;
    font-size: 1.7rem;
    line-height: 1;
    margin-bottom: 6px;
    font-family: var(--heading-font);
  }

  .blog-stat-card span {
    color: rgba(255, 255, 255, 0.74);
    font-size: 0.92rem;
  }

  .blog-hero-panel {
    padding: 28px;
    border-radius: 28px;
    background: linear-gradient(180deg, rgba(8, 24, 42, 0.88), rgba(8, 18, 31, 0.72));
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 30px 70px rgba(0, 0, 0, 0.24);
  }

  .blog-hero-panel span {
    display: inline-flex;
    margin-bottom: 14px;
    color: var(--accent-color);
    font-size: 12px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    font-weight: 700;
  }

  .blog-hero-panel h3 {
    color: #fff;
    margin-bottom: 12px;
    font-size: 1.5rem;
  }

  .blog-hero-panel p {
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.8;
    font-size: 0.98rem;
    margin-bottom: 18px;
  }

  .blog-topic-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    gap: 12px;
  }

  .blog-topic-list li {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    color: rgba(255, 255, 255, 0.84);
    line-height: 1.7;
    font-size: 0.96rem;
  }

  .blog-topic-list li i {
    color: #8df4c7;
    margin-top: 5px;
  }

  .blog-shell {
    margin-top: -48px;
    position: relative;
    z-index: 3;
  }

  .blog-overview {
    padding: 0 12px;
  }

  .blog-highlight {
    padding: 30px;
    border-radius: 30px;
    background: rgba(255, 255, 255, 0.92);
    border: 1px solid rgba(52, 152, 219, 0.12);
    box-shadow: 0 26px 60px rgba(15, 23, 42, 0.1);
  }

  .blog-highlight__meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    margin-bottom: 18px;
  }

  .blog-pill {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 8px 12px;
    border-radius: 999px;
    background: #edf6ff;
    color: #1f4e75;
    border: 1px solid rgba(52, 152, 219, 0.14);
    font-size: 0.84rem;
    font-weight: 700;
  }

  .blog-highlight__content h3,
  .blog-feed-card h3 {
    color: #0f2539;
  }

  .blog-highlight__content h3 {
    font-size: clamp(2rem, 3.2vw, 3rem);
    line-height: 1.08;
    margin-bottom: 14px;
  }

  .blog-highlight__content p {
    color: #52677b;
    font-size: 1rem;
    line-height: 1.85;
    margin-bottom: 22px;
  }

  .blog-highlight__cta,
  .blog-feed-card__cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-weight: 700;
    color: var(--accent-color);
  }

  .blog-highlight__media img {
    width: 100%;
    height: 100%;
    min-height: 300px;
    object-fit: cover;
    border-radius: 24px;
    box-shadow: 0 20px 44px rgba(15, 23, 42, 0.12);
  }

  .blog-feed {
    padding: 34px 12px 84px;
  }

  .blog-section-heading {
    margin-bottom: 28px;
  }

  .blog-section-heading h3 {
    font-size: 2rem;
    margin-bottom: 8px;
    color: #0f2539;
  }

  .blog-section-heading p {
    color: #60758a;
    margin: 0;
  }

  .blog-feed-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
  }

  .blog-feed-card {
    height: 100%;
    display: flex;
    flex-direction: column;
    border-radius: 28px;
    overflow: hidden;
    background: #fff;
    border: 1px solid rgba(52, 152, 219, 0.12);
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
    transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
  }

  .blog-feed-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 24px 60px rgba(15, 23, 42, 0.14);
    border-color: rgba(52, 152, 219, 0.24);
  }

  .blog-feed-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
  }

  .blog-feed-card__body {
    padding: 22px 22px 24px;
    display: flex;
    flex-direction: column;
    flex: 1;
  }

  .blog-feed-card__meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    margin-bottom: 16px;
  }

  .blog-feed-card__body h3 {
    font-size: 1.35rem;
    line-height: 1.2;
    margin-bottom: 12px;
  }

  .blog-feed-card__body p {
    color: #60758a;
    line-height: 1.8;
    margin-bottom: 18px;
    flex: 1;
  }

  .blog-bottom-cta {
    margin: 0 12px 84px;
    padding: 34px;
    border-radius: 30px;
    background: linear-gradient(135deg, #08131f, #0b2236);
    color: #fff;
    box-shadow: 0 30px 70px rgba(0, 0, 0, 0.2);
  }

  .blog-bottom-cta h3 {
    color: #fff;
    font-size: clamp(2rem, 3vw, 2.8rem);
    margin-bottom: 12px;
  }

  .blog-bottom-cta p {
    color: rgba(255, 255, 255, 0.76);
    line-height: 1.8;
    margin-bottom: 20px;
    max-width: 720px;
  }

  .blog-bottom-cta a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 22px;
    border-radius: 999px;
    background: linear-gradient(135deg, var(--accent-color), #0aa1ff);
    color: #fff;
    font-weight: 700;
    box-shadow: 0 16px 34px rgba(52, 152, 219, 0.24);
  }

  .blog-bottom-cta a:hover {
    color: #fff;
    transform: translateY(-2px);
  }

  @media (max-width: 991px) {
    .blog-hero {
      padding: 148px 0 92px;
    }

    .blog-hero-panel {
      margin-top: 8px;
    }

    .blog-feed-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 767px) {
    .blog-hero-copy {
      text-align: center;
    }

    .blog-hero-copy p {
      margin: 0 auto;
    }

    .blog-hero-actions {
      justify-content: center;
    }

    .blog-primary-btn,
    .blog-secondary-btn {
      width: 100%;
      min-width: 0;
    }

    .blog-hero-stats {
      grid-template-columns: 1fr;
    }

    .blog-feed-grid {
      grid-template-columns: 1fr;
    }

    .blog-highlight,
    .blog-bottom-cta {
      padding: 24px 22px;
    }
  }
</style>

<main class="main blog-home">
  <section id="hero" class="hero section dark-background blog-hero">
    <img src="assets/img/blog-hero-bg.jpg" alt="Fondo editorial del blog de tecnologia de Green PC" data-aos="fade-in">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-7 blog-hero-copy" data-aos="fade-up" data-aos-delay="100">
          <span class="blog-eyebrow"><i class="bi bi-journal-code"></i> Blog Green PC</span>
          <h2>Ideas, herramientas y analisis para leer tecnologia con criterio.</h2>
          <p>Publicamos notas sobre inteligencia artificial, desarrollo web, seguridad y plataformas que realmente estan moviendo el trabajo digital. Menos ruido, mas contexto util.</p>
          <div class="blog-hero-actions">
            <a class="blog-primary-btn" href="#featured-post"><i class="bi bi-lightning-charge-fill"></i> Leer destacado</a>
            <a class="blog-secondary-btn" href="#blog-feed"><i class="bi bi-grid-1x2-fill"></i> Explorar articulos</a>
          </div>
          <div class="blog-hero-stats">
            <div class="blog-stat-card">
              <strong><?= count($posts); ?></strong>
              <span>articulos publicados</span>
            </div>
            <div class="blog-stat-card">
              <strong>IA + Web</strong>
              <span>temas con foco practico</span>
            </div>
            <div class="blog-stat-card">
              <strong>2025</strong>
              <span>tendencias, herramientas y criterio tecnico</span>
            </div>
          </div>
        </div>
        <div class="col-lg-5" data-aos="fade-left" data-aos-delay="180">
          <aside class="blog-hero-panel">
            <span>Temas del momento</span>
            <h3>Lo que vas a encontrar aqui</h3>
            <p>El blog esta pensado como una puerta de entrada rapida para clientes, equipos tecnicos y perfiles curiosos que quieren entender que herramientas importan y por que.</p>
            <ul class="blog-topic-list">
              <li><i class="bi bi-check2-circle"></i><span>Modelos de IA y plataformas que estan cambiando el stack.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Tendencias de desarrollo, UX y experiencia digital con impacto real.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Ciberseguridad y lectura critica de nuevas herramientas.</span></li>
              <li><i class="bi bi-check2-circle"></i><span>Articulos cortos para escanear rapido y profundizar despues.</span></li>
            </ul>
          </aside>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-shell">
    <div class="container blog-overview">
      <article id="featured-post" class="blog-highlight" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center gy-4">
          <div class="col-lg-7 blog-highlight__content">
            <div class="blog-highlight__meta">
              <span class="blog-pill"><?= htmlspecialchars($featuredPost['badge']); ?></span>
              <span class="blog-pill"><?= htmlspecialchars($featuredPost['category']); ?></span>
              <span class="blog-pill"><?= htmlspecialchars($featuredPost['read_time']); ?></span>
            </div>
            <h3><?= htmlspecialchars($featuredPost['title']); ?></h3>
            <p><?= htmlspecialchars($featuredPost['excerpt']); ?></p>
            <a class="blog-highlight__cta" href="<?= htmlspecialchars($featuredPost['href']); ?>">
              <i class="bi bi-arrow-right-circle-fill"></i>Leer articulo completo
            </a>
          </div>
          <div class="col-lg-5 blog-highlight__media">
            <img src="<?= htmlspecialchars($featuredPost['image']); ?>" alt="<?= htmlspecialchars($featuredPost['alt']); ?>">
          </div>
        </div>
      </article>
    </div>

    <div id="blog-feed" class="container blog-feed">
      <div class="blog-section-heading" data-aos="fade-up">
        <h3>Mas publicaciones</h3>
        <p>Una seleccion breve para leer por tema, por curiosidad o para detectar hacia donde se mueve el ecosistema digital.</p>
      </div>

      <div class="blog-feed-grid">
        <?php foreach ($secondaryPosts as $index => $post): ?>
          <article class="blog-feed-card" data-aos="fade-up" data-aos-delay="<?= 120 + ($index * 60); ?>">
            <img src="<?= htmlspecialchars($post['image']); ?>" alt="<?= htmlspecialchars($post['alt']); ?>">
            <div class="blog-feed-card__body">
              <div class="blog-feed-card__meta">
                <span class="blog-pill"><?= htmlspecialchars($post['category']); ?></span>
                <span class="blog-pill"><?= htmlspecialchars($post['read_time']); ?></span>
              </div>
              <h3><?= htmlspecialchars($post['title']); ?></h3>
              <p><?= htmlspecialchars($post['excerpt']); ?></p>
              <a class="blog-feed-card__cta" href="<?= htmlspecialchars($post['href']); ?>">
                <i class="bi bi-arrow-right"></i>Leer mas
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="container">
      <section class="blog-bottom-cta" data-aos="zoom-in" data-aos-delay="120">
        <h3>Si uno de estos temas conecta con tu proyecto, podemos aterrizarlo en una solucion real.</h3>
        <p>Desde desarrollo web y automatizacion hasta portales especializados, Green PC trabaja estas ideas tambien en productos y servicios listos para negocio.</p>
        <a href="./programacion.php"><i class="bi bi-box-arrow-up-right"></i>Ver soluciones de programacion</a>
      </section>
    </div>
  </section>
</main>

<?php
include_once 'assets/includes/footer-es.php';
?>
