<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AboveAll
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id = "footer-top">
			<div id = "center-info">
				<div class="site-info">
					<div id = "footer-logo">
						<img src = "<?php echo get_theme_file_uri( 'images/aa-logo-pink-240.png' )?>" alt = "Above All Insulation"/>
						<h1>Above All Insulation</h1>
					</div>
					<div id = "footer-cta">
						<span><a href="">128 North Champlain St</a> <b>|</b> </span>
						<span><a href="">Burlington VT</a></span>
						<br />
						<span><a href=""><b>P:</b> (802) 318-5575</a> <b>|</b> </span>
						<span><a href=""><b>E:</b> max.kinghorn@gmail.com</a></span>
					</div>
				</div><!-- .site-info -->
				<div id = "center-content">

				</div>
			</div>
		</div>
		<div id = "footer-bottom">
			<div id  = "center-info">
				<span>
					© 2019 ABOVE ALL INSULATION
				</span>
				<span>
					Website By John M Kinghorn
				</span>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
