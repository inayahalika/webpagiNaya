<?php

    include'header.php';
?>
    <div class="container">
            <form method="POST" action="proses/proses_nilai.php">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control col-sm-4" name="nama" >
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control col-sm-4" name="nim" >
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control col-sm-4" name="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="nilai_harian">Nilai Harian</label>
                        <input type="number" class="form-control col-sm-4" name="nilai_harian" >
                    </div>
                    <div class="form-group">
                        <label for="nilai_quiz">Nilai Quiz</label>
                        <input type="number" class="form-control col-sm-4" name="nilai_quiz">
                    </div>
                    <div class="form-group">
                        <label for="nilai_uas">Nilai Uas</label>
                        <input type="number" class="form-control col-sm-4" name="nilai_uas">
                    </div>
                    <div class="form-group">
                        <label for="nilai_uts">Nilai Uts</label>
                        <input type="number" class="form-control col-sm-4" name="nilai_uts" >
                    </div>

                
                <input type="submit" class="btn btn-info" name="tambah">
                <br>
                <br>
                <br>
            </form>
    
            <?php
        include'koneksi/koneksi.php';

        

            $tampil_nilai=mysqli_query($koneksi,"SELECT * FROM mahasiswa ")or die(mysqli_error($tampil_nilai));

        

            while($data=mysqli_fetch_array($tampil_nilai)){
                if($data['hasil']<=50){
                    echo"
                        <div class='alert alert-danger' role='alert'>
                            Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim_mahasiswa']." dan Jurusan :".$data['jurusan_mahasiswa']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade E

                            <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>   
                        </div>
                    ";
                }elseif($data['hasil']<=65){
                    echo"
                        <div class='alert alert-warning' role='alert'>
                        Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim_mahasiswa']." dan Jurusan :".$data['jurusan_mahasiswa']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade D

                        <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>
                        </div>
                    ";
                }elseif($data['hasil']<=75){
                    echo"
                        <div class='alert alert-info' role='alert'>
                        Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim_mahasiswa']." dan Jurusan :".$data['jurusan_mahasiswa']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade C

                        <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>
                        </div>
                    ";
                }elseif($data['hasil']<=85){
                    echo"
                        <div class='alert alert-primary' role='alert'>
                        Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim_mahasiswa']." dan Jurusan :".$data['jurusan_mahasiswa']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade B

                        <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>
                        </div>
                    ";
                }elseif($data['hasil']<=100 || $data['hasil']>100){
                    echo"
                        <div class='alert alert-success' role='alert'>
                        Nama : ".$data['nama_mahasiswa']." dengan Nim :".$data['nim_mahasiswa']." dan Jurusan :".$data['jurusan_mahasiswa']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade A

                        <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>
                        </div>
                    ";
                }
            }            

    ?>
    </div>

<?php
    include 'footer.php';
?>

