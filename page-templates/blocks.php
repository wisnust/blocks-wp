<?php
/**
 * Template Name: Blocks Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blocks_wp
 */

global $post;
get_header();

?>

	<main id="main-blocks" class="blocks-page">

		<?php 
		while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			wp_reset_postdata();
		?>

	</main>

<?php get_footer(); ?>

