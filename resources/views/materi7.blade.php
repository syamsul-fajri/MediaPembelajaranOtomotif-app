<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Materi 7 - Manajemen Bengkel Sepeda Motor</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f4f6f9;
}

.header{
    background:linear-gradient(135deg,#141e30,#243b55);
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
    color:#243b55;
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

.quiz-btn:hover{
    background:#218838;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

table th{
    background:#243b55;
    color:white;
    padding:10px;
}

table td{
    border:1px solid #ddd;
    padding:10px;
}

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

.title{
    font-size:24px;
    font-weight:bold;
    margin-bottom:10px;
}

.subtitle{
    color:#666;
    margin-bottom:15px;
}

.file-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px;
    border:1px solid #ddd;
    border-radius:10px;
    margin-bottom:10px;
}

.file-left{
    display:flex;
    align-items:center;
    gap:15px;
}

.file-icon{
    font-size:30px;
    color:#dc3545;
}

.file-action{
    background:#2b59ff;
    color:white;
    padding:8px 15px;
    border-radius:8px;
    cursor:pointer;
}

</style>
</head>

<body>

<div class="header">

<h1>
<i class="fa-solid fa-screwdriver-wrench"></i>
Materi 7 - Manajemen Bengkel Sepeda Motor
</h1>

<p>
Mempelajari pengelolaan bengkel sepeda motor,
pelayanan pelanggan, SOP, K3,
dan budaya kerja industri otomotif
</p>

</div>

<div style="padding:15px;">

<a href="{{ route('dashboard.siswa') }}">
<button class="back-btn">
← Dashboard
</button>
</a>

</div>

<div class="container">

<div class="title">
Tontonlah Video Pembelajaran Berikut
</div>

<div class="subtitle">
Materi Manajemen Bengkel Sepeda Motor
</div>

<div class="video-box">
    <video controls>
        <source src="{{ asset('Image/Materi 1.mp4') }}" type="video/mp4">
    </video>
</div>

<!-- BAB 1 -->
<div class="card">

<h2>BAB 1 - Pengertian Manajemen Bengkel</h2>

<p>
Manajemen bengkel adalah proses pengelolaan seluruh kegiatan bengkel agar pelayanan,
perawatan, dan perbaikan kendaraan berjalan dengan baik,
aman, efektif, dan profesional.
</p>

<ul>
<li>Perencanaan pekerjaan</li>
<li>Pengorganisasian mekanik</li>
<li>Pelaksanaan servis</li>
<li>Pengawasan pekerjaan</li>
</ul>

</div>

<!-- BAB 2 -->
<div class="card">

<h2>BAB 2 - Tujuan Pengelolaan Bengkel</h2>

<ol>
<li>Memberikan pelayanan terbaik kepada pelanggan</li>
<li>Menjaga kualitas pekerjaan</li>
<li>Meningkatkan efisiensi kerja</li>
<li>Menjaga keselamatan kerja</li>
<li>Meningkatkan keuntungan usaha</li>
<li>Menjaga kebersihan bengkel</li>
</ol>

</div>

<!-- BAB 3 -->
<div class="card">

<h2>BAB 3 - Fungsi Manajemen Bengkel</h2>

<table>

<tr>
<th>Fungsi</th>
<th>Keterangan</th>
</tr>

<tr>
<td>Planning</td>
<td>Merencanakan target dan kebutuhan bengkel</td>
</tr>

<tr>
<td>Organizing</td>
<td>Mengatur pembagian tugas dan alat</td>
</tr>

<tr>
<td>Actuating</td>
<td>Melaksanakan pekerjaan sesuai SOP</td>
</tr>

<tr>
<td>Controlling</td>
<td>Mengawasi hasil pekerjaan dan disiplin kerja</td>
</tr>

</table>

</div>

<!-- BAB 4 -->
<div class="card">

<h2>BAB 4 - Jenis Bengkel Sepeda Motor</h2>

<ul>
<li>Bengkel Resmi</li>
<li>Bengkel Umum</li>
<li>Bengkel Spesialis</li>
</ul>

<p>
Bengkel spesialis dapat fokus pada bidang tertentu seperti injeksi,
kelistrikan, atau racing.
</p>

</div>

<!-- BAB 5 -->
<div class="card">

<h2>BAB 5 - Struktur Organisasi Bengkel</h2>

<table>

<tr>
<th>Bagian</th>
<th>Tugas</th>
</tr>

<tr>
<td>Kepala Bengkel</td>
<td>Mengatur seluruh kegiatan bengkel</td>
</tr>

<tr>
<td>Service Advisor</td>
<td>Melayani pelanggan</td>
</tr>

<tr>
<td>Mekanik</td>
<td>Melakukan servis dan perbaikan</td>
</tr>

<tr>
<td>Sparepart Staff</td>
<td>Mengelola stok suku cadang</td>
</tr>

<tr>
<td>Kasir/Admin</td>
<td>Mengelola administrasi dan pembayaran</td>
</tr>

</table>

</div>

<!-- BAB 6 -->
<div class="card">

<h2>BAB 6 - Layout Bengkel</h2>

<p>
Layout bengkel adalah pengaturan posisi area kerja,
alat, dan ruangan agar pekerjaan lebih efektif.
</p>

<ul>
<li>Area penerimaan pelanggan</li>
<li>Area servis</li>
<li>Area sparepart</li>
<li>Area penyimpanan alat</li>
<li>Area parkir kendaraan</li>
</ul>

</div>

<!-- BAB 7 -->
<div class="card">

<h2>BAB 7 - Peralatan Bengkel</h2>

<table>

<tr>
<th>Jenis Alat</th>
<th>Contoh</th>
</tr>

<tr>
<td>Alat Umum</td>
<td>Kunci pas, obeng, tang</td>
</tr>

<tr>
<td>Alat Khusus</td>
<td>Compression tester, multimeter</td>
</tr>

<tr>
<td>Peralatan Pendukung</td>
<td>Kompresor dan dongkrak motor</td>
</tr>

</table>

</div>

<!-- BAB 8 -->
<div class="card">

<h2>BAB 8 - SOP Bengkel</h2>

<p>
SOP adalah prosedur kerja standar yang digunakan
agar pekerjaan dilakukan dengan benar dan aman.
</p>

<ol>
<li>Pemeriksaan kendaraan</li>
<li>Penggunaan alat sesuai prosedur</li>
<li>Servis berkala</li>
<li>Penanganan limbah</li>
</ol>

</div>

<!-- BAB 9 -->
<div class="card">

<h2>BAB 9 - Keselamatan dan Kesehatan Kerja (K3)</h2>

<ul>
<li>Menggunakan sarung tangan</li>
<li>Menggunakan masker</li>
<li>Menggunakan sepatu safety</li>
<li>Menjaga kebersihan area kerja</li>
</ul>

<p>
K3 bertujuan menjaga keselamatan pekerja
dan menciptakan lingkungan kerja yang aman.
</p>

</div>

<!-- BAB 10 -->
<div class="card">

<h2>BAB 10 - Pengelolaan Sparepart</h2>

<p>
Pengelolaan sparepart meliputi pencatatan stok,
penyimpanan, pemeriksaan kualitas,
dan pengadaan barang.
</p>

</div>

<!-- BAB 11 -->
<div class="card">

<h2>BAB 11 - Pelayanan Pelanggan</h2>

<ol>
<li>Menerima pelanggan</li>
<li>Pemeriksaan kendaraan</li>
<li>Menjelaskan kerusakan</li>
<li>Melakukan servis</li>
<li>Penyerahan kendaraan</li>
</ol>

</div>

<!-- BAB 12 -->
<div class="card">

<h2>BAB 12 - Administrasi Bengkel</h2>

<ul>
<li>Data pelanggan</li>
<li>Nota servis</li>
<li>Data sparepart</li>
<li>Laporan keuangan</li>
</ul>

</div>

<!-- BAB 13 -->
<div class="card">

<h2>BAB 13 - Manajemen Perawatan</h2>

<table>

<tr>
<th>Jenis Perawatan</th>
<th>Keterangan</th>
</tr>

<tr>
<td>Preventive Maintenance</td>
<td>Perawatan pencegahan</td>
</tr>

<tr>
<td>Corrective Maintenance</td>
<td>Perbaikan kerusakan</td>
</tr>

<tr>
<td>Periodic Maintenance</td>
<td>Perawatan berkala</td>
</tr>

</table>

</div>

<!-- BAB 14 -->
<div class="card">

<h2>BAB 14 - Budaya Kerja Industri</h2>

<ul>
<li>Disiplin</li>
<li>Tanggung jawab</li>
<li>Kerja sama</li>
<li>Jujur</li>
<li>Tepat waktu</li>
<li>Teliti</li>
</ul>

</div>

<!-- BAB 15 -->
<div class="card">

<h2>BAB 15 - Teknologi Bengkel Modern</h2>

<ul>
<li>Scan tool digital</li>
<li>Sistem booking online</li>
<li>Administrasi komputerisasi</li>
<li>Diagnosa elektronik</li>
</ul>

</div>

<!-- BAB 16 -->
<div class="card">

<h2>BAB 16 - Penerapan Pengelolaan Bengkel</h2>

<ol>
<li>Membuat jadwal servis</li>
<li>Menata area kerja</li>
<li>Mengelola stok sparepart</li>
<li>Menggunakan SOP</li>
<li>Memberikan pelayanan profesional</li>
</ol>

</div>

<!-- BAB 17 -->
<div class="card">

<h2>BAB 17 - Rangkuman</h2>

<ul>
<li>Manajemen bengkel mengelola aktivitas bengkel secara efektif</li>
<li>Fungsi manajemen meliputi planning, organizing, actuating, controlling</li>
<li>SOP dan K3 penting untuk keselamatan kerja</li>
<li>Budaya kerja industri harus diterapkan</li>
<li>Teknologi membantu meningkatkan pelayanan bengkel</li>
</ul>

</div>

<!-- FILE -->
<div class="card">

<h2>Sumber Referensi</h2>

<div class="file-item">
    <div class="file-left">
        <div class="file-icon">
            <i class="fa-solid fa-file-pdf"></i>
        </div>

        <div class="file-info">
            Modul Manajemen Bengkel <br>
            <small>PDF • 1 MB • 20 halaman</small>
        </div>
    </div>

    <div class="file-action">
        Unduh
    </div>
</div>

<div class="file-item">
    <div class="file-left">
        <div class="file-icon">
            <i class="fa-solid fa-video"></i>
        </div>

        <div class="file-info">
            Video Tutorial Bengkel Modern <br>
            <small>MP4 • 30 menit</small>
        </div>
    </div>

    <div class="file-action">
        Tonton
    </div>
</div>

<div class="file-item">
    <div class="file-left">
        <div class="file-icon">
            <i class="fa-solid fa-file-word"></i>
        </div>

        <div class="file-info">
            Lembar Kerja Siswa (LKS) <br>
            <small>DOCX • 0.8 MB</small>
        </div>
    </div>

    <div class="file-action">
        Unduh
    </div>
</div>

</div>

<!-- QUIZ -->
<div style="margin-bottom:50px;">

<a href="/kuis/7">

<button class="quiz-btn">
Mulai Kuis
</button>

</a>

</div>

</div>

</body>
</html>