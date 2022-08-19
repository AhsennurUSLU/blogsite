<?php
$sayfa="kategori";
include("include/head.php");
?>
        <div class="tm-blog-img-container">
            
        </div>

        <section class="tm-section">
        
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                    <div class="vr"></div>
                        <div class="tm-blog-post">
                        
                            <h3 class="tm-gold-text">How to make HTTP requests in Flutter</h3>
                            <p class="bodytext">Making GET, POST, PUT, PATCH, and DELETE requests</p>
                            <img src="img/tm-img-1010x336-1.jpg" alt="Image" class="img-fluid tm-img-post" >
                            
                            <p class="bodytext">GET requests
A GET request is used to get some resource from a server.</p>

                            <p class="bodytext">The get method above is part of the http library and makes the actual request. The response that you get back contains the information you need.

Now replace /posts with /posts/1 in the url. Using /posts returns an array of JSON objects while /posts/1 returns a single JSON object, where 1 is the ID of the post you want to get.

You can use dart:convert to convert the raw JSON string to objects. See Parsing Simple JSON in Flutter and Dart for help with that.</p>

                            <p class="bodytext"> Note that the url specified the id of 1 for which post to replace. Then it replaced the entire post with a new value.

You should see the following JSON response from the server, which just repeats the new value:</p>

                            <p class="bodytext">Notice that the JSON string that is passed in only includes the title, not the other parts like in the PUT example.

You should see a response from the server similar to the following:</p>
                        </div>
                        
                        <div class="row tm-margin-t-big">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div class="tm-content-box">
                                    <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Devamını Oku</a>    
                                </div>  

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div class="tm-content-box">
                                    <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Devamını Oku</a>    
                                </div>  

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div class="tm-content-box">
                                    <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Devamını Oku</a>    
                                </div>  

                            </div>    

                             

                            

                            
                        </div>
                        
                    </div>

                    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                        <div class="tm-aside-container">
                            
                            <h3 class="tm-gold-text tm-title">
                                Kategoriler
                            </h3>
                            <nav>
                                <ul class="nav">
                                    <ul><li><a href="#" class="tm-text-link">Teknoloji</a></li></ul>
                                    <ul><li><a href="#" class="tm-text-link">Bilişim</a></li></ul>
                                    <ul><li><a href="#" class="tm-text-link">Bilim ve Tarih</a></li></ul>
                                    <ul><li><a href="#" class="tm-text-link">Edebiyat</a></li></ul>
                                    <ul><li><a href="#" class="tm-text-link">Felsefe</a></li></ul>
                                    <ul><li><a href="#" class="tm-text-link">Kodlama ve Yazılım</a></li></ul>
                                    <ul><li><a href="#" class="tm-text-link">Kişisel Gelişim ve Eğitim</a></li></ul>
                                </ul>
                            </nav>
                            
                        
                                 
                        </div>
                        
                        
                    </aside>

                </div>
                
            </div>
        </section>
        
        <?php
       include("include/footer.php");
       ?>