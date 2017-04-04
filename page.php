<?php get_header(); ?>
<section class="main">
	<div class="container-fluid">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // cycle start ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // post container with id and classes ?>
				<h1><?php the_title(); // page title ?></h1>
				<?php the_content(); // page content ?>
			</article>
		<?php endwhile; // cycle end ?>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>