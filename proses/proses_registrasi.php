<?php
include '../koneksi/koneksi.php';

if(isset($_POST['tambah'])){
    $id = md5(uniqid());
    $password = md5($_POST['password']);
    $user = $_POST['user'];
    $level = $_POST['level'];
    $email= $_POST['email'];



    $input_query= mysqli_query($koneksi, "INSERT into user VALUES ('$id', '$password' , '$user' , '$level', '$email')") or die (mysqli_error($input_query));

    if($input_query){
        echo "
        <script>alert ('Data Berhasil di input dan Silahkan Login')
                window.location.href= '../loginn.php'
            </script>
        ";
    }else{
        
    }
}


?>