<?php
    session_start ();
    include '../koneksi/koneksi.php';


        if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password =md5($_POST['password']);

                // query
                $login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
                // pengecekan
                $cek=mysqli_num_rows($login);
                // menampilkan definisi data
                $data=mysqli_fetch_assoc($login);

                if($cek>0){
                    if($data['level']=="customers"){
                        $_SESSION['username']=$data['username'];
                        $_SESSION['level']=$data['level'];
                        $_SESSION['status']="login";

                        echo"<script> 
                        alert('Welcome My Dear Customers')
                        window.location.href='../admin/index.php';
                        </script>";

                    }else if($data['level']=="seller"){
                        $_SESSION['username']=$data['username'];
                        $_SESSION['level']=$data['level'];
                        $_SESSION['status']="login";

                        echo"<script> 
                        alert('Welcome Admin!')
                        window.location.href='../index.php';
                        </script>";
                    }
                }else{
                    echo'<script>alert("username dan password salah!")
                    window.location.href="../login.php";
                    </script>';

            }
        }

            //     if ($user == 'member' && $password == 'member123') {
            //         header('location: nilai_bootstrap.php');
            //     }else if ($user == "admin" && $password == "admin123") {
            //         echo "<script> 
            //         alert (window.location.href='harga_bootstrap.php');
            //         </script>";
            //     }else {
            //         echo "Username dan Password yang anda masukkan salah";
            //     }
            // }

?>