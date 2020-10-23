<?php
/*
	//link about page like this

	Template Name: About Page


*/
	get_header();

?>
	<!--team-starts-->
	<div class="team">
		<div class="container">
		<div class="team-top heading">
			<h3>OUR TEAM</h3>
		</div>
			<div class="team-bottom">
				<?php 
				//wordpress e custom post type use korte hole wp_query er maddhome custom post type ke introduce koriye dite hoy
				$teamQuery = new WP_Query([

					'post_type'    => 'team_mebmer',//custom post type ui or cpt ui plugin theke ei slug name ta newa hoise
					// 'posts_per_page'=>2, //ei array er name key posts_per_page er maddhome limited post show korano jabe

				]);

				//$team query object er moddhe function nite hobe custom post type e
				while($teamQuery -> have_posts()) :
					$teamQuery -> the_post(); ?>

					<div class="col-md-3 team-left TeamMember">
						<?php the_post_thumbnail() ?>
						<h4><?php echo the_title(); ?></h4>
						<p><?php the_content() ?></p></p>
					</div>

				<?php endwhile; ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--team-end-->
<?php

	get_footer();

?>