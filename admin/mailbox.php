<?php
$page = "mailbox";
include('include/query.php');



include('header.php');
 include('menu.php');
?>


<!-- Asıl içerik Kısmı --> 



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gelen Kutusu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ansayfa</a></li>
              <li class="breadcrumb-item active">Gelen Kutusu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-3">
        
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Gelen Kutusu</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Ara">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->





                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  
                  <?php

                    foreach ($mailbox as $email) {
                    ?>






                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><?php echo $email['name'] ?></td>
                    <td class="mailbox-name"><a href="read_mail.php"><?php echo $email['email'] ?>ı</a></td>
                    <td class="mailbox-subject"><b><?php echo $email['subject'] ?></b> - <?php echo $email['message'] ?>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?php echo $email['gonderilme_zamani'] ?></td>
                    <td>
                            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $email['id'] ?>" onclick="editorFunc(<?php echo $email['id'] ?>)">Oku</button></center>
                            </td>
                            <form action="/admin/include/functions.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $email['id'] ?>">
                                <td>
                                    <center><button type='submit' class="btn btn-danger btn-xs" name="mail_sil">Sil</button></center>
                                </td>
                            </form>
                  </tr>

             <!-- mail okuma kısmı-->
                
                  <div class="modal fade" id="exampleModal<?php echo $email['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">OKU</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/admin/include/functions.php" method="POST">
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <input type="hidden" name="id" value="<?php echo $email['id'] ?>">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Gönderen Adı</label>
                                                    <input type="text" class="form-control" value="<?php echo $email['name'] ?>" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Gönderen Emaili</label>
                                                    <input type="text" class="form-control" value="<?php echo $email['email'] ?>" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Konu</label>
                                                    <input type="text" class="form-control" value="<?php echo $email['subject'] ?>" name="subject">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mesaj</label>
                                                    <textarea id="summernote<?php echo $email['id'] ?>" name="message">
                                                        <?php echo $email['message'] ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
                                            <button type="submit" class="btn btn-primary" name="mail_oku"><a style="color: white;" href="create_email.php">Yanıtla</a></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>











                  <?php } ?>

                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">




                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                  <i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->




                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <?php

include('footer.php');

?>



 <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->






<script>

function editorFunc(id){
        $('#summernote'+id).summernote()
    }



  $(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>