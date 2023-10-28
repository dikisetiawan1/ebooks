<!doctype html>



<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fish Course </title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <h1>Table Fish Course</h1>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    + Add Course
                </button>
            </div>
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title Course</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Publish</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1;
                        require '../config.php';
                        include '../view/index.php';
                        $coba = new Course($conn);
                        $result = $coba->menus();

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $no++;
                            "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['category'] . "</td>";
                            echo "<td>" . $row['img'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['create_content'] . "</td>";
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="modal-body">
                            <table class="table table-striped bordered">

                                <tr>
                                    <td>Title</td>
                                    <td><input type="text" placeholder="Course title.." required class="form-control" name="title"></td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td><input type="text" placeholder="Category.." required class="form-control" name="category"></td>
                                </tr>

                                <tr>
                                    <td>Image</td>
                                    <td><input type="file" required class="form-control" name="img"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="text" required class="form-control" name="description"></td>
                                </tr>
                                <tr>
                                    <td>Publish</td>
                                    <td><input type="date" required class="form-control" name="create_content"></td>
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