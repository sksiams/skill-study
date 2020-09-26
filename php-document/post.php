<?php 
	
	session_start();
	
	include('database-conn.php');
	
	
	$postr_name = $_SESSION['usr_name'];

	$postr_pic = $_SESSION['usr_pic'];
	
	$post_date = date("d/m/y");
	
	$post_cont = $_POST['postcont'];

	

	if($post_cont){

		mysqli_query($database_conn,"INSERT INTO  post_data(poster_name,poster_pic,post_content,post_date) 
											VALUES('$postr_name','$postr_pic','$post_cont','$post_date')");

		header('location:../admin/timeline/timeline.php');									
											
	}
	else{
		
		header('location:../admin/timeline/timeline.php?');
		
		
	}
	
	
?>