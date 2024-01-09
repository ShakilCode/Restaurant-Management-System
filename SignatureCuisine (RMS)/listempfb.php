<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

    <!-- Call the CSS -->
    <link rel="stylesheet" href="css/styleListOfFB.css">

    <!-- Add icon to our website -->
    <link rel="icon" href="./Pictures/icon.png" type="icon">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Form</title>
</head>

<body>

<?php


	include 'connectionfb.php';	
	$sql=	"SELECT * FROM feedback";
		
	$result = mysqli_query($conn,$sql);


  echo "<div class = 'fb_list'>";

  echo "<div class = 'fb_list_heading'>";
  echo "<table border='1' size='200'>
    <tr>
    <th>User name</th>
    <th>feedback</th>
    </tr>";
  echo "</div>";
    



//fetches a result row as an  array .
while($row = mysqli_fetch_array($result))
  {
 
  echo "<div class = 'fb_list_namefb'>";
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['feedbackk'] . "</td>";
  echo "</div>";
  
 ?>
 

  
  <?php
  "</td>";
  echo "</tr>";
  }//end of while
  
  
echo "</table>";
echo "</div>";


mysqli_close($conn);	
?>

<div class="btn_cls_lstfb">
  <a href="home.html"><button>Home</button></a>
</div>
  
	

</body>
</html>