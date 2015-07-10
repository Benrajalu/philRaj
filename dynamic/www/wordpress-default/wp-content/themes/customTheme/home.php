<?php
/**
  Template Name: Homepage
 * @package WordPress
 * @subpackage portfolio
 * @since portfolio 1.0
 */

get_header(); ?>

	<div class="row padding">
		<article id="intro">
			<div class="contents">
				<h1><?php the_field('title'); ?></h1>
				<p><?php the_field('intro_copy'); ?></p>
				<a class="button popTrigger" href="#contact">Contactez-moi</a>
			</div>
			<div class="bg" style="background:url('<?php the_field('intro_bg'); ?>') center center no-repeat; background-size:cover;"></div>
		</article>
	</div>
	
	<div class="row table-large">
		<div class="columns large-6">
			<article class="tableBlock">
				<img src="<?php the_field('profile_pic'); ?>" alt="" />
				<div class="contents">
					<h2><?php the_field('profile_title'); ?></h2>
					<hr/>
					<p><?php the_field('profile_desc'); ?></p>
					<a class="button" href="index.php/a-propos">A propos</a>
				</div>
			</article>
		</div>

		<div class="columns large-6">
			<article class="tableBlock greyBG">
				<img src="<?php the_field('presta_pic'); ?>" alt="" />
				<div class="contents">
					<h2><?php the_field('presta_title'); ?></h2>
					<hr/>
					<p><?php the_field('presta_desc'); ?></p>
					<a class="button" href="index.php/prestations">Prestations</a>
				</div>
			</article>
		</div>
	</div>

	<div class="row table-large padding" id="blogTeaser">
		<div class="large-6 columns blueBG">
			<h2>Le journal du consultant</h2>
			<hr/>
			<p><?php the_field('journal_intro'); ?></p>
			<a class="button" href="index.php/journal">Tous les articles</a>
		</div>
		<div class="large-6 columns greyBG">
			<article class="teaser">
				<?php
				$args = array(
					'posts_per_page' => 1,
					'category_name'  => 'journal'
				);
				$query = new WP_Query( $args ); ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php get_template_part( 'content', 'sticky' ); ?>
				<?php endwhile; ?>
			</article>
		</div>
	</div>

<?php get_footer(); ?>