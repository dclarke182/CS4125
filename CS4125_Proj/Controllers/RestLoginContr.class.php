<?php

class RestLogin extends Database {

    public function loginRest($email, $pwd){
        $this->email = $email;
        $this->pwd = $pwd;
        $db = new database();
        $db->select("restaurants", "restaurants.ID, restaurants.Email, restaurants.Pass", "restaurants.Email = '" . $email . "' AND restaurants.Pass = '" . $pwd . "'");
        $result = $db->sql;
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row['ID'];
    }
}