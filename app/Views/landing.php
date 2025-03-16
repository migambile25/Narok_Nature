<?= $this->extend('Layouts/main.php') ?>
<?= $this->section('content') ?>

<main class="overflow-hidden">
    <!-- HOME BANNER SECTION START -->
    <section id="home" class="ul-banner">
        <div class="ul-banner-container">
            <div class="row gy-4 row-cols-lg-2 row-cols-1 align-items-center flex-column-reverse flex-lg-row">
                <!-- banner text -->
                <div class="col">
                    <div class="ul-banner-txt">
                        <div class="wow animate__fadeInUp">
                            <span class="ul-banner-sub-title ul-section-sub-title">Change The World Together</span>
                            <h1 class="ul-banner-title">Welcome to Narok Nature</h1>
                            <p class="ul-banner-descr">In Tanzania particularly the pastoralist communities in all places of their domicile, there are a number of social and economic problems despite of the number of initiatives currently undertaken by different stakeholders to improve standard of living, create gender equality space, access to education for all, social welfare and service provision in general.</p>
                            <div class="ul-banner-btns">
                                <a href="#about" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Learn More</a>
                            </div>
                        </div>

                        <img src="assets/img/vector-img.png" alt="Vector" class="ul-banner-txt-vector">
                    </div>
                </div>

                <!-- img -->
                <div class="col align-self-start">
                    <div class="ul-banner-img">
                        <div class="img-wrapper">
                            <img src="assets/img/banner-img.png" alt="Banner Image">
                            <!-- <div class="ul-banner-video-btn">
                                    <a href=""></a>
                                </div> -->
                        </div>
                        <div class="ul-banner-img-vectors">
                            <img src="assets/img/banner-img-vector-1.png" alt="vector" class="vector-1 wow animate__fadeInRight">
                            <img src="assets/img/banner-img-vector-2.png" alt="vector" class="vector-2 wow animate__fadeInDown">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME BANNER SECTION END -->


    <!-- ABOUT SECTION START -->
    <section id="about" class="ul-about ul-about-2 ul-section-spacing wow animate__fadeInUp">
        <div class="ul-container">
            <div class="row row-cols-md-2 row-cols-1 align-items-center gy-4 ul-about-row">
                <div class="col">
                    <div class="ul-about-imgs ul-about-2-img">
                        <div class="img-wrapper">
                            <img src="assets/img/about-2-img.jpg" alt="Image">
                        </div>

                        <div class="ul-about-2-stat">
                            <span class="number">15+</span>
                            <span class="txt">Years Of Experience</span>
                        </div>
                    </div>
                </div>

                <!-- txt -->
                <div class="col">
                    <div class="ul-about-txt">
                        <span class="ul-section-sub-title ul-section-sub-title--2">About US</span>
                        <!-- <h2 class="ul-section-title"></h2> -->
                        <p class="ul-section-descr text-justify">
                            In Tanzania particularly the pastoralist communities in all places of their domicile,
                            there are a number of social and economic problems despite of the number of initiatives
                            currently undertaken by different stakeholders to improve standard of living,
                            create gender equality space, access to education for all, social welfare and service
                            provision in general.
                            <br><br>
                            The major setbacks that need to be alleviated are such as the prevailing poverty in holistic
                            perspective, ignorance, injustice, unemployment, land conflicts, lack of social services,
                            unskilled labor, under utilization of resources and environmental degradation mostly due to
                            overgrazing. Narok Nature is committed to support the Government of Tanzania to ensure
                            the gender equality, access to quality social services, and sustainable utilization of
                            natural resources in order to attain sustainable development for all
                        </p>

                        <div class="ul-about-bottom ul-about-2-bottom">
                            <div class="ul-about-2-bottom-block">
                                <div class="ul-about-2-bottom-block-icon"><img src="assets/img/mission.svg" alt="icon"></div>
                                <div class="ul-about-2-bottom-block-txt">
                                    <h3 class="ul-about-2-bottom-block-title">Our Mission</h3>
                                    <p class="ul-about-2-bottom-block-descr text-justify">
                                        To create gender sensitive and climate resilient communities geared towards sustainable use
                                        of natural resources and equal access to improved social services for sustainable development.
                                    </p>
                                </div>
                            </div>

                            <div class="ul-about-2-bottom-block">
                                <div class="ul-about-2-bottom-block-icon"><img src="assets/img/vision.svg" alt="icon"></div>
                                <div class="ul-about-2-bottom-block-txt">
                                    <h3 class="ul-about-2-bottom-block-title">Our Vision</h3>
                                    <p class="ul-about-2-bottom-block-descr text-justify">
                                        Narok Nature envision a prosperous pastoralist community full engaged in sustainable development trough
                                        promotion of gender equality, access to quality social service and sustainable use of
                                        natural resources.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <a href="#services" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END -->


    <!-- STATS SECTION START -->
    <div class="ul-stats ul-section-spacing">
        <div class="ul-container">
            <div class="ul-stats-wrapper wow animate__fadeInUp">
                <div class="row row-cols-md-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 ul-bs-row justify-content-center">
                    <div class="col">
                        <div class="ul-stats-item">
                            <i class="flaticon-costumer"></i>
                            <span class="number">260+</span>
                            <span class="txt">Total Program Receivers</span>
                        </div>
                    </div>

                    <div class="col">
                        <div class="ul-stats-item">
                            <i class="flaticon-team"></i>
                            <span class="number">110+</span>
                            <span class="txt">Total Volunteers</span>
                        </div>
                    </div>

                    <div class="col">
                        <div class="ul-stats-item">
                            <i class="flaticon-package"></i>
                            <span class="number">190+</span>
                            <span class="txt">Completed Projects</span>
                        </div>
                    </div>

                    <div class="col">
                        <div class="ul-stats-item">
                            <i class="flaticon-relationship"></i>
                            <span class="number">560+</span>
                            <span class="txt">Total Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- STATS SECTION END -->


    <!-- SERVICES SECTION START -->
    <section id="services" class="ul-events ul-section-spacing pt-0">
        <div class="ul-container">
            <!-- heading -->
            <div class="ul-section-heading align-items-center wow animate__fadeInUp">
                <div class="left">
                    <span class="ul-section-sub-title">Our Services</span>
                    <h2 class="ul-section-title text-white">Dive into what we do!</h2>
                </div>
                <a href="/" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Explore More</a>
            </div>

            <!-- events -->
            <div class="ul-events-wrapper">
                <div class="row ul-bs-row row-cols-lg-2 row-cols-1">
                    <!-- single event -->
                    <div class="col wow animate__fadeInUp">
                        <div class="ul-event">
                            <div class="ul-event-img">
                                <img src="assets/img/event-img.jpg" alt="Event Image">
                                <span class="date"><span>1</span></span>
                            </div>
                            <div class="ul-event-txt">
                                <h3 class="ul-event-title">Manager Disapproved of the Most Recent Work.</h3>
                                <p class="ul-event-descr">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernaturaut</p>
                            </div>
                        </div>
                    </div>

                    <!-- single event -->
                    <div class="col wow animate__fadeInUp">
                        <div class="ul-event">
                            <div class="ul-event-img">
                                <img src="assets/img/blog-b-1.jpg" alt="Event Image">
                                <span class="date"><span>2</span></span>
                            </div>
                            <div class="ul-event-txt">
                                <h3 class="ul-event-title">Manager Disapproved of the Most Recent Work.</h3>
                                <p class="ul-event-descr">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernaturaut</p>
                            </div>
                        </div>
                    </div>

                    <!-- single event -->
                    <div class="col wow animate__fadeInUp">
                        <div class="ul-event">
                            <div class="ul-event-img">
                                <img src="assets/img/blog-2.jpg" alt="Event Image">
                                <span class="date"><span>3</span></span>
                            </div>
                            <div class="ul-event-txt">
                                <h3 class="ul-event-title">Manager Disapproved of the Most Recent Work.</h3>
                                <p class="ul-event-descr">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernaturaut</p>
                            </div>
                        </div>
                    </div>

                    <!-- single event -->
                    <div class="col wow animate__fadeInUp">
                        <div class="ul-event">
                            <div class="ul-event-img">
                                <img src="assets/img/blog-b-3.jpg" alt="Event Image">
                                <span class="date"><span>4</span></span>
                            </div>
                            <div class="ul-event-txt">
                                <h3 class="ul-event-title">Manager Disapproved of the Most Recent Work.</h3>
                                <p class="ul-event-descr">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernaturaut</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- vectors -->
        <!-- <div class="ul-events-vectors">
            <img src="assets/img/events-vector-1.png" alt="Events Image" class="vector-1">
            <img src="assets/img/events-vector-2.svg" alt="Events Image" class="vector-2">
        </div> -->
    </section>
    <!-- SERVICES SECTION END -->

    <!-- TEAM SECTION START -->
    <section id="team" class="ul-team ul-section-spacing pt-0">
        <div class="ul-container">
            <!-- Heading -->
            <div class="ul-section-heading justify-content-between">
                <div class="left">
                    <span class="ul-section-sub-title">Our Team</span>
                    <h2 class="ul-section-title">Skilled Personnel Dedicated to You</h2>
                </div>
                <div>
                    <a href="#contact" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Join With us</a>
                </div>
            </div>

            <div class="row row-cols-md-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 ul-team-row justify-content-center">
                <!-- single member -->
                <div class="col">
                    <div class="ul-team-member">
                        <div class="ul-team-member-img">
                            <img src="assets/img/member-1.jpg" alt="Team Member Image">
                            <div class="ul-team-member-socials">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-twitter"></i></a>
                                <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="ul-team-member-info">
                            <h3 class="ul-team-member-name">John Doe</h3>
                            <p class="ul-team-member-designation">Attorney</p>
                        </div>
                    </div>
                </div>

                <!-- single member -->
                <div class="col">
                    <div class="ul-team-member">
                        <div class="ul-team-member-img">
                            <img src="assets/img/member-2.jpg" alt="Team Member Image">
                            <div class="ul-team-member-socials">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-twitter"></i></a>
                                <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="ul-team-member-info">
                            <h3 class="ul-team-member-name">John Doe</h3>
                            <p class="ul-team-member-designation">Attorney</p>
                        </div>
                    </div>
                </div>

                <!-- single member -->
                <div class="col">
                    <div class="ul-team-member">
                        <div class="ul-team-member-img">
                            <img src="assets/img/member-3.jpg" alt="Team Member Image">
                            <div class="ul-team-member-socials">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-twitter"></i></a>
                                <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="ul-team-member-info">
                            <h3 class="ul-team-member-name">John Doe</h3>
                            <p class="ul-team-member-designation">Attorney</p>
                        </div>
                    </div>
                </div>

                <!-- single member -->
                <div class="col">
                    <div class="ul-team-member">
                        <div class="ul-team-member-img">
                            <img src="assets/img/member-4.jpg" alt="Team Member Image">
                            <div class="ul-team-member-socials">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-twitter"></i></a>
                                <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="ul-team-member-info">
                            <h3 class="ul-team-member-name">John Doe</h3>
                            <p class="ul-team-member-designation">Attorney</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM SECTION END -->


    <!-- FAQ SECTION START -->
    <section id="faq" class="ul-why-join ul-section-spacing">
        <div class="ul-why-join-wrapper ul-section-spacing">
            <div class="ul-container">
                <div class="row row-cols-md-2 row-cols-1 gy-4 align-items-center">
                    <div class="col">
                        <div class="ul-why-join-img">
                            <img src="assets/img/why-join.jpg" alt="Image">
                        </div>
                    </div>

                    <!-- txt -->
                    <div class="col">
                        <div class="ul-why-join-txt">
                            <span class="ul-section-sub-title">Join us</span>
                            <h2 class="ul-section-title">Why We Need You Become a Volunteer</h2>
                            <p class="ul-section-descr">We help companies develop powerful corporate social responsibility, grantmaking, and employee engagement strategies.</p>

                            <div class="ul-accordion">
                                <div class="ul-single-accordion-item open">
                                    <div class="ul-single-accordion-item__header">
                                        <div class="left">
                                            <h3 class="ul-single-accordion-item__title">Recognition and Fulfillment</h3>
                                        </div>
                                        <span class="icon"><i class="flaticon-next"></i></span>
                                    </div>

                                    <div class="ul-single-accordion-item__body">
                                        <p>Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the. E-learning is suitable for students, professionals, and anyone interested.</p>
                                    </div>
                                </div>

                                <div class="ul-single-accordion-item">
                                    <div class="ul-single-accordion-item__header">
                                        <div class="left">
                                            <h3 class="ul-single-accordion-item__title">Why Join Us as a Volunteer?</h3>
                                        </div>
                                        <span class="icon"><i class="flaticon-next"></i></span>
                                    </div>

                                    <div class="ul-single-accordion-item__body">
                                        <p>Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the. E-learning is suitable for students, professionals, and anyone interested.</p>
                                    </div>
                                </div>

                                <div class="ul-single-accordion-item">
                                    <div class="ul-single-accordion-item__header">
                                        <div class="left">
                                            <h3 class="ul-single-accordion-item__title">Be Part of a Community</h3>
                                        </div>
                                        <span class="icon"><i class="flaticon-next"></i></span>
                                    </div>

                                    <div class="ul-single-accordion-item__body">
                                        <p>Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the. E-learning is suitable for students, professionals, and anyone interested.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ SECTION END -->


    <!-- TESTIMONIAL SECTION START -->
    <section id="testimonial" class="ul-testimonial ul-section-spacing">
        <div class="ul-testimonial-container">
            <div class="ul-section-heading text-center">
                <div>
                    <span class="ul-section-sub-title">Testimonials</span>
                    <h2 class="ul-section-title">What They Are Talking About Us</h2>
                </div>
            </div>

            <div class="ul-testimonial-slider swiper">
                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review">
                            <div class="ul-review-rating">
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star-1"></i>
                            </div>
                            <p class="ul-review-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                            <div class="ul-review-bottom">
                                <div class="ul-review-reviewer">
                                    <div class="reviewer-image"><img src="assets/img/member-1.jpg" alt="reviewer image"></div>
                                    <div>
                                        <h3 class="reviewer-name">Esther Howard</h3>
                                        <span class="reviewer-role">Web Designer</span>
                                    </div>
                                </div>

                                <!-- icon -->
                                <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review">
                            <div class="ul-review-rating">
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star-1"></i>
                            </div>
                            <p class="ul-review-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                            <div class="ul-review-bottom">
                                <div class="ul-review-reviewer">
                                    <div class="reviewer-image"><img src="assets/img/member-2.jpg" alt="reviewer image"></div>
                                    <div>
                                        <h3 class="reviewer-name">Esther Howard</h3>
                                        <span class="reviewer-role">Web Designer</span>
                                    </div>
                                </div>

                                <!-- icon -->
                                <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review">
                            <div class="ul-review-rating">
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star-1"></i>
                            </div>
                            <p class="ul-review-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                            <div class="ul-review-bottom">
                                <div class="ul-review-reviewer">
                                    <div class="reviewer-image"><img src="assets/img/member-3.jpg" alt="reviewer image"></div>
                                    <div>
                                        <h3 class="reviewer-name">Esther Howard</h3>
                                        <span class="reviewer-role">Web Designer</span>
                                    </div>
                                </div>

                                <!-- icon -->
                                <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review">
                            <div class="ul-review-rating">
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star-1"></i>
                            </div>
                            <p class="ul-review-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                            <div class="ul-review-bottom">
                                <div class="ul-review-reviewer">
                                    <div class="reviewer-image"><img src="assets/img/member-4.jpg" alt="reviewer image"></div>
                                    <div>
                                        <h3 class="reviewer-name">Esther Howard</h3>
                                        <span class="reviewer-role">Web Designer</span>
                                    </div>
                                </div>

                                <!-- icon -->
                                <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review">
                            <div class="ul-review-rating">
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star-1"></i>
                            </div>
                            <p class="ul-review-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                            <div class="ul-review-bottom">
                                <div class="ul-review-reviewer">
                                    <div class="reviewer-image"><img src="assets/img/member-1.jpg" alt="reviewer image"></div>
                                    <div>
                                        <h3 class="reviewer-name">Esther Howard</h3>
                                        <span class="reviewer-role">Web Designer</span>
                                    </div>
                                </div>

                                <!-- icon -->
                                <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ul-testimonial-slider-pagination"></div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION END -->


    <!-- GALLERY SECTION START -->
    <div class="ul-gallery overflow-hidden ul-section-spacing mx-auto pt-0">
        <div class="ul-gallery-slider swiper">
            <div class="swiper-wrapper">
                <!-- single gallery item -->
                <div class="ul-gallery-item swiper-slide">
                    <img src="assets/img/gallery-item-1.png" alt="Gallery Image">
                    <div class="ul-gallery-item-btn-wrapper">
                        <a href="assets/img/gallery-item-1.png" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>

                <!-- single gallery item -->
                <div class="ul-gallery-item swiper-slide">
                    <img src="assets/img/gallery-item-2.png" alt="Gallery Image">
                    <div class="ul-gallery-item-btn-wrapper">
                        <a href="assets/img/gallery-item-2.png" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>

                <!-- single gallery item -->
                <div class="ul-gallery-item swiper-slide">
                    <img src="assets/img/gallery-item-3.png" alt="Gallery Image">
                    <div class="ul-gallery-item-btn-wrapper">
                        <a href="assets/img/gallery-item-3.png" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>

                <!-- single gallery item -->
                <div class="ul-gallery-item swiper-slide">
                    <img src="assets/img/gallery-item-4.png" alt="Gallery Image">
                    <div class="ul-gallery-item-btn-wrapper">
                        <a href="assets/img/gallery-item-4.png" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>

                <!-- single gallery item -->
                <div class="ul-gallery-item swiper-slide">
                    <img src="assets/img/gallery-item-5.png" alt="Gallery Image">
                    <div class="ul-gallery-item-btn-wrapper">
                        <a href="assets/img/gallery-item-5.png" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>

                <!-- single gallery item -->
                <div class="ul-gallery-item swiper-slide">
                    <img src="assets/img/gallery-item-6.png" alt="Gallery Image">
                    <div class="ul-gallery-item-btn-wrapper">
                        <a href="assets/img/gallery-item-6.png" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>

                <!-- single gallery item -->
                <div class="ul-gallery-item swiper-slide">
                    <img src="assets/img/gallery-item-1.png" alt="Gallery Image">
                    <div class="ul-gallery-item-btn-wrapper">
                        <a href="assets/img/gallery-item-1.png" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>

                <!-- single gallery item -->
                <div class="ul-gallery-item swiper-slide">
                    <img src="assets/img/gallery-item-2.png" alt="Gallery Image">
                    <div class="ul-gallery-item-btn-wrapper">
                        <a href="assets/img/gallery-item-2.png" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GALLERY SECTION END -->
</main>

<?= $this->endSection('content') ?>