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
