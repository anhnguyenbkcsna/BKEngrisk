<?php
  session_start();
  if (isset($_SESSION['user']))
  {
    require_once('models/user.php');
    $data = User::get($_SESSION['user']);
  }
  
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BKENGRISK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/uploads/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables-->
  <link rel="stylesheet" href="public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style-->
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
  <!-- Add Style -->

  <link href="public/assets/css/style.css" rel="stylesheet">



</head>

<body>
  <?php
  if (isset($_SESSION['user']))
  {
  echo '
    <div class="modal fade" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="EditUserModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ch???nh s???a th??ng tin</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form action="index.php?page=main&controller=register&action=editInfo" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <input type="hidden" name="email">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row"> </div>
                  <label>H??? v?? t??n l??t</label>
                  <input class="form-control" type="text" placeholder="H??? v?? t??n l??t" name="fname" value="' . $data->fname . '"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row"> </div>
                  <label>T??n</label>
                  <input class="form-control" type="text" placeholder="T??n" name="lname" value="' . $data->lname . '"/>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tu???i</label>
                  <input class="form-control" type="number" placeholder="Tu???i" name="age" value="' . $data->age . '"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Gi???i t??nh:</label>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '1') ? 'checked' : "") . ' value="1" />
                        <label>Nam</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '0') ? 'checked' : "") . ' value="0" />
                        <label>N???</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>S??? ??i???n tho???i</label>
              <input class="form-control" type="number" placeholder="S??? ??i???n tho???i" name="phone" value="' . $data->phone . '"/>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" type="text" placeholder="email" name="email" value="' . $data->email . '"/> 
            </div>
            <div class="form-group">
              <label>?????a ch???</label>
              <input class="form-control" type="text" placeholder="?????a ch???" name="address" value="' . $data->address . '"/>
            </div>
            <div class="form-group">
              <label>H??nh ???nh hi???n t???i </label>
              <input class="form-control" type="text" name="img" readonly value="' . $data->profile_photo . '" />
            </div>
            <div class="form-group">
              <label>H??nh ???nh m???i</label>&nbsp
              <input type="file" name="fileToUpload" id="fileToUpload" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">????ng l???i</button>
            <button class="btn btn-primary" type="submit">C???p nh???t</button>
          </div>
        </form>
      </div>
    </div>
  </div>';
  }
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h2><a href="index.php?page=main&controller=layouts&action=index">
            BK<span style="color: #00BFFF;font-size: 3rem;">ENGRISK</span></a></h2>
      </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="public/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php?page=main&controller=layouts&action=index">Trang ch???</a></li>
          <!-- <li><a href="index.php?page=main&controller=about&action=index">V??? ch??ng t??i</a></li> -->
          <li><a href="index.php?page=main&controller=services&action=index">Ch????ng tr??nh h???c</a></li>
          <!-- <li><a href="index.php?page=main&controller=archive&action=index">Chi nh??nh</a></li>
          <li><a href="index.php?page=main&controller=blog&action=index">Tin t???c</a></li> -->
          <li><a href="index.php?page=main&controller=contact&action=index">Chi nh??nh</a></li>
          <?php
          if (!isset($_SESSION["user"])){
            echo '
              <li><a href="index.php?page=main&controller=register&action=index" class="box-arrow-in-right"><i class="bu bi-file-lock-fill"></i></a></li> <!-- ????ng k?? -->
              <li><a href="index.php?page=main&controller=login&action=index" class="box-arrow-in-right"><i class="bu bi-person-lines-fill"></i></a></li> <!-- ????ng nh???p -->
            ';
          } else {
            echo '
            <li><a href="" data-toggle="modal" data-target="#EditUserModal"><img style="vertical-align: middle;
  width: 40px;
  height: 40px;
  border-radius: 50%;" src="' . (file_exists($data->profile_photo) ? $data->profile_photo : "public/dist/img/avatar4.png") . '"></a></li>
            <li><a href="index.php?page=main&controller=login&action=logout" class="box-arrow-in-right"><i class="bu bi-box-arrow-right"></i></a></li> <!-- ????ng xu???t -->
            ';
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <div class="header-social-links d-flex">
        <a href="https://www.facebook.com/VNGCorporation.Page/" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCk2jT9v-BOmjbPZ08LUbTVA" class="youtube"><i
            class="bu bi-youtube"></i></a>
      </div> -->

    </div>
  </header><!-- End Header -->