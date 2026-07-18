<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Pemindah Tenaga | Media Pembelajaran Interaktif</title>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
<style>
  :root {
      --primary:#4361EE;
    --primary-dark:#3651D4;
    --secondary:#8E44AD;

    --success:#22C55E;
    --danger:#EF4444;
    --warning:#F59E0B;

    --surface:#FFFFFF;
    --surface-2:#F8F9FC;

    --text:#1F2937;
    --text-secondary:#6B7280;

    --line:#E5E7EB;
    /* --primary: #1a56db;
    --primary-dark: #1e40af;
    --primary-light: #e8f0fe;
    --secondary: #f59e0b;
    --secondary-light: #fef3c7;
    --success: #10b981;
    --success-light: #d1fae5;
    --danger: #ef4444;
    --danger-light: #fee2e2;
    --warning: #f59e0b;
    --warning-light: #fef3c7;
    --purple: #7c3aed;
    --purple-light: #ede9fe;
    --bg: #f8fafc;
    --surface: #ffffff;
    --text: #1e293b;
    --text-muted: #64748b;
    --text-light: #94a3b8;
    --border: #e2e8f0;
    --radius: 12px;
    --radius-sm: 8px;
    --shadow: 0 1px 3px rgba(0,0,0,0.08), 0 4px 16px rgba(0,0,0,0.04);
    --shadow-lg: 0 8px 32px rgba(0,0,0,0.08); */
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    font-family: 'Inter', sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.6;
  }

  /* NAV */
  nav {
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    position: sticky; top: 0; z-index: 100;
    padding: 0 2rem;
  }
  .nav-inner {
    max-width: 1100px; margin: 0 auto;
    display: flex; align-items: center; gap: 2rem;
    height: 60px;
    gap:40px;
  }
  .nav-logo {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 15px; font-weight: 700;
    color: var(--primary); white-space: nowrap;
    display: flex; align-items: center; gap: 8px;
  }
  .nav-logo span { font-size: 20px; }
  .nav-links {
    display: flex; gap: 0; list-style: none;
    overflow-x: auto; flex: 1;
  }
  .nav-links a {
  display:flex;
   align-items:center;
   justify-content:center;
   padding:16px 24px;
   font-size:14px;
   font-family:'Rajdhani',sans-serif;
   font-weight:600;
   color:#6B7280;
   text-decoration:none;
   border-bottom:3px solid transparent;
   transition:.3s;
   white-space:nowrap;
  }
  .nav-links a:hover, .nav-links a.active { background: var(--primary-light); color: var(--primary); }
  .progress-bar {
    position: fixed; top: 60px; left: 0; right: 0;
    height: 3px; background: var(--border); z-index: 99;
  }
  .progress-fill {
    height: 100%; background: var(--primary);
    transition: width 0.3s; width: 0%;
  }

  /* HERO */
  .hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    color: white; padding: 4rem 2rem 3rem;
    text-align: center;
  }
  .hero-badge {
    display: inline-block; background: rgba(255,255,255,0.2);
    padding: 4px 16px; border-radius: 20px;
    font-size: 12px; font-weight: 500; margin-bottom: 1.5rem;
    border: 1px solid rgba(255,255,255,0.3);
  }
  .hero h1 {
    font-family: 'Rajdhani', sans-serif;
    font-size: clamp(1.8rem, 4vw, 2.8rem);
    font-weight: 700; margin-bottom: 1rem;
  }
  .hero p {
    font-size: 1.05rem; opacity: 0.85;
    max-width: 600px; margin: 0 auto 2rem;
  }
  .hero-stats {
    display: flex; justify-content: center; gap: 3rem;
    flex-wrap: wrap;
  }
  .hero-stat { text-align: center; }
  .hero-stat .num { font-size: 1.8rem; font-weight: 700; font-family: 'Space Grotesk', sans-serif; }
  .hero-stat .lbl { font-size: 12px; opacity: 0.7; }

  /* LAYOUT */
  .container { max-width: 1100px; margin: 0 auto; padding: 2rem; }

  /* SECTION */
  .section { margin-bottom: 3rem; }
  .section-header {
    display: flex; align-items: center; gap: 12px;
    margin-bottom: 1.5rem;
  }
  .section-icon {
    width: 40px; height: 40px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; flex-shrink: 0;
  }
  .section-title {
    font-family: 'Rajdhani', sans-serif;
    font-size: 1.3rem; font-weight: 700;
  }
  .section-sub { font-size: 13px; color: var(--text-muted); }

  /* CARDS */
  .card {
    background: var(--surface); border-radius: var(--radius);
    border: 1px solid var(--border); box-shadow: var(--shadow);
    padding: 1.5rem;
    transition: box-shadow 0.2s;
  }
  .card:hover { box-shadow: var(--shadow-lg); }

  /* GRID */
  .grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem; }
  .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; }
  .grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; }

  /* ALUR / FLOW */
  .flow-container {
    display: flex; align-items: center; flex-wrap: wrap;
    gap: 0; background: var(--surface);
    border-radius: var(--radius); border: 1px solid var(--border);
    padding: 1.5rem; overflow-x: auto;
  }
  .flow-item {
    display: flex; flex-direction: column; align-items: center;
    text-align: center; min-width: 100px; flex: 1;
    cursor: pointer;
    position: relative;
  }
  .flow-icon-wrap {
    width: 56px; height: 56px; border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 26px; margin-bottom: 8px;
    transition: transform 0.2s;
  }
  .flow-item:hover .flow-icon-wrap { transform: scale(1.1); }
  .flow-label { font-size: 12px; font-weight: 600; color: var(--text); }
  .flow-sub { font-size: 11px; color: var(--text-muted); }
  .flow-arrow { font-size: 18px; color: var(--text-light); padding: 0 8px; flex-shrink: 0; }
  .flow-tooltip {
    display: none; position: absolute; top: calc(100% + 8px); left: 50%;
    transform: translateX(-50%); background: #1e293b; color: white;
    font-size: 11px; padding: 8px 12px; border-radius: 8px;
    width: 180px; z-index: 10; text-align: left; line-height: 1.5;
    pointer-events: none;
  }
  .flow-item:hover .flow-tooltip { display: block; }

  /* KOMPONEN CARDS */
  .komponen-card {
    background: var(--surface); border-radius: var(--radius);
    border: 1px solid var(--border);
    overflow: hidden; transition: all 0.2s;
    cursor: pointer;
  }
  .komponen-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-2px); }
  .komponen-header {
    padding: 1rem 1.25rem 0.75rem;
    display: flex; align-items: center; gap: 10px;
  }
  .komponen-icon { font-size: 28px; }
  .komponen-name { font-weight: 600; font-size: 15px; }
  .komponen-type { font-size: 11px; color: var(--text-muted); }
  .komponen-body { padding: 0 1.25rem 1.25rem; }
  .komponen-desc { font-size: 13px; color: var(--text-muted); margin-bottom: 0.75rem; line-height: 1.6; }
  .komponen-list { list-style: none; }
  .komponen-list li {
    font-size: 12px; padding: 3px 0;
    display: flex; align-items: flex-start; gap: 6px; color: var(--text);
  }
  .komponen-list li::before { content: '▸'; color: var(--primary); font-size: 10px; margin-top: 2px; flex-shrink: 0; }
  .komponen-expand { display: none; }
  .komponen-card.expanded .komponen-expand { display: block; }

  /* BADGE */
  .badge {
    display: inline-block; padding: 3px 10px;
    border-radius: 20px; font-size: 11px; font-weight: 600;
  }
  .badge-blue { background: var(--primary-light); color: var(--primary-dark); }
  .badge-green { background: var(--success-light); color: #065f46; }
  .badge-amber { background: var(--warning-light); color: #92400e; }
  .badge-red { background: var(--danger-light); color: #991b1b; }
  .badge-purple { background: var(--purple-light); color: #5b21b6; }

  /* GANGGUAN TABLE */
  .gangguan-tabs {
    display: flex; gap: 8px; margin-bottom: 1rem; flex-wrap: wrap;
  }
  .gangguan-tab {
    padding: 6px 16px; border-radius: 20px;
    border: 1px solid var(--border); background: var(--surface);
    font-size: 13px; cursor: pointer; transition: all 0.2s;
    font-weight: 500;
  }
  .gangguan-tab.active { background: var(--primary); color: white; border-color: var(--primary); }
  .gangguan-panel { display: none; }
  .gangguan-panel.active { display: block; }
  .gangguan-table { width: 100%; border-collapse: collapse; }
  .gangguan-table th {
    background: var(--bg); text-align: left;
    padding: 10px 14px; font-size: 12px; font-weight: 600;
    color: var(--text-muted); text-transform: uppercase;
    letter-spacing: 0.05em; border-bottom: 1px solid var(--border);
  }
  .gangguan-table td { padding: 12px 14px; font-size: 13px; border-bottom: 1px solid var(--border); }
  .gangguan-table tr:last-child td { border-bottom: none; }
  .gangguan-table tr:hover td { background: var(--bg); }
  .severity { display: flex; align-items: center; gap: 4px; }
  .severity-dot { width: 8px; height: 8px; border-radius: 50%; }

  /* DIAGRAM PRINSIP */
  .prinsip-visual {
    display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;
    align-items: start;
  }
  .prinsip-step {
    display: flex; gap: 12px; align-items: flex-start;
    padding: 12px; border-radius: var(--radius-sm);
    transition: background 0.2s; cursor: pointer;
  }
  .prinsip-step:hover { background: var(--bg); }
  .step-num {
    width: 28px; height: 28px; border-radius: 50%;
    background: var(--primary); color: white;
    display: flex; align-items: center; justify-content: center;
    font-size: 13px; font-weight: 700; flex-shrink: 0;
  }
  .step-content h4 { font-size: 14px; font-weight: 600; margin-bottom: 4px; }
  .step-content p { font-size: 12px; color: var(--text-muted); line-height: 1.5; }

  /* ANIMASI MESIN */
  .engine-visual {
    background: #0f172a; border-radius: var(--radius);
    padding: 2rem; text-align: center;
    color: white; position: relative; overflow: hidden;
  }
  .engine-title { font-size: 13px; color: #94a3b8; margin-bottom: 1.5rem; font-weight: 500; }
  .power-flow {
    display: flex; align-items: center; justify-content: center;
    gap: 0; flex-wrap: wrap;
  }
  .pf-box {
    background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12);
    border-radius: 10px; padding: 12px 16px; text-align: center;
    min-width: 80px;
  }
  .pf-icon { font-size: 24px; margin-bottom: 4px; }
  .pf-label { font-size: 11px; color: #cbd5e1; font-weight: 500; }
  .pf-arrow {
    color: #3b82f6; font-size: 20px; padding: 0 8px;
    animation: pulse-arrow 1.5s ease-in-out infinite;
  }
  @keyframes pulse-arrow {
    0%, 100% { opacity: 0.4; transform: translateX(0); }
    50% { opacity: 1; transform: translateX(3px); }
  }
  .pf-active {
    background: rgba(59,130,246,0.2); border-color: rgba(59,130,246,0.5);
  }

  /* QUIZ */
  .quiz-container {
    background: var(--surface); border-radius: var(--radius);
    border: 1px solid var(--border);
  }
  .quiz-header { padding: 1.25rem 1.5rem; border-bottom: 1px solid var(--border); }
  .quiz-progress-wrap { display: flex; align-items: center; gap: 12px; }
  .quiz-progress-track {
    flex: 1; height: 6px; background: var(--border); border-radius: 3px; overflow: hidden;
  }
  .quiz-progress-inner { height: 100%; background: var(--primary); border-radius: 3px; transition: width 0.5s; }
  .quiz-counter { font-size: 12px; color: var(--text-muted); white-space: nowrap; }
  .quiz-body { padding: 1.5rem; }
  .quiz-q { font-size: 16px; font-weight: 600; margin-bottom: 1.25rem; line-height: 1.5; }
  .quiz-options { display: flex; flex-direction: column; gap: 10px; }
  .quiz-opt {
    padding: 12px 16px; border-radius: var(--radius-sm);
    border: 1.5px solid var(--border); cursor: pointer;
    transition: all 0.2s; font-size: 14px; text-align: left;
    background: var(--surface);
  }
  .quiz-opt:hover { border-color: var(--primary); background: var(--primary-light); color: var(--primary-dark); }
  .quiz-opt.correct { border-color: var(--success); background: var(--success-light); color: #065f46; }
  .quiz-opt.wrong { border-color: var(--danger); background: var(--danger-light); color: #991b1b; }
  .quiz-opt.disabled { cursor: default; pointer-events: none; }
  .quiz-feedback {
    margin-top: 1rem; padding: 12px 16px; border-radius: var(--radius-sm);
    font-size: 14px; display: none;
  }
  .quiz-feedback.show { display: block; }
  .quiz-feedback.ok { background: var(--success-light); color: #065f46; border: 1px solid #a7f3d0; }
  .quiz-feedback.fail { background: var(--danger-light); color: #991b1b; border: 1px solid #fecaca; }
  .quiz-footer { padding: 1rem 1.5rem; border-top: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; }
  .btn {
    padding: 10px 20px; border-radius: var(--radius-sm);
    border: none; cursor: pointer; font-size: 14px; font-weight: 500;
    transition: all 0.2s; font-family: 'Inter', sans-serif;
  }
  .btn-primary { background: var(--primary); color: white; }
  .btn-primary:hover { background: var(--primary-dark); }
  .btn-outline { background: transparent; border: 1.5px solid var(--border); color: var(--text); }
  .btn-outline:hover { border-color: var(--primary); color: var(--primary); }
  .btn:disabled { opacity: 0.5; cursor: default; }
  .quiz-score {
    text-align: center; padding: 2rem;
  }
  .score-circle {
    width: 100px; height: 100px; border-radius: 50%;
    border: 6px solid var(--success); display: flex;
    flex-direction: column; align-items: center; justify-content: center;
    margin: 0 auto 1rem; background: var(--success-light);
  }
  .score-num { font-size: 2rem; font-weight: 700; color: var(--success); font-family: 'Space Grotesk', sans-serif; }
  .score-lbl { font-size: 11px; color: var(--text-muted); }

  /* PERAWATAN STEPS */
  .perawatan-tabs { display: flex; gap: 8px; margin-bottom: 1.5rem; flex-wrap: wrap; }
  .perawatan-tab {
    padding: 8px 18px; border-radius: 20px;
    border: 1.5px solid var(--border); background: var(--surface);
    font-size: 13px; cursor: pointer; transition: all 0.2s; font-weight: 500;
  }
  .perawatan-tab.active { background: var(--success); color: white; border-color: var(--success); }
  .perawatan-panel { display: none; }
  .perawatan-panel.active { display: block; }
  .step-card {
    display: flex; gap: 14px; padding: 14px;
    border-radius: var(--radius-sm); background: var(--bg);
    margin-bottom: 10px; align-items: flex-start;
  }
  .step-badge {
    width: 32px; height: 32px; border-radius: 50%;
    background: var(--success); color: white;
    display: flex; align-items: center; justify-content: center;
    font-size: 14px; font-weight: 700; flex-shrink: 0;
  }
  .step-info h4 { font-size: 14px; font-weight: 600; margin-bottom: 3px; }
  .step-info p { font-size: 12px; color: var(--text-muted); }
  .step-tool {
    display: inline-block; background: var(--primary-light);
    color: var(--primary-dark); font-size: 11px; font-weight: 500;
    padding: 2px 8px; border-radius: 4px; margin-top: 4px;
  }

  /* ALAT */
  .alat-card {
    display: flex; align-items: center; gap: 12px;
    padding: 12px 14px; background: var(--surface);
    border-radius: var(--radius-sm); border: 1px solid var(--border);
    transition: all 0.2s;
  }
  .alat-card:hover { border-color: var(--primary); background: var(--primary-light); }
  .alat-icon { font-size: 24px; flex-shrink: 0; }
  .alat-name { font-size: 14px; font-weight: 500; }
  .alat-use { font-size: 12px; color: var(--text-muted); }

  /* APD */
  .apd-card {
    text-align: center; padding: 1.25rem;
    background: var(--surface); border-radius: var(--radius);
    border: 1px solid var(--border);
  }
  .apd-icon { font-size: 36px; margin-bottom: 8px; }
  .apd-name { font-size: 13px; font-weight: 600; margin-bottom: 4px; }
  .apd-why { font-size: 12px; color: var(--text-muted); }

  /* FOOTER */
  footer {
    background: #1e293b; color: #94a3b8;
    text-align: center; padding: 2rem;
    margin-top: 4rem; font-size: 13px;
  }
  footer strong { color: white; }

  /* GLOSARIUM */
  .glos-item {
    padding: 14px 0; border-bottom: 1px solid var(--border);
  }
  .glos-item:last-child { border-bottom: none; }
  .glos-term { font-weight: 600; font-size: 15px; margin-bottom: 4px; display: flex; align-items: center; gap: 8px; }
  .glos-def { font-size: 13px; color: var(--text-muted); }

  /* SECTION divider */
  .divider { border: none; border-top: 1px solid var(--border); margin: 2rem 0; }

  /* Scroll padding */
  section { scroll-margin-top: 80px; }

  /* Responsive */
  @media (max-width: 600px) {
    .prinsip-visual { grid-template-columns: 1fr; }
    .hero-stats { gap: 1.5rem; }
    .nav-links { display: none; }
    .hero { padding: 2.5rem 1rem 2rem; }
    .container { padding: 1.25rem; }
  }

.tabnav{
    position:sticky;
    top:0;
    background:#fff;
    z-index:999;
    overflow-x:auto;
    white-space:nowrap;
    box-shadow:0 2px 6px rgba(0,0,0,.1);
}

.tabnav-inner{
  max-width:1100px;
  margin:0 auto;
  gap:4px;
  overflow-x:auto;
  padding:0 16px;
  scrollbar-width:none;
  display:flex;
  justify-content:center;
}

.tabbtn{
    display:flex;
    align-items:center;
    justify-content:center;
    min-width:200px;   /* tambahkan */
    min-height:100px;   /* tambahkan */
    padding:20px 30px;
    font-size:1.1rem;
    font-weight:700;
    color:#6B7280;
    text-decoration:none;
    border-bottom:3px solid transparent;
    transition:.3s;
}
.tabnav-inner::-webkit-scrollbar{
  display:none;
}

.tabbtn:hover{
  color:#3843A9;
}

.tabbtn.active{
  color:#4361EE;
  border-bottom:3px solid #4361EE;
}
</style>
</head>

<div class="progress-bar"><div class="progress-fill" id="progressFill"></div></div>

<!-- HERO -->
<div class="hero">
  <div class="hero-badge">📚 Media Pembelajaran Teknik Sepeda Motor | Kelas XI</div>
  <h1>Sistem Pemindah Tenaga</h1>
  <p>Pelajari bagaimana mesin sepeda motor menggerakkan roda belakang melalui sistem yang terstruktur dan efisien — dari kopling hingga sprocket.</p>
  <div class="hero-stats">
    <div class="hero-stat"><div class="num">12</div><div class="lbl">Bab Materi</div></div>
    <div class="hero-stat"><div class="num">4</div><div class="lbl">Sub-Sistem</div></div>
    <div class="hero-stat"><div class="num">15</div><div class="lbl">Soal Latihan</div></div>
    <div class="hero-stat"><div class="num">K3</div><div class="lbl">Fokus Keselamatan</div></div>
  </div>
</div>

<nav class="tabnav">
  <div class="tabnav-inner" id="tabnav">
      <ul class="nav-links">
      <li><a href="#pengantar" onclick="scrollTo('pengantar')">Pengantar</a></li>
      <li><a href="#alur" onclick="scrollTo('alur')">Alur Kerja</a></li>
      <li><a href="#komponen" onclick="scrollTo('komponen')">Komponen</a></li>
      <li><a href="#gangguan" onclick="scrollTo('gangguan')">Gangguan</a></li>
      <li><a href="#diagnosis" onclick="scrollTo('diagnosis')">Diagnosis</a></li>
      <li><a href="#perawatan" onclick="scrollTo('perawatan')">Perawatan</a></li>
      <li><a href="#k3" onclick="scrollTo('k3')">K3</a></li>
      <li><a href="/kuis/3" onclick="scrollTo('quiz')">Quiz</a></li>
      <li><a href="{{ route('dashboard.siswa') }}" onclick="scrollTo('dashboard')">Dashboard</a></li>
    </ul>
  </div>
</nav>

<div class="container">

<!-- ===================== PENGANTAR ===================== -->
<section id="pengantar" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#e8f0fe">🔧</div>
    <div>
      <div class="section-title">Pengertian & Fungsi</div>
      <div class="section-sub">Apa itu Sistem Pemindah Tenaga dan kenapa penting?</div>
    </div>
  </div>

  <div class="grid-2">
    <div class="card">
      <h3 style="font-size:15px;margin-bottom:10px;display:flex;align-items:center;gap:8px">
        <span style="font-size:20px">💡</span> Apa itu SPT?
      </h3>
      <p style="font-size:14px;color:var(--text-muted);margin-bottom:12px;line-height:1.7">
        <strong style="color:var(--text)">Sistem Pemindah Tenaga (SPT)</strong> adalah serangkaian komponen pada sepeda motor yang berfungsi <em>memindahkan tenaga dari mesin menuju roda belakang</em>, sehingga kendaraan dapat bergerak.
      </p>
      <p style="font-size:14px;color:var(--text-muted);line-height:1.7">
        Tanpa SPT, putaran mesin tidak dapat sampai ke roda — seperti mobil dengan mesin menyala tapi tidak ada girboks!
      </p>
    </div>
    <div class="card">
      <h3 style="font-size:15px;margin-bottom:10px;display:flex;align-items:center;gap:8px">
        <span style="font-size:20px">✅</span> Fungsi Utama SPT
      </h3>
      <div style="display:flex;flex-direction:column;gap:8px">
        <div style="display:flex;gap:10px;align-items:flex-start">
          <span style="background:var(--primary-light);color:var(--primary);width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;flex-shrink:0">1</span>
          <div><strong style="font-size:13px">Menyalurkan tenaga mesin</strong> ke roda belakang secara efisien</div>
        </div>
        <div style="display:flex;gap:10px;align-items:flex-start">
          <span style="background:var(--primary-light);color:var(--primary);width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;flex-shrink:0">2</span>
          <div><strong style="font-size:13px">Mengatur kecepatan</strong> dan torsi sesuai kebutuhan berkendara</div>
        </div>
        <div style="display:flex;gap:10px;align-items:flex-start">
          <span style="background:var(--primary-light);color:var(--primary);width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;flex-shrink:0">3</span>
          <div><strong style="font-size:13px">Memungkinkan kendaraan berhenti</strong> tanpa mematikan mesin</div>
        </div>
        <div style="display:flex;gap:10px;align-items:flex-start">
          <span style="background:var(--primary-light);color:var(--primary);width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;flex-shrink:0">4</span>
          <div><strong style="font-size:13px">Membantu akselerasi</strong> kendaraan di berbagai kondisi jalan</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Visual alur sederhana -->
  <div class="engine-visual" style="margin-top:1rem">
    <div class="engine-title">⚡ Alur Tenaga dari Mesin ke Roda</div>
    <div class="power-flow">
      <div class="pf-box pf-active">
        <div class="pf-icon">🔥</div>
        <div class="pf-label">Mesin</div>
      </div>
      <div class="pf-arrow">→</div>
      <div class="pf-box pf-active">
        <div class="pf-icon">🔘</div>
        <div class="pf-label">Kopling</div>
      </div>
      <div class="pf-arrow">→</div>
      <div class="pf-box pf-active">
        <div class="pf-icon">⚙️</div>
        <div class="pf-label">Transmisi</div>
      </div>
      <div class="pf-arrow">→</div>
      <div class="pf-box pf-active">
        <div class="pf-icon">🔗</div>
        <div class="pf-label">Sprocket + Rantai</div>
      </div>
      <div class="pf-arrow">→</div>
      <div class="pf-box pf-active">
        <div class="pf-icon">🛞</div>
        <div class="pf-label">Roda Belakang</div>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== ALUR KERJA ===================== -->
<section id="alur" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#d1fae5">🔄</div>
    <div>
      <div class="section-title">Prinsip & Alur Kerja SPT</div>
      <div class="section-sub">Arahkan kursor ke setiap komponen untuk detail prosesnya</div>
    </div>
  </div>

  <div class="card" style="margin-bottom:1rem">
    <div style="font-size:13px;color:var(--text-muted);margin-bottom:1rem;padding:10px;background:var(--bg);border-radius:8px">
      💡 <strong>Cara baca:</strong> Tenaga bergerak dari kiri ke kanan. Arahkan kursor ke setiap blok untuk melihat penjelasan detailnya.
    </div>
    <div class="flow-container">
      <div class="flow-item">
        <div class="flow-icon-wrap" style="background:#fee2e2">🔥</div>
        <div class="flow-label">Mesin</div>
        <div class="flow-sub">Sumber tenaga</div>
        <div class="flow-tooltip">
          <strong>Mesin (Engine)</strong><br>
          Mengubah energi kimia bahan bakar menjadi energi mekanik berupa putaran poros engkol (crankshaft). RPM menentukan seberapa cepat putaran ini.
        </div>
      </div>
      <div class="flow-arrow">▶</div>
      <div class="flow-item">
        <div class="flow-icon-wrap" style="background:#fef3c7">🔘</div>
        <div class="flow-label">Kopling</div>
        <div class="flow-sub">Penghubung/pemutus</div>
        <div class="flow-tooltip">
          <strong>Kopling (Clutch)</strong><br>
          Menghubungkan atau memutus tenaga dari mesin ke transmisi. Saat tuas ditarik → tenaga terputus. Saat dilepas → tenaga tersambung.
        </div>
      </div>
      <div class="flow-arrow">▶</div>
      <div class="flow-item">
        <div class="flow-icon-wrap" style="background:#e8f0fe">⚙️</div>
        <div class="flow-label">Transmisi</div>
        <div class="flow-sub">Pengatur rasio gigi</div>
        <div class="flow-tooltip">
          <strong>Transmisi (Gearbox)</strong><br>
          Mengatur perbandingan putaran dan torsi. Gigi rendah = torsi besar (untuk tanjakan). Gigi tinggi = kecepatan tinggi (untuk jalan lurus).
        </div>
      </div>
      <div class="flow-arrow">▶</div>
      <div class="flow-item">
        <div class="flow-icon-wrap" style="background:#d1fae5">🦷</div>
        <div class="flow-label">Sprocket Depan</div>
        <div class="flow-sub">Pinion gear</div>
        <div class="flow-tooltip">
          <strong>Sprocket Depan (Drive Sprocket)</strong><br>
          Roda gigi kecil yang terhubung ke output poros transmisi. Jumlah giginya lebih sedikit untuk menghasilkan momen putar yang lebih besar.
        </div>
      </div>
      <div class="flow-arrow">▶</div>
      <div class="flow-item">
        <div class="flow-icon-wrap" style="background:#ede9fe">🔗</div>
        <div class="flow-label">Rantai</div>
        <div class="flow-sub">Penghubung</div>
        <div class="flow-tooltip">
          <strong>Rantai (Drive Chain)</strong><br>
          Menghubungkan sprocket depan dan belakang. Harus dijaga kekencangannya (free play 15-25mm) dan dilumasi rutin agar tidak aus.
        </div>
      </div>
      <div class="flow-arrow">▶</div>
      <div class="flow-item">
        <div class="flow-icon-wrap" style="background:#fce7f3">🦷</div>
        <div class="flow-label">Sprocket Belakang</div>
        <div class="flow-sub">Driven sprocket</div>
        <div class="flow-tooltip">
          <strong>Sprocket Belakang (Driven Sprocket)</strong><br>
          Roda gigi besar yang dipasang di roda belakang. Rasio dengan sprocket depan menentukan perbandingan akhir kecepatan kendaraan.
        </div>
      </div>
      <div class="flow-arrow">▶</div>
      <div class="flow-item">
        <div class="flow-icon-wrap" style="background:#f1f5f9">🛞</div>
        <div class="flow-label">Roda Belakang</div>
        <div class="flow-sub">Output akhir</div>
        <div class="flow-tooltip">
          <strong>Roda Belakang (Rear Wheel)</strong><br>
          Menerima putaran dari sprocket belakang dan menggerakkan kendaraan. Kecepatan roda bergantung pada seluruh rantai sistem ini.
        </div>
      </div>
    </div>
  </div>

  <!-- Kopling detail -->
  <div class="grid-2" style="margin-top:1rem">
    <div class="card">
      <h4 style="font-size:14px;font-weight:600;margin-bottom:12px;display:flex;align-items:center;gap:8px">
        🔘 Cara Kerja Kopling
      </h4>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px">
        <div style="background:#d1fae5;border-radius:10px;padding:12px">
          <div style="font-size:12px;font-weight:700;color:#065f46;margin-bottom:6px">✅ TUAS DILEPAS (tersambung)</div>
          <ul style="font-size:12px;color:#047857;padding-left:1rem">
            <li>Pegas menekan kampas</li>
            <li>Kampas & plat bergesekan</li>
            <li>Tenaga mengalir ke transmisi</li>
            <li>Kendaraan dapat bergerak</li>
          </ul>
        </div>
        <div style="background:#fee2e2;border-radius:10px;padding:12px">
          <div style="font-size:12px;font-weight:700;color:#991b1b;margin-bottom:6px">🚫 TUAS DITARIK (terputus)</div>
          <ul style="font-size:12px;color:#b91c1c;padding-left:1rem">
            <li>Tekanan kampas terlepas</li>
            <li>Tidak ada gesekan</li>
            <li>Tenaga mesin terputus</li>
            <li>Gigi bisa dipindah</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <h4 style="font-size:14px;font-weight:600;margin-bottom:12px;display:flex;align-items:center;gap:8px">
        ⚙️ Perbandingan Gigi Transmisi
      </h4>
      <div style="overflow-x:auto">
        <table style="width:100%;border-collapse:collapse;font-size:12px">
          <tr style="background:var(--bg)">
            <th style="padding:8px;text-align:left;border-bottom:1px solid var(--border)">Gigi</th>
            <th style="padding:8px;text-align:center;border-bottom:1px solid var(--border)">Torsi</th>
            <th style="padding:8px;text-align:center;border-bottom:1px solid var(--border)">Kecepatan</th>
            <th style="padding:8px;text-align:left;border-bottom:1px solid var(--border)">Penggunaan</th>
          </tr>
          <tr><td style="padding:8px">Gigi 1</td><td style="padding:8px;text-align:center">⬛⬛⬛⬛⬛</td><td style="padding:8px;text-align:center">⬜⬜⬜⬜⬜</td><td style="padding:8px;color:var(--text-muted)">Start, tanjakan curam</td></tr>
          <tr style="background:var(--bg)"><td style="padding:8px">Gigi 2</td><td style="padding:8px;text-align:center">⬛⬛⬛⬛⬜</td><td style="padding:8px;text-align:center">⬛⬜⬜⬜⬜</td><td style="padding:8px;color:var(--text-muted)">Akselerasi awal</td></tr>
          <tr><td style="padding:8px">Gigi 3</td><td style="padding:8px;text-align:center">⬛⬛⬛⬜⬜</td><td style="padding:8px;text-align:center">⬛⬛⬜⬜⬜</td><td style="padding:8px;color:var(--text-muted)">Kecepatan sedang</td></tr>
          <tr style="background:var(--bg)"><td style="padding:8px">Gigi 4</td><td style="padding:8px;text-align:center">⬛⬛⬜⬜⬜</td><td style="padding:8px;text-align:center">⬛⬛⬛⬜⬜</td><td style="padding:8px;color:var(--text-muted)">Jalan dalam kota</td></tr>
          <tr><td style="padding:8px">Gigi 5</td><td style="padding:8px;text-align:center">⬛⬜⬜⬜⬜</td><td style="padding:8px;text-align:center">⬛⬛⬛⬛⬛</td><td style="padding:8px;color:var(--text-muted)">Jalan tol, highway</td></tr>
        </table>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== KOMPONEN ===================== -->
<section id="komponen" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#ede9fe">🔩</div>
    <div>
      <div class="section-title">Komponen Utama SPT</div>
      <div class="section-sub">Klik setiap kartu untuk melihat detail komponen lebih lengkap</div>
    </div>
  </div>

  <div class="grid-2">
    <!-- KOPLING -->
    <div class="komponen-card" onclick="toggleKomponen(this)">
      <div class="komponen-header" style="border-bottom:2px solid #e8f0fe">
        <div class="komponen-icon">🔘</div>
        <div>
          <div class="komponen-name">Sistem Kopling</div>
          <div class="komponen-type"><span class="badge badge-blue">Penghubung/Pemutus Tenaga</span></div>
        </div>
        <span style="margin-left:auto;font-size:18px;color:var(--text-light)" class="toggle-icon">＋</span>
      </div>
      <div class="komponen-body">
        <p class="komponen-desc">Kopling berfungsi menghubungkan dan memutus tenaga dari mesin ke transmisi, memungkinkan perpindahan gigi tanpa menghentikan mesin.</p>
        <div class="komponen-expand">
          <div style="margin-bottom:10px">
            <strong style="font-size:13px">Jenis Kopling:</strong>
            <div style="display:flex;gap:8px;margin-top:6px;flex-wrap:wrap">
              <div style="background:var(--primary-light);padding:8px 12px;border-radius:8px;font-size:12px">
                <strong style="color:var(--primary)">Manual</strong><br>
                <span style="color:var(--text-muted)">Dioperasikan tuas di stang kiri. Digunakan pada motor bebek & sport.</span>
              </div>
              <div style="background:var(--warning-light);padding:8px 12px;border-radius:8px;font-size:12px">
                <strong style="color:#92400e">Otomatis (Sentrifugal)</strong><br>
                <span style="color:var(--text-muted)">Bekerja otomatis berdasarkan gaya sentrifugal putaran mesin. Motor matic.</span>
              </div>
            </div>
          </div>
          <strong style="font-size:13px">Komponen Kopling Manual:</strong>
          <ul class="komponen-list" style="margin-top:6px">
            <li><strong>Kampas kopling</strong> — lapisan gesekan yang menghubungkan tenaga</li>
            <li><strong>Plat kopling</strong> — berpasangan dengan kampas, menghantarkan putaran</li>
            <li><strong>Rumah kopling (outer clutch)</strong> — tempat kampas berputar bebas</li>
            <li><strong>Pegas kopling</strong> — menekan agar kampas & plat selalu tersambung</li>
            <li><strong>Pressure plate</strong> — menekan susunan kampas & plat</li>
          </ul>
          <div style="margin-top:10px;padding:10px;background:var(--bg);border-radius:8px;font-size:12px">
            <strong>🔍 Spesifikasi Perawatan:</strong><br>
            Ketebalan minimum kampas kopling: <strong>2.5 mm</strong> (jika lebih tipis, segera ganti). Periksa setelan bebas tuas kopling: <strong>10–20 mm</strong>.
          </div>
        </div>
      </div>
    </div>

    <!-- TRANSMISI -->
    <div class="komponen-card" onclick="toggleKomponen(this)">
      <div class="komponen-header" style="border-bottom:2px solid #fef3c7">
        <div class="komponen-icon">⚙️</div>
        <div>
          <div class="komponen-name">Sistem Transmisi</div>
          <div class="komponen-type"><span class="badge badge-amber">Pengatur Rasio Gigi</span></div>
        </div>
        <span style="margin-left:auto;font-size:18px;color:var(--text-light)" class="toggle-icon">＋</span>
      </div>
      <div class="komponen-body">
        <p class="komponen-desc">Transmisi mengatur perbandingan putaran dan torsi dari mesin agar sesuai dengan kondisi dan kebutuhan berkendara.</p>
        <div class="komponen-expand">
          <div style="margin-bottom:10px">
            <strong style="font-size:13px">Jenis Transmisi:</strong>
            <div style="display:flex;gap:8px;margin-top:6px;flex-wrap:wrap">
              <div style="background:var(--primary-light);padding:8px 12px;border-radius:8px;font-size:12px">
                <strong style="color:var(--primary)">Manual (Constant Mesh)</strong><br>
                <span style="color:var(--text-muted)">4–6 tingkat gigi. Pengendara yang mengatur. Motor sport & bebek.</span>
              </div>
              <div style="background:var(--warning-light);padding:8px 12px;border-radius:8px;font-size:12px">
                <strong style="color:#92400e">CVT (Otomatis)</strong><br>
                <span style="color:var(--text-muted)">Continuously Variable Transmission. Rasio berubah otomatis. Motor matic.</span>
              </div>
            </div>
          </div>
          <strong style="font-size:13px">Komponen Transmisi Manual:</strong>
          <ul class="komponen-list" style="margin-top:6px">
            <li><strong>Gear transmisi</strong> — pasangan gigi dengan rasio berbeda tiap tingkat</li>
            <li><strong>Main shaft (poros utama)</strong> — menerima putaran dari kopling</li>
            <li><strong>Counter shaft</strong> — meneruskan putaran ke sprocket depan</li>
            <li><strong>Shift drum</strong> — mengatur posisi gigi yang aktif</li>
            <li><strong>Shift fork</strong> — menggeser posisi gear atas perintah shift drum</li>
          </ul>
          <div style="margin-top:10px;padding:10px;background:var(--bg);border-radius:8px;font-size:12px">
            <strong>🔍 Info CVT:</strong><br>
            Komponen utama CVT: Drive pulley (primer), V-belt, Driven pulley (sekunder), dan roller. V-belt diganti setiap <strong>25.000–30.000 km</strong>.
          </div>
        </div>
      </div>
    </div>

    <!-- SPROCKET & RANTAI -->
    <div class="komponen-card" onclick="toggleKomponen(this)">
      <div class="komponen-header" style="border-bottom:2px solid #d1fae5">
        <div class="komponen-icon">🔗</div>
        <div>
          <div class="komponen-name">Sprocket & Rantai</div>
          <div class="komponen-type"><span class="badge badge-green">Final Drive System</span></div>
        </div>
        <span style="margin-left:auto;font-size:18px;color:var(--text-light)" class="toggle-icon">＋</span>
      </div>
      <div class="komponen-body">
        <p class="komponen-desc">Sprocket dan rantai menyalurkan tenaga dari transmisi ke roda belakang sebagai tahap akhir sistem pemindah tenaga.</p>
        <div class="komponen-expand">
          <strong style="font-size:13px">Jenis & Spesifikasi:</strong>
          <ul class="komponen-list" style="margin-top:6px">
            <li><strong>Sprocket depan (drive sprocket)</strong> — 13–17 gigi, lebih kecil, RPM tinggi</li>
            <li><strong>Sprocket belakang (driven sprocket)</strong> — 36–48 gigi, lebih besar, torsi tinggi</li>
            <li><strong>Rantai tipe 420, 428, 520, 530</strong> — angka menunjukkan jarak pitch dan lebar</li>
          </ul>
          <div style="margin-top:10px">
            <strong style="font-size:13px">Rasio Sprocket & Dampaknya:</strong>
            <div style="display:flex;gap:8px;margin-top:6px;flex-wrap:wrap">
              <div style="background:#d1fae5;padding:8px 12px;border-radius:8px;font-size:12px;flex:1">
                <strong style="color:#065f46">Gigi belakang ↑ lebih banyak</strong><br>
                Torsi naik, top speed turun → cocok off-road
              </div>
              <div style="background:#e8f0fe;padding:8px 12px;border-radius:8px;font-size:12px;flex:1">
                <strong style="color:var(--primary-dark)">Gigi belakang ↓ lebih sedikit</strong><br>
                Top speed naik, torsi turun → cocok highway
              </div>
            </div>
          </div>
          <div style="margin-top:10px;padding:10px;background:var(--bg);border-radius:8px;font-size:12px">
            <strong>🔍 Standar Perawatan Rantai:</strong><br>
            Kelonggaran rantai yang tepat: <strong>15–25 mm</strong> (ukur di tengah sisi bawah rantai). Lumasi setiap <strong>500–1000 km</strong> dengan chain lube.
          </div>
        </div>
      </div>
    </div>

    <!-- APD & Alat -->
    <div class="komponen-card" onclick="toggleKomponen(this)">
      <div class="komponen-header" style="border-bottom:2px solid #ede9fe">
        <div class="komponen-icon">🛠️</div>
        <div>
          <div class="komponen-name">Alat Servis Khusus</div>
          <div class="komponen-type"><span class="badge badge-purple">Special Service Tools</span></div>
        </div>
        <span style="margin-left:auto;font-size:18px;color:var(--text-light)" class="toggle-icon">＋</span>
      </div>
      <div class="komponen-body">
        <p class="komponen-desc">Alat khusus diperlukan agar pekerjaan servis sistem pemindah tenaga dapat dilakukan dengan tepat, aman, dan tidak merusak komponen.</p>
        <div class="komponen-expand">
          <div class="grid-2" style="margin-top:8px;gap:8px">
            <div class="alat-card">
              <div class="alat-icon">🔧</div>
              <div><div class="alat-name">Clutch Holder</div><div class="alat-use">Menahan rumah kopling saat dibuka</div></div>
            </div>
            <div class="alat-card">
              <div class="alat-icon">⛓️</div>
              <div><div class="alat-name">Chain Breaker</div><div class="alat-use">Memutus & menyambung rantai</div></div>
            </div>
            <div class="alat-card">
              <div class="alat-icon">🔩</div>
              <div><div class="alat-name">Torque Wrench</div><div class="alat-use">Mengencangkan baut sesuai spek (Nm)</div></div>
            </div>
            <div class="alat-card">
              <div class="alat-icon">📏</div>
              <div><div class="alat-name">Feeler Gauge</div><div class="alat-use">Mengukur celah & clearance komponen</div></div>
            </div>
            <div class="alat-card">
              <div class="alat-icon">📐</div>
              <div><div class="alat-name">Vernier Caliper</div><div class="alat-use">Mengukur ketebalan kampas kopling</div></div>
            </div>
            <div class="alat-card">
              <div class="alat-icon">📋</div>
              <div><div class="alat-name">Service Manual</div><div class="alat-use">Referensi spesifikasi & prosedur resmi</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== GANGGUAN ===================== -->
<section id="gangguan" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#fee2e2">⚠️</div>
    <div>
      <div class="section-title">Tanda Gangguan & Penyebab</div>
      <div class="section-sub">Kenali gejala awal kerusakan agar bisa segera ditangani</div>
    </div>
  </div>

  <div class="card">
    <div class="gangguan-tabs">
      <button class="gangguan-tab active" onclick="switchGangguan(this,'g-kopling')">🔘 Sistem Kopling</button>
      <button class="gangguan-tab" onclick="switchGangguan(this,'g-transmisi')">⚙️ Sistem Transmisi</button>
      <button class="gangguan-tab" onclick="switchGangguan(this,'g-rantai')">🔗 Rantai & Sprocket</button>
    </div>

    <div id="g-kopling" class="gangguan-panel active">
      <table class="gangguan-table">
        <tr><th>Gejala</th><th>Penyebab</th><th>Tingkat Keparahan</th><th>Penanganan</th></tr>
        <tr>
          <td>🔄 Kopling selip — motor kehilangan tenaga saat gas dibuka</td>
          <td>Kampas kopling aus (< 2,5 mm)</td>
          <td><div class="severity"><div class="severity-dot" style="background:#ef4444"></div><span class="badge badge-red">Segera</span></div></td>
          <td>Ganti kampas kopling</td>
        </tr>
        <tr>
          <td>😣 Perpindahan gigi keras, tidak halus</td>
          <td>Setelan kabel kopling terlalu kencang / longgar</td>
          <td><div class="severity"><div class="severity-dot" style="background:#f59e0b"></div><span class="badge badge-amber">Sedang</span></div></td>
          <td>Setel ulang kabel & free play</td>
        </tr>
        <tr>
          <td>⚡ Motor terasa tidak bertenaga padahal gas penuh</td>
          <td>Pegas kopling lemah / patah</td>
          <td><div class="severity"><div class="severity-dot" style="background:#ef4444"></div><span class="badge badge-red">Segera</span></div></td>
          <td>Ganti pegas kopling (set)</td>
        </tr>
        <tr>
          <td>🔊 Bunyi kasar dari area mesin saat kopling dilepas</td>
          <td>Rumah kopling aus / bosh aus</td>
          <td><div class="severity"><div class="severity-dot" style="background:#f59e0b"></div><span class="badge badge-amber">Sedang</span></div></td>
          <td>Periksa & ganti rumah kopling</td>
        </tr>
        <tr>
          <td>🚫 Kopling menempel, motor melaju walau tuas ditarik</td>
          <td>Kampas kopling basah oli berlebih / plat lengket</td>
          <td><div class="severity"><div class="severity-dot" style="background:#ef4444"></div><span class="badge badge-red">Segera</span></div></td>
          <td>Bersihkan & periksa seal oli</td>
        </tr>
      </table>
    </div>

    <div id="g-transmisi" class="gangguan-panel">
      <table class="gangguan-table">
        <tr><th>Gejala</th><th>Penyebab</th><th>Tingkat Keparahan</th><th>Penanganan</th></tr>
        <tr>
          <td>😤 Gigi sulit masuk atau harus dipaksa</td>
          <td>Shift fork bengkok / aus</td>
          <td><div class="severity"><div class="severity-dot" style="background:#ef4444"></div><span class="badge badge-red">Segera</span></div></td>
          <td>Bongkar & ganti shift fork</td>
        </tr>
        <tr>
          <td>🔊 Suara kasar/berisik dari area transmisi</td>
          <td>Gear transmisi aus / rusak</td>
          <td><div class="severity"><div class="severity-dot" style="background:#f59e0b"></div><span class="badge badge-amber">Sedang</span></div></td>
          <td>Ganti gear yang aus</td>
        </tr>
        <tr>
          <td>⬆️ Gigi loncat sendiri ke netral</td>
          <td>Alur gear aus, stopper lemah</td>
          <td><div class="severity"><div class="severity-dot" style="background:#ef4444"></div><span class="badge badge-red">Segera</span></div></td>
          <td>Ganti gear & return spring</td>
        </tr>
        <tr>
          <td>📳 Getaran berlebih dari mesin</td>
          <td>Bearing transmisi aus / rusak</td>
          <td><div class="severity"><div class="severity-dot" style="background:#f59e0b"></div><span class="badge badge-amber">Sedang</span></div></td>
          <td>Ganti bearing transmisi</td>
        </tr>
        <tr>
          <td>💧 Oli transmisi bocor</td>
          <td>Seal oli aus / cover bocor</td>
          <td><div class="severity"><div class="severity-dot" style="background:#10b981"></div><span class="badge badge-green">Ringan</span></div></td>
          <td>Ganti seal & gasket</td>
        </tr>
      </table>
    </div>

    <div id="g-rantai" class="gangguan-panel">
      <table class="gangguan-table">
        <tr><th>Gejala</th><th>Penyebab</th><th>Tingkat Keparahan</th><th>Penanganan</th></tr>
        <tr>
          <td>😟 Rantai kendor berlebih (> 30 mm)</td>
          <td>Setelan chain adjuster berubah / rantai memanjang</td>
          <td><div class="severity"><div class="severity-dot" style="background:#f59e0b"></div><span class="badge badge-amber">Sedang</span></div></td>
          <td>Setel ketegangan atau ganti rantai</td>
        </tr>
        <tr>
          <td>🔊 Bunyi "krik-krik" atau berisik</td>
          <td>Rantai kurang pelumasan / kering</td>
          <td><div class="severity"><div class="severity-dot" style="background:#10b981"></div><span class="badge badge-green">Ringan</span></div></td>
          <td>Lumasi dengan chain lube</td>
        </tr>
        <tr>
          <td>💀 Tarikan motor tersendat-sendat</td>
          <td>Rantai aus / link rusak</td>
          <td><div class="severity"><div class="severity-dot" style="background:#ef4444"></div><span class="badge badge-red">Segera</span></div></td>
          <td>Ganti rantai baru</td>
        </tr>
        <tr>
          <td>😱 Rantai lepas saat jalan</td>
          <td>Sprocket sangat aus, rantai terlalu longgar</td>
          <td><div class="severity"><div class="severity-dot" style="background:#ef4444"></div><span class="badge badge-red">Darurat</span></div></td>
          <td>Ganti 1 set: rantai + kedua sprocket</td>
        </tr>
        <tr>
          <td>🔴 Sprocket bergigi tajam / runcing (shark teeth)</td>
          <td>Sprocket aus akibat pemakaian lama</td>
          <td><div class="severity"><div class="severity-dot" style="background:#f59e0b"></div><span class="badge badge-amber">Segera rencanakan</span></div></td>
          <td>Ganti sprocket (selalu sepaket dengan rantai)</td>
        </tr>
      </table>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== DIAGNOSIS ===================== -->
<section id="diagnosis" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#fef3c7">🔍</div>
    <div>
      <div class="section-title">Prosedur Diagnosis Kerusakan</div>
      <div class="section-sub">Langkah sistematis untuk menemukan sumber masalah</div>
    </div>
  </div>

  <div class="grid-3" style="margin-bottom:1rem">
    <div class="card" style="border-top:3px solid var(--primary)">
      <div style="font-size:28px;margin-bottom:8px">👁️</div>
      <h4 style="font-weight:600;margin-bottom:8px">1. Pemeriksaan Visual</h4>
      <p style="font-size:13px;color:var(--text-muted);margin-bottom:10px">Lihat kondisi fisik komponen tanpa membongkar</p>
      <ul class="komponen-list">
        <li>Periksa kondisi & warna oli (hitam pekat = sudah lama)</li>
        <li>Amati keausan sprocket (cek profil gigi)</li>
        <li>Periksa kondisi rantai (karat, link aus)</li>
        <li>Cek kebocoran oli di area mesin</li>
        <li>Periksa kondisi kabel kopling (jumbai / putus)</li>
      </ul>
    </div>
    <div class="card" style="border-top:3px solid var(--warning)">
      <div style="font-size:28px;margin-bottom:8px">🚦</div>
      <h4 style="font-weight:600;margin-bottom:8px">2. Pemeriksaan Fungsi</h4>
      <p style="font-size:13px;color:var(--text-muted);margin-bottom:10px">Uji kerja komponen secara langsung</p>
      <ul class="komponen-list">
        <li>Uji perpindahan gigi (halus/kasar?)</li>
        <li>Uji kerja kopling (tarikan tuas normal?)</li>
        <li>Dengarkan suara abnormal saat jalan</li>
        <li>Cek tarikan kendaraan (ada slip/tersendat?)</li>
        <li>Uji akselerasi di berbagai tingkat gigi</li>
      </ul>
    </div>
    <div class="card" style="border-top:3px solid var(--success)">
      <div style="font-size:28px;margin-bottom:8px">📏</div>
      <h4 style="font-weight:600;margin-bottom:8px">3. Pengukuran Presisi</h4>
      <p style="font-size:13px;color:var(--text-muted);margin-bottom:10px">Ukur dimensi komponen dengan alat ukur</p>
      <ul class="komponen-list">
        <li>Tebal kampas kopling (min. 2,5 mm)</li>
        <li>Free play tuas kopling (10–20 mm)</li>
        <li>Kelonggaran rantai (15–25 mm)</li>
        <li>Keausan sprocket (ukur diameter)</li>
        <li>Torsi pengencangan baut (sesuai spek)</li>
      </ul>
    </div>
  </div>

  <!-- Flowchart diagnosis interaktif -->
  <div class="card" style="background:var(--bg)">
    <h4 style="font-weight:600;margin-bottom:1rem;font-size:15px">🧭 Diagram Alur Diagnosis Cepat</h4>
    <div style="overflow-x:auto">
      <div style="min-width:600px">
        <div style="text-align:center;margin-bottom:1rem">
          <div style="display:inline-block;background:var(--primary);color:white;padding:10px 24px;border-radius:20px;font-weight:600;font-size:13px">
            Keluhan: Motor bermasalah
          </div>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px">
          <div style="background:var(--surface);border-radius:10px;padding:14px;border:1px solid var(--border)">
            <div style="font-size:12px;color:var(--text-muted);margin-bottom:6px">❓ Jika gejala:</div>
            <div style="font-size:13px;font-weight:600;margin-bottom:8px;color:var(--danger)">Motor tidak mau gerak / kopling selip</div>
            <div style="font-size:12px;color:var(--text-muted)">Periksa → kopling → kampas aus → ganti</div>
          </div>
          <div style="background:var(--surface);border-radius:10px;padding:14px;border:1px solid var(--border)">
            <div style="font-size:12px;color:var(--text-muted);margin-bottom:6px">❓ Jika gejala:</div>
            <div style="font-size:13px;font-weight:600;margin-bottom:8px;color:var(--warning)">Gigi susah masuk / loncat</div>
            <div style="font-size:12px;color:var(--text-muted)">Periksa → transmisi → shift fork/gear aus → ganti</div>
          </div>
          <div style="background:var(--surface);border-radius:10px;padding:14px;border:1px solid var(--border)">
            <div style="font-size:12px;color:var(--text-muted);margin-bottom:6px">❓ Jika gejala:</div>
            <div style="font-size:13px;font-weight:600;margin-bottom:8px;color:var(--success)">Tarikan tersendat / rantai berisik</div>
            <div style="font-size:12px;color:var(--text-muted)">Periksa → rantai/sprocket → lumasi atau ganti</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== PERAWATAN ===================== -->
<section id="perawatan" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#d1fae5">🛠️</div>
    <div>
      <div class="section-title">Prosedur Perawatan & Perbaikan</div>
      <div class="section-sub">Langkah-langkah perawatan berkala yang benar</div>
    </div>
  </div>

  <div class="perawatan-tabs">
    <button class="perawatan-tab active" onclick="switchPerawatan(this,'p-kopling')">🔘 Kopling</button>
    <button class="perawatan-tab" onclick="switchPerawatan(this,'p-transmisi')">⚙️ Transmisi</button>
    <button class="perawatan-tab" onclick="switchPerawatan(this,'p-rantai')">🔗 Rantai & Sprocket</button>
  </div>

  <div id="p-kopling" class="perawatan-panel active">
    <div class="grid-2">
      <div>
        <h4 style="font-size:14px;font-weight:600;margin-bottom:12px;color:var(--text-muted)">PERAWATAN RUTIN</h4>
        <div class="step-card">
          <div class="step-badge">1</div>
          <div class="step-info">
            <h4>Periksa Setelan Bebas Tuas Kopling</h4>
            <p>Ukur jarak bebas (free play) tuas kopling di ujung: harus 10–20 mm. Jika terlalu kencang atau longgar, putar adjuster.</p>
            <span class="step-tool">🔧 Kunci pas 10mm + penggaris</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge">2</div>
          <div class="step-info">
            <h4>Ganti Oli Mesin Berkala</h4>
            <p>Kopling basah terendam oli. Kualitas oli memengaruhi performa kopling. Gunakan oli SAE yang direkomendasikan pabrik.</p>
            <span class="step-tool">⏱️ Setiap 2.000–3.000 km</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge">3</div>
          <div class="step-info">
            <h4>Periksa Kabel Kopling</h4>
            <p>Cek kondisi kabel: tidak putus, tidak karatan, tidak tertekuk. Lumasi kabel dengan chain lube atau oli ringan.</p>
            <span class="step-tool">🔍 Pemeriksaan visual + pelumas</span>
          </div>
        </div>
      </div>
      <div>
        <h4 style="font-size:14px;font-weight:600;margin-bottom:12px;color:var(--text-muted)">PERBAIKAN (jika rusak)</h4>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">1</div>
          <div class="step-info">
            <h4>Bongkar Penutup Kopling</h4>
            <p>Tiriskan oli, lepas baut cover kopling. Buka dengan urutan silang untuk menghindari melengkung.</p>
            <span class="step-tool">🔩 Kunci socket + torque wrench</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">2</div>
          <div class="step-info">
            <h4>Ukur Ketebalan Kampas</h4>
            <p>Gunakan vernier caliper. Kampas kurang dari 2,5 mm harus diganti. Ganti satu set lengkap (semua kampas).</p>
            <span class="step-tool">📐 Vernier caliper</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">3</div>
          <div class="step-info">
            <h4>Pasang & Setel Ulang</h4>
            <p>Pasang kampas baru, kencangkan baut sesuai torsi spesifikasi. Isi oli mesin, setel free play kopling.</p>
            <span class="step-tool">🔩 Torque wrench (8–10 Nm)</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="p-transmisi" class="perawatan-panel">
    <div class="grid-2">
      <div>
        <h4 style="font-size:14px;font-weight:600;margin-bottom:12px;color:var(--text-muted)">PERAWATAN RUTIN</h4>
        <div class="step-card">
          <div class="step-badge">1</div>
          <div class="step-info">
            <h4>Ganti Oli Transmisi</h4>
            <p>Pada motor dengan oli transmisi terpisah (motor sport tertentu), ganti sesuai jadwal pabrikan.</p>
            <span class="step-tool">⏱️ Setiap 5.000–10.000 km</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge">2</div>
          <div class="step-info">
            <h4>Uji Perpindahan Gigi</h4>
            <p>Coba semua tingkat gigi: harus halus dan tidak ada suara kasar. Perhatikan apakah gigi loncat sendiri.</p>
            <span class="step-tool">🔍 Uji jalan berkala</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge">3</div>
          <div class="step-info">
            <h4>Periksa Pedal Gigi</h4>
            <p>Pastikan pedal tidak bengkok, baut pengikat kencang, dan gerakan pedal tidak tersendat.</p>
            <span class="step-tool">🔧 Kunci pas</span>
          </div>
        </div>
      </div>
      <div>
        <h4 style="font-size:14px;font-weight:600;margin-bottom:12px;color:var(--text-muted)">PERBAIKAN (jika rusak)</h4>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">1</div>
          <div class="step-info">
            <h4>Bongkar Mesin (Engine Disassembly)</h4>
            <p>Transmisi terintegrasi dalam mesin. Bongkar menggunakan panduan service manual resmi merk kendaraan.</p>
            <span class="step-tool">📋 Service manual wajib dibaca dulu</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">2</div>
          <div class="step-info">
            <h4>Identifikasi Komponen Rusak</h4>
            <p>Periksa visual setiap gear, shift fork, shift drum, dan bearing. Ukur keausan dengan alat ukur.</p>
            <span class="step-tool">📐 Vernier caliper + feeler gauge</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">3</div>
          <div class="step-info">
            <h4>Ganti & Rakit Ulang</h4>
            <p>Ganti komponen yang aus. Rakit ulang sesuai urutan di service manual. Perhatikan torsi pengencangan.</p>
            <span class="step-tool">🔩 Torque wrench</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="p-rantai" class="perawatan-panel">
    <div class="grid-2">
      <div>
        <h4 style="font-size:14px;font-weight:600;margin-bottom:12px;color:var(--text-muted)">PERAWATAN RUTIN</h4>
        <div class="step-card">
          <div class="step-badge">1</div>
          <div class="step-info">
            <h4>Bersihkan Rantai</h4>
            <p>Gunakan sikat khusus rantai dan cairan pembersih/kerosene. Bersihkan kotoran dan sisa pelumas lama.</p>
            <span class="step-tool">⏱️ Setiap 500–1.000 km</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge">2</div>
          <div class="step-info">
            <h4>Lumasi Rantai</h4>
            <p>Semprotkan chain lube ke sisi dalam rantai (bagian yang menyentuh sprocket) saat rantai dalam kondisi bersih.</p>
            <span class="step-tool">🧴 Chain lube spray</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge">3</div>
          <div class="step-info">
            <h4>Periksa & Setel Ketegangan</h4>
            <p>Ukur kelonggaran rantai di titik tengah bawah: standar 15–25 mm. Putar chain adjuster secara simetris.</p>
            <span class="step-tool">📏 Penggaris + kunci ring 12mm</span>
          </div>
        </div>
      </div>
      <div>
        <h4 style="font-size:14px;font-weight:600;margin-bottom:12px;color:var(--text-muted)">PERBAIKAN (jika rusak)</h4>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">1</div>
          <div class="step-info">
            <h4>Putus & Lepas Rantai Lama</h4>
            <p>Gunakan chain breaker tool untuk memutus link pin. Lepas rantai dari kedua sprocket.</p>
            <span class="step-tool">⛓️ Chain breaker tool</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">2</div>
          <div class="step-info">
            <h4>Ganti Sprocket (jika perlu)</h4>
            <p>Jika gigi sprocket sudah runcing (shark teeth), ganti sprocket depan dan belakang sepaket dengan rantai baru.</p>
            <span class="step-tool">🔧 Kunci socket + impact driver</span>
          </div>
        </div>
        <div class="step-card">
          <div class="step-badge" style="background:var(--danger)">3</div>
          <div class="step-info">
            <h4>Pasang Rantai Baru & Setel Alignment</h4>
            <p>Pasang rantai baru, sambung dengan master link. Setel ketegangan dan periksa alignment roda belakang lurus.</p>
            <span class="step-tool">📏 Chain alignment tool / penggaris</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== K3 ===================== -->
<section id="k3" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#fee2e2">🦺</div>
    <div>
      <div class="section-title">Keselamatan Kerja (K3)</div>
      <div class="section-sub">Keselamatan adalah prioritas utama sebelum mulai bekerja</div>
    </div>
  </div>

  <div class="grid-2" style="margin-bottom:1rem">
    <div class="card" style="border-left:4px solid var(--danger)">
      <h4 style="font-size:14px;font-weight:600;margin-bottom:12px">🦺 Alat Pelindung Diri (APD)</h4>
      <div class="grid-2" style="gap:10px">
        <div class="apd-card">
          <div class="apd-icon">🧤</div>
          <div class="apd-name">Sarung Tangan</div>
          <div class="apd-why">Melindungi tangan dari oli, benda tajam, dan panas</div>
        </div>
        <div class="apd-card">
          <div class="apd-icon">👟</div>
          <div class="apd-name">Sepatu Safety</div>
          <div class="apd-why">Melindungi kaki dari tertimpa komponen berat</div>
        </div>
        <div class="apd-card">
          <div class="apd-icon">🥽</div>
          <div class="apd-name">Kacamata Kerja</div>
          <div class="apd-why">Mencegah serpihan dan percikan oli masuk mata</div>
        </div>
        <div class="apd-card">
          <div class="apd-icon">👔</div>
          <div class="apd-name">Pakaian Kerja</div>
          <div class="apd-why">Mencegah pakaian tersangkut komponen berputar</div>
        </div>
      </div>
    </div>
    <div class="card" style="border-left:4px solid var(--warning)">
      <h4 style="font-size:14px;font-weight:600;margin-bottom:12px">⚠️ Prosedur Keselamatan Servis</h4>
      <ul class="komponen-list" style="gap:8px;display:flex;flex-direction:column">
        <li><strong>Matikan mesin dan tunggu dingin</strong> sebelum memulai pekerjaan</li>
        <li><strong>Gunakan standar tengah (center stand)</strong> agar motor stabil</li>
        <li><strong>Hindari oli tercecer</strong> — siapkan bak tampung dan kain lap</li>
        <li><strong>Jangan merokok</strong> di dekat kendaraan (bahan bakar mudah terbakar)</li>
        <li><strong>Beri label setiap komponen</strong> yang dilepas agar tidak tertukar</li>
        <li><strong>Gunakan service manual</strong> resmi sebagai panduan standar torsi</li>
        <li><strong>Rapikan area kerja</strong> setelah selesai — lantai licin berbahaya</li>
      </ul>
    </div>
  </div>

  <div class="card" style="background:var(--warning-light);border-color:var(--warning)">
    <div style="display:flex;gap:12px;align-items:flex-start">
      <span style="font-size:28px">💡</span>
      <div>
        <h4 style="font-weight:600;margin-bottom:6px;color:#92400e">Tips Tindak Lanjut Setelah Servis</h4>
        <p style="font-size:13px;color:#78350f;line-height:1.7">
          Setelah selesai perbaikan, selalu lakukan <strong>uji jalan</strong> di area aman untuk memastikan sistem bekerja normal. 
          Dokumentasikan hasil servis: jenis kerusakan, komponen yang diganti, tanggal servis, dan km saat servis. 
          Informasikan kepada pemilik kendaraan: jadwal pelumasan rantai, cara penggunaan kopling yang benar, dan jadwal penggantian oli berikutnya.
        </p>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== GLOSARIUM ===================== -->
<section id="glosarium" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#f1f5f9">📖</div>
    <div>
      <div class="section-title">Glosarium Istilah Teknik</div>
      <div class="section-sub">Kamus istilah penting dalam sistem pemindah tenaga</div>
    </div>
  </div>
  <div class="card">
    <div class="glos-item">
      <div class="glos-term"><span class="badge badge-blue">Clutch</span> Kopling</div>
      <div class="glos-def">Komponen yang menghubungkan dan memutus aliran tenaga dari mesin ke sistem transmisi. Bekerja berdasarkan mekanisme gesekan.</div>
    </div>
    <div class="glos-item">
      <div class="glos-term"><span class="badge badge-amber">CVT</span> Continuously Variable Transmission</div>
      <div class="glos-def">Jenis transmisi otomatis yang mengubah rasio secara terus-menerus (tidak bertahap). Digunakan pada sepeda motor matic. Menggunakan V-belt dan pulley yang dapat berubah diameter.</div>
    </div>
    <div class="glos-item">
      <div class="glos-term"><span class="badge badge-green">Torsi</span> Torque</div>
      <div class="glos-def">Gaya putar yang dihasilkan mesin. Diukur dalam Newton-meter (Nm). Torsi besar diperlukan saat start atau menanjak. Berbanding terbalik dengan kecepatan dalam sistem transmisi.</div>
    </div>
    <div class="glos-item">
      <div class="glos-term"><span class="badge badge-purple">Rasio Gigi</span> Gear Ratio</div>
      <div class="glos-def">Perbandingan antara jumlah putaran gigi penggerak dengan gigi yang digerakkan. Contoh: rasio 3:1 berarti gigi input berputar 3 kali agar gigi output berputar 1 kali.</div>
    </div>
    <div class="glos-item">
      <div class="glos-term"><span class="badge badge-red">Shift Fork</span> Garpu Pemindah</div>
      <div class="glos-def">Komponen berbentuk garpu yang menggeser posisi gear transmisi saat pengendara mengoper gigi. Bila aus, perpindahan gigi jadi keras atau tidak bisa masuk.</div>
    </div>
    <div class="glos-item">
      <div class="glos-term"><span class="badge badge-blue">Free Play</span> Jarak Bebas</div>
      <div class="glos-def">Jarak gerak komponen (tuas kopling, pedal gas) sebelum mulai bekerja. Setelan free play kopling yang benar: 10–20 mm di ujung tuas.</div>
    </div>
    <div class="glos-item">
      <div class="glos-term"><span class="badge badge-green">Chain Pitch</span> Jarak Link Rantai</div>
      <div class="glos-def">Jarak antara dua pin rantai yang berdekatan. Kode rantai (420, 428, 520) menunjukkan pitch dan lebar. Rantai dengan pitch berbeda tidak bisa dipasang pada sprocket yang berbeda pitch.</div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== QUIZ ===================== -->
<section id="quiz" class="section">
  <div class="section-header">
    <div class="section-icon" style="background:#ede9fe">🎯</div>
    <div>
      <div class="section-title">Latihan Soal Interaktif</div>
      <div class="section-sub">Uji pemahamanmu dengan 15 soal pilihan ganda</div>
    </div>
  </div>

  <div class="quiz-container" id="quizBox">
    <div class="quiz-header">
      <div class="quiz-progress-wrap">
        <span style="font-size:13px;font-weight:500;color:var(--text)">Soal</span>
        <div class="quiz-progress-track"><div class="quiz-progress-inner" id="qProgress"></div></div>
        <span class="quiz-counter" id="qCounter">1 / 15</span>
      </div>
    </div>
    <div class="quiz-body">
      <div class="quiz-q" id="quizQ"></div>
      <div class="quiz-options" id="quizOpts"></div>
      <div class="quiz-feedback" id="quizFeedback"></div>
    </div>
    <div class="quiz-footer">
      <div style="font-size:13px;color:var(--text-muted)">Skor: <strong id="scoreDisplay">0</strong></div>
      <button class="btn btn-primary" id="nextBtn" onclick="nextQuestion()" disabled>Soal Berikutnya →</button>
    </div>
  </div>

  <div id="quizResult" style="display:none">
    <div class="card quiz-score">
      <div class="score-circle" id="scoreCircle">
        <div class="score-num" id="finalScore">0</div>
        <div class="score-lbl">/ 15</div>
      </div>
      <h3 style="margin-bottom:8px;font-family:'Space Grotesk',sans-serif" id="scoreMsg">Hasil Kamu</h3>
      <p style="font-size:14px;color:var(--text-muted);margin-bottom:1.5rem" id="scoreDesc"></p>
      <button class="btn btn-primary" onclick="restartQuiz()">🔄 Ulangi Quiz</button>
    </div>
  </div>
</section>

</div>

<footer>
  <strong>Sistem Pemindah Tenaga</strong> — Media Pembelajaran Interaktif<br>
  Teknik Sepeda Motor | Sekolah Menengah Kejuruan<br>
  <span style="font-size:11px;margin-top:4px;display:block">Materi ini mencakup kopling, transmisi, sprocket, rantai, diagnosis, perawatan, dan K3</span>
</footer>

<script>
// Progress bar
window.addEventListener('scroll', () => {
  const h = document.documentElement.scrollHeight - window.innerHeight;
  const p = (window.scrollY / h) * 100;
  document.getElementById('progressFill').style.width = p + '%';
});

// Smooth scroll
function scrollTo(id) {
  document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' });
}

// Komponen toggle
function toggleKomponen(card) {
  const isOpen = card.classList.contains('expanded');
  document.querySelectorAll('.komponen-card').forEach(c => {
    c.classList.remove('expanded');
    c.querySelector('.toggle-icon').textContent = '＋';
  });
  if (!isOpen) {
    card.classList.add('expanded');
    card.querySelector('.toggle-icon').textContent = '－';
  }
}

// Gangguan tabs
function switchGangguan(btn, panelId) {
  document.querySelectorAll('.gangguan-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.gangguan-panel').forEach(p => p.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById(panelId).classList.add('active');
}

// Perawatan tabs
function switchPerawatan(btn, panelId) {
  document.querySelectorAll('.perawatan-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.perawatan-panel').forEach(p => p.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById(panelId).classList.add('active');
}

// QUIZ DATA
const questions = [
  {
    q: "Apa fungsi utama sistem pemindah tenaga pada sepeda motor?",
    opts: ["Mengatur bahan bakar yang masuk ke mesin","Memindahkan tenaga dari mesin ke roda belakang","Mendinginkan mesin sepeda motor","Mengatur sistem pengapian motor"],
    ans: 1,
    exp: "Sistem pemindah tenaga berfungsi memindahkan tenaga yang dihasilkan mesin menuju roda belakang agar kendaraan dapat bergerak."
  },
  {
    q: "Komponen yang berfungsi menghubungkan dan memutus tenaga dari mesin ke transmisi adalah...",
    opts: ["Rantai penggerak","Sprocket belakang","Kopling","Shift fork"],
    ans: 2,
    exp: "Kopling (clutch) berfungsi khusus untuk menghubungkan dan memutus aliran tenaga dari mesin ke sistem transmisi, terutama saat perpindahan gigi."
  },
  {
    q: "Saat tuas kopling ditarik, apa yang terjadi pada aliran tenaga mesin?",
    opts: ["Tenaga mesin bertambah besar","Tenaga mesin diteruskan ke transmisi","Aliran tenaga mesin terputus","Transmisi berpindah gigi secara otomatis"],
    ans: 2,
    exp: "Ketika tuas kopling ditarik, tekanan pegas pada kampas kopling terlepas sehingga gesekan antara kampas dan plat hilang, mengakibatkan aliran tenaga mesin terputus."
  },
  {
    q: "Pada gigi transmisi rendah (gigi 1), kondisi yang dihasilkan adalah...",
    opts: ["Kecepatan tinggi, torsi rendah","Torsi besar, kecepatan rendah","Torsi rendah, kecepatan rendah","Kecepatan tinggi, torsi besar"],
    ans: 1,
    exp: "Gigi rendah menghasilkan rasio perbandingan yang besar, sehingga torsi yang diteruskan ke roda besar (cocok untuk start dan tanjakan), namun kecepatan maksimalnya rendah."
  },
  {
    q: "Kelonggaran rantai (free play) yang direkomendasikan untuk sepeda motor adalah...",
    opts: ["5–10 mm","15–25 mm","30–40 mm","50–60 mm"],
    ans: 1,
    exp: "Standar kelonggaran rantai adalah 15–25 mm diukur di bagian tengah sisi bawah rantai. Terlalu kencang mempercepat keausan; terlalu longgar berisiko lepas."
  },
  {
    q: "Gejala kopling selip ditandai dengan...",
    opts: ["Perpindahan gigi terlalu mudah","Motor kehilangan tenaga walaupun gas dibuka penuh","Rantai penggerak berbunyi berisik","Suara kasar dari area knalpot"],
    ans: 1,
    exp: "Kopling selip terjadi ketika kampas kopling sudah aus sehingga tidak mampu meneruskan tenaga mesin dengan sempurna. Motor terasa tidak bertenaga meski gas dibuka penuh."
  },
  {
    q: "Komponen apa yang harus digunakan untuk memutus dan menyambung rantai sepeda motor?",
    opts: ["Tang biasa","Chain breaker tool","Obeng minus","Kunci inggris"],
    ans: 1,
    exp: "Chain breaker tool (alat pemutus rantai) adalah alat khusus yang dirancang untuk mendorong keluar pin link rantai tanpa merusak komponen. Penggunaan tang biasa dapat merusak link rantai."
  },
  {
    q: "CVT (Continuously Variable Transmission) pada motor matic bekerja dengan cara...",
    opts: ["Perpindahan gigi dilakukan pengendara secara manual","Rasio berubah otomatis berdasarkan putaran mesin dan kebutuhan","Menggunakan rantai seperti motor bebek biasa","Hanya memiliki dua tingkat gigi"],
    ans: 1,
    exp: "CVT menggunakan sistem pulley yang dapat berubah diameter dan V-belt. Ketika putaran mesin naik, gaya sentrifugal menggerakkan roller sehingga diameter pulley berubah, mengubah rasio secara otomatis."
  },
  {
    q: "Ketebalan minimum kampas kopling yang masih diperbolehkan adalah...",
    opts: ["1,0 mm","2,5 mm","5,0 mm","7,5 mm"],
    ans: 1,
    exp: "Ketebalan minimum kampas kopling yang masih dapat digunakan adalah 2,5 mm. Di bawah angka ini, kampas harus diganti karena sudah tidak mampu menghasilkan gesekan yang cukup."
  },
  {
    q: "Fungsi shift fork (garpu pemindah) dalam sistem transmisi adalah...",
    opts: ["Menampung oli transmisi","Menggeser posisi gear transmisi saat perpindahan gigi","Menghubungkan transmisi dengan kopling","Mengatur tekanan oli mesin"],
    ans: 1,
    exp: "Shift fork bekerja atas perintah shift drum untuk menggeser posisi sliding gear ke kiri atau kanan, sehingga terhubung dengan gear tingkat yang diinginkan pengendara."
  },
  {
    q: "Sprocket belakang yang bergigi runcing seperti hiu (shark teeth) menandakan...",
    opts: ["Sprocket masih dalam kondisi baik","Sprocket memerlukan pelumasan tambahan","Sprocket sudah aus dan harus diganti","Sprocket terlalu kencang dipasang"],
    ans: 2,
    exp: "Profil gigi yang runcing (shark teeth) adalah tanda sprocket sudah aus karena pemakaian. Sprocket seperti ini tidak dapat mencengkram rantai dengan baik dan harus diganti bersama rantai barunya."
  },
  {
    q: "Alat yang digunakan untuk mengukur celah atau clearance komponen dengan presisi adalah...",
    opts: ["Tang kombinasi","Feeler gauge","Obeng ketok","Kunci ring"],
    ans: 1,
    exp: "Feeler gauge (bilah ukur celah) digunakan untuk mengukur celah kecil antara dua komponen dengan presisi tinggi. Tersedia dalam berbagai ketebalan, umumnya 0,05–1,0 mm."
  },
  {
    q: "Prosedur K3 yang harus dilakukan PERTAMA sebelum memulai servis sistem pemindah tenaga adalah...",
    opts: ["Menyiapkan kain lap dan bak tampung oli","Matikan mesin dan tunggu hingga dingin","Melepas semua baut cover mesin","Memakai sarung tangan kerja"],
    ans: 1,
    exp: "Langkah pertama yang wajib dilakukan adalah mematikan mesin dan menunggu hingga mesin benar-benar dingin. Mesin panas dapat menyebabkan luka bakar dan komponen lebih sulit dibongkar."
  },
  {
    q: "Gejala gigi transmisi loncat ke netral saat berkendara biasanya disebabkan oleh...",
    opts: ["Oli mesin yang habis","Kampas kopling terlalu tebal","Alur gear aus atau return spring lemah","Setelan rantai terlalu kencang"],
    ans: 2,
    exp: "Gigi loncat (false neutral) umumnya terjadi karena alur pengait pada gear sudah aus akibat pemakaian lama, sehingga tidak mampu menahan posisi gigi yang terpilih. Return spring yang lemah juga dapat menjadi penyebabnya."
  },
  {
    q: "Saat mengganti rantai sepeda motor, apa yang sebaiknya juga diganti bersamaan?",
    opts: ["Hanya sprocket depan","Hanya sprocket belakang","Kedua sprocket (depan dan belakang) sekaligus","Tidak perlu mengganti komponen lain"],
    ans: 2,
    exp: "Rantai dan kedua sprocket memiliki keausan yang saling berhubungan. Memasang rantai baru pada sprocket lama (atau sebaliknya) akan membuat keduanya cepat aus karena perbedaan profil pengait. Selalu ganti sebagai satu set."
  }
];

let curQ = 0, score = 0, answered = false;

function renderQ() {
  const q = questions[curQ];
  document.getElementById('quizQ').textContent = `${curQ+1}. ${q.q}`;
  document.getElementById('qProgress').style.width = ((curQ+1)/questions.length*100)+'%';
  document.getElementById('qCounter').textContent = `${curQ+1} / ${questions.length}`;
  const optsEl = document.getElementById('quizOpts');
  optsEl.innerHTML = '';
  q.opts.forEach((opt, i) => {
    const btn = document.createElement('button');
    btn.className = 'quiz-opt';
    btn.textContent = String.fromCharCode(65+i) + '. ' + opt;
    btn.onclick = () => selectAnswer(i);
    optsEl.appendChild(btn);
  });
  document.getElementById('quizFeedback').className = 'quiz-feedback';
  document.getElementById('quizFeedback').textContent = '';
  document.getElementById('nextBtn').disabled = true;
  answered = false;
}

function selectAnswer(i) {
  if (answered) return;
  answered = true;
  const q = questions[curQ];
  const opts = document.querySelectorAll('.quiz-opt');
  opts.forEach(o => o.classList.add('disabled'));
  const fb = document.getElementById('quizFeedback');
  if (i === q.ans) {
    opts[i].classList.add('correct');
    fb.className = 'quiz-feedback show ok';
    fb.innerHTML = '✅ <strong>Benar!</strong> ' + q.exp;
    score++;
    document.getElementById('scoreDisplay').textContent = score;
  } else {
    opts[i].classList.add('wrong');
    opts[q.ans].classList.add('correct');
    fb.className = 'quiz-feedback show fail';
    fb.innerHTML = '❌ <strong>Kurang tepat.</strong> ' + q.exp;
  }
  document.getElementById('nextBtn').disabled = false;
  if (curQ === questions.length - 1) {
    document.getElementById('nextBtn').textContent = 'Lihat Hasil 🎉';
  }
}

function nextQuestion() {
  curQ++;
  if (curQ >= questions.length) {
    showResult();
    return;
  }
  renderQ();
}

function showResult() {
  document.getElementById('quizBox').style.display = 'none';
  document.getElementById('quizResult').style.display = 'block';
  document.getElementById('finalScore').textContent = score;
  const pct = (score/questions.length)*100;
  let msg, desc;
  const sc = document.getElementById('scoreCircle');
  if (pct >= 80) {
    msg = '🏆 Luar Biasa!'; desc = 'Kamu menguasai materi sistem pemindah tenaga dengan sangat baik. Pertahankan!';
    sc.style.borderColor = '#10b981'; sc.style.background = '#d1fae5';
    document.getElementById('finalScore').style.color = '#10b981';
  } else if (pct >= 60) {
    msg = '👍 Bagus!'; desc = 'Pemahamanmu sudah cukup baik. Pelajari ulang bagian yang masih salah ya!';
    sc.style.borderColor = '#f59e0b'; sc.style.background = '#fef3c7';
    document.getElementById('finalScore').style.color = '#f59e0b';
  } else {
    msg = '📚 Terus Belajar!'; desc = 'Jangan menyerah! Pelajari kembali materi dari awal dan coba lagi.';
    sc.style.borderColor = '#ef4444'; sc.style.background = '#fee2e2';
    document.getElementById('finalScore').style.color = '#ef4444';
  }
  document.getElementById('scoreMsg').textContent = msg;
  document.getElementById('scoreDesc').textContent = desc;
}

function restartQuiz() {
  curQ = 0; score = 0;
  document.getElementById('scoreDisplay').textContent = 0;
  document.getElementById('quizBox').style.display = 'block';
  document.getElementById('quizResult').style.display = 'none';
  document.getElementById('nextBtn').textContent = 'Soal Berikutnya →';
  renderQ();
}

renderQ();

const tabs = document.querySelectorAll('.tabbtn');

tabs.forEach(tab => {
    tab.addEventListener('click', function(){

        tabs.forEach(btn => {
            btn.classList.remove('active');
        });

        this.classList.add('active');

    });
});

</script>
</body>
</html>