<?php

class EditRestMenu extends Database {
    
    public function displayRestaurantName($restID) {
        $db = new database();
        $db->select("restaurants","restaurants.RName","restaurants.ID = " . $restID);
        $result = $db->sql;
        $row = array();
        $row = mysqli_fetch_assoc($result);
        echo $row['RName'];
    }

    public function displayRestaurantAddress($restID) {
        $db = new database();
        $db->select("restaurants","restaurants.address_line_1, restaurants.address_line_2, restaurants.address_line_3, restaurants.zipcode","restaurants.ID = " . $restID);
        $result = $db->sql;
        $row = mysqli_fetch_assoc($result);
        echo $row['address_line_1'] . ", " . $row['address_line_2'] . ", " . $row['address_line_3'] . ", " . $row['zipcode'];
    }

    public function displayMenu($menuID) {
        $db = new database();
        $db->select("menu_category", "menu_category.name, menu_category.ID", "menu_category.menu_id = " . $menuID );
            $result = $db->sql;
              while($row = mysqli_fetch_assoc($result)) {
                echo '<div><h2>'. $row['name'] .'</h2></div>';
                echo '<div class="grid-div">';
                
                $db->select("menu_line", "menu_line.foodName, menu_line.menu_id, menu_line.line_no, menu_line.price, menu_line.line_id", "menu_line.menu_id = " . $menuID . " AND menu_line.cat_id = " . $row['ID'] );
                $result2 = $db->sql;
                while($row2 = mysqli_fetch_assoc($result2)) {
                    echo '<div class="grid-cell">';
                    echo "<form action='../includes/EditRestMenu.inc.php' method='post' id='edit-menu-form' class='edit-menu-form'>";
                    echo "<input type='hidden' value='" . $row2["line_id"] . "'id='line_id' name='line_id'></br>";
                    echo "<input type='hidden' value='" . $row2["menu_id"] . "'id='menu_id' name='menu_id'></br>";
                    echo "<input type='hidden' value='" . $row2["line_no"] . "'id='line_no' name='line_no'></br>";
                    echo "<input type='text' value='".$row2["foodName"]."' id='foodName' name='foodName'>";
                    echo "<input type='number' value='" .$row2["price"] ."' id='price' name='price'>";
                    
                    
                    echo '</div>';
                }
                echo '</div>';
              }
              echo "<button type='submit' id='edit-menu-submit' name='edit-menu-submit'>Save Menu Changes</button>";
              echo "</form>";
    }

    public function getMenuID() {
        $db = new database();
        $db->select("restaurants", "restaurants.menu_id", "restaurants.ID = " . $_GET['ID']);
        $result = $db->sql;
        $row = mysqli_fetch_assoc($result);
        return $row['menu_id'];
    }

    public function getRestaurantPic() {
        $db = new database();
        $db->select("restaurants", "restaurants.img_path", "restaurants.ID = " . $_GET['ID']);
        $result = $db->sql;
        $row = mysqli_fetch_assoc($result);
        echo $row['img_path'];
    }

    public function displayProfileform($menuID){
        $db = new database();
        $db->select("restaurants", "restaurants.ID, restaurants.RName, restaurants.Pass, restaurants.address_line_1, restaurants.address_line_2, restaurants.address_line_3, restaurants.zipcode, restaurants.PhoneNumber, restaurants.img_path", "restaurants.menu_id = " . $menuID );
        $result = $db->sql;
        while($row = mysqli_fetch_assoc($result)) {
            echo "<form action='../includes/EditRestMenu.inc.php' method='post' id='edit-form' class='edit-form'>";
            echo "<h1>Edit Info</h1>";
            echo "<input type='hidden' value='" . $row["ID"] . "'id='restID' name='restID'></br>";
            echo "<label for='restName'>Restaurant Name:</label>";
            echo "<input type='text' value='" . $row["RName"] . "' id='restName' name='restName'></br>";
            echo "<label for='pwd'>Password: </label>";
            echo "<input type='password' value='" . $row["Pass"] . "' id='pwd' name='pwd'></br>";
            echo "<label for='address1'>Address Line 1: </label>";
            echo "<input type='text' value='" . $row["address_line_1"] . "' id='address1' name='address1'></br>";
            echo "<label for='address2'>Address Line 2: </label>";
            echo "<input type='text' value='" . $row["address_line_2"] . "' id='address2' name='address2'></br>";
            echo "<label for='address3'>Address Line 3: </label>";
            echo "<input type='text' value='" . $row["address_line_3"] . "' id='address3' name='address3'></br>";
            echo "<label for='zipcode'>Zipcode: </label>";
            echo "<input type='text' value='" . $row["zipcode"] . "' id='zipcode' name='zipcode'></br>";
            echo "<label for='number'>Phone Number: </label>";
            echo "<input type='text' value='" . $row["PhoneNumber"] . "' id='number' name='number'></br>";
            echo "<input type='submit' value='Save Changes' id='edit-form-submit' name='edit-form-submit'>";
        }
    }
    
    public function updateRestaurantInfo($formValues, $restID){
        $this->formValues = $formValues;
        $this->restID = $restID;
        $db = new database();
        $db->update('restaurants', $formValues, "restaurants.ID =" . $restID);
    }

    public function updateRestaurantMenu($formValues, $line_no){
        $this->formValues = $formValues;
        $this->line_no = $line_no;
        $db = new database();
        $db->update('menu_line', $formValues, "menu_line.line_id =" . $line_no);
    }
}
?>