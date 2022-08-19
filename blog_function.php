<?php 
include('include/db.php');

session_start();

if(isset($_POST['login_btn'])){

	
	$user = $_POST['user'];
	$password = $_POST['password'];  
	//$errors   = array(); 


	$sql="SELECT *,count(*) FROM `users` WHERE `email`='$user' AND `password`='$password' AND  `is_active`=1";
	$result=$db -> query($sql);
	$row=$result->fetch(PDO::FETCH_ASSOC);

	if($row['count(*)']>0){
	
		$_SESSION['login']=TRUE;
		$_SESSION['mail']=$user;     
		//print_r($_SESSION);
		header('Location: /profile.php');
	}
	else
	{

		session_destroy();
		header('Location: /User.php');
	}


}


else if (isset($_POST['btn'])){

	$name = $_POST['contact_name'] ; 
	$email = $_POST['contact_email'] ; 
	$subject = $_POST['contact_subject'] ; 
	$message = $_POST['contact_message'] ; 
	
	if ($name != null && $email != null && $subject != null && $message != null ) {
		$sql = "INSERT INTO `email` (`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')";
		$db -> query($sql);
		header('location: contact.php');
		if ($name=="" && $email=="" && $subject=="" && $message==""  )
	{
		echo '<script>alert("Mail Gönderildi")</script>';	
	}
	   

	}
	}














else
{
	session_destroy();
	header('Location: /User.php');
}



















?>