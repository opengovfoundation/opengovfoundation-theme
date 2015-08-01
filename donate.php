<?php
/**
 * Template Name: Donate Page
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
				</div>
			<?php endwhile; ?>
			<div class="row row-padded">
				<form class="col-md-8">
					<div class="form-group">
					    <label for="campaign">Select Campaign</label>
						<select class="form-control" id="campaign">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="form-group">
						<label for="radio-inline">Select or Enter an Amount</label><br>
						<label class="radio-inline">
						  <input type="radio" name="preferred-format" id="html" value="HTML"> $50
						</label>
						<label class="radio-inline">
						  <input type="radio" name="preferred-format" id="text" value="Text"> $100
						</label>
						<label class="radio-inline">
						  <input type="radio" name="preferred-format" id="text" value="Text"> $250
						</label>
						<label class="radio-inline">
						  <input type="radio" name="preferred-format" id="text" value="Text"> $500
						</label>
						<input type="text" class="form-control" id="amount" placeholder="$">
						<div class="checkbox">
							<label>
								<input type="checkbox"> I would like to donate an additional $4 to cover transaction fees
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> I would like to create a recurring donation
							</label>
						</div>
					</div>
					<div class="form-group">
					    <label for="campaign">Make Donation in Memory Of</label>
						<input type="text" class="form-control" id="first" placeholder="">
					</div>
					<button type="submit" class="btn btn-default">Donate Now</button>
				</form>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>