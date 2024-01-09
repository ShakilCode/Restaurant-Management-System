<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

    <!-- Call the CSS -->
    <link rel="stylesheet" href="css/disdata.css">

    <!-- Add icon to our website -->
    <link rel="icon" href="./Pictures/icon.png" type="icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display the reservation details</title>
</head>
<body>


     <?php
    
    if (isset($_POST['submit'])) {
        include("connection.php");
        $unam = $_POST['username'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $address = $_POST['address'];
        $food_name = $_POST['food_name'];
        $food_type = $_POST['food_type'];
        $amount_of_food = $_POST['amount_of_food'];
        $reservation_time = $_POST['reservation_time'];
        

        $sql= "INSERT INTO reservation"."(username,email,contact_number,address,food_name,food_type,amount_of_food,reservation_time)".
        "VALUES('$unam','$email','$contact_number','$address','$food_name','$food_type','$amount_of_food','$reservation_time')";
	
        $results = mysqli_query($conn,$sql); //execute the given query on the database

        if(!$results)
	{
		die('Could not enter data: '.mysqli_error($conn));
	}
	else
	{
        echo "<br/>";
	}
        echo "<div class='cls_data'>";
        echo "1. Your name is : ".$unam."<br>";
        echo "2. Your email is : ".$email."<br>";
        echo "3. Your contact number is : ".$contact_number."<br>";
        echo "4. Your address is : ".$address."<br>";
        echo "5. Your food name is : ".$food_name."<br>";
        echo "6. Your food type is : ".$food_type."<br>";
        echo "7. Amount of food that you want : ".$amount_of_food."<br>";
        echo "8. Your reservation time is : ".$reservation_time."<br>";
        echo "</div>";
    } else {
        
        echo "Your form is not submitted yet please fill the form and visit again";
    }
    ?>
<div class="btn_cls">
    <a href="home.html"><button class="display_btn">Go to home</button></a>
    <a href="food_menu.html"><button class="display_btn">Order more food</button></a>
</div>
    
</body>
</html>