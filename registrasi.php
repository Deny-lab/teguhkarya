<?php
require 'functions.php';
if (isset($_POST["submit"])) {

    if (registrasi($_POST) > 0) {
        echo "
         <script>
            alert('Registrasi berhasil');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
           alert('Registrasi tidak berhasil');
           document.location.href='registrasi.php';
       </script>
       ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>TeguhKarya | Registrasi</title>
</head>

<body>
    <div style="border: 2px solid white; border-radius:20px; background-color: white; margin: 100px 500px; padding-top:100px; padding-bottom:100px;">
        <div style="padding-top: 30px; text-align: center;">
            <h1>SIGN UP</h1>
        </div>

        <form action="" method="post" style="padding-top: 40px">
            <div style="margin-left: 350px;">
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="username" name="username" required autofocus placeholder="Username">
                </div>
            </div>
            <div style="padding-top: 50px; margin-left: 350px;">
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                </div>
            </div>
            <div style="padding-top: 50px; margin-left: 350px;">
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="password2" name="password2" required placeholder="Comfirm password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit" id="submit" style="margin-top: 100px">Sign up</button>

            <br><br>
            <p>Sudah punya akun? <a href="login.php">LOGIN</a></p>
        </form>
    </div>

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