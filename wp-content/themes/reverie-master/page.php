<?php  get_header( 'empresa' ); ?>

		<?php get_sidebar(); ?>
		<!-- Row for main content area default-template -->
		<div class="small-12 large-9 columns" role="main">
			<div class="thepadding">
				<?php /* Start loop */ ?>
				<?php while (have_posts()) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<header>
							<h2 class="entry-title mt-30"><?php the_title(); ?></h2>
						</header>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
						<footer>
							<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
							<p><?php the_tags(); ?></p>
						</footer>
						<?php // comments_template(); ?>
					</article>
				<?php endwhile; // End the loop ?>
			</div>
		</div>
	</div><!-- Row End -->
	<div class="row main-container blog-update">
		<div class="large-3 columns">
			<div class="pd-10">
				<h2 class="subheader">Blog</h2>
				<a href="#">Ver todas las noticias ></a>
			</div>
		</div>
		<?php
		$args = array( 'numberposts' => 3 );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
		<div class="large-3 columns">
			<p><?php echo substr(get_the_excerpt(), 0,90); ?></p>
			<h6 class="subheader graytxt date"><?php the_date(); ?></h6>
		</div>
		<?php endforeach; ?>
	</div>
	<div class="row collapse">
		<div class="large-12 columns">
			<ul class="inline-list connect">
				<li class="active"><a href="#">Conectate con nosotros</a></li>
				<li><a href="#"><span class="face"></span>Facebook</a></li>
				<li><a href="#"><span class="twitter"></span> Twitter</a></li>
				<li><a href="#"><span class="linkdn"></span> Linkdkn</a></li>
			</ul>
		</div>
	</div>
</section><!-- Container End -->

	 	
<?php get_footer(); ?>