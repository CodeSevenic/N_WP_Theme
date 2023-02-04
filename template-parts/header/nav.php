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



    <nav class="nettel-navigation">
<!--        --><?php //if (function_exists('the_custom_logo')) {
//            the_custom_logo();
//        } ?>

        <?php
        if (!empty($header_menus) && is_array($header_menus)) { ?>
            <ul class="navigation-items">
                <?php
                foreach ($header_menus as $menu_item) {
                    if (! $menu_item->menu_item_parent ) {
                        $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                        echo '<pre>';
                        print_r($child_menu_items);
                        wp_die();
                        ?>
                        <li class="nav-item"></li>
                    <?php }
                }
                ?>
            </ul>
        <?php }
        ?>
    </nav>
<?php
//wp_nav_menu([
//    'theme_location' => 'purpleweb-header-menu',
//    'container_class' => 'my_extra_menu_class'
//]);
//?>