<?php
    include '../koneksi/koneksi.php';
    include 'header.php';

    if(isset($_GET['update'])){
        $id=$_GET['id_mahasiswa'];
        $nama=$_GET['nama'];
        $nim=$_GET['nim'];
        $jurusan=$_GET['jurusan'];
        $mata_kuliah=$_GET['mata_kuliah'];
        $nilai_harian=$_GET['nilai_harian'];
        $nilai_quiz=$_GET['nilai_quiz'];
        $nilai_uas=$_GET['nilai_uas'];
        $nilai_uts=$_GET['nilai_uts'];
        $hasil=($nilai_harian*0.1)+($nilai_quiz*0.15)+($nilai_uas*0.4)+($nilai_uts*0.35);
    
                    if($hasil<=50){
                        $grade='E';
                    }else if($hasil<=65){
                        $grade='D';
                    }else if($hasil<=75){
                        $grade='C';
                    }else if($hasil<=85){
                        $grade='B';
                    }else if($hasil<=100 ||$hasil>100){
                        $grade='A';
                    }
    
        $update =mysqli_query($koneksi,"UPDATE mahasiswa SET nama_mahasiswa='$nama',nim_mahasiswa='$nim',jurusan_mahasiswa='$jurusan', mata_kuliah='$mata_kuliah',nilai_harian='$nilai_harian',nilai_quiz='$nilai_quiz',nilai_uas='$nilai_uas',nilai_uts='$nilai_uts',hasil='$hasil', grade='$grade' WHERE id_mahasiswa='$id'")or die(mysqli_error($update));
        
        if($update){
            echo'
                <script>alert("data berhasil diupdate");
                window.location.href="../nilai_bs.php"
                </script>
            ';
        }else{
            echo'
            <script>alert("data gagal diupdate");
            window.location.href="../edit_mhs.php"
            </script>
        ';
        }
    
    
    }
?>