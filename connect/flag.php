<?php
ob_start();
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include 'connection.php';

if (isset($_POST['userlogin'])) {

    echo $user_mail=htmlspecialchars($_POST['user_mail']); 
	echo $user_pass=md5(htmlspecialchars($_POST['user_pass'])); 

    $usercheck=$db->prepare("select * from user where user_mail=:mail and user_pass=:password");
	$usercheck->execute(array(
		'mail' => $user_mail,
		'password' => $user_pass,
	));

	$say=$usercheck->rowCount();

	if ($say==1) {

		$_SESSION['userkullanici_mail']=$user_mail;

		header("Location:../index.php?status=loginsuccess");
		exit;
		
	} else {
		header("Location:../index?status=error");
		exit;
	}
}

if (isset($_POST['userregister'])) {

	$user_mail=htmlspecialchars(trim($_POST['user_mail'])); 

	$user_passone=htmlspecialchars(trim($_POST['user_passone'])); 
	$user_passtwo=htmlspecialchars(trim($_POST['user_passtwo'])); 


	if ($user_passone==$user_passtwo) {

		if (strlen($user_passone)>=6) {

			// Start

			$usercheck=$db->prepare("select * from user where user_mail=:mail");
			$usercheck->execute(array(
				'mail' => $user_mail
			));
            
			//specifies the number of rows returned
			$say=$usercheck->rowCount();

			if ($say==0) {

				//The md5 function makes the password md5 encrypted.
				$pass=md5($user_passone);

				//User registration is in progress ...
				$userreg=$db->prepare("INSERT INTO user SET
					user_mail=:user_mail,
					user_pass=:user_pass
					");
				$insert=$userreg->execute(array(
					'user_mail' => $user_mail,
					'user_pass' => $pass
				));

				if ($insert) {
					header("Location:../index?status=ok");

				} else {
					header("Location:../index?status=error");
				}

			} else {
				header("Location:../index?status=repeatuser");
			}
		// Finish
		} else {
			header("Location:../index?status=missing");
		}

	} else {
		header("Location:../index.php?status=different");
	}
	
}



?>