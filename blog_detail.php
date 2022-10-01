<?php
    include("site/layouts/header.php");
?>
    <!-- Navbar Start -->
    <?php
        include("site/layouts/navbar.php");
    ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Blog Detail</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Blog Detail</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <?php
        include("site/pages/blog_detail.php");
    ?>
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php
        include("site/layouts/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


  