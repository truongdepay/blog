<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 3/28/2019
 * Time: 11:00 AM
 */

?>

<!--<div class="post-slider owl-carousel" data-items="3" data-loop="false" data-center="false" data-mouse-drag="true" data-nav="false" data-dots="false" data-autoplay="true" data-autoplay-speed="600" data-autoplay-timeout="2000">-->
<div class="post-slider owl-carousel" data-items="3" data-loop="true" data-dots="false" data-nav="true" data-nav-prev-text="prev" data-nav-next-text="next">

    <!-- post -->
    <?php
    foreach ($result as $item) {
        ?>
        <div class="post-thumbnail" style="background-image:url(http://demo.io/<?= $item->thumb ?>)">

            <!-- .entry-header -->
            <header class="entry-header">

                <!-- .entry-meta -->
                <div class="entry-meta">
                      <span class="cat-links">
                            <a href="#" rel="category tag"><?= $item->cat_title ?></a>
                      </span>
                </div>
                <!-- .entry-meta -->

                <!-- .entry-title -->
                <h1 class="entry-title"><a href="blog-single.html"><?= $item->title ?></a>
                </h1>
            </header>
            <!-- .entry-header -->

        </div>
        <?php
    }
    ?>

</div>
<!-- post-slider -->
