<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/stylesheet.css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<script defer src="login.js"></script>
<style>


</style>

<body>
    <div class="background-res">
        <div class="blur2">

        </div>
        <div class="blur">
            <div style="text-align:center" class="container-login">
                <form  method="post" action="../includes/restLogin.php" id='login-form' class="login-form">
                    <h1>Restaurant Login</h1>
                    <input type="text" placeholder="Establishment email" id="email" name="email"></br>
                    <input type="password" placeholder="Password" id="pwd" name="pwd"></br>
                    <input type="submit" value="Login" id="login-form-submit">
                    <p>Need an account? <span onclick="location.href='RegisterRestaurant.php'">Sign Up</span></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>