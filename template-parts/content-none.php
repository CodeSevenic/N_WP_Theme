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
            if ( is_home() && current_user_can('publish_posts') ) { ?>

          <?php  }
        ?>
    </div>
</section>
