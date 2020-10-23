<?php 
/*
	//link about page like this

	Template Name: Gallery Page


*/
get_header();


?>
	<!--gallery-starts-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h3>OUR GALLERY</h3>
			</div>
			<section id="galleryLiImg">
				<ul id="da-thumbs" class="da-thumbs">
					<?php 
					//wordpress e custom post type use korte hole wp_query er maddhome custom post type ke introduce koriye dite hoy
						$galleryQuery = new WP_Query([

							'post_type' => 'my_gallery',//custom post type ui or cpt ui plugin theke ei slug name ta newa hoise
							// 'posts_per_page'=>2, //ei array er name key posts_per_page er maddhome limited post show korano jabe

						]); 

					while($galleryQuery -> have_posts()) :
					$galleryQuery -> the_post(); ?>

					<li>
						<!-- popup image show korar jonno a er vitore href er moddhe dynamci image link dite hobe jemon php tag er vitore ei code ta  "echo get_the_post_thumbnail_url()" -->
						<!-- & popup image e onno image show korate hole custom field er theke onno image use korte hobe -->
						<a href='<?php 
							// custom field er maddhome dynamic kora hoise vai 
							the_field('popup_image');

						?>' rel="title" class="b-link-stripe b-animate-go  thickbox">
							<?php the_post_thumbnail() ?>
							<div>
								<h5><?php echo the_title(); ?></h5>
								<span><?php the_content() ?></span>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
					<div class="clearfix"> </div>
				</ul>
			</section>

        </div>
	</div>
	<!--gallery-end-->
<?php 
	get_footer();
?>