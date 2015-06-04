<?php
/*
	Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<div class="content">
	<section class='row'>
		<div class='small-9 small-centered columns page-header'><center>
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
					<div class='leader'>
						<h1><?php wp_title(''); ?>Blog Posts</h1>
					</div>
						<?php $counter = 0; ?>
					<?php if ( have_posts() ) : while ( have_posts() and $counter<4) : the_post(); ?>
						<?php $counter = $counter +1; ?>
							<div class='small-4 columns'>
							<article class="post">
								<div class='card-blog'>
									<h1> <a href='<?php the_permalink(); ?>'><?php the_title();?> </a> </h1>
									<h2> <?php 
										global $more;    // Declare global $more (before the loop).
										$more = 1;       // Set (inside the loop) to display all content, including text below more.
										the_content();
									?> </h2>
									<ul class='post-meta no-bullet'>
										<li class='author'>
											<span class='wpt-author small'>
												<?php echo get_avatar(get_the_author_meta('ID'),24)?>	
											</span>
											by <?php the_author_posts_link(); ?>
										</li>
										<li class='category'>in <?php the_category(', '); ?></li>
										<li class='date'>on <?php the_time('F j, Y'); ?></li>	
									</ul>
								</div>
								<?php if (get_the_post_thumbnail()) : ?>
								<div class='img-container'>
									<?php the_post_thumbnail('large'); ?>
								</div>
								<?php endif; ?>
							</article>
						</div>
					<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div><!-- #content -->
			</div><!-- #primary -->
		</center></div>
	</section>
	<section class='row'>
		<div class='page-content'>
		</div>
	</section>
</div>

<?php get_footer(); ?>