
<footer id="footer" class="footer dark-background">

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-4 footer-about">
        <a href="../index.php" class="logo d-flex align-items-center">
          <span class="sitename"><img src="../assets/img/logo.png" alt=""></span>
        </a>
        <div class="footer-contact pt-3">
          <p>Misicata</p>
          <p>Cuenca, Ecuador</p>
          <p class="mt-3"><strong>WhatsApp:</strong> <a href="https://wa.link/hczezg"><span>+593 998784470</span></a></p>
          <p><strong>Email:</strong> <a href="mailto:info@greenpc.dev"><span>info@greenpc.dev</span></a></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="https://www.facebook.com/greenpcecuador/"><i class="bi bi-facebook"></i></a>
          <a href="https://www.linkedin.com/in/greenpc/"><i class="bi bi-linkedin"></i></a>
          <a href="https://github.com/xacq"><i class="bi bi-github"></i></a>
          <a href="https://www.behance.net/xaviercalvas"><i class="bi bi-behance"></i></a>              
        </div>
      </div>

      <div class="col-lg-4 col-md-4 footer-links">
        <h4>Nuestra Página</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#"> Inicio</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#about"> Sobre Nosotros</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#services"> Servicios</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#portfolio"> Portafolio</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#clients"> Tecnologías</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-4 footer-links">
        <h4>Nuevos Artículos</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="https://developer.mozilla.org/en-US/docs/Learn_web_development" target="_blank"> Aprende desarrollo web</a></li>
          <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://careerfoundry.com/en/blog/ux-design/the-difference-between-ux-and-ui-design-a-laymans-guide/"> La diferencia entre el diseño UX y UI</a></li>
          <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://www.netguru.com/blog/what-is-machine-learning"> Conceptos cruciales en IA, ML y LLMs</a></li>
          <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://www.indeed.com/career-advice/career-development/basic-marketing-concepts"> 10 conceptos básicos de marketing que debes conocer</a></li>
          <li><i class="bi bi-chevron-right"></i> <a target="_blank" href="https://www.indeed.com/career-advice/career-development/cyber-security-concepts"> Conceptos de ciberseguridad</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>

<div class="copyright">
  <div class="container text-center">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Green PC</strong> <span>Todos los derechos reservados</span></p>
    <div class="credits">
      Diseñado por <a href="https://greenpc.dev/">Green PC</a>
    </div>
  </div>
</div>

</footer> 
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<!--script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script-->
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>

<!-- Main JS File -->
<script src="../assets/js/main.js"></script>

<!-- Chart.js para gráficos -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elementos del DOM
    const audioPlayer = new Audio('<?= htmlspecialchars($audioFile) ?>');
    const playPauseBtn = document.querySelector('.btn-audio-play-pause');
    const progressBar = document.querySelector('.progress-bar-audio');
    const progressContainer = document.querySelector('.progress-container');
    const currentTimeEl = document.querySelector('.audio-current-time');
    const durationEl = document.querySelector('.audio-duration');
    
    // Verificar si los elementos existen
    if (!audioPlayer || !playPauseBtn || !progressBar || !progressContainer) {
        console.error('Error: Elementos del reproductor no encontrados');
        return;
    }
    
    // Formatear tiempo a MM:SS
    function formatTime(seconds) {
        const mins = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${mins}:${secs < 10 ? '0' : ''}${secs}`;
    }
    
    // Actualizar barra de progreso y tiempo
    function updateProgress() {
        if (audioPlayer.duration && !isNaN(audioPlayer.duration)) {
            const progressPercent = (audioPlayer.currentTime / audioPlayer.duration) * 100;
            progressBar.style.width = `${progressPercent}%`;
            currentTimeEl.textContent = formatTime(audioPlayer.currentTime);
        }
    }
    
    // Cargar metadatos del audio
    audioPlayer.addEventListener('loadedmetadata', function() {
        if (audioPlayer.duration && !isNaN(audioPlayer.duration)) {
            durationEl.textContent = formatTime(audioPlayer.duration);
        }
    });
    
    // Manejar errores
    audioPlayer.addEventListener('error', function() {
        console.error('Error de audio:', audioPlayer.error);
        alert('Error al cargar el audio. Verifica la consola para más detalles.');
    });
    
    // Control Play/Pause
    function togglePlayPause() {
        if (audioPlayer.paused) {
            audioPlayer.play()
                .then(() => {
                    playPauseBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
                })
                .catch(error => {
                    console.error('Error al reproducir:', error);
                    alert('Error al iniciar la reproducción: ' + error.message);
                });
        } else {
            audioPlayer.pause();
            playPauseBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
        }
    }
    
    // Barra de progreso clickeable
    progressContainer.addEventListener('click', function(e) {
        if (!audioPlayer.duration || isNaN(audioPlayer.duration)) return;
        
        const rect = this.getBoundingClientRect();
        const pos = (e.clientX - rect.left) / this.offsetWidth;
        audioPlayer.currentTime = pos * audioPlayer.duration;
    });
    
    // Actualización durante la reproducción
    audioPlayer.addEventListener('timeupdate', updateProgress);
    
    // Cambiar icono al finalizar
    audioPlayer.addEventListener('ended', function() {
        playPauseBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
    });
    
    // Asignar evento al botón
    playPauseBtn.addEventListener('click', togglePlayPause);
});
</script>

</body>
