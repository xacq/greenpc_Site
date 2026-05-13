<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musicast — Fase 3 Mockup</title>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  :root {
    --gold: #C8A84B; --gold-light: #E2C070; --gold-dark: #A08030;
    --bg-dark: #0C0C0C; --bg-card: #1A1A1A; --bg-card2: #242424; --bg-input: #2A2A2A;
    --text-primary: #F5F5F5; --text-secondary: #9A9A9A; --text-muted: #5A5A5A;
    --border: #2E2E2E; --success: #4CAF50; --info: #2196F3; --warn: #FF9800;
    --phone-w: 375px; --phone-h: 812px; --radius: 12px; --radius-sm: 8px;
  }
  body { background: #0A0A0A; font-family: 'Inter', sans-serif; color: var(--text-primary); min-height: 100vh; }

  /* ── HEADER ── */
  .site-header { background:#111; border-bottom:1px solid var(--border); padding:16px 32px; display:flex; align-items:center; justify-content:space-between; position:sticky; top:0; z-index:100; }
  .site-logo { font-family:'Sora',sans-serif; font-size:20px; font-weight:700; color:var(--gold); letter-spacing:-0.5px; }
  .site-logo span { color:var(--text-primary); }
  .phase-badge { background:#1A1200; color:#E2A020; font-size:11px; font-weight:600; padding:4px 12px; border-radius:20px; letter-spacing:.5px; text-transform:uppercase; border:1px solid #3A2800; }

  /* ── NAV TABS ── */
  .screens-nav { display:flex; gap:6px; padding:20px 32px 0; overflow-x:auto; scrollbar-width:none; flex-wrap:wrap; }
  .screens-nav::-webkit-scrollbar { display:none; }
  .nav-btn { background:var(--bg-card); border:1px solid var(--border); color:var(--text-secondary); padding:7px 14px; border-radius:20px; font-size:12px; font-weight:500; cursor:pointer; white-space:nowrap; transition:all .2s; font-family:'Inter',sans-serif; }
  .nav-btn:hover { border-color:var(--gold); color:var(--gold); }
  .nav-btn.active { background:var(--gold); border-color:var(--gold); color:#0C0C0C; font-weight:600; }

  /* ── LAYOUT ── */
  .main-wrap { padding:32px; display:flex; gap:40px; align-items:flex-start; justify-content:center; }
  .phone-frame { width:var(--phone-w); min-width:var(--phone-w); background:#111; border-radius:48px; border:2px solid #2A2A2A; overflow:hidden; box-shadow:0 40px 80px rgba(0,0,0,.7),0 0 0 1px #333 inset; position:sticky; top:100px; }
  .phone-notch { height:44px; background:#0C0C0C; display:flex; align-items:center; justify-content:space-between; padding:0 24px; font-size:12px; font-weight:600; color:var(--text-primary); position:relative; }
  .notch-island { width:120px; height:22px; background:#000; border-radius:12px; position:absolute; left:50%; transform:translateX(-50%); top:11px; }
  .phone-screen { height:var(--phone-h); background:var(--bg-dark); overflow-y:auto; scrollbar-width:none; }
  .phone-screen::-webkit-scrollbar { display:none; }
  .info-panel { max-width:300px; position:sticky; top:100px; }
  .screen-label { font-family:'Sora',sans-serif; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--gold); margin-bottom:8px; }
  .screen-title { font-family:'Sora',sans-serif; font-size:26px; font-weight:700; color:var(--text-primary); line-height:1.2; margin-bottom:12px; }
  .screen-desc { font-size:14px; color:var(--text-secondary); line-height:1.7; margin-bottom:20px; }
  .features-list { list-style:none; display:flex; flex-direction:column; gap:8px; }
  .features-list li { font-size:13px; color:var(--text-secondary); display:flex; align-items:center; gap:8px; }
  .features-list li::before { content:''; width:6px; height:6px; border-radius:50%; background:var(--gold); flex-shrink:0; }
  .nav-arrows { display:flex; gap:8px; margin-top:24px; }
  .arrow-btn { background:var(--bg-card); border:1px solid var(--border); color:var(--text-secondary); width:38px; height:38px; border-radius:50%; cursor:pointer; font-size:16px; display:flex; align-items:center; justify-content:center; transition:all .2s; font-family:'Inter',sans-serif; }
  .arrow-btn:hover { background:var(--gold); border-color:var(--gold); color:#000; }
  .arrow-btn:disabled { opacity:.3; cursor:not-allowed; }
  .screen-counter { font-size:12px; color:var(--text-muted); margin-top:12px; }
  .screen-counter strong { color:var(--text-primary); }

  /* ── SCREEN DISPLAY ── */
  .screen { display:none; flex-direction:column; min-height:100%; }
  .screen.active { display:flex; }

  /* ── BOTTOM NAV ── */
  .bottom-nav { height:80px; background:#111; border-top:1px solid var(--border); display:flex; align-items:center; justify-content:space-around; padding:0 10px 16px; flex-shrink:0; }
  .nav-item { display:flex; flex-direction:column; align-items:center; gap:3px; cursor:pointer; padding:6px 14px; }
  .nav-item svg { width:22px; height:22px; stroke:var(--text-muted); fill:none; stroke-width:1.5; }
  .nav-item span { font-size:9px; color:var(--text-muted); font-weight:500; }
  .nav-item.active svg { stroke:var(--gold); }
  .nav-item.active span { color:var(--gold); }

  /* ── COMMON ATOMS ── */
  .btn-gold { width:100%; background:var(--gold); color:#0C0C0C; border:none; padding:16px; border-radius:var(--radius); font-size:15px; font-weight:700; cursor:pointer; font-family:'Inter',sans-serif; }
  .btn-outline { width:100%; background:transparent; color:var(--text-primary); border:1px solid var(--border); padding:15px; border-radius:var(--radius); font-size:14px; font-weight:500; cursor:pointer; font-family:'Inter',sans-serif; }
  .btn-sm { background:var(--gold); color:#0C0C0C; border:none; padding:10px 20px; border-radius:var(--radius-sm); font-size:13px; font-weight:700; cursor:pointer; font-family:'Inter',sans-serif; }
  .input-field { width:100%; background:var(--bg-input); border:1px solid var(--border); color:var(--text-primary); padding:13px 16px; border-radius:var(--radius-sm); font-size:14px; font-family:'Inter',sans-serif; outline:none; }
  .input-field::placeholder { color:var(--text-muted); }
  .input-label { font-size:11px; font-weight:600; color:var(--text-secondary); letter-spacing:.3px; margin-bottom:5px; display:block; }
  .divider { height:1px; background:var(--border); }
  .screen-header { display:flex; align-items:center; gap:12px; padding:16px 20px; flex-shrink:0; }
  .back-btn { font-size:20px; cursor:pointer; color:var(--text-primary); }
  .header-title { font-family:'Sora',sans-serif; font-size:18px; font-weight:700; flex:1; }

  /* ── RANGE SLIDER ── */
  .range-wrap { position:relative; height:22px; }
  .range-track { position:absolute; top:9px; left:0; right:0; height:4px; background:var(--bg-card2); border-radius:2px; }
  .range-fill { position:absolute; top:9px; height:4px; background:var(--gold); border-radius:2px; }
  input[type=range] { -webkit-appearance:none; appearance:none; width:100%; background:transparent; position:absolute; top:0; margin:0; }
  input[type=range]::-webkit-slider-thumb { -webkit-appearance:none; width:20px; height:20px; border-radius:50%; background:var(--gold); cursor:pointer; border:2px solid #0C0C0C; box-shadow:0 0 0 2px rgba(200,168,75,.3); }
  input[type=range]::-moz-range-thumb { width:20px; height:20px; border-radius:50%; background:var(--gold); cursor:pointer; border:2px solid #0C0C0C; }

  /* ── TOGGLE ── */
  .toggle-wrap { display:flex; align-items:center; justify-content:space-between; padding:12px 0; }
  .toggle-label { font-size:13px; color:var(--text-primary); }
  .toggle { width:44px; height:24px; border-radius:12px; position:relative; cursor:pointer; flex-shrink:0; }
  .toggle.on { background:var(--gold); }
  .toggle.off { background:var(--bg-card2); border:1px solid var(--border); }
  .toggle-knob { width:18px; height:18px; border-radius:50%; background:#fff; position:absolute; top:3px; transition:left .2s; }
  .toggle.on .toggle-knob { left:23px; }
  .toggle.off .toggle-knob { left:3px; }

  /* ── CHIP MULTI-SELECT ── */
  .chip { display:inline-flex; align-items:center; gap:5px; padding:8px 14px; border-radius:20px; font-size:12px; font-weight:500; cursor:pointer; border:1px solid var(--border); background:var(--bg-card); color:var(--text-secondary); transition:all .15s; }
  .chip.sel { border-color:var(--gold); background:rgba(200,168,75,.1); color:var(--gold); font-weight:600; }

  /* ── COUPON CARD ── */
  .coupon-card { border-radius:var(--radius); overflow:hidden; border:1px solid var(--border); display:flex; }
  .coupon-left { width:80px; display:flex; align-items:center; justify-content:center; flex-direction:column; gap:4px; flex-shrink:0; border-right:1px dashed var(--border); }
  .coupon-right { flex:1; padding:14px; }
  .coupon-code { font-family:'Sora',sans-serif; font-size:16px; font-weight:700; letter-spacing:1px; }
  .coupon-tag { font-size:10px; font-weight:600; padding:3px 8px; border-radius:20px; }

  /* ── POLICY ACCORDION ── */
  .policy-item { background:var(--bg-card); border:1px solid var(--border); border-radius:var(--radius-sm); overflow:hidden; }
  .policy-header { display:flex; justify-content:space-between; align-items:center; padding:14px 16px; cursor:pointer; }
  .policy-body { padding:0 16px 14px; font-size:13px; color:var(--text-secondary); line-height:1.7; }
  .policy-icon { font-size:18px; transition:transform .2s; }

  /* ── QUOTE BUILDER ── */
  .service-row { display:flex; align-items:center; gap:12px; padding:12px; background:var(--bg-card); border-radius:var(--radius-sm); border:1px solid var(--border); }
  .service-emoji { width:40px; height:40px; border-radius:var(--radius-sm); display:flex; align-items:center; justify-content:center; font-size:20px; flex-shrink:0; }
  .qty-btn { width:28px; height:28px; border-radius:50%; background:var(--bg-card2); border:1px solid var(--border); color:var(--text-primary); font-size:15px; cursor:pointer; display:flex; align-items:center; justify-content:center; font-family:'Inter',sans-serif; }
  .price-tag { font-size:14px; font-weight:700; color:var(--gold); white-space:nowrap; }
  .quote-total-bar { background:linear-gradient(135deg,#1E1200,#2A1A00); border:1px solid #3A2800; border-radius:var(--radius); padding:16px 20px; display:flex; align-items:center; justify-content:space-between; }

  /* ── SUPPORT ── */
  .faq-item { background:var(--bg-card); border:1px solid var(--border); border-radius:var(--radius-sm); }
  .faq-header { display:flex; justify-content:space-between; align-items:center; padding:14px 16px; cursor:pointer; }
  .faq-q { font-size:13px; font-weight:600; color:var(--text-primary); flex:1; }
  .faq-icon { font-size:16px; color:var(--text-muted); flex-shrink:0; }
  .faq-body { padding:0 16px 14px; font-size:12px; color:var(--text-secondary); line-height:1.7; display:none; }
  .faq-item.open .faq-body { display:block; }
  .faq-item.open .faq-icon { transform:rotate(45deg); }
  .support-btn { display:flex; align-items:center; gap:14px; padding:16px; background:var(--bg-card); border:1px solid var(--border); border-radius:var(--radius-sm); cursor:pointer; }
  .support-icon { width:44px; height:44px; border-radius:12px; display:flex; align-items:center; justify-content:center; font-size:20px; flex-shrink:0; }

  /* ── PROFILE ENHANCED ── */
  .stat-box { flex:1; background:var(--bg-card); border:1px solid var(--border); border-radius:var(--radius-sm); padding:12px; text-align:center; }
  .pref-row { display:flex; align-items:center; justify-content:space-between; padding:13px 0; border-bottom:1px solid var(--border); }
  .pref-row:last-child { border-bottom:none; }
  .address-card { background:var(--bg-card); border:1px solid var(--border); border-radius:var(--radius-sm); padding:14px; display:flex; gap:12px; align-items:flex-start; }
  .payment-saved { background:var(--bg-card); border:1px solid var(--border); border-radius:var(--radius-sm); padding:12px 14px; display:flex; align-items:center; gap:12px; }
  .card-last4 { font-size:13px; font-weight:600; }
  .card-exp { font-size:11px; color:var(--text-muted); }
  .default-badge { background:rgba(200,168,75,.1); border:1px solid rgba(200,168,75,.3); color:var(--gold); font-size:9px; font-weight:700; padding:2px 7px; border-radius:10px; margin-left:auto; }
  .section-group { margin-bottom:20px; }
  .section-group-title { font-size:11px; font-weight:700; color:var(--text-muted); letter-spacing:.8px; text-transform:uppercase; margin-bottom:10px; }
  .summary-row { display:flex; justify-content:space-between; padding:9px 0; border-bottom:1px solid var(--border); }
  .summary-row:last-child { border-bottom:none; }

  @media(max-width:900px){
    .main-wrap{flex-direction:column;align-items:center;padding:20px;}
    .phone-frame{position:static;}
    .info-panel{position:static;max-width:375px;width:100%;}
    .screens-nav{padding:16px 20px 0;}
  }
</style>
</head>
<body>

<div class="site-header">
  <div class="site-logo">Music<span>ast</span></div>
  <div class="phase-badge">Fase 3 — Optimización</div>
</div>

<div class="screens-nav" id="screensNav">
  <button class="nav-btn active"  onclick="goTo(0)">19 Filtros Avanzados</button>
  <button class="nav-btn" onclick="goTo(1)">20 Promociones</button>
  <button class="nav-btn" onclick="goTo(2)">21 Cancelación</button>
  <button class="nav-btn" onclick="goTo(3)">22 Cotización</button>
  <button class="nav-btn" onclick="goTo(4)">23 Soporte / FAQ</button>
  <button class="nav-btn" onclick="goTo(5)">24 Perfil Mejorado</button>
</div>

<div class="main-wrap">

  <!-- ═══════ PHONE ═══════ -->
  <div class="phone-frame">
    <div class="phone-notch">
      <span>9:41</span>
      <div class="notch-island"></div>
      <div style="display:flex;gap:5px;align-items:center;font-size:11px;">
        <span>●●●</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="7" width="16" height="11" rx="2"/><path d="M22 11v3"/><rect x="4" y="9" width="10" height="7" rx="1"/></svg>
      </div>
    </div>

    <div class="phone-screen" id="phoneScreen">

      <!-- ══ S0: FILTROS AVANZADOS ══ -->
      <div class="screen active" id="s0">
        <!-- bottom sheet overlay style -->
        <div style="background:rgba(0,0,0,.5);flex:1;min-height:60px;"></div>
        <div style="background:#111;border-radius:24px 24px 0 0;border-top:1px solid var(--border);flex:1;overflow-y:auto;">
          <!-- handle -->
          <div style="display:flex;justify-content:center;padding:12px 0 4px;">
            <div style="width:40px;height:4px;border-radius:2px;background:var(--bg-card2);"></div>
          </div>
          <div style="padding:4px 20px 24px;">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px;">
              <div style="font-family:'Sora',sans-serif;font-size:18px;font-weight:700;">Filtros</div>
              <span style="font-size:12px;color:var(--gold);font-weight:600;cursor:pointer;">Limpiar todo</span>
            </div>

            <!-- precio -->
            <div style="margin-bottom:22px;">
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px;">
                <span style="font-size:14px;font-weight:600;">Rango de precio</span>
                <span id="priceLabel" style="font-size:13px;font-weight:700;color:var(--gold);">$1,000 — $20,000</span>
              </div>
              <div class="range-wrap">
                <div class="range-track"></div>
                <div class="range-fill" id="rangeFill" style="left:5%;right:40%;"></div>
                <input type="range" min="0" max="100" value="5"  id="rangeMin" oninput="updateRange()">
                <input type="range" min="0" max="100" value="60" id="rangeMax" oninput="updateRange()" style="top:0;">
              </div>
              <div style="display:flex;justify-content:space-between;margin-top:6px;">
                <span style="font-size:11px;color:var(--text-muted);">$0</span>
                <span style="font-size:11px;color:var(--text-muted);">$50,000+</span>
              </div>
            </div>

            <div class="divider" style="margin-bottom:20px;"></div>

            <!-- categoría -->
            <div style="margin-bottom:20px;">
              <span style="font-size:14px;font-weight:600;display:block;margin-bottom:12px;">Categoría musical</span>
              <div style="display:flex;flex-wrap:wrap;gap:8px;">
                <div class="chip sel">🎻 Mariachi</div>
                <div class="chip">🎸 Banda</div>
                <div class="chip sel">🎧 DJ</div>
                <div class="chip">🎷 Norteño</div>
                <div class="chip">🎹 Versátil</div>
                <div class="chip">🎤 Otros</div>
              </div>
            </div>

            <div class="divider" style="margin-bottom:20px;"></div>

            <!-- calificación mínima -->
            <div style="margin-bottom:20px;">
              <span style="font-size:14px;font-weight:600;display:block;margin-bottom:12px;">Calificación mínima</span>
              <div style="display:flex;gap:8px;">
                <div class="chip">★ 3+</div>
                <div class="chip sel">★ 4+</div>
                <div class="chip">★ 4.5+</div>
                <div class="chip">★ 5</div>
              </div>
            </div>

            <div class="divider" style="margin-bottom:20px;"></div>

            <!-- disponibilidad -->
            <div style="margin-bottom:20px;">
              <span style="font-size:14px;font-weight:600;display:block;margin-bottom:12px;">Disponibilidad</span>
              <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:13px 16px;display:flex;justify-content:space-between;align-items:center;">
                <span style="font-size:14px;color:var(--text-primary);">24 de mayo de 2025</span>
                <span style="font-size:18px;">📅</span>
              </div>
            </div>

            <div class="divider" style="margin-bottom:20px;"></div>

            <!-- extras -->
            <div style="margin-bottom:24px;">
              <span style="font-size:14px;font-weight:600;display:block;margin-bottom:4px;">Opciones adicionales</span>
              <div class="toggle-wrap">
                <span class="toggle-label">Solo verificados</span>
                <div class="toggle on" onclick="this.classList.toggle('on');this.classList.toggle('off');">
                  <div class="toggle-knob"></div>
                </div>
              </div>
              <div class="divider"></div>
              <div class="toggle-wrap">
                <span class="toggle-label">Con fotos / galería</span>
                <div class="toggle off" onclick="this.classList.toggle('on');this.classList.toggle('off');">
                  <div class="toggle-knob"></div>
                </div>
              </div>
              <div class="divider"></div>
              <div class="toggle-wrap">
                <span class="toggle-label">Disponibles hoy</span>
                <div class="toggle off" onclick="this.classList.toggle('on');this.classList.toggle('off');">
                  <div class="toggle-knob"></div>
                </div>
              </div>
            </div>

            <button class="btn-gold">Ver 18 resultados</button>
          </div>
        </div>
      </div>

      <!-- ══ S1: PROMOCIONES / CUPONES ══ -->
      <div class="screen" id="s1">
        <div class="screen-header">
          <div class="back-btn" onclick="goTo(0)">←</div>
          <div class="header-title">Promociones</div>
          <div style="font-size:18px;">🎁</div>
        </div>
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:0 20px 24px;">

            <!-- ingresar cupón -->
            <div style="background:linear-gradient(135deg,#1E1200,#2A1A00);border:1px solid #3A2800;border-radius:var(--radius);padding:18px;margin-bottom:20px;">
              <p style="font-size:13px;color:var(--gold);font-weight:600;margin-bottom:4px;">¿Tienes un cupón?</p>
              <p style="font-size:12px;color:var(--text-secondary);margin-bottom:14px;">Ingrésalo aquí para obtener tu descuento</p>
              <div style="display:flex;gap:8px;">
                <input class="input-field" style="flex:1;font-size:13px;" placeholder="Ej: MUSIC10" value="">
                <button class="btn-sm">Aplicar</button>
              </div>
            </div>

            <!-- mis cupones -->
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:.7px;margin-bottom:12px;">Mis cupones disponibles</div>
            <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:24px;">

              <div class="coupon-card" style="background:var(--bg-card);">
                <div class="coupon-left" style="background:rgba(200,168,75,.06);">
                  <div style="font-size:24px;font-weight:800;color:var(--gold);">10%</div>
                  <div style="font-size:9px;color:var(--text-muted);">descuento</div>
                </div>
                <div class="coupon-right">
                  <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:4px;">
                    <span class="coupon-code" style="color:var(--gold);">MUSIC10</span>
                    <span class="coupon-tag" style="background:rgba(76,175,80,.1);border:1px solid rgba(76,175,80,.3);color:#4CAF50;">Activo</span>
                  </div>
                  <div style="font-size:12px;color:var(--text-secondary);margin-bottom:8px;">10% en tu próxima reserva. Sin mínimo de compra.</div>
                  <div style="font-size:10px;color:var(--text-muted);">Vence: 31 mayo 2025</div>
                </div>
              </div>

              <div class="coupon-card" style="background:var(--bg-card);">
                <div class="coupon-left" style="background:rgba(33,150,243,.06);">
                  <div style="font-size:20px;font-weight:800;color:#2196F3;">$500</div>
                  <div style="font-size:9px;color:var(--text-muted);">crédito</div>
                </div>
                <div class="coupon-right">
                  <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:4px;">
                    <span class="coupon-code" style="color:#2196F3;">BIENVENIDA</span>
                    <span class="coupon-tag" style="background:rgba(33,150,243,.1);border:1px solid rgba(33,150,243,.3);color:#2196F3;">Activo</span>
                  </div>
                  <div style="font-size:12px;color:var(--text-secondary);margin-bottom:8px;">$500 de crédito en tu primera reserva de más de $2,000.</div>
                  <div style="font-size:10px;color:var(--text-muted);">Vence: 1 junio 2025</div>
                </div>
              </div>

              <div class="coupon-card" style="background:var(--bg-card);opacity:.55;">
                <div class="coupon-left" style="background:var(--bg-card2);">
                  <div style="font-size:22px;font-weight:800;color:var(--text-muted);">15%</div>
                  <div style="font-size:9px;color:var(--text-muted);">descuento</div>
                </div>
                <div class="coupon-right">
                  <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:4px;">
                    <span class="coupon-code" style="color:var(--text-muted);">VERANO15</span>
                    <span class="coupon-tag" style="background:rgba(229,57,53,.1);border:1px solid rgba(229,57,53,.3);color:#E53935;">Vencido</span>
                  </div>
                  <div style="font-size:12px;color:var(--text-muted);margin-bottom:8px;">15% especial de temporada de verano.</div>
                  <div style="font-size:10px;color:var(--text-muted);">Venció: 28 feb 2025</div>
                </div>
              </div>
            </div>

            <!-- ofertas destacadas -->
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:.7px;margin-bottom:12px;">Ofertas de la semana</div>
            <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:16px;">
              <div style="background:linear-gradient(135deg,#2A1500,#1A0800);border-radius:var(--radius);padding:16px;display:flex;align-items:center;gap:14px;">
                <div style="font-size:34px;">🎻</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:700;">Mariachis — 20% OFF</div>
                  <div style="font-size:12px;color:var(--text-secondary);margin-top:2px;">Solo esta semana en reservas confirmadas</div>
                </div>
                <button class="btn-sm" style="font-size:11px;padding:8px 12px;">Usar</button>
              </div>
              <div style="background:linear-gradient(135deg,#001A1A,#000E0E);border-radius:var(--radius);padding:16px;display:flex;align-items:center;gap:14px;">
                <div style="font-size:34px;">🎧</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:700;">DJs para bodas — Paquete especial</div>
                  <div style="font-size:12px;color:var(--text-secondary);margin-top:2px;">Incluye 4 horas + sonido</div>
                </div>
                <button class="btn-sm" style="font-size:11px;padding:8px 12px;">Ver</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ══ S2: POLÍTICA DE CANCELACIÓN ══ -->
      <div class="screen" id="s2">
        <div class="screen-header">
          <div class="back-btn">←</div>
          <div class="header-title">Política de Cancelación</div>
        </div>
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:0 20px 24px;">

            <!-- resumen visual -->
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:18px;margin-bottom:20px;">
              <p style="font-size:13px;font-weight:700;margin-bottom:14px;">Tabla de reembolsos</p>
              <div style="display:flex;flex-direction:column;gap:10px;">
                <div style="display:flex;align-items:center;gap:12px;">
                  <div style="width:36px;height:36px;border-radius:50%;background:rgba(76,175,80,.12);border:1px solid rgba(76,175,80,.3);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0;">✓</div>
                  <div style="flex:1;">
                    <div style="font-size:13px;font-weight:600;">Más de 7 días antes</div>
                    <div style="font-size:11px;color:var(--text-muted);">Reembolso completo</div>
                  </div>
                  <div style="font-size:14px;font-weight:700;color:#4CAF50;">100%</div>
                </div>
                <div class="divider"></div>
                <div style="display:flex;align-items:center;gap:12px;">
                  <div style="width:36px;height:36px;border-radius:50%;background:rgba(255,152,0,.12);border:1px solid rgba(255,152,0,.3);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0;">⚠</div>
                  <div style="flex:1;">
                    <div style="font-size:13px;font-weight:600;">3 a 7 días antes</div>
                    <div style="font-size:11px;color:var(--text-muted);">Reembolso parcial</div>
                  </div>
                  <div style="font-size:14px;font-weight:700;color:var(--warn);">50%</div>
                </div>
                <div class="divider"></div>
                <div style="display:flex;align-items:center;gap:12px;">
                  <div style="width:36px;height:36px;border-radius:50%;background:rgba(229,57,53,.12);border:1px solid rgba(229,57,53,.3);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0;">✕</div>
                  <div style="flex:1;">
                    <div style="font-size:13px;font-weight:600;">Menos de 3 días antes</div>
                    <div style="font-size:11px;color:var(--text-muted);">Sin reembolso</div>
                  </div>
                  <div style="font-size:14px;font-weight:700;color:#E53935;">0%</div>
                </div>
              </div>
            </div>

            <!-- acordeón de preguntas -->
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:.7px;margin-bottom:12px;">Preguntas frecuentes</div>
            <div style="display:flex;flex-direction:column;gap:8px;margin-bottom:20px;">

              <div class="policy-item" id="pol0">
                <div class="policy-header" onclick="togglePolicy(0)">
                  <span style="font-size:13px;font-weight:600;">¿Cómo cancelo una reserva?</span>
                  <span class="policy-icon" id="picon0">▾</span>
                </div>
                <div class="policy-body" id="pbody0" style="display:block;">
                  Dirígete a <strong>Mis Reservas</strong>, selecciona la reserva activa y pulsa "Cancelar reserva". Sigue las instrucciones y confirma. El reembolso se procesará según la tabla de tiempos.
                </div>
              </div>

              <div class="policy-item" id="pol1">
                <div class="policy-header" onclick="togglePolicy(1)">
                  <span style="font-size:13px;font-weight:600;">¿Cuándo recibo mi reembolso?</span>
                  <span class="policy-icon" id="picon1">▸</span>
                </div>
                <div class="policy-body" id="pbody1" style="display:none;">
                  El reembolso se procesa en 3 a 5 días hábiles. El tiempo real depende de tu banco o institución financiera. Recibirás un correo de confirmación con el detalle del movimiento.
                </div>
              </div>

              <div class="policy-item" id="pol2">
                <div class="policy-header" onclick="togglePolicy(2)">
                  <span style="font-size:13px;font-weight:600;">¿Qué pasa si el proveedor cancela?</span>
                  <span class="policy-icon" id="picon2">▸</span>
                </div>
                <div class="policy-body" id="pbody2" style="display:none;">
                  Si el proveedor cancela la reserva, recibirás un reembolso completo del 100% sin importar el tiempo. Además, recibirás un cupón de compensación de $200 para tu próxima reserva.
                </div>
              </div>

              <div class="policy-item" id="pol3">
                <div class="policy-header" onclick="togglePolicy(3)">
                  <span style="font-size:13px;font-weight:600;">¿Puedo modificar la fecha?</span>
                  <span class="policy-icon" id="picon3">▸</span>
                </div>
                <div class="policy-body" id="pbody3" style="display:none;">
                  Sí, puedes solicitar un cambio de fecha directamente desde el chat con el proveedor. El cambio está sujeto a la disponibilidad del proveedor y debe acordarse con al menos 48 horas de anticipación.
                </div>
              </div>
            </div>

            <!-- CTA cancelar reserva activa -->
            <div style="background:rgba(229,57,53,.06);border:1px solid rgba(229,57,53,.2);border-radius:var(--radius);padding:16px;margin-bottom:20px;">
              <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px;">
                <div style="width:44px;height:44px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#2A1500,#1A0800);display:flex;align-items:center;justify-content:center;font-size:22px;">🎻</div>
                <div>
                  <div style="font-size:13px;font-weight:600;">Mariachi Los Reyes</div>
                  <div style="font-size:11px;color:var(--text-muted);">Reserva #MUS-48291 · 24 mayo</div>
                </div>
              </div>
              <p style="font-size:12px;color:var(--text-secondary);margin-bottom:12px;">Aún estás dentro del período de reembolso completo (faltan 11 días). Si cancelas ahora, recibirás <strong style="color:#4CAF50;">$6,206 de vuelta</strong>.</p>
              <button style="width:100%;background:transparent;border:1px solid rgba(229,57,53,.5);color:#E53935;padding:12px;border-radius:var(--radius-sm);font-size:13px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;">Cancelar esta reserva</button>
            </div>
          </div>
        </div>
      </div>

      <!-- ══ S3: COTIZACIÓN PERSONALIZADA ══ -->
      <div class="screen" id="s3">
        <div class="screen-header">
          <div class="back-btn">←</div>
          <div class="header-title">Cotización</div>
          <div style="font-size:12px;color:var(--gold);font-weight:600;">Compartir</div>
        </div>
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:0 20px 24px;">

            <!-- evento -->
            <div style="background:linear-gradient(135deg,#1E1200,#2A1A00);border:1px solid #3A2800;border-radius:var(--radius);padding:16px;margin-bottom:20px;">
              <div style="font-size:11px;color:var(--gold);font-weight:600;margin-bottom:10px;text-transform:uppercase;letter-spacing:.5px;">Detalles del evento</div>
              <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                <div><div style="font-size:10px;color:var(--text-muted);">Tipo</div><div style="font-size:13px;font-weight:600;">Boda</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Fecha</div><div style="font-size:13px;font-weight:600;">24 mayo 2025</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Hora</div><div style="font-size:13px;font-weight:600;">7:00 PM</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Lugar</div><div style="font-size:13px;font-weight:600;">Guadalajara</div></div>
              </div>
            </div>

            <!-- servicios -->
            <div style="font-size:14px;font-weight:700;margin-bottom:12px;">Servicios seleccionados</div>
            <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:20px;">
              <div class="service-row">
                <div class="service-emoji" style="background:linear-gradient(135deg,#2A1500,#1A0800);">🎻</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Mariachi Los Reyes</div>
                  <div style="font-size:11px;color:var(--text-muted);">2 horas · Entrada + Brindis</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;">
                  <button class="qty-btn">−</button>
                  <span style="font-size:12px;font-weight:600;min-width:14px;text-align:center;">2h</span>
                  <button class="qty-btn">+</button>
                </div>
                <span class="price-tag">$5,000</span>
              </div>
              <div class="service-row">
                <div class="service-emoji" style="background:linear-gradient(135deg,#1A001A,#0E000E);">🎧</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">DJ Alex</div>
                  <div style="font-size:11px;color:var(--text-muted);">3 horas · Recepción + Fiesta</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;">
                  <button class="qty-btn">−</button>
                  <span style="font-size:12px;font-weight:600;min-width:14px;text-align:center;">3h</span>
                  <button class="qty-btn">+</button>
                </div>
                <span class="price-tag">$10,500</span>
              </div>
              <!-- añadir servicio -->
              <div style="border:1px dashed var(--border);border-radius:var(--radius-sm);padding:14px;display:flex;align-items:center;justify-content:center;gap:8px;cursor:pointer;">
                <span style="font-size:20px;color:var(--gold);">+</span>
                <span style="font-size:13px;color:var(--gold);font-weight:600;">Agregar otro servicio</span>
              </div>
            </div>

            <!-- desglose -->
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;margin-bottom:16px;">
              <div style="font-size:14px;font-weight:700;margin-bottom:12px;">Desglose de costos</div>
              <div class="summary-row"><span style="font-size:13px;color:var(--text-secondary);">Mariachi Los Reyes · 2h</span><span style="font-size:13px;font-weight:600;">$5,000</span></div>
              <div class="summary-row"><span style="font-size:13px;color:var(--text-secondary);">DJ Alex · 3h</span><span style="font-size:13px;font-weight:600;">$10,500</span></div>
              <div class="summary-row"><span style="font-size:13px;color:var(--text-secondary);">Subtotal</span><span style="font-size:13px;font-weight:600;">$15,500</span></div>
              <div class="summary-row"><span style="font-size:13px;color:var(--text-secondary);">Descuento MUSIC10 (-10%)</span><span style="font-size:13px;font-weight:600;color:#4CAF50;">-$1,550</span></div>
              <div class="summary-row"><span style="font-size:13px;color:var(--text-secondary);">Cargo por servicio</span><span style="font-size:13px;font-weight:600;">$980</span></div>
              <div class="summary-row"><span style="font-size:13px;color:var(--text-secondary);">IVA 16%</span><span style="font-size:13px;font-weight:600;">$2,388</span></div>
              <div style="padding-top:10px;display:flex;justify-content:space-between;align-items:center;">
                <span style="font-size:15px;font-weight:700;">Total estimado</span>
                <span style="font-size:18px;font-weight:800;color:var(--gold);">$17,318</span>
              </div>
            </div>

            <div style="display:flex;gap:10px;margin-bottom:16px;">
              <button class="btn-outline" style="font-size:13px;padding:12px;">💾 Guardar</button>
              <button class="btn-outline" style="font-size:13px;padding:12px;">📤 Compartir</button>
            </div>
            <button class="btn-gold">Proceder al pago</button>
          </div>
        </div>
      </div>

      <!-- ══ S4: SOPORTE / FAQ ══ -->
      <div class="screen" id="s4">
        <div class="screen-header">
          <div class="back-btn">←</div>
          <div class="header-title">Ayuda y Soporte</div>
        </div>
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:0 20px 24px;">

            <!-- buscador -->
            <div style="display:flex;align-items:center;gap:10px;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:12px 14px;margin-bottom:20px;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
              <span style="font-size:13px;color:var(--text-muted);">Busca tu pregunta aquí...</span>
            </div>

            <!-- canales de soporte -->
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:.7px;margin-bottom:12px;">Contactar soporte</div>
            <div style="display:flex;flex-direction:column;gap:8px;margin-bottom:24px;">
              <div class="support-btn">
                <div class="support-icon" style="background:rgba(200,168,75,.1);">💬</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Chat en vivo</div>
                  <div style="font-size:11px;color:var(--text-muted);">Respuesta inmediata · Disponible ahora</div>
                </div>
                <div style="width:8px;height:8px;border-radius:50%;background:var(--success);"></div>
              </div>
              <div class="support-btn">
                <div class="support-icon" style="background:rgba(33,150,243,.1);">📧</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Correo electrónico</div>
                  <div style="font-size:11px;color:var(--text-muted);">soporte@musicast.mx · Resp. en 24h</div>
                </div>
                <span style="font-size:14px;color:var(--text-muted);">›</span>
              </div>
              <div class="support-btn">
                <div class="support-icon" style="background:rgba(76,175,80,.1);">📞</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Llamada telefónica</div>
                  <div style="font-size:11px;color:var(--text-muted);">L-V 9AM–7PM · (55) 1234-5678</div>
                </div>
                <span style="font-size:14px;color:var(--text-muted);">›</span>
              </div>
            </div>

            <!-- faq -->
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:.7px;margin-bottom:12px;">Preguntas frecuentes</div>
            <div style="display:flex;flex-direction:column;gap:8px;margin-bottom:24px;">
              <div class="faq-item open" id="faq0">
                <div class="faq-header" onclick="toggleFaq(0)">
                  <span class="faq-q">¿Cómo reservo un músico?</span>
                  <span class="faq-icon" style="transform:rotate(45deg);">+</span>
                </div>
                <div class="faq-body" style="display:block;">Busca el tipo de música que necesitas, elige un proveedor y pulsa "Reservar". Completa los detalles del evento, selecciona el método de pago y confirma. Recibirás un correo con el número de reserva.</div>
              </div>
              <div class="faq-item" id="faq1">
                <div class="faq-header" onclick="toggleFaq(1)">
                  <span class="faq-q">¿Los proveedores están verificados?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-body">Los proveedores con el badge ✓ Verificado han pasado por nuestro proceso de validación de identidad, portafolio y referencias. Recomendamos siempre elegir proveedores verificados.</div>
              </div>
              <div class="faq-item" id="faq2">
                <div class="faq-header" onclick="toggleFaq(2)">
                  <span class="faq-q">¿Qué métodos de pago aceptan?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-body">Aceptamos tarjetas de crédito/débito (Visa, Mastercard, Amex), transferencia bancaria (SPEI) y PayPal. Todos los pagos están protegidos con encriptación SSL.</div>
              </div>
              <div class="faq-item" id="faq3">
                <div class="faq-header" onclick="toggleFaq(3)">
                  <span class="faq-q">¿Cómo reporto un problema con un proveedor?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-body">Desde la conversación de chat, pulsa los 3 puntos (⋯) y selecciona "Reportar problema". También puedes escribirnos a soporte@musicast.mx con el número de reserva.</div>
              </div>
              <div class="faq-item" id="faq4">
                <div class="faq-header" onclick="toggleFaq(4)">
                  <span class="faq-q">¿Puedo reservar con menos de 24 horas?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-body">Sí, aunque depende de la disponibilidad del proveedor. Para reservas urgentes te recomendamos contactar directamente al proveedor por chat antes de confirmar.</div>
              </div>
            </div>

            <!-- temas populares -->
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:.7px;margin-bottom:12px;">Temas populares</div>
            <div style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:16px;">
              <div class="chip">Pagos</div>
              <div class="chip">Cancelaciones</div>
              <div class="chip">Reembolsos</div>
              <div class="chip">Mi cuenta</div>
              <div class="chip">Proveedores</div>
              <div class="chip">Reservas</div>
            </div>
          </div>
        </div>
      </div>

      <!-- ══ S5: PERFIL MEJORADO ══ -->
      <div class="screen" id="s5">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="header-title">Mi Perfil</div>
            <div style="font-size:12px;color:var(--gold);font-weight:600;cursor:pointer;">Editar</div>
          </div>
          <div style="padding:0 20px 24px;">

            <!-- hero perfil -->
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:18px;margin-bottom:20px;">
              <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px;">
                <div style="position:relative;">
                  <div style="width:68px;height:68px;border-radius:50%;background:var(--bg-card2);border:2px solid var(--gold);display:flex;align-items:center;justify-content:center;font-size:28px;">👤</div>
                  <div style="position:absolute;bottom:0;right:0;width:22px;height:22px;border-radius:50%;background:var(--gold);display:flex;align-items:center;justify-content:center;font-size:11px;border:2px solid var(--bg-card);">✏</div>
                </div>
                <div style="flex:1;">
                  <div style="font-size:17px;font-weight:700;">Carlos Mendoza</div>
                  <div style="font-size:12px;color:var(--text-muted);">carlos@email.com</div>
                  <div style="font-size:12px;color:var(--text-muted);">+52 55 1234 5678</div>
                </div>
                <div style="display:inline-flex;align-items:center;gap:4px;background:rgba(76,175,80,.1);border:1px solid rgba(76,175,80,.3);color:#4CAF50;font-size:9px;font-weight:600;padding:3px 8px;border-radius:10px;align-self:flex-start;">✓ Verificado</div>
              </div>
              <!-- stats -->
              <div style="display:flex;gap:8px;">
                <div class="stat-box">
                  <div style="font-size:20px;font-weight:700;">7</div>
                  <div style="font-size:10px;color:var(--text-muted);">Reservas</div>
                </div>
                <div class="stat-box">
                  <div style="font-size:20px;font-weight:700;">4</div>
                  <div style="font-size:10px;color:var(--text-muted);">Favoritos</div>
                </div>
                <div class="stat-box">
                  <div style="font-size:20px;font-weight:700;">5</div>
                  <div style="font-size:10px;color:var(--text-muted);">Reseñas</div>
                </div>
                <div class="stat-box">
                  <div style="font-size:17px;font-weight:700;color:var(--gold);">$2</div>
                  <div style="font-size:10px;color:var(--text-muted);">Cupones</div>
                </div>
              </div>
            </div>

            <!-- direcciones guardadas -->
            <div class="section-group">
              <div class="section-group-title">Direcciones guardadas</div>
              <div style="display:flex;flex-direction:column;gap:8px;">
                <div class="address-card">
                  <div style="font-size:20px;margin-top:1px;">🏠</div>
                  <div style="flex:1;">
                    <div style="font-size:13px;font-weight:600;">Casa</div>
                    <div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Av. Chapultepec 123, Col. Americana, Guadalajara, Jalisco</div>
                  </div>
                  <div style="font-size:12px;color:var(--text-muted);cursor:pointer;">Editar</div>
                </div>
                <div class="address-card">
                  <div style="font-size:20px;margin-top:1px;">🏢</div>
                  <div style="flex:1;">
                    <div style="font-size:13px;font-weight:600;">Salón de eventos</div>
                    <div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Blvd. Puerta de Hierro 5153, Zapopan, Jalisco</div>
                  </div>
                  <div style="font-size:12px;color:var(--text-muted);cursor:pointer;">Editar</div>
                </div>
                <button style="background:transparent;border:1px dashed var(--border);border-radius:var(--radius-sm);padding:12px;width:100%;color:var(--gold);font-size:13px;font-weight:600;cursor:pointer;font-family:'Inter',sans-serif;">+ Agregar dirección</button>
              </div>
            </div>

            <!-- métodos de pago -->
            <div class="section-group">
              <div class="section-group-title">Métodos de pago guardados</div>
              <div style="display:flex;flex-direction:column;gap:8px;">
                <div class="payment-saved">
                  <div style="font-size:22px;">💳</div>
                  <div style="flex:1;">
                    <div class="card-last4">Visa •••• 4291</div>
                    <div class="card-exp">Vence 05/27</div>
                  </div>
                  <div class="default-badge">Principal</div>
                </div>
                <div class="payment-saved">
                  <div style="font-size:22px;">💳</div>
                  <div style="flex:1;">
                    <div class="card-last4">Mastercard •••• 8843</div>
                    <div class="card-exp">Vence 11/26</div>
                  </div>
                  <span style="font-size:12px;color:var(--text-muted);cursor:pointer;">Eliminar</span>
                </div>
                <button style="background:transparent;border:1px dashed var(--border);border-radius:var(--radius-sm);padding:12px;width:100%;color:var(--gold);font-size:13px;font-weight:600;cursor:pointer;font-family:'Inter',sans-serif;">+ Agregar método de pago</button>
              </div>
            </div>

            <!-- preferencias -->
            <div class="section-group">
              <div class="section-group-title">Preferencias</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:0 14px;">
                <div class="pref-row">
                  <div>
                    <div style="font-size:13px;font-weight:600;">Notificaciones push</div>
                    <div style="font-size:11px;color:var(--text-muted);">Alertas de reservas y mensajes</div>
                  </div>
                  <div class="toggle on" onclick="this.classList.toggle('on');this.classList.toggle('off');"><div class="toggle-knob"></div></div>
                </div>
                <div class="pref-row">
                  <div>
                    <div style="font-size:13px;font-weight:600;">Correos promocionales</div>
                    <div style="font-size:11px;color:var(--text-muted);">Ofertas y descuentos exclusivos</div>
                  </div>
                  <div class="toggle off" onclick="this.classList.toggle('on');this.classList.toggle('off');"><div class="toggle-knob"></div></div>
                </div>
                <div class="pref-row">
                  <div>
                    <div style="font-size:13px;font-weight:600;">Recordatorios de eventos</div>
                    <div style="font-size:11px;color:var(--text-muted);">Aviso 24h antes de tu evento</div>
                  </div>
                  <div class="toggle on" onclick="this.classList.toggle('on');this.classList.toggle('off');"><div class="toggle-knob"></div></div>
                </div>
                <div class="pref-row" style="border-bottom:none;">
                  <div>
                    <div style="font-size:13px;font-weight:600;">Modo oscuro</div>
                    <div style="font-size:11px;color:var(--text-muted);">Activo siempre</div>
                  </div>
                  <div class="toggle on" style="cursor:default;opacity:.6;"><div class="toggle-knob"></div></div>
                </div>
              </div>
            </div>

            <!-- seguridad y cuenta -->
            <div class="section-group">
              <div class="section-group-title">Seguridad</div>
              <div style="display:flex;flex-direction:column;gap:8px;">
                <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:14px;display:flex;align-items:center;justify-content:space-between;cursor:pointer;">
                  <div style="display:flex;align-items:center;gap:10px;">
                    <span style="font-size:18px;">🔑</span>
                    <div>
                      <div style="font-size:13px;font-weight:600;">Cambiar contraseña</div>
                      <div style="font-size:11px;color:var(--text-muted);">Última actualización: hace 3 meses</div>
                    </div>
                  </div>
                  <span style="color:var(--text-muted);">›</span>
                </div>
                <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:14px;display:flex;align-items:center;justify-content:space-between;cursor:pointer;">
                  <div style="display:flex;align-items:center;gap:10px;">
                    <span style="font-size:18px;">🛡</span>
                    <div>
                      <div style="font-size:13px;font-weight:600;">Autenticación de 2 factores</div>
                      <div style="font-size:11px;color:var(--success);">Activada</div>
                    </div>
                  </div>
                  <span style="color:var(--text-muted);">›</span>
                </div>
              </div>
            </div>

            <button class="btn-outline" style="color:#E53935;border-color:rgba(229,57,53,.4);margin-bottom:16px;">🚪 Cerrar sesión</button>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><span>Inicio</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg><span>Favoritos</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg><span>Mensajes</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

    </div><!-- /phone-screen -->
  </div><!-- /phone-frame -->

  <!-- ═══════ INFO PANEL ═══════ -->
  <div class="info-panel">
    <div class="screen-label"  id="infoLabel">Pantalla 19 de 24</div>
    <div class="screen-title"  id="infoTitle">Filtros Avanzados</div>
    <div class="screen-desc"   id="infoDesc">Hoja inferior deslizable con controles de filtrado profundo: precio, categoría, rating mínimo, disponibilidad y opciones de verificación.</div>
    <ul class="features-list"  id="infoFeatures">
      <li>Slider de rango de precio doble</li>
      <li>Chips multi-selección por categoría</li>
      <li>Calificación mínima (3 / 4 / 4.5 / 5)</li>
      <li>Selector de fecha de disponibilidad</li>
      <li>Toggles: verificado, con fotos, hoy</li>
      <li>Contador de resultados dinámico</li>
    </ul>
    <div class="nav-arrows">
      <button class="arrow-btn" id="prevBtn" onclick="navigate(-1)" disabled>←</button>
      <button class="arrow-btn" id="nextBtn" onclick="navigate(1)">→</button>
    </div>
    <div class="screen-counter"><strong id="counterCurrent">19</strong> / <strong>24</strong> pantallas totales</div>
  </div>

</div><!-- /main-wrap -->

<script>
const screens = [
  {
    label:'Pantalla 19 de 24', title:'Filtros Avanzados',
    desc:'Hoja inferior deslizable con controles de filtrado profundo: precio, categoría, rating mínimo, disponibilidad y opciones de verificación.',
    features:['Slider de rango de precio doble','Chips multi-selección por categoría','Calificación mínima (3 / 4 / 4.5 / 5)','Selector de fecha de disponibilidad','Toggles: verificado, con fotos, hoy','Contador de resultados dinámico']
  },
  {
    label:'Pantalla 20 de 24', title:'Promociones y Cupones',
    desc:'Sección de descuentos con gestión de cupones, visualización de vigencia y ofertas de la semana por categoría musical.',
    features:['Campo de ingreso de código de cupón','Lista de cupones activos / vencidos','Badge de estado (Activo / Vencido)','Valor del descuento prominente','Oferta destacada por categoría','Botón de aplicar al carrito']
  },
  {
    label:'Pantalla 21 de 24', title:'Política de Cancelación',
    desc:'Pantalla informativa con tabla visual de reembolsos por tiempo, acordeón de preguntas y bloque de acción para cancelar reserva activa.',
    features:['Tabla de reembolsos (100/50/0%)','Acordeón de FAQ expandible','Estado del reembolso disponible','Monto exacto a recuperar','Botón directo de cancelación','Aviso de compensación por falla del proveedor']
  },
  {
    label:'Pantalla 22 de 24', title:'Cotización Personalizada',
    desc:'Constructor visual de cotización que permite combinar múltiples servicios, ajustar duración y ver el desglose de costos en tiempo real.',
    features:['Resumen del evento en card dorada','Ajuste de horas por servicio (± botones)','Agregar servicios adicionales','Desglose: subtotal + IVA + descuento','Precio total en tiempo real','Opciones de guardar y compartir PDF']
  },
  {
    label:'Pantalla 23 de 24', title:'Soporte y FAQ',
    desc:'Centro de ayuda completo con canales de contacto (chat, email, teléfono), preguntas frecuentes expandibles y chips de temas populares.',
    features:['Buscador de preguntas','3 canales: chat / email / teléfono','Indicador de disponibilidad en línea','Acordeón FAQ con 5 preguntas','Chips de temas populares','Acceso a reporte de problemas']
  },
  {
    label:'Pantalla 24 de 24', title:'Perfil Mejorado',
    desc:'Versión extendida del perfil con estadísticas del usuario, direcciones guardadas, métodos de pago, preferencias de notificación y configuración de seguridad.',
    features:['Estadísticas: reservas, favoritos, reseñas','Gestión de direcciones (agregar / editar)','Tarjetas guardadas con badge "Principal"','Toggles de notificaciones personalizados','Cambio de contraseña y 2FA','Opción de cerrar sesión en rojo']
  }
];

let current = 0;

function goTo(idx){
  document.querySelectorAll('.screen').forEach(s=>s.classList.remove('active'));
  document.getElementById('s'+idx).classList.add('active');
  document.querySelectorAll('.nav-btn').forEach((b,i)=>b.classList.toggle('active',i===idx));
  document.getElementById('phoneScreen').scrollTop=0;
  current=idx; updatePanel();
}
function navigate(d){ const n=current+d; if(n>=0&&n<6) goTo(n); }
function updatePanel(){
  const s=screens[current];
  document.getElementById('infoLabel').textContent=s.label;
  document.getElementById('infoTitle').textContent=s.title;
  document.getElementById('infoDesc').textContent=s.desc;
  document.getElementById('infoFeatures').innerHTML=s.features.map(f=>`<li>${f}</li>`).join('');
  document.getElementById('counterCurrent').textContent=19+current;
  document.getElementById('prevBtn').disabled=current===0;
  document.getElementById('nextBtn').disabled=current===5;
}

/* RANGE SLIDER */
const prices=[0,1000,2000,3000,4000,5000,6000,8000,10000,12000,15000,18000,20000,25000,30000,40000,50000];
function lerp(t){ const idx=Math.floor(t/100*(prices.length-1)); return prices[Math.min(idx,prices.length-1)]; }
function fmt(v){ return '$'+v.toLocaleString('es-MX'); }
function updateRange(){
  let mn=parseInt(document.getElementById('rangeMin').value);
  let mx=parseInt(document.getElementById('rangeMax').value);
  if(mn>mx-5){ document.getElementById('rangeMin').value=mx-5; mn=mx-5; }
  document.getElementById('rangeFill').style.left=mn+'%';
  document.getElementById('rangeFill').style.right=(100-mx)+'%';
  document.getElementById('priceLabel').textContent=fmt(lerp(mn))+' — '+fmt(lerp(mx));
}

/* POLICY ACCORDION */
function togglePolicy(i){
  const body=document.getElementById('pbody'+i);
  const icon=document.getElementById('picon'+i);
  const open=body.style.display==='block';
  body.style.display=open?'none':'block';
  icon.textContent=open?'▸':'▾';
}

/* FAQ ACCORDION */
function toggleFaq(i){
  const item=document.getElementById('faq'+i);
  item.classList.toggle('open');
}
</script>

<!-- Floating back button — bottom-left -->
<style>
  .back-float {
    position: fixed;
    bottom: 24px;
    left: 24px;
    z-index: 9999;
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 11px 18px 11px 14px;
    background: rgba(17, 17, 17, 0.88);
    border: 1px solid rgba(200, 168, 75, 0.40);
    border-radius: 999px;
    color: var(--gold);
    font-family: 'Sora', sans-serif;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.2px;
    text-decoration: none;
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.55), 0 0 0 1px rgba(200,168,75,0.08) inset;
    transition: background 0.22s, border-color 0.22s, box-shadow 0.22s, transform 0.18s;
  }
  .back-float:hover {
    background: rgba(200, 168, 75, 0.14);
    border-color: var(--gold);
    box-shadow: 0 12px 40px rgba(0,0,0,0.6), 0 0 18px rgba(200,168,75,0.18);
    transform: translateY(-2px);
    color: var(--gold-light);
  }
  .back-float svg {
    width: 15px;
    height: 15px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
    transition: transform 0.18s;
  }
  .back-float:hover svg {
    transform: translateX(-3px);
  }
  @media (max-width: 600px) {
    .back-float { bottom: 16px; left: 16px; padding: 10px 14px 10px 12px; font-size: 12px; }
  }
</style>

<a href="./programacion.php#musicast" class="back-float" aria-label="Volver">
  <svg viewBox="0 0 24 24">
    <polyline points="15 18 9 12 15 6"/>
  </svg>
  Volver
</a>

</body>
</html>
