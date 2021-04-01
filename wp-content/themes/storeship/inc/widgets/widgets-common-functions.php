<?php

/**
 * Returns posts.
 *
 * @since Storeship 1.0.0
 */
if (!function_exists('storeship_get_posts')):
    function storeship_get_posts($number_of_posts, $category_id = '0', $post_type = 'post', $taxonomy = 'category')
    {
        if (is_front_page()) {
            $paged = (get_query_var('page')) ? get_query_var('page') : 1;
        } else {
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        }
        $ins_args = array(
            'post_type' => $post_type,
            'posts_per_page' => absint($number_of_posts),
            'paged' => $paged,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        );


        if (absint($category_id) > 0) {

            $ins_args['tax_query'] = array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'term_id',
                    'terms' => absint($category_id)
                )
            );
        }

        $all_posts = new WP_Query($ins_args);
        return $all_posts;
    }

endif;


/**
 * Returns all categories.
 *
 * @since Storeship 1.0.0
 */
if (!function_exists('storeship_get_terms')):
    function storeship_get_terms($taxonomy = 'category', $category_id = 0, $default = '')
    {
        $taxonomy = !empty($taxonomy) ? $taxonomy : 'category';

        if ($category_id > 0) {
            $term = get_term_by('id', absint($category_id), $taxonomy);
            if ($term)
                return esc_html($term->name);


        } else {
            $terms = get_terms(array(
                'taxonomy' => $taxonomy,
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true,
            ));


            if (isset($terms) && !empty($terms)) {
                foreach ($terms as $term) {
                    if ($default != 'first') {
                        $array['0'] = __('Select Category', 'storeship');
                    }
                    $array[$term->term_id] = esc_html($term->name);
                }

                return $array;
            }
        }
    }
endif;

/**
 * Returns all categories.
 *
 * @since Storeship 1.0.0
 */
if (!function_exists('storeship_get_terms_link')):
    function storeship_get_terms_link($category_id = 0)
    {

        if (absint($category_id) > 0) {
            return get_term_link(absint($category_id), 'category');
        } else {
            return get_post_type_archive_link('post');
        }
    }
endif;

/**
 * Returns word count of the sentences.
 *
 * @since Storeship 1.0.0
 */
if (!function_exists('storeship_get_excerpt')):
    function storeship_get_excerpt($length = 25, $storeship_content = null, $post_id = 1)
    {
        $length = absint($length);
        $source_content = preg_replace('`\[[^\]]*\]`', '', $storeship_content);
        $trimmed_content = wp_trim_words($source_content, $length, '...');
        return $trimmed_content;
    }
endif;


/**
 * Returns word count of the sentences.
 *
 * @since Storeship 1.0.0
 */
if (!function_exists('storeship_excerpt_ellisis')):
    function storeship_excerpt_ellisis($length = 25, $storeship_content = null, $post_id = 1)
    {
        if (!is_admin()) {
            global $post;
            //$more = '&hellip;. <a href="'. get_permalink($post->ID) . '">Continue reading.</a>';
            //$more = '<span class="read-more-faq"><a href="'. get_permalink($post->ID) . '">'. __("Read More", "storeship") .'"</a></span>';
            $more = sprintf('<span class="read-more-faq"><a href="%1s">%2s</a></span>', get_permalink($post->ID), __("Read More", "storeship"));
            return $more;

        }
    }
endif;
add_filter('excerpt_more', 'storeship_excerpt_ellisis');


/**
 * Returns no image url.
 *
 * @since Storeship 1.0.0
 */
if (!function_exists('storeship_no_image_url')):
    function storeship_no_image_url()
    {
        $storeship_img_url = get_template_directory_uri() . '/assets/images/no-image.png';
        return $storeship_img_url;
    }

endif;

/**
 * Returns no image url.
 *
 * @since Storeship 1.0.0
 */
if (!function_exists('storeship_post_format')):
    function storeship_post_format($post_id = 0)
    {
        $post_format = get_post_format($post_id);
        switch ($post_format) {
            case "image":
                echo "<div class='storeship-post-format'><i class='fa fa-camera'></i></div>";
                break;
            case "video":
                echo "<div class='storeship-post-format'><i class='fa fa-video-camera'></i></div>";

                break;
            case "gallery":
                echo "<div class='storeship-post-format'><i class='fa fa-camera'></i></div>";
                break;
            default:
                echo "";
        }


    }

endif;

/**
 * Returns no image url.
 *
 * @since Storeship 1.0.0
 */
if (!function_exists('storeship_widget_title_section')):
    function storeship_widget_title_section($title = '', $title_note = '', $inside_img = false)
    { ?>

        <?php if($inside_img == false): ?>
        <span class="header-after">
            <?php echo esc_html($title); ?>
        </span>
    <?php endif; ?>
        <?php if (!empty($title_note)): ?>
        <span class="title-note">
                <span>
                    <?php echo esc_html($title_note); ?>
                </span>
            </span>
    <?php endif; ?>
        <?php if($inside_img): ?>
        <span class="header-after">
            <?php echo esc_html($title); ?>
        </span>
    <?php endif; ?>
        <?php

    }

endif;
