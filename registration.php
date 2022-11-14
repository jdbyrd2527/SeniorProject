<?php 
    include('server.php')
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
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
                            <div><?
							if (!isset($_SESSION['loggedin'])) {
								echo $_SESSION['name']
							}
							else {
								echo '';?><img src="images/Portrair_Placeholder.jpg" width="40" height="40"></div>                   
                        </div>
                    </div>
                </div> 
            <div class="login">
			    <h1>Register</h1>
                <?php include('errors.php'); ?>
			    <form action="registration.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password1" placeholder="Password" id="password" required>
                <label for="password">
					<i class="fas fa-lock"></i>
				</label>
                <input type="password" name="password2" placeholder="Confirm Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
                <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>" id="email" required>
				<input type="submit" name="user">
                <a class="link" href="login.php">Already a member? Login</a>
			</form>
		</div>
	</body>
</html