<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musicast — Fase 1 Mockup</title>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --gold: #C8A84B;
    --gold-light: #E2C070;
    --gold-dark: #A08030;
    --bg-dark: #0C0C0C;
    --bg-card: #1A1A1A;
    --bg-card2: #242424;
    --bg-input: #2A2A2A;
    --text-primary: #F5F5F5;
    --text-secondary: #9A9A9A;
    --text-muted: #5A5A5A;
    --border: #2E2E2E;
    --success: #4CAF50;
    --phone-w: 375px;
    --phone-h: 812px;
    --radius: 12px;
    --radius-sm: 8px;
  }

  body {
    background: #0A0A0A;
    font-family: 'Inter', sans-serif;
    color: var(--text-primary);
    min-height: 100vh;
  }

  /* HEADER */
  .site-header {
    background: #111;
    border-bottom: 1px solid var(--border);
    padding: 16px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 100;
  }
  .site-logo {
    font-family: 'Sora', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: var(--gold);
    letter-spacing: -0.5px;
  }
  .site-logo span { color: var(--text-primary); }
  .phase-badge {
    background: var(--gold);
    color: #0C0C0C;
    font-size: 11px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 20px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
  }

  /* NAV TABS */
  .screens-nav {
    display: flex;
    gap: 6px;
    padding: 20px 32px 0;
    overflow-x: auto;
    scrollbar-width: none;
    flex-wrap: wrap;
  }
  .screens-nav::-webkit-scrollbar { display: none; }
  .nav-btn {
    background: var(--bg-card);
    border: 1px solid var(--border);
    color: var(--text-secondary);
    padding: 7px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
    white-space: nowrap;
    transition: all .2s;
    font-family: 'Inter', sans-serif;
  }
  .nav-btn:hover { border-color: var(--gold); color: var(--gold); }
  .nav-btn.active {
    background: var(--gold);
    border-color: var(--gold);
    color: #0C0C0C;
    font-weight: 600;
  }

  /* MAIN LAYOUT */
  .main-wrap {
    padding: 32px;
    display: flex;
    gap: 40px;
    align-items: flex-start;
    justify-content: center;
  }

  /* PHONE FRAME */
  .phone-frame {
    width: var(--phone-w);
    min-width: var(--phone-w);
    background: #111;
    border-radius: 48px;
    border: 2px solid #2A2A2A;
    overflow: hidden;
    box-shadow: 0 40px 80px rgba(0,0,0,0.7), 0 0 0 1px #333 inset;
    position: sticky;
    top: 100px;
  }
  .phone-notch {
    height: 44px;
    background: #0C0C0C;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 24px;
    font-size: 12px;
    font-weight: 600;
    color: var(--text-primary);
  }
  .notch-island {
    width: 120px;
    height: 22px;
    background: #000;
    border-radius: 12px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 11px;
  }
  .phone-screen {
    height: var(--phone-h);
    background: var(--bg-dark);
    overflow-y: auto;
    scrollbar-width: none;
    position: relative;
  }
  .phone-screen::-webkit-scrollbar { display: none; }

  /* INFO PANEL */
  .info-panel {
    max-width: 300px;
    position: sticky;
    top: 100px;
  }
  .screen-label {
    font-family: 'Sora', sans-serif;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: var(--gold);
    margin-bottom: 8px;
  }
  .screen-title {
    font-family: 'Sora', sans-serif;
    font-size: 26px;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1.2;
    margin-bottom: 12px;
  }
  .screen-desc {
    font-size: 14px;
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 20px;
  }
  .features-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 8px;
  }
  .features-list li {
    font-size: 13px;
    color: var(--text-secondary);
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .features-list li::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--gold);
    flex-shrink: 0;
  }
  .nav-arrows {
    display: flex;
    gap: 8px;
    margin-top: 24px;
  }
  .arrow-btn {
    background: var(--bg-card);
    border: 1px solid var(--border);
    color: var(--text-secondary);
    width: 38px;
    height: 38px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .2s;
    font-family: 'Inter', sans-serif;
  }
  .arrow-btn:hover { background: var(--gold); border-color: var(--gold); color: #000; }

  /* SCREEN INDICATOR */
  .screen-counter {
    font-size: 12px;
    color: var(--text-muted);
    margin-top: 12px;
  }
  .screen-counter strong { color: var(--text-primary); }

  /* ======================== */
  /* SCREEN COMPONENTS */
  /* ======================== */

  .screen { display: none; flex-direction: column; min-height: 100%; }
  .screen.active { display: flex; }

  /* STATUS BAR */
  .status-bar {
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    font-size: 12px;
    font-weight: 600;
    flex-shrink: 0;
  }
  .status-icons { display: flex; gap: 5px; align-items: center; }
  .status-icons svg { width: 14px; height: 14px; fill: currentColor; }

  /* BOTTOM NAV */
  .bottom-nav {
    height: 80px;
    background: #111;
    border-top: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 0 10px 16px;
    flex-shrink: 0;
  }
  .nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 3px;
    cursor: pointer;
    padding: 6px 14px;
  }
  .nav-item svg { width: 22px; height: 22px; stroke: var(--text-muted); fill: none; stroke-width: 1.5; }
  .nav-item span { font-size: 9px; color: var(--text-muted); font-weight: 500; }
  .nav-item.active svg { stroke: var(--gold); }
  .nav-item.active span { color: var(--gold); }

  /* BUTTONS */
  .btn-gold {
    width: 100%;
    background: var(--gold);
    color: #0C0C0C;
    border: none;
    padding: 16px;
    border-radius: var(--radius);
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    font-family: 'Inter', sans-serif;
    letter-spacing: 0.2px;
  }
  .btn-outline {
    width: 100%;
    background: transparent;
    color: var(--text-primary);
    border: 1px solid var(--border);
    padding: 16px;
    border-radius: var(--radius);
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    font-family: 'Inter', sans-serif;
  }
  .btn-sm {
    background: var(--gold);
    color: #0C0C0C;
    border: none;
    padding: 10px 20px;
    border-radius: var(--radius-sm);
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    font-family: 'Inter', sans-serif;
  }

  /* INPUTS */
  .input-field {
    width: 100%;
    background: var(--bg-input);
    border: 1px solid var(--border);
    color: var(--text-primary);
    padding: 14px 16px;
    border-radius: var(--radius-sm);
    font-size: 14px;
    font-family: 'Inter', sans-serif;
    outline: none;
  }
  .input-field::placeholder { color: var(--text-muted); }
  .input-group { display: flex; flex-direction: column; gap: 6px; }
  .input-label { font-size: 12px; font-weight: 600; color: var(--text-secondary); letter-spacing: 0.3px; }

  /* CARDS */
  .provider-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px;
    background: var(--bg-card);
    border-radius: var(--radius);
    border: 1px solid var(--border);
  }
  .provider-img {
    width: 64px;
    height: 64px;
    border-radius: var(--radius-sm);
    object-fit: cover;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
  }
  .provider-info { flex: 1; }
  .provider-name { font-size: 14px; font-weight: 600; color: var(--text-primary); }
  .provider-type { font-size: 11px; color: var(--text-muted); margin-top: 2px; }
  .provider-rating {
    display: flex;
    align-items: center;
    gap: 4px;
    margin-top: 5px;
  }
  .star { color: var(--gold); font-size: 11px; }
  .rating-num { font-size: 11px; font-weight: 600; color: var(--text-primary); }
  .rating-count { font-size: 11px; color: var(--text-muted); }
  .provider-price { text-align: right; }
  .price-amount { font-size: 15px; font-weight: 700; color: var(--text-primary); }
  .price-from { font-size: 10px; color: var(--text-muted); display: block; margin-top: 1px; }

  /* CATEGORY CHIPS */
  .categories-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
  .cat-chip {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 14px 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    cursor: pointer;
  }
  .cat-chip.active { border-color: var(--gold); background: rgba(200,168,75,0.08); }
  .cat-emoji { font-size: 28px; }
  .cat-name { font-size: 11px; font-weight: 600; color: var(--text-secondary); }

  /* SECTION HEADER */
  .section-hdr {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
  }
  .section-title { font-size: 16px; font-weight: 700; color: var(--text-primary); }
  .section-link { font-size: 12px; color: var(--gold); font-weight: 600; }

  /* HEART BTN */
  .heart-btn {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bg-card2);
    border-radius: 50%;
    border: none;
    cursor: pointer;
  }
  .heart-btn svg { width: 16px; height: 16px; stroke: var(--text-muted); fill: none; stroke-width: 1.8; }

  /* DIVIDER */
  .divider { height: 1px; background: var(--border); margin: 16px 0; }

  /* BADGE */
  .badge-verified {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: rgba(76,175,80,0.12);
    border: 1px solid rgba(76,175,80,0.3);
    color: #4CAF50;
    font-size: 10px;
    font-weight: 600;
    padding: 3px 8px;
    border-radius: 20px;
  }

  /* FORM FIELD */
  .form-field {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    padding: 12px 14px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .field-label { font-size: 10px; color: var(--text-muted); margin-bottom: 3px; }
  .field-value { font-size: 14px; font-weight: 500; color: var(--text-primary); }

  /* SELECT FIELD */
  .select-field {
    width: 100%;
    background: var(--bg-card);
    border: 1px solid var(--border);
    color: var(--text-primary);
    padding: 14px 16px;
    border-radius: var(--radius-sm);
    font-size: 14px;
    font-family: 'Inter', sans-serif;
    outline: none;
    appearance: none;
  }

  /* PAYMENT CARD */
  .payment-card {
    background: linear-gradient(135deg, #1E1E1E 0%, #2A2A2A 100%);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 22px;
  }
  .card-chip {
    width: 32px;
    height: 24px;
    background: var(--gold);
    border-radius: 4px;
    margin-bottom: 20px;
  }
  .card-number { font-size: 18px; letter-spacing: 3px; font-weight: 600; margin-bottom: 16px; }
  .card-bottom { display: flex; justify-content: space-between; }
  .card-holder { font-size: 12px; color: var(--text-secondary); }
  .card-expiry { font-size: 12px; color: var(--text-secondary); }
  .card-brand { font-size: 20px; }

  /* CONFIRMATION */
  .success-icon {
    width: 72px;
    height: 72px;
    background: rgba(76,175,80,0.12);
    border: 2px solid #4CAF50;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
    font-size: 28px;
  }

  /* AVATAR */
  .avatar {
    width: 72px;
    height: 72px;
    border-radius: 50%;
    background: var(--bg-card2);
    border: 2px solid var(--gold);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    flex-shrink: 0;
  }

  /* TAGS */
  .service-tag {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 12px;
    color: var(--text-secondary);
    padding: 2px 0;
  }
  .service-tag::before { content: '✓'; color: var(--gold); font-size: 11px; }

  /* GALLERY */
  .gallery-row {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 4px;
  }
  .gallery-img {
    height: 80px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    position: relative;
    overflow: hidden;
  }
  .gallery-more {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
  }

  /* SEARCH BAR */
  .search-bar {
    display: flex;
    align-items: center;
    gap: 10px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    padding: 12px 14px;
  }
  .search-bar svg { width: 16px; height: 16px; stroke: var(--text-muted); fill: none; flex-shrink: 0; }
  .search-bar span { font-size: 13px; color: var(--text-muted); }

  /* STEP INDICATOR */
  .steps { display: flex; align-items: center; gap: 8px; margin-bottom: 24px; }
  .step {
    width: 28px; height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    font-weight: 700;
  }
  .step.done { background: var(--gold); color: #000; }
  .step.current { background: var(--gold); color: #000; box-shadow: 0 0 0 3px rgba(200,168,75,.25); }
  .step.pending { background: var(--bg-card); color: var(--text-muted); border: 1px solid var(--border); }
  .step-line { flex: 1; height: 1px; background: var(--border); }
  .step-line.done { background: var(--gold); }

  /* PROFILE MENU */
  .menu-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
  }
  .menu-item-left { display: flex; align-items: center; gap: 12px; }
  .menu-icon {
    width: 36px; height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
  }
  .menu-chevron { font-size: 14px; color: var(--text-muted); }

  /* FEATURED CARD */
  .featured-card {
    border-radius: var(--radius);
    overflow: hidden;
    border: 1px solid var(--border);
    position: relative;
    height: 140px;
    display: flex;
    align-items: flex-end;
    flex-shrink: 0;
    min-width: 200px;
  }
  .featured-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, transparent 60%);
  }
  .featured-info {
    position: relative;
    z-index: 1;
    padding: 12px;
    width: 100%;
  }

  /* TOAST */
  .toast {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    padding: 12px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
  }

  /* PAYMENT METHOD OPTION */
  .pay-option {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px;
    background: var(--bg-card);
    border-radius: var(--radius-sm);
    border: 1px solid var(--border);
    cursor: pointer;
  }
  .pay-option.selected { border-color: var(--gold); }
  .pay-icon {
    width: 40px;
    height: 40px;
    border-radius: var(--radius-sm);
    background: var(--bg-card2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
  }
  .pay-radio {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    border: 2px solid var(--text-muted);
    margin-left: auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .pay-radio.selected { border-color: var(--gold); }
  .pay-radio.selected::after {
    content: '';
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--gold);
  }

  /* SUMMARY ROW */
  .summary-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid var(--border);
  }
  .summary-row:last-child { border-bottom: none; }
  .summary-label { font-size: 13px; color: var(--text-secondary); }
  .summary-value { font-size: 13px; font-weight: 600; color: var(--text-primary); }
  .summary-total .summary-label { font-size: 15px; font-weight: 700; color: var(--text-primary); }
  .summary-total .summary-value { font-size: 17px; font-weight: 700; color: var(--gold); }

  /* RESPONSIVE */
  @media (max-width: 900px) {
    .main-wrap { flex-direction: column; align-items: center; padding: 20px; }
    .phone-frame { position: static; }
    .info-panel { position: static; max-width: 375px; width: 100%; }
    .screens-nav { padding: 16px 20px 0; }
  }

  /* SPLASH BG */
  .splash-bg {
    background: linear-gradient(180deg, #1A0E00 0%, #0C0C0C 60%);
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 40px 28px;
    text-align: center;
  }
  .splash-concert {
    width: 100%;
    height: 260px;
    position: absolute;
    top: 0;
    left: 0;
    background: linear-gradient(180deg, #2A1500 0%, transparent 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 60px;
    opacity: 0.5;
    overflow: hidden;
  }
</style>
</head>
<body>

<div class="site-header">
  <div class="site-logo">Music<span>ast</span></div>
  <div class="phase-badge">Fase 1 — MVP</div>
</div>

<div class="screens-nav" id="screensNav">
  <button class="nav-btn active" onclick="goTo(0)">01 Splash</button>
  <button class="nav-btn" onclick="goTo(1)">02 Registro</button>
  <button class="nav-btn" onclick="goTo(2)">03 Login</button>
  <button class="nav-btn" onclick="goTo(3)">04 Home</button>
  <button class="nav-btn" onclick="goTo(4)">05 Búsqueda</button>
  <button class="nav-btn" onclick="goTo(5)">06 Detalle</button>
  <button class="nav-btn" onclick="goTo(6)">07 Reserva</button>
  <button class="nav-btn" onclick="goTo(7)">08 Pago</button>
  <button class="nav-btn" onclick="goTo(8)">09 Confirmación</button>
  <button class="nav-btn" onclick="goTo(9)">10 Perfil</button>
</div>

<div class="main-wrap">

  <!-- PHONE -->
  <div class="phone-frame">
    <div class="phone-notch">
      <span>9:41</span>
      <div class="notch-island"></div>
      <div class="status-icons">
        <svg viewBox="0 0 24 24"><path d="M1 6l23 0M5 6c0 3.3 2.7 6 6 6h0c3.3 0 6-2.7 6-6" stroke="currentColor" fill="none" stroke-width="2"/></svg>
        <svg viewBox="0 0 24 24" width="12" height="12"><rect x="1" y="6" width="18" height="12" rx="2" stroke="currentColor" fill="none" stroke-width="2"/><rect x="23" y="10" width="2" height="5" rx="1" fill="currentColor"/><rect x="3" y="8" width="12" height="8" rx="1" fill="currentColor"/></svg>
      </div>
    </div>

    <div class="phone-screen" id="phoneScreen">

      <!-- SCREEN 1: SPLASH -->
      <div class="screen active" id="s0">
        <div style="flex:1; position:relative; overflow:hidden;">
          <div style="position:absolute;inset:0; background:linear-gradient(170deg,#1C0E00 0%,#0C0C0C 55%); z-index:0;"></div>
          <div style="position:absolute;top:0;left:0;right:0;height:300px;display:flex;align-items:center;justify-content:center;font-size:70px;opacity:0.15;z-index:0;">🎸🥁🎺</div>
          <div style="position:relative;z-index:1;padding:60px 28px 40px;display:flex;flex-direction:column;height:100%;">
            <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;gap:16px;">
              <div style="font-size:64px;margin-bottom:8px;">🎵</div>
              <div style="font-family:'Sora',sans-serif;font-size:42px;font-weight:700;color:var(--gold);letter-spacing:-1px;line-height:1;">Music<span style="color:#fff;">ast</span></div>
              <p style="font-size:16px;color:var(--text-secondary);line-height:1.6;max-width:260px;">Encuentra música <strong style="color:var(--text-primary);">confiable</strong> para tu evento</p>
              <div style="display:flex;gap:6px;margin-top:8px;">
                <div style="width:28px;height:3px;border-radius:2px;background:var(--gold);"></div>
                <div style="width:8px;height:3px;border-radius:2px;background:var(--text-muted);"></div>
                <div style="width:8px;height:3px;border-radius:2px;background:var(--text-muted);"></div>
              </div>
            </div>
            <div style="display:flex;flex-direction:column;gap:12px;">
              <button class="btn-gold" onclick="goTo(1)">Comenzar</button>
              <button class="btn-outline" onclick="goTo(2)">Iniciar sesión</button>
              <p style="text-align:center;font-size:11px;color:var(--text-muted);margin-top:4px;">Al continuar aceptas nuestros <u>Términos y Condiciones</u></p>
            </div>
          </div>
        </div>
      </div>

      <!-- SCREEN 2: REGISTRO -->
      <div class="screen" id="s1">
        <div style="padding:24px 20px;flex:1;overflow-y:auto;">
          <div style="margin-bottom:28px;">
            <div style="font-family:'Sora',sans-serif;font-size:26px;font-weight:700;margin-bottom:6px;">Crear cuenta</div>
            <p style="font-size:14px;color:var(--text-secondary);">Ingresa tus datos para registrarte</p>
          </div>
          <div style="display:flex;gap:10px;margin-bottom:20px;">
            <button style="flex:1;padding:12px;border-radius:var(--radius-sm);background:var(--bg-card);border:1px solid var(--gold);color:var(--gold);font-weight:700;font-size:13px;font-family:'Inter',sans-serif;cursor:pointer;">Cliente</button>
            <button style="flex:1;padding:12px;border-radius:var(--radius-sm);background:var(--bg-card);border:1px solid var(--border);color:var(--text-muted);font-size:13px;font-family:'Inter',sans-serif;cursor:pointer;">Proveedor</button>
          </div>
          <div style="display:flex;flex-direction:column;gap:14px;">
            <div class="input-group">
              <span class="input-label">Nombre completo</span>
              <input class="input-field" type="text" placeholder="Carlos Mendoza" value="">
            </div>
            <div class="input-group">
              <span class="input-label">Correo electrónico</span>
              <input class="input-field" type="email" placeholder="correo@email.com">
            </div>
            <div class="input-group">
              <span class="input-label">Teléfono</span>
              <input class="input-field" type="tel" placeholder="+52 55 1234 5678">
            </div>
            <div class="input-group">
              <span class="input-label">Contraseña</span>
              <input class="input-field" type="password" placeholder="••••••••">
            </div>
            <div class="input-group">
              <span class="input-label">Confirmar contraseña</span>
              <input class="input-field" type="password" placeholder="••••••••">
            </div>
            <div style="display:flex;align-items:flex-start;gap:10px;margin-top:4px;">
              <div style="width:18px;height:18px;border-radius:4px;background:var(--gold);flex-shrink:0;margin-top:1px;display:flex;align-items:center;justify-content:center;font-size:11px;color:#000;">✓</div>
              <p style="font-size:12px;color:var(--text-muted);line-height:1.6;">Acepto los <u style="color:var(--gold);">Términos de Uso</u> y la <u style="color:var(--gold);">Política de Privacidad</u></p>
            </div>
            <button class="btn-gold" style="margin-top:8px;" onclick="goTo(3)">Crear cuenta</button>
            <div class="divider"></div>
            <p style="text-align:center;font-size:13px;color:var(--text-secondary);">¿Ya tienes cuenta? <span style="color:var(--gold);font-weight:600;cursor:pointer;" onclick="goTo(2)">Inicia sesión</span></p>
          </div>
        </div>
      </div>

      <!-- SCREEN 3: LOGIN -->
      <div class="screen" id="s2">
        <div style="padding:40px 20px 24px;flex:1;display:flex;flex-direction:column;">
          <div style="text-align:center;margin-bottom:36px;">
            <div style="font-size:40px;margin-bottom:12px;">🎵</div>
            <div style="font-family:'Sora',sans-serif;font-size:28px;font-weight:700;color:var(--gold);">Bienvenido</div>
            <p style="font-size:14px;color:var(--text-secondary);margin-top:6px;">Ingresa a tu cuenta</p>
          </div>
          <div style="display:flex;flex-direction:column;gap:14px;flex:1;">
            <div class="input-group">
              <span class="input-label">Correo electrónico</span>
              <input class="input-field" type="email" placeholder="correo@email.com">
            </div>
            <div class="input-group">
              <span class="input-label">Contraseña</span>
              <input class="input-field" type="password" placeholder="••••••••">
            </div>
            <div style="text-align:right;">
              <span style="font-size:12px;color:var(--gold);cursor:pointer;">¿Olvidaste tu contraseña?</span>
            </div>
            <button class="btn-gold" style="margin-top:8px;" onclick="goTo(3)">Iniciar sesión</button>
            <div style="display:flex;align-items:center;gap:10px;margin:4px 0;">
              <div class="divider" style="flex:1;margin:0;"></div>
              <span style="font-size:12px;color:var(--text-muted);">o continúa con</span>
              <div class="divider" style="flex:1;margin:0;"></div>
            </div>
            <div style="display:flex;gap:10px;">
              <button style="flex:1;padding:13px;border-radius:var(--radius-sm);background:var(--bg-card);border:1px solid var(--border);color:var(--text-primary);font-size:13px;font-family:'Inter',sans-serif;cursor:pointer;">🇬 Google</button>
              <button style="flex:1;padding:13px;border-radius:var(--radius-sm);background:var(--bg-card);border:1px solid var(--border);color:var(--text-primary);font-size:13px;font-family:'Inter',sans-serif;cursor:pointer;">📱 Teléfono</button>
            </div>
          </div>
          <p style="text-align:center;font-size:13px;color:var(--text-secondary);margin-top:20px;">¿No tienes cuenta? <span style="color:var(--gold);font-weight:600;cursor:pointer;" onclick="goTo(1)">Regístrate</span></p>
        </div>
      </div>

      <!-- SCREEN 4: HOME -->
      <div class="screen" id="s3">
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:16px 20px 0;">
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
              <div>
                <p style="font-size:12px;color:var(--text-muted);">Buenos días 👋</p>
                <div style="font-family:'Sora',sans-serif;font-size:18px;font-weight:700;">Carlos</div>
              </div>
              <div style="display:flex;gap:10px;align-items:center;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--bg-card);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:16px;">🔔</div>
                <div style="width:36px;height:36px;border-radius:50%;background:var(--gold);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#000;">CM</div>
              </div>
            </div>
            <div style="background:linear-gradient(135deg,#1E1200,#2A1A00);border-radius:var(--radius);padding:20px;margin-bottom:20px;border:1px solid #3A2800;">
              <p style="font-size:13px;color:var(--gold);font-weight:600;margin-bottom:4px;">¿Qué música necesitas?</p>
              <p style="font-size:12px;color:var(--text-secondary);margin-bottom:14px;">Selecciona el tipo para tu evento</p>
              <div class="search-bar">
                <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                <span>Buscar música o proveedor...</span>
              </div>
            </div>
            <div class="categories-grid" style="margin-bottom:20px;">
              <div class="cat-chip active" onclick="goTo(4)"><span class="cat-emoji">🎻</span><span class="cat-name">Mariachi</span></div>
              <div class="cat-chip" onclick="goTo(4)"><span class="cat-emoji">🎸</span><span class="cat-name">Banda</span></div>
              <div class="cat-chip" onclick="goTo(4)"><span class="cat-emoji">🎷</span><span class="cat-name">Norteño</span></div>
              <div class="cat-chip" onclick="goTo(4)"><span class="cat-emoji">🎹</span><span class="cat-name">Versátil</span></div>
              <div class="cat-chip" onclick="goTo(4)"><span class="cat-emoji">🎧</span><span class="cat-name">DJ</span></div>
              <div class="cat-chip" onclick="goTo(4)"><span class="cat-emoji">🎤</span><span class="cat-name">Otros</span></div>
            </div>
            <div class="section-hdr">
              <span class="section-title">Proveedores Destacados</span>
              <span class="section-link" onclick="goTo(4)">Ver todos →</span>
            </div>
            <div style="display:flex;gap:10px;overflow-x:auto;padding-bottom:12px;margin-bottom:16px;">
              <div class="featured-card" style="background:linear-gradient(135deg,#2A1500,#1A0E00);">
                <div style="font-size:50px;position:absolute;opacity:0.3;top:10px;left:50%;transform:translateX(-50%);">🎻</div>
                <div class="featured-overlay"></div>
                <div class="featured-info">
                  <div style="font-size:12px;font-weight:700;">Mariachi Los Reyes</div>
                  <div style="font-size:10px;color:var(--gold);">⭐ 4.8 · $5,000</div>
                </div>
              </div>
              <div class="featured-card" style="background:linear-gradient(135deg,#001A2A,#000E1A);">
                <div style="font-size:50px;position:absolute;opacity:0.3;top:10px;left:50%;transform:translateX(-50%);">🎸</div>
                <div class="featured-overlay"></div>
                <div class="featured-info">
                  <div style="font-size:12px;font-weight:700;">Banda La Fregona</div>
                  <div style="font-size:10px;color:var(--gold);">⭐ 4.7 · $18,000</div>
                </div>
              </div>
              <div class="featured-card" style="background:linear-gradient(135deg,#1A001A,#0E000E);">
                <div style="font-size:50px;position:absolute;opacity:0.3;top:10px;left:50%;transform:translateX(-50%);">🎧</div>
                <div class="featured-overlay"></div>
                <div class="featured-info">
                  <div style="font-size:12px;font-weight:700;">DJ Alex</div>
                  <div style="font-size:10px;color:var(--gold);">⭐ 4.8 · $3,500</div>
                </div>
              </div>
            </div>
            <div class="section-hdr">
              <span class="section-title">Más Populares</span>
              <span class="section-link">Ver todos →</span>
            </div>
            <div style="display:flex;flex-direction:column;gap:10px;padding-bottom:16px;">
              <div class="provider-card" onclick="goTo(5)" style="cursor:pointer;">
                <div class="provider-img" style="background:linear-gradient(135deg,#2A1500,#1A0800);">🎻</div>
                <div class="provider-info">
                  <div class="provider-name">Mariachi Los Reyes</div>
                  <div class="provider-type">Mariachi · Guadalajara</div>
                  <div class="provider-rating">
                    <span class="star">★★★★★</span>
                    <span class="rating-num">4.8</span>
                    <span class="rating-count">(120)</span>
                  </div>
                </div>
                <div class="provider-price">
                  <div class="price-amount">$5,000</div>
                  <span class="price-from">Desde</span>
                </div>
              </div>
              <div class="provider-card">
                <div class="provider-img" style="background:linear-gradient(135deg,#001A10,#000E08);">🎷</div>
                <div class="provider-info">
                  <div class="provider-name">Norteño VIP</div>
                  <div class="provider-type">Norteño · CDMX</div>
                  <div class="provider-rating">
                    <span class="star">★★★★★</span>
                    <span class="rating-num">4.9</span>
                    <span class="rating-count">(76)</span>
                  </div>
                </div>
                <div class="provider-price">
                  <div class="price-amount">$12,000</div>
                  <span class="price-from">Desde</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item active">
            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <span>Inicio</span>
          </div>
          <div class="nav-item">
            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <span>Reservas</span>
          </div>
          <div class="nav-item">
            <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg>
            <span>Favoritos</span>
          </div>
          <div class="nav-item">
            <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
            <span>Mensajes</span>
          </div>
          <div class="nav-item" onclick="goTo(9)">
            <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <span>Perfil</span>
          </div>
        </div>
      </div>

      <!-- SCREEN 5: BÚSQUEDA -->
      <div class="screen" id="s4">
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:16px 20px 0;">
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;">
              <div onclick="goTo(3)" style="cursor:pointer;font-size:20px;color:var(--text-primary);">←</div>
              <div style="font-family:'Sora',sans-serif;font-size:18px;font-weight:700;flex:1;">Proveedores</div>
              <div style="font-size:18px;">⚙️</div>
            </div>
            <div class="search-bar" style="margin-bottom:14px;">
              <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
              <span>Buscar proveedores...</span>
            </div>
            <div style="display:flex;gap:8px;overflow-x:auto;padding-bottom:10px;margin-bottom:14px;">
              <div style="background:var(--gold);color:#000;padding:7px 14px;border-radius:20px;font-size:12px;font-weight:700;white-space:nowrap;">Todos</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">Mariachi</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">Banda</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">DJ</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">Norteño</div>
            </div>
            <p style="font-size:12px;color:var(--text-muted);margin-bottom:12px;">24 resultados encontrados</p>
            <div style="display:flex;flex-direction:column;gap:10px;padding-bottom:16px;">
              <div class="provider-card" onclick="goTo(5)" style="cursor:pointer;">
                <div class="provider-img" style="background:linear-gradient(135deg,#2A1500,#1A0800);">🎻</div>
                <div class="provider-info">
                  <div class="provider-name">Mariachi Los Reyes</div>
                  <div class="provider-type">Mariachi</div>
                  <div class="provider-rating"><span class="star">★★★★★</span><span class="rating-num">4.8</span><span class="rating-count">(120)</span></div>
                </div>
                <div class="provider-price"><div class="price-amount">$5,000</div><span class="price-from">Desde</span></div>
                <button class="heart-btn"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg></button>
              </div>
              <div class="provider-card">
                <div class="provider-img" style="background:linear-gradient(135deg,#001A2A,#000E1A);">🎸</div>
                <div class="provider-info">
                  <div class="provider-name">Banda La Fregona</div>
                  <div class="provider-type">Banda</div>
                  <div class="provider-rating"><span class="star">★★★★☆</span><span class="rating-num">4.7</span><span class="rating-count">(98)</span></div>
                </div>
                <div class="provider-price"><div class="price-amount">$18,000</div><span class="price-from">Desde</span></div>
                <button class="heart-btn"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg></button>
              </div>
              <div class="provider-card">
                <div class="provider-img" style="background:linear-gradient(135deg,#001A0A,#000E05);">🎷</div>
                <div class="provider-info">
                  <div class="provider-name">Norteño VIP</div>
                  <div class="provider-type">Norteño</div>
                  <div class="provider-rating"><span class="star">★★★★★</span><span class="rating-num">4.9</span><span class="rating-count">(76)</span></div>
                </div>
                <div class="provider-price"><div class="price-amount">$12,000</div><span class="price-from">Desde</span></div>
                <button class="heart-btn"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg></button>
              </div>
              <div class="provider-card">
                <div class="provider-img" style="background:linear-gradient(135deg,#1A001A,#0E000E);">🎹</div>
                <div class="provider-info">
                  <div class="provider-name">Grupo Versátil Elite</div>
                  <div class="provider-type">Grupo Versátil</div>
                  <div class="provider-rating"><span class="star">★★★★☆</span><span class="rating-num">4.6</span><span class="rating-count">(64)</span></div>
                </div>
                <div class="provider-price"><div class="price-amount">$15,000</div><span class="price-from">Desde</span></div>
                <button class="heart-btn"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg></button>
              </div>
              <div class="provider-card">
                <div class="provider-img" style="background:linear-gradient(135deg,#1A1500,#0E0A00);">🎧</div>
                <div class="provider-info">
                  <div class="provider-name">DJ Alex</div>
                  <div class="provider-type">DJ</div>
                  <div class="provider-rating"><span class="star">★★★★★</span><span class="rating-num">4.8</span><span class="rating-count">(110)</span></div>
                </div>
                <div class="provider-price"><div class="price-amount">$3,500</div><span class="price-from">Desde</span></div>
                <button class="heart-btn"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg></button>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item active"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><span>Inicio</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg><span>Favoritos</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg><span>Mensajes</span></div>
          <div class="nav-item" onclick="goTo(9)"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- SCREEN 6: DETALLE PROVEEDOR -->
      <div class="screen" id="s5">
        <div style="flex:1;overflow-y:auto;">
          <div style="height:220px;background:linear-gradient(135deg,#2A1500,#0C0C0C);position:relative;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <div style="font-size:80px;opacity:0.4;">🎻</div>
            <div style="position:absolute;top:16px;left:16px;cursor:pointer;" onclick="goTo(4)">
              <div style="width:36px;height:36px;border-radius:50%;background:rgba(0,0,0,0.5);display:flex;align-items:center;justify-content:center;font-size:16px;color:#fff;">←</div>
            </div>
            <button class="heart-btn" style="position:absolute;top:16px;right:16px;background:rgba(0,0,0,0.5);">
              <svg viewBox="0 0 24 24" style="stroke:#fff;"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg>
            </button>
          </div>
          <div class="gallery-row" style="margin:0 20px 16px;margin-top:8px;">
            <div class="gallery-img" style="background:linear-gradient(135deg,#2A1500,#1A0800);">🎻</div>
            <div class="gallery-img" style="background:linear-gradient(135deg,#1A1000,#0C0800);">🎤</div>
            <div class="gallery-img" style="background:linear-gradient(135deg,#1A0000,#0C0000);"><div class="gallery-more">+12</div></div>
          </div>
          <div style="padding:0 20px 20px;">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:6px;flex-wrap:wrap;">
              <div style="font-family:'Sora',sans-serif;font-size:22px;font-weight:700;">Mariachi Los Reyes</div>
              <span class="badge-verified">✓ Verificado</span>
            </div>
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:14px;">
              <span style="color:var(--gold);font-size:14px;">★ 4.8</span>
              <span style="font-size:13px;color:var(--text-muted);">120 reseñas</span>
              <span style="color:var(--text-muted);">·</span>
              <span style="font-size:13px;color:var(--text-muted);">Mariachi</span>
            </div>
            <div class="divider"></div>
            <p style="font-size:13px;color:var(--text-secondary);line-height:1.7;margin-bottom:16px;">Somos un mariachi profesional con más de 10 años de experiencia. Amenizamos todo tipo de eventos con la mejor calidad y presentación.</p>
            <div style="margin-bottom:16px;">
              <div style="font-size:14px;font-weight:700;margin-bottom:10px;">Servicios que ofrecemos</div>
              <div style="display:grid;grid-template-columns:1fr 1fr;gap:6px;">
                <span class="service-tag">Serenatas</span>
                <span class="service-tag">Misas</span>
                <span class="service-tag">Bodas</span>
                <span class="service-tag">Cumpleaños</span>
                <span class="service-tag">Eventos privados</span>
                <span class="service-tag">Graduaciones</span>
              </div>
            </div>
            <div class="divider"></div>
            <div style="display:flex;gap:12px;margin-bottom:16px;">
              <div style="flex:1;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:12px;text-align:center;">
                <div style="font-size:20px;font-weight:700;color:var(--text-primary);">10+</div>
                <div style="font-size:10px;color:var(--text-muted);">Años exp.</div>
              </div>
              <div style="flex:1;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:12px;text-align:center;">
                <div style="font-size:20px;font-weight:700;color:var(--text-primary);">500+</div>
                <div style="font-size:10px;color:var(--text-muted);">Eventos</div>
              </div>
              <div style="flex:1;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:12px;text-align:center;">
                <div style="font-size:20px;font-weight:700;color:var(--text-primary);">GDL</div>
                <div style="font-size:10px;color:var(--text-muted);">Ciudad</div>
              </div>
            </div>
          </div>
        </div>
        <div style="padding:14px 20px;border-top:1px solid var(--border);background:var(--bg-dark);display:flex;align-items:center;justify-content:space-between;flex-shrink:0;">
          <div>
            <div style="font-size:20px;font-weight:700;">$5,000</div>
            <div style="font-size:11px;color:var(--text-muted);">Precio desde</div>
          </div>
          <button class="btn-sm" onclick="goTo(6)" style="padding:13px 28px;">Reservar</button>
        </div>
      </div>

      <!-- SCREEN 7: RESERVA -->
      <div class="screen" id="s6">
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:16px 20px;">
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
              <div onclick="goTo(5)" style="cursor:pointer;font-size:20px;">←</div>
              <div style="font-family:'Sora',sans-serif;font-size:18px;font-weight:700;flex:1;">Reservar</div>
            </div>
            <div class="steps" style="margin-bottom:24px;">
              <div class="step current">1</div>
              <div class="step-line"></div>
              <div class="step pending">2</div>
              <div class="step-line"></div>
              <div class="step pending">3</div>
            </div>
            <div class="provider-card" style="margin-bottom:20px;">
              <div class="provider-img" style="background:linear-gradient(135deg,#2A1500,#1A0800);">🎻</div>
              <div class="provider-info">
                <div class="provider-name">Mariachi Los Reyes</div>
                <div class="provider-type">Mariachi</div>
                <div class="provider-rating"><span class="star">★★★★★</span><span class="rating-num">4.8</span><span class="rating-count">(120)</span></div>
              </div>
              <div class="provider-price"><div class="price-amount">$5,000</div><span class="price-from">Desde</span></div>
            </div>
            <div style="font-size:15px;font-weight:700;margin-bottom:14px;">Detalles del evento</div>
            <div style="display:flex;flex-direction:column;gap:12px;">
              <div class="form-field">
                <div><div class="field-label">Fecha del evento</div><div class="field-value">24 de mayo de 2025</div></div>
                <span style="font-size:18px;">📅</span>
              </div>
              <div class="form-field">
                <div><div class="field-label">Hora</div><div class="field-value">07:00 PM</div></div>
                <span style="font-size:18px;">🕖</span>
              </div>
              <div class="form-field">
                <div><div class="field-label">Ubicación</div><div class="field-value">Guadalajara, Jalisco</div></div>
                <span style="font-size:18px;">📍</span>
              </div>
              <div class="input-group">
                <span class="input-label">Tipo de evento</span>
                <select class="select-field">
                  <option>Boda</option>
                  <option>Cumpleaños</option>
                  <option>Evento corporativo</option>
                  <option>Serenata</option>
                  <option>Otro</option>
                </select>
              </div>
              <div class="input-group">
                <span class="input-label">Duración aproximada</span>
                <select class="select-field">
                  <option>2 horas</option>
                  <option>3 horas</option>
                  <option>4 horas</option>
                  <option>5 horas o más</option>
                </select>
              </div>
              <div class="input-group">
                <span class="input-label">Notas adicionales (opcional)</span>
                <textarea class="input-field" rows="3" placeholder="Escribe cualquier detalle importante..." style="resize:none;"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div style="padding:14px 20px;border-top:1px solid var(--border);flex-shrink:0;">
          <button class="btn-gold" onclick="goTo(7)">Continuar →</button>
        </div>
      </div>

      <!-- SCREEN 8: PAGO -->
      <div class="screen" id="s7">
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:16px 20px;">
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
              <div onclick="goTo(6)" style="cursor:pointer;font-size:20px;">←</div>
              <div style="font-family:'Sora',sans-serif;font-size:18px;font-weight:700;flex:1;">Pago</div>
            </div>
            <div class="steps" style="margin-bottom:24px;">
              <div class="step done">✓</div>
              <div class="step-line done"></div>
              <div class="step current">2</div>
              <div class="step-line"></div>
              <div class="step pending">3</div>
            </div>
            <div style="font-size:14px;font-weight:700;margin-bottom:10px;">Resumen del pedido</div>
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;margin-bottom:20px;">
              <div class="summary-row"><span class="summary-label">Mariachi Los Reyes · 2h</span><span class="summary-value">$5,000</span></div>
              <div class="summary-row"><span class="summary-label">Cargo por servicio</span><span class="summary-value">$350</span></div>
              <div class="summary-row"><span class="summary-label">IVA (16%)</span><span class="summary-value">$856</span></div>
              <div class="summary-row summary-total"><span class="summary-label">Total</span><span class="summary-value">$6,206</span></div>
            </div>
            <div style="font-size:14px;font-weight:700;margin-bottom:10px;">Método de pago</div>
            <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:16px;">
              <div class="pay-option selected">
                <div class="pay-icon">💳</div>
                <div>
                  <div style="font-size:13px;font-weight:600;">Tarjeta de crédito/débito</div>
                  <div style="font-size:11px;color:var(--text-muted);">Visa, Mastercard, Amex</div>
                </div>
                <div class="pay-radio selected"></div>
              </div>
              <div class="pay-option">
                <div class="pay-icon">🏦</div>
                <div>
                  <div style="font-size:13px;font-weight:600;">Transferencia bancaria</div>
                  <div style="font-size:11px;color:var(--text-muted);">SPEI instantáneo</div>
                </div>
                <div class="pay-radio"></div>
              </div>
              <div class="pay-option">
                <div class="pay-icon">📱</div>
                <div>
                  <div style="font-size:13px;font-weight:600;">PayPal</div>
                  <div style="font-size:11px;color:var(--text-muted);">Pago seguro online</div>
                </div>
                <div class="pay-radio"></div>
              </div>
            </div>
            <div style="font-size:14px;font-weight:700;margin-bottom:10px;">Datos de tarjeta</div>
            <div class="payment-card" style="margin-bottom:14px;">
              <div class="card-chip"></div>
              <div class="card-number">•••• •••• •••• 4291</div>
              <div class="card-bottom">
                <div><div class="card-holder">Titular</div><div style="font-size:14px;font-weight:600;">CARLOS MENDOZA</div></div>
                <div><div class="card-expiry">Vence</div><div style="font-size:14px;font-weight:600;">05/27</div></div>
                <div class="card-brand">💳</div>
              </div>
            </div>
            <div style="display:flex;flex-direction:column;gap:10px;">
              <div class="input-group">
                <span class="input-label">Número de tarjeta</span>
                <input class="input-field" placeholder="1234 5678 9012 3456">
              </div>
              <div style="display:flex;gap:10px;">
                <div class="input-group" style="flex:1;">
                  <span class="input-label">Vencimiento</span>
                  <input class="input-field" placeholder="MM/AA">
                </div>
                <div class="input-group" style="flex:1;">
                  <span class="input-label">CVV</span>
                  <input class="input-field" placeholder="•••">
                </div>
              </div>
            </div>
            <div style="display:flex;align-items:center;gap:8px;margin:14px 0;background:rgba(200,168,75,0.06);border:1px solid rgba(200,168,75,0.15);border-radius:var(--radius-sm);padding:10px 12px;">
              <span style="font-size:14px;">🔒</span>
              <span style="font-size:11px;color:var(--text-muted);">Tu pago está protegido con encriptación SSL de 256 bits</span>
            </div>
          </div>
        </div>
        <div style="padding:14px 20px;border-top:1px solid var(--border);flex-shrink:0;">
          <button class="btn-gold" onclick="goTo(8)">Pagar $6,206</button>
        </div>
      </div>

      <!-- SCREEN 9: CONFIRMACIÓN -->
      <div class="screen" id="s8">
        <div style="flex:1;overflow-y:auto;display:flex;flex-direction:column;">
          <div style="padding:16px 20px 0;">
            <div class="steps" style="margin-bottom:0;">
              <div class="step done">✓</div>
              <div class="step-line done"></div>
              <div class="step done">✓</div>
              <div class="step-line done"></div>
              <div class="step done" style="background:#4CAF50;border:none;">✓</div>
            </div>
          </div>
          <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:32px 24px;text-align:center;">
            <div class="success-icon">✓</div>
            <div style="font-family:'Sora',sans-serif;font-size:24px;font-weight:700;margin-bottom:8px;">¡Reserva Confirmada!</div>
            <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin-bottom:24px;">Tu pago fue procesado exitosamente. Te hemos enviado un correo de confirmación.</p>
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;width:100%;margin-bottom:20px;">
              <div style="font-size:11px;color:var(--text-muted);margin-bottom:4px;">Número de reserva</div>
              <div style="font-family:'Sora',sans-serif;font-size:22px;font-weight:700;color:var(--gold);letter-spacing:2px;">#MUS-48291</div>
            </div>
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;width:100%;text-align:left;">
              <div style="font-size:14px;font-weight:700;margin-bottom:12px;">Detalles de la reserva</div>
              <div style="display:flex;flex-direction:column;gap:10px;">
                <div style="display:flex;gap:10px;align-items:center;"><span style="font-size:14px;">🎻</span><div><div style="font-size:12px;color:var(--text-muted);">Proveedor</div><div style="font-size:13px;font-weight:600;">Mariachi Los Reyes</div></div></div>
                <div style="display:flex;gap:10px;align-items:center;"><span style="font-size:14px;">📅</span><div><div style="font-size:12px;color:var(--text-muted);">Fecha</div><div style="font-size:13px;font-weight:600;">24 de mayo de 2025 · 7:00 PM</div></div></div>
                <div style="display:flex;gap:10px;align-items:center;"><span style="font-size:14px;">📍</span><div><div style="font-size:12px;color:var(--text-muted);">Lugar</div><div style="font-size:13px;font-weight:600;">Guadalajara, Jalisco</div></div></div>
                <div style="display:flex;gap:10px;align-items:center;"><span style="font-size:14px;">💰</span><div><div style="font-size:12px;color:var(--text-muted);">Total pagado</div><div style="font-size:13px;font-weight:600;color:var(--gold);">$6,206 MXN</div></div></div>
              </div>
            </div>
          </div>
          <div style="padding:0 20px 20px;display:flex;flex-direction:column;gap:10px;">
            <button class="btn-gold" onclick="goTo(3)">Ir al Inicio</button>
            <button class="btn-outline">Descargar comprobante</button>
          </div>
        </div>
      </div>

      <!-- SCREEN 10: PERFIL -->
      <div class="screen" id="s9">
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:16px 20px;">
            <div style="font-family:'Sora',sans-serif;font-size:18px;font-weight:700;margin-bottom:20px;">Mi Perfil</div>
            <div style="display:flex;align-items:center;gap:14px;margin-bottom:24px;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;">
              <div class="avatar">👤</div>
              <div style="flex:1;">
                <div style="font-size:17px;font-weight:700;">Carlos Mendoza</div>
                <div style="font-size:13px;color:var(--text-muted);">carlos@email.com</div>
                <div style="display:inline-flex;align-items:center;gap:4px;background:rgba(76,175,80,0.1);border:1px solid rgba(76,175,80,0.3);color:#4CAF50;font-size:10px;font-weight:600;padding:3px 8px;border-radius:20px;margin-top:6px;">✓ Cuenta verificada</div>
              </div>
              <div style="font-size:14px;color:var(--gold);cursor:pointer;font-weight:600;">Editar</div>
            </div>
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;margin-bottom:10px;">Mis reservas</div>
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;margin-bottom:20px;">
              <div style="display:flex;align-items:center;justify-content:space-between;">
                <div style="display:flex;align-items:center;gap:10px;">
                  <div style="width:40px;height:40px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#2A1500,#1A0800);display:flex;align-items:center;justify-content:center;font-size:18px;">🎻</div>
                  <div>
                    <div style="font-size:13px;font-weight:600;">Mariachi Los Reyes</div>
                    <div style="font-size:11px;color:var(--text-muted);">24 mayo · 7:00 PM</div>
                  </div>
                </div>
                <div style="background:rgba(200,168,75,0.1);border:1px solid rgba(200,168,75,0.3);color:var(--gold);font-size:10px;font-weight:700;padding:4px 10px;border-radius:20px;">Confirmada</div>
              </div>
            </div>
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;margin-bottom:10px;">Cuenta</div>
            <div style="display:flex;flex-direction:column;gap:8px;margin-bottom:20px;">
              <div class="menu-item">
                <div class="menu-item-left">
                  <div class="menu-icon" style="background:#1A1200;">👤</div>
                  <div><div style="font-size:13px;font-weight:600;">Datos personales</div><div style="font-size:11px;color:var(--text-muted);">Editar tu información</div></div>
                </div>
                <span class="menu-chevron">›</span>
              </div>
              <div class="menu-item">
                <div class="menu-item-left">
                  <div class="menu-icon" style="background:#001A0E;">💳</div>
                  <div><div style="font-size:13px;font-weight:600;">Métodos de pago</div><div style="font-size:11px;color:var(--text-muted);">Tarjetas guardadas</div></div>
                </div>
                <span class="menu-chevron">›</span>
              </div>
              <div class="menu-item">
                <div class="menu-item-left">
                  <div class="menu-icon" style="background:#1A0000;">🔔</div>
                  <div><div style="font-size:13px;font-weight:600;">Notificaciones</div><div style="font-size:11px;color:var(--text-muted);">Configurar alertas</div></div>
                </div>
                <span class="menu-chevron">›</span>
              </div>
              <div class="menu-item">
                <div class="menu-item-left">
                  <div class="menu-icon" style="background:#0D0D1A;">🔒</div>
                  <div><div style="font-size:13px;font-weight:600;">Seguridad</div><div style="font-size:11px;color:var(--text-muted);">Contraseña y 2FA</div></div>
                </div>
                <span class="menu-chevron">›</span>
              </div>
            </div>
            <div style="font-size:13px;font-weight:700;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;margin-bottom:10px;">Soporte</div>
            <div style="display:flex;flex-direction:column;gap:8px;margin-bottom:24px;">
              <div class="menu-item">
                <div class="menu-item-left">
                  <div class="menu-icon" style="background:#001A1A;">❓</div>
                  <div><div style="font-size:13px;font-weight:600;">Centro de ayuda</div></div>
                </div>
                <span class="menu-chevron">›</span>
              </div>
              <div class="menu-item">
                <div class="menu-item-left">
                  <div class="menu-icon" style="background:#1A001A;">📜</div>
                  <div><div style="font-size:13px;font-weight:600;">Términos y Condiciones</div></div>
                </div>
                <span class="menu-chevron">›</span>
              </div>
            </div>
            <button class="btn-outline" style="color:#E53935;border-color:#E53935;margin-bottom:16px;" onclick="goTo(0)">🚪 Cerrar sesión</button>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item" onclick="goTo(3)"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><span>Inicio</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg><span>Favoritos</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg><span>Mensajes</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

    </div><!-- /phone-screen -->
  </div><!-- /phone-frame -->

  <!-- INFO PANEL -->
  <div class="info-panel">
    <div class="screen-label" id="infoLabel">Pantalla 1 de 10</div>
    <div class="screen-title" id="infoTitle">Splash / Bienvenida</div>
    <div class="screen-desc" id="infoDesc">Primera impresión de la app. Muestra el branding de Musicast con el tagline principal y las opciones de acceso o registro.</div>
    <ul class="features-list" id="infoFeatures">
      <li>Imagen de fondo con ambiente musical</li>
      <li>Logo y tagline principal</li>
      <li>Botón "Comenzar" (flujo registro)</li>
      <li>Botón "Iniciar sesión" (flujo login)</li>
      <li>Indicador de onboarding</li>
    </ul>
    <div class="nav-arrows">
      <button class="arrow-btn" id="prevBtn" onclick="navigate(-1)" disabled>←</button>
      <button class="arrow-btn" id="nextBtn" onclick="navigate(1)">→</button>
    </div>
    <div class="screen-counter"><strong id="counterCurrent">1</strong> / <strong>10</strong> pantallas</div>
  </div>

</div>

<script>
const screens = [
  { label:'Pantalla 1 de 10', title:'Splash / Bienvenida', desc:'Primera impresión de la app. Muestra el branding de Musicast con el tagline principal y las opciones de acceso o registro.', features:['Imagen de fondo con ambiente musical','Logo y tagline principal','Botón "Comenzar" (flujo registro)','Botón "Iniciar sesión" (flujo login)','Indicador de onboarding'] },
  { label:'Pantalla 2 de 10', title:'Registro', desc:'Formulario de alta de usuario. Permite elegir entre registrarse como cliente o proveedor con validación en tiempo real.', features:['Selector de rol (Cliente / Proveedor)','Campos: nombre, email, teléfono, contraseña','Acepta términos y condiciones','Redirección al home al crear cuenta','Enlace a login si ya tiene cuenta'] },
  { label:'Pantalla 3 de 10', title:'Login', desc:'Acceso para usuarios existentes con soporte de autenticación social y recuperación de contraseña.', features:['Email + contraseña','Recuperar contraseña','Autenticación con Google','Autenticación por teléfono','Enlace a registro'] },
  { label:'Pantalla 4 de 10', title:'Home / Exploración', desc:'Pantalla principal del cliente. Muestra categorías de música, proveedores destacados y acceso rápido a búsqueda.', features:['Saludo personalizado + avatar','Categorías de música (6 géneros)','Buscador rápido','Proveedores destacados (scroll horizontal)','Lista de más populares','Navegación inferior (5 tabs)'] },
  { label:'Pantalla 5 de 10', title:'Búsqueda de Proveedores', desc:'Listado filtrable de todos los proveedores disponibles con su información clave y precio base.', features:['Buscador con texto libre','Filtros rápidos por género','Contador de resultados','Cards con imagen, rating y precio','Botón de favoritos','Acceso al detalle del proveedor'] },
  { label:'Pantalla 6 de 10', title:'Detalle del Proveedor', desc:'Página completa del músico/grupo con toda la información para que el cliente tome decisión de reserva.', features:['Galería de fotos con contador (+12)','Badge de verificación','Rating y número de reseñas','Descripción del servicio','Lista de servicios disponibles','Estadísticas (años exp., eventos)','Precio y botón Reservar'] },
  { label:'Pantalla 7 de 10', title:'Reserva / Checkout', desc:'Formulario para configurar los detalles del evento antes de proceder al pago. Incluye indicador de progreso.', features:['Indicador de pasos (1-2-3)','Card del proveedor seleccionado','Selector de fecha y hora','Campo de ubicación del evento','Tipo de evento (dropdown)','Duración aproximada','Notas adicionales'] },
  { label:'Pantalla 8 de 10', title:'Pasarela de Pago', desc:'Pantalla de checkout con resumen del pedido, selección de método de pago e ingreso de datos bancarios.', features:['Resumen de costos (servicio + IVA)','3 métodos: tarjeta / SPEI / PayPal','Visualización de tarjeta guardada','Formulario de nueva tarjeta','Badge de seguridad SSL','Botón de pago con monto total'] },
  { label:'Pantalla 9 de 10', title:'Confirmación de Reserva', desc:'Pantalla de éxito con número de reserva, resumen completo y opciones para continuar o descargar comprobante.', features:['Ícono de éxito animado','Indicador de pasos completados','Número de reserva (#MUS-XXXXX)','Resumen: proveedor, fecha, lugar, total','Botón: ir al inicio','Botón: descargar comprobante'] },
  { label:'Pantalla 10 de 10', title:'Perfil del Usuario', desc:'Sección de cuenta del cliente con datos personales, historial de reservas, pagos, seguridad y soporte.', features:['Avatar + datos del usuario','Estado de cuenta verificada','Reserva activa con estado','Menú: datos, pagos, notificaciones, seguridad','Soporte: ayuda y términos','Botón cerrar sesión'] }
];

let current = 0;

function goTo(index) {
  document.querySelectorAll('.screen').forEach(s => s.classList.remove('active'));
  document.getElementById('s' + index).classList.add('active');
  document.querySelectorAll('.nav-btn').forEach((b, i) => b.classList.toggle('active', i === index));
  document.getElementById('phoneScreen').scrollTop = 0;
  current = index;
  updatePanel();
}

function navigate(dir) {
  const next = current + dir;
  if (next >= 0 && next < 10) goTo(next);
}

function updatePanel() {
  const s = screens[current];
  document.getElementById('infoLabel').textContent = s.label;
  document.getElementById('infoTitle').textContent = s.title;
  document.getElementById('infoDesc').textContent = s.desc;
  const fl = document.getElementById('infoFeatures');
  fl.innerHTML = s.features.map(f => `<li>${f}</li>`).join('');
  document.getElementById('counterCurrent').textContent = current + 1;
  document.getElementById('prevBtn').disabled = current === 0;
  document.getElementById('nextBtn').disabled = current === 9;
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
