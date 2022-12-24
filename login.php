<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
   

    $select = " SELECT * FROM register WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $email;
        header('location: home.php');
         }else{
            $error[] = 'Incorrect email/password!';
         }
        };
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Promised Neverland: Login</title>
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
            <h1>Login now!</h1>
          <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <label><b>Email Address</b></label>
            <input type="email" name="email" required placeholder="username@site.com">
            <label><b>Password</b></label>
            <input type="password" name="password" required placeholder="enter password">
            <input type="submit" name="submit" value="Login now" class="form-btn">
            <p>Don't have an account?<a href="Register.php">Register here</a></p>
</form>
    </div>
    <script>
  function openNav(){
    document.getElementById("mySidenav").style.width = "250px";
  }
  function closeNav(){
    document.getElementById("mySidenav").style.width = "0";
  }
</script>
</body>
</html>