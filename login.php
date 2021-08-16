
<?php 
  
  require 'includes\common.php';
  if (isset($_SESSION['Email'])) {
  header('location: prod.php');
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login page</title>
    <link rel="stylesheet" href="mystyles1.css">
  </head>
  <body>
  <!-- As a link -->

<?php

     include 'includes\header.php';

  ?>
  

<div id ="page">
  
  <div id="top"> Login to make Purhase </div>

<div style="padding-right: 20px; padding-bottom: 20px; padding-top: 20px;padding-left: 20px;"><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address:</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
      
  
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="row-sm-10">
      <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
  </div></div>

<div style= "padding-left: 350px; padding-bottom: 20px;">
  <button><a href="prod.php" style="text-decoration: none; color: white;">Login</a></button></div>
  <div style="background-color: whitesmoke; padding: 10px;">  Don't have an account? Pease <a href="signup.php">Sign Up</a></div>
</div>

<?php

     include 'includes\footer.php';

  ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>