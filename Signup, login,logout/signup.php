<?php

$success=0;
$user=0;

if ($_SERVER['REQUEST_METHOD']=='POST'){

include 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from `registration` where username='$username'"; 

$result=mysqli_query($con,$sql);

if($result){

    $num=mysqli_num_rows($result);
    if($num>0){
        // 
        $user=1;
    } else{

        $sql="insert into `registration` (username,password) values('$username','$password')";
        $result=mysqli_query($con,$sql);

        if ($result){
            // echo"Signup Successful";
            $success=1;

        } else{

            die(mysqli_error($con));
        }

        }


    }
}





?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if($user){
echo'<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Error</h4>
  <p>User Alredy exist</p>
</div>';
}


?>

<?php


if($success){
echo'<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Success</h4>
  <p>You are successfully signup</p>
</div>';
}

?>
    <div class="register-box">
        <h2>Register</h2>
        <form action="signup.php" method="post">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
