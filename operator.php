<!-- persentase diskon -->
<?php
    $sepatu=100000;
    $diskon=0.1;

    $harga_net=$sepatu-($sepatu*$diskon);
    echo "harga yang harus dibayar=Rp.$harga_net";
?>

<br>

<?php
    $hal=10;

    if ($hal % 2 == 0) {
        echo "halaman genap";
    } else if ($hal == 11) {
        echo "Halaman sebelas";
    } else {
        echo "halaman ganjil";
    }
?>

<br>
<!--  menentukan nilai operator -->
<?php
    $a = 10;
    $b = 5;
    $c = 7;
    $d = 8;

    $kali = ($a * $d);
    $tambah = ($a + $c);
    $kurang = ($b - $d);
    $bagi = ($a / $b);
    $hasil = $kurang;

    if ($hasil == $kali) {
        echo "Nilai anda adalah $kali";
    }else if ($hasil == $tambah){
        echo "Nilai anda adalah $tambah";
    }else if ($hasil == $kurang){
        echo "Nilai anda adalah $kurang";
    }else if ($hasil == $bagi){
        echo "Nilai anda adalah $bagi";
    }
?>

<br>
<br>

<!-- menentukan nilai dan biodata mahasiswa-->

<?php
    $nim = "041045384";
    $nama = "Inayah Alika Putri";
    $umur = 18;
    $nilai = 98;
    $status = TRUE;

    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama <br>";
    print "Umur : $umur <br>"; 
    printf ("Nilai : %.2f <br>" , $nilai);
    if ($status)
        echo "status : Aktif";
    else 
        echo "status : Tidak Aktif";
?>

<!-- membuat define variable dan nilai -->

<br>
<br>

<?php
    define ("NAMA" , "Hwang Hyunjin");
    define ("NILAI" , 90);

    echo "Nama : " . NAMA;
    echo "<br> Nilai : " . NILAI;
?>

<br>
<br>

<?php
    $gaji =  1000000;
    $pajak = 0.025;
    $thp = $gaji - ($gaji * $pajak);

    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
?>

<br>
<br>

<!-- program operator logika dan perbandingan  -->
<?php
    $a = 5;
    $b = 4;

    echo "$a == $b : " . ($a == $b);
    echo "<br> $a != $b : " . ($a != $b);
    echo "<br> $a > $b : " . ($a > $b);
    echo "<br> $a < $b : " . ($a < $b);
    echo "<br> ($a != $b) && ($a > $b) : " . (($a != $b) && ($a > $b));
    echo "<br> ($a != $b) || ($a > $b) : " . (($a != $b) || ($a > $b));
?>

<br>
<br>
<!-- percabangan -->

<?php
    $hari = "jumat";
    if ($hari == "senin"){
        echo "upacara bendera";
    }else if ($hari == "selasa"){
        echo "belajar";
    }else if ($hari == "rabu"){
        echo "tidur nyenyak";
    }else if ($hari == "kamis"){
        echo "maen bola";
    }else if ($hari == "jumat"){
        echo "happy anniversary";
    }else if ($hari == "sabtu"){
        echo "jalan-jalan sama emak babeh";
    }else if ($hari == "minggu"){
        echo "libur yeyyyy" ;
    }
?>

<br>
<br>

<?php
    $nim = "041045384";
    $nama = "Inayah Alika Putri";
    $jurusan = "Administrasi Negara";
    $nilai = 85;

    if ($nilai <= 50){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah E";
    }else if ($nilai <= 65){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah D";
    }else if ($nilai <= 72){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah C";
    }else if ($nilai <= 83){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah B";
    }else if ($nilai <= 100 || $nilai >= 100 ){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah A";
    }else {
        echo "$nama dengan $nim dan $jurusan dinyatakan tidak lulus";
    }

?>

<br>
<br>

<?php
    $nama="Inayah Alika Putri";
    $alamat="Asrama TNI-AD Kuta Alam";
    $nohp="0823164566182";

$hasil="";
    if($hasil=="Inayah Alika Putri"){
    echo($nama);
    }elseif($hasil=="Asrama TNI-AD Kuta Alam"){
        echo($alamat);
    }else{
        echo($nohp);
    }
?>
</body>
</html>

<br>

<?php
$a=10;
$b=20;
function myTest(){
    global $a;
    global $b;
    echo ($a)+($b);
}
myTest();
?>

<br>

<?php
    global $a;
    global $b;
    $a="abc";
    $b="Inayah Alika Putri";

    echo $GLOBALS["a"]="abc";
    echo $GLOBALS["b"]="Inayah Alika Putri";
?>


<br>
<br>

<?php

    $harian = 85 * 0.1 ;
    $kuis = 75 * 0.15 ;
    $uas = 80 * 0.40;
    $uts = 70 * 0.35;
    $nilai = $harian + $kuis + $uas + $uts;

    if ($nilai <= 50){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah E";
    }else if ($nilai <= 65){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah D";
    }else if ($nilai <= 72){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah C";
    }else if ($nilai <= 83){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah B";
    }else if ($nilai <= 100 || $nilai >= 100 ){
        echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah A";
    }else {
        echo "$nama dengan $nim dan $jurusan dinyatakan tidak lulus";
    }

?>



