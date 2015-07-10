<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Custom Theme
 * @since Custom Theme 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row padding">
		<article id="intro" class="smaller white">
			<div class="contents">
				<h1><?php the_title(); ?></h1>
				<p><?php the_field('intro'); ?></p>
				<p class="data"><?php the_date(); ?> 
					<?php
					  $posttags = get_the_tags();
					  if ($posttags) {
					  	$i = 0;
					  	$len = count($posttags);
					    echo ' | Tags : ';
					    foreach($posttags as $tag) {
					      
					      if ($i == $len - 1) {
					        echo $tag->name . ''; 
				          }
				          else{
				          	echo $tag->name . ', '; 
				          }

				          $i++;
					    }
					  }
					?>
				</p>
			</div>
			<?php 
			$image = get_field('article_image');
			if( !empty($image) ): ?>
				<div class="bg" style="background:url(<?php echo $image['url']; ?>) center center no-repeat; background-size:cover;"></div>
			<?php endif; ?>
		</article>
	</div>

	<div class="row wysiwyg">
		
		<?php the_content( 'Lire la suite...' ); ?>

	</div>

</article><!-- #post-## -->
