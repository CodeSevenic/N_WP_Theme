<?php
/**
 * 404 Page template
 *
 * @package purpleWeb
 */
get_header();
$page404img = wp_get_attachment_image_src(108,'large', true);
?>

    <div class="nettel-404-page" style="background-image: url('<?php echo $page404img[0]  ?>')">
        <div class="nettel-404-container">
            <p class="nettel-404-text">404</p>
            <p class="nettel-404-not-found">Page not found!</p>
            <div class="nette-404-buttons">

            </div>
        </div>
    </div>

<?php get_footer() ?>