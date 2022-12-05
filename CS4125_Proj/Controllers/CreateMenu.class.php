<?php

class CreateMenu extends Database{

    public function displayNewMenuItem(){
            echo "<form action='../includes/CreateMenu.inc.php' method='post' id='login-form' class='login-form'>";
            echo "<h1>Create your Menu!</h1>";
            echo "<input type='text' placeholder='' id='restName' name='restName'></br>";
            echo "<input type='number' placeholder='' id='address1' name='address1'></br>";
    }
}