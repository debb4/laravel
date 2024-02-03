<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Register</title>
</head>
<body>
    <h1>Selamat Datang Di Halaman Register</h1>
    <form action="/register" method="POST">
        @csrf
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" placeholder="masukan username">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" placeholder="masukan password">
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" placeholder="masukkan email">
        <br><br>
        <button type="submit">Register</button>
    </form>
    <br>
    <a href="/home">Back</a>
</body>
</html>