<?php
    include 'header.php';
?>

<form action="" method="POST">
    <input type="text" name="color">
    <input type="submit" name="input" value="show">
</form>

<?php

    if(isset($_POST['input'])){
        $color = $_POST['color'];

        $arraycolor = [
            "biru",
            "merah",
            "ungu"
        ];

        if($color == $arraycolor[0]){
            echo "<h1 style='color: blue'>$color</h1>";
        }else if ($color == $arraycolor[1]){
            echo "<h1 style='color: red'>$color</h1>";
        }else if ($color == $arraycolor[2]){
            echo "<h1 style='color: purple'>$color</h1>";
        }
        else {
            echo "warna tidak terdeteksi gais";
        }
    }
?>