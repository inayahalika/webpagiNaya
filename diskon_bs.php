<?php

    include'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="POST" action="proses/proses_diskon.php">
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" class="form-control col-sm-6" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Barang</label>
                        <input type="number" class="form-control col-sm-6" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok Barang</label>
                        <input type="number" class="form-control col-sm-6" name="stok">
                    </div> 
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control col-sm-6" name="kategori">
                    </div>
                        <button type="submit" class="btn btn-primary" name="tambah" value="tambah">Submit</button>
                </form>
            </div>
        </div>
    </div>


<?php

    if (isset($_POST['tambah'])) {
        $nama = $_POST ['nama'];
        $harga = $_POST ['harga'];
        $stok = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $diskon = 20/100;

        if ($harga >= 400000) {
            echo "<div class= 'alert alert-primary' role='alert'>
            Harga diskon yang diperoleh sebesar Rp.",
            $harga * $diskon ;
            echo "dan Harga $nama yang harus dibayar sebesar Rp.", $harga - ($harga * $diskon);
            echo "</div>";
        }else {
            echo "Data Kosong";
        }
    }
?>

<?php

include 'footer.php';

?>