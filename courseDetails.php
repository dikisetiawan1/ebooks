<!doctype html>
<html lang="en">


<body>
    <!-- navbar -->
    <?php include_once './templates/header.php'; ?>
    <!-- end navbar -->


    <!-- content -->
    <div class="container-fluid">
        <div class="row " style="margin-top: 120px; margin-left:50px">
            <div class="col">
                <div class="title mb-2">
                    <p>HTML Course</p>
                </div>
                <label for="option" class="mb-2 label-option">Choose For Learning Today!</label> <br>
                <div class="select-option">
                    <select name="option" id="option">
                        <option value="video">Video</option>
                        <option value="textscript">Script text</option>
                    </select>
                    <button id="ubah">Find</button>
                </div>
            </div>
        </div>
        <!-- manipulasi data pada js -->
        <div class="section" id="section_content">
            <div class="row " id="videoCourse" style="margin-top:40px; margin-bottom:120px; margin-left:50px; visibility:visible">
                <div class="col-3" style="background-color: #B2C8BA; border-radius:3px">
                    <h3 class="title-sidebar"> Penjelasan HTML</h3>
                    <ul>
                        <li class="list-sidebar">
                            <a href="<?php echo BASE_URL . "courseDetails.php?page=sejarah-html" ?>"> Sejarah html</a>
                        </li>
                        <li class="list-sidebar">
                            <a href="<?php echo BASE_URL . "courseDetails.php?page=pengertian-html" ?>"> Pengertian html</a>
                        </li>

                    </ul>
                </div>
                <div class=" col-7" style="margin-left: 100px;">

                    <?php

                    $tes = $_GET['page'];
                    if ($tes == 'sejarah-html') {
                        echo "ini sejarah html";
                    } elseif ($tes == 'pengertian-html') {
                        echo "<img src='" . BASE_URL . "./assets/img/html.jpg' alt='html video' style='width: 900px; border-radius:10px'>";
                    }


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