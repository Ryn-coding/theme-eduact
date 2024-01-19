<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eduAct
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Home RTL || Eduact || HTML Template For Educaton & LMS</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Eduact HTML Template For Educaton & LMS" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Water+Brush&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/eduact-icons/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/owl-carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/owl-carousel/assets/owl.theme.default.min.css" />

    <!-- template styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/eduact-rtl.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/eduact-custom-rtl.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendors/eduact-toolbar/css/eduact-toolbar.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class('custom-cursor'); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<div class="page-wrapper">
		<!-- <a class="skip-link screen-reader-text" href="#primary"><?php //esc_html_e( 'Skip to content', 'eduact' ); ?></a> -->
		<div class="custom-cursor__cursor"></div>
		<div class="custom-cursor__cursor-two"></div>

		<div class="preloader">
			<div class="preloader__image" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/loader.png);"></div>
		</div>
		<header id="masthead" class="site-header main-header">
			<nav class="main-menu">
                <div class="container">
                    <div class="main-menu__logo">
                        <a href="<?php get_site_url(); ?>">
                            <img src="<?php echo get_field('site_logo','option'); ?>" width="183" height="48" alt="Eduact">
                        </a>
                    </div><!-- /.main-menu__logo -->
                    <div class="main-menu__nav">
                        <ul class="main-menu__list">
                            <li class="dropdown megamenu">
                                <a href="index.html">Home</a>
                                <ul>
                                    <li>
                                        <section class="home-showcase">
                                            <div class="container">
                                                <div class="home-showcase__inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/home-showcase/home-showcase-1-1.jpg" alt="eduact">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            Multi Page
                                                                        </a>
                                                                        <a href="index-one-page.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.home-showcase__buttons -->
                                                                </div><!-- /.home-showcase__image -->
                                                                <h3 class="home-showcase__title">Home page 01</h3><!-- /.home-showcase__title -->
                                                            </div><!-- /.home-showcase__item -->
                                                        </div><!-- /.col-lg-3 -->
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/home-showcase/home-showcase-1-2.jpg" alt="eduact">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index-2.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            Multi Page
                                                                        </a>
                                                                        <a href="index-2-one-page.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.home-showcase__buttons -->
                                                                </div><!-- /.home-showcase__image -->
                                                                <h3 class="home-showcase__title">Home page 02</h3><!-- /.home-showcase__title -->
                                                            </div><!-- /.home-showcase__item -->
                                                        </div><!-- /.col-lg-3 -->
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/home-showcase/home-showcase-1-3.jpg" alt="eduact">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index-3.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            Multi Page
                                                                        </a>
                                                                        <a href="index-3-one-page.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.home-showcase__buttons -->
                                                                </div><!-- /.home-showcase__image -->
                                                                <h3 class="home-showcase__title">Home page 03</h3><!-- /.home-showcase__title -->
                                                            </div><!-- /.home-showcase__item -->
                                                        </div><!-- /.col-lg-3 -->
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/home-showcase/home-showcase-1-4.jpg" alt="eduact">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index-dark.html" class="eduact-btn home-showcase__buttons__item">
                                                                            <span class="eduact-btn__curve"></span>
                                                                            View Page
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.home-showcase__buttons -->
                                                                </div><!-- /.home-showcase__image -->
                                                                <h3 class="home-showcase__title">Home page 04</h3><!-- /.home-showcase__title -->
                                                            </div><!-- /.home-showcase__item -->
                                                        </div><!-- /.col-lg-3 -->
                                                    </div><!-- /.row -->
                                                </div><!-- /.home-showcase__inner -->
                                            </div><!-- /.container -->
                                        </section>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Our Teacher</a></li>
                                    <li><a href="team-carousel.html">Teacher Carousel</a></li>
                                    <li><a href="team-become.html">Become Teacher</a></li>
                                    <li><a href="team-details.html">Teacher Details</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Course</a>
                                <ul>
                                    <li><a href="course.html">Course Page</a></li>
                                    <li><a href="course-carousel.html">Course Carousel</a></li>
                                    <li><a href="management-consulting.html">Management Consulting</a></li>
                                    <li><a href="web-development.html">Web Development</a></li>
                                    <li><a href="frontend-development.html">Frontend Development</a></li>
                                    <li><a href="uiux-design.html">UI/UX Design</a></li>
                                    <li><a href="digital-photography.html">Digital Photography</a></li>
                                    <li><a href="online-business.html">Online Business</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="#">Products</a>
                                        <ul class="sub-menu">
                                            <li><a href="products.html">No Sidebar</a></li>
                                            <li><a href="products-left.html">Left Sidebar</a></li>
                                            <li><a href="products-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="products-carousel.html">Products Carousel</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="#">Blog Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.html">No Sidebar</a></li>
                                            <li><a href="blog-grid-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-grid-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Blog List</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list.html">No Sidebar</a></li>
                                            <li><a href="blog-list-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-list-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                    <li class="dropdown">
                                        <a href="#">Blog Details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details.html">No Sidebar</a></li>
                                            <li><a href="blog-details-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-details-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div><!-- /.main-menu__nav -->
                    <div class="main-menu__right">
                        <a href="#" class="main-menu__toggler mobile-nav__toggler">
                            <i class="fa fa-bars"></i>
                        </a><!-- /.mobile menu btn -->
                        <a href="#" class="main-menu__search search-toggler">
                            <i class="<?php echo get_field('search_icon','option'); ?>"></i>
                        </a><!-- /.search btn -->
                        <a href="<?php echo get_field('login_url','option'); ?>" class="main-menu__login">
                            <i class="<?php echo get_field('login_icon','option'); ?>"></i>
                        </a><!-- /.login btn -->
                        <a href="<?php echo get_field('contact_btn_url','option'); ?>" class="eduact-btn"><span class="eduact-btn__curve"></span><?php echo get_field('contact_btn_text','option'); ?></a><!-- /.contact btn -->
                    </div><!-- /.main-menu__right -->
                </div><!-- /.container -->
            </nav>
			<!-- <div class="site-branding">
				<?php
				// the_custom_logo();
				// if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
					<?php
				//else :
					?>
					<p class="site-title"><a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>
					<?php
				//endif;
				// $eduact_description = get_bloginfo( 'description', 'display' );
				// if ( $eduact_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php //echo $eduact_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php //endif; ?>
			</div> -->
			<!-- .site-branding -->

			<!-- <nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'eduact' ); ?></button>
				<?php
				// wp_nav_menu(
				// 	array(
				// 		'theme_location' => 'menu-1',
				// 		'menu_id'        => 'primary-menu',
				// 	)
				// );
				?>
			</nav> -->
			<!-- #site-navigation -->
		</header><!-- #masthead -->
		<div class="stricky-header stricked-menu main-menu">
		<div class="sticky-header__content"></div>
		<!-- /.sticky-header__content -->
		</div>
	
