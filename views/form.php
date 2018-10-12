<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>helo</title>
	
	<style type="text/css">
	body {
	
	
    background-color:powderblue;
	color: black;
	font-size:25px;
	margin: 25px;
	padding: 10px;

	}
	h6{
	text-align:right;
	}
	h5{
	text-align:left;
	}

	</style>
</head>
<body>
 <a href="index"><h6>go to home page</h6></a>
  <a href="shru"><h5>Login</h5></a>
	<form action="" method='post'>
   
	
<fieldset >
<legend>Register</legend>

<label for='name' >Your Full Name*: </label><br>
<input type='text' name='name' id='name' maxlength="50" required /><br>
<label for='email' >Email Address*:</label><br>
<input type='text' name='email' id='email' maxlength="50" required/><br> 
<label for='gender' >Gender*:</label>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other<br>
<label for='password' >Password*:</label><br>
<input type='password' name='password' id='password' maxlength="50" required/><br>
<label for='password' >Confirm_Password*:</label><br>
<input type='password' name='confirm_password' id='password' maxlength="50" /><br>
<br>
<input type='submit' name='Submit' value='Submit' /><br>

</fieldset>
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","shruthi");
if(mysqli_connect_errno()){
	echo "failed".mysqli_connect_error();
}
else{
	if (isset($_POST["Submit"])) {
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		if($password==$confirm_password)
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$password =$_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			
	$disp="insert into formsub(name,email,gender,password) values('$name','$email','$gender','$password')";
	$query=mysqli_query($con,$disp);

	
	   echo '<br>'."Entered name:".$name.'<br>';
	   echo '<br>'."Entered email:".$email.'<br>';
	   echo '<br>'."gender:".$gender.'<br>';


		}
		else 
		{
			echo "password didnot match.'<br>'";
		}
	}
	//header("Location: logs.php");

 }


?>
