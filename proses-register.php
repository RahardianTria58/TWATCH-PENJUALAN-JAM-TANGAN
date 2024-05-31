<?php 
include 'koneksi.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
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
        $sql = "INSERT INTO admin (email, password, username) VALUES ('$email', '$password', '$username')";
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
