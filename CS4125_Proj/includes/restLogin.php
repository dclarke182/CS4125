<?php

if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];


    include '../Models/Database.php';
    include '../Controllers/UserLoginContr.class.php';

    $formValues = Array('Email'=>$email, 'Pass'=>$pwd);
    $User = new RestLogin();
    $User->loginRest($email, $pwd);

    header("location: ../Views/RestaurantMenu.php?error=none");
}
 