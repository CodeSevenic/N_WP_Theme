<?php
/**
 * Custom Search Form
 *
 * @package purpleWeb
 */
?>

<form role="search" method="get" class="nettel-search-form" action="<?php esc_url(home_url('/')); ?>">
    <span class="screen-reader-text">'. .'</span>
    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x('Search','placeholder', 'nettel') ?>" value="<?php the_search_query(); ?>" name="s" aria-label="Search">
    <button class="nettel-search-btn" type="submit">Search</button>
</form>
