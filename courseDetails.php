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
                    <h1>HTML Course</h1>
                </div>
                <label for="option" class="mb-2">Choose For Learning Today!</label> <br>
                <select name="option" id="option">
                    <option value="video">Video</option>
                    <option value="textscript">Script text</option>
                </select>
                <button id="ubah">Do it</button>
            </div>
        </div>
        <!-- manipulasi data pada js -->
        <div class="section" id="section_content">

        </div>


        <div class="row " id="videoCourse" style="margin-top:40px; margin-bottom:120px; margin-left:50px; visibility:hidden">
            <div class="col-3" style="background-color: #EBF3E8; border-radius:10px">
                <h1> Video Course </h1>
            </div>
            <div class=" col-7" style="margin-left: 100px;">
                <img src="./assets/img/html.jpg" alt="html video" style="width: 900px; border-radius:10px">
            </div>
            </di>
        </div>
        <div class="row " id="textscriptCourse" style="margin-top:-724px; margin-bottom:120px; margin-left:50px; visibility:hidden">
            <div class="col-3" style="background-color: #EBF3E8; border-radius:10px">

                <h1> Text Script Course </h1>
            </div>
            <div class=" col-7" style="margin-left: 100px;">
                <img src="./assets/img/html.jpg" alt="html video" style="width: 900px; border-radius:10px">
            </div>
        </div>
        <!-- end content -->



        <!-- footer -->
        <?php include_once './templates/footer.php'; ?>
        <!-- end footer -->
















</body>

</html>