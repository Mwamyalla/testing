<?php

session_start();

	include("classes/connect.php");
	include("classes/login.php");

	$email = "";
	$password = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{

		$login = new Login();
		$result = $login->evaluate($_POST);

		if($result != "")
		{
		   echo "<div style= 'text-align:center;font-size:12px;color:white;background-color:grey;'>";
		   echo "<br>The following error occured<br><br>";
		   echo $result;
		   echo "</div>";
		}else
		{

			header("Location: Home.php");
			die;
		}

		$email = $_POST['email'];
		$password = $_POST['password'];


	}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOG IN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width,initial-scale=1.0">
</head>

<style>
	html,body
	{
		background-image: linear-gradient(to right,#c1dc65,#57c566);
		display: flex;
		justify-content: center;
		font-family: tahoma;
		font-size: 15px;
		color: green;
	}
	form
	{
		border:5px solid #f1f1f1;
		box-shadow: 0 0 20px 0 #1c87c9;
	}
	.input
	{
		width: 100%;
		padding: 16px 8px;
		margin: 8px 0;
		display: inline-block;
		border:1px solid #ccc;
		box-sizing: border-box;
		 border-radius: 15px;
		box-shadow: 0 0 20px 0 #1c87c9;
	}
	.icon
	{
		position: center;
		width: 110px;
		height: 110px;
		font-size: 110px;
		display: flex;
		color: #4286f4;
		margin-left: 38%;
	}
	button
	{
		background-color: #4286f4;
		color: white;
		padding: 12px 0;
		margin: 40px;
		border:none;
		cursor: grab;
		width: 48%;
	}
	h1
	{
		text-align: center;
		font-size: 18px;
	}
	button:hover
	{
		opacity: 0.8;
	}
	.formcontainer
	{
		text-align: center;
		margin: 24px 50px 12px;
	}
	.container
	{
		padding: 16px ;
	}
	span .psw
	{
		max-width: 300px;
		float: right;
		padding-top: 0;
		padding-right: 15px;
		display: block;
		float: none;
	}
	a
	{
		color: green;
		text-decoration:none;
	}





</style>
<body>
	<div style="background-color: white;width: 70%; border-radius: 18px;">
	<form method="post">
	<h1>LOG IN</h1>
	<div class="icon">
		<img src="images/user.png">
	</div>
	<div class="formcontainer">
		<div class="container">
			<label for="mail"><strong>E-mail</strong></label>
			<input value="<?php echo $email ?>" class="input"type="email" placeholder="Enter E-mail" name="email" required>
			<label for="psw"><strong>Password</strong></label>
			<input value="<?php echo $password ?>" class="input"type="Password" placeholder="Enter Password" name="password" required>
		</div>
		<button type="submit" value="Login"><strong>LOG IN</strong></button>
		<div class="container" style="background-color: #eee;">
			<label style="padding-left: 15px;">
				<input type="checkbox" chacked="checked" name="remember">Remember me
			</label><br>
			<span><a href="#">Forgot Password?</a></span> | <span><a href="signup.html">Create Account</a></span>
		</div>
		
	</div>
</form>
</div>
</body>
</html>