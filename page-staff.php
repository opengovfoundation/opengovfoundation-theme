<?php
/**
 * Template Name: Staff Page
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

						<!-- Get all pages beneath this one -->
						<?php $query = new WP_Query( array(
							'post_parent' => $post->ID,
							'post_type' => 'page'
						) );?>

						<?php /* Check to see if we have results */ ?>
						<?php if ( $query->have_posts() ) : ?>
							<section class="staff-list">
								<?php while ( $query->have_posts() ) : ?>
									<?php $query->the_post(); ?>

									<div class="person">
										<h2><?php print get_the_title() ?></h2>
										<h3><?php print get_post_meta($post->ID, 'position', true); ?></h3>
									</div>
								<?php endwhile; ?>
							</section>
							<?php /* Rewind our query to the beginning */ ?>
							<?php $query->rewind_posts() ?>

							<!-- Details about each person for popup -->
							<section class="staff-details" style="display: none">
								<?php while ( $query->have_posts() ) : ?>
									<?php $query->the_post(); ?>

									<article class="person">
										<?php if( has_post_thumbnail() ) : ?>
										    <!-- show a 200x200px thumbnail -->
											<?php print the_post_thumbnail( array(200,200) ); ?>
										<?php endif; ?>
										<h2><?php print the_title() ?></h2>
										<h3><?php print get_post_meta($post->ID, 'position', true); ?></h3>
										<section class="bio">
											<?php print the_content(); ?>
										</section>
									</article>
								<?php endwhile; ?>
							</section>

						<?php else: ?>
							No staff found.

						<?php endif; ?>

						<?php wp_reset_postdata(); ?>

					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
