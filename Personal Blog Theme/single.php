<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Jeetendra_Kumar_Choudhary
 */

get_header(); ?>

	<div class="container">
		<div class="row" id="primary">
			<main class="col-sm-8" id="content">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-single', get_post_format() ); ?>

					<div class="row">

						<?php
							$args = array(
								'prev_text' => '&larr; %title',
								'next_text' => '%title &rarr;',
								'in_same_term' => 'false',
								'taxonomy'	=>	'category',
								'screen_reader_text'	=> 'Post navigation'
							);
						the_post_navigation ($args);
						?>
					</div>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</main> <!-- content -->
			<?php
			get_sidebar(); ?>
		</div> <!-- #primary -->
	</div> <!-- container -->
<?php
get_footer();
