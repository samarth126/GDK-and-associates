<?php

session_start();

if(!isset($_SESSION['loggedinn']) || $_SESSION['loggedinn'] !==true)
{
    header("location: ../login.php");
}


?>

<?php include('header1.php');  ?>

<div class="box">
     
 <img class="responsive wow fadeInUp" src="../assets\img\banners\alumini.png" alt=" GST registration">
            <div class="text">
            <div class="secttion-title">
          <h2>ALUMINI</h2>
            </div>
            </div>
        </div>
        
 


<?php include('footer1.php');  ?>