<?php
$args = array(
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
);

// Check if tag is set in the URL
if (isset($_GET['tag'])) {
    // $args['tag'] = $_GET['tag'];
}

$posts = get_posts($args); ?>
<section class="nettel-blog-rss-section">
    <div class="nettel-container">
        <div class="nettel-blog-rss">
            <?php
            if ($posts) {
                foreach ($posts as $post) {
                    setup_postdata($post);
                    // Display the post title and content
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-index-post'); ?>>
                        <?php get_template_part('template-parts/components/blog/entry-header'); ?>
                        <?php // get_template_part('template-parts/components/blog/entry-meta'); 
                        ?>
                        <?php get_template_part('template-parts/components/blog/entry-tax'); ?>
                        <h4 class="post-title"><a href="<?php echo esc_url(get_permalink()); ?>">
                                <?php purpleweb_the_title(50); ?></a>
                        </h4>
                        <div class="post-excerpt">
                            <p><?php purpleweb_the_excerpt(120); ?></p>
                        </div>
                        <?php //echo purpleweb_excerpt_more() 
                        ?>
                        <?php
                        echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]');
                        ?>
                    </article>

                    <?php ?>

            <?php }
                wp_reset_postdata();
            } else {
                echo 'No posts found';
            }
            ?>
        </div>
        <div class="latest-posts-cta">
            <a href="<?php echo get_post_type_archive_link('post'); ?>">Read more articles here</a>
        </div>
    </div>
</section>