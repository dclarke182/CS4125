<?php

if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];


    include '../Models/Database.php';
    include '../Controllers/UserLoginContr.class.php';

    $formValues = Array('Email'=>$email, 'Pass'=>$pwd);
    $User = new Login();
    $User->loginUser($email, $pwd);

    header("location: ../Views/cust_dashboard.php?error=none");
}