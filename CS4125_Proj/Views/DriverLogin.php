<!DOCTYPE html>
<?php
  session_start();
  include '../includes/loginDriver.inc.php';
?>

<html>

<head>
    <link type="text/css" rel="stylesheet" href="../css/stylesheet.css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>


</style>

<body>
    <div class="background-driv">
        <div class="blur2">
        </div>
        <div class="blur">
            <div style="text-align:center" class="container-login">
                <form method="post" action="../includes/loginDriver.inc.php" id='login-form' class="login-form">
                    <h1>Login</h1>
                    <input type="tel" placeholder="Phone Number" id="phone" name="phone"></br>
                    <input type="password" placeholder="Password" id="pwd" name="pwd"></br>
                    <input type="submit" value="Login" id="login-form-submit" name="submit">
                    <p>Need an account? <span onclick="location.href='RegisterDriver.php'">Sign Up</span></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>