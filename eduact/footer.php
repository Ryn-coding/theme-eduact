<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eduAct
 */

?>

		<footer id="colophon" class="site-footer main-footer">
			<div class="main-footer__bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/footer-bg-1.png);"></div>
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-md-5 wow fadeInUp" data-wow-delay="100ms">
							<div class="main-footer__about">
								<a href="index.html" class="main-footer__logo">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/footer-logo.png" alt="eduact" width="213" height="55">
								</a><!-- /.footer-logo -->
								<p class="main-footer__about__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								<div class="main-footer__social">
									<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
									<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
									<a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
								</div><!-- /.footer-social -->
							</div><!-- footer-top -->
						</div>
						<div class="col-xl-3 col-md-4 wow fadeInUp" data-wow-delay="200ms">
							<div class="main-footer__navmenu main-footer__widget01">
								<h3 class="main-footer__title">Quick Links</h3>
								<ul>
									<li><a href="course.html">Latest Courses</a></li>
									<li><a href="about.html">Mission & Vision</a></li>
									<li><a href="services.html">Our Approach</a></li>
									<li><a href="team.html">Exclusive Advisors</a></li>
									<li><a href="team-become.html">Join a Carrer</a></li>
								</ul><!-- /.list-unstyled -->
							</div><!-- /.footer-menu -->
						</div>
						<div class="col-xl-2 col-md-3 wow fadeInUp" data-wow-delay="300ms">
							<div class="main-footer__navmenu main-footer__widget02">
								<h3 class="main-footer__title">Explore</h3>
								<ul>
									<li><a href="about.html">About Us</a></li>
									<li><a href="course.html">Upcoming Events</a></li>
									<li><a href="blog-grid-right.html">Blog & News</a></li>
									<li><a href="faq.html">FAQ Question</a></li>
									<li><a href="pricing.html">Testimonial</a></li>
									<li><a href="contact.html">Privacy Policy</a></li>
								</ul><!-- /.list-unstyled -->
							</div><!-- /.footer-menu -->
						</div>
						<div class="col-xl-4 col-md-12 wow fadeInUp" data-wow-delay="400ms">
							<div class="main-footer__newsletter">
								<h3 class="main-footer__title">Contact Us</h3>
								<ul class="main-footer__info-list">
									<li><span class="icon-Location"></span>6391 Elgin St. Celina, Delaware 10299</li>
									<li><span class="icon-Telephone"></span><a href="tel:3035550105">(303) 555-0105</a></li>
									<li><span class="icon-Email"></span><a href="mailto:michael.mitc@example.com">michael.mitc@example.com</a></li>
								</ul>
								<form class="main-footer__email-box mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
									<div class="main-footer__email-input-box">
										<input type="email" placeholder="Email Address" name="EMAIL">
									</div>
									<button type="submit" class="eduact-btn"><span class="eduact-btn__curve"></span>Subscribe</button>
								</form>
								<div class="mc-form__response"></div>
							</div><!-- /.footer-mailchimp -->
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			
		</footer><!-- #colophon -->
		<section class="copyright text-center">
			<div class="container wow fadeInUp" data-wow-delay="400ms">
				<p class="copyright__text">Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> | Eduact HTML Template. All Rights Reserved</p>
			</div><!-- /.container -->
		</section><!-- /.copyright -->
	</div><!-- page-wrapper -->
</div><!-- #page -->
<div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="183" height="48" alt="eduact" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+9236809850">+92 (3680) - 9850</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" class="eduact-btn"><span class="eduact-btn__curve"></span><i class="icon-Search"></i></button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <!-- back-to-top-start -->
    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>
    <!-- back-to-top-end -->

<?php wp_footer(); ?>

</body>
</html>
