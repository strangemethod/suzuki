<?php get_header(); ?>
	
	<div style="margin-top: 200px"></div>
	<h1>Content Page</h1>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content();?>

	<?php endwhile; ?>
	
<?php get_footer(); ?>