<?php 
//include('connection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(!isset($_SESSION['login'])){
  session_destroy();
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yönetim Paneli | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>









<!-- Navbar(gezinme çubuğu) -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- sol navbar bağlantısı-->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="include/logout.php" role="button"><i>Çıkış Yap</i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Anasayfa</a>
      </li>



<!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">İletişim</a>
      </li>
-->
    </ul>

    <!-- sağ navbar bağlantısı -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="navbar-search-block">
          <div class="input-group input-group-sm">
            <div class="input-group-append">
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="/index.php" class="nav-link">Site Ana Sayfası</a>
              </li>
            </div>
          </div>
        </div>
      </li>
      

      
  
  
  </ul>
  </nav>
  <!-- /.navbar -->