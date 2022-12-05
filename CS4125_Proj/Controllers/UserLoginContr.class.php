<?php

class Login extends Database {

    public function loginUser($email, $pwd){
        $this->email = $email;
        $this->pwd = $pwd;
        $db = new database();
        $db->select("customers", "customers.ID, customers.Email, customers.Pass", "customers.Email = '" . $email . "' AND customers.Pass = '" . $pwd . "'");
        $result = $db->sql;
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row['ID'];
    }
}