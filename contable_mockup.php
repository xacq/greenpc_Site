<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>ContaEcu Pro — Sistema Contable Ecuador</title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<style>
/* ── Reset & Base ── */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
:root {
  --navy:      #0D1B38;
  --navy-800:  #162040;
  --navy-700:  #1E2D52;
  --navy-600:  #253564;
  --blue:      #2A7FE8;
  --blue-light:#EBF4FF;
  --blue-mid:  #BDDCFD;
  --teal:      #0BA878;
  --teal-light:#D0F5E8;
  --amber:     #F59E0B;
  --amber-light:#FEF3C7;
  --red:       #E8374A;
  --red-light: #FDE8EB;
  --gray-50:   #F6F8FC;
  --gray-100:  #EDF0F7;
  --gray-200:  #D8DFE9;
  --gray-300:  #B8C3D4;
  --gray-500:  #6E7F96;
  --gray-700:  #3D4F66;
  --gray-900:  #0D1B38;
  --white:     #FFFFFF;
  --text-1:    #0D1B38;
  --text-2:    #3D4F66;
  --text-3:    #6E7F96;
  --text-4:    #9CAABB;
  --surface:   #FFFFFF;
  --bg:        #F0F4FA;
  --border:    #DFE6F0;
  --border-light: #EDF0F7;
  --shadow-sm: 0 1px 3px rgba(13,27,56,.06), 0 1px 2px rgba(13,27,56,.04);
  --shadow:    0 4px 12px rgba(13,27,56,.08), 0 1px 3px rgba(13,27,56,.05);
  --shadow-md: 0 8px 24px rgba(13,27,56,.10), 0 2px 6px rgba(13,27,56,.06);
  --radius-sm: 6px;
  --radius:    10px;
  --radius-lg: 14px;
  --radius-xl: 18px;
  --font: 'Plus Jakarta Sans', sans-serif;
  --mono: 'JetBrains Mono', monospace;
  --sidebar-w: 226px;
}
body { font-family: var(--font); background: var(--bg); color: var(--text-1); font-size: 13px; line-height: 1.5; -webkit-font-smoothing: antialiased; }

/* ── App Shell ── */
.app { display: flex; height: 100vh; overflow: hidden; }

/* ── Sidebar ── */
.sidebar {
  width: var(--sidebar-w);
  background: var(--navy);
  display: flex;
  flex-direction: column;
  flex-shrink: 0;
  overflow: hidden;
  position: relative;
}
.sidebar::before {
  content: '';
  position: absolute;
  top: -60px; right: -60px;
  width: 200px; height: 200px;
  background: radial-gradient(circle, rgba(42,127,232,.18) 0%, transparent 70%);
  pointer-events: none;
}

/* Brand */
.brand {
  padding: 18px 16px 14px;
  display: flex;
  align-items: center;
  gap: 10px;
  border-bottom: 1px solid rgba(255,255,255,.07);
}
.brand-icon {
  width: 32px; height: 32px;
  background: linear-gradient(135deg, var(--blue) 0%, #1A5FC4 100%);
  border-radius: 8px;
  display: flex; align-items: center; justify-content: center;
  font-size: 14px; font-weight: 700; color: #fff;
  box-shadow: 0 2px 8px rgba(42,127,232,.4);
  flex-shrink: 0;
}
.brand-name { font-size: 14px; font-weight: 700; color: #fff; letter-spacing: -.2px; }
.brand-tag  { font-size: 9.5px; color: rgba(255,255,255,.4); font-weight: 500; letter-spacing: .05em; text-transform: uppercase; }

/* Company switcher */
.emp-picker { padding: 12px 10px; border-bottom: 1px solid rgba(255,255,255,.07); }
.emp-active {
  display: flex; align-items: center; gap: 9px;
  padding: 8px 10px; border-radius: var(--radius);
  background: rgba(255,255,255,.07);
  border: 1px solid rgba(255,255,255,.1);
  cursor: pointer;
  transition: background .15s;
}
.emp-active:hover { background: rgba(255,255,255,.11); }
.emp-av {
  width: 30px; height: 30px; border-radius: 8px;
  display: flex; align-items: center; justify-content: center;
  font-size: 10px; font-weight: 700; flex-shrink: 0;
}
.emp-info { flex: 1; min-width: 0; }
.emp-name { font-size: 12px; font-weight: 600; color: #fff; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.emp-ruc  { font-size: 10px; color: rgba(255,255,255,.4); font-family: var(--mono); }
.emp-caret { font-size: 9px; color: rgba(255,255,255,.35); transition: transform .2s; }
.emp-active.open .emp-caret { transform: rotate(180deg); }
.emp-list {
  display: none; margin-top: 6px;
  background: rgba(255,255,255,.04);
  border: 1px solid rgba(255,255,255,.1);
  border-radius: var(--radius); overflow: hidden;
}
.emp-list.open { display: block; animation: fadeSlideDown .15s ease; }
.emp-opt {
  display: flex; align-items: center; gap: 9px;
  padding: 8px 10px; cursor: pointer;
  border-bottom: 1px solid rgba(255,255,255,.06);
  transition: background .12s;
}
.emp-opt:last-child { border-bottom: none; }
.emp-opt:hover { background: rgba(255,255,255,.07); }
.emp-opt.sel { background: rgba(42,127,232,.18); }
.emp-opt-name { font-size: 11.5px; font-weight: 500; color: rgba(255,255,255,.9); }
.emp-opt-ruc  { font-size: 10px; color: rgba(255,255,255,.38); font-family: var(--mono); }

/* Nav */
.nav-scroll { flex: 1; overflow-y: auto; padding: 10px 0 16px; scrollbar-width: none; }
.nav-scroll::-webkit-scrollbar { display: none; }
.nav-group { margin-bottom: 2px; }
.nav-label {
  font-size: 9.5px; font-weight: 700; color: rgba(255,255,255,.28);
  padding: 10px 16px 4px; letter-spacing: .1em; text-transform: uppercase;
}
.nav-item {
  display: flex; align-items: center; gap: 9px;
  padding: 8px 10px 8px 16px;
  font-size: 12.5px; font-weight: 500;
  color: rgba(255,255,255,.55);
  cursor: pointer;
  border-radius: 0;
  transition: color .15s, background .15s;
  position: relative;
}
.nav-item::before {
  content: '';
  position: absolute; left: 0; top: 50%; transform: translateY(-50%);
  width: 3px; height: 0; border-radius: 0 2px 2px 0;
  background: var(--blue);
  transition: height .2s;
}
.nav-item:hover { color: rgba(255,255,255,.85); background: rgba(255,255,255,.05); }
.nav-item.active {
  color: #fff;
  background: rgba(42,127,232,.2);
  font-weight: 600;
}
.nav-item.active::before { height: 60%; }
.nav-item svg { width: 15px; height: 15px; flex-shrink: 0; opacity: .75; }
.nav-item.active svg { opacity: 1; }
.nav-badge {
  margin-left: auto; font-size: 10px; font-weight: 600;
  padding: 1px 7px; border-radius: 20px;
  background: rgba(232,55,74,.25); color: #FCA5A5;
}
.nav-badge-y { background: rgba(245,158,11,.25); color: #FCD34D; }

/* Sidebar footer */
.sidebar-foot {
  padding: 12px 10px;
  border-top: 1px solid rgba(255,255,255,.07);
  display: flex; align-items: center; gap: 9px;
}
.user-av {
  width: 30px; height: 30px; border-radius: 50%;
  background: linear-gradient(135deg,#4D7CC3,#2A4F9F);
  display: flex; align-items: center; justify-content: center;
  font-size: 11px; font-weight: 700; color: #fff; flex-shrink: 0;
}
.user-name { font-size: 12px; font-weight: 600; color: rgba(255,255,255,.85); }
.user-role { font-size: 10px; color: rgba(255,255,255,.35); }
.user-dots { margin-left: auto; color: rgba(255,255,255,.3); font-size: 16px; cursor: pointer; line-height:1; }

/* ── Main Content ── */
.main { flex: 1; display: flex; flex-direction: column; min-width: 0; overflow: hidden; background: var(--bg); }

/* Topbar */
.topbar {
  background: var(--white);
  border-bottom: 1px solid var(--border);
  padding: 0 24px;
  height: 56px;
  display: flex; align-items: center; justify-content: space-between;
  flex-shrink: 0;
  box-shadow: var(--shadow-sm);
}
.topbar-left { display: flex; align-items: center; gap: 12px; }
.page-title { font-size: 15px; font-weight: 700; color: var(--text-1); }
.page-sub   { font-size: 11.5px; color: var(--text-3); font-weight: 400; }
.breadcrumb-sep { color: var(--border); font-size: 14px; }
.topbar-right { display: flex; align-items: center; gap: 8px; }
.topbar-icon-btn {
  width: 34px; height: 34px; border-radius: var(--radius-sm);
  background: transparent; border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; color: var(--text-3); transition: all .15s;
}
.topbar-icon-btn:hover { background: var(--gray-50); color: var(--text-2); }
.notif-dot {
  position: relative;
}
.notif-dot::after {
  content: ''; position: absolute; top: 6px; right: 6px;
  width: 7px; height: 7px; background: var(--red); border-radius: 50%;
  border: 2px solid var(--white);
}
.period-badge {
  padding: 5px 12px; border-radius: var(--radius-sm);
  background: var(--blue-light); color: var(--blue);
  font-size: 11.5px; font-weight: 600;
  border: 1px solid var(--blue-mid);
}

/* Main action button */
.btn-main {
  display: flex; align-items: center; gap: 6px;
  padding: 7px 14px; border-radius: var(--radius-sm);
  background: var(--blue);
  color: #fff; font-size: 12.5px; font-weight: 600;
  border: none; cursor: pointer;
  box-shadow: 0 2px 6px rgba(42,127,232,.35);
  transition: all .15s;
}
.btn-main:hover { background: #1E6DD0; transform: translateY(-1px); box-shadow: 0 4px 10px rgba(42,127,232,.4); }
.btn-main svg { width: 13px; height: 13px; }

/* Content area */
.content { flex: 1; overflow-y: auto; padding: 20px 24px; }
.screen { display: none; animation: fadeIn .2s ease; }
.screen.active { display: block; }

/* ── KPI Cards ── */
.kpis { display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 14px; margin-bottom: 20px; }
.kpi {
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 16px;
  box-shadow: var(--shadow-sm);
  transition: transform .15s, box-shadow .15s;
  position: relative; overflow: hidden;
}
.kpi:hover { transform: translateY(-2px); box-shadow: var(--shadow); }
.kpi::after {
  content: ''; position: absolute; bottom: 0; left: 0; right: 0;
  height: 3px; border-radius: 0 0 var(--radius-lg) var(--radius-lg);
}
.kpi-blue::after   { background: linear-gradient(90deg, var(--blue), #6BA8F0); }
.kpi-teal::after   { background: linear-gradient(90deg, var(--teal), #34D399); }
.kpi-amber::after  { background: linear-gradient(90deg, var(--amber), #FCD34D); }
.kpi-red::after    { background: linear-gradient(90deg, var(--red), #FB7185); }
.kpi-head { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 10px; }
.kpi-icon {
  width: 34px; height: 34px; border-radius: var(--radius-sm);
  display: flex; align-items: center; justify-content: center;
  font-size: 15px;
}
.kpi-icon-blue   { background: var(--blue-light); }
.kpi-icon-teal   { background: var(--teal-light); }
.kpi-icon-amber  { background: var(--amber-light); }
.kpi-icon-red    { background: var(--red-light); }
.kpi-label { font-size: 11px; font-weight: 600; color: var(--text-3); text-transform: uppercase; letter-spacing: .05em; }
.kpi-val   { font-size: 22px; font-weight: 700; color: var(--text-1); font-family: var(--mono); letter-spacing: -.5px; }
.kpi-foot  { display: flex; align-items: center; gap: 5px; margin-top: 6px; }
.kpi-delta { font-size: 11px; font-weight: 600; display: flex; align-items: center; gap: 2px; }
.delta-up   { color: var(--teal); }
.delta-dn   { color: var(--red); }
.kpi-sub   { font-size: 11px; color: var(--text-4); }

/* ── Section header ── */
.section-h {
  display: flex; align-items: center; justify-content: space-between;
  margin-bottom: 14px;
}
.section-title { font-size: 13px; font-weight: 700; color: var(--text-1); }
.section-link { font-size: 11.5px; color: var(--blue); font-weight: 600; cursor: pointer; }

/* ── Grid Layouts ── */
.grid2  { display: grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap: 16px; margin-bottom: 16px; }
.grid3  { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 14px; margin-bottom: 16px; }
.grid-65 { display: grid; grid-template-columns: 1.7fr 1fr; gap: 16px; margin-bottom: 16px; }

/* ── Card ── */
.card {
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 16px 18px;
  box-shadow: var(--shadow-sm);
}
.card-h { display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; }
.card-title { font-size: 13px; font-weight: 700; color: var(--text-1); }
.card-meta  { font-size: 11px; color: var(--text-4); }
.card-mb { margin-bottom: 16px; }

/* ── Badges ── */
.badge {
  display: inline-flex; align-items: center; gap: 4px;
  font-size: 10.5px; font-weight: 700;
  padding: 3px 9px; border-radius: 20px;
}
.b-blue   { background: var(--blue-light);   color: var(--blue); }
.b-teal   { background: var(--teal-light);   color: #086042; }
.b-amber  { background: var(--amber-light);  color: #92580A; }
.b-red    { background: var(--red-light);    color: #A0162A; }
.b-gray   { background: var(--gray-100);     color: var(--text-3); }
.b-navy   { background: rgba(13,27,56,.08);  color: var(--navy); }

/* ── Table ── */
.tbl { width: 100%; border-collapse: separate; border-spacing: 0; font-size: 12px; }
.tbl th {
  font-size: 10.5px; font-weight: 700; text-transform: uppercase;
  letter-spacing: .05em; color: var(--text-3);
  padding: 8px 10px; text-align: left;
  background: var(--gray-50);
  border-bottom: 1px solid var(--border);
}
.tbl th:first-child { border-radius: var(--radius-sm) 0 0 0; padding-left: 14px; }
.tbl th:last-child  { border-radius: 0 var(--radius-sm) 0 0; }
.tbl td {
  padding: 9px 10px; color: var(--text-2);
  border-bottom: 1px solid var(--border-light);
  vertical-align: middle;
}
.tbl td:first-child { padding-left: 14px; }
.tbl tr:last-child td { border-bottom: none; }
.tbl tr:hover td { background: var(--gray-50); }
.tbl .r  { text-align: right; font-family: var(--mono); font-size: 12px; color: var(--text-1); }
.tbl th.r { text-align: right; }
.tbl .tot td { font-weight: 700; color: var(--text-1); background: var(--gray-50); border-top: 1px solid var(--border); }
.tbl .db { color: var(--blue); font-family: var(--mono); }
.tbl .cr { color: var(--teal); font-family: var(--mono); }

/* ── Buttons ── */
.btn {
  display: inline-flex; align-items: center; gap: 5px;
  padding: 6px 13px; border-radius: var(--radius-sm);
  font-size: 12px; font-weight: 600;
  background: var(--white); color: var(--text-2);
  border: 1px solid var(--border);
  cursor: pointer; transition: all .15s;
}
.btn:hover { background: var(--gray-50); border-color: var(--gray-300); color: var(--text-1); }
.btn-blue {
  background: var(--blue); color: #fff; border-color: var(--blue);
  box-shadow: 0 2px 6px rgba(42,127,232,.3);
}
.btn-blue:hover { background: #1E6DD0; border-color: #1E6DD0; color: #fff; }
.btn-sm { padding: 4px 10px; font-size: 11.5px; }
.btn svg { width: 13px; height: 13px; }

/* ── Bar chart ── */
.bar-row  { display: flex; align-items: center; gap: 10px; margin-bottom: 8px; }
.bar-lbl  { width: 100px; font-size: 11.5px; color: var(--text-2); text-align: right; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.bar-bg   { flex: 1; height: 8px; background: var(--gray-100); border-radius: 6px; overflow: hidden; }
.bar-fill { height: 100%; border-radius: 6px; transition: width .4s ease; }
.bar-blue  { background: linear-gradient(90deg, var(--blue), #6BA8F0); }
.bar-teal  { background: linear-gradient(90deg, var(--teal), #34D399); }
.bar-amber { background: linear-gradient(90deg, var(--amber), #FCD34D); }
.bar-red   { background: linear-gradient(90deg, var(--red), #FB7185); }
.bar-val  { width: 64px; font-size: 11.5px; font-family: var(--mono); color: var(--text-1); font-weight: 500; }

/* ── Alert strip ── */
.alert-strip {
  display: flex; flex-wrap: wrap; gap: 8px;
  padding: 10px 14px; border-radius: var(--radius);
  background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%);
  border: 1px solid #FDE68A;
  margin-bottom: 16px;
}
.alert-item { display: flex; align-items: center; gap: 6px; font-size: 11.5px; color: #92580A; font-weight: 500; }

/* ── Tabs ── */
.tabs { display: flex; gap: 0; border-bottom: 1px solid var(--border); margin-bottom: 16px; }
.tab {
  padding: 8px 14px; font-size: 12.5px; font-weight: 600;
  color: var(--text-3); cursor: pointer;
  border-bottom: 2px solid transparent;
  margin-bottom: -1px; transition: color .15s;
}
.tab:hover { color: var(--text-2); }
.tab.active { color: var(--blue); border-bottom-color: var(--blue); }

/* ── Form fields ── */
.form-row  { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 10px; margin-bottom: 10px; }
.form-row2 { display: grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap: 10px; margin-bottom: 10px; }
.field label { display: block; font-size: 10.5px; font-weight: 700; color: var(--text-3); margin-bottom: 4px; text-transform: uppercase; letter-spacing: .04em; }
.field input, .field select {
  width: 100%; font-size: 12.5px; padding: 7px 10px;
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  background: var(--white); color: var(--text-1);
  font-family: var(--font);
  transition: border-color .15s, box-shadow .15s;
}
.field input:focus, .field select:focus {
  outline: none; border-color: var(--blue);
  box-shadow: 0 0 0 3px rgba(42,127,232,.12);
}

/* ── SRI Form ── */
.sri-box {
  background: var(--gray-50); border-radius: var(--radius);
  padding: 12px 14px; margin-bottom: 12px;
  border: 1px solid var(--border-light);
}
.sri-box-title { font-size: 11.5px; font-weight: 700; color: var(--text-1); margin-bottom: 10px; }
.sri-row { display: flex; justify-content: space-between; align-items: center; padding: 5px 0; border-bottom: 1px solid var(--border-light); font-size: 12px; }
.sri-row:last-child { border-bottom: none; }
.sri-code { font-family: var(--mono); font-size: 11px; color: var(--text-4); width: 38px; flex-shrink: 0; }
.sri-desc { flex: 1; color: var(--text-2); padding: 0 10px; }
.sri-val  { font-family: var(--mono); font-weight: 700; color: var(--text-1); text-align: right; width: 90px; }
.sri-total { font-weight: 700; border-top: 1.5px solid var(--border) !important; padding-top: 8px !important; }

/* ── Plan de cuentas ── */
.plan-row { display: flex; align-items: center; gap: 8px; padding: 6px 10px; border-bottom: 1px solid var(--border-light); font-size: 12px; }
.plan-row:hover { background: var(--gray-50); }
.plan-code  { width: 52px; font-family: var(--mono); font-size: 11px; color: var(--text-4); flex-shrink: 0; }
.plan-name  { flex: 1; color: var(--text-2); }
.plan-tipo  { width: 64px; font-size: 10.5px; text-align: right; }
.plan-saldo { width: 90px; text-align: right; font-family: var(--mono); font-size: 12px; color: var(--text-1); font-weight: 500; }
.plan-group { font-weight: 700; background: var(--gray-50); color: var(--text-1); }
.indent1 { padding-left: 20px; }
.indent2 { padding-left: 36px; }
.indent3 { padding-left: 52px; }

/* ── Progress ── */
.prog-bar { height: 6px; background: var(--gray-100); border-radius: 6px; overflow: hidden; margin-top: 6px; }
.prog-fill { height: 100%; border-radius: 6px; background: var(--blue); }

/* ── Declaraciones cards ── */
.decl-card { padding: 16px; }
.decl-amount { font-size: 24px; font-weight: 700; font-family: var(--mono); margin: 6px 0; }
.decl-due { font-size: 11px; color: var(--text-4); display: flex; align-items: center; gap: 4px; margin-top: 6px; }

/* ── Status dot ── */
.sdot { width: 7px; height: 7px; border-radius: 50%; display: inline-block; margin-right: 5px; flex-shrink: 0; }
.sdot-g { background: var(--teal); }
.sdot-a { background: var(--amber); }
.sdot-r { background: var(--red); }
.sdot-b { background: var(--blue); }

/* ── Mayor T-account ── */
.t-account { display: grid; grid-template-columns: 1fr 1fr; }
.t-account-side { padding: 10px; }
.t-account-side:first-child { border-right: 1.5px solid var(--border); }
.t-head { font-size: 10.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; color: var(--text-4); margin-bottom: 8px; }

/* ── Balance indented ── */
.bal-section { font-weight: 700; color: var(--text-1); }
.bal-group   { font-weight: 600; color: var(--text-2); background: var(--gray-50); }
.bal-line    { color: var(--text-2); }
.bal-indent1 td:first-child { padding-left: 24px; }
.bal-indent2 td:first-child { padding-left: 38px; }

/* ── Animations ── */
@keyframes fadeIn        { from { opacity:0; transform:translateY(6px) } to { opacity:1; transform:translateY(0) } }
@keyframes fadeSlideDown { from { opacity:0; transform:translateY(-6px) } to { opacity:1; transform:translateY(0) } }

/* Scrollbar */
.content::-webkit-scrollbar { width: 5px; }
.content::-webkit-scrollbar-track { background: transparent; }
.content::-webkit-scrollbar-thumb { background: var(--gray-200); border-radius: 4px; }
</style>
</head>
<body>

<div class="app">

  <!-- ═══════════════════ SIDEBAR ═══════════════════ -->
  <aside class="sidebar">

    <div class="brand">
      <div class="brand-icon">C</div>
      <div>
        <div class="brand-name">ContaEcu</div>
        <div class="brand-tag">Pro · SRI Integrado</div>
      </div>
    </div>

    <div class="emp-picker">
      <div class="emp-active" id="empToggle">
        <div class="emp-av" id="empAvatar" style="background:#1E4FA5;color:#fff;">CA</div>
        <div class="emp-info">
          <div class="emp-name" id="empName">Comercial Andes S.A.</div>
          <div class="emp-ruc" id="empRuc">RUC · 1790012345001</div>
        </div>
        <span class="emp-caret">▾</span>
      </div>
      <div class="emp-list" id="empList">
        <div class="emp-opt sel" data-i="0">
          <div class="emp-av" style="background:#1E4FA5;color:#fff;font-size:10px;font-weight:700;width:26px;height:26px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">CA</div>
          <div><div class="emp-opt-name">Comercial Andes S.A.</div><div class="emp-opt-ruc">1790012345001</div></div>
        </div>
        <div class="emp-opt" data-i="1">
          <div class="emp-av" style="background:#085041;color:#A7F3D0;font-size:10px;font-weight:700;width:26px;height:26px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">TF</div>
          <div><div class="emp-opt-name">Tech Fácil Cía. Ltda.</div><div class="emp-opt-ruc">1792088761001</div></div>
        </div>
        <div class="emp-opt" data-i="2">
          <div class="emp-av" style="background:#92580A;color:#FDE68A;font-size:10px;font-weight:700;width:26px;height:26px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">MV</div>
          <div><div class="emp-opt-name">María Vera (RISE)</div><div class="emp-opt-ruc">0102345678001</div></div>
        </div>
        <div class="emp-opt" data-i="3">
          <div class="emp-av" style="background:#72243E;color:#FECDD3;font-size:10px;font-weight:700;width:26px;height:26px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">IC</div>
          <div><div class="emp-opt-name">Importadora Cuenca</div><div class="emp-opt-ruc">0190456123001</div></div>
        </div>
        <div class="emp-opt" style="border-top:1px solid rgba(255,255,255,.1);">
          <div class="emp-av" style="background:rgba(255,255,255,.08);color:rgba(255,255,255,.4);font-size:16px;font-weight:400;width:26px;height:26px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">+</div>
          <div class="emp-opt-name" style="color:rgba(255,255,255,.5);">Agregar empresa / RUC</div>
        </div>
      </div>
    </div>

    <nav class="nav-scroll">
      <div class="nav-group">
        <div class="nav-label">Principal</div>
        <div class="nav-item active" data-screen="dashboard">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2" y="2" width="5.5" height="5.5" rx="1.2"/><rect x="8.5" y="2" width="5.5" height="5.5" rx="1.2"/><rect x="2" y="8.5" width="5.5" height="5.5" rx="1.2"/><rect x="8.5" y="8.5" width="5.5" height="5.5" rx="1.2"/></svg>
          Dashboard
        </div>
      </div>
      <div class="nav-group">
        <div class="nav-label">Contabilidad</div>
        <div class="nav-item" data-screen="diario">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 4h10M3 7.5h10M3 11h6"/></svg>
          Libro diario
        </div>
        <div class="nav-item" data-screen="plan">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2.5" y="2" width="11" height="12" rx="1.5"/><path d="M5.5 6h5M5.5 9h5M5.5 12h3"/></svg>
          Plan de cuentas
        </div>
        <div class="nav-item" data-screen="mayor">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2" y="3" width="5.5" height="10" rx="1"/><rect x="8.5" y="3" width="5.5" height="10" rx="1"/></svg>
          Mayor general
        </div>
      </div>
      <div class="nav-group">
        <div class="nav-label">Tributario SRI</div>
        <div class="nav-item" data-screen="facturacion">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="1.5" width="10" height="13" rx="1.5"/><path d="M6 5.5h4M6 8.5h4M6 11.5h2.5"/></svg>
          Facturación electrónica
          <span class="nav-badge">3</span>
        </div>
        <div class="nav-item" data-screen="iva">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 12L12 4M5 5h.01M11 11h.01"/><circle cx="5" cy="5" r="1.5"/><circle cx="11" cy="11" r="1.5"/></svg>
          IVA 15%
        </div>
        <div class="nav-item" data-screen="retenciones">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="8" cy="8" r="5.5"/><path d="M8 5.5v3l1.5 1.5"/></svg>
          Retenciones
          <span class="nav-badge nav-badge-y">2</span>
        </div>
        <div class="nav-item" data-screen="declaraciones">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2" y="2.5" width="12" height="11" rx="1.5"/><path d="M5 2.5v-1M11 2.5v-1M2 6h12"/></svg>
          Declaraciones SRI
        </div>
      </div>
      <div class="nav-group">
        <div class="nav-label">Reportes</div>
        <div class="nav-item" data-screen="balance">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M2 12l3-4 3 3 3-5 3 2"/><path d="M2 14h12"/></svg>
          Balance general
        </div>
        <div class="nav-item" data-screen="resultados">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 13V7m4 6V4m4 9V9"/></svg>
          Estado de resultados
        </div>
      </div>
    </nav>

    <div class="sidebar-foot">
      <div class="user-av">JM</div>
      <div>
        <div class="user-name">Juan Mora</div>
        <div class="user-role">Contador principal</div>
      </div>
      <div class="user-dots">⋯</div>
    </div>

  </aside>

  <!-- ═══════════════════ MAIN ═══════════════════ -->
  <div class="main">

    <!-- Topbar -->
    <div class="topbar">
      <div class="topbar-left">
        <div>
          <div class="page-title" id="pageTitle">Dashboard</div>
          <div class="page-sub" id="pageSub">Comercial Andes S.A. &nbsp;·&nbsp; Ene–Abr 2026</div>
        </div>
      </div>
      <div class="topbar-right">
        <span class="period-badge">Régimen general</span>
        <button class="topbar-icon-btn notif-dot" title="Alertas" style="position:relative;">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M8 2a4.5 4.5 0 0 1 4.5 4.5c0 2.5.8 3.5 1.5 4H2c.7-.5 1.5-1.5 1.5-4A4.5 4.5 0 0 1 8 2z"/><path d="M6.5 13.5a1.5 1.5 0 0 0 3 0"/></svg>
        </button>
        <button class="topbar-icon-btn" title="Exportar">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 10v3h10v-3M8 2v8M5.5 7.5L8 10l2.5-2.5"/></svg>
        </button>
        <button class="btn-main" id="mainAction">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 3v10M3 8h10"/></svg>
          Nuevo asiento
        </button>
      </div>
    </div>

    <!-- Content -->
    <div class="content">

      <!-- ═══ DASHBOARD ═══ -->
      <div class="screen active" id="s-dashboard">

        <div class="alert-strip">
          <div class="alert-item">
            <svg width="13" height="13" viewBox="0 0 16 16" fill="none" stroke="#92580A" stroke-width="2"><path d="M8 2l6 11H2z"/><path d="M8 7v3M8 12h.01"/></svg>
            Form. 104 (IVA) vence el <strong>28 abr</strong>
          </div>
          <div class="alert-item">
            <svg width="13" height="13" viewBox="0 0 16 16" fill="none" stroke="#92580A" stroke-width="2"><path d="M8 2l6 11H2z"/><path d="M8 7v3M8 12h.01"/></svg>
            Form. 103 (Retenciones) vence el <strong>28 abr</strong>
          </div>
          <div class="alert-item">
            <svg width="13" height="13" viewBox="0 0 16 16" fill="none" stroke="#92580A" stroke-width="2"><path d="M8 2l6 11H2z"/><path d="M8 7v3M8 12h.01"/></svg>
            3 facturas pendientes de autorización SRI
          </div>
        </div>

        <div class="kpis">
          <div class="kpi kpi-blue">
            <div class="kpi-head">
              <div>
                <div class="kpi-label">Ingresos acum.</div>
                <div class="kpi-val">$124,850</div>
              </div>
              <div class="kpi-icon kpi-icon-blue">💰</div>
            </div>
            <div class="kpi-foot">
              <span class="kpi-delta delta-up">▲ 8.4%</span>
              <span class="kpi-sub">vs período anterior</span>
            </div>
          </div>
          <div class="kpi kpi-teal">
            <div class="kpi-head">
              <div>
                <div class="kpi-label">Utilidad neta</div>
                <div class="kpi-val">$29,534</div>
              </div>
              <div class="kpi-icon kpi-icon-teal">📈</div>
            </div>
            <div class="kpi-foot">
              <span class="kpi-delta delta-up">▲ 12.1%</span>
              <span class="kpi-sub">margen 23.7%</span>
            </div>
          </div>
          <div class="kpi kpi-amber">
            <div class="kpi-head">
              <div>
                <div class="kpi-label">IVA por pagar</div>
                <div class="kpi-val">$720</div>
              </div>
              <div class="kpi-icon kpi-icon-amber">🧾</div>
            </div>
            <div class="kpi-foot">
              <span class="kpi-delta delta-up">▲ 5.9%</span>
              <span class="kpi-sub">Período abr 2026</span>
            </div>
          </div>
          <div class="kpi kpi-red">
            <div class="kpi-head">
              <div>
                <div class="kpi-label">CxC vencidas</div>
                <div class="kpi-val">$3,840</div>
              </div>
              <div class="kpi-icon kpi-icon-red">⚠️</div>
            </div>
            <div class="kpi-foot">
              <span class="kpi-delta delta-dn">▼ 3 facturas</span>
              <span class="kpi-sub">&gt;30 días</span>
            </div>
          </div>
        </div>

        <div class="grid-65">
          <!-- Ingresos vs Gastos -->
          <div class="card card-mb">
            <div class="card-h">
              <span class="card-title">Ingresos vs Gastos — 2026</span>
              <span class="card-meta">Ene · Feb · Mar · Abr</span>
            </div>
            <div style="margin-bottom:8px;">
              <div class="bar-row">
                <span class="bar-lbl">Ene 2026</span>
                <div class="bar-bg"><div class="bar-fill bar-blue" style="width:72%"></div></div>
                <span class="bar-val">$28,400</span>
              </div>
              <div class="bar-row">
                <span class="bar-lbl">Feb 2026</span>
                <div class="bar-bg"><div class="bar-fill bar-blue" style="width:76%"></div></div>
                <span class="bar-val">$30,200</span>
              </div>
              <div class="bar-row">
                <span class="bar-lbl">Mar 2026</span>
                <div class="bar-bg"><div class="bar-fill bar-blue" style="width:81%"></div></div>
                <span class="bar-val">$32,050</span>
              </div>
              <div class="bar-row">
                <span class="bar-lbl">Abr 2026</span>
                <div class="bar-bg"><div class="bar-fill bar-teal" style="width:86%"></div></div>
                <span class="bar-val">$34,200</span>
              </div>
            </div>
            <div style="display:flex;gap:14px;margin-top:12px;padding-top:10px;border-top:1px solid var(--border-light);">
              <span style="font-size:11px;color:var(--text-3);display:flex;align-items:center;gap:5px;"><span class="sdot sdot-b"></span>Ingresos</span>
              <span style="font-size:11px;color:var(--text-3);display:flex;align-items:center;gap:5px;"><span class="sdot sdot-r"></span>Gastos operac.</span>
            </div>
          </div>
          <!-- Obligaciones SRI -->
          <div class="card card-mb">
            <div class="card-h">
              <span class="card-title">Obligaciones SRI</span>
              <span class="badge b-amber">2 pendientes</span>
            </div>
            <div style="display:flex;flex-direction:column;gap:8px;">
              <div style="padding:10px 12px;background:var(--amber-light);border-radius:var(--radius-sm);border:1px solid #FDE68A;">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                  <span style="font-size:12px;font-weight:700;color:#92580A;">Form. 104 — IVA</span>
                  <span class="badge b-amber">Pendiente</span>
                </div>
                <div style="font-size:22px;font-weight:700;font-family:var(--mono);color:#92580A;">$720.00</div>
                <div class="prog-bar"><div class="prog-fill" style="width:65%;background:var(--amber);"></div></div>
                <div style="font-size:11px;color:#92580A;margin-top:5px;">Vence: 28 abr 2026</div>
              </div>
              <div style="padding:10px 12px;background:var(--red-light);border-radius:var(--radius-sm);border:1px solid #FECDD3;">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                  <span style="font-size:12px;font-weight:700;color:#A0162A;">Form. 103 — Ret.</span>
                  <span class="badge b-red">Pendiente</span>
                </div>
                <div style="font-size:22px;font-weight:700;font-family:var(--mono);color:#A0162A;">$149.00</div>
                <div class="prog-bar"><div class="prog-fill" style="width:55%;background:var(--red);"></div></div>
                <div style="font-size:11px;color:#A0162A;margin-top:5px;">Vence: 28 abr 2026</div>
              </div>
            </div>
          </div>
        </div>

        <div class="grid2">
          <!-- Últimos asientos -->
          <div class="card">
            <div class="card-h">
              <span class="card-title">Últimos asientos</span>
              <span class="section-link">Ver libro diario →</span>
            </div>
            <table class="tbl">
              <thead><tr><th>Fecha</th><th>Ref.</th><th>Descripción</th><th class="r">Débito</th><th class="r">Crédito</th></tr></thead>
              <tbody>
                <tr><td>09 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0182</td><td>Pago arriendo oficina</td><td class="r db">$800.00</td><td class="r">—</td></tr>
                <tr><td>08 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0181</td><td>Venta FAC-0341</td><td class="r">—</td><td class="r cr">$2,400.00</td></tr>
                <tr><td>07 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0180</td><td>Compra inventario</td><td class="r db">$5,200.00</td><td class="r">—</td></tr>
                <tr><td>05 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0179</td><td>Cobro CxC cliente</td><td class="r db">$1,800.00</td><td class="r">—</td></tr>
              </tbody>
            </table>
          </div>
          <!-- Últimas facturas -->
          <div class="card">
            <div class="card-h">
              <span class="card-title">Últimas facturas</span>
              <span class="badge b-red">3 pendientes SRI</span>
            </div>
            <table class="tbl">
              <thead><tr><th>N°</th><th>Cliente</th><th class="r">Total</th><th>Estado</th></tr></thead>
              <tbody>
                <tr>
                  <td style="font-family:var(--mono);font-size:11px;">FAC-0343</td>
                  <td>Grupo Terranova</td>
                  <td class="r">$1,840.00</td>
                  <td><span class="badge b-teal">✓ Autorizada</span></td>
                </tr>
                <tr>
                  <td style="font-family:var(--mono);font-size:11px;">FAC-0342</td>
                  <td>Distribuidora Norte</td>
                  <td class="r">$920.00</td>
                  <td><span class="badge b-amber">⏳ Pendiente</span></td>
                </tr>
                <tr>
                  <td style="font-family:var(--mono);font-size:11px;">FAC-0341</td>
                  <td>Ferretería Azuay</td>
                  <td class="r">$2,400.00</td>
                  <td><span class="badge b-teal">✓ Autorizada</span></td>
                </tr>
                <tr>
                  <td style="font-family:var(--mono);font-size:11px;">FAC-0340</td>
                  <td>Corp. Pichincha</td>
                  <td class="r">$680.00</td>
                  <td><span class="badge b-amber">⏳ Pendiente</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- ═══ LIBRO DIARIO ═══ -->
      <div class="screen" id="s-diario">
        <div class="card card-mb">
          <div class="form-row">
            <div class="field"><label>Fecha</label><input type="date" value="2026-04-09"/></div>
            <div class="field"><label>Referencia</label><input type="text" value="A-0182" placeholder="Ej. A-0183"/></div>
            <div class="field"><label>Concepto</label><input type="text" placeholder="Descripción del asiento"/></div>
          </div>
        </div>
        <div class="card">
          <div class="card-h">
            <span class="card-title">Libro diario — Abr 2026</span>
            <div style="display:flex;gap:6px;">
              <button class="btn btn-sm">Filtrar</button>
              <button class="btn btn-sm">Exportar</button>
            </div>
          </div>
          <table class="tbl">
            <thead><tr><th>Fecha</th><th>Ref.</th><th>Cuenta</th><th>Descripción</th><th class="r">Débito</th><th class="r">Crédito</th><th>Tipo</th></tr></thead>
            <tbody>
              <tr><td>09 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0182</td><td>5.1.01 · Arriendo</td><td>Pago arriendo local comercial</td><td class="r db">$800.00</td><td class="r">—</td><td><span class="badge b-blue">Egreso</span></td></tr>
              <tr><td>09 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0182</td><td>1.1.01 · Caja</td><td>Pago arriendo local comercial</td><td class="r">—</td><td class="r cr">$800.00</td><td><span class="badge b-blue">Egreso</span></td></tr>
              <tr><td>08 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0181</td><td>1.1.01 · Caja</td><td>Venta mercadería FAC-0341</td><td class="r db">$2,400.00</td><td class="r">—</td><td><span class="badge b-teal">Ingreso</span></td></tr>
              <tr><td>08 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0181</td><td>4.1.01 · Ventas</td><td>Venta mercadería FAC-0341</td><td class="r">—</td><td class="r cr">$2,400.00</td><td><span class="badge b-teal">Ingreso</span></td></tr>
              <tr><td>07 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0180</td><td>1.1.04 · Inventario</td><td>Compra inventario prov. Norte</td><td class="r db">$5,200.00</td><td class="r">—</td><td><span class="badge b-navy">Compra</span></td></tr>
              <tr><td>07 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0180</td><td>2.1.01 · CxP</td><td>Compra inventario prov. Norte</td><td class="r">—</td><td class="r cr">$5,200.00</td><td><span class="badge b-navy">Compra</span></td></tr>
              <tr class="tot"><td colspan="4">Total período</td><td class="r db">$19,620.00</td><td class="r cr">$19,620.00</td><td><span class="badge b-teal">✓ Cuadrado</span></td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- ═══ PLAN DE CUENTAS ═══ -->
      <div class="screen" id="s-plan">
        <div class="card">
          <div class="card-h">
            <span class="card-title">Plan de cuentas — NIIF PYMES Ecuador</span>
            <div style="display:flex;gap:6px;">
              <button class="btn btn-sm">Importar</button>
              <button class="btn btn-sm btn-blue">+ Nueva cuenta</button>
            </div>
          </div>
          <div class="plan-row plan-group"><span class="plan-code">1</span><span class="plan-name">ACTIVOS</span><span class="plan-tipo"></span><span class="plan-saldo" style="color:var(--blue);">$75,550.00</span></div>
          <div class="plan-row plan-group indent1"><span class="plan-code">1.1</span><span class="plan-name">Activo corriente</span><span class="plan-tipo"></span><span class="plan-saldo" style="color:var(--blue);">$40,950.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">1.1.01</span><span class="plan-name">Caja y bancos</span><span class="plan-tipo"><span class="badge b-teal">Activo</span></span><span class="plan-saldo">$18,400.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">1.1.02</span><span class="plan-name">Cuentas por cobrar</span><span class="plan-tipo"><span class="badge b-teal">Activo</span></span><span class="plan-saldo">$8,380.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">1.1.03</span><span class="plan-name">Crédito tributario IVA</span><span class="plan-tipo"><span class="badge b-blue">Trib.</span></span><span class="plan-saldo">$4,320.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">1.1.04</span><span class="plan-name">Inventario</span><span class="plan-tipo"><span class="badge b-teal">Activo</span></span><span class="plan-saldo">$9,850.00</span></div>
          <div class="plan-row plan-group indent1"><span class="plan-code">1.2</span><span class="plan-name">Activo no corriente</span><span class="plan-tipo"></span><span class="plan-saldo" style="color:var(--blue);">$34,600.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">1.2.01</span><span class="plan-name">Propiedad planta y equipo</span><span class="plan-tipo"><span class="badge b-teal">Activo</span></span><span class="plan-saldo">$39,000.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">1.2.02</span><span class="plan-name">(-) Depreciación acumulada</span><span class="plan-tipo"><span class="badge b-gray">Contra</span></span><span class="plan-saldo" style="color:var(--red);">($4,400.00)</span></div>
          <div class="plan-row plan-group" style="margin-top:4px;"><span class="plan-code">2</span><span class="plan-name">PASIVOS</span><span class="plan-tipo"></span><span class="plan-saldo" style="color:var(--red);">$32,780.00</span></div>
          <div class="plan-row plan-group indent1"><span class="plan-code">2.1</span><span class="plan-name">Pasivo corriente</span><span class="plan-tipo"></span><span class="plan-saldo" style="color:var(--red);">$16,780.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">2.1.01</span><span class="plan-name">Cuentas por pagar</span><span class="plan-tipo"><span class="badge b-red">Pasivo</span></span><span class="plan-saldo" style="color:var(--red);">$8,200.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">2.1.02</span><span class="plan-name">IVA por pagar (15%)</span><span class="plan-tipo"><span class="badge b-amber">Trib.</span></span><span class="plan-saldo" style="color:var(--red);">$4,800.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">2.1.03</span><span class="plan-name">IESS por pagar</span><span class="plan-tipo"><span class="badge b-red">Pasivo</span></span><span class="plan-saldo" style="color:var(--red);">$1,240.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">2.1.04</span><span class="plan-name">Retenciones por pagar</span><span class="plan-tipo"><span class="badge b-amber">Trib.</span></span><span class="plan-saldo" style="color:var(--red);">$840.00</span></div>
          <div class="plan-row plan-group" style="margin-top:4px;"><span class="plan-code">3</span><span class="plan-name">PATRIMONIO</span><span class="plan-tipo"></span><span class="plan-saldo" style="color:var(--teal);">$42,770.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">3.1.01</span><span class="plan-name">Capital social</span><span class="plan-tipo"><span class="badge b-teal">Patrim.</span></span><span class="plan-saldo" style="color:var(--teal);">$10,000.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">3.1.02</span><span class="plan-name">Reservas legales (10%)</span><span class="plan-tipo"><span class="badge b-teal">Patrim.</span></span><span class="plan-saldo" style="color:var(--teal);">$12,500.00</span></div>
          <div class="plan-row indent2"><span class="plan-code">3.1.03</span><span class="plan-name">Utilidades retenidas</span><span class="plan-tipo"><span class="badge b-teal">Patrim.</span></span><span class="plan-saldo" style="color:var(--teal);">$20,270.00</span></div>
        </div>
      </div>

      <!-- ═══ MAYOR GENERAL ═══ -->
      <div class="screen" id="s-mayor">
        <div class="card card-mb" style="padding:12px 14px;">
          <div class="form-row2">
            <div class="field"><label>Cuenta</label><select><option>1.1.01 · Caja y bancos</option><option>1.1.02 · CxC</option><option>2.1.01 · CxP</option></select></div>
            <div class="field"><label>Período</label><select><option>Enero – Abril 2026</option><option>Enero – Marzo 2026</option></select></div>
          </div>
        </div>
        <div class="card">
          <div class="card-h">
            <span class="card-title">Mayor — 1.1.01 · Caja y bancos</span>
            <span class="badge b-blue">Saldo: $18,400.00 Db</span>
          </div>
          <table class="tbl">
            <thead><tr><th>Fecha</th><th>Ref.</th><th>Descripción</th><th class="r">Débito</th><th class="r">Crédito</th><th class="r">Saldo</th></tr></thead>
            <tbody>
              <tr><td colspan="3" style="font-weight:700;color:var(--text-3);font-size:11px;">Saldo inicial · 1 ene 2026</td><td class="r">—</td><td class="r">—</td><td class="r db" style="font-weight:700;">$12,000.00</td></tr>
              <tr><td>08 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0181</td><td>Cobro FAC-0341</td><td class="r db">$2,400.00</td><td class="r">—</td><td class="r db">$20,400.00</td></tr>
              <tr><td>09 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0182</td><td>Pago arriendo</td><td class="r">—</td><td class="r cr">$800.00</td><td class="r db">$19,600.00</td></tr>
              <tr><td>09 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">A-0183</td><td>Pago nómina abr</td><td class="r">—</td><td class="r cr">$1,200.00</td><td class="r db">$18,400.00</td></tr>
              <tr class="tot"><td colspan="3">Totales período</td><td class="r db">$2,400.00</td><td class="r cr">$2,000.00</td><td class="r db">$18,400.00</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- ═══ FACTURACIÓN ═══ -->
      <div class="screen" id="s-facturacion">
        <div class="tabs">
          <div class="tab active">Emitidas</div>
          <div class="tab">Recibidas</div>
          <div class="tab">Nueva factura</div>
        </div>
        <div class="card card-mb">
          <div class="form-row">
            <div class="field"><label>Tipo comprobante</label><select><option>Factura</option><option>Nota de crédito</option><option>Nota de débito</option></select></div>
            <div class="field"><label>RUC / Cédula cliente</label><input type="text" placeholder="Ej. 1790056789001"/></div>
            <div class="field"><label>Fecha emisión</label><input type="date" value="2026-04-09"/></div>
          </div>
        </div>
        <div class="card">
          <div class="card-h">
            <span class="card-title">Facturas electrónicas — Abr 2026</span>
            <div style="display:flex;gap:6px;align-items:center;">
              <span class="badge b-red">3 pendientes SRI</span>
              <button class="btn btn-sm">Exportar</button>
            </div>
          </div>
          <table class="tbl">
            <thead><tr><th>N° Factura</th><th>Fecha</th><th>RUC</th><th>Cliente</th><th class="r">Subtotal</th><th class="r">IVA 15%</th><th class="r">Total</th><th>Estado SRI</th></tr></thead>
            <tbody>
              <tr>
                <td style="font-family:var(--mono);font-size:11.5px;font-weight:600;">FAC-0343</td>
                <td>09 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">1790034561001</td>
                <td>Grupo Terranova</td>
                <td class="r">$1,600.00</td><td class="r">$240.00</td><td class="r" style="font-weight:700;">$1,840.00</td>
                <td><span class="badge b-teal">✓ Autorizada</span></td>
              </tr>
              <tr>
                <td style="font-family:var(--mono);font-size:11.5px;font-weight:600;">FAC-0342</td>
                <td>08 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">0190045678001</td>
                <td>Distribuidora Norte</td>
                <td class="r">$800.00</td><td class="r">$120.00</td><td class="r" style="font-weight:700;">$920.00</td>
                <td><span class="badge b-amber">⏳ Pendiente</span></td>
              </tr>
              <tr>
                <td style="font-family:var(--mono);font-size:11.5px;font-weight:600;">FAC-0341</td>
                <td>07 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">0502389012001</td>
                <td>Ferretería Azuay</td>
                <td class="r">$2,087.00</td><td class="r">$313.00</td><td class="r" style="font-weight:700;">$2,400.00</td>
                <td><span class="badge b-teal">✓ Autorizada</span></td>
              </tr>
              <tr>
                <td style="font-family:var(--mono);font-size:11.5px;font-weight:600;">FAC-0340</td>
                <td>05 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">1790098765001</td>
                <td>Corp. Pichincha</td>
                <td class="r">$591.00</td><td class="r">$89.00</td><td class="r" style="font-weight:700;">$680.00</td>
                <td><span class="badge b-amber">⏳ Pendiente</span></td>
              </tr>
              <tr class="tot"><td colspan="4">Totales mes</td><td class="r">$5,078.00</td><td class="r">$762.00</td><td class="r" style="font-weight:700;">$5,840.00</td><td></td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- ═══ IVA ═══ -->
      <div class="screen" id="s-iva">
        <div class="grid2">
          <div class="card">
            <div class="card-h"><span class="card-title">Resumen IVA — Abr 2026</span><span class="badge b-amber">Por declarar</span></div>
            <div class="sri-box">
              <div class="sri-box-title">IVA en ventas (débito fiscal)</div>
              <div class="sri-row"><span class="sri-code">411</span><span class="sri-desc">Ventas gravadas tarifa 15%</span><span class="sri-val">$33,100.00</span></div>
              <div class="sri-row"><span class="sri-code">421</span><span class="sri-desc">IVA generado (15%)</span><span class="sri-val" style="color:var(--red);">$4,965.00</span></div>
            </div>
            <div class="sri-box">
              <div class="sri-box-title">IVA en compras (crédito fiscal)</div>
              <div class="sri-row"><span class="sri-code">511</span><span class="sri-desc">Compras gravadas tarifa 15%</span><span class="sri-val">$28,300.00</span></div>
              <div class="sri-row"><span class="sri-code">521</span><span class="sri-desc">IVA pagado en compras</span><span class="sri-val" style="color:var(--teal);">$4,245.00</span></div>
            </div>
            <div class="sri-box" style="background:var(--amber-light);border-color:#FDE68A;">
              <div class="sri-row sri-total">
                <span class="sri-code" style="font-weight:700;">—</span>
                <span class="sri-desc" style="font-weight:700;color:var(--text-1);">IVA a pagar (form. 104)</span>
                <span class="sri-val" style="color:var(--red);font-size:18px;font-weight:700;">$720.00</span>
              </div>
            </div>
            <div style="display:flex;justify-content:flex-end;gap:8px;margin-top:10px;">
              <button class="btn btn-sm">Ver XML</button>
              <button class="btn btn-sm btn-blue">Declarar form. 104</button>
            </div>
          </div>
          <div class="card">
            <div class="card-h"><span class="card-title">Historial declaraciones IVA</span></div>
            <table class="tbl">
              <thead><tr><th>Período</th><th class="r">Débito</th><th class="r">Crédito</th><th class="r">IVA neto</th><th>Estado</th></tr></thead>
              <tbody>
                <tr><td>Mar 2026</td><td class="r">$4,590.00</td><td class="r">$3,910.00</td><td class="r" style="font-weight:700;">$680.00</td><td><span class="badge b-teal">Pagada</span></td></tr>
                <tr><td>Feb 2026</td><td class="r">$4,200.00</td><td class="r">$3,660.00</td><td class="r" style="font-weight:700;">$540.00</td><td><span class="badge b-teal">Pagada</span></td></tr>
                <tr><td>Ene 2026</td><td class="r">$4,080.00</td><td class="r">$3,470.00</td><td class="r" style="font-weight:700;">$610.00</td><td><span class="badge b-teal">Pagada</span></td></tr>
                <tr><td>Dic 2025</td><td class="r">$5,100.00</td><td class="r">$4,350.00</td><td class="r" style="font-weight:700;">$750.00</td><td><span class="badge b-teal">Pagada</span></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- ═══ RETENCIONES ═══ -->
      <div class="screen" id="s-retenciones">
        <div class="tabs">
          <div class="tab active">Ret. en la fuente (IR)</div>
          <div class="tab">Ret. IVA</div>
        </div>
        <div class="card card-mb">
          <div class="card-h">
            <span class="card-title">Comprobantes emitidos — Abr 2026</span>
            <button class="btn btn-sm btn-blue">+ Emitir retención</button>
          </div>
          <table class="tbl">
            <thead><tr><th>N° Comp.</th><th>Fecha</th><th>RUC Proveedor</th><th>Proveedor</th><th>Cód.</th><th>Concepto</th><th class="r">Base</th><th class="r">%</th><th class="r">Retención</th></tr></thead>
            <tbody>
              <tr><td style="font-family:var(--mono);font-size:11.5px;font-weight:600;">RET-0012</td><td>08 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">1790098765001</td><td>Corp. Pichincha</td><td><span class="badge b-navy">303</span></td><td>Honorarios</td><td class="r">$800.00</td><td class="r">10%</td><td class="r" style="color:var(--red);font-weight:700;">$80.00</td></tr>
              <tr><td style="font-family:var(--mono);font-size:11.5px;font-weight:600;">RET-0011</td><td>05 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">0502389012001</td><td>Ferretería Azuay</td><td><span class="badge b-navy">312</span></td><td>Bienes</td><td class="r">$4,500.00</td><td class="r">1%</td><td class="r" style="color:var(--red);font-weight:700;">$45.00</td></tr>
              <tr><td style="font-family:var(--mono);font-size:11.5px;font-weight:600;">RET-0010</td><td>03 abr</td><td style="font-family:var(--mono);font-size:11px;color:var(--text-4);">1790045123001</td><td>Distribuidora Norte</td><td><span class="badge b-navy">320</span></td><td>Servicios</td><td class="r">$1,200.00</td><td class="r">2%</td><td class="r" style="color:var(--red);font-weight:700;">$24.00</td></tr>
            </tbody>
          </table>
        </div>
        <div class="card">
          <div class="card-h"><span class="card-title">Resumen form. 103 — Abr 2026</span><span class="badge b-amber">Por declarar</span></div>
          <div class="sri-box">
            <div class="sri-box-title">Agrupación por código de retención</div>
            <div class="sri-row"><span class="sri-code">303</span><span class="sri-desc">Honorarios profesionales (10%)</span><span class="sri-val" style="color:var(--red);">$80.00</span></div>
            <div class="sri-row"><span class="sri-code">312</span><span class="sri-desc">Transferencia bienes muebles (1%)</span><span class="sri-val" style="color:var(--red);">$45.00</span></div>
            <div class="sri-row"><span class="sri-code">320</span><span class="sri-desc">Prestación de servicios (2%)</span><span class="sri-val" style="color:var(--red);">$24.00</span></div>
            <div class="sri-row sri-total"><span class="sri-code">—</span><span class="sri-desc" style="font-weight:700;">Total retenciones a pagar</span><span class="sri-val" style="color:var(--red);font-size:18px;">$149.00</span></div>
          </div>
          <div style="display:flex;justify-content:flex-end;gap:8px;margin-top:10px;">
            <button class="btn btn-sm">Generar XML</button>
            <button class="btn btn-sm btn-blue">Enviar form. 103</button>
          </div>
        </div>
      </div>

      <!-- ═══ DECLARACIONES ═══ -->
      <div class="screen" id="s-declaraciones">
        <div class="grid3">
          <div class="card">
            <div class="card-h"><span class="card-title">Form. 104 — IVA mensual</span><span class="badge b-amber">Pendiente</span></div>
            <div style="font-size:11px;color:var(--text-4);margin-bottom:4px;">Período: Abril 2026</div>
            <div class="decl-amount" style="color:var(--red);">$720.00</div>
            <div class="prog-bar"><div class="prog-fill" style="width:65%;"></div></div>
            <div class="decl-due">📅 Vence: 28 abr 2026</div>
            <button class="btn btn-blue" style="width:100%;margin-top:12px;justify-content:center;">Declarar ahora</button>
          </div>
          <div class="card">
            <div class="card-h"><span class="card-title">Form. 103 — Retenciones</span><span class="badge b-amber">Pendiente</span></div>
            <div style="font-size:11px;color:var(--text-4);margin-bottom:4px;">Período: Abril 2026</div>
            <div class="decl-amount" style="color:var(--red);">$149.00</div>
            <div class="prog-bar"><div class="prog-fill" style="width:55%;"></div></div>
            <div class="decl-due">📅 Vence: 28 abr 2026</div>
            <button class="btn btn-blue" style="width:100%;margin-top:12px;justify-content:center;">Declarar ahora</button>
          </div>
          <div class="card">
            <div class="card-h"><span class="card-title">Form. 101 — Imp. renta</span><span class="badge b-gray">Próximo</span></div>
            <div style="font-size:11px;color:var(--text-4);margin-bottom:4px;">Ejercicio: 2025</div>
            <div class="decl-amount">$12,400.00</div>
            <div class="prog-bar"><div class="prog-fill" style="width:80%;background:var(--teal);"></div></div>
            <div class="decl-due">📅 Vence: 28 abr 2026</div>
            <button class="btn" style="width:100%;margin-top:12px;justify-content:center;">Ver borrador</button>
          </div>
        </div>
        <div class="card">
          <div class="card-h"><span class="card-title">Historial de declaraciones</span></div>
          <table class="tbl">
            <thead><tr><th>Formulario</th><th>Período</th><th>Fecha envío</th><th>N° declaración</th><th class="r">Valor pagado</th><th>Estado</th></tr></thead>
            <tbody>
              <tr><td>Form. 103</td><td>Mar 2026</td><td>18 abr 2026</td><td style="font-family:var(--mono);font-size:11px;">0120456789</td><td class="r">$137.00</td><td><span class="badge b-teal">✓ Pagada</span></td></tr>
              <tr><td>Form. 104</td><td>Mar 2026</td><td>18 abr 2026</td><td style="font-family:var(--mono);font-size:11px;">0120456788</td><td class="r">$680.00</td><td><span class="badge b-teal">✓ Pagada</span></td></tr>
              <tr><td>Form. 103</td><td>Feb 2026</td><td>19 mar 2026</td><td style="font-family:var(--mono);font-size:11px;">0118234567</td><td class="r">$98.00</td><td><span class="badge b-teal">✓ Pagada</span></td></tr>
              <tr><td>Form. 104</td><td>Feb 2026</td><td>19 mar 2026</td><td style="font-family:var(--mono);font-size:11px;">0118234566</td><td class="r">$540.00</td><td><span class="badge b-teal">✓ Pagada</span></td></tr>
              <tr><td>Form. 104</td><td>Ene 2026</td><td>20 feb 2026</td><td style="font-family:var(--mono);font-size:11px;">0115678901</td><td class="r">$610.00</td><td><span class="badge b-teal">✓ Pagada</span></td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- ═══ BALANCE GENERAL ═══ -->
      <div class="screen" id="s-balance">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px;">
          <div>
            <div style="font-size:13px;font-weight:700;color:var(--text-1);">Balance General — Comercial Andes S.A.</div>
            <div style="font-size:11.5px;color:var(--text-4);">Al 09 de abril de 2026 · NIIF PYMES</div>
          </div>
          <div style="display:flex;gap:8px;">
            <button class="btn btn-sm">📥 Excel</button>
            <button class="btn btn-sm btn-blue">📄 PDF</button>
          </div>
        </div>
        <div class="grid2">
          <div class="card">
            <div class="card-h">
              <span class="card-title" style="color:var(--blue);">Activos</span>
              <span style="font-size:16px;font-weight:700;color:var(--blue);font-family:var(--mono);">$75,550.00</span>
            </div>
            <table class="tbl">
              <thead><tr><th>Cuenta</th><th class="r">USD</th></tr></thead>
              <tbody>
                <tr class="bal-group"><td style="font-weight:700;padding-left:6px;">Activo corriente</td><td class="r" style="font-weight:700;">$40,950.00</td></tr>
                <tr class="bal-indent1"><td>Caja y bancos</td><td class="r">$18,400.00</td></tr>
                <tr class="bal-indent1"><td>Cuentas por cobrar</td><td class="r">$8,380.00</td></tr>
                <tr class="bal-indent1"><td>Crédito tributario IVA</td><td class="r">$4,320.00</td></tr>
                <tr class="bal-indent1"><td>Inventario</td><td class="r">$9,850.00</td></tr>
                <tr class="bal-group"><td style="font-weight:700;padding-left:6px;">Activo no corriente</td><td class="r" style="font-weight:700;">$34,600.00</td></tr>
                <tr class="bal-indent1"><td>Propiedad planta y equipo</td><td class="r">$39,000.00</td></tr>
                <tr class="bal-indent1"><td>(-) Depreciación acum.</td><td class="r" style="color:var(--red);">($4,400.00)</td></tr>
                <tr class="tot"><td style="color:var(--blue);font-weight:700;">TOTAL ACTIVOS</td><td class="r" style="color:var(--blue);font-size:14px;font-weight:700;">$75,550.00</td></tr>
              </tbody>
            </table>
          </div>
          <div class="card">
            <div class="card-h">
              <span class="card-title" style="color:var(--teal);">Pasivos + Patrimonio</span>
              <span style="font-size:16px;font-weight:700;color:var(--teal);font-family:var(--mono);">$75,550.00</span>
            </div>
            <table class="tbl">
              <thead><tr><th>Cuenta</th><th class="r">USD</th></tr></thead>
              <tbody>
                <tr class="bal-group"><td style="font-weight:700;padding-left:6px;">Pasivo corriente</td><td class="r" style="font-weight:700;">$16,780.00</td></tr>
                <tr class="bal-indent1"><td>Cuentas por pagar</td><td class="r">$8,200.00</td></tr>
                <tr class="bal-indent1"><td>IVA por pagar (15%)</td><td class="r">$4,800.00</td></tr>
                <tr class="bal-indent1"><td>IESS por pagar</td><td class="r">$1,240.00</td></tr>
                <tr class="bal-indent1"><td>Retenciones por pagar</td><td class="r">$840.00</td></tr>
                <tr class="bal-indent1"><td>Otros pasivos C/P</td><td class="r">$1,700.00</td></tr>
                <tr class="bal-group"><td style="font-weight:700;padding-left:6px;">Pasivo no corriente</td><td class="r" style="font-weight:700;">$16,000.00</td></tr>
                <tr class="bal-indent1"><td>Préstamos L/P</td><td class="r">$16,000.00</td></tr>
                <tr class="bal-group"><td style="font-weight:700;padding-left:6px;">Patrimonio</td><td class="r" style="font-weight:700;color:var(--teal);">$42,770.00</td></tr>
                <tr class="bal-indent1"><td>Capital social</td><td class="r">$10,000.00</td></tr>
                <tr class="bal-indent1"><td>Reservas legales (10%)</td><td class="r">$12,500.00</td></tr>
                <tr class="bal-indent1"><td>Utilidades retenidas</td><td class="r">$20,270.00</td></tr>
                <tr class="tot"><td style="color:var(--teal);font-weight:700;">TOTAL PAS. + PATRIM.</td><td class="r" style="color:var(--teal);font-size:14px;font-weight:700;">$75,550.00</td></tr>
              </tbody>
            </table>
            <div style="margin-top:12px;padding:8px 12px;background:var(--teal-light);border-radius:var(--radius-sm);text-align:center;font-size:11.5px;color:#086042;font-weight:600;">
              ✓ Partida doble verificada — Activos = Pasivos + Patrimonio = $75,550.00
            </div>
          </div>
        </div>
      </div>

      <!-- ═══ ESTADO DE RESULTADOS ═══ -->
      <div class="screen" id="s-resultados">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px;">
          <div>
            <div style="font-size:13px;font-weight:700;color:var(--text-1);">Estado de Resultados — Comercial Andes S.A.</div>
            <div style="font-size:11.5px;color:var(--text-4);">Período Ene–Abr 2026</div>
          </div>
          <div style="display:flex;gap:8px;">
            <button class="btn btn-sm">📥 Excel</button>
            <button class="btn btn-sm btn-blue">📄 PDF</button>
          </div>
        </div>
        <div class="card">
          <table class="tbl">
            <thead><tr><th>Concepto</th><th class="r">Ene 2026</th><th class="r">Feb 2026</th><th class="r">Mar 2026</th><th class="r">Abr 2026</th><th class="r">Total acum.</th></tr></thead>
            <tbody>
              <tr class="bal-group"><td style="padding-left:6px;">Ingresos operacionales</td><td class="r">$28,400</td><td class="r">$30,200</td><td class="r">$32,050</td><td class="r">$34,200</td><td class="r" style="font-weight:700;color:var(--blue);">$124,850</td></tr>
              <tr class="bal-indent1"><td>Ventas netas</td><td class="r">$26,800</td><td class="r">$28,900</td><td class="r">$31,200</td><td class="r">$33,100</td><td class="r">$120,000</td></tr>
              <tr class="bal-indent1"><td>Otros ingresos</td><td class="r">$1,600</td><td class="r">$1,300</td><td class="r">$850</td><td class="r">$1,100</td><td class="r">$4,850</td></tr>
              <tr class="bal-group"><td style="padding-left:6px;">(-) Costo de ventas</td><td class="r" style="color:var(--red);">($12,800)</td><td class="r" style="color:var(--red);">($13,200)</td><td class="r" style="color:var(--red);">($14,100)</td><td class="r" style="color:var(--red);">($14,100)</td><td class="r" style="font-weight:700;color:var(--red);">($54,200)</td></tr>
              <tr style="background:var(--teal-light);"><td style="font-weight:700;padding-left:6px;color:#086042;">Utilidad bruta</td><td class="r" style="font-weight:700;color:#086042;">$15,600</td><td class="r" style="font-weight:700;color:#086042;">$17,000</td><td class="r" style="font-weight:700;color:#086042;">$17,950</td><td class="r" style="font-weight:700;color:#086042;">$20,100</td><td class="r" style="font-weight:700;color:#086042;font-size:13px;">$70,650</td></tr>
              <tr class="bal-group"><td style="padding-left:6px;">(-) Gastos operacionales</td><td class="r" style="color:var(--red);">($6,200)</td><td class="r" style="color:var(--red);">($5,800)</td><td class="r" style="color:var(--red);">($6,100)</td><td class="r" style="color:var(--red);">($6,220)</td><td class="r" style="font-weight:700;color:var(--red);">($24,320)</td></tr>
              <tr class="bal-indent1"><td>Sueldos y salarios</td><td class="r">($3,500)</td><td class="r">($3,200)</td><td class="r">($3,400)</td><td class="r">($3,400)</td><td class="r">($13,500)</td></tr>
              <tr class="bal-indent1"><td>Arriendo</td><td class="r">($800)</td><td class="r">($800)</td><td class="r">($800)</td><td class="r">($800)</td><td class="r">($3,200)</td></tr>
              <tr class="bal-indent1"><td>Servicios básicos</td><td class="r">($420)</td><td class="r">($390)</td><td class="r">($410)</td><td class="r">($430)</td><td class="r">($1,650)</td></tr>
              <tr class="bal-indent1"><td>Depreciaciones</td><td class="r">($480)</td><td class="r">($410)</td><td class="r">($490)</td><td class="r">($590)</td><td class="r">($1,970)</td></tr>
              <tr style="background:#EEF5FF;"><td style="font-weight:700;padding-left:6px;color:var(--blue);">Utilidad operacional</td><td class="r" style="font-weight:700;color:var(--blue);">$9,400</td><td class="r" style="font-weight:700;color:var(--blue);">$11,200</td><td class="r" style="font-weight:700;color:var(--blue);">$11,850</td><td class="r" style="font-weight:700;color:var(--blue);">$13,880</td><td class="r" style="font-weight:700;color:var(--blue);font-size:13px;">$46,330</td></tr>
              <tr class="bal-group"><td style="padding-left:6px;">(-) 15% Part. trabajadores</td><td class="r" style="color:var(--red);">($1,410)</td><td class="r" style="color:var(--red);">($1,680)</td><td class="r" style="color:var(--red);">($1,778)</td><td class="r" style="color:var(--red);">($2,082)</td><td class="r" style="font-weight:700;color:var(--red);">($6,950)</td></tr>
              <tr class="bal-group"><td style="padding-left:6px;">(-) 25% Imp. a la renta</td><td class="r" style="color:var(--red);">($1,998)</td><td class="r" style="color:var(--red);">($2,380)</td><td class="r" style="color:var(--red);">($2,518)</td><td class="r" style="color:var(--red);">($2,950)</td><td class="r" style="font-weight:700;color:var(--red);">($9,846)</td></tr>
              <tr class="tot"><td style="font-size:13px;font-weight:700;color:#086042;">✓ Utilidad neta del período</td><td class="r" style="font-weight:700;color:#086042;">$5,992</td><td class="r" style="font-weight:700;color:#086042;">$7,140</td><td class="r" style="font-weight:700;color:#086042;">$7,554</td><td class="r" style="font-weight:700;color:#086042;">$8,848</td><td class="r" style="color:#086042;font-size:20px;font-weight:700;font-family:var(--mono);">$29,534</td></tr>
            </tbody>
          </table>
        </div>
      </div>

    </div><!-- /content -->
  </div><!-- /main -->
</div><!-- /app -->

<script>
const empresas = [
  { av:"CA", name:"Comercial Andes S.A.",  ruc:"1790012345001", bg:"#1E4FA5", cl:"#fff", reg:"Régimen general" },
  { av:"TF", name:"Tech Fácil Cía. Ltda.", ruc:"1792088761001", bg:"#085041", cl:"#A7F3D0", reg:"Régimen general" },
  { av:"MV", name:"María Vera (RISE)",      ruc:"0102345678001", bg:"#92580A", cl:"#FDE68A", reg:"RISE" },
  { av:"IC", name:"Importadora Cuenca",     ruc:"0190456123001", bg:"#72243E", cl:"#FECDD3", reg:"Régimen general" }
];
const titles  = { dashboard:"Dashboard", diario:"Libro diario", plan:"Plan de cuentas", mayor:"Mayor general", facturacion:"Facturación electrónica", iva:"IVA 15%", retenciones:"Retenciones", declaraciones:"Declaraciones SRI", balance:"Balance general", resultados:"Estado de resultados" };
const btnLbls = { dashboard:"Nuevo asiento", diario:"Nuevo asiento", plan:"Nueva cuenta", mayor:"Exportar", facturacion:"Nueva factura", iva:"Generar form. 104", retenciones:"Emitir retención", declaraciones:"Ver calendario", balance:"Exportar PDF", resultados:"Exportar PDF" };

let curEmp = 0;
function setEmp(i) {
  curEmp = i;
  const e = empresas[i];
  const av = document.getElementById("empAvatar");
  av.textContent = e.av;
  av.style.background = e.bg;
  av.style.color = e.cl;
  document.getElementById("empName").textContent = e.name;
  document.getElementById("empRuc").textContent  = "RUC · " + e.ruc;
  document.getElementById("pageSub").textContent = e.name + " \u00a0·\u00a0 Ene–Abr 2026";
  document.querySelectorAll(".emp-opt").forEach((o,j) => o.classList.toggle("sel", j===i));
  document.querySelector(".period-badge").textContent = e.reg;
  document.getElementById("empList").classList.remove("open");
  document.getElementById("empToggle").classList.remove("open");
}

document.getElementById("empToggle").onclick = () => {
  document.getElementById("empList").classList.toggle("open");
  document.getElementById("empToggle").classList.toggle("open");
};
document.querySelectorAll(".emp-opt[data-i]").forEach(o => o.onclick = () => setEmp(+o.dataset.i));

document.querySelectorAll(".nav-item[data-screen]").forEach(item => {
  item.onclick = () => {
    const s = item.dataset.screen;
    document.querySelectorAll(".nav-item").forEach(n => n.classList.remove("active"));
    item.classList.add("active");
    document.querySelectorAll(".screen").forEach(sc => sc.classList.remove("active"));
    document.getElementById("s-"+s).classList.add("active");
    document.getElementById("pageTitle").textContent  = titles[s]  || s;
    const btn = document.getElementById("mainAction");
    btn.innerHTML = `<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 3v10M3 8h10"/></svg> ` + (btnLbls[s] || "Nuevo");
  };
});

// Tab interactions
document.querySelectorAll(".tab").forEach(tab => {
  tab.onclick = () => {
    tab.closest(".tabs").querySelectorAll(".tab").forEach(t => t.classList.remove("active"));
    tab.classList.add("active");
  };
});
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
    background: linear-gradient(135deg, #0D1B38 0%, #2A7FE8 100%);
    color: #fff;
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
    font-size: 13.5px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    box-shadow: 0 6px 24px rgba(42, 127, 232, 0.45), 0 2px 6px rgba(0,0,0,0.18);
    transition: transform 0.18s ease, box-shadow 0.18s ease;
    opacity: 0;
    transform: translateY(10px);
    animation: fabMockupIn 0.45s 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
  }
  .fab-back-mockup:hover {
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 10px 32px rgba(42, 127, 232, 0.55), 0 3px 8px rgba(0,0,0,0.22);
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
