<?php
/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area my-8">

	<h2 class="text-lg comments-title">
		<?php 
			if ( ! have_comments() ) {
				echo "Leave a Comment";
			} else {
				echo get_comments_number(). " Comments";
			} 
		?>
	</h2>
	<?php if ( have_comments() ) : ?>

		<div class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'div',
						'short_ping'  => true,
					)
				);
			?>
		</div>

	<?php endif; ?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<nav class="comment-navigation" id="comment-nav-above">

			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'codeandfood' ); ?></h1>

			<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '&larr; Older Comments', 'codeandfood' ) ); ?>
					</div>
			<?php } ?>

			<?php if ( get_next_comments_link() ) { ?>
				<div class="nav-next">
					<?php next_comments_link( __( 'Newer Comments &rarr;', 'codeandfood' ) ); ?>
				</div>
			<?php } ?>

		</nav><!-- #comment-nav-above -->

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'codeandfood' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply_before' => '<h2 class="text-2xl">Write a Comment</h2>',
			'title_reply_after' => '<h2>hello</h2>',
			'class_submit'  => 'bg-primary text-white cursor-pointer rounded font-bold py-2 px-4',
			'comment_field' => '<textarea id="comment" name="comment" class="bg-gray-200 w-full py-2 px-3" aria-required="true"></textarea>',
		)
	);
	?>

</div>
