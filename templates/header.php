 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="./assets/css/style.css">
     <title>Fish Course </title>
 </head>

 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
     <div class="container">
         <a class="navbar_brand" href="#">FishCourse</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse " id="navbarNav">
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="index.php ">Home</a>
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
                     <a class="nav-link" href="bootcamp.php?page=bootcamp">Bootcamp</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="job.php?page=job">Jobs</a>
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
 </nav>