<?php
    include("site/layouts/header.php");
?>
    <!-- Navbar Start -->
    <?php
        include("site/layouts/navbar.php");
    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php
        include("site/pages/video_conference_carousel.php");
    ?>
    <!-- Carousel End -->
    <!-- btn -->
    <style>
        .pabx-0{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .pabx-1{
            /* width: 150px; */
            /* height: 30px; */
            margin: 10px;
            padding: 5px;
        }
    </style>

    <!-- Video Conference start -->
    <?php
        include("site/pages/video_conference.php");
    ?>
    <!-- Video Conference end -->


    <!-- Footer Start -->
    <?php
        include("site/layouts/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


   