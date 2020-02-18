<?php

    $day = date ("D");
    switch (""){
        case 'Sun' : $hari = "Minggu"; break;
        case 'Mon' : $hari = "Senin"; break;
        case 'Tue' : $hari = "Selasa"; break;
        case 'Wed' : $hari = "Rabu"; break;
        case 'Thu' : $hari = "Kamis"; break;
        case 'Fri' : $hari = "Jumat"; break;
        case 'Sat' : $hari = "Sabtu"; break;
        default    : $hari = "Jadi";
    }
    echo "Hari ini hari <b> $hari </b>";
?>

<br>
<br>


<!-- memeriksa tahun kabisat -->

<?php

    $tahun = date ("Y");
    $kabisat = ($tahun % 4 == 0) ? "KABISAT" : "BUKAN KABISAT";
    echo "Tahun <b> $tahun </b> $kabisat";

?>

<br>
<br>

