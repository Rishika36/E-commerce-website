<?php
  
  require 'includes\common.php';
  
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product Page</title>
    <link rel="stylesheet" type="text/css" href="mystyles4.css">
  </head>
  <body>


<?php 

    include 'includes\header.php';

    include 'includes\check-if-added.php';

    $select_query = "SELECT id, name, price FROM items";
    $select_query_result = mysqli_query($con, $select_query) or die($con);
    
  ?>




   

      <div id= "top"><p style="font-size: 59px;"><b>Welcome to our Lifestyle Store!</b></p>
        <p style="12px; margin-top: 0px;">We have the best cameras, watches and shirts for you. No need to hunt around we have all in one place.</div>


           <div class="cards1">
    <div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="1.jpg" class="card-img-top" alt="...">
  <div class="card-body" style="text-align:center;">
    <p class="card-text" style="font-size:30px;"><b>Sony DSLR</b></p><p style="font-size:13px;">Price: Rs.50000.00</p>
            
            <?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>
  </div>
  </div>
</div>

<div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align:center;"><b>Sony DSLR</b></p><p style="font-size:13px;">Price: Rs.50000.00</p>

    <?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>



    <div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align: center;"><b>Olympus DSLR</b></p><p style="font-size: 13px;">Price: Rs.80000.00</p>
  <?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>


<div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align: center;"><b>Cannon EOS</b></p><p style="font-size: 13px;">Price: Rs.70000.00</p>

   <?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>

 <div class="cards1">





  <div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="11.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align:center;"><b>HMT Milan</b></p><p style="font-size: 13px;">Price: Rs.8000.00</p>




<?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>

<div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="12.jpg" class="card-img-top" alt="...">
  <div class="card-body" style="font-size:30px; text-align: center;">
    <p class="card-text"><b>Faber Luba</b></p><p style="font-size: 13px;">Price: Rs.1000.00</p>



<?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>

    
    <div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align:center;"><b>Titan Model #201</b></p><p style="font-size: 13px;">Price: Rs.3000.00</p>


<?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>>

<div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="9.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align:center"><b>Titan Model #301</b></p><p style="font-size: 13px;">Price: Rs.13000.00</p>



<?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>

 <div class="cards1">
    <div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="13.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align:center;"><b>John Zock</b></p><p style="font-size: 13px;">Price: Rs.15000.00</p>



<?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>


<div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="14.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align:center;"><b>Jhalsani</b></p><p style="font-size: 13px;">Price: Rs.1000.00</p>



<?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>


<div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size:30px; text-align:center;"><b>H&W</b></p><p style="font-size: 13px;">Price: Rs.800.00</p>

<?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>

<div class="card" style="width: 20rem;"><div class="card-body1">
  <img src="6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" style="font-size: 30px;"><b>Luis Phil</b></p><p style="font-size: 13px;">Price: Rs.1000.00</p>


<?php 
            if (!isset($_SESSION['Email'])) { 
            ?>
            
            <button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            
             <?php
             } 
             else {
               if (check_if_added_to_cart(1)==1) { 
                  ?>

<button style="background-color:dodgerblue; padding-left: 20px; padding-right: 20px; width: 250px; color: white; border-radius: 5px;padding-top: 5px;padding-bottom: 5px;"> 
<a href = "cart.php" style="text-decoration: none; color: white;">Add to cart</a></button>

<?php } else { //if item not in cart
                ?>

                  <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
                  btn-primary" >Add to cart</a>
                   <?php
                   }
                }

            ?>

    



<?php 

    include 'includes\footer.php';
  ?>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>