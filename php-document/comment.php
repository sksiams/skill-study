<?php 

	session_start();

	include('database-conn.php');
	
	$cmmntpost_id = $_GET['pstid'];

	$cmmntr_name = $_SESSION['usr_name'];

	$cmmntr_pic = $_SESSION['usr_pic'];

	$cmmnt_cont = $_POST['cmmnt-cont'];


	
	if($cmmnt_cont){
		
		
		mysqli_query($database_conn,"INSERT INTO comment_data(cmmntpost_id,cmmntr_name,cmmntr_pic,cmmnt_cont) 
													VALUES('$cmmntpost_id','$cmmntr_name','$cmmntr_pic','$cmmnt_cont')");

		header('location:../admin/timeline/timeline.php');
	}
	else{
		
		header('location:../admin/timeline/timeline.php');
		
	}


?>