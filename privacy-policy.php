<?php
/*
Template Name: Privacy Policy
*/
get_header()
?>
    <main class="privacy-policy">
        <div class="nettel-container">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
        </div>
    </main>
<?php get_footer() ?>