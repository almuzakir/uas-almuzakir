<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <?php

    include_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM jaminan ORDER BY id DESC");
    ?>
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
                    <a href="add_jaminan.php">Add New Data Jaminan Pembayaran</a><br><br>
                    <table border="1">
                        <tr>
                            <th>Data Jaminan Pembayaran</th>
                            <th>Action</th>
                        </tr>
                        <?php
                    while ($user_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['jaminan'] . "</td>";
                        echo "<td><a href='edit_jaminan.php?id=$user_data[id]'>Edit</a> | <a href='Delete_jaminan.php?id=$user_data[id]'>Delete</a></td>";
                        echo "</tr>";
                    }
                        ?>
                    </table>
                </body>


            </div>
        </div>
    </div>
    </div>
</body>
<div id="featured">
    <div class="title">
        <div id="footer">
            <span>Al Muzakir</span>
            <p>085344221247</p>
        </div>
    </div>

</html>