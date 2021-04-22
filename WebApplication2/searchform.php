<?php
/**
 * Template for displaying search forms in lz-toy-store
 *
 * @subpackage lz-toy-store
 * @since 1.0
 * @version 0.1
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label >
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'lz-toy-store' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'lz-toy-store' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
	</label>
	<button role="tab" type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'lz-toy-store' ); ?></button>
</form>