<article id="post-<?php echo the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>
	<header class="entry-header mb-4">
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
	</header>
	
	<div class="entry-content">
		<?php
		the_content(
			codeandfood_continue_reading_text()
		);

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'codeandfood' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'codeandfood' ),
			)
		);

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php codeandfood_entry_meta_footer(); ?>
	</footer>
	<!-- .entry-footer -->
</article>