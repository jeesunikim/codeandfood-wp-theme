<?php
/** 
 * Template Name: Code Template
 * Template Post Type: page
**/

$args = array (
    'showposts' => '10',
    'category_name' => 'code',
    'category__not_in' => 18,
);

$the_query = new WP_Query( $args );

get_header();  ?>

<section class="grid gap-8 grid-cols-3">
<?php
    if ( $the_query->have_posts() ) {
        // Load posts loop.
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
        }
    }else {
        // If no content, include the "No posts found" template.
        get_template_part( 'template-parts/content/content-none' );

    }
?>
</section>
<?php wp_reset_postdata();