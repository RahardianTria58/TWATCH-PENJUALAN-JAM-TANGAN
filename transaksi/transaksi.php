<?php
include '../koneksi.php';

$query = "SELECT * FROM transaksi";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transaction</title>
    <link rel="stylesheet" href="../admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <a href="../admin.php">Home</a>
            <a href="../categories.php">Categories</a>
            <a href="transaksi.php">Transaksi</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="pngegg.png" alt="" />
                <button class="btn">
                    <a href="../logout.php">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Transaction</h3>
                <button type="button" class="btn btn-tambah">
                    <a href="entry-transaksi.php">Tambah Data</a>
                </button>
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 20%">MERK JAM</th>
                            <th>JUMLAH BARANG</th>
                            <th>HARGA TOTAL</th>
                            <th style="width: 20%">TIPE PEMBAYARAN</th>
                            <th style="width: 20%">TANGGAL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['merk_jam']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jumlah_barang']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['harga_total']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tipe_pembayaran']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tanggal']) . "</td>";
                        
                            echo "<td>
                                <a href='edit-transaksi.php?merk_jam=" . htmlspecialchars($row['merk_jam']) . "'>Edit</a> | 
                                <a href='hapus-transaksi.php?merk_jam=" . htmlspecialchars($row['merk_jam']) . "'>Hapus</a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
