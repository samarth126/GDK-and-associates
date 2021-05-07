<?php


session_start();

if(!isset($_SESSION['loggedinn']) || $_SESSION['loggedinn'] !==true)
{
    header("location: login.php");
}


?>



<?php

require_once "config.php";

echo $_SESSION['hello'];

if (isset($_POST['subb'])){

	$name = $_POST['name'];



if(isset($_SESSION['hello']))
{

    switch ($_SESSION['hello']) {
        case "1":
            $sql= "INSERT INTO `kanu`(`message`) VALUES ('$name')";
          break;
        case "2":
            $sql= "INSERT INTO `ketu`(`message`) VALUES ('$name')";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
      }
}




if($conn->query($sql) == true){
    //echo "Successfully inserted";
  
    // Flag for successful insertion
    $insertinto = true;
  }
  else{
    echo "ERROR: $sql <br> $conn->error";
  }
  
  // Close the database connection
  $conn->close();
  


}

?>

<form action="x.php" method="post">
<input type="text" name="name" placeholder="Your name..">
<input type="submit" name="subb">
</form>


<div id="bb"><li><a href="logout.php"><button type="button" id="aa" class="btn btn-danger">
          LOG OUT
        </button></a></li>
        </ul>
        </div>