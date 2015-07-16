<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Custom Theme
 * @since Custom Theme 2.0
 */
?>
		
		</div> <!-- / #contents -->

		<footer id="footer" class="row">
		    <a href="https://www.facebook.com/philipperajaluconseil?fref=ts" target="_blank" class="button"><i class="fa fa-facebook"></i> <span>Rejoignez-moi sur Facebook</span></a>
		</footer>

		<?php wp_footer(); ?>

		<div id="contact" class="mfp-hide popUp">
		    <h3>Contact</h3>
		    <hr />
		    <p>Vous voulez organiser le fonctionnement de votre conseil d'administration, structurer le fonctionnement de votre comité de direction, recruter un collaborateur, former vos équipes ? Laissez-moi vos coordonnées par mail ainsi que l'objet de votre demande, je vous téléphone rapidement.</p>
		    <a href="mailto:philippe@rajaluconseil.fr" class="button">Envoyez-moi un mail</a>
		</div>

			<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/vendor/jquery.magnific-popup.min.js"></script>
		    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>

	</div><!-- .site -->
		
		

</body>
</html>
