<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Customer page</title>

   <!-- Add icon to our website -->
   <link rel="icon" href="./Pictures/icon.png" type="icon">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylecusad.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hello, <span>Customer</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>This is a <span>customer</span> page</p>
      <a href="logout.php" class="btn">logout</a>
      <a href="food_menu.html" class="btn">Food Menu</a>
      <a href="home.html" class="btn">Home</a>

   </div>

</div>

</body>
</html>