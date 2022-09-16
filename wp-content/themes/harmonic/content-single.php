<?php
/**
 * @package harmonic
 */
$format = get_post_format();
$formats = get_theme_support( 'post-formats' );
?>

<?php $featuredimage = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<footer class="entry-meta">
		<?php if ( empty( $featuredimage )) : ?>
			<?php harmonic_posted_on(); ?>
		<?php endif; ?>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'harmonic' ) );
			if ( 'post' == get_post_type() && $category_list && harmonic_categorized_blog() ) :
		?>
				<span class="cat-links"><?php echo $category_list; ?></span>
			<?php endif; ?>

		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( 'post' == get_post_type() && $format && in_array( $format, $formats[0] ) ): ?>
			<span class="entry-format">
				<a href="<?php echo esc_url( get_post_format_link( $format ) ); ?>" title="<?php echo esc_attr( sprintf( __( 'All %s posts', 'harmonic' ), get_post_format_string( $format ) ) ); ?>">
					<?php echo get_post_format_string( $format ); ?>
				</a>
			</span>
		<?php endif; ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><a href="#respond"><?php comments_number( __( 'Leave a comment', 'harmonic' ), __( '1 Comment', 'harmonic' ), __( '% Comments', 'harmonic' ) ); ?></a></span>
		<?php endif; ?>

		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

			<?php the_tags( '<span class="tags-links">', '', '</span>' ); ?>

			<?php edit_post_link( __( 'Edit', 'harmonic' ), '<span class="edit-link">', '</span>' ); ?>

		<?php endif; // End if 'post' == get_post_type() ?>
	</footer><!-- .entry-meta -->

	<div class="entry-main">
		<?php if ( empty( $featuredimage ) ) : ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'harmonic' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

	</div><!-- .entry-main -->

</article><!-- #post-## -->
