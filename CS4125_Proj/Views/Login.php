<!DOCTYPE html>
<?php
  include '../Models/Database.php';
  include '../includes/loginUser.inc.php';
?>

<html>

<head>
    <link type="text/css" rel="stylesheet" href="../css/stylesheet.css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>


</style>

<body>
    <div class="background">
        <div class="blur2">
        </div>
        <div class="blur">
            <div style="text-align:center" class="container-login">
                <form method="post" action="../includes/loginUser.inc.php" id='login-form' class="login-form">
                    <h1>Login</h1>
                    <input type="text" placeholder="Email" id="email" name="email"></br>
                    <input type="password" placeholder="Password" id="pwd" name="pwd"></br>
                    <input type="submit" value="Login" id="login-form-submit" name="submit">
                    <p>Need an account? <span onclick="location.href='RegisterUser.php'">Sign Up</span></p>
                    <p>Are you a restaurant? <span onclick="location.href='RestaurantLogin.php'">Click here!</span></p>
                    <p>Are you a driver? <span onclick="location.href='DriverLogin.php'">Click here!</span></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>