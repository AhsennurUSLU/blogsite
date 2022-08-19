<?php
$page = "user_list";
include('include/query.php');
include('header.php');
include('menu.php');






?>

<!-- kullanici Wrapper. Contains page kullanici -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kullanıcı Listesi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Kullanıcı Listesi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Kullanıcı Tablosu </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>E-mail</th>
                        <th>Parola</th>
                        <th>Meslek</th>
                        <th></th>

                    </tr>
                </thead>



                <tbody>

                    <?php

                    foreach ($kullanici_listesi as $kullanici) {

                    ?>
                    <tr>

                        <td><?php echo $kullanici['first_name'] ?></td>
                        <td><?php echo $kullanici['last_name'] ?></td>
                        <td><?php echo $kullanici['email'] ?></td>
                        <td><?php echo $kullanici['password'] ?></td>
                        <td><?php echo $kullanici['users_job'] ?></td>

                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal"
                                        data-target="#exampleModal<?php echo $kullanici['id'] ?>"
                                        onclick="editorFunc(<?php echo $kullanici['id'] ?>)">Düzenle</button>
                                </div>

                                <div class="col-md-6">
                                    <form action="include/functions.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $kullanici['id'] ?>">
                                        <button type='submit' class="btn btn-danger btn-block btn-sm"
                                            name="user_sil">Sil</button>
                                    </form>
                                </div>
                            </div>



                        </td>

                    </tr>
                    <!--modal -->



                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $kullanici['id'] ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Kişiyi Düzenle</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/include/functions.php" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo $kullanici['id'] ?>">
                                            <label for="exampleInputEmail1">İsim:</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $kullanici['first_name']?>" name="first_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Soyisim :</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $kullanici['last_name']?>" name="last_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail :</label>
                                            <input type="email" class="form-control"
                                                value="<?php echo $kullanici['email']?>" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Parola :</label>
                                            <input type="password" class="form-control"
                                                value="<?php echo $kullanici['password']?>" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Meslek :</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $kullanici['users_job']?>" name="users_job">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Kapat</button>
                                        <button type="submit" class="btn btn-primary" name="user_update">Değişiklikleri
                                            Kaydet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/modal -->


                    <?php } ?>
                </tbody>

                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>




    <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.kullanici -->
</div>
<!-- /.kullanici-wrapper -->
<?php include('footer.php'); ?>




<!-- Page specific script -->
<script>
function editorFunc(id) {
    $('#summernote' + id).summernote()
}


/*

    $(document).ready(function () {
    $('#example1').DataTable({
        language: {
            lengthMenu: 'Görüntüle _MENU_ Kayıt / Sayfa',
            zeroRecords: 'Bulunamadı. - Üzgünüz :(',
            info: 'Görüntülenen sayfa _PAGE_ / _PAGES_',
            infoEmpty: 'Henüz bir kayıt bulunmamaktadır.',
            infoFiltered: '(Maksimum _MAX_ kayıt filtrelendi.)',
        },
        
        
    });
});
*/
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>