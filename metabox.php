<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 *
 * @link http://metabox.io/docs/registering-meta-boxes/
 */
add_filter( 'rwmb_meta_boxes', 'nondesigns_register_meta_boxes' );
/**
 * Register meta boxes
 *
 * Remember to change "nondesigns" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function nondesigns_register_meta_boxes( $meta_boxes ) {
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'nondesigns_';
	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'home',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Home Page Feature', $prefix ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'post', 'page' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
        'include' => array(
			'slug'      => array( 'home'),
        ),
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(
			// Grouped Fields
	        array(
	            'name' => 'Home Page Banner Group',
	            'id' => 'nondesigns_home_banner_group',
	            'type' => 'group',
	            'clone' => true, 
	            'sort_clone' => true,
	            // List of sub-fields
	            'fields' => array(
	                
					// HOME PAGE FEATURE IMAGE SLIDER
					array(
						'name'             => esc_html__( 'Home Page Feature Slider', $prefix ),
		                'desc'             => 'Recommended home page banner image dimensions are 2560 x 1600 pixels.',
						'id'               => "{$prefix}home_feature",
						'type'             => 'image_advanced',
						'max_file_uploads' => 1,
					),

					// BANNER LINK
					array(
						'name' => __( 'Banner Link', $prefix ),
						'id'   => "{$prefix}banner_link",
						'type' => 'textarea',
						'cols' => 10,
						'rows' => 1,
					),
					
	            ),
	        ),			
		)
	);
	// 2nd meta box
	$meta_boxes[] = array(
		'id' => 'slides',
        'title' => esc_html__( 'Slide Details', $prefix ),
		'post_types' => array( 'post' ),
		'fields' => array(
			// HOME PAGE FEATURE IMAGE SLIDER
			array(
				'name'             => esc_html__( 'Slide Backgrounds', $prefix ),
                'desc'             => 'Recommended slide background image dimensions are 2560 x 1600 pixels.',
				'id'               => "{$prefix}slide_background",
				'type'             => 'image_advanced',
				'max_file_uploads' => 6,
			),  

			// BANNER LINK
			array(
				'name' => __( 'YouTube Link', $prefix ),
				'id'   => "{$prefix}youtube_link",
				'type' => 'textarea',
				'cols' => 10,
				'rows' => 1,
			),        
		),
	);
	// 3rd meta box
	$meta_boxes[] = array(
		'id' => 'slide_groups',
        'title' => esc_html__( 'Slide Groups', $prefix ),
		'post_types' => array( 'page' ),
        'include' => array(
			'slug'      => array( 'product-1', 'product-2', 'product-3', 'product-4', 'product-5'),
        ),
		'fields' => array(

			// POST
			array(
				'name'        => esc_html__( 'Products or Projects', $prefix ),
				'id'          => "{$prefix}products",
				'type'        => 'post',
				// Post type
				'post_type'   => 'post',
                'clone'       => true,
                'max_clone'   => 8,
                'sort_clone'  => true,
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => esc_html__( 'Select a Product or Project', $prefix ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),            
		),
	); 
	// 4th meta box
	$meta_boxes[] = array(
		'id' => 'about',
        'title' => esc_html__( 'About Page', $prefix ),
		'post_types' => array( 'page' ),
        'include' => array ( 
            'slug'      => array( 'about'), 
        ),
		'fields' => array(
			// TEXTAREA
			array(
				'name' => esc_html__( 'Mobile Content', $prefix ),
				'desc' => esc_html__( 'Content for mobile devices', $prefix ),
				'id'   => "{$prefix}about_mobile",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 10,
			),  
			// TEXTAREA
			array(
				'name' => esc_html__( 'About Content Left', $prefix ),
				'desc' => esc_html__( 'About content (left column) for desktop users', $prefix ),
				'id'   => "{$prefix}about_desktop_left",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 10,
			),  
			// TEXTAREA
			array(
				'name' => esc_html__( 'About Content Right', $prefix ),
				'desc' => esc_html__( 'About content (right column) for desktop users', $prefix ),
				'id'   => "{$prefix}about_desktop_right",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 10,
			),               
		),
	);    
	return $meta_boxes;
}