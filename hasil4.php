
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-info">

                    <div class="card-body bg-light">

                        <h5 class="card-title text-center text-info mb-4 font-weight-bold ">Hasil Nilai Mahasiswa</h5>

                        <div class="result text-info font-weight-bold ">
                            <?php
                                  if(isset($_POST['btnkirim'])){
                                    $nama = $_POST['txtnama'];
                                    $nim = $_POST['txtnim'];
                                    $kelas = $_POST['kelas'];
                                    $prodi = $_POST['prodi'];
                                    $absen = $_POST['txtabsen'];
                                    $praktik = $_POST['txtpraktik'];
                                    $uts = $_POST['txtuts'];
                                    $uas = $_POST['txtuas'];
                                 
                                    
                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                        echo "<div class='row mb-2'>
                                <div class='col-2 fw-bold'>Nama</div>
                                <div class='col'>: $nama</div>
                            </div>";
                        echo "<div class='row mb-2'>
                                <div class='col-2 fw-bold'>NIM</div>
                                <div class='col'>: $nim</div>
                            </div>";
                        echo "<div class='row mb-2'>
                                <div class='col-2 fw-bold'>Kelas</div>
                                <div class='col'>: $kelas</div>
                            </div>";
                        echo "<div class='row'>
                                <div class='col-2 fw-bold'>Prodi</div>
                                <div class='col'>: $prodi</div>
                            </div>";
                        echo "</div>";


                                         
                                    $nilaiakhir = ($absen * 25/100) + ($praktik * 30/100) + ($uts * 20/100) + ($uas * 25/100);
                                 
                                    if($nilaiakhir >= 85 ){
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Nilai Akhir Anda $nilaiakhir";
                                        echo "</div>";
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Selamat Anda Lulus dengan Nilai Akhir A";
                                        echo "</div>";
                                    }elseif($nilaiakhir >= 75){
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Nilai Akhir Anda $nilaiakhir";
                                        echo "</div>";
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Selamat Anda Lulus dengan Nilai Akhir B";
                                        echo "</div>";
                                    }elseif($nilaiakhir >= 65){
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Nilai Akhir Anda $nilaiakhir";
                                        echo "</div>";
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Selamat Anda Lulus dengan Nilai Akhir C";
                                        echo "</div>";
                                    }elseif($nilaiakhir >= 55){
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Nilai Akhir Anda $nilaiakhir";
                                        echo "</div>";
                                        echo "<div class='p-3 mb-3 border border-info text-danger rounded'>";
                                        echo "Mohon Maaf Anda Tidak Lulus dengan Nilai Akhir D";
                                        echo "</div>";
                                    }else{
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Nilai Akhir Anda $nilaiakhir";
                                        echo "</div>";
                                        echo "<div class='p-3 mb-3 border border-info text-danger rounded'>";
                                        echo "Mohon Maaf Anda Tidak Lulus dengan Nilai Akhir E";
                                        echo "</div>";
                                    }
                                }else{
                                    echo "<div class='p-3 mb-3 border border-info rounded'>";
                                    echo "Form belum diisi";
                                    echo "</div>";
                                }
                            ?>
                        </div>

                        <div class="mt-4 text-center">
                            <a href="tampilan4.php" class="btn btn-info px-5 py-2">Kembali</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
