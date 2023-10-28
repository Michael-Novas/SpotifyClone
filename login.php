<?php

session_start();

include('database_conn.php');
$msg = false;

if (isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from users where name = '".$user_name."' AND password = '".$user_password."' limit 1";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        header("Location: welcome.php");
    } else {
        $msg = "Incorrect Password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form action="#" method="POST">
                    <h3>Sign In</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your Name" autocomplete="off">
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter a Password" autocomplete="off">
                    </div>
                    <input type="submit" value="Sign In" class="submit">
                    <div class="check">
                        <input type="checkbox"> <span>Remember Me.</span>
                    </div>
                    <p>Don't Have an Account? <a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="img/loginimg.jpg" alt="">
            <?php
            if ($msg) {
                echo('<h3>'.$msg.'</h3>');
            }
            ?>
        </div>
    </header>

    
</body>

</html>