

<?php

session_start();

if(!isset($_SESSION['loggedinn']) || $_SESSION['loggedinn'] !==true)
{
    header("location: ../login.php");
}


?>



<?php include('header1.php');  ?>

<div class="box">
     
 <img class="responsive wow fadeInUp" src="../assets\img\banners\knowledge (1).png" alt=" GST registration">
            <div class="text">
            <div class="secttion-title">
            <h2>Knowledge Centre</h2>
            </div>
            </div>
        </div>
</br></br>

<div class="container">
        </br></br></br></br></br>
        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
        
        
<div class="text-center"><h3>1. Income Tax</h3></div>
</br>

<div class="text-center"><h3>2. Indirect Tax (GST)</h3></div>
</br>

<div class="text-center"><h3>3. Bank Audit</h3></div>
</br>

<div class="text-center"><h3>4. Other Audit</h3></div>
</br>

<div class="text-center"><h3>5. Miscellaneous</h3></div>
</br>

</div>
</div>


 <?php include('footer1.php');  ?>