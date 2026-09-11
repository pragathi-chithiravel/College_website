<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpg">
    <title>Meenakshi Chandrasekaran College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
 
    <!-- <link rel="stylesheet" href="index.css"> -->
    <script src="https://kit.fontawesome.com/55fa51d470.js" crossorigin="anonymous"></script>
 
</head>
<body>
    
<?php
require 'header.php';
?>

    <main class="d-flex justify-content-center align-items-center vh-100"
    style="background:linear-gradient(to right,rgba(0,0,0,0.50),rgba(12, 12, 12, 0.45)),
    url(backgroundimg.jpg);background-size:cover;">

        <div>
        <p class="text-warning text-nowrap fs-2 fs-md-4" style="text-shadow: 2px 2px 4px white;">
            Meenakshi Chandrasekaran College of Arts & Science
        </p>
        <p class="pt-1 text-danger text-center text-nowrap fs-4 fs-md-5 fw-bold" style="text-shadow: 2px 2px 5px white;">
            UGC Recognized 2(f) and 12(B), NAAC Accredited Institution
        </p>
        </div>

    </main>


    <section>
        
        <div id="slide" class="carousel col-12 col-sm-6 slide mx-auto py-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="aboutimg4.jpg" alt="college convocation" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="aboutimg1.jpg" alt="college library" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="aboutimg2.jpg" alt="science lab" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="aboutimg3.jpg" alt="computer lab" class="d-block w-100"/>
            </div>
        


            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slide" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#slide" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#slide" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#slide" data-bs-slide-to="3"></button>
            </div>

             </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#slide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slide" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
        </button>

        </div>
       
    </section>
    
    <?php
    require 'footer.php';
    ?>
       


       <script src="index.js"></script>
       <script src="home.js"></script>



</body>
</html>



            