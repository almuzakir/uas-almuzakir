<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <title>add users</title>
</head>

<div id="page" class="container">
    <div class="header1">
        <marquee scrollamount="">
            <h1>ini adalah Website dari rumah sakit GRESTELINA</h1>
        </marquee>
        <div class="header-right">
        </div>
    </div>
    <div id="header">
        <div id="logo">
            <img src="images/rs.jpg" alt="" />
            <h1><a href="#">Selamat datang di rumah sakit GRESTELINA</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="current_page_item"><a href="index.php" accesskey="1" title="">Homepage</a></li>
                <li class="current_page_item"><a href="daftar.php" accesskey="2" title="">Data Pasien</a></li>
                <li class="current_page_item"><a href="jaminan.php" accesskey="3" title="">Data Jaminan Pembayaran</a></li>
                <li class="current_page_item"><a href="poliklinik.php" accesskey="4" title="">Data Poliklinik</a></li>
                <li class="current_page_item"><a href="add.php" accesskey="5" title="">Pendaftaran Pasien</a></li>
                <li class="current_page_item"><a href="logout.php" accesskey="6" title="">Logout</a></li>
            </ul>
        </div>
    </div>
    <div id="main">
        <div id="banner">
            <?php
            // include database connection file
            include_once("config.php");

            // Check if form is submitted for user update, then redirect to homepage after update
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $Poliklinik = $_POST['Poliklinik'];

                // update user data
                $result = mysqli_query($mysqli, "UPDATE poli SET Poliklinik='$Poliklinik' WHERE id=$id");

                // Redirect to homepage to display updated user in list
                header("Location: index.php");
            }
            ?>
            <?php
            include_once("config.php");
            // Display selected user data based on id
            // Getting id from url
            $id = $_GET['id'];
            // Fetech user data based on id
            $result = mysqli_query($mysqli, "SELECT * FROM poli WHERE id=$id");
            while ($user_data = mysqli_fetch_array($result)) {
                $Poliklinik = $user_data['Poliklinik'];
            }
            ?>
            <html>

            <head>
                <title>Edit User Data</title>
            </head>

            <body>
                <a href="index.php">Home</a>
                <br /><br />

                <form name="update_user" method="post">
                    <table border="1">
                        <tr>
                            <td>Poliklinik</td>
                            <td><input type="text" name="Poliklinik" value=<?php echo $Poliklinik; ?>></td>
                        </tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </table>

                </form>
            </body>

            </html>