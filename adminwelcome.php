


<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: adminlogin.php");
}


?>















<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GDK AND ASSOCIATES</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>


  <style>
    #aa {
      height: 44px;
      
      
    }
   
    #bb {
      padding-left: 20px;
      
      
     
    }</style>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <a href="index.php" class="logo me-auto"><img src="assets\GDK associates logo-1.jpg" alt="hhh" class="img-fluid"></a>
    
    <div class="container d-flex align-items-center">

     
     

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li class="dropdown"><a href="pages/about.php"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="pages/team.php">Team</a></li>
              
            </ul>
          </li>



          <li class="dropdown"><a href="services.php"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="pages/audit.php">Audit in the Banking Sector</a></li>
              <li><a href="pages/audit1.php">Audit of Companies incorporated under the Indian Companies Act</a></li>
              <li><a href="pages/audit2.php">Audit of Non-Corporate Entities</a></li>
              <li><a href="pages/directtax.php">Direct Taxes</a></li>
              <li><a href="pages/indirecttax.php">Indirect Taxes</a></li>
              <li><a href="pages/eclm.php">Corporate Law Matters</a></li>
              <li><a href="pages/oas.php">Other areas of Services</a></li>
            </ul>
          </li>

         
          <li><a class="nav-link scrollto" href="pages/industries.php">Industries</a></li>


          <li><a class="nav-link scrollto" href="pages/circularsandarticle.php">Circulars & Notification</a></li>
          <li><a class="nav-link scrollto" href="pages/knowledge.php">Knowledge Centre</a></li>
          <li><a class="nav-link scrollto" href="pages/alumini.php">Alumini </a></li>
          <li><a class="nav-link scrollto" href="pages/presentation.php">Presentation</a></li>
          <li><a class="nav-link scrollto" href="pages/videos.php">Videos</a></li>
          <li><a class="nav-link scrollto" href="pages/useful.php">Useful Links</a></li>
          <li><a class="nav-link scrollto" href="pages/contact.php">Contact</a></li>


        <div id="bb"><li><a href="adminlogout.php"><button type="button" id="aa" class="btn btn-danger">
          LOG OUT
        </button></a></li>
        </ul>
      </div>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->























<!-- ======= About Us Section ======= -->
<section id="about" class="about">
      <div class="container">

        <div class="section-title">
        <h2><?php echo " Welcome to Admin Dashboard  ". $_SESSION['username']?>!! </h2>
  </div>

        <div class="row">
        <div class="col-lg-4 order-1 order-lg-2">
        <a href="create.php">
            <img src="assets\img\admin\createblogs.png" class="img-fluid" alt="">
        </a>
          </div>

          <div class="col-lg-4 order-2 order-lg-2">
          <a href="register.php">
            <img src="assets\img\admin\createuser.png" class="img-fluid" alt="">
        </a>
          </div>

          <div class="col-lg-4 order-3 order-lg-2">
          <a href="seeappointment.php">
            <img src="assets\img\admin\seeapp.png" class="img-fluid" alt="">
        </a>
          </div>
          
        </div>

        </br></br></br>

        <div class="row">
        <div class="col-lg-4 order-1 order-lg-1">
          <a href="seecontact.php">
            <img src="assets\img\admin\getintouchcontact.png" class="img-fluid" alt="">
        </a>
  </div>

        <div class="col-lg-4 order-1 order-lg-1">
          <a href="userfiles.php">
            <img src="assets\img\admin\userfiles.png" class="img-fluid" alt="">
        </a>
  </div>

  <div class="col-lg-4 order-1 order-lg-1">
          <a href="adminregister.php">
            <img src="assets\img\admin\createuser.png" class="img-fluid" alt="">
        </a>
  </div>

  </div>
</br></br>



      </div>
    </section><!-- End About Us Section -->






<?php include('footer.php');  ?>
