<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: adminlogin.php");
}
?>




<?php

require_once "config.php";





// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    
    $message = $_POST['message'];
    $user_id = $_POST['userid'];

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
            



            if(isset($_SESSION["id"]))
            {
            
                switch ($_SESSION["id"]) {
                    case "2":
                        $sql = "INSERT INTO admin1_upload (user_id, name, size, downloads, message) VALUES ('$user_id','$filename', $size, 0, '$message')";
                      break;
                      case "3":
                        $sql = "INSERT INTO admin2_upload (user_id, name, size, downloads, message) VALUES ('$user_id','$filename', $size, 0, '$message')";
                      break;
                      case "4":
                        $sql = "INSERT INTO admin3_upload (user_id, name, size, downloads, message) VALUES ('$user_id','$filename', $size, 0, '$message')";
                      break;
                      case "5":
                        $sql = "INSERT INTO adim4_upload (user_id, name, size, downloads, message) VALUES ('$user_id','$filename', $size, 0, '$message')";
                      break;
                      case "6":
                        $sql = "INSERT INTO admin5_upload (user_id, name, size, downloads, message) VALUES ('$user_id','$filename', $size, 0, '$message')";
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

<form action="zadminupload.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="text" name="message" class="form-control" placeholder="Message" required/>
          <input type="text" name="userid" class="form-control" placeholder="USER_ID" required/>

          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>





        <div id="bb"><li><a href="adminlogout.php"><button type="button" id="aa" class="btn btn-danger">
          LOG OUT
        </button></a></li>
        </ul>
        </div>

