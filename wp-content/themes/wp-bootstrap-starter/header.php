<?php
	/**
		* The header for our theme
		*
		* This is the template that displays all of the <head> section and everything up until <div id="content">
		*
		* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		*
		* @package WP_Bootstrap_Starter
	*/
	
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		
		
		
		<?php wp_head(); ?>
		
		<script src="http://scandicsofa.devintle.pl/wp-content/themes/wp-bootstrap-starter/assets/owl/owl.carousel.js" type="text/javascript"></script>
		<link rel="stylesheet" id="wp-bootstrap-starter-bootstrap-css-css" href="http://scandicsofa.devintle.pl/wp-content/themes/wp-bootstrap-starter/assets/owl/assets/owl.carousel.css" type="text/css" media="all">
		<link rel="stylesheet" id="wp-bootstrap-starter-bootstrap-css-css" href="http://scandicsofa.devintle.pl/wp-content/themes/wp-bootstrap-starter/assets/owl/assets/owl.theme.default.css" type="text/css" media="all">
		
		
		
	</head>
	
	<body <?php body_class(); ?>>
		
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
			<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
				<div class="container">
					<nav class="navbar navbar-expand-xl p-0">
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
								<div class ="logo mobile">
							<img src="http://scandicsofa.devintle.pl/wp-content/uploads/img/scandicsofalogo.png"/>
						</div>
						<?php
							wp_nav_menu(array(
							'theme_location'    => 'primary',
							'container'       => 'div',
							'container_id'    => 'main-nav',
							'container_class' => 'collapse navbar-collapse justify-content-end',
							'menu_id'         => false,
							'menu_class'      => 'navbar-nav',
							'depth'           => 3,
							'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
							'walker'          => new wp_bootstrap_navwalker()
							));
						?>
					
					</nav>
				</div>
			</header><!-- #masthead -->
			<?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
			<div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
				<div class="container">
					<h1>
						<?php
							if(get_theme_mod( 'header_banner_title_setting' )){
								echo get_theme_mod( 'header_banner_title_setting' );
								}else{
								echo 'WordPress + Bootstrap';
							}
						?>
					</h1>
					<p>
						<?php
							if(get_theme_mod( 'header_banner_tagline_setting' )){
								echo get_theme_mod( 'header_banner_tagline_setting' );
								}else{
								echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
							}
						?>
					</p>
					<a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
				</div>
			</div>
			<?php endif; ?>
			
			<script>
				
				
				
				
				jQuery(document).ready(function(){
				
				
				jQuery('.owl-carousel').owlCarousel({
				loop:true,
				items:1,
				margin:10,
				
				
				})
				
				});
				
			</script>
			
			
			
			<div class="baner-wrapper-outter">
				
				<div class="baner-wrapper">
					<div class="container">
						<div class ="logo">
							<img src="http://scandicsofa.devintle.pl/wp-content/uploads/img/scandicsofalogo.png"/>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xl-8 offset-xl-4 col-lg-12">
								
								<div class = "baner-modal">
									<div class="container">
										
										<div class="row">
											
											
											<div class="col-md-11 offset-md-1">
												<h1>Beztroska, komfort </br> i... meble bez plam</h1>
												<p>Czytaj dalej i ciesz się czystym wnętrzem</p>
												
											<div class ="button-read">
														<a href="#kafel1" class="page-scroller">CZYTAJ WIECEJ</a>
												</div>
											</div>
											
											
										</div>
									</div>
									
									
									
								</div>
								
								
								
								
								
								<div class="owl-carousel owl-theme">
									
									<div class="item"><img src="<?php the_field('testowy_tekst');?>"/></div>
									
									
									<div class="item"><img src="<?php the_field('testowy_tekst');?>"/></div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="content" class="site-content">
			<?php endif; ?>			