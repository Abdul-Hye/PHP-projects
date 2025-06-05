<?php
// $login = 0;
// $invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `registration` WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // $login = 1;
            session_start();
            $_SESSION['username'] = $username;
            header('Location: home.php');
            exit();
        } else {
            echo 'Invalid data';
        }
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="register-box">
        <h2>Log in to our website</h2>
        <form action="login.php" method="post">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
