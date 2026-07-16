<!DOCTYPE html>
<html lang="id">
<head>
 <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sasis Sepeda Motor — Modul Belajar Interaktif</title>
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
  *{box-sizing:border-box; margin:0; padding:0;}
  html{scroll-behavior:smooth;}
  body{
    font-family:'Inter',sans-serif;
    background:var(--paper);
    color:var(--ink);
    line-height:1.6;
    h1,h2,h3,h4{
    font-family:'Rajdhani',sans-serif;
    font-weight:700;
  }
  @font-face{
    font-family:'Inter';
    src:local('Inter');
  }
  h1,h2,h3,h4{
    font-family:'Oswald','Arial Narrow',sans-serif;
    font-weight:700;
    letter-spacing:0.02em;
    text-transform:uppercase;
    color:var(--steel);
  }
  a{color:var(--safety);}

  /* ===== TOP NAV ===== */
  .tabnav{
  position:sticky;top:0;z-index:50;
  background:rgba(255, 255, 255, 0.92);backdrop-filter:blur(8px);
  border-bottom:1px solid var(--line);
}

.tabnav-inner{
    width:100%;
    max-width:1200px;
    margin:0 auto;

    display:flex;
    justify-content:center;
    gap:40px;
}

.tabbtn{   
    flex:0 0 auto;
    background:none;
    border:none;
    color:var(--text-secondary);
    font-family:'Rajdhani',sans-serif;
    font-weight:600;
    font-size:.95rem;
    padding:16px 18px;
    border-bottom:3px solid transparent;
    text-decoration:none;
    padding:16px 24px;
    transition:.3s;
}

.tabbtn:hover{
    color:#4361EE;
}

.tabbtn.active{
    color:#4361EE;
    border-bottom:3px solid #4361EE;
}
  .topbar{
    position:sticky; top:0; z-index:50;
    background:var(--ink);
    color:var(--paper);
    display:flex; align-items:center; justify-content:space-between;
    padding:0.7rem 1.2rem;
    box-shadow:var(--shadow);
  }
  .topbar .brand{
    font-family:'Oswald',sans-serif;
    font-weight:700; font-size:1.05rem; letter-spacing:0.08em;
    text-transform:uppercase;
    display:flex; align-items:center; gap:0.6rem;
  }
  .topbar .brand .dot{
    width:10px;height:10px;background:var(--safety);
    border-radius:50%; display:inline-block;
    box-shadow:0 0 0 3px rgba(232,99,28,0.25);
  }
  .progress-wrap{
    flex:1; max-width:340px; margin:0 1.2rem;
    height:6px; background:rgba(255,255,255,0.15); border-radius:4px; overflow:hidden;
    display:none;
  }
  @media(min-width:700px){.progress-wrap{display:block;}}
  .progress-bar{height:100%; width:0%; background:linear-gradient(90deg,var(--safety),var(--safety-light)); transition:width .25s ease;}
  .nav-toggle{
    background:var(--safety); color:#fff; border:none; padding:0.5rem 0.9rem;
    font-family:'Oswald',sans-serif; font-weight:600; letter-spacing:0.05em;
    text-transform:uppercase; font-size:0.8rem; border-radius:3px; cursor:pointer;
  }

  /* ===== SIDE NAV ===== */
  .layout{display:flex; min-height:100vh;}
  .sidenav{
    width:230px; background:var(--steel); color:var(--paper);
    padding:1.2rem 0; position:sticky; top:46px; align-self:flex-start;
    height:calc(100vh - 46px); overflow-y:auto; flex-shrink:0;
    transform:translateX(0); transition:transform .3s ease;
  }
  .sidenav a{
    display:block; color:rgba(243,239,230,0.78); text-decoration:none;
    padding:0.5rem 1.2rem; font-size:0.85rem; font-weight:500;
    border-left:3px solid transparent;
  }
  .sidenav a.active, .sidenav a:hover{
    color:#fff; background:rgba(0,0,0,0.18); border-left-color:var(--safety);
  }
  .sidenav .sec-label{
    font-family:'Oswald',sans-serif; font-size:0.7rem; letter-spacing:0.12em;
    color:var(--safety-light); padding:1rem 1.2rem 0.3rem; text-transform:uppercase;
  }
  @media(max-width:900px){
    .sidenav{position:fixed; left:0; top:46px; z-index:40; transform:translateX(-100%); box-shadow:var(--shadow);}
    .sidenav.open{transform:translateX(0);}
  }

  main{flex:1; min-width:0;}

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
  .hero .eyebrow{
    color:var(--safety-light); font-family:'Oswald',sans-serif;
    font-size:0.85rem; letter-spacing:0.25em; text-transform:uppercase;
    margin-bottom:0.6rem;
  }
  .hero h1{
    color:#fff; font-size:clamp(2.1rem,6vw,3.6rem); line-height:1.05;
    margin-bottom:0.8rem; max-width:14ch;
  }
  .hero p{color:#FFFFFF;
    opacity:.95;
    font-size:1.05rem;
    line-height:1.8;
    max-width:700px;
  }
  .hero .meta{
    margin-top:1.4rem; display:flex; gap:1.4rem; flex-wrap:wrap;
    font-size:0.85rem; color:var(--safety-light); font-family:'Oswald',sans-serif; letter-spacing:0.05em;
  }
  .hero .meta span{display:flex; align-items:center; gap:0.4rem;}

  .section{
    max-width:880px; margin:0 auto; padding:3rem 1.5rem;
    border-bottom:1px solid var(--line);
  }
  
  .hero-text{flex:1;min-width:280px;}
  .section:last-of-type{border-bottom:none;}
  .section .kicker{
    font-family:'Oswald',sans-serif; color:var(--safety); font-size:0.78rem;
    letter-spacing:0.2em; margin-bottom:0.4rem;
  }
  .section h2{color:#000000;
    font-family:'Rajdhani',sans-serif;
    font-weight:700;}
  .section h3{font-size:1.15rem; color:var(--ink); margin:1.6rem 0 0.6rem; text-transform:none; letter-spacing:0; font-family:'Oswald',sans-serif; font-weight:600;}
  .section p{margin-bottom:0.9rem; max-width:68ch;}
  .section ul{margin:0 0 1rem 1.2rem;}
  .section li{margin-bottom:0.35rem;}

  .callout{
    background:var(--card); border-left:4px solid var(--safety);
    padding:1rem 1.2rem; border-radius:4px; box-shadow:var(--shadow);
    margin:1.2rem 0; font-size:0.95rem;
  }
  .callout strong{color:var(--safety);}

  .grid-2{display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin:1.2rem 0;}
  @media(max-width:700px){.grid-2{grid-template-columns:1fr;}}
  .card{
     background:#FFFFFF;
    border:1px solid #E5E7EB;
    border-radius:16px;
    box-shadow:
    0 4px 12px rgba(0,0,0,.08);
  }
  .card h4{color:var(--text);}
  .card p{font-size:0.9rem; margin-bottom:0; color:#444;}

  /* ===== DIAGRAM (interactive) ===== */
  .diagram-box{
    background:var(--card); border-radius:8px; box-shadow:var(--shadow);
    padding:1rem; margin:1.4rem 0; border:1px solid var(--line);
  }
  .diagram-box .dtitle{
    font-family:'Oswald',sans-serif; font-size:0.85rem; letter-spacing:0.1em;
    color:var(--steel); margin-bottom:0.6rem; text-transform:uppercase;
  }
  .diagram-flex{display:flex; gap:1.2rem; flex-wrap:wrap; align-items:flex-start;}
  .diagram-svg-wrap{flex:1 1 320px; min-width:280px;}
  .diagram-info{
    flex:1 1 240px; background:var(--paper); border-radius:6px; padding:0.9rem 1rem;
    font-size:0.9rem; border:1px dashed var(--line); min-height:140px;
  }
  .diagram-info h4{color:var(--steel); font-family:'Oswald',sans-serif; letter-spacing:0.05em; margin-bottom:0.4rem; font-size:0.95rem;}
  .diagram-info p{margin-bottom:0; font-size:0.88rem;}
  .hint{font-size:0.8rem; color:#888; margin-top:0.5rem; font-style:italic;}

  .part{cursor:pointer; transition:opacity .15s ease;}
  .part:hover{opacity:0.75;}
  .part.active rect, .part.active path, .part.active circle, .part.active ellipse{
    stroke:var(--safety) !important; stroke-width:3px !important;
  }

  /* ===== SIM CONTROLS ===== */
  .sim-controls{display:flex; gap:0.6rem; flex-wrap:wrap; margin-top:0.8rem;}
  .sim-btn{
    background:var(--steel); color:#fff; border:none; padding:0.5rem 1rem;
    font-family:'Oswald',sans-serif; font-size:0.78rem; letter-spacing:0.08em;
    text-transform:uppercase; border-radius:4px; cursor:pointer; font-weight:600;
  }
  .sim-btn:hover{background:var(--safety);}
  .sim-btn.active{background:var(--safety);}
  input[type="range"]{width:100%; accent-color:var(--safety);}

  /* ===== ACCORDION ===== */
  .acc-item{border:1px solid var(--line); border-radius:6px; margin-bottom:0.6rem; overflow:hidden; background:var(--card);}
  .acc-head{
    padding:0.8rem 1rem; cursor:pointer; display:flex; justify-content:space-between; align-items:center;
    font-family:'Oswald',sans-serif; font-size:0.92rem; letter-spacing:0.04em; color:var(--steel);
    background:#fbf9f4;
  }
  .acc-head:hover{background:#f4efe2;}
  .acc-head .arrow{transition:transform .25s ease; color:var(--safety); font-weight:bold;}
  .acc-item.open .arrow{transform:rotate(90deg);}
  .acc-body{max-height:0; overflow:hidden; transition:max-height .3s ease;}
  .acc-body-inner{padding:0 1rem 1rem; font-size:0.9rem;}
  .acc-body-inner ul{margin-left:1.1rem;}

  /* ===== TROUBLESHOOT TABLE ===== */
  .ts-table{width:100%; border-collapse:collapse; font-size:0.88rem; margin:1rem 0; background:var(--card); box-shadow:var(--shadow); border-radius:6px; overflow:hidden;}
  .ts-table th{background:var(--steel); color:#fff; text-align:left; padding:0.6rem 0.8rem; font-family:'Oswald',sans-serif; letter-spacing:0.05em; font-size:0.78rem; text-transform:uppercase;}
  .ts-table td{padding:0.6rem 0.8rem; border-bottom:1px solid var(--line); vertical-align:top;}
  .ts-table tr:last-child td{border-bottom:none;}
  .ts-table tr:hover td{background:#fbf6ec;}

  /* ===== CASE SIMULATOR ===== */
  .case-box{background:var(--card); border-radius:8px; box-shadow:var(--shadow); padding:1.2rem; border:1px solid var(--line); margin:1.2rem 0;}
  .case-box .symptom{font-style:italic; color:var(--steel); margin-bottom:0.8rem; font-size:0.95rem;}
  .case-options{display:flex; flex-direction:column; gap:0.5rem;}
  .case-opt{
    background:#fbf9f4; border:1px solid var(--line); border-radius:5px; padding:0.6rem 0.9rem;
    cursor:pointer; font-size:0.9rem; text-align:left; transition:all .15s ease;
  }
  .case-opt:hover{border-color:var(--safety);}
  .case-opt.correct{background:#e9f5ea; border-color:var(--ok); color:#2c5a35;}
  .case-opt.wrong{background:#fbeae7; border-color:var(--bad); color:#8a3328;}
  .case-feedback{margin-top:0.8rem; font-size:0.88rem; padding:0.6rem 0.8rem; border-radius:5px; display:none;}
  .case-feedback.show{display:block;}
  .case-feedback.ok{background:#e9f5ea; color:#2c5a35;}
  .case-feedback.bad{background:#fbeae7; color:#8a3328;}

  /* ===== QUIZ ===== */
  .quiz-box{background:var(--card); border-radius:8px; box-shadow:var(--shadow); padding:1.2rem 1.4rem; border:1px solid var(--line); margin-bottom:1rem;}
  .quiz-q{font-family:'Oswald',sans-serif; font-size:0.98rem; color:var(--ink); text-transform:none; letter-spacing:0; margin-bottom:0.7rem;}
  .quiz-opt{
    display:block; width:100%; text-align:left; background:#fbf9f4; border:1px solid var(--line);
    padding:0.55rem 0.9rem; border-radius:5px; margin-bottom:0.5rem; cursor:pointer; font-size:0.9rem; font-family:inherit;
  }
  .quiz-opt:hover{border-color:var(--steel-light);}
  .quiz-opt.correct{background:#e9f5ea; border-color:var(--ok);}
  .quiz-opt.wrong{background:#fbeae7; border-color:var(--bad);}
  .quiz-explain{font-size:0.85rem; color:#666; margin-top:0.4rem; display:none;}
  .quiz-explain.show{display:block;}
  .quiz-score{
    position:sticky; bottom:1rem; background:var(--ink); color:#fff; padding:0.8rem 1.2rem;
    border-radius:8px; text-align:center; font-family:'Oswald',sans-serif; letter-spacing:0.08em;
    box-shadow:var(--shadow); margin-top:1rem;
  }
  .quiz-score .num{color:var(--safety-light); font-size:1.2rem; font-weight:700;}

  /* ===== PRACTICE / TASK ===== */
  .task-list{list-style:none; margin-left:0;}
  .task-list li{
    background:var(--card); border:1px solid var(--line); border-radius:6px;
    padding:0.7rem 1rem; margin-bottom:0.5rem; display:flex; align-items:flex-start; gap:0.7rem; font-size:0.92rem;
  }
  .task-list input[type=checkbox]{margin-top:0.2rem; width:18px; height:18px; accent-color:var(--safety); flex-shrink:0;}
  .task-list li.done span{text-decoration:line-through; color:#999;}

  footer{
    background:var(--ink); color:rgba(243,239,230,0.7); text-align:center;
    padding:2rem 1.5rem; font-size:0.85rem;
  }
  footer strong{color:var(--safety-light);}

  .acc-item{
    background:#FFFFFF;

    border:1px solid var(--line);

    border-radius:14px;

    margin-bottom:12px;
}

.acc-head{
    padding:14px 18px;

    font-family:'Inter',sans-serif;

    font-weight:600;

    color:#000000;
}
  /* back to top */
  .totop{
    position:fixed; right:1.2rem; bottom:1.2rem; width:42px; height:42px; border-radius:50%;
    background:var(--safety); color:#fff; border:none; font-size:1.2rem; cursor:pointer;
    box-shadow:var(--shadow); display:none; align-items:center; justify-content:center; z-index:60;
  }
  .totop.show{display:flex;}
</style>
</head>
<body>
<main>
    <!-- HERO -->
    <header class="hero" id="hero">
      <div class="hero-text">
      <div class="eyebrow">Teknik Bisnis Sepeda Motor · Sistem Sasis</div>
      <h1>Sasis Sepeda Motor <span>, Perawatan & Perbaikan</span></h1>
      <p>Pelajari rangka, sistem kemudi, suspensi, rem, hingga roda — lengkap dengan diagram interaktif cara kerja, simulasi kasus kerusakan, dan kuis evaluasi mandiri.</p>
      </div>
      <div class="meta">
        <span>📘 11 Bagian Materi</span>
        <span>🧩 Diagram Interaktif</span>
        <span>🛠️ Simulasi Diagnosis</span>
        <span>✅ Kuis Otomatis</span>
      </div>
    </header>

<nav class="tabnav">
    <div class="tabnav-inner">

        <a href="#pengertian" class="tabbtn">
            Bab 1–2
        </a>

        <a href="#gangguan" class="tabbtn">
            Bab 3–4
        </a>

        <a href="#perawatan" class="tabbtn">
            Bab 5–7
        </a>

        <a href="#k3" class="tabbtn">
            Bab 8–9
        </a>

        <a href="#tugas" class="tabbtn">
            Evaluasi
        </a>

        <a href="/kuis/2" class="tabbtn">
            Kuis
        </a>

        <a href="{{ route('dashboard.siswa') }}" class="tabbtn">
            ←Dashboard
        </a>

    </div>
</nav>

    </div>
</nav>    <!-- 1. PENGERTIAN -->
    <section class="section" id="pengertian">
      <div class="kicker">Bab 1 · Bagian A</div>
      <h2>Pengertian Sasis Sepeda Motor</h2>
      <p>Sasis adalah <strong>struktur dasar</strong> sepeda motor yang menopang dan menyatukan seluruh komponen — mulai dari mesin, sistem kemudi, suspensi, rem, roda, hingga bodi. Tanpa sasis yang kokoh, sepeda motor tidak dapat berdiri tegak, apalagi dikendarai dengan aman.</p>
      <p>Bayangkan sasis seperti <strong>kerangka tubuh manusia</strong>: tulang menopang otot dan organ, menjaga bentuk tubuh, dan memungkinkan tubuh bergerak dengan stabil. Begitu pula sasis sepeda motor — ia menjadi "tulang" yang menyatukan semua bagian menjadi satu kendaraan yang utuh dan berfungsi.</p>

      <h3>Lima Fungsi Utama Sasis</h3>
      <div class="grid-2">
        <div class="card"><h4>🏋️ Menopang Beban</h4><p>Menahan berat mesin, pengendara, penumpang, dan barang bawaan agar terdistribusi dengan baik ke roda.</p></div>
        <div class="card"><h4>⚖️ Menjaga Kestabilan</h4><p>Mengatur titik berat kendaraan sehingga tetap seimbang saat berjalan lurus, menikung, atau melaju di jalan tidak rata.</p></div>
        <div class="card"><h4>🛋️ Kenyamanan Berkendara</h4><p>Bekerja sama dengan suspensi untuk meredam getaran dan benturan dari permukaan jalan.</p></div>
        <div class="card"><h4>⚙️ Menyalurkan Tenaga</h4><p>Meneruskan gaya dorong dari mesin ke roda, serta gaya reaksi dari roda ke seluruh kendaraan saat bergerak atau direm.</p></div>
        <div class="card"><h4>🛡️ Menjaga Keamanan</h4><p>Melindungi pengendara dari risiko kecelakaan akibat kegagalan struktur, sekaligus menjaga komponen lain tetap terpasang dengan benar.</p></div>
      </div>

      <div class="callout">
        <strong>Kaitan dengan dunia nyata:</strong> Saat kamu mengendarai motor melewati jalan berlubang, sasis-lah yang menerima hentakan pertama dari suspensi, lalu menyalurkan sisa getaran secara merata ke seluruh bodi — bukan terkonsentrasi di satu titik yang bisa membuat motor "limbung" atau pecah di sambungan rangka.
      </div>
    </section>

    <!-- 2. KOMPONEN -->
    <section class="section" id="komponen">
      <div class="kicker">Bab 1 · Bagian B</div>
      <h2>Komponen Utama Sasis</h2>
      <p>Sasis terdiri dari lima sub-sistem yang saling terhubung. Klik setiap bagian pada diagram di bawah untuk melihat penjelasan detailnya.</p>

      <div class="diagram-box">
        <div class="dtitle">🔎 Diagram Interaktif — Klik bagian motor</div>
        <div class="diagram-flex">
          <div class="diagram-svg-wrap">
            <svg viewBox="0 0 600 320" xmlns="http://www.w3.org/2000/svg" style="width:100%; height:auto; font-family:'Oswald',sans-serif;">
              <!-- ground -->
              <line x1="20" y1="280" x2="580" y2="280" stroke="#cfc6b4" stroke-width="2" stroke-dasharray="4 4"/>

              <!-- RANGKA (frame backbone) -->
              <g class="part" data-part="rangka">
                <path d="M120 230 L320 120 L420 120 L470 230 Z" fill="#dfe6e8" stroke="#3c4a52" stroke-width="2"/>
                <text x="280" y="180" fill="#3c4a52" font-size="13" font-weight="600">RANGKA</text>
              </g>

              <!-- SUSPENSI DEPAN -->
              <g class="part" data-part="suspensi-depan">
                <rect x="430" y="120" width="14" height="100" rx="4" fill="#e8631c" stroke="#3c4a52" stroke-width="2"/>
                <rect x="427" y="170" width="20" height="40" rx="3" fill="#ffb27a" stroke="#3c4a52" stroke-width="1.5"/>
                <text x="395" y="105" fill="#3c4a52" font-size="13" font-weight="600">SUSPENSI DEPAN</text>
              </g>

              <!-- SUSPENSI BELAKANG -->
              <g class="part" data-part="suspensi-belakang">
                <rect x="160" y="180" width="12" height="55" rx="3" fill="#e8631c" stroke="#3c4a52" stroke-width="2" transform="rotate(20 166 207)"/>
                <text x="60" y="245" fill="#3c4a52" font-size="13" font-weight="600">SUSPENSI BELAKANG</text>
              </g>

              <!-- KEMUDI -->
              <g class="part" data-part="kemudi">
                <rect x="438" y="60" width="10" height="60" fill="#3c4a52"/>
                <line x1="410" y1="65" x2="480" y2="65" stroke="#3c4a52" stroke-width="8" stroke-linecap="round"/>
                <text x="430" y="45" fill="#3c4a52" font-size="13" font-weight="600">SISTEM KEMUDI</text>
              </g>

              <!-- RODA DEPAN + REM -->
              <g class="part" data-part="rem-depan">
                <circle cx="500" cy="245" r="40" fill="none" stroke="#3c4a52" stroke-width="6"/>
                <circle cx="500" cy="245" r="16" fill="#5e7079" stroke="#3c4a52" stroke-width="2"/>
                <text x="470" y="300" fill="#3c4a52" font-size="13" font-weight="600">REM DEPAN</text>
              </g>

              <!-- RODA BELAKANG -->
              <g class="part" data-part="roda-belakang">
                <circle cx="130" cy="245" r="40" fill="none" stroke="#3c4a52" stroke-width="6"/>
                <circle cx="130" cy="245" r="16" fill="#5e7079" stroke="#3c4a52" stroke-width="2"/>
                <text x="60" y="300" fill="#3c4a52" font-size="13" font-weight="600">PELEK & BAN</text>
              </g>
            </svg>
          </div>
          <div class="diagram-info" id="diagramInfo">
            <h4>👆 Pilih komponen</h4>
            <p>Klik salah satu bagian pada gambar untuk melihat fungsi, jenis, dan prinsip kerjanya secara singkat.</p>
          </div>
        </div>
        <div class="hint">Diagram skematik — bukan representasi proporsi sebenarnya, untuk tujuan pembelajaran.</div>
      </div>

      <h3>1. Rangka (Frame)</h3>
      <p>Rangka adalah "tulang punggung" sepeda motor yang menopang seluruh komponen, menjaga keseimbangan, dan menahan getaran serta beban. Setiap jenis rangka dirancang untuk karakter berkendara yang berbeda:</p>
      <div class="acc-item">
        <div class="acc-head"><span>Backbone Frame</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><p>Berbentuk seperti tulang punggung tunggal dari bawah setang ke arah mesin. Umum dipakai pada motor bebek/skuter matik karena ringan dan ringkas, memberi ruang lega untuk dek kaki.</p></div></div>
      </div>
      <div class="acc-item">
        <div class="acc-head"><span>Diamond Frame</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><p>Membentuk pola berlian dengan beberapa pipa rangka yang menyatukan setang, mesin, dan suspensi belakang. Banyak digunakan pada motor sport dan bebek karena kokoh namun tetap ringan.</p></div></div>
      </div>
      <div class="acc-item">
        <div class="acc-head"><span>Twin Tube Frame</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><p>Terdiri dari dua pipa rangka utama yang membungkus mesin dari kedua sisi, memberikan kekuatan ekstra untuk menahan getaran mesin berkapasitas besar.</p></div></div>
      </div>
      <div class="acc-item">
        <div class="acc-head"><span>Underbone Frame</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><p>Rangka tipis memanjang di bagian bawah tanpa tabung besar di tengah, khas motor bebek klasik — memberi posisi duduk tegak dan bobot ringan.</p></div></div>
      </div>
      <div class="acc-item">
        <div class="acc-head"><span>Trellis Frame</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><p>Tersusun dari pipa-pipa kecil berbentuk segitiga yang saling menyilang seperti rangka jembatan (truss). Memberi kekakuan tinggi dengan bobot rendah, sering dipakai motor sport performa tinggi.</p></div></div>
      </div>

      <h3>2. Sistem Kemudi</h3>
      <p>Sistem kemudi mengarahkan kendaraan sesuai keinginan pengendara melalui komponen: <strong>handlebar/stang</strong> (pegangan kendali), <strong>segitiga kemudi</strong> (penghubung stang ke garpu depan), <strong>steering shaft</strong> (poros kemudi/poros komstir), dan <strong>bearing kemudi</strong> (bantalan agar putaran halus).</p>
      <p><strong>Prinsip kerja:</strong> saat stang diputar, gerakan tersebut diteruskan oleh poros kemudi ke segitiga kemudi, yang kemudian memutar garpu depan beserta roda depan, sehingga arah kendaraan berubah sesuai sudut putaran.</p>

      <h3>3. Sistem Suspensi</h3>
      <p>Suspensi meredam getaran dari permukaan jalan agar berkendara tetap nyaman dan ban tetap menapak dengan baik.</p>
      <div class="grid-2">
        <div class="card"><h4>Suspensi Depan</h4><p><strong>Teleskopik</strong> — tabung suspensi lurus vertikal di kedua sisi roda depan, paling umum dijumpai.<br><strong>Upside Down (USD)</strong> — posisi tabung dan as dibalik (tabung di atas), memberi kekakuan dan respons lebih baik, umum di motor sport.</p></div>
        <div class="card"><h4>Suspensi Belakang</h4><p><strong>Twin Shock</strong> — dua peredam kejut di kiri-kanan lengan ayun.<br><strong>Monoshock</strong> — satu peredam kejut di tengah, lebih ringan dan respons lebih presisi.</p></div>
      </div>
      <p><strong>Prinsip kerja:</strong> saat roda melewati permukaan tidak rata, pegas (spring) menyerap energi benturan dengan memendek dan memanjang, sementara oli di dalam shock absorber mengalir melalui lubang-lubang kecil (orifice) untuk meredam ayunan pegas — mencegah motor "mengangguk" terus-menerus setelah melewati gundukan.</p>

      <h3>4. Sistem Rem</h3>
      <p>Rem berfungsi memperlambat dan menghentikan laju kendaraan dengan mengubah energi gerak menjadi panas melalui gesekan.</p>
      <div class="grid-2">
        <div class="card"><h4>Rem Cakram (Disc Brake)</h4><p>Saat tuas/pedal rem ditekan, tekanan hidraulik dari minyak rem mendorong piston di dalam kaliper, sehingga kampas rem menjepit cakram (disc) yang berputar bersama roda. Respons cepat, performa stabil meski sering digunakan.</p></div>
        <div class="card"><h4>Rem Tromol (Drum Brake)</h4><p>Saat tuas ditarik, kabel atau batang penghubung menggerakkan kampas rem ke arah luar sehingga menekan dinding bagian dalam tromol yang berputar bersama roda, menimbulkan gesekan yang memperlambat roda.</p></div>
      </div>

      <h3>5. Pelek dan Ban</h3>
      <p><strong>Pelek</strong> adalah tempat pemasangan ban, terdiri dari <strong>pelek jari-jari (spoke wheel)</strong> yang fleksibel dan mudah diperbaiki, serta <strong>pelek casting wheel (CW)</strong> yang lebih kaku, ringan, dan umum digunakan dengan ban tubeless.</p>
      <p><strong>Ban</strong> menopang beban kendaraan, menjaga traksi (cengkeraman ke jalan), dan menyerap getaran ringan sebelum diteruskan ke suspensi. Jenisnya meliputi <strong>tube type</strong> (menggunakan ban dalam) dan <strong>tubeless</strong> (tanpa ban dalam, lebih tahan terhadap kebocoran mendadak).</p>
    </section>

    <!-- 3. PRINSIP KERJA -->
    <section class="section" id="prinsip">
      <div class="kicker">Bab 2</div>
      <h2>Prinsip Kerja Sasis Secara Keseluruhan</h2>
      <p>Sasis bukan kumpulan komponen yang berdiri sendiri — ia bekerja sebagai <strong>satu kesatuan sistem</strong> yang saling mendukung. Gunakan simulasi di bawah untuk melihat alur kerja sasis saat motor melaju.</p>

      <div class="diagram-box">
        <div class="dtitle">⚙️ Simulasi Alur Kerja Sasis</div>
        <div class="diagram-flex">
          <div class="diagram-svg-wrap">
            <svg viewBox="0 0 600 360" xmlns="http://www.w3.org/2000/svg" style="width:100%; height:auto; font-family:'Oswald',sans-serif;" id="flowSvg">
              <!-- flow boxes -->
              <g id="box-mesin"><rect x="40" y="20" width="150" height="50" rx="6" fill="#dfe6e8" stroke="#3c4a52" stroke-width="2"/><text x="115" y="50" text-anchor="middle" font-size="13" font-weight="600" fill="#3c4a52">1. MESIN</text></g>
              <g id="box-rangka"><rect x="225" y="20" width="150" height="50" rx="6" fill="#dfe6e8" stroke="#3c4a52" stroke-width="2"/><text x="300" y="50" text-anchor="middle" font-size="13" font-weight="600" fill="#3c4a52">2. RANGKA</text></g>
              <g id="box-suspensi"><rect x="410" y="20" width="150" height="50" rx="6" fill="#dfe6e8" stroke="#3c4a52" stroke-width="2"/><text x="485" y="50" text-anchor="middle" font-size="13" font-weight="600" fill="#3c4a52">3. SUSPENSI</text></g>

              <g id="box-kemudi"><rect x="410" y="150" width="150" height="50" rx="6" fill="#dfe6e8" stroke="#3c4a52" stroke-width="2"/><text x="485" y="180" text-anchor="middle" font-size="13" font-weight="600" fill="#3c4a52">4. KEMUDI</text></g>
              <g id="box-ban"><rect x="225" y="150" width="150" height="50" rx="6" fill="#dfe6e8" stroke="#3c4a52" stroke-width="2"/><text x="300" y="180" text-anchor="middle" font-size="13" font-weight="600" fill="#3c4a52">5. BAN (TRAKSI)</text></g>
              <g id="box-rem"><rect x="40" y="150" width="150" height="50" rx="6" fill="#dfe6e8" stroke="#3c4a52" stroke-width="2"/><text x="115" y="180" text-anchor="middle" font-size="13" font-weight="600" fill="#3c4a52">6. REM</text></g>

              <!-- arrows -->
              <path d="M190 45 H225" stroke="#3c4a52" stroke-width="2" marker-end="url(#arrow)"/>
              <path d="M375 45 H410" stroke="#3c4a52" stroke-width="2" marker-end="url(#arrow)"/>
              <path d="M485 70 V150" stroke="#3c4a52" stroke-width="2" marker-end="url(#arrow)"/>
              <path d="M410 175 H375" stroke="#3c4a52" stroke-width="2" marker-end="url(#arrow)"/>
              <path d="M225 175 H190" stroke="#3c4a52" stroke-width="2" marker-end="url(#arrow)"/>
              <path d="M115 150 V70" stroke="#3c4a52" stroke-width="2" stroke-dasharray="4 3" marker-end="url(#arrow)"/>

              <defs>
                <marker id="arrow" markerWidth="8" markerHeight="8" refX="4" refY="4" orient="auto"><path d="M0,0 L8,4 L0,8 Z" fill="#3c4a52"/></marker>
              </defs>

              <text x="300" y="260" text-anchor="middle" font-size="13" fill="#5e7079" id="flowCaption">Tekan "Mulai" untuk melihat alur tenaga &amp; kestabilan saat motor melaju.</text>

              <!-- moving pulse -->
              <circle id="pulse" cx="115" cy="45" r="8" fill="#e8631c" opacity="0"/>
            </svg>
          </div>
          <div class="diagram-info" id="flowInfo">
            <h4>🔁 Alur Sistem</h4>
            <p>Mesin menghasilkan tenaga → rangka menopang dan menyalurkan gaya → suspensi meredam getaran → kemudi mengarahkan → ban menjaga traksi → rem menghentikan laju. Jika satu mata rantai ini gagal, kestabilan seluruh kendaraan ikut terganggu.</p>
          </div>
        </div>
        <div class="sim-controls">
          <button class="sim-btn" id="playFlow">▶ Mulai Simulasi</button>
          <button class="sim-btn" id="breakFlow">⚠ Apa Jika Suspensi Rusak?</button>
        </div>
      </div>

      <p>Contoh keterkaitan: jika <strong>suspensi belakang</strong> bocor (oli shock habis), maka rangka akan menerima hentakan jalan secara penuh tanpa diredam. Akibatnya, getaran berlebih merambat ke <strong>sistem kemudi</strong> (membuat setang bergetar tak stabil) dan menurunkan <strong>traksi ban</strong> karena roda sering "memantul" lepas dari permukaan jalan — yang pada akhirnya memengaruhi efektivitas <strong>rem</strong> saat dibutuhkan mendadak.</p>
    </section>

    <!-- 4. GANGGUAN -->
    <section class="section" id="gangguan">
      <div class="kicker">Bab 3</div>
      <h2>Tanda-Tanda Gangguan pada Sasis</h2>
      <p>Setiap sub-sistem sasis memberikan "sinyal" tertentu ketika mengalami gangguan. Mengenali gejala awal membantu mencegah kerusakan yang lebih parah dan membahayakan keselamatan.</p>

      <table class="ts-table">
        <tr><th>Sub-Sistem</th><th>Gejala / Tanda Gangguan</th><th>Kemungkinan Sebab</th></tr>
        <tr><td>Sistem Rem</td><td>Rem terasa "blong" / kurang pakem, bunyi decit saat ditekan, tuas terasa dalam</td><td>Kampas rem habis, minyak rem kurang/bocor, ada angin dalam sistem hidraulik</td></tr>
        <tr><td>Sistem Kemudi</td><td>Setang terasa berat, longgar/goyang, atau bunyi "klotok" saat belok</td><td>Bearing komstir kotor/aus, baut kemudi kendor</td></tr>
        <tr><td>Suspensi</td><td>Motor "mengayun" terus setelah melewati gundukan, terdengar bunyi "blug" keras, terlihat rembesan oli</td><td>Seal shock bocor, pegas lemah/patah, oli shock berkurang</td></tr>
        <tr><td>Rangka</td><td>Motor terasa "narik" ke satu sisi, muncul karat/retakan pada las-lasan, bodi terasa tidak presisi saat dipasang</td><td>Rangka bengkok akibat benturan, korosi, kelelahan logam</td></tr>
        <tr><td>Pelek & Ban</td><td>Getaran berlebih saat melaju, ban habis tidak rata, pelek tampak "peang" (tidak bulat)</td><td>Pelek bengkok, ban kurang angin/berlebih, jari-jari pelek kendor/patah</td></tr>
      </table>

      <div class="callout">
        <strong>Tips belajar:</strong> Hubungkan setiap gejala di tabel ini dengan prinsip kerja yang sudah dipelajari di Bab 2. Misalnya, "motor narik ke satu sisi" berkaitan langsung dengan fungsi rangka sebagai penopang yang menjaga kestabilan — jika bengkok, distribusi beban ke kedua roda menjadi tidak seimbang.
      </div>
    </section>

    <!-- 5. DIAGNOSIS -->
    <section class="section" id="diagnosis">
      <div class="kicker">Bab 4</div>
      <h2>Prosedur Diagnosis Kerusakan</h2>
      <p>Diagnosis adalah proses sistematis untuk menemukan <strong>akar penyebab</strong> kerusakan, bukan sekadar gejalanya. Diagnosis yang baik mengikuti tiga langkah berurutan:</p>

      <h3>1. Pemeriksaan Visual</h3>
      <p>Langkah paling cepat dan murah — menggunakan mata dan tangan untuk memeriksa:</p>
      <ul>
        <li><strong>Kebocoran</strong> — rembesan oli pada shock absorber atau master rem</li>
        <li><strong>Retakan</strong> — pada las-lasan rangka, dudukan mesin, atau lengan ayun</li>
        <li><strong>Keausan</strong> — kondisi kampas rem, permukaan ban, dan bearing</li>
        <li><strong>Baut kendor</strong> — pada titik kritis seperti as roda, baut suspensi, dan baut rangka</li>
      </ul>

      <h3>2. Pemeriksaan Fungsi</h3>
      <p>Menguji apakah komponen bekerja sebagaimana mestinya saat dioperasikan:</p>
      <ul>
        <li><strong>Menguji pengereman</strong> — merasakan respons tuas/pedal rem dan jarak pengereman</li>
        <li><strong>Memeriksa gerak suspensi</strong> — menekan bodi motor untuk merasakan redaman dan mendengarkan bunyi abnormal</li>
        <li><strong>Mengecek putaran roda</strong> — memutar roda bebas untuk mendeteksi bunyi bearing atau hambatan tidak normal</li>
      </ul>

      <h3>3. Pengukuran</h3>
      <p>Menggunakan alat ukur untuk mendapatkan data presisi yang dibandingkan dengan spesifikasi standar pabrikan:</p>
      <ul>
        <li><strong>Jangka sorong</strong> — mengukur ketebalan kampas rem, diameter cakram/tromol</li>
        <li><strong>Dial gauge</strong> — mengukur kebengkokan pelek atau as roda</li>
        <li><strong>Tire pressure gauge</strong> — mengukur tekanan angin ban sesuai standar</li>
      </ul>

      <div class="callout">
        <strong>Alur diagnosis yang benar:</strong> Visual → Fungsi → Pengukuran. Jangan langsung membongkar komponen sebelum melalui ketiga tahap ini — diagnosis yang terburu-buru sering menyebabkan penggantian komponen yang sebenarnya masih baik.
      </div>
    </section>

    <!-- 6. SIMULASI KASUS -->
    <section class="section" id="kasus">
      <div class="kicker">Studi Kasus</div>
      <h2>Simulasi Diagnosis: Pilih Tindakanmu</h2>
      <p>Berikut tiga kasus keluhan pelanggan. Pilih langkah diagnosis yang paling tepat sebagai teknisi.</p>

      <div class="case-box">
        <div class="symptom">📋 Kasus 1: "Pak, motor saya kalau direm depan, tuasnya dalam banget baru ngegigit, kadang malah nggak pakem sama sekali."</div>
        <div class="case-options">
          <button class="case-opt" data-correct="false">Langsung ganti kampas rem dengan yang baru.</button>
          <button class="case-opt" data-correct="true">Periksa level dan kondisi minyak rem, cek kemungkinan ada udara dalam sistem hidraulik (perlu bleeding).</button>
          <button class="case-opt" data-correct="false">Ganti seluruh master rem tanpa pemeriksaan lebih lanjut.</button>
        </div>
        <div class="case-feedback"></div>
      </div>

      <div class="case-box">
        <div class="symptom">📋 Kasus 2: "Motor saya kalau lewat jalan jelek, bagian belakang kerasa 'gluduk-gluduk' dan ada rembesan minyak di dekat shock belakang."</div>
        <div class="case-options">
          <button class="case-opt" data-correct="false">Tambahkan oli mesin pada area yang bocor.</button>
          <button class="case-opt" data-correct="true">Lakukan pemeriksaan visual pada seal shock belakang — kemungkinan seal bocor sehingga oli shock berkurang dan redaman hilang.</button>
          <button class="case-opt" data-correct="false">Ganti ban belakang dengan ukuran lebih besar.</button>
        </div>
        <div class="case-feedback"></div>
      </div>

      <div class="case-box">
        <div class="symptom">📋 Kasus 3: "Setang motor saya kalau dibelokkan terasa berat sebelah dan kadang ada bunyi 'klotok' pelan dari area dekat tangki."</div>
        <div class="case-options">
          <button class="case-opt" data-correct="false">Kencangkan rantai motor.</button>
          <button class="case-opt" data-correct="true">Periksa kelonggaran dan kondisi bearing pada sistem kemudi (komstir) — bunyi dan rasa berat sebelah menunjukkan bearing kotor atau kendor.</button>
          <button class="case-opt" data-correct="false">Ganti pelek depan karena dianggap bengkok.</button>
        </div>
        <div class="case-feedback"></div>
      </div>
    </section>

    <!-- 7. PERAWATAN -->
    <section class="section" id="perawatan">
      <div class="kicker">Bab 5</div>
      <h2>Prosedur Perawatan Sasis</h2>
      <p>Tujuan perawatan adalah menjaga performa kendaraan, mencegah kerusakan, menambah umur komponen, dan menjamin keselamatan. Ada tiga jenis perawatan:</p>

      <div class="grid-2">
        <div class="card"><h4>🗓️ Perawatan Berkala</h4><p>Dilakukan sesuai jadwal servis rutin (misal setiap 4.000 km), tanpa menunggu tanda kerusakan muncul.</p></div>
        <div class="card"><h4>🛡️ Perawatan Preventif</h4><p>Tindakan pencegahan berdasarkan kondisi komponen, sebelum kerusakan benar-benar terjadi — misalnya mengganti seal yang mulai getas.</p></div>
        <div class="card"><h4>🔧 Perawatan Korektif</h4><p>Dilakukan setelah kerusakan terjadi, untuk mengembalikan fungsi komponen ke kondisi normal.</p></div>
      </div>

      <h3>Langkah Perawatan per Sistem</h3>
      <div class="acc-item">
        <div class="acc-head"><span>Sistem Rem</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><ul>
          <li>Periksa volume dan warna minyak rem (minyak rem yang menghitam menandakan perlu diganti)</li>
          <li>Periksa ketebalan kampas rem terhadap batas minimum</li>
          <li>Bersihkan kaliper dari debu dan kotoran agar piston bergerak bebas</li>
          <li>Lakukan bleeding (buang udara palsu) jika tuas terasa "ngempos"</li>
        </ul></div></div>
      </div>
      <div class="acc-item">
        <div class="acc-head"><span>Sistem Kemudi</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><ul>
          <li>Periksa kelonggaran stang dengan menggoyangkan garpu depan ke arah depan-belakang</li>
          <li>Lumasi bearing komstir secara berkala agar putaran tetap halus</li>
          <li>Kencangkan baut-baut segitiga kemudi sesuai torsi standar</li>
        </ul></div></div>
      </div>
      <div class="acc-item">
        <div class="acc-head"><span>Suspensi</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><ul>
          <li>Periksa kebocoran oli pada tabung shock depan maupun belakang</li>
          <li>Periksa kondisi pegas — pastikan tidak patah atau berkarat parah</li>
          <li>Ganti oli shock sesuai interval atau bila terlihat encer/kotor</li>
        </ul></div></div>
      </div>
      <div class="acc-item">
        <div class="acc-head"><span>Pelek dan Ban</span><span class="arrow">▸</span></div>
        <div class="acc-body"><div class="acc-body-inner"><ul>
          <li>Cek tekanan ban sesuai standar yang tercantum pada stiker rantai/swing arm</li>
          <li>Periksa keausan tapak ban dan kerataan permukaannya</li>
          <li>Lakukan spooring dan balancing agar putaran roda presisi</li>
          <li>Periksa kekencangan jari-jari pelek (untuk pelek spoke)</li>
        </ul></div></div>
      </div>
    </section>

    <!-- 8. PERBAIKAN -->
    <section class="section" id="perbaikan">
      <div class="kicker">Bab 6</div>
      <h2>Prosedur Perbaikan Sasis</h2>

      <h3>A. Persiapan Perbaikan</h3>
      <p>Sebelum memulai perbaikan, teknisi wajib: (1) menggunakan Alat Pelindung Diri (APD), (2) menyiapkan alat dan bahan sesuai kebutuhan, dan (3) merujuk pada manual servis resmi sebagai acuan spesifikasi dan prosedur.</p>

      <div class="grid-2">
        <div class="card"><h4>🛑 Perbaikan Sistem Rem</h4><p>Mengganti kampas rem yang sudah tipis, mengganti minyak rem yang terkontaminasi, atau mengganti master rem yang sudah bocor/rusak.</p></div>
        <div class="card"><h4>🎯 Perbaikan Sistem Kemudi</h4><p>Mengganti bearing komstir yang aus, dan meluruskan segitiga kemudi yang bengkok akibat benturan.</p></div>
        <div class="card"><h4>🌀 Perbaikan Suspensi</h4><p>Mengganti seal shock yang bocor, dan mengganti oli shock yang sudah habis fungsi redamnya.</p></div>
        <div class="card"><h4>🛞 Perbaikan Ban & Pelek</h4><p>Menambal ban yang bocor, mengganti ban yang sudah gundul, dan meluruskan pelek yang bengkok.</p></div>
      </div>
    </section>

    <!-- 9. TINDAK LANJUT -->
    <section class="section" id="tindaklanjut">
      <div class="kicker">Bab 7</div>
      <h2>Tindak Lanjut Hasil Perawatan & Perbaikan</h2>

      <h3>A. Pengujian Akhir</h3>
      <p>Sebelum kendaraan dikembalikan ke pemilik, teknisi memastikan motor benar-benar normal melalui:</p>
      <ul>
        <li><strong>Test ride</strong> — uji jalan untuk merasakan handling dan kenyamanan secara langsung</li>
        <li><strong>Pemeriksaan ulang rem</strong> — memastikan respons rem sudah pakem dan tidak bocor</li>
        <li><strong>Pemeriksaan kestabilan</strong> — memastikan motor tidak menarik ke satu sisi dan setang stabil</li>
      </ul>

      <h3>B. Dokumentasi Hasil Servis</h3>
      <p>Laporan servis yang baik mencatat: jenis kerusakan yang ditemukan, tindakan perbaikan yang dilakukan, komponen yang diganti (lengkap dengan kode part jika ada), dan hasil pengujian akhir. Dokumentasi ini penting untuk riwayat servis kendaraan dan klaim garansi.</p>

      <h3>C. Edukasi Pengguna</h3>
      <p>Teknisi yang profesional juga berperan sebagai edukator bagi pemilik kendaraan, dengan memberi saran seperti jadwal servis berkala selanjutnya, tekanan ban ideal sesuai beban, dan cara berkendara/perawatan harian yang benar agar sasis tetap awet.</p>
    </section>

    <!-- 10. K3 -->
    <section class="section" id="k3">
      <div class="kicker">Bab 8</div>
      <h2>Keselamatan Kerja (K3)</h2>
      <div class="grid-2">
        <div class="card"><h4>🧤 Penggunaan APD</h4><p>Sarung tangan untuk melindungi dari benda tajam dan oli, kacamata kerja saat menggerinda atau membersihkan komponen, serta sepatu safety untuk melindungi kaki dari benda jatuh.</p></div>
        <div class="card"><h4>⚠️ Keselamatan Saat Servis</h4><p>Gunakan standar tengah agar motor stabil saat dikerjakan, hindari tumpahan minyak/oli yang membuat lantai licin, dan gunakan alat sesuai fungsinya (jangan memaksa alat untuk pekerjaan yang bukan peruntukannya).</p></div>
      </div>
      <div class="callout"><strong>Ingat:</strong> K3 bukan formalitas — sebagian besar kecelakaan kerja di bengkel terjadi karena hal-hal sederhana yang diabaikan, seperti motor yang jatuh karena tidak menggunakan standar tengah, atau tangan tergores akibat tidak memakai sarung tangan.</div>
    </section>

    <!-- 11. ALAT -->
    <section class="section" id="alat">
      <div class="kicker">Bab 9</div>
      <h2>Alat & Perlengkapan Servis Sasis</h2>
      <div class="grid-2">
        <div class="card"><h4>🔩 Alat Umum</h4><p>Kunci pas, kunci ring, kunci shock (socket), obeng, dan tang — digunakan untuk pekerjaan pengencangan dan pelepasan baut secara umum.</p></div>
        <div class="card"><h4>🛠️ Alat Khusus</h4><p>Tire pressure gauge (mengukur tekanan ban), bleeding kit (membuang udara dari sistem rem hidraulik), bearing remover (melepas bearing tanpa merusak dudukannya), dan hydraulic jack (mengangkat motor saat perbaikan suspensi/roda).</p></div>
      </div>
    </section>

    <!-- 12. TUGAS -->
    <section class="section" id="tugas">
      <div class="kicker">Tugas Praktik</div>
      <h2>Daftar Tugas Praktik</h2>
      <p>Centang setiap tugas setelah kamu menyelesaikannya di bengkel/lab praktik. (Centang hanya tersimpan selama sesi ini berjalan.)</p>
      <ul class="task-list" id="taskList">
        <li><input type="checkbox"><span>Melakukan pemeriksaan sistem rem sepeda motor (visual, fungsi, dan pengukuran ketebalan kampas).</span></li>
        <li><input type="checkbox"><span>Mengukur tekanan ban sesuai standar yang tercantum pada stiker kendaraan.</span></li>
        <li><input type="checkbox"><span>Membongkar dan memasang kembali roda depan dengan urutan yang benar.</span></li>
        <li><input type="checkbox"><span>Memeriksa kelonggaran sistem kemudi (komstir) dengan metode goyang garpu depan.</span></li>
        <li><input type="checkbox"><span>Membuat laporan hasil pemeriksaan sasis sepeda motor sesuai format dokumentasi servis.</span></li>
      </ul>
    </section>

    <!-- 13. KUIS -->
    <section class="section" id="kuis">
      <div class="kicker">Evaluasi Akhir</div>
      <h2>Kuis Evaluasi Mandiri</h2>
      <p>Jawab pertanyaan berikut untuk menguji pemahamanmu. Skor akan dihitung otomatis di bagian bawah.</p>

      <div class="quiz-box" data-answer="1">
        <div class="quiz-q">1. Fungsi utama sistem suspensi pada sepeda motor adalah...</div>
        <button class="quiz-opt">Menambah kecepatan maksimum motor</button>
        <button class="quiz-opt">Mengurangi getaran dari permukaan jalan</button>
        <button class="quiz-opt">Menghemat konsumsi bahan bakar</button>
        <button class="quiz-opt">Menambah tenaga mesin</button>
        <div class="quiz-explain">Suspensi bekerja meredam getaran agar berkendara nyaman dan ban tetap menapak jalan dengan baik.</div>
      </div>

      <div class="quiz-box" data-answer="2">
        <div class="quiz-q">2. Komponen yang berfungsi menghentikan laju kendaraan adalah...</div>
        <button class="quiz-opt">Suspensi</button>
        <button class="quiz-opt">Rangka</button>
        <button class="quiz-opt">Sistem rem</button>
        <button class="quiz-opt">Pelek</button>
        <div class="quiz-explain">Sistem rem mengubah energi gerak menjadi panas melalui gesekan untuk memperlambat dan menghentikan kendaraan.</div>
      </div>

      <div class="quiz-box" data-answer="1">
        <div class="quiz-q">3. Ban yang aus tidak rata pada salah satu sisi biasanya disebabkan oleh...</div>
        <button class="quiz-opt">Oli mesin habis</button>
        <button class="quiz-opt">Tekanan ban tidak sesuai standar</button>
        <button class="quiz-opt">Rangka putus total</button>
        <button class="quiz-opt">Kampas rem baru dipasang</button>
        <div class="quiz-explain">Tekanan ban yang terlalu rendah atau terlalu tinggi membuat distribusi tapak ban ke jalan tidak merata, sehingga keausan terjadi tidak rata.</div>
      </div>

      <div class="quiz-box" data-answer="0">
        <div class="quiz-q">4. Jenis rangka yang tersusun dari pipa-pipa kecil berbentuk segitiga menyilang seperti rangka jembatan adalah...</div>
        <button class="quiz-opt">Trellis frame</button>
        <button class="quiz-opt">Backbone frame</button>
        <button class="quiz-opt">Underbone frame</button>
        <button class="quiz-opt">Twin tube frame</button>
        <div class="quiz-explain">Trellis frame menggunakan susunan pipa segitiga menyilang (truss) yang memberi kekakuan tinggi dengan bobot ringan.</div>
      </div>

      <div class="quiz-box" data-answer="2">
        <div class="quiz-q">5. Urutan tahapan diagnosis kerusakan sasis yang benar adalah...</div>
        <button class="quiz-opt">Pengukuran → Fungsi → Visual</button>
        <button class="quiz-opt">Fungsi → Pengukuran → Visual</button>
        <button class="quiz-opt">Visual → Fungsi → Pengukuran</button>
        <button class="quiz-opt">Pengukuran → Visual → Fungsi</button>
        <div class="quiz-explain">Diagnosis dimulai dari pemeriksaan visual (paling cepat & murah), lalu pemeriksaan fungsi, dan diakhiri pengukuran presisi untuk konfirmasi.</div>
      </div>
      <a href="/kuis/2"><button class="nav-toggle" id="navToggle">Quiz Akhir</button></a>

      <div class="quiz-score" id="quizScore">Skor: <span class="num" id="scoreNum">0</span> / 5</div>
    </section>

    <footer>
      Modul Belajar Interaktif — <strong>Sasis Sepeda Motor</strong> · Teknik Bisnis Sepeda Motor (TBSM)<br>
      Disusun untuk kebutuhan pembelajaran daring/luring siswa SMK.
    </footer>
  </main>
</div>

<button class="totop" id="totop" title="Ke atas">↑</button>

<script>
// ===== Sidenav toggle =====
const sidenav = document.getElementById('sidenav');
document.getElementById('navToggle').addEventListener('click', () => sidenav.classList.toggle('open'));
document.querySelectorAll('.nav-link').forEach(a => a.addEventListener('click', () => sidenav.classList.remove('open')));

// ===== Progress bar + active link + back to top =====
const sections = document.querySelectorAll('section, header.hero');
const progressBar = document.getElementById('progressBar');
const totop = document.getElementById('totop');
window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  progressBar.style.width = (scrollTop / docHeight * 100) + '%';
  totop.classList.toggle('show', scrollTop > 600);

  let current = '';
  sections.forEach(sec => {
    if (scrollTop >= sec.offsetTop - 120) current = sec.id;
  });
  document.querySelectorAll('.nav-link').forEach(a => {
    a.classList.toggle('active', a.getAttribute('href') === '#' + current);
  });
});
totop.addEventListener('click', () => window.scrollTo({top:0, behavior:'smooth'}));

// ===== Diagram interaktif komponen =====
const partData = {
  'rangka': {title:'Rangka (Frame)', text:'Tulang punggung sepeda motor. Menopang seluruh komponen, menjaga keseimbangan, dan menahan getaran. Jenis: backbone, diamond, twin tube, underbone, trellis.'},
  'suspensi-depan': {title:'Suspensi Depan', text:'Meredam getaran roda depan. Tipe teleskopik (umum) atau upside down/USD (lebih kaku, respons cepat). Pegas + oli shock menyerap benturan jalan.'},
  'suspensi-belakang': {title:'Suspensi Belakang', text:'Tipe twin shock (dua peredam di kiri-kanan) atau monoshock (satu peredam di tengah, lebih presisi). Bekerja sama dengan lengan ayun.'},
  'kemudi': {title:'Sistem Kemudi', text:'Stang → poros kemudi (komstir) → segitiga kemudi → garpu depan. Saat stang diputar, roda depan ikut berputar sesuai sudut kemudi.'},
  'rem-depan': {title:'Rem Depan', text:'Umumnya rem cakram: tekanan minyak rem mendorong piston kaliper, kampas menjepit cakram yang berputar bersama roda, menghasilkan gesekan pengereman.'},
  'roda-belakang': {title:'Pelek & Ban', text:'Pelek (jari-jari atau casting wheel) menopang ban. Ban (tube type/tubeless) menjaga traksi, menopang beban, dan menyerap getaran ringan.'}
};
document.querySelectorAll('.part').forEach(p => {
  p.addEventListener('click', () => {
    document.querySelectorAll('.part').forEach(x => x.classList.remove('active'));
    p.classList.add('active');
    const data = partData[p.dataset.part];
    document.getElementById('diagramInfo').innerHTML = `<h4>${data.title}</h4><p>${data.text}</p>`;
  });
});

// ===== Simulasi alur kerja sasis =====
const flowOrder = ['box-mesin','box-rangka','box-suspensi','box-kemudi','box-ban','box-rem'];
const flowPositions = [
  {cx:115, cy:45}, {cx:300, cy:45}, {cx:485, cy:45},
  {cx:485, cy:175}, {cx:300, cy:175}, {cx:115, cy:175}
];
const flowCaptions = [
  'Mesin menghasilkan tenaga untuk menggerakkan kendaraan.',
  'Rangka menopang seluruh komponen dan menyalurkan gaya.',
  'Suspensi meredam getaran agar berkendara nyaman.',
  'Kemudi mengarahkan kendaraan sesuai kemauan pengendara.',
  'Ban menjaga traksi/cengkeraman ke permukaan jalan.',
  'Rem menghentikan laju kendaraan saat dibutuhkan.'
];
let flowStep = 0, flowTimer = null;
const pulse = document.getElementById('pulse');
const flowCaption = document.getElementById('flowCaption');

function resetFlow(){
  flowOrder.forEach(id => document.querySelector('#'+id+' rect').setAttribute('fill','#dfe6e8'));
  pulse.setAttribute('opacity','0');
  flowStep = 0;
}
document.getElementById('playFlow').addEventListener('click', () => {
  clearInterval(flowTimer);
  resetFlow();
  pulse.setAttribute('opacity','1');
  flowTimer = setInterval(() => {
    if (flowStep > 0) document.querySelector('#'+flowOrder[flowStep-1]+' rect').setAttribute('fill','#ffe9d9');
    if (flowStep >= flowOrder.length){
      clearInterval(flowTimer);
      pulse.setAttribute('opacity','0');
      flowCaption.textContent = 'Selesai! Semua sub-sistem bekerja sebagai satu kesatuan.';
      return;
    }
    document.querySelector('#'+flowOrder[flowStep]+' rect').setAttribute('fill','#e8631c');
    pulse.setAttribute('cx', flowPositions[flowStep].cx);
    pulse.setAttribute('cy', flowPositions[flowStep].cy);
    flowCaption.textContent = flowCaptions[flowStep];
    flowStep++;
  }, 900);
});
document.getElementById('breakFlow').addEventListener('click', () => {
  clearInterval(flowTimer);
  resetFlow();
  document.querySelector('#box-suspensi rect').setAttribute('fill','#fbeae7');
  document.querySelector('#box-suspensi rect').setAttribute('stroke','#c2483a');
  document.querySelector('#box-kemudi rect').setAttribute('fill','#fff4e8');
  document.querySelector('#box-ban rect').setAttribute('fill','#fff4e8');
  document.querySelector('#box-rem rect').setAttribute('fill','#fff4e8');
  flowCaption.textContent = 'Jika suspensi rusak: getaran jalan langsung ke rangka → kemudi bergetar tak stabil → traksi ban menurun → efektivitas rem ikut terganggu.';
});

// ===== Accordion =====
document.querySelectorAll('.acc-head').forEach(head => {
  head.addEventListener('click', () => {
    const item = head.parentElement;
    const body = item.querySelector('.acc-body');
    const isOpen = item.classList.contains('open');
    // close all in same context (optional - keep independent)
    item.classList.toggle('open');
    body.style.maxHeight = isOpen ? '0px' : body.scrollHeight + 'px';
  });
});

// ===== Studi kasus simulasi =====
document.querySelectorAll('.case-box').forEach(box => {
  const feedback = box.querySelector('.case-feedback');
  box.querySelectorAll('.case-opt').forEach(opt => {
    opt.addEventListener('click', () => {
      if (box.dataset.answered) return;
      box.dataset.answered = 'true';
      const correct = opt.dataset.correct === 'true';
      box.querySelectorAll('.case-opt').forEach(o => {
        if (o.dataset.correct === 'true') o.classList.add('correct');
        else if (o === opt) o.classList.add('wrong');
      });
      feedback.classList.add('show', correct ? 'ok' : 'bad');
      feedback.textContent = correct
        ? '✅ Tepat! Langkah ini sesuai prosedur diagnosis: pemeriksaan visual & fungsi sebelum mengganti komponen.'
        : '❌ Belum tepat. Tindakan ini melompati prosedur diagnosis (langsung mengganti komponen tanpa pemeriksaan dapat membuang biaya & waktu). Lihat jawaban yang ditandai hijau.';
    });
  });
});

// ===== Kuis evaluasi =====
let score = 0, answered = 0;
const totalQuiz = document.querySelectorAll('.quiz-box').length;
document.querySelectorAll('.quiz-box').forEach(box => {
  const correctIdx = parseInt(box.dataset.answer);
  const opts = box.querySelectorAll('.quiz-opt');
  const explain = box.querySelector('.quiz-explain');
  opts.forEach((opt, idx) => {
    opt.addEventListener('click', () => {
      if (box.dataset.done) return;
      box.dataset.done = 'true';
      answered++;
      opts.forEach((o,i) => {
        if (i === correctIdx) o.classList.add('correct');
        else if (i === idx) o.classList.add('wrong');
      });
      if (idx === correctIdx) score++;
      explain.classList.add('show');
      document.getElementById('scoreNum').textContent = score;
      if (answered === totalQuiz){
        document.getElementById('quizScore').innerHTML = `Skor Akhir: <span class="num">${score} / ${totalQuiz}</span> — ${score===totalQuiz ? 'Sempurna! 🎉' : score >= totalQuiz*0.6 ? 'Baik, coba ulas materi yang masih salah.' : 'Pelajari kembali materi terkait, lalu coba lagi.'}`;
      }
    });
  });
});

// ===== Task checklist (visual feedback only) =====
document.querySelectorAll('#taskList li').forEach(li => {
  const cb = li.querySelector('input');
  cb.addEventListener('change', () => li.classList.toggle('done', cb.checked));
});
</script>

<script>
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