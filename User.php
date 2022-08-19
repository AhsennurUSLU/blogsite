<?php
$sayfa="UserLogin";
//include("include/db.php");
include("include/head.php");
session_start();

if(isset($_SESSION['login'])){
	header('Location: /profile.php');
}

?>

<div class="userlogin">
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100 formRow">
      
      <div class="col-md-6 col-lg-5 col-xl-5">
        <img src="img/BlogLogo.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-6 col-lg-5 col-xl-5 offset-xl-5">
        <form action="blog_function.php" method="POST">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input  type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Email" name="user"/>
            <label class="form-label" for="form1Example13"></label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg"placeholder="Parola" name="password" />
            <label class="form-label" for="form1Example23"></label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Beni Hatırla </label>
            </div>
          

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="login_btn"> Giriş Yap</button>

          
           

        </form>
      </div>
    </div>
  </div>
</section>

</div>
    
       <?php
       include("include/footer.php");
       ?>