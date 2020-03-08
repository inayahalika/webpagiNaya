<?php
    include'header.php';
?>

<?php
include 'koneksi/koneksi.php';


$id= $_GET['id_mahasiswa'];

$show=mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'") or die (mysqli_error($show));

if(mysqli_num_rows($show)==0){

    echo'
        <script>window.history.back();
        </script>
    ';
}else{
        $data=mysqli_fetch_array($show);
}


?>


<div class="container">
    <form action="proses/proses_edit_nilai.php" method="GET">
        <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']?>">
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" class="form-control" id="nama_mahasiswa                                                     " placeholder="Masukkan Nama" value="<?php echo $data['nama_mahasiswa']?>">
            </div>
            <div class="form-group">
                <label for="nim_mahasiswa">NIM :</label>
                <input type="text" name="nim" class="form-control" id="nim_mahasiswa" placeholder="Masukkan NIM" value="<?php echo $data['nim_mahasiswa']?>">
            </div>
            <div class="form-group">
                <label for="jurusan_mhs">Jurusan :</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan_mahasiswa" placeholder="Masukkan Jurusan" value="<?php echo $data['jurusan_mahasiswa']?>">
            </div>
            <div class="form-group">
                <label for="mata_kuliah">Jurusan :</label>
                <input type="text" name="mata_kuliah" class="form-control" id="mata_kuliah" placeholder="Masukkan Mata Kuliah" value="<?php echo $data['mata_kuliah']?>">
            </div>
            <div class="form-group">
                <label for="n_harian">Nilai Harian :</label>
                <input type="text" name="nilai_harian" class="form-control" id="nilai_harian" placeholder="Masukkan Nilai" value="<?php echo $data['nilai_harian']?>">
            </div>
            <div class="form-group">
                <label for="n_quiz">Nilai Quiz :</label>
                <input type="text" name="nilai_quiz" class="form-control" id="nilai_quiz" placeholder="Masukkan Nilai" value="<?php echo $data['nilai_quiz']?>">
            </div>
            <div class="form-group">
                <label for="n_uas">Nilai UAS :</label>
                <input type="text" name="nilai_uas" class="form-control" id="nilai_uas" placeholder="Masukkan Nilai" value="<?php echo $data['nilai_uas']?>" >
            </div>
            <div class="form-group">
                <label for="n_uts">Nilai UTS :</label>
                <input type="text" name="nilai_uts" class="form-control" id="nilai_uts" placeholder="Masukkan Nilai" value="<?php echo $data['nilai_uts']?>">
            </div>

            <input type="submit" name="update" class="btn btn-info" value="Update">
            <br>
            <br>
            <br>
    </form>
</div>

<?php
    include'footer.php';
?>