<!DOCTYPE html>
<html>

<head>
    <a href='login.php'>Back to LOGIN</a>
</head>

<body>
    <script>
        alert('Username atau Password salah');
    </script>
</body>

</html>

<?php

include "config.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, md5($_POST['password']));

    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $queryDB = mysqli_query($mysqli, $query);
    $check = mysqli_num_rows($queryDB);

    if ($check > 0) {
        // ambil data users
        $getData = mysqli_fetch_array($queryDB);
        // set session 
        $_SESSION['id'] = $getData;
        $_SESSION['is_login']  = true;

        header("location: index.php");
    } elseif ($check > 1) {
        # code...

        echo "Username atau password yang anda masukkan salah";
    }
} else {
    return "Anda tidak di ijinkan";
}
?>