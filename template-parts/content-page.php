<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package materializecss-theme
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) { ?>
		  <div class="post-featured-img">
				<?php 
				$thumbnail = get_post( get_post_thumbnail_id() );
				?>
				<img width="100%" class="materialboxed responsive-img" alt="<?php echo get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true ); ?>" title="<?php echo $thumbnail->post_title; ?>" data-caption="<?php echo $thumbnail->post_excerpt; ?>" src="<?php the_post_thumbnail_url('featured-img'); ?>">
		 	  <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank" class="full-img-btn tooltipped" data-position="right" data-delay="1" data-tooltip="Full Size Image"><i class="material-icons">fullscreen</i></a>
		  </div>
		<?php } ?>
		<div class="content">
			<?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</article>