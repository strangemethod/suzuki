<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>

		<div class="container">
	
			<h1 class="site-title"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>

			<nav class="main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-navigation' ) ); ?>
			</nav>

		</div>

	</header><!-- #masthead -->

	<div class="content">