<?php
include'../koneksi/koneksi.php';

        if (isset($_POST['tambah'])) {
            $id = md5(uniqid());
            $nama = $_POST ['nama'];
            $nim = $_POST ['nim'];
            $jurusan = $_POST['jurusan'];
            $nilai_harian = $_POST['nilai_harian'];
            $nilai_quiz = $_POST['nilai_quiz'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_uts = $_POST['nilai_uts'];
            $hasil = ($nilai_harian * 0.1) + ($nilai_quiz * 0.15) + ($nilai_uts * 0.35) + ($nilai_uas * 0.40);
            
            if($hasil <= 50){
                $grade= 'E';
            }else if($hasil <= 65){
                $grade= 'D';
            }else if($hasil <= 75){
                $grade= 'C';
            }else if($hasil <= 85){
                $grade= 'B';
            }else if($hasil <=100 || $data['hasil']>100){
                $grade= 'A';
            }



            $nilai=mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$id' , '$nama' , '$nim' , '$jurusan' , '$nilai_harian' , '$nilai_quiz' , '$nilai_uas' , '$nilai_uts' , '$hasil' , '$grade') ") or die (mysqli_error('$nilai'));

            if($nilai){
                echo '<script> alert("Data berhasil di input")
                window.location.href="../nilai_bs.php";
                </script>';
            }else{
                echo 'Data gagal di input';
            }



        }



























?>