<head>
    <title>Jamu Kita</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #2f2f2f;
        }

        p {
            font-size: 16px;
            text-align: center;
        }

        .margin {
            margin-bottom: 45px;
            text-align: center;
        }

        .bg-1 {
            background-image: url("https://www.femina.co.id/images/images/Peluang-Usaha-Jamu-Kemasan-Dan-Analisa-Usahanya.jpg");
            width: auto;
            height: 300px;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: #ffffff;
        }

        .bg-2 {
            background-color: #f8e222;
            color: #6d4200;
        }

        .bg-3 {
            background-color: #ffffff;
            color: #555555;
            text-align: left;
        }

        .bg-4 {
            background-color: #2f2f2f;
            color: #fff;
        }

        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }

        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }

        .navbar-nav li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">JAMU KITA</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="#">BERANDA</a></li> -->
                    <li><a href="#">SEJARAH JAMU</a></li>
                    <li class="active"><a href="#">PRODUK INOVASI</a></li>
                    <li><a href="#">BERITA TERKINI</a></li>
                    <li><a href="sessionLogout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center"></div>

    <!-- Second Container -->
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin"><b>INSERT DATA PRODUK INOVASI</b></h3>
        <br />
        <form enctype="multipart/form-data" action="prosesprodukeval.php" method="POST">
            <div class="form-group">
                <label>Nama Produk:</label>
                <input type="text" name="nama_produk" placeholder="Masukkan nama produk" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga Produk:</label>
                <input type="text" name="harga_produk" placeholder="Masukkan harga produk" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Produk:</label>
                <input type="text" name="jenis_produk" placeholder="Masukkan jenis produk" class="form-control">
            </div>
            <div class="form-group">
                <label>Foto Produk:</label>
                <input type="file" name="foto">
            </div>
            <button type="submit" class="btn btn-default">Kirim</button>
        </form>

    </div>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <p class="text-muted small mb-4 mb-lg-0">&copy; Jamu Kita - kelompok 6</p>
        </div>

    </footer>

    </html>