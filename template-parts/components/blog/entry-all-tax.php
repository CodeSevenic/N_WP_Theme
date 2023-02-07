<?php
/**
 * Template for entry all tax
 *
 * @package purpleWeb
 */


$the_tags = get_tags(array(
    'orderby' => 'name',
    'order' => 'ASC'
));

if (empty($the_tags) || !is_array($the_tags)) {
    return;
}
?>
    <div class="blog-categories">
        <a href="/blog" class="nav-post-tags all">
            All
        </a>
    </div>
<?php
foreach ($the_tags as $key => $the_tag) {
//    if ($the_tag->name != 'Uncategorized') {
    ?>
    <div class="blog-categories <?php echo $the_tag == end($the_tags) ? 'last-cat-item' : ''; ?>">
        <a href="<?php echo esc_url(get_term_link($the_tag)) ?>" class="nav-post-tags">
            <?php echo  esc_html__($the_tag->name); ?>
        </a>
    </div>
<?php
    }

