<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $merk_jam = $koneksi->real_escape_string($_POST['merk_jam']);
    $jumlah_barang = $koneksi->real_escape_string($_POST['jumlah_barang']);
    $harga_total = $koneksi->real_escape_string($_POST['harga_total']);
    $tipe_pembayaran = $koneksi->real_escape_string($_POST['tipe_pembayaran']);
    $tanggal = $koneksi->real_escape_string($_POST['tanggal']);

    // Query untuk memasukkan data ke dalam tabel transaksi
    $query = "INSERT INTO transaksi (merk_jam, jumlah_barang, harga_total, tipe_pembayaran, tanggal) 
              VALUES ('$merk_jam', '$jumlah_barang', '$harga_total', '$tipe_pembayaran', '$tanggal')";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Data berhasil disimpan');</script>";
        header("Location: transaksi.php"); // Redirect back to the admin page
        exit(); // Exit script after redirect
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
?>
