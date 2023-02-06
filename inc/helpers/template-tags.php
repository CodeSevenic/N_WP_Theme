<?php

function get_the_post_custom_thumbnail($post_id, $size = 'featured-image', $additional_attributes = [])
{
    $custom_thumbnail = '';

    if (null === $post_id) {
        $post_id = get_the_ID();
    }

    if (has_post_thumbnail($post_id)) {
        $default_attributes = [
            'loading' => 'lazy'
        ];

        $attributes = array_merge($additional_attributes, $default_attributes);

        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id($post_id),
            $size,
            false,
            $attributes
        );
    }

    return $custom_thumbnail;
}

/**
 * Renders Custom Thumbnail with Lazy Load
 *
 * @param int $post_id Post ID
 * @param string $size The registered image size
 * @param array $additional_attributes Additional attributes.
 */

function the_post_custom_thumbnail($post_id, $size = 'featured-image', $additional_attributes = []): void
{
    echo get_the_post_thumbnail($post_id, $size, $additional_attributes);
}

function purpleweb_posted_on(): void
{
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    // Post is modified
    if (get_the_time('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> <time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf($time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_attr(get_the_date()),
        esc_attr(get_the_modified_date(DATE_W3C)),
        esc_attr(get_the_modified_date())
    );

    $posted_on = sprintf(
        esc_html_x('Posted on %s', 'post date', 'nettel'),
        '<a href"' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
    );

    echo '<span class="posted-on">' . $posted_on . '</span>';
}

function purpleweb_posted_by(): void
{
    $byline = sprintf(
        esc_html_x(' by %s', 'post author', 'nettel'),
        '<span class="author"><a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
    );

    echo '<span class="byline">' . $byline . '</span>';
}

function purpleweb_the_excerpt($trim_character_count = 0): void
{
//    if (! has_excerpt() || 0 === $trim_character_count) {
//        the_excerpt();
//        return;
//    }

    $excerpt = wp_strip_all_tags(get_the_excerpt());
    $excerpt = substr($excerpt, 0, $trim_character_count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, ''));

    echo $excerpt . '...';
}

function purpleweb_excerpt_more($more = '')
{
    if (!is_single()) {
        $more = sprintf('<button class="btn-info"><a class="nettel-read-more" href="%1$s">%2$s</a></button>',
            get_permalink(get_the_ID()),
            __('Read more', 'nettel')
        );
    }

    return $more;
}

function purpleweb_the_title($trim_character_count = 0): void
{
    $title = wp_strip_all_tags(get_the_title());
    $title = substr($title, 0, $trim_character_count);
    $title = substr($title, 0, strripos($title, ''));

    echo strlen($title) >= $trim_character_count ? $title . '...' : $title;
}

function purpleweb_pagination() {
    $allowed_tags = [
        'span' => [
            'class' => []
        ],
        'a' => [
            'class' => [],
            'href' => []
        ]
    ];

    $args = [
        'before_page_number' => '<span class="nettel-pagination-number">',
        'after_page_number' => '</span>',
        'prev_text' => '&#8249;',
        'next_text' => '&#8250;'
    ];
    printf('<nav class="nettel-pagination">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}