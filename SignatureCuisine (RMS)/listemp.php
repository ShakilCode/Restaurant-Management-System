<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

    <!-- Call the CSS -->
    <link rel="stylesheet" href="CSS/ordersliststyle.css">

    <!-- Add icon to our website -->
    <link rel="icon" href="./Pictures/icon.png" type="icon">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View food orders</title>
</head>

<body>

<?php

	include 'connection.php';	
	$sql=	"SELECT * FROM reservation";
		
	$result = mysqli_query($conn,$sql);
	
 echo "<div class = 'order_cls_heading'>";
 echo "<table border='1' size='200'>
 <tr>
 <th>User name</th>
 <th>Email</th>
 <th>Contact Number</th>
 <th>Address</th>
 <th>Food Name</th>
 <th>Food Type</th>
 <th>Amount Of Food</th>
 <th>Reservation Time</th>
 <th>Delete Orders</th>
 </tr>";

//fetches a result row as an  array .
while($row = mysqli_fetch_array($result))
  {
 
 echo "<tr>";
 echo "<td>" . $row['username'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['contact_number'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td>" . $row['food_name'] . "</td>";
 echo "<td>" . $row['food_type'] . "</td>";
 echo "<td>" . $row['amount_of_food'] . "</td>";
 echo "<td>" . $row['reservation_time'] . "</td>";
 echo "<td>"
 ?>

<div class="order_cls_btn">
<a href="delete.php?del=<?php echo $row['username']; ?>" onClick="return confirm('Do you really need to delete !'); " >delete the order</a>
</div>

  <?php
  "</td>";
  echo "</tr>";
  }//end of while
  
  
echo "</table>";
echo "</div>";



mysqli_close($conn);	
?>

<div class="home_btn_ord">
  <a href="home.html"><button>Home</button></a>
</div>

<div class="home_btn_ord">
  <a href="admin_page.php"><button>Back</button></a>
</div>

</body>
</html>