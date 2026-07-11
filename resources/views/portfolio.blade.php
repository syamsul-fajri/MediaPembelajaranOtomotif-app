<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ahmad Syamsul Fajri — CV</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  .header{
    background:linear-gradient(135deg,#2b59ff,#5f2eea);
    color:white;
    padding:60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:50px;
    flex-wrap:wrap;
}

.hero-text{
    flex:1;
}

.hero-text h1{
    font-size:45px;
    margin-bottom:20px;
}

.hero-text p{
    font-size:18px;
    margin-bottom:25px;
}

.hero-image{
    flex:1;
    text-align:center;
}

.hero-image img{
    width:350px;
    max-width:100%;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

.btn{
    display:inline-block;
    background:white;
    color:#2b59ff;
    text-decoration:none;
    padding:12px 20px;
    border-radius:10px;
    font-weight:bold;
}
  :root {
    --navy:    #0A0F1E;
    --navy2:   #111827;
    --lavender:#7F77DD;
    --lav-soft:#CECBF6;
    --lav-glow:rgba(127,119,221,0.18);
    --cream:   #F0EFF9;
    --muted:   #8B8FA8;
    --border:  rgba(127,119,221,0.18);
    --glass:   rgba(255,255,255,0.04);
    --glass2:  rgba(255,255,255,0.07);
  }

  html { scroll-behavior: smooth; }

  body {
    background: var(--navy);
    color: var(--cream);
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    line-height: 1.6;
    min-height: 100vh;
    overflow-x: hidden;
  }

  /* ── CANVAS STARS ── */
  #stars-canvas {
    position: fixed;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    opacity: 0.5;
  }

  /* ── LAYOUT ── */
  .page {
    position: relative;
    z-index: 1;
    max-width: 760px;
    margin: 0 auto;
    padding: 0 24px 80px;
  }

  /* ── HERO ── */
  .hero {
    padding: 80px 0 60px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 28px;
  }

  .hero-top {
    display: flex;
    align-items: center;
    gap: 24px;
  }

  .avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3C3489, var(--lavender));
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'DM Serif Display', serif;
    font-size: 24px;
    color: #fff;
    flex-shrink: 0;
    box-shadow: 0 0 0 1px var(--border), 0 0 32px rgba(127,119,221,0.3);
    position: relative;
  }
  .avatar::after {
    content: '';
    position: absolute;
    inset: -3px;
    border-radius: 50%;
    border: 1px dashed rgba(127,119,221,0.4);
    animation: spin 20s linear infinite;
  }
  @keyframes spin { to { transform: rotate(360deg); } }

  .hero-meta {
    display: flex;
    flex-direction: column;
    gap: 6px;
  }
  .hero-meta .role {
    font-size: 13px;
    color: var(--lavender);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    font-weight: 500;
  }
  .hero-meta .tagline {
    font-size: 13px;
    color: var(--muted);
  }

  .hero-name {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(42px, 9vw, 72px);
    line-height: 1.0;
    letter-spacing: -0.02em;
    color: var(--cream);
  }
  .hero-name em {
    font-style: italic;
    color: var(--lavender);
  }

  .hero-desc {
    max-width: 520px;
    font-size: 15px;
    color: var(--muted);
    line-height: 1.75;
    border-left: 2px solid var(--lavender);
    padding-left: 18px;
  }

  /* ── CONTACT ROW ── */
  .contact-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 56px;
  }
  .chip {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12px;
    color: var(--muted);
    background: var(--glass2);
    border: 1px solid var(--border);
    border-radius: 999px;
    padding: 6px 14px;
    backdrop-filter: blur(8px);
    transition: border-color 0.2s, color 0.2s;
  }
  .chip:hover { border-color: var(--lavender); color: var(--cream); }
  .chip svg { width: 13px; height: 13px; flex-shrink: 0; stroke: var(--lavender); }

  /* ── SECTIONS ── */
  .section {
    margin-bottom: 52px;
  }

  .section-label {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 24px;
  }
  .section-label span {
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.14em;
    color: var(--lavender);
  }
  .section-label::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--border);
  }

  /* ── SKILLS ── */
  .skills-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }
  .skill-pill {
    display: flex;
    align-items: center;
    gap: 8px;
    background: var(--glass);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 8px 16px;
    font-size: 13px;
    color: var(--cream);
    transition: background 0.2s, transform 0.15s;
  }
  .skill-pill:hover { background: var(--lav-glow); transform: translateY(-1px); }
  .skill-pill .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--lavender); }

  /* ── TIMELINE ── */
  .timeline { display: flex; flex-direction: column; gap: 0; }

  .tl-item {
    display: grid;
    grid-template-columns: 110px 1px 1fr;
    gap: 0 20px;
    position: relative;
  }

  .tl-year {
    text-align: right;
    padding-top: 4px;
    font-size: 12px;
    font-weight: 600;
    color: var(--lavender);
    letter-spacing: 0.05em;
    padding-right: 0;
  }

  .tl-spine {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .tl-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--lavender);
    box-shadow: 0 0 8px rgba(127,119,221,0.6);
    flex-shrink: 0;
    margin-top: 5px;
  }
  .tl-line {
    width: 1px;
    flex: 1;
    background: var(--border);
    min-height: 24px;
  }
  .tl-item:last-child .tl-line { display: none; }

  .tl-body {
    padding-bottom: 36px;
  }
  .tl-title {
    font-size: 15px;
    font-weight: 500;
    color: var(--cream);
    line-height: 1.4;
  }
  .tl-role {
    font-size: 12px;
    color: var(--lavender);
    margin-top: 4px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.06em;
  }
  .tl-desc {
    font-size: 13px;
    color: var(--muted);
    margin-top: 10px;
    line-height: 1.7;
  }

  /* ── EDUCATION CARD ── */
  .edu-card {
    background: var(--glass);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 24px 28px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    backdrop-filter: blur(12px);
    transition: border-color 0.2s;
  }
  .hero-content{
    width:100%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:50px;
    flex-wrap:wrap;
}

.hero-left{
    flex:1;
}

.hero-image{
    flex:0 0 300px;
    text-align:center;
}

.hero-image img{
    width:280px;
    height:280px;
    object-fit:cover;
    border-radius:20px;
    border:3px solid var(--lavender);
    box-shadow:0 0 30px rgba(127,119,221,.4);
}
  .edu-card:hover { border-color: var(--lavender); }
  .edu-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: var(--lav-glow);
    border: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .edu-icon svg { width: 20px; height: 20px; stroke: var(--lavender); }
  .edu-info .univ { font-size: 15px; font-weight: 500; color: var(--cream); }
  .edu-info .prodi { font-size: 13px; color: var(--muted); margin-top: 3px; }
  .edu-info .period { font-size: 12px; color: var(--lavender); margin-top: 6px; font-weight: 500; }
  .edu-info .nim { font-size: 12px; color: var(--muted); margin-top: 2px; }

  /* Kembali ke menu utama */
/* Tombol Floating */
.floating-home{
    position: fixed;
    top: 25px;
    right: 30px;
    z-index: 9999;
}

.floating-home a{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 22px;
    text-decoration: none;
    color: white;
    font-size: 14px;
    font-weight: 600;

    background: linear-gradient(135deg,#7F77DD,#5f2eea);
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 50px;

    backdrop-filter: blur(10px);
    box-shadow: 0 8px 25px rgba(127,119,221,.35);

    transition: all .3s ease;
}

.floating-home a:hover{
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(127,119,221,.5);
}

/* Responsif untuk HP */
@media(max-width:768px){

    .floating-home{
        top: 15px;
        right: 15px;
    }

    .floating-home a{
        padding: 10px 18px;
        font-size: 13px;
    }

}
  /* ── AVAILABLE BADGE ── */
  .badge-available {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(127,119,221,0.12);
    border: 1px solid rgba(127,119,221,0.3);
    border-radius: 999px;
    padding: 5px 14px;
    font-size: 11px;
    font-weight: 500;
    color: var(--lav-soft);
    letter-spacing: 0.05em;
  }
  .pulse {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #6EE7B7;
    box-shadow: 0 0 6px #6EE7B7;
    animation: pulse 2s ease-in-out infinite;
  }
  @keyframes pulse {
    0%,100% { opacity:1; transform:scale(1); }
    50% { opacity:0.5; transform:scale(0.85); }
  }

  /* ── FOOTER ── */
  .footer {
    text-align: center;
    padding-top: 40px;
    font-size: 12px;
    color: rgba(139,143,168,0.4);
    border-top: 1px solid var(--border);
  }

  /* ── FADE IN ── */
  .fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }
  .fade-in.visible { opacity: 1; transform: translateY(0); }

  @media (max-width: 560px) {
    .tl-year { display: none; }
    .tl-item { grid-template-columns: 1px 1fr; gap: 0 16px; }
  }
</style>
</head>
<body>
<div class="floating-home">
    <a href="{{ url('/') }}">
          ← Kembali
    </a>
</div>

<canvas id="stars-canvas"></canvas>

<div class="page">

  <!-- HERO -->
  <header class="hero fade-in">
    <div class="hero-content">

    <div class="hero-left">

        <div class="hero-top">
            <div class="avatar">ASF</div>

            <div class="hero-meta">
                <span class="role">IT Education</span>
                <span class="tagline">
                    Lombok Barat, NTB · Universitas Bumigora
                </span>
            </div>
        </div>

        <h1 class="hero-name">
            Ahmad<br><em>Syamsul</em><br>Fajri
        </h1>

    </div>

    <div class="hero-image">
        <img src="{{ asset('Image/Fajri.png') }}"
             alt="Foto Ahmad Syamsul Fajri">
    </div>

</div>
    <p class="hero-desc">
      Mahasiswa aktif Pendidikan Teknologi Informasi yang berfokus pada pengembangan perangkat lunak, teknologi Augmented Reality, dan inovasi media edukatif. Berpengalaman memimpin program lapangan dan membangun solusi AR untuk kebutuhan nyata.
    </p>

    <span class="badge-available"><span class="pulse"></span> Tersedia untuk proyek</span>
  </header>

  <!-- CONTACT -->
  <div class="contact-row fade-in">
    <div class="chip">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8"><rect x="2" y="4" width="20" height="16" rx="3"/><path d="m2 7 10 7 10-7"/></svg>
      2201030007@universitasbumigora.ac.id
    </div>
    <div class="chip">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8"><rect x="2" y="4" width="20" height="16" rx="3"/><path d="m2 7 10 7 10-7"/></svg>
      fajrimadi38@gmail.com
    </div>
    <div class="chip">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8"><path d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516 5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498A1 1 0 0 1 21 16.72V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5z"/></svg>
      087835443740
    </div>
    <div class="chip">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
      Lombok Barat, NTB
    </div>
  </div>

  <!-- SKILLS -->
  <section class="section fade-in">
    <div class="section-label"><span>Keahlian</span></div>
    <div class="skills-grid">
      <div class="skill-pill"><span class="dot"></span>Software Engineering</div>
      <div class="skill-pill"><span class="dot"></span>Database</div>
      <div class="skill-pill"><span class="dot"></span>HTML / Web</div>
      <div class="skill-pill"><span class="dot"></span>Augmented Reality</div>
      <div class="skill-pill"><span class="dot"></span>Canva & Figma</div>
      <div class="skill-pill"><span class="dot"></span>Microsoft Office</div>
      <div class="skill-pill"><span class="dot"></span>Fotografi</div>
      <div class="skill-pill"><span class="dot"></span>Survive & Lapangan</div>
    </div>
  </section>

  <!-- EXPERIENCE -->
  <section class="section fade-in">
    <div class="section-label"><span>Pengalaman &amp; Proyek</span></div>
    <div class="timeline">

      <div class="tl-item">
        <div class="tl-year">2026</div>
        <div class="tl-spine">
          <div class="tl-dot"></div>
          <div class="tl-line"></div>
        </div>
        <div class="tl-body">
          <div class="tl-title">Media AR Pengolahan Kopi — Sangkabira Sembalun</div>
          <div class="tl-role">Pengembang / Project Creator · Freelance</div>
          <p class="tl-desc">Merancang dan mengembangkan media Augmented Reality untuk mendemonstrasikan proses pengolahan kopi di Sangkabira Sembalun. Menggabungkan teknologi AR dengan konten edukasi untuk memvisualisasikan tahapan produksi kopi secara interaktif.</p>
        </div>
      </div>

      <div class="tl-item">
        <div class="tl-year">2024</div>
        <div class="tl-spine">
          <div class="tl-dot"></div>
          <div class="tl-line"></div>
        </div>
        <div class="tl-body">
          <div class="tl-title">Kampus Mengajar — SMPN 2 Batulayar</div>
          <div class="tl-role">Ketua Tim / Fasilitator Pendidikan</div>
          <p class="tl-desc">Memimpin tim dalam program Kampus Mengajar sebagai ketua. Bertanggung jawab atas koordinasi kegiatan pengajaran, komunikasi dengan pihak sekolah, serta memastikan program berjalan efektif untuk mendukung proses belajar mengajar siswa.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- EDUCATION -->
  <section class="section fade-in">
    <div class="section-label"><span>Pendidikan</span></div>
    <div class="edu-card">
      <div class="edu-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
        </svg>
      </div>
      <div class="edu-info">
        <div class="univ">Universitas Bumigora</div>
        <div class="prodi">S1 Pendidikan Teknologi Informasi</div>
        <div class="period">2022 — Sekarang</div>
        <div class="nim">NIM: 2201030007</div>
      </div>
    </div>
  </section>

  <footer class="footer fade-in">
    Ahmad Syamsul Fajri &nbsp;·&nbsp; 2026
  </footer>

</div>

<script>
  // ── STAR CANVAS ──
  const canvas = document.getElementById('stars-canvas');
  const ctx = canvas.getContext('2d');
  let stars = [];

  function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  }

  function createStars() {
    stars = Array.from({ length: 120 }, () => ({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      r: Math.random() * 1.2 + 0.3,
      o: Math.random(),
      speed: Math.random() * 0.4 + 0.1,
      dir: Math.random() > 0.5 ? 1 : -1
    }));
  }

  function drawStars() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    stars.forEach(s => {
      s.o += s.speed * 0.01 * s.dir;
      if (s.o > 1 || s.o < 0.1) s.dir *= -1;
      ctx.beginPath();
      ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(127,119,221,${s.o})`;
      ctx.fill();
    });
    requestAnimationFrame(drawStars);
  }

  resize();
  createStars();
  drawStars();
  window.addEventListener('resize', () => { resize(); createStars(); });

  // ── FADE IN ON SCROLL ──
  const fadeEls = document.querySelectorAll('.fade-in');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        // stagger children slightly
        const delay = Array.from(fadeEls).indexOf(e.target) * 80;
        e.target.style.transitionDelay = delay + 'ms';
      }
    });
  }, { threshold: 0.1 });
  fadeEls.forEach(el => observer.observe(el));
</script>
</body>
</html>