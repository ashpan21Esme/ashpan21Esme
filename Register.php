<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['confirm']);

    $select = " SELECT * FROM register WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exists!';   
    }else{
        if($pass != $cpass){
            $error[] = 'Passwords do not match!';
        } else{
            $insert = "INSERT INTO register(name, email, password) VALUES('$name', '$email', '$pass')";
            mysqli_query($conn, $insert);
            header('location: login.php');
        }
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Promised Neverland: Registration</title>
    <!--css file-->
    <link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="styles.css" />
</head>
<body>
            
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="active" href="Home.php">Home</a>
  <a href="Register.php">Sign Up</a>
  <a href="login.php">Log In</a>
  <a href="character.php">Main Characters</a>
  <a href="faq.php">FAQs</a>
  <a href="logout.php">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <div class="form-container">
        <form action="" method="post">
            <h1>Register now!</h1>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <label><b>Name</b></label>
            <input type="text" name="name" required placeholder="First Last Name">
            <label><b>Email Address</b></label>
            <input type="email" name="email" required placeholder="username@site.com">
            <label><b>Password</b></label>
            <input type="password" name="password" required placeholder="enter password">
            <label><b>Confirm Password</b></label>
            <input type="password" name="confirm" required placeholder="confirm password">
            <input type="submit" name="submit" value="Sign up now" class="form-btn">
</form>
<script>
  function openNav(){
    document.getElementById("mySidenav").style.width = "250px";
  }
  function closeNav(){
    document.getElementById("mySidenav").style.width = "0";
  }
</script>
    </div>
</body>
</html>