<?php 

	get_header();

?>
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-tre">	
						<?php 
							while (have_posts()) {
								the_post();
						?>
							<div class="col-md-10 abt-left">
								<span class="mySingleImg"> <?php  the_post_thumbnail(); ?></span><!-- post image -->
								<h6> <?php the_field('add_sub_title'); ?> </h6>
								<h3> <?php the_title(); ?> </h3> <!-- dynamic post title -->
								<p><?php the_content() ?></p> <!-- dynamic content -->
								<label class="date_cat"><?php the_time( 'd-M-Y' ) ?> || Category : <?php the_category(); ?></label>
								<div class="Blogcomment">
									<?php
										comments_template();
									?>
								</div>
							</div>
						<?php }?>
					</div>	
				</div>
				<?php 
					get_sidebar();
				?>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<?php 

		get_footer();

	?>