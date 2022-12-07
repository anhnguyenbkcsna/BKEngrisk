<?php
session_start();
if (!isset($_SESSION["role"]))
    header("Location: index.php?page=main&controller=login&action=index");

if (isset($_SESSION['user'])) {
    require_once('models/user.php');
    $user_in = User::get($_SESSION['user']);
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
    <!-- Content Header (Page header)-->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý nhân viên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="page=admin&controller=layouts&action=index">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý nhân viên</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
    </section>
    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Button trigger modal-->
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addAdminModal">Thêm mới</button>
                            <!-- Modal-->
                            <div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog"
                                aria-labelledby="addAdminModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thêm mới</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=admin&action=add"
                                            enctype="multipart/form-data" method="post">
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label>Tên đăng nhập</label>
                                                    <input class="form-control" type="text" placeholder="Tên đăng nhập"
                                                        name="username" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Mật khẩu</label>
                                                    <input class="form-control" type="password" placeholder="Mật khẩu"
                                                        name="password" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Vai trò</label>
                                                    <select class="form-control" name="role">
                                                        <option selected value="2">
                                                            Teacher
                                                        </option>
                                                        <option value="1">
                                                            Manager
                                                        </option>
                                                        <option value="0">
                                                            Admin
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="row"> </div>
                                                            <label>Họ và tên lót</label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Họ và tên lót" name="fname" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="row"> </div>
                                                            <label>Tên</label>
                                                            <input class="form-control" type="text" placeholder="Tên"
                                                                name="lname" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Năm sinh</label>
                                                            <input class="form-control" type="number"
                                                                placeholder="Năm sinh" name="yob" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giới tính:</label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" value="1" />
                                                                        <label>Nam</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" value="0" />
                                                                        <label>Nữ</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input class="form-control" type="number"
                                                        placeholder="Số điện thoại" name="phone" />
                                                </div>

                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" placeholder="Email"
                                                        name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input class="form-control" type="text" placeholder="Địa chỉ"
                                                        name="address" />
                                                </div>


                                                <div class="form-group">
                                                    <label>Hình ảnh</label>&nbsp
                                                    <input type="file" name="fileToUpload" id="fileToUpload"
                                                        accept="image/png, image/jpeg" value="default.png" />
                                                </div>

                                            </div>
                                            <div class=" modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-primary" type="submit">Thêm mới</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-bordered table-striped" id="tab-admin">
                                <thead>
                                    <tr class="text-center">
                                        <th>STT</th>
                                        <th>Vai trò</th>
                                        <th>Tên đăng nhập</th>
                                        <th>Họ và tên </th>
                                        <th>Giới tính</th>
                                        <th>Năm sinh</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Cập nhật lần cuối</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;
                                    foreach ($admin as $admin) {
                                        if ($admin->role != 3) {
                                            echo "<tr class='text-center'>";
                                            echo "<td>" . $index++ . "</td>";
                                            if ($admin->role == 0) {
                                                echo "<td> Admin </td>";
                                            } else if ($admin->role == 1) {
                                                echo "<td> Manager </td>";
                                            } else  echo "<td> Teacher/TA </td>";
                                            echo "<td>" . $admin->username . "</td>";
                                            echo "<td>" . $admin->fname . " " . $admin->lname . "</td>";
                                            echo "<td>" . (($admin->gender == 'male') ? "Nam" : "Nữ") . "</td>";
                                            echo "<td>" . $admin->yob . "</td>";
                                            echo "<td>" . $admin->email . "</td>";
                                            echo "<td>" . $admin->address . "</td>";
                                            echo "<td>" . $admin->phone . "</td>";
                                            echo "<td> " . date("h:i:sa-d/m/Y", strtotime($admin->updateAt)) . "</td>";
                                            echo "<td>
											<btn class='btn-edit btn btn-primary btn-xs' style='margin-right: 5px;' data-acc='$admin->username' data-email='$admin->email' data-fname='$admin->fname' data-lname='$admin->lname' data-gender='$admin->gender' data-yob='$admin->yob' data-phone='$admin->phone' data-img='$admin->profile_photo' data-add='$admin->address'> <i class='fas fa-edit'></i></btn>
											<btn class='btn-changepass btn btn-warning btn-xs' style='margin-right: 5px;' data-email='$admin->username'> <i class='fas fa-lock'></i></btn>
											<btn data-toggle='tooltip' data-placement='top' title='Xóa' class='btn-delete btn btn-danger btn-xs' style='margin-right: 5px' data-email='$admin->username'> <i class='fas fa-trash'></i></btn>
											</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <div class="modal fade" id="EditUserModal" tabindex="-1" role="dialog"
                                aria-labelledby="EditUserModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Chỉnh sửa thông tin</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=admin&action=editInfo"
                                            enctype="multipart/form-data" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input class="form-control" type="text" placeholder="Username"
                                                        name='acc' readonly />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="row"> </div>
                                                            <label>Họ và tên lót</label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Họ và tên lót" name="fname" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="row"> </div>
                                                            <label>Tên</label>
                                                            <input class="form-control" type="text" placeholder="Tên"
                                                                name="lname" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Năm sinh</label>
                                                            <input class="form-control" type="number"
                                                                placeholder="Năm sinh" name="yob" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giới tính:</label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" value="male" id="Nam" />
                                                                        <label>Nam</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" value="female" id="Nu" />
                                                                        <label>Nữ</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" placeholder="Email"
                                                        name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input class="form-control" type="number"
                                                        placeholder="Số điện thoại" name="phone" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input class="form-control" type="text" placeholder="Địa chỉ"
                                                        name="address" />
                                                </div>

                                                <div class="form-group">
                                                    <label>Hình ảnh hiện tại </label>
                                                    <input class="form-control" type="text" name="img" readonly />
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh mới</label>&nbsp
                                                    <input type="file" name="fileToUpload" id="fileToUpload" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="EditPassModal" tabindex="-1" role="dialog"
                                aria-labelledby="EditPassModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Chỉnh sửa</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=admin&action=editPass"
                                            method="post">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" />
                                                <div class="form-group">
                                                    <label>Tên đăng nhập</label>
                                                    <input class="form-control" type="text" name="email" readonly />
                                                </div>

                                                <div class="form-group">
                                                    <label>Password mới</label>
                                                    <input class="form-control" type="password"
                                                        placeholder="Please enter your new password"
                                                        name="new-password" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="DeleteUserModal" tabindex="-1" role="dialog"
                                aria-labelledby="DeleteUserModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Xóa</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=admin&action=delete"
                                            method="post">
                                            <div class="modal-body">
                                                <input type="hidden" name="email" />
                                                <input type="hidden" name="img" />
                                                <p>Bạn chắc chưa ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger btn-outline-light" type="button"
                                                    data-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-danger btn-outline-light" type="submit">Xác
                                                    nhận</button>
                                            </div>
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
<script src="public/js/user/index.js"></script>
</body>

</html>