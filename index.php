<!DOCTYPE html>
<html lang="id">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP</title>
    <link rel="icon" href="img/polikami-logo.png">
    <!-- Menghubungkan Bootstrap dari CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            height: 200px; /* Tentukan tinggi gambar */
            object-fit: contain; /* Pastikan gambar tidak terpotong */
            width: 100%; /* Pastikan gambar full lebar */
            background-color: #f8f9fa; /* Tambahkan background jika gambar tidak memenuhi kotak */
        }

        /* Gaya navbar dengan font bawaan */
        .navbar {
            font-size: 16px; /* Atur ukuran */
            font-weight: 500; /* Sedikit lebih tebal */
        }

        /* Hover untuk link */
        .navbar-nav .nav-link {
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: underline;
            color:rgb(3, 3, 3) !important;
        }

        /* Menu aktif */
        .navbar-nav .nav-link.active {
            font-weight: bold;
            color:rgb(255, 255, 255) !important; 
        }

</style>

</head>

<body>
    <!-- Navbar Menu -->
    <nav class="navbar navbar-expand-md bg-info navbar-light fixed-top py-3">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="img/polikami-logo.png" alt="Logo Polikami" style="height: 40px;">
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navmenu"
                aria-controls="navmenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilan1.php" class="nav-link ">No 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilan2.php" class="nav-link">No 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilan3.php" class="nav-link">No 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilan4.php" class="nav-link">No 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Isi Halaman -->
    </div>
            <!-- Header -->
            <section class="mt-5 pt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="fw-bold text-info">Logika PHP </h2>
                        <p class="text-muted">Mia Adelia Tekkom 23A</p>
                        <button class="btn btn-info"></button>
                    </div>
                    <div class="col-md-6 text-center">
                            <img class="img-fluid" src="img/header.svg" alt="header">
                    </div>
                </div>
            </div>
            </section>

            <section id="services" class="py-5">
            <div class="container text-center">
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-sm-6 col-lg-3 mt-4">
                        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded h-100">
                            <img src="img/naik_panah.svg" class="card-img-top img_rata" alt="Berita Terbaru">
                            <h5 class="card-title text-info mt-3">No 1</h5>
                            <p class="card-text">Menampilkan Bilangan Naik</p>
                            <a href="tampilan1.php" class="btn btn-info">Coba Sekarang</a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-sm-6 col-lg-3 mt-4">
                        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded h-100">
                            <img src="img/turun.svg" class="card-img-top img_rata" alt="Galeri">
                            <h5 class="card-title text-info mt-3">No 2</h5>
                            <p class="card-text">Menampilkan Bilangan Turun</p>
                            <a href="tampilan2.php" class="btn btn-info">Coba Sekarang</a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-sm-6 col-lg-3 mt-4">
                        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded h-100">
                            <img src="img/perbandingan.svg" class="card-img-top img_rata" alt="Profil Tim">
                            <h5 class="card-title text-info mt-3">No 3</h5>
                            <p class="card-text">Menampilkan Perbandingan Dua Bilangan</p>
                            <a href="tampilan3.php" class="btn btn-info">Coba Sekarang</a>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-sm-6 col-lg-3 mt-4">
                        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded h-100">
                            <img src="img/nilai_akhir.svg" class="card-img-top img_rata" alt="Perbandingan">
                            <h5 class="card-title text-info mt-3">No 4</h5>
                            <p class="card-text">Menampilkan Nilai Akhir Mahasiswa</p>
                            <a href="tampilan4.php" class="btn btn-info">Coba Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- Menghubungkan Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
