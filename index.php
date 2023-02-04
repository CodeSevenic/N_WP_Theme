<?php

/**
 * Main template  file.
 * @package purpleWeb
 */
get_header();
?>

    <div class="nettel-content">
        <main class="nettel-main" role="main">
            <?php
            if (have_posts()) { ?>
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

                    <div class="nettel-blog-index">

                        <?php
                        while (have_posts()) : the_post(); ?>
                            <div class="blog-index-post">
                                <p class="post-tag">Post Tag</p>
                                <h4 class="post-title"><?php the_title(); ?></h4>
                                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                            </div>
                        <?php endwhile;
                        ?>
                    </div>
                </div>
            <?php }
            ?>
        </main>
    </div>

<?php
get_footer();
