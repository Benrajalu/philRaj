<?php
/**
  Template Name: A Propos
 * @package WordPress
 * @subpackage portfolio
 * @since portfolio 1.0
 */

get_header(); ?>

	<div class="row padding">
		<article id="intro" class="smaller">
			<div class="contents">
				<h1><?php the_field('title'); ?></h1>
				<p><?php the_field('intro_copy'); ?></p>
				<a class="button" target="_blank" href="<?php the_field('intro_cv'); ?>">Consultez mon CV complet</a>
			</div>
			<div class="bg" style="background:url('<?php the_field('intro_bg'); ?>') center center no-repeat; background-size:cover;"></div>
		</article>

		<div class="row" id="references">
			<h3>Références</h3>
			<hr />
			<h4><?php the_field('ref_copy'); ?></h4>
			<div id="logoList">
				<?php the_field('ref_logos'); ?>
			</div>
		</div>

		<div class="row table-large padding biColor">
			<div class="large-6 columns blueBG">
				<h2>Études de cas</h2>
				<hr/>
			</div>
			<div class="large-6 columns greyBG">
				<article>
					<p><?php the_field('case_copy'); ?></p>
				</article>
			</div>
		</div>

		<div id="blog">
			<?php
			$args = array(
				'posts_per_page' => -1,
				'category_name'  => 'casestudies',
				'category__not_in' => 2
			);
			$query = new WP_Query( $args ); ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php get_template_part( 'content', 'teaser' ); ?>
			<?php endwhile; ?>
		</div>
	</div>

<?php get_footer(); ?>