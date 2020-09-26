<?php 


	include('database-conn.php');



	$usr_name = $_POST['uname'];
	
	$usr_mail = $_POST['umail'];
	
	$usr_pass = md5($_POST['upass']);
	
	
	$usr_pic = $_FILES['upic']['name'];
	
		$usr_tmppic = $_FILES['upic']['tmp_name'];

	move_uploaded_file($usr_tmppic,'../accounts/profile-pic/'.$usr_pic);

	
	$same_accnt = mysqli_query($database_conn,"SELECT * FROM accounts_data WHERE user_mail='$usr_mail'");

	$same_accnt_numbr = mysqli_num_rows($same_accnt);
	
	
	
	if($usr_name && $usr_mail && $usr_pass && $usr_pic){
		
		if($same_accnt_numbr == 0){
			
			mysqli_query($database_conn,"INSERT INTO  accounts_data(user_name,user_mail,user_pass,user_pic) 
													VALUES('$usr_name','$usr_mail','$usr_pass','$usr_pic')");

			header('location:../accounts/acc-login.php?regresult=accdn');
					
		}
		else{
			
			header('location:../accounts/acc-register.php?regresult=samemail');

		}

	}
	
	else{
		
		header('location:../accounts/acc-register.php?regresult=emptdata');
		
		
	}
	


?>