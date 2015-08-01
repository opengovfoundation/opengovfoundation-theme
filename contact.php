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
			<div class="row">
				<h1 class="col-md-6">Contact Us</h1>
				<ul class="socialmedia col-md-6">
					<li><a href="#" class="img-circle"><span class="genericon genericon-twitter"></span></a></li>
					<li><a href="#" class="img-circle"><span class="genericon genericon-facebook"></span></a></li>
					<li><a href="#" class="img-circle"><span class="genericon genericon-youtube"></span></a></li>
					<li><a href="#" class="img-circle"><span class="genericon genericon-tumblr"></span></a></li>
					<li><a href="#" class="img-circle"><span class="genericon genericon-feed"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="row padded-row map">
			<div class="container">
				<div class="row contact">
					<div class="col-md-1 col-md-offset-5 icon">
						<img src="/wp-content/themes/opengovfoundation-theme/images/icon_contact_white.png" alt="">
					</div>
					<div class="col-md-3 col-sm-6">
						<h3>Physical:</h3>
						<p>1875 Connecticut Ave NW<br>
						10th Floor<br>
						Washington DC 20002<br>
						<a href="#">Map directions</a></p>
					</div>
					<div class="col-md-3 col-sm-6">
						<h3>Nearest Metro:</h3>
						<p>Dupont Circle — North</p>
						<br>
						<h3>Email:</h3>
						<p><a href="#">sayhello@opengovfoundation.org</a></p>
						<h3>Phone:</h3>
						<p>760.659.0631</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>