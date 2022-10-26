<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gamer Suggests</title>
    <link rel="stylesheet" href="styles.css">
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
                    <div><?php
							if (isset($_SESSION['loggedin']) ?? null) {
								echo $_SESSION['name'];
                            }
							else {
								echo '<a class="link" href="login.php">Login to view</a>';
                            };
                        ?> <img src="images/Portrair_Placeholder.jpg" width="40" height="40"></div>                   
                </div>
            </div>
        </div>      
        <p class="logout"><a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></p>
        
</body>
</html>