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
			<?php while (have_posts()) : the_post(); ?>
				<div class="row padded-row">
					<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>
						<header class="entry-header">
							<?php if (has_post_thumbnail() && ! post_password_required()) : ?>
							<div class="entry-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<?php endif; ?>

							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages(array( 'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'opengovfoundation') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' )); ?>

							<footer class="entry-meta">
								<?php edit_post_link(__('Edit', 'opengovfoundation'), '<span class="edit-link">', '</span>'); ?>
							</footer><!-- .entry-meta -->
						</div><!-- .entry-content -->

					</article><!-- #post -->
					<div class="col-md-4">
						<?php get_template_part('get-involved'); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<div class="people">
			<?php
            $this_page_id=$wp_query->post->ID;
            query_posts(array('showposts' => 20, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_parent' => $this_page_id, 'post_type' => 'page'));
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    echo "<div class='row padded-row'>";
                    echo "<h1 class='col-md-12'>".get_the_title()."</h1>";

                    $args=array(
                            'orderby' => 'menu_order',
                            'order' => 'ASC',
                            'posts_per_page' => 50,
                            'post_type' => get_post_type($post->ID),
                            'post_parent' => $post->ID
                    );

                    $childpages = new WP_Query($args);

                    if ($childpages->post_count > 0) { /* display the children content  */
                        while ($childpages->have_posts()) {
                            $childpages->the_post();
                            $hascontent = strlen(get_the_content()) > 0;
                            ?>

			                <div class="col-md-4">
								<div class="thumbnail person"
								<?php if ($hascontent) {
    ?>
									data-toggle="modal" data-target="#exampleModal" data-img='<?php the_post_thumbnail('thumbnail', array( 'class' => ' img-circle' )) ?>'
								<?php

}
                            ?>
								>
									<?php if ($hascontent) {
    the_post_thumbnail('thumbnail', array( 'class' => ' img-circle' ));
} else {
    the_post_thumbnail('thumbnail');
}
                            ?>
									<div class="caption">
										<h2><?php echo get_the_title() ?></h2>
										<?php if (get_post_meta($post->ID, "Title", true)) {
    ?>
										<p class="title"><?php echo get_post_meta($post->ID, "Title", true);
    ?></p><?php

}
                            ?>
										<div class="bio"><?php the_content();
                            ?></div>
                                <?php if ($hascontent) {
    ?>
										<a>See details</a>
								<?php

}
                            ?>
								<?php if (get_post_meta($post->ID, "Link", true)) {
    ?>
									<a href="<?php echo get_post_meta($post->ID, "Link", true) ?>">View Site</a>
								<?php

}
                            ?>
									</div>
								</div>
							</div>
			            <?php

                        }
                    }
                    echo "</div>";
                }
            }
             ?>
		 </div>
			<!-- BOOTSTRAP MODAL -->
			<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
					<div class="row">
						<div class="image col-md-4"></div>
						<h1 class="name col-md-8"></h1>
					</div>
					<h2 class="title"></h2>
			    	<p class="bio"></p>
			    </div>
			  </div>
			</div>
			<!-- END BOOTSTRAP MODAL -->
		</div><!-- #content -->
	</div><!-- #primary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script>
	$(function() {
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var name = $(event.relatedTarget).parent().find("h2").text(); // Extract info from data-* attributes
		  var title = $(event.relatedTarget).parent().find(".title").text(); // Extract info from data-* attributes
		  var bio = $(event.relatedTarget).parent().find(".bio").html(); // Extract info from data-* attributes
		  var image = $(event.relatedTarget).data("img"); // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.name').text(name);
		  modal.find('.title').text(title);
		  modal.find('.bio').html(bio);
		  modal.find('.image').html(image);
		});
	});
	</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
