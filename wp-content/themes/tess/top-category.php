<?php
/*
Template Name: Top category page
*/
?>
<?php get_header();?>
			<article class="main-content">
				<div class="featured-image">
					<?php
						if (function_exists('add_theme_support'))
						the_post_thumbnail();
					?>
				</div>
                <div class="wrapper">
					<div class="main-category-lists">
						<?php if (have_posts()):?>
							<?php while (have_posts()):the_post();?>
								<?php the_content();?>
							<?php endwhile; ?>
							<?php else : ?>
							<?php endif; ?>
					</div>
					<div class="clearfix"></div>
                </div>
            </article>
<?php get_footer();?> 