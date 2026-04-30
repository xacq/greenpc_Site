<?php
/**
 * Botón flotante de regreso — system pages
 * Uso: include './includes/back_button.php';
 *
 * Lógica:
 * - Si el cliente llegó desde otra página (document.referrer) usa history.back().
 * - Si no hay referrer (enlace directo / nueva pestaña) redirige al fallback.
 * - El fallback puede sobreescribirse antes del include:
 *     $back_fallback = '../programacion.php';
 *     include './includes/back_button.php';
 */
$back_fallback = isset($back_fallback) ? $back_fallback : '../index_es.php';
?>
<!-- ═══ BOTÓN FLOTANTE REGRESAR ═══ -->
<style>
  .fab-back {
    position: fixed;
    bottom: 28px;
    left: 28px;
    z-index: 9999;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    border-radius: 999px;
    background: linear-gradient(135deg, #1b6fa8 0%, #0d4f80 100%);
    color: #fff;
    font-family: 'Segoe UI', system-ui, sans-serif;
    font-size: 13.5px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    box-shadow: 0 6px 24px rgba(13, 79, 128, 0.40), 0 2px 6px rgba(0,0,0,0.18);
    transition: transform 0.18s ease, box-shadow 0.18s ease, opacity 0.18s ease;
    opacity: 0;
    transform: translateY(10px);
    animation: fabIn 0.45s 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
  }
  .fab-back:hover {
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 10px 32px rgba(13, 79, 128, 0.50), 0 3px 8px rgba(0,0,0,0.22);
    color: #fff;
    text-decoration: none;
  }
  .fab-back:active {
    transform: translateY(0) scale(0.97);
  }
  .fab-back svg {
    flex-shrink: 0;
    transition: transform 0.2s ease;
  }
  .fab-back:hover svg {
    transform: translateX(-3px);
  }
  @keyframes fabIn {
    to { opacity: 1; transform: translateY(0); }
  }
  @media (max-width: 575px) {
    .fab-back { bottom: 18px; left: 18px; padding: 10px 16px; font-size: 12.5px; }
  }
</style>

<a id="fabBack" class="fab-back" href="<?php echo htmlspecialchars($back_fallback); ?>" role="button" aria-label="Regresar a la página anterior">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
  </svg>
  Regresar
</a>

<script>
  (function () {
    var btn = document.getElementById('fabBack');
    if (!btn) return;
    var ref = document.referrer;
    var fallback = <?php echo json_encode($back_fallback); ?>;
    /* Si hay referrer y no es la misma página, usa history.back() */
    if (ref && ref !== window.location.href) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        history.back();
      });
    }
    /* Si no hay referrer, el href del fallback ya está puesto en el <a> */
  })();
</script>
