<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 <title>The Promised Neverland</title>
</head>
<body>
    <div class="container">
            <div class="alert alert-success alert-dismissible fade show">
                <button type ="button" class="close" data-dismiss="alert"&times;</button>
            <h1>Welcome, <span><?php echo $_SESSION['email'];?></span></h1>
</div>
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
<div class="container">
<h1>The Promised Neverland Manga</h1>
<p>The promised neverland is a Japanese manga written and illistrated by Kaiu Shirai and Posuka Demizu.
In the year 2045, there is an orphanage where 38 children reside. Although there is no blood-relation, they veiw themselves, along with their caretaker "Mama" Isabella, as family. From the moment they are born, the children are raised, loved, and taught. Life there is perfect. Between the ages of six and twelve, the children are adopted...or are they? On one fateful night, two children learn the horrible truth about what really happened to their siblings, Mama isn't who she claims to be. Join the adventure, as the children face loss, betrayel, friendship, reunite, and struggle to escape. Will they ever be free? </p>
<script>
  function openNav(){
    document.getElementById("mySidenav").style.width = "250px";
  }
  function closeNav(){
    document.getElementById("mySidenav").style.width = "0";
  }
</script>

<img src="https://i.cdn.turner.com/adultswim/big/image-upload/thumbnails/thumb-2_image-15530117200104.jpg" width="30%" height="50%"><img src="https://i.pinimg.com/originals/e6/83/58/e6835814cd3991be5fba3638c20e1956.jpg" width="30%" height="50%">

<iframe width="560" height="315" src="https://www.youtube.com/embed/WzP-PtGQkM8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

</body>
</html>