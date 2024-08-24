<?php

include 'personalData.php';
?>


<div id="experience">
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="container content-lg">
            <div class="row row-space-2 margin-b-4">
                <?php foreach ($personalData['experience'] as $experience): ?>
                    <div class="col-md-3 col-sm-6 md-margin-b-4">
                        <div class="service <?= isset($experience['additional_classes']) ? $experience['additional_classes'] : '' ?>" 
                             data-height="height"
                             <?= isset($experience['data_wow_duration']) ? 'data-wow-duration="'.$experience['data_wow_duration'].'"' : '' ?>
                             <?= isset($experience['data_wow_delay']) ? 'data-wow-delay="'.$experience['data_wow_delay'].'"' : '' ?>>
                            <div class="service-element">
                                <i class="service-icon <?= $experience['icon'] ?> <?= isset($experience['icon_classes']) ? $experience['icon_classes'] : '' ?>"></i>
                            </div>
                            <div class="service-info">
                                <h3 class="<?= isset($experience['title_classes']) ? $experience['title_classes'] : '' ?>">
                                    <?= $experience['title'] ?>
                                </h3>
                                <p class="margin-b-5 <?= isset($experience['description_classes']) ? $experience['description_classes'] : '' ?>">
                                    <?= $experience['description'] ?>
                                </p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>    
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!--// end row -->
        </div>
    </div>
</div>
<!-- End Experience -->
