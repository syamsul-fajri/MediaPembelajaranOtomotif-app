<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kuis</title>

<style>
body {
    font-family: Arial;
    background: #f4f6fb;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
}

.soal {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 10px;
    background: #f9f9f9;
}

button {
    background: #2b59ff;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 10px;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background: #1d3fd6;
}

select {
    padding: 8px;
    border-radius: 8px;
}
</style>
</head>



<div class="container">
    <body>
    <button onclick="window.location.href='/materi{{ $materi_id }}/detail/'">
    ← Kembali ke Materi
</button>
    <h2>Kuis Materi {{ $materi_id }}</h2>

    <form action="/kuis/{{ $materi_id }}" method="POST">
        @csrf

        <!-- ===================== -->
        <!-- PILIHAN GANDA -->
        <!-- ===================== -->
        <h3>Soal Pilihan Ganda</h3>

        @foreach($soal_pg as $i => $s)
        <div class="soal">
            <p><b>{{ $i+1 }}. {{ $s['pertanyaan'] }}</b></p>

            @foreach($s['opsi'] as $key => $opsi)
                <label>
                    <input type="radio" name="pg{{ $s['id'] }}" value="{{ $key }}" required>
                    {{ strtoupper($key) }}. {{ $opsi }}
                </label><br>
            @endforeach
        </div>
        @endforeach


        <!-- ===================== -->
        <!-- MENCOCOKKAN -->
        <!-- ===================== -->
        <h3>Soal Mencocokkan</h3>

        @foreach($soal_cocok as $c)
        <div class="soal">
            <p><b>{{ $c['pertanyaan'] }}</b></p>

            @foreach($c['kiri'] as $i => $kiri)
                <p>
                    {{ $kiri }} =
                    <select name="cocok{{ $i }}" required>
                        <option value="">-- pilih --</option>
                        @foreach($c['kanan'] as $j => $kanan)
                            <option value="{{ $j }}">{{ $kanan }}</option>
                        @endforeach
                    </select>
                </p>
            @endforeach
        </div>
        @endforeach


        <!-- SUBMIT -->
        <button type="submit">Kumpulkan Jawaban</button>

    </form>
</div>

</body>
</html>