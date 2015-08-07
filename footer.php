</main>
<div class="clearfix"></div>
<hr/>
<footer>
            <div class="wrapper">
			<div class="footer-widgets">
				<?php
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1)) : endif;
				?>
			</div>
			<div class="footer-list-social">
				<ul>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/in.png"/></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"/></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
            </div>
        </footer>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.localScroll-1.3.1-min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
		<script>		
		$(document).ready(function() {
			$('#mobile-nav').localScroll({
            duration: 300,
            offset: 0
        });    
            });

            $(function(){
             $(window).scroll(function() { 
              var top = $(document).scrollTop();
              if (top > 80) $('.header-wrapper').addClass('fixed');
              else $('.header-wrapper').removeClass('fixed');
             });
            });

			jQuery(function($){
				$( '.hamburger' ).click(function(){
				$('.responsive-menu').toggleClass('expand')
				});
			});
			
			jQuery(function($){
				$( '.x-toggle' ).click(function(){
				$('.responsive-menu').toggleClass('expand')
				});
			});

			jQuery(document).ready(function($){
				$(".menu-item-has-children").append("<div class='open-menu-link open'>+</div>");
				$('.menu-item-has-children').append("<div class='open-menu-link close'>-</div>");
			
				$('.open').addClass('visible');
			
				$('.open-menu-link').click(function(e){
					var childMenu =  e.currentTarget.parentNode.children[1];
					if($(childMenu).hasClass('visible')){
						$(childMenu).removeClass("visible");
			
						$(e.currentTarget.parentNode.children[3]).removeClass("visible");
						$(e.currentTarget.parentNode.children[2]).addClass("visible");
					} else {
						$(childMenu).addClass("visible");
			
						$(e.currentTarget.parentNode.children[2]).removeClass("visible");
						$(e.currentTarget.parentNode.children[3]).addClass("visible");
					}
				});
			});
		</script>
	<?php wp_footer(); ?>
    </body>
</html>