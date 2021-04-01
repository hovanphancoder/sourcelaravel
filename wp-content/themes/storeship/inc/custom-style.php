<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


/**
 * Customizer
 *
 * @class   storeship
 */

if (!function_exists('storeship_custom_style')) {

    function storeship_custom_style()
    {
        $storeship_background_color = get_background_color();
        $storeship_background_color = '#' . $storeship_background_color;
        $storeship_main_banner_text_color = storeship_get_option('store_main_banner_text_color');

        ob_start();
        ?>

        <?php if (!empty($storeship_background_color)): ?>
        #sidr{
        background-color: <?php storeship_esc_custom_style($storeship_background_color) ?>;
        }
    <?php endif; ?>


        <?php if (!empty($storeship_main_banner_text_color)): ?>
        .content-caption .content-desc,
        .content-caption .cap-title {
        color: <?php storeship_esc_custom_style($storeship_main_banner_text_color) ?>;
        }
    <?php endif; ?>


        <?php
        return ob_get_clean();
    }
}
