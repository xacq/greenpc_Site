<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>GeoVerde — Plataforma de Gestión Ambiental</title>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet"/>
<style>
  :root {
    --forest:    #1e4620;
    --forest-mid:#2c6330;
    --moss:      #4a7c3f;
    --sage:      #7aab6e;
    --lime:      #a8d08d;
    --cream:     #f2f7ee;
    --sand:      #e8ede4;
    --dark:      #0f1f10;
    --ink:       #1a2e1b;
    --gray:      #5a6b5a;
    --gray-lt:   #b0bfae;
    --white:     #ffffff;
    --amber:     #d4870a;
    --amber-lt:  #fdf3e0;
    --red:       #c0392b;
    --red-lt:    #fdecea;
    --teal:      #0a7c7c;
    --teal-lt:   #e0f4f4;
    --sidebar-w: 240px;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'Outfit', sans-serif;
    background: var(--cream);
    color: var(--ink);
    display: flex;
    height: 100vh;
    overflow: hidden;
  }

  /* ─── SIDEBAR ─── */
  .sidebar {
    width: var(--sidebar-w);
    background: var(--dark);
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    overflow-y: auto;
  }

  .sidebar-logo {
    padding: 22px 20px 18px;
    border-bottom: 1px solid rgba(255,255,255,0.07);
  }
  .sidebar-logo .brand {
    display: flex; align-items: center; gap: 10px;
  }
  .logo-icon {
    width: 34px; height: 34px;
    background: var(--moss);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
  }
  .brand-name {
    font-size: 18px; font-weight: 700; color: var(--white);
    letter-spacing: -0.3px;
  }
  .brand-sub {
    font-size: 10px; color: var(--gray-lt); margin-top: 1px;
    letter-spacing: 1.2px; text-transform: uppercase;
  }

  /* project selector */
  .project-selector {
    margin: 14px 16px;
    background: rgba(255,255,255,0.07);
    border-radius: 8px;
    padding: 10px 12px;
    cursor: pointer;
    transition: background 0.2s;
  }
  .project-selector:hover { background: rgba(255,255,255,0.11); }
  .proj-label { font-size: 9px; color: var(--gray-lt); letter-spacing: 1px; text-transform: uppercase; }
  .proj-name  { font-size: 12.5px; font-weight: 600; color: var(--white); margin-top: 3px; }
  .proj-sub   { font-size: 10.5px; color: var(--sage); }

  /* nav */
  .nav-section { padding: 10px 0; }
  .nav-label {
    font-size: 9px; color: var(--gray-lt);
    letter-spacing: 1.4px; text-transform: uppercase;
    padding: 6px 20px 4px;
  }
  .nav-item {
    display: flex; align-items: center; gap: 10px;
    padding: 9px 20px;
    cursor: pointer;
    transition: background 0.15s;
    border-radius: 0;
    position: relative;
    font-size: 13px;
    color: var(--gray-lt);
    font-weight: 400;
  }
  .nav-item .icon { width: 18px; text-align: center; font-size: 15px; flex-shrink: 0; }
  .nav-item:hover { background: rgba(255,255,255,0.06); color: var(--white); }
  .nav-item.active {
    background: rgba(74,124,63,0.25);
    color: var(--white); font-weight: 600;
    border-left: 3px solid var(--sage);
    padding-left: 17px;
  }
  .nav-badge {
    margin-left: auto;
    background: var(--red);
    color: #fff;
    font-size: 9px;
    font-weight: 700;
    padding: 2px 6px;
    border-radius: 20px;
    min-width: 18px;
    text-align: center;
  }
  .nav-badge.warn { background: var(--amber); }
  .nav-badge.green { background: var(--moss); }

  .sidebar-footer {
    margin-top: auto;
    border-top: 1px solid rgba(255,255,255,0.07);
    padding: 14px 16px;
    display: flex; align-items: center; gap: 10px;
  }
  .avatar {
    width: 32px; height: 32px; border-radius: 50%;
    background: var(--moss);
    display: flex; align-items: center; justify-content: center;
    font-size: 13px; font-weight: 700; color: #fff; flex-shrink: 0;
  }
  .user-name  { font-size: 12px; font-weight: 600; color: var(--white); }
  .user-role  { font-size: 10px; color: var(--gray-lt); }

  /* ─── MAIN ─── */
  .main { flex: 1; display: flex; flex-direction: column; overflow: hidden; }

  .topbar {
    height: 58px;
    background: var(--white);
    border-bottom: 1px solid var(--sand);
    display: flex; align-items: center;
    padding: 0 28px;
    gap: 14px;
    flex-shrink: 0;
  }
  .topbar-title { font-size: 16px; font-weight: 700; color: var(--ink); flex: 1; }
  .topbar-title span { color: var(--moss); }

  .topbar-actions { display: flex; align-items: center; gap: 10px; }
  .btn {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 7px 16px; border-radius: 7px;
    font-family: 'Outfit', sans-serif; font-size: 12.5px; font-weight: 600;
    cursor: pointer; border: none; transition: all 0.15s;
  }
  .btn-primary { background: var(--moss); color: #fff; }
  .btn-primary:hover { background: var(--forest-mid); }
  .btn-outline { background: transparent; color: var(--gray); border: 1.5px solid var(--sand); }
  .btn-outline:hover { border-color: var(--sage); color: var(--forest); }

  .topbar-search {
    background: var(--sand);
    border: 1.5px solid transparent;
    border-radius: 7px;
    padding: 7px 14px;
    font-family: 'Outfit', sans-serif; font-size: 12.5px; color: var(--gray);
    width: 220px; outline: none; transition: border 0.15s;
  }
  .topbar-search:focus { border-color: var(--sage); background: #fff; }

  .notif-btn {
    width: 36px; height: 36px; border-radius: 8px;
    background: var(--amber-lt); border: none; cursor: pointer;
    font-size: 16px; display: flex; align-items: center; justify-content: center;
    position: relative;
  }
  .notif-dot {
    position: absolute; top: 6px; right: 6px;
    width: 8px; height: 8px; border-radius: 50%;
    background: var(--red); border: 2px solid var(--white);
  }

  /* ─── CONTENT ─── */
  .content {
    flex: 1; overflow-y: auto;
    padding: 24px 28px;
    display: none;
  }
  .content.active { display: block; }

  /* ─── SECTION HEADER ─── */
  .section-header {
    display: flex; align-items: flex-start; justify-content: space-between;
    margin-bottom: 22px;
  }
  .section-title { font-size: 22px; font-weight: 700; color: var(--ink); }
  .section-sub { font-size: 13px; color: var(--gray); margin-top: 3px; }
  .breadcrumb { font-size: 11px; color: var(--gray-lt); margin-bottom: 4px; }
  .breadcrumb span { color: var(--moss); font-weight: 600; }

  /* ─── KPI CARDS ─── */
  .kpi-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
    margin-bottom: 22px;
  }
  .kpi-card {
    background: var(--white);
    border-radius: 12px;
    padding: 18px 20px;
    border: 1.5px solid var(--sand);
    position: relative; overflow: hidden;
  }
  .kpi-card::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 3px;
    background: var(--moss);
  }
  .kpi-card.warn::before { background: var(--amber); }
  .kpi-card.danger::before { background: var(--red); }
  .kpi-card.teal::before { background: var(--teal); }
  .kpi-label { font-size: 11px; color: var(--gray); font-weight: 500; text-transform: uppercase; letter-spacing: 0.6px; }
  .kpi-value { font-size: 32px; font-weight: 800; color: var(--ink); margin: 6px 0 4px; line-height: 1; }
  .kpi-value.moss { color: var(--moss); }
  .kpi-value.amber { color: var(--amber); }
  .kpi-value.red { color: var(--red); }
  .kpi-value.teal { color: var(--teal); }
  .kpi-meta { font-size: 11.5px; color: var(--gray); }
  .kpi-icon {
    position: absolute; right: 16px; top: 50%;
    transform: translateY(-50%);
    font-size: 32px; opacity: 0.08;
  }

  /* ─── PROGRESS BAR ─── */
  .progress-wrap { margin-top: 8px; }
  .progress-bar {
    height: 5px; background: var(--sand); border-radius: 99px; overflow: hidden;
  }
  .progress-fill {
    height: 100%; border-radius: 99px; background: var(--moss);
    transition: width 0.6s ease;
  }
  .progress-fill.amber { background: var(--amber); }
  .progress-fill.red   { background: var(--red); }
  .progress-fill.teal  { background: var(--teal); }

  /* ─── GRID 2/3 ─── */
  .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 18px; }
  .grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; margin-bottom: 18px; }
  .grid-main { display: grid; grid-template-columns: 2fr 1fr; gap: 16px; margin-bottom: 18px; }

  /* ─── CARD ─── */
  .card {
    background: var(--white);
    border-radius: 12px;
    border: 1.5px solid var(--sand);
    overflow: hidden;
  }
  .card-header {
    padding: 16px 20px 12px;
    display: flex; align-items: center; justify-content: space-between;
    border-bottom: 1px solid var(--sand);
  }
  .card-title { font-size: 14px; font-weight: 700; color: var(--ink); }
  .card-body { padding: 16px 20px; }
  .card-action {
    font-size: 11.5px; color: var(--moss); font-weight: 600; cursor: pointer;
    text-decoration: none;
  }

  /* ─── MODULE GRID (dashboard) ─── */
  .module-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
    margin-bottom: 18px;
  }
  .module-card {
    background: var(--white);
    border-radius: 12px;
    border: 1.5px solid var(--sand);
    padding: 18px 20px;
    cursor: pointer;
    transition: all 0.2s;
    position: relative; overflow: hidden;
  }
  .module-card:hover {
    border-color: var(--sage);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(30,70,32,0.1);
  }
  .module-card-icon {
    width: 42px; height: 42px; border-radius: 10px;
    background: var(--forest);
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; margin-bottom: 12px;
  }
  .module-card-icon.moss-bg  { background: var(--moss); }
  .module-card-icon.amber-bg { background: var(--amber); }
  .module-card-icon.teal-bg  { background: var(--teal); }
  .module-card-icon.red-bg   { background: var(--red); }
  .module-card-name { font-size: 13.5px; font-weight: 700; color: var(--ink); margin-bottom: 4px; }
  .module-card-desc { font-size: 11.5px; color: var(--gray); line-height: 1.45; }
  .module-card-pct  {
    position: absolute; top: 16px; right: 16px;
    font-size: 18px; font-weight: 800; color: var(--moss);
  }
  .module-card-pct.warn { color: var(--amber); }
  .module-card-pct.danger { color: var(--red); }

  /* ─── TABLE ─── */
  .table-wrap { overflow-x: auto; }
  table { width: 100%; border-collapse: collapse; }
  thead th {
    text-align: left; padding: 10px 14px;
    font-size: 11px; font-weight: 600; color: var(--gray);
    text-transform: uppercase; letter-spacing: 0.6px;
    background: var(--cream); border-bottom: 1px solid var(--sand);
  }
  tbody tr {
    border-bottom: 1px solid var(--sand);
    transition: background 0.1s;
  }
  tbody tr:last-child { border-bottom: none; }
  tbody tr:hover { background: var(--cream); }
  tbody td { padding: 11px 14px; font-size: 13px; color: var(--ink); }
  .td-muted { color: var(--gray); font-size: 12px; }

  /* ─── BADGE ─── */
  .badge {
    display: inline-flex; align-items: center; gap: 4px;
    padding: 3px 9px; border-radius: 99px;
    font-size: 11px; font-weight: 600;
  }
  .badge-green  { background: #e8f5e9; color: #2e7d32; }
  .badge-amber  { background: var(--amber-lt); color: #7a4d00; }
  .badge-red    { background: var(--red-lt); color: #911; }
  .badge-gray   { background: var(--sand); color: var(--gray); }
  .badge-teal   { background: var(--teal-lt); color: var(--teal); }
  .badge-forest { background: #e8f5e3; color: var(--forest-mid); }
  .badge::before { content: '●'; font-size: 8px; }

  /* ─── ALERT ITEMS ─── */
  .alert-item {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 12px 0;
    border-bottom: 1px solid var(--sand);
  }
  .alert-item:last-child { border-bottom: none; }
  .alert-dot {
    width: 10px; height: 10px; border-radius: 50%;
    flex-shrink: 0; margin-top: 4px;
  }
  .dot-red    { background: var(--red); }
  .dot-amber  { background: var(--amber); }
  .dot-green  { background: var(--moss); }
  .dot-teal   { background: var(--teal); }
  .alert-text { font-size: 12.5px; color: var(--ink); font-weight: 500; line-height: 1.4; }
  .alert-meta { font-size: 11px; color: var(--gray-lt); margin-top: 2px; }

  /* ─── MINI CHART (SVG bars) ─── */
  .mini-chart { display: flex; align-items: flex-end; gap: 5px; height: 50px; }
  .bar {
    flex: 1; background: var(--sage); border-radius: 3px 3px 0 0;
    opacity: 0.6; transition: opacity 0.15s;
  }
  .bar:hover { opacity: 1; }
  .bar.active { background: var(--moss); opacity: 1; }

  /* ─── DONUT CHART ─── */
  .donut-wrap { display: flex; align-items: center; gap: 18px; }
  .donut-svg { flex-shrink: 0; }
  .donut-legend { font-size: 12px; }
  .legend-item { display: flex; align-items: center; gap: 7px; margin-bottom: 7px; }
  .legend-dot { width: 10px; height: 10px; border-radius: 2px; flex-shrink: 0; }

  /* ─── SEGUIMIENTO specifics ─── */
  .tabs {
    display: flex; gap: 4px;
    background: var(--sand); padding: 4px; border-radius: 9px;
    margin-bottom: 18px; width: fit-content;
  }
  .tab {
    padding: 7px 16px; border-radius: 7px;
    font-size: 12.5px; font-weight: 500; cursor: pointer;
    color: var(--gray); transition: all 0.15s;
  }
  .tab.active { background: var(--white); color: var(--ink); font-weight: 700; box-shadow: 0 1px 4px rgba(0,0,0,0.1); }

  /* ─── OBLIGACION ROW ─── */
  .oblig-row {
    display: flex; align-items: center; gap: 14px;
    padding: 13px 16px;
    border-radius: 9px;
    border: 1.5px solid var(--sand);
    background: var(--white);
    margin-bottom: 8px;
    cursor: pointer;
    transition: border-color 0.15s;
  }
  .oblig-row:hover { border-color: var(--sage); }
  .oblig-num {
    width: 28px; height: 28px; border-radius: 6px;
    background: var(--forest);
    color: #fff; font-size: 12px; font-weight: 700;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .oblig-title { font-size: 13px; font-weight: 600; color: var(--ink); flex: 1; }
  .oblig-sub   { font-size: 11px; color: var(--gray); margin-top: 2px; }
  .oblig-pct   { font-size: 14px; font-weight: 700; width: 48px; text-align: right; }

  /* ─── CALENDAR ─── */
  .cal-grid {
    display: grid; grid-template-columns: repeat(7, 1fr);
    gap: 4px;
  }
  .cal-day-label {
    text-align: center; font-size: 10px; font-weight: 600;
    color: var(--gray); padding: 6px 0; letter-spacing: 0.5px;
  }
  .cal-day {
    aspect-ratio: 1; border-radius: 7px;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    font-size: 12px; color: var(--ink); cursor: pointer;
    transition: background 0.1s; position: relative;
  }
  .cal-day:hover { background: var(--sand); }
  .cal-day.today { background: var(--forest); color: #fff; font-weight: 700; }
  .cal-day.has-event::after {
    content: ''; position: absolute; bottom: 3px;
    width: 5px; height: 5px; border-radius: 50%; background: var(--moss);
  }
  .cal-day.today.has-event::after { background: var(--lime); }
  .cal-day.has-event-warn::after { background: var(--amber); }
  .cal-day.has-event-red::after  { background: var(--red); }
  .cal-day.other { color: var(--gray-lt); }
  .cal-day.empty { }

  /* ─── MONITOREO CARDS ─── */
  .monitor-card {
    background: var(--white);
    border: 1.5px solid var(--sand);
    border-radius: 12px; padding: 16px 18px;
  }
  .monitor-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px; }
  .monitor-title { font-size: 13.5px; font-weight: 700; }
  .monitor-val { font-size: 26px; font-weight: 800; }
  .monitor-unit { font-size: 12px; color: var(--gray); }
  .monitor-range { font-size: 11px; color: var(--gray); margin-top: 2px; }

  /* ─── RESIDUOS ─── */
  .residuo-row {
    display: grid; grid-template-columns: 32px 1fr 90px 90px 100px;
    align-items: center; gap: 10px;
    padding: 11px 14px;
  }

  /* ─── INFORMES ─── */
  .informe-card {
    background: var(--white);
    border: 1.5px solid var(--sand);
    border-radius: 12px; padding: 18px 20px;
    display: flex; align-items: center; gap: 16px;
    cursor: pointer; transition: border-color 0.15s;
  }
  .informe-card:hover { border-color: var(--sage); }
  .informe-icon {
    width: 44px; height: 44px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 22px; flex-shrink: 0;
  }
  .informe-title { font-size: 13.5px; font-weight: 700; color: var(--ink); }
  .informe-sub   { font-size: 11.5px; color: var(--gray); margin-top: 3px; }

  /* ─── SCROLLBAR ─── */
  ::-webkit-scrollbar { width: 5px; height: 5px; }
  ::-webkit-scrollbar-track { background: transparent; }
  ::-webkit-scrollbar-thumb { background: var(--sand); border-radius: 99px; }
  ::-webkit-scrollbar-thumb:hover { background: var(--gray-lt); }

  /* ─── ANIMATIONS ─── */
  @keyframes fadeSlide {
    from { opacity: 0; transform: translateY(12px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .content.active { animation: fadeSlide 0.25s ease; }

  /* ─── CHIP ─── */
  .chip {
    display: inline-block; padding: 3px 10px;
    border-radius: 99px; font-size: 11px; font-weight: 600;
    background: var(--sand); color: var(--gray);
  }

  /* ─── EMPTY STATE ─── */
  .empty-state {
    text-align: center; padding: 40px 20px;
    color: var(--gray-lt); font-size: 13px;
  }
  .empty-state .es-icon { font-size: 36px; margin-bottom: 10px; }

  /* divider */
  .divider { border: none; border-top: 1px solid var(--sand); margin: 16px 0; }

  .gap-top { margin-top: 18px; }
</style>
</head>
<body>

<!-- ═══════════════════════════════════════════════════
     SIDEBAR
══════════════════════════════════════════════════════ -->
<aside class="sidebar">
  <div class="sidebar-logo">
    <div class="brand">
      <div class="logo-icon">🌿</div>
      <div>
        <div class="brand-name">GeoVerde</div>
        <div class="brand-sub">Gestión Ambiental</div>
      </div>
    </div>
  </div>

  <div class="project-selector">
    <div class="proj-label">Proyecto activo</div>
    <div class="proj-name">Ambacar — Sucursal Norte</div>
    <div class="proj-sub">📍 Quito · Cod. AMB-2024-041</div>
  </div>

  <div class="nav-section">
    <div class="nav-label">Principal</div>
    <div class="nav-item active" onclick="showSection('dashboard')">
      <span class="icon">🏠</span> Dashboard
    </div>
  </div>

  <div class="nav-section">
    <div class="nav-label">Módulos</div>
    <div class="nav-item" onclick="showSection('seguimiento')">
      <span class="icon">✅</span> Seguimiento Ambiental
      <span class="nav-badge warn">3</span>
    </div>
    <div class="nav-item" onclick="showSection('auditoria')">
      <span class="icon">🔍</span> Auditoría e Informes
    </div>
    <div class="nav-item" onclick="showSection('calendario')">
      <span class="icon">📅</span> Calendario
      <span class="nav-badge">2</span>
    </div>
    <div class="nav-item" onclick="showSection('monitoreos')">
      <span class="icon">📊</span> Monitoreos Ambientales
    </div>
    <div class="nav-item" onclick="showSection('residuos')">
      <span class="icon">♻️</span> Residuos Sólidos
    </div>
    <div class="nav-item" onclick="showSection('informes')">
      <span class="icon">📄</span> Informes Ambientales
      <span class="nav-badge green">1</span>
    </div>
  </div>

  <div class="nav-section">
    <div class="nav-label">Sistema</div>
    <div class="nav-item" onclick="showSection('empresas')">
      <span class="icon">🏢</span> Empresas &amp; Proyectos
    </div>
    <div class="nav-item">
      <span class="icon">⚙️</span> Configuración
    </div>
  </div>

  <div class="sidebar-footer">
    <div class="avatar">MC</div>
    <div>
      <div class="user-name">María Consultor</div>
      <div class="user-role">Coordinadora Ambiental</div>
    </div>
  </div>
</aside>

<!-- ═══════════════════════════════════════════════════
     MAIN
══════════════════════════════════════════════════════ -->
<div class="main">
  <div class="topbar">
    <div class="topbar-title" id="topbar-title">
      Dashboard <span>/ General</span>
    </div>
    <div class="topbar-actions">
      <input class="topbar-search" placeholder="🔍  Buscar obligaciones, módulos..."/>
      <button class="notif-btn">🔔<div class="notif-dot"></div></button>
      <button class="btn btn-outline">⬇ Exportar</button>
      <button class="btn btn-primary">+ Nueva evidencia</button>
    </div>
  </div>

  <!-- ════════ DASHBOARD ════════ -->
  <div class="content active" id="sec-dashboard">
    <div class="section-header">
      <div>
        <div class="breadcrumb">Ambacar · <span>Sucursal Norte</span></div>
        <div class="section-title">Resumen de cumplimiento</div>
        <div class="section-sub">Actualizado: 06 Mar 2026 · Período: Ene–Mar 2026</div>
      </div>
      <div style="display:flex;gap:8px;">
        <button class="btn btn-outline">📋 Ver auditoría</button>
        <button class="btn btn-primary">📤 Generar informe</button>
      </div>
    </div>

    <!-- KPIs -->
    <div class="kpi-grid">
      <div class="kpi-card">
        <div class="kpi-label">Cumplimiento global</div>
        <div class="kpi-value moss">78%</div>
        <div class="progress-wrap">
          <div class="progress-bar"><div class="progress-fill" style="width:78%"></div></div>
        </div>
        <div class="kpi-meta" style="margin-top:6px">↑ 4% respecto al mes anterior</div>
        <div class="kpi-icon">🌿</div>
      </div>
      <div class="kpi-card warn">
        <div class="kpi-label">Obligaciones pendientes</div>
        <div class="kpi-value amber">7</div>
        <div class="kpi-meta">3 vencen en menos de 15 días</div>
        <div class="kpi-icon">⏳</div>
      </div>
      <div class="kpi-card danger">
        <div class="kpi-label">Alertas activas</div>
        <div class="kpi-value red">3</div>
        <div class="kpi-meta">Requieren acción inmediata</div>
        <div class="kpi-icon">🚨</div>
      </div>
      <div class="kpi-card teal">
        <div class="kpi-label">Evidencias cargadas</div>
        <div class="kpi-value teal">142</div>
        <div class="kpi-meta">Mes actual: 18 nuevas</div>
        <div class="kpi-icon">📁</div>
      </div>
    </div>

    <!-- Modules grid -->
    <div class="section-header" style="margin-bottom:14px">
      <div class="card-title" style="font-size:15px">Estado por módulo</div>
      <a class="card-action">Ver detalles →</a>
    </div>
    <div class="module-grid">
      <div class="module-card" onclick="showSection('seguimiento')">
        <div class="module-card-pct">82%</div>
        <div class="module-card-icon">✅</div>
        <div class="module-card-name">Seguimiento Ambiental</div>
        <div class="module-card-desc">Plan de Manejo, Normativa, Licencias, Obligaciones</div>
        <div class="progress-wrap" style="margin-top:10px">
          <div class="progress-bar"><div class="progress-fill" style="width:82%"></div></div>
        </div>
      </div>
      <div class="module-card" onclick="showSection('auditoria')">
        <div class="module-card-pct">100%</div>
        <div class="module-card-icon moss-bg">🔍</div>
        <div class="module-card-name">Auditoría e Informes</div>
        <div class="module-card-desc">Informe anual enviado · Próxima auditoría: 2027</div>
        <div class="progress-wrap" style="margin-top:10px">
          <div class="progress-bar"><div class="progress-fill" style="width:100%"></div></div>
        </div>
      </div>
      <div class="module-card" onclick="showSection('calendario')">
        <div class="module-card-pct warn">65%</div>
        <div class="module-card-icon amber-bg">📅</div>
        <div class="module-card-name">Calendario de Actividades</div>
        <div class="module-card-desc">2 actividades próximas — monitoreo ruido y agua</div>
        <div class="progress-wrap" style="margin-top:10px">
          <div class="progress-bar"><div class="progress-fill amber" style="width:65%"></div></div>
        </div>
      </div>
      <div class="module-card" onclick="showSection('monitoreos')">
        <div class="module-card-pct">91%</div>
        <div class="module-card-icon teal-bg">📊</div>
        <div class="module-card-name">Monitoreos Ambientales</div>
        <div class="module-card-desc">Grundtech · Agua, Suelo, Aire, Ruido, Biótico</div>
        <div class="progress-wrap" style="margin-top:10px">
          <div class="progress-bar"><div class="progress-fill teal" style="width:91%"></div></div>
        </div>
      </div>
      <div class="module-card" onclick="showSection('residuos')">
        <div class="module-card-pct danger">54%</div>
        <div class="module-card-icon red-bg">♻️</div>
        <div class="module-card-name">Residuos Sólidos</div>
        <div class="module-card-desc">Experdata · Pendiente declaración trim. 1</div>
        <div class="progress-wrap" style="margin-top:10px">
          <div class="progress-bar"><div class="progress-fill red" style="width:54%"></div></div>
        </div>
      </div>
      <div class="module-card" onclick="showSection('informes')">
        <div class="module-card-pct">70%</div>
        <div class="module-card-icon">📄</div>
        <div class="module-card-name">Informes Ambientales</div>
        <div class="module-card-desc">Informe anual en borrador · Declaración desechos pendiente</div>
        <div class="progress-wrap" style="margin-top:10px">
          <div class="progress-bar"><div class="progress-fill" style="width:70%"></div></div>
        </div>
      </div>
    </div>

    <!-- Bottom row -->
    <div class="grid-main">
      <div class="card">
        <div class="card-header">
          <span class="card-title">Actividad reciente</span>
          <a class="card-action">Ver todo</a>
        </div>
        <div class="card-body" style="padding:0">
          <table>
            <thead><tr>
              <th>Actividad</th><th>Módulo</th><th>Usuario</th><th>Estado</th><th>Fecha</th>
            </tr></thead>
            <tbody>
              <tr>
                <td><b>Carga de evidencia fotográfica</b><br><span class="td-muted">Cubeto tanque #3 — extintores verificados</span></td>
                <td><span class="chip">Seguimiento</span></td>
                <td>J. Pérez</td>
                <td><span class="badge badge-green">Aprobada</span></td>
                <td class="td-muted">Hoy 09:41</td>
              </tr>
              <tr>
                <td><b>Resultado monitoreo de ruido</b><br><span class="td-muted">Grundtech Lab · Punto P-02</span></td>
                <td><span class="chip">Monitoreos</span></td>
                <td>Sistema</td>
                <td><span class="badge badge-teal">Importado</span></td>
                <td class="td-muted">Ayer 16:20</td>
              </tr>
              <tr>
                <td><b>Obligación #12 marcada cumplida</b><br><span class="td-muted">Normativa TULSMA — Capítulo IV</span></td>
                <td><span class="chip">Normativa</span></td>
                <td>M. Consultor</td>
                <td><span class="badge badge-green">Cumplida</span></td>
                <td class="td-muted">04 Mar</td>
              </tr>
              <tr>
                <td><b>Declaración de desechos actualizada</b><br><span class="td-muted">Trim. 4 2025 — gestor TRIVIA S.A.</span></td>
                <td><span class="chip">Residuos</span></td>
                <td>K. Torres</td>
                <td><span class="badge badge-amber">En revisión</span></td>
                <td class="td-muted">02 Mar</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <span class="card-title">🔔 Alertas activas</span>
          <span class="badge badge-red">3 urgentes</span>
        </div>
        <div class="card-body">
          <div class="alert-item">
            <div class="alert-dot dot-red"></div>
            <div>
              <div class="alert-text">Monitoreo de agua vence en 5 días</div>
              <div class="alert-meta">Normativa Art. 87 · TULSMA · Punto R-01</div>
            </div>
          </div>
          <div class="alert-item">
            <div class="alert-dot dot-red"></div>
            <div>
              <div class="alert-text">Declaración de desechos sin entregar</div>
              <div class="alert-meta">Trim. 1 2026 · Vence 15 Mar 2026</div>
            </div>
          </div>
          <div class="alert-item">
            <div class="alert-dot dot-amber"></div>
            <div>
              <div class="alert-text">Informe anual 2025 en borrador</div>
              <div class="alert-meta">Plazo: 31 Mar 2026 — Completado 70%</div>
            </div>
          </div>
          <div class="alert-item">
            <div class="alert-dot dot-amber"></div>
            <div>
              <div class="alert-text">Certificado de gestión vigente por vencer</div>
              <div class="alert-meta">Gestor TRIVIA S.A. · Vence 22 Abr 2026</div>
            </div>
          </div>
          <div class="alert-item">
            <div class="alert-dot dot-green"></div>
            <div>
              <div class="alert-text">Resultados de monitoreo de suelo recibidos</div>
              <div class="alert-meta">Grundtech · Todos los valores en rango</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ════════ SEGUIMIENTO AMBIENTAL ════════ -->
  <div class="content" id="sec-seguimiento">
    <div class="section-header">
      <div>
        <div class="breadcrumb">Módulo 1 · <span>Seguimiento Ambiental</span></div>
        <div class="section-title">Seguimiento Ambiental</div>
        <div class="section-sub">Plan de Manejo · Normativa · Licencias · Obligaciones contractuales</div>
      </div>
      <button class="btn btn-primary">+ Agregar evidencia</button>
    </div>

    <div class="kpi-grid">
      <div class="kpi-card"><div class="kpi-label">Cumplimiento total</div><div class="kpi-value moss">82%</div><div class="progress-wrap"><div class="progress-bar"><div class="progress-fill" style="width:82%"></div></div></div></div>
      <div class="kpi-card warn"><div class="kpi-label">Obligaciones pendientes</div><div class="kpi-value amber">5</div><div class="kpi-meta">De 28 totales</div></div>
      <div class="kpi-card"><div class="kpi-label">Evidencias adjuntadas</div><div class="kpi-value moss">76</div><div class="kpi-meta">Fotografías + PDF</div></div>
      <div class="kpi-card danger"><div class="kpi-label">No conformidades</div><div class="kpi-value red">2</div><div class="kpi-meta">Abiertas con plan de acción</div></div>
    </div>

    <div class="tabs" id="seg-tabs">
      <div class="tab active" onclick="switchTab('seg', 'pma', this)">Plan de Manejo</div>
      <div class="tab" onclick="switchTab('seg', 'norm', this)">Normativa</div>
      <div class="tab" onclick="switchTab('seg', 'lic', this)">Licencias</div>
      <div class="tab" onclick="switchTab('seg', 'oblig', this)">Obligaciones contractuales</div>
    </div>

    <div id="seg-pma">
      <div class="card">
        <div class="card-header">
          <span class="card-title">Plan de Manejo Ambiental — Obligaciones</span>
          <div style="display:flex;gap:8px">
            <button class="btn btn-outline" style="font-size:11px;padding:5px 12px">⬇ Exportar Excel</button>
            <button class="btn btn-primary" style="font-size:11px;padding:5px 12px">+ Agregar</button>
          </div>
        </div>
        <div class="card-body" style="padding:0">
          <table>
            <thead><tr>
              <th>#</th><th>Obligación</th><th>Frecuencia</th><th>Responsable</th><th>% Avance</th><th>Estado</th><th>Acciones</th>
            </tr></thead>
            <tbody>
              <tr><td>PMA-01</td><td><b>Mantenimiento de cunetas y bordillos</b><br><span class="td-muted">Medida PMA-CIV-003 · Área: Civil</span></td><td class="td-muted">Mensual</td><td class="td-muted">J. Pérez</td><td><span style="font-weight:700;color:var(--moss)">100%</span></td><td><span class="badge badge-green">Cumple</span></td><td><a class="card-action">Ver →</a></td></tr>
              <tr><td>PMA-02</td><td><b>Revisión extintores instalaciones</b><br><span class="td-muted">Medida PMA-SEG-001 · Área: Seguridad</span></td><td class="td-muted">Trimestral</td><td class="td-muted">K. Torres</td><td><span style="font-weight:700;color:var(--moss)">100%</span></td><td><span class="badge badge-green">Cumple</span></td><td><a class="card-action">Ver →</a></td></tr>
              <tr><td>PMA-03</td><td><b>Capacitación manejo de sustancias peligrosas</b><br><span class="td-muted">Medida PMA-CAP-002 · Área: RRHH</span></td><td class="td-muted">Semestral</td><td class="td-muted">L. Mora</td><td><span style="font-weight:700;color:var(--amber)">60%</span></td><td><span class="badge badge-amber">En proceso</span></td><td><a class="card-action">Ver →</a></td></tr>
              <tr><td>PMA-04</td><td><b>Inspección de cubetos de contención</b><br><span class="td-muted">Medida PMA-AMB-007 · Área: Ambiental</span></td><td class="td-muted">Mensual</td><td class="td-muted">M. Consultor</td><td><span style="font-weight:700;color:var(--moss)">100%</span></td><td><span class="badge badge-green">Cumple</span></td><td><a class="card-action">Ver →</a></td></tr>
              <tr><td>PMA-05</td><td><b>Registro de generación de residuos</b><br><span class="td-muted">Medida PMA-RES-004 · Área: Residuos</span></td><td class="td-muted">Mensual</td><td class="td-muted">K. Torres</td><td><span style="font-weight:700;color:var(--red)">25%</span></td><td><span class="badge badge-red">Incumple</span></td><td><a class="card-action">Ver →</a></td></tr>
              <tr><td>PMA-06</td><td><b>Mantenimiento de trampa de grasas</b><br><span class="td-muted">Medida PMA-AGU-002 · Área: Agua</span></td><td class="td-muted">Bimestral</td><td class="td-muted">J. Pérez</td><td><span style="font-weight:700;color:var(--amber)">75%</span></td><td><span class="badge badge-amber">En proceso</span></td><td><a class="card-action">Ver →</a></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div id="seg-norm" style="display:none">
      <div class="card">
        <div class="card-header"><span class="card-title">Normativa Ambiental Vigente</span></div>
        <div class="card-body" style="padding:0">
          <table>
            <thead><tr><th>Norma</th><th>Descripción</th><th>Artículo</th><th>Cumplimiento</th><th>Estado</th></tr></thead>
            <tbody>
              <tr><td><b>TULSMA Cap. IV</b></td><td>Gestión de aguas residuales industriales</td><td>Art. 87-92</td><td><span style="font-weight:700;color:var(--moss)">100%</span></td><td><span class="badge badge-green">Cumple</span></td></tr>
              <tr><td><b>TULSMA Cap. VI</b></td><td>Control de emisiones al aire</td><td>Art. 120-131</td><td><span style="font-weight:700;color:var(--amber)">70%</span></td><td><span class="badge badge-amber">En proceso</span></td></tr>
              <tr><td><b>Acuerdo 061 MAE</b></td><td>Reforma al TULSMA — Residuos sólidos</td><td>Art. 55-63</td><td><span style="font-weight:700;color:var(--red)">40%</span></td><td><span class="badge badge-red">Incumple</span></td></tr>
              <tr><td><b>NTE INEN 2266</b></td><td>Transporte de materiales peligrosos</td><td>Sección 4.3</td><td><span style="font-weight:700;color:var(--moss)">100%</span></td><td><span class="badge badge-green">Cumple</span></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div id="seg-lic" style="display:none">
      <div class="grid-2">
        <div class="card"><div class="card-header"><span class="card-title">🏛 Licencia Ambiental</span><span class="badge badge-green">Vigente</span></div><div class="card-body"><div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;font-size:12.5px"><div><div style="color:var(--gray);font-size:11px;margin-bottom:3px">N° de Licencia</div><b>MAE-RA-2021-407182</b></div><div><div style="color:var(--gray);font-size:11px;margin-bottom:3px">Fecha de emisión</div><b>15 Ago 2021</b></div><div><div style="color:var(--gray);font-size:11px;margin-bottom:3px">Fecha de vencimiento</div><b>15 Ago 2026</b></div><div><div style="color:var(--gray);font-size:11px;margin-bottom:3px">Categoría</div><b>II — Mediano impacto</b></div></div><hr class="divider"/><div style="font-size:12px;color:var(--gray)">📎 <a style="color:var(--moss);font-weight:600">Licencia_AMB_2021.pdf</a></div></div></div>
        <div class="card"><div class="card-header"><span class="card-title">📋 Registro SUIA</span><span class="badge badge-green">Activo</span></div><div class="card-body"><div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;font-size:12.5px"><div><div style="color:var(--gray);font-size:11px;margin-bottom:3px">Código SUIA</div><b>SUIA-2021-00847</b></div><div><div style="color:var(--gray);font-size:11px;margin-bottom:3px">Actividad</div><b>Concesionario automotriz</b></div><div><div style="color:var(--gray);font-size:11px;margin-bottom:3px">Última actualización</div><b>12 Ene 2026</b></div><div><div style="color:var(--gray);font-size:11px;margin-bottom:3px">Responsable legal</div><b>Carlos Andrade V.</b></div></div></div></div>
      </div>
    </div>

    <div id="seg-oblig" style="display:none">
      <div class="card"><div class="card-header"><span class="card-title">Obligaciones Contractuales</span></div><div class="card-body" style="padding:12px 16px">
        <div class="oblig-row"><div class="oblig-num">1</div><div><div class="oblig-title">Reporte mensual de cumplimiento a la empresa principal</div><div class="oblig-sub">Cláusula 8.3 del contrato de concesión · Fecha: último día hábil del mes</div></div><span class="badge badge-green" style="flex-shrink:0">Cumple</span><div class="oblig-pct" style="color:var(--moss)">100%</div></div>
        <div class="oblig-row"><div class="oblig-num">2</div><div><div class="oblig-title">Certificado de gestión ambiental vigente</div><div class="oblig-sub">Cláusula 12.1 · Renovación anual ante MAE</div></div><span class="badge badge-amber" style="flex-shrink:0">Pendiente</span><div class="oblig-pct" style="color:var(--amber)">75%</div></div>
        <div class="oblig-row"><div class="oblig-num">3</div><div><div class="oblig-title">Plan de contingencia ambiental actualizado</div><div class="oblig-sub">Cláusula 15.2 · Revisión semestral requerida</div></div><span class="badge badge-green" style="flex-shrink:0">Cumple</span><div class="oblig-pct" style="color:var(--moss)">100%</div></div>
      </div></div>
    </div>
  </div>

  <!-- ════════ AUDITORÍA ════════ -->
  <div class="content" id="sec-auditoria">
    <div class="section-header">
      <div>
        <div class="breadcrumb">Módulo 2 · <span>Auditoría e Informes de Cumplimiento</span></div>
        <div class="section-title">Auditoría e Informes de Cumplimiento</div>
        <div class="section-sub">Informe anual · Auditoría trienal · Exportación de matrices</div>
      </div>
      <button class="btn btn-primary">📤 Generar matriz Excel</button>
    </div>
    <div class="kpi-grid">
      <div class="kpi-card"><div class="kpi-label">Informe anual</div><div class="kpi-value moss">2025</div><div class="kpi-meta">Entregado al MAE — Abr 2025</div></div>
      <div class="kpi-card"><div class="kpi-label">Próxima auditoría</div><div class="kpi-value amber" style="font-size:22px;margin-top:8px">Mar 2027</div><div class="kpi-meta">Auditoría ambiental trienal</div></div>
      <div class="kpi-card"><div class="kpi-label">Hallazgos 2025</div><div class="kpi-value moss">2</div><div class="kpi-meta">Cerrados: 2 · Abiertos: 0</div></div>
      <div class="kpi-card teal"><div class="kpi-label">Documentos generados</div><div class="kpi-value teal">8</div><div class="kpi-meta">Informes + matrices descargables</div></div>
    </div>
    <div class="grid-2">
      <div class="card">
        <div class="card-header"><span class="card-title">Historial de informes</span></div>
        <div class="card-body" style="padding:0">
          <table>
            <thead><tr><th>Período</th><th>Tipo</th><th>Estado</th><th>Fecha entrega</th><th>Archivo</th></tr></thead>
            <tbody>
              <tr><td><b>2025</b></td><td>Informe Ambiental Anual</td><td><span class="badge badge-green">Aprobado</span></td><td>15 Abr 2025</td><td><a class="card-action">📄 Descargar</a></td></tr>
              <tr><td><b>2024</b></td><td>Informe Ambiental Anual</td><td><span class="badge badge-green">Aprobado</span></td><td>12 Abr 2024</td><td><a class="card-action">📄 Descargar</a></td></tr>
              <tr><td><b>2024</b></td><td>Auditoría Ambiental</td><td><span class="badge badge-green">Aprobado</span></td><td>20 Sep 2024</td><td><a class="card-action">📄 Descargar</a></td></tr>
              <tr><td><b>2023</b></td><td>Informe Ambiental Anual</td><td><span class="badge badge-green">Aprobado</span></td><td>08 Abr 2023</td><td><a class="card-action">📄 Descargar</a></td></tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header"><span class="card-title">Informe 2026 — En preparación</span><span class="badge badge-amber">70% listo</span></div>
        <div class="card-body">
          <div class="progress-bar" style="height:8px;margin-bottom:16px"><div class="progress-fill amber" style="width:70%"></div></div>
          <div class="oblig-row" style="border-radius:7px;padding:10px 12px;margin-bottom:6px"><div class="oblig-num" style="background:var(--moss)">✓</div><div><div class="oblig-title">Sección 1: Datos generales del proyecto</div></div><span class="badge badge-green">Completo</span></div>
          <div class="oblig-row" style="border-radius:7px;padding:10px 12px;margin-bottom:6px"><div class="oblig-num" style="background:var(--moss)">✓</div><div><div class="oblig-title">Sección 2: Resultados de monitoreos</div></div><span class="badge badge-green">Completo</span></div>
          <div class="oblig-row" style="border-radius:7px;padding:10px 12px;margin-bottom:6px"><div class="oblig-num" style="background:var(--amber)">!</div><div><div class="oblig-title">Sección 3: Gestión de residuos sólidos</div></div><span class="badge badge-amber">En proceso</span></div>
          <div class="oblig-row" style="border-radius:7px;padding:10px 12px"><div class="oblig-num" style="background:var(--gray)">—</div><div><div class="oblig-title">Sección 4: Plan de acción correctivo</div></div><span class="badge badge-gray">Pendiente</span></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ════════ CALENDARIO ════════ -->
  <div class="content" id="sec-calendario">
    <div class="section-header">
      <div>
        <div class="breadcrumb">Módulo 3 · <span>Calendario de Actividades</span></div>
        <div class="section-title">Calendario de Actividades Ambientales</div>
        <div class="section-sub">Monitoreos · Auditorías · Informes · Recordatorios automáticos</div>
      </div>
      <button class="btn btn-primary">+ Programar actividad</button>
    </div>
    <div class="grid-main">
      <div class="card">
        <div class="card-header">
          <span class="card-title">Marzo 2026</span>
          <div style="display:flex;gap:6px">
            <button class="btn btn-outline" style="font-size:11px;padding:5px 10px">◀ Feb</button>
            <button class="btn btn-outline" style="font-size:11px;padding:5px 10px">Abr ▶</button>
          </div>
        </div>
        <div class="card-body">
          <div class="cal-grid">
            <div class="cal-day-label">LUN</div><div class="cal-day-label">MAR</div><div class="cal-day-label">MIÉ</div><div class="cal-day-label">JUE</div><div class="cal-day-label">VIE</div><div class="cal-day-label">SÁB</div><div class="cal-day-label">DOM</div>
            <div class="cal-day other">23</div><div class="cal-day other">24</div><div class="cal-day other">25</div><div class="cal-day other">26</div><div class="cal-day other">27</div><div class="cal-day other">28</div><div class="cal-day">1</div>
            <div class="cal-day">2</div><div class="cal-day">3</div><div class="cal-day">4</div><div class="cal-day">5</div>
            <div class="cal-day today has-event">6</div>
            <div class="cal-day">7</div><div class="cal-day">8</div>
            <div class="cal-day">9</div><div class="cal-day">10</div>
            <div class="cal-day has-event-red">11</div>
            <div class="cal-day has-event-red">12</div>
            <div class="cal-day has-event-warn">13</div>
            <div class="cal-day">14</div><div class="cal-day">15</div>
            <div class="cal-day">16</div><div class="cal-day">17</div><div class="cal-day">18</div><div class="cal-day">19</div>
            <div class="cal-day has-event">20</div>
            <div class="cal-day">21</div><div class="cal-day">22</div>
            <div class="cal-day">23</div><div class="cal-day">24</div><div class="cal-day">25</div><div class="cal-day">26</div>
            <div class="cal-day has-event-warn">27</div>
            <div class="cal-day">28</div><div class="cal-day">29</div>
            <div class="cal-day">30</div><div class="cal-day">31</div>
            <div class="cal-day other">1</div><div class="cal-day other">2</div><div class="cal-day other">3</div><div class="cal-day other">4</div><div class="cal-day other">5</div>
          </div>
          <hr class="divider"/>
          <div style="display:flex;gap:16px;font-size:11.5px">
            <span>🔴 Vencimiento</span>
            <span>🟡 Programado</span>
            <span>🟢 Completado</span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header"><span class="card-title">Próximas actividades</span></div>
        <div class="card-body">
          <div class="alert-item">
            <div class="alert-dot dot-red"></div>
            <div>
              <div class="alert-text">Monitoreo de agua — Punto R-01</div>
              <div class="alert-meta">Mar 11 · Grundtech · TULSMA Art. 87</div>
            </div>
          </div>
          <div class="alert-item">
            <div class="alert-dot dot-red"></div>
            <div>
              <div class="alert-text">Declaración desechos trim. 1 2026</div>
              <div class="alert-meta">Mar 15 · Acuerdo 061 · Art. 55</div>
            </div>
          </div>
          <div class="alert-item">
            <div class="alert-dot dot-amber"></div>
            <div>
              <div class="alert-text">Monitoreo de ruido — Área de taller</div>
              <div class="alert-meta">Mar 13 · Grundtech · NTE INEN 702</div>
            </div>
          </div>
          <div class="alert-item">
            <div class="alert-dot dot-green"></div>
            <div>
              <div class="alert-text">Inspección trimestral extintores</div>
              <div class="alert-meta">Mar 20 · Interno · Responsable: K. Torres</div>
            </div>
          </div>
          <div class="alert-item">
            <div class="alert-dot dot-amber"></div>
            <div>
              <div class="alert-text">Monitoreo suelo y sedimentos</div>
              <div class="alert-meta">Mar 27 · Grundtech · Punto S-03 y S-04</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ════════ MONITOREOS ════════ -->
  <div class="content" id="sec-monitoreos">
    <div class="section-header">
      <div>
        <div class="breadcrumb">Módulo 4 · <span>Monitoreos Ambientales</span></div>
        <div class="section-title">Monitoreos Ambientales</div>
        <div class="section-sub">Grundtech · Agua · Suelo · Aire · Ruido · Biótico</div>
      </div>
      <div style="display:flex;gap:8px">
        <button class="btn btn-outline">🔗 Sincronizar Grundtech</button>
        <button class="btn btn-primary">+ Carga manual</button>
      </div>
    </div>

    <div class="kpi-grid">
      <div class="kpi-card teal"><div class="kpi-label">Último monitoreo</div><div class="kpi-value teal" style="font-size:22px;margin-top:8px">28 Feb 2026</div><div class="kpi-meta">Grundtech · Todos los parámetros</div></div>
      <div class="kpi-card"><div class="kpi-label">Parámetros en rango</div><div class="kpi-value moss">18/20</div><div class="progress-wrap"><div class="progress-bar"><div class="progress-fill teal" style="width:90%"></div></div></div></div>
      <div class="kpi-card warn"><div class="kpi-label">Parámetros fuera de norma</div><div class="kpi-value amber">2</div><div class="kpi-meta">DBO₅ agua · Ruido nocturno</div></div>
      <div class="kpi-card"><div class="kpi-label">Próximo monitoreo</div><div class="kpi-value" style="font-size:20px;font-weight:700;color:var(--red);margin-top:8px">5 días</div><div class="kpi-meta">Agua — Punto R-01</div></div>
    </div>

    <div class="grid-3">
      <div class="monitor-card">
        <div class="monitor-header">
          <div><div style="font-size:10px;color:var(--gray);text-transform:uppercase;letter-spacing:1px;margin-bottom:4px">💧 Agua</div><div class="monitor-title">DBO₅ (Demanda Bioquímica)</div></div>
          <span class="badge badge-red">Fuera</span>
        </div>
        <div class="monitor-val" style="color:var(--red)">68<span class="monitor-unit"> mg/L</span></div>
        <div class="monitor-range">Límite permisible: ≤ 50 mg/L · Punto: R-01</div>
        <div class="mini-chart" style="margin-top:12px">
          <div class="bar" style="height:40%"></div>
          <div class="bar" style="height:55%"></div>
          <div class="bar" style="height:48%"></div>
          <div class="bar" style="height:60%"></div>
          <div class="bar" style="height:70%"></div>
          <div class="bar active" style="height:85%"></div>
        </div>
      </div>

      <div class="monitor-card">
        <div class="monitor-header">
          <div><div style="font-size:10px;color:var(--gray);text-transform:uppercase;letter-spacing:1px;margin-bottom:4px">🌍 Suelo</div><div class="monitor-title">Hidrocarburos TPH</div></div>
          <span class="badge badge-green">En rango</span>
        </div>
        <div class="monitor-val" style="color:var(--moss)">1.8<span class="monitor-unit"> g/kg</span></div>
        <div class="monitor-range">Límite permisible: ≤ 2.5 g/kg · Punto: S-03</div>
        <div class="mini-chart" style="margin-top:12px">
          <div class="bar" style="height:60%"></div>
          <div class="bar" style="height:55%"></div>
          <div class="bar" style="height:65%"></div>
          <div class="bar" style="height:58%"></div>
          <div class="bar" style="height:62%"></div>
          <div class="bar active" style="height:56%"></div>
        </div>
      </div>

      <div class="monitor-card">
        <div class="monitor-header">
          <div><div style="font-size:10px;color:var(--gray);text-transform:uppercase;letter-spacing:1px;margin-bottom:4px">🌬 Aire</div><div class="monitor-title">Material Particulado PM10</div></div>
          <span class="badge badge-green">En rango</span>
        </div>
        <div class="monitor-val" style="color:var(--moss)">42<span class="monitor-unit"> µg/m³</span></div>
        <div class="monitor-range">Límite permisible: ≤ 150 µg/m³ · Estación: EA-01</div>
        <div class="mini-chart" style="margin-top:12px">
          <div class="bar" style="height:35%"></div>
          <div class="bar" style="height:30%"></div>
          <div class="bar" style="height:38%"></div>
          <div class="bar" style="height:32%"></div>
          <div class="bar" style="height:28%"></div>
          <div class="bar active" style="height:30%"></div>
        </div>
      </div>

      <div class="monitor-card">
        <div class="monitor-header">
          <div><div style="font-size:10px;color:var(--gray);text-transform:uppercase;letter-spacing:1px;margin-bottom:4px">🔊 Ruido</div><div class="monitor-title">Nivel sonoro nocturno</div></div>
          <span class="badge badge-red">Fuera</span>
        </div>
        <div class="monitor-val" style="color:var(--red)">56<span class="monitor-unit"> dB(A)</span></div>
        <div class="monitor-range">Límite nocturno: ≤ 45 dB(A) · Zona residencial</div>
        <div class="mini-chart" style="margin-top:12px">
          <div class="bar" style="height:65%"></div>
          <div class="bar" style="height:70%"></div>
          <div class="bar" style="height:72%"></div>
          <div class="bar" style="height:68%"></div>
          <div class="bar" style="height:74%"></div>
          <div class="bar active" style="height:78%"></div>
        </div>
      </div>

      <div class="monitor-card">
        <div class="monitor-header">
          <div><div style="font-size:10px;color:var(--gray);text-transform:uppercase;letter-spacing:1px;margin-bottom:4px">🌿 Biótico</div><div class="monitor-title">Índice de vegetación IVI</div></div>
          <span class="badge badge-green">En rango</span>
        </div>
        <div class="monitor-val" style="color:var(--moss)">87<span class="monitor-unit"> %</span></div>
        <div class="monitor-range">Línea base: 80% · Punto: BIO-01</div>
        <div class="mini-chart" style="margin-top:12px">
          <div class="bar" style="height:78%"></div>
          <div class="bar" style="height:80%"></div>
          <div class="bar" style="height:82%"></div>
          <div class="bar" style="height:84%"></div>
          <div class="bar" style="height:83%"></div>
          <div class="bar active" style="height:87%"></div>
        </div>
      </div>

      <div class="monitor-card" style="background:var(--teal-lt);border-color:var(--teal)">
        <div style="font-size:22px;margin-bottom:10px">🔗</div>
        <div class="monitor-title" style="color:var(--teal)">Integración Grundtech</div>
        <div style="font-size:12px;color:var(--gray);margin:8px 0">Última sincronización: 28 Feb 2026 · 14:32</div>
        <button class="btn btn-outline" style="font-size:11px;padding:6px 14px;border-color:var(--teal);color:var(--teal)">🔄 Sincronizar ahora</button>
      </div>
    </div>
  </div>

  <!-- ════════ RESIDUOS ════════ -->
  <div class="content" id="sec-residuos">
    <div class="section-header">
      <div>
        <div class="breadcrumb">Módulo 5 · <span>Residuos Sólidos</span></div>
        <div class="section-title">Gestión de Residuos Sólidos</div>
        <div class="section-sub">Experdata · Trazabilidad de disposición final</div>
      </div>
      <div style="display:flex;gap:8px">
        <button class="btn btn-outline">🔗 Sincronizar Experdata</button>
        <button class="btn btn-primary">+ Registrar residuo</button>
      </div>
    </div>

    <div class="kpi-grid">
      <div class="kpi-card warn"><div class="kpi-label">Residuos generados (Trim. 1)</div><div class="kpi-value amber">2.4 T</div><div class="kpi-meta">Meta anual: 8.0 T · 30% del total</div></div>
      <div class="kpi-card"><div class="kpi-label">Residuos reciclados</div><div class="kpi-value moss">68%</div><div class="progress-wrap"><div class="progress-bar"><div class="progress-fill" style="width:68%"></div></div></div></div>
      <div class="kpi-card danger"><div class="kpi-label">Declaración pendiente</div><div class="kpi-value red">Trim. 1</div><div class="kpi-meta">Vence: 15 Mar 2026</div></div>
      <div class="kpi-card teal"><div class="kpi-label">Gestores registrados</div><div class="kpi-value teal">3</div><div class="kpi-meta">TRIVIA, EcoPaz, ReciclaEcuador</div></div>
    </div>

    <div class="card">
      <div class="card-header">
        <span class="card-title">Registro de residuos — Trimestre 1, 2026</span>
        <button class="btn btn-outline" style="font-size:11px;padding:5px 12px">⬇ Exportar Excel</button>
      </div>
      <div class="card-body" style="padding:0">
        <table>
          <thead><tr>
            <th>Tipo de residuo</th><th>Clasificación</th><th>Cantidad</th><th>Gestor autorizado</th><th>Manifiesto</th><th>Estado</th>
          </tr></thead>
          <tbody>
            <tr><td><b>Aceites usados</b></td><td><span class="badge badge-red">Peligroso</span></td><td>480 kg</td><td>TRIVIA S.A. · RE-MAATE-048</td><td><a class="card-action">📄 M-2026-014</a></td><td><span class="badge badge-green">Entregado</span></td></tr>
            <tr><td><b>Cartón y papel</b></td><td><span class="badge badge-green">No peligroso</span></td><td>320 kg</td><td>ReciclaEcuador · RA-2021-03</td><td><a class="card-action">📄 M-2026-015</a></td><td><span class="badge badge-green">Entregado</span></td></tr>
            <tr><td><b>Plásticos industriales</b></td><td><span class="badge badge-forest">Reciclable</span></td><td>210 kg</td><td>EcoPaz · RA-2022-11</td><td><a class="card-action">📄 M-2026-016</a></td><td><span class="badge badge-green">Entregado</span></td></tr>
            <tr><td><b>Baterías y acumuladores</b></td><td><span class="badge badge-red">Peligroso</span></td><td>85 kg</td><td>TRIVIA S.A. · RE-MAATE-048</td><td>—</td><td><span class="badge badge-amber">Pendiente</span></td></tr>
            <tr><td><b>Trapos y absorbentes contaminados</b></td><td><span class="badge badge-red">Peligroso</span><td>42 kg</td><td>—</td><td>—</td><td><span class="badge badge-red">Sin gestor</span></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ════════ INFORMES ════════ -->
  <div class="content" id="sec-informes">
    <div class="section-header">
      <div>
        <div class="breadcrumb">Módulo 6 · <span>Informes Ambientales</span></div>
        <div class="section-title">Informes Ambientales</div>
        <div class="section-sub">Generación automática desde el sistema con evidencias referenciadas</div>
      </div>
      <button class="btn btn-primary">📤 Generar nuevo informe</button>
    </div>

    <div class="grid-3 gap-top">
      <div class="informe-card">
        <div class="informe-icon" style="background:var(--forest)">📋</div>
        <div>
          <div class="informe-title">Informe Ambiental Anual 2026</div>
          <div class="informe-sub">En preparación · 70% completado · Vence 31 Mar</div>
          <div style="margin-top:8px;display:flex;gap:6px">
            <span class="badge badge-amber">En borrador</span>
            <a class="card-action" style="font-size:11px">Continuar →</a>
          </div>
        </div>
      </div>
      <div class="informe-card">
        <div class="informe-icon" style="background:var(--red)">🗑</div>
        <div>
          <div class="informe-title">Declaración de Desechos Peligrosos</div>
          <div class="informe-sub">Trim. 1 2026 · Pendiente · Vence 15 Mar</div>
          <div style="margin-top:8px;display:flex;gap:6px">
            <span class="badge badge-red">Urgente</span>
            <a class="card-action" style="font-size:11px">Completar →</a>
          </div>
        </div>
      </div>
      <div class="informe-card">
        <div class="informe-icon" style="background:var(--teal)">📈</div>
        <div>
          <div class="informe-title">Plan de Acción Correctivo</div>
          <div class="informe-sub">DBO₅ y Ruido nocturno · Generado 01 Mar</div>
          <div style="margin-top:8px;display:flex;gap:6px">
            <span class="badge badge-teal">Generado</span>
            <a class="card-action" style="font-size:11px">Ver →</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card gap-top">
      <div class="card-header"><span class="card-title">Historial de informes generados</span></div>
      <div class="card-body" style="padding:0">
        <table>
          <thead><tr><th>Informe</th><th>Período</th><th>Generado por</th><th>Fecha</th><th>Formato</th><th></th></tr></thead>
          <tbody>
            <tr><td><b>Informe Ambiental Anual</b></td><td>2025</td><td>M. Consultor</td><td>15 Abr 2025</td><td><span class="chip">PDF + Excel</span></td><td><a class="card-action">⬇ Descargar</a></td></tr>
            <tr><td><b>Declaración de Desechos</b></td><td>Trim. 4 2025</td><td>K. Torres</td><td>12 Ene 2026</td><td><span class="chip">Excel</span></td><td><a class="card-action">⬇ Descargar</a></td></tr>
            <tr><td><b>Plan de Acción — Hallazgo #2</b></td><td>2025</td><td>M. Consultor</td><td>20 Oct 2025</td><td><span class="chip">PDF</span></td><td><a class="card-action">⬇ Descargar</a></td></tr>
            <tr><td><b>Matriz de cumplimiento PMA</b></td><td>Sem. 2 2025</td><td>J. Pérez</td><td>05 Jan 2026</td><td><span class="chip">Excel</span></td><td><a class="card-action">⬇ Descargar</a></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ════════ EMPRESAS ════════ -->
  <div class="content" id="sec-empresas">
    <div class="section-header">
      <div>
        <div class="breadcrumb">Administración · <span>Empresas &amp; Proyectos</span></div>
        <div class="section-title">Empresas y Proyectos</div>
        <div class="section-sub">Gestión multiempresa · Cada proyecto con gestión independiente</div>
      </div>
      <button class="btn btn-primary">+ Nueva empresa</button>
    </div>

    <div class="kpi-grid">
      <div class="kpi-card"><div class="kpi-label">Clientes activos</div><div class="kpi-value moss">4</div></div>
      <div class="kpi-card"><div class="kpi-label">Proyectos totales</div><div class="kpi-value moss">12</div></div>
      <div class="kpi-card warn"><div class="kpi-label">Proyectos con alertas</div><div class="kpi-value amber">3</div></div>
      <div class="kpi-card"><div class="kpi-label">Cumplimiento promedio</div><div class="kpi-value moss">81%</div></div>
    </div>

    <div class="card">
      <div class="card-header"><span class="card-title">Listado de clientes y proyectos</span></div>
      <div class="card-body" style="padding:0">
        <table>
          <thead><tr><th>Cliente / Proyecto</th><th>Actividad</th><th>Proyectos</th><th>Cumplimiento</th><th>Alertas</th><th></th></tr></thead>
          <tbody>
            <tr style="background:var(--cream)">
              <td><b>🏢 Ambacar S.A.</b><br><span class="td-muted">Cliente principal · 3 proyectos activos</span></td>
              <td class="td-muted">Concesionario automotriz</td>
              <td class="td-muted">3 proyectos</td>
              <td><span style="font-weight:700;color:var(--moss)">78%</span></td>
              <td><span class="badge badge-red">3</span></td>
              <td><a class="card-action">Gestionar →</a></td>
            </tr>
            <tr>
              <td style="padding-left:36px">↳ <b>Sucursal Norte — Quito</b></td>
              <td class="td-muted">AMB-2024-041</td>
              <td>—</td>
              <td><span style="font-weight:600;color:var(--moss)">78%</span></td>
              <td><span class="badge badge-red">3</span></td>
              <td><a class="card-action">Abrir</a></td>
            </tr>
            <tr>
              <td style="padding-left:36px">↳ Sucursal Sur — Quito</td>
              <td class="td-muted">AMB-2024-042</td>
              <td>—</td>
              <td><span style="font-weight:600;color:var(--moss)">85%</span></td>
              <td><span class="badge badge-gray">0</span></td>
              <td><a class="card-action">Abrir</a></td>
            </tr>
            <tr>
              <td style="padding-left:36px">↳ Matriz — Quito</td>
              <td class="td-muted">AMB-2024-040</td>
              <td>—</td>
              <td><span style="font-weight:600;color:var(--amber)">71%</span></td>
              <td><span class="badge badge-amber">1</span></td>
              <td><a class="card-action">Abrir</a></td>
            </tr>
            <tr style="background:var(--cream)">
              <td><b>🏢 Lácteos del Valle Cía.</b><br><span class="td-muted">2 proyectos activos</span></td>
              <td class="td-muted">Procesamiento lácteo</td>
              <td class="td-muted">2 proyectos</td>
              <td><span style="font-weight:700;color:var(--moss)">91%</span></td>
              <td><span class="badge badge-gray">0</span></td>
              <td><a class="card-action">Gestionar →</a></td>
            </tr>
            <tr style="background:var(--cream)">
              <td><b>🏢 Mueblería Andina S.A.</b><br><span class="td-muted">1 proyecto activo</span></td>
              <td class="td-muted">Fabricación de muebles</td>
              <td class="td-muted">1 proyecto</td>
              <td><span style="font-weight:700;color:var(--amber)">63%</span></td>
              <td><span class="badge badge-amber">2</span></td>
              <td><a class="card-action">Gestionar →</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div><!-- .main -->

<script>
  function showSection(id) {
    // Hide all sections
    document.querySelectorAll('.content').forEach(c => c.classList.remove('active'));
    document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));

    // Show target
    const sec = document.getElementById('sec-' + id);
    if (sec) sec.classList.add('active');

    // Highlight nav
    const navItems = document.querySelectorAll('.nav-item');
    const labels = {
      dashboard: 'Dashboard',
      seguimiento: 'Seguimiento Ambiental',
      auditoria: 'Auditoría e Informes',
      calendario: 'Calendario',
      monitoreos: 'Monitoreos Ambientales',
      residuos: 'Residuos Sólidos',
      informes: 'Informes Ambientales',
      empresas: 'Empresas & Proyectos',
    };
    navItems.forEach(item => {
      if (item.textContent.trim().startsWith(labels[id]?.split(' ')[0] || '___')) {
        item.classList.add('active');
      }
    });

    // Update topbar
    const titles = {
      dashboard: ['Dashboard', '/ General'],
      seguimiento: ['Seguimiento Ambiental', '/ Plan de Manejo, Normativa y más'],
      auditoria: ['Auditoría e Informes', '/ Cumplimiento normativo'],
      calendario: ['Calendario', '/ Actividades programadas'],
      monitoreos: ['Monitoreos Ambientales', '/ Resultados Grundtech'],
      residuos: ['Residuos Sólidos', '/ Trazabilidad y declaración'],
      informes: ['Informes Ambientales', '/ Generación automática'],
      empresas: ['Empresas & Proyectos', '/ Gestión multiempresa'],
    };
    const t = titles[id] || ['—',''];
    document.getElementById('topbar-title').innerHTML = `${t[0]} <span>${t[1]}</span>`;
  }

  function switchTab(prefix, id, el) {
    // Hide all tab bodies for this prefix
    document.querySelectorAll(`[id^="${prefix}-"]`).forEach(el => {
      if (!el.classList.contains('tabs') && el.id !== `${prefix}-tabs`) {
        el.style.display = 'none';
      }
    });
    document.getElementById(`${prefix}-${id}`).style.display = '';

    // Update tab highlights
    el.closest('.tabs').querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
    el.classList.add('active');
  }

  // Animate progress bars on load
  window.addEventListener('load', () => {
    document.querySelectorAll('.progress-fill').forEach(bar => {
      const w = bar.style.width;
      bar.style.width = '0';
      setTimeout(() => { bar.style.width = w; }, 200);
    });
  });
</script>
</body>
</html>
