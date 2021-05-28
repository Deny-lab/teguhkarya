<?php


require 'functions.php';
$rows = mysqli_query($conn, 'SELECT * FROM db_buku');
$nama = mysqli_query($conn, 'SELECT * FROM akun');

?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">



    <title>TeguhKarya | Login</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid mx-3">
            <img src="logo_TK.png" alt="" width="30" height="24">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Buku</a>
                    </li>
                </ul>


                <div class="d-flex">
                    <a href="login.php" class="btn btn-success mx-3">LOGIN</a>
                    <a href="registrasi.php" class="btn btn-primary">SIGN UP</a>
                </div>

                <div class="d-flex">
                    <a href="" class="btn btn-info mx-3">AKUN</a>
                    <a href="logout.php" class="btn btn-danger">LOG OUT</a>
                </div>






            </div>
        </div>
    </nav>

    <h1 style="margin: 20px;"> BEST SELLER </h1>

    <table>
        <?php foreach ($rows as $row) : ?>

            <div style="float: left;">
                <div class="card mb-3" style="width: 540px; margin: 20px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="max-height:200px;" src="<?php echo $row["cover"] ?>" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["judul"] ?></h5>
                                <p class="card-text">Penulis: <?php echo $row["penulis"] ?></p>
                                <p class="card-text">Penerbit: <?php echo $row["penerbit"] ?></p>
                                <p class="card-text">Rilis: <?php echo $row["rilis"] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        <?php endforeach; ?>
    </table>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>