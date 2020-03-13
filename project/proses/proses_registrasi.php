<?php
include'../koneksi/koneksi.php';

if(isset($_POST['registrasi'])){
    $id=md5(uniqid());
    $nama_lengkap=$_POST['nama_lengkap'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $email=$_POST['email'];
    $level = $_POST['level'];


    $input_query= mysqli_query($koneksi,"INSERT into user  VALUES('$id','$nama_lengkap','$username','$password','$email','$level')") or die(mysqli_error($input_query));

    // die($input_query);
    if($input_query){
        echo"
            <script>alert('Data Berhasil di input dan silahkan login')
                window.location.href='../login.php'
            </script>
        ";
    }else{

    }


}
?>