<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Siswa</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f5f6fa;
}
input {
    padding: 10px;
    border-radius: 10px;
    border: 1px solid #ccc;
    width: 60%;
}

button {
    padding: 10px 15px;
    border: none;
    background: #2b59ff;
    color: white;
    border-radius: 10px;
    cursor: pointer;
}
/* HEADER */
.header {
    background: linear-gradient(135deg, #2b59ff, #5f2eea);
    color: white;
    padding: 25px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
}

/* PROFIL */
.user {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user-left {
    display: flex;
    align-items: center;
}

.avatar {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    overflow: hidden;
    background: white;
    margin-right: 15px;
}

.avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* STATS */
.stats {
    display: flex;
    margin-top: 20px;
    gap: 10px;
}

.card-stat {
    flex: 1;
    background: rgba(255,255,255,0.2);
    padding: 15px;
    border-radius: 15px;
    text-align: center;
}

/* CONTENT */
.container {
    padding: 20px;
}

.section-title {
    font-size: 20px;
    margin-bottom: 15px;
}

/* CARD MATERI */
.card-materi {
    background: white;
    padding: 15px;
    border-radius: 15px;
    margin-bottom: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    cursor: pointer;
    transition: 0.3s;
}

.card-materi:hover {
    transform: translateY(-5px);
}
.locked {
    opacity: 0.5;
    cursor: not-allowed;
    position: relative;
}

.locked::after {
    content: "🔒 Terkunci";
    position: absolute;
    top: 10px;
    right: 10px;
    background: red;
    color: white;
    padding: 5px 10px;
    border-radius: 8px;
    font-size: 12px;
}

/* ICON */
.icon-box {
    width: 50px;
    height: 50px;
    background: #eaefff;
    border-radius: 12px;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #2b59ff;
}

/* MATERI HEADER */
.materi-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.materi-left {
    display: flex;
    align-items: center;
}

/* PROGRESS */
.progress-bar {
    height: 8px;
    background: #eee;
    border-radius: 10px;
    margin-top: 10px;
}

.progress {
    height: 8px;
    background: linear-gradient(90deg, #2b59ff, #5f2eea);
    border-radius: 10px;
}

/* LOGOUT */
.logout-btn {
    background: #ff4d4d;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 10px;
    cursor: pointer;
}

.logout-btn:hover {
    background: #e60000;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="user">
        <div class="user-left">
            <div class="avatar">
                <img src="{{ asset('Image/Logo_UBG.png') }}">
            </div>
            <div>
                <h3>Halo, {{ Auth::user()->name }} 👋</h3>
                <small>Selamat belajar hari ini 🚀</small>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">
                Keluar
            </button>
        </form>
    </div>

    <!-- STATS -->
    <div class="stats">
        <div class="card-stat">
            <i class="fa-solid fa-medal"></i>
            <h2>{{ $persentase }}%</h2>
            <small>Progress</small>
        </div>
        <div class="card-stat">
            <i class="fa-solid fa-bullseye"></i>
            <h2>{{ $materiSelesai }}/4</h2>
            <small>Selesai</small>
        </div>
        <div class="card-stat">
            <i class="fa-regular fa-clock"></i>

           <h2 id="timer">
    {{ gmdate('H:i:s', Auth::user()->total_waktu) }}
</h2>

<script>
let totalDetik = {{ Auth::user()->total_waktu }};

setInterval(function(){

    totalDetik++;

    let jam = Math.floor(totalDetik / 3600);
    let menit = Math.floor((totalDetik % 3600) / 60);
    let detik = totalDetik % 60;

    document.getElementById('timer').innerHTML =
        String(jam).padStart(2,'0') + ':' +
        String(menit).padStart(2,'0') + ':' +
        String(detik).padStart(2,'0');

},1000);
</script>
            <small>Total Waktu Belajar</small>
        </div>
    </div>
</div>

<!-- CONTENT -->
<div class="container">

@php
    $user = Auth::user();
@endphp

<!-- GABUNG KELAS -->
<div style="background:white; padding:15px; border-radius:15px; margin-bottom:20px;">

    <h4>🔑 Gabung Kelas</h4>

    @if(empty($user->kode_kelas))

        <!-- FORM INPUT -->
        <form action="{{ route('join.kelas') }}" method="POST" style="display:flex; gap:10px;">
            @csrf
            <input type="text" name="kode_kelas" placeholder="Masukkan kode kelas..." required>
            <button type="submit">Gabung</button>
        </form>

    @else

        @php
            $kelas = DB::table('classes')
                ->where('kode_kelas', $user->kode_kelas)
                ->first();
        @endphp

        <p style="color:green;">
            ✅ Kamu masuk kelas: 
            <b>{{ $kelas->nama_kelas ?? '-' }}</b>
        </p>

        <form action="{{ route('keluar.kelas') }}" method="POST">
            @csrf
            <button type="submit" style="background:red; color:white; border:none; padding:8px 12px; border-radius:10px;">
                Keluar Kelas
            </button>
        </form>

    @endif

    {{-- NOTIF --}}
    @if(session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color:red;">{{ session('error') }}</div>
    @endif

</div>



<!-- MATERI -->
@if(!empty($user->kode_kelas))

    <div class="section-title">Materi Pembelajaran</div>
@php
$lulus1 = isset($nilai[1]) && $nilai[1] >= 70;
$lulus2 = isset($nilai[2]) && $nilai[2] >= 70;
$lulus3 = isset($nilai[3]) && $nilai[3] >= 70;
$lulus4 = isset($nilai[4]) && $nilai[4] >= 70;
// $lulus5 = isset($nilai[5]) && $nilai[5] >= 70;
// $lulus6 = isset($nilai[6]) && $nilai[6] >= 70;
// $lulus7 = isset($nilai[7]) && $nilai[7] >= 70;
// $lulus8 = isset($nilai[8]) && $nilai[8] >= 70;
// $lulus9 = isset($nilai[9]) && $nilai[9] >= 70;
@endphp
@php

// =====================
// HITUNG TOTAL PROGRESS
// =====================

// total materi
$totalMateri = 4;

// ambil total progress siswa
$totalProgress = DB::table('progress_belajar')
    ->where('user_id', Auth::id())
    ->count();

// setiap materi punya 3 progress
// video + baca + kuis
$totalSemuaProgress = $totalMateri * 3;

// hitung persen progress
$persenProgress = 0;

if ($totalSemuaProgress > 0) {
    $persenProgress = round(($totalProgress / $totalSemuaProgress) * 100);
}

// =====================
// HITUNG MATERI SELESAI
// =====================

// materi dianggap selesai jika kuis selesai
$materiSelesai = DB::table('progress_belajar')
    ->where('user_id', Auth::id())
    ->where('status', 'kuis_selesai')
    ->count();

@endphp
    <!-- Materi 1 -->
    <div class="card-materi" onclick="window.location='/materi1/detail'">
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-gears"></i>
            </div>
            <div>
                <b>PRINSIP KERJA KOMPONEN ENGINE SEPEDA MOTOR</b><br>
                <small>KD 3.1 • 45 min</small>
            </div>
        </div>
    </div>
</div>

    <!-- Materi 2 -->
   <div class="card-materi {{ $lulus1 ? '' : 'locked' }}"
    @if($lulus1)
        onclick="window.location='/materi2/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fas fa-motorcycle"></i>
            </div>
            <div>
                <b>PRINSIP KERJA SASIS SEPEDA MOTOR</b><br>
                <small>KD 3.2 • 50 min</small>

                @if(!$lulus1)
                    <br><small style="color:red;">
                        Selesaikan Kuis Materi 1
                    </small>
                @endif
            </div>
        </div>
    </div>
</div>

    <!-- Materi 3 -->
 <div class="card-materi {{ $lulus2 ? '' : 'locked' }}"
    @if($lulus2)
        onclick="window.location='/materi3/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div>
                <b>PERINSIP KERJA SISTIM PEMINDAHAN TENAGA SEPEDA MOTOR</b><br>
                <small>KD 3.3 • 50 min</small>

                @if(!$lulus2)
                    <br><small style="color:red;">
                        Selesaikan Kuis Materi 2
                    </small>
                @endif
            </div>
        </div>
    </div>
</div>

 <!-- Materi 4 -->
<div class="card-materi {{ $lulus3 ? '' : 'locked' }}"
    @if($lulus3)
        onclick="window.location='/materi4/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div>
                <b>PERINSIP KERJA SISTIM KELISTRIKAN SEPEDA MOTOR</b><br>
                <small>KD 3.4 • 55 min</small>

                @if(!$lulus3)
                    <br>
                    <small style="color:red;">
                        Selesaikan Kuis Materi 3
                    </small>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- 
<!-- Materi 5 -->
<div class="card-materi {{ $lulus4 ? '' : 'locked' }}"
    @if($lulus4)
        onclick="window.location='/materi5/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div>
                <b>PERINSIP KERJA SISTIM PKERJA SEPEDA LISTRIK DAN HYBRID</b><br>
                <small>KD 3.4 • 55 min</small>

                @if(!$lulus3)
                    <br>
                    <small style="color:red;">
                        Selesaikan Kuis Materi 4
                    </small>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Materi 6 -->
<div class="card-materi {{ $lulus5 ? '' : 'locked' }}"
    @if($lulus5)
        onclick="window.location='/materi6/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div>
                <b>PRINSIP KERJA ENGINE MANAGEMENT SYSTEM SEPEDA MOTOR</b><br>
                <small>KD 3.4 • 55 min</small>

                @if(!$lulus5)
                    <br>
                    <small style="color:red;">
                        Selesaikan Kuis Materi 5
                    </small>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Materi 7 -->
<div class="card-materi {{ $lulus6 ? '' : 'locked' }}"
    @if($lulus6)
        onclick="window.location='/materi7/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div>
                <b>Sistem Kelistrikan</b><br>
                <small>KD 3.4 • 55 min</small>

                @if(!$lulus3)
                    <br>
                    <small style="color:red;">
                        Selesaikan Kuis Materi 6
                    </small>
                @endif
            </div>
        </div>

        <i class="fa-solid fa-chevron-right"></i>
    </div>

    <div class="progress-bar">
        <div class="progress" style="width:20%"></div>
    </div>
</div>

<!-- Materi 8 -->
<div class="card-materi {{ $lulus7 ? '' : 'locked' }}"
    @if($lulus3)
        onclick="window.location='/materi4/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div>
                <b>Sistem Kelistrikan</b><br>
                <small>KD 3.4 • 55 min</small>

                @if(!$lulus3)
                    <br>
                    <small style="color:red;">
                        Selesaikan Kuis Materi 7
                    </small>
                @endif
            </div>
        </div>

        <i class="fa-solid fa-chevron-right"></i>
    </div>

    <div class="progress-bar">
        <div class="progress" style="width:20%"></div>
    </div>
</div>

<!-- Materi 9 -->
<div class="card-materi {{ $lulus8 ? '' : 'locked' }}"
    @if($lulus3)
        onclick="window.location='/materi4/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div>
                <b>Sistem Kelistrikan</b><br>
                <small>KD 3.4 • 55 min</small>

                @if(!$lulus3)
                    <br>
                    <small style="color:red;">
                        Selesaikan Kuis Materi 8
                    </small>
                @endif
            </div>
        </div>

        <i class="fa-solid fa-chevron-right"></i>
    </div>

    <div class="progress-bar">
        <div class="progress" style="width:20%"></div>
    </div>
</div>

<!-- Materi 10 -->
<div class="card-materi {{ $lulus9 ? '' : 'locked' }}"
    @if($lulus3)
        onclick="window.location='/materi4/detail'"
    @endif
>
    <div class="materi-header">
        <div class="materi-left">
            <div class="icon-box">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div>
                <b>Sistem Kelistrikan</b><br>
                <small>KD 3.4 • 55 min</small>

                @if(!$lulus3)
                    <br>
                    <small style="color:red;">
                        Selesaikan Kuis Materi 9
                    </small>
                @endif
            </div>
        </div>

        <i class="fa-solid fa-chevron-right"></i>
    </div> --}}

    {{-- <div class="progress-bar">
        <div class="progress" style="width:20%"></div>
    </div> --}}
</div>

<div class="progress-bar">
        <div class="progress" style="width:0%"></div>
    </div>
</div>
@else

    <div style="background:#fff3cd; padding:15px; border-radius:10px;">
        ⚠️ Silakan masukkan kode kelas terlebih dahulu untuk membuka materi
    </div>

@endif

</div>
</body>
</html>