<?php
/*
Template Name: Contact page
*/
?>
<?php get_header();?>
            <article>
				<div class="googlemaps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6023.7663232785935!2d28.893034099999998!3d40.984039200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb6315266273%3A0x7fb8ed2205f5322a!2sTess+Dis+Ticaret!5e0!3m2!1suk!2sua!4v1438352498036" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>
				</div>
				<div class="wrapper">			
					<div class="contactpage">
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