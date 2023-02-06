<?php
/**
 * Template for entry content
 *
 * To be used inside WordPress the loop
 *
 * @package purpleWeb
 */
?>
<div class="entry-content">
    <?php
    if (is_single()) {
        the_content(
            sprintf(
                wp_kses(
                    __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'nettel'),
                    [
                        'span' => [
                            'class' => []
                        ]
                    ]
                ),
                the_title('<span class="screen-reader-text">"', '"</span>',false)
            )
        );
    }
    ?>
</div>
