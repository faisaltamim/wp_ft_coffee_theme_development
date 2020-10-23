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
							
						<?php } ?>
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