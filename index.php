<?php

/**
 * Main template  file.
 * @package purpleWeb
 */
get_header();
?>
    <div class="nettel-blog">
        <main class="nettel-main" role="main">
            <?php
            if (have_posts())  : ?>
                <div class="nettel-container">
                    <?php
                    get_template_part('template-parts/components/blog/entry-all-tax');
                    get_search_form();
                    ?>
                    <div class="nettel-blog-index">
                        <?php
                        while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/content-blog'); ?>
                        <?php endwhile;
                        ?>
                    </div>
                    <?php purpleweb_pagination() ?>
                </div>
            <?php

            else:

                get_template_part('template-parts/content-none');

            endif;
            ?>
        </main>
    </div>

<?php

get_footer();
