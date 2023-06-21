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

<section class="grid grid-cols-1 gap-y-2 md:gap-y-0 md:gap-x-4 md:grid-cols-3 lg:px-8 lg:py-4 md:px-6 md:mb-8">
    <div class="relative mb-4 md:mb-0">
        <!-- <img src="https://codeandfooddev.wpengine.com/wp-content/uploads/2023/02/home-thumb.jpg" alt="" /> -->
        <div class="flex flex-col justify-between mx-auto md:flex-row">
            <div class="flex flex-col mb-8">
                <h2 class="font-mono text-3xl font-semibold">Hello! 안녕하세요!</h2>
                <h2 class="font-mono text-3xl font-semibold">I'm Jee (지선)!</h2>
                <br/>
                <p class="font-sans text-base font-medium">frontend developer ✨</p>
                <p class="font-sans text-base font-medium">I love meeting new people 💕</p>
                <p class="font-sans text-base font-medium">say hi 👋</p>
                <br/>
                <a class="font-sans text-base font-medium" href="https://twitter.com/codeandfood">@codeandfood</a>
                <a class="font-sans text-base font-medium" href="mailto:hi@codeandfood.com">hi@codeandfood.com</a>
            </div>
        </div>
    </div>
    <div class="mb-14 md:col-span-2 md:mb-0">
        <h3 class="font-mono text-lg font-semibold">Some topics I like to talk about...</h3>
        <?php $tags = get_tags(array('hide_empty' => false));
        foreach ($tags as $tag) { $tag_link = get_tag_link( $tag->term_id ); echo '<a href=' . esc_url( $tag_link ) . ' class="font-mono text-sm font-medium pr-3">#' . $tag->name . '</a>';};?>
    </div>
</section>



<h3 class="font-mono text-base text-center font-semibold mb-4 md:mb-6">[recent posts]</h3>

<section class="grid grid-cols-1 gap-y-7 px-6 md:gap-x-6 md:grid-cols-3 md:gap-y-12">
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

<?php
get_footer();
