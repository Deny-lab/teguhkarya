<?php



if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM akun    WHERE username = '$username'");


    if (mysqli_num_rows($result) >  0) {

        $rows = mysqli_fetch_assoc($result);
        if ($rows['level'] == "admin") {
            
            if (password_verify($password, $rows["password"])) {

                $_SESSION["login"] = true;
                header("Location: admin.php");
                exit;
            }
        }

        else if ($rows['level'] == "user") {
            
            if (password_verify($password, $rows["password"])) {

                $_SESSION["login"] = true;
                header("Location: index.php");
                exit;
            }
        }

        $_SESSION["username"] = $username;
    }


    $error = true;
}
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>TeguhKarya | Login</title>
</head>

<body>
    <div style="border: 2px solid white; background-color: white; border-radius: 20px; margin: 100px 500px; padding-top: 90px; padding-bottom: 100px;">
        <div style="color: black; padding-top: 1px; text-align: center;">
            <h1>LOGIN</h1>
            <h2>Mohon masukkan akun teregristasi anda!</h2>
        </div>


        <form action="" method="post" style="padding-top: 80px; padding-bottom:50px;">
            <div style="margin-left: 350px;">
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="username" name="username" autofocus placeholder="Username">
                </div>
            </div>
            <div style="padding-top: 50px; margin-left: 350px;">
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>

            <?php if (isset($error)) : ?>
                <p style="color:red; font-style:bold">Username atau password salah</p>
            <?php endif ?>


            <button type="submit" class="btn btn-primary" name="submit" id="submit" style="margin-top: 100px">Sign in</button>
            <br><br>
            <p>Belum punya akun? <a href="registrasi.php">SIGN UP</a></p>
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