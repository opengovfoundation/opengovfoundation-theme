<?php
/**
 * Template Name: Contact Page
 * 
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row padded-row">
				<h1 class="col-md-6">Contact Us</h1>
				<ul class="socialmedia col-md-6">
					<li><a href="https://twitter.com/FoundOpenGov" class="img-circle"><span class="genericon genericon-twitter"></span></a></li>
					<li><a href="https://www.facebook.com/Opengovfoundation" class="img-circle"><span class="genericon genericon-facebook"></span></a></li>
					<li><a href="https://www.youtube.com/channel/UCdSjbzPy92uMG8o03N1JC5g" class="img-circle"><span class="genericon genericon-youtube"></span></a></li>
					<li><a href="http://opengovfoundation.tumblr.com" class="img-circle"><span class="genericon genericon-tumblr"></span></a></li>
					<li><a href="http://opengovfoundation.dev/feed" class="img-circle"><span class="genericon genericon-feed"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="row padded-row map">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-7 col-md-offset-5 contact">
						<div class="col-md-2 icon">
							<img src="/wp-content/themes/opengovfoundation-theme/images/icon_contact_white.png" alt="">
						</div>
						<div class="col-md-5 col-sm-6">
							<h3>Physical:</h3>
							<p>1875 Connecticut Ave NW<br>
							10th Floor<br>
							Washington DC 20002<br>
							<a href="https://www.google.com/maps/dir//1875+Connecticut+Ave+NW,+Washington,+DC+20009/">Map directions</a></p>
						</div>
						<div class="col-md-5 col-sm-6">
							<h3>Nearest Metro:</h3>
							<p>Dupont Circle — North</p>
							<br>
							<h3>Email:</h3>
							<p><a href="mailto:sayhello@opengovfoundation.org">sayhello@opengovfoundation.org</a></p>
							<h3>Phone:</h3>
							<p>760.659.0631</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row padded-row">
				<div class="col-md-8">
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
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
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>