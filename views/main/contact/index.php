<?php
include_once('views/main/navbar.php');
?>
<main id='main'>
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs" style="background: #1E90FF;">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h1 style="color: white;" class="mt-4"><strong>KẾT NỐI</strong></h1>
        <ol>
          <li><a href="index.php?page=main&controller=layouts&action=index" style="color: white;">Trang
              chủ</a></li>
          <li><a href="index.php?page=main&controller=contact&action=index" style="color: white;">Chi nhánh</a>
          </li>
        </ol>
      </div>

    </div>
  </section>

  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title aos-init aos-animate" data-aos="zoom-out">
        <h2>Chi nhánh</h2>
      </div>

      <div class="row content" data-aos="fade-up">
        <?php
        foreach ($companies as $company) {
          echo '
            <div class="col-lg-6">
              <div class="info">
                <div class="address"> 
                  <i class="bi bi-geo-alt"></i>
                  <h4>Chi nhánh: ' . $company->name . '</h4>
                  <p>' . $company->address . '</p>
                </div>

                <div class="email"> 
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>contact@bk_engrisk.com</p>
                </div>

                <div class="phone"> 
                  <i class="bi bi-phone"></i>
                  <h4>Điện thoại:</h4>
                  <p>0123456789</p>
                </div>
              </div>  
              <hr>
              <br>
            </div>
            ';
        }
        ?>
      </div>

    </div>
  </section>


</main>
<?php
include_once('views/main/footer.php');
?>