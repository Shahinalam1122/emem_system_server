<?php
    include("site/layouts/header.php");
?>

<?php
    include("site/layouts/navbar.php");
?>
<!-- Modal -->

<section class="py-5">

    <form action="https://formsubmit.co/riajul.gigasoft@gmail.com" method="POST">
        <div class="container">
            <h1 class="text-center">Our All Services Here</h1>
            <p class="text-center">You can choose any service for you to send email of the company</p>
            <br>
            
            <div class="row">
                <div class="mb-4 row">
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="cctv"> CCTV</label>
                    </div>
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="it_soluttion"> IT Soluttion</label>
                    </div>
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="pabx">PABX/Intercom</label>
                    </div>
                </div>
                <div class="mb-4 row">
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="business"> Business Communication</label>
                    </div>
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="video"> Video Conference</label>
                    </div>
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="rugged"> Rugged Laptop</label>
                    </div>
                </div>
                <div class="mb-4 row">
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="security">Security System</label>
                    </div>
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="audio">Audio Visual</label>
                    </div>
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="networking">Networking Equipment</label>
                    </div>
                </div>
                <div class="mb-4 row">
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="door"> Door Security</label>
                    </div>
                    <div class="col-sm-4">
                        <label><input type="checkbox" name="projector"> Projector Information</label>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="subject"></textarea>
                </div>
                <button class="btn btn-primary py-3" name="contact_btn" type="submit">Send Message</button>
            </div>
            
    </form>

</section>



<!-- Form which will send a POST request to the current URL -->


<!-- Form with fieldset, legend, and label -->