<?php
/**
 * Content template
 *
 * @package purpleWeb
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-index-post'); ?>>
    <p class="post-tag">Post Tag</p>
    <h4 class="post-title"><?php the_title(); ?></h4>
    <div class="post-excerpt"><?php the_excerpt(); ?></div>
</article>
