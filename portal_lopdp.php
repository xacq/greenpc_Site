<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Privacidad y Protección de Datos — EMPRESA</title>
<meta name="description" content="Portal de privacidad y protección de datos personales de EMPRESA conforme a la LOPDP del Ecuador.">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root {
    --navy: #0D1F3C;
    --navy-light: #162B50;
    --gold: #B8912A;
    --gold-light: #D4A942;
    --cream: #F7F4EE;
    --white: #FFFFFF;
    --gray-100: #F2EFE9;
    --gray-200: #E0DDD6;
    --gray-400: #9E9B94;
    --gray-600: #5C5A54;
    --gray-800: #2E2D2A;
    --text: #1A1917;
    --alert-bg: #FEF3CD;
    --alert-border: #B8912A;
    --alert-text: #7A5C10;
    --font-serif: 'Libre Baskerville', Georgia, serif;
    --font-sans: 'DM Sans', system-ui, sans-serif;
    --radius: 4px;
    --radius-lg: 8px;
    --shadow: 0 2px 16px rgba(13,31,60,0.10);
    --shadow-lg: 0 8px 40px rgba(13,31,60,0.16);
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  .skip-link {
    position: absolute;
    left: 16px;
    top: -48px;
    background: var(--gold);
    color: var(--navy);
    padding: 10px 14px;
    border-radius: 0 0 var(--radius) var(--radius);
    font-weight: 700;
    text-decoration: none;
    z-index: 999;
    transition: top 0.2s ease;
  }
  .skip-link:focus {
    top: 0;
  }

  body {
    font-family: var(--font-sans);
    background: var(--cream);
    color: var(--text);
    font-size: 16px;
    line-height: 1.7;
    min-height: 100vh;
  }

  /* NAV */
  nav {
    background: var(--navy);
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 2px 12px rgba(0,0,0,0.18);
  }
  .nav-inner {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 62px;
  }
  .nav-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    text-decoration: none;
  }
  .nav-brand:focus-visible {
    outline: 2px solid var(--gold-light);
    outline-offset: 5px;
    border-radius: var(--radius);
  }
  .nav-brand-icon {
    width: 34px;
    height: 34px;
    background: var(--gold);
    border-radius: 2px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-serif);
    font-size: 15px;
    font-weight: 700;
    color: var(--white);
    letter-spacing: -0.5px;
  }
  .nav-brand-text {
    font-family: var(--font-serif);
    font-size: 15px;
    color: var(--white);
    letter-spacing: 0.5px;
  }
  .nav-brand-sub {
    font-family: var(--font-sans);
    font-size: 10px;
    color: var(--gold-light);
    font-weight: 500;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    display: block;
    line-height: 1;
    margin-top: 1px;
  }
  .nav-links {
    display: flex;
    list-style: none;
    gap: 4px;
  }
  .nav-links li a {
    display: block;
    padding: 6px 12px;
    color: rgba(255,255,255,0.72);
    font-size: 13px;
    font-weight: 400;
    text-decoration: none;
    border-radius: 3px;
    transition: all 0.18s;
    cursor: pointer;
    white-space: nowrap;
  }
  .nav-links li a:hover,
  .nav-links li a.active {
    color: var(--white);
    background: rgba(184,145,42,0.22);
  }
  .nav-links li a.active {
    color: var(--gold-light);
  }
  .nav-toggle {
    display: none;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    border: 1px solid rgba(255,255,255,0.18);
    background: rgba(255,255,255,0.05);
    color: var(--white);
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
  }
  .nav-toggle:focus-visible {
    outline: 2px solid var(--gold-light);
    outline-offset: 2px;
  }

  /* PAGES */
  .page { display: none; animation: fadeIn 0.3s ease; }
  .page.active { display: block; }
  @keyframes fadeIn { from { opacity: 0; transform: translateY(6px); } to { opacity: 1; transform: translateY(0); } }

  /* HERO */
  .hero {
    background: var(--navy);
    padding: 72px 24px 60px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: repeating-linear-gradient(
      -45deg,
      transparent,
      transparent 40px,
      rgba(184,145,42,0.03) 40px,
      rgba(184,145,42,0.03) 41px
    );
  }
  .hero-badge {
    display: inline-block;
    background: rgba(184,145,42,0.18);
    border: 1px solid rgba(184,145,42,0.35);
    color: var(--gold-light);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 2px;
    margin-bottom: 22px;
  }
  .hero h1 {
    font-family: var(--font-serif);
    font-size: clamp(26px, 4vw, 42px);
    color: var(--white);
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 16px;
    position: relative;
  }
  .hero p {
    color: rgba(255,255,255,0.62);
    font-size: 16px;
    max-width: 560px;
    margin: 0 auto 10px;
    position: relative;
  }
  .hero-law {
    color: var(--gold-light);
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.5px;
    margin-top: 12px;
    position: relative;
  }
  .hero-actions {
    position: relative;
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 28px;
  }
  .hero-quick-grid {
    max-width: 1100px;
    margin: -24px auto 0;
    padding: 0 24px;
    position: relative;
    z-index: 2;
  }
  .hero-quick-stats {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: 16px;
    box-shadow: var(--shadow-lg);
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 0;
    overflow: hidden;
  }
  .quick-stat {
    padding: 20px 22px;
    text-align: left;
    border-right: 1px solid var(--gray-200);
  }
  .quick-stat:last-child {
    border-right: 0;
  }
  .quick-stat strong {
    display: block;
    font-family: var(--font-serif);
    font-size: 28px;
    color: var(--navy);
    margin-bottom: 4px;
  }
  .quick-stat span {
    display: block;
    font-size: 12px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--gray-400);
    margin-bottom: 6px;
  }
  .quick-stat p {
    font-size: 13px;
    color: var(--gray-600);
    margin: 0;
  }

  /* PAGE HERO pequeño */
  .page-hero {
    background: var(--navy);
    padding: 40px 24px 34px;
    border-bottom: 3px solid var(--gold);
  }
  .page-hero-inner {
    max-width: 860px;
    margin: 0 auto;
  }
  .page-hero-tag {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--gold-light);
    margin-bottom: 10px;
  }
  .page-hero h1 {
    font-family: var(--font-serif);
    font-size: clamp(22px, 3vw, 32px);
    color: var(--white);
    font-weight: 700;
    line-height: 1.25;
    margin-bottom: 10px;
  }
  .page-hero p {
    color: rgba(255,255,255,0.60);
    font-size: 14px;
    max-width: 620px;
  }
  .law-cite {
    display: inline-block;
    margin-top: 14px;
    background: rgba(184,145,42,0.15);
    border-left: 3px solid var(--gold);
    padding: 8px 16px;
    font-size: 12.5px;
    color: var(--gold-light);
    font-style: italic;
    border-radius: 0 3px 3px 0;
  }
  .page-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 18px;
  }

  /* CONTENT */
  .content {
    max-width: 860px;
    margin: 0 auto;
    padding: 48px 24px 80px;
  }

  .section {
    margin-bottom: 40px;
  }
  .section h2 {
    font-family: var(--font-serif);
    font-size: 20px;
    color: var(--navy);
    font-weight: 700;
    margin-bottom: 12px;
    padding-bottom: 8px;
    border-bottom: 1px solid var(--gray-200);
  }
  .section h3 {
    font-family: var(--font-sans);
    font-size: 15px;
    font-weight: 600;
    color: var(--navy-light);
    margin: 20px 0 8px;
  }
  .section p {
    color: var(--gray-600);
    font-size: 15px;
    margin-bottom: 10px;
  }
  .section ul {
    list-style: none;
    padding: 0;
  }
  .section ul li {
    color: var(--gray-600);
    font-size: 15px;
    padding: 4px 0 4px 20px;
    position: relative;
  }
  .section ul li::before {
    content: '—';
    position: absolute;
    left: 0;
    color: var(--gold);
    font-weight: 700;
  }

  /* CARDS INICIO */
  .cards-grid {
    max-width: 1100px;
    margin: 0 auto;
    padding: 60px 24px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
  }
  .card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 28px 24px;
    box-shadow: var(--shadow);
    cursor: pointer;
    transition: all 0.2s;
    position: relative;
    overflow: hidden;
    text-align: left;
  }
  .card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transition: transform 0.2s;
    transform-origin: left;
  }
  .card:hover { box-shadow: var(--shadow-lg); transform: translateY(-2px); }
  .card:hover::before { transform: scaleX(1); }
  .card:focus-visible {
    outline: 2px solid var(--gold);
    outline-offset: 3px;
    box-shadow: var(--shadow-lg);
  }
  .card-icon {
    width: 40px;
    height: 40px;
    background: var(--gray-100);
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    font-size: 20px;
  }
  .card h3 {
    font-family: var(--font-serif);
    font-size: 16px;
    color: var(--navy);
    font-weight: 700;
    margin-bottom: 8px;
  }
  .card p {
    color: var(--gray-600);
    font-size: 13.5px;
    line-height: 1.6;
    margin-bottom: 16px;
  }
  .card-law {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--gold);
  }
  .card-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-top: 14px;
    font-size: 13px;
    font-weight: 600;
    color: var(--navy);
    text-decoration: none;
    border-bottom: 1.5px solid var(--gold);
    padding-bottom: 1px;
    transition: color 0.15s;
  }
  .card-link:hover { color: var(--gold); }
  .btn-link,
  .btn-secondary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border-radius: 999px;
    padding: 12px 18px;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    transition: transform 0.2s ease, background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease;
  }
  .btn-link {
    background: var(--gold);
    color: var(--navy);
    border: 1px solid transparent;
  }
  .btn-link:hover {
    transform: translateY(-1px);
    background: var(--gold-light);
  }
  .btn-secondary {
    background: rgba(255,255,255,0.06);
    color: var(--white);
    border: 1px solid rgba(255,255,255,0.18);
  }
  .btn-secondary:hover {
    transform: translateY(-1px);
    background: rgba(255,255,255,0.12);
  }
  .btn-outline-light {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border-radius: 999px;
    padding: 12px 18px;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    transition: transform 0.2s ease, background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease;
    background: transparent;
    color: var(--white);
    border: 1px solid rgba(255,255,255,0.28);
  }
  .btn-outline-light:hover {
    transform: translateY(-1px);
    background: rgba(255,255,255,0.12);
    border-color: rgba(255,255,255,0.42);
  }

  /* ALERT BOX */
  .alert {
    background: var(--alert-bg);
    border: 1px solid var(--alert-border);
    border-left: 4px solid var(--alert-border);
    border-radius: var(--radius);
    padding: 16px 20px;
    margin-bottom: 32px;
  }
  .alert-title {
    font-weight: 700;
    color: var(--alert-text);
    font-size: 14px;
    margin-bottom: 4px;
  }
  .alert p {
    color: var(--alert-text) !important;
    font-size: 13.5px !important;
    margin: 0 !important;
  }

  /* INFO BOX */
  .info-box {
    background: #EEF3FB;
    border-left: 4px solid #1F4E8C;
    border-radius: 0 var(--radius) var(--radius) 0;
    padding: 16px 20px;
    margin: 20px 0;
  }
  .info-box p {
    color: #1F4E8C !important;
    font-size: 13.5px !important;
    margin: 0 !important;
  }

  /* TABLE */
  .data-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    margin: 16px 0 24px;
  }
  .table-wrap {
    overflow-x: auto;
    border-radius: var(--radius-lg);
    box-shadow: inset 0 0 0 1px var(--gray-200);
    margin: 16px 0 24px;
    background: var(--white);
  }
  .data-table th {
    background: var(--navy);
    color: var(--white);
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    padding: 10px 14px;
    text-align: left;
  }
  .data-table td {
    padding: 10px 14px;
    border-bottom: 1px solid var(--gray-200);
    color: var(--gray-600);
    vertical-align: top;
  }
  .table-wrap .data-table {
    margin: 0;
    min-width: 640px;
  }
  .data-table tr:last-child td { border-bottom: none; }
  .data-table tr:nth-child(even) td { background: var(--gray-100); }
  .data-table strong { color: var(--gray-800); }

  /* DERECHOS CARDS */
  .rights-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    margin: 24px 0;
  }
  .right-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 20px;
    box-shadow: var(--shadow);
  }
  .right-card-letter {
    width: 36px;
    height: 36px;
    background: var(--navy);
    color: var(--gold-light);
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-serif);
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 12px;
  }
  .right-card h4 {
    font-family: var(--font-serif);
    font-size: 15px;
    color: var(--navy);
    margin-bottom: 6px;
  }
  .right-card p {
    color: var(--gray-600);
    font-size: 13px;
    line-height: 1.55;
    margin: 0 !important;
  }

  /* FORM */
  .form-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 32px;
    box-shadow: var(--shadow);
    margin-top: 32px;
  }
  .form-card h3 {
    font-family: var(--font-serif);
    font-size: 18px;
    color: var(--navy);
    margin-bottom: 6px;
  }
  .form-card .form-subtitle {
    font-size: 13.5px;
    color: var(--gray-400);
    margin-bottom: 24px;
  }
  .form-group {
    margin-bottom: 18px;
  }
  .form-group label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: var(--gray-800);
    margin-bottom: 6px;
  }
  .form-group input,
  .form-group select,
  .form-group textarea {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid var(--gray-200);
    border-radius: var(--radius);
    font-family: var(--font-sans);
    font-size: 14px;
    color: var(--text);
    background: var(--cream);
    outline: none;
    transition: border-color 0.18s;
  }
  .form-group input:focus,
  .form-group select:focus,
  .form-group textarea:focus {
    border-color: var(--navy);
    background: var(--white);
  }
  .form-group textarea { resize: vertical; min-height: 100px; }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .form-check {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 18px;
  }
  .form-check input { width: auto; margin-top: 3px; flex-shrink: 0; }
  .form-check label { font-size: 13px; color: var(--gray-600); }
  .btn-primary {
    background: var(--navy);
    color: var(--white);
    border: none;
    border-radius: var(--radius);
    padding: 12px 28px;
    font-family: var(--font-sans);
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.18s;
    letter-spacing: 0.3px;
  }
  .btn-primary:hover { background: var(--navy-light); }
  .btn-primary:focus-visible,
  .btn-link:focus-visible,
  .btn-secondary:focus-visible,
  .nav-links li a:focus-visible,
  .card-link:focus-visible,
  .form-group input:focus-visible,
  .form-group select:focus-visible,
  .form-group textarea:focus-visible {
    outline: 2px solid var(--gold);
    outline-offset: 3px;
  }
  .form-feedback {
    display: none;
    margin-top: 18px;
    padding: 14px 16px;
    border-radius: var(--radius);
    font-size: 13.5px;
    font-weight: 500;
  }
  .form-feedback.is-visible {
    display: block;
  }
  .form-feedback.error {
    background: #fff1f1;
    color: #8d2b2b;
    border: 1px solid #efc0c0;
  }
  .form-feedback.success {
    background: #edf9f0;
    color: #21603c;
    border: 1px solid #b9e1c7;
  }

  /* CONTACT INFO */
  .contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 16px;
    margin: 24px 0;
  }
  .contact-card {
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 20px 22px;
    box-shadow: var(--shadow);
  }
  .contact-card.is-interactive {
    cursor: pointer;
    transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
  }
  .contact-card.is-interactive:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
    border-color: color-mix(in srgb, var(--gold), white 30%);
  }
  .contact-card.is-interactive:focus-visible {
    outline: 2px solid var(--gold);
    outline-offset: 3px;
  }
  .contact-card-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 10px;
  }
  .contact-card h4 {
    font-family: var(--font-serif);
    font-size: 15px;
    color: var(--navy);
    margin-bottom: 8px;
  }
  .contact-card p {
    font-size: 13.5px;
    color: var(--gray-600);
    margin: 0 !important;
    line-height: 1.6;
  }

  /* FOOTER */
  footer {
    background: var(--navy);
    color: rgba(255,255,255,0.45);
    font-size: 12px;
    text-align: center;
    padding: 24px;
  }
  footer strong { color: rgba(255,255,255,0.65); }

  /* DIVIDER */
  .divider {
    border: none;
    border-top: 1px solid var(--gray-200);
    margin: 32px 0;
  }

  /* PLAZO TAG */
  .plazo-tag {
    display: inline-block;
    background: var(--gray-100);
    border: 1px solid var(--gray-200);
    border-radius: 2px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--gray-600);
    padding: 3px 10px;
    margin-left: 8px;
    vertical-align: middle;
  }

  /* MODAL */
  body.modal-open {
    overflow: hidden;
  }
  .modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(13,31,60,0.68);
    backdrop-filter: blur(4px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    z-index: 1200;
  }
  .modal-panel {
    width: min(1040px, 100%);
    max-height: min(88vh, 980px);
    background: var(--white);
    border-radius: 18px;
    box-shadow: 0 24px 80px rgba(13,31,60,0.24);
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }
  .modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    padding: 24px 28px 18px;
    border-bottom: 1px solid var(--gray-200);
    background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%);
  }
  .modal-header .page-hero-tag {
    margin-bottom: 8px;
  }
  .modal-header h2 {
    font-family: var(--font-serif);
    color: var(--white);
    font-size: clamp(22px, 3vw, 30px);
    line-height: 1.2;
    margin-bottom: 8px;
  }
  .modal-header p {
    color: rgba(255,255,255,0.72);
    font-size: 14px;
    max-width: 760px;
  }
  .modal-close {
    width: 42px;
    height: 42px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.24);
    background: rgba(255,255,255,0.08);
    color: var(--white);
    font-size: 22px;
    cursor: pointer;
    flex-shrink: 0;
  }
  .modal-close:hover {
    background: rgba(255,255,255,0.16);
  }
  .modal-close:focus-visible,
  .btn-outline-light:focus-visible {
    outline: 2px solid var(--gold-light);
    outline-offset: 3px;
  }
  .modal-body {
    overflow: auto;
    padding: 24px 28px 30px;
    background: linear-gradient(180deg, rgba(247,244,238,0.68) 0%, rgba(255,255,255,1) 18%);
  }
  .modal-section + .modal-section {
    margin-top: 28px;
  }
  .modal-section h3 {
    font-family: var(--font-serif);
    font-size: 19px;
    color: var(--navy);
    margin-bottom: 10px;
  }
  .modal-section p {
    color: var(--gray-600);
    font-size: 14px;
    margin-bottom: 12px;
  }
  .modal-checklist {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 14px;
  }
  .modal-check {
    background: #edf9f0;
    border: 1px solid #b9e1c7;
    border-radius: 12px;
    padding: 16px;
  }
  .modal-check strong {
    display: block;
    color: #21603c;
    margin-bottom: 6px;
    font-size: 14px;
  }
  .modal-check p {
    margin: 0;
    font-size: 13px;
    color: #21603c;
  }
  .modal-missing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 16px;
  }
  .modal-missing-card {
    background: #fff8e8;
    border: 1px solid #ead8a6;
    border-radius: 12px;
    padding: 18px;
  }
  .modal-missing-card h4 {
    font-size: 15px;
    color: #7a5c10;
    margin-bottom: 8px;
  }
  .modal-missing-card p {
    margin: 0;
    font-size: 13.5px;
    color: #7a5c10;
  }

  [hidden] {
    display: none !important;
  }

  @media (max-width: 640px) {
    .nav-inner {
      height: auto;
      padding-top: 12px;
      padding-bottom: 12px;
      flex-wrap: wrap;
      gap: 12px;
    }
    .nav-toggle {
      display: inline-flex;
      margin-left: auto;
    }
    .nav-links {
      display: none;
      width: 100%;
      flex-direction: column;
      gap: 8px;
      padding: 8px 0 0;
    }
    .nav-links.is-open {
      display: flex;
    }
    .nav-links li a {
      padding: 10px 12px;
      background: rgba(255,255,255,0.04);
    }
    .form-row { grid-template-columns: 1fr; }
    .cards-grid { grid-template-columns: 1fr; }
    .hero {
      padding-top: 56px;
    }
    .hero-quick-stats {
      grid-template-columns: 1fr;
    }
    .quick-stat {
      border-right: 0;
      border-bottom: 1px solid var(--gray-200);
    }
    .quick-stat:last-child {
      border-bottom: 0;
    }
    .page-actions,
    .hero-actions {
      align-items: stretch;
    }
    .btn-link,
    .btn-secondary,
    .btn-outline-light {
      width: 100%;
    }
    .modal-overlay {
      padding: 12px;
    }
    .modal-header,
    .modal-body {
      padding-left: 18px;
      padding-right: 18px;
    }
  }
</style>
</head>

<body>
<a class="skip-link" href="#page-content">Saltar al contenido</a>

<nav>
  <div class="nav-inner">
    <a class="nav-brand" href="#inicio" onclick="showPage('inicio')">
      <div class="nav-brand-icon">E</div>
      <div>
        <span class="nav-brand-text">EMPRESA</span>
        <span class="nav-brand-sub">Portal de Privacidad</span>
      </div>
    </a>
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-links" aria-label="Abrir menú" onclick="toggleNav()">☰</button>
    <ul class="nav-links" id="nav-links">
      <li><a href="#inicio" onclick="showPage('inicio')" id="nav-inicio" class="active">Inicio</a></li>
      <li><a href="#politica" onclick="showPage('politica')" id="nav-politica">Política de Privacidad</a></li>
      <li><a href="#empleados" onclick="showPage('empleados')" id="nav-empleados">Aviso Empleados</a></li>
      <li><a href="#clientes" onclick="showPage('clientes')" id="nav-clientes">Aviso Clientes</a></li>
      <li><a href="#proveedores" onclick="showPage('proveedores')" id="nav-proveedores">Aviso Proveedores</a></li>
      <li><a href="#arco" onclick="showPage('arco')" id="nav-arco">Derechos ARCO+</a></li>
    </ul>
  </div>
</nav>

<main id="page-content">
<!-- ═══════════════════════════════════════════════
     PÁGINA 1: INICIO
     Art. 12 LOPDP — derecho a ser informado por cualquier medio
     ═══════════════════════════════════════════════ -->
<div id="page-inicio" class="page active">
  <div class="hero">
    <div class="hero-badge">Portal de Privacidad</div>
    <h1>Protección de Datos Personales</h1>
    <p>EMPRESA respeta y protege los datos personales de sus colaboradores, clientes y proveedores conforme a la ley ecuatoriana.</p>
    <div class="hero-law">Ley Orgánica de Protección de Datos Personales — Registro Oficial N.° 459, 26 de mayo de 2021</div>
    <div class="hero-actions">
      <a class="btn-link" href="#politica" onclick="showPage('politica')">Ver política general</a>
      <a class="btn-secondary" href="#arco" onclick="showPage('arco')">Ejercer derechos ARCO+</a>
      <button class="btn-outline-light" type="button" onclick="openExtraInfoModal()">Información extra</button>
    </div>
  </div>

  <div class="hero-quick-grid">
    <div class="hero-quick-stats">
      <div class="quick-stat">
        <span>Documentos</span>
        <strong>4</strong>
        <p>Política general y avisos específicos por grupo de titulares.</p>
      </div>
      <div class="quick-stat">
        <span>Titulares</span>
        <strong>3</strong>
        <p>Empleados, clientes y vendedores, y proveedores.</p>
      </div>
      <div class="quick-stat">
        <span>Respuesta</span>
        <strong>15 días</strong>
        <p>Plazo máximo para contestar solicitudes ARCO+ conforme al Art. 31.</p>
      </div>
    </div>
  </div>

  <div class="cards-grid">
    <!-- Card Política -->
    <div class="card" role="button" tabindex="0" data-page="politica" onclick="showPage('politica')">
      <div class="card-icon">📋</div>
      <h3>Política de Privacidad</h3>
      <p>Documento general que establece cómo EMPRESA trata, protege y conserva los datos personales de todos sus titulares.</p>
      <div class="card-law">Art. 13 · Base de legitimación</div>
      <a class="card-link">Ver política →</a>
    </div>

    <!-- Card Empleados -->
    <div class="card" role="button" tabindex="0" data-page="empleados" onclick="showPage('empleados')">
      <div class="card-icon">👤</div>
      <h3>Aviso de Privacidad — Empleados</h3>
      <p>Información específica para los colaboradores de EMPRESA sobre el tratamiento de sus datos laborales, nómina y beneficios.</p>
      <div class="card-law">Art. 12 · Derecho a ser informado</div>
      <a class="card-link">Ver aviso →</a>
    </div>

    <!-- Card Clientes -->
    <div class="card" role="button" tabindex="0" data-page="clientes" onclick="showPage('clientes')">
      <div class="card-icon">🛒</div>
      <h3>Aviso de Privacidad — Clientes y Vendedores</h3>
      <p>Información sobre el tratamiento de datos comerciales y de crédito de clientes y vendedores registrados en el sistema.</p>
      <div class="card-law">Art. 12 · Derecho a ser informado</div>
      <a class="card-link">Ver aviso →</a>
    </div>

    <!-- Card Proveedores -->
    <div class="card" role="button" tabindex="0" data-page="proveedores" onclick="showPage('proveedores')">
      <div class="card-icon">🏭</div>
      <h3>Aviso de Privacidad — Proveedores</h3>
      <p>Información para proveedores sobre el uso de sus datos en procesos de compras, pagos y gestión de contratos.</p>
      <div class="card-law">Art. 12 · Derecho a ser informado</div>
      <a class="card-link">Ver aviso →</a>
    </div>

    <!-- Card ARCO -->
    <div class="card" role="button" tabindex="0" data-page="arco" onclick="showPage('arco')">
      <div class="card-icon">⚖️</div>
      <h3>Derechos ARCO+ / Contacto</h3>
      <p>Ejerza sus derechos de Acceso, Rectificación, Cancelación, Oposición, Portabilidad y Limitación sobre sus datos personales.</p>
      <div class="card-law">Arts. 19–24 · Derechos del titular</div>
      <a class="card-link">Ejercer mis derechos →</a>
    </div>
  </div>

  <div style="max-width:860px;margin:0 auto;padding:0 24px 60px;">
    <div class="alert">
      <div class="alert-title">⚠️ Información sobre el Delegado de Protección de Datos</div>
      <p>EMPRESA se encuentra en proceso de designación de su Delegado de Protección de Datos (DPD) conforme al Reglamento emitido por la Superintendencia de Protección de Datos Personales (SPDP) en julio de 2025. Una vez designado, sus datos de contacto serán publicados en este portal.</p>
    </div>
  </div>

  <div id="extra-info-modal" class="modal-overlay" hidden aria-hidden="true" onclick="closeExtraInfoModal(event)">
    <div class="modal-panel" role="dialog" aria-modal="true" aria-labelledby="extra-info-title" onclick="event.stopPropagation()">
      <div class="modal-header">
        <div>
          <div class="page-hero-tag">Evaluación de Transparencia Externa</div>
          <h2 id="extra-info-title">Información adicional sobre cumplimiento web LOPDP</h2>
          <p>Resumen de cómo el portal satisface los Arts. 9, 12, 13 y 30 de la LOPDP, y qué elementos de cumplimiento integral todavía deben existir fuera del sitio web.</p>
        </div>
        <button class="modal-close" type="button" aria-label="Cerrar información extra" onclick="closeExtraInfoModal()">×</button>
      </div>
      <div class="modal-body">
        <div class="modal-section">
          <p>El Art. 12 LOPDP establece el derecho del titular a ser informado de forma expresa, inequívoca, transparente e inteligible sobre el tratamiento de sus datos. Este portal cubre ese estándar de transparencia externa y lo complementa con una política general, avisos por tipo de titular y un canal ARCO+.</p>
        </div>

        <div class="modal-section">
          <h3>Verificación contra Arts. 12 y 13 LOPDP</h3>
          <div class="table-wrap"><table class="data-table">
            <thead>
              <tr><th>Información exigida</th><th>¿Está en el sitio?</th><th>Ubicación</th></tr>
            </thead>
            <tbody>
              <tr><td>Identidad del responsable: nombre, RUC, dirección y teléfono</td><td>✅ Sí</td><td>Página Derechos ARCO+ y tabla de contacto</td></tr>
              <tr><td>Datos del Delegado de Protección de Datos</td><td>✅ Sí, con aclaración</td><td>Página Derechos ARCO+ con estado en proceso</td></tr>
              <tr><td>Finalidad del tratamiento</td><td>✅ Sí</td><td>Política general y cada uno de los 3 avisos</td></tr>
              <tr><td>Base legal conforme al Art. 7</td><td>✅ Sí</td><td>Tablas de cada aviso con cita legal</td></tr>
              <tr><td>Categorías de datos</td><td>✅ Sí</td><td>Tablas en cada aviso</td></tr>
              <tr><td>Destinatarios o terceros</td><td>✅ Sí</td><td>Sección ¿Con quién compartimos? en cada aviso</td></tr>
              <tr><td>Plazo de conservación</td><td>✅ Sí</td><td>Sección Plazo de conservación en cada aviso</td></tr>
              <tr><td>Derechos ARCO+</td><td>✅ Sí</td><td>Página completa Derechos ARCO+</td></tr>
              <tr><td>Canal de ejercicio de derechos</td><td>✅ Sí</td><td>Formulario y datos de contacto</td></tr>
              <tr><td>Plazo de respuesta</td><td>✅ Sí</td><td>Indicado como 15 días hábiles conforme al Art. 31</td></tr>
            </tbody>
          </table></div>
        </div>

        <div class="modal-section">
          <h3>Lo que sí cumple el portal</h3>
          <div class="modal-checklist">
            <div class="modal-check">
              <strong>✅ Transparencia externa</strong>
              <p>Cubre Arts. 9, 12 y 13 sobre derecho a ser informado y deber de transparencia.</p>
            </div>
            <div class="modal-check">
              <strong>✅ Derechos del titular</strong>
              <p>Incluye Arts. 19 al 24 con página dedicada a derechos ARCO+.</p>
            </div>
            <div class="modal-check">
              <strong>✅ Canal de ejercicio</strong>
              <p>Cumple Art. 30 con formulario y datos de contacto del responsable.</p>
            </div>
            <div class="modal-check">
              <strong>✅ Separación por titulares</strong>
              <p>Diferencia avisos para empleados, clientes y vendedores, y proveedores.</p>
            </div>
            <div class="modal-check">
              <strong>✅ Referencia legal visible</strong>
              <p>Cita artículos LOPDP en cada sección relevante del portal.</p>
            </div>
            <div class="modal-check">
              <strong>✅ Datos sensibles identificados</strong>
              <p>Reconoce categorías sensibles conforme al Art. 26.</p>
            </div>
          </div>
        </div>

        <div class="modal-section">
          <h3>Lo que falta fuera del sitio web</h3>
          <p>La LOPDP exige un programa integral de protección de datos, no solo una página web. Estos elementos suelen existir como documentación interna, operativa y contractual, por lo que no necesariamente se publican en el portal.</p>
          <div class="modal-missing-grid">
            <div class="modal-missing-card">
              <h4>❌ Registro de Actividades de Tratamiento (RAT)</h4>
              <p>Debe documentar internamente cada actividad de tratamiento de datos. No es un documento público, pero sí obligatorio.</p>
            </div>
            <div class="modal-missing-card">
              <h4>❌ Evaluación de Impacto (DPIA)</h4>
              <p>Si existe tratamiento a gran escala o datos sensibles, se requiere una evaluación de impacto documentada sobre riesgos y vulnerabilidades.</p>
            </div>
            <div class="modal-missing-card">
              <h4>❌ Medidas técnicas y organizativas reales</h4>
              <p>Hace falta aterrizar controles concretos como cifrado, MFA, backups seguros, control de accesos, monitoreo de incidentes y privacidad desde el diseño.</p>
            </div>
            <div class="modal-missing-card">
              <h4>❌ Cláusulas de protección de datos en contratos</h4>
              <p>Los contratos con proveedores tecnológicos, laborales y comerciales deben contener obligaciones específicas de protección de datos.</p>
            </div>
            <div class="modal-missing-card">
              <h4>❌ Capacitación y conciencia interna</h4>
              <p>El personal debe recibir formación continua para ejecutar correctamente las obligaciones de privacidad y seguridad.</p>
            </div>
          </div>
        </div>

        <div class="modal-section">
          <h3>Conclusión</h3>
          <p>La página web satisface los Arts. 9, 12, 13 y 30 de la LOPDP en materia de transparencia externa. Lo que falta corresponde a documentación interna y medidas operativas como RAT, DPIA, contratos, seguridad y capacitación, elementos que normalmente no se publican en la web pero sí deben existir dentro del programa de cumplimiento.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PÁGINA 2: POLÍTICA DE PRIVACIDAD
     Art. 13 LOPDP — obligación de informar al tratamiento de datos
     Principios: licitud, lealtad, transparencia, finalidad, proporcionalidad
     ═══════════════════════════════════════════════ -->
<div id="page-politica" class="page">
  <div class="page-hero">
    <div class="page-hero-inner">
      <div class="page-hero-tag">Documento general</div>
      <h1>Política de Privacidad</h1>
      <p>Establece los principios, bases legales y compromisos de EMPRESA en el tratamiento de datos personales de todos sus titulares.</p>
      <div class="law-cite">Art. 13 LOPDP — Obligación de informar sobre el tratamiento · Principios Arts. 6–11 LOPDP</div>
      <div class="page-actions">
        <a class="btn-secondary" href="#inicio" onclick="showPage('inicio')">Volver al inicio</a>
        <a class="btn-link" href="#arco" onclick="showPage('arco')">Canal ARCO+</a>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="alert">
      <div class="alert-title">¿Por qué existe esta página?</div>
      <p>El Art. 13 de la LOPDP obliga al responsable del tratamiento a informar, de forma proactiva y antes de recabar cualquier dato, las condiciones en que serán tratados. Esta política cumple con los principios de <strong>transparencia, lealtad y licitud</strong> establecidos en los Arts. 6 al 11 de la LOPDP.</p>
    </div>

    <div class="section">
      <h2>1. Responsable del tratamiento</h2>
      <div class="table-wrap"><table class="data-table">
        <tr><td><strong>Razón social</strong></td><td>EMPRESA</td></tr>
        <tr><td><strong>RUC</strong></td><td>[XXXXXXXXXX001]</td></tr>
        <tr><td><strong>Dirección</strong></td><td>[Dirección legal completa, ciudad, provincia]</td></tr>
        <tr><td><strong>Teléfono</strong></td><td>[+593 XX XXX XXXX]</td></tr>
        <tr><td><strong>Correo de privacidad</strong></td><td>privacidad@empresa.com</td></tr>
        <tr><td><strong>Delegado de Protección de Datos</strong></td><td>En proceso de designación — Art. 48 LOPDP</td></tr>
      </table></div>
    </div>

    <div class="section">
      <h2>2. Datos que tratamos y sus finalidades</h2>
      <p>EMPRESA trata datos personales de tres grupos de titulares, cada uno con finalidades específicas y bases legales independientes:</p>
      <div class="table-wrap"><table class="data-table">
        <thead>
          <tr><th>Tipo de titular</th><th>Categorías de datos</th><th>Base legal (Art. 7 LOPDP)</th></tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Empleados</strong></td>
            <td>Identidad, datos laborales, nómina, salud (IESS), biométricos, cargas familiares</td>
            <td>Ejecución de contrato laboral; obligación legal</td>
          </tr>
          <tr>
            <td><strong>Clientes y vendedores</strong></td>
            <td>Identidad, contacto, historial de compras SAP, datos de crédito y facturación</td>
            <td>Ejecución de relación comercial; interés legítimo</td>
          </tr>
          <tr>
            <td><strong>Proveedores</strong></td>
            <td>Datos del representante, RUC, información bancaria, condiciones comerciales</td>
            <td>Ejecución de contrato; obligación legal tributaria</td>
          </tr>
        </tbody>
      </table></div>
    </div>

    <div class="section">
      <h2>3. Principios rectores del tratamiento</h2>
      <p>EMPRESA aplica los siguientes principios establecidos en los Arts. 6 al 11 de la LOPDP:</p>
      <ul>
        <li><strong>Licitud y lealtad</strong> — Todo tratamiento cuenta con base legal expresa.</li>
        <li><strong>Finalidad</strong> — Los datos se recogen para fines determinados, explícitos y legítimos.</li>
        <li><strong>Proporcionalidad</strong> — Solo se tratan los datos estrictamente necesarios para cada finalidad.</li>
        <li><strong>Exactitud</strong> — Los datos se mantienen actualizados y se corrigen cuando es necesario.</li>
        <li><strong>Conservación limitada</strong> — Los datos se conservan solo durante el tiempo necesario.</li>
        <li><strong>Seguridad</strong> — Se aplican medidas técnicas y organizativas para proteger los datos.</li>
        <li><strong>Responsabilidad proactiva</strong> — EMPRESA puede demostrar el cumplimiento en todo momento.</li>
      </ul>
    </div>

    <div class="section">
      <h2>4. Plazos de conservación</h2>
      <div class="table-wrap"><table class="data-table">
        <thead><tr><th>Tipo de datos</th><th>Plazo de conservación</th><th>Fundamento</th></tr></thead>
        <tbody>
          <tr><td>Datos laborales de empleados</td><td>Durante la relación laboral + 7 años</td><td>Código de Trabajo, LOPDP</td></tr>
          <tr><td>Datos de clientes / facturas</td><td>7 años desde la última transacción</td><td>Código Tributario</td></tr>
          <tr><td>Datos de proveedores</td><td>7 años desde la última transacción</td><td>Código Tributario</td></tr>
          <tr><td>Datos de salud (empleados)</td><td>Durante la relación laboral + período legal</td><td>IESS, Ministerio de Trabajo</td></tr>
        </tbody>
      </table></div>
    </div>

    <div class="section">
      <h2>5. Transferencias de datos</h2>
      <p>EMPRESA podrá comunicar datos personales únicamente a:</p>
      <ul>
        <li>Autoridades públicas con competencia legal (SRI, IESS, Ministerio de Trabajo).</li>
        <li>Proveedores de servicios tecnológicos (SAP) bajo acuerdos de encargado del tratamiento.</li>
        <li>Instituciones financieras para pago de nómina y obligaciones comerciales.</li>
        <li>Auditores y asesores legales bajo acuerdo de confidencialidad.</li>
      </ul>
      <div class="info-box"><p>No se realizan transferencias internacionales de datos personales sin base legal expresa conforme al Art. 56 de la LOPDP.</p></div>
    </div>

    <div class="section">
      <h2>6. Derechos de los titulares</h2>
      <p>Todo titular puede ejercer sus derechos ARCO+ (Acceso, Rectificación, Cancelación, Oposición, Portabilidad y Limitación) conforme a los Arts. 19 al 24 de la LOPDP, a través del canal habilitado en este portal.</p>
      <a class="card-link" onclick="showPage('arco')" style="cursor:pointer">Ir al formulario de solicitud ARCO+ →</a>
    </div>

    <div class="section">
      <h2>7. Modificaciones a esta política</h2>
      <p>EMPRESA podrá actualizar esta política cuando cambien las condiciones del tratamiento o la normativa aplicable. Las modificaciones serán publicadas en este portal con indicación de la fecha de actualización.</p>
      <p style="color:var(--gray-400);font-size:13px;">Última actualización: abril de 2026</p>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PÁGINA 3: AVISO EMPLEADOS
     Art. 12 LOPDP — derecho a ser informado
     Base legal: Art. 7 num. 2 (ejecución de contrato) + Art. 7 num. 3 (obligación legal)
     Datos sensibles: Art. 26 LOPDP (salud, biométricos)
     ═══════════════════════════════════════════════ -->
<div id="page-empleados" class="page">
  <div class="page-hero">
    <div class="page-hero-inner">
      <div class="page-hero-tag">Aviso de privacidad · Empleados</div>
      <h1>Tratamiento de Datos de Colaboradores</h1>
      <p>Información dirigida a los empleados y ex empleados de EMPRESA sobre cómo se tratan sus datos en el marco de la relación laboral.</p>
      <div class="law-cite">Art. 12 LOPDP — Derecho a ser informado · Art. 7 num. 2 y 3 — Base legal · Art. 26 — Datos sensibles</div>
      <div class="page-actions">
        <a class="btn-secondary" href="#inicio" onclick="showPage('inicio')">Volver al inicio</a>
        <a class="btn-link" href="#arco" onclick="showPage('arco')">Canal ARCO+</a>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="alert">
      <div class="alert-title">¿Por qué este aviso existe por separado?</div>
      <p>Los empleados son titulares con una relación especial con EMPRESA: la organización trata datos sensibles como salud (IESS, dispensario), biométricos (control de asistencia) y datos de cargas familiares. La LOPDP exige un aviso diferenciado porque la base legal, las categorías de datos y los plazos de conservación son distintos a los de clientes o proveedores.</p>
    </div>

    <div class="section">
      <h2>1. ¿Qué datos tratamos de los empleados?</h2>
      <div class="table-wrap"><table class="data-table">
        <thead><tr><th>Categoría</th><th>Datos específicos</th><th>Tipo</th></tr></thead>
        <tbody>
          <tr><td><strong>Identificación</strong></td><td>Cédula, nombre completo, fecha de nacimiento, estado civil</td><td>Personal</td></tr>
          <tr><td><strong>Laboral</strong></td><td>Cargo, área, fecha de ingreso, historial de funciones, evaluaciones</td><td>Personal</td></tr>
          <tr><td><strong>Remuneración</strong></td><td>Sueldo, beneficios, descuentos, cuenta bancaria de nómina</td><td>Personal / financiero</td></tr>
          <tr><td><strong>Seguridad social</strong></td><td>Número IESS, aportes, fondos de reserva, préstamos IESS</td><td>Personal</td></tr>
          <tr><td><strong>Salud</strong></td><td>Certificados médicos, aptitud laboral, incapacidades</td><td><strong>Sensible — Art. 26</strong></td></tr>
          <tr><td><strong>Biométricos</strong></td><td>Huella dactilar o registro facial para control de asistencia</td><td><strong>Sensible — Art. 26</strong></td></tr>
          <tr><td><strong>Cargas familiares</strong></td><td>Datos de cónyuge e hijos para beneficios de ley</td><td>Personal de terceros</td></tr>
        </tbody>
      </table></div>
    </div>

    <div class="section">
      <h2>2. ¿Para qué usamos sus datos?</h2>
      <ul>
        <li>Gestión y administración de la relación laboral (contratación, nómina, rol de pagos).</li>
        <li>Cumplimiento de obligaciones con el IESS, Ministerio de Trabajo y SRI.</li>
        <li>Gestión de beneficios de ley (décimos, utilidades, vacaciones, fondos de reserva).</li>
        <li>Control de asistencia y puntualidad mediante sistemas biométricos.</li>
        <li>Gestión de incapacidades, permisos y certificados médicos.</li>
        <li>Capacitación y desarrollo profesional interno.</li>
        <li>Referencia laboral ante nuevos empleadores con consentimiento del titular.</li>
      </ul>
    </div>

    <div class="section">
      <h2>3. Base legal del tratamiento</h2>
      <div class="table-wrap"><table class="data-table">
        <thead><tr><th>Finalidad</th><th>Base legal (Art. 7 LOPDP)</th></tr></thead>
        <tbody>
          <tr><td>Nómina, gestión laboral</td><td>Ejecución del contrato de trabajo (num. 2)</td></tr>
          <tr><td>Aportes IESS, retenciones SRI</td><td>Cumplimiento de obligación legal (num. 3)</td></tr>
          <tr><td>Datos de salud / incapacidades</td><td>Obligación legal + consentimiento expreso (num. 1 y 3)</td></tr>
          <tr><td>Control biométrico de asistencia</td><td>Interés legítimo + consentimiento (num. 1 y 6)</td></tr>
          <tr><td>Referencia laboral externa</td><td>Consentimiento del titular (num. 1)</td></tr>
        </tbody>
      </table></div>
    </div>

    <div class="section">
      <h2>4. ¿Con quién compartimos sus datos?</h2>
      <ul>
        <li>Instituto Ecuatoriano de Seguridad Social (IESS) — obligación legal.</li>
        <li>Servicio de Rentas Internas (SRI) — obligación tributaria.</li>
        <li>Ministerio de Trabajo — obligación laboral (actas de finiquito, contratos).</li>
        <li>Instituciones financieras — transferencia de nómina.</li>
        <li>Sistema SAP — como encargado del tratamiento tecnológico.</li>
      </ul>
    </div>

    <div class="section">
      <h2>5. Plazo de conservación</h2>
      <p>Sus datos laborales se conservan <strong>durante toda la relación de trabajo</strong> y por un período adicional de <strong>7 años</strong> tras su terminación, conforme al Código de Trabajo y normativa tributaria. Los datos biométricos se eliminan a los 2 años de terminada la relación laboral.</p>
    </div>

    <div class="section">
      <h2>6. Sus derechos</h2>
      <p>Como colaborador de EMPRESA, usted tiene derecho a acceder, rectificar, cancelar u oponerse al tratamiento de sus datos, así como a la portabilidad y limitación del mismo. Para ejercer estos derechos:</p>
      <a class="card-link" onclick="showPage('arco')" style="cursor:pointer">Enviar solicitud ARCO+ →</a>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PÁGINA 4: AVISO CLIENTES Y VENDEDORES
     Art. 12 LOPDP — derecho a ser informado
     Base legal: Art. 7 num. 2 (relación comercial) + num. 6 (interés legítimo)
     ═══════════════════════════════════════════════ -->
<div id="page-clientes" class="page">
  <div class="page-hero">
    <div class="page-hero-inner">
      <div class="page-hero-tag">Aviso de privacidad · Clientes y Vendedores</div>
      <h1>Tratamiento de Datos Comerciales</h1>
      <p>Información para los clientes y vendedores de EMPRESA sobre el uso de sus datos en el contexto de la relación comercial.</p>
      <div class="law-cite">Art. 12 LOPDP — Derecho a ser informado · Art. 7 num. 2 y 6 — Base legal</div>
      <div class="page-actions">
        <a class="btn-secondary" href="#inicio" onclick="showPage('inicio')">Volver al inicio</a>
        <a class="btn-link" href="#arco" onclick="showPage('arco')">Canal ARCO+</a>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="alert">
      <div class="alert-title">¿Por qué este aviso existe por separado?</div>
      <p>Los clientes y vendedores interactúan con EMPRESA en el marco de una relación comercial registrada en SAP. Sus datos incluyen historial de compras, crédito comercial e información de facturación, cuya finalidad y base legal difieren completamente de las aplicables a empleados o proveedores.</p>
    </div>

    <div class="section">
      <h2>1. ¿Qué datos tratamos de clientes y vendedores?</h2>
      <div class="table-wrap"><table class="data-table">
        <thead><tr><th>Categoría</th><th>Datos específicos</th></tr></thead>
        <tbody>
          <tr><td><strong>Identificación</strong></td><td>Nombre / razón social, cédula o RUC, dirección comercial</td></tr>
          <tr><td><strong>Contacto</strong></td><td>Teléfono, correo electrónico, nombre del contacto principal</td></tr>
          <tr><td><strong>Comercial</strong></td><td>Historial de pedidos, condiciones de pago, línea de crédito</td></tr>
          <tr><td><strong>Financiero</strong></td><td>Estado de cuenta, saldo pendiente, documentos de crédito</td></tr>
          <tr><td><strong>Tributario</strong></td><td>RUC activo, tipo de contribuyente, retenciones aplicables</td></tr>
          <tr><td><strong>Logístico</strong></td><td>Dirección de entrega, zonas de despacho, frecuencia de pedidos</td></tr>
        </tbody>
      </table></div>
    </div>

    <div class="section">
      <h2>2. ¿Para qué usamos sus datos?</h2>
      <ul>
        <li>Gestión de pedidos, facturación y despacho de productos.</li>
        <li>Evaluación y administración de crédito comercial.</li>
        <li>Cumplimiento de obligaciones tributarias con el SRI.</li>
        <li>Comunicación comercial relacionada con pedidos, promociones y novedades del portafolio.</li>
        <li>Cobro de cartera y gestión de cuentas por cobrar.</li>
        <li>Análisis estadístico interno para mejora del servicio (datos anonimizados).</li>
        <li>Cumplimiento de requisitos de prevención de lavado de activos (si aplica).</li>
      </ul>
    </div>

    <div class="section">
      <h2>3. Base legal del tratamiento</h2>
      <div class="table-wrap"><table class="data-table">
        <thead><tr><th>Finalidad</th><th>Base legal (Art. 7 LOPDP)</th></tr></thead>
        <tbody>
          <tr><td>Facturación, despacho, cobro</td><td>Ejecución de relación contractual comercial (num. 2)</td></tr>
          <tr><td>Retenciones, reportes al SRI</td><td>Cumplimiento de obligación legal tributaria (num. 3)</td></tr>
          <tr><td>Comunicaciones comerciales</td><td>Interés legítimo (num. 6) / consentimiento (num. 1)</td></tr>
          <tr><td>Análisis estadístico anonimizado</td><td>Interés legítimo (num. 6)</td></tr>
        </tbody>
      </table></div>
    </div>

    <div class="section">
      <h2>4. ¿Con quién compartimos sus datos?</h2>
      <ul>
        <li>Servicio de Rentas Internas (SRI) — obligación tributaria.</li>
        <li>Empresas de transporte y logística — para despacho de pedidos.</li>
        <li>Instituciones financieras — para gestión de cheques y transferencias.</li>
        <li>Sistema SAP — como encargado tecnológico del tratamiento.</li>
      </ul>
      <div class="info-box"><p>No se vende ni cede información comercial de clientes a terceros con fines publicitarios de terceros.</p></div>
    </div>

    <div class="section">
      <h2>5. Plazo de conservación</h2>
      <p>Los datos de clientes y vendedores se conservan <strong>durante la vigencia de la relación comercial</strong> y por un período adicional de <strong>7 años</strong> tras la última transacción, conforme al Código Tributario del Ecuador.</p>
    </div>

    <div class="section">
      <h2>6. Sus derechos</h2>
      <p>Usted puede ejercer sus derechos ARCO+ en cualquier momento. Si no desea recibir comunicaciones comerciales, puede solicitarlo por el mismo canal.</p>
      <a class="card-link" onclick="showPage('arco')" style="cursor:pointer">Enviar solicitud ARCO+ →</a>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PÁGINA 5: AVISO PROVEEDORES
     Art. 12 LOPDP — derecho a ser informado
     Base legal: Art. 7 num. 2 (contrato) + num. 3 (obligación legal)
     ═══════════════════════════════════════════════ -->
<div id="page-proveedores" class="page">
  <div class="page-hero">
    <div class="page-hero-inner">
      <div class="page-hero-tag">Aviso de privacidad · Proveedores</div>
      <h1>Tratamiento de Datos de Proveedores</h1>
      <p>Información para los proveedores de bienes y servicios de EMPRESA sobre cómo se gestionan sus datos en los procesos de compra y pago.</p>
      <div class="law-cite">Art. 12 LOPDP — Derecho a ser informado · Art. 7 num. 2 y 3 — Base legal</div>
      <div class="page-actions">
        <a class="btn-secondary" href="#inicio" onclick="showPage('inicio')">Volver al inicio</a>
        <a class="btn-link" href="#arco" onclick="showPage('arco')">Canal ARCO+</a>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="alert">
      <div class="alert-title">¿Por qué este aviso existe por separado?</div>
      <p>Los proveedores son personas naturales o jurídicas cuyos representantes y contactos son titulares de datos personales. La relación con ellos implica el tratamiento de datos financieros, bancarios y tributarios que tienen una finalidad distinta a la de los empleados o clientes, y requieren un aviso independiente para cumplir con el principio de transparencia del Art. 9 LOPDP.</p>
    </div>

    <div class="section">
      <h2>1. ¿Qué datos tratamos de los proveedores?</h2>
      <div class="table-wrap"><table class="data-table">
        <thead><tr><th>Categoría</th><th>Datos específicos</th></tr></thead>
        <tbody>
          <tr><td><strong>Del representante / contacto</strong></td><td>Nombre, cédula, cargo, correo electrónico, teléfono</td></tr>
          <tr><td><strong>De la empresa</strong></td><td>Razón social, RUC, dirección fiscal, actividad económica</td></tr>
          <tr><td><strong>Bancarios</strong></td><td>Número de cuenta, banco, tipo de cuenta para pagos</td></tr>
          <tr><td><strong>Comerciales</strong></td><td>Condiciones de pago, catálogo, historial de transacciones</td></tr>
          <tr><td><strong>Tributarios</strong></td><td>Tipo de contribuyente, retenciones aplicadas, comprobantes</td></tr>
        </tbody>
      </table></div>
    </div>

    <div class="section">
      <h2>2. ¿Para qué usamos sus datos?</h2>
      <ul>
        <li>Registro y calificación de proveedores en el sistema SAP.</li>
        <li>Emisión de órdenes de compra, contratos y acuerdos comerciales.</li>
        <li>Gestión de pagos, transferencias bancarias y liquidaciones.</li>
        <li>Aplicación de retenciones en la fuente conforme al SRI.</li>
        <li>Evaluación de desempeño de proveedores (calidad, tiempos de entrega).</li>
        <li>Cumplimiento de controles de debida diligencia y prevención de riesgos.</li>
      </ul>
    </div>

    <div class="section">
      <h2>3. Base legal del tratamiento</h2>
      <div class="table-wrap"><table class="data-table">
        <thead><tr><th>Finalidad</th><th>Base legal (Art. 7 LOPDP)</th></tr></thead>
        <tbody>
          <tr><td>Registro, compra, pago</td><td>Ejecución de relación contractual (num. 2)</td></tr>
          <tr><td>Retenciones, comprobantes SRI</td><td>Cumplimiento de obligación legal tributaria (num. 3)</td></tr>
          <tr><td>Debida diligencia</td><td>Interés legítimo (num. 6)</td></tr>
        </tbody>
      </table></div>
    </div>

    <div class="section">
      <h2>4. ¿Con quién compartimos sus datos?</h2>
      <ul>
        <li>Servicio de Rentas Internas (SRI) — retenciones y comprobantes.</li>
        <li>Instituciones financieras — para procesamiento de pagos.</li>
        <li>Auditores externos — bajo acuerdo de confidencialidad.</li>
        <li>Sistema SAP — como encargado tecnológico del tratamiento.</li>
      </ul>
    </div>

    <div class="section">
      <h2>5. Plazo de conservación</h2>
      <p>Los datos de proveedores se conservan <strong>durante la vigencia de la relación comercial</strong> y por un período adicional de <strong>7 años</strong> tras la última transacción, conforme al Código Tributario del Ecuador y disposiciones del SRI.</p>
    </div>

    <div class="section">
      <h2>6. Sus derechos</h2>
      <p>Como proveedor de EMPRESA, usted o el representante de su empresa puede ejercer derechos sobre los datos personales tratados, accediendo al formulario de solicitud ARCO+.</p>
      <a class="card-link" onclick="showPage('arco')" style="cursor:pointer">Enviar solicitud ARCO+ →</a>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PÁGINA 6: DERECHOS ARCO+ / CONTACTO
     Arts. 19–24 LOPDP — derechos del titular
     Art. 30 LOPDP — procedimiento de ejercicio de derechos
     Plazo de respuesta: 15 días hábiles (Art. 31 LOPDP)
     ═══════════════════════════════════════════════ -->
<div id="page-arco" class="page">
  <div class="page-hero">
    <div class="page-hero-inner">
      <div class="page-hero-tag">Derechos del titular</div>
      <h1>Derechos ARCO+ y Canal de Contacto</h1>
      <p>Ejerza sus derechos sobre sus datos personales. EMPRESA tiene hasta 15 días hábiles para responder su solicitud.</p>
      <div class="law-cite">Arts. 19–24 LOPDP — Derechos del titular · Art. 30 y 31 — Procedimiento y plazos</div>
      <div class="page-actions">
        <a class="btn-secondary" href="#inicio" onclick="showPage('inicio')">Volver al inicio</a>
        <a class="btn-link" href="#politica" onclick="showPage('politica')">Ver política</a>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="alert">
      <div class="alert-title">¿Por qué existe esta página?</div>
      <p>Los Arts. 19 al 24 de la LOPDP reconocen a los titulares derechos fundamentales sobre sus datos. El Art. 30 obliga al responsable del tratamiento a habilitar un canal accesible y gratuito para que los titulares puedan ejercerlos. El Art. 31 establece que la respuesta debe entregarse en un máximo de <strong>15 días hábiles</strong> desde la recepción de la solicitud.</p>
    </div>

    <div class="section">
      <h2>Sus derechos reconocidos por la LOPDP</h2>
      <div class="rights-grid">
        <div class="right-card">
          <div class="right-card-letter">A</div>
          <h4>Acceso</h4>
          <p>Conocer qué datos suyos tiene EMPRESA, para qué los usa y con quién los comparte. Art. 19 LOPDP.</p>
        </div>
        <div class="right-card">
          <div class="right-card-letter">R</div>
          <h4>Rectificación</h4>
          <p>Solicitar la corrección de datos incorrectos, incompletos o desactualizados. Art. 20 LOPDP.</p>
        </div>
        <div class="right-card">
          <div class="right-card-letter">C</div>
          <h4>Cancelación</h4>
          <p>Pedir la eliminación de sus datos cuando ya no sean necesarios o el tratamiento carezca de base legal. Art. 21 LOPDP.</p>
        </div>
        <div class="right-card">
          <div class="right-card-letter">O</div>
          <h4>Oposición</h4>
          <p>Oponerse al tratamiento de sus datos, especialmente para fines de mercadotecnia directa. Art. 22 LOPDP.</p>
        </div>
        <div class="right-card">
          <div class="right-card-letter">P</div>
          <h4>Portabilidad</h4>
          <p>Recibir sus datos en formato estructurado y legible para transferirlos a otro responsable. Art. 23 LOPDP.</p>
        </div>
        <div class="right-card">
          <div class="right-card-letter">L</div>
          <h4>Limitación</h4>
          <p>Solicitar que se restrinja el tratamiento de sus datos mientras se resuelve una impugnación. Art. 24 LOPDP.</p>
        </div>
      </div>
    </div>

    <div class="section">
      <h2>Datos de contacto del Responsable</h2>
      <div class="contact-grid">
        <div class="contact-card">
          <div class="contact-card-label">Responsable del Tratamiento</div>
          <h4>EMPRESA</h4>
          <p>RUC: [XXXXXXXXXX001]<br>[Dirección legal, ciudad, Ecuador]<br>Tel.: [+593 XX XXX XXXX]</p>
        </div>
        <div class="contact-card">
          <div class="contact-card-label">Canal de privacidad</div>
          <h4>Correo de solicitudes</h4>
          <p>privacidad@empresa.com<br><br>Horario de atención: lunes a viernes, 08h00 a 17h00</p>
        </div>
        <div class="contact-card is-interactive" role="button" tabindex="0" onclick="openDpdModal()" onkeydown="handleDpdCardKeydown(event)">
          <div class="contact-card-label">Delegado de Protección de Datos</div>
          <h4>En proceso de designación</h4>
          <p>Conforme al Reglamento DPD (Resolución SPDP-SPD-2025-0028-R). Los datos del DPD serán publicados aquí una vez designado.<br><br><strong style="font-size:14px; color:var(--gold-light); cursor:pointer; text-decoration:underline; align-items: center; ">Pulse para ver más información.</strong></p>
        </div>
        <div class="contact-card">
          <div class="contact-card-label">Autoridad de control</div>
          <h4>Superintendencia de Protección de Datos</h4>
          <p>Si considera que sus derechos no han sido atendidos, puede presentar una reclamación ante la SPDP en <strong>spdp.gob.ec</strong></p>
        </div>
      </div>
    </div>

    <div class="form-card">
      <h3>Formulario de Solicitud ARCO+</h3>
      <p class="form-subtitle">Complete este formulario para ejercer sus derechos. Le responderemos en un máximo de 15 días hábiles. — Art. 31 LOPDP</p>

      <form id="arco-form">
      <div class="form-row">
        <div class="form-group">
          <label>Nombre completo *</label>
          <input type="text" placeholder="Su nombre y apellido" required>
        </div>
        <div class="form-group">
          <label>Cédula / RUC / Pasaporte *</label>
          <input type="text" placeholder="Número de identificación" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label>Correo electrónico *</label>
          <input type="email" placeholder="para enviarle la respuesta" required>
        </div>
        <div class="form-group">
          <label>Teléfono de contacto</label>
          <input type="tel" placeholder="+593 ...">
        </div>
      </div>
      <div class="form-group">
        <label>Relación con EMPRESA *</label>
        <select required>
          <option value="">— Seleccione —</option>
          <option>Empleado o ex empleado</option>
          <option>Cliente</option>
          <option>Vendedor</option>
          <option>Proveedor o representante de proveedor</option>
          <option>Otro</option>
        </select>
      </div>
      <div class="form-group">
        <label>Derecho que desea ejercer *</label>
        <select required>
          <option value="">— Seleccione —</option>
          <option>Acceso — Quiero saber qué datos tienen de mí</option>
          <option>Rectificación — Quiero corregir mis datos</option>
          <option>Cancelación — Quiero eliminar mis datos</option>
          <option>Oposición — Me opongo al tratamiento de mis datos</option>
          <option>Portabilidad — Quiero recibir mis datos en formato electrónico</option>
          <option>Limitación — Quiero restringir el tratamiento de mis datos</option>
        </select>
      </div>
      <div class="form-group">
        <label>Descripción de su solicitud *</label>
        <textarea placeholder="Describa con detalle qué información solicita o qué acción desea que se realice con sus datos..." required></textarea>
      </div>
      <div class="form-check">
        <input type="checkbox" id="confirm-id" required>
        <label for="confirm-id">Confirmo que la información proporcionada es correcta y que soy el titular de los datos o su representante legal autorizado. Entiendo que EMPRESA podrá solicitarme documentos adicionales para verificar mi identidad conforme al Art. 30 de la LOPDP.</label>
      </div>
      <button class="btn-primary" type="submit">Enviar solicitud</button>
      <div id="form-feedback" class="form-feedback" aria-live="polite"></div>
      <p style="margin-top:14px;font-size:12px;color:var(--gray-400);">La presentación de esta solicitud es gratuita. Si no recibe respuesta en el plazo establecido, puede acudir a la Superintendencia de Protección de Datos Personales (SPDP).</p>
      </form>
    </div>
  </div>
</div>

<div id="dpd-info-modal" class="modal-overlay" hidden aria-hidden="true" onclick="closeDpdModal(event)">
  <div class="modal-panel" role="dialog" aria-modal="true" aria-labelledby="dpd-info-title" onclick="event.stopPropagation()">
    <div class="modal-header">
      <div>
        <div class="page-hero-tag">Delegado de Protección de Datos</div>
        <h2 id="dpd-info-title">Rol, perfil y designación del DPD</h2>
        <p>Resumen de quién puede actuar como Delegado de Protección de Datos, qué requisitos debe cumplir y cómo se registra ante la autoridad competente.</p>
      </div>
      <button class="modal-close" type="button" aria-label="Cerrar información sobre el DPD" onclick="closeDpdModal()">×</button>
    </div>
    <div class="modal-body">
      <div class="modal-section">
        <h3>¿Quién es el Delegado de Protección de Datos (DPD)?</h3>
        <p>Es la persona natural encargada de informar al responsable o encargado del tratamiento sobre sus obligaciones legales en materia de protección de datos, así como de velar o supervisar el cumplimiento normativo y cooperar con la Autoridad de Protección de Datos Personales.</p>
      </div>

      <div class="modal-section">
        <h3>Perfil profesional obligatorio</h3>
        <p>Conforme al Art. 55 del Reglamento y la Resolución SPDP-SPD-2025-0028-R, el perfil mínimo del DPD debe cumplir al menos con lo siguiente:</p>
        <div class="table-wrap"><table class="data-table">
          <thead>
            <tr><th>Requisito</th><th>Descripción</th></tr>
          </thead>
          <tbody>
            <tr><td>Titulación</td><td>Título de tercer nivel en Derecho, Sistemas de Información, Comunicación o Tecnologías.</td></tr>
            <tr><td>Experiencia</td><td>Mínimo 5 años de experiencia profesional en la materia.</td></tr>
            <tr><td>Certificación</td><td>Aprobar un programa de profesionalización oficializado por la SPDP.</td></tr>
          </tbody>
        </table></div>
      </div>

      <div class="modal-section">
        <h3>Modalidad de contratación</h3>
        <p>Puede ser contratado bajo relación de dependencia, como empleado interno, o mediante contrato de prestación de servicios, como externo o consultor. En cualquier modalidad, debe garantizar independencia total en el desempeño de sus funciones.</p>
      </div>

      <div class="modal-section">
        <h3>Para grupos empresariales</h3>
        <p>Los grupos empresariales pueden designar un único Delegado de Protección de Datos Personales, siempre que pueda ejecutar sus actividades sin generar conflictos de interés. Esto permite que exista un solo DPD para todo el grupo, no necesariamente uno por cada empresa.</p>
      </div>

      <div class="modal-section">
        <h3>Plazo y registro</h3>
        <p>El nombramiento debe ser inscrito ante la SPDP dentro de los 15 días posteriores a su otorgamiento. Para el sector privado, el plazo general de registro venció el 31 de diciembre de 2025.</p>
      </div>
    </div>
  </div>
</div>

<footer>
  <strong>EMPRESA</strong> — Portal de Privacidad y Protección de Datos Personales<br>
  Cumplimiento de la Ley Orgánica de Protección de Datos Personales (LOPDP) — R.O. N.° 459, 26 de mayo de 2021 · Reglamento General — Decreto Ejecutivo N.° 904, noviembre de 2023
</footer>
</main>

<script>
  const navLinks = document.getElementById('nav-links');
  const navToggle = document.querySelector('.nav-toggle');
  const extraInfoModal = document.getElementById('extra-info-modal');
  const dpdInfoModal = document.getElementById('dpd-info-modal');

  function toggleNav(forceOpen) {
    const shouldOpen = typeof forceOpen === 'boolean' ? forceOpen : !navLinks.classList.contains('is-open');
    navLinks.classList.toggle('is-open', shouldOpen);
    navToggle.setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');
    navToggle.textContent = shouldOpen ? '✕' : '☰';
  }

  function openExtraInfoModal() {
    extraInfoModal.hidden = false;
    extraInfoModal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('modal-open');
  }

  function closeExtraInfoModal(event) {
    if (event && event.target !== extraInfoModal) return;
    extraInfoModal.hidden = true;
    extraInfoModal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('modal-open');
  }

  function openDpdModal() {
    dpdInfoModal.hidden = false;
    dpdInfoModal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('modal-open');
  }

  function closeDpdModal(event) {
    if (event && event.target !== dpdInfoModal) return;
    dpdInfoModal.hidden = true;
    dpdInfoModal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('modal-open');
  }

  function handleDpdCardKeydown(event) {
    if (event.key === 'Enter' || event.key === ' ') {
      event.preventDefault();
      openDpdModal();
    }
  }

  function showPage(id) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.nav-links a').forEach(a => a.classList.remove('active'));
    document.getElementById('page-' + id).classList.add('active');
    const nav = document.getElementById('nav-' + id);
    if (nav) nav.classList.add('active');
    window.location.hash = id;
    if (window.innerWidth <= 640) toggleNav(false);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  document.querySelectorAll('.card[data-page]').forEach(card => {
    card.addEventListener('keydown', (event) => {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        showPage(card.dataset.page);
      }
    });
  });

  window.addEventListener('load', () => {
    const hash = window.location.hash.replace('#', '');
    const allowed = ['inicio', 'politica', 'empleados', 'clientes', 'proveedores', 'arco'];
    if (allowed.includes(hash)) {
      showPage(hash);
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && !extraInfoModal.hidden) {
      closeExtraInfoModal();
    }
    if (event.key === 'Escape' && !dpdInfoModal.hidden) {
      closeDpdModal();
    }
  });

  document.getElementById('arco-form').addEventListener('submit', (event) => {
    event.preventDefault();
    const form = event.currentTarget;
    const feedback = document.getElementById('form-feedback');

    if (!form.checkValidity()) {
      feedback.className = 'form-feedback error is-visible';
      feedback.textContent = 'Complete todos los campos obligatorios y confirme la declaración antes de enviar la solicitud.';
      form.reportValidity();
      return;
    }

    feedback.className = 'form-feedback success is-visible';
    feedback.textContent = 'Solicitud registrada correctamente. EMPRESA deberá responder en un máximo de 15 días hábiles conforme al Art. 31 de la LOPDP.';
    form.reset();
  });
</script>
</body>
</html>
