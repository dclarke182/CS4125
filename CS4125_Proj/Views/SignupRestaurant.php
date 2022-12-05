<?php
  include '../includes/Signup.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/stylesheet.css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="background-res">
        <div class="blur2">

        </div>
        <div class="blur">
            <div style="text-align:center" class="container-reg-r">
                <form action="../includes/Signup.inc.php" method="post" id='login-form' class="login-form">
                    <h1>Register Here</h1>
                    <input type="text" placeholder="Establishment name" id="restName" name="restName" required></br>
                    <input type="password" placeholder="Create a password" id="pwd" name="pwd" required
                        autocomplete="off"></br>
                    <input type="password" id="confirm-pwd" name="confirm_pwd" value=""
                        placeholder="Confirm your password" autocomplete="off" required></br>
                    <input id="phone" type="tel" name="phone" placeholder="Enter your phone number" required></br>
                    <input type="text" placeholder="Address Line 1" id="address1" name="address1" required></br>
                    <input type="text" placeholder="Address Line 2" id="address2" name="address2" required></br>
                    <input type="text" placeholder="Address Line 3" id="address3" name="address3" required></br>
                    <input type="text" placeholder="Establishment Zipcode" id="zipcode" name="zipcode" required></br>
                    <input type="text" placeholder="Establishment city" id="restCity" name="restCity" required></br>
                    <button type="submitRestaurant" name="submitRestaurant" id="register">Create Account</button>
                    <p>Have an account? <span onclick="location.href='restaurantlogin.php'">Login Here!</span></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>