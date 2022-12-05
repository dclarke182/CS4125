<!DOCTYPE = html>

<html>
    <head>
    <link rel="stylesheet" type"text/css" href="css/style.css">
    </head>
<?php
include "./includes/AllClasses.inc.php";

include "./controllers/admin_dash.contr.php";
$db = new database();
$admin_obj = new Admin();
?>

<body style="background-color: whitesmoke">
    <div class="contentSection">
        <div class="grid-div">
            <?php	   
              $admin_obj->displayCustomers();
              $admin_obj->displayDrivers();
              $admin_obj->displayRestaurants();
            ?>
        </div>
    </div>
</body>

</html>