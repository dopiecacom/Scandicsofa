<?php
/**
* Template Name: Home
 */
get_header(); ?>
	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->
	<h2><?php the_field('testowy_tekst'); ?></h2>
<?php	the_field('testowy_tekst');?>
<link rel="stylesheet" id="wp-bootstrap-starter-bootstrap-css-css" href="http://scandicsofa.devintle.pl/wp-content/themes/wp-bootstrap-starter/assets/owl/assets/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-bootstrap-starter-bootstrap-css-css" href="http://scandicsofa.devintle.pl/wp-content/themes/wp-bootstrap-starter/assets/owl/assets/owl.theme.default.css" type="text/css" media="all">
	 	<script>
	
	
	
	
	jQuery(document).ready(function(){


jQuery('.owl-carousel').owlCarousel({
    loop:true,
	items:1,
    margin:10,
    nav:true

})

});

	</script>
	
	<div class="owl-carousel owl-theme">
		<div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
	
<div class="container">
<div class="row">
<div class="col-md-10 offset-md-1">
<div id="kafel1">

<div id="kafel1-text">
<p>Twoje dzieci uwielbiają jeść?</p>
<p>To bardzo dobrze, bo jedzenie jest niezbędne do prawidłowego rozrostu mięśni! TAK TRZYMAJ!</p>
</div>

</div>
</div>
</div>
</div>

<?php
get_footer();
