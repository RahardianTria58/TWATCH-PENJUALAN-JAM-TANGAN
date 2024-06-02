<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['simpan'])) {
    $merk_jam = $koneksi->real_escape_string($_POST['merk_jam']);
    $jumlah_barang = $koneksi->real_escape_string($_POST['jumlah_barang']);
    $harga_total = $koneksi->real_escape_string($_POST['harga_total']);
    $tipe_pembayaran = $koneksi->real_escape_string($_POST['tipe_pembayaran']);
    $tanggal = $koneksi->real_escape_string($_POST['tanggal']);

    // Query untuk mengupdate data transaksi
    $query = "UPDATE transaksi 
              SET jumlah_barang='$jumlah_barang', harga_total='$harga_total', tipe_pembayaran='$tipe_pembayaran', tanggal='$tanggal' 
              WHERE merk_jam='$merk_jam'";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Data berhasil diupdate');</script>";
        header("Location: transaksi.php"); // Redirect back to the transaction page
        exit(); // Exit script after redirect
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

// Memperoleh data transaksi yang akan diedit
if (isset($_GET['merk_jam'])) {
    $merk_jam = $koneksi->real_escape_string($_GET['merk_jam']);
    $query_select = "SELECT * FROM transaksi WHERE merk_jam='$merk_jam'";
    $result = $koneksi->query($query_select);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $jumlah_barang = $row['jumlah_barang'];
        $harga_total = $row['harga_total'];
        $tipe_pembayaran = $row['tipe_pembayaran'];
        $tanggal = $row['tanggal'];
    } else {
        echo "Data transaksi tidak ditemukan.";
        exit();
    }
} else {
    echo "Merk Jam tidak diberikan.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaction</title>
    <link rel="stylesheet" href="../admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="../admin.php">Index</a>
            <a href="categories.php">Categories</a>
            <a href="transaksi.php">Transaction</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="pngegg.png" alt="">
                <button class="btn">
                    <a href="../logout.html">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Edit data Transaksi</h3>
                <div class="form-login">
                    <form action="edit-transaksi.php" method="POST">
                        
                        <label for="merk_jam">Merk Jam</label>
                        <input class="input" type="text" name="merk_jam" placeholder="Merk Jam" value="<?php echo $row['merk_jam']; ?>" required>
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input class="input" type="number" name="jumlah_barang" placeholder="Jumlah Barang" value="<?php echo $row['jumlah_barang']; ?>" required>
                        <label for="harga_total">Harga Total</label>
                        <input class="input" type="number" name="harga_total" placeholder="Harga Total" value="<?php echo $row['harga_total']; ?>" required>
                        <label for="tipe_pembayaran">Tipe Pembayaran</label>
                        <select class="input" name="tipe_pembayaran" required>
                            <option value="Tunai" <?php if ($tipe_pembayaran == 'Tunai') echo 'selected'; ?>>Tunai</option>
                            <option value="Kredit" <?php if ($tipe_pembayaran == 'Kredit') echo 'selected'; ?>>Kredit</option>
                        </select>
                        <label for="tanggal">Tanggal</label>
                        <input class="input" type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>" required>
                        <button type="submit" class="btn btn-simpan" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
