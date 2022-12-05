<?php
  include '../includes/SignupDriver.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="../css/stylesheet.css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="background-driv">
        <div class="blur2">

        </div>
        <div class="blur">


            <div style="text-align:center" class="container-reg">
                <form action="../includes/SignupDriver.inc.php" method="post" id='login-form' class="login-form">
                    <h1>Register Here</h1>
                    <input type="text" placeholder="Enter your First Name" id="FName" name="FName" required
                        autocomplete="off"></br>
                    <input type="text" placeholder="Enter your Last Name" id="LName" name="LName" required
                        autocomplete="off"></br>
                    <input type="password" placeholder="Create a password" id="pwd" name="pwd" required
                        autocomplete="off"></br>
                    <input type="password" id="confirm-pwd" name="confirm_pwd" value=""
                        placeholder="Confirm your password" autocomplete="off" required></br>
                    <input id="phone" type="tel" name="phone" placeholder="Enter your phone number" required></br>
                    <button type="submituser" name="submituser" id="login-form-submit">Create Account</button>
                    <p>Have an account? <span onclick="location.href='DriverLogin.php'">Login Here!</span></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>