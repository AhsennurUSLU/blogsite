<?php
$sayfa="blog";
include("include/db.php");
include("include/head.php");
/*
$sorgu="SELECT * FROM `home`";
$result= $mysqli ->query($sorgu);
$row=$result->fetch_assoc();
print_r($row);
exit();
*/
?>
        <div class="tm-home-img-container">
            <img src="img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">Introduction</h2>
                        <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Devamını Oku</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Devamını Oku</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Devamını Oku</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-4.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #4</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Devamını Oku</a>    
                        </div>  

                    </div>
                </div> <!-- row -->



            </div>
        </section>
        
       <?php
       include("include/footer.php");
       ?>