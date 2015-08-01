<?php
/**
 * Template Name: Home Page
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

				<article id="post-<?php the_ID(); ?>" <?php post_class('row padded-row'); ?>>
					<header class="entry-header col-md-4">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content col-md-4">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'opengovfoundation' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	
						<footer class="entry-meta">
							<?php edit_post_link( __( 'Edit', 'opengovfoundation' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
					</div><!-- .entry-content -->

				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
		<div class="row padded-row invert">
			<div class="container">
				<h1>Projects</h1>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_flf.png" alt="">
						<div class="caption">
							<h2>Free Law Founders</h2>
							<p>A nation-wide, collaborative effort open to all people who want to improve how laws and legislation are produced and presented to citizens of American states and cities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_madison.png" alt="">
						<div class="caption">
							<h2>Madison Project</h2>
							<p>A nation-wide, collaborative effort open to all people who want to improve how laws and legislation are produced and presented to citizens of American states and cities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_decoded.png" alt="">
						<div class="caption">
							<h2>America Decoded</h2>
							<p>A nation-wide, collaborative effort open to all people who want to improve how laws and legislation are produced and presented to citizens of American states and cities.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row padded-row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_football.png" alt="">
						<div class="caption">
							<h2>Get Involved</h2>
							<p>There's lots of ways to be involved with OpenGov, from helping work on a particular set of laws to attending hackathons and working on code and design. <a href="#">Let us know what you want to do.</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="thumbnail">
						<div class="row">
							<div class="col-md-4">
								<div class="caption">
									<h2>Stay Informed</h2>
								</div>
							</div>
							<div class="col-md-8">
								<form>
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="Email Address">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="first" placeholder="First Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="last" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="zip" placeholder="Zip Code">
									</div>
									<label class="radio-inline">
									  <input type="radio" name="preferred-format" id="html" value="HTML"> HTML
									</label>
									<label class="radio-inline">
									  <input type="radio" name="preferred-format" id="text" value="Text"> Text
									</label>
									<button type="submit" class="btn btn-default">Subscribe to List</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>