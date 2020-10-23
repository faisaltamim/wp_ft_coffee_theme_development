<?php 

get_header();

?>
<!--about-starts-->
<div class="about">
	<div class="container">
		<div class="about-main">
			<div class="col-md-8 about-left">
				<div class="about-tre">	
					<h4>You Search For : <?php echo get_search_query();?></h4>
					<?php

					if (!have_posts()) {
						echo "Search Term Not Found";
					}else{

						while (have_posts()):
							the_post();
							?>
							<div class="col-md-6 abt-left">
								<a href="<?php the_permalink() ?>" class="myPostImg"><?php  the_post_thumbnail(); ?></a><!-- post image -->
								<h6> <?php the_field('add_sub_title'); ?> </h6>
								<h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </h3> <!-- dynamic post title -->
								<p><?php echo wp_trim_words( get_the_content(),30,"..........." ) ?> <a href="<?php the_permalink() ?>" class="text-capitalize">read more</a> </p> <!-- dynamic content -->
								<label><?php the_time( 'd-M-Y' ) ?></label>
							</div>

						<?php endwhile; } ; ?>
					
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