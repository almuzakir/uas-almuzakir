<?php
require_once("config.php");
?>
<html>

<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<style>
    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }

    input[type="submit"] {
        padding: 5px;
        width: 180px;
        border: 1px solid #ddd;
    }

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }

    body {
        background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
        background-repeat: no-repeat;
    }

    a {
        text-decoration: none;
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }
</style>
<div id="card">

    <body>
        <form action="proses_login.php" method="POST">
            <div id="card-content">
                <div id="card-title">
                    <h2>LOGIN</h2>
                    <div class="underline-title"></div>
                </div>
            </div>
            <label for="username" style="padding-top:13px" width: 329px;>Username</label>
            <input id="username" class="form-content" type="username" name="username" autocomplete="on" required />
            <div class="form-border"></div>
            <label>Password</label>
            <input type="password" id="myInput" name="password" id="user-password" class="form-content" type="password" name="password" required />

            <div class="form-border"></div><a href="#"></a>

            <p>
                <div>

                    <input type="checkbox" checkboxalign="left" onclick="myFunction()">Show Password
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                </div>
                <input type="submit" value="Login Now">
                <p>Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
</div>
</p>
</form>
</div>
</body>

</html>