<?php
    include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="proses/proses_login.php" method="POST">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="input">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
