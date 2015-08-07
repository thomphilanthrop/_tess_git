<?php get_header();?>
			<article class="news">
				<div class="featured-image">
					<?php
						if (function_exists('add_theme_support'))
						the_post_thumbnail();
					?>
				</div>
					<div class="wrapper">
						<h1 class="page-title"><?php wp_title( '&nbsp;', true, 'right' ); ?></h1>
						<div class="posts-container">
						
							<?php if (have_posts()):?>
								<?php while (have_posts()):the_post();?>
									<div class="post clearfix">
										<div class="post-thumbnail">
											<?php
												if (function_exists('add_theme_support'))
												the_post_thumbnail();
											?>
										</div>
										<div class="post-preview-text">
											<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
											<?php the_excerpt();?>
											<a href="<?php the_permalink();?>" class="readmore-button">more...</a>
										</div>
									</div>
								<?php endwhile; ?>
								<div class="pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>
								<?php else : ?>
								<?php endif; ?>
							</div>	
					</div>
            </article>
			<div class="clearfix"></div>
<?php get_footer();?>   