<?php
$id = isset($_GET['id']) ? $_GET['id'] : false;
?>

<!doctype html>
<html lang="en">

<body>
    <!-- navbar -->
    <?php include_once './templates/header.php'; ?>
    <!-- end navbar -->
    <!-- content -->
    <div class="container">
        <div class="row " style="margin-top: 120px; margin-left:50px">
            <?php
            require './config.php';
            $query = mysqli_query($conn, "SELECT * FROM tbl_menus WHERE menus_id='$id'");
            $row = mysqli_fetch_assoc($query);
            $title = $row['title'];
            ?>
            <div class="col">
                <div class="title mb-2">
                    <p>
                        <?php
                        echo $title . " Course";
                        ?>
                    </p>
                </div>
                <label for="option" class="mb-2 label-option" style="color: #1e5474;">Always happy learning everyday!</label> <br>
            </div>
        </div>

        <!-- manipulasi data pada js -->
        <div class='section' id='section_content'>
            <div class='row ' id='videoCourse' style='margin-top:40px; margin-bottom:120px; margin-left:50px; visibility:visible'>

                <div class="col-3" style="background-color: #1e5474; border-radius:3px; color:white">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size:24px; padding:15px 10px">
                            Pendahuluan

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style=" margin:0;margin-top:-30px">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM tbl_menus_sidebar");
                            while ($row = mysqli_fetch_assoc($query)) {
                                if ($row['menus_id'] == $id) {
                                    echo "
                                    <li class='list-sidebar' style='padding-bottom:10px; padding:10px; color:white'>
                                        <a class='dropdown-item' href='#' style='color:black;'>$row[name]</a>
                                    </li> ";
                                }
                            }
                            ?>
                        </ul>
                    </li>
                </div>

                <div class=' col-8 shadow' style='margin-left: 80px; background-color:white;  border-radius:6px; color:black;'>

                    <div class="row">

                        <div class="col-6" style="background: #EFFFFD; color:black; margin:0; padding:15px 25px; height:100% ; border-radius:6px 0px 0px 6px;">

                            <h3 style="font-weight:600">Code</h3>

                            <pre>
                                <code>
                                    <div class="content-left" style="margin-left:-320px; font-size:18px;">
                                    &lt;?php

                                    $var = "diki";
                                    echo $var;
            
                                    ?&gt;     
                                </div>
                                </code>
                            </pre>

                        </div>
                        <div class="col-6" style=" color:black; margin:0; padding:15px 25px; height:100%">
                            <h3 style="font-weight:600">Result</h3>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptates iusto. Officia veritatis soluta est.

                        </div>


                        <!-- // $page = isset($_GET['page']) ? $_GET['page'] : false;
                        // $action = isset($_GET['action']) ? $_GET['action'] : false;
                        // include_once './module/sejarah-html.php';
                        // $filename = "./$page/$action.txt";

                        // if (file_exists($filename)) {
                        // include_once($filename);
                        // } else {
                        // echo "halaman tidak ada";
                        // } -->



                    </div>

                </div>
                </di>
            </div>

            <!-- course with teh text script -->
            <!-- <div class="row " id="textscriptCourse" style="margin-top:-244px; margin-bottom:120px; margin-left:50px; visibility:hidden">
                <div class="col-3" style="background-color: #EBF3E8; border-radius:10px">

                    <h3 class="title-sidebar"> Text Script Course </h3>
                </div>
                <div class=" col-7" style="margin-left: 100px;">
                    <img src="./assets/img/html.jpg" alt="html video" style="width: 900px; border-radius:10px">
                </div>
            </div> -->

        </div>

        <!-- end content -->
        <!-- footer -->
        <?php include_once './templates/footer.php'; ?>
        <!-- end footer -->
















</body>

</html>