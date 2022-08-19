<?php 
include('connection.php');

session_start();



if(isset($_POST['login_btn'])){

	
	$user = $_POST['user'];
	$password = $_POST['password'];  
	//$errors   = array(); 


	$sql="SELECT *,count(*) FROM `admin_tablo` WHERE `mail`='$user' AND `password`='$password' AND  `is_active`=1";
	$result=$db -> query($sql);
	$row=$result->fetch(PDO::FETCH_ASSOC);

	if($row['count(*)']>0){
	
		$_SESSION['login']=TRUE;
		$_SESSION['mail']=$user;     
		//print_r($_SESSION);
		header('Location: /admin');
	}
	else
	{

		session_destroy();
		header('Location: ../login.php');
	}


}
else if (isset($_POST['btn'])){

	$name = $_POST['name'] ; 
	$surname = $_POST['surname'] ; 
	$email = $_POST['email'] ; 
	$password = $_POST['password'] ; 
	$job = $_POST['job'] ; 
	if ($name != null && $surname != null && $email != null && $password != null ) {
		$sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`,`users_job`) VALUES('$name', '$surname', '$email', '$password','$job')";
        $db -> query($sql);
		
		if ($name=="" && $surname=="" && $email=="" && $password=="" && $job=="")
		{
		echo "Lütfen Tüm Alanları Doldurun!";	
		}
	   else{
		echo "Başarılı Şekilde Kaydettiniz.";	
	   }						
	}
	header('location: ../register.php');
	}

// içerik oluşturma

else if (isset($_POST['kaydet'])){

	$title = $_POST['title'] ;
	$kategori = $_POST['kategori'];
	$content = $_POST['content'] ; 
	if ($title != null && $content != null && $kategori != null) {
		$sql = $db->prepare("INSERT INTO `contents` (`title`,`kategori`,`content`) VALUES('$title','$kategori','$content')");
        $sql->execute();
	    $cikti = $sql->fetch(PDO::FETCH_ASSOC);
	    
	}
	header('location: /admin/contentlist.php');
	}


// içerik düzenle/sil işlemleri
else if (isset($_POST['content-update'])){

		 $id = $_POST['id'] ; 
		 $title = $_POST['title'] ; 
		 $content = $_POST['content'] ;
		if ($title != null && $content != null) {
			echo $sql = "UPDATE `contents` SET `title`='$title' , `content`= '$content' WHERE `id`='$id'";
			$db -> query($sql);
		}
		header('location: ../contentlist.php');
		}

else if (isset($_POST['content_sil'])){

	$id = $_POST['id'] ;
	if ($id != null  ) {
		$sql = "UPDATE `contents` SET `is_active`= 0 WHERE `id`='$id'";
		$db -> query($sql);
	} 
	header('location: ../contentlist.php');
	
}
// kişileri düzenle/sil işlemleri
else if (isset($_POST['user_update'])){

	$id = $_POST['id']; 
	$name = $_POST['first_name'] ; 
	$surname = $_POST['last_name'] ;
	$email = $_POST['email'] ; 
	$password = $_POST['password'] ;
	$job = $_POST['users_job'] ;
    if ($name != null && $surname != null && $email != null && $password != null) {
	   $sql = $db->exec("UPDATE `users` SET `first_name` = '$name', `last_name` = '$surname', `email`= '$email', `password`= '$password',`users_job`= '$job' WHERE `id` = '$id'");
	   $db -> prepare($sql);
    }
	header('location: ../users_list.php');
}

else if (isset($_POST['user_sil'])){

	$id = $_POST['id'] ;
	if ($id != null ) {
   		$sql = "UPDATE `users` SET `is_active`= 0 WHERE `id`='$id'";
   		$db -> query($sql);
	} 
	header('location: ../users_list.php');

}

// mail okuma ve silme işlemleri

else if (isset($_POST['mail_oku'])){

	$id = $_POST['id']; 
	$name = $_POST['name'] ; 
	$email = $_POST['email'] ;
	$subject = $_POST['subject'] ; 
	$message = $_POST['message'] ;
    if ($name != null && $email != null && $subject != null && $message != null) {
	   $sql = $db->exec("UPDATE `email` SET `name` = '$name', `email` = '$email', `subject`= '$subject', `message`= '$message' WHERE `id` = '$id'");
	   $db -> prepare($sql);
	   header('location: /admin/mailbox.php');
    }
}

else if (isset($_POST['mail_sil'])){

	$id = $_POST['id'] ;
	if ($id != null ) {
   		$sql = "UPDATE `email` SET `is_active`= 0 WHERE `id`='$id'";
   		$db -> query($sql);
   		header('location: /admin/mailbox.php');
	} 

}

// mail cevaplama işlemleri


else if (isset($_POST['gonder_btn'])){

	$id = $_POST['id']; 
	$subject = $_POST['subject'] ; 
	$email = $_POST['email'] ; 
	$message = $_POST['message'] ;
	if ($subject != null && $email != null && $message != null) {
		$sql = $db->prepare("INSERT INTO `email_yanitla` (`subject`,`email`,`message`) VALUES('$subject','$email','$message')");
        $sql->execute();
	    $cikti = $sql->fetch(PDO::FETCH_ASSOC);
	    
	}
	header('location: /admin/feedback.php');
	}

// mail yanıtla kısmındaki kime kısmı otomatik doldurma


/*
else if (isset($_POST['gonder_btn'])){

	$id = $_POST['id']; 
	$kime = $_POST['email'] ; 
    if ($kime != null ) {
	   $sql = $db->exec("UPDATE `email_yanitla` SET `email` = '$kime' WHERE `id` = '$id'");
	   $db -> prepare($sql);
    }
	header('location: /create_email.php');
}
*/












else
{
	session_destroy();
	header('Location: ../login.php');
}

















?>