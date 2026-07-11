<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Materi Enginer</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f5f6fa;
}

/* HEADER */
.header{
    background:linear-gradient(135deg,#2b59ff,#5f2eea);
    color:white;
    padding:35px;
    border-bottom-left-radius:25px;
    border-bottom-right-radius:25px;
}

.header h1{
    margin:0;
}

.container{
    padding:20px;
}

/* CARD */
.card{
    background:white;
    border-radius:18px;
    padding:25px;
    margin-bottom:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

.card h2{
    color:#2b59ff;
    margin-bottom:15px;
}

.card h3{
    color:#5f2eea;
    margin-top:20px;
}

.card p{
    line-height:1.8;
    color:#444;
}

.card ul{
    padding-left:20px;
    line-height:1.8;
}

.card ol{
    padding-left:20px;
    line-height:1.8;
}

/* BUTTON */
.btn-kuis{
    display:inline-block;
    padding:14px 20px;
    background:#2b59ff;
    color:white;
    border-radius:12px;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}

.btn-kuis:hover{
    background:#1e46d6;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

table th{
    background:#2b59ff;
    color:white;
    padding:10px;
}

table td{
    border:1px solid #ddd;
    padding:10px;
}

.btn:hover{
    background:#1d46d1;
}

/* BUTTON */
.back-btn {
    background: #2b59ff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 10px;
    cursor: pointer;
}
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

.back-btn {
    background: #2b59ff;
    transition: 0.2s;
}

.back-btn:hover {
    background: #1e40d0;
}

.back-btn:active {
    transform: scale(0.95);
    background: #162ea8;
}
.quiz-btn {
    background: #28a745;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 10px;
    cursor: pointer;
}

/* CONTAINER */
.container {
    max-width: 900px;
    margin: auto;
    padding: 20px;
}

/* VIDEO */
.video-box {
    width: 100%;
        height: 400px;
        border-radius: 12px;
        overflow: hidden;
        background: black;
        margin-bottom: 20px;
    }

    .video-box video {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

/* TEXT */
.title {
    font-size: 22px;
    font-weight: bold;
}

.subtitle {
    color: #666;
    margin-bottom: 20px;
}

.desc {
    color: #555;
    font-size: 14px;
}

/* FILE */
.file-item {
    background: white;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 10px;
}
body{
    margin:0;
    font-family:Arial;
    background:#f4f6f9;
}

.header{
    background:linear-gradient(135deg,#11998e,#38ef7d);
    color:white;
    padding:35px;
    border-bottom-left-radius:25px;
    border-bottom-right-radius:25px;
}

.container{
    max-width:1000px;
    margin:auto;
    padding:20px;
}

.card{
    background:white;
    padding:25px;
    border-radius:18px;
    margin-bottom:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

.card h2{
    color:#11998e;
}

.card p{
    line-height:1.8;
}

ul,ol{
    line-height:1.8;
}

.back-btn{
    background:#2b59ff;
    color:white;
    border:none;
    padding:10px 15px;
    border-radius:10px;
    cursor:pointer;
}

.quiz-btn{
    background:#28a745;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:10px;
    cursor:pointer;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

table th{
    background:#11998e;
    color:white;
    padding:10px;
}

table td{
    border:1px solid #ddd;
    padding:10px;
}
</style>
</head>

<body>
<div class="header">

<h1>
<i class="fa-solid fa-charging-station"></i>
Materi 5 - Sepeda Motor Listrik & Hybrid
</h1>

<p>
Mempelajari teknologi kendaraan listrik,
hybrid, baterai, motor listrik, dan sistem modern kendaraan
</p>

</div>
<!-- 🔙 BACK -->
<div style="padding:15px;">
    <a href="{{ route('dashboard.siswa') }}">
        <button class="back-btn">← Dashboard</button>
    </a>
</div>

<div class="container">

    <div class="title">Tontonlah Video pemebelajaran berikut</div>
    <div class="subtitle">..........</div>

    <!-- 🎥 VIDEO -->
    <div class="video-box">
        <video controls>
            <source src="{{ asset('Image/Materi 1.mp4') }}" type="video/mp4">
        </video>
    </div>

    <!-- 📄 DESKRIPSI -->
     <div class="card"><h2>BAB 1 - Pengertian Sepeda Motor Listrik</h2>

<p>
Sepeda motor listrik adalah kendaraan roda dua
yang menggunakan motor listrik sebagai sumber tenaga utama.
Energi listrik disimpan pada baterai lalu diubah menjadi energi gerak.
</p>

<ul>
<li>Ramah lingkungan</li>
<li>Suara mesin lebih halus</li>
<li>Hemat energi</li>
<li>Perawatan lebih sederhana</li>
</ul>

</div>

<div class="card">

<h2>BAB 2 - Pengertian Sistem Hybrid</h2>

<p>
Sepeda motor hybrid menggunakan dua sumber tenaga:
</p>

<ul>
<li>Mesin bensin</li>
<li>Motor listrik</li>
</ul>

<p>
Kedua sistem bekerja bersama untuk meningkatkan efisiensi dan performa kendaraan.
</p>

</div>

<div class="card">

<h2>BAB 3 - Komponen Motor Listrik</h2>

<ul>
<li>Baterai</li>
<li>Motor listrik</li>
<li>Controller</li>
<li>Charger</li>
<li>Display panel</li>
</ul>

<h3>Fungsi Controller</h3>

<p>
Mengatur aliran listrik dari baterai menuju motor listrik.
</p>

</div>

<div class="card">

<h2>BAB 4 - Prinsip Kerja</h2>

<ol>
<li>Baterai menyimpan energi listrik</li>
<li>Controller mengatur arus</li>
<li>Motor listrik menerima daya</li>
<li>Motor memutar roda belakang</li>
</ol>

</div>

<div class="card">

<h2>BAB 5 - Regenerative Braking</h2>

<p>
Saat pengereman:
</p>

<ul>
<li>Motor berubah menjadi generator</li>
<li>Energi pengereman diubah menjadi listrik</li>
<li>Energi kembali disimpan ke baterai</li>
</ul>

</div>

<div class="card">

<h2>BAB 6 - Gangguan Sistem</h2>

<table>

<tr>
<th>Gejala</th>
<th>Penyebab</th>
</tr>

<tr>
<td>Baterai cepat habis</td>
<td>Sel baterai rusak</td>
</tr>

<tr>
<td>Motor tidak berputar</td>
<td>Controller rusak</td>
</tr>

<tr>
<td>Charging gagal</td>
<td>Charger rusak</td>
</tr>

</table>

</div>

<div class="card">

<h2>BAB 7 - Diagnosis dan Perawatan</h2>

<ul>
<li>Periksa kondisi baterai</li>
<li>Periksa kabel dan konektor</li>
<li>Gunakan multimeter</li>
<li>Periksa ECU dan controller</li>
</ul>

</div>
    <!-- FILE -->
    <div class="section">
        <h4>Sumber Referensi</h4>

        <div class="file-item">
            <div class="file-left">
                <div class="file-icon"><i class="fa-solid fa-file-pdf"></i></div>
                <div class="file-info">
                    Rubrik Penilaian Pemahaman Konsep <br>
                    <small>PDF • 0.5 MB • 6 halaman</small>
                </div>
            </div>
            <div class="file-action">Unduh</div>
        </div>

        <div class="file-item">
            <div class="file-left">
                <div class="file-icon"><i class="fa-solid fa-video"></i></div>
                <div class="file-info">
                    Video Tutorial Lengkap Seri 1–3 <br>
                    <small>MP4 • 45 menit total</small>
                </div>
            </div>
            <div class="file-action">Tonton</div>
        </div>

        <div class="file-item">
            <div class="file-left">
                <div class="file-icon"><i class="fa-solid fa-file-word"></i></div>
                <div class="file-info">
                    Lembar Kerja Siswa (LKS) <br>
                    <small>DOCX • 0.8 MB • 8 halaman</small>
                </div>
            </div>
            <div class="file-action">Unduh</div>
        </div>

        <div class="file-item">
            <div class="file-left">
                <div class="file-icon"><i class="fa-solid fa-file-pdf"></i></div>
                <div class="file-info">
                    Rubrik Penilaian Pemahaman Konsep <br>
                    <small>PDF • 0.5 MB • 6 halaman</small>
                </div>
            </div>
            <div class="file-action">Unduh</div>
        </div>
    <!-- 📘 KUIS -->
    <div style="padding:0 20px;">
    <a href="/kuis/5">
        <button class="quiz-btn">Mulai Kuis</button>
    </a>
    </div>

</div>

</body>
</html>