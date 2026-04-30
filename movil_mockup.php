<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>GeoVerde App — Mobile Mockup</title>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet"/>
<style>
/* ─── OUTER PAGE ─── */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body {
  font-family: 'Outfit', sans-serif;
  background: #0f1f10;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px 20px 60px;
  overflow-x: hidden;
}

.page-header {
  text-align: center;
  margin-bottom: 36px;
}
.page-header h1 {
  font-size: 28px; font-weight: 800; color: #fff;
  letter-spacing: -0.5px;
}
.page-header h1 span { color: #7aab6e; }
.page-header p { font-size: 13.5px; color: #5a7a5c; margin-top: 6px; }

/* screen selector */
.screen-nav {
  display: flex; gap: 8px; flex-wrap: wrap; justify-content: center;
  margin-bottom: 36px;
}
.snav-btn {
  padding: 8px 18px; border-radius: 99px;
  font-family: 'Outfit', sans-serif; font-size: 12.5px; font-weight: 600;
  border: 1.5px solid rgba(122,171,110,0.3);
  color: #7aab6e; background: transparent; cursor: pointer;
  transition: all 0.2s;
}
.snav-btn:hover { background: rgba(122,171,110,0.1); }
.snav-btn.active { background: #7aab6e; color: #0f1f10; border-color: #7aab6e; }

/* ─── PHONE FRAME ─── */
.phone-stage {
  display: flex; gap: 40px; align-items: flex-start;
  justify-content: center; flex-wrap: wrap;
}

.phone-wrap {
  display: flex; flex-direction: column; align-items: center; gap: 16px;
}
.phone-label {
  font-size: 11px; font-weight: 600; color: #5a7a5c;
  letter-spacing: 1.2px; text-transform: uppercase;
}

.phone {
  width: 320px;
  background: #1a2e1b;
  border-radius: 48px;
  padding: 14px;
  box-shadow:
    0 0 0 1px rgba(255,255,255,0.06),
    0 30px 80px rgba(0,0,0,0.5),
    inset 0 1px 0 rgba(255,255,255,0.08);
  position: relative;
}

/* notch */
.phone-notch {
  width: 100px; height: 26px;
  background: #1a2e1b;
  border-radius: 0 0 18px 18px;
  position: absolute; top: 14px; left: 50%; transform: translateX(-50%);
  z-index: 20;
  display: flex; align-items: center; justify-content: center; gap: 8px;
}
.notch-cam {
  width: 10px; height: 10px; border-radius: 50%;
  background: #0f1f10;
  border: 2px solid rgba(255,255,255,0.1);
}
.notch-speaker {
  width: 40px; height: 5px; border-radius: 99px;
  background: #0f1f10;
}

.phone-screen {
  width: 100%;
  aspect-ratio: 9/19.5;
  background: #f2f7ee;
  border-radius: 36px;
  overflow: hidden;
  position: relative;
}

/* status bar */
.status-bar {
  display: flex; justify-content: space-between; align-items: center;
  padding: 10px 20px 4px;
  background: inherit;
  font-size: 11px; font-weight: 700;
  position: relative; z-index: 10;
}
.status-time { color: inherit; }
.status-icons { display: flex; gap: 5px; align-items: center; font-size: 12px; }

/* offline badge */
.offline-pill {
  position: absolute; top: 34px; right: 0; left: 0;
  display: flex; justify-content: center; z-index: 30;
}
.offline-pill span {
  background: #d4870a; color: #fff;
  font-size: 10px; font-weight: 700;
  padding: 3px 14px; border-radius: 99px;
  letter-spacing: 0.5px;
  box-shadow: 0 2px 8px rgba(212,135,10,0.4);
}

/* screen content */
.screen { display: none; width: 100%; height: 100%; flex-direction: column; }
.screen.active { display: flex; }

/* ─── SCREEN: SPLASH / LOGIN ─── */
.s-splash {
  background: linear-gradient(160deg, #1e4620 0%, #2c6330 60%, #1a2e1b 100%);
  align-items: center; justify-content: center;
  gap: 0;
}
.splash-logo { font-size: 56px; margin-bottom: 10px; }
.splash-name { font-size: 28px; font-weight: 800; color: #fff; }
.splash-sub  { font-size: 12px; color: #a8d08d; margin-bottom: 36px; }
.splash-form { width: 100%; padding: 0 28px; display: flex; flex-direction: column; gap: 10px; }
.s-input {
  width: 100%; padding: 13px 16px; border-radius: 12px;
  background: rgba(255,255,255,0.1); border: 1.5px solid rgba(255,255,255,0.15);
  font-family: 'Outfit', sans-serif; font-size: 13px; color: #fff;
  outline: none;
}
.s-input::placeholder { color: rgba(255,255,255,0.45); }
.s-btn {
  width: 100%; padding: 14px; border-radius: 12px;
  font-family: 'Outfit', sans-serif; font-size: 14px; font-weight: 700;
  border: none; cursor: pointer;
}
.s-btn-primary { background: #7aab6e; color: #0f1f10; }
.s-btn-ghost   { background: transparent; color: rgba(255,255,255,0.5); font-size: 12px; }
.splash-version { color: rgba(255,255,255,0.2); font-size: 10px; margin-top: 16px; }

/* ─── TOP APP BAR ─── */
.app-bar {
  background: #1e4620;
  padding: 8px 16px 12px;
  display: flex; align-items: center; gap: 10px;
  flex-shrink: 0;
}
.app-bar.light {
  background: #fff;
  border-bottom: 1px solid #e8ede4;
}
.app-bar-back { font-size: 20px; cursor: pointer; color: rgba(255,255,255,0.8); }
.app-bar.light .app-bar-back { color: #1e4620; }
.app-bar-title { font-size: 15px; font-weight: 700; color: #fff; flex: 1; }
.app-bar.light .app-bar-title { color: #0f1f10; }
.app-bar-actions { display: flex; gap: 10px; }
.icon-btn { font-size: 20px; cursor: pointer; }

/* ─── HOME ─── */
.s-home { background: #f2f7ee; }

.home-header {
  background: linear-gradient(160deg, #1e4620, #2c6330);
  padding: 14px 18px 48px;
  color: #fff;
}
.home-greeting { font-size: 12px; color: #a8d08d; margin-bottom: 2px; }
.home-name  { font-size: 18px; font-weight: 700; }
.home-proj  { font-size: 11px; color: rgba(255,255,255,0.6); margin-top: 4px; }

.home-card-float {
  margin: -36px 14px 0;
  background: #fff;
  border-radius: 16px;
  padding: 16px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.12);
}
.hcf-title { font-size: 11px; font-weight: 700; color: #5a6b5a; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px; }
.compliance-ring-wrap { display: flex; align-items: center; gap: 14px; }
.ring-area { position: relative; width: 72px; height: 72px; flex-shrink: 0; }
.ring-area svg { transform: rotate(-90deg); }
.ring-pct {
  position: absolute; inset: 0;
  display: flex; align-items: center; justify-content: center;
  font-size: 15px; font-weight: 800; color: #2c6330;
}
.ring-stats { flex: 1; }
.ring-stat { display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px; font-size: 11.5px; color: #5a6b5a; }
.ring-stat b { font-size: 12px; font-weight: 700; }
.ring-mini-bar { height: 4px; background: #e8ede4; border-radius: 99px; overflow: hidden; margin-top: 2px; }
.ring-mini-fill { height: 100%; border-radius: 99px; }

.home-scroll { flex: 1; overflow-y: auto; padding: 14px 14px 80px; }

.section-lbl { font-size: 11px; font-weight: 700; color: #5a6b5a; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 10px; margin-top: 16px; }

/* alert chips row */
.alert-chips { display: flex; flex-direction: column; gap: 7px; }
.alert-chip {
  display: flex; align-items: center; gap: 10px;
  background: #fff; border-radius: 10px; padding: 10px 12px;
  border-left: 3px solid #ccc;
}
.alert-chip.red   { border-left-color: #c0392b; }
.alert-chip.amber { border-left-color: #d4870a; }
.alert-chip.green { border-left-color: #4a7c3f; }
.ac-icon { font-size: 16px; flex-shrink: 0; }
.ac-text { font-size: 11.5px; font-weight: 600; color: #1a2e1b; flex: 1; }
.ac-date { font-size: 10px; color: #b0bfae; }

/* module list */
.mod-list { display: flex; flex-direction: column; gap: 8px; }
.mod-row {
  display: flex; align-items: center; gap: 12px;
  background: #fff; border-radius: 12px; padding: 12px 14px;
  cursor: pointer;
}
.mod-icon {
  width: 36px; height: 36px; border-radius: 9px;
  display: flex; align-items: center; justify-content: center;
  font-size: 18px; flex-shrink: 0;
}
.bg-forest { background: #1e4620; }
.bg-moss   { background: #4a7c3f; }
.bg-amber  { background: #d4870a; }
.bg-teal   { background: #0a7c7c; }
.bg-red    { background: #c0392b; }
.mod-info { flex: 1; }
.mod-name { font-size: 12.5px; font-weight: 700; color: #1a2e1b; }
.mod-sub  { font-size: 10.5px; color: #b0bfae; margin-top: 1px; }
.mod-pct  { font-size: 13px; font-weight: 800; }
.mod-pct.green { color: #4a7c3f; }
.mod-pct.amber { color: #d4870a; }
.mod-pct.red   { color: #c0392b; }

/* bottom nav */
.bottom-nav {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: #fff;
  border-top: 1px solid #e8ede4;
  display: flex; align-items: center;
  padding: 8px 0 16px;
  z-index: 50;
}
.bnav-item {
  flex: 1; display: flex; flex-direction: column; align-items: center; gap: 3px;
  font-size: 9px; font-weight: 600; color: #b0bfae; cursor: pointer;
  transition: color 0.15s;
}
.bnav-item .bni { font-size: 20px; }
.bnav-item.active { color: #2c6330; }
.bnav-fab {
  width: 52px; height: 52px; border-radius: 50%;
  background: #2c6330; color: #fff;
  display: flex; align-items: center; justify-content: center;
  font-size: 26px;
  margin-top: -22px;
  box-shadow: 0 4px 16px rgba(44,99,48,0.4);
  flex-shrink: 0;
}

/* ─── CAPTURE / EVIDENCIA ─── */
.s-capture { background: #000; }

.cam-viewfinder {
  flex: 1; background: #111;
  position: relative; overflow: hidden;
  display: flex; align-items: center; justify-content: center;
}
.cam-overlay {
  position: absolute; inset: 0;
  border: 2px solid rgba(122,171,110,0.3);
}
.cam-corner {
  position: absolute; width: 24px; height: 24px;
  border-color: #7aab6e; border-style: solid; border-width: 0;
}
.cam-corner.tl { top: 20px; left: 20px; border-top-width: 3px; border-left-width: 3px; }
.cam-corner.tr { top: 20px; right: 20px; border-top-width: 3px; border-right-width: 3px; }
.cam-corner.bl { bottom: 20px; left: 20px; border-bottom-width: 3px; border-left-width: 3px; }
.cam-corner.br { bottom: 20px; right: 20px; border-bottom-width: 3px; border-right-width: 3px; }
.cam-grid {
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
  background-size: calc(100%/3) calc(100%/3);
}
.cam-icon { font-size: 64px; opacity: 0.15; }
.cam-scene-label {
  position: absolute; top: 16px; left: 16px;
  background: rgba(0,0,0,0.6); color: #7aab6e;
  font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 6px;
  letter-spacing: 0.5px; text-transform: uppercase;
}
.cam-offline-badge {
  position: absolute; top: 16px; right: 16px;
  background: #d4870a; color: #fff;
  font-size: 9px; font-weight: 700; padding: 4px 10px; border-radius: 6px;
}

.cam-controls {
  background: #111; padding: 14px 20px 20px;
}
.cam-meta-row { display: flex; gap: 8px; margin-bottom: 12px; }
.cam-chip {
  background: rgba(255,255,255,0.08); color: rgba(255,255,255,0.7);
  font-size: 10px; font-weight: 600; padding: 5px 10px; border-radius: 8px;
}
.cam-btns { display: flex; align-items: center; justify-content: space-between; }
.cam-side-btn { font-size: 26px; cursor: pointer; opacity: 0.6; }
.cam-shutter {
  width: 66px; height: 66px; border-radius: 50%;
  background: #fff; border: 3px solid rgba(255,255,255,0.3);
  display: flex; align-items: center; justify-content: center;
  font-size: 28px; cursor: pointer;
  box-shadow: 0 0 0 4px rgba(255,255,255,0.1);
}
.cam-prev { display: flex; gap: 6px; overflow-x: auto; padding: 10px 0 4px; }
.cam-thumb {
  width: 40px; height: 40px; border-radius: 6px;
  background: rgba(255,255,255,0.15); flex-shrink: 0;
  display: flex; align-items: center; justify-content: center;
  font-size: 16px; color: rgba(255,255,255,0.4);
  position: relative;
}
.cam-thumb.has-img { background: #2c6330; }
.cam-sync-dot {
  position: absolute; top: -3px; right: -3px;
  width: 8px; height: 8px; border-radius: 50%;
  background: #d4870a; border: 1.5px solid #111;
}

/* ─── SEGUIMIENTO ─── */
.s-seguimiento { background: #f2f7ee; }
.seg-scroll { flex: 1; overflow-y: auto; padding: 12px 14px 80px; }

.mini-kpi-row { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 14px; }
.mini-kpi {
  background: #fff; border-radius: 12px; padding: 12px 14px;
  border-top: 3px solid #4a7c3f;
}
.mini-kpi.amber { border-top-color: #d4870a; }
.mini-kpi.red   { border-top-color: #c0392b; }
.mini-kpi.teal  { border-top-color: #0a7c7c; }
.mk-lbl { font-size: 9.5px; color: #5a6b5a; text-transform: uppercase; letter-spacing: 0.5px; }
.mk-val { font-size: 22px; font-weight: 800; color: #1a2e1b; margin: 2px 0; }
.mk-sub { font-size: 10px; color: #b0bfae; }

.oblig-card {
  background: #fff; border-radius: 12px; padding: 13px 14px;
  margin-bottom: 8px; border-left: 3px solid #ccc;
  display: flex; align-items: flex-start; gap: 10px;
}
.oblig-card.green { border-left-color: #4a7c3f; }
.oblig-card.amber { border-left-color: #d4870a; }
.oblig-card.red   { border-left-color: #c0392b; }
.oc-dot { width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; margin-top: 5px; }
.oc-dot.green { background: #4a7c3f; }
.oc-dot.amber { background: #d4870a; }
.oc-dot.red   { background: #c0392b; }
.oc-body { flex: 1; }
.oc-title { font-size: 12px; font-weight: 700; color: #1a2e1b; }
.oc-sub   { font-size: 10.5px; color: #b0bfae; margin-top: 2px; }
.oc-right { text-align: right; flex-shrink: 0; }
.oc-pct { font-size: 14px; font-weight: 800; }
.oc-cam { font-size: 16px; cursor: pointer; margin-top: 2px; }

/* ─── SYNC ─── */
.s-sync { background: #f2f7ee; }
.sync-scroll { flex: 1; overflow-y: auto; padding: 14px 14px 80px; }

.sync-hero {
  background: linear-gradient(135deg, #1e4620, #0a7c7c);
  border-radius: 16px; padding: 20px; margin-bottom: 14px;
  text-align: center; color: #fff;
}
.sync-hero-icon { font-size: 40px; margin-bottom: 8px; }
.sync-hero-title { font-size: 15px; font-weight: 700; margin-bottom: 4px; }
.sync-hero-sub   { font-size: 11px; color: rgba(255,255,255,0.6); }
.sync-hero-btn {
  display: inline-block; margin-top: 14px;
  background: rgba(255,255,255,0.15); color: #fff;
  font-size: 12px; font-weight: 700; padding: 8px 22px; border-radius: 99px;
  border: 1.5px solid rgba(255,255,255,0.3);
  cursor: pointer;
}

.queue-item {
  background: #fff; border-radius: 12px; padding: 12px 14px;
  margin-bottom: 8px; display: flex; align-items: center; gap: 10px;
}
.qi-icon { width: 36px; height: 36px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0; }
.qi-body { flex: 1; }
.qi-title { font-size: 12px; font-weight: 600; color: #1a2e1b; }
.qi-sub   { font-size: 10px; color: #b0bfae; margin-top: 2px; }
.qi-status { font-size: 18px; flex-shrink: 0; }

.progress-line {
  height: 6px; background: #e8ede4; border-radius: 99px; overflow: hidden; margin: 4px 0;
}
.progress-line-fill { height: 100%; border-radius: 99px; background: #4a7c3f; }

/* ─── DETAIL ─── */
.s-detail { background: #f2f7ee; }
.det-scroll { flex: 1; overflow-y: auto; padding: 0 0 80px; }
.det-hero {
  background: #1e4620; padding: 16px 18px 36px; color: #fff;
}
.det-hero-lbl { font-size: 10px; color: #7aab6e; margin-bottom: 4px; text-transform: uppercase; letter-spacing: 0.8px; }
.det-hero-title { font-size: 17px; font-weight: 700; }
.det-hero-sub   { font-size: 11px; color: rgba(255,255,255,0.6); margin-top: 4px; }

.det-float {
  margin: -26px 14px 0;
  background: #fff; border-radius: 14px; padding: 14px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.1);
  display: flex; gap: 0;
}
.det-stat { flex: 1; text-align: center; }
.det-stat + .det-stat { border-left: 1px solid #e8ede4; }
.ds-val { font-size: 20px; font-weight: 800; color: #2c6330; }
.ds-lbl { font-size: 9.5px; color: #b0bfae; margin-top: 2px; }

.det-section { padding: 14px 14px 0; }
.det-section-title { font-size: 11px; font-weight: 700; color: #5a6b5a; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 10px; }

.evidence-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
.ev-thumb {
  aspect-ratio: 1; border-radius: 10px; overflow: hidden;
  background: #e8ede4; position: relative; cursor: pointer;
  display: flex; align-items: center; justify-content: center; font-size: 28px;
}
.ev-thumb.green-bg { background: #c8e6c9; }
.ev-thumb.blue-bg  { background: #b3e0f2; }
.ev-thumb.amber-bg { background: #fdebd0; }
.ev-thumb.red-bg   { background: #fde8e6; }
.ev-date {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: rgba(0,0,0,0.5); color: #fff;
  font-size: 9px; font-weight: 600; padding: 4px 6px;
}
.ev-add {
  aspect-ratio: 1; border-radius: 10px;
  background: transparent; border: 2px dashed #b0bfae;
  display: flex; align-items: center; justify-content: center;
  font-size: 24px; color: #b0bfae; cursor: pointer;
}

.action-fab {
  position: absolute; bottom: 80px; right: 14px;
  width: 48px; height: 48px; border-radius: 50%;
  background: #2c6330; color: #fff;
  display: flex; align-items: center; justify-content: center;
  font-size: 22px; box-shadow: 0 4px 14px rgba(44,99,48,0.4);
  cursor: pointer; z-index: 40;
}

/* scrollbar */
::-webkit-scrollbar { width: 0; }

/* ANNOTATIONS */
.annotation-layer {
  display: flex; flex-direction: column; gap: 14px;
  justify-content: center;
}
.ann {
  display: flex; align-items: flex-start; gap: 10px;
  max-width: 200px;
}
.ann.right { flex-direction: row-reverse; text-align: right; }
.ann-dot {
  width: 8px; height: 8px; border-radius: 50%;
  background: #7aab6e; flex-shrink: 0; margin-top: 5px;
}
.ann-text { font-size: 11.5px; color: #7aab6e; line-height: 1.45; }
.ann-text b { color: #a8d08d; display: block; margin-bottom: 1px; }

/* responsive */
@media (max-width: 700px) {
  .phone-stage { flex-direction: column; align-items: center; }
  .annotation-layer { display: none; }
}
</style>
</head>
<body>

<div class="page-header">
  <h1>GeoVerde <span>App Móvil</span> — Mockup Interactivo</h1>
  <p>Haz clic en las pantallas para navegar · Offline-first · Android &amp; iOS</p>
</div>

<!-- screen selector -->
<div class="screen-nav">
  <button class="snav-btn active" onclick="setScreen('home')">🏠 Inicio</button>
  <button class="snav-btn" onclick="setScreen('seguimiento')">✅ Seguimiento</button>
  <button class="snav-btn" onclick="setScreen('detail')">📋 Detalle obligación</button>
  <button class="snav-btn" onclick="setScreen('capture')">📷 Captura evidencia</button>
  <button class="snav-btn" onclick="setScreen('sync')">☁️ Sincronización</button>
</div>

<div class="phone-stage">

  <!-- left annotation -->
  <div class="annotation-layer" style="align-items:flex-end">
    <div class="ann right">
      <div class="ann-text"><b>Modo Offline</b>Trabaja sin internet. Los datos se almacenan localmente.</div>
      <div class="ann-dot"></div>
    </div>
    <div class="ann right">
      <div class="ann-text"><b>Cumplimiento global</b>% de avance por módulo visible desde el inicio.</div>
      <div class="ann-dot"></div>
    </div>
    <div class="ann right">
      <div class="ann-text"><b>Alertas priorizadas</b>Vencimientos y urgencias al frente.</div>
      <div class="ann-dot"></div>
    </div>
  </div>

  <!-- PHONE -->
  <div class="phone-wrap">
    <div class="phone">
      <div class="phone-notch">
        <div class="notch-cam"></div>
        <div class="notch-speaker"></div>
      </div>
      <div class="phone-screen">

        <!-- ──── SCREEN: HOME ──── -->
        <div class="screen s-home active" id="sc-home">
          <div style="background:#1e4620;padding:38px 18px 0;position:relative">
            <div style="color:#a8d08d;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:1px">Buenos días</div>
            <div style="color:#fff;font-size:17px;font-weight:700;margin:2px 0">María Consultor</div>
            <div style="color:rgba(255,255,255,0.5);font-size:10.5px">📍 Ambacar — Sucursal Norte · Quitoo</div>
            <!-- offline pill -->
            <div style="margin-top:8px;margin-bottom:14px">
              <span style="background:#d4870a;color:#fff;font-size:9.5px;font-weight:700;padding:4px 12px;border-radius:99px">⚡ MODO OFFLINE · Sin conexión</span>
            </div>
          </div>

          <!-- float card -->
          <div style="margin:-2px 12px 0;background:#fff;border-radius:16px;padding:14px;box-shadow:0 4px 20px rgba(0,0,0,0.12);position:relative;z-index:10">
            <div style="font-size:10px;font-weight:700;color:#5a6b5a;text-transform:uppercase;letter-spacing:0.8px;margin-bottom:10px">Cumplimiento global</div>
            <div class="compliance-ring-wrap">
              <div class="ring-area">
                <svg width="72" height="72" viewBox="0 0 72 72">
                  <circle cx="36" cy="36" r="30" fill="none" stroke="#e8ede4" stroke-width="7"/>
                  <circle cx="36" cy="36" r="30" fill="none" stroke="#4a7c3f" stroke-width="7"
                    stroke-dasharray="188.5" stroke-dashoffset="41" stroke-linecap="round"/>
                </svg>
                <div class="ring-pct">78%</div>
              </div>
              <div class="ring-stats">
                <div class="ring-stat">
                  <span>Cumplidas</span>
                  <b style="color:#4a7c3f">21</b>
                </div>
                <div class="ring-mini-bar"><div class="ring-mini-fill" style="width:75%;background:#4a7c3f"></div></div>
                <div class="ring-stat" style="margin-top:6px">
                  <span>Pendientes</span>
                  <b style="color:#d4870a">7</b>
                </div>
                <div class="ring-mini-bar"><div class="ring-mini-fill" style="width:25%;background:#d4870a"></div></div>
                <div class="ring-stat" style="margin-top:6px">
                  <span>Vencidas</span>
                  <b style="color:#c0392b">3</b>
                </div>
                <div class="ring-mini-bar"><div class="ring-mini-fill" style="width:10%;background:#c0392b"></div></div>
              </div>
            </div>
          </div>

          <div class="home-scroll" style="padding-top:12px">
            <div class="section-lbl">🚨 Alertas urgentes</div>
            <div class="alert-chips">
              <div class="alert-chip red">
                <div class="ac-icon">💧</div>
                <div class="ac-text">Monitoreo de agua · 5 días</div>
                <div class="ac-date">Mar 11</div>
              </div>
              <div class="alert-chip red">
                <div class="ac-icon">🗑</div>
                <div class="ac-text">Declaración desechos · Urgente</div>
                <div class="ac-date">Mar 15</div>
              </div>
              <div class="alert-chip amber">
                <div class="ac-icon">📄</div>
                <div class="ac-text">Informe anual 2026 · 70%</div>
                <div class="ac-date">Mar 31</div>
              </div>
            </div>

            <div class="section-lbl">Módulos</div>
            <div class="mod-list">
              <div class="mod-row" onclick="setScreen('seguimiento')">
                <div class="mod-icon bg-forest">✅</div>
                <div class="mod-info">
                  <div class="mod-name">Seguimiento Ambiental</div>
                  <div class="mod-sub">5 pendientes · PMA, Normativa</div>
                </div>
                <div class="mod-pct green">82%</div>
              </div>
              <div class="mod-row">
                <div class="mod-icon bg-moss">🔍</div>
                <div class="mod-info">
                  <div class="mod-name">Auditoría</div>
                  <div class="mod-sub">Informe 2025 entregado</div>
                </div>
                <div class="mod-pct green">100%</div>
              </div>
              <div class="mod-row">
                <div class="mod-icon bg-amber">📅</div>
                <div class="mod-info">
                  <div class="mod-name">Calendario</div>
                  <div class="mod-sub">2 actividades próximas</div>
                </div>
                <div class="mod-pct amber">65%</div>
              </div>
              <div class="mod-row">
                <div class="mod-icon bg-teal">📊</div>
                <div class="mod-info">
                  <div class="mod-name">Monitoreos</div>
                  <div class="mod-sub">Grundtech · 2 fuera de norma</div>
                </div>
                <div class="mod-pct amber">91%</div>
              </div>
              <div class="mod-row">
                <div class="mod-icon bg-red">♻️</div>
                <div class="mod-info">
                  <div class="mod-name">Residuos Sólidos</div>
                  <div class="mod-sub">Declaración Trim. 1 pendiente</div>
                </div>
                <div class="mod-pct red">54%</div>
              </div>
            </div>

            <!-- offline queue indicator -->
            <div style="background:#fff3e0;border-radius:12px;padding:12px 14px;margin-top:12px;border-left:3px solid #d4870a;cursor:pointer" onclick="setScreen('sync')">
              <div style="font-size:11px;font-weight:700;color:#7a4d00">☁️ 4 registros pendientes de subir</div>
              <div style="font-size:10px;color:#b0bfae;margin-top:2px">Se sincronizarán cuando haya internet · Toca para ver</div>
            </div>
          </div>

          <div class="bottom-nav">
            <div class="bnav-item active" onclick="setScreen('home')">
              <div class="bni">🏠</div>Inicio
            </div>
            <div class="bnav-item" onclick="setScreen('seguimiento')">
              <div class="bni">✅</div>Módulos
            </div>
            <div class="bnav-fab" onclick="setScreen('capture')">📷</div>
            <div class="bnav-item" onclick="setScreen('sync')">
              <div class="bni">☁️</div>Sync
            </div>
            <div class="bnav-item">
              <div class="bni">👤</div>Perfil
            </div>
          </div>
        </div>

        <!-- ──── SCREEN: SEGUIMIENTO ──── -->
        <div class="screen s-seguimiento" id="sc-seguimiento">
          <div style="background:#1e4620;padding-top:32px">
            <div class="app-bar" style="padding-bottom:16px">
              <div class="app-bar-back" onclick="setScreen('home')">←</div>
              <div class="app-bar-title">Seguimiento Ambiental</div>
              <div class="app-bar-actions">
                <div class="icon-btn" style="color:#a8d08d">⬇</div>
                <div class="icon-btn" style="color:#a8d08d">⋯</div>
              </div>
            </div>
          </div>

          <div class="seg-scroll">
            <div class="mini-kpi-row">
              <div class="mini-kpi">
                <div class="mk-lbl">Cumplimiento</div>
                <div class="mk-val" style="color:#2c6330">82%</div>
                <div class="mk-sub">21 de 28 cumplidas</div>
              </div>
              <div class="mini-kpi amber">
                <div class="mk-lbl">Pendientes</div>
                <div class="mk-val" style="color:#d4870a">5</div>
                <div class="mk-sub">3 vencen pronto</div>
              </div>
              <div class="mini-kpi red">
                <div class="mk-lbl">No conformidades</div>
                <div class="mk-val" style="color:#c0392b">2</div>
                <div class="mk-sub">Con plan de acción</div>
              </div>
              <div class="mini-kpi teal">
                <div class="mk-lbl">Evidencias</div>
                <div class="mk-val" style="color:#0a7c7c">76</div>
                <div class="mk-sub">Fotos + PDF</div>
              </div>
            </div>

            <!-- tabs -->
            <div style="display:flex;gap:6px;overflow-x:auto;padding-bottom:10px;margin-bottom:10px">
              <div style="background:#1e4620;color:#fff;font-size:11px;font-weight:700;padding:6px 14px;border-radius:99px;flex-shrink:0;cursor:pointer">Plan de Manejo</div>
              <div style="background:#fff;color:#5a6b5a;font-size:11px;font-weight:600;padding:6px 14px;border-radius:99px;flex-shrink:0;cursor:pointer">Normativa</div>
              <div style="background:#fff;color:#5a6b5a;font-size:11px;font-weight:600;padding:6px 14px;border-radius:99px;flex-shrink:0;cursor:pointer">Licencias</div>
              <div style="background:#fff;color:#5a6b5a;font-size:11px;font-weight:600;padding:6px 14px;border-radius:99px;flex-shrink:0;cursor:pointer">Contractual</div>
            </div>

            <div class="section-lbl">Obligaciones — Plan de Manejo</div>

            <div class="oblig-card green" onclick="setScreen('detail')">
              <div class="oc-dot green"></div>
              <div class="oc-body">
                <div class="oc-title">Mantenimiento de cunetas</div>
                <div class="oc-sub">PMA-CIV-003 · Mensual · J. Pérez</div>
              </div>
              <div class="oc-right">
                <div class="oc-pct" style="color:#4a7c3f">100%</div>
                <div class="oc-cam">📷</div>
              </div>
            </div>

            <div class="oblig-card green" onclick="setScreen('detail')">
              <div class="oc-dot green"></div>
              <div class="oc-body">
                <div class="oc-title">Revisión extintores</div>
                <div class="oc-sub">PMA-SEG-001 · Trimestral · K. Torres</div>
              </div>
              <div class="oc-right">
                <div class="oc-pct" style="color:#4a7c3f">100%</div>
                <div class="oc-cam">📷</div>
              </div>
            </div>

            <div class="oblig-card amber" onclick="setScreen('detail')">
              <div class="oc-dot amber"></div>
              <div class="oc-body">
                <div class="oc-title">Capacitación sustancias peligrosas</div>
                <div class="oc-sub">PMA-CAP-002 · Semestral · L. Mora</div>
              </div>
              <div class="oc-right">
                <div class="oc-pct" style="color:#d4870a">60%</div>
                <div class="oc-cam">📷</div>
              </div>
            </div>

            <div class="oblig-card green" onclick="setScreen('detail')">
              <div class="oc-dot green"></div>
              <div class="oc-body">
                <div class="oc-title">Inspección cubetos de contención</div>
                <div class="oc-sub">PMA-AMB-007 · Mensual · M. Consultor</div>
              </div>
              <div class="oc-right">
                <div class="oc-pct" style="color:#4a7c3f">100%</div>
                <div class="oc-cam" onclick="setScreen('capture')">📷</div>
              </div>
            </div>

            <div class="oblig-card red" onclick="setScreen('detail')">
              <div class="oc-dot red"></div>
              <div class="oc-body">
                <div class="oc-title">Registro de generación de residuos</div>
                <div class="oc-sub">PMA-RES-004 · Mensual · K. Torres</div>
              </div>
              <div class="oc-right">
                <div class="oc-pct" style="color:#c0392b">25%</div>
                <div class="oc-cam">⚠️</div>
              </div>
            </div>

            <div class="oblig-card amber" onclick="setScreen('detail')">
              <div class="oc-dot amber"></div>
              <div class="oc-body">
                <div class="oc-title">Mantenimiento trampa de grasas</div>
                <div class="oc-sub">PMA-AGU-002 · Bimestral · J. Pérez</div>
              </div>
              <div class="oc-right">
                <div class="oc-pct" style="color:#d4870a">75%</div>
                <div class="oc-cam">📷</div>
              </div>
            </div>
          </div>

          <div class="bottom-nav">
            <div class="bnav-item" onclick="setScreen('home')"><div class="bni">🏠</div>Inicio</div>
            <div class="bnav-item active"><div class="bni">✅</div>Módulos</div>
            <div class="bnav-fab" onclick="setScreen('capture')">📷</div>
            <div class="bnav-item" onclick="setScreen('sync')"><div class="bni">☁️</div>Sync</div>
            <div class="bnav-item"><div class="bni">👤</div>Perfil</div>
          </div>
        </div>

        <!-- ──── SCREEN: DETAIL ──── -->
        <div class="screen s-detail" id="sc-detail">
          <div style="background:#1e4620;padding-top:32px">
            <div class="app-bar" style="padding-bottom:16px">
              <div class="app-bar-back" onclick="setScreen('seguimiento')">←</div>
              <div class="app-bar-title">Detalle de obligación</div>
              <div class="app-bar-actions">
                <div class="icon-btn" style="color:#a8d08d">⋯</div>
              </div>
            </div>
          </div>

          <div class="det-scroll">
            <div class="det-hero">
              <div class="det-hero-lbl">PMA-AMB-007 · Área: Ambiental</div>
              <div class="det-hero-title">Inspección de cubetos de contención</div>
              <div class="det-hero-sub">Medida preventiva · Frecuencia: Mensual · Responsable: M. Consultor</div>
            </div>

            <div class="det-float">
              <div class="det-stat">
                <div class="ds-val">100%</div>
                <div class="ds-lbl">Avance</div>
              </div>
              <div class="det-stat">
                <div class="ds-val" style="color:#0a7c7c">5</div>
                <div class="ds-lbl">Evidencias</div>
              </div>
              <div class="det-stat">
                <div class="ds-val" style="color:#4a7c3f;font-size:13px">Cumple</div>
                <div class="ds-lbl">Estado</div>
              </div>
            </div>

            <div class="det-section" style="margin-top:28px">
              <div class="det-section-title">Descripción</div>
              <div style="background:#fff;border-radius:12px;padding:12px 14px;font-size:11.5px;color:#5a6b5a;line-height:1.5">
                Verificar integridad estructural y condiciones de los cubetos de contención de tanques de almacenamiento. Registrar con fotografías antes y después de cada inspección.
              </div>
            </div>

            <div class="det-section" style="margin-top:12px">
              <div class="det-section-title">Marco normativo</div>
              <div style="background:#fff;border-radius:12px;padding:12px 14px;display:flex;flex-direction:column;gap:6px">
                <div style="font-size:11px;color:#1a2e1b"><b style="color:#2c6330">TULSMA</b> · Libro VI, Anexo 2, Art. 44</div>
                <div style="font-size:11px;color:#1a2e1b"><b style="color:#2c6330">Plan de Manejo</b> · Medida PMA-AMB-007</div>
              </div>
            </div>

            <div class="det-section" style="margin-top:12px">
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px">
                <div class="det-section-title" style="margin:0">Evidencias fotográficas</div>
                <div style="font-size:11px;font-weight:700;color:#2c6330;cursor:pointer" onclick="setScreen('capture')">+ Agregar</div>
              </div>
              <div class="evidence-grid">
                <div class="ev-thumb green-bg">🛢<div class="ev-date">28 Feb · 09:14</div></div>
                <div class="ev-thumb blue-bg">💧<div class="ev-date">28 Feb · 09:18</div></div>
                <div class="ev-thumb amber-bg">🔧<div class="ev-date">28 Feb · 09:22</div></div>
                <div class="ev-add" onclick="setScreen('capture')">+</div>
              </div>
            </div>

            <div class="det-section" style="margin-top:12px">
              <div class="det-section-title">Historial</div>
              <div style="display:flex;flex-direction:column;gap:6px">
                <div style="background:#fff;border-radius:10px;padding:10px 12px;display:flex;gap:8px;align-items:center">
                  <div style="font-size:14px">✅</div>
                  <div><div style="font-size:11.5px;font-weight:600;color:#1a2e1b">Cumplida · Feb 2026</div><div style="font-size:10px;color:#b0bfae">M. Consultor · 5 evidencias</div></div>
                </div>
                <div style="background:#fff;border-radius:10px;padding:10px 12px;display:flex;gap:8px;align-items:center">
                  <div style="font-size:14px">✅</div>
                  <div><div style="font-size:11.5px;font-weight:600;color:#1a2e1b">Cumplida · Ene 2026</div><div style="font-size:10px;color:#b0bfae">J. Pérez · 3 evidencias</div></div>
                </div>
                <div style="background:#fff;border-radius:10px;padding:10px 12px;display:flex;gap:8px;align-items:center">
                  <div style="font-size:14px">⚠️</div>
                  <div><div style="font-size:11.5px;font-weight:600;color:#d4870a">Observación · Dic 2025</div><div style="font-size:10px;color:#b0bfae">Fisura menor detectada — corregida</div></div>
                </div>
              </div>
            </div>
          </div>

          <div class="action-fab" onclick="setScreen('capture')">📷</div>

          <div class="bottom-nav">
            <div class="bnav-item" onclick="setScreen('home')"><div class="bni">🏠</div>Inicio</div>
            <div class="bnav-item active" onclick="setScreen('seguimiento')"><div class="bni">✅</div>Módulos</div>
            <div class="bnav-fab" onclick="setScreen('capture')">📷</div>
            <div class="bnav-item" onclick="setScreen('sync')"><div class="bni">☁️</div>Sync</div>
            <div class="bnav-item"><div class="bni">👤</div>Perfil</div>
          </div>
        </div>

        <!-- ──── SCREEN: CAPTURE ──── -->
        <div class="screen s-capture" id="sc-capture">
          <div style="background:#000;padding:36px 16px 8px;display:flex;align-items:center;gap:10px">
            <div style="color:rgba(255,255,255,0.7);font-size:22px;cursor:pointer" onclick="setScreen('detail')">←</div>
            <div style="color:#fff;font-size:14px;font-weight:700;flex:1">Capturar evidencia</div>
            <div style="font-size:18px;color:rgba(255,255,255,0.6)">⚙</div>
          </div>

          <div class="cam-viewfinder">
            <div class="cam-grid"></div>
            <div class="cam-overlay">
              <div class="cam-corner tl"></div>
              <div class="cam-corner tr"></div>
              <div class="cam-corner bl"></div>
              <div class="cam-corner br"></div>
            </div>
            <div class="cam-scene-label">🛢 Cubeto · Tanque #3</div>
            <div class="cam-offline-badge">⚡ OFFLINE</div>
            <div class="cam-icon">📷</div>
          </div>

          <div class="cam-controls">
            <div style="font-size:10px;color:rgba(255,255,255,0.4);margin-bottom:6px">ASOCIADO A</div>
            <div class="cam-meta-row">
              <div class="cam-chip">✅ PMA-AMB-007</div>
              <div class="cam-chip">Cubeto contención</div>
              <div class="cam-chip">Mar 06, 2026</div>
            </div>

            <div style="font-size:10px;color:rgba(255,255,255,0.4);margin-bottom:6px">CAMPO LIBRE</div>
            <input style="width:100%;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:8px 12px;color:#fff;font-size:12px;font-family:'Outfit';outline:none;margin-bottom:10px" placeholder="Descripción o nota (opcional)..." />

            <div class="cam-btns">
              <div class="cam-side-btn">📁</div>
              <div class="cam-shutter" onclick="snapPhoto()">📸</div>
              <div class="cam-side-btn">🔄</div>
            </div>

            <div style="font-size:10px;color:rgba(255,255,255,0.3);margin:10px 0 4px">CAPTURAS EN ESTA SESIÓN</div>
            <div class="cam-prev" id="cam-prev-strip">
              <div class="cam-thumb has-img">🛢<div class="cam-sync-dot"></div></div>
              <div class="cam-thumb has-img">💧<div class="cam-sync-dot"></div></div>
              <div class="cam-thumb" style="font-size:20px">+</div>
            </div>
            <div style="font-size:9.5px;color:rgba(255,255,255,0.25);margin-top:6px;text-align:center">Las fotos se guardan localmente · Se subirán cuando haya internet</div>
          </div>
        </div>

        <!-- ──── SCREEN: SYNC ──── -->
        <div class="screen s-sync" id="sc-sync">
          <div style="background:#1e4620;padding-top:32px">
            <div class="app-bar" style="padding-bottom:16px">
              <div class="app-bar-back" onclick="setScreen('home')">←</div>
              <div class="app-bar-title">Sincronización</div>
              <div class="app-bar-actions">
                <div class="icon-btn" style="color:#a8d08d">🔄</div>
              </div>
            </div>
          </div>

          <div class="sync-scroll">
            <div class="sync-hero">
              <div class="sync-hero-icon">📡</div>
              <div class="sync-hero-title">4 registros pendientes</div>
              <div class="sync-hero-sub">Guardados localmente · Esperando conexión a internet</div>
              <div class="sync-hero-btn">Sincronizar ahora</div>
            </div>

            <div class="section-lbl">En cola de envío</div>

            <div class="queue-item">
              <div class="qi-icon bg-forest">📷</div>
              <div class="qi-body">
                <div class="qi-title">Foto cubeto tanque #3 · PMA-AMB-007</div>
                <div class="qi-sub">1.4 MB · Hoy 09:22 · Offline</div>
                <div class="progress-line"><div class="progress-line-fill" style="width:0%"></div></div>
              </div>
              <div class="qi-status">⏳</div>
            </div>

            <div class="queue-item">
              <div class="qi-icon bg-moss">📷</div>
              <div class="qi-body">
                <div class="qi-title">Foto trampa de grasas · PMA-AGU-002</div>
                <div class="qi-sub">2.1 MB · Hoy 08:45 · Offline</div>
                <div class="progress-line"><div class="progress-line-fill" style="width:0%"></div></div>
              </div>
              <div class="qi-status">⏳</div>
            </div>

            <div class="queue-item">
              <div class="qi-icon" style="background:#0a7c7c">📝</div>
              <div class="qi-body">
                <div class="qi-title">Registro obs. capacitación · PMA-CAP-002</div>
                <div class="qi-sub">Texto · Hoy 07:30 · Offline</div>
                <div class="progress-line"><div class="progress-line-fill" style="width:0%"></div></div>
              </div>
              <div class="qi-status">⏳</div>
            </div>

            <div class="queue-item">
              <div class="qi-icon bg-amber">📄</div>
              <div class="qi-body">
                <div class="qi-title">Ficha inspección vías · PMA-CIV-003</div>
                <div class="qi-sub">PDF · 0.8 MB · Ayer 16:10 · Offline</div>
                <div class="progress-line"><div class="progress-line-fill" style="width:0%"></div></div>
              </div>
              <div class="qi-status">⏳</div>
            </div>

            <div class="section-lbl" style="margin-top:16px">Últimas sincronizaciones exitosas</div>

            <div class="queue-item">
              <div class="qi-icon bg-forest">📷</div>
              <div class="qi-body">
                <div class="qi-title">Foto extintores · PMA-SEG-001</div>
                <div class="qi-sub">Sincronizado el 05 Mar · 14:30</div>
                <div class="progress-line"><div class="progress-line-fill" style="width:100%;background:#4a7c3f"></div></div>
              </div>
              <div class="qi-status">✅</div>
            </div>

            <div class="queue-item">
              <div class="qi-icon bg-moss">📄</div>
              <div class="qi-body">
                <div class="qi-title">Resultado monitoreo ruido · Grundtech</div>
                <div class="qi-sub">Sincronizado el 04 Mar · 11:20</div>
                <div class="progress-line"><div class="progress-line-fill" style="width:100%;background:#4a7c3f"></div></div>
              </div>
              <div class="qi-status">✅</div>
            </div>

            <!-- storage indicator -->
            <div style="background:#fff;border-radius:14px;padding:14px;margin-top:12px">
              <div style="font-size:11px;font-weight:700;color:#5a6b5a;text-transform:uppercase;letter-spacing:0.8px;margin-bottom:10px">Almacenamiento local usado</div>
              <div style="display:flex;justify-content:space-between;font-size:11px;color:#5a6b5a;margin-bottom:6px">
                <span>45.2 MB usados</span>
                <span>200 MB disponibles</span>
              </div>
              <div class="progress-line" style="height:8px">
                <div class="progress-line-fill" style="width:22%;background:#4a7c3f"></div>
              </div>
              <div style="font-size:10px;color:#b0bfae;margin-top:6px">Fotos: 38.4 MB · Documentos: 4.8 MB · Registros: 2.0 MB</div>
            </div>
          </div>

          <div class="bottom-nav">
            <div class="bnav-item" onclick="setScreen('home')"><div class="bni">🏠</div>Inicio</div>
            <div class="bnav-item" onclick="setScreen('seguimiento')"><div class="bni">✅</div>Módulos</div>
            <div class="bnav-fab" onclick="setScreen('capture')">📷</div>
            <div class="bnav-item active"><div class="bni">☁️</div>Sync</div>
            <div class="bnav-item"><div class="bni">👤</div>Perfil</div>
          </div>
        </div>

      </div><!-- .phone-screen -->
    </div><!-- .phone -->
    <div class="phone-label" id="screen-label">Pantalla: Inicio</div>
  </div><!-- .phone-wrap -->

  <!-- right annotation -->
  <div class="annotation-layer">
    <div class="ann">
      <div class="ann-dot"></div>
      <div class="ann-text"><b>Captura guiada</b>Cada foto se asocia automáticamente al módulo y obligación activa.</div>
    </div>
    <div class="ann">
      <div class="ann-dot"></div>
      <div class="ann-text"><b>Cola de sincronización</b>Los archivos esperan conexión y suben en segundo plano.</div>
    </div>
    <div class="ann">
      <div class="ann-dot"></div>
      <div class="ann-text"><b>Navegación por módulos</b>Acceso rápido a las 6 secciones desde la barra inferior.</div>
    </div>
  </div>

</div><!-- .phone-stage -->

<script>
const screenLabels = {
  home:        'Pantalla: Inicio',
  seguimiento: 'Pantalla: Seguimiento Ambiental',
  detail:      'Pantalla: Detalle de Obligación',
  capture:     'Pantalla: Captura de Evidencia',
  sync:        'Pantalla: Sincronización Offline',
};

function setScreen(id) {
  document.querySelectorAll('.screen').forEach(s => s.classList.remove('active'));
  document.getElementById('sc-' + id).classList.add('active');
  document.getElementById('screen-label').textContent = screenLabels[id] || id;

  document.querySelectorAll('.snav-btn').forEach(b => {
    b.classList.toggle('active', b.getAttribute('onclick')?.includes(id));
  });
}

let photoCount = 2;
function snapPhoto() {
  photoCount++;
  const strip = document.getElementById('cam-prev-strip');
  const emojis = ['🛢','💧','🔧','🌿','⚙️','🏭'];
  const em = emojis[photoCount % emojis.length];
  const thumb = document.createElement('div');
  thumb.className = 'cam-thumb has-img';
  thumb.innerHTML = em + '<div class="cam-sync-dot"></div>';
  thumb.style.animation = 'pop 0.2s ease';
  strip.insertBefore(thumb, strip.children[strip.children.length - 1]);
  thumb.style.transform = 'scale(0)';
  requestAnimationFrame(() => {
    thumb.style.transition = 'transform 0.2s ease';
    thumb.style.transform = 'scale(1)';
  });
}
</script>
<!-- ═══ BOTÓN FLOTANTE REGRESAR ═══ -->
<style>
  .fab-back-mockup {
    position: fixed;
    bottom: 28px;
    left: 28px;
    z-index: 9999;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    border-radius: 999px;
    background: linear-gradient(135deg, #1e3d1b 0%, #7aab6e 100%);
    color: #fff;
    font-family: system-ui, sans-serif;
    font-size: 13.5px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    box-shadow: 0 6px 24px rgba(122, 171, 110, 0.45), 0 2px 6px rgba(0,0,0,0.18);
    transition: transform 0.18s ease, box-shadow 0.18s ease;
    opacity: 0;
    transform: translateY(10px);
    animation: fabMockupIn 0.45s 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
  }
  .fab-back-mockup:hover {
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 10px 32px rgba(122, 171, 110, 0.55), 0 3px 8px rgba(0,0,0,0.22);
    color: #fff;
    text-decoration: none;
  }
  .fab-back-mockup:active { transform: translateY(0) scale(0.97); }
  .fab-back-mockup svg { flex-shrink: 0; transition: transform 0.2s ease; }
  .fab-back-mockup:hover svg { transform: translateX(-3px); }
  @keyframes fabMockupIn { to { opacity: 1; transform: translateY(0); } }
  @media (max-width: 575px) {
    .fab-back-mockup { bottom: 18px; left: 18px; padding: 10px 16px; font-size: 12.5px; }
  }
</style>

<a id="fabBackMockup" class="fab-back-mockup" href="./programacion.php" role="button" aria-label="Regresar a Programación a la Medida">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
  </svg>
  Regresar
</a>
<script>
  (function(){
    var btn = document.getElementById('fabBackMockup');
    if (!btn) return;
    if (document.referrer && document.referrer !== window.location.href) {
      btn.addEventListener('click', function(e){ e.preventDefault(); history.back(); });
    }
  })();
</script>

</body>
</html>
