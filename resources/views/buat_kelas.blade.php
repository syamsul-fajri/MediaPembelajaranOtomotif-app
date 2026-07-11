<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Buat Kelas</title>

<style>
body {
    font-family: Arial;
    background: #f5f6fa;
    margin: 0;
}

/* HEADER */
.header {
    background: linear-gradient(135deg, #3b5bdb, #8e44ad);
    color: white;
    padding: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

/* CONTAINER */
.container {
    padding: 20px;
    max-width: 700px;
    margin: auto;
}

/* CARD */
.card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* INPUT */
input {
    width: 100%;
    padding: 10px;
    margin-top: 8px;
    margin-bottom: 15px;
    border-radius: 10px;
    border: 1px solid #ccc;
}

/* BUTTON */
button {
    padding: 10px 15px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.add-btn {
    background: #2b59ff;
    color: white;
}

.save-btn {
    background: #28a745;
    color: white;
    width: 100%;
}

.back-btn {
    margin-bottom: 15px;
    display: inline-block;
    color: #2b59ff;
    text-decoration: none;
}
</style>
</head>

<body>

<div class="header">
    <h2>Buat Kelas Baru</h2>
</div>

<div class="container">

<a href="/dashboard/guru" class="back-btn">← Kembali</a>

<div class="card">

@if ($errors->any())
    <div style="color:red;">
        {{ $errors->first() }}
    </div>
@endif

<form action="/buat-kelas" method="POST">
@csrf

<label>Nama Kelas</label>
<input type="text" name="nama_kelas" placeholder="Contoh: XII TKR 1">

<h4>Data Siswa</h4>

<div id="siswa-container">
    <div class="row">
        <input type="text" name="nama_siswa[]" placeholder="Nama Siswa">
        <input type="text" name="nis_siswa[]" placeholder="NIS">
    </div>
</div>

<button type="button" class="add-btn" onclick="tambahSiswa()">+ Tambah Siswa</button>

<br><br>

<button type="submit" class="save-btn">Simpan Kelas</button>

</form>

</div>

</div>

<script>
function tambahSiswa() {
    let div = document.createElement('div');
    div.innerHTML = `
        <input type="text" name="nama_siswa[]" placeholder="Nama Siswa">
        <input type="text" name="nis_siswa[]" placeholder="NIS">
    `;
    document.getElementById('siswa-container').appendChild(div);
}
</script>

</body>
</html>