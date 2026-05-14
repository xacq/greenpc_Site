<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musicast — Fase 4 Mockup</title>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
  :root{
    --gold:#C8A84B;--gold-light:#E2C070;--gold-dark:#A08030;
    --bg-dark:#0C0C0C;--bg-card:#1A1A1A;--bg-card2:#242424;--bg-input:#2A2A2A;
    --text-primary:#F5F5F5;--text-secondary:#9A9A9A;--text-muted:#5A5A5A;
    --border:#2E2E2E;--success:#4CAF50;--info:#2196F3;--warn:#FF9800;--danger:#E53935;
    --purple:#9C27B0;
    --phone-w:375px;--phone-h:812px;--radius:12px;--radius-sm:8px;
  }
  body{background:#0A0A0A;font-family:'Inter',sans-serif;color:var(--text-primary);min-height:100vh;}

  /* HEADER */
  .site-header{background:#111;border-bottom:1px solid var(--border);padding:16px 32px;display:flex;align-items:center;justify-content:space-between;position:sticky;top:0;z-index:100;}
  .site-logo{font-family:'Sora',sans-serif;font-size:20px;font-weight:700;color:var(--gold);}
  .site-logo span{color:var(--text-primary);}
  .phase-badge{background:#1A0A1A;color:#CE93D8;font-size:11px;font-weight:600;padding:4px 12px;border-radius:20px;letter-spacing:.5px;text-transform:uppercase;border:1px solid #3A1A3A;}

  /* NAV */
  .screens-nav{display:flex;gap:6px;padding:20px 32px 0;overflow-x:auto;scrollbar-width:none;flex-wrap:wrap;}
  .screens-nav::-webkit-scrollbar{display:none;}
  .nav-btn{background:var(--bg-card);border:1px solid var(--border);color:var(--text-secondary);padding:7px 14px;border-radius:20px;font-size:12px;font-weight:500;cursor:pointer;white-space:nowrap;transition:all .2s;font-family:'Inter',sans-serif;}
  .nav-btn:hover{border-color:var(--gold);color:var(--gold);}
  .nav-btn.active{background:var(--gold);border-color:var(--gold);color:#0C0C0C;font-weight:600;}

  /* LAYOUT */
  .main-wrap{padding:32px;display:flex;gap:40px;align-items:flex-start;justify-content:center;}
  .phone-frame{width:var(--phone-w);min-width:var(--phone-w);background:#111;border-radius:48px;border:2px solid #2A2A2A;overflow:hidden;box-shadow:0 40px 80px rgba(0,0,0,.7),0 0 0 1px #333 inset;position:sticky;top:100px;}
  .phone-notch{height:44px;background:#0C0C0C;display:flex;align-items:center;justify-content:space-between;padding:0 24px;font-size:12px;font-weight:600;color:var(--text-primary);position:relative;}
  .notch-island{width:120px;height:22px;background:#000;border-radius:12px;position:absolute;left:50%;transform:translateX(-50%);top:11px;}
  .phone-screen{height:var(--phone-h);background:var(--bg-dark);overflow-y:auto;scrollbar-width:none;}
  .phone-screen::-webkit-scrollbar{display:none;}
  .info-panel{max-width:300px;position:sticky;top:100px;}
  .screen-label{font-family:'Sora',sans-serif;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:1.5px;color:var(--gold);margin-bottom:8px;}
  .screen-title{font-family:'Sora',sans-serif;font-size:26px;font-weight:700;color:var(--text-primary);line-height:1.2;margin-bottom:12px;}
  .screen-desc{font-size:14px;color:var(--text-secondary);line-height:1.7;margin-bottom:20px;}
  .features-list{list-style:none;display:flex;flex-direction:column;gap:8px;}
  .features-list li{font-size:13px;color:var(--text-secondary);display:flex;align-items:center;gap:8px;}
  .features-list li::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--gold);flex-shrink:0;}
  .nav-arrows{display:flex;gap:8px;margin-top:24px;}
  .arrow-btn{background:var(--bg-card);border:1px solid var(--border);color:var(--text-secondary);width:38px;height:38px;border-radius:50%;cursor:pointer;font-size:16px;display:flex;align-items:center;justify-content:center;transition:all .2s;font-family:'Inter',sans-serif;}
  .arrow-btn:hover{background:var(--gold);border-color:var(--gold);color:#000;}
  .arrow-btn:disabled{opacity:.3;cursor:not-allowed;}
  .screen-counter{font-size:12px;color:var(--text-muted);margin-top:12px;}
  .screen-counter strong{color:var(--text-primary);}

  /* SCREEN */
  .screen{display:none;flex-direction:column;min-height:100%;}
  .screen.active{display:flex;}

  /* BOTTOM NAV — PROVEEDOR */
  .bottom-nav{height:80px;background:#111;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-around;padding:0 10px 16px;flex-shrink:0;}
  .nav-item{display:flex;flex-direction:column;align-items:center;gap:3px;cursor:pointer;padding:6px 10px;}
  .nav-item svg{width:22px;height:22px;stroke:var(--text-muted);fill:none;stroke-width:1.5;}
  .nav-item span{font-size:9px;color:var(--text-muted);font-weight:500;}
  .nav-item.active svg{stroke:var(--gold);}
  .nav-item.active span{color:var(--gold);}

  /* ATOMS */
  .btn-gold{width:100%;background:var(--gold);color:#0C0C0C;border:none;padding:16px;border-radius:var(--radius);font-size:15px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;}
  .btn-outline{width:100%;background:transparent;color:var(--text-primary);border:1px solid var(--border);padding:15px;border-radius:var(--radius);font-size:14px;font-weight:500;cursor:pointer;font-family:'Inter',sans-serif;}
  .btn-sm{background:var(--gold);color:#0C0C0C;border:none;padding:9px 18px;border-radius:var(--radius-sm);font-size:12px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;}
  .input-field{width:100%;background:var(--bg-input);border:1px solid var(--border);color:var(--text-primary);padding:13px 16px;border-radius:var(--radius-sm);font-size:14px;font-family:'Inter',sans-serif;outline:none;}
  .input-field::placeholder{color:var(--text-muted);}
  .input-label{font-size:11px;font-weight:600;color:var(--text-secondary);letter-spacing:.3px;margin-bottom:5px;display:block;}
  .select-field{width:100%;background:var(--bg-card);border:1px solid var(--border);color:var(--text-primary);padding:13px 16px;border-radius:var(--radius-sm);font-size:14px;font-family:'Inter',sans-serif;outline:none;appearance:none;}
  .divider{height:1px;background:var(--border);}
  .screen-header{display:flex;align-items:center;gap:12px;padding:16px 20px;flex-shrink:0;}
  .back-btn{font-size:20px;cursor:pointer;color:var(--text-primary);}
  .header-title{font-family:'Sora',sans-serif;font-size:18px;font-weight:700;flex:1;}

  /* STATUS BADGES */
  .badge{font-size:10px;font-weight:700;padding:4px 10px;border-radius:20px;white-space:nowrap;}
  .badge-pending{background:rgba(33,150,243,.1);border:1px solid rgba(33,150,243,.3);color:#2196F3;}
  .badge-confirmed{background:rgba(200,168,75,.1);border:1px solid rgba(200,168,75,.3);color:var(--gold);}
  .badge-completed{background:rgba(76,175,80,.1);border:1px solid rgba(76,175,80,.3);color:#4CAF50;}
  .badge-cancelled{background:rgba(229,57,53,.1);border:1px solid rgba(229,57,53,.3);color:#E53935;}
  .badge-active{background:rgba(76,175,80,.1);border:1px solid rgba(76,175,80,.3);color:#4CAF50;}
  .badge-verified{background:rgba(76,175,80,.12);border:1px solid rgba(76,175,80,.3);color:#4CAF50;font-size:10px;font-weight:600;padding:3px 8px;border-radius:20px;display:inline-flex;align-items:center;gap:3px;}

  /* STAT CARD */
  .stat-card{background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;}
  .stat-val{font-family:'Sora',sans-serif;font-size:26px;font-weight:700;}
  .stat-lbl{font-size:11px;color:var(--text-muted);margin-top:2px;}
  .stat-delta{font-size:11px;font-weight:600;margin-top:4px;}
  .delta-up{color:#4CAF50;}
  .delta-dn{color:#E53935;}

  /* MINI CHART */
  .mini-bars{display:flex;align-items:flex-end;gap:4px;height:40px;}
  .mini-bar{flex:1;border-radius:3px 3px 0 0;background:var(--bg-card2);transition:height .3s;}
  .mini-bar.active{background:var(--gold);}

  /* RESERVATION CARD */
  .res-card{background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;}
  .res-card+.res-card{margin-top:10px;}

  /* CALENDAR */
  .cal-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:4px;}
  .cal-day{height:36px;border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:500;cursor:pointer;}
  .cal-day.empty{background:transparent;cursor:default;}
  .cal-day.avail{background:rgba(76,175,80,.12);border:1px solid rgba(76,175,80,.25);color:#4CAF50;}
  .cal-day.booked{background:rgba(200,168,75,.15);border:1px solid rgba(200,168,75,.35);color:var(--gold);}
  .cal-day.blocked{background:rgba(229,57,53,.1);border:1px solid rgba(229,57,53,.2);color:#E53935;}
  .cal-day.today{border:2px solid var(--gold);color:var(--gold);font-weight:700;}
  .cal-day.other{background:var(--bg-card);border:1px solid var(--border);color:var(--text-muted);}
  .cal-label{font-size:10px;color:var(--text-muted);text-align:center;font-weight:600;letter-spacing:.3px;}

  /* INCOME CHART */
  .income-bar-wrap{display:flex;align-items:flex-end;gap:6px;height:90px;padding:0 4px;}
  .income-bar{flex:1;border-radius:4px 4px 0 0;min-width:0;cursor:pointer;transition:opacity .2s;}
  .income-bar:hover{opacity:.8;}
  .income-label{font-size:9px;color:var(--text-muted);text-align:center;margin-top:4px;}

  /* TOGGLE */
  .toggle{width:44px;height:24px;border-radius:12px;position:relative;cursor:pointer;flex-shrink:0;}
  .toggle.on{background:var(--gold);}
  .toggle.off{background:var(--bg-card2);border:1px solid var(--border);}
  .toggle-knob{width:18px;height:18px;border-radius:50%;background:#fff;position:absolute;top:3px;transition:left .2s;}
  .toggle.on .toggle-knob{left:23px;}
  .toggle.off .toggle-knob{left:3px;}

  /* STEP */
  .steps{display:flex;align-items:center;gap:8px;}
  .step{width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;}
  .step.done{background:var(--gold);color:#000;}
  .step.current{background:var(--gold);color:#000;box-shadow:0 0 0 3px rgba(200,168,75,.25);}
  .step.pending{background:var(--bg-card);color:var(--text-muted);border:1px solid var(--border);}
  .step-line{flex:1;height:1px;background:var(--border);}
  .step-line.done{background:var(--gold);}

  /* PROFILE SOCIAL */
  .social-stat{flex:1;text-align:center;padding:10px 0;}
  .social-stat .num{font-size:18px;font-weight:700;}
  .social-stat .lbl{font-size:10px;color:var(--text-muted);}

  /* SERVICE TAG */
  .service-tag{display:inline-flex;align-items:center;gap:4px;font-size:11px;color:var(--text-secondary);padding:5px 10px;background:var(--bg-card2);border-radius:20px;border:1px solid var(--border);}

  /* PAYOUT CARD */
  .payout-item{display:flex;align-items:center;gap:12px;padding:12px 0;border-bottom:1px solid var(--border);}
  .payout-item:last-child{border-bottom:none;}

  /* UPLOAD BOX */
  .upload-box{border:1px dashed var(--text-muted);border-radius:var(--radius-sm);padding:18px;display:flex;flex-direction:column;align-items:center;gap:6px;cursor:pointer;}

  @media(max-width:900px){
    .main-wrap{flex-direction:column;align-items:center;padding:20px;}
    .phone-frame,.info-panel{position:static;}
    .info-panel{max-width:375px;width:100%;}
    .screens-nav{padding:16px 20px 0;}
  }
</style>
</head>
<body>

<div class="site-header">
  <div class="site-logo">Music<span>ast</span></div>
  <div class="phase-badge">Fase 4 — Panel Proveedor</div>
</div>

<div class="screens-nav">
  <button class="nav-btn active"  onclick="goTo(0)">25 Registro Proveedor</button>
  <button class="nav-btn" onclick="goTo(1)">26 Dashboard</button>
  <button class="nav-btn" onclick="goTo(2)">27 Gestión de Reservas</button>
  <button class="nav-btn" onclick="goTo(3)">28 Perfil Público</button>
  <button class="nav-btn" onclick="goTo(4)">29 Disponibilidad</button>
  <button class="nav-btn" onclick="goTo(5)">30 Ingresos y Pagos</button>
</div>

<div class="main-wrap">

  <!-- ═══ PHONE ═══ -->
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

      <!-- ══════════════════════════════
           S0 · REGISTRO PROVEEDOR
      ══════════════════════════════ -->
      <div class="screen active" id="s0">
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:20px 20px 0;">

            <!-- steps -->
            <div class="steps" style="margin-bottom:24px;">
              <div class="step current">1</div>
              <div class="step-line"></div>
              <div class="step pending">2</div>
              <div class="step-line"></div>
              <div class="step pending">3</div>
              <div class="step-line"></div>
              <div class="step pending">4</div>
            </div>
            <div style="font-family:'Sora',sans-serif;font-size:22px;font-weight:700;margin-bottom:4px;">Datos básicos</div>
            <p style="font-size:13px;color:var(--text-secondary);margin-bottom:22px;">Cuéntanos sobre tu agrupación musical</p>

            <!-- selector tipo -->
            <div style="margin-bottom:16px;">
              <span class="input-label">Tipo de proveedor</span>
              <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;">
                <div style="background:rgba(200,168,75,.1);border:1px solid var(--gold);border-radius:var(--radius-sm);padding:12px;text-align:center;cursor:pointer;">
                  <div style="font-size:24px;">🎻</div>
                  <div style="font-size:12px;font-weight:600;margin-top:4px;color:var(--gold);">Músico / Banda</div>
                </div>
                <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:12px;text-align:center;cursor:pointer;">
                  <div style="font-size:24px;">🎧</div>
                  <div style="font-size:12px;font-weight:600;margin-top:4px;color:var(--text-muted);">DJ / Sonido</div>
                </div>
              </div>
            </div>

            <!-- campos -->
            <div style="display:flex;flex-direction:column;gap:14px;margin-bottom:20px;">
              <div>
                <span class="input-label">Nombre artístico / agrupación</span>
                <input class="input-field" placeholder="Ej: Mariachi Los Reyes" value="Mariachi Los Reyes">
              </div>
              <div>
                <span class="input-label">Categoría musical</span>
                <select class="select-field">
                  <option selected>Mariachi</option>
                  <option>Banda</option><option>Norteño</option>
                  <option>Grupo Versátil</option><option>DJ</option><option>Otro</option>
                </select>
              </div>
              <div>
                <span class="input-label">Ciudad / Estado</span>
                <input class="input-field" placeholder="Guadalajara, Jalisco" value="Guadalajara, Jalisco">
              </div>
              <div>
                <span class="input-label">Número de integrantes</span>
                <input class="input-field" placeholder="Ej: 8" value="8">
              </div>
              <div>
                <span class="input-label">Años de experiencia</span>
                <input class="input-field" placeholder="Ej: 10" value="10">
              </div>
              <div>
                <span class="input-label">Precio base (MXN)</span>
                <input class="input-field" placeholder="$5,000" value="5,000">
              </div>
              <div>
                <span class="input-label">Descripción del servicio</span>
                <textarea class="input-field" rows="3" style="resize:none;">Somos un mariachi profesional con más de 10 años de experiencia. Amenizamos todo tipo de eventos.</textarea>
              </div>
            </div>

            <!-- foto de portada -->
            <div style="margin-bottom:20px;">
              <span class="input-label">Foto principal / portada</span>
              <div class="upload-box">
                <div style="font-size:32px;">📸</div>
                <div style="font-size:13px;font-weight:600;color:var(--gold);">Subir foto</div>
                <div style="font-size:11px;color:var(--text-muted);">JPG, PNG · Máx. 5MB</div>
              </div>
            </div>

          </div>
        </div>
        <div style="padding:14px 20px;border-top:1px solid var(--border);flex-shrink:0;">
          <button class="btn-gold" onclick="goTo(1)">Siguiente →</button>
        </div>
      </div>

      <!-- ══════════════════════════════
           S1 · DASHBOARD PROVEEDOR
      ══════════════════════════════ -->
      <div class="screen" id="s1">
        <div style="flex:1;overflow-y:auto;">
          <div style="padding:16px 20px 0;">

            <!-- header -->
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:4px;">
              <div>
                <p style="font-size:11px;color:var(--text-muted);">Panel del proveedor</p>
                <div style="font-family:'Sora',sans-serif;font-size:18px;font-weight:700;">Mariachi Los Reyes</div>
              </div>
              <div style="position:relative;">
                <div style="width:38px;height:38px;border-radius:50%;background:var(--bg-card);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:18px;">🔔</div>
                <div style="position:absolute;top:0;right:0;width:10px;height:10px;background:var(--gold);border-radius:50%;border:2px solid var(--bg-dark);"></div>
              </div>
            </div>
            <div style="margin-bottom:16px;"><span class="badge-verified">✓ Proveedor verificado</span></div>

            <!-- kpi grid -->
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:20px;">
              <div class="stat-card">
                <div class="stat-val" style="color:var(--gold);">$48,200</div>
                <div class="stat-lbl">Ingresos este mes</div>
                <div class="stat-delta delta-up">↑ 18% vs mes anterior</div>
              </div>
              <div class="stat-card">
                <div class="stat-val">12</div>
                <div class="stat-lbl">Reservas activas</div>
                <div class="stat-delta delta-up">↑ 4 nuevas hoy</div>
              </div>
              <div class="stat-card">
                <div class="stat-val" style="color:#4CAF50;">4.8</div>
                <div class="stat-lbl">Calificación media</div>
                <div class="stat-delta" style="color:var(--text-muted);">120 reseñas totales</div>
              </div>
              <div class="stat-card">
                <div class="stat-val">94%</div>
                <div class="stat-lbl">Tasa de respuesta</div>
                <div class="stat-delta delta-up">Muy bueno</div>
              </div>
            </div>

            <!-- mini chart ingresos -->
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;margin-bottom:20px;">
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px;">
                <span style="font-size:14px;font-weight:700;">Ingresos — últimas semanas</span>
                <span style="font-size:11px;color:var(--gold);">Ver detalle →</span>
              </div>
              <div class="mini-bars" style="height:60px;gap:5px;">
                <div class="mini-bar" style="height:45%;background:var(--bg-card2);"></div>
                <div class="mini-bar" style="height:60%;background:var(--bg-card2);"></div>
                <div class="mini-bar" style="height:38%;background:var(--bg-card2);"></div>
                <div class="mini-bar" style="height:72%;background:var(--bg-card2);"></div>
                <div class="mini-bar" style="height:55%;background:var(--bg-card2);"></div>
                <div class="mini-bar" style="height:80%;background:var(--bg-card2);"></div>
                <div class="mini-bar active" style="height:100%;"></div>
              </div>
              <div style="display:flex;justify-content:space-between;margin-top:6px;">
                <span style="font-size:9px;color:var(--text-muted);">Sem 1</span>
                <span style="font-size:9px;color:var(--text-muted);">Sem 2</span>
                <span style="font-size:9px;color:var(--text-muted);">Sem 3</span>
                <span style="font-size:9px;color:var(--text-muted);">Sem 4</span>
                <span style="font-size:9px;color:var(--text-muted);">Sem 5</span>
                <span style="font-size:9px;color:var(--text-muted);">Sem 6</span>
                <span style="font-size:9px;color:var(--gold);">Esta</span>
              </div>
            </div>

            <!-- próximas reservas -->
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;">
              <span style="font-size:14px;font-weight:700;">Próximos eventos</span>
              <span style="font-size:12px;color:var(--gold);cursor:pointer;" onclick="goTo(2)">Ver todos →</span>
            </div>
            <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:20px;">
              <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;display:flex;gap:12px;align-items:center;">
                <div style="background:linear-gradient(135deg,#1E1200,#2A1A00);border-radius:var(--radius-sm);padding:8px 10px;text-align:center;flex-shrink:0;">
                  <div style="font-size:16px;font-weight:800;color:var(--gold);">24</div>
                  <div style="font-size:9px;color:var(--text-muted);text-transform:uppercase;">May</div>
                </div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Boda — Carlos Mendoza</div>
                  <div style="font-size:11px;color:var(--text-muted);">7:00 PM · Guadalajara</div>
                </div>
                <span class="badge badge-confirmed">Confirmada</span>
              </div>
              <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;display:flex;gap:12px;align-items:center;">
                <div style="background:linear-gradient(135deg,#1E1200,#2A1A00);border-radius:var(--radius-sm);padding:8px 10px;text-align:center;flex-shrink:0;">
                  <div style="font-size:16px;font-weight:800;color:var(--gold);">28</div>
                  <div style="font-size:9px;color:var(--text-muted);text-transform:uppercase;">May</div>
                </div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">XV Años — Sofía Ramírez</div>
                  <div style="font-size:11px;color:var(--text-muted);">6:30 PM · Zapopan</div>
                </div>
                <span class="badge badge-pending">Pendiente</span>
              </div>
            </div>

            <!-- acciones rápidas -->
            <div style="font-size:14px;font-weight:700;margin-bottom:12px;">Acciones rápidas</div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:20px;">
              <div onclick="goTo(4)" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;text-align:center;cursor:pointer;">
                <div style="font-size:26px;margin-bottom:6px;">📅</div>
                <div style="font-size:12px;font-weight:600;">Disponibilidad</div>
              </div>
              <div onclick="goTo(5)" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;text-align:center;cursor:pointer;">
                <div style="font-size:26px;margin-bottom:6px;">💰</div>
                <div style="font-size:12px;font-weight:600;">Ingresos</div>
              </div>
              <div onclick="goTo(3)" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;text-align:center;cursor:pointer;">
                <div style="font-size:26px;margin-bottom:6px;">👤</div>
                <div style="font-size:12px;font-weight:600;">Mi perfil</div>
              </div>
              <div onclick="goTo(2)" style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;text-align:center;cursor:pointer;">
                <div style="font-size:26px;margin-bottom:6px;">📋</div>
                <div style="font-size:12px;font-weight:600;">Reservas</div>
              </div>
            </div>

          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item active"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><span>Dashboard</span></div>
          <div class="nav-item" onclick="goTo(2)"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item" onclick="goTo(4)"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><span>Agenda</span></div>
          <div class="nav-item" onclick="goTo(5)"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg><span>Ingresos</span></div>
          <div class="nav-item" onclick="goTo(3)"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- ══════════════════════════════
           S2 · GESTIÓN DE RESERVAS
      ══════════════════════════════ -->
      <div class="screen" id="s2">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="header-title">Mis Reservas</div>
            <div style="font-size:18px;">⚙️</div>
          </div>
          <div style="padding:0 20px 8px;">

            <!-- tabs -->
            <div style="display:flex;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:3px;margin-bottom:16px;">
              <div style="flex:1;text-align:center;padding:8px;border-radius:6px;background:var(--gold);color:#000;font-size:12px;font-weight:700;cursor:pointer;">Pendientes <span style="background:#000;color:var(--gold);border-radius:10px;padding:1px 5px;font-size:10px;">2</span></div>
              <div style="flex:1;text-align:center;padding:8px;font-size:12px;color:var(--text-muted);cursor:pointer;">Confirmadas</div>
              <div style="flex:1;text-align:center;padding:8px;font-size:12px;color:var(--text-muted);cursor:pointer;">Historial</div>
            </div>

            <!-- aviso acción -->
            <div style="background:rgba(33,150,243,.07);border:1px solid rgba(33,150,243,.2);border-radius:var(--radius-sm);padding:10px 14px;display:flex;gap:8px;align-items:center;margin-bottom:14px;">
              <span style="font-size:14px;">⏳</span>
              <p style="font-size:11px;color:#64B5F6;">Tienes 2 solicitudes esperando respuesta. Acepta o rechaza dentro de 24h.</p>
            </div>

            <!-- reserva pendiente 1 (con aceptar/rechazar) -->
            <div class="res-card" style="margin-bottom:10px;">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;">
                <div style="display:flex;gap:10px;align-items:center;">
                  <div style="width:40px;height:40px;border-radius:50%;background:var(--bg-card2);display:flex;align-items:center;justify-content:center;font-size:20px;">👤</div>
                  <div>
                    <div style="font-size:13px;font-weight:700;">Carlos Mendoza</div>
                    <div style="font-size:11px;color:var(--text-muted);">Cliente verificado · 3 reservas prev.</div>
                  </div>
                </div>
                <span class="badge badge-pending">Nueva</span>
              </div>
              <div class="divider" style="margin-bottom:10px;"></div>
              <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:12px;">
                <div><div style="font-size:10px;color:var(--text-muted);">Evento</div><div style="font-size:12px;font-weight:600;">Boda</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Fecha</div><div style="font-size:12px;font-weight:600;">24 mayo · 7 PM</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Lugar</div><div style="font-size:12px;font-weight:600;">Guadalajara</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Duración</div><div style="font-size:12px;font-weight:600;">2 horas</div></div>
              </div>
              <div style="background:rgba(200,168,75,.06);border:1px solid rgba(200,168,75,.2);border-radius:var(--radius-sm);padding:10px 12px;margin-bottom:12px;">
                <div style="font-size:10px;color:var(--text-muted);margin-bottom:2px;">Nota del cliente</div>
                <div style="font-size:12px;color:var(--text-secondary);">"Por favor incluir 'Cielito Lindo' como primera canción"</div>
              </div>
              <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                <span style="font-size:11px;color:var(--text-muted);">Pago al completar:</span>
                <span style="font-size:16px;font-weight:700;color:var(--gold);">$4,200</span>
              </div>
              <div style="display:flex;gap:8px;">
                <button style="flex:1;padding:11px;border-radius:var(--radius-sm);background:transparent;border:1px solid rgba(229,57,53,.4);color:#E53935;font-size:13px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;">Rechazar</button>
                <button style="flex:2;padding:11px;border-radius:var(--radius-sm);background:var(--gold);border:none;color:#000;font-size:13px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;">✓ Aceptar reserva</button>
              </div>
            </div>

            <!-- reserva pendiente 2 -->
            <div class="res-card" style="margin-bottom:10px;">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;">
                <div style="display:flex;gap:10px;align-items:center;">
                  <div style="width:40px;height:40px;border-radius:50%;background:var(--bg-card2);display:flex;align-items:center;justify-content:center;font-size:20px;">👩</div>
                  <div>
                    <div style="font-size:13px;font-weight:700;">Sofía Ramírez</div>
                    <div style="font-size:11px;color:var(--text-muted);">Primera reserva</div>
                  </div>
                </div>
                <span class="badge badge-pending">Nueva</span>
              </div>
              <div class="divider" style="margin-bottom:10px;"></div>
              <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:12px;">
                <div><div style="font-size:10px;color:var(--text-muted);">Evento</div><div style="font-size:12px;font-weight:600;">XV Años</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Fecha</div><div style="font-size:12px;font-weight:600;">28 mayo · 6:30 PM</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Lugar</div><div style="font-size:12px;font-weight:600;">Zapopan</div></div>
                <div><div style="font-size:10px;color:var(--text-muted);">Duración</div><div style="font-size:12px;font-weight:600;">3 horas</div></div>
              </div>
              <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                <span style="font-size:11px;color:var(--text-muted);">Pago al completar:</span>
                <span style="font-size:16px;font-weight:700;color:var(--gold);">$6,300</span>
              </div>
              <div style="display:flex;gap:8px;">
                <button style="flex:1;padding:11px;border-radius:var(--radius-sm);background:transparent;border:1px solid rgba(229,57,53,.4);color:#E53935;font-size:13px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;">Rechazar</button>
                <button style="flex:2;padding:11px;border-radius:var(--radius-sm);background:var(--gold);border:none;color:#000;font-size:13px;font-weight:700;cursor:pointer;font-family:'Inter',sans-serif;">✓ Aceptar reserva</button>
              </div>
            </div>

          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item" onclick="goTo(1)"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><span>Dashboard</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item" onclick="goTo(4)"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><span>Agenda</span></div>
          <div class="nav-item" onclick="goTo(5)"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg><span>Ingresos</span></div>
          <div class="nav-item" onclick="goTo(3)"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- ══════════════════════════════
           S3 · PERFIL PÚBLICO PROVEEDOR
      ══════════════════════════════ -->
      <div class="screen" id="s3">
        <div style="flex:1;overflow-y:auto;">

          <!-- hero -->
          <div style="height:200px;background:linear-gradient(160deg,#2A1500,#0C0C0C);position:relative;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <div style="font-size:80px;opacity:.3;">🎻</div>
            <div style="position:absolute;top:12px;right:12px;display:flex;gap:8px;">
              <div style="background:rgba(0,0,0,.5);border-radius:var(--radius-sm);padding:6px 12px;font-size:12px;font-weight:600;cursor:pointer;border:1px solid rgba(255,255,255,.1);">Vista previa</div>
              <div style="background:var(--gold);border-radius:var(--radius-sm);padding:6px 12px;font-size:12px;font-weight:700;color:#000;cursor:pointer;">Editar</div>
            </div>
          </div>

          <!-- avatar sobre hero -->
          <div style="padding:0 20px;">
            <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-top:-28px;margin-bottom:12px;">
              <div style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#2A1500,#1A0800);border:3px solid var(--bg-dark);display:flex;align-items:center;justify-content:center;font-size:26px;">🎻</div>
              <div style="display:flex;gap:8px;">
                <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius-sm);padding:8px 12px;font-size:12px;cursor:pointer;">📤 Compartir</div>
              </div>
            </div>

            <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;flex-wrap:wrap;">
              <div style="font-family:'Sora',sans-serif;font-size:20px;font-weight:700;">Mariachi Los Reyes</div>
              <span class="badge-verified">✓ Verificado</span>
            </div>
            <div style="font-size:13px;color:var(--text-muted);margin-bottom:12px;">📍 Guadalajara, Jalisco · 🎻 Mariachi</div>

            <!-- social stats -->
            <div style="display:flex;background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);margin-bottom:16px;">
              <div class="social-stat" style="border-right:1px solid var(--border);">
                <div class="num">4.8 ★</div><div class="lbl">Rating</div>
              </div>
              <div class="social-stat" style="border-right:1px solid var(--border);">
                <div class="num">120</div><div class="lbl">Reseñas</div>
              </div>
              <div class="social-stat" style="border-right:1px solid var(--border);">
                <div class="num">500+</div><div class="lbl">Eventos</div>
              </div>
              <div class="social-stat">
                <div class="num" style="color:var(--gold);">$5K</div><div class="lbl">Desde</div>
              </div>
            </div>

            <!-- bio -->
            <div style="margin-bottom:16px;">
              <div style="font-size:14px;font-weight:700;margin-bottom:8px;">Descripción</div>
              <textarea class="input-field" rows="3" style="resize:none;font-size:13px;">Somos un mariachi profesional con más de 10 años de experiencia. Amenizamos todo tipo de eventos con la mejor calidad y presentación.</textarea>
            </div>

            <!-- servicios -->
            <div style="margin-bottom:16px;">
              <div style="display:flex;justify-content:space-between;margin-bottom:8px;">
                <span style="font-size:14px;font-weight:700;">Servicios</span>
                <span style="font-size:12px;color:var(--gold);cursor:pointer;">+ Agregar</span>
              </div>
              <div style="display:flex;flex-wrap:wrap;gap:7px;">
                <div class="service-tag">✓ Bodas</div>
                <div class="service-tag">✓ Serenatas</div>
                <div class="service-tag">✓ XV Años</div>
                <div class="service-tag">✓ Misas</div>
                <div class="service-tag">✓ Corporativos</div>
                <div class="service-tag" style="border-style:dashed;color:var(--gold);cursor:pointer;">+ Añadir</div>
              </div>
            </div>

            <!-- galería -->
            <div style="margin-bottom:16px;">
              <div style="display:flex;justify-content:space-between;margin-bottom:8px;">
                <span style="font-size:14px;font-weight:700;">Galería</span>
                <span style="font-size:12px;color:var(--gold);cursor:pointer;">📸 Subir</span>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:4px;">
                <div style="height:80px;border-radius:6px;background:linear-gradient(135deg,#2A1500,#1A0800);display:flex;align-items:center;justify-content:center;font-size:28px;">🎻</div>
                <div style="height:80px;border-radius:6px;background:linear-gradient(135deg,#1A1000,#0E0800);display:flex;align-items:center;justify-content:center;font-size:28px;">🎤</div>
                <div style="height:80px;border-radius:6px;border:1px dashed var(--border);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:3px;cursor:pointer;">
                  <span style="font-size:22px;color:var(--gold);">+</span>
                  <span style="font-size:9px;color:var(--text-muted);">Agregar</span>
                </div>
              </div>
            </div>

            <!-- precio -->
            <div style="margin-bottom:20px;">
              <span style="font-size:14px;font-weight:700;display:block;margin-bottom:8px;">Precio base</span>
              <div style="display:flex;gap:8px;align-items:center;">
                <input class="input-field" value="5,000" style="flex:1;">
                <span style="font-size:13px;color:var(--text-muted);white-space:nowrap;">MXN / evento</span>
              </div>
            </div>

            <button class="btn-gold" style="margin-bottom:16px;">Guardar cambios</button>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item" onclick="goTo(1)"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><span>Dashboard</span></div>
          <div class="nav-item" onclick="goTo(2)"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item" onclick="goTo(4)"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><span>Agenda</span></div>
          <div class="nav-item" onclick="goTo(5)"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg><span>Ingresos</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- ══════════════════════════════
           S4 · DISPONIBILIDAD Y CALENDARIO
      ══════════════════════════════ -->
      <div class="screen" id="s4">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="header-title">Disponibilidad</div>
            <div style="font-size:12px;color:var(--gold);font-weight:600;cursor:pointer;">Sincronizar</div>
          </div>
          <div style="padding:0 20px 24px;">

            <!-- mes nav -->
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;">
              <div style="width:36px;height:36px;border-radius:50%;background:var(--bg-card);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:16px;cursor:pointer;">‹</div>
              <div style="font-family:'Sora',sans-serif;font-size:16px;font-weight:700;">Mayo 2025</div>
              <div style="width:36px;height:36px;border-radius:50%;background:var(--bg-card);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:16px;cursor:pointer;">›</div>
            </div>

            <!-- día headers -->
            <div class="cal-grid" style="margin-bottom:6px;">
              <div class="cal-label">L</div><div class="cal-label">M</div><div class="cal-label">X</div>
              <div class="cal-label">J</div><div class="cal-label">V</div><div class="cal-label">S</div><div class="cal-label">D</div>
            </div>

            <!-- calendario mayo 2025 (1 mayo = jueves) -->
            <div class="cal-grid" style="margin-bottom:16px;">
              <!-- semana 1 -->
              <div class="cal-day empty"></div><div class="cal-day empty"></div><div class="cal-day empty"></div>
              <div class="cal-day avail">1</div><div class="cal-day avail">2</div><div class="cal-day avail">3</div><div class="cal-day avail">4</div>
              <!-- semana 2 -->
              <div class="cal-day avail">5</div><div class="cal-day avail">6</div><div class="cal-day avail">7</div>
              <div class="cal-day avail">8</div><div class="cal-day avail">9</div><div class="cal-day booked">10</div><div class="cal-day other">11</div>
              <!-- semana 3 -->
              <div class="cal-day avail">12</div><div class="cal-day avail">13</div><div class="cal-day today">14</div>
              <div class="cal-day avail">15</div><div class="cal-day avail">16</div><div class="cal-day avail">17</div><div class="cal-day other">18</div>
              <!-- semana 4 -->
              <div class="cal-day avail">19</div><div class="cal-day avail">20</div><div class="cal-day avail">21</div>
              <div class="cal-day avail">22</div><div class="cal-day avail">23</div><div class="cal-day booked">24</div><div class="cal-day other">25</div>
              <!-- semana 5 -->
              <div class="cal-day avail">26</div><div class="cal-day avail">27</div><div class="cal-day booked">28</div>
              <div class="cal-day avail">29</div><div class="cal-day blocked">30</div><div class="cal-day blocked">31</div><div class="cal-day empty"></div>
            </div>

            <!-- leyenda -->
            <div style="display:flex;gap:12px;flex-wrap:wrap;margin-bottom:20px;">
              <div style="display:flex;align-items:center;gap:5px;"><div style="width:12px;height:12px;border-radius:3px;background:rgba(76,175,80,.2);border:1px solid rgba(76,175,80,.4);"></div><span style="font-size:11px;color:var(--text-secondary);">Disponible</span></div>
              <div style="display:flex;align-items:center;gap:5px;"><div style="width:12px;height:12px;border-radius:3px;background:rgba(200,168,75,.2);border:1px solid rgba(200,168,75,.4);"></div><span style="font-size:11px;color:var(--text-secondary);">Reservado</span></div>
              <div style="display:flex;align-items:center;gap:5px;"><div style="width:12px;height:12px;border-radius:3px;background:rgba(229,57,53,.12);border:1px solid rgba(229,57,53,.3);"></div><span style="font-size:11px;color:var(--text-secondary);">Bloqueado</span></div>
              <div style="display:flex;align-items:center;gap:5px;"><div style="width:12px;height:12px;border-radius:3px;background:var(--bg-card);border:1px solid var(--border);"></div><span style="font-size:11px;color:var(--text-secondary);">Descanso</span></div>
            </div>

            <!-- acción rápida bloquear -->
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;margin-bottom:16px;">
              <div style="font-size:13px;font-weight:700;margin-bottom:12px;">Bloquear días</div>
              <div style="display:flex;gap:8px;margin-bottom:12px;">
                <div style="flex:1;">
                  <span class="input-label">Desde</span>
                  <input class="input-field" type="text" value="30 mayo" style="font-size:13px;">
                </div>
                <div style="flex:1;">
                  <span class="input-label">Hasta</span>
                  <input class="input-field" type="text" value="31 mayo" style="font-size:13px;">
                </div>
              </div>
              <div style="margin-bottom:12px;">
                <span class="input-label">Motivo</span>
                <select class="select-field" style="font-size:13px;">
                  <option>Descanso personal</option>
                  <option>Vacaciones</option>
                  <option>Compromiso previo</option>
                </select>
              </div>
              <button class="btn-sm" style="width:100%;">Bloquear días seleccionados</button>
            </div>

            <!-- eventos del día seleccionado -->
            <div style="font-size:13px;font-weight:700;margin-bottom:10px;">Eventos del 24 de mayo</div>
            <div style="background:var(--bg-card);border:1px solid rgba(200,168,75,.3);border-radius:var(--radius);padding:14px;">
              <div style="display:flex;align-items:center;gap:10px;">
                <div style="background:linear-gradient(135deg,#2A1500,#1A0800);border-radius:var(--radius-sm);padding:8px 10px;text-align:center;flex-shrink:0;">
                  <div style="font-size:16px;font-weight:800;color:var(--gold);">24</div>
                  <div style="font-size:9px;color:var(--text-muted);">MAY</div>
                </div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Boda — Carlos Mendoza</div>
                  <div style="font-size:11px;color:var(--text-muted);">7:00 PM · 2 horas · Guadalajara</div>
                </div>
                <span class="badge badge-confirmed">Confirmada</span>
              </div>
            </div>

          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item" onclick="goTo(1)"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><span>Dashboard</span></div>
          <div class="nav-item" onclick="goTo(2)"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><span>Agenda</span></div>
          <div class="nav-item" onclick="goTo(5)"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg><span>Ingresos</span></div>
          <div class="nav-item" onclick="goTo(3)"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

      <!-- ══════════════════════════════
           S5 · INGRESOS Y PAGOS
      ══════════════════════════════ -->
      <div class="screen" id="s5">
        <div style="flex:1;overflow-y:auto;">
          <div class="screen-header">
            <div class="header-title">Ingresos</div>
            <div style="font-size:12px;color:var(--gold);font-weight:600;cursor:pointer;">📥 Retirar</div>
          </div>
          <div style="padding:0 20px 24px;">

            <!-- saldo disponible -->
            <div style="background:linear-gradient(135deg,#1E1200,#2A1A00);border:1px solid #3A2800;border-radius:var(--radius);padding:22px;margin-bottom:20px;text-align:center;">
              <div style="font-size:12px;color:var(--gold);font-weight:600;margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px;">Saldo disponible</div>
              <div style="font-family:'Sora',sans-serif;font-size:42px;font-weight:800;color:var(--text-primary);">$<span style="color:var(--gold);">18,400</span></div>
              <div style="font-size:12px;color:var(--text-muted);margin-bottom:16px;">MXN · Actualizado hace 2 min</div>
              <button class="btn-gold" style="padding:13px;font-size:14px;">Retirar a mi cuenta</button>
            </div>

            <!-- resumen periodo -->
            <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:8px;margin-bottom:20px;">
              <div class="stat-card" style="text-align:center;">
                <div class="stat-val" style="font-size:18px;">$48,200</div>
                <div class="stat-lbl">Este mes</div>
              </div>
              <div class="stat-card" style="text-align:center;">
                <div class="stat-val" style="font-size:18px;">$312K</div>
                <div class="stat-lbl">Este año</div>
              </div>
              <div class="stat-card" style="text-align:center;">
                <div class="stat-val" style="font-size:18px;color:#4CAF50;">12</div>
                <div class="stat-lbl">Pagados</div>
              </div>
            </div>

            <!-- gráfica mensual -->
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:16px;margin-bottom:20px;">
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
                <span style="font-size:14px;font-weight:700;">Ingresos por mes</span>
                <span style="font-size:11px;color:var(--gold);">2025</span>
              </div>
              <div class="income-bar-wrap">
                <div style="display:flex;flex-direction:column;align-items:center;flex:1;">
                  <div class="income-bar" style="height:40%;background:var(--bg-card2);width:100%;"></div>
                  <div class="income-label">Ene</div>
                </div>
                <div style="display:flex;flex-direction:column;align-items:center;flex:1;">
                  <div class="income-bar" style="height:55%;background:var(--bg-card2);width:100%;"></div>
                  <div class="income-label">Feb</div>
                </div>
                <div style="display:flex;flex-direction:column;align-items:center;flex:1;">
                  <div class="income-bar" style="height:45%;background:var(--bg-card2);width:100%;"></div>
                  <div class="income-label">Mar</div>
                </div>
                <div style="display:flex;flex-direction:column;align-items:center;flex:1;">
                  <div class="income-bar" style="height:70%;background:var(--bg-card2);width:100%;"></div>
                  <div class="income-label">Abr</div>
                </div>
                <div style="display:flex;flex-direction:column;align-items:center;flex:1;">
                  <div class="income-bar" style="height:100%;background:var(--gold);width:100%;"></div>
                  <div class="income-label" style="color:var(--gold);font-weight:700;">May</div>
                </div>
                <div style="display:flex;flex-direction:column;align-items:center;flex:1;">
                  <div class="income-bar" style="height:10%;background:var(--bg-card2);border:1px dashed var(--border);width:100%;opacity:.4;"></div>
                  <div class="income-label">Jun</div>
                </div>
              </div>
            </div>

            <!-- historial de pagos -->
            <div style="font-size:14px;font-weight:700;margin-bottom:12px;">Historial de cobros</div>
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;margin-bottom:16px;">
              <div class="payout-item">
                <div style="width:36px;height:36px;border-radius:50%;background:rgba(76,175,80,.1);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;">✓</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Boda — Carlos Mendoza</div>
                  <div style="font-size:11px;color:var(--text-muted);">24 mayo · Completado</div>
                </div>
                <div style="text-align:right;">
                  <div style="font-size:14px;font-weight:700;color:#4CAF50;">+$4,200</div>
                  <div style="font-size:10px;color:var(--text-muted);">Neto (less 16%)</div>
                </div>
              </div>
              <div class="payout-item">
                <div style="width:36px;height:36px;border-radius:50%;background:rgba(76,175,80,.1);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;">✓</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Graduación — ITESO</div>
                  <div style="font-size:11px;color:var(--text-muted);">18 mayo · Completado</div>
                </div>
                <div style="text-align:right;">
                  <div style="font-size:14px;font-weight:700;color:#4CAF50;">+$7,560</div>
                  <div style="font-size:10px;color:var(--text-muted);">Neto (less 16%)</div>
                </div>
              </div>
              <div class="payout-item">
                <div style="width:36px;height:36px;border-radius:50%;background:rgba(200,168,75,.1);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;">⏳</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">XV Años — Sofía R.</div>
                  <div style="font-size:11px;color:var(--text-muted);">28 mayo · Pendiente</div>
                </div>
                <div style="text-align:right;">
                  <div style="font-size:14px;font-weight:700;color:var(--gold);">+$6,300</div>
                  <div style="font-size:10px;color:var(--text-muted);">Por cobrar</div>
                </div>
              </div>
              <div class="payout-item" style="border-bottom:none;">
                <div style="width:36px;height:36px;border-radius:50%;background:rgba(229,57,53,.1);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;">↩</div>
                <div style="flex:1;">
                  <div style="font-size:13px;font-weight:600;">Cancelación — DJ Alex</div>
                  <div style="font-size:11px;color:var(--text-muted);">10 mayo · Reembolsado</div>
                </div>
                <div style="text-align:right;">
                  <div style="font-size:14px;font-weight:700;color:#E53935;">-$1,750</div>
                  <div style="font-size:10px;color:var(--text-muted);">Reembolso</div>
                </div>
              </div>
            </div>

            <!-- cuenta bancaria -->
            <div style="font-size:14px;font-weight:700;margin-bottom:10px;">Cuenta de retiro</div>
            <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--radius);padding:14px;display:flex;align-items:center;gap:12px;margin-bottom:8px;">
              <div style="font-size:22px;">🏦</div>
              <div style="flex:1;">
                <div style="font-size:13px;font-weight:600;">BBVA · Cuenta •••• 4820</div>
                <div style="font-size:11px;color:var(--text-muted);">CLABE: •••••••••••• 3421</div>
              </div>
              <span style="font-size:12px;color:var(--gold);cursor:pointer;">Editar</span>
            </div>
            <button style="width:100%;background:transparent;border:1px dashed var(--border);border-radius:var(--radius-sm);padding:12px;color:var(--gold);font-size:13px;font-weight:600;cursor:pointer;font-family:'Inter',sans-serif;margin-bottom:16px;">+ Agregar cuenta bancaria</button>

          </div>
        </div>
        <div class="bottom-nav">
          <div class="nav-item" onclick="goTo(1)"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><span>Dashboard</span></div>
          <div class="nav-item" onclick="goTo(2)"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg><span>Reservas</span></div>
          <div class="nav-item" onclick="goTo(4)"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><span>Agenda</span></div>
          <div class="nav-item active"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg><span>Ingresos</span></div>
          <div class="nav-item" onclick="goTo(3)"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><span>Perfil</span></div>
        </div>
      </div>

    </div><!-- /phone-screen -->
  </div><!-- /phone-frame -->

  <!-- ═══ INFO PANEL ═══ -->
  <div class="info-panel">
    <div class="screen-label"  id="infoLabel">Pantalla 25 de 30</div>
    <div class="screen-title"  id="infoTitle">Registro Proveedor</div>
    <div class="screen-desc"   id="infoDesc">Flujo de alta para músicos y proveedores. Incluye selector de tipo, campos del negocio, precio base y subida de foto de portada con indicador de pasos.</div>
    <ul class="features-list"  id="infoFeatures">
      <li>Selector de tipo: Músico / DJ</li>
      <li>Categoría musical (dropdown)</li>
      <li>Número de integrantes y años de exp.</li>
      <li>Precio base configurable</li>
      <li>Descripción del servicio</li>
      <li>Subida de foto de portada</li>
      <li>Indicador de progreso 4 pasos</li>
    </ul>
    <div class="nav-arrows">
      <button class="arrow-btn" id="prevBtn" onclick="navigate(-1)" disabled>←</button>
      <button class="arrow-btn" id="nextBtn" onclick="navigate(1)">→</button>
    </div>
    <div class="screen-counter"><strong id="counterCurrent">25</strong> / <strong>30</strong> pantallas totales</div>
  </div>

</div>

<script>
const screens=[
  {label:'Pantalla 25 de 30',title:'Registro Proveedor',desc:'Flujo de alta para músicos y proveedores. Incluye selector de tipo, campos del negocio, precio base y subida de foto con indicador de pasos.',features:['Selector de tipo: Músico / DJ','Categoría musical (dropdown)','Número de integrantes y años de exp.','Precio base configurable','Descripción del servicio','Subida de foto de portada','Indicador de progreso en 4 pasos']},
  {label:'Pantalla 26 de 30',title:'Dashboard Proveedor',desc:'Panel de control central del músico con KPIs, gráfica de ingresos semanales, próximos eventos y accesos directos a todas las secciones.',features:['KPIs: ingresos, reservas, rating, respuesta','Gráfica de barras semanal','Lista de próximos 2 eventos','4 accesos rápidos (disponibilidad, ingresos, perfil, reservas)','Badge de proveedor verificado','Notificaciones pendientes']},
  {label:'Pantalla 27 de 30',title:'Gestión de Reservas',desc:'Sección exclusiva para el proveedor donde puede revisar solicitudes nuevas, aceptarlas o rechazarlas y ver el historial completo.',features:['Tabs: Pendientes / Confirmadas / Historial','Badge de contador de nuevas solicitudes','Info completa del cliente','Nota del cliente visible','Monto neto a cobrar','Botones Aceptar / Rechazar por reserva']},
  {label:'Pantalla 28 de 30',title:'Perfil Público',desc:'Editor del perfil que los clientes ven al buscar proveedores. Permite editar descripción, servicios, galería, precio y ver cómo queda la vista pública.',features:['Hero con foto de portada editable','Avatar con botón de edición','Estadísticas sociales (rating, reseñas, eventos)','Editor de descripción inline','Gestión de servicios ofrecidos','Galería de fotos con subida','Precio base editable']},
  {label:'Pantalla 29 de 30',title:'Disponibilidad y Calendario',desc:'Calendario mensual interactivo para gestionar disponibilidad, ver eventos reservados y bloquear días no disponibles.',features:['Navegación mes anterior / siguiente','4 estados: disponible, reservado, bloqueado, descanso','Leyenda visual de colores','Formulario de bloqueo por rango de fechas','Motivo de bloqueo configurable','Detalle del evento al tocar un día reservado']},
  {label:'Pantalla 30 de 30',title:'Ingresos y Pagos',desc:'Centro financiero del proveedor con saldo disponible, gráfica mensual, historial de cobros y gestión de cuenta bancaria para retiros.',features:['Saldo disponible prominente con CTA de retiro','KPIs: mes actual, año, eventos pagados','Gráfica de barras mensual (6 meses)','Historial: completado, pendiente, reembolso','Comisión de plataforma (16%) desglosada','Gestión de cuenta bancaria CLABE']}
];

let current=0;
function goTo(i){
  document.querySelectorAll('.screen').forEach(s=>s.classList.remove('active'));
  document.getElementById('s'+i).classList.add('active');
  document.querySelectorAll('.nav-btn').forEach((b,j)=>b.classList.toggle('active',j===i));
  document.getElementById('phoneScreen').scrollTop=0;
  current=i; updatePanel();
}
function navigate(d){const n=current+d;if(n>=0&&n<6)goTo(n);}
function updatePanel(){
  const s=screens[current];
  document.getElementById('infoLabel').textContent=s.label;
  document.getElementById('infoTitle').textContent=s.title;
  document.getElementById('infoDesc').textContent=s.desc;
  document.getElementById('infoFeatures').innerHTML=s.features.map(f=>`<li>${f}</li>`).join('');
  document.getElementById('counterCurrent').textContent=25+current;
  document.getElementById('prevBtn').disabled=current===0;
  document.getElementById('nextBtn').disabled=current===5;
}
</script>

<!-- Floating back button - bottom-left -->
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
