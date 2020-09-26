<?php 

	session_start();

	if(isset($_SESSION['usr_name'])){

		header('location:admin/admin.php');


	}




?>





<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css-document/custom.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css-document/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css-document/all.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css-document/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css-document/bootstrap-grid.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css-document/bootstrap-reboot.min.css" media="all" />

	<script type="text/javascript" src="js-document/mn-java.js"></script>
	<script type="text/javascript" src="js-document/custom.js"></script>
	<script type="text/javascript" src="js-document/bootstrap.min.js"></script>
	<script type="text/javascript" src="js-document/bootstrap.bundle.min.js"></script>

 
 	
	
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
				
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					
				</div>

				<nav class="menu-area">
					<ul>					
						<li><a href="">হোম</a></li>
						<li><a href="accounts/acc-login.php">টাইমলাইন</a></li>
						<li><a href="">স্কিল</a></li>
						<li><a href="">পরীক্ষা</a></li>
						<li><a href="">যোগাযোগ</a></li>
					</ul>
					
					<div class="search-area row">

						<div class="srch-inpt">

							<input    type="" />

						</div>

						<div class="srch-icon">

							<i class="fa fa-search" aria-hidden="true"></i>

						</div>

					</div>					
					
					
					
				</nav>

			</div>	

		</div>
		
		<div class="header-bg">
		
			<div class="container">

				<div class="space-100"></div>

				<div class="row"> 
				
					<div class="walecome col-lg-6">
					
						<div class="welcm-icon">
						
							<img src="images/learning.png" alt="" />
						
						</div>
					
						<h1>অনলাইন দক্ষতা বিকাশ প্ল্যাটফর্মে স্বাগতম।</h1>
						
						<div class="login-area">
						
							<a href="accounts/acc-login.php">
							
								<i class="fas fa-user-shield"></i>
								
								<span>login</span>
								
							</a>
	
						</div>
						
						
					</div>
					
					<div class="slider col-lg-6"> 
					
					
						<div id="carousel" class="carousel slide" data-ride="carousel">
						
							<div class="carousel-inner innr-dsn">
							
								<div class="carousel-item active">
								
								<img class="d-block w-100" src="images/hslide1.jpg" alt="First slide">
								
								</div>
								
								<div class="carousel-item">
								
								<img class="d-block w-100" src="images/hslide2.jpg" alt="Second slide">
								
								</div>
								
								<div class="carousel-item">
								
								<img class="d-block w-100" src="images/hslide3.jpg" alt="Third slide">
								
								</div>
								
							</div>
							
							<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
							
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								
								<span class="sr-only">Previous</span>
								
							</a>
							
							<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
							
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								
								<span class="sr-only">Next</span>
								
							</a>
							
						</div>					

					</div>

				</div>

			</div>

		</div>
	
	</header>
	
 	<!-- header area end here -->
	
	<!-- class area start from here -->
	
	
	<section class="class-area">

		<h2>একাডেমিক স্কিল​ </h2>
		
		<p>একাডেমি নির্বাচন করে যেকনো বিষয়ে ঘড়ে বসেই প​ড়ুন​।​</p>
		<div class="container">
		
			<div class="classes-box">
			
				<div class="row">
				
					<div class="col-lg-3" >
					
						<div class="class-block">
						
							<div class="cls-pic"  clsp="1">
								<img src="images/primary.png" alt="" />
							</div>
							<br/>
							<h3>১ম থেকে ৫ম</h3>
							
							<div class="clsslct-area">
								<select name="" id="">
									<option value="">৩য়</option>
									<option value="">৪র্থ </option>
									<option value="">৫ম</option>
								</select>
								<a href="">GO</a>
							</div>
							
						</div>
						
					</div>

					<div class="col-lg-3">
					
						<div class="class-block">
						
							<div class="cls-pic" clsp="2">
								<img src="images/highscl.png" alt="" />
							</div>
							<br/>
							<h3>৬ষ্ঠ থেকে ৮ম</h3>
							
							
							<div class="clsslct-area">
								<select name="" id="">
									<option value=""> ৬ষ্ঠ </option>
									<option value=""> ৭ম</option>
									<option value="">৮ম</option>
								</select>
								<a href="">GO</a>
							</div>	
							
						</div>
						
					</div>
				
					<div class="col-lg-3">
					
						<div class="class-block">
						
							<div class="cls-pic" clsp="3">	
								<img src="images/ssc.png" alt="" />
							</div>
							<br/>
							<h3>এস.এস.সি</h3>
							<div class="clsslct-area">
								<select name="" id="">
									<option value="">ব্যবসা শিক্ষা </option>
									<option value="">মানবিক </option>
									<option value="">বিজ্ঞান</option>
								</select>
								<a href="">GO</a>
							</div>
						</div>
						
					</div>
				
					<div class="col-lg-3">
					
						<div class="class-block">
							
							<div class="cls-pic" clsp="4">
								<img src="images/hsc.png" alt="" />
							</div>	
							
							<br/>
							
							<h3>এইচ.এস.সি</h3>
							
							<div class="clsslct-area">
								<select name="" id="">
									<option value="">ব্যবসা শিক্ষা </option>
									<option value="">মানবিক </option>
									<option value="">বিজ্ঞান</option>
								</select>
								
								<a href="">GO</a>
								
							</div>
							

						</div>
						
					</div>

				</div>

			</div>		

		</div>	
 
		
	</section>
	
	<!-- class area end here -->	
	
	
	<!-- timeline area start form here -->
 
	<section class="timln-area">

		<h2>টাইমলাইন সুবিধা</h2>
		
		<p>আপনার যেকনো বিষয়ের সমস্যা পোস্ট করে সমাধান পেতে পারেন টাইমলাইন হতে।</p>
		
		<div class="container">
		
			<div class="timln-top row">
			
				<div class="timln-left col-lg-6"> 
				
					<div class="plm-pic"> 
					
						<img src="images/problem.png" alt="" />
					
					</div>
					
					<h3>যেকোনো সমস্যা পোস্ট করুন।</h3>
					
					<p> 
					
						আপনার যেকনো বিষয়ের সমস্যার সমাধান  টাইমলাইন হতে পেতে পারেন।
						
						এর মাধ্যমে অভিজ্ঞ ও দক্ষ ব্যক্তির নিকট হতে সমাধান পাবেন এবং 
						
						আপনি চাইলে চেটিং এর মাধ্যমে তাদের সাথে যোগাযোগ করতে পারেন।
					
						পাশাপাশি অন্যদের সমস্যার সমাধান করে নিজ দক্ষতা বৃদ্ধি করতে পারেন। ধন্যবাদ।
						
					
					</p>

				</div>
			
				<div class="timln-right col-lg-6">
				
					<textarea name="" id="" cols="60" rows="10">
					</textarea>
					
					<br />
					<a href="">পোস্ট করুন</a>
					
				</div>

			</div>
			
			<div class="timln-bottm">
				
				<div class="timln-btn-bx">
					
					<a href="accounts/acc-login.php">টাইমলাইন </a>
					
					<a href="">বিগত পোস্ট</a>
					
				</div>
				
			</div>

		</div>
		
	</section>

	<!-- timeline area end here -->

	<!-- basic skill area start form here -->
	
	<section class="bascskill-area">
	
		<h2>বেসিক স্কিল</h2>
		
		<p>ভর্তি পরীক্ষ থেকে শুরু করে চাকরি পর্যন্ত বেসিক স্কিল এর বিকল্প নেই।</p>
		
		<div class="container">

			<div class="bascskill-box row">
		
				<div class="col-lg-4"> 

					<div class="bascskill-block ">

						<div class="bascskill-top"> 
						
							<div class="bascskill-pic"> 
							
								<img src="images/english.jpg" alt="" />
							
							</div>

						</div>
						
						<div class="bascskill-bottom"> 
						
							<h3>ইংরেজী </h3>
						
						
						</div>
						
					</div>	
					
				</div>
				
				<div class="col-lg-4">
				
					<div class="bascskill-block ">

						<div class="bascskill-top"> 
						
							<div class="bascskill-pic"> 
							
								<img src="images/math.jpg" alt="" />
							
							</div>

						</div>
						
						<div class="bascskill-bottom"> 
						
							<h3>গণিত </h3>
						
						
						</div>
						
					</div>	
					
				</div>

				<div class="col-lg-4">
				
					<div class="bascskill-block ">

						<div class="bascskill-top"> 
						
							<div class="bascskill-pic"> 
							
								<img src="images/gk.jpg" alt="" />
							
							</div>

						</div>
						
						<div class="bascskill-bottom"> 
						
							<h3>সাধারণ জ্ঞান</h3>
						
						
						</div>
						
					</div>	
					
				</div>

			</div>
			
			<div class="bascskill-advc row">
			
				<div class="col-lg-6">
				
					<div class="bascskill-bgpic">
					
						<img src="images/basic.png" alt="" />
						
					</div>
					
				</div>
				
				<div class="col-lg-6">
				
					<div class="bascskill-dscr "> 
					
						<div class="bascskill-admisn"> 
						
							<h3>ভর্তি পরীক্ষা</h3>
						
						</div>
						
						<div class="bascskill-job"> 
						
							<h3> চাকরি </h3>
						
						</div>
					
					
					
					</div>
					
				</div>
				
			</div>

		</div>

	</section>

	<!-- basic skill area end here -->	
	
	<!-- facility area start from here -->
	
	<section class="facility-area">
	
		<div class="container">
		
			<div class="fclty-cont ">
				
				<div class="row">
				
					<div class="fclty-left col-lg-6">
					
						<h2>আপনার প্রয়োজনীয় সকল সুবিধাদি:</h2>
						
						<ul >
							<li><i class="fa fa-check" aria-hidden="true"></i><span>টাইমলাইন সুবিধা </span> </li>
							<li><i class="fa fa-check" aria-hidden="true"></i><span>ভিডিও </span></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><span>স্মার্ট নোট</span></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><span>অধ্যায়ভিত্তিক পরীক্ষা</span></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><span>অন্য মেম্বারদের সাথে চেটিং সুবিধা</span></li>
						</ul>
						
					</div>
					
					<div class="fclty-right col-lg-6">
					
						<div class="std-pic">
						
							<img src="images/std.png" alt="" />
							
						</div>
						
					</div>
					
				</div>
				
				
				<div class="space-160"></div>
				
				
				<div class="row">
				
					<div class="fclity-dygrm col-lg-6">
					
						<div class="dygrm-box"> 
						
							<div class="crcl-dygrm1">65+ videos</div>
							<div class="crcl-dygrm2">20+ notes</div><br />

						</div>
						
						<div class="crcl-dygrm3">42+ exam</div>
						
					</div>
					
					<div class="fclity-ststc col-lg-6">
					
						<ul>
							<li><i class="fa fa-play" aria-hidden="true"></i><span>65+ ভিডিও সকল ক্লাসের।</span></li>
							<li><i class="fa fa-list" aria-hidden="true"></i><span>20+ স্মার্ট নোট</span> </li>
							<li><i class="fa fa-briefcase" aria-hidden="true"></i><span>42+ পরীক্ষা যাচাইয়ের জন্য</span></li>
						</ul>

					</div>
					
				</div>
	
			</div>

		</div>
		
	</section>

	
	<!-- facility area end here -->








<!-- footer area start from here -->

	<footer class="ftr-area">
	
		<div class="container">
		
			<div class="ftr-cont row">
			
				<div class="ftr-blck1 col-lg-4">
				
					<p>	
						স্কিল স্টাডিতে পাবেন প্রত্যেক বিষয়ের উপর ভিডিও,নোট,স্কুইজ।
						এছাড়াও থাকছে যেকনো সমস্যা পোস্ট করার সুযোগ।
						ছাএ অথবা শিক্ষকে কাচ উওর পাবেন।
						চাইল তাদের সাথে চ্যাট এর মাধ্যমে আলোচনা করতে পারবেন।
					</p>
					
					<div class="scl-lnk"> 
					
						<ul class="list-inline">

							<li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100017455211133"><i class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="fab fa-linkedin-in"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="fab fa-google-plus-g"></i></a></li>

						</ul>

					</div>
				
				</div>

				<div class="ftr-blck2 col-lg-2">
				
					<b>এক নজরে টাইম </b>
					<ul>
						<li><a href="">ভিডিও </a></li>
						<li><a href="">লাইন</a></li>
						<li><a href="">নোট </a></li>
						<li><a href="">কুইজ</a></li>
					</ul>

				</div>
				
				<div class="ftr-blck3 col-lg-2">
				
					<b> সামাজিক লিঙ্ক  </b>
					<ul>
						<li><a href="">ফেসবুক</a> </li>
						<li><a href=""> টুইটার</a></li>
						<li><a href="">ইন্সট্রাগ্রাম</a></li>
						<li><a href="">ইউটিউব</a></li>
					</ul>				

				</div>
				
				<div class="ftr-blck4 col-lg-4">
					
					<form action="">
					
						<b>নিয়মিত নোটিফিকাশন পান</b>
					
						<input type="" placeholder="Enter your email" class="form-control"/>
						
						<input type="" placeholder="Enter user name" class="form-control"/>
					
						<a href="">সাবমিট</a>
						
					</form>
					
				</div>
				
			</div>
			
		</div>
		
	</footer>


	<!-- footer area end here -->






	
	
	
 
</body>

</html>
