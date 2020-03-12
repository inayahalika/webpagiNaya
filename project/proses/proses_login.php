<?php
    session_start ();
    include 'koneksi/koneksi.php';


        if (isset($_POST['input'])) {
                $user = $_POST['user'];
                $password =md5($_POST['password']);

                // query
                $login=mysqli_query($koneksi,"SELECT * FROM project WHERE username='$user' and password='$password'");
                // pengecekan
                $cek=mysqli_num_rows($login);
                // menampilkan definisi data
                $data=mysqli_fetch_assoc($login);

                if($cek>0){
                    if($data['level']=="pengguna"){
                        $_SESSION['username']=$data['username'];
                        $_SESSION['level']=$data['level'];
                        $_SESSION['status']="input";

                        echo "<script> 
                        alert('Welcome My Dear User')
                        window.location.href='../admin/index.php';
                        </script>";

                    }else if($data['level']=="admin"){
                        $_SESSION['username']=$data['username'];
                        $_SESSION['level']=$data['level'];
                        $_SESSION['status']="input";

                        echo "<script> 
                        alert('Welcome Admin!')
                        window.location.href='../index.php';
                        </script>";
                    }
                }else{
                    echo '<script>alert("username dan password salah!")
                    window.location.href="../loginn.php";
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