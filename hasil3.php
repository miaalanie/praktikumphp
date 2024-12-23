<!DOCTYPE html>
<html lang="id">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Input</title>
        <link rel="icon" href="img/polikami-logo.png">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-info">

                    <div class="card-body bg-light">

                        <h5 class="card-title text-center text-info mb-4 font-weight-bold">Hasil Perbandingan Bilangan</h5>

                        <div class="result text-info font-weight-bold fs-5">
                            <?php
                                if(isset($_POST['btnkirim'])){
                                    $bilangan_a = $_POST['txtbilangan_a'];
                                    $bilangan_b = $_POST['txtbilangan_b'];

                                    echo "<div class='p-3 mb-3 border border-info rounded'>";
                                    echo "Bilangan A --> $bilangan_a <br> Bilangan B --> $bilangan_b <br>";
                                    echo "</div>";

                                    if($bilangan_a > $bilangan_b){
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Bilangan A > Bilangan B (Bilangan A lebih besar dari Bilangan B) <br>";
                                        echo "</div>";
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Bilangan B < Bilangan A (Bilangan B lebih kecil dari Bilangan A) <br>";
                                        echo "</div>";
                                    } elseif($bilangan_b > $bilangan_a){
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Bilangan B > Bilangan A (Bilangan B lebih besar dari Bilangan A) <br>";
                                        echo "</div>";
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Bilangan A < Bilangan B (Bilangan A lebih kecil dari Bilangan B) <br>";
                                        echo "</div>";
                                    } else {
                                        echo "<div class='p-3 mb-3 border border-info rounded'>";
                                        echo "Bilangan A == Bilangan B (Bilangan A sama dengan Bilangan B) <br>";
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
                            <a href="tampilan3.php" class="btn btn-info px-5 py-2">Kembali</a>
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
