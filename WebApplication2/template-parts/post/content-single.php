<?php
/**
 * Template part for displaying posts
 * 
 * @subpackage lz-toy-store
 * @since 1.0
 * @version 1.4
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content">     
    <div class="article-text"> 
      <h1><?php the_title(); ?></h1>
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
        <a href="<?php echo esc_url( get_permalink() );?>"><i class="fas fa-user"></i><span class="entry-author"><?php the_author(); ?></span></a><span>|</span>
        <a href="<?php echo esc_url( get_permalink() );?>"><i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','lz-toy-store'), __('0 Comments','lz-toy-store'), __('% Comments','lz-toy-store') ); ?></span></a>
      </div> 
      <div class="entry-content"><p><?php the_content(); ?></p></div>
    </div>
    <div class="clearfix"></div> 
  </div>
</div>