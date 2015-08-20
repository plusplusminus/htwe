<?php
class htweCustomPostTypes {

	public function __construct() {
		add_action('init',array($this,'htwe_products'));
		add_action('init',array($this,'htwe_productscat'));
<<<<<<< HEAD
		add_action('init',array($this,'htwe_productstag'));

		add_action('init',array($this,'htwe_internals'));
=======
>>>>>>> origin/master
	}

    public function htwe_productscat() {

		register_taxonomy(	"product-category", 
			array(	"products"	), 
			array (	"hierarchical" 		=> true, 
					"label" 			=> "Types", 
					'labels' 			=> array(	'name' 				=> __('Product Categories'),
													'singular_name' 	=> __('Product Category'),
													'search_items' 		=> __('Search Product Category'),
													'popular_items' 	=> __('Popular Product Categorie'),
													'all_items' 		=> __('All Product Categories'),
													'parent_item' 		=> __('Parent Product Category'),
													'parent_item_colon' => __('Parent Product Category:'),
													'edit_item' 		=> __('Edit Product Category'),
													'update_item'		=> __('Update Product Category'),
													'add_new_item' 		=> __('Add New Product Category'),
													'new_item_name' 	=> __('New Product Category Name')	), 
					'public' 			=> true,
					'show_ui' 			=> true,
					"rewrite" 			=> array('slug' => 'product-category', 'hierarchical' => true)	
				)
		);
	}

<<<<<<< HEAD
    public function htwe_productstag() {

		register_taxonomy(	"product-tag", 
			array(	"products"	), 
			array (	"hierarchical" 		=> fasle, 
					"label" 			=> "Types", 
					'labels' 			=> array(	'name' 				=> __('Product Tags'),
													'singular_name' 	=> __('Product Tag'),
													'search_items' 		=> __('Search Product Tags'),
													'popular_items' 	=> __('Popular Product Tags'),
													'all_items' 		=> __('All Product Tags'),
													'parent_item' 		=> __('Parent Product Tag'),
													'parent_item_colon' => __('Parent Product Tag:'),
													'edit_item' 		=> __('Edit Product Tag'),
													'update_item'		=> __('Update Product Tag'),
													'add_new_item' 		=> __('Add New Product Tag'),
													'new_item_name' 	=> __('New Product Tag Name')	), 
					'public' 			=> true,
					'show_ui' 			=> true,
					"rewrite" 			=> array('slug' => 'product-tag', 'hierarchical' => false)	
				)
		);
	}


=======
>>>>>>> origin/master

    function htwe_products()
	{
		// Register custom post types
		register_post_type(	'products', 
			array(	'label' 			=> __('Products'),
					'labels' 			=> array(	'name' 					=> __('Products'),
													'singular_name' 		=> __('Product'),
													'add_new' 				=> __('Add New'),
													'add_new_item' 			=> __('Add New Product'),
													'edit' 					=> __('Edit'),
													'edit_item' 			=> __('Edit Product'),
													'new_item' 				=> __('New Product'),
													'view_item'				=> __('View Product'),
													'search_items' 			=> __('Search Product'),
													'not_found' 			=> __('No Product found'),
													'not_found_in_trash' 	=> __('No Product found in trash')	),
					'public' 			=> true,
					'can_export'		=> true,
					'show_ui' 			=> true, // UI in admin panel
					'_builtin' 			=> false, // It's a custom post type, not built in
					'_edit_link' 		=> 'post.php?post=%d',
					'capability_type' 	=> 'post',
					'menu_icon' 		=> 'dashicons-awards',
					'hierarchical' 		=> false,
					'has_archive' 		=> true,
					'rewrite' 			=> array(	"slug" => "product"	), // Permalinks
					'query_var' 		=> "product", // This goes to the WP_Query schema
					'supports' 			=> array(	'title',																
													'editor',
													'thumbnail'
													),
					'show_in_nav_menus'	=> false ,
					'taxonomies'		=> array(	

													)
				)
			);			
	}

<<<<<<< HEAD
    function htwe_internals()
	{
		// Register custom post types
		register_post_type(	'internals', 
			array(	'label' 			=> __('Internals'),
					'labels' 			=> array(	'name' 					=> __('Internals'),
													'singular_name' 		=> __('Internal'),
													'add_new' 				=> __('Add New'),
													'add_new_item' 			=> __('Add New Internal'),
													'edit' 					=> __('Edit'),
													'edit_item' 			=> __('Edit Internal'),
													'new_item' 				=> __('New Internal'),
													'view_item'				=> __('View Internal'),
													'search_items' 			=> __('Search Internals'),
													'not_found' 			=> __('No Internal found'),
													'not_found_in_trash' 	=> __('No Internal found in trash')	),
					'public' 			=> true,
					'can_export'		=> true,
					'show_ui' 			=> true, // UI in admin panel
					'_builtin' 			=> false, // It's a custom post type, not built in
					'_edit_link' 		=> 'post.php?post=%d',
					'capability_type' 	=> 'post',
					'menu_icon' 		=> 'dashicons-pressthis',
					'hierarchical' 		=> false,
					'has_archive' 		=> false,
					'rewrite' 			=> array(	"slug" => "internal"	), // Permalinks
					'query_var' 		=> "internal", // This goes to the WP_Query schema
					'supports' 			=> array(	'title',																
													'editor',
													'thumbnail'
													),
					'show_in_nav_menus'	=> false ,
					'taxonomies'		=> array(	

													)
				)
			);			
	}

=======
>>>>>>> origin/master
}
global $cpt; 
$cpt = new htweCustomPostTypes(); 
