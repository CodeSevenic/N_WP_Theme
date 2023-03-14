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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TMDPNMRWXE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
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
