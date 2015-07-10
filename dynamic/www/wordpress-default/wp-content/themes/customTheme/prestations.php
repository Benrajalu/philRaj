<?php
/**
  Template Name: Prestations
 * @package WordPress
 * @subpackage portfolio
 * @since portfolio 1.0
 */

get_header(); ?>

	<div class="row padding">
		<article id="intro" class="smaller">
			<div class="contents">
				<h1><?php the_field('title'); ?></h1>
				<p class="noPadding"><?php the_field('intro_copy'); ?></p>
			</div>
			<div class="bg" style="background:url('<?php the_field('intro_bg'); ?>') center center no-repeat; background-size:cover;"></div>
		</article>
	</div>

	<?php if(get_field('category1_title')) : ?>
		<div class="row table-large padding biColor">
			<div class="large-4 columns blueBG">
				<h2><?php the_field('category1_title'); ?></h2>
				<hr/>
			</div>
			<div class="large-8 columns greyBG wysiwyg">
				<article>
					<?php the_field('category1_content'); ?>
				</article>
			</div>
		</div>
	<?php endif ?>

	<?php if(get_field('category2_title')) : ?>
		<div class="row table-large padding biColor">
			<div class="large-4 columns blueBG">
				<h2><?php the_field('category2_title'); ?></h2>
				<hr/>
			</div>
			<div class="large-8 columns greyBG wysiwyg">
				<article>
					<?php the_field('category2_content'); ?>
				</article>
			</div>
		</div>
	<?php endif ?>

	<?php if(get_field('category3_title')) : ?>
		<div class="row table-large padding biColor">
			<div class="large-4 columns blueBG">
				<h2><?php the_field('category3_title'); ?></h2>
				<hr/>
			</div>
			<div class="large-8 columns greyBG wysiwyg">
				<article>
					<?php the_field('category3_content'); ?>
				</article>
			</div>
		</div>
	<?php endif ?>

<?php get_footer(); ?>