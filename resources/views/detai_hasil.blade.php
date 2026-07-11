<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Detail Hasil Kuis</h2>

<p><b>Nama:</b> {{ $data->name }}</p>
<p><b>Materi:</b> {{ $data->materi_id }}</p>
<p><b>Nilai:</b> {{ $data->nilai }}</p>

<hr>

<h3>Jawaban Siswa</h3>

<p>1. Jawaban: {{ $data->q1 ?? '-' }}</p>
<p>2. Jawaban: {{ $data->q2 ?? '-' }}</p>

<br>

<a href="/dashboard/guru">
    <button>Kembali</button>
</a>
</body>
</html>