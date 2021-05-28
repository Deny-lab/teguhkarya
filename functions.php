<?php

session_start();
$errors = array();
$_SESSION["success"] = "";

# Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'teguhkarya');
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

# Fungsi registrasi
function registrasi($data)
{

    global $conn;
    $username = strtolower($data["username"]); 
    $password =mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data['password2']);
    

    $result = mysqli_query($conn, "SELECT username FROM akun WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "
            <script>
            alert('Username sudah terdaftar');
            </script>
        ";

        return false;
    }

    if($password!=$password2){
        echo "
        <script>
        alert('Password tidak sama');
        </script>
    ";

    return false;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "INSERT INTO akun VALUES('', '$username', '$password', 'user')");

        return mysqli_affected_rows($conn);
    }

    $_SESSION["username"]=$username;
    $_SESSION["success"]= "Kamu berhasil login";

}


?>