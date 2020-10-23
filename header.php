<?php 
	//redux frameword theke ei data take active korar jonno header e global kora hoise jate shob page e use kora jay
	global $theme_option_data;
	// echo "<pre>";
	// print_r($theme_option_data['Menucolor']);
	// echo "</pre>";

?>
<!DOCTYPE html>
<html <?php language_attributes( ) ; ?> >
<head>
	<!-- <title>Coffee Break a Blog Category Flat Bootstarp responsive Website Template | Gallery :: w3layouts</title> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' )?>" />
	<link rel="shortcut icon" href="<?php echo $theme_option_data['favicon']['url'] ?>" type="image/x-icon">
	<?php wp_head(); ?>
	<style>
		.MYlogowid{
			width:<?php echo $theme_option_data['logowid']."px"?>;
		}
		.djMenu ul li a{
			color:<?php echo $theme_option_data['Menucolor']?>;
		}
		/*footer design dynamically*/
		.djFooter p{
			color:<?php echo $theme_option_data['ftrclr']?>;
		}
		.footer{
			background: <?php echo $theme_option_data['ftrbgc']?>;
		}
	</style>
</head>
<body <?php body_class();?>>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="<?php echo site_url() ?> "> <img class="MYlogowid" src="<?php echo $theme_option_data['headerlogo']['thumbnail'] ?>" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class="navigation djMenu">
					<span class="menu "></span> 
					<!-- <ul class="navig">
						<li><a href="index.html"  class="active">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul> -->
					<?php 

						wp_nav_menu( [

							'theme_locaction' => 'primary_menu',
							//default wordpress er menu te auto container class ache tai eta remove korte hobe niche function er maddhome
							'container'       => '',//null kore dilei class remove hoye jabe 
							// ul er vitore ei function ta dileo navbar thik moto kaj korto but bujhar jonno eivabe dewa hoise
							//ekhon amra ul er navig class ta add korbo eikhane
							'menu_class'      => 'navig',

						] );

					?>
				</div>
				<div class="header-right">
					<div class="search-bar">
						<form method="GET">
							<!-- //wordpress e default search er name er value thake s tai eikhane "s" dewa hoise name er moddhe -->
							<input type="text" value="Search" name="s" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="">
						</form>
					</div>
					<ul>
						 
						<?php if($theme_option_data['fb'] == true): ?>
							<li><a href="<?php echo esc_url($theme_option_data['fb'])?>"><span class="fb"> </span></a></li>
						<?php endif; ?>

						<?php if($theme_option_data['twi'] == true): ?>
							<li><a href="<?php echo esc_url($theme_option_data['twi'])?>"><span class="twit"> </span></a></li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
	<script>
		$("span.menu").click(function(){
			$(" ul.navig").slideToggle("slow" , function(){
			});
		});
	</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h1>Suspendisse potenti</h1>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->