<?php
/**
 * Template for post-entry header
 *
 * @package purbleWeb
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
?>

<header class="entry-header">
    <?php
    // Feature image
    if ($has_post_thumbnail) { ?>
        <div class="entry-image">
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php
                the_post_custom_thumbnail(
                    $the_post_id,
                    'featured-thumbnail',
                    [
                        'sizes' => '(max-width: 370px) 370px, 223px',
                        'class' => 'attachment-featured-large size-featured-image'
                    ]
                );
                ?>
            </a>
        </div>
    <?php }
    ?>
</header>
