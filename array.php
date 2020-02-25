<?php
    include 'header.php';
?>

<form action="" method="POST">
    <input type="text" name="mangga">
    <input type="submit" name="input" value="show">
</form>

<?php

    if(isset($_POST['input'])) {
        $buah = $_POST['mangga'];

        $arraybuah = [
            "mangga",
            "kelapa",
            "melon"
        ];
        if($buah = $arraybuah[2]){
            echo "$arraybuah[2]";
        }
    }
?>

<?php

    // Metode pertama 
    $buah = array("Mangga" , "Melon" , "Apel" , "Jambu");
    echo "<br> $buah[2]";

    // Metode kedua
    $buahsaja = [
        "Mangga",
        "Melon",
        "Apel",
        "Jambu",
    ];
    echo "<br> $buahsaja[2]";

    // Metode ketiga
    $buahh = array();
    $buahh[] = "Mangga";
    $buahh[] = "Melon";
    $buahh []= "Apel";
    $buahh []= "Jambu";

    echo "<br> $buahh[0]";

?>

<?php
    include 'footer.php';
?>