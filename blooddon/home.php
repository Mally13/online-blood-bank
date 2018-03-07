<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="homepage.css">
</head>
<body>


                <div class="login_form">

                     <form action="includes/login.inc.php" method="POST">
                          <input type="text" name="uid" required="" placeholder="Username/Email">
                          <input type="password" name="pwd" required="" placeholder="Password">
                          <button type="submit" name="submit">Log in</button>
                          <button><a href="register.php">Register</a></button>
                    </form>
                      
                </div>
<header>
<?php
   include_once 'includes/header.php';
?>
</header>
  


</body>
</html>