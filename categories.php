<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
    </div> class="container">
        <div class="sidebar">
            <a href="ad.css">Home</a>
            <a href="categories.html">Categories</a>
            <a href="transaction.html">Transaksi</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="pngegg.png" alt="">
                <button class="btn">
                    <a href="logout.html">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Categories</h3>
                <button type="button" class="btn btn-tambah">
                    <a href="entry.html">Tambah Data</a>
                </button>
                <table class="table-data" id="data-table">
                    <thead>
                        <tr>
                            <th style="width: 20%">MERK</th>
                            <th>NO SERI</th>
                            <th>HARGA</th>
                            <th style="width: 20%">TAHUN BUAT</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>rolex</td>
                            <td>29330 </td>
                            <td>10.599.999</td>
                            <td>Tria </td>
                            <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                        </tr>
                        <tr>
                            <td>G-shock</td>
                            <td>22115 </td>
                            <td>1.999.999</td>
                            <td>Rina </td>
                            <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
