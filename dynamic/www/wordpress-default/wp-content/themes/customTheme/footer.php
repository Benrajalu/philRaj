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
		    <h3>Contactez-moi</h3>
		    <hr />
		    <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
		    <a href="mailto:philippe.rajalu@orange.fr" class="button">Envoyez-moi un mail</a>
		    <p><strong>Telephone : 06 78 11 38 87</strong></p>
		</div>

			<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/vendor/jquery.magnific-popup.min.js"></script>
		    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>

	</div><!-- .site -->
		
		

</body>
</html>
