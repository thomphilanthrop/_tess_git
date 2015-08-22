<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />
    <title><?php bloginfo('name'); ?> <?php wp_title("|", true); ?></title>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"/>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-favicon.png"/>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
  </head>
    <body id="body">
			<div class="mobile-nav" id="mobile-nav">
							<div class="menu-btn" id="menu-btn">
								<div class="wrapper">
									<div class="btn-container">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="mobile-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
										<a href="#body"><img class="hamburger" src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png"/></a>
									</div>
								</div>
							</div>
				<div class="wrapper">
					<div class="responsive-menu">
						<div class="mobile-search-container">
							<form role="search" method="get" id="searchform" class="searchform" action="http://tess.old-robot.com/">
								<label class="screen-reader-text" for="s">
									<img class="icon-search" src="<?php echo get_template_directory_uri(); ?>/img/search-black.png"></i>
								</label>
								<input type="text" value="" name="s" id="s" placeholder=""/>
							</form>
						</div>
						<div class="x-toggle"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png"/></div>
						<div class="mobile-lang clearfix"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Lang switch mobile')) :endif; ?></div>
						<div class="mobile-menu-main clearfix">
							<?php wp_nav_menu( array( 'container_class' => '', 'theme_location' => 'mobile', 'depth'=>2 ) ); ?>
						</div>
						<div class="mobile-menu-top-links">
							<?php wp_nav_menu( array( 'container_class' => '', 'theme_location' => 'top', 'depth'=>1 ) ); ?>
						</div>
					</div>
				</div>
			</div>
		<header>
			<div class="header-wrapper">
				<div id="menu">
					<div class="wrapper">
						<div class="header-top-area">
							<div class="big-container">
								<nav class="top-links">
									<div class="top-links-left">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="tess-leather">tess leather</span></a>
										<?php wp_nav_menu( array( 'container_class' => '', 'theme_location' => 'top', 'depth'=>1 ) ); ?>
									</div>
									<div class="top-links-right">
										<ul>
											<li class="lang"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Lang switch')) :endif; ?></li>
											<li>
												<div class="search-container">
													<form role="search" method="get" id="searchform" class="searchform" action="http://tess.old-robot.com/">
														<label class="screen-reader-text" for="s">
															<img class="icon-search" src="<?php echo get_template_directory_uri(); ?>/img/search.png"></i>
														</label>
														<input type="text" value="" name="s" id="s" placeholder="SEARCH"/>
													</form>
												</div>
											</li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
					<div class="wrapper">
						<div class="header-button-area">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="logo"></div></a>
							<nav class="primary-nav">
								<?php wp_nav_menu( array( 'container_class' => '', 'theme_location' => 'main', 'depth'=>3 ) ); ?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main>