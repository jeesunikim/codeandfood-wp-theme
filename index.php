<?php get_header(); ?>

<div class="container mx-auto my-8">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>


			


		<?php endwhile; ?>

	<?php endif; ?>


	<?php the_posts_pagination(); ?>

</div>

<?php
get_footer();
