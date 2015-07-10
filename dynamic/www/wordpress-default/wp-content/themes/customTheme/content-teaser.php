<?php
/**
 * The template for displaying a sticky message
 *
 * @package WordPress
 * @subpackage Custom Content
 * @since Custom Content 1.0
 */
?>


<article class="article teaser">
	<a href="<?php the_permalink(); ?>">
		<?php 
			$field = get_field('article_image');
			$imageID = $field['id'];
			$image = wp_get_attachment_image_src($imageID, 'articleteaser'); 
		?>
		<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
		
		<p class="data"><?php the_date(); ?> 
			<?php
			  $posttags = get_the_tags();
			  if ($posttags) {
			  	$i = 0;
			  	$len = count($posttags);

			  	echo ' | ';
			    
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
		<h3><?php the_title(); ?></h3>
		<p><?php the_field('intro'); ?></p>
		<span class="button">Lire la suite</span>
	</a>
</article>
