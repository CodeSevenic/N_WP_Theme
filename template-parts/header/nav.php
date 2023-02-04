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
                        $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items);

                        if ( ! $has_children ) { ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Link</a>
                            </li>
                       <?php } else { ?>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a href="#" class="dropdown-item">Action</a>
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
    </nav>
<?php
//wp_nav_menu([
//    'theme_location' => 'purpleweb-header-menu',
//    'container_class' => 'my_extra_menu_class'
//]);
//?>