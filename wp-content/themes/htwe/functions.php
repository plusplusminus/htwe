<?php

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/


require('classes/theme-cpt.php');


add_action( 'wp_enqueue_scripts', 'ppm_scripts_and_styles', 999 );

function ppm_scripts_and_styles() {
    global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    if (!is_admin()) {
        
        wp_register_script( 'packery', get_stylesheet_directory_uri() . '/library/vendors/packery/dist/packery.pkgd.min.js', array('jquery'), '1.0.8',true);
     
        wp_register_script( 'third-party', get_stylesheet_directory_uri() . '/library/js/third-party.js', array('jquery'), '1.0.8',true);
        
        wp_register_script( 'ppm', get_stylesheet_directory_uri() . '/library/js/ppm.js', array('third-party','packery','jquery'), '1.0.49',true);

        wp_enqueue_script('packery');

        wp_localize_script( 'ppm', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

        wp_enqueue_script('ppm');

      
    }
}

add_image_size('feature-lg',752,502,true);
add_image_size('feature-sq',368,246,true);

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="section_widget--heading"><h3 class="section_widget--title">',
    'after_title'   => '</h3></div>',
    ) );
}

add_filter('redux/options/tpb_options/sections', 'child_sections');
function child_sections($sections){
    //$sections = array();
    $sections[] = array(
        'icon'          => 'ok',
        'icon_class'    => 'fa fa-gears',
        'title'         => __('Theme Options', 'peadig-framework'),
        'desc'          => __('<p class="description">Theme modifications</p>', 'ppm'),
        'fields' => array(
                array(
                        'id'=>'site_logo',
                        'type' => 'media', 
                        'url'=> true,
                        'title' => __('Site Logo', 'ppm'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc'=> __('Select main logo from media gallery', 'ppm'),
                        'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
                        ),
 
        )
    );

    $sections[] = array(
        'icon'          => 'envelope',
        'icon_class'    => 'fa fa-envelope',
        'title'         => __('Newsletter Section', 'peadig-framework'),
        'desc'          => __('<p class="description">Newsletter section options</p>', 'ppm'),
        'fields' => array(
                array(
                        'id'=>'news_title',
                        'type' => 'text', 
                        'title' => __('Newsletter Title', 'ppm'),
                        ),
                array(
                        'id'=>'news_text',
                        'type' => 'textarea', 
                        'title' => __('Newsletter Description', 'ppm'),
                        ),
                array(
                        'id'=>'news_image',
                        'type' => 'media', 
                        'url'=> true,
                        'title' => __('Newsletter Section Image', 'ppm'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc'=> __('Select background image from media gallery', 'ppm'),
                        'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
                        ),
        )
    );


     $sections[] = array(
        'icon'          => 'ok',
        'icon_class'    => 'fa fa-heart',
        'title'         => __('Social Profiles', 'ppm-framework'),
        'desc'          => __('<p class="description">Social Network URLS</p>', 'ppm'),
        'fields' => array(
            array(
                        'id'=>'twitter_url',
                        'type' => 'text',
                        'title' => __('Twitter', 'redux-framework-demo'),
                        'desc' => __('Enter your twitter url', 'ppm'),
                        ),  
            array(
                        'id'=>'facebook_url',
                        'type' => 'text',
                        'title' => __('Facebook', 'redux-framework-demo'),
                        'desc' => __('Enter your Facebook URL', 'ppm'),
                        ),  
            array(
                        'id'=>'pinterest_url',
                        'type' => 'text',
                        'title' => __('pinterest', 'redux-framework-demo'),
                        'desc' => __('Enter your pinterest URL', 'ppm'),
                        ),  
            array(
                        'id'=>'instagram_url',
                        'type' => 'text',
                        'title' => __('Instagram', 'redux-framework-demo'),
                        'desc' => __('Enter your Instagram URL', 'ppm'),
                        ), 
            array(
                        'id'=>'contact_email',
                        'type' => 'text',
                        'title' => __('Contact Email', 'ppm'),
                        'desc' => __('Enter your Contact Email', 'ppm'),
                        ),  
            array(
                        'id'=>'contact_number',
                        'type' => 'text',
                        'title' => __('Contact Number', 'ppm'),
                        'desc' => __('Enter your Contact Number', 'ppm'),
                        ),  
        )
    );

    

    return $sections;
}

function sergio($str) {
    echo '<pre>';
    print_r($str);
    echo '</pre>';
}

register_nav_menus(
    array(
        'secondary-nav' => __( 'Secondary Navigation', 'bonestheme' ),   // main nav in header
        'footer-nav' => __( 'Footer Nav', 'bonestheme' ),   // main nav in header
    )
);

function secondary_nav($nav = 'secondary-nav',$class='nav_secondary') {
    // display the wp3 menu if available
    wp_nav_menu(array(
        'container' => false,                                       // remove nav container
        'container_class' => 'menu clearfix',                       // class of container (should you choose to use it)
        'menu' => __( 'The Secondary Menu', 'bonestheme' ),              // nav name
        'menu_class' => $class,              // adding custom nav class
        'theme_location' => $nav,                             // where it's located in the theme
        'before' => '',                                             // before the menu
        'after' => '',                                            // after the menu
        'link_before' => '',                                      // before each link
        'link_after' => '',                                       // after each link
        'depth' => 2,                                             // limit the depth of the nav
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',  // fallback               // for bootstrap nav
    ));
} /* end bones main nav */


add_filter('post_thumbnail_html', 'tpb_thumbnail_attr',10,5);

function tpb_thumbnail_attr($html, $post_id, $post_thumbnail_id, $size, $attr ) {
    if ($size == 'grid') :
        $attr = array('class'=>'img-responsive js-cut');

        $image_lg = wp_get_attachment_image_src( $post_thumbnail_id, 'image-lg');
        $image_md = wp_get_attachment_image_src( $post_thumbnail_id, 'image-md');
        $image_sm = wp_get_attachment_image_src( $post_thumbnail_id, 'image-sm');


        $html =    '<picture class="js-cut">
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source srcset="'.$image_lg[0].'" media="(min-width: 1200px)" class="img-responsive">
                        <source srcset="'.$image_lg[0].'" media="(min-width: 992px)" class="img-responsive">
                        <source srcset="'.$image_sm[0].'" media="(min-width: 768px)" class="img-responsive">
                        
                        
                         <!--[if IE 9]></video><![endif]-->
                        <img srcset="'.$image_sm[0].'" class="img-responsive">
                    </picture>';
    endif;

    if ($size == 'grid-6') :
        $attr = array('class'=>'img-responsive js-cut');


        $image_lg = wp_get_attachment_image_src( $post_thumbnail_id, 'grid-6');
        $image_md = wp_get_attachment_image_src( $post_thumbnail_id, 'grid-6');
        $image_sm = wp_get_attachment_image_src( $post_thumbnail_id, 'image-sm');


        $html =    '<picture class="js-cut">
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source srcset="'.$image_lg[0].'" media="(min-width: 1200px)" class="img-responsive">
                        <source srcset="'.$image_lg[0].'" media="(min-width: 992px)" class="img-responsive">
                        <source srcset="'.$image_sm[0].'" media="(min-width: 768px)" class="img-responsive">
                        
                        
                         <!--[if IE 9]></video><![endif]-->
                        <img srcset="'.$image_sm[0].'" class="img-responsive">
                    </picture>';
    endif;

    if ($size == 'slider') :
        $attr = array('class'=>'img-responsive js-cut');

        $header_id = get_post_meta($post_id,'_ppm_header_image_id',true); 

        $image_lg = wp_get_attachment_image_src( $header_id, 'slider');
        $image_md = wp_get_attachment_image_src( $header_id, 'slider');
        $image_sm = wp_get_attachment_image_src( $header_id, 'slider');


        $html =    '<picture class="js-cut">
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source srcset="'.$image_lg[0].'" media="(min-width: 1200px)" class="img-responsive">
                        <source srcset="'.$image_lg[0].'" media="(min-width: 992px)" class="img-responsive">
                        <source srcset="'.$image_sm[0].'" media="(min-width: 768px)" class="img-responsive">
                        
                        
                         <!--[if IE 9]></video><![endif]-->
                        <img srcset="'.$image_sm[0].'" class="img-responsive">
                    </picture>';
    endif;

    return $html;
}


function get_grid_class($class=1){
    switch ($class) {
        case 1:
        case 2:
            return 'grid_article col-md-6 col-sm-6';
            break;
        case 3:
        case 4:
            return 'grid_article col-lg-4 col-md-6';
            break;
        case 5:
            return 'grid_article col-lg-4 col-md-12';
            break;
        case 6:
        case 7:
            return 'grid_article col-lg-6 col-md-12';
            break;
        default:
            # code...
            break;
    }
}

function ppm_register_metabox() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_ppm_';

    $internals_meta = new_cmb2_box( array(
        'id'            => $prefix . 'internals_metabox',
        'title'         => __( 'Internals Meta', 'cmb2' ),
        'object_types'  => array( 'internals', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $internals_meta->add_field( array(  
        'id' => 'internal_link',
        'name' => __( 'Link', 'woothemes' ),
        'type' => 'text',
        'desc' => __( 'Enter the link for the CTA (incl http://)', 'woothemes' ) 
    ));

    $internals_meta->add_field( array(  
        'id' => 'internal_link_text',
        'name' => __( 'CTA Text', 'woothemes' ),
        'type' => 'text',
        'desc' => __( 'Enter the text for the CTA', 'woothemes' ) 
    ));

    $featured_meta = new_cmb2_box( array(
        'id'            => $prefix . 'featured_metabox',
        'title'         => __( 'Featured Meta', 'cmb2' ),
        'object_types'  => array( 'post', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $group_field_id = $featured_meta->add_field( array(
        'id'          => 'featured_group',
        'type'        => 'group',
        'description' => __( 'Featured Images', 'cmb' ),
        'options'     => array(
            'group_title'   => __( 'Image {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Image', 'cmb' ),
            'remove_button' => __( 'Remove Image', 'cmb' ),
            'sortable'      => true, // beta
        ),
    ) );

    $featured_meta->add_group_field( $group_field_id, array(
        'name' => 'Featured Image',
        'id'   => 'featured_img',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $featured_meta->add_group_field( $group_field_id, array(
        'name' => 'Layout Class',
        'id'   => 'featured_img_class',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $page_meta = new_cmb2_box( array(
        'id'            => $prefix . 'page_metabox',
        'title'         => __( 'Page Meta', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $page_meta->add_field( array(  
        'id' => $prefix.'page_subtitle',
        'name' => __( 'Page Subtitle', 'woothemes' ),
        'type' => 'textarea_small',
        'desc' => __( 'Enter the page subtitle', 'woothemes' ) 
    ));

    $products_meta = new_cmb2_box( array(
        'id'            => $prefix . 'products_metabox',
        'title'         => __( 'Products Meta', 'cmb2' ),
        'object_types'  => array( 'products', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $products_meta->add_field( array(  
        'id' => 'product_currency',
        'name' => __( 'Currency', 'woothemes' ),
        'type' => 'text_small',
        'desc' => __( 'Enter the product currency', 'woothemes' ) 
    ));

    $products_meta->add_field( array(  
        'id' => 'product_price',
        'name' => __( 'Price', 'woothemes' ),
        'type' => 'text',
        'desc' => __( 'Enter the product price', 'woothemes' ) 
    ));

    $products_meta->add_field(array(  
        'id' => 'product_artist',
        'name' => __( 'Artist Name', 'woothemes' ),
        'type' => 'text',
        'desc' => __( 'Vendor Artist Name', 'woothemes' ) 
    ));

    $products_meta->add_field(array(  
        'id' => 'product_suppllier_name',
        'name' => __( 'Supplier Name', 'woothemes' ),
        'type' => 'text',
        'desc' => __( 'Name of supplier', 'woothemes' ) 
    ));

    $products_meta->add_field(array(  
        'id' => 'product_suppllier_email',
        'name' => __( 'Supplier Email', 'woothemes' ),
        'type' => 'text',
        'desc' => __( 'Email to send enquiry notification to', 'woothemes' ) 
    ));

    $group_field_id = $products_meta->add_field( array(
        'id'          => 'features_group',
        'type'        => 'group',
        'description' => __( 'Product Features', 'cmb' ),
        'options'     => array(
            'group_title'   => __( 'Feature {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Feature', 'cmb' ),
            'remove_button' => __( 'Remove Feature', 'cmb' ),
            'sortable'      => true, // beta
        ),
    ) );

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $products_meta->add_group_field( $group_field_id, array(
        'name' => 'Feature Title',
        'id'   => 'feature_title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $products_meta->add_group_field( $group_field_id, array(
        'name' => 'Feature Detail',
        'id'   => 'feature_detail',
        'type' => 'text',
    ) );

    $products_meta->add_field(array(  
        'id' => 'product_link',
        'name' => __( 'Custom Link', 'woothemes' ),
        'type' => 'text',
        'desc' => __( 'Custom or affiliate link (incl http://). Will display button in place of Enquiry form', 'woothemes' ),
    ));

    $products_meta->add_field(array(  
        'id' => 'product_link_text',
        'name' => __( 'Custom Link Text', 'woothemes' ),
        'type' => 'text',
        'desc' => __( 'Text to appear on Button', 'woothemes' ),
    ));

    $post_meta = new_cmb2_box( array(
        'id'           => 'cmb2_attached_posts_field',
        'title'        => __( 'Posts Options', 'cmb2' ),
        'object_types' => array( 'post' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
    ) );

    $post_meta->add_field( array(
        'name'    => 'Landscape Header Image',
        'desc'    => 'Upload an image or enter an URL.',
        'id'      => $prefix.'header_image',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
            'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );

    $post_meta->add_field(array(  
        'id' => $prefix.'single_intro_text',
        'name' => __( 'Story introduction Text', 'woothemes' ),
        'type' => 'textarea',
        'desc' => __( 'Single post introduction text', 'woothemes' ),
    ));

    $post_meta->add_field( array(
        'name'    => __( 'Attached Internals', 'cmb2' ),
        'desc'    => __( 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.', 'cmb2' ),
        'id'      => 'attached_cmb2_attached_posts',
        'type'    => 'custom_attached_posts',
        'options' => array(
            'show_thumbnails' => true, // Show thumbnails on the left
            'filter_boxes'    => true, // Show a text box for filtering the results
            'query_args'      => array( 'post_type'=>'internals','posts_per_page' => 10 ), // override the get_posts args
        )
    ));

    $quote_meta = new_cmb2_box( array(
        'id'            => $prefix . 'quote_metabox',
        'title'        => __( 'Quote Options', 'cmb2' ),
        'object_types' => array( 'post' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
    ) );

    $quote_meta->add_field( array(
        'name'    => 'Quote Background Color',
        'id'      => 'bg_colorpicker',
        'type'    => 'colorpicker',
        'default' => '#F1C2B0',
    ) );

}

add_action( 'cmb2_init', 'ppm_register_metabox' );

// Breadcrumbs
function custom_breadcrumb() {
    global $post;
  if(!is_front_page() && !is_home() ) {
  
    echo '<ol class="breadcrumb">';
    echo '<li><a href="'.get_option('home').'">Home</a></li>';
    if (is_single()) {
        if (is_singular('products')) {
            $page = get_page_by_title('Shop');
            echo '<li><a href="'.get_permalink($page->ID).'">Shop</a></li> <li> ';
            echo get_the_term_list( $post->ID, 'product-category', '', ', ' );
            echo '</li>';
        } else {
            echo '<li>';
                the_category(', ');
            echo '</li>';
        }
     
      if (is_single()) {
        echo '<li>';
        the_title();
        echo '</li>';
      }
    } elseif (is_tax('product-category')) {
        $page = get_page_by_title('Shop');
      echo '<li><a href="'.get_permalink($page->ID).'">Shop</a></li> <li> ';
      single_cat_title();
      echo '</li>';
    } elseif (is_tax('product-tag')) {
        $page = get_page_by_title('Shop');
      echo '<li><a href="'.get_permalink($page->ID).'">Shop</a></li> <li> ';
      single_cat_title();
      echo '</li>';
    } elseif (is_category()) {
      echo '<li>';
      single_cat_title();
      echo '</li>';
    } elseif (is_page() && (!is_front_page())) {
      echo '<li>';
      the_title();
      echo '</li>';
    } elseif (is_tag()) {
      echo '<li>Tag: ';
      single_tag_title();
      echo '</li>';
    } elseif (is_day()) {
      echo'<li>Archive for ';
      the_time('F jS, Y');
      echo'</li>';
    } elseif (is_month()) {
      echo'<li>Archive for ';
      the_time('F, Y');
      echo'</li>';
    } elseif (is_year()) {
      echo'<li>Archive for ';
      the_time('Y');
      echo'</li>';
    } elseif (is_author()) {
      echo'<li>Author Archives';
      echo'</li>';
    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
      echo '<li>Blog Archives';
      echo'</li>';
    } elseif (is_search()) {
      echo'<li>Search Results';
      echo'</li>';
    }
    echo '</ol>';
  }
}

add_action( 'show_user_profile', 'add_extra_social_links' );
add_action( 'edit_user_profile', 'add_extra_social_links' );

function add_extra_social_links( $user )
{
    ?>
        <h3>New User Profile Links</h3>

        <table class="form-table">
            <tr>
                <th><label for="facebook_profile">Facebook Profile URL</label></th>
                <td><input type="text" name="facebook_profile" value="<?php echo esc_attr(get_the_author_meta( 'facebook_profile', $user->ID )); ?>" class="regular-text" /></td>
            </tr>

            <tr>
                <th><label for="twitter_profile">Twitter Handle</label></th>
                <td><input type="text" name="twitter_profile" value="<?php echo esc_attr(get_the_author_meta( 'twitter_profile', $user->ID )); ?>" class="regular-text" /></td>
            </tr>

            <tr>
                <th><label for="google_profile">Instagram Profile URL</label></th>
                <td><input type="text" name="instagram_profile" value="<?php echo esc_attr(get_the_author_meta( 'instagram_profile', $user->ID )); ?>" class="regular-text" /></td>
            </tr>
        </table>
    <?php
}

add_action( 'personal_options_update', 'save_extra_social_links' );
add_action( 'edit_user_profile_update', 'save_extra_social_links' );

function save_extra_social_links( $user_id )
{
    update_user_meta( $user_id,'facebook_profile', sanitize_text_field( $_POST['facebook_profile'] ) );
    update_user_meta( $user_id,'twitter_profile', sanitize_text_field( $_POST['twitter_profile'] ) );
    update_user_meta( $user_id,'instagram_profile', sanitize_text_field( $_POST['instagram_profile'] ) );
}

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Default gravatar
add_filter( 'avatar_defaults', 'newgravatar' );
function newgravatar ($avatar_defaults) {
    $myavatar = get_stylesheet_directory_uri() . '/library/images/gravatar.png';
    $avatar_defaults[$myavatar] = "HTWE";
    return $avatar_defaults;

    add_filter( 'avatar_defaults', 'newgravatar' );
}


// Color Picket Palette
add_filter( 'cmb2_localized_data', 'cmb2_update_color_picker_palette' );
function cmb2_update_color_picker_palette( $l10n ) {
    $l10n['defaults']['color_picker'] = array(
        'palettes' => array( '#F1C2B0', '#b45f38', '#dcc092', '#4d6625', '#404040' ),
    );
    return $l10n;
}

function hwl_home_pagesize( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_tax( 'product-category' ) || is_tax( 'product-tag' ) || is_post_type_archive( 'products' )  ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 12 );
        return;
    }
}
add_action( 'pre_get_posts', 'hwl_home_pagesize', 1 );

// Gravity Product Inquiry Email of supplier
add_filter( 'gform_field_value_supplier_name', 'supplier_name_population_function' );
function supplier_name_population_function( $value ) {
    global $post;
    $supplier_name = get_post_meta($post->ID,'product_suppllier_name',true);
    return $supplier_name;
}

add_filter( 'gform_field_value_supplier_email', 'supplier_email_population_function' );
function supplier_email_population_function( $value ) {
    global $post;
    $supplier_email = get_post_meta($post->ID,'product_suppllier_email',true);
    return $supplier_email;
}


?>