<!doctype html>



<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>E-book digital </title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <h1>Data E-book</h1>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    + Tambah Data E-book
                </button>
            </div>
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Jenis</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Image</th>
                            <th>Tahun</th>
                            <th>Tgl publish</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1;
                        require '../config.php';
                        include '../view/index.php';
                        $coba = new Buku($conn);
                        $result = $coba->bukuDigital();

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $no++;
                            "</td>";
                            echo "<td>" . $row['judul_buku'] . "</td>";
                            echo "<td>" . $row['jenis_buku'] . "</td>";
                            echo "<td>" . $row['penulis'] . "</td>";
                            echo "<td>" . $row['penerbit'] . "</td>";
                            echo "<td>" . $row['img'] . "</td>";
                            echo "<td>" . $row['tahun_terbit'] . "</td>";
                            echo "<td>" . $row['create_upload'] . "</td>";
                            echo "<td> <a href='#'> Delete </a>| <a href='#'> Edit </a> </td>";
                            echo "</tr>";
                        }

                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah E-book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="modal-body">
                            <table class="table table-striped bordered">

                                <tr>
                                    <td>Judu Buku</td>
                                    <td><input type="text" placeholder="Judul Buku.." required class="form-control" name="judul_buku"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Buku</td>
                                    <td><input type="text" placeholder="Jenis buku.." required class="form-control" name="jenis_buku"></td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td><input type="text" placeholder="Penulis.." required class="form-control" name="penulis"></td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td><input type="text" placeholder="Penerbit.." required class="form-control" name="penerbit"></td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td><input type="file" required class="form-control" name="img"></td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td><input type="int" required class="form-control" name="tahun_terbit"></td>
                                </tr>
                                <tr>
                                    <td>Publish</td>
                                    <td><input type="date" required class="form-control" name="create_upload"></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td><input type="textarea" required class="form-control" name="description"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
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