<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Siswa</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #2b59ff, #133bc8);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: white;
            padding: 30px;
            border-radius: 20px;
            width: 320px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .logo {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .logo img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        h2 {
            margin-bottom: 20px;
            color: #472bff;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus {
            border-color: #2b59ff;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #400ad6;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #5f2eea;
        }

        .back {
            margin-top: 15px;
            display: block;
            color: #2b59ff;
            text-decoration: none;
            font-size: 14px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="logo">
         <img src="{{ asset('Image/Logo_UBG.png') }}" alt="Logo">
    </div>
    <h2>Login Siswa</h2>

    <!-- ERROR -->
    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/login/siswa">
        @csrf

        <input type="text" name="nis" placeholder="NIS">
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Login</button>
    </form>

    <a href="/" class="back">← Kembali ke Menu Utama</a>
</div>

</body>
</html>
    
<!-- </body>
</html>
<h2>Login Siswa</h2>

@if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

<form method="POST" action="/login/siswa">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form> -->