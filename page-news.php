<?php
/**
 * Template Name: News Page
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<div id="content" class="site-content" role="main">
	<div class="row padded-row">
		<h1 class="col-md-12">News</h1>
	</div>
	<?php $query = new WP_Query( 'cat=2,3,4' ); ?>
	
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="row">
			<div class="date col-md-2">
				<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
				<small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>
			</div>
			<div class="post col-md-10">

			<!-- Display the Title as a link to the Post's permalink. -->
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

			<div class="entry">
			<?php the_content(); ?>
			</div>

			<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
			</div> <!-- closes the first div box -->
		</div>
	<?php endwhile; 
	wp_reset_postdata();
	else : ?>

	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	
	<?php endif; ?>

	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
