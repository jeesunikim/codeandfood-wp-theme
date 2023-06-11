<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// Don't show the title if the post-format is `aside` or `status`.
$post_format = get_post_format();
if ( 'aside' === $post_format || 'status' === $post_format ) {
	return;
}
?>

<header class="entry-header">
	<?php
	codeandfood_post_thumbnail();
	the_title( sprintf( '<h2 class="text-3xl mb-3 leading-snug"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
	?>
</header><!-- .entry-header -->
