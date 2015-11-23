<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bizlight
 */
global $bizlight_customizer_all_values;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bizlight_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		$bizlight_archive_layout = $bizlight_customizer_all_values['bizlight-archive-layout'];
		$bizlight_archive_image_align = $bizlight_customizer_all_values['bizlight-archive-image-align'];
		if( 'excerpt-only' == $bizlight_archive_layout ){
			the_excerpt();
		}
		elseif( 'full-post' == $bizlight_archive_layout ){
			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bizlight' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		}
		elseif( 'thumbnail-and-full-post' == $bizlight_archive_layout ){
			if( 'left' == $bizlight_archive_image_align ){
				echo "<div class='image-left'>";
				the_post_thumbnail();
			}
			elseif( 'right' == $bizlight_archive_image_align ){
				echo "<div class='image-right'>";
				the_post_thumbnail();
			}
			else{
				echo "<div class='image-full'>";
				the_post_thumbnail('full');
			}
			echo "</div>";/*div end*/
			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bizlight' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		}
		else{
			if( 'left' == $bizlight_archive_image_align ){
				echo "<div class='image-left'>";
				the_post_thumbnail();
			}
			elseif( 'right' == $bizlight_archive_image_align ){
				echo "<div class='image-right'>";
				the_post_thumbnail();
			}
			else{
				echo "<div class='image-full'>";
				the_post_thumbnail('full');
			}
			echo "</div>";/*div end*/
			the_excerpt();
		}
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bizlight' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bizlight_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
