<?php
/*
Template Name: Full Width
*/
get_header(); ?>


<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
		
		<div class="row">
			<div class="large-3 columns">
				<h1 class="no-margin">Blog</h1>
				<a href="#">Ver todas las noticias ></a>
			</div>
			<?php
			$args = array( 'numberposts' => 3 );
			$lastposts = get_posts( $args );
			foreach($lastposts as $post) : setup_postdata($post); ?>
			<div class="large-3 columns">
				<p><?php echo substr(get_the_excerpt(), 0,90); ?></p>
				<h6 class="subheader"><?php the_date(); ?></h6>
			</div>
			<?php endforeach; ?>
		</div>	
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>
	
	<ul class="inline-list">
		<li><a href="#">Conectate con nosotros</a></li>
		<li><a href="#"><span class="face"></span>Facebook</a></li>
		<li><a href="#"><span class="twitter"></span> Twitter</a></li>
		<li><a href="#"><span class="linkdn"></span> Linkdkn</a></li>
	</ul>

	</div>
		
<?php get_footer(); ?>