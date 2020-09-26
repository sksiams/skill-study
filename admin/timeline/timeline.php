<?php 

	session_start();

	if(!isset($_SESSION['usr_name'])){

		header('location:../index.php');


	}

	$user_name = $_SESSION['usr_name'];

	$user_pic = $_SESSION['usr_pic'];



?>













<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="timeline.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../../css-document/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../../css-document/all.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../../css-document/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../../css-document/bootstrap-grid.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../../css-document/bootstrap-reboot.min.css" media="all" />

	<script type="text/javascript" src="../../js-document/mn-java.js"></script>
	<script type="text/javascript" src="timeline.js"></script>
	<script type="text/javascript" src="../../js-document/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js-document/bootstrap.bundle.min.js"></script>

 
 	
	
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
				
		
				<nav class="menu-area">
					<ul>
						<li><a href="../index.php">হোম</a></li>
						<li class="active"><a href="">টাইমলাইন</a></li>
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

	</header>
	
  
	<!-- header area end here -->

  
	<!-- timeline area start from here -->	
	
	<section class="timeline-area">
	
		<div class="timeline-cont row">
		
			<div class="tmln-left col-lg-4"> 
			
				<div class="othr-mmbr"> 
				
					<span>অন্যান্য মেম্বার:</span>
					
					<hr />
				
					<div class="member-list"> 
					
						<div class="mmbr-blck">
						
							<div class="mmbr-pic"> 
							
								<img src="../images/h.jpg" alt="" />
							
							</div>
				
							<div class="mmbr-nam">hasan</div>
							
						</div>
					
						<div class="mmbr-blck">
						
							<div class="mmbr-pic"> 
							
								<img src="../images/h.jpg" alt="" />
							
							</div>
							
							<div class="mmbr-nam">hasan</div>
							
						</div>
						 
					
						<div class="mmbr-blck">
						
							<div class="mmbr-pic"> 
							
								<img src="../images/h.jpg" alt="" />
							
							</div>
							
							<div class="mmbr-nam">hasan</div>
							
						</div>
						 
					
						<div class="mmbr-blck">
						
							<div class="mmbr-pic"> 
							
								<img src="../images/h.jpg" alt="" />
							
							</div>
							
							<div class="mmbr-nam">hasan</div>
							
						</div>
						 
					
						<div class="mmbr-blck">
						
							<div class="mmbr-pic"> 
							
								<img src="../images/h.jpg" alt="" />
							
							</div>
							
							<div class="mmbr-nam">hasan</div>
							
						</div>

					</div>				

				</div>

			</div>
			
			<div class="space-100 col-lg-1"></div>

			<div class="tmln-right col-lg-7">
 
				<div class="acc-prfl"> 
				
					<div class="prfl-pic">
					
						<img src="../../accounts/profile-pic/<?php echo $user_pic;?>" alt="" />
					
					</div>
					
					<div class="prfl-name"><?php echo $user_name;?></div>
				
					<div class="prfl-optn"> 
					
						<a href="../../php-document/logout.php"><i class="fas fa-sign-out-alt"></i></a>
					
					</div>

				</div>
				
				
				<div class="post-wrppr"> 

					<div class="post-area"> 
					
						<form action="../../php-document/post.php" method="POST" enctype="multipart">  
							
							<span>অপনার যেকনো সমস্যা বা প্রশ্ন পোস্ট করুন​:</span>
							
							<hr />

							<textarea name="postcont" id="" cols="70" rows="8"></textarea>
						
							<button>পোস্ট </button>

						</form>

					</div>
					

					<div class="posted-area"> 
					
						<?php 
							
							include('../../php-document/database-conn.php');
							
							$post_data = mysqli_query($database_conn,"SELECT * FROM post_data  ORDER BY post_id DESC");

							
							
							while($post_data_brkn = mysqli_fetch_array($post_data)):
							
							$post_id = $post_data_brkn['post_id'];
							
							$postr_name = $post_data_brkn['poster_name'];
							
							$postr_pic = $post_data_brkn['poster_pic'];
							
							$post_content = $post_data_brkn['post_content'];
							
							$post_date = $post_data_brkn['post_date'];
							
							
							
						?>
					
						<div class="posted-block"> 
						
							<div class="posted-data"> 
							
								<div class="poster-dt"> 
								
									<div class="pstr-pic"> 
								
										<img src="../../accounts/profile-pic/<?php echo $postr_pic;?>" alt="" />
									
									</div>
									
									<div class="pstr-othr"> 
									
										<div class="pstr-name">
										
											<?php echo $postr_name;?>
										
										</div>
										
										<div class="pstr-date"> 
										
											<?php echo $post_date;?>

										</div>
									
									</div>

								</div>

								<div class="post-content"> 
								
									<p> 
									
											<?php echo $post_content;?>

									</p>

								</div>

							</div>

							<hr /> 
							
							<div class="comment-area">
							
								<form action="../../php-document/comment.php?pstid=<?php echo $post_id;?>" method="POST" enctype="multipart"> 
								
									<input type="" name="cmmnt-cont" placeholder="কমেন্ট করুন​....."/>

								</form>
								


								<div class="all-cmmnt">
								
									<span>উওরসমূহ​:</span>
									<?php 

										$comment_data = mysqli_query($database_conn,"SELECT * FROM comment_data WHERE cmmntpost_id='$post_id' ORDER BY cmmnt_id  DESC");
									
										
										
										while($comment_data_brkn = mysqli_fetch_array($comment_data)):
										
										$cmmntr_name = $comment_data_brkn['cmmntr_name'];
										
										$cmmntr_pic = $comment_data_brkn['cmmntr_pic'];
										
										$cmmnt_cont = $comment_data_brkn['cmmnt_cont'];

									?>	
									
									<div class="cmmnt-block">
									
										<div class="cmmntr-pic">
											
											<img src="../../accounts/profile-pic/<?php echo $cmmntr_pic;?>" alt="" />
											
										</div>
										
										<div class="cmmnt-cont">
											
											<span><?php echo $cmmntr_name;?></span>
											
											<p><?php echo $cmmnt_cont;?></p>
											
										</div>
										
									</div>
									
									<?php endwhile;?>
									
								</div>
								
							</div>

						</div>
						
						<?php endwhile;?>
						
					</div>
					
				</div>

			</div>

		</div>

	</section>
 
 
   
	<!-- timeline area end here -->	
 
 


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

							<li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
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
