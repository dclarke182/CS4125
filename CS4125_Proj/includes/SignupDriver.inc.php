<?php
if(isset($_POST["submituser"])){

    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $pwd = $_POST["pwd"];
    $confirm_pwd = $_POST["confirm_pwd"];
    $phone = $_POST["phone"];

    include '../Models/Database.php';
    include '../Controllers/DriverSignupContr.class.php';

    $formValues = Array('FName'=>$FName, 'LName'=>$LName, 'Pass'=>$pwd,'Number'=>$phone);
    $newUser = new SignupDriver();
    $newUser->signupDriver($formValues);

    header("location: ../Views/RestaurantMenu.php?error=none");
}