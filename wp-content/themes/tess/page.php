<?php get_header();?>
			<article id="content">
				<div class="featured-image">
					<?php
						if (function_exists('add_theme_support'))
						the_post_thumbnail();
					?>
				</div>
				<div class="page">
					<div class="wrapper">
							<?php if (have_posts()):?>
								<?php while (have_posts()):the_post();?>
									<?php the_content();?>
								<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>
					</div>
				</div>
				<div class="clearfix"></div>
            </article>
<?php get_footer();?> 