<?php

if(isset($_POST["submit"])){

    $phone = $_POST["phone"];
    $pwd = $_POST["pwd"];


    include '../Models/Database.php';
    include '../Controllers/DriverLoginContr.class.php';

    $formValues = Array('Number'=>$phone, 'Pass'=>$pwd);
    $User = new DriverLogin();
    $User->loginDriver($phone, $pwd);

    header("location: ../Views/RestaurantMenu.php?error=none");
}