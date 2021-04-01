<?php
/**
 * Default theme options.
 *
 * @package Storeship
 */

if (!function_exists('storeship_get_default_theme_options')):

/**
 * Get default theme options
 *
 * @since 1.0.0
 *
 * @return array Default theme options.
 */
function storeship_get_default_theme_options() {

    $defaults = array();
    // Preloader options section
    $defaults['enable_site_preloader'] = 1;

    // Header options section
    $defaults['header_layout'] = 'default';
    $defaults['header_layout_transparency'] = 'default';
    $defaults['header_top_bottom_padding'] = 35;
    $defaults['header_custom_link_text'] = __('Visit Store','storeship');
    $defaults['disable_sticky_header_option'] = 0;
    $defaults['disable_header_cart_menu'] = 0;
    $defaults['disable_header_wishlist_menu'] = 0;
    $defaults['disable_header_account_menu'] = 0;
    $defaults['disable_header_search_bar'] = 0;
    $defaults['enable_custom_link_option'] = 1;
    $defaults['header_custom_text_link'] = '';
    
    $store_offers_number = 2;
    $defaults['show_store_offers'] = 0;
    $defaults['store_offers_layout'] = 'default';

    for ($i = 1; $i <= $store_offers_number; $i++) {
        $defaults['store_offers_discount_texts_' . $i] = __('50% Off','storeship');
        $defaults['store_offers_title_' . $i] = __('Discover over 850 Brands','storeship');
        $defaults['store_offers_subtitle_' . $i] = __('Visit our shop to see amazing products','storeship');
        $defaults['store_offers_button_' . $i] = __('Get Offer','storeship');
        $defaults['store_offers_link_' . $i] = '#';
    }

    $defaults['show_top_header'] = 1;
    $defaults['show_top_header_store_contacts'] = 1;
    $defaults['show_top_header_social_contacts'] = 1;

    $defaults['footer_show_store_contact'] = 1;
    $defaults['footer_store_contact_scopes'] = 'front-page';

    $defaults['show_top_menu'] = 0;
    $defaults['show_social_menu_section'] = 1;
    $defaults['show_minicart_section'] = 1;

    $defaults['header_my_account_icon'] = 'fa-user-circle-o';
    $defaults['header_cart_icon'] = 'fa-shopping-bag';
    $defaults['header_wishlist_icon'] = 'fa-heart-o';

    $defaults['add_to_wishlist_icon'] = 'fa fa-heart-o';
    $defaults['already_in_wishlist_icon'] = 'fa fa-heart';

    $defaults['header_image_background_option'] = 'cover';
    $defaults['header_image_background_option_fixed'] = 0;
    $defaults['header_image_background_option_repeat'] = 0;
    $defaults['header_image_background_position'] = 'center';
    $defaults['header_image_background_option_repeat_dir'] = 'repeat';
    $defaults['header_image_url'] = '#';
    $defaults['header_image_url_target'] = 0;

    $defaults['show_offpanel_menu_section'] = 1;

    $defaults['frontpage_main_banner_status'] =0;
    $defaults['banner_advertisement_section'] = '';
    $defaults['banner_advertisement_section_url'] = '';
    $defaults['banner_advertisement_open_on_new_tab'] = 1;
    $defaults['banner_advertisement_scope'] = 'front-page-only';


    // breadcrumb options section
    $defaults['enable_general_breadcrumb'] = 'yes';
    $defaults['select_breadcrumb_mode'] = 'simple';



    $defaults['show_latest_product_section'] = 0;
    $defaults['latest_product_section_title'] = 'Latest Products';
    $defaults['latest_product_section_title_note'] = 'New';
    $defaults['latest_product_categories'] = 0;
    $defaults['number_of_latest_product'] = 4;

    $defaults['show_main_banner_section'] = 0;


    $defaults['show_top_categories_section'] = 0;
    $defaults['top_categories_section_title'] = 'Shop by Categories';
    $defaults['show_top_categories_product_count'] = 'true';
    $defaults['show_top_categories_product_onsale_count'] = 'true';
    $defaults['select_top_categories_section_mode'] = 'list-only';

    $defaults['select_top_categories_on_hover'] = 'top-3-products';
    $defaults['select_top_categories_orderby'] = 'name';
    $defaults['select_top_categories_order'] = 'ASC';


    // Slider
    $defaults['slider_autoplay_status']         = true;
    $defaults['slider_pager_status']            = true;
    $defaults['slider_transition_effect']       = 'fade';
    $defaults['slider_transition_delay']        = 3;

    $defaults['title_custom_1'] = 'USB Headset with Noise Cancelling Mic';
    $defaults['title_custom_2'] = 'VR Headset for iPhone & Android Phone';
    $defaults['title_custom_3'] = 'Smartphones with a Gyro Sensor';


    $defaults['subtitle_custom_1'] = 'Nihil vel congue tenetur';
    $defaults['subtitle_custom_2'] = 'Velit, rutrum, morbi!';
    $defaults['subtitle_custom_3'] = 'Semper cum hendrerit, fuga?';


    $defaults['button_text_1'] = 'Shop Now';
    $defaults['button_text_2'] = 'Explore';
    $defaults['button_text_3'] = 'Read More';


    $defaults['button_link_1'] = '#';
    $defaults['button_link_3'] = '#';
    $defaults['button_link_2'] = '#';

    $defaults['custom_caption_position_1']             = 'left';
    $defaults['custom_caption_position_2']             = 'left';
    $defaults['custom_caption_position_3']             = 'left';


    //thumbs
    $defaults['title_custom_thumbs_1'] = 'USB Headsets on Sale';
    $defaults['title_custom_thumbs_2'] = 'iPhones & Android Phones';

    $defaults['subtitle_custom_thumbs_1'] = 'For limited time period';
    $defaults['subtitle_custom_thumbs_2'] = 'Shop the latest trendy models';

    $defaults['thumbs_button_text_1'] = 'Grab the Offer';
    $defaults['thumbs_button_text_2'] = 'Purchase Now';

    $defaults['thumbs_button_link_1'] = '#';
    $defaults['thumbs_button_link_2'] = '#';

    $defaults['custom_thumbs_caption_position_1']             = 'left';
    $defaults['custom_thumbs_caption_position_2']             = 'right';

    
    

    
    //Brands
    $defaults['section_brand_title'] = __('Brands','storeship');
    $defaults['show_brand_section_on'] = 'default-footer';
    $defaults['show_store_features_footer_brand_section'] =0;
    
    //Testimonials
    $defaults['section_testimonial_title'] = __('Testimonials','storeship');
    $defaults['show_store_features_footer_testimonial_section']=0;
    $defaults['testimonial_layout_option']='layout-1';

    //Call to action
    $defaults['section_cta_title']=__('Step out in this Summer','storeship');
    $defaults['section_cta_subtitle'] = __('25% Off On 6 Genius Gadgets To Keep You Cool','storeship');
    $defaults['show_cta_section_on'] = 'default-footer';
    
    $defaults['cta_button_text'] = __('Shop Now','storeship');
    $defaults['cta_button_link'] = '#';
    $defaults['features_footer_cta_background_image_fixed'] =1;
    $defaults['show_store_features_footer_cta_section']=1;
    
    
    
    
    // Frontpage Section.
    
    $defaults['show_flash_news_section'] = 1;
    $defaults['flash_news_title'] = __('Flash Story', 'storeship');
    $defaults['select_flash_news_category'] = 0;
    $defaults['number_of_flash_news'] = 5;
    $defaults['banner_flash_news_scope'] = 'front-page-only';



    $defaults['main_news_slider_title'] = __('Main Story', 'storeship');
    $defaults['select_slider_news_category'] = 0;
    $defaults['select_main_slider_content'] = 'page-content';
    $defaults['select_main_slider_section_type'] = 'default';
    $defaults['select_main_slider_section_mode'] = 'slider';
    $defaults['select_main_slider_layout_mode'] = 'boxed-layout';
    $defaults['select_main_slider_image_placement'] = 'background';
    $defaults['banner_separator_layout'] = 'none';
    $defaults['banner_blob_layout'] = 'none';
    $defaults['number_of_slides'] = 5;
    
    $defaults['select_carousel_setting_option'] = 'carousel-3';
    $defaults['add_carousel_speed_setting_option'] = '8000';
    $defaults['add_carousel_slide_to_scroll_option'] =1;
    
    
    $defaults['select_footer_slider_section_mode'] = 'slider';
    $defaults['select_footer_carousel_setting_option'] = 'carousel-3';
    $defaults['add_footer_carousel_speed_setting_option'] = 8000;
    $defaults['add_footer_carousel_slide_to_scroll_option'] = 1;



    $defaults['show_store_features_section'] = 1;
    $defaults['show_store_features_on_section'] = 'header-default';

    $defaults['show_store_features_thumb_section_title']= __('Store Features Thumb','storeship');

    $defaults['show_store_features_thumb_on_section'] = 'header-default';
    $defaults['store_features_icon_1'] = 'fa fa-paper-plane';
    $defaults['store_features_icon_2'] = 'fa fa-gift';
    $defaults['store_features_icon_3'] = 'fa fa-life-ring';

    $defaults['store_features_title_1'] = 'Free Shipping';
    $defaults['store_features_title_2'] = 'Get Discount';
    $defaults['store_features_title_3'] = '24/7 Suport';

    $defaults['store_features_desc_1'] = 'On all orders over $75.00';
    $defaults['store_features_desc_2'] = 'Get Coupon & Discount';
    $defaults['store_features_desc_3'] = 'We will be at your service';




    $defaults['show_featured_categories_section'] = 0;
    $defaults['featured_categories_section_title'] = 'Featured Categories';
    $defaults['featured_categories_section_title_note'] = '';
    $defaults['featured_categories_1'] = 0;
    $defaults['featured_categories_2'] = 0;
    $defaults['featured_categories_3'] = 0;
    $defaults['featured_categories_4'] = 0;
    $defaults['featured_categories_5'] = 0;
    $defaults['featured_categories_6'] = 0;
    $defaults['show_featured_categories_product_count'] = 'true';
    $defaults['show_featured_categories_product_onsale_count'] = 'true';

    
    $defaults['show_featured_product_section'] = 0;
    $defaults['featured_product_section_title'] = 'Featured Products';
    $defaults['featured_product_section_title_note'] = '';
    $defaults['featured_product_categories_1'] = 0;
    $defaults['featured_product_categories_2'] = 0;
    $defaults['number_of_featured_product'] = 4;
    $defaults['show_featured_products_only'] = 0;

    $defaults['content_separator_layout'] = 'none';
    $defaults['content_blob_layout'] = 'none';

    $defaults['show_content_section_1'] = 1;
    $defaults['show_content_section_2'] = 1;
    $defaults['show_content_section_3'] = 1;

    $defaults['content_section_1_type'] = 'grid';
    $defaults['content_section_2_type'] = 'list';
    $defaults['content_section_3_type'] = 'grid';

    $defaults['content_section_1_layout'] = 'default';
    $defaults['content_section_2_layout'] = 'default';
    $defaults['content_section_3_layout'] = 'default';

    $defaults['content_section_1_title'] = 'Product Grid Section';
    $defaults['content_section_2_title'] = 'Product List Section';
    $defaults['content_section_3_title'] = 'Product Grid Section';

    $defaults['content_section_1_title_note'] = 'Exciting Sale';
    $defaults['content_section_2_title_note'] = '50% Discount';
    $defaults['content_section_3_title_note'] = 'Summer Offer';



    $defaults['content_section_1_image'] = '';
    $defaults['content_section_2_image'] = '';
    $defaults['content_section_3_image'] = '';


    $defaults['content_section_1_image_pos'] = 'left';
    $defaults['content_section_2_image_pos'] = 'left';
    $defaults['content_section_3_image_pos'] = 'left';



    $defaults['content_section_1_product_categories'] = 0;
    $defaults['content_section_2_product_categories'] = 0;
    $defaults['content_section_3_product_categories'] = 0;


    $defaults['number_of_content_section_1_product'] = 4;
    $defaults['number_of_content_section_2_product'] = 6;
    $defaults['number_of_content_section_3_product'] = 4;



    $defaults['show_express_product_lists_section'] = 0;
    $defaults['express_product_lists_section_title_1'] = 'Latest Products';
    $defaults['express_product_lists_section_title_2'] = 'Featured Products';
    $defaults['express_product_lists_section_title_3'] = 'On-Sale Products';
    $defaults['express_product_lists_section_title_note_1'] = '';
    $defaults['express_product_lists_section_title_note_2'] = 'Offer';
    $defaults['express_product_lists_section_title_note_3'] = 'Offer';
    $defaults['express_product_lists_categories_1'] = 0;
    $defaults['express_product_lists_categories_2'] = 0;
    $defaults['express_product_lists_categories_3'] = 0;
    $defaults['show_express_product_lists_category_thumbs_1'] = 0;
    $defaults['show_express_product_lists_category_thumbs_2'] = 0;
    $defaults['show_express_product_lists_category_thumbs_3'] = 0;
    $defaults['number_of_express_product_lists_1'] = 3;
    $defaults['number_of_express_product_lists_2'] = 3;
    $defaults['number_of_express_product_lists_3'] = 3;


    $defaults['frontpage_content_alignment'] = 'align-content-left';

    //layout options
    $defaults['global_content_layout'] = 'default-content-layout';
    $defaults['global_content_alignment'] = 'align-content-left';
    $defaults['global_image_alignment'] = 'full-width-image';
    $defaults['global_post_date_author_setting'] = 'show-date-author';
    $defaults['global_excerpt_length'] = 20;
    $defaults['global_read_more_texts'] = __('Read more', 'storeship');

    $defaults['archive_layout'] = 'archive-layout-grid';
    $defaults['archive_image_alignment'] = 'archive-image-left';
    $defaults['archive_content_view'] = 'archive-content-excerpt';
    $defaults['disable_main_banner_on_blog_archive'] = 0;

    //Related posts
    $defaults['single_show_related_posts'] = 1;
    $defaults['single_related_posts_title']     = __( 'More Stories', 'storeship' );
    $defaults['single_number_of_related_posts']  = 6;

    //Related posts
    $defaults['store_contact_name'] = __( 'Contact Us', 'storeship' );
    $defaults['store_contact_address'] = '';
    $defaults['store_contact_phone']     = '';
    $defaults['store_contact_email']  = '';
    $defaults['store_contact_hours']  = '';

    $defaults['store_contact_other_informations']  = '';
    $defaults['store_contact_form']  = '';
    $defaults['store_contact_map']  = '';
    $defaults['store_contact_page']  = '';

    //Secure Payment Options
    $defaults['secure_payment_badge'] = '';
    $defaults['secure_payment_badge_url'] = '';
    $defaults['secure_payment_badge_open_in_new_tab'] = 0;

    //Pagination.
    $defaults['site_pagination_type'] = 'default';

    // Footer.
    // Latest posts
    $defaults['frontpage_show_latest_posts'] = 1;
    $defaults['footer_latest_posts_scopes'] = 'front-page';
    $defaults['frontpage_latest_posts_section_title'] = __('Latest Posts', 'storeship');
    $defaults['frontpage_latest_posts_category'] = 0;
    $defaults['number_of_frontpage_latest_posts'] = 3;

    $defaults['footer_scroll_to_top_position'] = 'right-side';
    $defaults['footer_scroll_to_top_icon'] = 'fa fa-angle-up';

    $defaults['footer_copyright_text'] = esc_html__('Copyright &copy; All rights reserved.', 'storeship');
    $defaults['hide_footer_menu_section']  = 0;
    $defaults['hide_footer_site_title_section']  = 0;
    $defaults['hide_footer_copyright_credits']  = 0;
    $defaults['number_of_footer_widget']  = 3;

    $defaults['store_main_banner_text_color']    = '#000000';

    //font size
    $defaults['site_title_font_size']    = 32;


    //woocommerce
    $defaults['store_global_alignment']    = 'align-content-left';
    $defaults['store_enable_breadcrumbs']    = 'yes';
    $defaults['store_single_sale_text']    = 'Sale!';
    $defaults['store_single_add_to_cart_text']    = 'Add to cart';
    $defaults['store_simple_add_to_cart_text']    = 'Add to cart';


    $defaults['store_product_search_autocomplete']    = 'yes';
    $defaults['store_product_search_placeholder']    = 'Search...';
    $defaults['store_product_search_category_placeholder']    = 'Categories';
    $defaults['store_product_search_show_popular_tags']    = 1;



    $defaults['aft_hide_sidebar_for_cart_and_checkout']    = 1;
    $defaults['aft_enable_minicart']    = 1;
    $defaults['aft_product_minicart_counter']    = 'yes';
    $defaults['aft_product_minicart_total']    = 'yes';
    $defaults['aft_product_minicart_contents']    = 'yes';
    $defaults['aft_language_switcher_shortcode']    = '';
    $defaults['aft_currency_switcher_shortcode']    = '';


    $defaults['aft_product_loop_button_display']    = 'show-on-hover';
    $defaults['aft_product_loop_category']    = 'yes';
    $defaults['aft_product_loop_toggle_add_to_cart']    = 'aft-show-add-to-cart';
    $defaults['aft_product_loop_toggle_rating']    = 'aft-show-empty-rating';
    $defaults['aft_product_loop_column_for_mobile']    = 'aft-one-col-product-loop';

    $defaults['store_product_shop_page_row']    = '4';
    $defaults['store_product_shop_page_product_per_page']    = '12';
    $defaults['store_product_shop_page_product_sort']    = 'yes';

    $defaults['store_product_page_product_zoom']    = 'yes';
    $defaults['store_product_page_gallery_thumbnail_columns']    = '4';
    $defaults['store_product_page_related_products']    = 'yes';
    $defaults['store_product_page_related_products_per_row']    = '4';
    $defaults['store_product_page_related_products_per_page']    = '4';
    $defaults['store_product_page_review_tab']    = 'yes';



    // Pass through filter.
    $defaults = apply_filters('storeship_filter_default_theme_options', $defaults);

	return $defaults;

}

endif;
