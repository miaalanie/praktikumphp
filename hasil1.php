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

                        <h5 class="card-title text-center text-info mb-4 font-weight-bold">Hasil Bilangan</h5>

                        <div class="result text-center text-info font-weight-bold fs-5">
                            <?php
                                if(isset($_POST['btnkirim'])){
                                    $angka = $_POST['txtangka'];

                                    for ($i = 1; $i <=$angka; $i ++)
                                        if($i == $angka){
                                            echo "$i. " ;
                                        }else{
                                            echo "$i, ";
                                        }

                                }else{
                                    echo "Form belum diisi";
                                }
                            ?>
                        </div>

                        <div class="mt-4 text-center">
                            <a href="tampilan1.php" class="btn btn-info px-5 py-2">Kembali</a>
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
