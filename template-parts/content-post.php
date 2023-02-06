<?php
/**
 * Post Content Template
 *
 * @package purpleWeb
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
?>
<section id="post-<?php the_ID(); ?>" <?php post_class('blog-index-post'); ?>>
    <div class="featured-post-image">
    <?php
    if (has_post_thumbnail()) {
        $featured_image = get_the_post_thumbnail($the_post_id, 'full');
        echo $featured_image;
    }
    ?>
    </div>
    <main class="post-main-content">
        <?php // get_template_part('template-parts/components/blog/entry-meta'); ?>
        <h1 class="post-title"><a href="<?php echo esc_url(get_permalink()) ?>"><?php purpleweb_the_title(60); ?></a>
        </h1>
        <div class="post-content"><?php the_content(); ?></div>
        <?php //echo purpleweb_excerpt_more() ?>
    </main>
</section>