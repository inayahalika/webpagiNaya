<?php
include '../koneksi/koneksi.php';

if (isset ($_POST ['tambah'])) {
        $id=uniqid();
        $nama_saya = $_POST ['nama'];
        $email_saya = $_POST ['email'];
        $alamat = $_POST ['alamat'];
        $tanggal_lahir = $_POST ['tanggal_lahir'];
        $tempat_lahir = $_POST ['tempat_lahir'];
        $no_hp = $_POST ['no-hp'];
        $jenis_kelamin = $_POST ['gender'];
        $hb1 =(!empty($_POST ['hb1'])?$_POST ['hb1']:'') ;
        $hb2 = (!empty($_POST ['hb2'])?$_POST ['hb2']:'') ;
        $hb3 =(!empty($_POST ['hb3'])?$_POST ['hb3']:'') ;
        $hobby=($hb1.','.$hb2.','.$hb3.',');


        $nama_file=$_FILES['foto']['name'];

        $format=explode("." , $nama_file);
        $fileExtension= end($format);
        $nama_sementara=$_FILES['foto']['tmp_name'];
        $md5file=md5($nama_file) . "." . $fileExtension;

        $lokasi_upload="../upload/";

        $fungsi_upload = move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);

        $query=mysqli_query($koneksi,"INSERT INTO biodata VALUES('$id','$nama_saya','$email_saya','$alamat','$tanggal_lahir','$tempat_lahir','$no_hp','$jenis_kelamin','$hobby','$md5file')")or die(mysqli_error($query));

        if($query){

                echo'data biodata berhasil di masukkan';

        }else{
                echo'data gagal dimasukkan';
                }

        }

?>