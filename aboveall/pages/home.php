<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
        <div id = "masthead">
			<div id = "masthead-image" style="background-image:url('<?php header_image(); ?>')">
            </div>
            <div id = "masthead-mask">
			</div>
			<div id = "masthead-content">
				<div class = "center-content">
					<div id = "masthead-message">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
					</div>
					<div id = "masthead-links">
						<a>
							<span>
								See Our Work <i class="fas fa-chevron-right"></i>
							</span>
						</a>
						<a>
							<span>
								About Us <i class="fas fa-chevron-right"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
        </div>
		<main id="main" class="site-main">
			<div id = "target-our-work" class = "section-title">
				<div class = "center-info">
					<h1>
						Our Work
					</h1>
					<div class = "">
						<?php
							$workpost = get_post(8);
							$content = apply_filters('the_content', $workpost->post_content);
							echo $content;
						?>
					</div>
				</div>
			</div>
			<div id = "target-about-us" class = "section-title">
				<?php
					if(has_post_thumbnail(14));
				?>
				<?php echo '<div id = "about-us-background-image" style="background:url('.wp_get_attachment_image_src(get_post_thumbnail_id(14),'full')[0].');background-size: 100% auto;"></div><div id = "about-us-background-mask"></div>' ?>
				<div class = "center-info">
					<h1>
						About Us
					</h1>
					<div class = "">
						<div id = "about-us-content">
							<?php
								$aboutpost = get_post(14);
								$content = apply_filters('the_content', $aboutpost->post_content);
								echo $content;
							?>
						</div>
					</div>
				</div>
			</div>
			<div id = "" class = "section-title">
				<div class = "center-info">
					<h1>
						Contact Us
					</h1>
					<div class = "">
						<div id = "contact-us-content">
							<?php
								$aboutpost = get_post(28);
								$content = apply_filters('the_content', $aboutpost->post_content);
								echo $content;
							?>
						</div>
					</div>
				</div>
			</div>
			<div id = "center-info">

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div id = "contact-popup">
		<div id = "popup-mask">
			
		</div>
		<div id = "popup-frame">
			<div id = "popup-title">
				<span>
					Contact Us
				</span>
				<button>
					<i class="fas fa-times"></i>
				</button>
			</div>
			<div id = "popup-content">

			</div>
		</div>
	</div>
<?php
get_footer();
