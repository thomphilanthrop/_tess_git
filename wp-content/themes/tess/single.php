<?php get_header();?>
			<article class="single">
				<div class="featured-image">
				<?php
					if (function_exists('add_theme_support'))
					the_post_thumbnail();
				?>
			</div>
					<div class="wrapper">
							<?php if (have_posts()):?>
								<?php while (have_posts()):the_post();?>
										<h1><?php the_title();?></h1>
										<div class="post-content">
											<?php the_content();?>
										</div>
								<?php endwhile; ?>
								<div class="pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>
								<?php else : ?>
								<?php endif; ?>
					</div>
            </article>
<?php get_footer();?>   