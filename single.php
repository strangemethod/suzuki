<?php get_header(); ?>

	<div class="container">

		<h1>Single Post</h1>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content();?>

		<?php endwhile; ?>
	
	</div>
	
<?php get_footer(); ?>
