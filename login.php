<?php
    $user = "member";
    $pass = "member13";

    if ($user == "member" && $pass == "member123"){
        echo "Ke halaman member";
    }else if ($user == "admin" && $pass == "admin123"){
        echo "Ke halaman admin";
    }else {
        echo "Username dan Password yang anda masukkan salah";
    }
?>


<br>
<br>

<?php

    $user = "";
    if (!isset ($user)){
        echo "Variabel tidak ada";
    }else {
        echo "variabel ada";
    }
?>

