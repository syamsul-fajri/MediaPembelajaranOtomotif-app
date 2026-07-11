<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Guru</title>

<style>
body {
    margin: 0;
    font-family: sans-serif;
    background: linear-gradient(135deg, #3b5bdb, #8e44ad);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    background: white;
    padding: 30px;
    border-radius: 20px;
    width: 320px;
    text-align: center;
}

input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 10px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    background: #3b5bdb;
    color: white;
    border-radius: 10px;
    cursor: pointer;
}

button:hover {
    background: #2f4acb;
}
</style>
</head>

<body>

<div class="card">
    <h2>Login Guru</h2>

    <form action="/login/guru" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Masuk</button>
    </form>

    <br>
    <a href="/">← Kembali</a>
</div>

</body>
</html>