<?php
  include_once('views/main/navbar.php');
?>
<main id="main">
  <section id="breadcrumbs" class="breadcrumbs" style="background-color: #1E90FF;">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h1 style="color: white;"><strong>THÀNH TỰU</strong></h1>
        <ol>
          <li><a style="color: white;" href="index.php?page=main&controller=layouts&action=index">Trang chủ</a></li>
          <li><a style="color: white;" href="index.php?page=main&controller=archive&action=index">Thành tựu</a></li>
        </ol>
      </div>

    </div>
  </section>
</main>

<?php
include_once('views/main/footer.php');
?>