<?php

session_start();
?>

<! DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<header>  
<ul>
<li><a href="home.php">HOME</a></li>
<li><a href="houses.php">All Houses</a></li>
<li><a href="categories.php">Categories</a></li>
<li><a href="login.php">Log in</a></li>
<li><a href="signup.php">Sign up</a></li>
</ul>
</header>	
	    <section>
		    <div class="container">
			    <div class="form_content">
				    <h2>Home quotes</h2>
					<p>Home is where the heart can laugh without shyness. Home is where the heart's tears can dry at their own pace.</p>
					 <a href="#">Read More</a>
					</div>
					<?php
					if (isset($_SESSION['u_id'])) {

					}

					?>
				
			    <div class="login_form">
			         <h1>Log In</h1>
			         <form action="includes/login.inc.php" method="POST">
			              <input type="text" name="uid" required="" placeholder="Username/Email">
			              <input type="password" name="pwd" required="" placeholder="Password">
				          <button type="submit" name="submit">Log in</button>
				      </form>
				      <a href="signup.php">Sign Up</a>
				</div>
			</div>
		</section>
<?php
    include_once 'footer.php';
?> 	
</body>
</html>
 