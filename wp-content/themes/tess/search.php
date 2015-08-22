<?php get_header();?>
			<article id="content">
					<div class="wrapper">
						<div class="search-content">
							<?php if (have_posts()):?>
									<?php woocommerce_get_template( 'archive-product.php' );?>
								<?php else : ?>
								<div class="alert-error">
									<h2>You searched "<?php the_search_query();?>"</h2>
									No products were found matching your selection.
								</div>
								<?php endif; ?>
						</div>		
					</div>
				<div class="clearfix"></div>
            </article>
<?php get_footer();?> 