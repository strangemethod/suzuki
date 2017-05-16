<?php 
/* 
 * Hamburger Menu
 * Collapse menu on mobile
 * @todo include JS to expand collapsed menu
 */
?>

	<nav class="main-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-navigation' ) ); ?>
	</nav><!-- #site-navigation -->

	<span id="hamburger-icon">&#9776;</span>