<?php 
$page = "create_email";
include('include/query.php');

include('header.php');
include('menu.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mail Oluştur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Mail Oluştur</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>

  


    <!-- Main content -->

    <section class="content">
      <form action="admin/include/functions.php" method="POST">
      <div class="row" id="exampleModal<?php echo $email_yanitla['id'] ?>">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Cevap Yaz
              </h3>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="exampleModal<?php echo $email_yanitla['id'] ?>">
            <input type="hidden"  >
              <div class="form-group">
                <input type="hidden" name="id">
                <label>Kime</label>
                <input type="email" name="email" class="form-control" >
              </div>
              <div class="form-group">
                <label>Konu</label>
                <input type="text" name="subject" class="form-control"  >
              </div>
              
              <div class="form-group">
                  <label>Cevap</label>
                  <textarea id="summernote" name="message" rows="10"  ></textarea>
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.col-->
      </div>
      <div class="row">
    <div class="col-md-2"><button type="submit" name="gonder_btn" class="btn btn-block btn-primary btn-flat">Gönder</button></div>
    </div>
    </form>
      <!-- ./row -->
    </section>
   
    

  
    <!-- /.content -->
  </div>
 
  <!-- /.content-wrapper -->
<?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->





<!-- Page specific script -->
<script>
  /*$('#summernote').summernote({
  height: 150, 
});*/

  $(function () {
    // Summernote
    $('#summernote').summernote({
      height: 150,
    });

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>