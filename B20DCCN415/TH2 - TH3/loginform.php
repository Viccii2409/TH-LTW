<?php
@include 'config.php';
if(isset($_POST['submit'])){
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        header('location:moviepage.php');
    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Sign in Page</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div class="logo">
        <img src="logo.png" alt="">
    </div>

    <form action='' method='post' class="container">
        <h1>Đăng nhập</h1>
        <div class="form">
            <input type="email" name='email'placeholder="Email or phone number">
            <input type="password" 
            name='password'placeholder="Password">
            <input type="submit" name='submit' value="Sign In">
             
            
        </div>
        <div class="content">
            <h2>New to Netflix? <a href="#">Sign up now.</a> </h2> <br>
            <h2>This page is protected by Google reCAPTCHA to ensure you're not a bot. Learn more.</h2>
        </div>
    </form>
</body>
</html>