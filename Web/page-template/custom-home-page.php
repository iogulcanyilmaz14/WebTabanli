<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="content" class="site-main" role="main">
	<div class="container">
		<?php do_action( 'lz_toy_store_above_category' ); ?>

		<section id="category-dropdown" class="white-border">
			<div class="row">
				<?php if(class_exists('woocommerce')){ ?>
					<div class="col-lg-3 col-md-3 layout">
				        <button role="tab" class="product-btn"><i class="fa fa-bars" aria-hidden="true"></i><?php echo esc_html_e('BROWSE BY DEPARTMENTS','lz-toy-store'); ?></button>
				        <div class="product-cat">
				          <?php
				            $args = array(
				              //'number'     => $number,
				              'orderby'    => 'title',
				              'order'      => 'ASC',
				              'hide_empty' => 0,
				              'parent'  => 0
				              //'include'    => $ids
				            );
				            $lz_toy_store_product_categories = get_terms( 'product_cat', $args );
				            $count = count($lz_toy_store_product_categories);
				            if ( $count > 0 ){
				                foreach ( $lz_toy_store_product_categories as $product_category ) {
				                  $product_cat_id   = $product_category->term_id;
				                  $cat_link = get_category_link( $product_cat_id );
				                  if ($product_category->category_parent == 0) { ?>
				                <li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
				                <?php
				              }
				                echo esc_html( $product_category->name ); ?></a><i class="fas fa-chevron-right"></i></li>
				                <?php
				                }
				              }
				          ?>
			        	</div>
			      	</div>
			    <?php }?>
				<div class="col-lg-9 col-md-9 layout1">
					<?php $lz_toy_store_sale_pages = array();
					$mod = intval( get_theme_mod( 'lz_toy_store_servicesettings_page'));
					if ( 'page-none-selected' != $mod ) {
					 	$lz_toy_store_sale_pages[] = $mod;
					}
					if( !empty($lz_toy_store_sale_pages) ) :
					 	$args = array(
						   'post_type' => 'page',
						   'post__in' => $lz_toy_store_sale_pages,
						   'orderby' => 'post__in'
						);
						$query = new WP_Query( $args );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="view-product">
							<div class="text">
							    <span class="heading"><?php the_title(); ?></span>
							    <span class="know-btn">
							      <a href="<?php echo esc_url( get_permalink(get_option('woocommerce_shop_page_id')) );?>" class="blogbutton-small" title="<?php esc_attr_e( 'View Products', 'lz-toy-store' ); ?>"><?php esc_html_e('View Products','lz-toy-store'); ?>
	        					  </a>
							    </span>
							</div>
						    <div class="box-image">
						        <?php the_post_thumbnail(); ?>
						    </div>
							</div>
						<?php  endwhile; ?>
				 	<?php else : ?>
					   <div class="no-postfound"></div>
					<?php endif;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>	
		</section>

		<?php do_action( 'lz_toy_store_above_slider' ); ?>

		<?php if( get_theme_mod('lz_toy_store_slider_hide_show') != ''){ ?>	
			<section id="slider" class="white-border1">
			  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
				    <?php $lz_toy_store_slider_pages = array();
				      	for ( $count = 1; $count <= 4; $count++ ) {
					        $mod = intval( get_theme_mod( 'lz_toy_store_slider' . $count ));
					        if ( 'page-none-selected' != $mod ) {
					          	$lz_toy_store_slider_pages[] = $mod;
					        }
				      	}
				      	if( !empty($lz_toy_store_slider_pages) ) :
				        $args = array(
				          	'post_type' => 'page',
				          	'post__in' => $lz_toy_store_slider_pages,
				          	'orderby' => 'post__in'
				        );
				        $query = new WP_Query( $args );
				        if ( $query->have_posts() ) :
				          	$i = 1;
				    ?>     
				    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
				        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
				          	<a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?></a>
				          	<div class="carousel-caption">
					            <div class="inner_carousel">
					              	<h1><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title(); ?></a></h1>
					              	<p><?php $excerpt = get_the_excerpt(); echo esc_html( lz_toy_store_string_limit_words( $excerpt,10 ) ); ?></p>	
					            </div>
				          	</div>
				        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
				    </div>
				    <?php else : ?>
				    <div class="no-postfound"></div>
				      <?php endif;
				    endif;?>
				    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
				    </a>
				    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
				    </a>
			  	</div>  
			  	<div class="clearfix"></div>
			</section>
		<?php }?>

		<?php do_action('lz_toy_store_below_slider'); ?>

		<?php /*--new-arrivals --*/?>
		<section id="new-arrivals" class="white-border">
			<?php $lz_toy_store_product_pages = array();
		      	$mod = absint( get_theme_mod( 'lz_toy_store_trending_products'));
		      	if ( 'page-none-selected' != $mod ) {
		        	$lz_toy_store_product_pages[] = $mod;	
		      	}
			    if( !empty($lz_toy_store_product_pages) ) :
			      $args = array(
			        'post_type' => 'page',
			        'post__in' => $lz_toy_store_product_pages,
			        'orderby' => 'post__in'
			      );
			      $query = new WP_Query( $args );
			      if ( $query->have_posts() ) :
			        $count = 0;
			        while ( $query->have_posts() ) : $query->the_post(); ?>
			          <div class="new-arrivals">
			            <strong><?php the_title(); ?></strong>
			            <p><?php the_content(); ?></p>
			            <div class="clearfix"></div>
			          </div>
			        <?php $count++; endwhile; ?>
			      <?php else : ?>
			          <div class="no-postfound"></div>
			      <?php endif;
			    endif;
			    wp_reset_postdata()
			?>
		</section>
		
		<?php do_action('lz_toy_store_below_new_arrivals_section'); ?>
	</div>

	<div class="container para-white lz-content">
	  	<?php while ( have_posts() ) : the_post(); ?>
	        <?php the_content(); ?>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>