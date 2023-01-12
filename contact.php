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
                <h1 class="display-1 text-white animated zoomIn">Contact</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Contact</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
<?php

// optional 
// $conn = mysqli_connect('localhost', 'root', '','emem_system');

 $servername = "localhost";
 $username = "root"; 
 $password = "";
 $database = "emem_system";
 $conn = mysqli_connect($servername, $username, $password, $database);


 if(isset($_POST['contact_btn'])){
    $name = $_POST['name'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
    $email = $_POST['email'];
    $dat = date('Y-m-d');

    $insert = "INSERT INTO `contact_table`(`name`, `email`, `message`, `subject`,`date`) 
     VALUES ('$name','$email','$Message','$Subject','$dat')";
   $run = mysqli_query($conn, $insert);
   if($run){ ?>
  
  <script>
    alert("Message Sucessfully send....!");
  </script>
   <?php }

}
?>

    <!-- Contact Start -->
    <?php include("site/pages/contact.php"); ?>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php
        include("site/layouts/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

