<?php
 
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 
	$uname=$_POST['username']; 
	$pword=$_POST['password']; 
	$captcha=$_POST['captcha']; 

	if($uname=='admin' && $pword == 'test')
	{	 
		$_SESSION['login_user']=$myusername;
		$_SESSION['logged_in'] = 'yes';
		header("location: index.php");
	}
	else 
	{
		$_SESSION['error_msg'] = 'Invalid user and or password.';
		//$_SESSION['error_msg'] = $captcha."----".$_SESSION["code"];
		header("location: index.php?page=login");	
	}
}
?>