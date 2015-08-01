<?php
/**
 * Template Name: About Page
 * 
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area ">
		<div id="content" class="site-content container" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="row row-padded">
					<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>
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
							<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'opengovfoundation' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		
							<footer class="entry-meta">
								<?php edit_post_link( __( 'Edit', 'opengovfoundation' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-meta -->
						</div><!-- .entry-content -->

					</article><!-- #post -->
					<div class="col-md-4">
						<div class="thumbnail">
							<img src="/wp-content/themes/opengovfoundation-theme/images/icon_football.png" alt="">
							<div class="caption">
								<h2>Get Involved</h2>
								<p>There's lots of ways to be involved with OpenGov, from helping work on a particular set of laws to attending hackathons and working on code and design. <a href="#">Let us know what you want to do.</a></p>
							</div>
						</div>
					</div>
				</div>
				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
		<div class="row padded-row invert">
			<div class="container">
				<h1>Team</h1>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row row-padded">
				<h1>Board Members</h1>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row padded-row invert">
			<div class="container">
				<h1>Advisory Board</h1>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Seamus Kraft</h2>
							<p>Executive Director, Co-Founder & Vice-Chairman of the Board</p>
							<a href="#">See details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>