<?php

class  SignupDriver extends Database {

    public function signupDriver($formValues){
        $this->formValues = $formValues;
        $db = new database();
        $db->insert('drivers', $formValues);
    }

}