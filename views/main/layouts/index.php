<?php
  include_once('views/main/navbar.php');
?>
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active" id="homepage-carousel-1" >
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Tại sao chọn KMS</h2>
          <!-- <h2 class="animate__animated animate__fadeInDown">Đây là các lí do vì sao Doanh nghiệp đối tác lựa chọn KMS</h2> -->
          <p class="animate__animated fanimate__adeInUp" >Đây là 02 lí do vì sao Doanh nghiệp đối tác lựa chọn KMS</p>
          <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Tìm hiểu thêm</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" id="homepage-carousel-2">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Chất lượng sản phẩm đã được chứng minh</h2>
          <p class="animate__animated animate__fadeInUp">Với kinh nghiệm cung cấp sản phẩm phần mềm cho hơn 200 khách hàng và tự xây dựng hàng loạt các dịch vụ của riêng mình, những điều ấy tạo nên khác biệt của riêng KMS.</p>
          <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Tìm hiểu thêm</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item"  id="homepage-carousel-3">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Không ngừng sáng tạo và đổi mới</h2>
          <p class="animate__animated animate__fadeInUp">KMS luôn chủ động thay đổi và ứng dụng các công nghệ mới để giúp cho mọi sản phẩm gửi tới khách hàng phải luôn là phiên bản sống động nhất.</p>
          <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Tìm hiểu thêm</a>
        </div>
      </div>


      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->


  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
      <div class="container">
        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" id="short-about">
                <h3>KMS Technology là ai?</h3>
                <p class="fst-italic">
                KMS Technology, công ty dẫn đầu thị trường toàn cầu về phát triển phần mềm, dịch vụ thử nghiệm và tư vấn công nghệ hàng đầu cung cấp một bộ tích hợp các giải pháp tiên tiến giúp các doanh nghiệp đẩy nhanh tốc độ đưa sản phẩm ra thị trường
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Hợp tác thân thiện</li>
                  <li><i class="ri-check-double-line"></i> Độc lập tư duy</li>
                  <li><i class="ri-check-double-line"></i> Đảm bảo uy tín</li>
                  <li><i class="ri-check-double-line"></i> Tăng độ tin cậy</li>
                </ul>
                <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto" > Tìm hiểu thêm</a>
              </div>
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 text-center">
                <img style="width: 100%; height: auto" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAACcCAMAAAAwLiICAAAAolBMVEX///8mqeAAo94Aot5MTU8ap99QUVPL5vVWV1nD4/RJSkyn1vBSU1WAxurj8vpGR0p4eXro6OhfYGKkpKX29vbU6/ewsLGHiIlJs+Pi4uKPkJFBQkX0+v3X19iAgILq9ftkvOaampuGyOu8vL3Hx8ib0e6q1/Dt7u68vb1dueU/sOKTze2VlpdcXV9wwOi13PI3ODtrbG7Pz89naGkxMzYAm9yLUY7wAAAcoUlEQVR4nO2d57qiSrOAkSQLUYwYMIdlzjP3f2unqgPQTYOo63vmzB7rx95LCRYv1RU6jaa9KJ3Tq1d+hEvZ0D8U35SyUSp9KL4nyBAoTv+0Hn+zUIYfiu8IZ/ih+LrEDD8UX5Ukww/F10Rk+KH4isgMPxSfF8LQsiydCfz5ofikQJ2iG9a2uvo+f4GcK/vTDr6Z/mm9/ib5+r1dlYfyt7XzafoHlPlLZfjF/5rUOiC1SXzojyj0t0rnu9qzDO4SDatXPXf+tE5/lQzPU4wluiD4cXr+WKIonXJKyPfnrQHBWDd2p9W5DE0ZmnT5vDrt6LfbMzlpWO7Iks13IvxIhkFPJEndTtJXvs2Dwymplb/SADKklnmXkmhp+u856D3co80Zu1U5fUFnhSB1a4XP19n9Fi83sn/py0ieV1WeszPEu+1SD23k/t5EOvw7Wx0NH1NqZ49knmEiO0tIpXvwq8O5Ada2q7BAMqyVz9+VyjcYJLvHpLIDezTILc+6eIMciHriPEsJUVSmZPVSZ2zFM0rWVDg8zT8sSlnXpdMfiaWfH0K0jBV8U0FAJ9oQyquplXi5hjVd0QOdE4KuIONeEs5bEB8z7KQqKKNT/LCkT+rkAmJ8P4BoWR1soDogJEb4dcIaRbwJVi8nkvtMAKO+Qx33yX6eNyDKDFNtOXWKfFYvfTj9IphMXmGY8VZitazeEIFYpElrk3mmsQPHOVKu9YD3nuCJznwDYgGGwi34L34VPSyK7BgKikqtWHUcQ4GmSZt9bWrk/oZlTJEWOEQd0dcig30dYgGGWkmhlFUqeliQ2muGCE+oMEWuuw5P1QEmWwzOp3yERDnjhGdu4RK465Dr/zLEIgwrCkuDn+Ru6jv/sCgr5ckFxNpnQtTn6GlpZPkW2/FO+Se2alRvBRd9xRRfhdgrwFDLeG49/7Cl1Ob0WmuG222zIKIdfoM7LBPjkp5nzn7PmkvmQppyGRzjd0TxRYgyw5IqIdtn+eh97mF9pdJGToYKiypUES6YTgFDq0aYyJeV2dPrZTk4EurgEJHihFz4GsRCDIeZXswY5h7WVXf7cYjYeM4GUb0SqRID4+1Ejzy3FbVro0KM0DizJO0liIUY5jRA65R/WJWT/jhEeFVlsENQfR4xtPacosX0A1X5N715pIIBznQItljGWP0aRJmhpWSYF06h+Ms9PEnfToD4TPVnKMI9oAIA0BZ1+KVq8jl5Nmqxx4eMy+JKJTRAd8ouB9gvQCzGMDevA2efe3iaD1Hf154RFUQMzNAgOxJDvcNSBohuBKehMYj6d0c4EZMjg+Rj8EqfhphiqDAbLTVkJlVS+l7PO6woMxIQs6uaorJDh3giKbaYOllz9nYt+ov4OunnrTYXdMTwB2n3CVk+DbEgQymPtPYn2Y+KuosaKjAlIb49VWsHbwkSxFNUkPObWxb6OgqReLszhQjfa5EC9A9MFE8kXazmdYWpIBZleBYtTc8vfY2hFKvTxV8S4vRdiCXAp2NbZFpZUacMVCJ0yJSmD5hH4A+DB41as84YoEMkdLUnIcoM9QyGmpWy/Wq2E9T3ctaYLv5+FuIQ1EGfwdqLteXdCZjDznWa8W8tkqhbtLRhClr6F3Pn6BLALQKYSk7XUxpiimHWK5A8Dao0zK7bSI0ima7cEfijEFeQHGBjjjyzvh/u9OjtAVpU6VsnNZ5F6zFWnOyGiYtIgwYGWaakgliYoZJIZvVLq+XvNPekJCEqCrlnZWtBnphIs6C90nQRexagkePPTwxSFegk5aKtGRLERMQEfkM9X5sUxOIMpTDBCuusKpA13VLKAyRFSHGyussKC0TUlfhAmHtjkyY1KYRdPGtH4ptObABbMxZ8yQaF8W+l5/QjyxDnTzCUgojORn7OalPkSKTeRan4E5JtnB/zUErbSuYoHBii/IA92ulPX+mUdJKsyIukM0jgAOl6ECig6nqud5EsUc6Oc5IjMZ2J7V3Vf5hIZ6SsSCz+ni/7cJRzrlawRgxxlzb9lWHR/kcCkebp5M+OTnvMJGe/I6aYM7omW4bEMNuIpZGT+DdUPdmJxFq+TnDXr9XOVknp8+cWeLsvFkkERTokXECtEJ9M/tzrVkdUkcaZL/SKGa8q9cjWXooL6uE/ImK7T6bG6TEVIdSKxi42kxc7INQd5Xrk4i1o2LyHgcayqa66ginDMze4iCiLzahqKa9QQazK3S7qbj/5OtGg0qN7wmGpU0Lw2DlpZj5Fxcv+0qEd8R/76lTZ6BQDpcr6OhXyP/omLV2vds5Mxxq09JxA9yg6GxmXSq5NsPVU/5f4jCIpofhTjyUUELlLqPOFWsTZPY5VlSnHjJEJQQckCA38xNTBYE4eIiNVTOeJUmBQx/ZUwZeUVPFnCAE0p/h7ccQUblIRNKj9xtY8T9RUVgmdNuGYFyKwoTCCWi1ZbIOH1XFEuiDEidiLbim7oKWCT3wEeUxA9gn7VPCL5NVeWbG7ogYJC7S/RClcYnMggONcV4/vRE9WpfFmlRgXxGIbvYOmDi+Ksk/yaSqvLeUA8hlSq0wpnV38vWqKglOo6fBWKzpYzkrI93rMHMrqaSdEzixii1NIrBWm4xXsH1dRVHVASFM50l1Ww2wKKkgpJ5RT/L00jUTUsUMGjE/4lZQJFC+CvqTmuMVgcUI3pisoKrvCpEQntQpTCg3ySKpUDyosOaf4+3o8up4PERiSrmqMBnKcypj2lpKq/Cp14qNIca2gqO6UrUoURacmtTlDmuon14OK159X/A2rxYZVBLccQ0SG8LhDA9pHLRXs9V1uVKFS26Wvq4ERQnzEoJimmDE8IJV/htBgpylTF+SUncJE0svJkMBpfVcKSPIe0a/UdNrf38E4wMqV5IiX8Tsr841k9dtIvSuwhA6NLCUFxayBql12opNZ8LHHyEmmM++R3VeXIwmKHGKH+DJoyV9oNytarpwnk1qtxmcNlx/81iSaaAwXTSZnWrSsIBBgm+qpKGZBHMqDTvFPZxd8qsNTtarb/JsUklUKImWIKdc3Buc5qz2suWJycREpz1m9iG3FwAhJW6FEMXPcWfIncXiQCz4pjSxLhzPeeyF7fSApiIwhpgsQGxOOJZq/+YyQmaCJt2wlxj9EitkzIOThUO51xMiamo6V29WVkJzir6jIEDlD7Nvc6zvR3JFj8QUWw/NJmAmKjn+HXT888xAo5szFOUtRlja577yCL10PZqot55ovNDgJYsQQbzZHiKkeZmNbhOOQLNIQL+0hxHmiGEtSzJsVJo290z44yVVKBZ9iADBLcoq/giJCnMQJJoRRFUSs/YzpQ8fRmRqpXBUh9gSIJSN+ttz5iSfJv50fDnrK/ZF5yj4oex7LVrTE+K1wiEL0gkyHl8UPpVy1pDx0yywxKiSSDih/pqzcL9aRe2CkJ39UDwoiFX+lQslhLN/JdJU8UjzMiT6xlExogWBp/lTw6syTHDHJIE2Ru3LBiT+Ysy3PBJHy7OcLvuybP7kESFwBQJ+JU4SEroJ9NSw6W5ZR2r8Q/jv7ksE40uhciW8pBMIHEIeygxU+vVDwZf72e8IeilGEFgBFGvc9Vq/yUi5PnojVRZiEYCHJZ0KJycSjJRh5MwxTBZ9kpw/TFsVozHsQGUWoL8o6lAfEYVjb/Xxe5XI6nR5VLHBKdPp8vifYIM+eYAclbT3ykz1cDJTTNyUXfHIt9zgOvtqRnYbI3yehCPVFDR+5zGrnhBjbhznOsGeIQ9sl4mXJayHRMGUdj5elqZdYlF4u+JLy8vTilC6R5kgRkWKRlpoxbhlySqaUSirFgbqsgg4C67h0CyuwQHKeQVEu+HIGALPk5cU/siTygD2d7rXDdyzHxVKBjjCiV+pCjfbywjMqvFQBiBn2kir4pGCbM9gdy6tjpLIkXyhQhI9zqyT3ykVdsjktmh8Su2XpCyG5tsrTF4GoWAFZeqPgE3T+mQAtepY9+kMIzxNBp2hw4LzNG2PhB4UBAjD0CQ3OuipaFoI4VMyvSRd84uGHfZ/8gX+CofTG9lCSkYdOOEU6TDU8Q02XO0ZQhcqQFNjJoSqwbNKxrRnKjKMQRAjvKb3zC77UzMNM+YH2nJ66tt9h85nGsY4MmNKOhUdV+g7nSBGO0aApNuEpXvelvrYYxHQy8lbBl5SXJz1wnZVZyxy7tYn90JN2NY13zbCApwgx9CtSMdAdNXh8QZvWcdg0I7aLe0BkdzCfpX0c5FdyEo8/KPiSIu938aTs9sqIizNk8U3STHELrTjusEVSqvVhQzq7jINHjrRA0fHL/IkT/1Uh61jYCEE8nYTYydlQTh/e0gG5uEPcisYGdu+vq/kr5YzDcxPVdI4TnVyskSyMmuScXUEYy10EExzqe76r7j8hZI6wlCrWaCZN8srybzzri2Q+v7FGhWBO8vFaKkmc5k1P/E/LCieACaaIeRnWdLTUpmCqJJrSWU7gAkllKJS6xpDNXP4nha6cSGSi+JGsvidtc0vzMPpfOrOdxBR9K/SJY1fs9p81RDJdvZzwcICrQ0MFtmbIrRAfndgA6SqOKtPkHHfRSUxsJFtW/quGeCbDZokcV6+x9BktEv0eQtyTmU+Y86O/ZH2uxiqa2YgderR2yO5QadxEacN3/VEkiTNHiyBYRF80RqN2dKg9GjXoOYkvycd+4lMfbhAs18lvhB/gd17iaY30AapAO7o0PqU9Ut1oh2sHyIpClvhV+UYaaHRon4imREAjRMyIeOqvb/koPbkey+6v7EGuVmgmJURlrj775Pr8tPXBNW0Q1x8v2XWXGEf/EgbkD8d3khRdvxv9HTgu3sD0r7fou7Efyvpsmr5JTjsuhO9BAXY9VaBxcf1Igbt72aQfrXdCy0JL6vGxljhUkHlvFl2IhlUjm2ITFdt8bKVH1kdiHCpl9zG3Qh/FcTzy/wtCrDuOT4U/48b3HEDqAknPb5HrbDcB0bUpxKbjXRM3d7wB+6txNB3bdeEWnuOO+fGuZ4vatK+u4+HvuLZj3hNGu/A9zzWbTRM08MlNb77TZAcHtj1TPNoW+EFssVITi4AM7a+36Ng1FnTUVZbljmXccMAi/RuVvI76NoimmfC4bfonQPQc+qHNzKrlO+4VG+J61HLCXIiOPY7vHUHs+47nBdi2+zP4kz+9DLHtAOJWH361H9jw2qJfAAX8AXEN6009PNDvTJva+cIV3lwMkXQZEDMS56FDa2YNPN6yhDVesZQni5S3dIshPWdhFBM3shkGMSkLeIRl9GlJeGVCdMzYKjjENthV1LDXd48/tAwRj0TuYGw7XI2l75ix0+sHXE0Xm3w/dGzBE3OBvISsa8Yx906yw9/gGYzF0moIKeyLbXJEgSxeo9eDhb4HsQ0M+/IFGRC9wd3xA/49hzjwvG7i2qbjUocnQQxMJ2lSY4+10rarUABvj1/DC1IeJJGWOkTMT+KJOkCKm5vFZqJAe+bzlM5xhkiwregq3ZWet0SPSR7EmW0H8vlZEO1D23R8HjoYxHboCDdc++yzBNFz/LX4OSQmFqgUAGmAZ9CunrtQHaTlB/q0HSlC4u3nrGgytcX67KE9R/OUqnFWWSObO2F/FWZJ70H0HFs+XYLYSEBE/8dNg0FcyBAGnkvOECGOXO8gnBbYJgm6YLlqrTdA0bG76oOkzZK1ubSUG0YzseOWzRuvEffdRzR3Q1oiDtkUhhcgxoFl7SePcQGI/TaXkZmAiHGTOSkG8eC5Ytp3M21iPSJEYHYTTmu4HrZncCdZnA7gN+9Zz0TnCZ/oNkuYUMtrAqwdH4PRz/IwEhlDmOt0Xypy8FmIPMUJUfmIkCAt23F9LpC+JCBqgcuyDwZx7PjixdD8SYgXIbaYfcbie2NyttfK0vvuuOusY9toZjDYGfnHGeTVKTs+jmltpbmpZFBryhjStOd5iDTZ9nMh2lGKbosQtZnp1fH/WRAbSogz2WA136EQbQ6xP0BJ2GXq1gnZxjWH1tPpmLO0B6WV+oN8ID38NUDZS97naYi06LuRzE5pCC3bXiy5RJ6fQYT0hHgqBrHr+WIOwt+LZIm2KRZva6pVI/aVN6ivPC9R5hSASOe0Vg06+6G2fbTYyDLIzrPgDumwYHSbtwKL7yhy2ezAQuTuma0IYkt2dvwLEeJSNnn+RVyb9MddzKHiU4pApBOlz3xf3k4uRsvYIiyyMy/py453pn0L4liViGWmOPSbNrjVDYc4cp26cLHHHl2ECAHkKJx2dfwGVcBNmOjBexYi6SHUJsilij6utrdSG0QTgPA1GfYaVpE49tpM4ob+HsSRyhQfQISmCOiP7K7g/peJaw88i5byRPiYdBwLk7GHcJ8IwS9AZJNwvvEfF6D7w3f2uI19NH6Fk790Y0dngg7neB5Z1ZmMRG+WfXUvWRBrJDt5BBHROxziKIwTcLjU5SmQBBGS8LjawSQwbCgUeAUimw6GFhZt+T4sV6q9kq4bQLPUq/J/5IZs+E4tVsyJ3oQIbdM7MgiNlkvM4yFELHijDogA8Bzo+f26GbkHuXa+hY47puDWA9cJufmCAvadt+jx0z6RMqDNk+yJnzn5uLMvkZ31Sf9rR1oL+3R0rlO50gdvH23HtMeHA+hs2wUhYroY3TUIHc+/DmbdI5ihzV1s13OuVO60dLv5nuc3B7PBHf+IXUC7aTpu8xAEszq8moLRuSfuTqTTNRND4hB1/VQR/22QYadC9tIHt0i+xx25xemhDyGGZhKi6dlUeHvSZj79zrNZp2rLDRMQQ5dCPLrJ4mbgxnftX33bo72qh7ijJvoh3ozXY3aa7Y+FLLqFncKYktquk3CcYzPVrRvJ/iRLlfbw0395ABqy3ptW9yDVaU836Hd89Vpnmrr64QyIwSFRxQezFpNZ9CDtzaF+v9YPC4Z1eRjEud96cKBWMzsInQHCx34wvt7rh00iZQwOMyaHyGU2gi6cNlikCpHlrI4HAiFTCA6KkrSAlPc9Q56QYvT2L66j/Iel9rWaT3s7EDDI1dc/OdXmDZlkurfJPzpZ5BXZ69VzyvJq53lJvZn4R5SyQo+4m87JvyB5/oZ2vVNNGPxIrqwMVqfQFW6kdnllpeu/LavU6o8Pw+dFpvhh+IqIFD8MX5MkxQ/DVyWm+GH4unCKH4bvCKX4YfiekHzxw/BNWRkfhu/L6onVXx/5yEc+8pGPfOQjH/nIRz7ykY985CMf+chHPvKRj3zkI/81OaDMAsW2JJIEg4wF0iibQXL+cjA4ZJ6J0h4MstZndnPVCQY4P7s7UGy68kiCevPeXaa/3wyUi8KfE88jKzbdq7yXgfwgY1+17QaTlmvGq7+WIVkj0g7US/s1bR2GWRhCqo5fT6nTJzrgE4dhX6FfrrSPdJ8YxfIsf6w4n8pCAV0pjjNutWZNO9qmg0ngX8Tn6JqZK3/J6tnocMN3yBYBAz9rnUfblRfGRuJzdaTHnfkXDVc9IEQf1yan9MuVq2e2lpuBf0wdaZlZq8LBGC4FTZ4tF555roh9eRGXNj2EGO0a4jgUYnBR7nai5UOk6+IHni8a2uKCLzkBMaVfnvR9uiZ8rbDEbIiji1vwPTGIbdeWGMleS4Iotu2Wfax7dF0mLoajm1VkvsbHENeuvFqcqJOAmNJPEkHZpanYSoKdp4LILm4XtXW+cD0FURYRYuuX+Ku2p3kO7jM1M/0b2GXurR5DbKcgEklCzJfWJfnpZmZeooJ4zXaTamEQl3SrruUh0NbdO+AaHaitjQKy6mhJIAbXK13Y1XI9+DYO1y3bhjYDjmzpmzONQrwd8M6zw6g9u145ksbs2hy36GYBy/G93pIMikFc0FVpm8NCa4zx4tEBX2ECYp/o127V72OqRnDYoH6zhH7Re2iDm06+tlvr0FomIR4OBDJVuW7fW6C21jiwJKMPDAK2xhK+u43vXepsGgMAcqMQ243AdAmzFoTF0LdNQgN//e77vu2Zl5bWtQfNED7g4sRD6Dgu3esihqhtfLtr4w4MFGLgY8C2zZkb+q5JVw0Hoen6vusgxJlvwp9SePCpOi7dFezgD9agjjuGe8s+0bfR15mua9K1p2O3ew9D18YNqmZUv9igNqHjRw2pf3TJnmDLGGJIl/MGPjjNu4mbeVw22iiki/fGPp5Od7i6+fbsAiqFdIMmG7f8WEIYgD9cvpFCYI7vh9vscgPT9ODz3W5ulld7tm5rXc+sr7W+43W19aLl2ZvNJrGOGCGSXU6wSTOIJOsBhWZruBt5/Fto10fAyAaI7dBrrfstGSJTh1rXzBw4rdvh10jbkLeQgHgzHQw34+XoYBMcqF9DGx1tlX5I0fao8cGjH4NN0KQgKEST7mmAKo82Xa++XCz62sgle+I0bXe2WdRdE98J/CycuqZbS4y9a6OxcRCi5+JObeYV7T2wiefDN40QoYXibY64qrNL18luTLTQkSmmLxQiZBJkObEAka50H5Cl1w7dKYT4xLVP9q5opyASddw6Nh/IGQKqjhpiQLBcic5Mv4XtEv3kPYHWddehe84xJUAlfKwUxNhNUogz2yaeYOnidkzgXfFT28cL6nR18Bpu2Wqv1/3NkQRXgMh+lEC80Ux0gNkLCyx9srFhBkTN32gyRJM86AIh9FlAoYHl7tnpZBaa8xrVcTzSLKMIpYZI5UAh0t3WQL+2CiI8kU02ZLu5PHE5Yix9CNE3mZYzu0kg0mtxA6fAZTu88ehMX1AQFR4EYiMkmh7RYzCIDaakGiL/lIK4MZt4T/qKKMS1Z7tXOUqzwKK1bdwnbRaFzmyIt7FtF4IIDh43JWhFj9jCBvoIIr0f+WjCXxzi3UQ9x+B4NkmIge2nIILW983mbh+19yEe+T3jFGfge6FkjBwitGSf+MQHEGeh3+oWs0SWfcYvhij4CGL8pA3cv1OEqG3A8XQTEFs2/LoMEfcn8/3j+mcgMk8d54n9uxeKCVwCYlgA4hH3Qn3cnLm91zFNM6N9KHEXIkrMzYTY8HlOu8RnliBq7QGGzLg5O17aEvG9sUr/ByCCrpsIIm0kTWk30bg5464+jyAGaAbaQAHRFSDeWLLjwPV97uQaLoKgxDyqGIc4jiFqDt9/8Y67hwkQaUoK7RQCS6PfHy2ODgZCGWIrjJ5RgNgg0SneQLggRPDESw5x1BxFEGPP6DN1yAZBDyEOCAFFc24QUpF+o7B5a2vrsYfxeGyTXQ9vnnfUOMQxCe0juhvOwsRtXxYYBxGEb2LHXaNOGo0A0cP7zOA2NMUxTc8/aGmII9Oe3dppiFrTM+/eJeokKAhR60LeipukIcTQdcaeg5oFoRdB5OqQ7WMfQVy4ZmvZ9Z3x7CZClPSD1BATe4/umXE1Td/BfX7XEcRb6B0H18udZD/r0DGv7i8GEQzJhvLDtYn7FiBCNla/22B8bAc9hxYyrajnZXnBdB0Sbcj8m6TkulAlf/1CJdtXSNWbUc02C5M7c4C313gvjn+hddyFBuZlneza9wuac4Cb/DnEHB2eRmi/qDpHuhXu4MKDwIJ02tQvqMmvC+nFwd/ohuGlFYThfQ3HDtn64S7Prn9kvxJ4+C5pG5tdiNksbT90bsGFFFYj0AzKndGFdhDcrlCw+GNaGF5oUe7gYy3ruD/zgz4HLHgGrdnVN5vpY+v+E/15aln36VMuXDun1zz/FugJGqruDFk//mPpD1SEmzTEcNfuZ3SYZB6IZeTb5Lf6nqvYkPsHJQif6ab+u2TJu9OpL/rfSb3++Jy/VdYhjfysn+x/Jsv/MENwVuA4m00ILTljVD8gbzvX/9/SaNWPx+vscU/yPy3/ByyMYFZ+nsSVAAAAAElFTkSuQmCC" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

    <section id="features" class="features">
      <div class="container">
      <div class="section-title" data-aos="zoom-out">
        <p>Các nhãn hàng thân thiết</p>
      </div>

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100" style="width: 25%; height: auto;">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/C.png" style="width: 100%; height: auto;"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100" style="width: 25%; height: auto;">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/leasequery.png" style="width: 100%; height: auto;"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200" style="width: 25%; height: auto;">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/elemica-1.png" style="width: 100%; height: auto;"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300" style="width: 25%; height: auto;">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/C7.png" style="width: 100%; height: auto;"></i>
          </a>
        </li>
        <br>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100" style="width: 25%; height: auto;">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i><img src="https://kms-technology.com/wp-content/uploads/2021/05/conexiom-1.png" style="width: 100%; height: auto;"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100" style="width: 25%; height: auto;">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/avetta.png" style="width: 100%; height: auto;"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200" style="width: 25%; height: auto;">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/clearwave.png" style="width: 100%; height: auto;"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300" style="width: 25%; height: auto;">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/editshare.png" style="width: 100%; height: auto;"></i>
          </a>
        </li>
      </ul>
      </div>
    </section>
  
  <?php
include_once('views/main/footer.php');
?>
