<?php

class DriverLogin extends Database {

    public function loginDriver($phone, $pwd){
        $this->phone = $phone;
        $this->pwd = $pwd;
        $db = new database();
        $db->select("drivers", "drivers.ID, drivers.Number, restaurants.Pass", "restaurants.Number = '" . $phone . "' AND restaurants.Pass = '" . $pwd . "'");
        $result = $db->sql;
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row['ID'];
    }
}