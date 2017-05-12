<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page">
	
	<header id="sticky-nav">

		<div id="nav-overlay"></div>

		<div class="content">
	
			<h1 class="site-title"><a data-href="hero"><?php bloginfo( 'name' ); ?></a></h1>
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul>
					<li><a href="/see-your-photos">See Your Photos</a></li>
				</ul>
			</nav><!-- #site-navigation -->
		
			<span id="navicon">&#9776;</span>

		</div>

	</header><!-- #masthead -->