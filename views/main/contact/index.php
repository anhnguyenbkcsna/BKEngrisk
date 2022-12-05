<?php
include_once('views/main/navbar.php');
?>
  <main id='main'>
     <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs"  style="background: #1E90FF;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1 style="color: white;"><strong>KẾT NỐI</strong></h1>
          <ol>
            <li><a href="index.php?page=main&controller=layouts&action=index" style="color: white;">Trang chủ</a></li>
            <li><a href="index.php?page=main&controller=contact&action=index" style="color: white;">Kết nối</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0566182305124!2d106.66340276474924!3d10.806975692300817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924a4278ba1%3A0x5899f7c18c88c86a!2zMiBU4bqjbiBWacOqbiwgUGjGsOG7nW5nIDIsIFTDom4gQsOsbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1654877927339!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title aos-init aos-animate" data-aos="zoom-out">
          <h2>Liên hệ</h2>
          <p>Liên hệ với chúng tôi</p>
        </div>

  
        <div class="row content" data-aos="fade-up">
        <?php
          foreach ($companies as $company)
          {
            echo '
            <div class="col-lg-6">
              <div class="info">
                <div class="address"> 
                  <i class="bi bi-geo-alt"></i>
                  <h4>Chi nhánh: '. $company->name .'</h4>
                  <p>' . $company->address . '</p>
                </div>

                <div class="email"> 
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@kms-technology.com</p>
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


  </main><!-- End #main -->
<?php
include_once('views/main/footer.php');
?>