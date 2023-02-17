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
    <div class="post-main-content">
        <?php // get_template_part('template-parts/components/blog/entry-meta');
        $the_post_id = get_the_ID();
        //$article_terms = wp_get_post_terms($the_post_id, ['category', 'post_tag']);
        $article_terms = wp_get_post_terms($the_post_id, ['category']);

        if (empty($article_terms) || !is_array($article_terms)) {
            return;
        }
        ?>

        <?php
        foreach ($article_terms as $key => $article_term) { ?>
            <p class="blog-post-tag">
                <?php echo $article_term != end($article_terms) ? esc_html__($article_term->name) . ',' : esc_html__($article_term->name); ?>
            </p>
        <?php }
        ?>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <?php get_template_part('template-parts/components/blog/entry-meta'); ?>
        <div class="post-content"><?php the_content(); ?></div>

        <?php get_template_part('template-parts/components/blog/publish-with-us'); ?>

        <?php
        $author_id = get_the_author_meta('ID');
        $author_linkedin = get_the_author_meta('linkedin', $author_id);
        $linkedin_icon = wp_get_attachment_image_src(102,"large", true);
        if ($author_linkedin) {
            echo '<a class="nettel-author-linkedin" href="' . $author_linkedin . '" target="_blank"> <img src="'. $linkedin_icon[0] . '" alt=""></a>';
        }
        ?>
    </div>
</section>

