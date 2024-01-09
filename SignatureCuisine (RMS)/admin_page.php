<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylecusad.css">

   <!-- Add icon to our website -->
   <link rel="icon" href="./Pictures/icon.png" type="icon">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hello, <span>Admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an <span>admin</span> page</p>
      <a href="home.html" class="btn">Home</a>
      <a href="listemp.php" class="btn">Orders</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>