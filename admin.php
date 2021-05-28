<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$rows = query("SELECT * FROM akun");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <h1>Data akun</h1>
    
    <?php if (isset($_SESSION["login"])) : ?>
        <p>
            Welcome
            <strong>
                <?php echo $_SESSION["username"]; ?>
            </strong>
        </p>
        <?php endif ?>

    <a href="registrasi.php">Registrasi</a>
    <a href="logout.php">Logout</a>
    <table border="1" cellpadding=10 cellspacing=0>
        <thead>
            <th>username</th>
            <th>password</th>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $row["username"] ?></td>
                    <td><?php echo $row["password"] ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>

</html>