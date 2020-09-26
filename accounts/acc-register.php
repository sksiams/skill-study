<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="login.css" media="all" />	
	<link rel="stylesheet" type="text/css" href="../css-document/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css-document/all.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css-document/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css-document/bootstrap-grid.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css-document/bootstrap-reboot.min.css" media="all" />

	
	<script type="text/javascript" src="../js-document/mn-java.js"></script>
	<script type="text/javascript" src="../js-document/custom.js"></script>
	<script type="text/javascript" src="../js-document/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js-document/bootstrap.bundle.min.js"></script>

 
 	
	
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  
	<!-- header area start from here -->
 
	<header>
	
		<div class="header-top">
			<div class="container">
				<div class="logo-area">
					<a href="../index.php"><img src="../images/logo.png" alt="" /></a>
				</div>

			</div>	

		</div>

	</header>
 

	<section class="login-area">
	
		<div class="container">
		
			<div class="row">
			
				<div class="logn-left col-lg-6">
				
					<form action="../php-document/registration.php" method="POST" enctype="multipart/form-data"> 
					
						<h2>নতুন একাউন্ট রেজিষ্টার করুন</h2>
						
						<div class="form-group">
						
							<label for="uname">আপনার নাম</label>
							
							<input type="text" name="uname" class="form-control" id="uname">

						</div>	
						
						<div class="form-group">
						
							<label for="umail">ইমেল ঠিকানা</label>
							
							<input type="email" name="umail" class="form-control" id="umail">

						</div>
						
						<div class="form-group">
						
							<label for="upass">পাসওয়ার্ড</label>
							
							<input type="password" name="upass" class="form-control" id="upass">
							
						</div>
						
						<div class="form-group">
						
							<label for="upic">প্রোফাইল ছবি</label>
							<br />
							<input type="file" name="upic"  id="upic">
							
						</div>
						
						<button type="submit" >সাবমিট</button>

					</form>

				</div>
				
				<div class="logn-right col-lg-6">
				
					<?php 
						
						
						if(isset($_GET['regresult'])){

							
							if($_GET['regresult'] == 'samemail'){
								
								echo '<div class="jumbotron"> 
								
										<h2 style="color:red;">অন্য ইমেইল ব্যাবহার করুন.....!</h2>
										
									</div>';
	
							}

							else if($_GET['regresult'] == 'emptdata'){
								
								echo '<div class="jumbotron"> 
								
										<h2 style="color:red;">সকল ডাটা পূরন করুন.......!</h2>
										
									</div>';
	
							}
	
						}

					?>
				
				
				
				
				
					<div class="lgn-pic">
					
						<img src="../images/login.png" alt="" />
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</section>
	
 
	
	
 
</body>

</html>
