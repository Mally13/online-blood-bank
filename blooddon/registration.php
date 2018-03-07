<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
  <link rel="stylesheet" href="register.css">

</head>
<body> 
<header>
</header>
<section> 
<div class="container">
<div class="registration_form">
<h1>Register</h1>
<form method="post" action="run.php">  
<fieldset>
<legend>Login Information</legend>
  First Name:<br> <input type="text" name="fullname" ><br>
  Email Id:<br> <input type="email" name="email" ><br>
  Password:<br><input type="password" name="password"><br><br>
</fieldset>
<fieldset>
  <legend> Donor Information</legend>
  Date of Birth:<input type="date" name= "DOB" style="float:left;"><br><br>
  Blood Group:
  <select name="bloodgroups">
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="O-">O-</option>
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="O+">O+</option>
  <option value="AB-">AB-</option>
  <option value="AB+">AB+</option>
  </select><br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male<br><br>
  Weight(Kg):<br><input type= "text" name="weight"><br><br>
</fieldset>
<fieldset>
  <legend> Contact Information</legend>
  Address: <input type= "textarea" name="address"><br><br>
  County:  <select name="county">
  <option value="mombasa">Mombasa</option>
  <option value="kwale">Kwale</option>
  <option value="kilifi">Kilifi</option>
  <option value="tanariver">Tana River</option>
  <option value="lamu">Lamu</option>
  <option value="taitataveta">Taita Taveta</option>
  <option value="garissa">Garissa</option>
  <option value="wajir">Wajir</option>
  <option value="9">Mandera</option>
  <option value="10">Marsabit</option>
  <option value="11">Isiolo</option>
  <option value="12">Meru</option>
  <option value="13">Tharaka Nithi</option>
  <option value="14">Embu</option>
  <option value="15">Kitui</option>
  <option value="16">Machakos</option>
  <option value="17">Makueni</option>
  <option value="18">Nyandarua</option>
  <option value="19">Nyeri</option>
  <option value="20">Kirinyaga</option>
  <option value="21">Murang'a</option>
  <option value="22">Kiambu</option>
  <option value="23">Turkana</option>
  <option value="24">West Pokot</option>
  <option value="25">S</option>
  <option value="26">Kwale</option>
  <option value="27">Kilifi</option>
  <option value="28">Tana River</option>
  <option value="29">Lamu</option>
  <option value="30">Taita Taveta</option>
  <option value="31">Garissa</option>
  <option value="32">Wajir</option>
  <option value="33">Mombasa</option>
  <option value="34">Kwale</option>
  <option value="35">Kilifi</option>
  <option value="36">Tana River</option>
  <option value="37">Lamu</option>
  <option value="38">Taita Taveta</option>
  <option value="39">Garissa</option>
  <option value="40">Wajir</option>
  <option value="41">Mombasa</option>
  <option value="42">Kwale</option>
  <option value="43">Kilifi</option>
  <option value="44">Tana River</option>
  <option value="45">Lamu</option>
  <option value="46">Taita Taveta</option>
  <option value="47">Garissa</option>
  </select><br><br>
  Mobile No. :<input type="text" name="mobileno"><br><br>
</fieldset>
<button type="submit" name="submit">Sign up</button>
  </center>
</form>
</div>
</section>
<center>
<?php
    include_once 'footer.php';
?> 
</center>
</body>
</html>