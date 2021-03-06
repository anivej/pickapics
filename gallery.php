<?php /* Template Name: Gallery Page Template */  get_header(); ?>
	
<div class="inner_container">	
<div class="gallery">
<div class="gallery_inner">
	<!-- section -->
	<section class="inside_panel" role="main">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
			<?php #comments_template( '', true ); // Remove if you don't want comments ?>
			<br class="clear">
			<?php #edit_post_link(); ?>
		</article>
		<!-- /article -->
	<?php endwhile; ?>
	<?php else: ?>
		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->
	<?php endif; ?>
	</section>
	<!-- /section -->
</div>
</div>
</div>
<?php #get_sidebar(); ?>

<?php get_footer(); ?>