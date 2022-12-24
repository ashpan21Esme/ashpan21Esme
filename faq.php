<?php
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="styles.css" >
    <title>Frequently Asked Questions</title>
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
    <div class="container">
        <form action="" method="post">
                <h1>Any questions? Please fill out this form.</h1>
            <div class="form">
                <div class="input-field">
                <label>Name</label>
                    <input type="text" name="name" class="input" required>
                </div>
                <div class="input-field">
                <label>Email</label>
                            <input type="email" name="email" class="input" required>
                </div>
                <div class="input-field">
                <label>Select Questions</label>
                <div class="custom-select">
                    <select name="question" required>
                        <option value=""></option>
                <option value = "Where can I read the manga?">"Where can I read the manga?"</option>
    <option value = "Are there free online versions of the magna?">"Are there free online versions of the magna?"</option>
</select>
                </div>
                </div>
                <div class="input-field">
                <label>Questions</label>
<textarea name = "comment" rows = "5" cols = "40" required></textarea>
</div>
                </div>
            </div>
            <div class="input-field">
            <input type="submit" name="submit" value="Send" class="btn">
            </div>
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

<?php
if($_POST['submit']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    $comment = $_POST['comment']; 
$query = "INSERT INTO faq VALUES('$name', '$email', '$question', '$comment')";
$data = mysqli_query($conn, $query);
if($data){
    echo "Data inserted";
} else{
    echo "failed";
}
  };
?>