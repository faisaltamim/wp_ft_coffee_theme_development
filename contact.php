<?php 
	/*
	//link contact page like this

	Template Name: Contact Page


*/

	get_header();

	?>
	<!----start-contact---->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>CONTACT</h3>
			</div>
			<div class="contact-bottom">
				<?php echo $theme_option_data['map'];?>
				<div class="contact-text">
					<div class="col-md-4 contact-left">
						<h4>Sed dapibus nunc eu metus commodo, et dictum justo fermentum.</h4>
						<p>Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
						<div class="address">
							<h4>Address</h4>
							<p>The company name, 
								<span>Lorem ipsum dolor,</span>
							Glasglow Dr 40 Fe 72.</p>
						</div>
					</div>	
					<div class="col-md-8 ">
						<div class="dynamicForm">
							<!-- form dynamic korte hoy eivabe -->
							<?php 
							while(have_posts()){
								the_post();
								the_content();
							}
							?>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!----end-contact---->
	<!--footer-starts-->
	<?php get_footer();?>