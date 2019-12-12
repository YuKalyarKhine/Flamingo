<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="framepage.css" />
	<title>Register</title>
	<style type="text/css">
		#message {
			color:#f00;
		}
	</style>

     <script>
		    function check() {
		  //Store the password field objects into variables ...
		  var pass1 = document.getElementById('pass1');
	      var pass2 = document.getElementById('pass2');
	      //Store the Confimation Message Object ...
	      var message = document.getElementById('confirmMessage');
	      //Set the colors we will be using ...
	      var goodColor ="#fff";
	      var badColor = "#ff6666";
	      //Compare the values in the password field
	      //and the confirmation field
	      if(pass1.value == pass2.value){
          //The passwords match.
          //Set the color to the good color and inform
          //the user that they have entered the correct password
          pass2.style.backgroundColor = goodColor;
          message.style.color = goodColor;
          message.innerHTML = "Passwords Match!"
      }else{
          //The passwords do not match.
          //Set the color to the bad color and
          //notify the user.
          pass2.style.backgroundColor = badColor;
          message.style.color = badColor;
          message.innerHTML = "Passwords Do Not Match!"
      }
		}
    </script>
</head>
<body>
   		 <div style="margin: 0 auto; width:420px;height:550px;">
    
    	<table style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, transparent 100%) repeat scroll 0% 0% transparent;" class="tr" frame="border" align="center">
		<form action="registerdb.php" method="post">
		<tr>
		<td>Username: </td>
		<td><input type="text" name="username" onKeyPress="return noNumbers(event)" placeholder="Enter your username here" required></td>
		</tr>
        <tr></tr>
        <tr>
        <td>Password: </td>
        <td><input type="password" id="pass1" name="password"  placeholder="Enter your password here"required/><td>
        </tr>
      	<tr></tr>
        <td>Confirm Password:</td>
        <td><input type="password"  id="pass2" name="confirm_password" onchange="check()" placeholder="Enter your password here again"required/><td>
        </tr>
  		<tr></tr>
  		<tr class="cpw">
  		<td></td>
  		<td id="confirmMessage" class="confirmMessage"></td>
  		</tr>
        <tr>
		<td>Gender:	</td>	
		<td><input type="radio" name="gender"  value="Male" required>
		<label for="male" >Male</label>
		<input type="radio" name="gender"  value="Female" required>
		<label for="female">Female</label></td>
		</tr>
        <tr></tr>
        <tr>
		<td>Country:</td>
		<td><input type="text" name="country" onKeyPress="return noNumbers(event)" placeholder="Enter your country here" required></td>
		</tr>
        <tr></tr>
		<tr>
		<td>Phone Number: </td>
		<td><input type="text" name="phno" onKeyPress="return noChar(event)" placeholder="Enter your phno here" required></td>
		</tr>
        <tr></tr>
		<tr>
		<td>Email:</td>
		<td><input type="email" name="email" placeholder="youremail@email.com" required/></td>
		</tr>
        <tr></tr>
        <tr>
		<td>Address:</td>
		<td><textarea name="address"required></textarea></td>
		</tr>
        <tr></tr>
        <tr>
        <td colspan="2" style="width:50%;text-align:center;"><input type="submit" value="REGISTER">
        				<input type="reset" value="CLEAR"></td>
		</tr>
		 
	</form>
	</table>
    </div><hr>
    </body>
    </html>