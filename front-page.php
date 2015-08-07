<?php
/*
Template Name: Home page
*/
?>
<?php get_header();?>
            <article>
                <div class="wrapper">
					<div class="homepage-content">
						<?php if (have_posts()):?>
						<?php while (have_posts()):the_post();?>
							<?php the_content();?>
						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
					</div>
                </div>
            </article>
<?php get_footer();?> 