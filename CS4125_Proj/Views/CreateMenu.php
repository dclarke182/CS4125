<?php
  include '../includes/CreateMenu.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/stylesheet.css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="background-res">
        <div class="container">
            <br />
            <br />
            <h2 align="center">Create your Menu</h2>
            <div class="form-group">
                <form name="add_name" id="add_name">
                    <div align="center" class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><input type="text" name="name[]" placeholder="Enter Menu Item"
                                        class="form-control name_list" /></td>
                                <td><input type="number" name="price[]" placeholder="Enter Item Price"
                                        class="form-control name_list" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                </td>
                            </tr>
                        </table>
                        <input type="button" name="submitMenu" id="submitMenu" class="submitMenu" value="Save Menu" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>