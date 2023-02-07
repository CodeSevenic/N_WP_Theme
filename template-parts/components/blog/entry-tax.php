<?php
/**
 * Template for entry tax
 *
 * @package purpleWeb
 */

$the_post_id = get_the_ID();
//$article_terms = wp_get_post_terms($the_post_id, ['category', 'post_tag']);
$article_terms = wp_get_post_terms($the_post_id, ['category']);

if (empty($article_terms) || ! is_array($article_terms)) {
    return;
}
?>

<?php
foreach ($article_terms as $key => $article_term) { ?>
    <a href="<?php echo esc_url(get_term_link($article_term)) ?>" class="post-tag">
        <?php echo $article_term != end($article_terms) ? esc_html__($article_term->name) . ','  : esc_html__($article_term->name); ?>
    </a>
<?php }

