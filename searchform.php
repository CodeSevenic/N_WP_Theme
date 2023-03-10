<?php
/**
 * Custom Search Form
 *
 * @package purpleWeb
 */
?>
<form role="search" method="get" class="nettel-search-form" action="<?php esc_url(home_url('/')); ?>">
    <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'nettel'); ?></span>
    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x('Search','placeholder', 'nettel') ?>" value="<?php the_search_query(); ?>" name="s" aria-label="Search">
    <button class="nettel-search-btn" type="submit"><?php get_template_part('template-parts/components/svg-icons/search-icon');?></button>
</form>
