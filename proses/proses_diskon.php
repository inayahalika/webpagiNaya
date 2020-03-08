<?php
include'../koneksi/koneksi.php';

        if (isset($_POST['tambah'])) {
            $kode = md5(uniqid());
            $nama = $_POST ['nama'];
            $harga = $_POST ['harga'];
            $stok = $_POST['stok'];
            $kategori = $_POST['kategori'];

            $brg=mysqli_query($koneksi,"INSERT INTO stok VALUES('$kode' , '$nama' , '$harga' , '$stok' , '$kategori') ") or die (mysqli_error(''));

            if($brg){
                echo '<script> alert("Data berhasil di input")
                window.location.href="../diskon_bs.php";
                </script>';
            }else{
                echo 'Data gagal di input';
            }



        }






?>