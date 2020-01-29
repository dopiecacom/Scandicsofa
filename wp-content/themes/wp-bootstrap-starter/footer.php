<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container">
			<div class="row">
			<div class="col-lg-12">
			<img src="wp-content/themes/wp-bootstrap-starter/img/scandicsofalogo.png" alt="ScandicSofa" id="footer-logo">
			</div>
			</div>
			
			<div class="row">
			<div class="col-lg-4">
			<div id="footer-leftcol">
			<p>ul. Akacjowa 1, 62-025</p>
			<p>Kostrzyn Wielkopolski</p>
			<p>Tel: +48 22 113 48 00</p>
			<p>Email: kontakt@scandicsofa.com</p>
			<p><a target="_blank" href="https://www.facebook.com/Scandicsofa-983915751742075/">Facebook</a></p>
			<p><a target="_blank" href="https://pl.pinterest.com/scandicsofa0372/?autologin=true">Pinterest</a></p>
			<p><a target="_blank" href="https://www.instagram.com/scandicsofa/">Instagram</a></p>
			<p><a target="_blank" href="https://www.youtube.com/channel/UCyqN6J0BsONL2PTvJsHH0VA">Youtube</a></p>
			</div>
			</div>
			
			<div class="col-lg-8">
			<div id="footer-rightcol">
			<p>Dlaczego zdecydowaliśmy się na meble skandynawskie?</p>
			<p>Bo już u podstaw tego stylu leży przywiązanie do wysokiej jakości i trwałości produktów a design skandynawski wspaniale dopasowuje się do niemal każdej aranżacji wnętrz.</p>
			<p>W ScandicSofa robimy sofy, fotele i łóżka z myślą o tobie - chcemy zapewnić ci wygodę, funkcjonalność i piękne wnętrza. </p>
			</div>
			</div>
			</div>
			
			<div class="row">
			<div class="col-lg-12">
			<p id="footer-low">Copyright &copy; by <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>  Poland Sp. z o. o. <?php echo date('Y'); ?>. All rights reserved. Projekt i wdrożenie INTLE </p>
            </div><!-- close .site-info -->
		  </div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>