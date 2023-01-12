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
                    <img class="w-100" src="img/pabxhero.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1000px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Best PABX/Intercom Services</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Choose IP PABX system - The expert in the industry</h1>
                            <a href="get_quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Quote</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Carousel End -->

<!-- cameras -->
<?php
include("site/pages/pabx.php");
?>
<!-- end cameras -->


<!-- Footer Start -->
<?php
include("site/layouts/footer.php");
?>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>