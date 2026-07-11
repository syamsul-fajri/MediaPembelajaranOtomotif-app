<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Detail Kelas</title>

<style>
body {
    font-family: Arial;
    background: #f4f6fb;
    margin: 0;
}

/* HEADER */
.header {
    background: linear-gradient(135deg, #2b59ff, #5f2eea);
    color: white;
    padding: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

/* CONTAINER */
.container {
    padding: 20px;
}

/* CARD */
.card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

/* FLEX */
.flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* BUTTON */
.btn {
    padding: 10px 15px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    color: white;
}

.btn-download {
    background: #28a745;
}

.btn-back {
    background: #6c757d;
}

/* TABLE */
.btn-dropdown{
    width:100%;
    background: linear-gradient(135deg,#2b59ff,#5f2eea);
    color:white;
    border:none;
    padding:15px;
    border-radius:12px;
    cursor:pointer;
    font-size:16px;
    font-weight:bold;
}

.btn-dropdown:hover{
    opacity:0.9;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th {
    background: #2b59ff;
    color: white;
    padding: 10px;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

/* HOVER EFFECT */
tr:hover {
    background: #f1f5ff;
}

/* BADGE */
.badge {
    padding: 5px 10px;
    border-radius: 8px;
    color: white;
}

.lulus {
    background: green;
}

.tidak {
    background: red;
}
</style>

</head>
<script>
function toggleSiswa() {

    let menu = document.getElementById('daftarSiswa');

    if(menu.style.display === 'none'){
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }

}
</script>
<body>

<!-- HEADER -->
<div class="header">
    <h2>📚 Detail Kelas</h2>
</div>

<div class="container">

    <!-- INFO KELAS -->
    <!-- STATISTIK -->
<div class="card">
    <div class="flex">
        <div>
            <h4>👨‍🎓 Jumlah Siswa</h4>
            <h2>{{ $jumlahSiswa }}</h2>
            <button onclick="toggleSiswa()" class="btn-dropdown">Lihat Daftar Siswa ▼
            </button>
            <div id="daftarSiswa" style="display:none; margin-top:20px;">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>NIS</th>
                    </tr>

                    @foreach($siswa as $index => $s)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $s->name }}</td>
                        <td>{{  strstr($s->email, '@', true)}}</td>
                    </tr>
                    @endforeach

                </table>


</div>
        </div>

        <div>
            <h4>📚 Jumlah Materi</h4>
            <h2>{{ $jumlahMateri }}</h2>
        </div>
    </div>
</div>
    <div class="card flex">
        <div>
            <h3>{{ $kelas->nama_kelas }}</h3>
            <small>Kode: {{ $kelas->kode_kelas }}</small>
        </div>

        <div>
            <a href="{{ route('dashboard.guru') }}">
                <button class="btn btn-back">← Kembali</button>
            </a>

            <a href="{{ route('kelas.download', $kelas->id) }}">
                <button class="btn btn-download">⬇ Download Nilai</button>
            </a>
        </div>
    </div>

    <!-- DATA SISWA -->
    <div class="card">
        <h3>👨‍🎓 Daftar Siswa & Nilai</h3>

        <table>
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Materi</th>
        <th>Nilai</th>
        <th>Status</th>
        <th>Waktu Mengumpulkan</th>
    </tr>

    @foreach($siswa as $s)

        @php
            $nilai = DB::table('hasil_kuis')
                ->where('user_id', $s->id)
                ->get();
        @endphp

        @forelse($nilai as $n)
        <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td>Materi {{ $n->materi_id }}</td>
            <td>{{ $n->nilai }}</td>

            <td>
                @if($n->nilai >= 70)
                    <span class="badge lulus">Lulus</span>
                @else
                    <span class="badge tidak">Tidak</span>
                @endif
            </td>

            <td>
                {{ \Carbon\Carbon::parse($n->created_at)->format('d M Y H:i') }}
            </td>
        </tr>
        @empty
        <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td colspan="4" style="text-align:center">
                Belum mengerjakan kuis
            </td>
        </tr>
        @endforelse

    @endforeach
</table>
    </div>

</div>

</body>
</html>