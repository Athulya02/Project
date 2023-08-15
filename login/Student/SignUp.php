<?php
     '../../../../html/RMS/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="loginpage.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>SRMS</title>
</head>
<body>
<h1>SRMS</h1>    
    <form action="../../login/Student/createUser.php" method="post">
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <h3>Create Account</h3>
            <p>Sign in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Username -->
            <label for="username">Your username</label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br><br>

            <!-- Password -->
            <label for="pswrd">Your password</label>
            <input type="password" placeholder="Enter Password" name="pswrd" required>

            <br>
            <div class="subcontainer">
                <label>
                <input type="checkbox" checked="checked" name="remember"> show password
            </label>
            <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
        </div>
            </div>

            <!-- Submit button -->
             <button type="submit" name = "submit" value = "submit">Sign Up For Student</button>

            <!-- Sign up link -->
            <p class="register">Are you a member?  <a href="../Student/login.php">sign in!</a></p>
        </div>

    </form>
    
</body>
</html>