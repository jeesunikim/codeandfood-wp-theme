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

<?php do_action( 'codeandfood_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'codeandfood_header' ); ?>

	<header>
		<div class="container mx-auto">
			<nav class="grid grid-cols-3 max-w-screen-xl mx-auto py-10 px-2">
				<ul class="flex place-items-center">
					<li class="flex-auto text-center">
					<a href="#" class="text-base">about</a>
					</li>
				</ul>

				<div class="flex flex-col place-items-center justify-items-center">
					<h2 class="text-center text-3xl md:text-4xl font-bold tracking-tight md:tracking-tighter leading-tight">
					<a href="/code" class="hover:underline">Code</a>
					<a href="/" class="hover:underline">&amp;</a>
					<a href="/food" class="hover:underline">Food</a>
					</h2>
					<span class="text-center text-sm italic">(learn &amp; live)</span>
				</div>

				<ul class="flex place-items-center">
					<li class="flex-auto text-center">
					<a href="#">search</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<?php if ( is_front_page() ) : ?>
		<main class="container px-4 mx-auto grid gap-8 grid-cols-6 md:px-20">
	<?php elseif (is_page( array( 'code', 'food' ) )): ?>
		<main class="container px-4 mx-auto grid gap-8 grid-cols-3 md:px-20">
	<?php else : ?>
		<main class="container px-4 mx-auto md:px-20">
	<?php endif; ?>