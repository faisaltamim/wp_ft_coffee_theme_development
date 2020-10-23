<?php 
	//redux frameword theke ei data take active korar jonno header e global kora hoise jate shob page e use kora jay
	global $theme_option_data;
	// echo "<pre>";
	// print_r($theme_option_data['Menucolor']);
	// echo "</pre>";

?>

<!--slide-starts-->
	<div class="slide">
		<div class="container">
			<div class="fle-xsel">
				<ul id="flexiselDemo3">
					<?php 
					$sliderQuery = new WP_Query([

						'post_type' => 'my_slider',

					]);
					while($sliderQuery->have_posts()):
						$sliderQuery->the_post();
					?>
					<li>
					<a href="#">
						<div class="banner-1">
							<!-- <img src="images/s-1.jpg" class="img-responsive" alt=""> -->
							<?php the_post_thumbnail();?>
						</div>
					</a>
				</li>
				<?php endwhile;?>
				</ul>


				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text djFooter">
				<p><?php echo $theme_option_data['ftrtxt']?></p>
			</div>
		</div>
	</div>
	<!--footer-end-->

	<?php wp_footer(); ?>

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	
</body>
</html>