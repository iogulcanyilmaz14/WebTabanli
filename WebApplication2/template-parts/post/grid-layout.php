<?php
/**
 * Template part for displaying posts
 * 
 * @subpackage lz-toy-store
 * @since 1.0
 * @version 1.4
 */

?>
<div class="col-lg-4 col-md-4">
	<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="article_content">   
      <div class="article-text"> 
        <?php 
          if(has_post_thumbnail()) {?>
            <div class="box-image">
              <?php the_post_thumbnail(); ?>
            </div>
          <div class="date-color">
          <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>  
          </div>
        <?php } ?>  
        <div class="metabox"> 
          <i class="fas fa-user"></i><span class="entry-author"><?php the_author(); ?></span><span>|</span>
          <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','lz-toy-store'), __('0 Comments','lz-toy-store'), __('% Comments','lz-toy-store') ); ?></span>
        </div>
        <h3><?php the_title(); ?></h3>
        <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( lz_toy_store_string_limit_words( $excerpt,30 ) ); ?></p></div>
        <div class="read-btn">
          <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'lz-toy-store' ); ?>"><?php esc_html_e('Read More','lz-toy-store'); ?>
          </a>
        </div>
      </div>
      <div class="clearfix"></div> 
    </div>
  </div>
</div>