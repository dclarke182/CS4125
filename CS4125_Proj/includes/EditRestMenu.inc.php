<?php
    if(isset($_POST["edit-form-submit"])){

        $restID = $_POST["restID"];
        $restName = $_POST["restName"];
        $pwd = $_POST["pwd"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];
        $address3 = $_POST["address3"];
        $zipcode = $_POST["zipcode"];
        $number = $_POST["number"];

        include '../Models/Database.php';
        include '../Controllers/EditRestMenu.contr.php';

        $formValues = Array('RName'=>$restName, 'Pass'=>$pwd, 'address_line_1'=>$address1, 'address_line_2'=>$address2, 'address_line_3'=>$address3, 'zipcode'=>$zipcode, 'PhoneNumber'=>$number);
        $editRest = new EditRestMenu;
        $editRest->updateRestaurantInfo($formValues, $restID);

        header("location: ../Views/restaurantMenu.php?ID=" . $restID);
    }

    if(isset($_POST["edit-menu-submit"])){

        $foodName = $_POST["foodName"];
        $price = $_POST["price"];
        $line_id = $_POST["line_id"];
        $menu_id = $_POST["menu_id"];
        $line_no = $_POST["line_no"];

        include '../Models/Database.php';
        include '../Controllers/EditRestMenu.contr.php';

        $formValues = Array('foodName'=>$foodName, 'price'=>$price);
        $editRest = new EditRestMenu;
        $editRest->updateRestaurantMenu($formValues, $line_no);

        header("location: ../Views/restaurantMenu.php?ID=" . $menu_id);
    }