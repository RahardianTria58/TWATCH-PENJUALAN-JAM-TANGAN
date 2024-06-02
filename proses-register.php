<?php 
include 'koneksi.php';

if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Check for empty fields
    if(empty($email) || empty($username) || empty($password)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'register.php';
            </script>
        ";
    } else {
        // Prepare SQL statement
        $sql = "INSERT INTO admin (email, username, password) VALUES ('$email','$username','$password')";
        // Execute query
        if(mysqli_query($koneksi, $sql)) {
            echo "  
                <script>
                    alert('Registrasi Berhasil Silahkan login');
                    window.location = 'login.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'register.php';
                </script>
            ";
        }
    }
}
?>
