<?php
    include "../../config/config.php";	

	session_start();

    $username			= $_POST['username'];
    $password 			= $_POST['password'];

	if(!empty($username)){
		$get_password = pg_query($conn, "SELECT * FROM ms_employee WHERE username = '$username';");

		while($data = pg_fetch_array($get_password)){
			if($username == $data['username']){
				if(password_verify($password, $data['password'])){
					$_SESSION['user_id'] = $data['id'];
					$_SESSION['username'] = $data['username'];
					$_SESSION['empl_grade'] = $data['empl_grade'];

					Header('Location: ../../transaksi.php');	
					die;				
				}else{
					// error password					
					$_SESSION['msg'] = 'Invalid Username or Password, Please Try Again';
					Header('Location: ../../index.php');	
					die;									
				}
			}
		}
		$_SESSION['msg'] = 'Invalid Username or Password, Please Try Again';
		Header('Location: ../../index.php');										
		die;


	}
?>
