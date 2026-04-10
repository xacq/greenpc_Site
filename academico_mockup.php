<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduTrack AI — Panel Docente</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --navy: #0B1437;
    --navy2: #111C44;
    --navy3: #1B254B;
    --panel: #ffffff;
    --accent: #4318FF;
    --accent2: #6AD2FF;
    --teal: #01B574;
    --amber: #FFB547;
    --rose: #EE5D50;
    --text: #2B3674;
    --muted: #A3AED0;
    --border: rgba(163,174,208,0.2);
    --card-bg: #ffffff;
    --page-bg: #F4F7FE;
    --sidebar-w: 260px;
  }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--page-bg);
    color: var(--text);
    display: flex;
    min-height: 100vh;
    font-size: 14px;
  }

  /* SIDEBAR */
  .sidebar {
    width: var(--sidebar-w);
    background: var(--navy);
    min-height: 100vh;
    position: fixed;
    left: 0; top: 0;
    display: flex;
    flex-direction: column;
    z-index: 100;
    padding: 28px 0;
  }

  .logo {
    padding: 0 24px 28px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
    margin-bottom: 20px;
  }
  .logo-name {
    font-family: 'Syne', sans-serif;
    font-size: 20px;
    font-weight: 800;
    color: #fff;
    letter-spacing: -0.5px;
  }
  .logo-tag {
    font-size: 11px;
    color: var(--accent2);
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-top: 2px;
  }

  .nav-section {
    padding: 0 16px;
    margin-bottom: 8px;
  }
  .nav-label {
    font-size: 10px;
    font-weight: 600;
    color: rgba(255,255,255,0.3);
    letter-spacing: 1.5px;
    text-transform: uppercase;
    padding: 0 8px;
    margin-bottom: 8px;
  }
  .nav-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 12px;
    border-radius: 10px;
    cursor: pointer;
    color: rgba(255,255,255,0.6);
    font-size: 13.5px;
    font-weight: 400;
    transition: all 0.2s;
    margin-bottom: 2px;
    text-decoration: none;
  }
  .nav-item:hover { background: rgba(255,255,255,0.07); color: #fff; }
  .nav-item.active {
    background: linear-gradient(135deg, var(--accent), #868CFF);
    color: #fff;
    font-weight: 500;
    box-shadow: 0 4px 16px rgba(67,24,255,0.4);
  }
  .nav-icon {
    width: 18px; height: 18px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .nav-icon svg { width: 16px; height: 16px; }

  .sidebar-footer {
    margin-top: auto;
    padding: 20px 16px 0;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .teacher-card {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 10px;
    background: rgba(255,255,255,0.05);
  }
  .avatar {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    display: flex; align-items: center; justify-content: center;
    font-size: 13px; font-weight: 600; color: #fff; flex-shrink: 0;
  }
  .teacher-name { font-size: 13px; font-weight: 500; color: #fff; }
  .teacher-role { font-size: 11px; color: var(--muted); }

  /* MAIN */
  .main {
    margin-left: var(--sidebar-w);
    flex: 1;
    padding: 28px 32px;
    min-width: 0;
  }

  /* TOP BAR */
  .topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
    gap: 16px;
    flex-wrap: wrap;
  }
  .topbar-left h1 {
    font-family: 'Syne', sans-serif;
    font-size: 22px;
    font-weight: 800;
    color: var(--text);
  }
  .topbar-left p { font-size: 13px; color: var(--muted); margin-top: 2px; }
  .topbar-filters {
    display: flex; gap: 10px; align-items: center; flex-wrap: wrap;
  }
  .filter-select {
    background: var(--card-bg);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 8px 12px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    color: var(--text);
    cursor: pointer;
    min-width: 140px;
    outline: none;
    transition: border 0.2s;
  }
  .filter-select:focus { border-color: var(--accent); }
  .btn-ai {
    background: linear-gradient(135deg, var(--accent), #868CFF);
    color: #fff;
    border: none;
    border-radius: 10px;
    padding: 8px 16px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: opacity 0.2s;
    white-space: nowrap;
  }
  .btn-ai:hover { opacity: 0.88; }
  .ai-dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--accent2);
    animation: pulse 1.5s infinite;
  }
  @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(0.8)} }

  /* KPI CARDS */
  .kpi-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-bottom: 24px;
  }
  .kpi-card {
    background: var(--card-bg);
    border-radius: 16px;
    padding: 20px;
    border: 1px solid var(--border);
    position: relative;
    overflow: hidden;
    transition: transform 0.2s;
  }
  .kpi-card:hover { transform: translateY(-2px); }
  .kpi-accent {
    position: absolute; top: 0; right: 0;
    width: 70px; height: 70px;
    border-radius: 0 16px 0 100%;
    opacity: 0.08;
  }
  .kpi-icon {
    width: 42px; height: 42px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 14px;
    font-size: 18px;
  }
  .kpi-value {
    font-family: 'Syne', sans-serif;
    font-size: 26px;
    font-weight: 800;
    color: var(--text);
    line-height: 1;
    margin-bottom: 4px;
  }
  .kpi-label { font-size: 12px; color: var(--muted); font-weight: 400; }
  .kpi-delta {
    font-size: 11px;
    font-weight: 500;
    margin-top: 8px;
    display: flex; align-items: center; gap: 4px;
  }
  .delta-up { color: var(--teal); }
  .delta-down { color: var(--rose); }

  /* CHARTS ROW */
  .charts-row {
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    gap: 16px;
    margin-bottom: 24px;
  }
  .chart-card {
    background: var(--card-bg);
    border-radius: 16px;
    padding: 22px;
    border: 1px solid var(--border);
  }
  .card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
  }
  .card-title {
    font-size: 15px;
    font-weight: 600;
    color: var(--text);
  }
  .card-subtitle { font-size: 12px; color: var(--muted); margin-top: 2px; }
  .badge {
    font-size: 11px;
    padding: 3px 10px;
    border-radius: 20px;
    font-weight: 500;
  }
  .badge-teal { background: rgba(1,181,116,0.12); color: #00a368; }
  .badge-blue { background: rgba(67,24,255,0.1); color: var(--accent); }
  .badge-amber { background: rgba(255,181,71,0.15); color: #c08000; }

  /* BOTTOM ROW */
  .bottom-row {
    display: grid;
    grid-template-columns: 1.6fr 1fr;
    gap: 16px;
    margin-bottom: 24px;
  }

  /* TABLE */
  .table-wrap { overflow-x: auto; }
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
  }
  thead th {
    text-align: left;
    padding: 10px 14px;
    font-size: 11px;
    font-weight: 600;
    color: var(--muted);
    text-transform: uppercase;
    letter-spacing: 0.8px;
    border-bottom: 1px solid var(--border);
  }
  tbody td {
    padding: 12px 14px;
    border-bottom: 1px solid var(--border);
    color: var(--text);
    vertical-align: middle;
  }
  tbody tr:last-child td { border-bottom: none; }
  tbody tr:hover { background: rgba(67,24,255,0.03); }

  .student-name { font-weight: 500; color: var(--text); }
  .student-id { font-size: 11px; color: var(--muted); }

  .grade-pill {
    display: inline-block;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
  }
  .grade-a { background: rgba(1,181,116,0.12); color: #00a368; }
  .grade-b { background: rgba(67,24,255,0.1); color: var(--accent); }
  .grade-c { background: rgba(255,181,71,0.15); color: #c08000; }
  .grade-d { background: rgba(238,93,80,0.12); color: #d64535; }

  .progress-bar-wrap {
    background: var(--page-bg);
    border-radius: 20px;
    height: 6px;
    width: 80px;
    overflow: hidden;
  }
  .progress-bar {
    height: 100%;
    border-radius: 20px;
    transition: width 0.6s ease;
  }

  .trend-chip {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    font-size: 11px;
    font-weight: 500;
  }

  /* AI PANEL */
  .ai-panel {
    background: var(--navy);
    border-radius: 16px;
    padding: 22px;
    display: flex;
    flex-direction: column;
    min-height: 360px;
    border: 1px solid rgba(255,255,255,0.06);
  }
  .ai-header {
    display: flex; align-items: center; gap: 10px;
    margin-bottom: 18px;
  }
  .ai-icon {
    width: 34px; height: 34px;
    border-radius: 10px;
    background: linear-gradient(135deg, var(--accent), #868CFF);
    display: flex; align-items: center; justify-content: center;
    font-size: 14px;
  }
  .ai-title { font-size: 15px; font-weight: 600; color: #fff; }
  .ai-sub { font-size: 11px; color: rgba(255,255,255,0.4); }
  .ai-body {
    flex: 1;
    overflow-y: auto;
    margin-bottom: 14px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    min-height: 180px;
    max-height: 260px;
  }
  .ai-msg {
    font-size: 13px;
    line-height: 1.6;
    color: rgba(255,255,255,0.8);
    background: rgba(255,255,255,0.05);
    border-radius: 12px;
    padding: 12px 14px;
    border-left: 2px solid var(--accent);
  }
  .ai-msg.user-msg {
    background: rgba(67,24,255,0.25);
    border-left: 2px solid #868CFF;
    color: #fff;
    align-self: flex-end;
    max-width: 85%;
  }
  .ai-thinking {
    display: flex; gap: 6px; align-items: center;
    padding: 10px 14px;
    background: rgba(255,255,255,0.04);
    border-radius: 12px;
    display: none;
  }
  .ai-thinking.show { display: flex; }
  .ai-dot-anim {
    width: 6px; height: 6px; border-radius: 50%;
    background: var(--accent2);
    animation: bounce 1.2s infinite;
  }
  .ai-dot-anim:nth-child(2) { animation-delay: 0.2s; }
  .ai-dot-anim:nth-child(3) { animation-delay: 0.4s; }
  @keyframes bounce { 0%,80%,100%{transform:scale(0.7);opacity:0.4} 40%{transform:scale(1);opacity:1} }

  .ai-input-row {
    display: flex;
    gap: 8px;
    align-items: center;
  }
  .ai-input {
    flex: 1;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 10px;
    padding: 9px 12px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    color: #fff;
    outline: none;
    transition: border 0.2s;
  }
  .ai-input::placeholder { color: rgba(255,255,255,0.3); }
  .ai-input:focus { border-color: var(--accent); }
  .ai-send {
    background: linear-gradient(135deg, var(--accent), #868CFF);
    border: none;
    border-radius: 10px;
    width: 36px; height: 36px;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    transition: opacity 0.2s;
  }
  .ai-send:hover { opacity: 0.8; }
  .ai-send svg { width: 16px; height: 16px; fill: #fff; }

  .quick-btns {
    display: flex; gap: 6px; flex-wrap: wrap; margin-bottom: 12px;
  }
  .quick-btn {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    color: rgba(255,255,255,0.6);
    font-size: 11px;
    padding: 5px 10px;
    border-radius: 20px;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    transition: all 0.2s;
    white-space: nowrap;
  }
  .quick-btn:hover {
    background: rgba(67,24,255,0.3);
    color: #fff;
    border-color: var(--accent);
  }

  /* THIRD ROW */
  .third-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    margin-bottom: 24px;
  }

  /* RANKING */
  .rank-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid var(--border);
  }
  .rank-item:last-child { border-bottom: none; }
  .rank-num {
    width: 22px; height: 22px;
    border-radius: 50%;
    background: var(--page-bg);
    display: flex; align-items: center; justify-content: center;
    font-size: 11px;
    font-weight: 600;
    color: var(--muted);
    flex-shrink: 0;
  }
  .rank-num.top { background: rgba(67,24,255,0.1); color: var(--accent); }
  .rank-info { flex: 1; min-width: 0; }
  .rank-name { font-size: 13px; font-weight: 500; color: var(--text); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
  .rank-subject { font-size: 11px; color: var(--muted); }
  .rank-score {
    font-family: 'Syne', sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: var(--accent);
  }

  /* HEATMAP */
  .heatmap-grid {
    display: grid;
    grid-template-columns: auto repeat(5, 1fr);
    gap: 4px;
    align-items: center;
    font-size: 11px;
  }
  .hm-label { color: var(--muted); padding-right: 8px; font-size: 11px; white-space: nowrap; }
  .hm-cell {
    aspect-ratio: 1;
    border-radius: 5px;
    display: flex; align-items: center; justify-content: center;
    font-size: 11px;
    font-weight: 500;
    color: #fff;
    cursor: pointer;
    transition: transform 0.15s;
  }
  .hm-cell:hover { transform: scale(1.1); }
  .hm-header {
    text-align: center; color: var(--muted); font-size: 10px;
    font-weight: 600; padding-bottom: 4px;
  }

  /* SCROLLBAR */
  ::-webkit-scrollbar { width: 4px; }
  ::-webkit-scrollbar-track { background: transparent; }
  ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 2px; }

  /* TOOLTIP */
  .tooltip {
    position: absolute;
    background: var(--navy);
    color: #fff;
    font-size: 12px;
    padding: 6px 10px;
    border-radius: 8px;
    pointer-events: none;
    z-index: 999;
    display: none;
    white-space: nowrap;
  }
</style>
</head>
<body>

<!-- SIDEBAR -->
<nav class="sidebar">
  <div class="logo">
    <div class="logo-name">EduTrack</div>
    <div class="logo-tag">AI · Analytics · v2.4</div>
  </div>

  <div class="nav-section">
    <div class="nav-label">Principal</div>
    <div class="nav-item active" onclick="setActive(this)">
      <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></span>
      Dashboard
    </div>
    <div class="nav-item" onclick="setActive(this)">
      <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></span>
      Materias
    </div>
    <div class="nav-item" onclick="setActive(this)">
      <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
      Cursos
    </div>
    <div class="nav-item" onclick="setActive(this)">
      <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></span>
      Estudiantes
    </div>
  </div>

  <div class="nav-section" style="margin-top:16px;">
    <div class="nav-label">Inteligencia IA</div>
    <div class="nav-item" onclick="setActive(this)">
      <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M4.22 4.22l2.12 2.12M17.66 17.66l2.12 2.12M2 12h3M19 12h3M4.22 19.78l2.12-2.12M17.66 6.34l2.12-2.12"/></svg></span>
      Análisis IA
    </div>
    <div class="nav-item" onclick="setActive(this)">
      <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></span>
      Predicciones
    </div>
    <div class="nav-item" onclick="setActive(this)">
      <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></span>
      Reportes
    </div>
  </div>

  <div class="nav-section" style="margin-top:16px;">
    <div class="nav-label">Configuración</div>
    <div class="nav-item" onclick="setActive(this)">
      <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg></span>
      Configuración
    </div>
  </div>

  <div class="sidebar-footer">
    <div class="teacher-card">
      <div class="avatar">MA</div>
      <div>
        <div class="teacher-name">Mgr. Ana Morales</div>
        <div class="teacher-role">Docente · UNAE</div>
      </div>
    </div>
  </div>
</nav>

<!-- MAIN CONTENT -->
<main class="main">

  <!-- TOP BAR -->
  <div class="topbar">
    <div class="topbar-left">
      <h1>Panel de Control Docente</h1>
      <p>Período Lectivo 2024–2025 · Segundo Quimestre</p>
    </div>
    <div class="topbar-filters">
      <select class="filter-select" onchange="updateDashboard()">
        <option>Todas las materias</option>
        <option>Matemáticas</option>
        <option>Ciencias</option>
        <option>Lengua y Literatura</option>
        <option>Historia</option>
        <option>Física</option>
      </select>
      <select class="filter-select" onchange="updateDashboard()">
        <option>Todos los cursos</option>
        <option>1° Bachillerato A</option>
        <option>2° Bachillerato B</option>
        <option>3° Bachillerato C</option>
      </select>
      <select class="filter-select">
        <option>Quimestre 2</option>
        <option>Quimestre 1</option>
        <option>Año completo</option>
      </select>
      <button class="btn-ai" onclick="triggerAIAnalysis()">
        <div class="ai-dot"></div>
        Analizar con IA
      </button>
    </div>
  </div>

  <!-- KPI CARDS -->
  <div class="kpi-grid">
    <div class="kpi-card">
      <div class="kpi-accent" style="background:var(--accent)"></div>
      <div class="kpi-icon" style="background:rgba(67,24,255,0.1);">📊</div>
      <div class="kpi-value" id="kpi-avg">8.4</div>
      <div class="kpi-label">Promedio General</div>
      <div class="kpi-delta delta-up">↑ +0.3 vs quimestre anterior</div>
    </div>
    <div class="kpi-card">
      <div class="kpi-accent" style="background:var(--teal)"></div>
      <div class="kpi-icon" style="background:rgba(1,181,116,0.1);">👥</div>
      <div class="kpi-value" id="kpi-students">142</div>
      <div class="kpi-label">Estudiantes Activos</div>
      <div class="kpi-delta delta-up">↑ 4 nuevos este período</div>
    </div>
    <div class="kpi-card">
      <div class="kpi-accent" style="background:var(--amber)"></div>
      <div class="kpi-icon" style="background:rgba(255,181,71,0.1);">📚</div>
      <div class="kpi-value" id="kpi-subjects">6</div>
      <div class="kpi-label">Materias Activas</div>
      <div class="kpi-delta" style="color:var(--muted);">Sin cambios</div>
    </div>
    <div class="kpi-card">
      <div class="kpi-accent" style="background:var(--rose)"></div>
      <div class="kpi-icon" style="background:rgba(238,93,80,0.1);">✅</div>
      <div class="kpi-value" id="kpi-pass">87%</div>
      <div class="kpi-label">Tasa de Aprobación</div>
      <div class="kpi-delta delta-down">↓ -2% vs quimestre anterior</div>
    </div>
  </div>

  <!-- CHARTS ROW -->
  <div class="charts-row">
    <div class="chart-card">
      <div class="card-header">
        <div>
          <div class="card-title">Promedio por Materia y Curso</div>
          <div class="card-subtitle">Comparativa de desempeño académico</div>
        </div>
        <span class="badge badge-blue">Actualizado hoy</span>
      </div>
      <div style="position:relative; width:100%; height:240px;">
        <canvas id="subjectChart" role="img" aria-label="Promedios por materia por curso">Datos de promedios por materia.</canvas>
      </div>
    </div>
    <div class="chart-card">
      <div class="card-header">
        <div>
          <div class="card-title">Evolución de Notas</div>
          <div class="card-subtitle">Tendencia mensual del grupo</div>
        </div>
        <span class="badge badge-teal">En alza</span>
      </div>
      <div style="position:relative; width:100%; height:240px;">
        <canvas id="trendChart" role="img" aria-label="Tendencia de notas mensual">Tendencia mensual de calificaciones.</canvas>
      </div>
    </div>
  </div>

  <!-- BOTTOM ROW: Table + AI Panel -->
  <div class="bottom-row">

    <!-- STUDENT TABLE -->
    <div class="chart-card">
      <div class="card-header">
        <div>
          <div class="card-title">Registro de Estudiantes</div>
          <div class="card-subtitle">Notas, aportes y estado por estudiante</div>
        </div>
        <div style="display:flex;gap:8px;">
          <input type="text" placeholder="Buscar estudiante..." style="background:var(--page-bg);border:1px solid var(--border);border-radius:8px;padding:6px 12px;font-family:'DM Sans',sans-serif;font-size:12px;color:var(--text);outline:none;width:160px;">
          <span class="badge badge-amber">142 total</span>
        </div>
      </div>
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Estudiante</th>
              <th>Materia</th>
              <th>Aporte</th>
              <th>Examen</th>
              <th>Final</th>
              <th>Progreso</th>
              <th>Tendencia</th>
            </tr>
          </thead>
          <tbody id="studentTable">
          </tbody>
        </table>
      </div>
    </div>

    <!-- AI PANEL -->
    <div class="ai-panel">
      <div class="ai-header">
        <div class="ai-icon">🤖</div>
        <div>
          <div class="ai-title">Asistente IA Docente</div>
          <div class="ai-sub">Powered by Claude AI · Análisis en tiempo real</div>
        </div>
      </div>

      <div class="quick-btns">
        <button class="quick-btn" onclick="quickQuery('¿Qué estudiantes están en riesgo de reprobación?')">⚠ En riesgo</button>
        <button class="quick-btn" onclick="quickQuery('¿Cuáles son los mejores estudiantes del grupo?')">🏆 Top alumnos</button>
        <button class="quick-btn" onclick="quickQuery('Analiza las tendencias de aprendizaje de la clase')">📈 Tendencias</button>
        <button class="quick-btn" onclick="quickQuery('Dame recomendaciones pedagógicas para mejorar el desempeño')">💡 Sugerencias</button>
      </div>

      <div class="ai-body" id="aiBody">
        <div class="ai-msg">
          Hola, soy tu asistente IA. Tengo acceso a los datos académicos de tus <strong>142 estudiantes</strong> en <strong>6 materias</strong>. Puedo analizar tendencias, identificar estudiantes en riesgo, generar reportes y darte recomendaciones pedagógicas personalizadas. ¿En qué te ayudo hoy?
        </div>
      </div>

      <div class="ai-thinking" id="aiThinking">
        <span style="font-size:11px;color:rgba(255,255,255,0.4);">Analizando datos...</span>
        <div class="ai-dot-anim"></div>
        <div class="ai-dot-anim"></div>
        <div class="ai-dot-anim"></div>
      </div>

      <div class="ai-input-row">
        <input class="ai-input" id="aiInput" placeholder="Escribe tu consulta al asistente IA..." onkeydown="if(event.key==='Enter')sendAI()">
        <button class="ai-send" onclick="sendAI()">
          <svg viewBox="0 0 24 24"><path d="M22 2L11 13M22 2L15 22l-4-9-9-4 20-7z"/></svg>
        </button>
      </div>
    </div>
  </div>

  <!-- THIRD ROW: Rankings + Heatmap + Distribution -->
  <div class="third-row">

    <!-- TOP STUDENTS -->
    <div class="chart-card">
      <div class="card-header">
        <div class="card-title">🏆 Ranking Estudiantil</div>
        <span class="badge badge-blue">Top 6</span>
      </div>
      <div id="ranking"></div>
    </div>

    <!-- HEATMAP -->
    <div class="chart-card">
      <div class="card-header">
        <div>
          <div class="card-title">Mapa de Calor</div>
          <div class="card-subtitle">Promedio materia × semana</div>
        </div>
      </div>
      <div class="heatmap-grid" id="heatmapGrid"></div>
    </div>

    <!-- DONUT -->
    <div class="chart-card">
      <div class="card-header">
        <div>
          <div class="card-title">Distribución de Notas</div>
          <div class="card-subtitle">Rango de calificaciones</div>
        </div>
      </div>
      <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px;">
        <span style="display:flex;align-items:center;gap:4px;font-size:11px;color:var(--muted);"><span style="width:10px;height:10px;border-radius:2px;background:#01B574;display:inline-block;"></span>9–10: 28%</span>
        <span style="display:flex;align-items:center;gap:4px;font-size:11px;color:var(--muted);"><span style="width:10px;height:10px;border-radius:2px;background:#4318FF;display:inline-block;"></span>7–8.9: 41%</span>
        <span style="display:flex;align-items:center;gap:4px;font-size:11px;color:var(--muted);"><span style="width:10px;height:10px;border-radius:2px;background:#FFB547;display:inline-block;"></span>5–6.9: 18%</span>
        <span style="display:flex;align-items:center;gap:4px;font-size:11px;color:var(--muted);"><span style="width:10px;height:10px;border-radius:2px;background:#EE5D50;display:inline-block;"></span>0–4.9: 13%</span>
      </div>
      <div style="position:relative;width:100%;height:200px;">
        <canvas id="donutChart" role="img" aria-label="Distribución porcentual de calificaciones">Distribución: Excelente 28%, Bueno 41%, Regular 18%, Bajo 13%.</canvas>
      </div>
    </div>

  </div>

</main>

<div class="tooltip" id="tooltip"></div>

<script>
const STUDENTS = [
  { name:"Valeria Morocho", id:"EST-001", subject:"Matemáticas", course:"1°A", aporte:9.2, exam:8.8, trend:"up" },
  { name:"Diego Cárdenas", id:"EST-002", subject:"Ciencias", course:"2°B", aporte:7.5, exam:6.9, trend:"down" },
  { name:"Sofía Ureña", id:"EST-003", subject:"Lengua", course:"1°A", aporte:9.8, exam:9.5, trend:"up" },
  { name:"Mateo Palacios", id:"EST-004", subject:"Historia", course:"3°C", aporte:5.2, exam:4.8, trend:"down" },
  { name:"Isabella Toro", id:"EST-005", subject:"Física", course:"2°B", aporte:8.6, exam:8.1, trend:"up" },
  { name:"Andrés Molina", id:"EST-006", subject:"Matemáticas", course:"3°C", aporte:7.0, exam:7.4, trend:"up" },
  { name:"Camila Vega", id:"EST-007", subject:"Ciencias", course:"1°A", aporte:9.1, exam:9.3, trend:"up" },
  { name:"Luis Espinoza", id:"EST-008", subject:"Historia", course:"2°B", aporte:4.5, exam:5.1, trend:"down" },
];

function getFinal(s) {
  return ((s.aporte * 0.4) + (s.exam * 0.6)).toFixed(1);
}
function gradeClass(v) {
  if(v>=9) return "grade-a";
  if(v>=7) return "grade-b";
  if(v>=5) return "grade-c";
  return "grade-d";
}

function buildTable() {
  const tbody = document.getElementById("studentTable");
  tbody.innerHTML = STUDENTS.map(s => {
    const final = parseFloat(getFinal(s));
    const pct = Math.round((final/10)*100);
    const barColor = final>=7?"var(--teal)":final>=5?"var(--amber)":"var(--rose)";
    return `<tr>
      <td>
        <div class="student-name">${s.name}</div>
        <div class="student-id">${s.id} · ${s.course}</div>
      </td>
      <td style="color:var(--muted)">${s.subject}</td>
      <td><span class="grade-pill ${gradeClass(s.aporte)}">${s.aporte}</span></td>
      <td><span class="grade-pill ${gradeClass(s.exam)}">${s.exam}</span></td>
      <td><span class="grade-pill ${gradeClass(final)}">${final}</span></td>
      <td>
        <div class="progress-bar-wrap">
          <div class="progress-bar" style="width:${pct}%;background:${barColor}"></div>
        </div>
        <div style="font-size:10px;color:var(--muted);margin-top:2px">${pct}%</div>
      </td>
      <td>
        <span class="trend-chip" style="color:${s.trend==='up'?'var(--teal)':'var(--rose)'}">
          ${s.trend==='up'?'↑ Alza':'↓ Baja'}
        </span>
      </td>
    </tr>`;
  }).join("");
}

function buildRanking() {
  const sorted = [...STUDENTS].sort((a,b)=>parseFloat(getFinal(b))-parseFloat(getFinal(a)));
  document.getElementById("ranking").innerHTML = sorted.slice(0,6).map((s,i)=>`
    <div class="rank-item">
      <div class="rank-num ${i<3?'top':''}">${i+1}</div>
      <div class="rank-info">
        <div class="rank-name">${s.name}</div>
        <div class="rank-subject">${s.subject} · ${s.course}</div>
      </div>
      <div class="rank-score">${getFinal(s)}</div>
    </div>
  `).join("");
}

function buildHeatmap() {
  const subjects = ["Mat","Cie","Len","His","Fís"];
  const weeks = ["S1","S2","S3","S4","S5"];
  const data = [
    [8.2,7.9,8.5,8.8,9.1],
    [7.5,7.8,8.0,7.6,8.2],
    [9.1,9.3,9.0,9.4,9.6],
    [5.8,6.1,5.5,6.3,6.0],
    [8.0,7.7,8.3,8.5,8.9],
  ];
  const colors = v => {
    if(v>=9) return "#01B574";
    if(v>=8) return "#4318FF";
    if(v>=7) return "#6AD2FF";
    if(v>=6) return "#FFB547";
    return "#EE5D50";
  };
  let html = '<div></div>';
  weeks.forEach(w => { html += `<div class="hm-header">${w}</div>`; });
  subjects.forEach((sub,i) => {
    html += `<div class="hm-label">${sub}</div>`;
    data[i].forEach(v => {
      html += `<div class="hm-cell" style="background:${colors(v)};opacity:${0.5+(v/10)*0.5}" title="${sub}: ${v}">${v}</div>`;
    });
  });
  document.getElementById("heatmapGrid").innerHTML = html;
}

// CHARTS
function buildCharts() {
  new Chart(document.getElementById("subjectChart"), {
    type: "bar",
    data: {
      labels: ["Matemáticas","Ciencias","Lengua","Historia","Física","Arte"],
      datasets: [
        {
          label: "1°A",
          data: [8.2,7.9,9.1,6.8,8.0,8.9],
          backgroundColor: "rgba(67,24,255,0.75)",
          borderRadius: 6,
          borderSkipped: false,
        },
        {
          label: "2°B",
          data: [7.5,8.3,8.6,7.1,8.5,8.0],
          backgroundColor: "rgba(106,210,255,0.65)",
          borderRadius: 6,
          borderSkipped: false,
        },
        {
          label: "3°C",
          data: [8.8,7.6,8.0,7.8,9.1,8.4],
          backgroundColor: "rgba(1,181,116,0.65)",
          borderRadius: 6,
          borderSkipped: false,
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: { legend: { display: false } },
      scales: {
        x: {
          grid: { display: false },
          ticks: { color: "#A3AED0", font: { size: 11 }, maxRotation: 0 }
        },
        y: {
          min: 0, max: 10,
          grid: { color: "rgba(163,174,208,0.15)" },
          ticks: { color: "#A3AED0", font: { size: 11 } }
        }
      }
    }
  });

  new Chart(document.getElementById("trendChart"), {
    type: "line",
    data: {
      labels: ["Ago","Sep","Oct","Nov","Dic","Ene","Feb"],
      datasets: [{
        label: "Promedio",
        data: [7.8, 7.9, 8.1, 7.7, 8.3, 8.5, 8.4],
        borderColor: "#4318FF",
        backgroundColor: "rgba(67,24,255,0.1)",
        fill: true,
        tension: 0.4,
        pointBackgroundColor: "#4318FF",
        pointRadius: 4,
        pointHoverRadius: 6,
        borderWidth: 2,
        borderDash: [],
      },{
        label: "Aprobados %",
        data: [82, 84, 85, 81, 87, 88, 87],
        borderColor: "#01B574",
        backgroundColor: "rgba(1,181,116,0.05)",
        fill: false,
        tension: 0.4,
        pointBackgroundColor: "#01B574",
        pointRadius: 4,
        pointHoverRadius: 6,
        borderWidth: 2,
        borderDash: [5,3],
        yAxisID: "y1"
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: { legend: { display: false } },
      scales: {
        x: { grid: { display: false }, ticks: { color: "#A3AED0", font: { size: 11 } } },
        y: {
          min: 6, max: 10,
          grid: { color: "rgba(163,174,208,0.15)" },
          ticks: { color: "#A3AED0", font: { size: 11 } }
        },
        y1: {
          position: "right",
          min: 70, max: 100,
          grid: { display: false },
          ticks: { color: "#01B574", font: { size: 10 }, callback: v => v+"%" }
        }
      }
    }
  });

  new Chart(document.getElementById("donutChart"), {
    type: "doughnut",
    data: {
      labels: ["Excelente (9-10)","Bueno (7-8.9)","Regular (5-6.9)","Bajo (0-4.9)"],
      datasets: [{
        data: [28, 41, 18, 13],
        backgroundColor: ["#01B574","#4318FF","#FFB547","#EE5D50"],
        borderWidth: 0,
        hoverOffset: 6,
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      cutout: "68%",
      plugins: {
        legend: { display: false },
        tooltip: {
          callbacks: { label: ctx => ` ${ctx.label}: ${ctx.raw}%` }
        }
      }
    }
  });
}

// AI PANEL
const CONTEXT = `
Eres un asistente académico IA integrado en EduTrack, una plataforma de gestión educativa.
Tienes acceso a datos de 142 estudiantes en 6 materias (Matemáticas, Ciencias, Lengua, Historia, Física, Arte) para el período 2024–2025.
Estadísticas: Promedio general 8.4, Tasa aprobación 87%, 3 cursos activos.
Estudiantes en riesgo (nota < 6): Mateo Palacios (4.9), Luis Espinoza (4.8).
Top estudiantes: Sofía Ureña (9.65), Camila Vega (9.18), Valeria Morocho (8.96).
Responde en español, de forma concisa y práctica, con emojis relevantes. Máximo 180 palabras.
`;

async function callClaude(userMessage) {
  try {
    const resp = await fetch("https://api.anthropic.com/v1/messages", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        model: "claude-sonnet-4-20250514",
        max_tokens: 1000,
        system: CONTEXT,
        messages: [{ role: "user", content: userMessage }]
      })
    });
    const data = await resp.json();
    return data.content?.[0]?.text || "No se pudo obtener respuesta.";
  } catch(e) {
    return "⚠️ Error de conexión con el servicio IA. Verifica tu conexión.";
  }
}

function appendMsg(text, isUser = false) {
  const body = document.getElementById("aiBody");
  const div = document.createElement("div");
  div.className = "ai-msg" + (isUser ? " user-msg" : "");
  div.innerHTML = text.replace(/\n/g,"<br>");
  body.appendChild(div);
  body.scrollTop = body.scrollHeight;
}

async function sendAI() {
  const input = document.getElementById("aiInput");
  const msg = input.value.trim();
  if (!msg) return;
  input.value = "";
  appendMsg(msg, true);
  const thinking = document.getElementById("aiThinking");
  thinking.classList.add("show");
  const response = await callClaude(msg);
  thinking.classList.remove("show");
  appendMsg(response);
}

function quickQuery(q) {
  document.getElementById("aiInput").value = q;
  sendAI();
}

function triggerAIAnalysis() {
  quickQuery("Genera un análisis ejecutivo completo del rendimiento académico actual del grupo. Incluye fortalezas, debilidades y 3 recomendaciones concretas.");
}

function setActive(el) {
  document.querySelectorAll(".nav-item").forEach(i => i.classList.remove("active"));
  el.classList.add("active");
}

function updateDashboard() {
  // Demo: simulate filter update
}

// INIT
buildTable();
buildRanking();
buildHeatmap();
buildCharts();
</script>
</body>
</html>
