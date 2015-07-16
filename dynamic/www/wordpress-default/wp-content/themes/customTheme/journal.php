<?php
/**
  Template Name: Journal
 * @package WordPress
 * @subpackage portfolio
 * @since portfolio 1.0
 */

get_header(); ?>

	<div class="row padding">
		<article id="intro" class="smaller white">
			<div class="contents">
				<h1><?php the_field('title'); ?></h1>
				<p class="noPadding"><?php the_field('intro_copy'); ?></p>
			</div>
			<div class="bg" style="background:url('<?php the_field('intro_bg'); ?>') center center no-repeat; background-size:cover;"></div>
		</article>
	</div>

	<div id="blog">
		<?php
		$args = array(
			'posts_per_page' => -1,
			'category_name'  => 'journal', 
			'category__not_in' => 3
		);
		$query = new WP_Query( $args ); ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php get_template_part( 'content', 'teaser' ); ?>
		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>