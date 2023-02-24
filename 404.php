<?php
/**
 * 404 Page template
 *
 * @package purpleWeb
 */
get_header();
$page404img = wp_get_attachment_image_src(108,'large', true);
?>

    <div class="nettel-404" style="background-image: url('<?php echo $page404img[0]  ?>')">
        <div class="nettel-404-container">
            <p>404</p>
            <p>Page not found!</p>
            <div class="nette-404-buttons">

            </div>
        </div>
    </div>

<?php get_footer() ?>