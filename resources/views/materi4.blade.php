<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Kelistrikan Sepeda Motor | Media Pembelajaran</title>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.10.0/dist/tabler-icons.min.css">
<style>
  :root{
    --primary:#4361EE;
    --primary-dark:#3651D4;
    --secondary:#8E44AD;
    --success:#22C55E;
    --danger:#EF4444;
    --surface:#FFFFFF;
    --surface-2:#F8F9FC;
    --text:#1F2937;
    --text-secondary:#6B7280;
    --line:#E5E7EB;
    --bg:#F5F6FA;
    --radius:14px;
}

  * { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family:'Inter',sans-serif;
    background: var(--bg);
    color: var(--text);
    font-size: 15px;
    line-height: 1.6;
  }

  /* HEADER */
  .site-header {
        background:linear-gradient(
        135deg,
        #4361EE 0%,
        #8E44AD 100%
    );
    color: white;
    padding: 64px 24px 48px;
    text-align: center;
  }
  .site-header .badge {
    display: inline-block;
    background: rgba(255,255,255,0.2);
    padding: 4px 14px;
    border-radius: 20px;
    font-size: 12px;
    margin-bottom: 0.75rem;
    letter-spacing: 0.5px;
  }
  .site-header h1 {
    font-family:'Rajdhani',sans-serif;
    font-weight:700;
    font-size: 28px;
    margin-bottom: 0.5rem;
  }
  .site-header p {
    font-size: 14px;
    opacity: 0.85;
    max-width: 600px;
    margin: 0 auto;
  }
  .header-icons {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-top: 1.25rem;
    font-size: 13px;
    opacity: 0.9;
  }
  .header-icons span { display: flex; align-items: center; gap: 6px; }

  /* NAVIGATION */
  .nav-bar {
  position:sticky;
  top:0;
  z-index:50;

  background:rgba(255,255,255,.92);

  backdrop-filter:blur(8px);

  border-bottom:1px solid var(--line);

  }
  .tabnav-inner {
    max-width:1100px;
  margin:0 auto;

  display:flex;
  gap:4px;

  overflow-x:auto;

  padding:0 16px;
}
  .nav-tab {
    padding: 1rem 1.25rem;
    font-size: 14px;
    font-weight: 500;
    color: var(--text-muted);
    cursor: pointer;
    border: none;
    background: none;
    border-bottom: 3px solid transparent;
    white-space: nowrap;
    transition: all 0.2s;
    display: flex;
    justify-content:center;
    align-items:center;
    overflow-x:auto;
     white-space:nowrap;
    gap: 6px;
  }
  .tabbtn{
  flex:0 0 auto;

  background:none;
  border:none;

  color:var(--text-secondary);

  font-family:'Rajdhani',sans-serif;
  font-weight:600;

  padding:16px 18px;

  border-bottom:3px solid transparent;
}

.tabbtn.active{
  color:#4361EE;
  border-bottom:3px solid #4361EE;
}
  .nav-tab:hover { color: var(--primary); }
  .nav-tab.active { color: var(--primary); border-bottom-color: var(--primary); }
  .nav-tab i { font-size: 18px; }
  

  /* MAIN CONTENT */
  .main { max-width: 900px; margin: 0 auto; padding: 1.5rem; }
  .section { display: none; }
  .section.active { display: block; }

  /* CARDS */
  .sistem-card{
    background:#FFFFFF;

    border:1px solid #E5E7EB;

    border-radius:16px;

    transition:.25s;
}

.sistem-card:hover{
    transform:translateY(-3px);

    border-color:#4361EE;
}
  .card {
    background:#FFFFFF;
    border:1px solid #E5E7EB;
    border-radius:16px;
    box-shadow:
      0 4px 12px rgba(0,0,0,.08);
  }
  .card-title {
    font-size: 17px;
    font-weight: 600;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--secondary);
  }
  .card-title i { font-size: 22px; color: var(--primary); }

  /* GRID */
  .grid2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1rem; }

  /* KOMPONEN ITEMS */
  .komponen-item {
    background: #f8f9fb;
    border-radius: var(--radius-sm);
    padding: 1rem;
    border-left: 3px solid var(--primary);
  }
  .komponen-item h4 { font-size: 14px; font-weight: 600; margin-bottom: 6px; }
  .komponen-item p { font-size: 13px; color: var(--text-muted); line-height: 1.6; }

  /* STEPS */
  .step-flow { display: flex; flex-direction: row; gap: 0; }
  .step-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 14px 0;
    border-bottom: 1px solid #f0f0f0;
  }
  .step-item:last-child { border-bottom: none; }
  .step-num {
    width: 30px; height: 30px;
    border-radius: 50%;
    background: var(--primary);
    color: white;
    display: flex; align-items: center; justify-content: center;
    font-size: 13px; font-weight: 600;
    flex-shrink: 0; margin-top: 2px;
  }
  .step-content h4 { font-size: 14px; font-weight: 600; margin-bottom: 5px; }
  .step-content p { font-size: 13px; color: var(--text-muted); line-height: 1.6; }

  /* SISTEM GRID */
  .sistem-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
    gap: 10px;
    margin-bottom: 1rem;
  }
  .sistem-card {
    background: #f8f9fb;
    border-radius: var(--radius);
    padding: 1.25rem 1rem;
    text-align: center;
    cursor: pointer;
    border: 2px solid transparent;
    transition: all 0.2s;
  }
  .sistem-card:hover { border-color: var(--primary); background: var(--primary-light); }
  .sistem-card.selected { border-color: var(--primary); background: var(--primary-light); }
  .sistem-card i { font-size: 30px; color: var(--primary); margin-bottom: 8px; display: block; }
  .sistem-card span { font-size: 13px; font-weight: 500; }

  /* DETAIL PANEL */
  .detail-panel {
    background: white;
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 1.5rem;
    margin-top: 1rem;
    display: none;
    animation: fadeIn 0.3s ease;
  }
  .detail-panel.show { display: block; }
  @keyframes fadeIn { from { opacity: 0; transform: translateY(6px); } to { opacity: 1; transform: translateY(0); } }
  .detail-panel h3 {
    font-size: 17px; font-weight: 600;
    margin-bottom: 1rem; color: var(--primary);
    display: flex; align-items: center; gap: 8px;
  }

  /* TAGS */
  .komponen-list { display: flex; flex-wrap: wrap; gap: 8px; margin: 0.75rem 0; }
  .komponen-tag {
    background: var(--primary-light); color: var(--primary);
    padding: 5px 14px; border-radius: 20px; font-size: 12px; font-weight: 500;
  }

  /* ALUR KERJA */
  .alur {
    display: flex; align-items: center; flex-wrap: wrap; gap: 6px; margin: 0.75rem 0;
  }
  .alur-item {
    background: var(--secondary); color: white;
    padding: 6px 12px; border-radius: var(--radius-sm); font-size: 12px;
  }
  .alur-arrow { color: var(--text-muted); font-size: 18px; }

  /* INFO BOXES */
  .info-box {
    background: var(--primary-light);
    border-left: 4px solid var(--primary);
    padding: 12px 16px;
    border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
    margin: 1rem 0;
    font-size: 13px; line-height: 1.7;
    
  }
  .info-box strong { color: var(--primary-dark); }
  .warning-box {
    background: var(--warning-bg);
    border-left: 4px solid var(--accent);
    padding: 12px 16px;
    border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
    margin: 1rem 0;
    font-size: 13px; line-height: 1.7;
  }
  .warning-box strong { color: var(--warning-text); }
  .danger-box {
    background: var(--danger-bg);
    border-left: 4px solid var(--danger);
    padding: 12px 16px;
    border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
    margin: 1rem 0;
    font-size: 13px; line-height: 1.7;
  }
  .danger-box strong { color: var(--danger-text); }

  /* SUB TABS */
  .tabs-sub { display: flex; gap: 6px; flex-wrap: wrap; margin-bottom: 1rem; }
  .tab-sub {
    padding: 7px 14px;
    border-radius: var(--radius-sm);
    border: 1px solid var(--border);
    background: white;
    font-size: 13px; cursor: pointer; color: var(--text-muted);
    transition: all 0.2s;
  }
  .tab-sub:hover { border-color: var(--primary); color: var(--primary); }
  .tab-sub.active { background: var(--secondary); color: white; border-color: var(--secondary); }
  .sub-content { display: none; }
  .sub-content.active { display: block; }

  /* TABLES */
  .gangguan-table { width: 100%; border-collapse: collapse; font-size: 13px; }
  .gangguan-table th {
    background: var(--secondary); color: white;
    padding: 10px 14px; text-align: left; font-weight: 500;
  }
  .gangguan-table th:first-child { border-radius: var(--radius-sm) 0 0 0; }
  .gangguan-table th:last-child { border-radius: 0 var(--radius-sm) 0 0; }
  .gangguan-table td { padding: 10px 14px; border-bottom: 1px solid #f0f0f0; }
  .gangguan-table tr:hover td { background: #fafbfc; }
  .gejala-tag {
    background: var(--warning-bg); color: var(--warning-text);
    padding: 3px 10px; border-radius: 12px; font-size: 12px; display: inline-block;
  }
  .penyebab-tag {
    background: var(--danger-bg); color: var(--danger-text);
    padding: 3px 10px; border-radius: 12px; font-size: 12px; display: inline-block;
  }
  .solusi-tag {
    background: var(--success-bg); color: var(--success-text);
    padding: 3px 10px; border-radius: 12px; font-size: 12px; display: inline-block;
  }

  /* PERAWATAN STEPS */
  .perawatan-step {
    display: flex; gap: 14px; padding: 12px 0;
    border-bottom: 1px solid #f0f0f0;
  }
  .perawatan-step:last-child { border-bottom: none; }
  .step-icon {
    width: 38px; height: 38px;
    border-radius: var(--radius-sm);
    background: var(--primary-light);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .step-icon i { font-size: 20px; color: var(--primary); }
  .perawatan-step h4 { font-size: 13px; font-weight: 600; margin-bottom: 4px; }
  .perawatan-step p { font-size: 13px; color: var(--text-muted); line-height: 1.5; }

  /* QUIZ */
  .quiz-container { max-width: 680px; margin: 0 auto; }
  .quiz-progress {
    display: flex; align-items: center; gap: 14px; margin-bottom: 1.5rem;
  }
  .progress-bar {
    flex: 1; height: 8px;
    background: #e8e8e8; border-radius: 4px; overflow: hidden;
  }
  .progress-fill {
    height: 100%; background: var(--primary);
    border-radius: 4px; transition: width 0.4s ease;
  }
  .q-label { font-size: 13px; color: var(--text-muted); white-space: nowrap; }
  .score-badge { font-size: 13px; font-weight: 600; color: var(--primary); white-space: nowrap; }
  .quiz-q { font-size: 16px; font-weight: 500; margin-bottom: 1.25rem; line-height: 1.6; }
  .quiz-options { display: flex; flex-direction: row; gap: 10px; }
  .quiz-opt {
    padding: 12px 18px;
    border: 1.5px solid var(--border);
    border-radius: var(--radius);
    cursor: pointer;
    font-size: 14px;
    background: white;
    transition: all 0.2s;
    text-align: left;
    line-height: 1.5;
  }
  .quiz-opt:hover:not(.disabled) { border-color: var(--primary); background: var(--primary-light); }
  .quiz-opt.correct { background: var(--success-bg); border-color: var(--success-text); color: var(--success-text); }
  .quiz-opt.wrong { background: var(--danger-bg); border-color: var(--danger-text); color: var(--danger-text); }
  .quiz-opt.disabled { cursor: default; }
  .quiz-feedback {
    margin-top: 1rem; padding: 14px 16px;
    border-radius: var(--radius); font-size: 14px; line-height: 1.6;
  }
  .quiz-feedback.correct { background: var(--success-bg); color: var(--success-text); }
  .quiz-feedback.wrong { background: var(--danger-bg); color: var(--danger-text); }
  .btn-next {
    margin-top: 1rem;
    padding: 10px 24px;
    background: var(--primary);
    color: white; border: none;
    border-radius: var(--radius); cursor: pointer;
    font-size: 14px; font-weight: 500;
    display: none; transition: background 0.2s;
  }
  .btn-next:hover { background: var(--primary-dark); }
  .quiz-done { text-align: center; padding: 3rem 2rem; }
  .score-big { font-size: 64px; font-weight: 700; color: var(--primary); }
  .score-pct { font-size: 22px; font-weight: 600; margin: 0.5rem 0; }
  .quiz-done p { color: var(--text-muted); font-size: 15px; margin: 0.5rem 0; }
  .btn-restart {
    margin-top: 1.5rem;
    padding: 12px 28px;
    background: var(--primary); color: white;
    border: none; border-radius: var(--radius);
    cursor: pointer; font-size: 15px; font-weight: 500;
    transition: background 0.2s;
  }
  .btn-restart:hover { background: var(--primary-dark); }

  /* FOOTER */
  .site-footer {
    text-align: center;
    padding: 2rem;
    font-size: 12px;
    color: var(--text-muted);
    border-top: 1px solid var(--border);
    margin-top: 2rem;
  }

  /* RESPONSIVE */
  @media (max-width: 600px) {
    .site-header h1 { font-size: 22px; }
    .header-icons { gap: 1rem; font-size: 12px; flex-wrap: wrap; }
    .nav-tab { padding: 0.75rem 0.9rem; font-size: 13px; }
    .main { padding: 1rem; }
    .card { padding: 1.25rem; }
    .alur { flex-direction: row; align-items: flex-start; }
    .alur-arrow { transform: rotate(90deg); }
    .sistem-grid { grid-template-columns: repeat(3, 1fr); }
  }

  /* PRINT */
  @media print {
    .nav-bar, .site-footer { display: none; }
    .section { display: block !important; }
    .card { box-shadow: none; border: 1px solid #ccc; }
  }
</style>
</head>
<body>

<header class="site-header">
  <span class="badge">SMK Teknik Otomotif — Kelas XI / XII</span>
  <h1>⚡ Sistem Kelistrikan Sepeda Motor</h1>
  <p>Media pembelajaran interaktif: komponen, prinsip kerja, diagnosis gangguan, dan prosedur perawatan.</p>
  <div class="header-icons">
    <span><i class="ti ti-book"></i> 7 Sistem Utama</span>
    <span><i class="ti ti-tool"></i> Panduan Servis</span>
    <span><i class="ti ti-checkbox"></i> Kuis 8 Soal</span>
  </div>
</header>

<nav class="nav-bar">
  <div class="tabnav-inner">
  <button class="nav-tab active" onclick="showSection('overview',this)"><i class="ti ti-layout-grid"></i> Gambaran Umum</button>
  <button class="nav-tab" onclick="showSection('sistem',this)"><i class="ti ti-cpu"></i> Sistem Utama</button>
  <button class="nav-tab" onclick="showSection('gangguan',this)"><i class="ti ti-alert-triangle"></i> Diagnosis Gangguan</button>
  <button class="nav-tab" onclick="showSection('perawatan',this)"><i class="ti ti-tool"></i> Perawatan & Perbaikan</button>
 <a href="/kuis/4">
   <button class="nav-tab" onclick="showSection('kuis',this)"><i class="ti ti-checkbox"></i> Kuis</button>
 </a>
   <a href="{{ route('dashboard.siswa') }}"><button class="nav-tab"><i class="ti ti-home"></i> Dashboard</button></a>
  </div>
</nav>

<main class="main">

  <!-- ===================== SECTION 1: OVERVIEW ===================== -->
  <div id="sec-overview" class="section active">

    <div class="card">
      <div class="card-title"><i class="ti ti-bolt"></i> Apa itu Sistem Kelistrikan Sepeda Motor?</div>
      <p style="margin-bottom:1rem;color:var(--text-muted)">Sistem kelistrikan adalah <strong style="color:var(--text)">jaringan komponen listrik</strong> yang bekerja bersama untuk menghasilkan, menyimpan, mengatur, dan menggunakan energi listrik pada sepeda motor. Tanpa sistem ini, mesin tidak dapat menyala, tidak ada penerangan, dan seluruh fungsi elektronik akan lumpuh.</p>
      <div class="info-box">
        <strong>💡 Analogi yang mudah dipahami:</strong> Bayangkan sistem kelistrikan seperti aliran darah pada tubuh manusia — aki adalah <em>jantung</em> yang memompa, kabel adalah <em>pembuluh darah</em>, kiprok adalah <em>paru-paru</em> yang menyuplai oksigen segar, dan setiap komponen adalah <em>organ</em> yang membutuhkan suplai agar bisa berfungsi.
      </div>
    </div>

    <div class="card">
      <div class="card-title"><i class="ti ti-list-check"></i> 7 Fungsi Utama Sistem Kelistrikan</div>
      <div class="grid2">
        <div class="komponen-item">
          <h4>🔥 Pembakaran Mesin</h4>
          <p>Menghasilkan percikan api melalui busi untuk membakar campuran bahan bakar dan udara di ruang mesin pada waktu yang sangat tepat.</p>
        </div>
        <div class="komponen-item">
          <h4>⚡ Pengisian Daya</h4>
          <p>Mengisi ulang aki secara otomatis saat mesin hidup menggunakan spul (stator) dan kiprok sebagai penghasil dan pengatur listrik.</p>
        </div>
        <div class="komponen-item">
          <h4>🔑 Starter Elektrik</h4>
          <p>Memutar poros engkol untuk menghidupkan mesin secara mudah tanpa harus menendang kick starter secara berulang.</p>
        </div>
        <div class="komponen-item">
          <h4>💡 Penerangan</h4>
          <p>Lampu utama, sein, dan rem memberikan cahaya dan sinyal visual yang krusial untuk keselamatan berkendara siang maupun malam.</p>
        </div>
        <div class="komponen-item">
          <h4>📊 Instrumen & Sinyal</h4>
          <p>Speedometer, indikator bahan bakar, klakson, dan lampu peringatan memberi informasi real-time kondisi kendaraan kepada pengendara.</p>
        </div>
        <div class="komponen-item">
          <h4>🔒 Sistem Keamanan</h4>
          <p>Sistem alarm dengan sensor getar, sirine, dan remote control melindungi kendaraan dari tindak pencurian.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-title"><i class="ti ti-route"></i> Alur Kerja Sistem Kelistrikan (Step by Step)</div>
      <div class="step-flow">
        <div class="step-item">
          <div class="step-num">1</div>
          <div class="step-content">
            <h4>Aki Menyimpan Energi Listrik</h4>
            <p>Aki/baterai 12V menyimpan energi listrik DC. Kapasitas diukur dalam Ampere-Hour (Ah) — misalnya aki 5Ah dapat mengalirkan arus 5A selama 1 jam. Aki inilah sumber daya utama saat mesin belum hidup.</p>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num">2</div>
          <div class="step-content">
            <h4>Motor Starter Menghidupkan Mesin</h4>
            <p>Saat tombol starter ditekan, relay starter aktif dan mengalirkan arus besar (50–200 Ampere) dari aki ke motor starter. Motor starter memutar poros engkol hingga mesin bisa beroperasi sendiri.</p>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num">3</div>
          <div class="step-content">
            <h4>Spul Menghasilkan Listrik AC</h4>
            <p>Rotor magnet yang terhubung ke poros mesin berputar di sekitar kumparan spul (stator). Pergerakan medan magnet ini menginduksi tegangan pada kumparan spul menghasilkan arus bolak-balik (AC).</p>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num">4</div>
          <div class="step-content">
            <h4>Kiprok Mengubah AC → DC & Meregulasi Tegangan</h4>
            <p>Kiprok (Regulator Rectifier) punya dua fungsi: (1) <em>Rectifier</em> mengubah AC menjadi DC menggunakan dioda, (2) <em>Regulator</em> menjaga tegangan tetap stabil di 13,5–14,5V agar aki tidak overcharging dan komponen tidak rusak.</p>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num">5</div>
          <div class="step-content">
            <h4>Aki Terisi & Semua Komponen Beroperasi</h4>
            <p>Listrik DC yang sudah distabilkan mengisi kembali aki dan disuplai ke semua sistem: pengapian memercikkan busi, lampu menyala, instrumen aktif, dan semua fungsi elektronik bekerja secara bersamaan.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-title"><i class="ti ti-components"></i> Komponen Dasar yang Wajib Diketahui</div>
      <div class="grid2">
        <div class="komponen-item">
          <h4>🔋 Aki / Baterai</h4>
          <p>Menyimpan energi listrik DC 12V. Ada tipe basah (perlu perawatan air aki) dan MF/Maintenance Free (sealed, tanpa perawatan). Umur pakai 2–4 tahun.</p>
        </div>
        <div class="komponen-item">
          <h4>🔌 Kabel & Konektor</h4>
          <p>Menghantarkan arus listrik. Warna kabel mengikuti standar wiring diagram pabrik. Konektor yang kotor/longgar adalah penyebab masalah kelistrikan paling umum.</p>
        </div>
        <div class="komponen-item">
          <h4>🔐 Sekring (Fuse)</h4>
          <p>Pelindung rangkaian dari arus berlebih. Sekring putus = ada korsleting di jalur tersebut. SELALU ganti dengan ampere yang sama persis (jangan diganti kawat!).</p>
        </div>
        <div class="komponen-item">
          <h4>🔄 Relay</h4>
          <p>Saklar elektromagnetik: arus kecil (tombol) mengontrol arus besar (beban). Digunakan pada starter, klakson, dan lampu agar saklar tidak cepat rusak akibat arus besar.</p>
        </div>
      </div>
    </div>

  </div>

  <!-- ===================== SECTION 2: SISTEM UTAMA ===================== -->
  <div id="sec-sistem" class="section">

    <div class="card">
      <div class="card-title"><i class="ti ti-apps"></i> Pilih Sistem untuk Dipelajari Lebih Detail</div>
      <div class="sistem-grid">
        <div class="sistem-card" onclick="showSistem('pengapian',this)">
          <i class="ti ti-flame"></i>
          <span>Pengapian</span>
        </div>
        <div class="sistem-card" onclick="showSistem('pengisian',this)">
          <i class="ti ti-battery-charging"></i>
          <span>Pengisian</span>
        </div>
        <div class="sistem-card" onclick="showSistem('starter',this)">
          <i class="ti ti-player-play"></i>
          <span>Starter</span>
        </div>
        <div class="sistem-card" onclick="showSistem('penerangan',this)">
          <i class="ti ti-bulb"></i>
          <span>Penerangan</span>
        </div>
        <div class="sistem-card" onclick="showSistem('alarm',this)">
          <i class="ti ti-shield-lock"></i>
          <span>Alarm</span>
        </div>
        <div class="sistem-card" onclick="showSistem('instrumen',this)">
          <i class="ti ti-gauge"></i>
          <span>Instrumen</span>
        </div>
      </div>

      <!-- DETAIL: PENGAPIAN -->
      <div id="detail-pengapian" class="detail-panel">
        <h3><i class="ti ti-flame"></i> Sistem Pengapian</h3>
        <p style="font-size:14px;line-height:1.7;color:var(--text-muted);margin-bottom:1rem">Sistem pengapian bertugas menghasilkan <strong style="color:var(--text)">percikan bunga api pada busi</strong> di waktu yang sangat tepat (sesuai posisi piston) untuk membakar campuran udara-bahan bakar. Timing yang tidak tepat menyebabkan tenaga mesin berkurang, boros bahan bakar, atau mesin tidak mau hidup.</p>
        <div class="info-box"><strong>Fakta menarik:</strong> Pada mesin dengan putaran 6.000 RPM (motor 4-tak), busi memercik sebanyak <strong>3.000 kali per menit</strong> atau 50 kali per detik! Koil harus mampu menaikkan tegangan dari 12V menjadi 10.000–30.000 Volt setiap kali itu.</div>
        <h4 style="font-size:14px;font-weight:600;margin:1rem 0 0.5rem;">Komponen Sistem Pengapian:</h4>
        <div class="komponen-list">
          <span class="komponen-tag">Aki (sumber daya 12V)</span>
          <span class="komponen-tag">Pulser / Pick-up Coil</span>
          <span class="komponen-tag">CDI / ECU</span>
          <span class="komponen-tag">Koil Pengapian</span>
          <span class="komponen-tag">Kabel Busi (HT Cable)</span>
          <span class="komponen-tag">Busi (Spark Plug)</span>
        </div>
        <h4 style="font-size:14px;font-weight:600;margin:1rem 0 0.5rem;">Alur Kerja:</h4>
        <div class="alur">
          <span class="alur-item">Pulser baca posisi piston</span><span class="alur-arrow">→</span>
          <span class="alur-item">Sinyal ke CDI/ECU</span><span class="alur-arrow">→</span>
          <span class="alur-item">CDI atur waktu pengapian</span><span class="alur-arrow">→</span>
          <span class="alur-item">Koil naikkan tegangan 12V → 15.000–30.000V</span><span class="alur-arrow">→</span>
          <span class="alur-item">Busi memercikkan api</span><span class="alur-arrow">→</span>
          <span class="alur-item">Campuran terbakar</span>
        </div>
        <div class="warning-box"><strong>Perbedaan CDI vs ECU:</strong><br>
        • <strong>CDI (Capacitor Discharge Ignition)</strong> — Digunakan pada motor karburator. Bekerja dengan mengisi dan melepas muatan kapasitor. Sederhana namun timing tetap (tidak adaptif).<br>
        • <strong>ECU (Electronic Control Unit)</strong> — Digunakan pada motor injeksi. Mengontrol timing pengapian DAN injeksi bahan bakar secara presisi berdasarkan sensor suhu, putaran mesin, posisi gas, dll. Lebih efisien dan ramah lingkungan.</div>
        <div class="grid2" style="margin-top:1rem">
          <div class="komponen-item">
            <h4>Cara Cek Busi</h4>
            <p>Lepas busi, tempelkan ke massa mesin, putar starter. Percikan normal = biru terang. Merah/oranye = busi lemah perlu diganti.</p>
          </div>
          <div class="komponen-item">
            <h4>Cara Cek Koil</h4>
            <p>Ukur resistansi kumparan primer: 0,5–3 Ω. Kumparan sekunder: 8.000–20.000 Ω. Di luar range ini, koil perlu diganti.</p>
          </div>
        </div>
      </div>

      <!-- DETAIL: PENGISIAN -->
      <div id="detail-pengisian" class="detail-panel">
        <h3><i class="ti ti-battery-charging"></i> Sistem Pengisian</h3>
        <p style="font-size:14px;line-height:1.7;color:var(--text-muted);margin-bottom:1rem">Sistem pengisian berfungsi <strong style="color:var(--text)">menghasilkan listrik dan mengisi ulang aki</strong> secara otomatis saat mesin hidup, memastikan aki tidak habis meskipun semua komponen listrik aktif bekerja secara bersamaan.</p>
        <div class="komponen-list">
          <span class="komponen-tag">Rotor Magnet (flywheel)</span>
          <span class="komponen-tag">Spul / Stator</span>
          <span class="komponen-tag">Kiprok (Regulator Rectifier)</span>
          <span class="komponen-tag">Aki</span>
        </div>
        <h4 style="font-size:14px;font-weight:600;margin:1rem 0 0.5rem;">Alur Kerja:</h4>
        <div class="alur">
          <span class="alur-item">Rotor berputar bersama mesin</span><span class="alur-arrow">→</span>
          <span class="alur-item">Medan magnet menginduksi kumparan spul</span><span class="alur-arrow">→</span>
          <span class="alur-item">Spul hasilkan arus AC</span><span class="alur-arrow">→</span>
          <span class="alur-item">Kiprok ubah AC→DC & stabilkan 13,5–14,5V</span><span class="alur-arrow">→</span>
          <span class="alur-item">Aki terisi penuh</span>
        </div>
        <div class="info-box">
          <strong>Cara Mengukur Tegangan Pengisian:</strong><br>
          1. Hidupkan mesin, naikkan putaran ke ±3.000 RPM<br>
          2. Ukur tegangan di terminal aki menggunakan multimeter (DC Volt)<br>
          3. Normal: <strong>13,5 – 14,5 Volt</strong><br>
          4. Di bawah 13V = pengisian bermasalah (spul/kiprok)<br>
          5. Di atas 14,8V = kiprok rusak (overcharging → aki cepat rusak)
        </div>
        <div class="grid2">
          <div class="komponen-item">
            <h4>Cek Spul</h4>
            <p>Ukur tegangan AC output spul saat mesin hidup di ±3.000 RPM. Normal: 15–20V AC. Jika di bawah ini, spul/kumparan rusak atau kabel massa bermasalah.</p>
          </div>
          <div class="komponen-item">
            <h4>Cek Kiprok</h4>
            <p>Dengan diode tester multimeter, cek dioda dalam kiprok. Arah forward = konduksi, reverse = tidak. Bila bocor (konduksi dua arah) = kiprok rusak.</p>
          </div>
        </div>
      </div>

      <!-- DETAIL: STARTER -->
      <div id="detail-starter" class="detail-panel">
        <h3><i class="ti ti-player-play"></i> Sistem Starter Elektrik</h3>
        <p style="font-size:14px;line-height:1.7;color:var(--text-muted);margin-bottom:1rem">Motor starter adalah <strong style="color:var(--text)">motor listrik DC</strong> yang mengubah energi listrik menjadi energi mekanik (putaran) untuk memutar poros engkol saat menghidupkan mesin. Ia membutuhkan arus sangat besar, itulah mengapa diperlukan relay sebagai penghubung arus besar tersebut.</p>
        <div class="komponen-list">
          <span class="komponen-tag">Tombol Starter (push button)</span>
          <span class="komponen-tag">Relay Starter</span>
          <span class="komponen-tag">Motor Starter (Dinamo)</span>
          <span class="komponen-tag">Kopling Starter (One-way clutch)</span>
          <span class="komponen-tag">Gigi Reduksi</span>
          <span class="komponen-tag">Aki</span>
        </div>
        <h4 style="font-size:14px;font-weight:600;margin:1rem 0 0.5rem;">Alur Kerja:</h4>
        <div class="alur">
          <span class="alur-item">Tombol starter ditekan</span><span class="alur-arrow">→</span>
          <span class="alur-item">Arus kecil ke coil relay</span><span class="alur-arrow">→</span>
          <span class="alur-item">Relay aktif (terdengar bunyi klik)</span><span class="alur-arrow">→</span>
          <span class="alur-item">Arus besar (50–200A) dari aki ke motor starter</span><span class="alur-arrow">→</span>
          <span class="alur-item">Motor starter berputar</span><span class="alur-arrow">→</span>
          <span class="alur-item">Mesin hidup</span>
        </div>
        <div class="warning-box">
          <strong>Mengapa relay diperlukan?</strong><br>
          Motor starter membutuhkan arus sangat besar (50–200 Ampere). Jika tombol starter langsung menghubungkan arus sebesar ini, tombol akan cepat terbakar/rusak. Relay memungkinkan tombol hanya mengalirkan arus kecil (±1A) untuk mengaktifkan elektromagnet relay, yang kemudian menyambungkan jalur arus besar secara terpisah.
        </div>
        <div class="grid2">
          <div class="komponen-item">
            <h4>Tes Relay Starter</h4>
            <p>Gunakan multimeter. Sambungkan coil relay ke aki 12V. Harus terdengar bunyi klik dan terminal output harus terhubung (continuity). Jika tidak = relay rusak.</p>
          </div>
          <div class="komponen-item">
            <h4>Tes Motor Starter</h4>
            <p>Lepas motor starter dari mesin. Hubungkan langsung ke aki 12V. Bila berputar = normal. Bila tidak berputar atau lemah = sikat karbon aus atau armature rusak.</p>
          </div>
        </div>
      </div>

      <!-- DETAIL: PENERANGAN -->
      <div id="detail-penerangan" class="detail-panel">
        <h3><i class="ti ti-bulb"></i> Sistem Penerangan</h3>
        <p style="font-size:14px;line-height:1.7;color:var(--text-muted);margin-bottom:1rem">Sistem penerangan memberikan <strong style="color:var(--text)">cahaya dan sinyal visual</strong> yang krusial untuk keselamatan berkendara, baik untuk pengendara sendiri maupun pengguna jalan lain di sekitarnya.</p>
        <div class="grid2">
          <div class="komponen-item">
            <h4>💡 Lampu Utama (Headlight)</h4>
            <p>Menerangi jalan di depan. Memiliki mode low beam (dekat, ±35W) dan high beam (jauh, ±35–60W). Motor modern banyak menggunakan LED (lebih hemat & terang). Di Indonesia, lampu wajib menyala siang hari (APBN 2009).</p>
          </div>
          <div class="komponen-item">
            <h4>🟡 Lampu Sein (Turn Signal)</h4>
            <p>Memberikan tanda arah belok. Berkedip menggunakan <em>flasher/relay sein</em> pada frekuensi 60–120 kali/menit. Flasher bekerja berdasarkan prinsip beban arus — jika bohlam mati, sein tidak akan berkedip normal.</p>
          </div>
          <div class="komponen-item">
            <h4>🔴 Lampu Rem (Brake Light)</h4>
            <p>Menyala lebih terang (±21W) saat tuas rem ditekan. Saklar rem terpasang di tuas rem depan dan belakang. Kegagalan lampu rem sangat berbahaya karena pengendara di belakang tidak mendapat peringatan.</p>
          </div>
          <div class="komponen-item">
            <h4>🔴 Lampu Belakang (Tail Light)</h4>
            <p>Menyala redup (±5W) sebagai penanda keberadaan kendaraan di malam hari. Umumnya menyatu dengan lampu rem dalam satu bohlam (filamen ganda / dual filament), namun dengan kecerahan berbeda.</p>
          </div>
        </div>
        <div class="info-box" style="margin-top:1rem">
          <strong>Teknologi Lampu Terkini:</strong> Motor modern menggunakan lampu LED (Light Emitting Diode) yang 3–5x lebih hemat dibanding halogen, usia pakai lebih panjang (>10.000 jam), dan respons lebih cepat (0,2 detik vs 0,5 detik halogen) — krusial untuk lampu rem.
        </div>
      </div>

      <!-- DETAIL: ALARM -->
      <div id="detail-alarm" class="detail-panel">
        <h3><i class="ti ti-shield-lock"></i> Sistem Alarm & Pengaman</h3>
        <p style="font-size:14px;line-height:1.7;color:var(--text-muted);margin-bottom:1rem">Sistem alarm melindungi sepeda motor dari <strong style="color:var(--text)">tindak pencurian</strong> dengan mendeteksi getaran atau gangguan tidak wajar dan memberikan peringatan suara dan visual.</p>
        <div class="komponen-list">
          <span class="komponen-tag">Modul Alarm (otak sistem)</span>
          <span class="komponen-tag">Sensor Getar / Tilt Sensor</span>
          <span class="komponen-tag">Sirine</span>
          <span class="komponen-tag">Remote Control (RF 433MHz)</span>
          <span class="komponen-tag">Indikator LED</span>
          <span class="komponen-tag">Relay Pengunci Starter</span>
        </div>
        <h4 style="font-size:14px;font-weight:600;margin:1rem 0 0.5rem;">Alur Kerja:</h4>
        <div class="alur">
          <span class="alur-item">Remote ditekan (arm)</span><span class="alur-arrow">→</span>
          <span class="alur-item">Modul aktif, relay pengunci menutup jalur starter</span><span class="alur-arrow">→</span>
          <span class="alur-item">Sensor memantau getaran/kemiringan</span><span class="alur-arrow">→</span>
          <span class="alur-item">Getaran terdeteksi</span><span class="alur-arrow">→</span>
          <span class="alur-item">Sirine & lampu aktif sebagai peringatan</span>
        </div>
        <div class="info-box">
          <strong>Sensitivitas Sensor Getar:</strong> Dapat diatur levelnya. Terlalu sensitif → alarm berbunyi karena angin, truk lewat, atau hewan. Terlalu rendah → tidak efektif mendeteksi upaya pencurian. Pengaturan optimal: bereaksi terhadap guncangan fisik namun tidak terhadap getaran lingkungan normal.
        </div>
      </div>

      <!-- DETAIL: INSTRUMEN -->
      <div id="detail-instrumen" class="detail-panel">
        <h3><i class="ti ti-gauge"></i> Sistem Instrumen & Sinyal</h3>
        <p style="font-size:14px;line-height:1.7;color:var(--text-muted);margin-bottom:1rem">Sistem instrumen adalah <strong style="color:var(--text)">pusat informasi pengendara</strong> yang menampilkan data kondisi kendaraan secara real-time sehingga pengendara dapat mengambil keputusan berkendara yang tepat.</p>
        <div class="grid2">
          <div class="komponen-item">
            <h4>🔢 Speedometer</h4>
            <p>Mengukur kecepatan menggunakan sensor kecepatan (Hall effect sensor) pada roda depan. Motor modern menggunakan display digital yang juga menampilkan odometer, tripmeter, dan jam.</p>
          </div>
          <div class="komponen-item">
            <h4>⛽ Indikator Bahan Bakar</h4>
            <p>Pelampung di dalam tangki terhubung ke potensiometer (resistor variabel). Saat bahan bakar berkurang, pelampung turun → resistansi berubah → jarum/bar indicator turun.</p>
          </div>
          <div class="komponen-item">
            <h4>🌡️ Indikator Suhu Mesin</h4>
            <p>Pada motor berpendingin air/oli, thermistor (sensor suhu) di blok mesin mengirim sinyal ke ECU. Jika suhu melebihi batas, lampu indikator overheat menyala sebagai peringatan dini.</p>
          </div>
          <div class="komponen-item">
            <h4>📢 Klakson</h4>
            <p>Menggunakan elektromagnet yang menggetarkan membran logam secara cepat. Frekuensi getaran (biasanya 400–500 Hz) menghasilkan suara peringatan. Arus yang dibutuhkan: ±3–5 Ampere.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ===================== SECTION 3: DIAGNOSIS ===================== -->
  <div id="sec-gangguan" class="section">

    <div class="danger-box">
      <strong>⚠️ Keselamatan Kerja sebelum Diagnosis:</strong> Selalu pastikan kunci kontak dalam posisi OFF sebelum memeriksa komponen kelistrikan. Lepaskan terminal negatif aki bila perlu membuka komponen. Gunakan APD (sarung tangan karet, kacamata pelindung).
    </div>

    <div class="card" style="margin-top:1rem">
      <div class="card-title"><i class="ti ti-search"></i> Prosedur Langkah Diagnosis Sistematis</div>
      <div class="step-flow">
        <div class="step-item">
          <div class="step-num">1</div>
          <div class="step-content">
            <h4>Pemeriksaan Visual (tanpa alat)</h4>
            <p>Periksa kabel putus/terkelupas, konektor longgar atau berkarat, sekring gosong/putus (lihat elemen di dalam), terminal aki berkerak putih/hijau, komponen gosong akibat korsleting. Langkah ini cepat dan gratis — sering menemukan masalah 60% kasus.</p>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num">2</div>
          <div class="step-content">
            <h4>Pemeriksaan Fungsi (uji coba)</h4>
            <p>Coba hidupkan starter, nyalakan semua lampu, bunyikan klakson, cek sein kanan dan kiri. Catat dengan tepat sistem mana yang gagal — ini mempersempit area diagnosis dan menghemat waktu kerja.</p>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num">3</div>
          <div class="step-content">
            <h4>Pengukuran dengan Multimeter</h4>
            <p>Ukur tegangan aki (normal 12,5–12,8V saat mesin OFF), tegangan pengisian (13,5–14,5V saat mesin hidup), resistansi komponen seperti koil dan busi, serta kontinuitas kabel untuk menemukan kabel putus dalam jalur.</p>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num">4</div>
          <div class="step-content">
            <h4>Isolasi & Perbaikan Komponen Rusak</h4>
            <p>Setelah sumber masalah ditemukan, lepas komponen yang dicurigai dan tes secara terpisah. Ganti atau perbaiki sesuai prosedur standar pabrik. Jangan mengganti komponen secara spekulatif tanpa diagnosis yang jelas — membuang biaya.</p>
          </div>
        </div>
        <div class="step-item">
          <div class="step-num">5</div>
          <div class="step-content">
            <h4>Pengujian Akhir & Dokumentasi</h4>
            <p>Setelah perbaikan, uji semua sistem kembali untuk memastikan masalah teratasi dan tidak muncul masalah baru. Catat dalam laporan servis: gejala, penyebab, komponen yang diganti, hasil pengujian akhir.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-title"><i class="ti ti-alert-triangle"></i> Tabel Diagnosis Gangguan Lengkap</div>
      <div class="tabs-sub">
        <button class="tab-sub active" onclick="showSubTab('pg-pengapian',this)">Pengapian</button>
        <button class="tab-sub" onclick="showSubTab('pg-pengisian',this)">Pengisian</button>
        <button class="tab-sub" onclick="showSubTab('pg-starter',this)">Starter</button>
        <button class="tab-sub" onclick="showSubTab('pg-penerangan',this)">Penerangan</button>
        <button class="tab-sub" onclick="showSubTab('pg-lainnya',this)">Alarm & Instrumen</button>
      </div>

      <div id="sub-pg-pengapian" class="sub-content active">
        <table class="gangguan-table">
          <thead><tr><th>Gejala</th><th>Kemungkinan Penyebab</th><th>Langkah Perbaikan</th></tr></thead>
          <tbody>
            <tr><td><span class="gejala-tag">Mesin susah hidup</span></td><td><span class="penyebab-tag">Busi kotor/rusak</span></td><td><span class="solusi-tag">Bersihkan/ganti busi, cek celah 0,6–0,9mm</span></td></tr>
            <tr><td><span class="gejala-tag">Mesin brebet/tersendat</span></td><td><span class="penyebab-tag">Koil melemah / kabel busi bocor</span></td><td><span class="solusi-tag">Ukur resistansi koil, ganti kabel busi bila retak</span></td></tr>
            <tr><td><span class="gejala-tag">Mesin mati mendadak</span></td><td><span class="penyebab-tag">CDI/ECU rusak atau pulser rusak</span></td><td><span class="solusi-tag">Cek output CDI dengan multimeter, ganti CDI</span></td></tr>
            <tr><td><span class="gejala-tag">Tidak ada percikan busi sama sekali</span></td><td><span class="penyebab-tag">Koil primer putus / CDI tidak berfungsi</span></td><td><span class="solusi-tag">Tes koil (resistansi primer: 0,5–3Ω), ganti CDI</span></td></tr>
            <tr><td><span class="gejala-tag">Percikan busi lemah (oranye)</span></td><td><span class="penyebab-tag">Busi aus / tegangan aki rendah</span></td><td><span class="solusi-tag">Ganti busi, charge aki, cek sistem pengisian</span></td></tr>
          </tbody>
        </table>
      </div>

      <div id="sub-pg-pengisian" class="sub-content">
        <table class="gangguan-table">
          <thead><tr><th>Gejala</th><th>Kemungkinan Penyebab</th><th>Langkah Perbaikan</th></tr></thead>
          <tbody>
            <tr><td><span class="gejala-tag">Aki cepat habis / soak</span></td><td><span class="penyebab-tag">Kiprok rusak / spul melemah</span></td><td><span class="solusi-tag">Ukur tegangan pengisian, ganti kiprok/spul</span></td></tr>
            <tr><td><span class="gejala-tag">Lampu redup saat mesin hidup</span></td><td><span class="penyebab-tag">Spul lemah / kabel massa longgar</span></td><td><span class="solusi-tag">Periksa output AC spul, bersihkan titik massa</span></td></tr>
            <tr><td><span class="gejala-tag">Tegangan pengisian tidak stabil</span></td><td><span class="penyebab-tag">Kiprok rusak / kabel pengisian putus</span></td><td><span class="solusi-tag">Ganti kiprok, periksa jalur kabel pengisian</span></td></tr>
            <tr><td><span class="gejala-tag">Air aki cepat berkurang (overcharging)</span></td><td><span class="penyebab-tag">Kiprok rusak (tidak meregulasi tegangan)</span></td><td><span class="solusi-tag">Segera ganti kiprok, periksa kondisi sel aki</span></td></tr>
          </tbody>
        </table>
      </div>

      <div id="sub-pg-starter" class="sub-content">
        <table class="gangguan-table">
          <thead><tr><th>Gejala</th><th>Kemungkinan Penyebab</th><th>Langkah Perbaikan</th></tr></thead>
          <tbody>
            <tr><td><span class="gejala-tag">Starter tidak merespons sama sekali</span></td><td><span class="penyebab-tag">Relay starter rusak / tombol rusak / sekring putus</span></td><td><span class="solusi-tag">Cek sekring, bypass relay untuk tes, ganti komponen rusak</span></td></tr>
            <tr><td><span class="gejala-tag">Bunyi klik tapi mesin tidak berputar</span></td><td><span class="penyebab-tag">Aki soak / dinamo starter rusak</span></td><td><span class="solusi-tag">Ukur tegangan aki saat starter ditekan, servis/ganti dinamo</span></td></tr>
            <tr><td><span class="gejala-tag">Starter lemah/lambat</span></td><td><span class="penyebab-tag">Aki drop / kabel/konektor starter longgar</span></td><td><span class="solusi-tag">Charge aki, periksa & kencangkan semua sambungan</span></td></tr>
            <tr><td><span class="gejala-tag">Motor starter berputar tapi mesin tidak hidup</span></td><td><span class="penyebab-tag">Kopling starter (one-way clutch) aus/slip</span></td><td><span class="solusi-tag">Bongkar cover mesin, periksa dan ganti kopling starter</span></td></tr>
          </tbody>
        </table>
      </div>

      <div id="sub-pg-penerangan" class="sub-content">
        <table class="gangguan-table">
          <thead><tr><th>Gejala</th><th>Kemungkinan Penyebab</th><th>Langkah Perbaikan</th></tr></thead>
          <tbody>
            <tr><td><span class="gejala-tag">Lampu utama mati</span></td><td><span class="penyebab-tag">Bohlam/LED putus / sekring putus</span></td><td><span class="solusi-tag">Ganti bohlam, periksa dan ganti sekring</span></td></tr>
            <tr><td><span class="gejala-tag">Sein menyala tapi tidak berkedip</span></td><td><span class="penyebab-tag">Flasher rusak / salah satu bohlam sein putus</span></td><td><span class="solusi-tag">Cek semua bohlam sein, ganti flasher bila perlu</span></td></tr>
            <tr><td><span class="gejala-tag">Lampu rem tidak menyala</span></td><td><span class="penyebab-tag">Saklar rem rusak / bohlam putus / kabel rusak</span></td><td><span class="solusi-tag">Tes saklar rem dengan multimeter (saat ditekan: harus kontinuitas)</span></td></tr>
            <tr><td><span class="gejala-tag">Semua lampu redup</span></td><td><span class="penyebab-tag">Tegangan aki rendah / titik massa buruk</span></td><td><span class="solusi-tag">Charge aki, bersihkan semua titik massa ke rangka motor</span></td></tr>
          </tbody>
        </table>
      </div>

      <div id="sub-pg-lainnya" class="sub-content">
        <table class="gangguan-table">
          <thead><tr><th>Sistem</th><th>Gejala</th><th>Penyebab & Solusi</th></tr></thead>
          <tbody>
            <tr><td>Alarm</td><td><span class="gejala-tag">Alarm aktif sendiri tanpa sebab</span></td><td><span class="solusi-tag">Kurangi sensitivitas sensor getar di modul alarm</span></td></tr>
            <tr><td>Alarm</td><td><span class="gejala-tag">Alarm tidak berbunyi saat gangguan</span></td><td><span class="penyebab-tag">Modul rusak / sirine rusak / daya aki lemah</span></td></tr>
            <tr><td>Speedometer</td><td><span class="gejala-tag">Jarum/display tidak bergerak</span></td><td><span class="solusi-tag">Cek sensor kecepatan di roda, bersihkan/ganti sensor</span></td></tr>
            <tr><td>Speedometer</td><td><span class="gejala-tag">Kecepatan tidak akurat</span></td><td><span class="solusi-tag">Kalibrasi ulang atau ganti sensor hall effect</span></td></tr>
            <tr><td>Klakson</td><td><span class="gejala-tag">Klakson tidak bunyi</span></td><td><span class="penyebab-tag">Saklar klakson rusak / klakson mati / sekring</span></td></tr>
            <tr><td>Indikator BBM</td><td><span class="gejala-tag">Selalu penuh/kosong</span></td><td><span class="solusi-tag">Periksa pelampung di tangki, cek kabel sensor BBM</span></td></tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- ===================== SECTION 4: PERAWATAN ===================== -->
  <div id="sec-perawatan" class="section">

    <div class="danger-box">
      <strong>⚠️ Prosedur Keselamatan Kerja (K3) yang Wajib Diikuti:</strong><br>
      ① Matikan kontak sebelum memulai pekerjaan kelistrikan<br>
      ② Lepaskan terminal negatif (−) aki terlebih dahulu<br>
      ③ Gunakan APD: sarung tangan karet, kacamata, sepatu safety<br>
      ④ Jauhkan dari bahan mudah terbakar saat bekerja dekat aki<br>
      ⑤ Jangan menyentuh terminal terbuka saat kunci kontak ON
    </div>

    <div class="grid2" style="margin-top:1rem">
      <div class="card">
        <div class="card-title"><i class="ti ti-battery"></i> Perawatan Aki</div>
        <div class="perawatan-step">
          <div class="step-icon"><i class="ti ti-eye"></i></div>
          <div>
            <h4>1. Pemeriksaan Visual</h4>
            <p>Periksa fisik aki dari retak, terminal berkarat (kerak putih/hijau), dan kebocoran elektrolit. Aki yang menggembung menandakan overcharging.</p>
          </div>
        </div>
        <div class="perawatan-step">
          <div class="step-icon"><i class="ti ti-ruler"></i></div>
          <div>
            <h4>2. Ukur Tegangan</h4>
            <p>Normal: 12,5–12,8V (mesin mati). Kurang dari 12V = perlu dicharge. Kurang dari 10,5V = aki soak, segera ganti.</p>
          </div>
        </div>
        <div class="perawatan-step">
          <div class="step-icon"><i class="ti ti-droplet"></i></div>
          <div>
            <h4>3. Cek Level Air (aki basah)</h4>
            <p>Pastikan level antara batas Lower dan Upper. Isi dengan <strong>air suling murni</strong> — bukan air mineral (mengandung mineral yang merusak sel aki).</p>
          </div>
        </div>
        <div class="perawatan-step">
          <div class="step-icon"><i class="ti ti-wash"></i></div>
          <div>
            <h4>4. Bersihkan Terminal</h4>
            <p>Bersihkan kerak dengan sikat kawat. Netralkan dengan larutan soda kue (1 sdm per gelas air). Oleskan gemuk/vaselin tipis setelah kering.</p>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-title"><i class="ti ti-bolt"></i> Perawatan Busi</div>
        <div class="perawatan-step">
          <div class="step-icon"><i class="ti ti-palette"></i></div>
          <div>
            <h4>1. Baca Warna Elektroda</h4>
            <p><strong>Coklat muda = Normal</strong> ✓<br>Hitam kering = Campuran kaya/filter kotor<br>Hitam basah = Oli masuk ruang bakar<br>Abu-abu/putih = Terlalu panas/kurus</p>
          </div>
        </div>
        <div class="perawatan-step">
          <div class="step-icon"><i class="ti ti-adjustments"></i></div>
          <div>
            <h4>2. Setel Celah Busi</h4>
            <p>Gunakan <em>feeler gauge</em>. Celah standar: <strong>0,6–0,9 mm</strong> (sesuai spesifikasi motor). Bengkokkan elektroda samping untuk menyetel — jangan menekan elektroda tengah.</p>
          </div>
        </div>
        <div class="perawatan-step">
          <div class="step-icon"><i class="ti ti-wash"></i></div>
          <div>
            <h4>3. Bersihkan Elektroda</h4>
            <p>Bersihkan kerak karbon dengan sikat kawat halus atau kertas amplas halus (#400). Jangan menggunakan benda tajam yang bisa merusak elektroda iridium.</p>
          </div>
        </div>
        <div class="perawatan-step">
          <div class="step-icon"><i class="ti ti-replace"></i></div>
          <div>
            <h4>4. Jadwal Penggantian</h4>
            <p>Busi biasa: ganti setiap <strong>8.000–12.000 km</strong>.<br>Busi iridium/platinum: ganti setiap <strong>24.000–30.000 km</strong> (lebih mahal namun lebih tahan lama).</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-title"><i class="ti ti-checklist"></i> Jadwal Perawatan Berkala Sistem Kelistrikan</div>
      <table class="gangguan-table">
        <thead><tr><th>Komponen</th><th>Interval Perawatan</th><th>Kegiatan yang Dilakukan</th></tr></thead>
        <tbody>
          <tr><td>Busi</td><td>Setiap 8.000 km</td><td>Periksa warna & celah elektroda, bersihkan, ganti bila perlu</td></tr>
          <tr><td>Aki (cek tegangan)</td><td>Setiap 3 bulan</td><td>Ukur tegangan, periksa terminal, isi air aki bila diperlukan</td></tr>
          <tr><td>Kabel & konektor</td><td>Setiap 6 bulan</td><td>Periksa isolasi rusak, bersihkan konektor, kencangkan sambungan</td></tr>
          <tr><td>Lampu & sein</td><td>Setiap 6 bulan</td><td>Uji semua lampu, ganti bohlam mati, setel arah lampu utama</td></tr>
          <tr><td>Sekring</td><td>Saat bermasalah</td><td>Ganti dengan ampere sama persis — JANGAN diganti kawat!</td></tr>
          <tr><td>Sistem pengisian</td><td>Setiap 12.000 km</td><td>Ukur tegangan pengisian, periksa kondisi spul dan kiprok</td></tr>
          <tr><td>Aki (penggantian)</td><td>Setiap 2–4 tahun</td><td>Ganti aki sesuai spesifikasi ukuran dan CCA (Cold Cranking Amps)</td></tr>
        </tbody>
      </table>
    </div>

    <div class="card">
      <div class="card-title"><i class="ti ti-tools"></i> Alat & Perlengkapan Wajib Servis Kelistrikan</div>
      <div class="grid2">
        <div class="komponen-item">
          <h4>🔧 Alat Umum</h4>
          <p>Obeng plus/minus, tang kombinasi, tang lancip, kunci pas set, kunci ring set, kunci busi (ukuran sesuai motor).</p>
        </div>
        <div class="komponen-item">
          <h4>📏 Alat Ukur Kelistrikan</h4>
          <p>Multimeter digital (DC/AC Volt, Ampere, Ohm), test lamp 12V, battery tester, feeler gauge (untuk celah busi).</p>
        </div>
        <div class="komponen-item">
          <h4>⚡ Alat Khusus</h4>
          <p>Battery charger/aki charger, solder listrik + timah, heat shrink tube, crimping tool, kabel jumper 12V.</p>
        </div>
        <div class="komponen-item">
          <h4>🛡️ APD (Alat Pelindung Diri)</h4>
          <p>Sarung tangan karet isolasi, kacamata pelindung, sepatu safety, wearpack/overall, ember + soda kue untuk darurat.</p>
        </div>
      </div>
    </div>

  </div>

  <!-- ===================== SECTION 5: KUIS ===================== -->
  <div id="sec-kuis" class="section">
    <div class="card">
      <div class="card-title"><i class="ti ti-checkbox"></i> Kuis Pemahaman: Sistem Kelistrikan Sepeda Motor</div>
      <p style="font-size:13px;color:var(--text-muted);margin-bottom:1.5rem">Jawab 8 soal berikut untuk mengukur pemahaman Anda. Setiap soal disertai penjelasan lengkap setelah dijawab.</p>
      <div class="quiz-container" id="quizContainer">
        <div class="quiz-progress">
          <span class="q-label" id="qLabel">Soal 1 dari 8</span>
          <div class="progress-bar"><div class="progress-fill" id="progressFill" style="width:12.5%"></div></div>
          <span class="score-badge" id="scoreLabel">Skor: 0</span>
        </div>
        <div id="quizBody"></div>
      </div>
    </div>
  </div>

</main>

<footer class="site-footer">
  <p>Media Pembelajaran Interaktif — Sistem Kelistrikan Sepeda Motor</p>
  <p style="margin-top:4px">SMK Teknik Otomotif &nbsp;|&nbsp; Disusun untuk siswa Kelas XI &amp; XII</p>
</footer>

<script>
  function showSection(id, btn) {
    document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
    document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('active'));
    document.getElementById('sec-' + id).classList.add('active');
    if (btn) btn.classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function showSistem(id, card) {
    document.querySelectorAll('.detail-panel').forEach(p => p.classList.remove('show'));
    document.querySelectorAll('.sistem-card').forEach(c => c.classList.remove('selected'));
    const panel = document.getElementById('detail-' + id);
    panel.classList.add('show');
    if (card) card.classList.add('selected');
    panel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function showSubTab(id, btn) {
    const parent = btn.closest('.card');
    parent.querySelectorAll('.sub-content').forEach(s => s.classList.remove('active'));
    parent.querySelectorAll('.tab-sub').forEach(t => t.classList.remove('active'));
    document.getElementById('sub-' + id).classList.add('active');
    if (btn) btn.classList.add('active');
  }

  // QUIZ
  const questions = [
    {
      q: "Komponen yang berfungsi mengubah arus AC menjadi DC sekaligus menstabilkan tegangan pada sistem pengisian adalah...",
      opts: ["Spul / Stator", "Kiprok (Regulator Rectifier)", "Rotor Magnet", "CDI"],
      ans: 1,
      explain: "Kiprok (Regulator Rectifier) memiliki dua fungsi: <em>Rectifier</em> mengubah arus AC dari spul menjadi DC menggunakan dioda, dan <em>Regulator</em> menjaga tegangan tetap stabil di 13,5–14,5V agar aki tidak rusak akibat overcharging."
    },
    {
      q: "Tegangan normal aki sepeda motor yang terisi penuh dalam kondisi mesin mati adalah...",
      opts: ["10,5 – 11,5 Volt", "12,5 – 12,8 Volt", "13,5 – 14,5 Volt", "15 – 16 Volt"],
      ans: 1,
      explain: "12,5–12,8V adalah tegangan normal aki yang terisi penuh saat mesin mati. Nilai 13,5–14,5V adalah tegangan pengisian yang dihasilkan saat mesin hidup — bukan tegangan aki saat diam."
    },
    {
      q: "Fungsi utama relay pada sistem starter elektrik adalah...",
      opts: ["Mempercepat putaran motor starter", "Menyambungkan arus besar dari aki ke motor starter menggunakan sinyal arus kecil", "Mengisi ulang daya aki saat starter aktif", "Melindungi mesin dari starter berlebihan"],
      ans: 1,
      explain: "Relay bekerja sebagai saklar elektromagnetik. Tombol starter hanya mengalirkan arus kecil (±1A) untuk mengaktifkan coil relay, yang kemudian menyambungkan jalur arus besar (50–200 Ampere) langsung dari aki ke motor starter. Ini melindungi tombol dari kerusakan akibat arus besar."
    },
    {
      q: "Seorang teknisi mendapati aki motor cepat habis meskipun baru diganti. Langkah diagnosis yang paling tepat pertama kali adalah...",
      opts: ["Langsung ganti aki baru lagi", "Ukur tegangan pengisian saat mesin hidup untuk memeriksa kiprok dan spul", "Ganti spul tanpa pemeriksaan lebih lanjut", "Periksa apakah lampu sein berkedip normal"],
      ans: 1,
      explain: "Aki yang cepat habis mengindikasikan sistem pengisian bermasalah. Ukur tegangan di terminal aki saat mesin hidup di ±3.000 RPM. Normal: 13,5–14,5V. Di bawah 13V = kiprok/spul bermasalah. Mengganti aki tanpa memperbaiki sumber masalah hanya membuang biaya karena aki baru pun akan cepat habis."
    },
    {
      q: "Saat memeriksa busi, elektrodanya berwarna hitam pekat dan basah. Kondisi ini mengindikasikan...",
      opts: ["Mesin dalam kondisi normal dan sehat", "Campuran bahan bakar terlalu kaya (rich) atau oli masuk ke ruang bakar", "Busi terlalu panas atau heat range tidak sesuai", "Celah busi terlalu sempit"],
      ans: 1,
      explain: "Elektroda hitam basah mengindikasikan pembakaran tidak sempurna. Penyebabnya: campuran bahan bakar terlalu kaya (karburator/injektor perlu setel), atau oli masuk ke ruang bakar (ring piston/seal katup aus). Kondisi normal: coklat muda. Abu-abu/putih = campuran terlalu kurus atau mesin terlalu panas."
    },
    {
      q: "Lampu sein hanya menyala tapi tidak berkedip sama sekali. Penyebab paling umum adalah...",
      opts: ["Aki lemah/soak", "Flasher/relay sein rusak atau salah satu bohlam sein putus", "Saklar lampu utama rusak", "CDI bermasalah"],
      ans: 1,
      explain: "Flasher bekerja berdasarkan prinsip beban arus — ia membutuhkan arus tertentu untuk berkedip. Jika salah satu bohlam sein putus, arus total berkurang sehingga flasher tidak dapat bekerja dan lampu sein hanya menyala statis. Solusi: ganti bohlam yang putus, atau ganti flasher bila keduanya masih baik."
    },
    {
      q: "Alat ukur utama yang digunakan teknisi untuk mengukur tegangan DC, arus listrik, dan resistansi komponen kelistrikan adalah...",
      opts: ["Tang kombinasi dan obeng", "Multimeter / AVO Meter", "Battery charger", "Test lamp 12V saja"],
      ans: 1,
      explain: "Multimeter (juga disebut AVO Meter: Ampere-Volt-Ohm) adalah alat universal yang wajib dimiliki teknisi. Dapat mengukur tegangan DC dan AC, arus listrik, resistansi, dan kontinuitas kabel. Test lamp hanya dapat mengindikasikan ada/tidak aliran listrik, tidak memberikan nilai terukur."
    },
    {
      q: "Langkah PERTAMA yang benar dan aman sebelum melakukan perbaikan pada sistem kelistrikan sepeda motor adalah...",
      opts: ["Langsung membongkar komponen yang dicurigai rusak", "Mematikan kontak dan melepaskan terminal negatif aki, serta menggunakan APD", "Menghidupkan mesin untuk mengetes komponen satu per satu", "Mencabut sekring utama saja lalu langsung mulai bekerja"],
      ans: 1,
      explain: "Prosedur Keselamatan Kerja (K3) mengharuskan: (1) Matikan kunci kontak, (2) Lepas terminal negatif (−) aki untuk memutus seluruh aliran listrik di sistem, (3) Gunakan APD (sarung tangan karet, kacamata, sepatu safety). Langkah ini mencegah korsleting, kerusakan komponen elektronik, dan risiko sengatan listrik."
    }
  ];

  let current = 0, score = 0, answered = false;

  function renderQ() {
    const q = questions[current];
    document.getElementById('qLabel').textContent = `Soal ${current + 1} dari ${questions.length}`;
    document.getElementById('progressFill').style.width = ((current + 1) / questions.length * 100) + '%';
    document.getElementById('scoreLabel').textContent = `Skor: ${score}`;
    document.getElementById('quizBody').innerHTML = `
      <p class="quiz-q">${q.q}</p>
      <div class="quiz-options">
        ${q.opts.map((o, i) => `<button class="quiz-opt" onclick="pickAns(${i})" id="opt${i}">${String.fromCharCode(65 + i)}. ${o}</button>`).join('')}
      </div>
      <div id="feedback" class="quiz-feedback" style="display:none"></div>
      <button class="btn-next" id="btnNext" onclick="nextQ()">${current < questions.length - 1 ? 'Soal Berikutnya →' : 'Lihat Hasil Akhir'}</button>
    `;
    answered = false;
  }

  function pickAns(i) {
    if (answered) return;
    answered = true;
    const q = questions[current];
    document.querySelectorAll('.quiz-opt').forEach(o => o.classList.add('disabled'));
    if (i === q.ans) {
      document.getElementById('opt' + i).classList.add('correct');
      score++;
      document.getElementById('feedback').innerHTML = `✅ <strong>Jawaban Benar!</strong><br>${q.explain}`;
      document.getElementById('feedback').className = 'quiz-feedback correct';
    } else {
      document.getElementById('opt' + i).classList.add('wrong');
      document.getElementById('opt' + q.ans).classList.add('correct');
      document.getElementById('feedback').innerHTML = `❌ <strong>Kurang Tepat.</strong> Jawaban yang benar: <strong>${String.fromCharCode(65 + q.ans)}. ${q.opts[q.ans]}</strong><br>${q.explain}`;
      document.getElementById('feedback').className = 'quiz-feedback wrong';
    }
    document.getElementById('feedback').style.display = 'block';
    document.getElementById('btnNext').style.display = 'inline-block';
    document.getElementById('scoreLabel').textContent = `Skor: ${score}`;
  }

  function nextQ() {
    current++;
    if (current >= questions.length) {
      const pct = Math.round(score / questions.length * 100);
      let msg = '';
      let emoji = '';
      if (pct >= 87) { msg = 'Luar biasa! Pemahaman Anda sangat baik. Siap menjadi teknisi profesional!'; emoji = '🏆'; }
      else if (pct >= 62) { msg = 'Bagus! Terus pelajari materi yang masih kurang untuk meningkatkan kompetensi Anda.'; emoji = '👍'; }
      else { msg = 'Jangan menyerah! Baca kembali materi di setiap bagian, lalu coba kuis ini lagi.'; emoji = '📚'; }
      document.getElementById('quizContainer').innerHTML = `
        <div class="quiz-done">
          <div style="font-size:48px;margin-bottom:0.5rem">${emoji}</div>
          <div class="score-big">${score}/${questions.length}</div>
          <div class="score-pct">${pct}% Benar</div>
          <p>${msg}</p>
          <button class="btn-restart" onclick="resetQuiz()">Ulangi Kuis</button>
        </div>`;
    } else {
      renderQ();
    }
  }

  function resetQuiz() {
    current = 0;
    score = 0;
    document.getElementById('quizContainer').innerHTML = `
      <div class="quiz-progress">
        <span class="q-label" id="qLabel">Soal 1 dari 8</span>
        <div class="progress-bar"><div class="progress-fill" id="progressFill" style="width:12.5%"></div></div>
        <span class="score-badge" id="scoreLabel">Skor: 0</span>
      </div>
      <div id="quizBody"></div>
    `;
    renderQ();
  }

  renderQ();
</script>

</body>
</html>