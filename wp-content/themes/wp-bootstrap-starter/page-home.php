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




<div class="container">
Nie martw się bałaganem, wybierz meble obite łatwymi do czyszczenia tkaninami i ciesz się beztroskim użytkowaniem.
<div id="kafel1-text">
<div class="row">
<div class="col-md-10 offset-md-1">
<div id="kafel1">
<p>Twoje dzieci uwielbiają jeść śniadanie na sofie? My też :) #1</p>
<p>Sofy i fotele obite tkaniną FibeGuard pozwolą Ci zachować spokój ducha. Zagwarantuj sobie porządek w salonie każdego dnia.
Z tkaninami łatwozmywalnymi FibreGuard nie musisz się martwić o plamy z soku, owoców czy czekolady na białej sofie.
Trudne do zmycia plamy na meblach to przeszłość. Łatwe do czyszczenia tkaniny FibreGuard zmienią Twoje podejście do sprzątania.</p>
</div>
</div>
</div>
</div>
</div>

<?php
	get_footer();
