<?php get_header(); ?>
<main class="main-page">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>