<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musicast — Fase 2 Mockup</title>
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
    --info: #2196F3;
    --phone-w: 375px;
    --phone-h: 812px;
    --radius: 12px;
    --radius-sm: 8px;
  }

  body { background: #0A0A0A; font-family: 'Inter', sans-serif; color: var(--text-primary); min-height: 100vh; }

  .site-header {
    background: #111; border-bottom: 1px solid var(--border);
    padding: 16px 32px; display: flex; align-items: center; justify-content: space-between;
    position: sticky; top: 0; z-index: 100;
  }
  .site-logo { font-family: 'Sora', sans-serif; font-size: 20px; font-weight: 700; color: var(--gold); letter-spacing: -0.5px; }
  .site-logo span { color: var(--text-primary); }
  .phase-badge { background: #1A1A2E; color: #7B8CDE; font-size: 11px; font-weight: 600; padding: 4px 12px; border-radius: 20px; letter-spacing: 0.5px; text-transform: uppercase; border: 1px solid #2E3060; }

  .screens-nav { display: flex; gap: 6px; padding: 20px 32px 0; overflow-x: auto; scrollbar-width: none; flex-wrap: wrap; }
  .screens-nav::-webkit-scrollbar { display: none; }
  .nav-btn { background: var(--bg-card); border: 1px solid var(--border); color: var(--text-secondary); padding: 7px 14px; border-radius: 20px; font-size: 12px; font-weight: 500; cursor: pointer; white-space: nowrap; transition: all .2s; font-family: 'Inter', sans-serif; }
  .nav-btn:hover { border-color: var(--gold); color: var(--gold); }
  .nav-btn.active { background: var(--gold); border-color: var(--gold); color: #0C0C0C; font-weight: 600; }

  .main-wrap { padding: 32px; display: flex; gap: 40px; align-items: flex-start; justify-content: center; }

  .phone-frame { width: var(--phone-w); min-width: var(--phone-w); background: #111; border-radius: 48px; border: 2px solid #2A2A2A; overflow: hidden; box-shadow: 0 40px 80px rgba(0,0,0,0.7), 0 0 0 1px #333 inset; position: sticky; top: 100px; }
  .phone-notch { height: 44px; background: #0C0C0C; display: flex; align-items: center; justify-content: space-between; padding: 0 24px; font-size: 12px; font-weight: 600; color: var(--text-primary); position: relative; }
  .notch-island { width: 120px; height: 22px; background: #000; border-radius: 12px; position: absolute; left: 50%; transform: translateX(-50%); top: 11px; }
  .phone-screen { height: var(--phone-h); background: var(--bg-dark); overflow-y: auto; scrollbar-width: none; }
  .phone-screen::-webkit-scrollbar { display: none; }

  .info-panel { max-width: 300px; position: sticky; top: 100px; }
  .screen-label { font-family: 'Sora', sans-serif; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; color: var(--gold); margin-bottom: 8px; }
  .screen-title { font-family: 'Sora', sans-serif; font-size: 26px; font-weight: 700; color: var(--text-primary); line-height: 1.2; margin-bottom: 12px; }
  .screen-desc { font-size: 14px; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px; }
  .features-list { list-style: none; display: flex; flex-direction: column; gap: 8px; }
  .features-list li { font-size: 13px; color: var(--text-secondary); display: flex; align-items: center; gap: 8px; }
  .features-list li::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--gold); flex-shrink: 0; }
  .nav-arrows { display: flex; gap: 8px; margin-top: 24px; }
  .arrow-btn { background: var(--bg-card); border: 1px solid var(--border); color: var(--text-secondary); width: 38px; height: 38px; border-radius: 50%; cursor: pointer; font-size: 16px; display: flex; align-items: center; justify-content: center; transition: all .2s; font-family: 'Inter', sans-serif; }
  .arrow-btn:hover { background: var(--gold); border-color: var(--gold); color: #000; }
  .arrow-btn:disabled { opacity: 0.3; cursor: not-allowed; }
  .screen-counter { font-size: 12px; color: var(--text-muted); margin-top: 12px; }
  .screen-counter strong { color: var(--text-primary); }

  .screen { display: none; flex-direction: column; min-height: 100%; }
  .screen.active { display: flex; }

  /* BOTTOM NAV */
  .bottom-nav { height: 80px; background: #111; border-top: 1px solid var(--border); display: flex; align-items: center; justify-content: space-around; padding: 0 10px 16px; flex-shrink: 0; }
  .nav-item { display: flex; flex-direction: column; align-items: center; gap: 3px; cursor: pointer; padding: 6px 14px; }
  .nav-item svg { width: 22px; height: 22px; stroke: var(--text-muted); fill: none; stroke-width: 1.5; }
  .nav-item span { font-size: 9px; color: var(--text-muted); font-weight: 500; }
  .nav-item.active svg { stroke: var(--gold); }
  .nav-item.active span { color: var(--gold); }

  /* BUTTONS */
  .btn-gold { width: 100%; background: var(--gold); color: #0C0C0C; border: none; padding: 16px; border-radius: var(--radius); font-size: 15px; font-weight: 700; cursor: pointer; font-family: 'Inter', sans-serif; }
  .btn-outline { width: 100%; background: transparent; color: var(--text-primary); border: 1px solid var(--border); padding: 16px; border-radius: var(--radius); font-size: 15px; font-weight: 500; cursor: pointer; font-family: 'Inter', sans-serif; }

  /* INPUT */
  .input-field { width: 100%; background: var(--bg-input); border: 1px solid var(--border); color: var(--text-primary); padding: 14px 16px; border-radius: var(--radius-sm); font-size: 14px; font-family: 'Inter', sans-serif; outline: none; }
  .input-field::placeholder { color: var(--text-muted); }

  /* DIVIDER */
  .divider { height: 1px; background: var(--border); }

  /* HEADER BAR */
  .screen-header { display: flex; align-items: center; gap: 12px; padding: 16px 20px; flex-shrink: 0; }
  .back-btn { font-size: 20px; cursor: pointer; color: var(--text-primary); }
  .header-title { font-family: 'Sora', sans-serif; font-size: 18px; font-weight: 700; flex: 1; }
  .header-action { font-size: 18px; cursor: pointer; }

  /* ======================== */
  /* CHAT */
  /* ======================== */
  .chat-list-item { display: flex; align-items: center; gap: 12px; padding: 14px 20px; border-bottom: 1px solid var(--border); cursor: pointer; }
  .chat-avatar { width: 48px; height: 48px; border-radius: 50%; background: var(--bg-card2); display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0; position: relative; }
  .online-dot { width: 12px; height: 12px; background: var(--success); border-radius: 50%; border: 2px solid var(--bg-dark); position: absolute; bottom: 1px; right: 1px; }
  .chat-info { flex: 1; min-width: 0; }
  .chat-name { font-size: 14px; font-weight: 600; color: var(--text-primary); }
  .chat-preview { font-size: 12px; color: var(--text-muted); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; margin-top: 2px; }
  .chat-meta { display: flex; flex-direction: column; align-items: flex-end; gap: 5px; }
  .chat-time { font-size: 11px; color: var(--text-muted); }
  .chat-badge { background: var(--gold); color: #000; font-size: 10px; font-weight: 700; width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }

  /* CHAT ROOM */
  .chat-room-header { display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-bottom: 1px solid var(--border); background: #111; flex-shrink: 0; }
  .chat-room-avatar { width: 38px; height: 38px; border-radius: 50%; background: var(--bg-card2); display: flex; align-items: center; justify-content: center; font-size: 18px; }
  .msg-row { display: flex; margin: 6px 16px; gap: 8px; }
  .msg-row.mine { flex-direction: row-reverse; }
  .msg-bubble { max-width: 68%; padding: 10px 14px; border-radius: 18px; font-size: 13px; line-height: 1.5; }
  .msg-bubble.theirs { background: var(--bg-card); color: var(--text-primary); border-bottom-left-radius: 4px; }
  .msg-bubble.mine { background: var(--gold); color: #0C0C0C; border-bottom-right-radius: 4px; font-weight: 500; }
  .msg-time { font-size: 10px; color: var(--text-muted); align-self: flex-end; margin-bottom: 2px; }
  .msg-avatar-sm { width: 28px; height: 28px; border-radius: 50%; background: var(--bg-card2); display: flex; align-items: center; justify-content: center; font-size: 13px; flex-shrink: 0; align-self: flex-end; }
  .chat-input-bar { display: flex; align-items: center; gap: 10px; padding: 12px 16px; border-top: 1px solid var(--border); background: #111; flex-shrink: 0; }
  .chat-input { flex: 1; background: var(--bg-card); border: 1px solid var(--border); border-radius: 24px; padding: 10px 16px; font-size: 13px; color: var(--text-primary); font-family: 'Inter', sans-serif; outline: none; }
  .chat-input::placeholder { color: var(--text-muted); }
  .send-btn { width: 38px; height: 38px; border-radius: 50%; background: var(--gold); border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0; }
  .event-card-msg { background: var(--bg-card2); border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 12px; margin: 6px 16px; }

  /* RESEÑAS */
  .star-big { font-size: 32px; color: var(--gold); }
  .star-row { display: flex; gap: 6px; }
  .star-interactive { font-size: 36px; cursor: pointer; transition: transform .1s; }
  .star-interactive:hover { transform: scale(1.15); }
  .review-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); padding: 14px; }
  .reviewer-avatar { width: 36px; height: 36px; border-radius: 50%; background: var(--bg-card2); display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0; }
  .rating-bar-wrap { display: flex; align-items: center; gap: 8px; }
  .rating-bar-bg { flex: 1; height: 5px; background: var(--bg-card2); border-radius: 3px; overflow: hidden; }
  .rating-bar-fill { height: 100%; background: var(--gold); border-radius: 3px; }

  /* NOTIFICACIONES */
  .notif-item { display: flex; gap: 12px; padding: 14px 20px; border-bottom: 1px solid var(--border); cursor: pointer; }
  .notif-icon { width: 42px; height: 42px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0; }
  .notif-body { flex: 1; }
  .notif-title { font-size: 13px; font-weight: 600; color: var(--text-primary); line-height: 1.4; }
  .notif-sub { font-size: 11px; color: var(--text-muted); margin-top: 3px; }
  .notif-time { font-size: 10px; color: var(--text-muted); white-space: nowrap; }
  .notif-dot { width: 8px; height: 8px; background: var(--gold); border-radius: 50%; flex-shrink: 0; margin-top: 4px; }

  /* FAVORITOS */
  .fav-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); overflow: hidden; cursor: pointer; }
  .fav-img { height: 110px; display: flex; align-items: center; justify-content: center; font-size: 48px; position: relative; }
  .fav-heart { position: absolute; top: 10px; right: 10px; width: 30px; height: 30px; background: rgba(0,0,0,0.5); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; }
  .fav-info { padding: 10px 12px; }
  .fav-name { font-size: 13px; font-weight: 700; color: var(--text-primary); }
  .fav-type { font-size: 11px; color: var(--text-muted); margin-top: 2px; }
  .fav-price { font-size: 12px; color: var(--gold); font-weight: 700; margin-top: 4px; }

  /* HISTORIAL */
  .reservation-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); padding: 14px; }
  .res-status { font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 20px; }
  .status-confirmed { background: rgba(200,168,75,0.1); border: 1px solid rgba(200,168,75,0.3); color: var(--gold); }
  .status-completed { background: rgba(76,175,80,0.1); border: 1px solid rgba(76,175,80,0.3); color: #4CAF50; }
  .status-cancelled { background: rgba(229,57,53,0.1); border: 1px solid rgba(229,57,53,0.3); color: #E53935; }
  .status-pending { background: rgba(33,150,243,0.1); border: 1px solid rgba(33,150,243,0.3); color: #2196F3; }
  .timeline-dot { width: 10px; height: 10px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; }
  .timeline-line { width: 2px; background: var(--border); flex: 1; min-height: 20px; }

  /* CARRITO */
  .cart-item { background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius); padding: 14px; }
  .qty-btn { width: 28px; height: 28px; border-radius: 50%; background: var(--bg-card2); border: 1px solid var(--border); color: var(--text-primary); font-size: 14px; cursor: pointer; display: flex; align-items: center; justify-content: center; font-family: 'Inter', sans-serif; }
  .remove-btn { background: none; border: none; color: var(--text-muted); font-size: 18px; cursor: pointer; padding: 4px; }
  .summary-row { display: flex; justify-content: space-between; align-items: center; padding: 9px 0; border-bottom: 1px solid var(--border); }
  .summary-row:last-child { border-bottom: none; }
  .summary-label { font-size: 13px; color: var(--text-secondary); }
  .summary-value { font-size: 13px; font-weight: 600; color: var(--text-primary); }
  .summary-total .summary-label { font-size: 15px; font-weight: 700; color: var(--text-primary); }
  .summary-total .summary-value { font-size: 17px; font-weight: 700; color: var(--gold); }

  @media (max-width: 900px) {
    .main-wrap { flex-direction: column; align-items: center; padding: 20px; }
    .phone-frame { position: static; }
    .info-panel { position: static; max-width: 375px; width: 100%; }
    .screens-nav { padding: 16px 20px 0; }
  }
</style>
</head>
<body>

<div class="site-header">
  <div class="site-logo">Music<span>ast</span></div>
  <div class="phase-badge">Fase 2 — Comunicación</div>
</div>

<div class="screens-nav" id="screensNav">
  <button class="nav-btn active"  onclick="goTo(0)">11 Chat (Lista)</button>
  <button class="nav-btn" onclick="goTo(1)">12 Chat (Conversación)</button>
  <button class="nav-btn" onclick="goTo(2)">13 Reseñas (Ver)</button>
  <button class="nav-btn" onclick="goTo(3)">14 Reseñas (Escribir)</button>
  <button class="nav-btn" onclick="goTo(4)">15 Notificaciones</button>
  <button class="nav-btn" onclick="goTo(5)">16 Favoritos</button>
  <button class="nav-btn" onclick="goTo(6)">17 Historial Reservas</button>
  <button class="nav-btn" onclick="goTo(7)">18 Carrito</button>
</div>

<div class="main-wrap">

  <!-- PHONE -->
  <div class="phone-frame">
    <div class="phone-notch">
      <span>9:41</span>
      <div class="notch-island"></div>
      <div style="display:flex;gap:5px;align-items:center;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 8.5C5.5 4.5 10 3 12 3s6.5 1.5 10.5 5.5M5 12c1.8-1.8 4.3-3 7-3s5.2 1.2 7 3M8.5 15.5C9.7 14.3 10.8 14 12 14s2.3.3 3.5 1.5M12 19h.01"/></svg>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="7" width="16" height="11" rx="2"/><path d="M22 11v3"/><rect x="4" y="9" width="10" height="7" rx="1"/></svg>
      </div>
    </div>

    <div class="phone-screen" id="phoneScreen">

      <!-- SCREEN 11: CHAT LISTA -->
      <div class="screen active" id="s0">
        <div class="screen-header">
          <div class="header-title">Mensajes</div>
          <div class="header-action">✏️</div>
        </div>
        <div style="padding:0 20px 12px;">
          <div style="display:flex;align-items:center;gap:10px;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:10px 14px;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
            <span style="font-size:13px;color:var(--text-muted);">Buscar conversación...</span>
          </div>
        </div>
        <div style="flex:1;overflow-y:auto;">
          <!-- chat items -->
          <div class="chat-list-item" onclick="goTo(1)" style="background:rgba(200,168,75,0.04);">
            <div class="chat-avatar" style="background:linear-gradient(135deg,#2A1500,#1A0800);">🎻<div class="online-dot"></div></div>
            <div class="chat-info">
              <div class="chat-name">Mariachi Los Reyes</div>
              <div class="chat-preview">Claro, podemos confirmar el horario para las 7 PM 🎶</div>
            </div>
            <div class="chat-meta">
              <span class="chat-time">Ahora</span>
              <div class="chat-badge">2</div>
            </div>
          </div>
          <div class="chat-list-item">
            <div class="chat-avatar" style="background:linear-gradient(135deg,#001A2A,#000E1A);">🎸</div>
            <div class="chat-info">
              <div class="chat-name">Banda La Fregona</div>
              <div class="chat-preview">Muchas gracias, fue un placer amenizar su evento</div>
            </div>
            <div class="chat-meta">
              <span class="chat-time">Ayer</span>
            </div>
          </div>
          <div class="chat-list-item">
            <div class="chat-avatar" style="background:linear-gradient(135deg,#1A001A,#0E000E);">🎧</div>
            <div class="chat-info">
              <div class="chat-name">DJ Alex</div>
              <div class="chat-preview">Tú: ¿Tienes disponibilidad para el 15 de junio?</div>
            </div>
            <div class="chat-meta">
              <span class="chat-time">Lun</span>
              <div class="chat-badge">1</div>
            </div>
          </div>
          <div class="chat-list-item">
            <div class="chat-avatar" style="background:linear-gradient(135deg,#001A0A,#000E05);">🎷</div>
            <div class="chat-info">
              <div class="chat-name">Norteño VIP</div>
              <div class="chat-preview">El precio incluye 3 horas de presentación</div>
            </div>
            <div class="chat-meta">
              <span class="chat-time">Dom</span>
            </div>
          </div>
          <div class="chat-list-item">
            <div class="chat-avatar" style="background:linear-gradient(135deg,#1A1500,#0E0A00);">🎹</div>
            <div class="chat-info">
              <div class="chat-name">Grupo Versátil Elite</div>
              <div class="chat-preview">Contamos con repertorio de 200+ canciones</div>
            </div>
            <div class="chat-meta">
              <span class="chat-time">Sáb</span>
            </div>
          </div>
          <div style="padding:20px;text-align:center;">
            <p style="font-size:12px;color:var(--text-muted);">Solo puedes contactar a proveedores con los que tienes una reserva activa</p>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><span>Inicio</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg><span>Favoritos</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg><span>Mensajes</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- SCREEN 12: CHAT CONVERSACIÓN -->
      <div class="screen" id="s1">
        <div class="chat-room-header">
          <div onclick="goTo(0)" style="cursor:pointer;font-size:18px;color:var(--text-primary);margin-right:2px;">←</div>
          <div class="chat-room-avatar" style="background:linear-gradient(135deg,#2A1500,#1A0800);">🎻</div>
          <div style="flex:1;">
            <div style="font-size:14px;font-weight:700;">Mariachi Los Reyes</div>
            <div style="font-size:11px;color:var(--success);">● En línea</div>
          </div>
          <div style="font-size:18px;cursor:pointer;">📞</div>
          <div style="font-size:18px;cursor:pointer;margin-left:8px;">⋯</div>
        </div>

        <!-- event card in chat -->
        <div class="event-card-msg">
          <div style="font-size:10px;color:var(--text-muted);margin-bottom:6px;font-weight:600;letter-spacing:0.5px;">RESERVA ACTIVA</div>
          <div style="display:flex;align-items:center;gap:10px;">
            <div style="width:38px;height:38px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#2A1500,#1A0800);display:flex;align-items:center;justify-content:center;font-size:18px;">🎻</div>
            <div style="flex:1;">
              <div style="font-size:13px;font-weight:600;">Mariachi Los Reyes</div>
              <div style="font-size:11px;color:var(--text-muted);">24 mayo · 7:00 PM · Guadalajara</div>
            </div>
            <div style="background:rgba(200,168,75,0.1);border:1px solid rgba(200,168,75,0.3);color:var(--gold);font-size:9px;font-weight:700;padding:3px 8px;border-radius:20px;">Confirmada</div>
          </div>
        </div>

        <div style="flex:1;overflow-y:auto;padding:8px 0;">
          <!-- date divider -->
          <div style="text-align:center;margin:10px 0;"><span style="font-size:11px;color:var(--text-muted);background:var(--bg-card);padding:4px 12px;border-radius:20px;">Hoy</span></div>

          <div class="msg-row">
            <div class="msg-avatar-sm">🎻</div>
            <div>
              <div class="msg-bubble theirs">Hola Carlos, muchas gracias por reservarnos para tu boda 🎉</div>
              <div class="msg-time" style="padding-left:4px;">10:15 AM</div>
            </div>
          </div>
          <div class="msg-row mine">
            <div>
              <div class="msg-bubble mine">¡Gracias! Estamos muy emocionados. ¿Pueden llegar 30 min antes para prepararse?</div>
              <div class="msg-time" style="text-align:right;padding-right:4px;">10:18 AM</div>
            </div>
          </div>
          <div class="msg-row">
            <div class="msg-avatar-sm">🎻</div>
            <div>
              <div class="msg-bubble theirs">¡Por supuesto! Llegamos a las 6:30 PM para instalar el equipo</div>
              <div class="msg-time" style="padding-left:4px;">10:20 AM</div>
            </div>
          </div>
          <div class="msg-row mine">
            <div>
              <div class="msg-bubble mine">Perfecto 👍 ¿Pueden tocar "Cielito Lindo" como primera canción?</div>
              <div class="msg-time" style="text-align:right;padding-right:4px;">10:22 AM</div>
            </div>
          </div>
          <div class="msg-row">
            <div class="msg-avatar-sm">🎻</div>
            <div>
              <div class="msg-bubble theirs">Claro, podemos confirmar el horario para las 7 PM 🎶 Y tenemos esa canción en nuestro repertorio, con gusto la tocamos</div>
              <div class="msg-time" style="padding-left:4px;">10:24 AM</div>
            </div>
          </div>
          <!-- typing indicator -->
          <div class="msg-row">
            <div class="msg-avatar-sm">🎻</div>
            <div class="msg-bubble theirs" style="padding:12px 16px;">
              <div style="display:flex;gap:5px;align-items:center;">
                <div style="width:7px;height:7px;border-radius:50%;background:var(--text-muted);animation:bounce 1s infinite 0s;"></div>
                <div style="width:7px;height:7px;border-radius:50%;background:var(--text-muted);animation:bounce 1s infinite .2s;"></div>
                <div style="width:7px;height:7px;border-radius:50%;background:var(--text-muted);animation:bounce 1s infinite .4s;"></div>
              </div>
            </div>
          </div>
        </div>

        <div style="padding:8px 16px;display:flex;gap:8px;">
          <div style="font-size:18px;cursor:pointer;">📎</div>
          <div style="font-size:18px;cursor:pointer;">📷</div>
          <div style="font-size:18px;cursor:pointer;">🎵</div>
        </div>

        <div class="chat-input-bar">
          <input class="chat-input" placeholder="Escribe un mensaje...">
          <button class="send-btn">➤</button>
        </div>
      </div>

      <!-- SCREEN 13: RESEÑAS VER -->
      <div class="screen" id="s2">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="back-btn" onclick="goTo(0)">←</div>
            <div class="header-title">Reseñas</div>
          </div>
          <!-- resumen -->
          <div style="padding:0 20px 16px;">
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:20px;margin-bottom:16px;">
              <div style="display:flex;align-items:center;gap:20px;margin-bottom:16px;">
                <div style="text-align:center;">
                  <div style="font-family:'Sora',sans-serif;font-size:52px;font-weight:700;color:var(--text-primary);line-height:1;">4.8</div>
                  <div style="color:var(--gold);font-size:20px;margin:4px 0;">★★★★★</div>
                  <div style="font-size:11px;color:var(--text-muted);">120 reseñas</div>
                </div>
                <div style="flex:1;display:flex;flex-direction:column;gap:5px;">
                  <div class="rating-bar-wrap"><span style="font-size:11px;color:var(--text-muted);width:10px;">5</span><div class="rating-bar-bg"><div class="rating-bar-fill" style="width:78%;"></div></div><span style="font-size:11px;color:var(--text-muted);">78%</span></div>
                  <div class="rating-bar-wrap"><span style="font-size:11px;color:var(--text-muted);width:10px;">4</span><div class="rating-bar-bg"><div class="rating-bar-fill" style="width:15%;"></div></div><span style="font-size:11px;color:var(--text-muted);">15%</span></div>
                  <div class="rating-bar-wrap"><span style="font-size:11px;color:var(--text-muted);width:10px;">3</span><div class="rating-bar-bg"><div class="rating-bar-fill" style="width:5%;"></div></div><span style="font-size:11px;color:var(--text-muted);">5%</span></div>
                  <div class="rating-bar-wrap"><span style="font-size:11px;color:var(--text-muted);width:10px;">2</span><div class="rating-bar-bg"><div class="rating-bar-fill" style="width:1%;"></div></div><span style="font-size:11px;color:var(--text-muted);">1%</span></div>
                  <div class="rating-bar-wrap"><span style="font-size:11px;color:var(--text-muted);width:10px;">1</span><div class="rating-bar-bg"><div class="rating-bar-fill" style="width:1%;"></div></div><span style="font-size:11px;color:var(--text-muted);">1%</span></div>
                </div>
              </div>
              <button class="btn-gold" onclick="goTo(3)" style="font-size:13px;padding:12px;">Escribir una reseña</button>
            </div>
            <!-- filtros -->
            <div style="display:flex;gap:8px;overflow-x:auto;padding-bottom:12px;margin-bottom:14px;scrollbar-width:none;">
              <div style="background:var(--gold);color:#000;padding:7px 14px;border-radius:20px;font-size:12px;font-weight:700;white-space:nowrap;">Todas</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">★ 5 estrellas</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">★ 4 estrellas</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">Con fotos</div>
            </div>
            <!-- reviews -->
            <div style="display:flex;flex-direction:column;gap:12px;padding-bottom:16px;">
              <div class="review-card">
                <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px;">
                  <div class="reviewer-avatar">👤</div>
                  <div style="flex:1;">
                    <div style="font-size:13px;font-weight:600;">Ana Martínez</div>
                    <div style="font-size:11px;color:var(--text-muted);">Boda · Mayo 2025</div>
                  </div>
                  <div style="color:var(--gold);font-size:13px;">★★★★★</div>
                </div>
                <p style="font-size:12px;color:var(--text-secondary);line-height:1.6;">Excelente presentación, muy puntuales y profesionales. Hicieron que nuestra boda fuera mágica. 100% recomendados 🎻</p>
                <div style="margin-top:10px;display:flex;gap:6px;">
                  <div style="width:48px;height:48px;border-radius:6px;background:linear-gradient(135deg,#2A1500,#1A0800);display:flex;align-items:center;justify-content:center;font-size:20px;">🎊</div>
                  <div style="width:48px;height:48px;border-radius:6px;background:linear-gradient(135deg,#1A0A00,#0E0500);display:flex;align-items:center;justify-content:center;font-size:20px;">🎶</div>
                </div>
              </div>
              <div class="review-card">
                <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px;">
                  <div class="reviewer-avatar">🧑</div>
                  <div style="flex:1;">
                    <div style="font-size:13px;font-weight:600;">Roberto Sánchez</div>
                    <div style="font-size:11px;color:var(--text-muted);">Cumpleaños · Abril 2025</div>
                  </div>
                  <div style="color:var(--gold);font-size:13px;">★★★★★</div>
                </div>
                <p style="font-size:12px;color:var(--text-secondary);line-height:1.6;">Increíble experiencia. Se aprendieron varias canciones especiales a pedido. El festejado quedó emocionado.</p>
              </div>
              <div class="review-card">
                <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px;">
                  <div class="reviewer-avatar">👩</div>
                  <div style="flex:1;">
                    <div style="font-size:13px;font-weight:600;">Laura Pérez</div>
                    <div style="font-size:11px;color:var(--text-muted);">Serenata · Marzo 2025</div>
                  </div>
                  <div style="color:var(--gold);font-size:13px;">★★★★☆</div>
                </div>
                <p style="font-size:12px;color:var(--text-secondary);line-height:1.6;">Muy buena presentación, solo llegaron un poco tarde pero todo lo demás fue perfecto.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SCREEN 14: ESCRIBIR RESEÑA -->
      <div class="screen" id="s3">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="back-btn" onclick="goTo(2)">←</div>
            <div class="header-title">Escribir reseña</div>
          </div>
          <div style="padding:0 20px 20px;">
            <!-- proveedor -->
            <div style="display:flex;align-items:center;gap:12px;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;margin-bottom:24px;">
              <div style="width:52px;height:52px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#2A1500,#1A0800);display:flex;align-items:center;justify-content:center;font-size:24px;">🎻</div>
              <div>
                <div style="font-size:15px;font-weight:700;">Mariachi Los Reyes</div>
                <div style="font-size:12px;color:var(--text-muted);">Boda · 24 de mayo de 2025</div>
              </div>
            </div>
            <!-- estrellas -->
            <div style="text-align:center;margin-bottom:24px;">
              <p style="font-size:13px;color:var(--text-secondary);margin-bottom:14px;">¿Cómo calificarías la experiencia?</p>
              <div style="display:flex;justify-content:center;gap:8px;" id="starRow">
                <span class="star-interactive" onclick="setStars(1)">☆</span>
                <span class="star-interactive" onclick="setStars(2)">☆</span>
                <span class="star-interactive" onclick="setStars(3)">☆</span>
                <span class="star-interactive" onclick="setStars(4)">☆</span>
                <span class="star-interactive" onclick="setStars(5)">☆</span>
              </div>
              <p style="font-size:12px;color:var(--text-muted);margin-top:10px;" id="starLabel">Toca una estrella para calificar</p>
            </div>
            <!-- categorías -->
            <div style="margin-bottom:20px;">
              <p style="font-size:13px;font-weight:600;margin-bottom:10px;">¿Qué destacarías?</p>
              <div style="display:flex;flex-wrap:wrap;gap:8px;">
                <div style="background:rgba(200,168,75,0.1);border:1px solid rgba(200,168,75,0.4);color:var(--gold);padding:7px 14px;border-radius:20px;font-size:12px;font-weight:600;cursor:pointer;">Puntualidad ✓</div>
                <div style="background:rgba(200,168,75,0.1);border:1px solid rgba(200,168,75,0.4);color:var(--gold);padding:7px 14px;border-radius:20px;font-size:12px;font-weight:600;cursor:pointer;">Calidad musical ✓</div>
                <div style="background:var(--bg-card);border:1px solid var(--border);color:var(--text-secondary);padding:7px 14px;border-radius:20px;font-size:12px;cursor:pointer;">Profesionalismo</div>
                <div style="background:var(--bg-card);border:1px solid var(--border);color:var(--text-secondary);padding:7px 14px;border-radius:20px;font-size:12px;cursor:pointer;">Presentación</div>
                <div style="background:var(--bg-card);border:1px solid var(--border);color:var(--text-secondary);padding:7px 14px;border-radius:20px;font-size:12px;cursor:pointer;">Precio justo</div>
              </div>
            </div>
            <!-- comentario -->
            <div style="margin-bottom:20px;">
              <p style="font-size:13px;font-weight:600;margin-bottom:8px;">Cuéntanos tu experiencia</p>
              <textarea class="input-field" rows="4" placeholder="Describe cómo fue el servicio, qué te gustó y qué podría mejorar..." style="resize:none;"></textarea>
            </div>
            <!-- fotos -->
            <div style="margin-bottom:24px;">
              <p style="font-size:13px;font-weight:600;margin-bottom:8px;">Agregar fotos del evento <span style="color:var(--text-muted);font-weight:400;">(opcional)</span></p>
              <div style="display:flex;gap:10px;">
                <div style="width:72px;height:72px;border-radius:var(--radius-sm);border:1px dashed var(--text-muted);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px;cursor:pointer;">
                  <div style="font-size:22px;">📷</div>
                  <div style="font-size:9px;color:var(--text-muted);">Agregar</div>
                </div>
              </div>
            </div>
            <button class="btn-gold" onclick="goTo(2)">Publicar reseña</button>
          </div>
        </div>
      </div>

      <!-- SCREEN 15: NOTIFICACIONES -->
      <div class="screen" id="s4">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="header-title">Notificaciones</div>
            <div style="font-size:12px;color:var(--gold);cursor:pointer;font-weight:600;">Marcar leídas</div>
          </div>
          <!-- hoy -->
          <div style="padding:8px 20px 4px;"><span style="font-size:11px;font-weight:700;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;">HOY</span></div>
          <div class="notif-item" style="background:rgba(200,168,75,0.03);">
            <div class="notif-icon" style="background:rgba(76,175,80,0.1);">✅</div>
            <div class="notif-body">
              <div class="notif-title">Reserva confirmada — Mariachi Los Reyes</div>
              <div class="notif-sub">Tu reserva #MUS-48291 para el 24 de mayo fue confirmada exitosamente</div>
            </div>
            <div style="display:flex;flex-direction:column;align-items:flex-end;gap:4px;"><span class="notif-time">Hace 5m</span><div class="notif-dot"></div></div>
          </div>
          <div class="notif-item" style="background:rgba(200,168,75,0.03);">
            <div class="notif-icon" style="background:rgba(200,168,75,0.1);">💬</div>
            <div class="notif-body">
              <div class="notif-title">Nuevo mensaje de Mariachi Los Reyes</div>
              <div class="notif-sub">"Claro, podemos confirmar el horario para las 7 PM 🎶"</div>
            </div>
            <div style="display:flex;flex-direction:column;align-items:flex-end;gap:4px;"><span class="notif-time">Hace 12m</span><div class="notif-dot"></div></div>
          </div>
          <div class="notif-item">
            <div class="notif-icon" style="background:rgba(33,150,243,0.1);">💳</div>
            <div class="notif-body">
              <div class="notif-title">Pago procesado exitosamente</div>
              <div class="notif-sub">Se realizó un cargo de $6,206 MXN a tu tarjeta ••4291</div>
            </div>
            <div style="display:flex;flex-direction:column;align-items:flex-end;gap:4px;"><span class="notif-time">Hace 1h</span></div>
          </div>
          <!-- ayer -->
          <div style="padding:14px 20px 4px;"><span style="font-size:11px;font-weight:700;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;">AYER</span></div>
          <div class="notif-item">
            <div class="notif-icon" style="background:rgba(255,152,0,0.1);">⏰</div>
            <div class="notif-body">
              <div class="notif-title">Recordatorio de evento</div>
              <div class="notif-sub">Tu evento con Mariachi Los Reyes es en 5 días. ¡No olvides los detalles!</div>
            </div>
            <div><span class="notif-time">9:00 AM</span></div>
          </div>
          <div class="notif-item">
            <div class="notif-icon" style="background:rgba(156,39,176,0.1);">⭐</div>
            <div class="notif-body">
              <div class="notif-title">¿Cómo estuvo el evento con Banda La Fregona?</div>
              <div class="notif-sub">Comparte tu experiencia y ayuda a otros usuarios</div>
            </div>
            <div><span class="notif-time">8:30 AM</span></div>
          </div>
          <!-- esta semana -->
          <div style="padding:14px 20px 4px;"><span style="font-size:11px;font-weight:700;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;">ESTA SEMANA</span></div>
          <div class="notif-item">
            <div class="notif-icon" style="background:rgba(76,175,80,0.1);">🎁</div>
            <div class="notif-body">
              <div class="notif-title">Cupón especial para tu próxima reserva</div>
              <div class="notif-sub">Usa el código MUSIC10 y obtén 10% de descuento</div>
            </div>
            <div><span class="notif-time">Lun</span></div>
          </div>
          <div class="notif-item">
            <div class="notif-icon" style="background:rgba(200,168,75,0.1);">🆕</div>
            <div class="notif-body">
              <div class="notif-title">Nuevo proveedor en tu zona</div>
              <div class="notif-sub">Trío Los Amigos acaba de unirse a Musicast en Guadalajara</div>
            </div>
            <div><span class="notif-time">Dom</span></div>
          </div>
          <div style="height:16px;"></div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><span>Inicio</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg><span>Favoritos</span></div>
          <div class="nav-item active" style="position:relative;">
            <svg viewBox="0 0 24 24"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
            <div style="position:absolute;top:3px;right:8px;width:8px;height:8px;background:var(--gold);border-radius:50%;border:1px solid var(--bg-dark);"></div>
            <span style="color:var(--gold);">Alertas</span>
          </div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- SCREEN 16: FAVORITOS -->
      <div class="screen" id="s5">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="header-title">Mis Favoritos</div>
            <div style="font-size:12px;color:var(--text-muted);">4 guardados</div>
          </div>
          <div style="padding:0 20px 8px;">
            <!-- filtros -->
            <div style="display:flex;gap:8px;overflow-x:auto;padding-bottom:10px;margin-bottom:14px;scrollbar-width:none;">
              <div style="background:var(--gold);color:#000;padding:7px 14px;border-radius:20px;font-size:12px;font-weight:700;white-space:nowrap;">Todos</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">Mariachi</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">Banda</div>
              <div style="background:var(--bg-card);border:1px solid var(--border);padding:7px 14px;border-radius:20px;font-size:12px;color:var(--text-secondary);white-space:nowrap;">DJ</div>
            </div>
            <!-- grid -->
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;padding-bottom:16px;">
              <div class="fav-card">
                <div class="fav-img" style="background:linear-gradient(135deg,#2A1500,#1A0800);">
                  <span>🎻</span>
                  <div class="fav-heart" style="color:#E53935;">❤️</div>
                </div>
                <div class="fav-info">
                  <div class="fav-name">Mariachi Los Reyes</div>
                  <div class="fav-type">Mariachi · ★ 4.8</div>
                  <div class="fav-price">$5,000 desde</div>
                </div>
              </div>
              <div class="fav-card">
                <div class="fav-img" style="background:linear-gradient(135deg,#001A2A,#000E1A);">
                  <span>🎸</span>
                  <div class="fav-heart" style="color:#E53935;">❤️</div>
                </div>
                <div class="fav-info">
                  <div class="fav-name">Banda La Fregona</div>
                  <div class="fav-type">Banda · ★ 4.7</div>
                  <div class="fav-price">$18,000 desde</div>
                </div>
              </div>
              <div class="fav-card">
                <div class="fav-img" style="background:linear-gradient(135deg,#1A001A,#0E000E);">
                  <span>🎧</span>
                  <div class="fav-heart" style="color:#E53935;">❤️</div>
                </div>
                <div class="fav-info">
                  <div class="fav-name">DJ Alex</div>
                  <div class="fav-type">DJ · ★ 4.8</div>
                  <div class="fav-price">$3,500 desde</div>
                </div>
              </div>
              <div class="fav-card">
                <div class="fav-img" style="background:linear-gradient(135deg,#001A0A,#000E05);">
                  <span>🎷</span>
                  <div class="fav-heart" style="color:#E53935;">❤️</div>
                </div>
                <div class="fav-info">
                  <div class="fav-name">Norteño VIP</div>
                  <div class="fav-type">Norteño · ★ 4.9</div>
                  <div class="fav-price">$12,000 desde</div>
                </div>
              </div>
            </div>
            <!-- empty hint -->
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;text-align:center;margin-bottom:16px;">
              <p style="font-size:13px;color:var(--text-secondary);">¿Quieres guardar más? Presiona ❤️ en cualquier proveedor</p>
            </div>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><span>Inicio</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24" style="fill:var(--gold);stroke:var(--gold);"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg><span>Favoritos</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg><span>Mensajes</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- SCREEN 17: HISTORIAL DE RESERVAS -->
      <div class="screen" id="s6">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="header-title">Mis Reservas</div>
            <div class="header-action">⚙️</div>
          </div>
          <div style="padding:0 20px 8px;">
            <!-- tabs -->
            <div style="display:flex;gap:0;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:3px;margin-bottom:16px;">
              <div style="flex:1;text-align:center;padding:8px;border-radius:6px;background:var(--gold);color:#000;font-size:12px;font-weight:700;cursor:pointer;">Todas</div>
              <div style="flex:1;text-align:center;padding:8px;font-size:12px;color:var(--text-muted);cursor:pointer;">Activas</div>
              <div style="flex:1;text-align:center;padding:8px;font-size:12px;color:var(--text-muted);cursor:pointer;">Pasadas</div>
            </div>
            <div style="display:flex;flex-direction:column;gap:12px;padding-bottom:16px;">
              <!-- reserva confirmada -->
              <div class="reservation-card">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;">
                  <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:44px;height:44px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#2A1500,#1A0800);display:flex;align-items:center;justify-content:center;font-size:22px;">🎻</div>
                    <div>
                      <div style="font-size:14px;font-weight:700;">Mariachi Los Reyes</div>
                      <div style="font-size:11px;color:var(--text-muted);">Mariachi</div>
                    </div>
                  </div>
                  <span class="res-status status-confirmed">Confirmada</span>
                </div>
                <div class="divider" style="margin-bottom:10px;"></div>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:12px;">
                  <div><div style="font-size:10px;color:var(--text-muted);">Fecha</div><div style="font-size:12px;font-weight:600;">24 may, 2025</div></div>
                  <div><div style="font-size:10px;color:var(--text-muted);">Hora</div><div style="font-size:12px;font-weight:600;">7:00 PM</div></div>
                  <div><div style="font-size:10px;color:var(--text-muted);">Evento</div><div style="font-size:12px;font-weight:600;">Boda</div></div>
                  <div><div style="font-size:10px;color:var(--text-muted);">Total</div><div style="font-size:12px;font-weight:600;color:var(--gold);">$6,206</div></div>
                </div>
                <div style="display:flex;gap:8px;">
                  <button style="flex:1;padding:9px;border-radius:var(--radius-sm);background:transparent;border:1px solid var(--border);color:var(--text-secondary);font-size:12px;cursor:pointer;font-family:'Inter',sans-serif;">Ver detalle</button>
                  <button style="flex:1;padding:9px;border-radius:var(--radius-sm);background:var(--gold);border:none;color:#000;font-size:12px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;" onclick="goTo(1)">Contactar</button>
                </div>
              </div>
              <!-- reserva completada -->
              <div class="reservation-card">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;">
                  <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:44px;height:44px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#001A2A,#000E1A);display:flex;align-items:center;justify-content:center;font-size:22px;">🎸</div>
                    <div>
                      <div style="font-size:14px;font-weight:700;">Banda La Fregona</div>
                      <div style="font-size:11px;color:var(--text-muted);">Banda</div>
                    </div>
                  </div>
                  <span class="res-status status-completed">Completada</span>
                </div>
                <div class="divider" style="margin-bottom:10px;"></div>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:12px;">
                  <div><div style="font-size:10px;color:var(--text-muted);">Fecha</div><div style="font-size:12px;font-weight:600;">12 abr, 2025</div></div>
                  <div><div style="font-size:10px;color:var(--text-muted);">Hora</div><div style="font-size:12px;font-weight:600;">8:00 PM</div></div>
                  <div><div style="font-size:10px;color:var(--text-muted);">Evento</div><div style="font-size:12px;font-weight:600;">XV Años</div></div>
                  <div><div style="font-size:10px;color:var(--text-muted);">Total</div><div style="font-size:12px;font-weight:600;color:var(--gold);">$21,080</div></div>
                </div>
                <div style="display:flex;gap:8px;">
                  <button style="flex:1;padding:9px;border-radius:var(--radius-sm);background:transparent;border:1px solid var(--border);color:var(--text-secondary);font-size:12px;cursor:pointer;font-family:'Inter',sans-serif;">Ver detalle</button>
                  <button style="flex:1;padding:9px;border-radius:var(--radius-sm);background:rgba(156,39,176,0.1);border:1px solid rgba(156,39,176,0.3);color:#CE93D8;font-size:12px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;" onclick="goTo(3)">Calificar ⭐</button>
                </div>
              </div>
              <!-- reserva cancelada -->
              <div class="reservation-card" style="opacity:0.7;">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;">
                  <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:44px;height:44px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#1A1500,#0E0A00);display:flex;align-items:center;justify-content:center;font-size:22px;">🎧</div>
                    <div>
                      <div style="font-size:14px;font-weight:700;">DJ Alex</div>
                      <div style="font-size:11px;color:var(--text-muted);">DJ</div>
                    </div>
                  </div>
                  <span class="res-status status-cancelled">Cancelada</span>
                </div>
                <div class="divider" style="margin-bottom:10px;"></div>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:12px;">
                  <div><div style="font-size:10px;color:var(--text-muted);">Fecha</div><div style="font-size:12px;font-weight:600;">3 mar, 2025</div></div>
                  <div><div style="font-size:10px;color:var(--text-muted);">Reembolso</div><div style="font-size:12px;font-weight:600;color:#4CAF50;">$4,060</div></div>
                </div>
                <p style="font-size:11px;color:var(--text-muted);">Reserva cancelada por el cliente. Reembolso procesado en 3-5 días hábiles.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><span>Inicio</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg><span>Favoritos</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg><span>Mensajes</span></div>
          <div class="nav-item"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- SCREEN 18: CARRITO -->
      <div class="screen" id="s7">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="back-btn">←</div>
            <div class="header-title">Mi Carrito</div>
            <div style="font-size:12px;color:var(--text-muted);">2 servicios</div>
          </div>
          <div style="padding:0 20px 20px;">
            <!-- info banner -->
            <div style="background:rgba(33,150,243,0.07);border:1px solid rgba(33,150,243,0.2);border-radius:var(--radius-sm);padding:10px 14px;display:flex;gap:8px;align-items:center;margin-bottom:16px;">
              <span style="font-size:14px;">ℹ️</span>
              <p style="font-size:11px;color:#64B5F6;line-height:1.5;">Puedes contratar varios proveedores para un mismo evento. La disponibilidad puede variar.</p>
            </div>
            <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:20px;">
              <!-- item 1 -->
              <div class="cart-item">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;">
                  <div style="display:flex;gap:10px;align-items:center;">
                    <div style="width:46px;height:46px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#2A1500,#1A0800);display:flex;align-items:center;justify-content:center;font-size:22px;">🎻</div>
                    <div>
                      <div style="font-size:13px;font-weight:700;">Mariachi Los Reyes</div>
                      <div style="font-size:11px;color:var(--text-muted);">Mariachi · Boda · 24 mayo</div>
                    </div>
                  </div>
                  <button class="remove-btn">✕</button>
                </div>
                <div class="divider" style="margin-bottom:10px;"></div>
                <div style="display:flex;align-items:center;justify-content:space-between;">
                  <div>
                    <div style="font-size:11px;color:var(--text-muted);">Duración</div>
                    <div style="display:flex;align-items:center;gap:8px;margin-top:4px;">
                      <button class="qty-btn">−</button>
                      <span style="font-size:13px;font-weight:600;min-width:40px;text-align:center;">2 horas</span>
                      <button class="qty-btn">+</button>
                    </div>
                  </div>
                  <div style="text-align:right;">
                    <div style="font-size:11px;color:var(--text-muted);">Subtotal</div>
                    <div style="font-size:16px;font-weight:700;color:var(--gold);">$5,000</div>
                  </div>
                </div>
              </div>
              <!-- item 2 -->
              <div class="cart-item">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;">
                  <div style="display:flex;gap:10px;align-items:center;">
                    <div style="width:46px;height:46px;border-radius:var(--radius-sm);background:linear-gradient(135deg,#1A001A,#0E000E);display:flex;align-items:center;justify-content:center;font-size:22px;">🎧</div>
                    <div>
                      <div style="font-size:13px;font-weight:700;">DJ Alex</div>
                      <div style="font-size:11px;color:var(--text-muted);">DJ · Boda · 24 mayo</div>
                    </div>
                  </div>
                  <button class="remove-btn">✕</button>
                </div>
                <div class="divider" style="margin-bottom:10px;"></div>
                <div style="display:flex;align-items:center;justify-content:space-between;">
                  <div>
                    <div style="font-size:11px;color:var(--text-muted);">Duración</div>
                    <div style="display:flex;align-items:center;gap:8px;margin-top:4px;">
                      <button class="qty-btn">−</button>
                      <span style="font-size:13px;font-weight:600;min-width:40px;text-align:center;">3 horas</span>
                      <button class="qty-btn">+</button>
                    </div>
                  </div>
                  <div style="text-align:right;">
                    <div style="font-size:11px;color:var(--text-muted);">Subtotal</div>
                    <div style="font-size:16px;font-weight:700;color:var(--gold);">$10,500</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- cupón -->
            <div style="display:flex;gap:8px;margin-bottom:16px;">
              <input class="input-field" style="flex:1;" placeholder="🎁 Código de descuento" value="MUSIC10">
              <button style="padding:0 16px;background:var(--gold);border:none;border-radius:var(--radius-sm);font-size:13px;font-weight:700;color:#000;cursor:pointer;font-family:'Inter',sans-serif;">Aplicar</button>
            </div>
            <div style="background:rgba(76,175,80,0.07);border:1px solid rgba(76,175,80,0.2);border-radius:var(--radius-sm);padding:10px 14px;display:flex;align-items:center;gap:8px;margin-bottom:16px;">
              <span style="font-size:14px;">✅</span>
              <p style="font-size:12px;color:#81C784;">Cupón MUSIC10 aplicado — 10% de descuento</p>
            </div>
            <!-- resumen -->
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;margin-bottom:16px;">
              <div style="font-size:14px;font-weight:700;margin-bottom:12px;">Resumen del pedido</div>
              <div class="summary-row"><span class="summary-label">Mariachi Los Reyes · 2h</span><span class="summary-value">$5,000</span></div>
              <div class="summary-row"><span class="summary-label">DJ Alex · 3h</span><span class="summary-value">$10,500</span></div>
              <div class="summary-row"><span class="summary-label">Descuento (MUSIC10 -10%)</span><span class="summary-value" style="color:#4CAF50;">-$1,550</span></div>
              <div class="summary-row"><span class="summary-label">Cargo por servicio</span><span class="summary-value">$980</span></div>
              <div class="summary-row"><span class="summary-label">IVA (16%)</span><span class="summary-value">$2,388</span></div>
              <div class="summary-row summary-total"><span class="summary-label">Total</span><span class="summary-value">$17,318</span></div>
            </div>
          </div>
        </div>
        <div style="padding:14px 20px;border-top:1px solid var(--border);flex-shrink:0;">
          <button class="btn-gold">Proceder al pago — $17,318</button>
        </div>
      </div>

    </div>
  </div>

  <!-- INFO PANEL -->
  <div class="info-panel">
    <div class="screen-label" id="infoLabel">Pantalla 11 de 18</div>
    <div class="screen-title" id="infoTitle">Chat — Lista</div>
    <div class="screen-desc" id="infoDesc">Centro de mensajes del cliente. Lista de todas las conversaciones activas con proveedores, con indicadores de mensajes no leídos.</div>
    <ul class="features-list" id="infoFeatures">
      <li>Lista de chats con foto del proveedor</li>
      <li>Preview del último mensaje</li>
      <li>Indicador de mensajes no leídos</li>
      <li>Estado en línea / desconectado</li>
      <li>Buscador de conversaciones</li>
      <li>Acceso solo con reserva activa</li>
    </ul>
    <div class="nav-arrows">
      <button class="arrow-btn" id="prevBtn" onclick="navigate(-1)" disabled>←</button>
      <button class="arrow-btn" id="nextBtn" onclick="navigate(1)">→</button>
    </div>
    <div class="screen-counter"><strong id="counterCurrent">11</strong> / <strong>18</strong> pantallas totales</div>
  </div>

</div>

<style>
@keyframes bounce {
  0%, 60%, 100% { transform: translateY(0); }
  30% { transform: translateY(-5px); }
}
</style>

<script>
const screens = [
  { label:'Pantalla 11 de 18', title:'Chat — Lista', desc:'Centro de mensajes del cliente. Lista de todas las conversaciones activas con proveedores, con indicadores de mensajes no leídos.', features:['Lista de chats con foto del proveedor','Preview del último mensaje','Indicador de mensajes no leídos','Estado en línea / desconectado','Buscador de conversaciones','Acceso solo con reserva activa'] },
  { label:'Pantalla 12 de 18', title:'Chat — Conversación', desc:'Mensajería en tiempo real entre cliente y proveedor. Incluye contexto de la reserva activa y opciones de archivos adjuntos.', features:['Card de reserva activa visible','Mensajes con burbujas diferenciadas','Indicador de "escribiendo..."','Adjuntar fotos y archivos','Llamada directa al proveedor','Hora de envío y estado de lectura'] },
  { label:'Pantalla 13 de 18', title:'Reseñas — Ver', desc:'Sección pública de calificaciones del proveedor con resumen visual, distribución de estrellas y reseñas individuales.', features:['Calificación global con número grande','Gráfica de distribución por estrellas','Filtros por calificación y tipo','Fotos del evento subidas por clientes','Nombre, fecha y tipo de evento','Botón directo para escribir reseña'] },
  { label:'Pantalla 14 de 18', title:'Reseñas — Escribir', desc:'Formulario post-evento para que el cliente califique y describa su experiencia de forma detallada.', features:['Selector de estrellas interactivo','Etiquetas de aspectos destacados','Campo de texto libre','Subida de fotos del evento','Etiqueta del tipo de evento','Publicación directa sin moderación'] },
  { label:'Pantalla 15 de 18', title:'Notificaciones', desc:'Centro de alertas del cliente con categorización por fecha: hoy, ayer y esta semana. Soporte de múltiples tipos de alerta.', features:['Reserva confirmada / cancelada','Mensajes nuevos de proveedores','Recordatorios automáticos de evento','Alertas de pago procesado','Solicitudes de calificación','Cupones y ofertas personalizadas'] },
  { label:'Pantalla 16 de 18', title:'Favoritos', desc:'Colección personal de proveedores guardados con acceso rápido para reservar. Filtro por categoría de música.', features:['Grid de 2 columnas con fotos','Filtros por género musical','Botón de eliminar favorito (❤️)','Rating y precio visible','Hint para descubrir más proveedores','Acceso directo a reservar'] },
  { label:'Pantalla 17 de 18', title:'Historial de Reservas', desc:'Registro completo de todas las reservas del usuario con estados diferenciados, acciones contextuales y detalles del evento.', features:['Tabs: Todas / Activas / Pasadas','4 estados: Confirmada / Completada / Cancelada / Pendiente','Fecha, hora, tipo de evento y total','Botón Contactar desde historial','Botón Calificar para eventos pasados','Info de reembolso en canceladas'] },
  { label:'Pantalla 18 de 18', title:'Carrito de Reservas', desc:'Pantalla para agrupar múltiples servicios musicales en una sola compra. Incluye cupones de descuento y resumen detallado.', features:['Agregar varios proveedores','Ajuste de duración con +/−','Código de descuento / cupón','Resumen con IVA y cargos','Precio total visible en el botón CTA','Eliminar ítem individual del carrito'] }
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
  if (next >= 0 && next < 8) goTo(next);
}

function updatePanel() {
  const s = screens[current];
  document.getElementById('infoLabel').textContent = s.label;
  document.getElementById('infoTitle').textContent = s.title;
  document.getElementById('infoDesc').textContent = s.desc;
  const fl = document.getElementById('infoFeatures');
  fl.innerHTML = s.features.map(f => `<li>${f}</li>`).join('');
  document.getElementById('counterCurrent').textContent = 11 + current;
  document.getElementById('prevBtn').disabled = current === 0;
  document.getElementById('nextBtn').disabled = current === 7;
}

function setStars(n) {
  const stars = document.querySelectorAll('.star-interactive');
  const labels = ['Muy malo','Malo','Regular','Muy bueno','Excelente'];
  stars.forEach((s, i) => { s.textContent = i < n ? '★' : '☆'; s.style.color = i < n ? 'var(--gold)' : 'var(--text-muted)'; });
  document.getElementById('starLabel').textContent = labels[n-1];
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
