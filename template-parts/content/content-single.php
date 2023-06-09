<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
		<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
		
		<div>
			<span class="text-md font-semibold">Tags:</span> <?php the_tags('<span class="text-md pr-1">',',</span><span class="text-md">', '</span>')?>
			<span class="text-md font-semibold">Comments:</span> <?php comments_number() ?>
		</div>
		

		<?php the_title( sprintf( '<h1 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'codeandfood' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'codeandfood' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
	</div>

</article>
