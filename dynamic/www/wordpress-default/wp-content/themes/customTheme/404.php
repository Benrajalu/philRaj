<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Custom Theme
 * @since Custom Theme 2.0
 */

get_header(); ?>

	<div class="row padding">
		<article id="intro">
			<div class="contents">
				<h1>404</h1>
				<p class="noPadding">Cette page n'existe pas... Cependant, ces articles peuvent vous intéresser.</p>
			</div>
		</article>
	</div>

	<div id="blog">
		<?php
		$args = array(
			'posts_per_page' => -1
		);
		$query = new WP_Query( $args ); ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php get_template_part( 'content', 'teaser' ); ?>
		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>
