<?php


$page = "content_list";
include('include/query.php');
include('header.php');
include('menu.php');

/*
$contentsor = $db->prepare("SELECT * FROM contents WHERE `is_active`=1");
$contentsor->execute();

$content_listesi = $contentsor->fetchALL(PDO::FETCH_ASSOC);
*/
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>İçerik Listesi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Anasayfa</a></li>
                        <li class="breadcrumb-item active">İçerik Listesi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">İçerik Tablosu</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Başlık</th>
                        <th>Kategori</th>
                        <th>İçerik</th>
                        <th>Oluşturan</th>
                        <th>Oluşturma Tarihi</th>
                        <th></th>
                    </tr>
                </thead>



                <tbody>

                    <?php

                    foreach ($content_listesi as $content) {
                    ?>
                    <tr>
                        <td></td>
                        <td><?php echo $content['title'] ?></td>
                        <td><?php echo $content['kategori'] ?></td>
                        <td width="500px"><?php echo $content['content'] ?></td>
                        <td><?php echo $content['user_id'] ?></td>
                        <td><?php echo $content['created_at'] ?></td>
                        <td>
                            <div class="row">

                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal"
                                        data-target="#exampleModal<?php echo $content['id'] ?>"
                                        onclick="editorFunc(<?php echo $content['id'] ?>)">Düzenle</button>
                                </div>


                                <div class="col-md-6">
                                    <form action="admin/include/functions.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $content['id'] ?>">
                                        <button type='submit' class="btn btn-danger btn-block btn-sm "
                                            name="content_sil">Sil</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!--modal -->

                    <div class="modal fade" id="exampleModal<?php echo $content['id'] ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">İÇERİK DÜZENLE</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="admin/include/functions.php" method="POST">
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <input type="hidden" name="id" value="<?php echo $content['id'] ?>">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Başlık</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $content['title'] ?>" name="title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kategori</label>
                                                <select id="inputStatus" class="form-control custom-select"
                                                    name="kategori" value="<?php echo $content['kategori'] ?>">
                                                    <option selected>Seçiniz</option>
                                                    <option>Yazılım</option>
                                                    <option>Güncel</option>
                                                    <option selected>Teknoloji</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">İçerik</label>
                                                <textarea id="summernote<?php echo $content['id'] ?>" name="content">
                                                        <?php echo $content['content'] ?>
                                                    </textarea>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Kapat</button>
                                        <button type="submit" class="btn btn-primary"
                                            name="content-update">Kaydet</button>
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
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Page specific script -->
<script>
function editorFunc(id) {
    $('#summernote' + id).summernote()
}


$(function() {
    // Summernote
    //$('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
})
</script>

<!-- Page specific script -->
<script>
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
<!-- Page specific script -->


<?php include('footer.php'); ?>