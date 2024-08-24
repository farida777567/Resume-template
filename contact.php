
<?php

include 'personalData.php';
?>


<div id="contact">
    <div class="bg-color-sky-light">
        <div class="container content-lg">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Contact Me</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-xs-6 md-margin-b-30">
                    <h4>Location</h4>
                    <a href="#"><?php echo $personalData['location']; ?></a>
                </div>
                <div class="col-md-3 col-xs-6 md-margin-b-30">
                    <h4>Phone</h4>
                    <a href="#"><?php echo $personalData['phone']; ?></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <h4>Email</h4>
                    <a href="mailto:<?php echo $personalData['email']; ?>"><?php echo $personalData['email']; ?></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <h4>Web</h4>
                    <a href="#"><?php echo $personalData['web']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Section -->
