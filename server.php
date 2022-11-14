<?php 
session_start();

$username = "";
$email = "";
$errors = array();

$DB = mysqli_connect('localhost', 'root', 'hk4HE.J]bwUmDfBe', 'vidgames');

if (isset($_POST['user'])) {
    $username = mysqli_real_escape_string($DB, $_POST['username']);
    $email = mysqli_real_escape_string($DB, $_POST['email']);
    $password1 = mysqli_real_escape_string($DB, $_POST['password1']);
    $password2 = mysqli_real_escape_string($DB, $_POST['password2']);

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password1)) { array_push($errors, "Password is required"); }
    if ($password1 != $password2) { 
        array_push($errors, "The two passwords do not match"); 
    }
}

$usercheck = "SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($DB, $usercheck);
$user = mysqli_fetch_assoc($result);

if ($user) {
    if($user['username'] === $username) {
        array_push($errors, "Username already exists");
    }
    if($user['email'] === $email) {
        array_push($errors, "Email already exists");
    }
}

if (count($errors) == 0){
    $hash = password_hash($password1, PASSWORD_DEFAULT);
    $query = "INSERT INTO login (username, password, email) VALUES ('$username','$hash', '$email')";
    mysqli_query($DB, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
}