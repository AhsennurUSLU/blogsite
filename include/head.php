
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?=$sayfa ?> </title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" href="img/Blogİcon.ico"/>   
                 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="index.php" class="navbar-brand tm-site-name"><img src="../img//BlogLogo.svg" width="150" height="92 " alt="" /></a>
                    
                    
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav ">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item <?php if($sayfa=="blog") echo"active"  ?>">
                                    <a  href="../index.php" class="nav-link">Blog</a>
                                </li>
                               
                                <li class="nav-item <?php if($sayfa=="kategori") echo"active"  ?>">
                                    <a href="../kategori.php" class="nav-link">Kategori</a>
                                </li>
                                <li class="nav-item <?php if($sayfa=="about") echo"active"  ?>">
                                    <a href="../about.php" class="nav-link">Hakkında</a>
                                </li>
                                <li class="nav-item <?php if($sayfa=="contact") echo"active"  ?>">
                                    <a href="../contact.php" class="nav-link">İletişim</a>
                                </li>

                                <li class="nav-item <?php if($sayfa=="UserLogin") echo"active"  ?>">
                                    <a href="../User.php" class="nav-link"> <i class="fa-solid fa-user"></i>&nbsp; Kullanıcı </a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  
                    
                </div>                                  
            </div>            
        </div>