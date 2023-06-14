<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage codeandfood
 */

$args = array (
    'showposts' => '5',
    'category__not_in' => 18,
);

$the_query = new WP_Query( $args );

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<section class="col-span-4">
    <?php if ( $the_query->have_posts() ) {

        // Load posts loop.
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
        }
        // Previous/next page navigation.
        codeandfood_the_posts_navigation();
    } else {
        // If no content, include the "No posts found" template.
        get_template_part( 'template-parts/content/content-none' );
    }?>
</section>

<section class="col-end-7 col-span-2 items-center md:justify-between md:mb-12">
    <div class="relative mb-8">
        <!-- <img src="https://codeandfooddev.wpengine.com/wp-content/uploads/2023/02/home-thumb.jpg" alt="" /> -->
        <div class="flex flex-col justify-between absolute left-0 right-0 mx-auto w-4/5 h-32 border-solid border-2 border-gray-900 bg-slate-50 p-4">
            <h2 class="font-mono text-lg font-semibold text-center">Jee선</h2>
            <p class="font-serif text-sm text-center">frontend developer ✨</p>
        </div>
    </div>
</section>

<?php
get_footer();
