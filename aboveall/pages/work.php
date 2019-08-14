<?php /* Template Name: Our Work */ ?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
        <main id="main" class="site-main">
        <?php echo do_shortcode('[mpsl demo-slider-1]') ?>
        <?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
		?>
        </main>
	</div><!-- #primary -->

<?php
get_footer();
