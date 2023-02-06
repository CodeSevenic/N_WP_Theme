<?php
/**
 * Single template
 *
 * @package purpleWeb
 */

get_header()
?>

    <div class="nettel-post">
        <main class="nettel-main" role="main">
            <?php
            if (have_posts())  : ?>
                <div class="nettel-container">
                    <!--         Blog Title           -->
                    <?php
                    if (is_home() && !is_front_page()) { ?>
                        <header>
                            <h1 class="page-title">
                                <?php single_post_title(); ?>
                            </h1>
                        </header>
                    <?php }

                    ?>

                    <div class="nettel-blog-post">

                        <?php
                        while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/content-post'); ?>
                        <?php endwhile;
                        ?>
                    </div>
                </div>
            <?php

            else:

                get_template_part('template-parts/content-none');

            endif;
            ?>
        </main>
    </div>

<?php get_footer() ?>