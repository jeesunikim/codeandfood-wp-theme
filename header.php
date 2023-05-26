<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'codeandfood_theme_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'codeandfood_theme_header' ); ?>

	<header>

		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center">
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">
		<div class="container mx-auto">
				<nav class="grid grid-cols-3 max-w-screen-xl mx-auto py-10 px-2">
					<ul class="flex place-items-center">
						<li class="flex-auto text-center">
						<a href="#" class="text-base">about</a>
						</li>
					</ul>

					<div class="flex flex-col place-items-center justify-items-center">
						<h2 class="text-center text-3xl md:text-4xl font-bold tracking-tight md:tracking-tighter leading-tight">
						<a href="/" class="hover:underline">Code</a>
						&amp;
						<a href="/" class="hover:underline">Food</a>
						</h2>
						<span class="text-center text-sm italic">(learn &amp; live)</span>
					</div>

					<ul class="flex place-items-center">
						<li class="flex-auto text-center">
						<a href="#">contact</a>
						</li>
					</ul>
				</nav>
			</div>

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
			
			 
				<!-- <div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
                    <div class="mx-auto max-w-screen-md">
                        <h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
                            with <a href="https://codeandfood.io" class="text-primary">codeandfood</a>.</h1>
                        <p class="text-gray-600 text-xl font-medium mb-10">codeandfood is your go-to starting
                            point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out
                            of the box.</p>
                        <a href="https://github.com/jeffreyvr/codeandfood"
                            class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
                            on GitHub</a>
                    </div> -->
                <!-- </div>
			</div>  -->

			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'codeandfood_theme_content_start' ); ?>

		<main>
