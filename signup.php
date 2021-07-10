<?php
	
	include("classes/connect.php");
	include("classes/signup.php");

	$first_name = "";
	$last_name = "";
	$gender = "";
	$email = "";
	$phone = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{

		$signup = new Signup();
		$result = $signup->evaluate($_POST);

		if($result != "")
		{
		   echo "<div style= 'text-align:center;font-size:12px;color:white;background-color:grey;'>";
		   echo "<br>The following error occured<br><br>";
		   echo $result;
		   echo "</div>";
		}else
		{

			header("Location: login.php");
			die;
		}

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

	}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIGN UP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width,initial-scale=1.0">
	<script src="blue.js"></script>
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
		border-radius: 6px;
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
		position: relative;
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
	select
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



</style>
<body>
	<div style="justify-content: center;margin-left: 30%;">
	<div style="background-color: white;width: 70%; border-radius: 18px;">
	<form method="post" action="">
	<h1>SIGN UP</h1>
	<div class="icon">
		<img src="images/user.png">
	</div>
	<div class="formcontainer">
		<div class="container">
			<label for="uname"><strong>First name</strong></label>
			<input value="<?php echo $first_name ?>" class="input" type="text" placeholder="Enter First name" name="first_name" required>
			<label for="uname"><strong>Last name</strong></label>
			<input value="<?php echo $last_name ?>" class="input" type="text" placeholder="Enter Last name" name="last_name" required><br><br>
			<label  for="gender"style="font-weight: normal;">Gender:</label><br>
			<select value="<?php echo $gender ?> "id="text" name="gender">
				<option></option>
				<option>Male</option>
				<option>Female</option>
			</select>
		  	<br><br>
			<label for="mail"><strong>E-mail</strong></label>
			<input value="<?php echo $email ?>" class="input"type="email" placeholder="Enter E-mail" name="email" required>
			<label for="phone"><strong>Phone number</strong></label>
			<input value="<?php echo $phone ?>" class="input"type="phone" placeholder="Enter phone number" name="phone" required>
			<label for="psw"><strong>Password</strong></label>
			<input class="input"type="password" placeholder="Enter Password" name="password" required>
			<label for="psw"><strong>Confirm Password</strong></label>
			<input class="input"type="password" placeholder="Confirm Password" name="password" required>
		</div>
		<button type="submit" ><strong> SIGN UP</strong></button>
	</div>
</form>
</div>
</div>
</body>
</html>