<?php include('header1.php');  ?>



 <img class="responsive wow fadeInUp" src="../assets\img\banners\circular.png" alt=" GST registration">
 

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Circulars & Notification</h2>
     
     
        </div>

        <div class="row">

        <div class="col-lg-4 order-1 order-lg-2">
        <div class="text-center"><h4>Please select a category </h4></div>
      
      </div>
          <div class="col-lg-8 order-2 order-lg-2">



          <div>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
            <option>Choose Color</option>
            <option value="red">Audit & Assurance and Accounting Standards</option>
            <option value="green">CBEC / DGFT</option>
            <option value="blue">Corporate Matters / LLP</option>
            <option value="1">Goods and Services Tax (GST)</option>
            <option value="1">ICAI</option>
            <option value="1">Income Tax</option>
            <option value="1">Ind AS</option>
            <option value="1">Insolvency and Bankruptcy Code</option>
            <option value="1">Miscellaneous</option>
            <option value="1">Monthly Bulletin</option>
            <option value="1">RBI / FEMA</option>
            <option value="1">SEBI</option>
            <option value="1">Service Tax</option>
            <option value="1">Valuation</option>
            <option value="1">VAT / Sales Tax</option>

        </select>
    </div>
    <div class="red box">
    You have selected <strong>red option</strong> so i am here
    </div>


    <div class="green box">You have selected <strong>green option</strong> so i am here</div>
    <div class="blue box">You have selected <strong>blue option</strong> so i am here</div>


    <div class="1 box">
    
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">2021</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">.this is 2021.</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">.this is profile</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">.this is contact.</div>
</div>
    
    </div>


















          </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->






    <style>
    .box{
        color: black;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ background: #ff0000; }
    .green{ background: #228B22; }
    .blue{ background: #0000ff; }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>



<?php include('footer1.php');  ?>