<?php
    session_start();

    if (!isset($_SESSION['loggedin'])) {
        header('Location: login.php');
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamer Suggests</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container"></div>
        <div class="wrapper">
                <div class="title">
                    <span class="left-title">Gamer</span>
                    <span class="right-title">Suggests</span>
                </div>
                <ul class="navigation">
                    <li class="parent"><a class="link" href="index.php">Home</a></li>
                    <li class="parent"><a class="link" href="all.php">All Games</a></li>
                    <li class="parent"><a class="link" href="about.php">About</a></li>
                </ul>
            <div class="right-nav">
                <div class="username-picture">
                    <div><?=$_SESSION['name']?> <img src="images/Portrair_Placeholder.jpg" width="40" height="40"></div>                   
                </div>
            </div>
        </div>  
        <div class="logsign">
            <p class="login_page"><a class="link" href="login.php">Login</a></p>
            <p class="signup_page"><a class="link" href="signup.html">Sign Up</a></p>
            <p class="logout"><a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></p>
        </div>
</body>
</html>
 