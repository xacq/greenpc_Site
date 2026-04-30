<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cooperativa Tulcan LTDA — Sistema de Riesgo Crediticio</title>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=IBM+Plex+Mono:wght@400;500&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

:root {
  --ink:        #0A0F1E;
  --ink2:       #111827;
  --ink3:       #1C2539;
  --slate:      #2D3A52;
  --steel:      #3E4F6B;
  --gold:       #C9A84C;
  --gold2:      #E5C97A;
  --gold-dim:   rgba(201,168,76,0.12);
  --white:      #FFFFFF;
  --off:        #F4F6FA;
  --mist:       #E8ECF4;
  --txt:        #1A2340;
  --txt2:       #4A5568;
  --txt3:       #8492A6;
  --border:     rgba(0,0,0,0.07);
  --border2:    rgba(0,0,0,0.12);
  --side-w:     240px;
  --top-h:      56px;

  --risk-a1:    #0E7C45;
  --risk-a1-bg: #E6F4EE;
  --risk-a2:    #1A6FA8;
  --risk-a2-bg: #E3F0FA;
  --risk-a3:    #6B4BBE;
  --risk-a3-bg: #EEE9FB;
  --risk-b:     #B45309;
  --risk-b-bg:  #FEF3C7;
  --risk-c:     #C2410C;
  --risk-c-bg:  #FFEDD5;
  --risk-d:     #DC2626;
  --risk-d-bg:  #FEE2E2;
  --risk-e:     #7F1D1D;
  --risk-e-bg:  #FECACA;
  --risk-alto:  #DC2626;
  --risk-alto-bg:#FEE2E2;
  --risk-bajo:  #0E7C45;
  --risk-bajo-bg:#E6F4EE;
}

html,body{height:100%;overflow:hidden}
body{font-family:'IBM Plex Sans',sans-serif;background:var(--off);color:var(--txt);font-size:13.5px;display:flex;flex-direction:column}

/* ─── TOPBAR ─────────────────────────────────────── */
.topbar{
  height:var(--top-h);
  background:var(--ink);
  display:flex;align-items:center;
  padding:0 20px;
  gap:16px;
  border-bottom:1px solid rgba(201,168,76,0.3);
  position:relative;
  z-index:200;
  flex-shrink:0;
}
.topbar-logo{
  display:flex;align-items:center;gap:10px;
  border-right:1px solid rgba(255,255,255,0.1);
  padding-right:20px;
}
.logo-square{
  width:32px;height:32px;
  background:var(--gold);
  border-radius:6px;
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
}
.logo-square svg{width:18px;height:18px;fill:var(--ink)}
.brand-name{
  font-family:'Playfair Display',serif;
  font-size:15px;color:var(--white);
  letter-spacing:0.3px;line-height:1.2;
}
.brand-sub{font-size:10px;color:var(--gold);letter-spacing:1.5px;text-transform:uppercase;font-weight:300}

.top-nav{display:flex;align-items:center;gap:2px;flex:1;margin-left:10px}
.top-nav a{
  color:rgba(255,255,255,0.55);
  font-size:12.5px;font-weight:400;
  padding:6px 13px;border-radius:6px;
  cursor:pointer;transition:all .18s;
  text-decoration:none;letter-spacing:0.2px;
}
.top-nav a:hover{color:#fff;background:rgba(255,255,255,0.07)}
.top-nav a.active{color:var(--gold);background:var(--gold-dim)}

.topbar-right{
  display:flex;align-items:center;gap:14px;margin-left:auto;
}
.user-chip{
  display:flex;align-items:center;gap:8px;
  background:rgba(255,255,255,0.07);
  border:1px solid rgba(255,255,255,0.1);
  padding:5px 12px;border-radius:20px;cursor:pointer;
}
.user-av{
  width:22px;height:22px;border-radius:50%;
  background:var(--gold);
  display:flex;align-items:center;justify-content:center;
  font-size:10px;font-weight:600;color:var(--ink);
}
.user-name{font-size:12px;color:rgba(255,255,255,0.75)}
.top-badge{
  background:var(--gold);color:var(--ink);
  font-size:10px;font-weight:600;
  padding:3px 8px;border-radius:4px;
  letter-spacing:0.5px;
}

/* ─── BODY LAYOUT ────────────────────────────────── */
.app-body{display:flex;flex:1;overflow:hidden}

/* ─── SIDEBAR ────────────────────────────────────── */
.sidebar{
  width:var(--side-w);
  background:var(--ink2);
  border-right:1px solid rgba(201,168,76,0.15);
  display:flex;flex-direction:column;
  overflow-y:auto;padding:16px 0;
  flex-shrink:0;
}
.sidebar::-webkit-scrollbar{width:3px}
.sidebar::-webkit-scrollbar-thumb{background:rgba(255,255,255,0.1)}

.side-section{padding:0 12px;margin-bottom:18px}
.side-label{
  font-size:9.5px;font-weight:600;
  color:rgba(255,255,255,0.25);
  letter-spacing:1.8px;text-transform:uppercase;
  padding:0 8px;margin-bottom:6px;
}
.side-item{
  display:flex;align-items:center;gap:10px;
  padding:9px 10px;border-radius:8px;
  cursor:pointer;color:rgba(255,255,255,0.5);
  font-size:12.5px;font-weight:400;
  transition:all .18s;margin-bottom:1px;
  position:relative;
}
.side-item:hover{background:rgba(255,255,255,0.06);color:rgba(255,255,255,0.85)}
.side-item.active{
  background:var(--gold-dim);
  color:var(--gold2);
  border:1px solid rgba(201,168,76,0.25);
}
.side-item.active::before{
  content:'';position:absolute;left:0;top:50%;transform:translateY(-50%);
  width:3px;height:60%;background:var(--gold);border-radius:0 2px 2px 0;
}
.side-ico{width:16px;height:16px;opacity:0.7;flex-shrink:0}
.side-item.active .side-ico{opacity:1}
.side-badge{
  margin-left:auto;font-size:10px;
  background:var(--gold);color:var(--ink);
  padding:1px 6px;border-radius:10px;font-weight:600;
}

.side-footer{
  margin-top:auto;padding:12px;
  border-top:1px solid rgba(255,255,255,0.06);
}
.model-info{
  background:rgba(201,168,76,0.08);
  border:1px solid rgba(201,168,76,0.2);
  border-radius:8px;padding:10px 12px;
}
.model-info-label{font-size:9px;color:var(--gold);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:4px}
.model-info-val{font-size:11px;color:rgba(255,255,255,0.6);font-family:'IBM Plex Mono',monospace}
.model-dot{display:inline-block;width:6px;height:6px;border-radius:50%;background:#22c55e;margin-right:5px;animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:0.4}}

/* ─── CONTENT ────────────────────────────────────── */
.content{flex:1;overflow-y:auto;padding:0}
.content::-webkit-scrollbar{width:5px}
.content::-webkit-scrollbar-thumb{background:rgba(0,0,0,0.12)}

.screen{display:none;padding:28px 32px}
.screen.active{display:block}

/* ─── COMMON ─────────────────────────────────────── */
.page-header{
  display:flex;align-items:flex-start;justify-content:space-between;
  margin-bottom:24px;flex-wrap:wrap;gap:12px;
}
.page-title{
  font-family:'Playfair Display',serif;
  font-size:21px;color:var(--txt);letter-spacing:-0.3px;
}
.page-sub{font-size:12px;color:var(--txt3);margin-top:3px}

.btn{
  display:inline-flex;align-items:center;gap:6px;
  padding:8px 16px;border-radius:7px;
  font-family:'IBM Plex Sans',sans-serif;font-size:12.5px;font-weight:500;
  cursor:pointer;transition:all .18s;border:none;
  text-decoration:none;
}
.btn-primary{background:var(--gold);color:var(--ink)}
.btn-primary:hover{background:var(--gold2)}
.btn-outline{background:transparent;border:1px solid var(--border2);color:var(--txt2)}
.btn-outline:hover{background:var(--mist);border-color:var(--steel)}
.btn-ghost{background:transparent;color:var(--txt2);border:1px solid transparent}
.btn-ghost:hover{background:var(--mist)}
.btn-danger{background:#FEE2E2;color:#DC2626;border:1px solid #FECACA}
.btn-danger:hover{background:#FECACA}
.btn-sm{padding:5px 11px;font-size:11.5px}
.btn-xs{padding:4px 9px;font-size:11px}

.card{
  background:var(--white);border-radius:12px;
  border:1px solid var(--border);
  overflow:hidden;
}
.card-body{padding:20px 24px}

/* ─── RISK BADGES ────────────────────────────────── */
.rb{
  display:inline-flex;align-items:center;justify-content:center;
  font-family:'IBM Plex Mono',monospace;
  font-size:11px;font-weight:500;
  padding:3px 9px;border-radius:4px;
  letter-spacing:0.5px;
}
.rb-a1{background:var(--risk-a1-bg);color:var(--risk-a1)}
.rb-a2{background:var(--risk-a2-bg);color:var(--risk-a2)}
.rb-a3{background:var(--risk-a3-bg);color:var(--risk-a3)}
.rb-b{background:var(--risk-b-bg);color:var(--risk-b)}
.rb-c{background:var(--risk-c-bg);color:var(--risk-c)}
.rb-d{background:var(--risk-d-bg);color:var(--risk-d)}
.rb-e{background:var(--risk-e-bg);color:var(--risk-e)}
.rb-alto{background:var(--risk-alto-bg);color:var(--risk-alto);font-family:'IBM Plex Sans',sans-serif;font-size:11px}
.rb-bajo{background:var(--risk-bajo-bg);color:var(--risk-bajo);font-family:'IBM Plex Sans',sans-serif;font-size:11px}
.rb-medio{background:#FEF3C7;color:#B45309;font-family:'IBM Plex Sans',sans-serif;font-size:11px}
.rb-activo{background:#E6F4EE;color:#0E7C45;font-family:'IBM Plex Sans',sans-serif;font-size:11px}
.rb-processed{background:#DBEAFE;color:#1D4ED8;font-family:'IBM Plex Sans',sans-serif;font-size:11px}

/* ─── KPI STRIP ──────────────────────────────────── */
.kpi-strip{display:grid;grid-template-columns:repeat(5,1fr);gap:14px;margin-bottom:24px}
.kpi{
  background:var(--white);border:1px solid var(--border);
  border-radius:10px;padding:16px 18px;
  position:relative;overflow:hidden;transition:transform .2s;
}
.kpi:hover{transform:translateY(-1px)}
.kpi::after{
  content:'';position:absolute;top:0;right:0;
  width:60px;height:60px;border-radius:0 10px 0 100%;
  opacity:0.06;
}
.kpi-ico{font-size:18px;margin-bottom:10px}
.kpi-val{
  font-family:'IBM Plex Mono',monospace;
  font-size:22px;font-weight:500;color:var(--txt);line-height:1;
}
.kpi-lbl{font-size:11px;color:var(--txt3);margin-top:5px}
.kpi-delta{font-size:10.5px;margin-top:6px;display:flex;align-items:center;gap:3px}
.kpi-up{color:#0E7C45}.kpi-dn{color:#DC2626}.kpi-neu{color:var(--txt3)}

/* ─── TABLES ─────────────────────────────────────── */
.tbl-wrap{overflow-x:auto}
table{width:100%;border-collapse:collapse}
thead th{
  text-align:left;padding:10px 14px;
  font-size:10.5px;font-weight:600;
  color:var(--txt3);text-transform:uppercase;
  letter-spacing:0.8px;
  border-bottom:1px solid var(--mist);
  background:var(--off);white-space:nowrap;
}
tbody td{
  padding:11px 14px;
  border-bottom:1px solid var(--mist);
  color:var(--txt);vertical-align:middle;
  font-size:13px;
}
tbody tr:last-child td{border-bottom:none}
tbody tr:hover{background:#FAFBFD}
.mono{font-family:'IBM Plex Mono',monospace;font-size:12.5px}
.actions-td{display:flex;gap:5px;flex-wrap:wrap}

/* ─── FILTERS ────────────────────────────────────── */
.filter-bar{
  display:flex;gap:10px;flex-wrap:wrap;
  margin-bottom:16px;
}
.flt-input,.flt-select{
  background:var(--white);border:1px solid var(--border2);
  border-radius:7px;padding:7px 12px;
  font-family:'IBM Plex Sans',sans-serif;font-size:12.5px;
  color:var(--txt);outline:none;cursor:pointer;
  transition:border .18s;
}
.flt-input{min-width:200px}
.flt-select{min-width:160px}
.flt-input:focus,.flt-select:focus{border-color:var(--gold)}
.flt-input::placeholder{color:var(--txt3)}
.filter-actions{display:flex;gap:8px;align-items:center;flex-wrap:wrap}
.btn-filter{
  background:var(--ink);color:var(--gold);
  border:1px solid rgba(201,168,76,0.3);
  padding:7px 18px;border-radius:7px;
  font-size:12.5px;font-weight:500;cursor:pointer;
  font-family:'IBM Plex Sans',sans-serif;
  transition:all .18s;
}
.btn-filter:hover{background:var(--ink3);color:var(--gold2)}

/* ─── SECTION SEPARATOR ──────────────────────────── */
.sep{border:none;border-top:1px solid var(--mist);margin:22px 0}

/* ─── GRID ───────────────────────────────────────── */
.grid-2{display:grid;grid-template-columns:1fr 1fr;gap:18px}
.grid-3{display:grid;grid-template-columns:1fr 1fr 1fr;gap:18px}

/* ─── FORMS ──────────────────────────────────────── */
.form-group{margin-bottom:16px}
.form-label{
  display:block;font-size:11.5px;font-weight:500;
  color:var(--txt2);margin-bottom:5px;letter-spacing:0.3px;
}
.form-control{
  width:100%;background:var(--white);
  border:1px solid var(--border2);border-radius:7px;
  padding:8px 12px;font-family:'IBM Plex Sans',sans-serif;
  font-size:13px;color:var(--txt);outline:none;
  transition:border .18s;
}
.form-control:focus{border-color:var(--gold);box-shadow:0 0 0 3px rgba(201,168,76,0.1)}
.form-control::placeholder{color:var(--txt3)}
.form-select{appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%238492A6' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 10px center;padding-right:28px}

/* ─── UPLOAD ZONE ────────────────────────────────── */
.upload-zone{
  border:2px dashed var(--border2);border-radius:10px;
  padding:36px 24px;text-align:center;
  background:var(--off);cursor:pointer;
  transition:all .2s;margin-bottom:16px;
}
.upload-zone:hover{border-color:var(--gold);background:var(--gold-dim)}
.upload-icon{font-size:32px;margin-bottom:10px}
.upload-txt{font-size:13px;color:var(--txt2)}
.upload-sub{font-size:11px;color:var(--txt3);margin-top:4px}

/* ─── ML SCORING WIDGET ──────────────────────────── */
.scoring-wrap{position:relative}
.gauge-outer{
  background:var(--off);border:1px solid var(--border);
  border-radius:12px;padding:20px;margin-bottom:16px;
}
.gauge-label{font-size:11px;color:var(--txt3);letter-spacing:1px;text-transform:uppercase;margin-bottom:12px}
.prob-big{
  font-family:'IBM Plex Mono',monospace;
  font-size:38px;font-weight:500;color:var(--txt);
  line-height:1;
}
.prob-sub{font-size:12px;color:var(--txt3);margin-top:4px}

.gauge-bar-wrap{
  background:var(--mist);border-radius:20px;
  height:8px;overflow:hidden;margin:12px 0;
  position:relative;
}
.gauge-bar{
  height:100%;border-radius:20px;
  background:linear-gradient(90deg,#0E7C45,#22c55e 40%,#eab308 65%,#f97316 80%,#DC2626);
  transition:width .6s ease;
}
.gauge-needle{
  position:absolute;top:-3px;
  width:14px;height:14px;background:var(--ink);
  border:2px solid white;border-radius:50%;
  transform:translateX(-50%);
  box-shadow:0 1px 4px rgba(0,0,0,0.3);
  transition:left .6s ease;
}

.cat-grid{
  display:grid;grid-template-columns:repeat(7,1fr);
  gap:5px;margin:14px 0;
}
.cat-cell{
  border-radius:6px;padding:7px 4px;text-align:center;
  font-family:'IBM Plex Mono',monospace;
  font-size:11px;font-weight:500;cursor:pointer;
  transition:transform .15s;border:2px solid transparent;
}
.cat-cell:hover{transform:scale(1.05)}
.cat-cell.selected{border-color:var(--ink);box-shadow:0 0 0 2px rgba(0,0,0,0.2)}
.cat-cell-name{font-size:9px;margin-top:2px;opacity:0.7}

.scoring-meta{
  background:var(--off);border:1px solid var(--border);
  border-radius:8px;padding:14px;font-size:12px;
}
.scoring-row{
  display:flex;justify-content:space-between;align-items:center;
  padding:5px 0;border-bottom:1px solid var(--mist);
}
.scoring-row:last-child{border-bottom:none}
.scoring-key{color:var(--txt3)}
.scoring-val{font-weight:500;color:var(--txt);font-family:'IBM Plex Mono',monospace}

/* ─── CLIENT DETAIL ──────────────────────────────── */
.detail-label{font-size:11px;color:var(--txt3);font-weight:500;letter-spacing:0.3px}
.detail-value{font-size:13.5px;color:var(--txt);font-weight:400;margin-top:2px}

.info-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.info-row{padding:10px 0;border-bottom:1px solid var(--mist)}
.info-row:last-child{border-bottom:none}

/* ─── HISTORY TABLE ──────────────────────────────── */
.diff-up{color:var(--risk-d);font-family:'IBM Plex Mono',monospace;font-size:12px}
.diff-dn{color:var(--risk-a1);font-family:'IBM Plex Mono',monospace;font-size:12px}

/* ─── BATCH STATUS ───────────────────────────────── */
.progress-mini{height:4px;border-radius:2px;background:var(--mist);overflow:hidden;margin-top:5px}
.progress-mini-bar{height:100%;border-radius:2px;background:var(--gold);transition:width .6s}

/* ─── CHARTS ─────────────────────────────────────── */
.chart-card{
  background:var(--white);border:1px solid var(--border);
  border-radius:12px;padding:20px;
}
.chart-header{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:16px}
.chart-title{font-size:13.5px;font-weight:600;color:var(--txt)}
.chart-sub{font-size:11px;color:var(--txt3);margin-top:2px}

/* ─── TABS ───────────────────────────────────────── */
.tab-row{display:flex;gap:2px;border-bottom:1px solid var(--mist);margin-bottom:20px}
.tab{
  padding:8px 16px;font-size:12.5px;cursor:pointer;
  color:var(--txt3);border-bottom:2px solid transparent;
  transition:all .18s;
}
.tab:hover{color:var(--txt2)}
.tab.active{color:var(--txt);border-bottom-color:var(--gold);font-weight:500}

/* ─── STATUS INDICATOR ───────────────────────────── */
.status-dot{display:inline-block;width:7px;height:7px;border-radius:50%;margin-right:5px}
.status-ok{background:#22c55e}
.status-warn{background:#eab308}
.status-err{background:#DC2626}

/* ─── MODEL EVAL SECTION ─────────────────────────── */
.eval-banner{
  background:var(--ink);border:1px solid rgba(201,168,76,0.25);
  border-radius:10px;padding:14px 18px;
  display:flex;align-items:center;justify-content:space-between;
  gap:16px;flex-wrap:wrap;
  margin-bottom:20px;
}
.eval-banner-txt{color:rgba(255,255,255,0.7);font-size:12.5px}
.eval-banner-val{color:var(--gold2);font-family:'IBM Plex Mono',monospace;font-size:14px;font-weight:500}

/* scrollbar main */
.content::-webkit-scrollbar{width:5px}
.content::-webkit-scrollbar-thumb{background:rgba(0,0,0,0.1);border-radius:3px}

/* ─── TOOLTIP ────────────────────────────────────── */
.tt{
  position:fixed;background:var(--ink);color:#fff;
  font-size:11.5px;padding:6px 10px;border-radius:6px;
  pointer-events:none;z-index:9999;display:none;
  border:1px solid rgba(201,168,76,0.2);
}

/* ─── FOOTER ─────────────────────────────────────── */
.page-footer{
  display:flex;align-items:center;justify-content:space-between;
  padding:10px 28px;
  background:var(--off);border-top:1px solid var(--mist);
  font-size:11px;color:var(--txt3);
  flex-shrink:0;
}
</style>
</head>
<body>

<!-- TOPBAR -->
<header class="topbar">
  <div class="topbar-logo">
    <div class="logo-square">
      <svg viewBox="0 0 24 24"><path d="M12 2L2 7v10l10 5 10-5V7L12 2zm0 2.18L20 8.5v7L12 19.82 4 15.5v-7L12 4.18z"/></svg>
    </div>
    <div>
      <div class="brand-name">Cooperativa Tulcan</div>
      <div class="brand-sub">Risk Intelligence</div>
    </div>
  </div>

  <nav class="top-nav">
    <a class="active" onclick="showScreen('dashboard',this)">Dashboard</a>
    <a onclick="showScreen('cargar',this)">Cargar datos</a>
    <a onclick="showScreen('batches',this)">Batches</a>
    <a onclick="showScreen('clientes',this)">Clientes</a>
    <a onclick="showScreen('operaciones',this)">Operaciones</a>
  </nav>

  <div class="topbar-right">
    <span class="top-badge">MODELO v2.4</span>
    <div class="user-chip">
      <div class="user-av">DA</div>
      <span class="user-name">diegoaupaz</span>
    </div>
  </div>
</header>

<div class="app-body">

<!-- SIDEBAR -->
<aside class="sidebar">
  <div class="side-section">
    <div class="side-label">Navegación</div>

    <div class="side-item active" onclick="showScreen('dashboard',null,this)">
      <svg class="side-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg>
      Dashboard
    </div>
    <div class="side-item" onclick="showScreen('cargar',null,this)">
      <svg class="side-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M17 8l-5-5-5 5M12 3v12"/></svg>
      Cargar datos
    </div>
    <div class="side-item" onclick="showScreen('batches',null,this)">
      <svg class="side-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
      Batches
      <span class="side-badge">3</span>
    </div>
    <div class="side-item" onclick="showScreen('clientes',null,this)">
      <svg class="side-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
      Clientes
    </div>
    <div class="side-item" onclick="showScreen('detalle',null,this)">
      <svg class="side-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35M11 8v6M8 11h6"/></svg>
      Ver/Evaluar Cliente
    </div>
  </div>

  <div class="side-section">
    <div class="side-label">Análisis</div>
    <div class="side-item" onclick="showScreen('operaciones',null,this)">
      <svg class="side-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
      Operaciones
    </div>
    <div class="side-item" onclick="showScreen('historial',null,this)">
      <svg class="side-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      Historial
    </div>

  </div>

  <div class="side-footer">
    <div class="model-info">
      <div class="model-info-label">Modelo ML</div>
      <div class="model-info-val" style="margin-bottom:3px"><span class="model-dot"></span>Activo · v2.4</div>
      <div class="model-info-val" style="font-size:10px">Umbral: 0.50</div>
      <div class="model-info-val" style="font-size:10px">AUC: 0.874</div>
    </div>
  </div>
</aside>

<!-- CONTENT -->
<main class="content">

<!-- ══════════════ DASHBOARD ══════════════ -->
<div class="screen active" id="screen-dashboard">
  <div class="page-header">
    <div>
      <div class="page-title">Dashboard de Riesgo Crediticio</div>
      <div class="page-sub">Período activo · Feb 2026 — Abr 2026 · 1,691 clientes cargados</div>
    </div>
    <div style="display:flex;gap:8px">
      <button class="btn btn-outline btn-sm">↓ Exportar</button>
      <button class="btn btn-primary btn-sm" onclick="showScreen('cargar')">+ Nueva carga</button>
    </div>
  </div>

  <!-- KPI STRIP -->
  <div class="kpi-strip">
    <div class="kpi" style="border-top:3px solid var(--risk-a1)">
      <div class="kpi-ico">👥</div>
      <div class="kpi-val">1,691</div>
      <div class="kpi-lbl">Clientes activos</div>
      <div class="kpi-delta kpi-up">▲ +4 este período</div>
    </div>
    <div class="kpi" style="border-top:3px solid var(--gold)">
      <div class="kpi-ico">🔬</div>
      <div class="kpi-val">1,243</div>
      <div class="kpi-lbl">Evaluados con ML</div>
      <div class="kpi-delta kpi-up">▲ 73.5% del total</div>
    </div>
    <div class="kpi" style="border-top:3px solid var(--risk-d)">
      <div class="kpi-ico">⚠️</div>
      <div class="kpi-val">127</div>
      <div class="kpi-lbl">Riesgo alto</div>
      <div class="kpi-delta kpi-dn">▲ +12 vs anterior</div>
    </div>
    <div class="kpi" style="border-top:3px solid var(--risk-a2)">
      <div class="kpi-ico">📊</div>
      <div class="kpi-val">0.24</div>
      <div class="kpi-lbl">Prob. media (ML)</div>
      <div class="kpi-delta kpi-neu">Sin variación</div>
    </div>
    <div class="kpi" style="border-top:3px solid #6B4BBE">
      <div class="kpi-ico">📁</div>
      <div class="kpi-val">3</div>
      <div class="kpi-lbl">Batches procesados</div>
      <div class="kpi-delta kpi-up">▲ Último: hoy</div>
    </div>
  </div>

  <!-- CHARTS ROW -->
  <div class="grid-2" style="margin-bottom:18px">
    <div class="chart-card">
      <div class="chart-header">
        <div>
          <div class="chart-title">Distribución por Categoría de Riesgo</div>
          <div class="chart-sub">Clasificación vigente · todos los clientes</div>
        </div>
        <span class="rb rb-activo">En vivo</span>
      </div>
      <div style="position:relative;height:220px">
        <canvas id="catChart" role="img" aria-label="Distribución de categorías A1 a F">Distribución de riesgo crediticio.</canvas>
      </div>
    </div>
    <div class="chart-card">
      <div class="chart-header">
        <div>
          <div class="chart-title">Evolución del Riesgo — Últimos 6 meses</div>
          <div class="chart-sub">Porcentaje de clientes por nivel</div>
        </div>
      </div>
      <div style="position:relative;height:220px">
        <canvas id="riskTrend" role="img" aria-label="Tendencia de riesgo mensual">Tendencia de riesgo por mes.</canvas>
      </div>
    </div>
  </div>

  <div class="grid-2">
    <div class="chart-card">
      <div class="chart-header">
        <div>
          <div class="chart-title">Distribución de Probabilidad ML</div>
          <div class="chart-sub">Score del modelo por rango</div>
        </div>
      </div>
      <div style="position:relative;height:180px">
        <canvas id="probDist" role="img" aria-label="Distribución de probabilidades">Distribución de scores ML.</canvas>
      </div>
    </div>
    <div class="chart-card">
      <div class="chart-header">
        <div>
          <div class="chart-title">Clientes por Oficina</div>
          <div class="chart-sub">Distribución geográfica de cartera</div>
        </div>
      </div>
      <div style="position:relative;height:180px">
        <canvas id="byOffice" role="img" aria-label="Clientes por oficina">Clientes por sucursal.</canvas>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════ CARGAR DATOS ══════════════ -->
<div class="screen" id="screen-cargar">
  <div class="page-header">
    <div>
      <div class="page-title">Carga de Datos</div>
      <div class="page-sub">Importar cartera de clientes desde archivo CSV/XLS/XLSX</div>
    </div>
    <button class="btn btn-outline btn-sm" onclick="showScreen('batches')">Ver batches</button>
  </div>

  <div style="max-width:720px">
    <div class="card" style="margin-bottom:18px">
      <div class="card-body">
        <div class="eval-banner" style="margin-bottom:20px">
          <div>
            <div class="eval-banner-txt">Solo se cargan columnas permitidas (whitelist)</div>
            <div style="font-size:11px;color:rgba(255,255,255,0.4);margin-top:3px">Garantía de integridad y trazabilidad de datos</div>
          </div>
          <div class="eval-banner-val">✓ Whitelist activa</div>
        </div>

        <div class="form-group">
          <label class="form-label">Modo de carga</label>
          <select class="form-control form-select">
            <option value="">— Seleccionar modo —</option>
            <option>Agregado por cliente</option>
            <option>Actualización incremental</option>
            <option>Reemplazar completo</option>
            <option>Solo operaciones</option>
          </select>
        </div>

        <div class="upload-zone" onclick="this.querySelector('input').click()">
          <input type="file" accept=".csv,.xls,.xlsx" style="display:none">
          <div class="upload-icon">📂</div>
          <div class="upload-txt">Arrastra tu archivo o <strong>haz clic para buscar</strong></div>
          <div class="upload-sub">Formatos aceptados: CSV · XLS · XLSX — Máx. 50 MB</div>
        </div>

        <div class="form-group">
          <label class="form-label">Descripción del batch (opcional)</label>
          <input type="text" class="form-control" placeholder="Ej: Carga mensual febrero 2026">
        </div>

        <div style="display:flex;gap:10px">
          <button class="btn btn-primary">↑ Cargar datos</button>
          <button class="btn btn-outline" onclick="showScreen('batches')">Ver historial de batches</button>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div style="font-size:13px;font-weight:500;color:var(--txt);margin-bottom:14px">Columnas permitidas (whitelist)</div>
        <div style="display:flex;flex-wrap:wrap;gap:6px">
          ${['cliente_id','oficina','tipo_credito','garantia','sexo','categoria_anterior','categoria_vigente','n_operaciones','n_vigentes','monto_total','saldo_total','patrimonio','max_dias_mora','estado'].map(c=>`<span style="background:var(--off);border:1px solid var(--border2);border-radius:5px;padding:3px 9px;font-family:'IBM Plex Mono',monospace;font-size:11px;color:var(--txt2)">${c}</span>`).join('')}
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════ BATCHES ══════════════ -->
<div class="screen" id="screen-batches">
  <div class="page-header">
    <div>
      <div class="page-title">Batches de Carga</div>
      <div class="page-sub">Historial de importaciones de cartera</div>
    </div>
    <button class="btn btn-primary btn-sm" onclick="showScreen('cargar')">+ Nueva carga</button>
  </div>

  <div class="card">
    <div class="tbl-wrap">
      <table>
        <thead>
          <tr>
            <th>ID</th><th>Fecha</th><th>Usuario</th><th>Modo</th>
            <th>Estado</th><th>Total</th><th>Cargadas</th><th>Omitidas</th><th>Progreso</th><th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="mono">001</td>
            <td>Feb. 11, 2026, 10:22 p.m.</td>
            <td><span style="font-weight:500">diegoaupaz</span></td>
            <td style="color:var(--txt2)">Agregado por cliente</td>
            <td><span class="rb rb-processed">PROCESSED</span></td>
            <td class="mono">1,691</td><td class="mono" style="color:var(--risk-a1)">1,691</td>
            <td class="mono" style="color:var(--txt3)">0</td>
            <td style="min-width:120px">
              <div style="font-size:11px;color:var(--risk-a1);margin-bottom:3px">100%</div>
              <div class="progress-mini"><div class="progress-mini-bar" style="width:100%;background:var(--risk-a1)"></div></div>
            </td>
            <td><div class="actions-td">
              <button class="btn btn-outline btn-xs">Ver detalle</button>
              <button class="btn btn-ghost btn-xs">↓ Log</button>
            </div></td>
          </tr>
          <tr>
            <td class="mono">002</td>
            <td>Mar. 5, 2026, 9:14 a.m.</td>
            <td><span style="font-weight:500">diegoaupaz</span></td>
            <td style="color:var(--txt2)">Actualización incremental</td>
            <td><span class="rb rb-processed">PROCESSED</span></td>
            <td class="mono">312</td><td class="mono" style="color:var(--risk-a1)">308</td>
            <td class="mono" style="color:var(--risk-c)">4</td>
            <td style="min-width:120px">
              <div style="font-size:11px;color:var(--risk-a1);margin-bottom:3px">98.7%</div>
              <div class="progress-mini"><div class="progress-mini-bar" style="width:98.7%;background:var(--risk-a1)"></div></div>
            </td>
            <td><div class="actions-td">
              <button class="btn btn-outline btn-xs">Ver detalle</button>
              <button class="btn btn-ghost btn-xs">↓ Log</button>
            </div></td>
          </tr>
          <tr>
            <td class="mono">003</td>
            <td>Abr. 9, 2026, 3:30 p.m.</td>
            <td><span style="font-weight:500">diegoaupaz</span></td>
            <td style="color:var(--txt2)">Agregado por cliente</td>
            <td><span style="background:#FEF3C7;color:#B45309;font-size:11px;padding:3px 9px;border-radius:4px;font-weight:500">PROCESSING</span></td>
            <td class="mono">88</td><td class="mono" style="color:var(--risk-a1)">61</td>
            <td class="mono" style="color:var(--txt3)">0</td>
            <td style="min-width:120px">
              <div style="font-size:11px;color:var(--risk-b);margin-bottom:3px">69%</div>
              <div class="progress-mini"><div class="progress-mini-bar" style="width:69%;background:var(--risk-b)"></div></div>
            </td>
            <td><div class="actions-td">
              <button class="btn btn-outline btn-xs">Ver detalle</button>
            </div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- ══════════════ CLIENTES ══════════════ -->
<div class="screen" id="screen-clientes">
  <div class="page-header">
    <div>
      <div class="page-title">Clientes — Cartera Agregada</div>
      <div class="page-sub">1,691 clientes · Batch activo: Feb. 2026</div>
    </div>
    <button class="btn btn-outline btn-sm" onclick="showScreen('cargar')">Cargar datos</button>
  </div>

  <div class="card" style="margin-bottom:16px">
    <div class="card-body" style="padding:14px 18px">
      <div class="filter-bar">
        <input type="text" class="flt-input" placeholder="Buscar por ID cliente o nombre…">
        <select class="flt-select">
          <option>Oficina (todas)</option>
          <option>Oficina 1</option><option>Oficina 5</option>
          <option>Oficina 6</option><option>Oficina 8</option>
          <option>Oficina 14</option><option>Oficina 15</option>
        </select>
        <select class="flt-select">
          <option>Tipo crédito (todos)</option>
          <option>CONSUMO</option><option>VIVIENDA</option>
          <option>MICROEMPRESA</option><option>COMERCIAL</option>
        </select>
        <select class="flt-select">
          <option>Categoría (todas)</option>
          <option>A1</option><option>A2</option><option>A3</option>
          <option>B</option><option>C</option><option>D</option><option>E/F</option>
        </select>
        <select class="flt-select">
          <option>Estado (todos)</option>
          <option>Activo</option><option>Inactivo</option>
        </select>
        <select class="flt-select">
          <option>Riesgo ML (todos)</option>
          <option>BAJO</option><option>MEDIO</option><option>ALTO</option>
        </select>
        <button class="btn-filter">Filtrar</button>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="tbl-wrap">
      <table>
        <thead>
          <tr>
            <th>Cliente</th><th>Oficina</th><th>Tipo Crédito</th>
            <th>Cat. Vigente</th><th>Riesgo Actual</th><th>Prob. ML</th>
            <th>Días Mora</th><th>Saldo</th><th>Estado</th><th>Acciones</th>
          </tr>
        </thead>
        <tbody id="clientTable"></tbody>
      </table>
    </div>
    <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 18px;border-top:1px solid var(--mist)">
      <span style="font-size:12px;color:var(--txt3)">Mostrando 1–10 de 1,691 registros</span>
      <div style="display:flex;gap:6px">
        <button class="btn btn-ghost btn-xs">‹ Anterior</button>
        <button class="btn btn-primary btn-xs">1</button>
        <button class="btn btn-ghost btn-xs">2</button>
        <button class="btn btn-ghost btn-xs">3</button>
        <button class="btn btn-ghost btn-xs">… 170</button>
        <button class="btn btn-ghost btn-xs">Siguiente ›</button>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════ DETALLE CLIENTE ══════════════ -->
<div class="screen" id="screen-detalle">
  <div class="page-header">
    <div>
      <div class="page-title">Detalle Cliente: <span style="font-family:'IBM Plex Mono',monospace;font-size:20px">298607</span></div>
      <div class="page-sub">Oficina 5 · Tipo: CONSUMO · Última evaluación: Abr. 10, 2026</div>
    </div>
    <div style="display:flex;gap:8px">
      <button class="btn btn-outline btn-sm" onclick="showScreen('clientes')">← Volver</button>
      <button class="btn btn-ghost btn-sm btn-danger">Inhabilitar</button>
      <button class="btn btn-outline btn-sm">Modificar</button>
    </div>
  </div>

  <div class="grid-2" style="margin-bottom:18px;align-items:start">

    <!-- LEFT: Client data -->
    <div>
      <div class="card" style="margin-bottom:14px">
        <div style="padding:16px 20px;border-bottom:1px solid var(--mist);display:flex;align-items:center;gap:10px">
          <div style="width:38px;height:38px;border-radius:8px;background:var(--ink);display:flex;align-items:center;justify-content:center;font-family:'IBM Plex Mono',monospace;font-size:13px;color:var(--gold);font-weight:500">F</div>
          <div>
            <div style="font-weight:600;font-size:14px">Cliente #298607</div>
            <div style="font-size:11px;color:var(--txt3)">Agregado Feb. 11, 2026</div>
          </div>
          <div style="margin-left:auto;display:flex;gap:6px">
            <span class="rb rb-a1">A1</span>
            <span class="rb rb-activo">Activo</span>
          </div>
        </div>
        <div class="card-body">
          <div class="info-grid">
            <div>
              <div class="info-row"><div class="detail-label">Oficina</div><div class="detail-value mono">5</div></div>
              <div class="info-row"><div class="detail-label">Tipo crédito</div><div class="detail-value">CONSUMO</div></div>
              <div class="info-row"><div class="detail-label">Garantía</div><div class="detail-value">PERSONAL</div></div>
              <div class="info-row"><div class="detail-label">Sexo</div><div class="detail-value">F</div></div>
              <div class="info-row"><div class="detail-label">Cal. anterior</div><div class="detail-value"><span class="rb rb-a1">A1</span></div></div>
            </div>
            <div>
              <div class="info-row"><div class="detail-label">N° operaciones</div><div class="detail-value mono">2</div></div>
              <div class="info-row"><div class="detail-label">N° vigentes</div><div class="detail-value mono">2</div></div>
              <div class="info-row"><div class="detail-label">Monto total</div><div class="detail-value mono">$35,000.00</div></div>
              <div class="info-row"><div class="detail-label">Saldo total</div><div class="detail-value mono">$33,531.96</div></div>
              <div class="info-row"><div class="detail-label">Patrimonio</div><div class="detail-value mono">$124,000.00</div></div>
            </div>
          </div>
          <div style="padding:10px 0;display:flex;align-items:center;justify-content:space-between;border-top:1px solid var(--mist);margin-top:8px">
            <div><div class="detail-label">Máx. días mora</div><div class="detail-value mono" style="color:var(--risk-a1)">0 días</div></div>
            <div><div class="detail-label">Riesgo regla</div><div class="detail-value"><span class="rb rb-bajo">BAJO</span></div></div>
          </div>
        </div>
      </div>

      <!-- Historial de cambios mini -->
      <div class="card">
        <div style="padding:14px 18px;border-bottom:1px solid var(--mist);font-size:13px;font-weight:600">Historial de cambios</div>
        <div style="padding:14px 18px;font-size:12px;color:var(--txt3)">Aún no hay cambios registrados para este cliente.</div>
      </div>
    </div>

    <!-- RIGHT: ML Scoring -->
    <div>
      <div class="card">
        <div style="padding:14px 20px;border-bottom:1px solid var(--mist);display:flex;align-items:center;gap:8px">
          <span style="font-size:15px">🔬</span>
          <div>
            <div style="font-weight:600;font-size:13.5px">Scoring — Modelo ML</div>
            <div style="font-size:11px;color:var(--txt3)">Random Forest · Umbral: 0.50</div>
          </div>
        </div>
        <div class="card-body">

          <div class="eval-banner" style="margin-bottom:16px">
            <div>
              <div style="font-size:10px;color:rgba(255,255,255,0.4);letter-spacing:1px;text-transform:uppercase;margin-bottom:4px">Última evaluación guardada</div>
              <div style="font-size:11px;color:rgba(255,255,255,0.55)">2026-04-10 · 19:19 UTC · por diegoaupaz</div>
            </div>
            <span class="rb rb-bajo" style="font-size:12px;padding:4px 10px">BAJO</span>
          </div>

          <!-- Gauge -->
          <div class="gauge-outer">
            <div class="gauge-label">Probabilidad de incumplimiento (según norma)</div>
            <div class="prob-big">0.20%</div>
            <div class="prob-sub">ML crudo: 0.20% · Prob. final (norma): 0.20%</div>
            <div class="gauge-bar-wrap" style="margin-top:14px">
              <div class="gauge-bar" style="width:100%"></div>
              <div class="gauge-needle" style="left:0.2%"></div>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:10px;color:var(--txt3);margin-top:4px">
              <span>0%</span><span>Umbral: 50%</span><span>100%</span>
            </div>
          </div>

          <!-- Category grid -->
          <div style="font-size:11px;color:var(--txt3);margin-bottom:8px;font-weight:500">Categoría asignada</div>
          <div class="cat-grid">
            <div class="cat-cell rb-a1 selected">A1<div class="cat-cell-name">Normal</div></div>
            <div class="cat-cell rb-a2">A2<div class="cat-cell-name">Normal</div></div>
            <div class="cat-cell rb-a3">A3<div class="cat-cell-name">Potencial</div></div>
            <div class="cat-cell rb-b">B<div class="cat-cell-name">Deficiente</div></div>
            <div class="cat-cell rb-c">C<div class="cat-cell-name">Dudoso</div></div>
            <div class="cat-cell rb-d">D<div class="cat-cell-name">Pérdida</div></div>
            <div class="cat-cell rb-e">E/F<div class="cat-cell-name">Irrecup.</div></div>
          </div>

          <div class="scoring-meta" style="margin-top:14px">
            <div class="scoring-row">
              <span class="scoring-key">Categoría ML</span>
              <span class="scoring-val">A-1</span>
            </div>
            <div class="scoring-row">
              <span class="scoring-key">Riesgo (regla/tablas)</span>
              <span class="scoring-val" style="color:var(--risk-a1)">BAJO</span>
            </div>
            <div class="scoring-row">
              <span class="scoring-key">Calificación (contraste)</span>
              <span class="scoring-val">A1</span>
            </div>
            <div class="scoring-row">
              <span class="scoring-key">Threshold</span>
              <span class="scoring-val">0.50</span>
            </div>
            <div class="scoring-row">
              <span class="scoring-key">Nivel norma</span>
              <span class="scoring-val">Riesgo Normal</span>
            </div>
          </div>

          <div style="margin-top:14px;font-size:11px;color:var(--txt3);line-height:1.6;padding:10px 12px;background:var(--off);border-radius:7px;border:1px solid var(--border)">
            <strong style="color:var(--txt2)">Nota:</strong> La calificación de riesgo es contraste visual/reglas; el modelo ML evalúa con variables agregadas.
          </div>

          <button class="btn btn-primary" style="width:100%;justify-content:center;margin-top:14px">
            ▶ Evaluar con modelo
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════ OPERACIONES ══════════════ -->
<div class="screen" id="screen-operaciones">
  <div class="page-header">
    <div>
      <div class="page-title">Operaciones Crediticias</div>
      <div class="page-sub">Detalle de créditos por cliente y estado</div>
    </div>
  </div>

  <div class="card" style="margin-bottom:16px">
    <div class="card-body" style="padding:14px 18px">
      <div class="filter-bar">
        <input type="text" class="flt-input" placeholder="Buscar cliente u operación…">
        <select class="flt-select"><option>Tipo (todos)</option><option>CONSUMO</option><option>VIVIENDA</option></select>
        <select class="flt-select"><option>Garantía (todas)</option><option>PERSONAL</option><option>HIPOTECARIA</option></select>
        <select class="flt-select"><option>Mora (todos)</option><option>Sin mora</option><option>1–30 días</option><option>31–90 días</option><option>&gt;90 días</option></select>
        <button class="btn-filter">Filtrar</button>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="tbl-wrap">
      <table>
        <thead><tr><th>Cliente</th><th>Oficina</th><th>Tipo</th><th>Garantía</th><th>Monto</th><th>Saldo</th><th>Días Mora</th><th>Cat.</th><th>Estado</th><th>Acciones</th></tr></thead>
        <tbody>
          <tr><td class="mono">298607</td><td>5</td><td>CONSUMO</td><td>PERSONAL</td><td class="mono">$35,000</td><td class="mono">$33,531</td><td class="mono" style="color:var(--risk-a1)">0</td><td><span class="rb rb-a1">A1</span></td><td><span class="rb rb-activo">Activo</span></td><td><div class="actions-td"><button class="btn btn-outline btn-xs" onclick="showScreen('detalle')">Ver</button></div></td></tr>
          <tr><td class="mono">182483</td><td>6</td><td>CONSUMO</td><td>PERSONAL</td><td class="mono">$12,000</td><td class="mono">$9,840</td><td class="mono" style="color:var(--risk-c)">18</td><td><span class="rb rb-a3">A3</span></td><td><span class="rb rb-activo">Activo</span></td><td><div class="actions-td"><button class="btn btn-outline btn-xs">Ver</button></div></td></tr>
          <tr><td class="mono">279014</td><td>1</td><td>CONSUMO</td><td>PERSONAL</td><td class="mono">$8,500</td><td class="mono">$6,200</td><td class="mono" style="color:var(--risk-b)">20</td><td><span class="rb rb-a3">A3</span></td><td><span class="rb rb-activo">Activo</span></td><td><div class="actions-td"><button class="btn btn-outline btn-xs">Ver</button></div></td></tr>
          <tr><td class="mono">301205</td><td>8</td><td>VIVIENDA</td><td>HIPOTECARIA</td><td class="mono">$85,000</td><td class="mono">$72,100</td><td class="mono" style="color:var(--risk-a1)">0</td><td><span class="rb rb-a1">A1</span></td><td><span class="rb rb-activo">Activo</span></td><td><div class="actions-td"><button class="btn btn-outline btn-xs">Ver</button></div></td></tr>
          <tr><td class="mono">294750</td><td>14</td><td>MICROEMPRESA</td><td>QUIROGRAFARIA</td><td class="mono">$15,000</td><td class="mono">$14,320</td><td class="mono" style="color:var(--risk-d)">45</td><td><span class="rb rb-b">B</span></td><td><span class="rb rb-activo">Activo</span></td><td><div class="actions-td"><button class="btn btn-outline btn-xs">Ver</button></div></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- ══════════════ HISTORIAL ══════════════ -->
<div class="screen" id="screen-historial">
  <div class="page-header">
    <div>
      <div class="page-title">Historial de Reevaluaciones</div>
      <div class="page-sub">Auditoría de cambios por clientes manipulados</div>
    </div>
    <button class="btn btn-outline btn-sm">↓ Exportar CSV</button>
  </div>

  <div class="card" style="margin-bottom:16px">
    <div class="card-body" style="padding:12px 18px">
      <div class="filter-bar">
        <input type="text" class="flt-input" placeholder="Filtrar por cliente o usuario…">
        <select class="flt-select"><option>Usuario (todos)</option><option>diegoaupaz</option></select>
        <select class="flt-select"><option>Predicción (todas)</option><option>ALTO</option><option>BAJO</option><option>MEDIO</option></select>
        <select class="flt-select"><option>Período (todos)</option><option>Hoy</option><option>Último mes</option></select>
        <button class="btn-filter">Filtrar</button>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="tbl-wrap">
      <table>
        <thead><tr><th>Fecha</th><th>Usuario</th><th>Cliente</th><th>Tipo Crédito</th><th>Días Mora</th><th>Cat. Anterior</th><th>Cat. Nueva</th><th>Nivel</th><th>ML Score</th><th>Final</th><th>Pred.</th></tr></thead>
        <tbody>
          <tr>
            <td style="color:var(--txt2)">Abr. 9, 2026 3:32 p.m.</td>
            <td class="mono" style="font-size:12px">diegoaupaz</td>
            <td><button class="btn btn-ghost btn-xs" style="color:var(--risk-a2);padding:2px 0" onclick="showScreen('detalle')">182483</button></td>
            <td>CONSUMO</td><td class="mono" style="color:var(--risk-b)">18</td>
            <td><span class="rb rb-e">E</span></td>
            <td><span class="rb rb-a3">A3</span></td>
            <td style="font-size:12px;color:var(--txt3)">Riesgo Normal</td>
            <td class="mono">0.7400</td><td class="mono">0.7400</td>
            <td><span class="rb rb-alto">ALTO</span></td>
          </tr>
          <tr>
            <td style="color:var(--txt2)">Mar. 18, 2026 2:07 p.m.</td>
            <td class="mono" style="font-size:12px">diegoaupaz</td>
            <td><button class="btn btn-ghost btn-xs" style="color:var(--risk-a2);padding:2px 0">279014</button></td>
            <td>CONSUMO</td><td class="mono" style="color:var(--risk-b)">20</td>
            <td><span class="rb rb-a1">A1</span></td>
            <td><span class="rb rb-a3">A3</span></td>
            <td style="font-size:12px;color:var(--txt3)">Riesgo Normal</td>
            <td class="mono">0.1240</td><td class="mono">0.1240</td>
            <td><span class="rb rb-bajo">BAJO</span></td>
          </tr>
          <tr>
            <td style="color:var(--txt2)">Mar. 12, 2026 12:32 a.m.</td>
            <td class="mono" style="font-size:12px">diegoaupaz</td>
            <td><button class="btn btn-ghost btn-xs" style="color:var(--risk-a2);padding:2px 0">298968</button></td>
            <td>CONSUMO</td><td class="mono" style="color:var(--risk-c)">30</td>
            <td><span class="rb rb-a2">A2</span></td>
            <td><span class="rb rb-a3">A3</span></td>
            <td style="font-size:12px;color:var(--txt3)">Riesgo Normal</td>
            <td class="mono">0.0640</td><td class="mono">0.1000</td>
            <td><span class="rb rb-bajo">BAJO</span></td>
          </tr>
          <tr>
            <td style="color:var(--txt2)">Mar. 12, 2026 12:31 a.m.</td>
            <td class="mono" style="font-size:12px">diegoaupaz</td>
            <td><button class="btn btn-ghost btn-xs" style="color:var(--risk-a2);padding:2px 0">298968</button></td>
            <td>CONSUMO</td><td class="mono" style="color:var(--risk-a2)">5</td>
            <td><span class="rb rb-a1">A1</span></td>
            <td><span class="rb rb-a2">A2</span></td>
            <td style="font-size:12px;color:var(--txt3)">Riesgo Normal</td>
            <td class="mono">0.0640</td><td class="mono">0.0640</td>
            <td><span class="rb rb-bajo">BAJO</span></td>
          </tr>
          <tr>
            <td style="color:var(--txt2)">Feb. 18, 2026 3:29 p.m.</td>
            <td class="mono" style="font-size:12px">diegoaupaz</td>
            <td><button class="btn btn-ghost btn-xs" style="color:var(--risk-a2);padding:2px 0">298968</button></td>
            <td>CONSUMO</td><td class="mono" style="color:var(--risk-a1)">0</td>
            <td><span class="rb rb-a2">A2</span></td>
            <td><span class="rb rb-a1">A1</span></td>
            <td style="font-size:12px;color:var(--txt3)">Riesgo Normal</td>
            <td class="mono">0.0640</td><td class="mono">0.0640</td>
            <td><span class="rb rb-bajo">BAJO</span></td>
          </tr>
          <tr>
            <td style="color:var(--txt2)">Feb. 17, 2026 10:09 p.m.</td>
            <td class="mono" style="font-size:12px">diegoaupaz</td>
            <td><button class="btn btn-ghost btn-xs" style="color:var(--risk-a2);padding:2px 0">298968</button></td>
            <td>CONSUMO</td><td class="mono" style="color:var(--risk-a2)">1</td>
            <td><span class="rb rb-a1">A1</span></td>
            <td><span class="rb rb-a2">A2</span></td>
            <td style="font-size:12px;color:var(--txt3)">Riesgo Normal</td>
            <td class="mono">0.0400</td><td class="mono">0.0500</td>
            <td><span class="rb rb-bajo">BAJO</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- ══════════════ REPORTES ══════════════ -->
<div class="screen" id="screen-reportes">
  <div class="page-header">
    <div>
      <div class="page-title">Reportes y Exportaciones</div>
      <div class="page-sub">Generación de informes de riesgo crediticio</div>
    </div>
  </div>
  <div class="grid-3">
    ${[
      {icon:'📊',title:'Reporte de cartera',desc:'Resumen completo de todos los clientes con su categoría vigente y score ML.',btn:'Generar'},
      {icon:'⚠️',title:'Clientes en riesgo alto',desc:'Listado filtrado de clientes con probabilidad ML superior al umbral 0.50.',btn:'Exportar'},
      {icon:'📈',title:'Evolución de riesgo',desc:'Análisis histórico de cambios de categoría por período y oficina.',btn:'Generar'},
      {icon:'🔍',title:'Auditoría de cambios',desc:'Log completo de todas las reevaluaciones manuales y automáticas.',btn:'Exportar'},
      {icon:'🏦',title:'Reporte por oficina',desc:'Distribución de riesgo desagregada por sucursal y tipo de crédito.',btn:'Generar'},
      {icon:'🤖',title:'Performance del modelo',desc:'Métricas de accuracy, AUC-ROC, precision y recall del modelo ML.',btn:'Ver métricas'},
    ].map(r=>`<div class="card" style="cursor:pointer;transition:transform .2s" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform=''"><div class="card-body"><div style="font-size:26px;margin-bottom:12px">${r.icon}</div><div style="font-weight:600;font-size:13.5px;margin-bottom:6px">${r.title}</div><div style="font-size:12px;color:var(--txt3);line-height:1.6;margin-bottom:14px">${r.desc}</div><button class="btn btn-outline btn-sm">${r.btn} →</button></div></div>`).join('')}
  </div>
</div>

</main>
</div>

<!-- FOOTER -->
<footer class="page-footer">
  <div><span class="status-dot status-ok"></span>Sistema operativo · Modelo ML activo</div>
  <div>Cooperativa Tulcan LTDA. — Risk Intelligence Platform v2.4</div>
  <div style="font-family:'IBM Plex Mono',monospace">AUC: 0.874 · Threshold: 0.50 · Último batch: Abr. 9, 2026</div>
</footer>

<div class="tt" id="tt"></div>

<script>
// ── NAVIGATION
function showScreen(id, topEl, sideEl) {
  document.querySelectorAll('.screen').forEach(s=>s.classList.remove('active'));
  document.querySelectorAll('.top-nav a').forEach(a=>a.classList.remove('active'));
  document.querySelectorAll('.side-item').forEach(a=>a.classList.remove('active'));
  const sc = document.getElementById('screen-'+id);
  if(sc) sc.classList.add('active');
  if(topEl) topEl.classList.add('active');
  if(sideEl) sideEl.classList.add('active');
}

// ── CLIENT TABLE DATA
const CLIENTS = [
  {id:'182483',off:6,type:'CONSUMO',cat:'A3',risk:'BAJO',prob:'0.74',mora:18,saldo:'9,840',est:'Activo'},
  {id:'279014',off:1,type:'CONSUMO',cat:'A3',risk:'BAJO',prob:'0.12',mora:20,saldo:'6,200',est:'Activo'},
  {id:'298607',off:5,type:'CONSUMO',cat:'A1',risk:'BAJO',prob:'0.002',mora:0,saldo:'33,531',est:'Activo'},
  {id:'298968',off:15,type:'CONSUMO',cat:'A1',risk:'BAJO',prob:'0.064',mora:0,saldo:'14,200',est:'Activo'},
  {id:'294750',off:14,type:'MICROEMPRESA',cat:'B',risk:'MEDIO',prob:'0.38',mora:45,saldo:'14,320',est:'Activo'},
  {id:'300012',off:15,type:'VIVIENDA',cat:'A1',risk:'BAJO',prob:'0.031',mora:0,saldo:'45,100',est:'Activo'},
  {id:'301205',off:8,type:'VIVIENDA',cat:'A1',risk:'BAJO',prob:'0.018',mora:0,saldo:'72,100',est:'Activo'},
  {id:'305671',off:3,type:'COMERCIAL',cat:'C',risk:'ALTO',prob:'0.68',mora:62,saldo:'28,750',est:'Activo'},
  {id:'312008',off:11,type:'CONSUMO',cat:'A2',risk:'BAJO',prob:'0.091',mora:3,saldo:'11,200',est:'Activo'},
  {id:'318440',off:2,type:'CONSUMO',cat:'D',risk:'ALTO',prob:'0.83',mora:95,saldo:'5,400',est:'Activo'},
];

function catClass(c){
  const m={'A1':'rb-a1','A2':'rb-a2','A3':'rb-a3','B':'rb-b','C':'rb-c','D':'rb-d','E':'rb-e','F':'rb-e'};
  return m[c]||'rb-a1';
}
function riskClass(r){return r==='ALTO'?'rb-alto':r==='MEDIO'?'rb-medio':'rb-bajo'}

function buildClientTable(){
  const tbody = document.getElementById('clientTable');
  if(!tbody) return;
  tbody.innerHTML = CLIENTS.map(c=>`
    <tr>
      <td><span class="mono" style="font-weight:500">${c.id}</span></td>
      <td>${c.off}</td>
      <td style="color:var(--txt2)">${c.type}</td>
      <td><span class="rb ${catClass(c.cat)}">${c.cat}</span></td>
      <td><span class="rb ${riskClass(c.risk)}">${c.risk}</span></td>
      <td><span class="mono" style="font-size:12px">${c.prob}</span></td>
      <td class="mono" style="color:${c.mora>30?'var(--risk-d)':c.mora>10?'var(--risk-b)':'var(--risk-a1)'}">${c.mora}</td>
      <td class="mono">$${c.saldo}</td>
      <td><span class="rb rb-activo">${c.est}</span></td>
      <td><div class="actions-td">
        <button class="btn btn-outline btn-xs" onclick="showScreen('detalle')">Ver/Evaluar</button>
        <button class="btn btn-ghost btn-xs">Modificar</button>
        <button class="btn btn-xs" style="background:#FEF3C7;color:#B45309;border:1px solid #FDE68A">Inhabilitar</button>
      </div></td>
    </tr>
  `).join('');
}
buildClientTable();

// ── CHARTS
function buildCharts(){
  // Category distribution
  new Chart(document.getElementById('catChart'),{
    type:'bar',
    data:{
      labels:['A1','A2','A3','B','C','D','E/F'],
      datasets:[{
        data:[924,287,198,142,87,38,15],
        backgroundColor:['#0E7C45','#1A6FA8','#6B4BBE','#B45309','#C2410C','#DC2626','#7F1D1D'],
        borderRadius:6, borderSkipped:false,
      }]
    },
    options:{
      responsive:true,maintainAspectRatio:false,
      plugins:{legend:{display:false}},
      scales:{
        x:{grid:{display:false},ticks:{color:'#8492A6',font:{size:11},family:"'IBM Plex Mono'"}},
        y:{grid:{color:'rgba(0,0,0,0.04)'},ticks:{color:'#8492A6',font:{size:11}}}
      }
    }
  });

  // Risk trend
  new Chart(document.getElementById('riskTrend'),{
    type:'line',
    data:{
      labels:['Nov','Dic','Ene','Feb','Mar','Abr'],
      datasets:[
        {label:'Bajo',data:[71,72,69,73,74,75],borderColor:'#0E7C45',backgroundColor:'rgba(14,124,69,0.07)',fill:true,tension:0.4,pointRadius:3,borderWidth:2},
        {label:'Medio',data:[18,17,20,17,16,16],borderColor:'#B45309',fill:false,tension:0.4,pointRadius:3,borderWidth:2,borderDash:[5,3]},
        {label:'Alto',data:[11,11,11,10,10,9],borderColor:'#DC2626',fill:false,tension:0.4,pointRadius:3,borderWidth:2,borderDash:[3,3]},
      ]
    },
    options:{
      responsive:true,maintainAspectRatio:false,
      plugins:{legend:{display:false}},
      scales:{
        x:{grid:{display:false},ticks:{color:'#8492A6',font:{size:11}}},
        y:{min:0,max:100,grid:{color:'rgba(0,0,0,0.04)'},ticks:{color:'#8492A6',font:{size:11},callback:v=>v+'%'}}
      }
    }
  });

  // Prob distribution
  new Chart(document.getElementById('probDist'),{
    type:'bar',
    data:{
      labels:['0–0.1','0.1–0.2','0.2–0.3','0.3–0.4','0.4–0.5','0.5–0.6','0.6–0.7','0.7–0.8','0.8–1.0'],
      datasets:[{
        data:[810,320,215,142,98,62,24,12,8],
        backgroundColor:['#0E7C45','#1A6FA8','#1A6FA8','#6B4BBE','#B45309','#C2410C','#DC2626','#DC2626','#7F1D1D'],
        borderRadius:4,borderSkipped:false,
      }]
    },
    options:{
      responsive:true,maintainAspectRatio:false,
      plugins:{legend:{display:false}},
      scales:{
        x:{grid:{display:false},ticks:{color:'#8492A6',font:{size:9},maxRotation:0}},
        y:{grid:{color:'rgba(0,0,0,0.04)'},ticks:{color:'#8492A6',font:{size:10}}}
      }
    }
  });

  // By office
  new Chart(document.getElementById('byOffice'),{
    type:'doughnut',
    data:{
      labels:['Oficina 1','Oficina 5','Oficina 6','Oficina 8','Oficina 14','Oficina 15','Otras'],
      datasets:[{
        data:[280,310,195,175,162,210,359],
        backgroundColor:['#0E7C45','#C9A84C','#1A6FA8','#6B4BBE','#B45309','#C2410C','#6B7280'],
        borderWidth:0,hoverOffset:6,
      }]
    },
    options:{
      responsive:true,maintainAspectRatio:false,
      cutout:'65%',
      plugins:{legend:{display:false}}
    }
  });
}

buildCharts();
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
    background: linear-gradient(135deg, #1a1a2e 0%, #c9a227 100%);
    color: #fff;
    font-family: system-ui, sans-serif;
    font-size: 13.5px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    box-shadow: 0 6px 24px rgba(201, 162, 39, 0.45), 0 2px 6px rgba(0,0,0,0.22);
    transition: transform 0.18s ease, box-shadow 0.18s ease;
    opacity: 0;
    transform: translateY(10px);
    animation: fabMockupIn 0.45s 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
  }
  .fab-back-mockup:hover {
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 10px 32px rgba(201, 162, 39, 0.55), 0 3px 8px rgba(0,0,0,0.28);
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
