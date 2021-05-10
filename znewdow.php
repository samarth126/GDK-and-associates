
<?php

session_start();

if(!isset($_SESSION['loggedinn']) || $_SESSION['loggedinn'] !==true)
{
    header("location: login.php");
}


?>



<?php

require_once "config.php";

$user_id= $_SESSION["id"];

echo $_SESSION['hello'];

if(isset($_SESSION['hello']))
{

    switch ($_SESSION['hello']) {
        case "1":
            $sql = "SELECT * FROM admin1_upload where user_id = '$user_id'";
          break;
        case "2":
            $sql = "SELECT * FROM admin2_upload where user_id = '$user_id'";
          break;
        case "3":
            $sql = "SELECT * FROM admin3_upload where user_id = '$user_id'";
          break;
        case "4":
            $sql = "SELECT * FROM admin4_upload where user_id = '$user_id'";
          break;
        case "5":
            $sql = "SELECT * FROM admin5_upload where user_id = '$user_id'";
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
    if(isset($_SESSION['hello']))
{

    switch ($_SESSION['hello']) {
        case "1":
           $sql = "SELECT * FROM admin1_upload where user_id = '$user_id'";
          break;
        case "2":
            $sql = "SELECT * FROM admin2_upload where user_id = '$user_id'";
           break;
        case "3":
            $sql = "SELECT * FROM admin3_upload where user_id = '$user_id'";
           break;
        case "4":
            $sql = "SELECT * FROM admin4_upload where user_id = '$user_id'";
           break;
        case "5":
            $sql = "SELECT * FROM admin5_upload where user_id = '$user_id'";
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
<?php echo $_SESSION['hello'] ?>
<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php  foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="znewdow.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>


</tbody>
</table>

<div id="bb"><li><a href="logout.php"><button type="button" id="aa" class="btn btn-danger">
          LOG OUT
        </button></a></li>
        </ul>
        </div>


        
<div id="bb"><li><a href="welcome.php"><button type="button" id="aa" class="btn btn-danger">
          user dashboard
        </button></a></li>
        </ul>
        </div>