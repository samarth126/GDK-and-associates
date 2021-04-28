


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
    <a href="index.html" class="logo me-auto"><img src="assets\GDK associates logo-1.jpg" alt="hhh" class="img-fluid"></a>
    
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


<div class="secttion-title">
          <h2>Please Upload Cash Book here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">


<!--------Cash BOOK UPLOAD-------->

<?php

// Upload and Rename File

if (isset($_POST['submit']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("cashbook/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "cashbook/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit" type="submit" value="Upload" />
</form>





</div>
</div>
</br></br></br>









<!--------Vouchers UPLOAD-------->

<div class="secttion-title">
          <h2>Please Upload Vouchers here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">


<?php

// Upload and Rename File

if (isset($_POST['submit1']))
{
	$filename = $_FILES["file1"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file1"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("vouchers/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file1"]["tmp_name"], "vouchers/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file1"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file1" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit1" type="submit" value="Submit" />
</form>


</div>
</div>
</br></br></br>







<!--------Bank Statements UPLOAD-------->

<div class="secttion-title">
          <h2>Please Upload Bank Statements here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">



<?php

// Upload and Rename File

if (isset($_POST['submit2']))
{
	$filename = $_FILES["bankfile"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["bankfile"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("bank/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["bankfile"]["tmp_name"], "bank/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["bankfile"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="bankfile" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit2" type="submit" value="Submit" />
</form>



</div>
</div>
</br></br></br>










<!--------Purchase register UPLOAD-------->


<div class="secttion-title">
          <h2>Please Upload Purchase Register here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">


<?php

// Upload and Rename File

if (isset($_POST['submit3']))
{
	$filename = $_FILES["file2"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file2"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("purchasereg/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file2"]["tmp_name"], "purchasereg/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file2"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file2" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit3" type="submit" value="Submit" />
</form>




</div>
</div>
</br></br></br>









<!--------Expenses register UPLOAD-------->


<div class="secttion-title">
          <h2>Please Upload Expenses register here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">


<?php

// Upload and Rename File

if (isset($_POST['submit4']))
{
	$filename = $_FILES["file3"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file3"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("expensesreg/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file3"]["tmp_name"], "expensesreg/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file3"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file3" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit4" type="submit" value="Submit" />
</form>




</div>
</div>
</br></br></br>










<!--------Sales register UPLOAD-------->


<div class="secttion-title">
          <h2>Please Upload Sales Register here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">


<?php

// Upload and Rename File

if (isset($_POST['submit5']))
{
	$filename = $_FILES["file4"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file4"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("salesreg/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file4"]["tmp_name"], "salesreg/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file4"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file4" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit5" type="submit" value="Submit" />
</form>



</div>
</div>
</br></br></br>









<!--------Fixed asset register UPLOAD-------->

<div class="secttion-title">
          <h2>Please Upload Fixed Asset Register here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">


<?php

// Upload and Rename File

if (isset($_POST['submit6']))
{
	$filename = $_FILES["file5"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file5"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("fixedassetreg/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file5"]["tmp_name"], "fixedassetreg/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file5"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file5" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit6" type="submit" value="Submit" />
</form>



</div>
</div>
</br></br></br>








<!--------books of accounts UPLOAD-------->
<div class="secttion-title">
          <h2>Please Upload Books of Accounts here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">


<?php

// Upload and Rename File

if (isset($_POST['submit7']))
{
	$filename = $_FILES["file6"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file6"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("boa/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file6"]["tmp_name"], "boa/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file6"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file6" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit7" type="submit" value="Submit" />
</form>




</div>
</div>
</br></br></br>









<!--------other relevent bills statements UPLOAD-------->
<div class="secttion-title">
          <h2>Please Upload Other Relevant Bills, Statements, and Vouchers here</h2>
         </div>
<div class="row">

<div class="d-flex justify-content-center">




<?php

// Upload and Rename File

if (isset($_POST['submit8']))
{
	$filename = $_FILES["file7"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file7"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("otherbills/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file7"]["tmp_name"], "otherbills/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file7"]["tmp_name"]);
	}
}

?>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file7" id='godzilla' type="file" />
<button onclick='document.getElementById("godzilla").click()'>delete the upload</button>
<input id="Submit" name="submit8" type="submit" value="Submit" />
</form>



</div>
</div>
</br></br></br>








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
