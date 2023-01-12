<?php
    include("site/layouts/header.php");
?>
    <!-- Navbar Start -->
    <?php
        include("site/layouts/navbar.php");
    ?>
    <!-- Navbar End -->

    <!--Carousel start-->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
              
               
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/MicrosoftTeams-image (14).png.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown"></h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">AXIS VIDEO RECORDER</h1>
                            <a href="get_quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Quote</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </div>
    <!--Carousel end-->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
             <!-- cameras -->
          <div class="cameras">
            <div class="container-max">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage text_align_center">
                        <h2 style="text-align: center; margin-bottom:50px;">Video recorders and workstations</h2>
                        <p>For an easy-to-install and reliable system, choose an
                             Axis network video recorder. <br>They’re 
                            all perfectly adapted to your Axis network products.</p>
                     </div>
                  </div>
               </div>
               <br>
                     <div class="row">
                        <div class="col-md-4">
                           <div id="ho_bg" class="cameras_text">
                               <div class="cameras_img text_align_center">
                                 <figure><img src="img/vr.png" alt="#"/></figure>
                               </div>
                              <h3>Video recorders</h3>
                             <p>Out-of-the-box ready <br>recording solutions
                            </p>
                           </div>
                        </div>
                         <div class="col-md-4">
                           <div id="ho_bg" class="cameras_text">
                               <div class="cameras_img text_align_center">
                                 <figure><img src="img/vr1.png" alt="#"/></figure>
                               </div>
                              
                               <h3>Workstations</h3>
                               <p>Effective surveillance for <br>server installations</p>
                           </div>
                        </div>
                       
                        </div>
                     </div>
                  </div>
                  <a style="margin-top:50px;" href="get_quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Contact Seller</a>
               </div>
            </div>
         </div>
       

    <!-- Footer Start -->
    <?php
        include("site/layouts/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
