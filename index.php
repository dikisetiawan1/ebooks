<!doctype html>
<html lang="en">


<body>
    <!-- navbar -->

    <?php include_once './templates/header.php'; ?>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar_brand" href="#">FishCourse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li><a class="dropdown-item" href="#">UI Design</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bootcamp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                </ul>
            </div>
            <div class="row ">
                <div class="col">
                    <div class="btn btn-warning ">
                        <a href="#">Login</a>
                    </div>
                </div>

                <div class="col">
                    <a href="#">Register</a>

                </div>
            </div>
        </div>
    </nav> -->
    <!-- end navbar -->

    <!-- content -->
    <div class="container">
        <div class="row mt-5" style="margin-bottom:250px">

            <h1 style="margin-top: 64px;">Web development</h1>
            <?php $no = 1;
            require './config.php';
            include './view/index.php';
            $coba = new Course($conn);
            $result = $coba->menus();

            while ($row = $result->fetch_array()) {
                $link = $row['img'];
                echo "
                <div class='col-4 mt-5'>
                <a href='courseDetails.php?page=courseDetails'>
                <div class='card shadow'>
                    <div class='card-body'>
                <img src={$link} style='width: 380px'>";
                echo '<div class="card-title mt-4">';
                echo "<h3>";
                echo $row['title'];
                echo "</h3>";
                echo "</div>";
                echo "<div class='desc mt-3'>";

                $num_row = 10;
                $desc = $row['description'];
                $ex = explode(" ", $desc);
                for ($i = 0; $i < $num_row; $i++) {
                    echo " " . $ex[$i];
                }
                echo "...";
                echo "</div>";
                echo " 
                    </div>

                </div>
                </a>
            </div>
            ";
            }

            ?>
        </div>
    </div>
    <!-- end content -->

    <!-- footer -->
    <?php include_once './templates/footer.php'; ?>
    <!-- <footer class="bg-light mt-5">
        <div class="row">
            <div class="col">
                <div class="text-center m-4">
                    Copyright@Diki Setiawan <?php echo date("Y") ?>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- end footer -->
















</body>

</html>