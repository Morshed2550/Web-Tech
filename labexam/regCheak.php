<?php 
	//session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				if($email !=""){

			$_SESSION['username'] = $username;
		    $_SESSION['password'] = $password;
		    $_SESSION['email'] = $email;

		

					header('location: login.html');
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>