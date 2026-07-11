<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Guru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f5f6fa;
        }
        /* BUTTON UMUM */
        .btn {
            border: none;
            padding: 8px 14px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.2s ease;
        }

        /* LIHAT */
        .btn-lihat {
            background: #2b59ff;
            color: white;
        }

        /* HAPUS */
        .btn-hapus {
            background: #ff4d4d;
            color: white;
        }

        /* HOVER */
        .btn:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        /* KLIK (EFEK TEKAN 🔥) */
        .btn:active {
            transform: scale(0.95);
        }

        /* LOADING EFFECT */
        .btn-loading {
            opacity: 0.6;
            pointer-events: none;
        }

        /* HEADER */
        .header {
            background: linear-gradient(135deg, #3b5bdb, #8e44ad);
            color: white;
            padding: 30px;
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logout {
            background: rgba(255,255,255,0.2);
            border: none;
            padding: 10px 12px;
            border-radius: 10px;
            cursor: pointer;
            color: white;
        }

        /* CARD STATS */
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 25px;
        }

        .card {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .card h2 {
            margin: 10px 0 5px;
            font-size: 28px;
        }

        /* CONTENT */
        .content {
            padding: 25px;
        }

        .table {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 15px;
            background: #f1f2f6;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        /* AVATAR */
        .avatar {
            width: 40px;
            height: 40px;
            background: #3b5bdb;
            color: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .user {
            display: flex;
            align-items: center;
        }

        /* PROGRESS */
        .progress-bar {
            background: #ddd;
            border-radius: 10px;
            height: 8px;
            width: 100px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background: #3b5bdb;
        }

        .link {
            color: #3b5bdb;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="header-top">
        <div>
            <h2>Halo, {{ Auth::user()->name}}</h2>
            <p>SMK Teknik Otomotif</p>
        </div>

        <!-- LOGOUT -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="logout">Keluar</button>
        </form>
        </div>

    <!-- STATS -->
    <div class="stats">

        <div class="card">
            <p>➕</p>
            <h3>Buat Kelas</h3>
            <a href="/buat-kelas">
                <button style="padding:10px 15px; border:none; border-radius:10px; cursor:pointer;">
                    Buat Sekarang
                </button>
            </a>
        </div>

    </div>
</div>

<!-- CONTENT -->
<div class="content">
    <div class="table" style="margin-top:20px;">
    <h3>Daftar Kelas</h3>

    <table style="width:100%; border-collapse: collapse;">

    <thead>
        <tr style="background:#f1f2f6;">
            <th style="padding:15px;">Nama Kelas</th>
            <th>Kode Kelas</th>
            <th>Jumlah Siswa</th>
            <th style="text-align:right;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($kelas as $k)
        <tr style="border-bottom:1px solid #eee;">
            <td style="padding:15px;"><b>{{ $k->nama_kelas }}</b></td>
            <td>{{ $k->kode_kelas }}</td>

            <td>
                {{ DB::table('users')->where('kode_kelas', $k->kode_kelas)->count() }}
            </td>

            <td style="text-align:right;">
                {{-- <a href="/progress/{{ $s->id }}"> --}}
                    <button>Lihat Progress</button>
                </a>

                <!-- LIHAT -->
                <a href="{{ route('kelas.detail', $k->id) }}">
                    <button class="btn btn-lihat">
                        👁 Lihat
                    </button>
                </a>

                <!-- HAPUS -->
                <a href="{{ route('hapus.kelas', $k->id) }}"
                onclick="return confirm('Yakin hapus kelas ini?')">
                    <button class="btn btn-hapus">
                        🗑 Hapus
                    </button>
                </a>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>

</body>
</html>