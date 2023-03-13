<?php
?>
<section class="nettel-hero">
    <div class="nettel-container">
        <div class="nettel-hero-content">
            <div class="nettel-hero-text">
                <p class="pre-text"><?php the_field('sub-title'); ?></p>
                <h1 class="nettel-h1"><?php the_field('title'); ?></h1>
                <div class="nettel-hero-body-text">
                    <p><?php the_field('home-hero-description'); ?></p>
                </div>
<!--                <a href="#" class="nettel-hero-cta">How we work</a>-->
            </div>
            <div class="nettel-hero-image">
                <?php $hero_image = wp_get_attachment_image_src(123,'large', true); ?>
                <img src="<?php echo $hero_image[0] ?>" alt="Hero image" class="hero-image lazy">
            </div>
        </div>
    </div>
</section>