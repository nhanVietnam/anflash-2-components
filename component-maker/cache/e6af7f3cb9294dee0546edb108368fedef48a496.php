<link rel="stylesheet" href="/main.css">
<div class="c010f8beca6bb4a64b99ce748ea5d2a5d container" id="c443a15b633144d68bad0b885c88ea52c">
    <!-- Write your code here -->
    <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php $__currentLoopData = json_decode($articles); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="swiper-slide" style="background-image: url(<?php echo e($article->thumbnail); ?>);">
            <div class="c010f8beca6bb4a64b99ce748ea5d2a5d__box">
                <a href="#">
                    <h3>
                        <?php echo $article->title; ?>

                    </h3>
                    <p>
                        <?php echo $article->content; ?>

                    </p>
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
    <!-- If we need pagination -->
    <a href="#" class="c010f8beca6bb4a64b99ce748ea5d2a5d__profile">
        Download Profile
    </a>
</div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-component/component-maker/src/HomeSlider/index.blade.php ENDPATH**/ ?>