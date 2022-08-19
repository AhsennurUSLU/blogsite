<?php 
include('include/connection.php');

if ($page=="home"){
    $sql = "SELECT count(*) FROM `users` WHERE `is_active`=1";
    $result=$db -> query($sql);
    $row=$result->fetch(PDO::FETCH_ASSOC);


    $sql2 = "SELECT count(*) FROM `contents` WHERE `is_active`=1";
    $result2=$db -> query($sql2);
    $row2=$result2->fetch(PDO::FETCH_ASSOC);
}
if ($page=="content_list"){

    $contentsor = $db->prepare("SELECT * FROM contents WHERE `is_active`=1");
    $contentsor->execute();
    
    $content_listesi = $contentsor->fetchALL(PDO::FETCH_ASSOC);
}

if ($page=="user_list"){

    $kullanicisor = $db->prepare("SELECT * FROM users WHERE is_active=1");
    $kullanicisor->execute();

    $kullanici_listesi = $kullanicisor->fetchALL(PDO::FETCH_ASSOC);
}

// veritabanına düşen mailleri çeken sorgu 

if ($page=="mailbox"){

    $mailsor = $db->prepare("SELECT * FROM email WHERE is_active=1");
    $mailsor->execute();

    $mailbox = $mailsor->fetchALL(PDO::FETCH_ASSOC);
}

// mailboxtaki mailleri cevaplama için gereken sorgu 


if ($page=="create_email"){

    $mailgetir = $db->prepare("SELECT * FROM email_yanitla WHERE is_active=1");
    $mailgetir->execute();

    $create_email = $mailgetir->fetchALL(PDO::FETCH_ASSOC);
}








?>