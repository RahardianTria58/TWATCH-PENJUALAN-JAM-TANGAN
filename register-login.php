<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
  <div class="col-img">
    <img src="pngegg.png" alt="">
  </div>
  <div class="login-container">
    <h1>Login</h1>
    <hr>
    <p><span>TWATCH</span></p>

    <form onsubmit="return LoginForm()">
      <div class="input-group">
        <input type="text" id="username" name="username" placeholder="Username" required>
      </div>
      <div class="input-group">
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
 
<script>
// function LoginForm() {
//     var username = document.getElementById("username").value;
//     var password = document.getElementById("password").value;
//     var validUsername = "TRIA";
//     var validPassword = "2218058";
//     var validPassword = "2218058";

//     if (username === "" || password === "") {
//         alert("Isi semua data terlebih dahulu.");
//         return false;
//     }

//     if (username === validUsername && password === validPassword) {
//         // Menyimpan username di Web Storage
//         localStorage.setItem("username", username);
//         alert("Login berhasil!");
//         window.location.href = "admin.php";
//         return false; // Mencegah pengiriman formulir default
//     } else {
//         alert("Username atau password salah.");
//         return false; // Mencegah pengiriman formulir default
//     }
// }
</script>
</body>
</html>
