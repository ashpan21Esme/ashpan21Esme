<html>
  <title>Characters</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="styles.css" />
  <title>Characters</title>
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
<div class="container-fluid">
  <?php

  require 'connect.php';

  $sql = "SELECT * FROM characters";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  ?>
    <table border = '1' align = 'center'>
    <tr>
      <th>Name</th>
      <th>Image</th>
      <th>Description</th>
    </tr>

  <?php

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['description'] . '</td>';
      echo '<td>' .
      '<img src = "data:image/png;base64,' . base64_encode($row['image']) . '" width = "100px" height = "100px"/>';
      echo '<td>';
      echo '</tr>';
  }
  ?>
  </table>
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