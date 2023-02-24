<?php
/**
 * 404 Page template
 *
 * @package purpleWeb
 */

get_header();
$page404img = wp_get_attachment_image_src(108,'large', true);
?>

    <div class="nettel-404" style="background-image: url('<?php echo $page404img[0]  ?>')"></div>

<?php get_footer() ?>