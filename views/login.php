<html>
<body>
<style type="text/css">
	body {
		background-color:powderblue;
	color: black;
	font-size:25px;
	margin: 25px;
	padding: 10px;

	}

	</style>

<form action="" method='post'>
    <a href="index"><h6>go to home page</h6></a>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/><br>
<label for='email' >Email*:</label><br>
<input type='text' name='email' id='email' maxlength="50" required/><br> 
<label for='name' >Password*: </label><br>
<input type='password' name='password' id='password' maxlength="50" required/><br>
<br>
<input type='submit' name='Login' value='Login' /><br>
</fieldset>
</form>
</body>
</html>
 <?php 
 $con=mysqli_connect("localhost","root","","shruthi");
 if (isset($_POST["Login"]) ){
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $rec ="select * from formsub where email='$email' and password='$password'";
	 $querys=mysqli_query($con,$rec);
	 if($result=mysqli_fetch_array($querys,MYSQLI_ASSOC))
	 {
		 //echo "login successfully";
		 header('Location:wel');
	 }
	 else
	 {
		 echo "incorrect email or password";
	 }
 }
 ?>
 
