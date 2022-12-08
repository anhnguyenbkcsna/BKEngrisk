<?php
include_once('views/main/navbar.php');
?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs" style="background: #1E90FF;">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h1 style="color: white;" class="mt-4"><strong>CHƯƠNG TRÌNH HỌC</strong></h1>
        <ol>
          <li style="color: white;">Trang chủ</li>
          <li style="color: white;">Chương trình học</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <?php foreach($comments as $comment){
        echo '
          <div class="section-title mt-3" data-aos="zoom-out">
            <h2>'. $comment->name .'</h2>
            <h4>'. $comment->content .'</h4>
            <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img class="card-img-top p-2" src="public/dist/img/logo-BK.png" alt="Card image cap">
                <div class="card-body">
                  <h3>Khóa học TOEIC sơ cấp</h3>
                  <h6 class="mb-2 text-muted">Giáo trình cân bằng 4 kỹ năng, các bài học thú vị</h6>
                  <p class="bg-light text-dark p-3 mt-2 rounded">Thời lượng: 12 tuần</p>
                  <p class="bg-light text-dark p-3 mt-2 rounded">Yêu cầu: Không</p>
                  <p class="bg-light text-dark p-3 mt-2 rounded">
                    <span>Số lượng: 30 người</span>
                  </p>
                  <p class="mt-2">Học phí: <span style="color: #00BFFF;font-size: 3rem;">10.000.000</span></p>
                  <button type="button" class="btn btn-outline-info mt-3">XEM THÊM</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img class="card-img-top p-2" src="public/dist/img/logo-BK.png" alt="Card image cap">
                <div class="card-body">
                  <h3>Khóa học TOEIC sơ cấp</h3>
                  <h6 class="mb-2 text-muted">Giáo trình cân bằng 4 kỹ năng, các bài học thú vị</h6>
                  <p class="bg-light text-dark p-3 mt-2 rounded">Thời lượng: 12 tuần</p>
                  <p class="bg-light text-dark p-3 mt-2 rounded">Yêu cầu: Không</p>
                  <p class="bg-light text-dark p-3 mt-2 rounded">
                    <span>Số lượng: 30 người</span>
                  </p>
                  <p class="mt-2">Học phí: <span style="color: #00BFFF;font-size: 3rem;">10.000.000</span></p>
                  <button type="button" class="btn btn-outline-info mt-3">XEM THÊM</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img class="card-img-top p-2" src="public/dist/img/logo-BK.png" alt="Card image cap">
                <div class="card-body">
                  <h3>Khóa học TOEIC sơ cấp</h3>
                  <h6 class="mb-2 text-muted">Giáo trình cân bằng 4 kỹ năng, các bài học thú vị</h6>
                  <p class="bg-light text-dark p-3 mt-2 rounded">Thời lượng: 12 tuần</p>
                  <p class="bg-light text-dark p-3 mt-2 rounded">Yêu cầu: Không</p>
                  <p class="bg-light text-dark p-3 mt-2 rounded">
                    <span>Số lượng: 30 người</span>
                  </p>
                  <p class="mt-2">Học phí: <span style="color: #00BFFF;font-size: 3rem;">10.000.000</span></p>
                  <button type="button" class="btn btn-outline-info mt-3">XEM THÊM</button>
                </div>
              </div>
            </div>
          </div>
          </div>';
      } ?>
  </section>
  <!-- <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Chương trình học tiếng Anh thương mại</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img class="card-img-top" src="public/dist/img/logo-BK.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">BKEngrisk Quận 10</h5>
              <p class="card-text">Địa chỉ: .. .</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img class="card-img-top" src="public/dist/img/logo-BK.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">BKEngrisk Quận 2</h5>
              <p class="card-text">Địa chỉ: ...</p>
            </div>
          </div>
        </div>

      </div>
  </section> -->
  < <!-- <section id="services" class="services section-bg"> -->
    <!-- <div class="container" data-aos="fade-up">
      <div class="section-title" data-aos="zoom-out">
        <h2>Sản phẩm</h2>
        <p>Các sản phẩm nổi bật</p>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php
          // foreach ($products as $product) {
          //   echo
          //     '
          //     <div class="col" data-aos="zoom-in" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#exampleModal'.$product->id.'">
          //       <div class="card h-100">
          //         <img src="' . $product->img . '" class="card-img-top" alt="..." style="width="300" height="300"";>
          //         <div class="card-body">
          //           <h5 class="card-title">' . $product->name .'</h5>
          //           <p class="card-text">' . $product->description .'</p>
          //         </div>
          //       </div>
          //     </div>';
          // }
        ?>

      </div>
    </div> -->

</main><!-- End #main -->

<?php
include_once('views/main/footer.php');
?>