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
        <div class="carousel-indicators"></div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/projectorHero.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="display-2 text-white mb-md-4 animated zoomIn">Professional Displays and Projector Systems</h4>
                        <h5 class="text-white text-uppercase animated bounceInDown">Show you’re serious with our projectors,<br> commercial displays and super-size videowalls</h5>
                        <a href="get_quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Quote</a>
                        <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Carousel End -->
<!--  -->
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

<!--Projector and professional display start-->
<?php
include("site/pages/projector_and_professional_display.php");
?>
<!--Projector and professional display end-->


<!-- Footer Start -->
<?php
include("site/layouts/footer.php");
?>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>