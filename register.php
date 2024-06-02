<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <style>
        input[type="text"], input[type="email"], input[type="password"] {
            width: 10%;
            padding: 3px;
            margin: 5px 0 15px 0;
            border-radius: 10px;
            border: 1px solid #ddd;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: 10%;
            padding: 3px;
            border-radius: 10px;
            border: none;
            color: #ffffff;
            background-color: #035d86;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="proses-register.php" method="post">
        <h1>Daftar Akun Baru</h1>
        <label for="username">Email:</label>
        <input type="email" id="email" name="email">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" name="register" value="Daftar"><br>
    </form>
    <a href="login.html">Sudah punya akun? Masuk di sini.</a>
</body>
</html>
