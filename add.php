<?php
include "config.php";
?>
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
        <div id="isi">
            <?php
            $page = @$_GET['page'];
            if ($page == "daftar") {
                echo " ini halaman daftar";
            } else if ($page == "poliklinik") {
                echo "ini data poli";
            } else if ($page == "index")
            ?>
        </div>
    </div>
    <div id="main">
        <div id="banner">

            <body>

                <a href="index.php">Go to Home</a><br><br>
                <form action="add.php" method="POST" name="form1">
                    <table border="1">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="nama" style="width:180px" required></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td><input type="text" name="umur" style="width:50px" required> Tahun</td>

                        </tr>
                        <tr>
                            <td>Jenis_Kelamin</td>
                            <td>
                                <input type="radio" name="Kelamin" value="L">Laki Laki
                                <input type="radio" name="Kelamin" value="P">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" style="width:180px" required></td>
                        </tr>
                        <tr>
                            <td>Metode Pembayaran</td>
                            <td>
                                <select name="jaminan" class="form-control" style="width:180px">
                                    <?php
                                include 'config.php';
                                $sql = "select * from jaminan";
                                $result = mysqli_query($mysqli, $sql);
                                if (mysqli_num_rows($result) != '') {
                                    while ($user_data = mysqli_fetch_array($result)) {
                                    ?>
                                            <option value="<?= $user_data['jaminan'] ?>"><?= $user_data['jaminan'] ?></option>
                                    <?php
                                    }
                                } else {
                                    echo "data tidak ada";
                                }
                                    ?>
                                </select>
                        <tr>
                            <td>Poliklinik</td>
                            <td>
                                <select name="Poliklinik" class="form-control" style="width:180px">
                                    <?php
                                    include 'config.php';
                                    $sql = "select * from poli";
                                    $result = mysqli_query($mysqli, $sql);
                                    if (mysqli_num_rows($result) != '') {
                                        while ($user_data = mysqli_fetch_array($result)) {
                                    ?>
                                            <option value="<?= $user_data['Poliklinik'] ?>"><?= $user_data['Poliklinik'] ?></option>
                                    <?php
                                        }
                                    } else {
                                        echo "data tidak ada";
                                    }
                                    ?>
                                </select>
                        <tr>
                            <td>Tanggal_Kunjungan</td>
                            <td><input type="date" name="Kunjungan" style="width:180px" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Add"></td>
                        </tr>
                    </table>
                </form>

                <?php
                if (isset($_POST['Submit'])) {
                    $nama = $_POST['nama'];
                    $umur = $_POST['umur'];
                    $Jenis_kelamin = $_POST['Kelamin'];
                    $alamat = $_POST['alamat'];
                    $Pembayaran = $_POST['jaminan'];
                    $Poliklinik = $_POST['Poliklinik'];
                    $Tanggal_Kunjungan = $_POST['Kunjungan'];


                    include_once("config.php");

                    $result = mysqli_query($mysqli, "INSERT INTO users (nama, umur, Kelamin, alamat, jaminan, Poliklinik, Kunjungan) VALUES ('$nama','$umur', '$Jenis_kelamin', '$alamat', '$Pembayaran', '$Poliklinik', '$Tanggal_Kunjungan')");
                    echo "User added seccessfully.<a href='daftar.php'>View Users</a>";
                }
                ?>

        </div>
    </div>
</div>
</body>
<footer <div id="featured">
    <div class="title">
        <div id="footer">
            <span>DR AL MUZAKIR</span>
            <p>183112706450001</p>
        </div>
    </div>
</footer>

</html>