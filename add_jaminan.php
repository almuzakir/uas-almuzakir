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
                <form action="add_jaminan.php" method="POST" name="form1">
                    <table border="1">
                        <tr>
                            <td>Data Jaminan Pembayaran</td>
                            <td><input type="text" name="jaminan"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Add"></td>
                        </tr>
                    </table>
                </form>

                <?php
            if (isset($_POST['Submit'])) {
                $jaminan = $_POST['jaminan'];



                include_once("config.php");

                $result = mysqli_query($mysqli, "INSERT INTO jaminan (jaminan) VALUES ('$jaminan')");
                echo "User added seccessfully.<a href='jaminan.php'>View Data Jaminan Pembayaran</a>";
            }
                ?>

        </div>
    </div>
    </body>
    <footer <div id="featured">
        <div class="title">
            <div id="footer">
                <span>AL MUZAKIR</span>
                <p>089615432123</p>
            </div>
        </div>
    </footer>

</html>