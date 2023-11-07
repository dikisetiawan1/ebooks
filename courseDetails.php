<!doctype html>
<html lang="en">

<body>
    <!-- navbar -->
    <?php include_once './templates/header.php'; ?>
    <!-- end navbar -->
    <!-- content -->
    <div class="container">
        <div class="row " style="margin-top: 120px; margin-left:50px">
            <div class="col">
                <div class="title mb-2">
                    <p>HTML Course</p>
                </div>
                <label for="option" class="mb-2 label-option" style="color: #1e5474;">Still happy learning today!</label> <br>
                <!-- <div class="select-option">
                    <select name="option" id="option">
                        <option value="textscript">Script text</option>
                        <option value="video">Video</option>
                    </select>
                    <button id="ubah">Find</button>
                </div> -->
            </div>
        </div>
        <!-- manipulasi data pada js -->
        <div class="section" id="section_content">
            <div class="row " id="videoCourse" style="margin-top:40px; margin-bottom:120px; margin-left:50px; visibility:visible">
                <div class="col-3" style="background-color: #EBF3E8; border-radius:3px; color:#1e5474">
                    <h1 class="title-sidebar" style="margin:0"> Penjelasan HTML</h1>
                    <ul style="margin:0;margin-top:-30px">
                        <li class="list-sidebar" style="padding-bottom:10px; padding:10px;background-color:#FFDCA9; padding-left:40px; margin-right:35px; ">
                            <a href="<?php echo BASE_URL . "courseDetails.php?page=module&action=sejarah-html" ?>" style="color:black"> Sejarah html</a>
                        </li>
                        <li class="list-sidebar" style="padding-bottom:10px; padding:10px; padding-left:40px; margin-right:35px; ">
                            <a href="<?php echo BASE_URL . "courseDetails.php?page=module&action=pengertian-html" ?>" style="color:black"> Pengertian html</a>
                        </li>

                        <li class="list-sidebar" style="padding-bottom:10px; padding:10px; padding-left:40px; margin-right:35px; ">
                            <a href="<?php echo BASE_URL . "courseDetails.php?page=module&action=tag-html" ?>" style="color:black">Tag HTML</a>
                            GIT
                        </li>
                    </ul>
                </div>
                <div class=" col-8" style="margin-left: 80px; background-color:#1e5474; border-radius:6px; color:white;">

                    <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : false;
                    $action = isset($_GET['action']) ? $_GET['action']  : false;
                    // include_once './module/sejarah-html.php';
                    $filename = "./$page/$action.txt";

                    if (file_exists($filename)) {
                        include_once($filename);
                    } else {
                        echo "halaman tidak ada";
                    }


                    // } elseif ($tes == 'pengertian-html') {
                    //     echo "<img src='" . BASE_URL . "./assets/img/html.jpg' alt='html video' style='width: 900px; border-radius:10px'>";
                    // }




                    ?>
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