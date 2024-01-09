<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Call the CSS -->
    <link rel="stylesheet" href="CSS/disdatafb.css">

    <!-- Add icon to our website -->
    <link rel="icon" href="./Pictures/icon.png" type="icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View added feedback</title>
</head>
<body>
    <?php
    
    if (isset($_POST['submit'])) {
        include("connectionfb.php");
        $unam = $_POST['username'];
        $feedbackk = $_POST['feedbackk'];
        

        $sql= "INSERT INTO feedback"."(username,feedbackk)".
        "VALUES('$unam','$feedbackk')";
	
        $results = mysqli_query($conn,$sql); //execute the given query on the database

        if(!$results)
	{
		die('Could not enter data: '.mysqli_error($conn));
	}
	else
	{

        echo "<br/>";
	}

        echo "<div class = 'dis_data_fb_cls'>";
        echo '<span> Your name is : </span>'.$unam."<br>";
        echo '<span> Your feedback is : </span>'.$feedbackk."<br>";
        echo "</div>";

    } else {
        
        echo "Your form is not submitted yet please fill the form and visit again";
    }
    ?>

    <div class="btn_cls_disfb">
        <a href="listempfb.php"><button class="display_btn">Go to feedback</button></a>
    </div>

</body>
</html>