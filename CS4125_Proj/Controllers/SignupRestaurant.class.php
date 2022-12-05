<?php

class SignupRestaurant extends Database { 

    public function addNewRestaurant($formValues){
        $this->formValues = $formValues;
        $db = new database();
        $db->insert('restaurants', $formValues);
    }
}