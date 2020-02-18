<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>DATA MAHASISWA</h1></center>

    <form action="" method="POST">
        <label>Nama :</label>
        <input type="text" name="nama" placehorder="Masukkan Nama"><br><br>
        <label>NIM :</label>
        <input type="number" name="nim" placeholder="Masukkan NIM"><br><br> 
        <label>Jurusan :</label>
        <input type="text" name="jurusan" placeholder="Masukkan Jurusan"><br><br>
        <label>Nilai Harian:</label>
        <input type="number" name="nilai_harian" placeholder="Masukkan Nilai"><br><br>
        <label>Nilai Quiz:</label>
        <input type="number" name="nilai_quiz" placeholder="Masukkan Nilai"><br><br>
        <label>Nilai Uts:</label>
        <input type="number" name="nilai_uts" placeholder="Masukkan Nilai"><br><br>
        <label>Nilai Uas:</label>
        <input type="number" name="nilai_uas" placeholder="Masukkan Nilai"><br><br>


        <input type="submit" name="tambah" value="input">


    </form>
</body>
</html>


<?php

    if (isset ($_POST['tambah'])) {
        $nama = $_POST ['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST ['jurusan'];
        $nilai_harian = $_POST ['nilai_harian'];
        $nilai_quiz = $_POST ['nilai_quiz'];
        $nilai_uts = $_POST ['nilai_uts'];
        $nilai_uas = $_POST ['nilai_uas'];
        $nilai = ($nilai_harian * 0.1) + ($nilai_quiz * 0.15) + ($nilai_uts * 0.35) + ($nilai_uas * 0.40);


        echo "Nama saya adalah $nama <br>
        NIM saya adalah $nim <br>
        Saya berasal dari jurusan $jurusan <br>
        Nilai Harian saya adalah $nilai_harian <br>
        Nilai Quiz saya adalah $nilai_quiz <br>
        Nilai Uts saya adalah $nilai_uts <br>
        Nilai Uas saya adalah $nilai_uas <br>";

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

    }
?>