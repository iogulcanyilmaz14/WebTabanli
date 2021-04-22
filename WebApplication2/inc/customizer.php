<?php
/**
 * lz-toy-store: Customizer
 *
 * @subpackage lz-toy-store
 * @since 1.0
 */

function lz_toy_store_customize_register( $wp_customize ) {

	$wp_customize->add_setting('lz_toy_store_show_site_title',array(
       'default' => true,
       'sanitize_callback'	=> 'lz_toy_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('lz_toy_store_show_site_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Title','lz-toy-store'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('lz_toy_store_show_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'lz_toy_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('lz_toy_store_show_tagline',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Tagline','lz-toy-store'),
       'section' => 'title_tagline'
    ));

	$wp_customize->add_panel( 'lz_toy_store_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'lz-toy-store' ),
	    'description' => __( 'Description of what this panel does.', 'lz-toy-store' ),
	) );

	$wp_customize->add_section( 'lz_toy_store_theme_options_section', array(
    	'title'      => __( 'General Settings', 'lz-toy-store' ),
		'priority'   => 30,
		'panel' => 'lz_toy_store_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('lz_toy_store_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'lz_toy_store_sanitize_choices'	        
	));

	$wp_customize->add_control('lz_toy_store_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','lz-toy-store'),
        'section' => 'lz_toy_store_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','lz-toy-store'),
            'Right Sidebar' => __('Right Sidebar','lz-toy-store'),
            'One Column' => __('One Column','lz-toy-store'),
            'Three Columns' => __('Three Columns','lz-toy-store'),
            'Four Columns' => __('Four Columns','lz-toy-store'),
            'Grid Layout' => __('Grid Layout','lz-toy-store')
        ),
	));

	// Contact Details
	$wp_customize->add_section( 'lz_toy_store_contact_details', array(
    	'title'      => __( 'Contact Details', 'lz-toy-store' ),
		'priority'   => null,
		'panel' => 'lz_toy_store_panel_id'
	) );

	$wp_customize->add_setting('lz_toy_store_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_toy_store_address',array(
		'label'	=> __('Address','lz-toy-store'),
		'section'=> 'lz_toy_store_contact_details',
		'setting'=> 'lz_toy_store_address',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('lz_toy_store_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'lz_toy_store_sanitize_phone_number'
	));	
	$wp_customize->add_control('lz_toy_store_call',array(
		'label'	=> __('Contact Number','lz-toy-store'),
		'section'=> 'lz_toy_store_contact_details',
		'setting'=> 'lz_toy_store_call',
		'type'=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'lz_toy_store_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'lz-toy-store' ),
		'priority'   => null,
		'panel' => 'lz_toy_store_panel_id'
	) );

	$wp_customize->add_setting('lz_toy_store_slider_hide_show',array(
       	'default' => 'true',
       	'sanitize_callback'	=> 'lz_toy_store_sanitize_checkbox'
	));
	$wp_customize->add_control('lz_toy_store_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','lz-toy-store'),
	   	'section' => 'lz_toy_store_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'lz_toy_store_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'lz_toy_store_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'lz_toy_store_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'lz-toy-store' ),
			'section'  => 'lz_toy_store_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	// Product on Sale

	$wp_customize->add_section( 'lz_toy_store_our_services' , array(
    	'title'      => __( 'Product on Sale', 'lz-toy-store' ),
		'priority'   => null,
		'panel' => 'lz_toy_store_panel_id'
	) );

	$wp_customize->add_setting( 'lz_toy_store_servicesettings_page', array(
      'default'           => '',
      'sanitize_callback' => 'lz_toy_store_sanitize_dropdown_pages'
    ));
    $wp_customize->add_control( 'lz_toy_store_servicesettings_page', array(
      'label'    => __( 'Select Product Page', 'lz-toy-store' ),
      'description'	=> __('Add Image of size 885 x 60','lz-toy-store'),
      'section'  => 'lz_toy_store_our_services',
      'type'     => 'dropdown-pages'
    ));

	//New Arrivals
	$wp_customize->add_section( 'lz_toy_store_trending_page' , array(
    	'title'      => __( 'New Arrivals', 'lz-toy-store' ),
		'priority'   => null,
		'panel' => 'lz_toy_store_panel_id'
	) );

	$wp_customize->add_setting( 'lz_toy_store_trending_products', array(
		'default'           => '',
		'sanitize_callback' => 'lz_toy_store_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'lz_toy_store_trending_products', array(
		'label'    => __( 'Select Page', 'lz-toy-store' ),
		'section'  => 'lz_toy_store_trending_page',
		'type'     => 'dropdown-pages'
	));

	//Footer
    $wp_customize->add_section( 'lz_toy_store_footer', array(
    	'title'      => __( 'Footer Text', 'lz-toy-store' ),
		'priority'   => null,
		'panel' => 'lz_toy_store_panel_id'
	) );

    $wp_customize->add_setting('lz_toy_store_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_toy_store_footer_copy',array(
		'label'	=> __('Footer Text','lz-toy-store'),
		'section'	=> 'lz_toy_store_footer',
		'setting'	=> 'lz_toy_store_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'lz_toy_store_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'lz_toy_store_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'lz_toy_store_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'lz_toy_store_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'lz-toy-store' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'lz-toy-store' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'lz_toy_store_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'lz_toy_store_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'lz_toy_store_customize_register' );

function lz_toy_store_customize_partial_blogname() {
	bloginfo( 'name' );
}

function lz_toy_store_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function lz_toy_store_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function lz_toy_store_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class LZ_Toy_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'LZ_Toy_Store_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new LZ_Toy_Store_Customize_Section_Pro(
				$manager,
				'lz_toy_store_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Toy Store Pro', 'lz-toy-store' ),
					'pro_text' => esc_html__( 'Go Pro','lz-toy-store' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/product/toy-store-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'lz-toy-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'lz-toy-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
LZ_Toy_Store_Customize::get_instance();