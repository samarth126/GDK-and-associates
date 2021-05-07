<?php
//This script will handle login
session_start();



// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";


// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $abc = trim($_POST['partner']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    



    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedinn"] = true;
                            $_SESSION["hello"] = $abc;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>






<?php include('header.php');  ?>

</br>
</br>

<div class="w-100 p-3 aaa">


</br>

</br>
</br>

<div class="row"> 
<div class="col-lg-3 order-1 order-lg-2">
           
          </div>
<style>
.aaa{
    background-image: linear-gradient(-45deg, #43cea2 0%, #185a9d 100%);
}
</style>
          
          <div class="col-lg-6 order-1 order-lg-2">
          <div class="shadow-lg p-3 mb-5 bg-white rounded">
           <div class="section-title">
          <h2>Please USER Login Here:</h2>
               </div>    

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  </br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  </br>

  <div class="form-group">
    <label for="exampleInputPassword1">partner</label>
    <select  class="form-control"  name="partner" required>
   <option value="1">admin1</option>
   <option value="2">admin2</option>
   <option value="3">admin3</option>
   <option value="4">admin4</option>
   <option value="5">admin5</option>
  </div>
  
  </br>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  </br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>




<div class="col-lg-3 order-1 order-lg-2">
          </div>

          </div>
</br>
</br>
</br>
</br>

<a href="adminlogin.php"><button type="submit" class="btn btn-danger">ADMIN LOG IN</button></a>






</div>

<?php include('footer.php');  ?>