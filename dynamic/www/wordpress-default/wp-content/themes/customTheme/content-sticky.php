<?php
/**
 * The template for displaying a sticky message
 *
 * @package WordPress
 * @subpackage Custom Content
 * @since Custom Content 1.0
 */
?>

<a href="<?php the_permalink(); ?>">
	<p><strong>Dernier article</strong></p>
	<h3><?php the_title(); ?></h3>
	<p><?php the_field('intro'); ?></p>
	<ul class="meta">
		<li><span class="fakeLink">Continuer à lire</span> - </li>
		<li><?php the_date(); ?> <?php if (has_tag( $tag, $post )) : ?>-<?php endif ?></li>
		<?php if (has_tag( $tag, $post )) : ?>
			<li>
				Tags : 
				<?php
				  $posttags = get_the_tags();
				  if ($posttags) {
				  	$i = 0;
				  	$len = count($posttags);
				    
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
			</li>
		<?php endif ?>
	</ul>
</a>
