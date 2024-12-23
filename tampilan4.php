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
        <nav class="navbar navbar-expand-md bg-info navbar-light fixed-top py-3 ">
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
                            <a href="index.html" class="nav-link ">Home</a>
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
                            <a href="tampilan4.php" class="nav-link active">No 4</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <!-- Form Utama -->
<div class="container mt-5 pt-5 mb-5">
    <h2 class="text-center text-info mb-4">Menampilkan Nilai Akhir Mahasiswa</h2>
    <p class="text-center mb-5 text-muted">Silakan masukkan inputan yang sesuai</p>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-info shadow-lg">
                <div class="card-body bg-light">

                    <h5 class="card-title text-info mb-4 text-center">Form Input</h5>

                    <form method="POST" action="hasil4.php">

                        <!-- Input Nama -->
                        <div class="d-flex align-items-center mb-3">
                            <label for="txtnama" class="form-label me-3" style="width: 35%;">Nama</label>
                            <input type="text" id="txtnama" name="txtnama" class="form-control border-info" required placeholder="Isi Nama Anda">
                        </div>

                        <!-- Input NIM -->
                        <div class="d-flex align-items-center mb-3">
                            <label for="txtnim" class="form-label me-3" style="width: 35%;">NIM</label>
                            <input type="number" id="txtnim" name="txtnim" class="form-control border-info" required placeholder="Isi NIM Anda">
                        </div>

                        <!-- Input Kelas -->
<div class="mb-3">
    <label class="form-label me-3" style="width: 25%;">Kelas</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="kelas_reg" name="kelas" value="Reguler" required>
        <label class="form-check-label" for="kelas_reg">Reguler</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="kelas_nonreg" name="kelas" value="Non Reguler" required>
        <label class="form-check-label" for="kelas_nonreg">Non Reguler</label>
    </div>
</div>



                        <!-- Input Prodi -->
                        <div class="d-flex align-items-center mb-3">
                            <label for="prodi" class="form-label me-3" style="width: 35%;">Prodi</label>
                            <select id="prodi" name="prodi" class="form-control border-info" required>
                                <option value="">Pilih Prodi</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Teknik Sipilsipil">Teknik Sipil</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Administrasi Digital">Administrasi Digital</option>
                                <option value="bBisnis Digitalisdi">Bisnis Digital</option>
                            </select>
                        </div>

                        <!-- Input Nilai Absen -->
                        <div class="d-flex align-items-center mb-3">
                            <label for="txtabsen" class="form-label me-3" style="width: 35%;">Nilai Absen</label>
                            <input type="number" id="txtabsen" name="txtabsen" class="form-control border-info" required placeholder="Isi Nilai Absen Anda" min="0" max="100">
                        </div>

                        <!-- Input Nilai Praktik -->
                        <div class="d-flex align-items-center mb-3">
                            <label for="txtpraktik" class="form-label me-3" style="width: 35%;">Nilai Praktik</label>
                            <input type="number" id="txtpraktik" name="txtpraktik" class="form-control border-info" required placeholder="Isi Nilai Praktik Anda" min="0" max="100">
                        </div>

                        <!-- Input Nilai UTS -->
                        <div class="d-flex align-items-center mb-3">
                            <label for="txtuts" class="form-label me-3" style="width: 35%;">Nilai UTS</label>
                            <input type="number" id="txtuts" name="txtuts" class="form-control border-info" required placeholder="Isi Nilai UTS Anda" min="0" max="100">
                        </div>

                        <!-- Input Nilai UAS -->
                        <div class="d-flex align-items-center mb-4">
                            <label for="txtuas" class="form-label me-3" style="width: 35%;">Nilai UAS</label>
                            <input type="number" id="txtuas" name="txtuas" class="form-control border-info" required placeholder="Isi Nilai UAS Anda" min="0" max="100">
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" name="btnkirim" class="btn btn-info px-5">Kirim</button>
                        </div>
                    </form>

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
