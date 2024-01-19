<?php
/* Template Name: Home RTL || Eduact || HTML Template For Educaton & LMS */

get_header();
?>

        <!--Hero Banner Start-->
        <section class="hero-banner" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/banner-bg-1.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-banner__content">
                            <div class="hero-banner__bg-shape1 wow zoomIn" data-wow-delay="300ms">
                                <div class="hero-banner__bg-round">
                                    <div class="hero-banner__bg-round-border"></div>
                                </div>
                            </div>
                            <h2 class="hero-banner__title wow fadeInUp" data-wow-delay="400ms"><?php echo get_field('banner__title') ?></h2>
                            <p class="hero-banner__text wow fadeInUp" data-wow-delay="500ms">
                                <?php echo get_field('banner__text') ?>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/shapes/banner-1-shape-1.png" alt="eduact">
                            </p>
                            <?php $impt_people_card = get_field('banner__btn');  ?>
                            <div class="hero-banner__btn wow fadeInUp" data-wow-delay="600ms">
                                <?php if( have_rows('banner__btn') ):
                                    while( have_rows('banner__btn') ) : the_row();
                                ?>
                                    <a href="<?php the_sub_field('eduact_btn_url'); ?>" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span><?php the_sub_field('eduact_btn_text'); ?><i class="<?php the_sub_field('eduact_btn_icon'); ?>"></i></a>
                                    <!-- <a href="course.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Find The Course<i class="icon-arrow"></i></a> -->
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div><!-- banner-btn -->
                        </div><!-- banner-content -->
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-banner__thumb wow fadeInUp" data-wow-delay="700ms">
                            <img src="<?php echo get_field('banner__thumb_main') ?>" alt="eduact">
                            <div class="hero-banner__cap wow slideInDown" data-wow-delay="800ms"><img src="<?php echo get_field('banner_thumb1'); ?>" alt="eduact"></div><!-- banner-cap -->
                            <div class="hero-banner__star wow slideInDown" data-wow-delay="850ms"><img src="<?php echo get_field('banner_thumb2'); ?>" alt="eduact"></div><!-- banner-star -->
                            <div class="hero-banner__map wow slideInDown" data-wow-delay="900ms"><img src="<?php echo get_field('banner_thumb3'); ?>" alt="eduact"></div><!-- banner-map -->
                            <div class="hero-banner__video wow zoomIn" data-wow-delay="950ms" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/resources/banner-video.png);">
                                <a href="https://www.youtube.com/watch?v=FTOS6cwJNCs" class="video-popup"><span class="icon-play"></span></a>
                            </div><!-- banner-video -->
                            <div class="hero-banner__book wow slideInUp" data-wow-delay="1000ms"><img src="<?php echo get_field('banner_thumb4'); ?>" alt="eduact"></div><!-- banner-book -->
                            <div class="hero-banner__star2 wow slideInUp" data-wow-delay="1050ms"><img src="<?php echo get_field('banner_thumb5'); ?>" alt="eduact"></div><!-- banner-star -->
                            <div class="hero-banner__cart wow slideInUp" data-wow-delay="1100ms">
                                <div class="hero-banner__cart__thumb"><img src="<?php echo get_field('banner__cart_thumb'); ?>" alt="eduact"></div>
                                <div class="hero-banner__cart__content">
                                    <div class="hero-banner__cart__content-inner">
                                        <h4 class="hero-banner__cart__title"><?php echo get_field('cart_title'); ?></h4>
                                        <p class="hero-banner__cart__text"><?php echo get_field('cart_text'); ?></p>
                                        <a href="<?php echo get_field('join_now_url'); ?>" class="eduact-btn"><span class="eduact-btn__curve"></span><?php echo get_field('join_now_text'); ?><i class="<?php echo get_field('join_now_icon'); ?>"></i></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 38">
                                            <path d="M0.702945 55.648L108.145 0.179688L87.0803 78.7928L0.702945 55.648Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-banner__border wow fadeInUp" data-wow-delay="1100ms"></div><!-- banner-border -->
        </section>
        <!--Hero Banner End-->
        <!-- Service Start -->
        <section class="service-one">
            <div class="service-one__bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/service-bg-1.png);"></div>
            <div class="container">
            <?php $service_one = get_field('service_one');  ?>
                <div class="row">
                    <?php if( have_rows('service_one') ):
                        while( have_rows('service_one') ) : the_row();
                    ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-one__item">
                            <div class="service-one__wrapper">
                                <div class="service-one__icon">
                                    <span class="<?php the_sub_field('service_one_icon'); ?>"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__title">
                                    <a href="<?php the_sub_field('service_one_btn_url'); ?>"><?php the_sub_field('service_one_title'); ?></a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__text"><?php the_sub_field('service_one_text'); ?></p><!-- /.service-content -->
                                <a class="service-one__rm" href="<?php the_sub_field('service_one_btn_url'); ?>"><?php the_sub_field('service_one_btn_text'); ?><span class="icon-caret-right"></span></a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 129" fill="none">
                                    <path d="M0.582052 143.759C135.395 113.682 145.584 0.974413 145.584 0.974413L173.881 89.6286C173.881 89.6286 0.582054 322.604 0.582052 143.759Z" fill="#F1F2FD" />
                                </svg>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Service End -->
        <!-- About Start -->
        <?php $about_thumb = get_field('about_one_box_tel'); 
            $about_thumb = preg_replace('/[^0-9]/', '', $about_thumb);
        ?>
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__thumb wow fadeInLeft" data-wow-delay="100ms"><!-- about thumb start -->
                            <div class="about-one__thumb__one eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                <img src="<?php echo get_field('about_one_thumb'); ?>" alt="eduact">
                            </div>
                            <div class="about-one__thumb__shape1 wow zoomIn" data-wow-delay="300ms">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/shapes/about-shape-1-1.png" alt="eduact">
                            </div>
                            <div class="about-one__thumb__shape2 wow zoomIn" data-wow-delay="400ms">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/shapes/about-shape-1-2.png" alt="eduact">
                            </div>
                            <div class="about-one__thumb__box wow fadeInLeft" data-wow-delay="600ms">
                                <div class="about-one__thumb__box__icon"><span class="<?php echo get_field('about_one_box_icon'); ?>"></span></div>
                                <h4 class="about-one__thumb__box__title"><?php echo get_field('about_one_box_title'); ?>?</h4>
                                <p class="about-one__thumb__box__text"><a href="<?php echo $about_thumb; ?>"><?php echo get_field('about_one_box_tel');; ?></a></p>
                            </div>
                        </div><!-- about thumb end -->
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__content"><!-- about content start-->
                            <div class="section-title">
                                <h5 class="section-title__tagline">
                                    <?php echo get_field('about_section_title_tagline'); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133 13" fill="none">
                                        <path d="M9.76794 0.395L0.391789 9.72833C-0.130596 10.2483 -0.130596 11.095 0.391789 11.615C0.914174 12.135 1.76472 12.135 2.28711 11.615L11.6633 2.28167C12.1856 1.76167 12.1856 0.915 11.6633 0.395C11.1342 -0.131667 10.2903 -0.131667 9.76794 0.395Z" fill="#F1F2FD" />
                                        <path d="M23.1625 0.395L13.7863 9.72833C13.2639 10.2483 13.2639 11.095 13.7863 11.615C14.3087 12.135 15.1593 12.135 15.6816 11.615L25.0578 2.28167C25.5802 1.76167 25.5802 0.915 25.0578 0.395C24.5287 -0.131667 23.6849 -0.131667 23.1625 0.395Z" fill="#F1F2FD" />
                                        <path d="M36.5569 0.395L27.1807 9.72833C26.6583 10.2483 26.6583 11.095 27.1807 11.615C27.7031 12.135 28.5537 12.135 29.076 11.615L38.4522 2.28167C38.9746 1.76167 38.9746 0.915 38.4522 0.395C37.9231 -0.131667 37.0793 -0.131667 36.5569 0.395Z" fill="#F1F2FD" />
                                        <path d="M49.9514 0.395L40.5753 9.72833C40.0529 10.2483 40.0529 11.095 40.5753 11.615C41.0976 12.135 41.9482 12.135 42.4706 11.615L51.8467 2.28167C52.3691 1.76167 52.3691 0.915 51.8467 0.395C51.3176 -0.131667 50.4738 -0.131667 49.9514 0.395Z" fill="#F1F2FD" />
                                        <path d="M63.3459 0.395L53.9698 9.72833C53.4474 10.2483 53.4474 11.095 53.9698 11.615C54.4922 12.135 55.3427 12.135 55.8651 11.615L65.2413 2.28167C65.7636 1.76167 65.7636 0.915 65.2413 0.395C64.7122 -0.131667 63.8683 -0.131667 63.3459 0.395Z" fill="#F1F2FD" />
                                        <path d="M76.7405 0.395L67.3643 9.72833C66.8419 10.2483 66.8419 11.095 67.3643 11.615C67.8867 12.135 68.7373 12.135 69.2596 11.615L78.6358 2.28167C79.1582 1.76167 79.1582 0.915 78.6358 0.395C78.1067 -0.131667 77.2629 -0.131667 76.7405 0.395Z" fill="#F1F2FD" />
                                        <path d="M90.1349 0.395L80.7587 9.72833C80.2363 10.2483 80.2363 11.095 80.7587 11.615C81.2811 12.135 82.1317 12.135 82.6541 11.615L92.0302 2.28167C92.5526 1.76167 92.5526 0.915 92.0302 0.395C91.5011 -0.131667 90.6573 -0.131667 90.1349 0.395Z" fill="#F1F2FD" />
                                        <path d="M103.529 0.395L94.1533 9.72833C93.6309 10.2483 93.6309 11.095 94.1533 11.615C94.6756 12.135 95.5262 12.135 96.0486 11.615L105.425 2.28167C105.947 1.76167 105.947 0.915 105.425 0.395C104.896 -0.131667 104.052 -0.131667 103.529 0.395Z" fill="#F1F2FD" />
                                        <path d="M116.924 0.395L107.548 9.72833C107.025 10.2483 107.025 11.095 107.548 11.615C108.07 12.135 108.921 12.135 109.443 11.615L118.819 2.28167C119.342 1.76167 119.342 0.915 118.819 0.395C118.29 -0.131667 117.446 -0.131667 116.924 0.395Z" fill="#F1F2FD" />
                                        <path d="M130.318 0.395L120.942 9.72833C120.42 10.2483 120.42 11.095 120.942 11.615C121.465 12.135 122.315 12.135 122.838 11.615L132.214 2.28167C132.736 1.76167 132.736 0.915 132.214 0.395C131.685 -0.131667 130.841 -0.131667 130.318 0.395Z" fill="#F1F2FD" />
                                    </svg>
                                </h5>
                                <h2 class="section-title__title"><?php echo get_field('about_section_title'); ?></h2>
                            </div><!-- section-title -->
                            <p class="about-one__content__text">
                                <?php echo get_field('about_one_content_text'); ?>
                            </p>
                            <?php $about_one_box_wrapper = get_field('about_one_box_wrapper');  ?>
                             <?php if( have_rows('about_one_box_wrapper') ):
                                while( have_rows('about_one_box_wrapper') ) : the_row();
                            ?>
                            <div class="about-one__box">
                                <div class="about-one__box__wrapper">
                                    <div class="about-one__box__icon"><span class="<?php the_sub_field('one_box_wrapper_icon'); ?>"></span></div>
                                    <h4 class="about-one__box__title"><?php the_sub_field('one_box_wrapper_title'); ?></h4>
                                    <p class="about-one__box__text"><?php the_sub_field('one_box_wrapper_text'); ?></p>
                                </div>
                            </div><!-- /.icon-box -->
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <a href="about.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Discover More<i class="icon-arrow"></i></a><!-- /.btn -->
                        </div><!-- about content end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->
        <!-- Category Start -->
        <section class="category-one" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/category-bg-1.jpg);">
            <div class="container">
                <div class="section-title text-center">
                    <h5 class="section-title__tagline">
                        <?php echo get_field('category_title_tagline'); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133 13" fill="none">
                            <path d="M9.76794 0.395L0.391789 9.72833C-0.130596 10.2483 -0.130596 11.095 0.391789 11.615C0.914174 12.135 1.76472 12.135 2.28711 11.615L11.6633 2.28167C12.1856 1.76167 12.1856 0.915 11.6633 0.395C11.1342 -0.131667 10.2903 -0.131667 9.76794 0.395Z" fill="#F1F2FD" />
                            <path d="M23.1625 0.395L13.7863 9.72833C13.2639 10.2483 13.2639 11.095 13.7863 11.615C14.3087 12.135 15.1593 12.135 15.6816 11.615L25.0578 2.28167C25.5802 1.76167 25.5802 0.915 25.0578 0.395C24.5287 -0.131667 23.6849 -0.131667 23.1625 0.395Z" fill="#F1F2FD" />
                            <path d="M36.5569 0.395L27.1807 9.72833C26.6583 10.2483 26.6583 11.095 27.1807 11.615C27.7031 12.135 28.5537 12.135 29.076 11.615L38.4522 2.28167C38.9746 1.76167 38.9746 0.915 38.4522 0.395C37.9231 -0.131667 37.0793 -0.131667 36.5569 0.395Z" fill="#F1F2FD" />
                            <path d="M49.9514 0.395L40.5753 9.72833C40.0529 10.2483 40.0529 11.095 40.5753 11.615C41.0976 12.135 41.9482 12.135 42.4706 11.615L51.8467 2.28167C52.3691 1.76167 52.3691 0.915 51.8467 0.395C51.3176 -0.131667 50.4738 -0.131667 49.9514 0.395Z" fill="#F1F2FD" />
                            <path d="M63.3459 0.395L53.9698 9.72833C53.4474 10.2483 53.4474 11.095 53.9698 11.615C54.4922 12.135 55.3427 12.135 55.8651 11.615L65.2413 2.28167C65.7636 1.76167 65.7636 0.915 65.2413 0.395C64.7122 -0.131667 63.8683 -0.131667 63.3459 0.395Z" fill="#F1F2FD" />
                            <path d="M76.7405 0.395L67.3643 9.72833C66.8419 10.2483 66.8419 11.095 67.3643 11.615C67.8867 12.135 68.7373 12.135 69.2596 11.615L78.6358 2.28167C79.1582 1.76167 79.1582 0.915 78.6358 0.395C78.1067 -0.131667 77.2629 -0.131667 76.7405 0.395Z" fill="#F1F2FD" />
                            <path d="M90.1349 0.395L80.7587 9.72833C80.2363 10.2483 80.2363 11.095 80.7587 11.615C81.2811 12.135 82.1317 12.135 82.6541 11.615L92.0302 2.28167C92.5526 1.76167 92.5526 0.915 92.0302 0.395C91.5011 -0.131667 90.6573 -0.131667 90.1349 0.395Z" fill="#F1F2FD" />
                            <path d="M103.529 0.395L94.1533 9.72833C93.6309 10.2483 93.6309 11.095 94.1533 11.615C94.6756 12.135 95.5262 12.135 96.0486 11.615L105.425 2.28167C105.947 1.76167 105.947 0.915 105.425 0.395C104.896 -0.131667 104.052 -0.131667 103.529 0.395Z" fill="#F1F2FD" />
                            <path d="M116.924 0.395L107.548 9.72833C107.025 10.2483 107.025 11.095 107.548 11.615C108.07 12.135 108.921 12.135 109.443 11.615L118.819 2.28167C119.342 1.76167 119.342 0.915 118.819 0.395C118.29 -0.131667 117.446 -0.131667 116.924 0.395Z" fill="#F1F2FD" />
                            <path d="M130.318 0.395L120.942 9.72833C120.42 10.2483 120.42 11.095 120.942 11.615C121.465 12.135 122.315 12.135 122.838 11.615L132.214 2.28167C132.736 1.76167 132.736 0.915 132.214 0.395C131.685 -0.131667 130.841 -0.131667 130.318 0.395Z" fill="#F1F2FD" />
                        </svg>
                    </h5>
                    <h2 class="section-title__title"><?php echo get_field('category_title'); ?></h2>
                </div><!-- section-title -->
            <?php $category_thumb = get_field('category_thumb'); ?>
                <div class="category-one__slider eduact-owl__carousel owl-with-shadow owl-theme owl-carousel" data-owl-options='{
            "items": 4,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": true,
            "nav":false,
            "dots":true,
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "nav":true,
                    "dots":false,
                    "margin": 0
                },
                "670":{
                    "nav":true,
                    "dots":false,
                    "items": 2
                },
                "992":{
                    "items": 3
                },
                "1200":{
                    "items": 3
                },
                "1400":{
                    "items": 4,
                    "margin": 36
                }
            }
            }'>
            <?php if( have_rows('category_thumb') ):
                while( have_rows('category_thumb') ) : the_row();
            ?>
                    <div class="item">
                        <div class="category-one__item">
                            <div class="category-one__wrapper" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/category-shape.png);">
                                <div class="category-one__thumb"><img src="<?php the_sub_field('cat_thumb'); ?>" alt="eduact" /></div><!-- /.category-thumb -->
                                <div class="category-one__content">
                                    <div class="category-one__icon">
                                        <span class="icon-education"></span>
                                    </div><!-- /.category-icon -->
                                    <h3 class="category-one__title"><?php the_sub_field('category_title'); ?></h3><!-- /.category-title -->
                                    <p class="category-one__text"><?php the_sub_field('category_text'); ?></p><!-- /.category-content -->
                                </div>
                            </div>
                            <div class="category-one__hover">
                                <div class="category-one__hover__thumb">
                                    <img src="<?php the_sub_field('cat_thumb'); ?>" alt="eduact" />
                                </div><!-- /.category-thumb -->
                                <div class="category-one__hover__content">
                                    <div class="category-one__hover__icon">
                                        <span class="icon-education"></span>
                                    </div><!-- /.category-icon -->
                                    <h3 class="category-one__hover__title"><a href="about.html"><?php the_sub_field('category_title'); ?></a></h3><!-- /.category-title -->
                                    <p class="category-one__hover__text"><?php the_sub_field('category_text'); ?></p><!-- /.category-content -->
                                </div>
                            </div>
                        </div><!-- /.category-card-one -->
                    </div>
            <?php endwhile; ?>
            <?php endif; ?>
                    
                </div>
            </div>
        </section>
        <!-- Category End -->
        <!-- Course Start -->
        <section class="course-one" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/course-bg-1.png);">
            <div class="container">
                <div class="section-title text-center">
                    <h5 class="section-title__tagline">
                        Best Course
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133 13" fill="none">
                            <path d="M9.76794 0.395L0.391789 9.72833C-0.130596 10.2483 -0.130596 11.095 0.391789 11.615C0.914174 12.135 1.76472 12.135 2.28711 11.615L11.6633 2.28167C12.1856 1.76167 12.1856 0.915 11.6633 0.395C11.1342 -0.131667 10.2903 -0.131667 9.76794 0.395Z" fill="#F1F2FD" />
                            <path d="M23.1625 0.395L13.7863 9.72833C13.2639 10.2483 13.2639 11.095 13.7863 11.615C14.3087 12.135 15.1593 12.135 15.6816 11.615L25.0578 2.28167C25.5802 1.76167 25.5802 0.915 25.0578 0.395C24.5287 -0.131667 23.6849 -0.131667 23.1625 0.395Z" fill="#F1F2FD" />
                            <path d="M36.5569 0.395L27.1807 9.72833C26.6583 10.2483 26.6583 11.095 27.1807 11.615C27.7031 12.135 28.5537 12.135 29.076 11.615L38.4522 2.28167C38.9746 1.76167 38.9746 0.915 38.4522 0.395C37.9231 -0.131667 37.0793 -0.131667 36.5569 0.395Z" fill="#F1F2FD" />
                            <path d="M49.9514 0.395L40.5753 9.72833C40.0529 10.2483 40.0529 11.095 40.5753 11.615C41.0976 12.135 41.9482 12.135 42.4706 11.615L51.8467 2.28167C52.3691 1.76167 52.3691 0.915 51.8467 0.395C51.3176 -0.131667 50.4738 -0.131667 49.9514 0.395Z" fill="#F1F2FD" />
                            <path d="M63.3459 0.395L53.9698 9.72833C53.4474 10.2483 53.4474 11.095 53.9698 11.615C54.4922 12.135 55.3427 12.135 55.8651 11.615L65.2413 2.28167C65.7636 1.76167 65.7636 0.915 65.2413 0.395C64.7122 -0.131667 63.8683 -0.131667 63.3459 0.395Z" fill="#F1F2FD" />
                            <path d="M76.7405 0.395L67.3643 9.72833C66.8419 10.2483 66.8419 11.095 67.3643 11.615C67.8867 12.135 68.7373 12.135 69.2596 11.615L78.6358 2.28167C79.1582 1.76167 79.1582 0.915 78.6358 0.395C78.1067 -0.131667 77.2629 -0.131667 76.7405 0.395Z" fill="#F1F2FD" />
                            <path d="M90.1349 0.395L80.7587 9.72833C80.2363 10.2483 80.2363 11.095 80.7587 11.615C81.2811 12.135 82.1317 12.135 82.6541 11.615L92.0302 2.28167C92.5526 1.76167 92.5526 0.915 92.0302 0.395C91.5011 -0.131667 90.6573 -0.131667 90.1349 0.395Z" fill="#F1F2FD" />
                            <path d="M103.529 0.395L94.1533 9.72833C93.6309 10.2483 93.6309 11.095 94.1533 11.615C94.6756 12.135 95.5262 12.135 96.0486 11.615L105.425 2.28167C105.947 1.76167 105.947 0.915 105.425 0.395C104.896 -0.131667 104.052 -0.131667 103.529 0.395Z" fill="#F1F2FD" />
                            <path d="M116.924 0.395L107.548 9.72833C107.025 10.2483 107.025 11.095 107.548 11.615C108.07 12.135 108.921 12.135 109.443 11.615L118.819 2.28167C119.342 1.76167 119.342 0.915 118.819 0.395C118.29 -0.131667 117.446 -0.131667 116.924 0.395Z" fill="#F1F2FD" />
                            <path d="M130.318 0.395L120.942 9.72833C120.42 10.2483 120.42 11.095 120.942 11.615C121.465 12.135 122.315 12.135 122.838 11.615L132.214 2.28167C132.736 1.76167 132.736 0.915 132.214 0.395C131.685 -0.131667 130.841 -0.131667 130.318 0.395Z" fill="#F1F2FD" />
                        </svg>
                    </h5>
                    <h2 class="section-title__title">Featured Course On This Month</h2>
                </div><!-- section-title -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="course-one__item">
                            <div class="course-one__thumb">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/course-1-1.png" alt="eduact">
                                <a class="course-one__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                            </div><!-- /.course-thumb -->
                            <div class="course-one__content">
                                <div class="course-one__time">20 Hours</div>
                                <div class="course-one__ratings">
                                    <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                    <div class="course-one__ratings__reviews">(25 Reviews)</div>
                                </div>
                                <h3 class="course-one__title">
                                    <a href="management-consulting.html">Management Consultants in Competitive Markets</a>
                                </h3>
                                <div class="course-one__bottom">
                                    <div class="course-one__author">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/author-1.png" alt="eduact">
                                        <h5 class="course-one__author__name">Guy Hawkins</h5>
                                        <p class="course-one__author__designation">Project Manager</p>
                                    </div>
                                    <div class="course-one__meta">
                                        <h4 class="course-one__meta__price">$473.00</h4>
                                        <p class="course-one__meta__class">15 Lessons</p>
                                    </div>
                                </div>
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-one -->
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="course-one__item">
                            <div class="course-one__thumb">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/course-1-2.png" alt="eduact">
                                <a class="course-one__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                            </div><!-- /.course-thumb -->
                            <div class="course-one__content">
                                <div class="course-one__time">40 Hours</div>
                                <div class="course-one__ratings">
                                    <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                    <div class="course-one__ratings__reviews">(25 Reviews)</div>
                                </div>
                                <h3 class="course-one__title">
                                    <a href="web-development.html">The Ultimate Developer Course For Future Learner</a>
                                </h3>
                                <div class="course-one__bottom">
                                    <div class="course-one__author">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/author-2.png" alt="eduact">
                                        <h5 class="course-one__author__name">Devon Lane</h5>
                                        <p class="course-one__author__designation">ROR Developer</p>
                                    </div>
                                    <div class="course-one__meta">
                                        <h4 class="course-one__meta__price">$943.00</h4>
                                        <p class="course-one__meta__class">10 Lessons</p>
                                    </div>
                                </div>
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-one -->
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-one__item">
                            <div class="course-one__thumb">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/course-1-3.png" alt="eduact">
                                <a class="course-one__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                            </div><!-- /.course-thumb -->
                            <div class="course-one__content">
                                <div class="course-one__time">13 Hours</div>
                                <div class="course-one__ratings">
                                    <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                    <div class="course-one__ratings__reviews">(25 Reviews)</div>
                                </div>
                                <h3 class="course-one__title">
                                    <a href="frontend-development.html">The Special HTML & CSS Bootcamp Edition</a>
                                </h3>
                                <div class="course-one__bottom">
                                    <div class="course-one__author">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/author-3.png" alt="eduact">
                                        <h5 class="course-one__author__name">Darrell Steward</h5>
                                        <p class="course-one__author__designation">Fronted Developer</p>
                                    </div>
                                    <div class="course-one__meta">
                                        <h4 class="course-one__meta__price">$767.00</h4>
                                        <p class="course-one__meta__class">13 Lessons</p>
                                    </div>
                                </div>
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-one -->
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-one__item">
                            <div class="course-one__thumb">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/course-1-4.png" alt="eduact">
                                <a class="course-one__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                            </div><!-- /.course-thumb -->
                            <div class="course-one__content">
                                <div class="course-one__time">25 Hours</div>
                                <div class="course-one__ratings">
                                    <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                    <div class="course-one__ratings__reviews">(25 Reviews)</div>
                                </div>
                                <h3 class="course-one__title">
                                    <a href="uiux-design.html">Building Responsive User Interfaces to Implementing</a>
                                </h3>
                                <div class="course-one__bottom">
                                    <div class="course-one__author">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/author-4.png" alt="eduact">
                                        <h5 class="course-one__author__name">Jane Cooper</h5>
                                        <p class="course-one__author__designation">React JS Developer</p>
                                    </div>
                                    <div class="course-one__meta">
                                        <h4 class="course-one__meta__price">$739.65</h4>
                                        <p class="course-one__meta__class">15 Lessons</p>
                                    </div>
                                </div>
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-one -->
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-one__item">
                            <div class="course-one__thumb">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/course-1-5.png" alt="eduact">
                                <a class="course-one__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                            </div><!-- /.course-thumb -->
                            <div class="course-one__content">
                                <div class="course-one__time">12 Hours</div>
                                <div class="course-one__ratings">
                                    <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                    <div class="course-one__ratings__reviews">(25 Reviews)</div>
                                </div>
                                <h3 class="course-one__title">
                                    <a href="digital-photography.html">Photography Crash Course for Beginners</a>
                                </h3>
                                <div class="course-one__bottom">
                                    <div class="course-one__author">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/author-5.png" alt="eduact">
                                        <h5 class="course-one__author__name">Wade Warren</h5>
                                        <p class="course-one__author__designation">Finance</p>
                                    </div>
                                    <div class="course-one__meta">
                                        <h4 class="course-one__meta__price">$351.02</h4>
                                        <p class="course-one__meta__class">13 Lessons</p>
                                    </div>
                                </div>
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-one -->
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="course-one__item">
                            <div class="course-one__thumb">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/course-1-6.png" alt="eduact">
                                <a class="course-one__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                            </div><!-- /.course-thumb -->
                            <div class="course-one__content">
                                <div class="course-one__time">33 Hours</div>
                                <div class="course-one__ratings">
                                    <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                    <div class="course-one__ratings__reviews">(25 Reviews)</div>
                                </div>
                                <h3 class="course-one__title">
                                    <a href="online-business.html">Sales and Marketing For Online Businesses</a>
                                </h3>
                                <div class="course-one__bottom">
                                    <div class="course-one__author">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/course/author-6.png" alt="eduact">
                                        <h5 class="course-one__author__name">Guy Hawkins</h5>
                                        <p class="course-one__author__designation">Chief Executive Officer</p>
                                    </div>
                                    <div class="course-one__meta">
                                        <h4 class="course-one__meta__price">$475.22</h4>
                                        <p class="course-one__meta__class">13 Lessons</p>
                                    </div>
                                </div>
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-one -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Course End -->

        <!-- Counter Start -->
        <section class="counter-one" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/counter-bg-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="counter-one__left">
                            <h4 class="counter-one__left__title">Create Your Free Account</h4>
                            <div class="counter-one__left__content">
                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic.
                            </div>
                            <a href="contact.html" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Join Now<i class="icon-arrow"></i></a>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/shapes/counter-dot.png" alt="eduact">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="counter-one__shapes wow fadeInUp" data-wow-delay="200ms">
                            <svg viewBox="0 0 581 596" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M161.37 12.301C221.003 -53.0048 563.794 156.411 579.671 299.209C595.548 442.007 237.88 668.171 135.305 571.868C46.2938 488.252 -0.524429 189.658 161.37 12.301Z" fill="url(#paint0_linear_227_946)" />
                                <path d="M289.511 579.243C203.626 594.241 -34.778 302.771 4.28926 182.908C43.3565 63.0458 313.639 12.301 483.973 114.853C666.745 224.904 435.092 553.933 289.511 579.243Z" fill="url(#paint1_linear_227_946)" />
                                <defs>
                                    <linearGradient id="paint0_linear_227_946" x1="172.303" y1="27.9012" x2="521.418" y2="508.929" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#4F5DE4" stop-opacity="0" />
                                        <stop offset="0.269374" stop-color="#9EA6F0" stop-opacity="0.550859" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_227_946" x1="123.876" y1="84.092" x2="408.261" y2="553.853" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#FF7200" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="counter-one__area wow zoomIn" data-wow-delay="400ms">
                            <h5 class="counter-one__title">Register Now and<br> Get a <span>50% Discount</span></h5>
                            <ul class="counter-one__list list-unstyled" data-leading-zeros="true" data-enable-days="true" data-deadline-date="dynamicDate">
                                <!-- loading via js -->
                            </ul><!-- /.countdown-one__list list-unstyled -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter End -->
        <!-- Testimonial Start -->
        <section class="testimonial-one">
            <div class="container">
                <div class="section-title text-center">
                    <h5 class="section-title__tagline">
                        Testimonial
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133 13" fill="none">
                            <path d="M9.76794 0.395L0.391789 9.72833C-0.130596 10.2483 -0.130596 11.095 0.391789 11.615C0.914174 12.135 1.76472 12.135 2.28711 11.615L11.6633 2.28167C12.1856 1.76167 12.1856 0.915 11.6633 0.395C11.1342 -0.131667 10.2903 -0.131667 9.76794 0.395Z" fill="#F1F2FD" />
                            <path d="M23.1625 0.395L13.7863 9.72833C13.2639 10.2483 13.2639 11.095 13.7863 11.615C14.3087 12.135 15.1593 12.135 15.6816 11.615L25.0578 2.28167C25.5802 1.76167 25.5802 0.915 25.0578 0.395C24.5287 -0.131667 23.6849 -0.131667 23.1625 0.395Z" fill="#F1F2FD" />
                            <path d="M36.5569 0.395L27.1807 9.72833C26.6583 10.2483 26.6583 11.095 27.1807 11.615C27.7031 12.135 28.5537 12.135 29.076 11.615L38.4522 2.28167C38.9746 1.76167 38.9746 0.915 38.4522 0.395C37.9231 -0.131667 37.0793 -0.131667 36.5569 0.395Z" fill="#F1F2FD" />
                            <path d="M49.9514 0.395L40.5753 9.72833C40.0529 10.2483 40.0529 11.095 40.5753 11.615C41.0976 12.135 41.9482 12.135 42.4706 11.615L51.8467 2.28167C52.3691 1.76167 52.3691 0.915 51.8467 0.395C51.3176 -0.131667 50.4738 -0.131667 49.9514 0.395Z" fill="#F1F2FD" />
                            <path d="M63.3459 0.395L53.9698 9.72833C53.4474 10.2483 53.4474 11.095 53.9698 11.615C54.4922 12.135 55.3427 12.135 55.8651 11.615L65.2413 2.28167C65.7636 1.76167 65.7636 0.915 65.2413 0.395C64.7122 -0.131667 63.8683 -0.131667 63.3459 0.395Z" fill="#F1F2FD" />
                            <path d="M76.7405 0.395L67.3643 9.72833C66.8419 10.2483 66.8419 11.095 67.3643 11.615C67.8867 12.135 68.7373 12.135 69.2596 11.615L78.6358 2.28167C79.1582 1.76167 79.1582 0.915 78.6358 0.395C78.1067 -0.131667 77.2629 -0.131667 76.7405 0.395Z" fill="#F1F2FD" />
                            <path d="M90.1349 0.395L80.7587 9.72833C80.2363 10.2483 80.2363 11.095 80.7587 11.615C81.2811 12.135 82.1317 12.135 82.6541 11.615L92.0302 2.28167C92.5526 1.76167 92.5526 0.915 92.0302 0.395C91.5011 -0.131667 90.6573 -0.131667 90.1349 0.395Z" fill="#F1F2FD" />
                            <path d="M103.529 0.395L94.1533 9.72833C93.6309 10.2483 93.6309 11.095 94.1533 11.615C94.6756 12.135 95.5262 12.135 96.0486 11.615L105.425 2.28167C105.947 1.76167 105.947 0.915 105.425 0.395C104.896 -0.131667 104.052 -0.131667 103.529 0.395Z" fill="#F1F2FD" />
                            <path d="M116.924 0.395L107.548 9.72833C107.025 10.2483 107.025 11.095 107.548 11.615C108.07 12.135 108.921 12.135 109.443 11.615L118.819 2.28167C119.342 1.76167 119.342 0.915 118.819 0.395C118.29 -0.131667 117.446 -0.131667 116.924 0.395Z" fill="#F1F2FD" />
                            <path d="M130.318 0.395L120.942 9.72833C120.42 10.2483 120.42 11.095 120.942 11.615C121.465 12.135 122.315 12.135 122.838 11.615L132.214 2.28167C132.736 1.76167 132.736 0.915 132.214 0.395C131.685 -0.131667 130.841 -0.131667 130.318 0.395Z" fill="#F1F2FD" />
                        </svg>
                    </h5>
                    <h2 class="section-title__title">What Our Student Feedback</h2>
                </div><!-- section-title -->
                <div class="testimonial-one__area">
                    <div class="testimonial-one__carousel eduact-owl__carousel owl-with-shadow owl-theme owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 0,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": true,
                "nav":true,
                "dots":false,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"]
                }'>
                        <!-- Testimonial Item -->
                        <div class="item">
                            <div class="testimonial-one__item">
                                <div class="testimonial-one__author">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/resources/testimonial-1-author-1.png" alt="eduact">
                                </div><!-- testimonial-author -->
                                <div class="testimonial-one__content">
                                    <div class="testimonial-one__quote">
                                        Flexible Classes refers to the process of acquiring knowledge or skills through the use of digital technologies and the internet.
                                        Flexible Classes refers to the process flexible Classes refers to the process
                                    </div><!-- testimonial-quote -->
                                    <div class="testimonial-one__meta">
                                        <h5 class="testimonial-one__title">Savannah Nguyen</h5>
                                        <span class="testimonial-one__designation">UI/UX Designer</span>
                                    </div><!-- testimonial-meta -->
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <!-- Testimonial Item -->
                        <div class="item">
                            <div class="testimonial-one__item">
                                <div class="testimonial-one__author">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/resources/testimonial-1-author-2.png" alt="eduact">
                                </div><!-- testimonial-author -->
                                <div class="testimonial-one__content">
                                    <div class="testimonial-one__quote">
                                        Flexible Classes refers to the process of acquiring knowledge or skills through the use of digital technologies and the internet.
                                        Flexible Classes refers to the process flexible Classes refers to the process
                                    </div><!-- testimonial-quote -->
                                    <div class="testimonial-one__meta">
                                        <h5 class="testimonial-one__title">Christine eve</h5>
                                        <span class="testimonial-one__designation">Web Developer</span>
                                    </div><!-- testimonial-meta -->
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                        <!-- Testimonial Item -->
                        <div class="item">
                            <div class="testimonial-one__item">
                                <div class="testimonial-one__author">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/resources/testimonial-1-author-3.png" alt="eduact">
                                </div><!-- testimonial-author -->
                                <div class="testimonial-one__content">
                                    <div class="testimonial-one__quote">
                                        Flexible Classes refers to the process of acquiring knowledge or skills through the use of digital technologies and the internet.
                                        Flexible Classes refers to the process flexible Classes refers to the process
                                    </div><!-- testimonial-quote -->
                                    <div class="testimonial-one__meta">
                                        <h5 class="testimonial-one__title">Sarah Taylor</h5>
                                        <span class="testimonial-one__designation">Seo Expert</span>
                                    </div><!-- testimonial-meta -->
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item -->
                    </div>
                    <div class="testimonial-one__thumb wow fadeInUp" data-wow-delay="200ms">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/resources/testimonial-1.png" alt="eduact">
                        <svg viewBox="0 0 612 563" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M595.211 330.916C584.04 315.536 581.185 295.533 588.393 277.948C591.708 269.857 593.359 260.893 592.899 251.505C591.377 220.18 566.027 194.704 534.708 192.994C534.495 192.982 534.283 192.971 534.071 192.959C520.328 192.346 507.517 185.776 499.106 174.89C498.458 174.053 497.809 173.215 497.148 172.39C485.069 157.234 481.695 137.196 487.463 118.703C489.268 112.9 490.07 106.661 489.634 100.174C487.923 74.7337 467.02 54.3769 441.54 53.2801C426.665 52.6432 413.147 58.4459 403.521 68.129C386.44 85.3367 363.449 95.4207 339.207 95.1495C338.429 95.1377 337.638 95.1377 336.86 95.1377C332.79 95.1377 328.803 95.2674 321.631 94.4418C300.244 91.9768 280.473 82.2348 264.76 67.5039C244.483 48.4916 216.997 37.063 186.846 37.7471C129.15 39.0563 80.9264 88.6391 79.2159 146.325C77.9301 189.774 109.827 226.101 118.757 239.239C145.441 278.431 123.193 329.536 93.867 364.199C75.677 385.7 64.8598 413.652 65.3434 444.14C66.3697 509.161 119.548 562.153 184.581 562.99C207.784 563.285 229.501 557.046 248.021 545.995C285.428 523.668 327.033 509.161 370.031 502.167C393.635 498.323 415.883 490.456 436.043 479.275C458.739 466.69 485.128 461.914 510.702 466.337C516.117 467.268 521.708 467.705 527.429 467.575C573.659 466.537 611.16 428.513 611.584 382.279C611.773 363.067 605.663 345.316 595.211 330.916Z" fill="#4F5DE4" />
                            <path d="M103.524 314.265C122.402 295.39 122.402 264.788 103.524 245.913C84.6458 227.038 54.038 227.038 35.1597 245.913C16.2814 264.788 16.2814 295.39 35.1597 314.265C54.038 333.14 84.6458 333.14 103.524 314.265Z" fill="#4F5DE4" />
                            <path d="M519.408 173.899C529.715 173.899 538.07 165.546 538.07 155.241C538.07 144.936 529.715 136.582 519.408 136.582C509.101 136.582 500.746 144.936 500.746 155.241C500.746 165.546 509.101 173.899 519.408 173.899Z" fill="#4F5DE4" />
                            <path d="M404.941 42.6715C408.221 39.3921 408.221 34.0752 404.941 30.7958C401.661 27.5164 396.343 27.5164 393.063 30.7958C389.783 34.0752 389.783 39.3921 393.063 42.6715C396.343 45.9509 401.661 45.9509 404.941 42.6715Z" fill="#4F5DE4" />
                            <path d="M450.459 39.6567C457.747 32.3702 457.747 20.5565 450.459 13.27C443.171 5.98349 431.355 5.9835 424.067 13.27C416.78 20.5565 416.78 32.3703 424.067 39.6568C431.355 46.9433 443.171 46.9432 450.459 39.6567Z" fill="#4F5DE4" />
                            <path d="M469.475 508.914C476.947 508.914 483.005 502.857 483.005 495.386C483.005 487.914 476.947 481.858 469.475 481.858C462.002 481.858 455.944 487.914 455.944 495.386C455.944 502.857 462.002 508.914 469.475 508.914Z" fill="#4F5DE4" />
                            <path d="M341.696 525.638C343.481 525.638 344.929 524.191 344.929 522.406C344.929 520.621 343.481 519.175 341.696 519.175C339.911 519.175 338.464 520.621 338.464 522.406C338.464 524.191 339.911 525.638 341.696 525.638Z" fill="url(#paint0_linear_187_13357)" />
                        </svg>
                        <div class="testimonial-one__thumb-pen wow fadeInUp" data-wow-delay="400ms">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/shapes/testimonial-shape-1.png" alt="eduact">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->
        <!-- Team Start -->
        <section class="team-one" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/team-bg-1.png);">
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
                    <h5 class="section-title__tagline">
                        Team Member
                        <svg viewBox="0 0 170 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.4101 0.395L1.034 9.72833C0.511616 10.2483 0.511616 11.095 1.034 11.615C1.55639 12.135 2.40694 12.135 2.92932 11.615L12.3055 2.28167C12.8279 1.76167 12.8279 0.915 12.3055 0.395C11.7764 -0.131667 10.9325 -0.131667 10.4101 0.395Z" fill="white" />
                            <path d="M23.4652 0.395L14.0891 9.72833C13.5667 10.2483 13.5667 11.095 14.0891 11.615C14.6114 12.135 15.462 12.135 15.9844 11.615L25.3605 2.28167C25.8829 1.76167 25.8829 0.915 25.3605 0.395C24.8314 -0.131667 23.9876 -0.131667 23.4652 0.395Z" fill="white" />
                            <path d="M36.5203 0.395L27.1441 9.72833C26.6217 10.2483 26.6217 11.095 27.1441 11.615C27.6665 12.135 28.517 12.135 29.0394 11.615L38.4156 2.28167C38.938 1.76167 38.938 0.915 38.4156 0.395C37.8865 -0.131667 37.0426 -0.131667 36.5203 0.395Z" fill="white" />
                            <path d="M49.5753 0.395L40.1992 9.72833C39.6768 10.2483 39.6768 11.095 40.1992 11.615C40.7215 12.135 41.5721 12.135 42.0945 11.615L51.4706 2.28167C51.993 1.76167 51.993 0.915 51.4706 0.395C50.9415 -0.131667 50.0977 -0.131667 49.5753 0.395Z" fill="white" />
                            <path d="M62.6304 0.395L53.2542 9.72833C52.7318 10.2483 52.7318 11.095 53.2542 11.615C53.7766 12.135 54.6272 12.135 55.1495 11.615L64.5257 2.28167C65.0481 1.76167 65.0481 0.915 64.5257 0.395C63.9966 -0.131667 63.1527 -0.131667 62.6304 0.395Z" fill="white" />
                            <path d="M75.6854 0.395L66.3093 9.72833C65.7869 10.2483 65.7869 11.095 66.3093 11.615C66.8317 12.135 67.6822 12.135 68.2046 11.615L77.5807 2.28167C78.1031 1.76167 78.1031 0.915 77.5807 0.395C77.0517 -0.131667 76.2078 -0.131667 75.6854 0.395Z" fill="white" />
                            <path d="M88.7405 0.395L79.3643 9.72833C78.8419 10.2483 78.8419 11.095 79.3643 11.615C79.8867 12.135 80.7373 12.135 81.2596 11.615L90.6358 2.28167C91.1582 1.76167 91.1582 0.915 90.6358 0.395C90.1067 -0.131667 89.2629 -0.131667 88.7405 0.395Z" fill="white" />
                            <path d="M101.796 0.395L92.4194 9.72833C91.897 10.2483 91.897 11.095 92.4194 11.615C92.9418 12.135 93.7923 12.135 94.3147 11.615L103.691 2.28167C104.213 1.76167 104.213 0.915 103.691 0.395C103.162 -0.131667 102.318 -0.131667 101.796 0.395Z" fill="white" />
                            <path d="M114.85 0.395L105.474 9.72833C104.952 10.2483 104.952 11.095 105.474 11.615C105.997 12.135 106.847 12.135 107.37 11.615L116.746 2.28167C117.268 1.76167 117.268 0.915 116.746 0.395C116.217 -0.131667 115.373 -0.131667 114.85 0.395Z" fill="white" />
                            <path d="M127.906 0.395L118.529 9.72833C118.007 10.2483 118.007 11.095 118.529 11.615C119.052 12.135 119.902 12.135 120.425 11.615L129.801 2.28167C130.323 1.76167 130.323 0.915 129.801 0.395C129.272 -0.131667 128.428 -0.131667 127.906 0.395Z" fill="white" />
                            <path d="M140.961 0.395L131.584 9.72833C131.062 10.2483 131.062 11.095 131.584 11.615C132.107 12.135 132.957 12.135 133.48 11.615L142.856 2.28167C143.378 1.76167 143.378 0.915 142.856 0.395C142.327 -0.131667 141.483 -0.131667 140.961 0.395Z" fill="white" />
                            <path d="M154.016 0.395L144.639 9.72833C144.117 10.2483 144.117 11.095 144.639 11.615C145.162 12.135 146.012 12.135 146.535 11.615L155.911 2.28167C156.433 1.76167 156.433 0.915 155.911 0.395C155.382 -0.131667 154.538 -0.131667 154.016 0.395Z" fill="white" />
                            <path d="M167.071 0.395L157.695 9.72833C157.172 10.2483 157.172 11.095 157.695 11.615C158.217 12.135 159.067 12.135 159.59 11.615L168.966 2.28167C169.488 1.76167 169.488 0.915 168.966 0.395C168.437 -0.131667 167.593 -0.131667 167.071 0.395Z" fill="white" />
                        </svg>
                    </h5>
                    <h2 class="section-title__title">Meet Our Professional Team Members</h2>
                </div><!-- section-title -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__item">
                            <div class="team-one__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/team/team-1-1.jpg" alt="eduact">
                            </div><!-- /.team-image -->
                            <div class="team-one__content">
                                <h3 class="team-one__title">
                                    <a href="team-details.html">Aleesha Brown</a>
                                </h3><!-- /.team-name -->
                                <span class="team-one__designation">Web Developer</span><!-- /.team-designation -->
                                <div class="team-one__social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                </div><!-- /.team-social -->
                            </div><!-- /.team-content -->
                        </div><!-- /.team-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__item">
                            <div class="team-one__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/team/team-1-2.jpg" alt="eduact">
                            </div><!-- /.team-image -->
                            <div class="team-one__content">
                                <h3 class="team-one__title">
                                    <a href="team-details.html">Devon Lane</a>
                                </h3><!-- /.team-name -->
                                <span class="team-one__designation">UI/UX Designer</span><!-- /.team-designation -->
                                <div class="team-one__social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                </div><!-- /.team-social -->
                            </div><!-- /.team-content -->
                        </div><!-- /.team-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-one__item">
                            <div class="team-one__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/team/team-1-3.jpg" alt="eduact">
                            </div><!-- /.team-image -->
                            <div class="team-one__content">
                                <h3 class="team-one__title">
                                    <a href="team-details.html">Mike Hardson</a>
                                </h3><!-- /.team-name -->
                                <span class="team-one__designation">Designer</span><!-- /.team-designation -->
                                <div class="team-one__social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                </div><!-- /.team-social -->
                            </div><!-- /.team-content -->
                        </div><!-- /.team-one -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Team End -->
        <!-- Blog Start -->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <h5 class="section-title__tagline">
                        Latest Blog
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133 13" fill="none">
                            <path d="M9.76794 0.395L0.391789 9.72833C-0.130596 10.2483 -0.130596 11.095 0.391789 11.615C0.914174 12.135 1.76472 12.135 2.28711 11.615L11.6633 2.28167C12.1856 1.76167 12.1856 0.915 11.6633 0.395C11.1342 -0.131667 10.2903 -0.131667 9.76794 0.395Z" fill="#F1F2FD" />
                            <path d="M23.1625 0.395L13.7863 9.72833C13.2639 10.2483 13.2639 11.095 13.7863 11.615C14.3087 12.135 15.1593 12.135 15.6816 11.615L25.0578 2.28167C25.5802 1.76167 25.5802 0.915 25.0578 0.395C24.5287 -0.131667 23.6849 -0.131667 23.1625 0.395Z" fill="#F1F2FD" />
                            <path d="M36.5569 0.395L27.1807 9.72833C26.6583 10.2483 26.6583 11.095 27.1807 11.615C27.7031 12.135 28.5537 12.135 29.076 11.615L38.4522 2.28167C38.9746 1.76167 38.9746 0.915 38.4522 0.395C37.9231 -0.131667 37.0793 -0.131667 36.5569 0.395Z" fill="#F1F2FD" />
                            <path d="M49.9514 0.395L40.5753 9.72833C40.0529 10.2483 40.0529 11.095 40.5753 11.615C41.0976 12.135 41.9482 12.135 42.4706 11.615L51.8467 2.28167C52.3691 1.76167 52.3691 0.915 51.8467 0.395C51.3176 -0.131667 50.4738 -0.131667 49.9514 0.395Z" fill="#F1F2FD" />
                            <path d="M63.3459 0.395L53.9698 9.72833C53.4474 10.2483 53.4474 11.095 53.9698 11.615C54.4922 12.135 55.3427 12.135 55.8651 11.615L65.2413 2.28167C65.7636 1.76167 65.7636 0.915 65.2413 0.395C64.7122 -0.131667 63.8683 -0.131667 63.3459 0.395Z" fill="#F1F2FD" />
                            <path d="M76.7405 0.395L67.3643 9.72833C66.8419 10.2483 66.8419 11.095 67.3643 11.615C67.8867 12.135 68.7373 12.135 69.2596 11.615L78.6358 2.28167C79.1582 1.76167 79.1582 0.915 78.6358 0.395C78.1067 -0.131667 77.2629 -0.131667 76.7405 0.395Z" fill="#F1F2FD" />
                            <path d="M90.1349 0.395L80.7587 9.72833C80.2363 10.2483 80.2363 11.095 80.7587 11.615C81.2811 12.135 82.1317 12.135 82.6541 11.615L92.0302 2.28167C92.5526 1.76167 92.5526 0.915 92.0302 0.395C91.5011 -0.131667 90.6573 -0.131667 90.1349 0.395Z" fill="#F1F2FD" />
                            <path d="M103.529 0.395L94.1533 9.72833C93.6309 10.2483 93.6309 11.095 94.1533 11.615C94.6756 12.135 95.5262 12.135 96.0486 11.615L105.425 2.28167C105.947 1.76167 105.947 0.915 105.425 0.395C104.896 -0.131667 104.052 -0.131667 103.529 0.395Z" fill="#F1F2FD" />
                            <path d="M116.924 0.395L107.548 9.72833C107.025 10.2483 107.025 11.095 107.548 11.615C108.07 12.135 108.921 12.135 109.443 11.615L118.819 2.28167C119.342 1.76167 119.342 0.915 118.819 0.395C118.29 -0.131667 117.446 -0.131667 116.924 0.395Z" fill="#F1F2FD" />
                            <path d="M130.318 0.395L120.942 9.72833C120.42 10.2483 120.42 11.095 120.942 11.615C121.465 12.135 122.315 12.135 122.838 11.615L132.214 2.28167C132.736 1.76167 132.736 0.915 132.214 0.395C131.685 -0.131667 130.841 -0.131667 130.318 0.395Z" fill="#F1F2FD" />
                        </svg>
                    </h5>
                    <h2 class="section-title__title">Latest Updates & Articles</h2>
                </div><!-- section-title -->
                <div class="row">
                    <div class="col-xl-8 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__item">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="blog-one__image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/blog-1-1.jpg" alt="eduact">
                                        <a href="blog-details-right.html"></a>
                                    </div><!-- /.blog-image -->
                                </div>
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="blog-one__content">
                                        <div class="blog-one__cats"><a href="blog-list-right.html">Development</a></div>
                                        <h3 class="blog-one__title">
                                            <a href="blog-details-right.html">The Complete Web Developer Guideline 2023</a>
                                        </h3><!-- /.blog-title -->
                                        <div class="blog-one__meta">
                                            <div class="blog-one__meta__author">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/author-1.png" alt="eduact" />
                                                <a href="blog-list-right.html">Darrell Steward</a>
                                                Fronted Developer
                                            </div>
                                            <div class="blog-one__meta__date">26 Mar, 2023</div><!-- /.blog-date -->
                                        </div><!-- /.blog-meta -->
                                    </div><!-- /.blog-content -->
                                </div>
                            </div>
                        </div><!-- /.blog-card-one -->
                        <div class="blog-one__item">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="blog-one__image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/blog-1-2.jpg" alt="eduact">
                                        <a href="blog-details-left.html"></a>
                                    </div><!-- /.blog-image -->
                                </div>
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="blog-one__content">
                                        <div class="blog-one__cats"><a href="blog-list-left.html">Advice</a></div>
                                        <h3 class="blog-one__title">
                                            <a href="blog-details-left.html">The generated orem Ipsum is there fore always free from</a>
                                        </h3><!-- /.blog-title -->
                                        <div class="blog-one__meta">
                                            <div class="blog-one__meta__author">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/author-2.png" alt="eduact" />
                                                <a href="blog-list-left.html">Wade Warren</a>
                                                Advisor
                                            </div>
                                            <div class="blog-one__meta__date">28 Mar, 2023</div><!-- /.blog-date -->
                                        </div><!-- /.blog-meta -->
                                    </div><!-- /.blog-content -->
                                </div>
                            </div>
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 wow fadeInRight" data-wow-delay="200ms">
                        <div class="blog-one__cta" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/backgrounds/mail-bg-1.png);">
                            <div class="blog-one__cta__icon"><span class="icon-Newsletter"></span></div>
                            <h3 class="blog-one__cta__title">Subscribe to Our Newsletter for Daily Updates</h3>
                            <form class="blog-one__cta__email-box mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                                <div class="blog-one__cta__email-input-box">
                                    <input type="email" placeholder="Email Address" name="EMAIL">
                                </div>
                                <button type="submit" class="eduact-btn"><span class="eduact-btn__curve"></span>Subscribe</button>
                            </form>
                            <div class="mc-form__response"></div>
                            <p class="blog-one__cta__text">Get Latest News and keep Update</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 452 341" fill="none">
                                <path d="M-3 0.729858C66.0958 55.5037 149.949 88.4404 237.852 95.334L374.567 106.055C418.278 109.483 452 145.953 452 189.798V351.73H-3V0.729858Z" fill="url(#paint0_linear_214_20)" />
                                <defs>
                                    <linearGradient id="paint0_linear_214_20" x1="99.2396" y1="17.183" x2="271.488" y2="365.14" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#FF7200" stop-opacity="0.71" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->
        <!-- Call To Action Start -->
        <section class="cta-one">
            <div class="cta-one__bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/cta-bg-1.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-7 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="cta-one__left">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/shapes/cta-logo.png" alt="eduact" />
                            <h3 class="cta-one__left__title">Skills Certificate From the Edulerns</h3>
                            <a href="contact.html" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Get Start Now<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="400ms">
                        <div class="cta-one__svgshape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 284 403">
                                <path d="M81.5271 88.6591C78.9767 88.1958 78.2767 87.5302 78.3667 85.0406C78.4494 82.7552 78.725 80.4514 79.1862 78.2119C80.1747 73.4076 81.336 68.6382 82.4274 63.8559C83.7504 58.0568 87.0137 53.611 91.8498 50.2297C96.8183 46.7565 102.343 44.5649 108.207 43.2484C127.491 38.9147 146.245 40.4702 164.324 48.6466C170.378 51.3844 175.799 55.1039 180.451 59.8918C180.71 60.1584 180.98 60.4176 181.256 60.6677C181.331 60.7338 181.453 60.7504 181.939 60.9398C181.318 59.8973 180.903 59.0956 180.392 58.362C176.633 52.9582 171.723 48.8011 166.132 45.4217C159.177 41.2185 151.574 38.8044 143.61 37.4144C136.902 36.2432 130.138 35.9251 123.356 36.359C113.649 36.9786 104.267 38.9625 95.6993 43.8037C93.4907 45.0521 91.3721 46.5083 89.3803 48.0822C85.3288 51.2851 82.4991 55.3889 80.9759 60.3569C80.6488 61.4252 80.3126 62.4953 79.9065 63.5341C78.94 66.0052 77.6942 66.805 75.153 66.259C73.1631 65.8306 71.1842 65.2201 69.3045 64.4387C66.5538 63.2951 63.9024 61.9179 61.1995 60.6585C58.3846 59.3475 55.5512 58.0733 52.74 56.7514C51.6191 56.2237 50.4707 55.7107 49.4491 55.0212C47.3563 53.6054 46.884 51.6491 48.2823 49.5421C49.2323 48.1098 50.4046 46.7547 51.7147 45.6441C54.9357 42.9101 58.2486 40.279 61.6056 37.7123C69.8539 31.4057 78.2013 25.2297 86.3981 18.857C90.7639 15.4629 94.8357 11.69 99.161 8.24256C101.728 6.19615 104.44 4.29316 107.251 2.59794C111.988 -0.259305 117.105 -0.752061 122.318 1.10313C125.295 2.16218 128.237 3.38488 131.055 4.81166C139.316 8.99088 147.522 13.2823 155.725 17.5773C168.002 24.0052 180.433 30.1168 192.988 35.9858C203.006 40.6688 212.902 45.6092 222.835 50.4724C224.673 51.3715 226.499 52.3349 228.204 53.4602C232.197 56.0968 232.493 59.1342 229.031 62.4861C227.569 63.9018 225.904 65.1521 224.188 66.2571C216.865 70.9769 209.152 75.0072 201.402 78.9621C200.689 79.3262 199.917 79.613 199.142 79.8134C197.238 80.308 196.056 79.681 195.279 77.8479C195.096 77.4121 194.934 76.969 194.485 76.5627C194.485 77.026 194.485 77.4894 194.485 77.9527C194.485 84.7943 194.394 91.6359 194.506 98.4756C194.655 107.551 194.969 116.623 195.195 125.698C195.349 131.913 195.762 138.131 195.105 144.337C194.857 146.679 194.423 149.005 193.976 151.32C193.789 152.285 193.405 153.227 193.005 154.131C192.139 156.076 190.943 157.7 188.387 157.99C188.766 158.84 189.061 159.559 189.401 160.258C193.286 168.252 197.117 176.272 201.076 184.228C208.974 200.097 214.763 216.735 219.379 233.812C220.384 237.53 221.481 241.224 222.538 244.929C224.838 253.009 228.68 260.381 232.917 267.577C236.576 273.79 240.192 280.032 243.146 286.623C244.879 290.49 246.377 294.445 246.816 298.701C246.987 300.364 246.985 302.042 247.242 303.783C247.406 303.304 247.602 302.833 247.729 302.344C248.929 297.674 248.469 293.097 246.908 288.591C246.522 287.475 246.178 286.342 245.745 285.246C241.485 274.459 238.525 263.304 236.188 251.963C235.346 247.88 234.139 243.899 232.53 240.042C230.951 236.258 228.75 232.909 225.777 230.08C223.93 228.322 222.043 226.607 220.215 224.831C219.46 224.097 218.719 223.315 218.159 222.435C217.882 221.999 217.826 221.192 218.051 220.741C218.21 220.42 219.05 220.204 219.502 220.309C220.454 220.53 221.402 220.898 222.262 221.368C224.974 222.856 227.157 224.976 229.075 227.373C232.245 231.339 234.595 235.789 236.59 240.428C240.607 249.761 243.486 259.472 245.835 269.333C247.907 278.035 249.772 286.787 251.703 295.522C252.185 297.703 251.753 299.862 251.227 301.971C250.691 304.124 250 306.238 249.59 308.468C249.879 307.955 250.176 307.446 250.456 306.928C254.742 298.99 258.64 290.874 261.936 282.47C262.592 280.797 263.351 279.146 264.249 277.592C266.046 274.483 267.858 273.992 271.086 275.63C272.349 276.27 273.541 277.048 274.978 277.592C274.609 277.101 274.227 276.619 273.87 276.119C273.374 275.424 273.091 274.658 273.55 273.858C274.019 273.041 274.862 272.964 275.687 273.051C277.279 273.216 278.71 273.874 279.914 274.875C281.051 275.82 282.168 276.857 283.041 278.039C284.667 280.243 284.248 281.655 281.749 282.919C282.262 285.855 281.299 288.541 279.926 291.088C277.714 295.19 275.45 299.266 273.124 303.304C268.654 311.061 264.205 318.825 260.591 327.035C260.541 327.149 260.488 327.261 260.433 327.373C258.697 330.885 257.122 331.365 253.557 329.594C250.889 328.269 248.194 326.994 245.474 325.781C244.416 325.308 243.255 325.066 241.994 324.672C242.784 326.366 244.76 327.938 246.687 328.434C249.956 329.276 253.034 330.593 256.029 332.119C256.525 332.371 257.034 332.641 257.436 333.01C257.66 333.218 257.864 333.762 257.747 333.956C257.565 334.255 257.105 334.542 256.758 334.549C256.218 334.562 255.665 334.358 255.128 334.207C251.94 333.305 248.94 331.966 246.097 330.271C243.953 328.991 241.653 329.09 239.152 329.238C239.402 330.295 240.111 330.604 240.701 330.977C243.736 332.887 247.086 334.005 250.549 334.823C251.698 335.094 252.874 335.277 253.993 335.638C255.74 336.201 256.378 337.307 255.946 339.091C255.7 340.108 255.292 341.104 254.827 342.044C251.604 348.562 248.398 355.089 245.074 361.553C244.058 363.53 242.817 365.426 241.456 367.185C239.4 369.842 236.638 371.499 233.254 371.857C231.221 372.072 229.165 372.083 227.118 372.124C226.575 372.135 226.012 371.958 225.481 371.795C223.381 371.153 222.449 369.838 222.519 367.626C222.536 367.073 222.624 366.521 222.462 365.885C221.974 367.082 221.483 368.279 220.95 369.586C220.496 369.414 220.123 369.355 219.857 369.154C218.589 368.195 217.13 367.976 215.618 368.053C213.817 368.147 212.513 369.478 212.342 371.284C212.176 373.032 213.196 374.783 214.791 375.202C218.936 376.29 223.078 377.432 227.427 377.318C227.673 377.312 227.932 377.309 228.166 377.373C228.737 377.531 228.888 378.134 228.447 378.511C228.267 378.666 228.026 378.789 227.795 378.833C224.348 379.486 220.891 379.835 217.472 378.728C216.476 378.406 215.456 378.004 214.609 377.406C213.36 376.524 211.998 375.994 210.558 375.601C206.546 374.505 202.552 373.33 198.506 372.376C195.95 371.773 193.315 371.85 190.739 372.49C187.487 373.297 186.29 375.022 186.809 378.355C187.305 381.547 187.873 384.73 188.512 387.896C189.618 393.384 189.44 398.898 189.014 404.427C188.784 407.4 188.534 410.369 189.104 413.346C189.692 416.424 191.533 418.268 194.458 419.187C197.31 420.083 200.246 420.041 203.153 419.849C210.087 419.392 216.807 417.939 223.131 414.953C226.464 413.379 229.612 411.515 232.254 408.897C235.429 405.749 237.787 402.101 238.185 397.571C238.395 395.186 238.038 392.746 237.882 390.334C237.781 388.784 237.537 387.245 237.456 385.695C237.439 385.38 237.869 385.042 238.095 384.715C238.422 384.945 238.751 385.171 239.075 385.408C239.115 385.437 239.117 385.522 239.133 385.583C241.544 394.116 241.287 402.184 235.108 409.268C232.587 412.158 229.676 414.569 226.36 416.461C223.554 418.06 220.651 419.487 217.821 421.046C216.518 421.763 215.208 422.512 214.043 423.426C211.934 425.08 211.921 426.943 213.907 428.761C215.693 430.398 217.902 430.971 220.252 431.078C223.155 431.21 225.987 430.683 228.631 429.563C239.128 425.115 246.544 417.588 250.408 406.837C252.872 399.981 251.453 393.614 247.003 387.894C244.875 385.16 242.29 382.953 239.323 381.181C238.683 380.799 238.007 380.46 237.426 380.001C237.131 379.767 236.809 379.26 236.877 378.964C236.941 378.68 237.472 378.423 237.845 378.316C238.25 378.201 238.716 378.32 239.143 378.25C239.971 378.114 240.789 377.919 241.612 377.748C241.634 377.608 241.656 377.467 241.68 377.327C240.927 376.976 240.203 376.489 239.411 376.301C237.783 375.917 236.116 375.707 234.47 375.4C233.766 375.27 232.778 375.386 232.653 374.45C232.506 373.352 233.57 373.238 234.308 373.052C236.778 372.429 239.236 371.8 241.842 372.4C244.622 373.039 246.314 374.692 246.994 377.425C247.159 378.087 247.275 378.763 247.398 379.434C247.824 381.769 248.508 384.018 249.572 386.151C251.097 389.21 252.572 392.292 254.097 395.351C254.507 396.173 255.02 396.942 255.595 397.924C256.185 397.131 256.19 396.405 256.277 395.715C256.626 392.889 256.176 390.133 255.487 387.408C255.014 385.542 254.441 383.7 253.974 381.832C253.781 381.056 253.708 380.243 253.66 379.442C253.625 378.866 253.778 378.184 254.452 378.177C254.913 378.171 255.512 378.502 255.812 378.875C256.269 379.443 256.561 380.159 256.854 380.843C259.128 386.175 260.205 391.751 260.214 397.541C260.214 397.892 260.214 398.244 260.214 398.828C261.01 398.345 261.113 397.716 261.219 397.164C261.866 393.812 262.643 390.475 263.059 387.094C264.198 377.842 262.925 368.733 261.026 359.698C260.146 355.504 258.987 351.371 258.105 347.177C257.622 344.881 257.364 342.525 257.179 340.183C257.109 339.3 257.396 338.322 257.756 337.489C258.234 336.383 259.386 336.226 260.161 337.155C260.745 337.855 261.19 338.71 261.545 339.56C262.95 342.912 263.547 346.475 264.145 350.029C265.405 357.51 266.399 365.023 266.684 372.617C267.129 384.422 265.091 395.763 260.291 406.578C259.106 409.248 257.916 411.921 256.547 414.499C252.558 422.015 249.704 429.936 247.749 438.203C246.046 445.397 244.304 452.583 242.615 459.781C242.397 460.715 242.132 461.329 240.884 460.838C240.918 460.59 240.93 460.305 240.993 460.031C243.341 449.668 245.665 439.3 248.673 429.101C249.998 424.61 251.997 420.405 254.007 416.196C256.069 411.879 258.037 407.518 260.029 403.169C260.282 402.616 260.435 402.016 260.637 401.435C258.737 400.849 258.542 400.63 258.645 398.648C258.847 394.767 258.248 390.988 257.26 387.252C257.467 389.128 257.791 390.999 257.846 392.88C257.894 394.484 257.653 396.096 257.495 397.701C257.453 398.122 257.3 398.556 257.098 398.931C256.582 399.887 255.764 400.077 254.965 399.349C254.329 398.769 253.833 398.038 253.129 397.203C253.069 397.708 252.958 398.085 252.99 398.449C253.374 402.849 252.424 406.99 250.491 410.908C246.4 419.199 240.26 425.531 232.043 429.78C228.349 431.688 224.399 432.826 220.206 432.582C218.563 432.486 216.895 432.047 215.346 431.473C214.282 431.08 213.273 430.309 212.467 429.486C210.238 427.211 210.346 424.567 212.77 422.504C213.942 421.506 215.335 420.767 216.636 419.925C217.141 419.597 217.672 419.311 218.073 418.72C217.558 418.851 217.04 418.971 216.527 419.114C210.807 420.717 204.99 421.613 199.039 421.42C197.679 421.375 196.303 421.223 194.978 420.925C190.3 419.87 187.755 417.049 187.398 412.243C187.206 409.652 187.421 407.03 187.485 404.425C187.564 401.257 187.946 398.071 187.709 394.93C187.41 390.979 186.625 387.065 186.033 383.137C185.783 381.479 185.445 379.833 185.23 378.169C184.769 374.599 186.235 372.282 189.673 371.203C192.709 370.25 195.836 370.237 198.897 370.886C202.232 371.592 205.506 372.596 208.805 373.477C209.512 373.666 210.214 373.882 211.125 374.144C211.017 373.411 210.92 372.891 210.866 372.365C210.512 368.787 213.093 366.207 216.674 366.621C217.775 366.748 218.854 367.068 220.149 367.343C220.392 366.72 220.673 366.054 220.913 365.374C223.761 357.315 227.467 349.667 231.925 342.38C232.408 341.59 232.972 340.836 233.581 340.137C233.777 339.911 234.373 339.727 234.543 339.852C234.83 340.063 235.087 340.553 235.056 340.896C235.001 341.499 234.782 342.11 234.52 342.665C233.538 344.745 232.469 346.782 231.514 348.872C229.369 353.559 227.223 358.248 225.185 362.982C224.629 364.276 224.366 365.72 224.129 367.121C223.802 369.059 224.386 370.123 226.257 370.392C232.5 371.289 237.459 370.241 240.671 365.703C242.242 363.482 243.576 361.074 244.824 358.65C247.586 353.292 250.233 347.876 252.909 342.474C253.432 341.417 253.945 340.345 254.333 339.234C254.799 337.894 254.537 337.431 253.184 337.026C252.234 336.741 251.251 336.57 250.283 336.348C246.751 335.539 243.339 334.406 240.229 332.51C239.44 332.03 238.659 331.472 238.033 330.8C236.912 329.598 237.318 328.302 238.9 327.816C239.37 327.673 239.878 327.64 240.37 327.574C240.783 327.518 241.201 327.489 241.79 327.43C241.291 326.811 240.802 326.388 240.561 325.854C240.302 325.279 240.059 324.544 240.203 323.975C240.398 323.203 241.252 323.165 241.939 323.275C242.915 323.429 243.929 323.562 244.829 323.937C247.633 325.108 250.393 326.386 253.168 327.629C254.072 328.035 254.937 328.555 255.872 328.861C257.089 329.258 257.686 328.975 258.393 327.897C258.63 327.535 258.836 327.145 259.011 326.75C263.467 316.661 269.111 307.214 274.601 297.679C276.274 294.774 277.788 291.775 279.291 288.776C280.016 287.328 280.445 285.761 280.329 284.095C280.259 283.097 279.908 282.459 278.89 281.962C276.887 280.986 275.022 279.734 273.086 278.624C271.849 277.914 270.627 277.158 269.324 276.59C267.906 275.97 267.143 276.191 266.248 277.432C265.563 278.383 264.975 279.425 264.497 280.497C263.408 282.937 262.406 285.414 261.383 287.883C257.162 298.067 251.889 307.722 246.571 317.356C246.303 317.844 246.016 318.355 245.62 318.726C245.351 318.974 244.793 319.18 244.51 319.061C244.26 318.954 244.069 318.358 244.104 318.004C244.159 317.463 244.416 316.937 244.618 316.417C245.337 314.563 246.073 312.716 246.79 310.86C247.007 310.298 247.178 309.717 247.145 309.053C246.823 309.619 246.555 310.226 246.169 310.743C244.91 312.431 243.771 314.249 242.286 315.714C239.85 318.119 236.82 318.767 233.492 317.847C229.481 316.74 225.92 314.749 222.574 312.326C214.106 306.19 207.68 298.293 202.614 289.22C194.919 275.434 188.936 260.921 184.367 245.826C182.711 240.358 181.214 234.84 179.711 229.326C179.371 228.079 179.279 226.759 179.132 225.467C179.066 224.878 179.27 224.233 179.927 224.194C180.321 224.172 180.899 224.511 181.12 224.86C181.644 225.695 182.097 226.601 182.417 227.533C183.966 232.06 185.489 236.594 186.969 241.143C190.702 252.627 195.072 263.846 200.731 274.536C204.042 280.791 208.16 286.46 213.192 291.439C218.585 296.775 224.017 302.074 229.468 307.349C231.661 309.469 233.989 311.44 236.701 312.892C240.199 314.764 241.858 314.302 243.532 310.697C245.851 305.699 246 300.49 244.625 295.21C243.652 291.463 242.204 287.885 240.41 284.47C237.783 279.464 235.22 274.406 232.26 269.594C226.012 259.439 221.635 248.569 218.631 237.054C215.399 224.665 211.829 212.35 206.706 200.588C202.837 191.706 198.537 183.009 194.399 174.244C191.402 167.893 188.17 161.648 185.39 155.203C182.875 149.373 181.247 143.235 180.596 136.872C180.187 132.854 179.797 128.831 179.218 124.838C178.511 119.953 176.508 115.557 173.662 111.539C170.777 107.467 167.532 103.705 163.865 100.316C163.157 99.6633 162.351 99.1173 161.588 98.5216C161.463 98.5841 161.338 98.6466 161.211 98.7091C161.257 99.474 161.254 100.244 161.355 101.002C162.441 109.153 163.056 117.34 162.599 125.553C162.277 131.319 161.56 137.061 161.039 142.816C160.467 149.126 159.793 155.433 159.387 161.754C158.946 168.625 160.214 175.272 162.904 181.597C166.042 188.973 169.36 196.271 172.556 203.624C173.643 206.13 174.661 208.671 175.591 211.239C176.945 214.979 177.09 218.811 175.823 222.587C174.599 226.235 173.173 229.817 171.843 233.43C170.77 236.344 169.66 239.245 168.655 242.184C166.867 247.411 166.803 252.724 168.515 257.946C170.72 264.674 173.05 271.366 175.534 277.995C181.84 294.815 187.896 311.715 192.711 329.035C193.894 333.29 194.965 337.563 195.347 341.985C195.65 345.48 195.529 348.944 194.757 352.366C193.348 358.623 189.598 361.866 183.204 362.385C179.602 362.677 176.135 362.021 172.804 360.695C163.681 357.067 155.681 351.682 148.456 345.074C140.834 338.102 134.938 329.852 130.21 320.719C124.319 309.34 119.011 297.685 114.267 285.792C108.321 270.892 101.919 256.205 94.9918 241.737C92.4709 236.473 90.3248 231.029 88.0739 225.639C87.3003 223.788 86.3651 222.078 85.1156 220.499C82.7931 217.561 80.7921 214.411 79.5463 210.851C79.223 209.928 79.0484 208.921 79.0135 207.944C78.9969 207.492 79.3828 206.797 79.7687 206.626C80.1656 206.45 80.9575 206.606 81.2754 206.92C82.0122 207.65 82.7233 208.491 83.1606 209.419C84.0058 211.214 84.7408 213.072 85.3655 214.955C86.8299 219.368 89.0073 223.31 92.0226 226.904C96.7393 232.525 101.142 238.401 104.774 244.811C109.182 252.588 112.203 260.941 114.923 269.412C118.171 279.528 121.313 289.677 124.615 299.777C125.675 303.019 126.996 306.185 128.363 309.312C130.897 315.106 134.333 320.34 138.502 325.101C147.162 334.991 157.02 343.487 168.045 350.637C172.019 353.213 176.159 355.477 180.605 357.13C182.651 357.889 184.751 358.439 186.972 358.34C189.581 358.222 190.845 357.102 190.623 354.482C190.425 352.153 189.945 349.803 189.256 347.565C187.092 340.553 185.138 333.492 183.722 326.287C182.75 321.348 181.849 316.393 180.763 311.48C178.494 301.211 175.262 291.218 171.841 281.286C170.303 276.822 168.758 272.359 167.196 267.904C165.579 263.295 163.297 259.046 160.364 255.129C154.58 247.403 149.301 239.354 144.876 230.76C143.967 228.993 142.943 227.283 141.94 225.566C137.492 217.947 131.978 211.147 125.819 204.867C120.145 199.079 114.908 192.939 110.318 186.256C109.686 185.335 109.026 184.415 108.539 183.417C107.749 181.797 108.442 180.841 110.233 181.087C111.205 181.222 112.174 181.532 113.087 181.902C118.175 183.961 123.386 183.965 128.67 182.928C128.771 182.908 128.856 182.796 129.051 182.648C128.235 182.648 127.515 182.608 126.802 182.654C120.652 183.066 114.869 181.738 109.706 178.434C99.2749 171.756 91.396 162.832 86.8061 151.213C85.1505 147.021 84.4854 142.585 83.947 138.135C82.8298 128.892 83.122 119.644 83.8845 110.397C84.5331 102.53 85.202 94.6586 86.9622 86.9418C87.8497 83.0531 87.2691 83.8235 90.7878 82.4463C96.6841 80.1388 102.841 79.032 109.118 78.4547C115.461 77.87 121.784 77.9435 128.095 78.815C142.839 80.8504 155.965 86.3976 166.889 96.7031C169.965 99.6045 172.958 102.594 176.003 105.529C176.66 106.161 177.375 106.735 178.119 107.382C179.007 106.393 179.057 105.323 179.117 104.3C179.396 99.5861 179.621 94.8682 179.885 90.1521C180.179 84.8752 180.51 79.5983 181.739 74.4354C182.068 73.0527 182.572 71.7068 183.075 70.3757C183.319 69.7285 183.784 69.1456 184.589 69.2008C185.399 69.2559 185.804 69.8884 185.903 70.5779C186.131 72.1683 186.375 73.7753 186.37 75.3749C186.364 77.1069 186.074 78.8389 185.925 80.5728C185.855 81.3781 185.838 82.1871 185.78 82.9924C185.706 84.0055 185.938 84.7796 186.989 85.2521C187.577 85.5169 188.025 86.0942 188.729 86.6936C188.889 84.4265 189.072 82.3029 189.183 80.1756C189.35 76.9488 189.565 73.7183 189.581 70.4878C189.611 65.1447 189.519 59.7998 189.427 54.4567C189.418 53.8941 189.241 53.1403 188.856 52.8075C186.257 50.5625 186.52 45.5173 188.595 42.8347C189.269 41.9632 189.66 41.0586 189.892 40.0216C190.013 39.481 190.179 38.9331 190.427 38.4404C190.667 37.9623 191.038 37.5486 191.422 37.0062C190.897 36.7249 190.434 36.4418 189.941 36.2211C171.966 28.1256 154.67 18.6879 137.17 9.64912C133.143 7.56962 129.067 5.5655 124.926 3.7287C122.903 2.83145 120.707 2.22469 118.529 1.79078C115.319 1.15093 112.229 1.86064 109.296 3.26169C105.96 4.85395 103.016 7.04009 100.184 9.38068C94.7677 13.8559 89.4869 18.504 83.9452 22.8174C76.1452 28.8886 68.1358 34.6914 60.2661 40.6743C57.4971 42.7795 54.8291 45.0264 52.2071 47.3099C51.191 48.1943 50.3109 49.292 49.574 50.4264C48.6719 51.8165 48.9585 52.8112 50.32 53.7764C50.8731 54.1699 51.4868 54.4898 52.1042 54.7803C57.6165 57.3636 63.1233 59.9579 68.6614 62.4897C70.2948 63.2362 72.011 63.8044 73.6996 64.4222C74.1608 64.5913 74.6606 64.6796 75.1494 64.7476C77.3286 65.0491 77.8669 64.7219 78.6295 62.6313C78.8849 61.9308 79.1127 61.2192 79.3185 60.5022C81.0843 54.3409 84.7353 49.5237 89.8323 45.7379C95.8187 41.2921 102.542 38.4183 109.769 36.8168C125.203 33.3933 140.507 33.9026 155.57 38.8927C163.969 41.6745 171.359 46.1442 177.555 52.5023C179.865 54.8723 181.939 57.4298 183.376 60.4397C183.749 61.2192 184.097 62.043 184.245 62.8832C184.324 63.3282 184.08 64.0048 183.742 64.2898C183.52 64.4773 182.763 64.2898 182.428 64.0324C181.695 63.4679 181.054 62.7747 180.42 62.0926C176.227 57.5806 171.356 53.9769 165.889 51.1545C158.023 47.0911 149.669 44.6274 140.919 43.3973C134.55 42.5019 128.156 42.285 121.754 42.7189C114.278 43.2263 106.976 44.6439 100.014 47.5306C97.0718 48.7496 94.3304 50.3198 91.7782 52.2338C87.8461 55.1812 85.1505 59.0019 84.0315 63.7658C82.5432 70.1109 81.2533 76.5038 79.9561 82.8913C79.6915 84.1949 79.5169 85.6051 80.5698 87.0429C81.2552 86.6844 81.9479 86.3442 82.6149 85.9618C82.9879 85.7467 83.2855 85.3642 83.6769 85.2355C83.9672 85.1381 84.4156 85.2374 84.671 85.4194C84.8382 85.5389 84.908 86.017 84.8088 86.2413C84.5111 86.9197 84.1289 87.5633 83.7486 88.2031C80.6378 93.4377 77.3341 98.5694 74.4438 103.923C68.8708 114.251 64.6355 125.117 62.155 136.626C60.6409 143.644 59.8325 150.733 60.1852 157.917C60.606 166.511 62.8367 174.588 67.399 181.941C68.9388 184.423 70.6311 186.811 72.1562 189.301C73.1263 190.884 74.0597 192.52 74.7525 194.236C76.0901 197.547 76.0038 199.803 74.7433 203.094C75.6914 204.309 75.6675 204.512 74.306 205.238C71.9485 206.496 69.5691 207.711 67.2061 208.959C49.7027 218.221 36.6403 231.998 26.7788 248.959C19.9288 260.739 15.1092 273.389 11.3131 286.438C7.13656 300.792 4.27935 315.417 2.71753 330.284C1.78778 339.133 1.33945 348.016 1.60771 356.913C1.99357 369.746 3.3496 382.453 7.04469 394.82C10.0324 404.819 14.547 414.026 21.2095 422.107C26.7292 428.802 33.434 433.742 42.024 435.776C47.325 437.03 52.7087 437.379 58.1365 437.175C58.8807 437.147 59.623 437.076 60.7218 437C60.1981 436.605 59.9335 436.333 59.612 436.176C57.6018 435.197 55.5604 434.279 53.5613 433.275C43.8633 428.41 36.6201 421.011 31.2548 411.662C26.6943 403.715 23.8407 395.127 21.6615 386.287C19.1865 376.25 17.6394 366.058 16.6986 355.769C15.7064 344.916 15.4363 334.049 16.0775 323.168C16.9852 307.744 18.8723 292.468 23.4953 277.651C26.4554 268.162 30.4757 259.165 36.328 251.068C39.4773 246.71 43.0585 242.755 47.4114 239.556C50.5479 237.25 53.9288 235.465 57.8058 234.733C62.2616 233.891 66.3241 234.77 69.9917 237.438C72.7993 239.479 74.9711 242.105 76.8894 244.962C79.6419 249.058 81.7954 253.473 83.6034 258.044C86.2989 264.861 88.8585 271.734 91.5209 278.567C102.081 305.657 118.827 328.188 141.395 346.486C149.735 353.247 158.446 359.373 168.144 364.041C170.156 365.01 172.067 366.191 174.035 367.251C180.565 370.772 183.961 376.373 185.085 383.584C186.21 390.81 186.311 398.078 186.074 405.35C185.91 410.377 185.493 415.4 185.05 420.414C184.69 424.505 183.898 428.526 182.538 432.426C179.823 440.216 174.558 445.458 166.839 448.278C161.47 450.24 155.883 451.082 150.211 451.266C143.875 451.472 137.525 451.654 131.191 451.483C121.626 451.226 112.063 450.74 102.507 450.196C89.9003 449.479 77.4259 447.563 64.9369 445.787C58.1714 444.825 51.3968 443.851 44.5248 444.059C42.0277 444.134 39.5582 444.347 37.1658 445.098C32.5042 446.559 30.0807 449.663 29.8161 454.535C29.7242 456.21 29.7389 457.891 29.6966 459.569C29.6856 459.994 29.647 460.417 29.6158 460.915C29.1895 460.945 28.8404 460.967 28.5207 460.989C28.4215 460.82 28.302 460.711 28.3039 460.608C28.3884 457.819 28.2561 455 28.6346 452.252C29.1803 448.299 31.648 445.68 35.2916 444.143C38.4502 442.81 41.798 442.557 45.1587 442.481C50.2704 442.367 55.3363 442.963 60.3929 443.627C70.9912 445.017 81.5639 446.633 92.1879 447.765C100.587 448.661 109.041 449.106 117.484 449.503C125.183 449.865 132.896 449.994 140.604 450.034C146.196 450.062 151.794 449.887 157.345 449.041C160.734 448.525 164.048 447.74 167.24 446.462C173.998 443.757 178.56 438.962 181.01 432.119C182.402 428.228 183.117 424.196 183.569 420.112C184.466 412.006 184.751 403.866 184.569 395.717C184.457 390.683 184.133 385.664 182.871 380.743C181.655 376.002 179.102 372.253 174.931 369.671C172.925 368.428 170.918 367.154 168.793 366.146C152.673 358.5 139.061 347.44 126.456 335.037C109.831 318.68 97.8491 299.31 89.4832 277.616C86.5543 270.022 83.6843 262.401 80.4926 254.918C78.9914 251.399 76.9629 248.065 74.8517 244.859C73.5048 242.812 71.7299 240.97 69.8704 239.354C66.0191 236.009 61.5174 235.199 56.6059 236.594C52.7602 237.688 49.4565 239.742 46.4339 242.288C41.1843 246.71 37.1015 252.092 33.671 257.988C28.3388 267.149 24.8531 277.026 22.4443 287.304C20.3147 296.396 19.0156 305.618 18.209 314.918C17.542 322.606 17.1212 330.304 17.2719 338.015C17.6247 356.102 19.6771 373.97 24.6271 391.426C26.5142 398.08 28.9874 404.504 32.3903 410.555C38.0515 420.625 45.98 428.235 56.5379 433.04C58.1769 433.786 59.8086 434.553 61.4292 435.34C61.9271 435.583 62.4361 435.858 62.8422 436.228C63.5257 436.851 63.432 437.655 62.6107 438.05C62.065 438.313 61.4292 438.469 60.821 438.519C53.3867 439.129 46.0425 438.705 38.8728 436.482C33.1106 434.696 28.1973 431.486 23.9087 427.309C17.305 420.874 12.5919 413.16 8.97033 404.75C5.30648 396.245 3.18607 387.311 1.85025 378.177C0.407865 368.312 -0.172765 358.387 0.0440526 348.427C0.262708 338.35 1.13549 328.32 2.69548 318.358C4.65786 305.817 7.38646 293.445 11.2377 281.341C15.4546 268.09 20.7189 255.299 28.2451 243.531C35.1814 232.687 43.6942 223.273 53.9343 215.464C58.9909 211.609 64.5602 208.562 70.1791 205.611C71.1952 205.078 72.2866 204.71 72.8728 203.478C73.6886 201.768 74.4548 200.117 74.1957 198.15C73.9311 196.15 73.3634 194.252 72.3142 192.535C71.0831 190.52 69.8006 188.534 68.4813 186.578C64.5198 180.703 61.3851 174.47 59.9023 167.482C58.6675 161.662 58.3258 155.784 58.7337 149.864C59.9648 132.073 66.0816 115.834 74.5724 100.369C76.4558 96.9385 78.5743 93.64 80.5845 90.2789C80.8913 89.7365 81.1964 89.218 81.5271 88.6591ZM233.91 238.962C233.695 238.254 233.478 237.547 233.263 236.839C233.121 236.897 232.978 236.956 232.837 237.015C233.206 237.655 233.575 238.293 233.944 238.933C234.001 239.233 234.011 239.554 234.125 239.83C235.949 244.27 237.151 248.891 238.115 253.581C240.322 264.306 243.284 274.81 247.315 285C247.494 285.45 247.694 285.892 247.992 286.589C248.023 286.123 248.08 285.938 248.039 285.774C245.994 277.329 244.045 268.859 241.858 260.45C240.107 253.717 237.834 247.139 235.034 240.757C234.755 240.119 234.288 239.56 233.91 238.962ZM110.287 182.617C110.184 182.715 110.081 182.812 109.978 182.908C110.478 183.678 110.959 184.461 111.479 185.217C115.939 191.684 120.951 197.685 126.46 203.285C133.021 209.958 138.903 217.174 143.592 225.31C144.461 226.818 145.36 228.313 146.153 229.859C150.512 238.344 155.693 246.309 161.41 253.931C164.572 258.147 167.04 262.712 168.761 267.685C170.551 272.85 172.344 278.015 174.114 283.187C177.636 293.482 180.815 303.875 183.022 314.541C184.179 320.138 185.276 325.748 186.373 331.356C187.884 339.065 191.075 346.328 192.404 354.348C192.639 353.807 192.856 353.495 192.913 353.155C193.269 351.016 193.76 348.882 193.888 346.727C194.212 341.259 193.012 335.98 191.575 330.749C186.717 313.054 180.55 295.8 174.117 278.631C171.635 272.001 169.303 265.31 167.086 258.588C165.199 252.87 165.316 247.071 167.258 241.364C168.339 238.19 169.596 235.077 170.757 231.931C171.982 228.611 173.274 225.312 174.386 221.953C175.473 218.669 175.404 215.319 174.209 212.065C173.142 209.151 172.006 206.255 170.77 203.409C167.824 196.628 164.781 189.889 161.816 183.115C158.376 175.255 157.208 167.007 157.961 158.505C158.722 149.904 159.648 141.316 160.535 132.726C161.511 123.284 161.349 113.861 160.201 104.446C159.975 102.596 159.743 100.739 159.694 98.8801C159.64 96.9201 160.778 96.2913 162.474 97.2989C163.374 97.8339 164.245 98.4848 164.963 99.2405C167.488 101.895 170.014 104.558 172.407 107.332C177.956 113.764 180.826 121.271 181.467 129.743C181.809 134.255 182.594 138.734 183.2 143.226C183.25 143.599 183.472 143.949 183.613 144.309C183.951 135.653 185.14 127.155 186.085 118.636C186.954 110.789 187.724 102.932 187.874 95.0318C187.909 93.2336 187.801 91.4262 187.645 89.6336C187.518 88.181 187.139 86.8278 185.55 86.1751C184.754 85.8478 184.358 85.0921 184.301 84.228C184.251 83.487 184.22 82.735 184.277 81.9959C184.449 79.7656 184.677 77.539 184.865 75.3106C185.002 73.654 184.854 72.7659 184.297 71.6535C184.185 71.8153 184.045 71.9477 183.986 72.1095C183.817 72.5765 183.667 73.0509 183.536 73.5308C182.45 77.5078 181.954 81.5803 181.702 85.675C181.374 91.0089 181.217 96.3538 180.892 101.69C180.78 103.539 180.532 105.411 180.073 107.204C179.608 109.011 178.298 109.379 176.791 108.292C176.039 107.75 175.385 107.069 174.713 106.424C171.484 103.322 168.317 100.156 165.033 97.115C158.036 90.6283 149.904 86.096 140.816 83.2222C131.094 80.1499 121.162 79.0835 111.003 79.8281C104.021 80.3411 97.217 81.573 90.6481 84.0735C89.3178 84.581 88.627 85.2778 88.4267 86.6623C87.8001 91.0254 86.9935 95.3664 86.4753 99.7424C85.145 110.986 84.1932 122.255 85.0403 133.59C85.4758 139.426 86.1483 145.247 88.2815 150.748C92.4158 161.414 99.6369 169.686 108.929 176.11C117.432 181.988 126.706 182.658 136.303 179.012C141.602 176.998 146.253 173.948 150.271 169.934C151.104 169.103 151.986 168.305 152.932 167.61C153.25 167.377 153.933 167.329 154.282 167.513C154.865 167.822 154.802 168.493 154.472 168.991C153.926 169.815 153.384 170.677 152.684 171.361C146.291 177.598 138.965 182.22 130.144 184.193C124.009 185.566 117.945 185.618 112.023 183.15C111.472 182.917 110.869 182.792 110.287 182.617ZM193.278 37.9127C193.885 39.5693 194.309 40.8508 195.562 41.7867C196.251 42.2997 196.81 43.2613 196.995 44.1144C197.361 45.7912 197.677 47.5508 197.559 49.2442C197.372 51.9617 196.92 54.6737 196.395 57.3508C195.209 63.3999 195.028 69.438 196.255 75.4926C196.391 76.1582 196.575 76.8219 196.817 77.4563C197.126 78.2671 197.765 78.6146 198.609 78.3572C199.379 78.1237 200.169 77.8847 200.867 77.4986C208.312 73.3818 215.761 69.2706 223.159 65.0694C224.711 64.1868 226.148 63.0413 227.484 61.8444C230.847 58.8272 230.681 56.7422 226.854 54.4163C224.684 53.0961 222.391 51.9654 220.105 50.8475C211.566 46.6775 203.009 42.5497 194.458 38.4073C194.184 38.2767 193.896 38.1719 193.278 37.9127ZM239.262 315.882C237.278 314.786 235.247 313.843 233.417 312.605C231.677 311.427 230.053 310.035 228.537 308.573C222.94 303.182 217.378 297.753 211.86 292.279C206.745 287.206 202.614 281.398 199.235 275.042C195.143 267.344 191.726 259.345 188.795 251.149C186.559 244.892 184.572 238.547 182.467 232.244C182.338 231.861 182.131 231.505 181.859 230.915C181.818 231.26 181.792 231.326 181.807 231.38C185.302 244.348 189.258 257.157 194.647 269.487C198.26 277.752 202.133 285.881 207.017 293.489C211.465 300.419 216.976 306.352 223.657 311.184C226.8 313.458 230.148 315.336 233.926 316.34C235.764 316.829 237.584 316.887 239.262 315.882ZM125.093 306.593C125.183 306.558 125.273 306.523 125.363 306.486C124.753 304.822 124.082 303.177 123.54 301.489C120.523 292.09 117.534 282.681 114.54 273.273C112.319 266.29 110.011 259.338 107.022 252.633C103.117 243.87 97.5734 236.171 91.565 228.773C91.4823 228.671 91.317 228.638 90.9568 228.454C91.2398 229.197 91.4125 229.714 91.6293 230.212C93.3639 234.198 95.0249 238.218 96.8642 242.154C102.044 253.237 107.286 264.284 111.845 275.65C115.771 285.445 120.075 295.09 124.218 304.798C124.481 305.411 124.801 305.995 125.093 306.593ZM186.344 359.991C185.341 359.836 184.549 359.742 183.77 359.588C179.384 358.72 175.417 356.78 171.606 354.561C158.828 347.122 147.596 337.773 137.878 326.647C135.314 323.712 133.161 320.419 130.818 317.292C130.561 316.948 130.304 316.608 129.806 315.946C129.918 316.551 129.912 316.738 129.986 316.889C135.403 328.009 142.343 337.975 151.855 346.032C157.819 351.084 164.296 355.295 171.442 358.47C174.768 359.948 178.213 360.927 181.879 360.904C183.343 360.897 184.817 360.785 186.344 359.991ZM188.082 145.495C188.19 145.512 188.299 145.528 188.407 145.543C188.545 144.973 188.758 144.41 188.808 143.835C189.403 136.969 190.261 130.113 190.493 123.235C190.985 108.579 191.116 93.9139 191.47 79.2526C191.58 74.6597 191.922 70.0723 192.192 65.483C192.224 64.9517 192.358 64.3376 192.672 63.9386C192.913 63.6334 193.51 63.6113 193.859 63.4936C194.48 59.809 195.127 56.2034 195.682 52.585C196.029 50.3198 196.433 48.0362 195.908 45.7361C195.768 45.1275 195.744 44.4417 194.991 44.039C194.906 45.3022 194.928 46.4311 194.735 47.5214C194.289 50.0403 193.804 52.5813 191.077 53.6882C191.077 54.8355 191.07 55.889 191.079 56.9407C191.116 60.9159 191.312 64.8965 191.162 68.8643C190.888 76.0626 190.43 83.2535 190.009 90.4463C189.605 97.3283 189.133 104.207 188.721 111.089C188.128 121.012 187.641 130.94 187.79 140.887C187.812 142.425 187.981 143.958 188.082 145.495ZM186.223 134.149C186.112 134.178 186.002 134.206 185.89 134.235C185.73 136.964 185.454 139.691 185.44 142.419C185.425 145.333 185.528 148.26 185.833 151.156C185.978 152.535 186.608 153.898 187.202 155.185C187.825 156.536 188.953 156.7 190.074 155.701C190.529 155.297 190.959 154.791 191.209 154.243C191.72 153.118 192.2 151.96 192.519 150.768C193.618 146.653 193.923 142.423 193.877 138.199C193.791 130.369 193.517 122.542 193.298 114.713C193.117 108.145 192.905 101.577 192.709 95.0851C192.703 95.1293 192.674 95.2506 192.672 95.3738C192.466 108.424 192.411 121.482 191.353 134.502C191.037 138.396 190.434 142.266 189.903 146.14C189.804 146.859 189.526 147.598 189.155 148.225C188.637 149.099 187.692 149.086 187.257 148.176C186.889 147.411 186.663 146.53 186.594 145.684C186.406 143.395 186.309 141.095 186.232 138.799C186.18 137.251 186.223 135.699 186.223 134.149ZM259.38 338.537C259.218 338.558 259.059 338.578 258.897 338.598C258.82 339.199 258.619 339.813 258.686 340.398C258.932 342.547 259.141 344.713 259.593 346.824C260.659 351.798 262.011 356.714 262.958 361.708C263.9 366.683 264.49 371.727 265.128 376.022C265.128 375.264 265.175 373.771 265.118 372.284C264.869 365.76 264.148 359.281 263.011 352.86C262.32 348.959 261.392 345.096 260.494 341.233C260.28 340.299 259.76 339.435 259.38 338.537ZM247.472 385.597C247.067 384.299 246.678 383.2 246.389 382.076C246.081 380.876 245.816 379.657 245.62 378.432C245.19 375.755 243.802 373.854 239.708 373.677C239.053 373.65 238.387 373.852 237.713 373.95C239.492 374.74 241.201 375.329 242.726 376.229C243.99 376.978 243.865 378.112 242.593 378.853C241.924 379.243 241.164 379.473 240.431 379.78C242.742 381.69 245.011 383.566 247.472 385.597ZM190.836 52.0224C193.21 50.0642 194.101 44.8977 192.767 42.0606C192.031 42.1875 191.139 42.0441 190.987 43.1767C190.61 46.0082 190.754 48.8397 190.836 52.0224ZM220.188 222.271C224.015 226.588 228.805 229.988 231.942 234.945C229.211 229.618 225.871 224.856 220.188 222.271ZM274.851 274.468C275.14 275.106 275.173 275.307 275.29 275.422C277.137 277.228 278.973 279.048 280.878 280.791C281.126 281.019 281.753 280.834 282.205 280.839C282.205 280.442 282.343 279.973 282.183 279.659C281.104 277.55 279.386 276.083 277.258 275.106C276.624 274.814 275.895 274.735 274.851 274.468ZM83.6695 215.409C82.9989 213.074 82.365 210.69 80.7609 208.742C81.0732 211.243 82.2657 213.357 83.6695 215.409ZM189.148 45.9052C188.435 47.2125 188.302 48.5713 189.148 49.9098C189.148 48.5768 189.148 47.2401 189.148 45.9052ZM249.605 301.145C250.472 299.266 250.555 298.234 250.074 296.444C249.906 298.111 249.756 299.628 249.605 301.145ZM191.338 40.5603C192.571 40.5309 192.567 40.0915 192.093 39.4534C192.051 39.3965 191.902 39.4185 191.713 39.3928C191.612 39.6998 191.509 40.0234 191.338 40.5603Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="cta-one__thumb__area wow fadeInUp" data-wow-delay="200ms">
                            <div class="cta-one__thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 4, "speed": 700, "scale": 1 }'>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/resources/cta-1.png" alt="eduact">
                            </div>
                            <div class="cta-one__thumb__area__dark wow zoomIn" data-wow-delay="400ms"></div>
                            <div class="cta-one__thumb__area__shape wow fadeInUp" data-wow-delay="500ms" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shapes/cta-shape-1.png);"></div>
                            <svg viewBox="0 0 611 556" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M555.808 95.8321C526.054 35.589 468.004 11.1869 403.454 20.9135C289.531 38.072 13.8566 185.923 18.9328 335.709C21.1965 402.647 82.6767 445.989 139.184 473.388C225.719 515.342 328.597 544.419 425.405 534.761C459.035 531.405 494.157 521.884 520.961 500.461C549.566 477.6 565.052 440.218 575.067 406.004C587.157 364.666 592.748 319.184 591.976 276.168C590.913 217.123 582.27 149.38 555.808 95.8321Z" fill="url(#paint0_linear_268_9)" />
                                <path d="M387.299 555.447C286.444 555.447 192.226 520.034 130.952 490.324C46.183 449.226 2.16083 397.425 0.0857661 336.342C-5.4706 172.566 282.449 20.0916 400.642 2.28241C410.708 0.758347 420.758 0.00488281 430.498 0.00488281C493.419 0.00488281 545.261 31.8903 572.717 87.4927C596.624 135.886 609.451 199.263 610.823 275.825C611.646 322.078 605.541 368.913 593.159 411.278C584.053 442.427 567.881 487.07 532.742 515.154C506.35 536.234 470.868 549.146 427.274 553.478C414.292 554.797 400.847 555.447 387.299 555.447ZM387.299 552.023C400.744 552.023 414.069 551.372 426.949 550.087C469.873 545.806 504.755 533.152 530.616 512.483C565 484.998 580.915 441.006 589.884 410.319C602.18 368.279 608.234 321.804 607.41 275.894C606.039 199.828 593.348 136.965 569.665 89.0168C542.792 34.6301 492.082 3.42973 430.516 3.42973C420.946 3.42973 411.068 4.1832 401.173 5.67301C283.838 23.3452 -1.9893 174.278 3.49847 336.223C5.52209 395.935 48.9098 446.743 132.444 487.241C193.392 516.798 287.096 552.023 387.299 552.023Z" fill="url(#paint1_linear_268_9)" />
                                <path d="M563.097 141.554C549.446 79.3244 501.565 43.6716 439.948 37.9521C331.153 27.8317 43.6621 101.226 14.1824 240.258C1.01179 302.402 47.7093 356.275 93.4807 394.342C163.57 452.633 251.649 502.807 342.951 515.924C374.678 520.479 409.165 519.709 438.73 506.078C470.285 491.539 493.059 460.664 510.071 431.433C530.633 396.123 546.153 355.539 555.259 315.759C567.744 261.184 575.238 196.865 563.097 141.554Z" fill="url(#paint2_linear_268_9)" />
                                <defs>
                                    <linearGradient id="paint0_linear_268_9" x1="137.156" y1="59.5939" x2="389.089" y2="514.127" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#FF7200" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_268_9" x1="137.275" y1="26.0413" x2="435.685" y2="537.491" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#FF7200" stop-opacity="0.71" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_268_9" x1="137.156" y1="59.5939" x2="389.089" y2="514.127" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#FF7200" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-one-space"></section>
        <!-- Call To Action End -->


<?php
get_footer();