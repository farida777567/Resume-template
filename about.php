
<?php

include 'personalData.php';
?>


<div id="about">
    <div class="container content-lg">
        <div class="row">
            <div class="col-sm-5 sm-margin-b-60">
                <img class="full-width img-responsive" src="<?= $personalData['about']['image'] ?>" alt="Image">
            </div>
            <div class="col-sm-7">
                <div class="section-seperator margin-b-50">
                    <div class="margin-b-50">
                        <div class="margin-b-30">
                            <h2>About Me</h2>
                            <p><?= $personalData['about']['description']['intro'] ?></p>
                            <p><?= $personalData['about']['description']['details'] ?></p>
                        </div>
                        <a href="<?= $personalData['about']['cvLink'] ?>" class="btn-theme btn-theme-md btn-default-bg text-uppercase">Download my CV</a>
                    </div>
                </div>

                <h2>My Skills</h2>
                <!-- Progress Box -->
                <?php foreach ($personalData['about']['skills'] as $skill => $percentage): ?>
                    <div class="progress-box">
                        <h5><?= $skill ?> <span class="color-heading pull-right"><?= $percentage ?>%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="<?= $percentage ?>"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- End Progress Box -->
            </div>
        </div>
        
    </div>
</div>
<!-- End About Section -->
