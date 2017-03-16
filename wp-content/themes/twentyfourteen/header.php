<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	
	<!-- Bootstrap -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <!-- flexslider -->
    <!-- <link rel="stylesheet" href="plugins/flexslider/flexslider.css" type="text/css"/> -->
    <!-- magnific-popup -->
    <!-- <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css"> -->
    <!-- fonts css -->
    <!-- <link rel="stylesheet" href="css/fonts.css"> -->
    <!-- custom css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper__main">
       <div class="content__main">
            <!-- header -->
            <header class="header">
			<?php
				$header__siteSlogan = cfs_get_option('options', 'header__siteSlogan');
				$header__img = cfs_get_option('options', 'header__img');
				$header__phoneTitle = cfs_get_option('options', 'header__phoneTitle');
				$header__phone = cfs_get_option('options', 'header__phone');
			?>
               <div class="container">
                   <div class="row">
                       <div class="col-xs-12 header__itemInner">
                           <div class="header__item">
                               <div class="header__logoWrap">
								<?php if ( is_front_page() ) { ?>
									<div class="header__link">
                                       <img src="<?php echo $header__img; ?>" alt="logo" class="header__img">
                                   </div>
								<?php
								} else {
								?>
									<a href="<?php echo esc_url(home_url('/')); ?>" class="header__link">
                                       <img src="<?php echo $header__img; ?>" alt="logo" class="header__img">
                                   </a>
								<?php
								}
								?>
                               </div>
                                          
                               <div class="header__phoneOrder">
                                   <p class="header__phoneTitle">Есть вопросы? Звоните!</p>
                                   <a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', $header__phone ); ?>" class="header__phone"><?php echo $header__phone; ?></a>
                               </div>
                                          
                               <div class="header__siteSloganWrap">
                                   <p class="header__siteSlogan"><?php echo $header__siteSlogan; ?></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </header><!-- header -->

            <div class="header__navMenu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header__navWrap">
                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                                <nav class="header__nav">
                                    <ul class="header__navList">
                    									<?php
                    										$menus = wp_get_nav_menus(array('hide_empty' => false, 'orderby' => 'name'));
                    										$menu_list = wp_get_nav_menu_items('menu_header_main');
                    											for ($i = 0; $i < count($menu_list); $i++) {
                    									?>

                    										<li class="header__navItem">
                                            <a href="<?php echo $menu_list[$i]->url; ?>" class="header__navLink" id="">
                                            	<?php echo $menu_list[$i]->title; ?>
                                            </a>
                                        </li>
                    									<?php
                    				            }
                    				    			?>
                                        <!-- <li class="header__navItem">
                                            <a href="#" class="header__navLink" id="">Главная</a>
                                        </li>
                                        <li class="header__navItem">
                                            <a href="#" class="header__navLink" id="">О нас</a>
                                        </li>
                                        <li class="header__navItem">
                                            <a href="#" class="header__navLink" id="">Новости</a>
                                        </li>
                                        <li class="header__navItem">
                                            <a href="#" class="header__navLink" id="">Каталог продукции</a>
                                        </li>
                                        <li class="header__navItem">
                                            <a href="#" class="header__navLink" id="">Статьи</a>
                                        </li>
                                        <li class="header__navItem">
                                            <a href="#" class="header__navLink" id="">Сотрудничество</a>
                                        </li>
                                        <li class="header__navItem">
                                            <a href="#" class="header__navLink" id="">Контакты</a>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- header__navMenu -->

            <div id="main" class="site-main">


















<!-- <div id="page" class="hfeed site">
	<?php //if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php// header_image(); ?>" width="<?php// echo get_custom_header()->width; ?>" height="<?php //echo get_custom_header()->height; ?>" alt="<?php// echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php //endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php// bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php// _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php// _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php// _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php// wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php// get_search_form(); ?>
			</div>
		</div>
	</header>-->

