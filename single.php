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
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<article class="post">
								<?php if (get_the_post_thumbnail()) : ?>
								<div class='img-container'>
										<?php the_post_thumbnail('large'); ?>
								</div>
								<?php endif; ?>
								<h1> <a href='<?php the_permalink(); ?>'><?php the_title();?> </a> </h1>
								<ul class='post-meta no-bullet'>
									<li class='author'>
										<span class='wp-author small'>
											<?php echo get_avatar(get_the_author_meta('ID'),24)?>	
										</span>
										by <?php the_author_posts_link(); ?>
										
									</li>
									<li class='category'>in <?php the_category(', '); ?></li>
									<li class='date'>on <?php the_time('F j, Y'); ?></li>	
								</ul>
								<h2> <?php the_content();?> </h2>
							</article>
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