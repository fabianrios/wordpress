<?php
/*
Template Name: Full Width
*/
get_header(); ?>

	
	<!-- Row for main content area page-full -->
		<div class="small-12 large-12 columns" role="main">
			<div class="row">
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
			<ul class="inline-list connect mt-30">
				<li class="active"><a href="#">Conectate con nosotros</a></li>
				<li><a href="#"><span class="face"></span>Facebook</a></li>
				<li><a href="#"><span class="twitter"></span> Twitter</a></li>
				<li><a href="#"><span class="linkdn"></span> Linkdkn</a></li>
			</ul>
		</div>
	</div><!-- Row End -->
</section><!-- Container End -->
<?php get_footer(); ?>