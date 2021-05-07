




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
    <a href="index.html" class="logo me-auto"><img src="assets\GDK associates logo-1.jpg" alt="hhh" class="img-fluid"></a>
    
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


<div class="container">

 
<?php

require_once "config.php";



if(isset($_SESSION["id"]))
{

    switch ($_SESSION["id"]) {
        case "2":
            $sql = "SELECT * FROM admin1";
          break;
        case "3":
            $sql = "SELECT * FROM  admin2";
          break;
        case "4":
            $sql = "SELECT * FROM  admin3";
          break;
        case "5":
            $sql = "SELECT * FROM  admin4";
          break;
        case "6":
            $sql = "SELECT * FROM  admin5";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
      }
}

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    if(isset($_SESSION["id"]))
{

    switch ($_SESSION["id"]) {
        case "2":
            $sql = "SELECT * FROM admin1 WHERE id=$id";
          break;
        case "3":
            $sql = "SELECT * FROM admin2 WHERE id=$id";
          break;
        case "4":
            $sql = "SELECT * FROM admin3 WHERE id=$id";
          break;
        case "5":
            $sql = "SELECT * FROM admin4 WHERE id=$id";
          break;
        case "6":
            $sql = "SELECT * FROM admin5 WHERE id=$id";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
      }
}
   


    $result = mysqli_query($conn, $sql);

    

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}



?>








<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>
<?php echo $_SESSION['adminhello'] ?>
<table>
<thead>
    <th>ID</th>
    <th>USER_ID</th>
    <th>USER_NAME</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php  foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['user_id']; ?></td>
      <td><?php echo $file['user_name']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="userfiles.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
<div id="bb"><li><a href="adminlogout.php"><button type="button" id="aa" class="btn btn-danger">
          LOG OUT
        </button></a></li>
        </ul>
      </div>

      <div id="bb"><li><a href="zadminupload.php"><button type="button" id="aa" class="btn btn-danger">
          admin uploads
        </button></a></li>
        </ul>
      </div>
</div>
