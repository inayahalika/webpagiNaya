<?php

    for ($i = 0; $i <= 10; $i++) {
        echo "Naya <br>";
    }
?>

<br>
<br>
<hr>

<?php
    for ($ganjil = 1; $ganjil <= 10; $ganjil++) {
        if ($ganjil % 2 == 1) {
            echo $ganjil ;
        }
}
?>

<br>
<br>

<?php

    for ($genap = 2; $genap <= 10; $genap++) {
        if ($genap % 2 == 0) {
            echo $genap ;
        }
    }
?>

<br>
<br>

<?php

// contoh 1
    for ($i = 1; $i <= 10; $i++) {
        echo "$i";
    }
    echo "<br><br>";

// contoh 2
    for ($i = 1; ; $i++) {
        if ($i > 10){
            break;
        }
        echo "$i";
    }
    echo "<br><br>";

// contoh 3
    $i = 1; 
    for ( ; ; ) {
        if ($i > 10) {
            break;
        }
        echo "$i " ;
        $i++ ;
    } echo "<br><br>";

// contoh 4
    for ($i = 1; $i <= 10; print "$i " , $i++);

?>