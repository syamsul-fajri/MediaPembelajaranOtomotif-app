<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Materi 6 - Engine Management System</title>

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

</style>
</head>

<body>

<div class="header">

<h1>
<i class="fa-solid fa-microchip"></i>
Materi 6 - Engine Management System
</h1>

<p>
Mempelajari sistem injeksi, ECU, sensor elektronik,
dan kontrol mesin modern sepeda motor
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
    <div class="title">Tontonlah Video pemebelajaran berikut</div>
    <div class="subtitle">..........</div>
    <div class="video-box">
        <video controls>
            <source src="{{ asset('Image/Materi 1.mp4') }}" type="video/mp4">
        </video>
    </div>
<div class="card">

<h2>BAB 1 - Pengertian EMS</h2>

<p>
Engine Management System (EMS) adalah sistem elektronik
yang mengatur kerja mesin agar performa,
efisiensi bahan bakar,
dan emisi menjadi optimal.
</p>

<ul>
<li>Mengatur bahan bakar</li>
<li>Mengontrol pengapian</li>
<li>Mengatur emisi gas buang</li>
<li>Mengoptimalkan performa mesin</li>
</ul>

</div>

<div class="card">

<h2>BAB 2 - Komponen Utama EMS</h2>

<ul>
<li>ECU (Electronic Control Unit)</li>
<li>Sensor TPS</li>
<li>Sensor MAP</li>
<li>Sensor O2</li>
<li>Injector</li>
<li>Fuel Pump</li>
<li>Throttle Body</li>
</ul>

<p>
ECU menjadi pusat pengontrol seluruh sistem elektronik mesin.
</p>

</div>

<div class="card">

<h2>BAB 3 - Sistem Injeksi</h2>

<p>
Sistem injeksi menggunakan ECU dan injector
untuk menyemprotkan bahan bakar secara elektronik.
</p>

<ol>
<li>Fuel pump memompa bahan bakar</li>
<li>Sensor membaca kondisi mesin</li>
<li>ECU mengolah data</li>
<li>Injector menyemprot bahan bakar</li>
</ol>

</div>

<div class="card">

<h2>BAB 4 - Sensor Pada EMS</h2>

<table>

<tr>
<th>Sensor</th>
<th>Fungsi</th>
</tr>

<tr>
<td>TPS</td>
<td>Membaca posisi throttle gas</td>
</tr>

<tr>
<td>MAP</td>
<td>Mengukur tekanan intake</td>
</tr>

<tr>
<td>O2 Sensor</td>
<td>Mengontrol emisi</td>
</tr>

<tr>
<td>EOT/ECT</td>
<td>Mendeteksi suhu mesin</td>
</tr>

</table>

</div>

<div class="card">

<h2>BAB 5 - Gangguan EMS</h2>

<table>

<tr>
<th>Gejala</th>
<th>Penyebab</th>
</tr>

<tr>
<td>Mesin brebet</td>
<td>Injector kotor</td>
</tr>

<tr>
<td>Check engine menyala</td>
<td>Sensor rusak</td>
</tr>

<tr>
<td>Mesin sulit hidup</td>
<td>Fuel pump lemah</td>
</tr>

<tr>
<td>Boros bahan bakar</td>
<td>MAP sensor rusak</td>
</tr>

</table>

</div>

<div class="card">

<h2>BAB 6 - Diagnosis Kerusakan</h2>

<ul>
<li>Memeriksa kabel dan konektor</li>
<li>Membaca kode kerusakan</li>
<li>Menggunakan scan tool</li>
<li>Mengukur tegangan sensor</li>
</ul>

</div>

<div class="card">

<h2>BAB 7 - Perawatan EMS</h2>

<ol>
<li>Membersihkan injector</li>
<li>Membersihkan throttle body</li>
<li>Memeriksa sensor</li>
<li>Memastikan aki stabil</li>
<li>Memeriksa fuel filter</li>
</ol>

</div>
    <!-- FILE -->
    <div class="section">
        <h4>Sumber Referensi</h4>
        <div class="card">
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
    </div>
<div style="margin-bottom:50px;">

<a href="/kuis/6">

<button class="quiz-btn">
Mulai Kuis
</button>

</a>

</div>

</div>
</body>
</html>