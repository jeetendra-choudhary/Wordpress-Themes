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
			<hr class="title-rule">
		<?php

		if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta small text-muted">
					<i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time('l, F jS, Y') ?>at 
					<?php the_time() ?> by <i class="fa fa-user"></i> <?php the_author() ?>  <i class="fa fa-comments-o" aria-hidden="true"></i>
  						<?php comments_number( 'no responses', 'one response', '% responses' ); ?>. <?php edit_post_link('  Edit',' <i class="fa fa-pencil">','</i>'); ?>
				</div>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="post-thumb">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="entry-content">
		<?php

			the_excerpt();
			
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
