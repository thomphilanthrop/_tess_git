<?php get_header();?>
			<article>
                <div class="wrapper">
                    <?php 
						if ( is_singular( 'product' ) ) {
							woocommerce_content();
						}else{
						   //For ANY product archive.
						   //Product taxonomy, product search or /shop landing
							woocommerce_get_template( 'archive-product.php' );
						}
					?>
                </div>
            </article>
<?php get_footer();?> 