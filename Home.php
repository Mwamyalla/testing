<?php

  session_start();

  include("classes/connect.php");
  include("classes/login.php");
  include("classes/user.php");



  $login = new Login();
  $user_data = $login->check_login($_SESSION['job_userid']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>OUR WEBSITE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width,initial-scale=1.0">
	<link rel="stylesheet"  href="style.css">
	<link rel="stylesheet"  href="https://stackpath.boostrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
	<div id="full-page">
		<div id="navbar">
			<div>
				<img class="logo" src="images/job.png" alt="logo"  width="200px" height="200px"><br>
				<div style="color: white;margin-top: -70px;font-size: 30px;"><strong>JOBS PORTAL</strong></div>
			</div>
			<nav>
			<ul id="menuItems">
				<li><a href="all jobs.html">ALL JOBS</a></li>
				<li><a href="#">GOVT.JOBS</a></li>
				<li><a href="#">PRIVATE JOBS</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><a href="login.html"><button>Log Out</button></a></li>

			</ul>
			</nav>
		</div>
		<div id="banner" style="text-align:center">
			<h1>JOBS AROUND YOU</h1>
		</div>

		<div class="search-jobs"  style="text-align:center">
			<input type="text" class="form-control" placeholder="search keyword">
			<input type="text" class="form-control" placeholder="company">
			<input type="text" class="form-control" placeholder="location">
			<a href="all jobs.html">
			<input type="button" class="btn-primary" value="Find jobs">
			</a>
		</div>
		<section id="recruiters">
			<div class="container" style="text-align:center">
				<h2>TOP RECRUITERS</h2>
				<div>
					<img src="images/vodacom.png" alt="loading">
					<img src="images/tigo.png" alt="loading">
					<img src="images/airtel.png" alt="loading">
					<img src="images/halotel.png" alt="loading">
					<img src="images/huawei.png" alt="loading">
					<img src="images/GSM.png" alt="loading">
					<img src="images/TBL.png" alt="loading">
				</div>				
				<div>
					<img src="images/BOT.png" alt="loading">
					<img src="images/kk.png" alt="loading">
					<img src="images/tpa.png" alt="loading">
					<img src="images/tcca.png" alt="loading">
					<img src="images/tpb.png" alt="loading">
					<img src="images/asas.png" alt="loading">
					<img src="images/barclays.png" alt="loading">
				</div>				
				<div>
					<img src="images/Nmb.png" alt="loading">
					<img src="images/aar.png" alt="loading">
					<img src="images/oilcom.png" alt="loading">
					<img src="images/tanesco.png" alt="loading">
					<img src="images/pepsi.png" alt="loading">
					<img src="images/startimes.png" alt="loading">
					<img src="images/logo.png" alt="loading">
				</div>
			</div>
		</section>
		<section id="jobs">
			<div class="container">
				<h3>RECENT UPDATES</h3>
				<div class="company-details">
				<div class="jobs-update">
				<h4>System administrator (Fresher)</h4>
				<p> Vodacom Tanzania </p><br>
				<img id="image" src="images/calendar.png" ><span>2-4 yrs</span><br>
				<img id="image" src="images/money.png" ><span> Tsh.800,000-1,000,000</span><br>
				<img id="image" src="images/map.jpg" ><span>Dodoma</span><br>
				<p>Skills <img id="image" src="images/loii.png" ><small>java</small>,<small>python</small>,<small>.Net</small>
				<br>
				<p>Description:<br>
					<ul>
					 <img id="image" src="images/loii.png" >Should have  bachelor<br>
					 <img id="image" src="images/loii.png" >Should have work experience of about 2yrs
					</ul>
				</div>
				<div class="apply-btn">
					<button type="button" class="btn btn-primary" style="color: white;text-decoration: none;"><a href="application.html"> Apply</a></button>
				</div>
				</div>

				<div class="company-details">
				<div class="jobs-update">
				<h4>System administrator (Fresher)</h4>
				<p> Vodacom Tanzania </p><br>
				<img id="image" src="images/calendar.png" ><span>2-4 yrs</span><br>
				<img id="image" src="images/money.png" ><span> Tsh.800,000-1,000,000</span><br>
				<img id="image" src="images/map.jpg" ><span>Dodoma</span><br>
				<p>Skills <img id="image" src="images/loii.png" ><small>java</small>,<small>python</small>,<small>.Net</small>
				<br>
				<p>Description:<br>
					<ul>
					 <img id="image" src="images/loii.png" >Should have  bachelor<br>
					 <img id="image" src="images/loii.png" >Should have work experience of about 2yrs
					</ul>
				</div>
				<div class="apply-btn">
					<button type="button" class="btn btn-primary" style="color: white;text-decoration: none;"><a href="application.html"> Apply</a></button>
				</div>
				</div>

				<div class="company-details">
				<div class="jobs-update">
				<h4>System administrator (Fresher)</h4>
				<p> Oilcom Tanzania </p><br>
				<img id="image" src="images/calendar.png" ><span>2-4 yrs</span><br>
				<img id="image" src="images/money.png" ><span> Tsh.700,000-1,000,000</span><br>
				<img id="image" src="images/map.jpg" ></i><span>Dodoma</span><br>
				<p>Skills <img id="image" src="images/loii.png" ></i><small>java</small>,<small>python</small>,<small>.Net</small>
				<p>Description:<br>
					<ul>
					 <img id="image" src="images/loii.png" >Should have  bachelor<br>
					<img id="image" src="images/loii.png" >Should have work experience of about 2yrs
					</ul>
				</div>
				<div class="apply-btn">
					<button type="button" class="btn btn-primary" style="color: white;text-decoration: none;"><a href="application.html"> Apply</a></button>
				</div>
				</div>

				<div class="company-details">
				<div class="jobs-update">
				<h4>Business Manager(Fresher)</h4>
				<p> Airtel Tanzania </p><br>
				<img id="image" src="images/calendar.png" >span>2-4 yrs</span><br>
				<img id="image" src="images/money.png" ><span> Tsh.800,000-1,500,000</span><br>
				<img id="image" src="images/map.jpg" ><span>Dodoma</span><br>
				<p>Skills <img id="image" src="images/loii.png" ><small>java</small>,<small>python</small>,<small>.Net</small>
				<p>Description:<br>
					<ul>
					 <img id="image" src="images/loii.png" >Should have  bachelor<br>
					 <img id="image" src="images/loii.png" >Should have work experience of about 1yrs
					</ul>
				</div>
				<div class="apply-btn">
					<button type="button" class="btn btn-primary" style="color: white;text-decoration: none;"><a href="application.html"> Apply</a></button>
				</div>
				</div>


			</div>
		</section>
	</div>
</body>
</html>