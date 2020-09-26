<?php 

	session_start();


	include('database-conn.php');


	$logn_mail = $_POST['logmail'];
	
	$logn_pass = md5($_POST['logpass']);

	$logn_acc = mysqli_query($database_conn,"SELECT * FROM accounts_data WHERE user_mail='$logn_mail' AND user_pass='$logn_pass'");
 
	$logn_acc_brkn = mysqli_fetch_array($logn_acc);
 
	$logn_acc_numbr = mysqli_num_rows($logn_acc);
	
	if($logn_acc_numbr == 1){
		
		$_SESSION['usr_name'] = $logn_acc_brkn['user_name'];
		
		$_SESSION['usr_pic'] = $logn_acc_brkn['user_pic'];
		
		
		header('location:../admin/admin.php?page=user');
	
	}
	
	else{
		
		header('location:../accounts/acc-login.php');

	}
	
	
	
	
	
	
	
	

?>



 



