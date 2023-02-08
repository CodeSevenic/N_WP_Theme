<?php
/**
 * Front page template
 *
 * @package purpleWeb
 */

get_header()
?>

<?php get_template_part('template-parts/components/home-hero');?>

<?php get_template_part('template-parts/content-latest-posts'); ?>

<?php get_template_part('template-parts/components/two-column-section'); ?>

<?php get_footer() ?>
