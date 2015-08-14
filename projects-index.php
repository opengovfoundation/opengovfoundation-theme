<?php
/**
 * Template Name: Projects Index
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="container content-area projects">
		<div class="row padded-row">
			<h1 class="col-md-12">Projects</h1>
		</div>
		<div class="row">
		<?php $this_page_id=$wp_query->post->ID; ?>
		<?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page', 'order' => 'ASC')); while (have_posts()) { the_post(); ?>
			<div class="project">
				<div class="thumbnail">
					<?php the_post_thumbnail(); ?>
					<div class="caption">
						<h2><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>">See details</a>
					</div>
				</div>
			</div>
        <?php } ?>
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>