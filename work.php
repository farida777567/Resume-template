<?php

include 'personalData.php';
?>


<div id="work">
    <div class="container content-lg">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Latest Products</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
        </div>

        <div class="row">
            <?php foreach ($personalData['work'] as $item): ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="<?= $item['image'] ?>" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="<?= $item['link'] ?>"><?= $item['title'] ?></a> <span class="text-uppercase margin-l-20"><?= $item['category'] ?></span></h4>
                    <p><?= $item['description'] ?></p>
                    <a class="link" href="<?= $item['link'] ?>">Read More</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
