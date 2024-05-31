<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories Entry</title>
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
            <a href="../admin.html">index</a>
            <a href="categories.html">Categories</a>
            <a href="transaksi.html">Transaction</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="pngegg.png" alt="" />
                <button class="btn">
    <a href="../logout/html">Logout</a>
    </button>
            </div>
            <div class="content">
                <h3>Input data</h3>
                <div class="form-login">
                    <form action="">
   <label for="categories">MERK</label>
 
<input
    class="input"
    type="text"
    placeholder="MERK BARU "
    />
    <label for="categories">NO SERI</label>
    <input
class="input"
type="text"
placeholder="NO SERI"
/>
    <label for="categories"> HARGA</label>
    <input
class="input"
type="text"
placeholder="HARGA"
/>
    <label for="categories">NAMA PEMESAN</label>
    <input
class="input"
type="text"
placeholder="NAMA PEMESAN"/>            
<button type="submit" class="btn btn-simpan" name="simpan">
    Simpan
    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
