<?php
/**
 * Blog Content template
 *
 * @package purpleWeb
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-index-post'); ?>>
    <?php get_template_part('template-parts/components/blog/entry-header'); ?>
    <?php // get_template_part('template-parts/components/blog/entry-meta'); ?>
    <p class="post-tag">Post Tag</p>
    <h4 class="post-title"><a href="<?php echo esc_url(get_permalink()) ?>"><?php purpleweb_the_title(60); ?></a></h4>
    <div class="post-excerpt"><p><?php purpleweb_the_excerpt(120); ?></p></div>
    <?php //echo purpleweb_excerpt_more() ?>
</article>
