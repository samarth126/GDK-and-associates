
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: adminlogin.php");
}


?>






<?php

    include "logic.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
</head>
<body>


<div class="container mt-5">

        

        
        
        

<!-- Display posts from database -->
<div class="row">
    <?php foreach($query as $q){ ?>
        <div class="col-12 col-lg-4 d-flex justify-content-center">
            <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $q['title'];?></h5>
                    
                    
                    <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>
                </div>

            </div>
        </div>
    <?php }?>
</div>

</div>
<!-- Display any info -->
<?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?>

   <div class="container mt-5">
        <form method="POST">
            <input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center" name="title">
            <textarea name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"></textarea>
            <button class="btn btn-dark" name="new_post">Add Post</button>
        </form>
   </div>


   
<br><br>
<a href="adminlogout.php"><button class="btn btn-primary">LOG OUT</button></a>


<br><br>
<a href="adminwelcome.php"><button class="btn btn-primary">Admin dashboard</button></a>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
