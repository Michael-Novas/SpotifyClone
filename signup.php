<?php

session_start();

include('database_conn.php');
$msg = false;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];

    if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
        if ($user_password === $user_re_password) {
            $query = "insert into users (name, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
            mysqli_query($con, $query);
            header("Location: login.php"); 
        }
        
        else {
            $msg = "Password Doesn't Match";
        }
        
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
    <title>Sign Up</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form action="#" method="POST">
                    <h3>Sign Up</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your Name" autocomplete="off">
                    </div>
                    <div class="card">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" placeholder="Enter Your Email" autocomplete="off">
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter a Password" autocomplete="off">
                    </div>
                    <div class="card">
                        <label for="re-password">Re-Password</label>
                        <input type="password" name="user_re_password" placeholder="Confirm Password" autocomplete="off">
                    </div>
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox"> <span>Remember Me.</span>
                    </div>
                    <p>You Have an Account? <a href="login.php">Login</a></p>
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
                
            