<?php include('header1.php');  ?>

<div class="box">
     
 <img class="responsive wow fadeInUp" src="../assets\img\banners\contact us.png" alt=" GST registration">
                <div class="text">
                <div class="secttion-title">
                <h2>Contact</h2>
                </div>
                </div>
            </div>
    
            
          

 

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

  

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

        <!-- ======= get appointment form starts from here ======= -->   

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        
<?php 

$insert = false;

require_once "../config.php";

if (isset($_POST['name'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$partnername = $_POST['partnername'];
$datetime = $_POST['datetime'];


$sql ="INSERT INTO `appointment`(`id`, `name`, `email`, `phone`, `services`, `partnername`, `datetime`) VALUES (NULL, '$name', '$email', '$phone', '$services', '$partnername', '$datetime');";


if($conn->query($sql) == true){
  //echo "Successfully inserted";

  // Flag for successful insertion
  $insert = true;
}
else{
  echo "ERROR: $sql <br> $conn->error";
}

// Close the database connection
$conn->close();

}
?>
    

<form action="contact.php" method="post">
        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2">
            
         <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   <div class="validation"></div>
          </div>
         
          <div class="col-lg-4 order-2 order-lg-2">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
          </div>


          <div class="col-lg-4 order-3 order-lg-2">
          <input type="tel" class="form-control" name="phone" id="email" placeholder="Your phone no." data-rule="email" data-msg="Please enter a valid phone no." />
                 
          </div>
        </div>

         </br></br>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">


        <select class="form-control" name="services" id="Selectid"  placeholder="Select Services" >
                    <option value="please select" >Select Services</option>
                    <option value="Audit Experience in the Banking Sector" >Audit Experience in the Banking Sector</option>
                    <option value="Audit Experience of Companies incorporated under the Indian Companies Act." >Audit Experience of Companies incorporated under the Indian Companies Act.</option>
                    <option value="Stock Verification Audits">Stock Verification Audits</option>
                    <option value="personal loan">Personal loan</option>
                    <option value="Audit Experience of Non-Corporate Entities">Audit Experience of Non-Corporate Entities</option>
                    <option value="Experience of Direct Taxes">Experience of Direct Taxes</option>
                    <option value="Experience of Indirect Taxes">Experience of Indirect Taxes</option>
                    <option  value="Experience of Corporate Law Matters">Experience of Corporate Law Matters</option>
                    </select>

         </div>


         <div class="col-lg-6 order-2 order-lg-2">


<select class="form-control" name="partnername" id="Selectid"  placeholder="Select Services" >
            <option value="please select" >meeting partner name</option>
            <option value="business loan" >Business loan</option>
            <option value="Home loan" >Home loan</option>
            <option value="mortgauge loan">Mortgauge loan</option>
            <option value="personal loan">Personal loan</option>
            <option value="working capital loan">Working capital loan</option>
            <option value="term loan">Term loan</option>
            <option value="equity funding">Equity funding</option>
            <option  value="educational loan">Educational loan</option>
             <option value="equity funding">GST</option>
            <option  value="educational loan">IT Filling</option>
             <option  value="educational loan">Others</option>
            </select>

 </div>
         </div>


         </br></br>




           <div class="row">
           <div class="col-lg-6 order-2 order-lg-2">

           <input type="datetime-local" name="datetime" class="form-control" id="name" placeholder="Please enter the date and time of the appointment" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
           
          
          </div>
         </div>

         </br></br>

         <div class="row">
           <div class="col-lg-12 order-2 order-lg-2">

           <div class="text-center">
           <button type="submit" class="btn btn-success" >Submit</button>
         </div>
          </div>
         </div>

         <h4><?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your data, our team will be in touch with you shortly.</p>";
        }
    ?></h4>

</form>

     

     
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



<?php include('footer1.php'); ?>