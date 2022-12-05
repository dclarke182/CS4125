<?php

class Restaurant extends Database{

	public function displayRestaurants(){
      	$db = new Database();
	    $db->select("restaurants","restaurants.RName, restaurants.ID, restaurants.img_path","restaurants.city = '" . $_SESSION['user_city'] . "'");                            
	    $result = $db->sql;

	    while($row = mysqli_fetch_assoc($result)) {
	        echo '<a class="rest-cell" href="restaurantMenu.php?ID=' . $row['ID'] . '" style="background-image: url(\'./' . $row['img_path'] . '\')" name="rest' . $row['ID'] . '">' . $row['RName'] . "</a>";	            	            	    	            			            
	    }

	}

	public function displayNavbarMsg() {
		$db = new Database();
		$db->select("customers","customers.FName, customers.LName","customers.ID = '" . $_SESSION['user_id'] . "'");
            $result = $db->sql;
            $row = mysqli_fetch_assoc($result);
			echo var_dump($row);
            echo '<a>Hungry, ' . $row['FName'] . ' ' . $row['LName'] . '?<a>';
	}
}
?>