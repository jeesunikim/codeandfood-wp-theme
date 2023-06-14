<?php get_header(); ?>

<div class="container mx-auto my-8">
    <article>
        <?php 
            if ( have_posts() ) {
                while( have_posts() ) {
                    the_post();

                    get_template_part( 'template-parts/content/content-single');
                }
            }
            
        ?>
    </article>
</div>
 
<?php get_footer(); ?>