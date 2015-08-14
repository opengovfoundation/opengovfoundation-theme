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

						<h1><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content col-md-4">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'opengovfoundation' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	
						<footer class="entry-meta">
							<?php edit_post_link( __( 'Edit', 'opengovfoundation' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
					</div><!-- .entry-content -->
					<div class="col-md-4">
						<div class="thumbnail">
							<img src="/wp-content/themes/opengovfoundation-theme/images/icon_newspaper.png" alt="">
							<div class="caption">
								<h2>New on the&nbsp;Blog</h2>
								<?php
									$recent_posts = wp_get_recent_posts(array( 'numberposts' => '1', 'post_status' => 'publish'));
									foreach( $recent_posts as $recent ){
										echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> ';
									}
								?>
							</div>
						</div>
					</div>
				</article><!-- #post -->

			<?php endwhile; ?>

		</div><!-- #content -->
		<div class="padded-row invert">
			<div class="container projects">
				<h1 class="col-md-12">Projects</h1>
				<?php query_posts(array('post_parent' => 2616, 'post_type' => 'page', 'order' => 'ASC')); while (have_posts()) { the_post(); ?>
					<div class="project">
						<div class="thumbnail">
							<?php the_post_thumbnail(); ?>
							<div class="caption">
								<h2><?php the_title(); ?></h2>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>">Read More</a>
							</div>
						</div>
					</div>
		        <?php } ?>
			</div>
		</div>
		<div class="container">
			<div class="row padded-row">
				<div class="col-md-4">
					<?php get_template_part('get-involved'); ?>
				</div>
				<div class="col-md-8 mailinglist">
					<div class="thumbnail">
						<div class="row">
							<div class="col-md-4">
								<div class="caption">
									<h2>Stay Informed</h2>
									<p>Sign up for our mailing list.</p>
								</div>
							</div>
							<div class="col-md-8">
								<form action="//opengovfoundation.us6.list-manage.com/subscribe?u=9d450bf68b3df1185fc9f62b2&id=0616b4aaba" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div class="mc-field-group form-group">
										<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Email">
									</div>
									<div class="mc-field-group form-group">
										<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="First name">
									</div>
									<div class="mc-field-group form-group">
										<input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME" placeholder="Last name">
									</div>
									<div class="mc-field-group form-group">
										<input type="text" value="" name="MMERGE3" class="form-control" id="mce-MMERGE3" placeholder="Zip code">
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									<div style="position: absolute; left: -5000px;"><input type="text" name="b_9d450bf68b3df1185fc9f62b2_0616b4aaba" tabindex="-1" value=""></div>
									<div class="clear"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary">Subscribe</button></div>
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
