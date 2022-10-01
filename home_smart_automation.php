<style>
    .light-grey{
    background-color:#F5F5F5;
    padding-top: 60px;
    padding-bottom: 60px;
    }
    img{
        max-width: 70%;
        border: 0;
    }
    circle{
        width: 100px;
    }
    circle div.icon:hover{
        background-color: #800000;
    }
    circle div.icon{
        display: inline-block;
        height: 75px;
        width: 75px;

        background-repeat: no-repeat;
        background-size: contain;
        background-color: #939598;
        border-radius: 50%;
        transition: 0.1s;

        display: flex;
        justify-content: center;
        align-items: center;
    }
    section div h2{
        font-size: 30px !important;
        font-weight: 100 !important;
        font-family: open-sans;
        text-transform: uppercase;
        line-height: 1.26em;
        letter-spacing: 3px;
        padding: 10px;
        box-sizing: border-box;
    }
    section div p{
        margin: 0px 0px 25px 0px;
        padding: 0px;
        color: #000;
        font-size: 18px;

    }
    div h5{
        color: #800000;
        font-size: 15px;
        text-transform: uppercase;
        padding-top: 7px;
    }
    .bold{
    font-size: 30px;
    font-weight: 900;
    }
</style>

<?php
    include("site/layouts/header.php");
?>

<?php
    include("site/layouts/navbar.php");
?>

<!-----hero section start----->
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="display-1 text-white animated zoomIn">Services</h1>
            <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Home Smart Automation</a>
        </div>
    </div>
</div>
<!-----hero section end----->

<section class="light-grey">
    <div class="container padding-top padding-bottom">
        <h2>What's most important<br>To <span class="bold">you</span>?</h2>
        <p>We have the products that give you full control of nearly everything at home—no matter where <no-br>you may be.</no-br>
        </p>
        <div class="row half-padding-bottom">
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/os3" target="_blank">
                    <circle>
                        <div class="icon">
                            <img style="fill: white;" src="img/smart-home-svgrepo-com.svg" alt="Icon - Smart Home OS">
                        </div>
                        <h5 class="icon-name">Smart Home OS</h5>
                    </circle>
                </a>
            </div>
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/solutions/whole-home" target="_blank">
                    <circle>
                        <div class="icon">
                            <img src="img/whole-home-svgrepo-com.svg" alt="Icon - Home Climate Control">
                        </div>
                        <h5 class="icon-name">Whole Home</h5>
                    </circle>
                </a>
            </div>
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/solutions/smart-lighting" target="_blank">
                    <circle>
                        <div class="icon">
                            <img src="img/lighting-bulb-svgrepo-com.svg" alt="Icon - Lightbulb for Smart Lighting">
                        </div>
                        <h5 class="icon-name">Smart Lighting</h5>
                    </circle>
                </a>
            </div>
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/solutions/peace-of-mind" target="_blank">
                    <circle>
                        <div class="icon">
                            <img src="img/cctv-svgrepo-com.svg" alt="Icon - Security camera">
                        </div>
                        <h5 class="icon-name">Home Security</h5>
                    </circle>
                </a>
            </div>
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/o/intercom-anywhere" target="_blank">
                    <circle>
                        <div class="icon">
                            <img src="img/intercom-svgrepo-com.svg" alt="Icon - Intercom for communicating in any/all rooms of residence-business">
                        </div>
                        <h5 class="icon-name">Intercom Anywhere</h5>
                    </circle>
                </a>
            </div>
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/solutions/home-theater" target="_blank">
                    <circle>
                        <div class="icon">
                            <img src="img/home-cinema-svgrepo-com.svg" alt="Icon - TV and Speakers portraying a home theater.">
                        </div>
                        <h5 class="icon-name">Home Theater</h5>
                    </circle>
                </a>
            </div>
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/solutions/multi-room-audio" target="_blank">
                    <circle>
                        <div class="icon">
                            <img src="img/speaker-svgrepo-com.svg" alt="Icon - Speaker to portray multi-room audio">
                        </div>
                        <h5 style="font-size: 14px;" class="icon-name">Multi-room Audio</h5>
                    </circle>
                </a>
            </div>
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/solutions/universal-remote" target="_blank">
                    <circle>
                        <div class="icon">
                            <img src="img/remote-control-svgrepo-com.svg" alt="Icon - Remote">
                        </div>
                        <h5 class="icon-name">Universal Remote</h5>
                    </circle>
                </a>
            </div>
            <div class="col-md-1 col-xs-4 text-center half-padding-bottom">
                <a href="https://www.control4.com/solutions/voice-control" target="_blank">
                    <circle>
                        <div class="icon">
                            <img src="img/voice-mic-svgrepo-com.svg" alt="Icon - Voice control station for total control of home-business with your voice">
                        </div>
                        <h5 class="icon-name">Voice Control</h5>
                    </circle>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
    include("site/layouts/footer.php");
?>