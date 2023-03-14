<?php

/**
 * Header template.
 *
 * @package purpleWeb
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    SEO -->
    <!-- Add meta description -->
    <meta name="description" content="<?php echo substr( wp_strip_all_tags( get_the_excerpt() ), 0, 155 ); ?>">

    <!-- Add meta image -->
    <?php if (has_post_thumbnail()) : ?>
        <meta property="og:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"/>
    <?php endif; ?>

    <!-- Add other SEO tags -->
    <title><?php wp_title(''); ?></title>
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="<?php echo esc_url(home_url()); ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TMDPNMRWXE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-TMDPNMRWXE');
    </script>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>
<div id="page" class="site">
    <?php
    if (is_home() || is_single()) { ?>
    <header id="masthead" class="site-header blog-header" role="banner">
        <?php } else { ?>
        <header id="masthead" class="site-header" role="banner">
            <?php }
            ?>
            <?php get_template_part('template-parts/header/nav'); ?>
        </header>
        <div class="header-placeholder"></div>
        <div id="content" class="site-content">
