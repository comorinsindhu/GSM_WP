<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Gsm_Theme
 * @since Gsm Theme 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->
<footer class="site-footer">
	<div class="container footercontainer container-70 reset-padding">
		<div class="footer-quotes">
			<h2>Nos formations sont accessibles aux personnes en situation de handicap. Si vous avez des besoins spécifiques, nhésitez pas à en informer notre référent handicap : Clément Berger de Nomazy sur ladresse relation-candidat@gsmmaster.fr</h2>
		</div>
		<div class="row reset-margin">
			<div class="col-sm-12 col-md-4 footer-widget reset-padding">
				<div class="row reset-margin">
					<div class="footerpanelSocialicons d-none d-md-block">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
					
				</div>
					<div class="footerpanelAboutContent">
						<?php dynamic_sidebar( 'sidebar-1' ); ?> 
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 footer-widget reset-padding">
				<div>
					<?php dynamic_sidebar( 'sidebar-2' ); ?> 
					
					
				</div>
			</div>
			<div class="col-sm-12 col-md-4 footer-widget reset-padding">
				<div>
					<?php dynamic_sidebar( 'sidebar-3' ); ?> 
					
					
				</div>
			</div>
		</div>
	</div>
</footer>

</body>

</html>