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
            color:rgb(255, 255, 255) !important; /* Warna emas */
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
                            <a href="index.php" class="nav-link ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="tampilan1.php" class="nav-link">No 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="tampilan2.php" class="nav-link">No 2</a>
                        </li>
                        <li class="nav-item">
                            <a href="tampilan3.php" class="nav-link active">No 3</a>
                        </li>
                        <li class="nav-item">
                            <a href="tampilan4.php" class="nav-link">No 4</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>

        <!-- Konten Utama -->
<div class="container mt-5 pt-5">
    <div class="text-center">
        <h2 class="text-center text-info mb-4">Menampilkan Perbandingan Dua Bilangan</h2>
        <p class="text-center mb-5 text-muted">Silakan masukkan angka untuk menampilkan perbandingan angka</p>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-info shadow-lg">
                    <div class="card-body bg-light">
                        <h5 class="card-title text-info mb-4">Form Input Bilangan</h5>

                        <form method="POST" action="hasil3.php">
                            <!-- Input Bilangan A -->
                            <div class="d-flex align-items-center mb-3">
                                <label 
                                    for="txtbilangan_a" 
                                    class="form-label me-3" 
                                    style="width: 35%;"> 
                                    Bilangan A
                                </label>
                                <input 
                                    type="number" 
                                    id="txtbilangan_a" 
                                    name="txtbilangan_a" 
                                    class="form-control border-info" 
                                    required 
                                    placeholder="Isi dengan Angka">
                            </div>

                            <!-- Input Bilangan B -->
                            <div class="d-flex align-items-center mb-4">
                                <label 
                                    for="txtbilangan_b" 
                                    class="form-label me-3" 
                                    style="width: 35%;"> 
                                    Bilangan B
                                </label>
                                <input 
                                    type="number" 
                                    id="txtbilangan_b" 
                                    name="txtbilangan_b" 
                                    class="form-control border-info" 
                                    required 
                                    placeholder="Isi dengan Angka">
                            </div>

                            <!-- Tombol Submit di Sebelah Kanan -->
                            <div class="d-flex justify-content-end">
                                <button 
                                    type="submit" 
                                    name="btnkirim" 
                                    class="btn btn-info px-5">
                                    Kirim
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            
            
    <!-- Menghubungkan Script Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>
