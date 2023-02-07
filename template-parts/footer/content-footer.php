<?php
/**
 * Template for Content footer
 *
 * @package purpleWeb
 */
?>
<div id="footer-menu">
    <div class="footer-column">
        <div class="footer-logo">
            <?php if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } ?>
        </div>
    </div>
    <div class="footer-column">
        <h6>Quick Links</h6>
        <?php wp_nav_menu(array(
            'theme_location'  => 'quick_links',
            'menu'            => 'Quick Links',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )); ?>
    </div>
    <div class="footer-column">
        <h6>Office Location</h6>
        <span class="nettel-city">Johannesburg</span>
        <p>123 Main St,<br>
            Anytown, USA 12345</p>
    </div>
    <div class="footer-column hubspot-form">
        <h6>Social Platforms</h6>
        <div class="footer-social">
            <a href="#"><i class="facebook-icon"></i><?php get_template_part('template-parts/components/svg-icons/facebook-icon'); ?></a>
            <a href="#"><i class="instagram-icon"></i><?php get_template_part('template-parts/components/svg-icons/instagram-icon'); ?></a>
            <a href="#"><i class="linkedin-icon"></i><?php get_template_part('template-parts/components/svg-icons/linkedin-icon'); ?></a>
        </div>
        <h6>Our Newsletter</h6>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
            hbspt.forms.create({
                region: "na1",
                portalId: "2896934",
                formId: "d010847d-d3d5-4e7a-a9fe-ace6de0c9b0e"
            });
        </script>
    </div>
</div>
<div class="legal-strip">
    <p>&copy; Nettel</p>
    <a href="#0">Terms and Conditions</a>
    <a href="#0">Privacy Policy</a>
</div>

