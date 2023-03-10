<?php
/** *
 *Header Navigation template.
 *
 * @package purpleWeb
 */

$menu_class = \PURPLEWEB_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('purpleweb-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);

//echo '<pre>';
//print_r($header_menus);
//wp_die();
?>

    <div class="nettel-container">
        <nav class="nettel-navigation">

            <?php
            if (is_home() || is_single()) {
                if (function_exists('the_custom_logo')) {
                    nettel_custom_logo_2();
                }
            } else {
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
            }
            if (!empty($header_menus) && is_array($header_menus)) { ?>
                <ul class="navigation-items">
                    <?php
                    get_template_part('template-parts/components/svg-icons/close');
                    foreach ($header_menus as $menu_item) {
                        if (!$menu_item->menu_item_parent) {
                            $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                            $has_children = !empty($child_menu_items) && is_array($child_menu_items);

                            if (!$has_children) { ?>
                                <li class="navigation-item">
                                    <a href="<?php echo esc_url($menu_item->url); ?>"
                                       class="navigation-link  <?php echo esc_html($menu_item->classes[0]); ?>">
                                        <?php echo esc_html($menu_item->title); ?></a>
                                </li>
                            <?php } else { ?>
                                <li class="navigation-item nav-dropdown">
                                    <a href="<?php echo esc_url($menu_item->url); ?>"
                                       class="navigation-link nav-dropdown-toggle  <?php echo esc_html($menu_item->classes[0]); ?>"
                                       id="navbarDropdown"
                                       role="button"><?php echo esc_html($menu_item->title); ?></a>
                                    <div class="nav-dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php
                                        foreach ($child_menu_items as $child_menu_item) { ?>
                                            <a href="<?php echo esc_url($child_menu_item->url); ?>"
                                               class="nav-dropdown-item"><?php echo esc_html($child_menu_item->title); ?></a>
                                        <?php }
                                        ?>
                                    </div>
                                </li>
                            <?php }
                            ?>
                        <?php }
                    }
                    ?>
                </ul>
            <?php }
            ?>
            <div class="mobile-menu">
                <?php get_template_part('template-parts/components/svg-icons/menu-icon'); ?>
            </div>
        </nav>
    </div>
<?php
//wp_nav_menu([
//    'theme_location' => 'purpleweb-header-menu',
//    'container_class' => 'my_extra_menu_class'
//]);
//?>