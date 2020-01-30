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
<link rel="stylesheet" id="wp-bootstrap-starter-bootstrap-css-css" href="http://scandicsofa.devintle.pl/wp-content/themes/wp-bootstrap-starter/assets/owl/assets/owl.theme.default.css" type="text/css" media="all">
	 	<script>
	
	
	
	
	jQuery(document).ready(function(){


jQuery('.owl-carousel').owlCarousel({
    loop:true,
	items:1,
    margin:10,
    nav:true,

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
	
	
	
	
	<br>
	<br>
	
	
	
	
<div class="kafel-wrapper">
<div class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			<div id="kafel1">	
				<div class="container">
				<div class="row">
				<div class="col-lg-6 offset-lg-6">
				<div class="kafel1-text">
				<p class="kafel-tytul1">Twoje dzieci uwielbiają jeść śniadanie na sofie? My też :) #1</p>
				<p class="kafel-opis1">Sofy i fotele obite tkaniną FibeGuard pozwolą Ci zachować spokój ducha. Zagwarantuj sobie porządek w salonie każdego dnia.
				Nie martw się bałaganem, wybierz meble obite łatwymi do czyszczenia tkaninami i ciesz się beztroskim użytkowaniem.
				Z tkaninami łatwozmywalnymi FibreGuard nie musisz się martwić o plamy z soku, owoców czy czekolady na białej sofie.
				Trudne do zmycia plamy na meblach to przeszłość. Łatwe do czyszczenia tkaniny FibreGuard zmienią Twoje podejście do sprzątania.</p>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<div class="kafel-wrapper">
<div class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			<div id="kafel2">	
				<div class="container">
				<div class="row">
				<div class="col-lg-6">
				<div class="row">
				<div class="kafel2-text">
				<p class="kafel-tytul2">Masz dość zabraniania swojemu psiakowi wchodzenia na kanapę? #2</p>
				<p class="kafel-opis2">Mamy na to rozwiązanie. Wybierz tkaniny łatwozmywalne FibreGuard, które pozwolą Ci cieszyć się pięknym i nieskazitelnym wnętrzem każdego dnia.
				Koniec z męczącym praniem kanapy, czy koniecznością rozkładania na niej narzuty.
				Łatwe do czyszczenia materiały, które wykorzystujemy w naszych sofach z pewnością przypadną Twojemu pupilowi do gustu. Domyślamy się, że Tobie także.</p>
				</div>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="kafel-wrapper">
<div class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			<div id="kafel3">	
				<div class="container">
				<div class="row">
				<div class="col-lg-6 offset-lg-6">
				<div class="kafel3-text">
				<p class="kafel-tytul1">Wnętrza bez plam? To rozwiazanie również dla architektów. #3</p>
				<p class="kafel-opis1">Wysokiej jakości tkaniny łatwozmywalne są odpowiedzią na potrzeby Twoich klientów.Obicie mebli łatwymi do czyszczenia materiałami FibreGuard to połączenie względów praktycznych i estetycznych - w łatwy sposób dopasujesz kolor i wzór obicia do wnętrza.
				Minimalistyczny styl skandynawski czy kolorowa elegancja? Postaw na tkaniny łatwozmywalne FibreGuard i w prosty sposób wybierz sofę i fotele do swojego projektu.</p>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<div class="kafel-wrapper">
<div class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			<div id="kafel4">	
				<div class="container">
				<div class="row">
				<div class="col-lg-6">
				<div class="row">
				<div class="kafel4-text">
				<p class="kafel-tytul2">Twój biznes to mieszkania na wynajem?. #4</p>
				<p class="kafel-opis2">Wybierz tkaniny na lata, czyli brak zmartwień i dodatkowych wydatków. 
				Postaw na łatwe do czyszczenia tkaniny FibreGuard, dzięki którym szybko pozbędziesz się wszelkich zabrudzeń, bez konieczności wymiany na nową.</p>
				</div>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>



<?php
get_footer();
