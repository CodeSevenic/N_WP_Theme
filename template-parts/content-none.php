<?php
/**
 * The template part for displaying a message posts cannot be found.
 *
 * @package purpleWeb
 */
?>

<section class="nettel-no-results">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Nothing Found', 'nettel'); ?></h1>
    </header>

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) { ?>
            <p>
                <?php
                printf(
                    wp_kses(
                        __('Ready to publish your first post? <a href="%s">Get started here</a>', 'nettel'),
                        [
                            'a' => [
                                'href' => []
                            ]
                        ]
                    )
                )
                ?>
            </p>
        <?php }
        ?>
    </div>
</section>
