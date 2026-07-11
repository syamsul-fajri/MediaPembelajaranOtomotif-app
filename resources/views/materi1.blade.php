<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Engine Sepeda Motor — Modul Interaktif</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{
    --bg:#F5F6FA;

    --surface:#FFFFFF;
    --surface-2:#F8F9FC;

    --line:#E5E7EB;

    --text:#1F2937;
    --text-secondary:#6B7280;
    --muted:#6B7280;

    --primary:#4361EE;
    --primary-dark:#3651d4;

    --secondary:#8E44AD;

    --success:#22C55E;
    --danger:#EF4444;

    --radius:14px;
}
*{margin:0;padding:0;box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{
  background:var(--bg);
  color:var(--text);
  font-family:'Inter',sans-serif;
  line-height:1.6;
  padding-bottom:80px;
}
.mono{font-family:'JetBrains Mono',monospace;}
h1,h2,h3,h4{font-family:'Rajdhani',sans-serif;font-weight:700;letter-spacing:.02em;}

/* ===== HERO ===== */
.hero{
  position:relative;
  padding:64px 24px 48px;
      background:linear-gradient(
       135deg,
       #4361EE 0%,
       #8E44AD 100%
    );
    color:white;
  border-bottom:1px solid var(--line);
  overflow:hidden;
}
.hero-inner{max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:48px;flex-wrap:wrap;}
.hero-text{flex:1;min-width:280px;}
.eyebrow{
  display:inline-flex;align-items:center;gap:8px;
  font-family:'JetBrains Mono',monospace;font-size:.78rem;letter-spacing:.18em;
  color:var(--orange);text-transform:uppercase;margin-bottom:14px;
}
.eyebrow::before{content:"";width:22px;height:2px;background:var(--orange);display:inline-block;}
.hero h1{font-size:clamp(2rem,5vw,3.4rem);line-height:1.08;color:#ffffff;margin-bottom:14px;}
.hero h1 span{color:var(--orange);}
.hero p{color:var(--text-secondary);font-size:1.05rem;max-width:520px;}
.hero-visual{flex:0 0 280px;display:flex;justify-content:center;}

/* Piston loop animation */
.piston-rig{width:220px;height:280px;}
@keyframes pistonMove{
  0%{transform:translateY(0);}
  50%{transform:translateY(64px);}
  100%{transform:translateY(0);}
}
@keyframes crankSpin{ to{ transform:rotate(360deg);} }
.piston-rig #piston{animation:pistonMove 1.6s ease-in-out infinite;transform-origin:center;}
.piston-rig #crank-group{animation:crankSpin 1.6s linear infinite;transform-origin:110px 230px;}
.piston-rig #spark{
  animation:sparkBlink 1.6s ease-in-out infinite;
}
@keyframes sparkBlink{
  0%,38%,100%{opacity:0;}
  40%,46%{opacity:1;}
}

/* ===== NAV ===== */
.tabnav{
  position:sticky;top:0;z-index:50;
  background:rgba(255, 255, 255, 0.92);backdrop-filter:blur(8px);
  border-bottom:1px solid var(--line);
}
.tabnav-inner{
  max-width:1100px;margin:0 auto;
  display:flex;gap:4px;overflow-x:auto;padding:0 16px;
  scrollbar-width:none;
}
.tabnav-inner::-webkit-scrollbar{display:none;}
.tabbtn{
  flex:0 0 auto;
  background:none;border:none;color:var(--text-secondary);
  font-family:'Rajdhani',sans-serif;font-weight:600;font-size:.95rem;
  padding:16px 18px;cursor:pointer;border-bottom:3px solid transparent;
  white-space:nowrap;transition:.18s;
}
.tabbtn .num{color:var(--orange);font-family:'JetBrains Mono',monospace;font-size:.78rem;margin-right:6px;}
.tabbtn:hover{color:#3843a9;}
.tabbtn.active{color:#4361EE;
    border-bottom:3px solid #4361EE;}

/* ===== LAYOUT ===== */
.wrap{max-width:1100px;margin:0 auto;padding:0 24px;}
section.panel{display:none;padding-top:40px;}
section.panel.active{display:block;animation:fadeIn .35s ease;}
@keyframes fadeIn{from{opacity:0;transform:translateY(8px);}to{opacity:1;transform:translateY(0);}}

.section-head{margin-bottom:28px;}
.section-head .eyebrow{margin-bottom:8px;}
.section-head h2{font-size:clamp(1.6rem,4vw,2.4rem);color:#000000;}
.section-head p.lead{color:var(--text-secondary);max-width:680px;margin-top:8px;}

.block{margin-bottom:48px;}
.block h3{font-size:1.3rem;color:#000000;margin-bottom:6px;}
.block .sub{color:var(--text-secondary);font-size:.95rem;margin-bottom:18px;}

/* Card grid */
.grid{display:grid;gap:16px;}
.grid.cols-3{grid grid-template-columns:repeat(3,1fr);}
.grid.cols-2{grid-template-columns:repeat(2,1fr);}
@media(max-width:760px){.grid.cols-3,.grid.cols-2{grid-template-columns:1fr;}}

.card{
    background:#FFFFFF;
    border:1px solid #E5E7EB;
    box-shadow:
    0 4px 12px rgba(0,0,0,.08);

    border-radius:16px;
}
.card h4{color:var(--text);font-size:1.05rem;margin-bottom:6px;}
.card p{color:var(--text-secondary);font-size:.92rem;}

/* ===== ENGINE DIAGRAM (hotspots) ===== */
.diagram-wrap{
  display:flex;gap:24px;flex-wrap:wrap;align-items:flex-start;
  background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);
  padding:20px;
}
.diagram-svg-box{flex:0 0 360px;max-width:100%;position:relative;}
.diagram-svg-box svg{width:100%;height:auto;display:block;}
.hotspot{
  cursor:pointer;
  fill:rgba(255,122,51,.18);
  stroke:#4361EE;
  transition:.15s;
}
.hotspot:hover, .hotspot.active{ fill:rgba(67,97,238,.25);}
.hotspot-label{
  font-family:'JetBrains Mono',monospace;font-size:9px;fill:var(--orange);
  pointer-events:none;
}
.diagram-info{flex:1;min-width:240px;}
.diagram-info .placeholder{color:var(--text-secondary);font-size:.95rem;}
.diagram-info .comp-title{display:flex;align-items:center;gap:10px;margin-bottom:10px;}
.diagram-info .comp-title .badge{
  background:var(--orange);color:#1a1208;font-family:'JetBrains Mono',monospace;
  font-size:.75rem;font-weight:700;border-radius:6px;padding:3px 8px;
}
.diagram-info .comp-title h4{color:var(--text);font-size:1.2rem;}
.diagram-info .row{margin-bottom:10px;}
.diagram-info .row .label{
  font-family:'JetBrains Mono',monospace;font-size:.72rem;letter-spacing:.12em;
  color:var(--teal);text-transform:uppercase;margin-bottom:3px;
}
.diagram-info .row ul{padding-left:18px;color:var(--text);font-size:.92rem;}
.diagram-info .row p{font-size:.92rem;color:var(--text);}
.diagram-hint{font-size:.82rem;color:var(--text-secondary);margin-top:14px;text-align:center;}

/* ===== 4-STROKE STEPPER ===== */
.stepper{
  background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);
  padding:20px;display:flex;gap:24px;flex-wrap:wrap;align-items:center;
}
.stepper-visual{flex:0 0 220px;}
.stepper-visual svg{width:100%;display:block;}
.stepper-info{flex:1;min-width:240px;}
.step-tabs{display:flex;gap:6px;flex-wrap:wrap;margin-bottom:14px;}
.step-tab{
  font-family:'Rajdhani',sans-serif;font-weight:600;font-size:.85rem;
  background:var(--surface-2);border:1px solid var(--line);color:var(--text-secondary);
  padding:8px 14px;border-radius:6px;cursor:pointer;transition:.15s;
}
.step-tab.active{background:var(--orange);color:#1a1208;border-color:var(--orange);}
.step-content h4{color:var(--text);font-size:1.15rem;margin-bottom:8px;}
.step-content ul{padding-left:18px;color:var(--text);font-size:.92rem;margin-bottom:6px;}
.step-content .note{font-size:.88rem;color:var(--teal);margin-top:6px;}
#valveIntake, #valveExhaust{transition:opacity .2s;}
#flame{transition:opacity .15s;}

/* ===== ACCORDION ===== */
.accordion-item{
  border:1px solid var(--line);border-radius:var(--radius);
  margin-bottom:10px;overflow:hidden;background:var(--surface);
}
.accordion-head{
  display:flex;align-items:center;justify-content:space-between;gap:12px;
  padding:14px 18px;cursor:pointer;
}
.accordion-head h4{color:#000000;font-size:1rem;font-weight:600;font-family:'Inter',sans-serif;}
.accordion-head .chev{color:var(--orange);font-family:'JetBrains Mono',monospace;transition:.2s;}
.accordion-item.open .chev{transform:rotate(45deg);}
.accordion-body{
  max-height:0;overflow:hidden;transition:max-height .25s ease;
  padding:0 18px;
}
.accordion-item.open .accordion-body{padding:0 18px 16px;}
.accordion-body ul{padding-left:18px;color:var(--text);font-size:.92rem;}
.accordion-body p{font-size:.92rem;color:var(--text);}
.accordion-body .tag{
  display:inline-block;font-family:'JetBrains Mono',monospace;font-size:.7rem;
  background:var(--teal-dim);color:var(--teal);border-radius:5px;padding:2px 8px;margin-bottom:8px;
}

/* ===== DIAGNOSIS TOOL ===== */
.diag-tool{
  background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:20px;
}
.diag-buttons{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:18px;}
.diag-btn{
  font-family:'Inter',sans-serif;font-size:.88rem;font-weight:600;
  background:var(--surface-2);border:1px solid var(--line);color:var(--text);
  padding:10px 14px;border-radius:8px;cursor:pointer;transition:.15s;
  display:flex;align-items:center;gap:8px;
}
.diag-btn:hover{border-color:var(--teal);}
.diag-btn.active{background:var(--teal-dim);border-color:var(--teal);color:var(--teal);}
.diag-result{
  border-top:1px solid var(--line);padding-top:16px;margin-top:4px;
}
.diag-result .placeholder{color:var(--text-secondary);font-size:.92rem;}
.diag-result h4{color:var(--text);font-size:1.1rem;margin-bottom:10px;}
.diag-cols{display:grid;grid-template-columns:1fr 1fr;gap:20px;}
@media(max-width:600px){.diag-cols{grid-template-columns:1fr;}}
.diag-cols .label{font-family:'JetBrains Mono',monospace;font-size:.72rem;letter-spacing:.12em;text-transform:uppercase;margin-bottom:6px;}
.diag-cols .label.cause{color:var(--red);}
.diag-cols .label.fix{color:var(--green);}
.diag-cols ul{padding-left:18px;font-size:.92rem;}

/* Asap cards */
.asap-card{
  border:1px solid var(--line);border-radius:var(--radius);padding:16px;
  background:var(--surface);text-align:center;cursor:pointer;transition:.2s;
}
.asap-card:hover{transform:translateY(-3px);border-color:var(--orange);}
.asap-card .dot{width:36px;height:36px;border-radius:50%;margin:0 auto 10px;border:2px solid var(--line);}
.asap-card.putih .dot{background:#eef0f2;}
.asap-card.hitam .dot{background:#2b2b2b;border-color:#555;}
.asap-card.biru .dot{background:#5d7bdb;}
.asap-card h4{color:var(--text);font-size:1rem;margin-bottom:4px;}
.asap-card p{font-size:.85rem;color:var(--text-secondary);display:none;}
.asap-card.open p{display:block;}

/* pemeriksaan tabs */
.check-tabs{display:flex;gap:8px;margin-bottom:14px;flex-wrap:wrap;}
.check-tab{
  font-family:'Rajdhani',sans-serif;font-weight:600;font-size:.9rem;
  background:var(--surface-2);border:1px solid var(--line);color:var(--text-secondary);
  padding:9px 16px;border-radius:8px;cursor:pointer;
}
.check-tab.active{background:var(--orange);color:#1a1208;border-color:var(--orange);}
.check-panel{display:none;}
.check-panel.active{display:block;}

/* checklist */
.checklist{list-style:none;display:grid;gap:8px;grid-template-columns:repeat(2,1fr);}
@media(max-width:600px){.checklist{grid-template-columns:1fr;}}
.checklist li{
  display:flex;align-items:center;gap:10px;
  background:var(--surface);border:1px solid var(--line);border-radius:8px;padding:10px 14px;
  cursor:pointer;font-size:.92rem;transition:.15s;
}
.checklist li.checked{border-color:var(--green);background:rgba(143,214,148,.08);}
.checklist li .box{
  width:18px;height:18px;border:2px solid var(--muted);border-radius:4px;flex:0 0 18px;
  display:flex;align-items:center;justify-content:center;font-size:12px;color:var(--green);
}
.checklist li.checked .box{border-color:var(--green);}

/* warning box */
.warn-box{
  border:1px solid var(--orange-dim);background:rgba(255,122,51,.07);
  border-radius:var(--radius);padding:16px 18px;display:flex;gap:14px;align-items:flex-start;
}
.warn-box .icon{font-size:1.4rem;flex:0 0 auto;}
.warn-box h4{color:var(--orange);font-size:1rem;margin-bottom:4px;}
.warn-box p{font-size:.9rem;color:var(--text);}

/* table */
table.styled{width:100%;border-collapse:collapse;font-size:.92rem;}
table.styled th,table.styled td{
  border:1px solid var(--line);padding:10px 12px;text-align:left;
}
table.styled th{background:var(--surface-2);color:var(--orange);font-family:'JetBrains Mono',monospace;font-size:.78rem;letter-spacing:.08em;text-transform:uppercase;}
table.styled tr:nth-child(even){background:rgba(255,255,255,.02);}

/* ===== QUIZ ===== */
.quiz-card{
  background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);
  padding:20px;margin-bottom:14px;
}
.quiz-card .q-num{font-family:'JetBrains Mono',monospace;color:var(--orange);font-size:.78rem;margin-bottom:6px;}
.quiz-card h4{color:var(--text);font-size:1.02rem;margin-bottom:12px;}
.quiz-opts{display:flex;flex-direction:column;gap:8px;}
.quiz-opt{
  text-align:left;background:var(--surface-2);border:1px solid var(--line);color:var(--text);
  padding:10px 14px;border-radius:8px;cursor:pointer;font-size:.92rem;transition:.15s;
}
.quiz-opt:hover{border-color:var(--teal);}
.quiz-opt.correct{border-color:var(--green);background:rgba(143,214,148,.1);color:var(--green);}
.quiz-opt.wrong{border-color:var(--red);background:rgba(255,93,93,.1);color:var(--red);}
.quiz-opt[disabled]{cursor:default;}
.quiz-feedback{font-size:.85rem;margin-top:10px;color:var(--teal);min-height:1.2em;}

.quiz-score{
  text-align:center;background:var(--surface);border:1px solid var(--line);
  border-radius:var(--radius);padding:24px;
}
.quiz-score .big{font-family:'Rajdhani',sans-serif;font-weight:700;font-size:2.6rem;color:var(--orange);}
.quiz-score p{color:var(--text-secondary);margin-top:6px;}
.reset-btn{
  margin-top:14px;background:var(--orange);color:#1a1208;border:none;
  font-family:'Rajdhani',sans-serif;font-weight:700;font-size:.92rem;
  padding:10px 22px;border-radius:8px;cursor:pointer;
}

/* footer nav */
.panel-foot{
  display:flex;justify-content:space-between;margin-top:36px;padding-top:24px;border-top:1px solid var(--line);
  gap:12px;flex-wrap:wrap;
}
.navbtn{
  font-family:'Rajdhani',sans-serif;font-weight:600;font-size:.9rem;
      background:#4361EE;
    color:white;
    border:red;
  padding:10px 18px;border-radius:8px;cursor:pointer;transition:.15s;
}
.navbtn:hover{ background:#3651d4;}
.navbtn:disabled{opacity:.3;cursor:default;}
.quiz-btn {
    background: #28a745;
    transition: 0.2s;
}

.quiz-btn:hover {
    background: #218838;
}

.quiz-btn:active {
    transform: scale(0.95);
    background: #1e7e34;
}
/* progress dots */
.progress-dots{display:flex;gap:6px;justify-content:center;margin-top:10px;}
.progress-dots span{width:8px;height:8px;border-radius:50%;background:var(--line);}
.progress-dots span.active{background:var(--orange);}
</style>
</head>
<body>

<!-- ================= HERO ================= -->
<header class="hero">
  <div class="hero-inner">
    <div class="hero-text">
      <div class="eyebrow">Modul 1 · Teknik Sepeda Motor</div>
      <h1>Memahami <span>Engine</span> Sepeda Motor</h1>
      <p style="color:#FFFFFF;">Pelajari cara kerja komponen mesin, kenali tanda-tanda gangguan, kuasai prosedur perawatan, dan lakukan tindak lanjut yang tepat — lengkap dengan diagram interaktif, simulasi diagnosa, dan kuis.</p>
    </div>
    <div class="hero-visual">
      <svg class="piston-rig" viewBox="0 0 220 280" xmlns="http://www.w3.org/2000/svg">
        <!-- cylinder -->
        <rect x="70" y="20" width="80" height="170" fill="none" stroke="#3a4150" stroke-width="3" rx="4"/>
        <!-- spark -->
        <g id="spark">
          <circle cx="110" cy="40" r="6" fill="#ffc857"/>
          <line x1="110" y1="34" x2="110" y2="22" stroke="#ffc857" stroke-width="2"/>
          <line x1="104" y1="40" x2="92" y2="40" stroke="#ffc857" stroke-width="2"/>
          <line x1="116" y1="40" x2="128" y2="40" stroke="#ffc857" stroke-width="2"/>
        </g>
        <!-- piston -->
        <g id="piston">
          <rect x="78" y="50" width="64" height="50" rx="4" fill="#ff7a33"/>
          <rect x="78" y="62" width="64" height="4" fill="#5a3a26"/>
          <rect x="78" y="74" width="64" height="4" fill="#5a3a26"/>
          <line x1="110" y1="100" x2="110" y2="160" stroke="#9aa3b2" stroke-width="6"/>
        </g>
        <!-- crank -->
        <g id="crank-group">
          <circle cx="110" cy="230" r="34" fill="none" stroke="#4fd1c5" stroke-width="3"/>
          <circle cx="110" cy="196" r="7" fill="#4fd1c5"/>
        </g>
        <circle cx="110" cy="230" r="3" fill="#9aa3b2"/>
      </svg>
    </div>
  </div>
</header>

<!-- ================= TAB NAV ================= -->
<nav class="tabnav">
  <div class="tabnav-inner" id="tabnav">
    <button class="tabbtn active" data-panel="p1"><span class="num">1.1</span>Prinsip Kerja</button>
    <button class="tabbtn" data-panel="p2"><span class="num">1.2</span>Tanda Gangguan</button>
    <button class="tabbtn" data-panel="p3"><span class="num">1.3</span>Perawatan &amp; Perbaikan</button>
    <button class="tabbtn" data-panel="p4"><span class="num">1.4</span>Tindak Lanjut</button>
    <a href="/kuis/1"><button class="tabbtn" >Kuis</button></a>    
    <a href="{{ route('dashboard.siswa') }}"><button class="tabbtn" >Kembali ke Dashboard</button></a>
  </div>
</nav>

<div class="wrap">

<!-- ================= PANEL 1: PRINSIP KERJA ================= -->
<section class="panel active" id="p1">
  <div class="section-head">
    <div class="eyebrow">1.1 Prinsip Kerja</div>
    <h2>Komponen &amp; Cara Kerja Engine</h2>
    <p class="lead">Engine sepeda motor adalah alat yang mengubah energi panas hasil pembakaran bahan bakar menjadi tenaga gerak untuk memutar roda. Semuanya bermula dari ledakan kecil di dalam silinder — klik komponen pada diagram di bawah untuk melihat fungsi dan cara kerjanya.</p>
  </div>

  <div class="block">
    <h3>🔧 Diagram Interaktif: Komponen Utama Engine</h3>
    <p class="sub">Klik salah satu bagian pada gambar penampang silinder untuk melihat penjelasannya.</p>
    <div class="diagram-wrap">
      <div class="diagram-svg-box">
        <svg viewBox="0 0 360 460" xmlns="http://www.w3.org/2000/svg">
          <!-- outer block -->
          <rect x="40" y="10" width="200" height="440" fill="none" stroke="#3a4150" stroke-width="2" rx="6"/>
          <!-- cylinder head -->
          <rect class="hotspot" data-id="head" x="55" y="20" width="170" height="55" rx="4"/>
          <text class="hotspot-label" x="62" y="42">KEPALA SILINDER</text>
          <!-- valves -->
          <rect class="hotspot" data-id="klep" x="90" y="20" width="22" height="40"/>
          <rect class="hotspot" data-id="klep" x="168" y="20" width="22" height="40"/>
          <text class="hotspot-label" x="62" y="55">KLEP IN / OUT</text>
          <!-- spark plug -->
          <rect class="hotspot" data-id="busi" x="128" y="2" width="24" height="22"/>
          <text class="hotspot-label" x="118" y="2">BUSI</text>
          <!-- cylinder -->
          <rect class="hotspot" data-id="silinder" x="80" y="78" width="120" height="160" fill-opacity=".05"/>
          <text class="hotspot-label" x="84" y="92">SILINDER</text>
          <!-- piston -->
          <rect class="hotspot" data-id="piston" x="88" y="105" width="104" height="48" rx="3"/>
          <text class="hotspot-label" x="100" y="100">PISTON</text>
          <!-- ring -->
          <rect class="hotspot" data-id="ring" x="88" y="112" width="104" height="10"/>
          <text class="hotspot-label" x="200" y="120">RING PISTON</text>
          <!-- connecting rod -->
          <polygon class="hotspot" data-id="stang" points="128,153 152,153 150,330 130,330"/>
          <text class="hotspot-label" x="206" y="240">STANG PISTON</text>
          <!-- crankshaft -->
          <circle class="hotspot" data-id="crank" cx="140" cy="370" r="60"/>
          <text class="hotspot-label" x="160" y="440">PORAS ENGKOL</text>
          <!-- carb / injector (side box) -->
          <rect class="hotspot" data-id="karbu" x="244" y="40" width="70" height="40" rx="4"/>
          <text class="hotspot-label" x="248" y="32">KARBURATOR / INJEKTOR</text>
          <line x1="244" y1="60" x2="225" y2="40" stroke="#3a4150" stroke-width="2"/>
        </svg>
      </div>
      <div class="diagram-info" id="diagramInfo">
        <p class="placeholder">👆 Pilih salah satu komponen pada diagram untuk menampilkan fungsi dan cara kerjanya di sini.</p>
      </div>
    </div>
    <p class="diagram-hint">Tip: setiap kotak oranye adalah komponen yang bisa diklik.</p>
  </div>

  <div class="block">
    <h3>⚙️ Simulasi Siklus Motor 4 Langkah</h3>
    <p class="sub">Motor 4 langkah menyelesaikan satu siklus tenaga dalam 4 gerakan piston: Hisap → Kompresi → Usaha → Buang. Klik setiap langkah untuk melihat posisi piston, klep, dan apa yang terjadi di dalam silinder.</p>
    <div class="stepper">
      <div class="stepper-visual">
        <svg viewBox="0 0 200 240" xmlns="http://www.w3.org/2000/svg">
          <rect x="60" y="10" width="80" height="190" fill="none" stroke="#3a4150" stroke-width="2"/>
          <!-- intake valve -->
          <rect id="valveIntake" x="68" y="10" width="20" height="22" fill="#4fd1c5" opacity=".25"/>
          <!-- exhaust valve -->
          <rect id="valveExhaust" x="112" y="10" width="20" height="22" fill="#ff5d5d" opacity=".25"/>
          <text x="62" y="8" font-size="9" fill="#4fd1c5" font-family="JetBrains Mono">IN</text>
          <text x="108" y="8" font-size="9" fill="#ff5d5d" font-family="JetBrains Mono">OUT</text>
          <!-- flame -->
          <circle id="flame" cx="100" cy="45" r="14" fill="#ffc857" opacity="0"/>
          <!-- piston -->
          <rect id="stepPiston" x="65" y="40" width="70" height="40" rx="3" fill="#ff7a33"/>
          <!-- rod -->
          <line id="stepRod" x1="100" y1="80" x2="100" y2="170" stroke="#9aa3b2" stroke-width="6"/>
          <!-- crank -->
          <circle cx="100" cy="190" r="30" fill="none" stroke="#4fd1c5" stroke-width="3"/>
          <circle id="stepCrankPin" cx="100" cy="160" r="6" fill="#4fd1c5"/>
        </svg>
      </div>
      <div class="stepper-info">
        <div class="step-tabs">
          <button class="step-tab active" data-step="0">1. Hisap</button>
          <button class="step-tab" data-step="1">2. Kompresi</button>
          <button class="step-tab" data-step="2">3. Usaha</button>
          <button class="step-tab" data-step="3">4. Buang</button>
        </div>
        <div class="step-content" id="stepContent"></div>
      </div>
    </div>
  </div>

  <div class="block">
    <h3>🛠️ Sistem Pendukung Engine</h3>
    <p class="sub">Selain komponen utama, tiga sistem ini bekerja di belakang layar agar mesin tetap hidup, sejuk, dan awet. Klik kartu untuk membuka detailnya.</p>
    <div class="grid cols-3" id="supportSystems"></div>
  </div>

  <div class="panel-foot">
    <button class="navbtn" disabled>← Sebelumnya</button>
    <button class="navbtn next-btn" data-target="p2">Lanjut: Tanda Gangguan →</button>
  </div>
</section>

<!-- ================= PANEL 2: TANDA GANGGUAN ================= -->
<section class="panel" id="p2">
  <div class="section-head">
    <div class="eyebrow">1.2 Tanda-Tanda Gangguan</div>
    <h2>Mengenali Gejala Sebelum Jadi Masalah Besar</h2>
    <p class="lead">Gangguan engine adalah kerusakan atau ketidaknormalan pada mesin yang menyebabkan performa motor menurun. Mesin selalu memberi "sinyal" lewat suara, asap, bau, atau tenaga. Gunakan alat diagnosa di bawah untuk berlatih mengenali gejala, penyebab, dan solusinya.</p>
  </div>

  <div class="block">
    <h3>🩺 Simulator Diagnosa Gangguan</h3>
    <p class="sub">Pilih salah satu gejala yang dialami motor, lalu lihat kemungkinan penyebab dan solusinya.</p>
    <div class="diag-tool">
      <div class="diag-buttons" id="diagButtons"></div>
      <div class="diag-result" id="diagResult">
        <p class="placeholder">👆 Pilih salah satu gejala di atas untuk memulai diagnosa.</p>
      </div>
    </div>
  </div>

  <div class="block">
    <h3>💨 Membaca Warna Asap Knalpot</h3>
    <p class="sub">Warna asap dari knalpot bisa menjadi indikator cepat apa yang sedang terjadi di ruang bakar. Klik tiap warna untuk melihat artinya.</p>
    <div class="grid cols-3" id="asapCards"></div>
  </div>

  <div class="block">
    <h3>🔍 Cara Pemeriksaan Sederhana</h3>
    <p class="sub">Sebelum membongkar mesin, tiga indra ini sudah bisa memberi banyak informasi.</p>
    <div class="check-tabs" id="checkTabs">
      <button class="check-tab active" data-check="visual">👀 Visual</button>
      <button class="check-tab" data-check="suara">👂 Suara</button>
      <button class="check-tab" data-check="bau">👃 Bau</button>
    </div>
    <div class="check-panel active" id="check-visual">
      <div class="card"><h4>Pemeriksaan Visual</h4><p>Dilakukan dengan melihat kondisi fisik motor secara langsung:</p>
      <ul><li>Kebocoran oli di sekitar mesin atau lantai parkir</li><li>Kondisi kabel — terkelupas, kendor, atau berkarat</li><li>Warna asap knalpot saat mesin menyala</li></ul></div>
    </div>
    <div class="check-panel" id="check-suara">
      <div class="card"><h4>Pemeriksaan Suara</h4><p>Dengarkan suara mesin saat hidup, bandingkan dengan suara normalnya:</p>
      <ul><li>Suara kasar atau "tek-tek" — bisa indikasi klep longgar atau bearing aus</li><li>Suara berisik berlebihan dari area tertentu</li><li>Suara mesin tidak stabil saat idle</li></ul></div>
    </div>
    <div class="check-panel" id="check-bau">
      <div class="card"><h4>Pemeriksaan Bau</h4><p>Hidung bisa mendeteksi masalah lebih cepat dari mata:</p>
      <ul><li>Bau gosong — bisa dari kabel terbakar atau kampas yang terbakar</li><li>Bau bensin berlebihan — indikasi kebocoran bahan bakar atau setelan terlalu kaya</li></ul></div>
    </div>
  </div>

  <div class="panel-foot">
    <button class="navbtn prev-btn" data-target="p1">← Prinsip Kerja</button>
    <button class="navbtn next-btn" data-target="p3">Lanjut: Perawatan →</button>
  </div>
</section>

<!-- ================= PANEL 3: PERAWATAN ================= -->
<section class="panel" id="p3">
  <div class="section-head">
    <div class="eyebrow">1.3 Perawatan &amp; Perbaikan</div>
    <h2>Merawat Engine agar Tetap Awet &amp; Bertenaga</h2>
    <p class="lead">Perawatan adalah tindakan menjaga mesin agar tetap bekerja dengan baik. Perawatan yang rutin membuat mesin awet, hemat bahan bakar, dan performanya tetap optimal. Jelajahi jenis perawatan, prosedur langkah demi langkah, peralatan, dan keselamatan kerja di bawah ini.</p>
  </div>

  <div class="block">
    <h3>📅 Jenis Perawatan</h3>
    <div class="grid cols-2">
      <div class="card">
        <h4>🌅 Perawatan Harian</h4>
        <p>Dilakukan setiap kali sebelum motor digunakan — cepat tapi penting.</p>
        <ul style="margin-top:8px;padding-left:18px;font-size:.92rem;">
          <li>Memeriksa bensin</li>
          <li>Memeriksa oli</li>
          <li>Memeriksa suara mesin saat dinyalakan</li>
        </ul>
      </div>
      <div class="card">
        <h4>📆 Perawatan Berkala</h4>
        <p>Dilakukan sesuai jarak tempuh tertentu (misalnya tiap 2.000–4.000 km).</p>
        <ul style="margin-top:8px;padding-left:18px;font-size:.92rem;">
          <li>Ganti oli mesin</li>
          <li>Servis karburator / injektor</li>
          <li>Setel klep</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="block">
    <h3>📋 Prosedur Perawatan — Langkah demi Langkah</h3>
    <p class="sub">Klik tiap prosedur untuk membuka langkah-langkah lengkapnya.</p>
    <div id="procAccordion"></div>
  </div>

  <div class="block">
    <h3>🧰 Peralatan Perawatan</h3>
    <p class="sub">Centang alat yang sudah kamu kenal atau siapkan sebelum praktik.</p>
    <ul class="checklist" id="toolsChecklist"></ul>
  </div>

  <div class="block">
    <h3>⚠️ Keselamatan Kerja</h3>
    <div class="grid cols-2">
      <div class="warn-box">
        <div class="icon">🧤</div>
        <div><h4>Gunakan Alat Pelindung</h4><p>Sarung tangan dan kacamata kerja wajib dipakai untuk melindungi tangan dan mata dari kotoran, oli panas, dan serpihan logam.</p></div>
      </div>
      <div class="warn-box">
        <div class="icon">🔥</div>
        <div><h4>Hindari Bahaya</h4><p>Jangan menyentuh mesin yang masih panas, dan jauhkan api atau benda yang bisa memicu api dari area bensin.</p></div>
      </div>
    </div>
  </div>

  <div class="panel-foot">
    <button class="navbtn prev-btn" data-target="p2">← Tanda Gangguan</button>
    <button class="navbtn next-btn" data-target="p4">Lanjut: Tindak Lanjut →</button>
  </div>
</section>

<!-- ================= PANEL 4: TINDAK LANJUT ================= -->
<section class="panel" id="p4">
  <div class="section-head">
    <div class="eyebrow">1.4 Tindak Lanjut</div>
    <h2>Setelah Perawatan, Apa Selanjutnya?</h2>
    <p class="lead">Tindak lanjut adalah kegiatan setelah perawatan atau perbaikan selesai dilakukan, untuk memastikan hasil kerja benar-benar berhasil dan tidak menimbulkan masalah baru.</p>
  </div>

  <div class="block">
    <h3>✅ Langkah Tindak Lanjut</h3>
    <div id="followupAccordion"></div>
  </div>

  <div class="block">
    <h3>📝 Contoh Pencatatan Hasil Perawatan</h3>
    <p class="sub">Mencatat hasil perawatan membantu melacak riwayat servis motor. Berikut contohnya:</p>
    <table class="styled">
      <thead><tr><th>Tanggal</th><th>Jenis Perawatan</th><th>Hasil</th></tr></thead>
      <tbody>
        <tr><td>10 Mei 2026</td><td>Ganti oli</td><td>Mesin halus</td></tr>
        <tr><td>24 Mei 2026</td><td>Bersihkan busi &amp; filter udara</td><td>Tarikan lebih responsif</td></tr>
        <tr><td>02 Juni 2026</td><td>Setel klep</td><td>Suara mesin lebih halus, tenaga normal</td></tr>
      </tbody>
    </table>
  </div>

  <div class="block">
    <h3>🚫 Dampak Jika Tindak Lanjut Diabaikan</h3>
    <div class="grid cols-3">
      <div class="card"><h4>🔁 Kerusakan Terulang</h4><p>Masalah yang sama bisa muncul kembali karena tidak diperiksa ulang setelah perbaikan.</p></div>
      <div class="card"><h4>⏳ Mesin Cepat Rusak</h4><p>Komponen yang belum benar-benar beres bekerja akan mempercepat keausan bagian lain.</p></div>
      <div class="card"><h4>💸 Perawatan Tidak Maksimal</h4><p>Biaya dan waktu yang sudah dikeluarkan untuk perawatan menjadi kurang efektif.</p></div>
    </div>
  </div>

  <div class="block">
    <div class="card" style="border-color:var(--teal);">
      <h4 style="color:var(--teal);">💡 Kesimpulan</h4>
      <p>Engine sepeda motor terdiri dari berbagai komponen yang saling bekerja sama menghasilkan tenaga. Setiap komponen punya fungsi penting, sehingga penting memahami cara kerjanya, mengenali tanda gangguan sejak dini, mengikuti prosedur perawatan dengan benar, dan melakukan tindak lanjut setelah perbaikan. Dengan begitu, mesin motor akan lebih awet, hemat bahan bakar, dan nyaman digunakan.</p>
    </div>
  </div>

  <div class="panel-foot">
    <button class="navbtn prev-btn" data-target="p3">← Perawatan</button>
    <a href="/kuis/1"><button class="navbtn next-btn" data-target="p5">Lanjut: Kuis →</button></a>
  </div>
</section>

<!-- ================= PANEL 5: QUIZ ================= -->
{{-- <section class="panel" id="p5">
  <div class="section-head">
    <div class="eyebrow">Evaluasi Mandiri</div>
    <h2>Uji Pemahamanmu</h2>
    <p class="lead">Jawab 6 pertanyaan berikut untuk mengukur seberapa paham kamu tentang materi engine sepeda motor. Setiap jawaban langsung diberi penjelasan.</p>
  </div>
  <div id="quizContainer"></div>
  <div class="quiz-score" id="quizScore" style="display:none;">
    <div class="big" id="scoreNum">0/6</div>
    <p id="scoreMsg">Hasil kuismu</p>
    <button class="reset-btn" id="resetQuiz">Ulangi Kuis</button>
  </div>
  <div class="panel-foot">
    <button class="navbtn prev-btn" data-target="p4">← Tindak Lanjut</button>
    <button class="navbtn" disabled>Selesai 🏁</button>
  </div>
</section> --}}

</div>

<script>
/* ============ TAB NAVIGATION ============ */
const tabBtns = document.querySelectorAll('.tabbtn');
const panels = document.querySelectorAll('.panel');
function showPanel(id){
  panels.forEach(p=>p.classList.toggle('active', p.id===id));
  tabBtns.forEach(b=>b.classList.toggle('active', b.dataset.panel===id));
  document.querySelector('.tabnav').scrollIntoView({behavior:'smooth', block:'start'});
}
tabBtns.forEach(b=>b.addEventListener('click', ()=>showPanel(b.dataset.panel)));
document.querySelectorAll('.next-btn, .prev-btn').forEach(b=>{
  b.addEventListener('click', ()=>showPanel(b.dataset.target));
});

/* ============ DIAGRAM HOTSPOTS ============ */
const componentData = {
  head: {title:"Kepala Silinder (Cylinder Head)", fungsi:["Tempat ruang bakar","Tempat pemasangan busi dan klep"], kerja:"Saat pembakaran terjadi, kepala silinder menahan tekanan dan panas yang sangat besar dari proses pembakaran bahan bakar."},
  silinder: {title:"Silinder", fungsi:["Tempat piston bergerak naik turun"], kerja:"Silinder menjadi jalur gerak piston saat proses hisap, kompresi, usaha, dan buang berlangsung secara berurutan."},
  piston: {title:"Piston (Torak)", fungsi:["Menerima tekanan hasil pembakaran","Mengubah tekanan menjadi gerakan"], kerja:"Piston bergerak naik untuk memampatkan campuran bahan bakar, lalu bergerak turun saat menerima dorongan dari hasil pembakaran."},
  ring: {title:"Ring Piston", fungsi:["Menahan kebocoran kompresi","Mengontrol oli"], kerja:"Ring piston menempel rapat pada dinding silinder agar tekanan hasil pembakaran tidak bocor ke ruang engkol."},
  stang: {title:"Stang Piston (Connecting Rod)", fungsi:["Menghubungkan piston dengan poros engkol"], kerja:"Gerakan naik-turun piston yang lurus diubah oleh stang piston menjadi gerakan putar pada poros engkol."},
  crank: {title:"Poros Engkol (Crankshaft)", fungsi:["Mengubah gerakan naik turun piston menjadi putaran"], kerja:"Saat piston bergerak, crankshaft ikut berputar dan menghasilkan tenaga putar yang akhirnya menggerakkan roda."},
  klep: {title:"Klep (Katup) — Masuk &amp; Buang", fungsi:["Mengatur masuknya bahan bakar (klep masuk)","Mengatur keluarnya gas sisa pembakaran (klep buang)"], kerja:"Klep membuka dan menutup secara presisi sesuai dengan putaran mesin dan tahapan siklus 4 langkah."},
  busi: {title:"Busi", fungsi:["Menghasilkan percikan api"], kerja:"Percikan api dari busi membakar campuran bensin dan udara yang sudah dimampatkan di ruang bakar, menghasilkan tenaga dorong."},
  karbu: {title:"Karburator / Injektor", fungsi:["Mencampur udara dan bahan bakar sebelum masuk ke ruang bakar"], kerja:"Karburator mencampur bahan bakar menggunakan prinsip kevakuman, sedangkan injektor menyemprotkan bahan bakar secara elektronik yang dikontrol oleh ECU."},
};
const diagramInfo = document.getElementById('diagramInfo');
document.querySelectorAll('.hotspot').forEach(hs=>{
  hs.addEventListener('click', ()=>{
    document.querySelectorAll('.hotspot').forEach(h=>h.classList.remove('active'));
    document.querySelectorAll(`.hotspot[data-id="${hs.dataset.id}"]`).forEach(h=>h.classList.add('active'));
    const d = componentData[hs.dataset.id];
    diagramInfo.innerHTML = `
      <div class="comp-title"><span class="badge">${hs.dataset.id.toUpperCase()}</span><h4>${d.title}</h4></div>
      <div class="row"><div class="label">Fungsi</div><ul>${d.fungsi.map(f=>`<li>${f}</li>`).join('')}</ul></div>
      <div class="row"><div class="label">Cara Kerja</div><p>${d.kerja}</p></div>
    `;
  });
});

/* ============ 4-STROKE STEPPER ============ */
const stepData = [
  { name:"Langkah Hisap", piston:'down', intake:1, exhaust:0, flame:0,
    proses:["Piston bergerak turun dari titik mati atas (TMA)","Klep masuk terbuka, klep buang tertutup","Campuran bahan bakar dan udara terhisap masuk ke silinder"],
    note:"Ruang silinder membesar sehingga tekanan menjadi vakum dan menarik campuran bahan bakar." },
  { name:"Langkah Kompresi", piston:'up', intake:0, exhaust:0, flame:0,
    proses:["Piston bergerak naik menuju titik mati atas (TMA)","Semua klep (masuk dan buang) tertutup rapat","Campuran bahan bakar dan udara dimampatkan hingga bertekanan tinggi"],
    note:"Pemampatan ini membuat campuran lebih mudah terbakar dan menghasilkan tenaga besar saat dinyalakan." },
  { name:"Langkah Usaha (Pembakaran)", piston:'down', intake:0, exhaust:0, flame:1,
    proses:["Busi memercikkan bunga api tepat sebelum/di TMA","Campuran bahan bakar terbakar dengan cepat","Piston terdorong turun dengan tenaga besar"],
    note:"Inilah satu-satunya langkah yang menghasilkan tenaga — tiga langkah lainnya membutuhkan tenaga." },
  { name:"Langkah Buang", piston:'up', intake:0, exhaust:1, flame:0,
    proses:["Piston bergerak naik kembali ke TMA","Klep buang terbuka, klep masuk tertutup","Gas sisa hasil pembakaran terdorong keluar melalui knalpot"],
    note:"Setelah langkah ini selesai, siklus akan berulang kembali dari langkah hisap." },
];
const stepTabs = document.querySelectorAll('.step-tab');
const stepContent = document.getElementById('stepContent');
const stepPiston = document.getElementById('stepPiston');
const stepRod = document.getElementById('stepRod');
const stepCrankPin = document.getElementById('stepCrankPin');
const valveIntake = document.getElementById('valveIntake');
const valveExhaust = document.getElementById('valveExhaust');
const flame = document.getElementById('flame');

function renderStep(i){
  const d = stepData[i];
  stepTabs.forEach(t=>t.classList.toggle('active', +t.dataset.step===i));
  stepContent.innerHTML = `
    <h4>${d.name}</h4>
    <ul>${d.proses.map(p=>`<li>${p}</li>`).join('')}</ul>
    <div class="note">💡 ${d.note}</div>
  `;
  if(d.piston==='down'){
    stepPiston.setAttribute('y','60'); stepRod.setAttribute('y1','100'); stepCrankPin.setAttribute('cy','180');
  } else {
    stepPiston.setAttribute('y','40'); stepRod.setAttribute('y1','80'); stepCrankPin.setAttribute('cy','160');
  }
  valveIntake.setAttribute('opacity', d.intake ? '1':'.15');
  valveExhaust.setAttribute('opacity', d.exhaust ? '1':'.15');
  flame.setAttribute('opacity', d.flame ? '1':'0');
}
stepTabs.forEach(t=>t.addEventListener('click', ()=>renderStep(+t.dataset.step)));
renderStep(0);

/* ============ SUPPORT SYSTEMS (flip cards) ============ */
const supportData = [
  {icon:"🧴", title:"Sistem Pelumasan", fungsi:"Mengurangi gesekan antar komponen yang bergerak di dalam mesin.", contoh:"Oli mesin yang melapisi piston, ring, dan poros engkol agar tidak cepat aus."},
  {icon:"❄️", title:"Sistem Pendinginan", fungsi:"Menjaga suhu mesin tetap normal agar tidak overheat.", contoh:"Pendingin udara (sirip-sirip mesin) atau pendingin cairan menggunakan radiator."},
  {icon:"⚡", title:"Sistem Pengapian", fungsi:"Menghasilkan percikan api untuk membakar campuran bahan bakar.", contoh:"Komponen: CDI/ECU yang mengatur waktu pengapian, koil yang menaikkan tegangan, dan busi yang memercikkan api."},
];
const supportEl = document.getElementById('supportSystems');

supportData.forEach(s=>{

    const item = document.createElement('div');

    item.className = 'accordion-item';

    item.innerHTML = `
        <div class="accordion-head">
            <h4>${s.icon} ${s.title}</h4>
            <span class="chev">+</span>
        </div>

        <div class="accordion-body">
            <p>
                <strong>Fungsi:</strong><br>
                ${s.fungsi}
            </p>

            <p style="margin-top:10px;">
                <strong>Contoh:</strong><br>
                ${s.contoh}
            </p>
        </div>
    `;

    item.querySelector('.accordion-head')
        .addEventListener('click', ()=>{

        const body = item.querySelector('.accordion-body');

        const opening = !item.classList.contains('open');

        item.classList.toggle('open');

        body.style.maxHeight =
            opening
            ? body.scrollHeight + 40 + 'px'
            : null;
    });

    supportEl.appendChild(item);
});
// const supportEl = document.getElementById('supportSystems');
// supportData.forEach(s=>{
//   const card = document.createElement('div');
//   card.className='card';
//   card.innerHTML = `<h4>${s.icon} ${s.title}</h4><p><strong style="color:var(--teal);">Fungsi:</strong> ${s.fungsi}</p><p style="margin-top:6px;"><strong style="color:var(--orange);">Contoh:</strong> ${s.contoh}</p>`;
//   supportEl.appendChild(card);
// });

/* ============ DIAGNOSIS SIMULATOR ============ */
const diagData = [
  {label:"🔇 Mesin Sulit Dihidupkan", penyebab:["Busi mati","Aki lemah","Karburator kotor","Kompresi bocor"], solusi:["Bersihkan atau ganti busi","Periksa kondisi aki","Servis karburator","Periksa kompresi & ring piston"]},
  {label:"🥴 Mesin Brebet (Tersendat)", penyebab:["Filter udara kotor","Busi kotor","Aliran bahan bakar tidak lancar"], solusi:["Bersihkan filter udara","Bersihkan busi","Periksa saluran bahan bakar dari kotoran atau sumbatan"]},
  {label:"🔥 Mesin Cepat Panas", penyebab:["Oli kurang","Radiator bermasalah","Sistem pendinginan tidak bekerja optimal"], solusi:["Tambahkan/ganti oli sesuai standar","Periksa & bersihkan radiator","Periksa kipas dan saluran pendingin (dampak jika dibiarkan: mesin bisa overheat)"]},
  {label:"💨 Asap Knalpot Berlebihan", penyebab:["Oli masuk ke ruang bakar (asap putih)","Bahan bakar terlalu banyak (asap hitam)","Pembakaran oli (asap biru)"], solusi:["Periksa seal/ring piston bila asap putih","Setel ulang karburator/injektor bila asap hitam","Cek kebocoran oli ke ruang bakar bila asap biru"]},
  {label:"🔊 Suara Mesin Kasar", penyebab:["Klep longgar","Oli kurang","Bearing aus"], solusi:["Setel ulang kerenggangan klep","Tambahkan oli sesuai standar","Periksa dan ganti bearing yang aus"]},
  {label:"🐢 Tenaga Mesin Lemah", penyebab:["Kompresi bocor","Filter udara kotor","Busi lemah"], solusi:["Periksa ring piston & kompresi mesin","Bersihkan filter udara","Ganti busi dengan yang baru"]},
  {label:"⛽ Konsumsi BBM Boros", penyebab:["Setelan karburator salah","Injektor bermasalah","Filter udara kotor"], solusi:["Setel ulang karburator sesuai standar","Periksa & bersihkan injektor","Bersihkan atau ganti filter udara"]},
];
const diagButtons = document.getElementById('diagButtons');
const diagResult = document.getElementById('diagResult');
diagData.forEach((d,i)=>{
  const btn = document.createElement('button');
  btn.className='diag-btn'; btn.textContent=d.label; btn.dataset.idx=i;
  btn.addEventListener('click', ()=>{
    document.querySelectorAll('.diag-btn').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    diagResult.innerHTML = `
      <h4>${d.label}</h4>
      <div class="diag-cols">
        <div><div class="label cause">Kemungkinan Penyebab</div><ul>${d.penyebab.map(p=>`<li>${p}</li>`).join('')}</ul></div>
        <div><div class="label fix">Solusi / Tindakan</div><ul>${d.solusi.map(s=>`<li>${s}</li>`).join('')}</ul></div>
      </div>`;
  });
  diagButtons.appendChild(btn);
});

/* ============ ASAP CARDS ============ */
const asapData = [
  {cls:"putih", title:"Asap Putih", desc:"Menandakan oli mesin masuk ke ruang bakar dan ikut terbakar bersama bahan bakar — biasanya karena seal atau ring piston yang sudah lemah."},
  {cls:"hitam", title:"Asap Hitam", desc:"Menandakan bahan bakar yang masuk terlalu banyak (campuran terlalu kaya) sehingga tidak terbakar sempurna."},
  {cls:"biru", title:"Asap Biru", desc:"Menandakan oli ikut terbakar di ruang bakar — mirip dengan asap putih tetapi warnanya lebih kebiruan, sering terjadi pada mesin yang sudah aus."},
];
const asapEl = document.getElementById('asapCards');
asapData.forEach(a=>{
  const card = document.createElement('div');
  card.className=`asap-card ${a.cls}`;
  card.innerHTML = `<div class="dot"></div><h4>${a.title}</h4><p>${a.desc}</p>`;
  card.addEventListener('click', ()=>card.classList.toggle('open'));
  asapEl.appendChild(card);
});

/* ============ CHECK TABS (visual/suara/bau) ============ */
document.querySelectorAll('.check-tab').forEach(t=>{
  t.addEventListener('click', ()=>{
    document.querySelectorAll('.check-tab').forEach(x=>x.classList.remove('active'));
    document.querySelectorAll('.check-panel').forEach(x=>x.classList.remove('active'));
    t.classList.add('active');
    document.getElementById('check-'+t.dataset.check).classList.add('active');
  });
});

/* ============ PROCEDURE ACCORDION ============ */
const procData = [
  {tag:"PERAWATAN HARIAN", title:"1. Memeriksa Oli Mesin", steps:["Parkir motor di tempat yang rata","Buka tutup oli / cek melalui stik oli","Periksa ketinggian oli — pastikan berada di antara batas minimum dan maksimum"], extra:"Jika oli kurang, tambahkan oli sesuai standar yang dianjurkan pabrikan."},
  {tag:"PERAWATAN BERKALA", title:"2. Mengganti Oli", steps:["Panaskan mesin sebentar agar oli encer dan mudah keluar","Buka baut pembuangan oli","Keluarkan oli lama hingga benar-benar tuntas","Tutup kembali baut pembuangan","Isi oli baru sesuai jenis dan jumlah yang direkomendasikan"]},
  {tag:"PERAWATAN BERKALA", title:"3. Membersihkan Busi", steps:["Lepas busi menggunakan kunci busi","Bersihkan kerak/karbon yang menempel pada elektroda","Atur celah busi sesuai spesifikasi","Pasang kembali busi dengan kekencangan yang tepat"]},
  {tag:"PERAWATAN HARIAN/BERKALA", title:"4. Membersihkan Filter Udara", steps:["Lepas filter udara dari rumahnya","Bersihkan debu dan kotoran yang menempel","Pasang kembali filter dengan posisi yang benar"], extra:"Fungsi filter udara adalah menjaga udara yang masuk ke ruang bakar tetap bersih."},
  {tag:"PERAWATAN BERKALA", title:"5. Menyetel Klep", steps:["Tujuannya menjaga kerja klep (katup) tetap pada celah yang ideal"], extra:"Jika setelan klep salah: mesin bisa menjadi berisik dan tenaganya melemah."},
];
const procEl = document.getElementById('procAccordion');
procData.forEach(p=>{
  const item = document.createElement('div');
  item.className='accordion-item';
  item.innerHTML = `
    <div class="accordion-head"><h4>${p.title}</h4><span class="chev">+</span></div>
    <div class="accordion-body">
      <span class="tag">${p.tag}</span>
      <ul>${p.steps.map(s=>`<li>${s}</li>`).join('')}</ul>
      ${p.extra ? `<p style="margin-top:8px;color:var(--teal);">💡 ${p.extra}</p>` : ''}
    </div>`;
  item.querySelector('.accordion-head').addEventListener('click', ()=>{
    const body = item.querySelector('.accordion-body');
    const opening = !item.classList.contains('open');
    item.classList.toggle('open');
    body.style.maxHeight = opening ? body.scrollHeight+40+'px' : null;
  });
  procEl.appendChild(item);
});

/* ============ TOOLS CHECKLIST ============ */
const toolsData = ["Kunci pas","Kunci ring","Obeng (plus & minus)","Feeler gauge (pengukur celah)","Tang","Kunci busi"];
const toolsEl = document.getElementById('toolsChecklist');
toolsData.forEach(t=>{
  const li = document.createElement('li');
  li.innerHTML = `<span class="box">✓</span><span>${t}</span>`;
  li.addEventListener('click', ()=>li.classList.toggle('checked'));
  toolsEl.appendChild(li);
});

/* ============ FOLLOW-UP ACCORDION ============ */
const followupData = [
  {title:"1. Pemeriksaan Ulang", desc:"Setelah perbaikan, periksa kembali bagian-bagian berikut untuk memastikan semuanya sudah benar:", steps:["Kebocoran oli","Suara mesin","Putaran mesin (idle dan saat digas)"]},
  {title:"2. Uji Coba Mesin", desc:"Lakukan uji coba untuk memastikan perbaikan benar-benar berhasil:", steps:["Menghidupkan mesin dan memperhatikan responnya","Mencoba akselerasi (gas perlahan lalu cepat)","Mengendarai motor pada jarak pendek"]},
  {title:"3. Mencatat Hasil Perawatan", desc:"Catat tanggal, jenis perawatan, dan hasilnya — contohnya ada pada tabel di bawah. Catatan ini membantu melacak riwayat dan jadwal servis berikutnya.", steps:[]},
  {title:"4. Membersihkan Area Kerja", desc:"Setelah selesai bekerja, rapikan area dan peralatan:", steps:["Menjaga keselamatan kerja bagi orang lain","Merapikan alat agar mudah ditemukan saat dibutuhkan lagi"]},
  {title:"5. Memberikan Saran Penggunaan", desc:"Berikan saran kepada pengguna motor agar performa tetap terjaga:", steps:["Ganti oli secara rutin sesuai jadwal","Gunakan bensin sesuai standar yang dianjurkan","Panaskan motor sebelum digunakan"]},
];
const followupEl = document.getElementById('followupAccordion');
followupData.forEach(f=>{
  const item = document.createElement('div');
  item.className='accordion-item';
  item.innerHTML = `
    <div class="accordion-head"><h4>${f.title}</h4><span class="chev">+</span></div>
    <div class="accordion-body">
      <p>${f.desc}</p>
      ${f.steps.length ? `<ul style="margin-top:8px;">${f.steps.map(s=>`<li>${s}</li>`).join('')}</ul>` : ''}
    </div>`;
  item.querySelector('.accordion-head').addEventListener('click', ()=>{
    const body = item.querySelector('.accordion-body');
    const opening = !item.classList.contains('open');
    item.classList.toggle('open');
    body.style.maxHeight = opening ? body.scrollHeight+40+'px' : null;
  });
  followupEl.appendChild(item);
});

/* ============ QUIZ ============ */
const quizData = [
  {q:"Apa fungsi utama piston pada engine sepeda motor?", opts:["Mengatur masuknya bahan bakar","Menerima tekanan hasil pembakaran dan mengubahnya menjadi gerakan","Menghasilkan percikan api","Mendinginkan mesin"], correct:1, exp:"Piston menerima tekanan dari hasil pembakaran dan bergerak naik-turun untuk diubah menjadi gerakan putar oleh stang piston dan poros engkol."},
  {q:"Pada langkah apa busi memercikkan bunga api?", opts:["Langkah Hisap","Langkah Kompresi","Langkah Usaha","Langkah Buang"], correct:2, exp:"Pada langkah usaha, busi memercikkan api untuk membakar campuran bahan bakar yang sudah dimampatkan, menghasilkan tenaga untuk mendorong piston turun."},
  {q:"Motor mengeluarkan asap putih dari knalpot. Apa kemungkinan penyebabnya?", opts:["Bahan bakar terlalu banyak","Filter udara kotor","Oli masuk ke ruang bakar","Busi kotor"], correct:2, exp:"Asap putih biasanya menandakan oli mesin ikut masuk dan terbakar di ruang bakar, sering disebabkan oleh seal atau ring piston yang sudah lemah."},
  {q:"Apa fungsi ring piston?", opts:["Menghasilkan percikan api","Menahan kebocoran kompresi dan mengontrol oli","Mencampur udara dan bahan bakar","Mendinginkan silinder"], correct:1, exp:"Ring piston menempel pada dinding silinder agar tekanan hasil pembakaran tidak bocor, sekaligus membantu mengontrol pelumasan oli pada dinding silinder."},
  {q:"Jika setelan klep salah, apa dampak yang bisa terjadi?", opts:["Mesin menjadi lebih hemat bahan bakar","Mesin menjadi berisik dan tenaganya melemah","Warna asap menjadi lebih bersih","Aki menjadi lebih awet"], correct:1, exp:"Setelan klep yang salah membuat kerja klep tidak normal, sehingga mesin menjadi berisik dan tenaga yang dihasilkan melemah."},
  {q:"Manakah yang termasuk contoh perawatan harian?", opts:["Mengganti oli mesin","Menyetel klep","Memeriksa bensin sebelum berkendara","Servis karburator"], correct:2, exp:"Memeriksa bensin termasuk perawatan harian karena dilakukan setiap kali sebelum motor digunakan. Mengganti oli, menyetel klep, dan servis karburator termasuk perawatan berkala."},
];
const quizContainer = document.getElementById('quizContainer');
let score = 0, answered = 0;

function buildQuiz(){
  quizContainer.innerHTML='';
  score = 0; answered = 0;
  document.getElementById('quizScore').style.display='none';
  quizData.forEach((q,i)=>{
    const card = document.createElement('div');
    card.className='quiz-card';
    card.innerHTML = `
      <div class="q-num">PERTANYAAN ${i+1} / ${quizData.length}</div>
      <h4>${q.q}</h4>
      <div class="quiz-opts">
        ${q.opts.map((o,j)=>`<button class="quiz-opt" data-i="${i}" data-j="${j}">${o}</button>`).join('')}
      </div>
      <div class="quiz-feedback"></div>
    `;
    quizContainer.appendChild(card);
  });
  document.querySelectorAll('.quiz-opt').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const i = +btn.dataset.i, j = +btn.dataset.j;
      const card = btn.closest('.quiz-card');
      if(card.dataset.done) return;
      card.dataset.done = "1";
      answered++;
      const opts = card.querySelectorAll('.quiz-opt');
      opts.forEach(o=>o.disabled=true);
      const correct = quizData[i].correct;
      opts[correct].classList.add('correct');
      if(j!==correct){ opts[j].classList.add('wrong'); }
      else { score++; }
      card.querySelector('.quiz-feedback').textContent = "💡 "+quizData[i].exp;
      if(answered===quizData.length){
        setTimeout(()=>{
          const scoreBox = document.getElementById('quizScore');
          document.getElementById('scoreNum').textContent = `${score}/${quizData.length}`;
          let msg = "Coba pelajari kembali materi di atas, lalu ulangi kuis ini.";
          if(score===quizData.length) msg="Sempurna! Kamu sudah memahami materi dengan sangat baik. 🎉";
          else if(score>=quizData.length-2) msg="Bagus! Pemahamanmu sudah cukup baik.";
          document.getElementById('scoreMsg').textContent = msg;
          scoreBox.style.display='block';
          scoreBox.scrollIntoView({behavior:'smooth', block:'center'});
        }, 400);
      }
    });
  });
}
buildQuiz();
document.getElementById('resetQuiz').addEventListener('click', buildQuiz);
</script>
</body>
</html>