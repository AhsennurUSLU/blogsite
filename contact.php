<?php
$sayfa="contact";
include("include/head.php");
?>
        <div class="tm-contact-img-container">
            
        </div>

        <section class="tm-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Bizimle iletişime geçebilirsiniz...</h3>
                            <p class="tm-form-description"><center>Sadece saat  11 ile 15 arasında mesaj atınız yoksa bakmayız.. Teşekkürler :)</center> </p> 


                            
                        </section>
                        
                                             
                 

                    </div>
                    <div class="col-12">
                        
                    <form action="blog_function.php" method="post" class="tm-contact-form">                                
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="İsim"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Konu"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Mesaj" required></textarea>
                                </div>
                            
                                <button type="submit" class="tm-btn" name="btn">Gönder</button>                          
                            </form>   

                    </div>

                   
                </div>

            </div>
        </section>
        
        <?php
       include("include/footer.php");
       ?>