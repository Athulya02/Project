<?php
session_start();
include '../../database.php';
if (isset($_POST['submit'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'pswrd', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * FROM StudentTable";
    $result = mysqli_query($connection, $sql);
    $log = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($log as $item) {

        if ($username == $item['user_id'] && md5($password) == $item['password']) {

            # create a session
            $_SESSION['user_id'] = $username;
            header('Location:/RMSupdate/Student/dashboard/dashboard.php');
        } else {
            $flag = 1;
        }
    }
    if ($flag == 1) {
        echo '<p style="color:red;">Invalid login</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>SRMS</title>
</head>


<body>
    <h1>Student Result Management System</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <h3>Sign in</h3>
            <p>Sign in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Username -->
            <label for="username">Username</label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <br><br>

            <!-- Password -->
            <label for="pswrd">Password</label>
            <input type="password" placeholder="Enter Password" name="pswrd" required>

            <br>
            <div class="subcontainer">
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Show password
                </label>
                <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
            </div>
            <!-- Sign up link -->
            <p class="register">Not a member? <a href="../Student/SignUp.php">create account!</a></p>
            <button type="submit" name="submit" value="submit">Login as Student</button>
        </div>
        



    </form>

    <!--Have to remove this-->
    <a href="..\..\Student\dashboard\dashboard.php">
        <p class="text-white text-center">click here!</p>
    </a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>