<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Confirmation</title>

    <!-- Call the CSS -->
    <link rel="stylesheet" href="CSS/styleDelConfirm.css">

    <!-- Add icon to our website -->
    <link rel="icon" href="./Pictures/icon.png" type="icon">

</head>

<body>


<?php
include 'connection.php';
if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $stmt = mysqli_prepare($conn, "DELETE FROM reservation WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo '<div class="DelConfirm">';

    echo '<div class="h1Div">';
    echo '<h1 class="heading">Record deleted successfully.</h1>';
    echo '</div>';
    
    
    echo '<div class="back">';
    echo '<p class="paraRefresh">Go back to view other orders</p>';
    echo '<div class="btnBack">
            <a href="listemp.php"><button>Back</button></a>
          </div>';
    echo '</div>';


    echo '<div class="AdPage">';
    echo '<p class="paraAdminPage">Go to the admin page</p>';
    echo '<div class="btnAdPage">
        <a href="admin_page.php"><button>Admin Panel</button></a>
        </div>';
    echo '</div>';

    echo '</div>';
}


?>


</body>
</html>