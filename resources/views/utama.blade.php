<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>WEB Otomotif Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #2b59ff, #5f2eea);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 350px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .icon {
             width: 80px;
             height: 80px;
             background: white;
             border-radius: 15px;
             display: flex;
             justify-content: center;
             align-items: center;
             margin: 0 auto 15px;
             box-shadow: 0 5px 15px rgba(0,0,0,0.2);

        }

        .header {
            background: linear-gradient(135deg, #2b59ff, #5f2eea);
            color: white;
            text-align: center;
            padding: 30px 20px;
        }

        .header h2 {
            margin-top: 10px;
        }

        .header p {
            font-size: 14px;
            margin-top: 5px;
        }

        .content {
            padding: 25px;
            text-align: center;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 12px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-siswa {
            background: #2b59ff;
            color: white;
        }

        .btn-guru {
            background: #5f2eea;
            color: white;
        }

        .btn-guest {
            background: transparent;
            border: 2px solid #ccc;
            color: #333;
        }

        .btn:hover {
            transform: translateY(-3px);
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <div class="icon">
                <img src="{{ asset('image/Logo_UBG.png') }}" width="60" alt="">
</div>
            <h2>WEB Otomotif Learning</h2>
            <p>Pembelajaran Interaktif dengan Web</p>
            <p>Ahmad Syamsul Fajri</p>
        </div>

        <div class="content">
            <a href="/login/siswa" class="btn btn-siswa">Login sebagai Siswa</a>
            <a href="/login/guru" class="btn btn-guru">Login sebagai Guru</a>
            <a href="{{ route('portfolio') }}" class="btn btn-guest">Detail Portfolio</a>
</a>
        </div>
    </div>

</body>
</html>