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
function LoginForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "" || password === "") {
        alert("Isi semua data terlebih dahulu.");
        return false;
    }

    // Menyimpan username di Web Storage
    localStorage.setItem("username", username);
    alert("Login berhasil!");
    window.location.href = "admin.php";
    return false; // Mencegah pengiriman formulir default
}
</script>
</body>
</html>
