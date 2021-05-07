
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: adminlogin.php");
}


?>










<?php

$id=15;
require_once "config.php";

echo $_SESSION["id"];


switch ($_SESSION["id"]) {
    case "2":
        $sql = "SELECT * FROM appointment WHERE partnername='1'";
      break;
    case "3":
        $sql = "SELECT * FROM appointment WHERE partnername='2'";
      break;
    case "4":
        $sql = "SELECT * FROM appointment WHERE partnername='3'";
      break;
    case "5":
        $sql = "SELECT * FROM appointment WHERE partnername='4'";
      break;
    case "6":
        $sql = "SELECT * FROM appointment WHERE partnername='5'";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

    ?>





    <!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <section> 
        <h1>ALL APPOINTMENTS</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>ID</th> 
                <th>Name</th> 
                <th>Email</th> 
                <th>Phone</th> 
                <th>Services</th> 
                <th>Partnername</th> 
                <th>Datetime</th> 
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['id'];?></td> 
                <td><?php echo $rows['name'];?></td> 
                <td><?php echo $rows['email'];?></td> 
                <td><?php echo $rows['phone'];?></td> 
                <td><?php echo $rows['services'];?></td> 
                <td><?php echo $rows['partnername'];?></td> 
                <td><?php echo $rows['datetime'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html> 



<?php

} else {
  echo "0 results";
}
$conn->close();

?>













<br><br>
<a href="adminlogout.php"><button class="btn btn-primary">LOG OUT</button></a>


<br><br>
<a href="adminwelcome.php"><button class="btn btn-primary">Admin dashboard</button></a>