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
	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$query = new WP_Query( 'cat=2,3,4,7,18,19&paged=' . $paged );
	?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="row row-padded">
			<div class="date col-md-2">
				<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
				<p><?php the_time( 'F jS, Y' ); ?></p>
			</div>
			<div class="post col-md-10">
				<?php
					$link = get_post_meta($post->ID, '_custom_news_source_url', true);
					if(!$link) {
						$link = get_the_permalink();
					}
				?>

				<!-- Display the Title as a link to the Post's permalink. -->
				<h1><a href="<?php echo $link; ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

			</div> <!-- closes the first div box -->
		</div>
		<hr>
	<?php endwhile;
		<?php next_posts_link('&laquo; Older Entries') ?>
		<?php previous_posts_link('Newer Entries &raquo;') ?>
	wp_reset_postdata();
	else : ?>

	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	
	<?php endif; ?>

	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
