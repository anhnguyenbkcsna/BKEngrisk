<?php
  include_once('views/main/navbar.php');
?>
<main id='main'>
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs" style="background-color: #1E90FF;">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h1 style="color: white;"><strong>CHI NHÁNH</strong></h1>
        <ol>
          <li><a style="color: white;" href="index.php?page=main&controller=layouts&action=index">Trang chủ</a></li>
          <li><a style="color: white;" href="index.php?page=main&controller=archive&action=index">Chi nhánh</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title" data-aos="zoom-out">
        <h2>Các chi nhánh của trung tâm BK<span style="color: #00BFFF; margin-left: 10px;">ENGRISK</span>
        </h2>
      </div>
      <div class="btn-group">
        <button id="bt-all-branch" type="button" class="btn btn-light ml-2 p-3" onClick="myFunction('all')"
          data-bs-toggle="button" aria-pressed="true">Tất
          cả</button>
        <button type="button" class="btn btn-light ml-2 p-3" onClick="myFunction('hanoi')" data-bs-toggle="button"
          aria-pressed="true"> Hà
          Nội</button>
        <button type="button" class="btn btn-light ml-2 p-3" onClick="myFunction('danang')" data-bs-toggle="button"
          aria-pressed="true">Đà
          Nẵng</button>
        <button type="button" class="btn btn-light ml-2 p-3" onClick="myFunction('binhduong')" data-bs-toggle="button"
          aria-pressed="true">Bình Dương</button>
      </div>
      <div id="all-branch-content" style="display: none;" class="mt-4">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="public/dist/img/logo-BK.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">BKEngrisk Quận 10</h5>
              <p class="card-text">Địa chỉ: .. .</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="public/dist/img/logo-BK.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">BKEngrisk Quận 2</h5>
              <p class="card-text">Địa chỉ: ...</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="public/dist/img/logo-BK.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">BKEngrisk Quận 8</h5>
              <p class="card-text">Địa chỉ: ...</p>
            </div>
          </div>
        </div>
      </div>
      <div id="hanoi-branch-content" style="display: none;" class="mt-4">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="public/dist/img/photo4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Chi nhánh BK ENGRISK...</h5>
              <p class="card-text">Địa chỉ: .. .</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="public/dist/img/photo4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Chi nhánh BK ENGRISK ...</h5>
              <p class="card-text">Địa chỉ: ...</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="public/dist/img/photo4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Chi nhánh BK ENGRISK ...</h5>
              <p class="card-text">Địa chỉ: ...</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
    function myFunction(m) {
      var x = document.getElementById("all-branch-content");
      var y = document.getElementById("hanoi-branch-content");
      if (m === "all") {
        x.style.display = "block";
        y.style.display = "none";
      } else if (m === 'hanoi') {
        x.style.display = "none";
        y.style.display = "block";
      }
    }
    </script>


  </section><!-- End Portfolio Section -->
</main><!-- End #main -->
<?php
include_once('views/main/footer.php');
?>