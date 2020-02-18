<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>HARGA DISKON</h1></center>

    <form action="" method="POST">
        <label>Sepatu :</label>
        <input type="number" name="sepatu" placeholder="Masukkan Harga"><br><br>
        <label>Diskon :</label>
        <input type="number" name="diskon" placeholder="Masukkan Nominal Diskon">

        <input type="submit" name="tambah" value="input">
    </form>
</body>
</html>

<?php

    if (isset($_POST['tambah'])) {
        $sepatu = $_POST ['sepatu'];
        $diskon = $_POST ['diskon'];
        $harga_minimal_diskon = 400000;

        if ($sepatu >= $harga_minimal_diskon) {
            // harga - ($sepatu * $diskon / 100)
            $harga_setelah_diskon = $sepatu - ($sepatu * $diskon / 100);
            echo "Total harga $sepatu setelah mendapat diskon adalah Rp. $harga_setelah_diskon";
        }else {
            echo "harga $sepatu";
        }
    }
?>