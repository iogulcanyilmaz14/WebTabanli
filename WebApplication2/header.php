<?php
/**
 * The header for our theme
 *
 * @subpackage lz-toy-store
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<header role="banner" id="header">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lz-toy-store' ); ?></a>
	<div class="top">
		<div class="container">
			<div class="main-top">
				<div class="row">
					<div class="col-lg-3 col-md-3 layout">
						<div class="logo">
					        <?php if ( has_custom_logo() ) : ?>
						        <div class="site-logo"><?php the_custom_logo(); ?></div>
						    <?php endif; ?>
				            <?php if (get_theme_mod('lz_toy_store_show_site_title',true)) {?>
						        <?php $blog_info = get_bloginfo( 'name' ); ?>
						        <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
							            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						        	<?php else : ?>
					            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						            <?php endif; ?>
						        <?php endif; ?>
						    <?php }?>
				        	<?php if (get_theme_mod('lz_toy_store_show_tagline',true)) {?>
						        <?php
						        $description = get_bloginfo( 'description', 'display' );
						        if ( $description || is_customize_preview() ) :
						          ?>
							        <p class="site-description">
							            <?php echo esc_html($description); ?>
							        </p>
						        <?php endif; ?>
						    <?php }?>
					    </div>
					</div>
					<div class="col-lg-9 col-md-9 ">
						<div class="contact-details">
							<span class="call">
								<?php if( get_theme_mod( 'lz_toy_store_call','' ) != '') { ?>
							    	<i class="fas fa-phone"></i><span class="col-org"><a href="tel:<?php echo esc_attr( get_theme_mod('lz_toy_store_call','') ); ?>"><?php echo esc_html( get_theme_mod('lz_toy_store_call','') ); ?></a></span>
								<?php } ?>
							</span>
							<span class="call">
								<?php if( get_theme_mod( 'lz_toy_store_address','' ) != '') { ?>
								<span>|</span>
							    	<i class="fas fa-map-marker-alt"></i><span class="col-org"><?php echo esc_html( get_theme_mod('lz_toy_store_address','') ); ?></span>
								<?php } ?>
							</span>
						</div>	
						<div class="menu-section">
							<div class="row">
								<div class="col-lg-6 col-md-2">
									<?php if (has_nav_menu('primary')){ ?>
										<div class="toggle-menu responsive-menu">
								            <button onclick="lz_toy_store_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','lz-toy-store'); ?></span></button>
								        </div>
										<div id="sidelong-menu" class="nav sidenav">
							                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'lz-toy-store' ); ?>">
							                  <?php 
							                    wp_nav_menu( array( 
							                      'theme_location' => 'primary',
							                      'container_class' => 'main-menu-navigation clearfix' ,
							                      'menu_class' => 'clearfix',
							                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
							                      'fallback_cb' => 'wp_page_menu',
							                    ) ); 
							                  ?>
							                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="lz_toy_store_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','lz-toy-store'); ?></span></a>
							                </nav>
							            </div>
							        <?php }?>
								</div>
								<div class="col-lg-4 col-md-6">
									<span class="search-icon">
							            <?php get_search_form(); ?>
							        </span>
								</div>
								<div class="col-lg-2 col-md-4 p-0">
									<div class="cart_icon">
									 	<a href="<?php the_permalink((get_option('woocommerce_cart_page_id'))); ?>"><i class="fas fa-shopping-bag"></i><?php echo esc_html_e('SHOPPING CART','lz-toy-store'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</header>