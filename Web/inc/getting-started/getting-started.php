<?php
//about theme info
add_action( 'admin_menu', 'lz_toy_store_gettingstarted' );
function lz_toy_store_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'lz-toy-store'), esc_html__('About Theme', 'lz-toy-store'), 'edit_theme_options', 'lz_toy_store_guide', 'lz_toy_store_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function lz_toy_store_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'lz_toy_store_admin_theme_style');

//guidline for about theme
function lz_toy_store_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'lz-toy-store' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to LZ Toy Store WordPress Theme', 'lz-toy-store' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'lz-toy-store' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'lz-toy-store' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'lz-toy-store' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'lz-toy-store' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'lz-toy-store' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'lz-toy-store' ); ?> <a href="<?php echo esc_url( LZ_TOY_STORE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'lz-toy-store' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'LZ Toy Store is a colourful, creative, fresh and appealing toy store WordPress theme having its application for toy stores, kids clothing and shoes, birthday gifts, kids skin care products, children books, school bags, health food and supplements and all other kids products. It can be used as a portfolio showcasing attractive images. With the power of customization, it can be used for an online apparel store, book store, jewellery and cosmetics shop, mobile and gadgets selling store and many other eCommerce website and shops. It is integrated with WooCommerce plugin to ease selling toys and other products. It has a fluid layout which is responsive to varying screen sizes of mobiles, tablets and desktops. This toy WordPress theme is an all-browser compatible, translation ready and supports RTL writing. Its homepage is decorated with banners and sliders making it more impressive. Its developers have provided an easy-to-understand interface for users with smooth navigation giving a great site using experience. The clean and secure codes result in a bug-free website. It is optimized for search engines to get maximum traffic. The kids WordPress theme is backed by Bootstrap framework which gives it a strong base.', 'lz-toy-store')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free LZ Toy Store Theme', 'lz-toy-store' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'lz-toy-store'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( LZ_TOY_STORE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'lz-toy-store'); ?></a>
			<a href="<?php echo esc_url( LZ_TOY_STORE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'lz-toy-store'); ?></a>
			<a href="<?php echo esc_url( LZ_TOY_STORE_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'lz-toy-store'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/toy-store3.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'lz-toy-store'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'lz-toy-store'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'lz-toy-store'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>