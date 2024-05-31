<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transaction Entry</title>
    <link rel="stylesheet" href="admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="ad.html">Home</a>
            <a href="categories.html">Categories</a>
            <a href="transaction.html">Transaction</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="pngegg.png" alt="" />
                <button class="btn">
        <a href="../logout/html">Logout</a> </button>
            </div>
            <div class="content">
                <h3>Input Transaction</h3>
                <div class="form-login">
     <form action="">
    <label for="categories">Nama pembeli</label>
                        <input
    class="input"
    type="text"
    name="categories"
    id="categories"
    placeholder="Nama pembeli"
    />
    <label for="categories">harga satuan</label>
  <input
    class="input"
    type="text"
    name="transaksi"
    id="transaksi"
    placeholder="harga satuan"
    />
    <label for="categories">Merk Barang</label>
    <input
class="input"
type="text"
name="barang"
id="barang"
placeholder="Merk Barang"
/>
    <label for="categories">Harga</label>
    <input
class="input"
type="text"
name="harga"
id="harga"
placeholder="Harga Barang"
/> <label for="categories">Tanggal Transaksi</label>
    <input
class="input"
type="text"
name="tanggal"
id="tanggal"
placeholder="Tanggal Transaksi"
/>
<button type="submit" class="btn btn-simpan" name="simpan"> Simpan  </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
