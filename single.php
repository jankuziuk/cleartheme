<?php get_header(); ?>
<section class="main">
	<div class="container-fluid">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // cycle start ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // post container with id and classes ?>
				<h1><?php the_title(); // post title ?></h1>
				<div class="meta">
					<p>Posted: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p> <?php // created date and time ?>
					<p>Categories: <?php the_category(',') ?></p> <?php // links to categories ?>
					<?php the_tags('<p>Tags: ', ',', '</p>'); // links to tags ?>
				</div>
				<?php the_content(); // post content ?>
			</article>
		<?php endwhile; // cycle end ?>
		<?php previous_post_link('%link', '<- Previous post: %title', TRUE); // previous post link ?> 
		<?php next_post_link('%link', 'Next post: %title ->', TRUE); // next post link ?> 
		<?php if (comments_open() || get_comments_number()) comments_template('', true); ?>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>