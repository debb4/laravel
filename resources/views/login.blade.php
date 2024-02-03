<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Login</title>
</head>
<body>
    <h1>Selamat Datang Di Halaman Login</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" placeholder="masukan username">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" placeholder="masukan password">
        <br><br>
        <button type="submit">Login</button>
    </form>
    <br>
    <a href="/home">Back</a>
</body>
</html>