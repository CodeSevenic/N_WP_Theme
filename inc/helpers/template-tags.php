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
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    }

    $time_string = sprintf($time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_attr(get_the_date()),
        esc_attr(get_the_modified_date(DATE_W3C)),
        esc_attr(get_the_modified_date())
    );

    $posted_on = sprintf(
        esc_html_x('%s', 'post date', 'nettel'),
        '<p rel="bookmark">' . ' | ' . $time_string . '</p>'
    );

    echo $posted_on;
}

function purpleweb_posted_by(): void
{
    $byline = sprintf(
        esc_html_x(' %s', 'post author', 'nettel'),
        '<span class="author">' . esc_html(get_the_author()) . ' ' . '</span>'
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

//function purpleweb_pagination() {
//    $allowed_tags = [
//        'span' => [
//            'class' => []
//        ],
//        'a' => [
//            'class' => [],
//            'href' => []
//        ]
//    ];
//
//    $args = [
//        'before_page_number' => '<span class="nettel-pagination-number">',
//        'after_page_number' => '</span>',
//        'prev_text' => '&#8249;',
//        'next_text' => '&#8250;'
//    ];
//    printf('<nav class="nettel-pagination">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
//}

function purpleweb_pagination()
{
    $allowed_tags = ['span' => ['class' => []
    ],
        'a' => ['class' => [],
            'href' => []
        ],
        'svg' => ['width' => [],
            'height' => [],
            'viewBox' => [],
            'version' => [],
            'xmlns' => [],
            'xmlns:xlink' => [],
            'id' => [],
            'stroke' => [],
            'stroke-width' => [],
            'fill' => [],
            'fill-rule' => []
        ],
        'title' => [
            'id' => []
        ],
        'g' => [
            'id' => [],
            'transform' => []
        ],
        'rect' => [
            'id' => [],
            'fill' => [],
            'x' => [],
            'y' => [],
            'width' => [],
            'height' => [],
            'rx' => []
        ],
        'path' => [
            'id' => [],
            'd' => [],
            'fill' => [],
            'transform' => []
        ]
    ];

    $args = [
        'before_page_number' => '<span class="nettel-pagination-number">',
        'after_page_number' => '</span>',
        'prev_text' => '<span class="nettel-pagination-prev"><svg width="49px" height="49px" viewBox="0 0 49 49" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Nettel---Blog-Listing-Page---20230118" transform="translate(-567.000000, -2006.000000)">
            <g id="Previous" transform="translate(567.000000, 2006.000000)">
                <rect id="BG" fill="#3F0071" x="0" y="0" width="49" height="49" rx="24.5"></rect>
                <path d="M29.4,24.5258393 C26.2473544,21.3728427 23.1110148,18.2360987 19.9522216,15.0769231 L17.3384615,17.6881178 C19.5714106,19.9203357 21.8039098,22.153003 24.0363341,24.3858201 C24.0711577,24.4206471 24.1041446,24.4573089 24.1459405,24.5015728 C24.111904,24.5411931 24.0829281,24.5797649 24.0491915,24.6135432 C21.8247141,26.8391328 19.5998618,29.0643479 17.3746346,31.2891886 L20.0111481,33.9230769 C20.0114105,33.9228148 20.0116354,33.9225526 20.0118978,33.9222905 C23.0976701,30.8351654 26.3139654,27.6126648 29.4,24.5258393" id="Fill-1-Copy" fill="#FFFFFF" transform="translate(23.369231, 24.500000) scale(-1, 1) translate(-23.369231, -24.500000) "></path>
            </g>
        </g>
    </g>
</svg></span>',
        'next_text' => '<span class="nettel-pagination-next"><svg width="49px" height="49px" viewBox="0 0 49 49" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Nettel---Blog-Listing-Page---20230118" transform="translate(-825.000000, -2006.000000)">
            <g id="Page-Nav" transform="translate(567.000000, 2006.000000)">
                <g id="Next" transform="translate(258.000000, 0.000000)">
                    <rect id="BG-Copy" fill="#3F0071" x="0" y="0" width="49" height="49" rx="24.5"></rect>
                    <path d="M31.6615385,24.5258393 C28.5088928,21.3728427 25.3725532,18.2360987 22.21376,15.0769231 L19.6,17.6881178 C21.8329491,19.9203357 24.0654483,22.153003 26.2978726,24.3858201 C26.3326962,24.4206471 26.3656831,24.4573089 26.4074789,24.5015728 C26.3734425,24.5411931 26.3444665,24.5797649 26.3107299,24.6135432 C24.0862525,26.8391328 21.8614002,29.0643479 19.6361731,31.2891886 L22.2726866,33.9230769 C22.272949,33.9228148 22.2731739,33.9225526 22.2734363,33.9222905 C25.3592085,30.8351654 28.5755038,27.6126648 31.6615385,24.5258393" id="Fill-1" fill="#FFFFFF"></path>
                </g>
            </g>
        </g>
    </g>
</svg></span>'
    ];

    printf('<nav class="nettel-pagination">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}

