


<?php

session_start();

if(!isset($_SESSION['loggedinn']) || $_SESSION['loggedinn'] !==true)
{
    header("location: login.php");
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
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
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


          <li><a class="nav-link scrollto active" href="pages/circularsandarticle.php">Circulars & Notification</a></li>
          <li><a class="nav-link scrollto active" href="pages/knowledge.php">Knowledge Centre</a></li>
          <li><a class="nav-link scrollto" href="pages/alumini.php">Alumini </a></li>
          <li><a class="nav-link scrollto" href="pages/presentation.php">Presentation</a></li>
          <li><a class="nav-link scrollto" href="pages/videos.php">Videos</a></li>
          <li><a class="nav-link scrollto" href="pages/useful.php">Useful Links</a></li>
          <li><a class="nav-link scrollto" href="pages/contact.php">Contact</a></li>


        <div id="bb"><li><a href="logout.php"><button type="button" id="aa" class="btn btn-danger">
          LOG OUT
        </button></a></li>
        </ul>
        </div>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  </br> </br> </br> </br> </br> </br>



 





  </br> </br> </br>


<div class="container mt-4">
<h1><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h1>
<hr>
</br> </br> </br>

<style>
  .secttion-title {
  text-align: center;
  padding-bottom: 30px;
}

.secttion-title h2 {
  font-size: 28px;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

</style>





<?php

require_once "config.php";

echo $_SESSION['hello'];



// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    
    $message = $_POST['message'];
	//id of user is passed in table
	$user_id =  $_SESSION["id"];
//id of user is passed in table
	$user_name =  $_SESSION["username"];

    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            



            if(isset($_SESSION['hello']))
            {
            
                switch ($_SESSION['hello']) {
                    case "1":
                        $sql = "INSERT INTO admin1 (user_id, user_name, name, size, downloads, message) VALUES ('$user_id', '$user_name', '$filename', $size, 0, '$message')";
                      break;
					case "2":
                        $sql = "INSERT INTO admin2 (user_id, user_name, name, size, downloads, message) VALUES ('$user_id', '$user_name', '$filename', $size, 0, '$message')";
                      break;
					case "3":
                        $sql = "INSERT INTO admin3 (user_id, user_name, name, size, downloads, message) VALUES ('$user_id', '$user_name', '$filename', $size, 0, '$message')";
                      break;
					case "4":
                        $sql = "INSERT INTO admin4 (user_id, user_name, name, size, downloads, message) VALUES ('$user_id', '$user_name', '$filename', $size, 0, '$message')";
                      break;
					case "5":
                        $sql = "INSERT INTO admin5 (user_id, user_name, name, size, downloads, message) VALUES ('$user_id', '$user_name', '$filename', $size, 0, '$message')";
                      break;
                    default:
                      echo "Your favorite color is neither red, blue, nor green!";
                  }
            }


            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}







?>

<form action="welcome.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="text" name="message" class="form-control" placeholder="Message" required/>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>


<div id="bb"><li><a href="logout.php"><button type="button" id="aa" class="btn btn-danger">
          LOG OUT
        </button></a></li>
        </ul>
        </div>


        
<div id="bb"><li><a href="znewdow.php"><button type="button" id="aa" class="btn btn-danger">
          user download
        </button></a></li>
        </ul>
        </div>




</br>
</br>
</div>









<script>
var godzilla = document.getElementById('godzilla')

godzilla.onclick = charge

function charge()
{
    document.body.onfocus = roar
    console.log('chargin')
}
    
function roar()
{
    if(godzilla.value.length) alert('ROAR! FILES!')
    else alert('*empty wheeze*')
    document.body.onfocus = null
    console.log('depleted')
}
</script>



<?php include('footer.php');  ?>
