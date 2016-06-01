<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Jeetendra_Kumar_Choudhary
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}
			 ?>
		<div class="post-thumb img-responsive">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta small text-muted">
					This entry was posted on 
					<i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time('l, F jS, Y') ?>at 
					<?php the_time() ?> by <i class="fa fa-user"></i> <?php the_author() ?> and is filed 
					under <i class="fa fa-folder"></i> <?php the_category(', ') ?> &amp; <i class="fa fa-tags"></i> <?php the_tags('',', ',''); ?> tags. This post currently has <i class="fa fa-comments-o" aria-hidden="true"></i>
  						<?php comments_number( 'no responses', 'one response', '% responses' ); ?>. You 
					can follow any responses to this entry 
					through the <i class="fa fa-rss"></i> <?php comments_rss_link('RSS 2.0'); ?> 
					feed. <?php edit_post_link('  Edit',' <i class="fa fa-pencil">','</i>'); ?>
				</div>
		<?php endif; ?>
		
	</header><!-- .entry-header -->
	
	
	<div class="entry-content">
		<?php

			the_content();
			
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
