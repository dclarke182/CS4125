<?php

    class Admin extends database{

        function displayCustomers() {
            $db = new database();
            $db ->select("customers", "customers.ID, customers.FName, customers.LName, customers.Email");
            $result = $db->sql;

            while($row = mysqli_fetch_assoc($result)) {
                echo ' <a "width = 200"> ' . 'ID: ' . $row["ID"] . '<br>' . ' Name: ' . $row["FName"] . ' ' . $row["LName"] . '<br>' . ' Email: ' . $row["Email"];
            }
        }
    
        function displayDrivers() {
            $db = new database();
            $db ->select("drivers", "drivers.ID, drivers.FName, drivers.LName");
            $result = $db->sql;

            while($row = mysqli_fetch_assoc($result)) {
                echo '<a>' . 'ID: '. $row["ID"] . '<br>' .  ' Name: ' . $row["FName"] . ' ' . $row["LName"];
            }
        }

        function displayRestaurants(){
            $db = new database();
	        $db->select("restaurants","restaurants.RName, restaurants.ID, restaurants.city");                            
	        $result = $db->sql;

	        while($row = mysqli_fetch_assoc($result)) {
	        echo '<a>' . 'ID: ' . $row['ID'] . '<br>' . ' Restaurant: ' .  $row["RName"] . '<br>' . ' City: ' . $row["city"];            	            	    	            			            
            }
        }
    }
?>