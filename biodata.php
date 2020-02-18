
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>DATA DIRI</h1></center>

    <form action="" method="POST">
        <label>Nama :</label>
        <input type="text" name= "nama" placeholder="Masukkan Nama"> <br>
        <label>Email :</label>
        <input type="email" name="email" placeholder="Masukkan Email"> <br>
        <label>Jenis Kelamin</label>
        <input type="radio" name="gender" value="Laki-laki"> Laki-laki
        <input type="radio" name="gender" Value="Perempuan"> Perempuan <br>
        <label>Alamat :</label>
        <input type="text area" name="alamat"> <br>
        <label>Tanggal Lahir :</label>
        <input type="date" name="tanggal-lahir"> <br>
        <label>Tempat Lahir :</label>
        <input type="text" name="tempat-lahir"> <br>
        <label>No. HP :</label>
        <input type="number" name="no-hp"placeholder="Masukkan No.HP"> <br>
        <label>Hobby :</label>
        <input type="checkbox" name="hb1" value="Membaca"> Membaca
        <input type="checkbox" name="hb2" value="Menulis"> Menulis
        <input type="checkbox" name="hb3" value="Bernyanyi"> Bernyanyi
        <input type="checkbox" name="hb4" value="Lainnya"> Lainnya <br>

        <input type="submit" name="tambah" value="input">

    </form>
</body>
</html>

<?php
    if (isset ($_POST ['tambah'])) {
        $nama_saya = $_POST ['nama'];
        $email_saya = $_POST ['email'];
        $jenis_kelamin = $_POST ['gender'];
        $alamat = $_POST ['alamat'];
        $tanggal_lahir = $_POST ['tanggal-lahir'];
        $tempat_lahir = $_POST ['tempat-lahir'];
        $no_hp = $_POST ['no-hp'];
        $no_hp = $_POST ['hb1'];
        $no_hp = $_POST ['hb2'];
        $no_hp = $_POST ['hb3'];
        $no_hp = $_POST ['hb4'];

        echo "Nama Saya adalah $nama_saya <br>
        Email saya adalah $email_saya <br>
        Saya adalah seorang $jenis_kelamin <br>
        Saya tinggal di $alamat <br> 
        Saya lahir pada $tanggal_lahir <br>
        Saya lahir di $tempat_lahir <br>
        Hubungi saya di $no_hp <br>
        Hobby saya adalah $hb1 <br>
        Hobby saya adalah $hb2 <br>
        Hobby saya adalah $hb3 <br>
        Hobby saya adalah $hb4 <br>";
        

    }

?>