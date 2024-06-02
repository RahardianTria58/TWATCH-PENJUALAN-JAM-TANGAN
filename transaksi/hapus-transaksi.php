<?php
include '../koneksi.php';

if (isset($_GET['merk_jam'])) {
    $merk_jam = $koneksi->real_escape_string($_GET['merk_jam']);

    // Menggunakan prepared statement untuk keamanan tambahan
    $stmt = $koneksi->prepare("DELETE FROM transaksi WHERE merk_jam = ?");
    $stmt->bind_param("s", $merk_jam);

    if ($stmt->execute()) {
        header("Location: transaksi.php");
        exit(); // Mengakhiri skrip setelah redirect
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Merk Jam tidak diberikan.";
}
?>
