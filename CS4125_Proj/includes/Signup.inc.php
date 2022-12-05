<?php

    if(isset($_POST["submitRestaurant"])){

        $restName = $_POST["restName"];
        $pwd = $_POST["pwd"];
        $confirm_pwd = $_POST["confirm_pwd"];
        $phone = $_POST["phone"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];
        $address2 = $_POST["address2"];
        $address3 = $_POST["address3"];
        $zipcode = $_POST["zipcode"];
        $restCity = $_POST["restCity"];

        include '../Models/Database.php';
        include '../Controllers/SignupRestaurant.class.php';

        $formValues = Array('RName'=>$restName, 'Pass'=>$pwd, 'address_line_1'=>$address1, 'address_line_2'=>$address2, 'address_line_3'=>$address3, 'zipcode'=>$zipcode, 'PhoneNumber'=>$phone);
        $newRest = new SignupRestaurant();
        $newRest->addNewRestaurant($formValues);

        header("location: ../Views/CreateMenu.php?error=none");

    }