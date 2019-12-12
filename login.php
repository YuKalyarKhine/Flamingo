<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="framepage.css" />

</head>
<body>

<table class="tl">
		<form method="post">
		<tr>
		<td>Username:</td>
		<td><input type="text" name="username" placeholder="Enter your username here" required></td>
		</tr>
		<tr>
		<td>Password:</td>
		<td><input type="password" name="pass" placeholder="Enter your password here" required></td>
		</tr>
        <tr></tr>
		<tr>
		<td></td>
		<td>
		<div id="aText" class="alerttxt">Please Enter your username and password correctly</div>
		</td>
		</tr>
        <tr></tr>
		<tr>
		<td></td>
		<td><input type="submit" formaction="loginprocess.php" value="LOGIN">
       		 <input type="reset" value="CLEAR"></td>
		</tr>
		</form>

</table>

<p class="su">If you haven't register plz <a href="register.php">Sign Up</a> first!!</p>
<hr>
	


</body>
</html>