<?php
/**
 * Content template
 *
 * @package purpleWeb
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-index-post'); ?>>
    <?php get_template_part('template-parts/components/blog/entry-header'); ?>
    <p class="post-tag">Post Tag</p>
    <h4 class="post-title"><?php the_title(); ?></h4>
    <div class="post-excerpt"><?php the_excerpt(); ?></div>
</article>
