<!--========== SLIDER ==========-->
<?php

include 'personalData.php';
?>


<div class="promo-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 sm-margin-b-60">
                <div class="margin-b-30">
                    <h1 class="promo-block-title">
                        <?php echo $personalData['name']; ?>
                    </h1>
                    <p class="promo-block-text">
                        <?php echo $personalData['jobTitle']; ?>
                    </p>
                </div>
                <ul class="list-inline">
                    <li><a href="<?php echo $personalData['socialLinks']['facebook']; ?>" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                    <li><a href="<?php echo $personalData['socialLinks']['twitter']; ?>" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                    <li><a href="<?php echo $personalData['socialLinks']['dribbble']; ?>" class="social-icons"><i class="icon-social-dribbble"></i></a></li>
                    <li><a href="<?php echo $personalData['socialLinks']['behance']; ?>" class="social-icons"><i class="icon-social-behance"></i></a></li>
                    <li><a href="<?php echo $personalData['socialLinks']['linkedin']; ?>" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="promo-block-img-wrap">
                    <img class="promo-block-img img-responsive" src="img/mockup/avatar-01.png" align="Avatar">
                </div>
            </div>
        </div>
    </div>
</div>
<!--========== END SLIDER ==========-->
