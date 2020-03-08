<?php

    include 'header.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">


<div class="container">
        <div class="col-6">
            <form action="proses/proses_biodata.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control col-sm-6" name="nama" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control col-sm-6" name="email">
                </div> 
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text area" class="form-control col-sm-6" name="alamat">
                </div>
                <div class="form-group">
                    <label for="tanggal-lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control col-sm-6" name="tanggal-lahir">
                </div>
                <div class="form-group">
                    <label for="tempat-lahir">Tempat Lahir</label>
                    <input type="text" class="form-control col-sm-6" name="tempat-lahir">
                </div>
                <div class="form-group">
                    <label for="no-hp">No.HP</label>
                    <input type="number" class="form-control col-sm-6" name="no-hp">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <input type="radio" name="gender" value="L">Laki-laki<br>
                    <input type="radio" name="gender" value="P">Perempuan
                </div>
                <div class="form-group">
                    <label for="hobby">Hobby</label><br>
                    <input type="checkbox" name="hb1" value="membaca">Membaca<br>
                    <input type="checkbox" name="hb2" value="menulis">Menulis<br>
                    <input type="checkbox" name="hb3" value="bernyanyi">Bernyanyi<br>
                </div> 
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 ">Upload File</label>
                    <div class="btn btn-dark btn-sm float-left">
                    <input class="file-path validate" name="foto" type="file">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <input type="submit" class="btn btn-dark" name="tambah" value="Input">
                    </div>
                </div>

                
            </form>
        </div>
</div>

<?php
    include 'footer.php';
?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">

        $(function () {
                        $('#datetimepicker1').datetimepicker();
                    });
            
        </script>