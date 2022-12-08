<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page=admin&controller=login&action=index");
}
?>
<?php
require_once('views/admin/header.php'); ?>

<!-- Add CSS -->


<?php
require_once('views/admin/content_layouts.php'); ?>

<!-- Code -->
<div class="content-wrapper">
  <!-- Add Content -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách chương trình học</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="page=admin&controller=layouts&action=index">Home</a></li>
            <li class="breadcrumb-item active">Danh sách chương trình học</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <!-- Button trigger modal-->
              <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addCompanyModal">Thêm
                mới</button>
              <!-- Modal-->
              <div class="modal fade" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="addCompanyModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Thêm mới</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="index.php?page=admin&controller=comments&action=add" method="post">
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Tên chương trình</label>
                          <input class="form-control" type="text" placeholder="Tên chương trình học" name="name" />
                        </div>
                        <div class="form-group">
                          <label>Nội dung chương trình</label>
                          <input class="form-control" type="text" placeholder="Nội dung chương trình" name="content" />
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng lại</button>
                        <button class="btn btn-primary" type="submit">Thêm mới</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <table class="table table-bordered table-striped" id="tab-comments">
                <thead>
                  <tr class="text-center">
                    <th>Mã chương trình</th>
                    <th>Tên chương trình</th>
                    <th>Nội dung chương trình</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
									foreach ($comments as $comment) {
										echo "<tr class='text-center'>";
										echo "<td>" . $comment->id . "</td>";
										echo "<td>" . $comment->name . "</td>";
										echo "<td>" . $comment->content . "</td>";
										echo "<td>
											<btn class='btn-edit btn btn-primary btn-xs' style='margin-right: 5px' data-id='$comment->id' data-name='$comment->name' data-content='$comment->content'> <i class='fas fa-edit'></i></btn>
											<btn class='btn-delete btn btn-danger btn-xs' style='margin-right: 5px' data-id='$comment->id'> <i class='fas fa-trash'></i></btn>
											</td>";
										echo "</tr>";
									}
									?>
                </tbody>
              </table>
              <div class="modal fade" id="DeleteStudentModal" tabindex="-1" role="dialog"
                aria-labelledby="DeleteStudentModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content bg-danger">
                    <div class="modal-header">
                      <h5 class="modal-title">Xóa</h5><button class="close" type="button" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="index.php?page=admin&controller=comments&action=delete" method="post">
                      <div class="modal-body"><input type="hidden" name="id" />
                        <p>Bạn có chắc chắn muốn xóa chương trình học này?</p>
                      </div>
                      <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button"
                          data-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light"
                          type="submit">Xóa</button></div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="EditStudentModal" tabindex="-1" role="dialog"
                aria-labelledby="EditStudentModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Chỉnh sửa chương trình học</h5><button class="close" type="button"
                        data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="index.php?page=admin&controller=comments&action=edit" enctype="multipart/form-data"
                      method="post">
                      <div id="EditStudentModalForm" class="modal-body">
                        <div class="row">
                          <div class="col-12"><label>ID</label> <input class="form-control" type="text"
                              placeholder="Name" name="id" readonly /></div>
                        </div>
                        <div class="row">
                          <div class="col-12"><label>Tên chương trình</label><input class="form-control" type="text"
                              name="name" /></div>
                        </div>
                        <div class="row">
                          <div class="col-12"><label>Nội dung chương trình</label><input class="form-control"
                              type="text" name="content" /></div>
                        </div>
                      </div>
                      <div class="modal-footer"><button class="btn btn-secondary" type="button"
                          data-dismiss="modal">Đóng</button><button class="btn btn-primary" type="submit">Chỉnh
                          sửa</button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->
<!-- <script src="public/plugins/moment/moment.min.js"></script> -->
<script src="public/js/comments/index.js"></script>

</body>

</html>