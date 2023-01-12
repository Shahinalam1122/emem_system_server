<?php
include("site/layouts/header.php");
?>
<!-- Navbar Start -->
<?php
include("site/layouts/navbar.php");
?>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
  <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="img/NHERO.png" alt="Image" height="300px">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 900px;">
            <h5 class="text-white text-uppercase animated bounceInDown">Choose the one that's right for you</h5>
            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Panasonic</h1>
            <a href="get_quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Quote</a>
            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- Carousel End -->
<style>
  .pabx-0 {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }

  .pabx-1 {
    /* width: 150px; */
    /* height: 30px; */
    margin: 10px;
    padding: 5px;
  }
</style>
<section class="">
  <div class="container1">
    <h1 class="text-uppercase text-center">Panasonic Brand</h1><br>
    <div class=" pabx-0 py-3">
      <div class="mx-3 pabx-1">
        <a href="pana_network_camera.php" target="_blank" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Network Camera </a>
      </div>
      <div class="me-3 pabx-1 ">
        <a href="pana_network_intercom.php" target="_blank" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Network intercoms</a>

      </div>
      <div class="mx-3 pabx-1">
        <a href="pana_access_control.php" target="_blank" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Access control</a>
      </div>

      <div class="mx-3 pabx-1">
        <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Other</a>
      </div>

    </div>

  </div>
</section>

<section class="py-5">
  <div class="container">
    <h1 class="text-center">All Products</h1>
    <h3>Camera / Recorders / Software</h3>
    <div class="row row-cols-1 row-cols-md-3 g-3">
      <div class="col">
        <div class="card h-100">
          <img src="img/np.png" class="card-img-top" alt="..." style="height:100; ">
          <div class="card-body">
            <h3 class="text-center">BY-HPE11KT</h3>
            <p>Coaxial - LAN Converter with PoE function</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/np1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="text-center">WV-CU650</h3>
            <p>RS-485 System Controller with 3D-Joystick<br> & Jog/Shuttle</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/np2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="text-center">WV-CU950 </h3>
            <p>Ethernet System Controller with <br>3D-Joystick & Jog/Shuttle</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/np3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="text-center">WV-LZ62/8S</h3>
            <p> 0.83 cm 8x Varifocal Lens</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/np4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="text-center">WV-LZA61/2S </h3>
            <p>0.83 cm 2x Varifocal Lens</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/np5.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="text-center">WV-LZA62/2</h3>
            <p>0.83 cm High Resolution 2x Varifocal Lens</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/np6.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="text-center">WJ-GXE500</h3>
            <p>4CH H.264 Video Encoder</p>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/np6.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="text-center">System650</h3>
            <p> 256 Inputs Matrix Switcher System</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="img/np7.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="text-center"> System650EX</h3>
            <p> 512 Inputs Matrix Switcher System</p>
          </div>
        </div>
      </div>

    </div>
    <a style="margin-top:50px;" href="get_quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Contact Seller</a>
  </div>

  </div>
</section>
<!-- Footer Start -->
<?php
include("site/layouts/footer.php");
?>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>