



add_action( 'init', 'menu_custom_init' );

function menu_custom_init() {
    $labels = array(
        'name'                  => _x( 'Post', 'Post type general name', 'post' ),
        'singular_name'         => _x( 'Post', 'Post type singular name', 'post' ),
        'menu_name'             => _x( 'Posts', 'Admin Menu text', 'post' ),
        'name_admin_bar'        => _x( 'Post', 'Add New on Toolbar', 'Post' ),
        'add_new'               => __( 'Add New', 'Post' ),
        'add_new_item'          => __( 'Add New Post', 'Post' ),
        'new_item'              => __( 'New Post', 'Post' ),
        'edit_item'             => __( 'Edit Post', 'Post' ),
        'view_item'             => __( 'View Post', 'Post' ),
        'all_items'             => __( 'All Posts', 'Post' ),
        'search_items'          => __( 'Search Posts', 'Post' ),
        'parent_item_colon'     => __( 'Parent Posts:', 'Post' ),
        'not_found'             => __( 'No Posts found.', 'Post' ),
        'not_found_in_trash'    => __( 'No Posts found in Trash.', 'Post' ),
        'featured_image'        => _x( 'Post Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'post' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'post' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'post' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'post' ),
        'archives'              => _x( 'Post archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'post' ),
        'insert_into_item'      => _x( 'Insert into post', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'post' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this post', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'post' ),
        'filter_items_list'     => _x( 'Filter Posts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'post' ),
        'items_list_navigation' => _x( 'Posts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'post' ),
        'items_list'            => _x( 'Posts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'post' ),
		'menu_icon'           => 'dashicons-cart',
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'post' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        // 'taxonomies'         => array( 'category', 'post_tag', 'types' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'posttype', $args );

	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Categories' ),
		'all_items'         => __( 'All Categories' ),
		'parent_item'       => __( 'Parent Categories' ),
		'parent_item_colon' => __( 'Parent Categories:' ),
		'edit_item'         => __( 'Edit Categories' ),
		'update_item'       => __( 'Update Categories' ),
		'add_new_item'      => __( 'Add New Categories' ),
		'new_item_name'     => __( 'New Categories Name' ),
		'menu_name'         => __( 'Categories' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'categories' ],
	);
	register_taxonomy( 'categories', [ 'posttype' ], $args );

	$labels = array(
		'name'              => _x( 'Industries', 'taxonomy general name' ),
		'singular_name'     => _x( 'Industry', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Industries' ),
		'all_items'         => __( 'All Industries' ),
		'parent_item'       => __( 'Parent Industries' ),
		'parent_item_colon' => __( 'Parent Industries:' ),
		'edit_item'         => __( 'Edit Industries' ),
		'update_item'       => __( 'Update Industries' ),
		'add_new_item'      => __( 'Add New Industries' ),
		'new_item_name'     => __( 'New Industries Name' ),
		'menu_name'         => __( 'Industries' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'industries' ],
	);
	register_taxonomy( 'Industries', [ 'posttype' ], $args );

	$labels = array(
		'name'              => _x( 'Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'Types', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Types' ),
		'all_items'         => __( 'All Types' ),
		'parent_item'       => __( 'Parent Types' ),
		'parent_item_colon' => __( 'Parent Types:' ),
		'edit_item'         => __( 'Edit Types' ),
		'update_item'       => __( 'Update Types' ),
		'add_new_item'      => __( 'Add New Types' ),
		'new_item_name'     => __( 'New Types Name' ),
		'menu_name'         => __( 'Types' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'types' ],
	);
	register_taxonomy( 'Types', [ 'posttype' ], $args );
}