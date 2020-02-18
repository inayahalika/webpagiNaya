<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- css for grid -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css.map">
    <!-- css for reboot -->
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css.">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css.map">
    <!-- css for bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
</head>
<body>
    <div class="container-fluid">
        <!-- untuk navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">CoffeeEnd</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Diary</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">History</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Galery
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Yours</a>
                <a class="dropdown-item" href="#">Ours</a>
                <a class="dropdown-item" href="#">Theirs</a>
                </div>
            </li>
            </ul>
                </div>
        </nav>
    <!-- tutup navbar -->

    <!-- untuk slider -->
<div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="html/img/nayaa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="html/img/ppp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="html/img/nyy.jpg" class="d-block w-100" alt="...">
                    </div>  
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="col-2"></div>
</div>
    
<!-- tutup slider -->

        <!-- untuk tabel -->
        <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
    </div>

    <!-- Footer -->
<footer class="page-footer font-small  footer-dark bg-dark pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
            <li>
            <a href="#!">Link 1</a>
            </li>
            <li>
            <a href="#!">Link 2</a>
            </li>
            <li>
            <a href="#!">Link 3</a>
            </li>
            <li>
            <a href="#!">Link 4</a>
            </li>
        </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
            <li>
            <a href="#!">Link 1</a>
            </li>
            <li>
            <a href="#!">Link 2</a>
            </li>
            <li>
            <a href="#!">Link 3</a>
            </li>
            <li>
            <a href="#!">Link 4</a>
            </li>
        </ul>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->















    <!-- js for bundle -->
    <script src="assets/js/jquery.js"></script>
    <script src= "assets/js/bootstrap.bundle.js"></script>
    <script src= "assets/js/bootstrap.bundle.js.map"></script>
    <script src= "assets/js/bootstrap.bundle.min.js"></script>
    <script src= "assets/js/bootstrap.bundle.min.js.map"></script>
    <!-- js for bootstrap -->
    <script src= "assets/js/bootstrap.js"></script>
    <script src= "assets/js/bootstrap.js.map"></script>
    <script src= "assets/js/bootstrap.min.js"></script>
    <script src= "assets/js/bootstrap.min.js.map"></script>
</body>
</html>