<!doctype html>



<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Baca E-book digital </title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <h1>E-Book Digital</h1>
            <?php $no = 1;
            require '../../config.php';
            include '../../view/index.php';
            $coba = new Buku($conn);
            $result = $coba->bukuDigital();

            while ($row = $result->fetch_array()) {
                $link = $row['img'];
                echo "<div class='col-4 mt-5'>
                <div class='card shadow'>
                    <div class='card-body'>
                <img src={$link} style='width: 380px'>";
                echo '<div class="card-title mt-4">';
                echo "<h3>";
                echo $row['judul_buku'];
                echo "</h3>";
                echo "</div>";
                echo "<div class='desc mt-3'>";
                echo $row['description'];
                echo "</div>";
                echo "  <div class='row'>
                            <div class='col'>
                                <a href='#' class='btn btn-primary mt-4 mb-2'>Baca Sekarang</a>
                            </div>
                            <div class='col mt-4'>
                                <a href='#' class='' style='font-size: 20px; margin-left:-50px;'>Download</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            ";
            }
            ?>
        </div>
    </div>
















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>