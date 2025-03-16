<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_ENV['systemName'];?></title>

    <!-- libraries CSS -->
    <link rel="stylesheet" href="assets/icon/flaticon_charitics.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/slim-select/slimselect.css">
    <link rel="stylesheet" href="assets/vendor/animate-wow/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css">

    <!-- custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- SIDEBAR SECTION START -->
    <div class="ul-sidebar">
        <!-- header -->
        <div class="ul-sidebar-header">
            <div class="ul-sidebar-header-logo">
                <a href="/">
                    <img src="assets/img/logo.webp" alt="logo" class="logo">
                </a>
            </div>
            <!-- sidebar closer -->
            <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
        </div>

        <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>


        <!-- sidebar footer -->
        <div class="ul-sidebar-footer">
            <span class="ul-sidebar-footer-title">Follow us</span>

            <div class="ul-sidebar-footer-social">
                <a href="<?=$_ENV['systemFacebook'];?>"><i class="flaticon-facebook"></i></a>
                <a href="<?=$_ENV['systemTwitter'];?>"><i class="flaticon-twitter"></i></a>
                <a href="<?=$_ENV['systemInstagram'];?>"><i class="flaticon-instagram"></i></a>
                <a href="<?=$_ENV['systemYoutube'];?>"><i class="flaticon-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- SIDEBAR SECTION END -->

    <!-- SEARCH MODAL SECTION START -->
    <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
        <button class="ul-search-closer"><i class="flaticon-close"></i></button>

        <form action="#" class="ul-search-form">
            <div class="ul-search-form-right">
                <input type="search" name="search" id="ul-search" placeholder="Search Here">
                <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
            </div>
        </form>
    </div>
    <!-- SEARCH MODAL SECTION END -->

    <!-- HEADER SECTION START -->
    <header class="ul-header">
        <div class="ul-header-bottom to-be-sticky">
            <div class="ul-header-bottom-wrapper ul-header-container">
                <div class="logo-container">
                    <a href="/" class="d-inline-block"><img src="assets/img/logo.webp" alt="logo" class="logo"></a>
                </div>

                <!-- header nav -->
                <div class="ul-header-nav-wrapper">
                    <div class="to-go-to-sidebar-in-mobile">
                        <nav class="ul-header-nav">
                            <a href="/">Home</a>
                            <a href="#about">About</a>
                            <a href="#services">Services</a>
                            <!-- <a href="#projects">Projects</a> -->
                            <a href="#team">Team</a>
                            <a href="#faq">FAQs</a>
                            <a href="#contact">Contact</a>
                        </nav>
                    </div>
                </div>

                <!-- actions -->
                <div class="ul-header-actions">
                    <button class="ul-header-search-opener"><i class="flaticon-search"></i></button>
                    <a href="/contact" class="ul-btn d-sm-inline-flex d-none"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Join With us </a>
                    <button class="ul-header-sidebar-opener d-lg-none d-inline-flex"><i class="flaticon-menu"></i></button>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END -->

    <?= $this->renderSection('content') ?>

    <!-- FOOTER SECTION START -->
    <footer class="ul-footer">
        <div class="ul-footer-top">
            <div class="ul-footer-container">
                <div class="ul-footer-top-contact-infos">
                    <!-- single info -->
                    <div class="ul-footer-top-contact-info">
                        <!-- icon -->
                        <div class="ul-footer-top-contact-info-icon">
                            <div class="ul-footer-top-contact-info-icon-inner">
                                <i class="flaticon-pin"></i>
                            </div>
                        </div>
                        <!-- txt -->
                        <div class="ul-footer-top-contact-info-txt">
                            <span class="ul-footer-top-contact-info-label">Address</span>
                            <h5 class="ul-footer-top-contact-info-address"><?=$_ENV['systemAddress']?></h5>
                        </div>
                    </div>

                    <!-- single info -->
                    <div class="ul-footer-top-contact-info">
                        <!-- icon -->
                        <div class="ul-footer-top-contact-info-icon">
                            <div class="ul-footer-top-contact-info-icon-inner">
                                <i class="flaticon-email"></i>
                            </div>
                        </div>
                        <!-- txt -->
                        <div class="ul-footer-top-contact-info-txt">
                            <span class="ul-footer-top-contact-info-label">Send Email</span>
                            <h5 class="ul-footer-top-contact-info-address"><a href="mailto:<?=$_ENV['systemEmail'];?>"><?=$_ENV['systemEmail'];?></a></h5>
                        </div>
                    </div>

                    <!-- single info -->
                    <div class="ul-footer-top-contact-info">
                        <!-- icon -->
                        <div class="ul-footer-top-contact-info-icon">
                            <div class="ul-footer-top-contact-info-icon-inner">
                                <i class="flaticon-telephone-call-1"></i>
                            </div>
                        </div>
                        <!-- txt -->
                        <div class="ul-footer-top-contact-info-txt">
                            <span class="ul-footer-top-contact-info-label">Call Emergency</span>
                            <h5 class="ul-footer-top-contact-info-address"><a href="tel:<?=$_ENV['systemPhone'];?>"><?=$_ENV['systemPhone'];?></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ul-footer-middle">
            <div class="ul-footer-container">
                <div class="ul-footer-middle-wrapper wow animate__fadeInUp">
                    <div class="ul-footer-about">
                        <a href="/"><img src="assets/img/logo.webp" alt="logo" class="logo"></a>
                        <p class="ul-footer-about-txt text-justify">
                        Our sole objective is to promote gender equality, sustainable use of natural resources and equal access to quality social services among the pastoralist communities of Tanzania.
                        </p>
                        <div class="ul-footer-socials">
                            <a href="<?=$_ENV['systemFacebook'];?>"><i class="flaticon-facebook"></i></a>
                            <a href="<?=$_ENV['systemTwitter'];?>"><i class="flaticon-twitter"></i></a>
                            <a href="<?=$_ENV['systemInstagram'];?>"><i class="flaticon-instagram"></i></a>
                            <a href="<?=$_ENV['systemYoutube'];?>"><i class="flaticon-youtube"></i></a>
                        </div>
                    </div>

                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">Quick Links</h3>

                        <div class="ul-footer-widget-links">
                            <a href="#about">About Us</a>
                            <a href="#services">Our Services</a>
                            <!-- <a href="#projects">Our Projects</a> -->
                            <a href="#faq">FAQ’S</a>
                            <a href="#contact">Contact Us</a>
                        </div>
                    </div>

                    <div class="ul-footer-widget ul-nwsltr-widget">
                        <h3 class="ul-footer-widget-title">Contact Us</h3>
                        <div class="ul-footer-widget-links ul-footer-contact-links">
                            <a href="mailto:<?=$_ENV['systemEmail'];?>"><i class="flaticon-mail"></i> <?=$_ENV['systemEmail'];?></a>
                            <a href="tel:<?=$_ENV['systemPhone'];?>"><i class="flaticon-telephone-call"></i> <?=$_ENV['systemPhone'];?></a>
                        </div>
                        <form action="#" class="ul-nwsltr-form">
                            <div class="top">
                                <input type="email" name="email" id="nwsltr-email" placeholder="Your Email Address" class="ul-nwsltr-input">
                                <button type="submit"><i class="flaticon-next"></i></button>
                            </div>

                            <div class="agreement">
                                <label for="nwsltr-agreement" class="ul-checkbox-wrapper">
                                    <input type="checkbox" name="agreement" id="nwsltr-agreement" hidden>
                                    <span class="ul-checkbox"><i class="flaticon-tick"></i></span>
                                    <span class="ul-checkbox-txt">I agree with the <a href="#">Privacy Policy</a></span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer bottom -->
        <div class="ul-footer-bottom">
            <div class="ul-footer-container">
                <div class="ul-footer-bottom-wrapper">
                    <p class="copyright-txt">&copy;
                        <span id="footer-copyright-year"></span> Narok Nature. All rights reserved | Designed & Developed by <a href="<?=$_ENV['systemAuthorContact'];?>"><?=$_ENV['systemAuthorName'];?>.</a>
                    </p>
                    <div class="ul-footer-bottom-nav"><a href="#">Terms & Conditions</a> <a href="#">Privacy Policy</a></div>
                </div>
            </div>
        </div>

        <!-- vector -->
        <div class="ul-footer-vectors">
            <img src="assets/img/footer-vector-img.png" alt="Footer Image" class="ul-footer-vector-1">
        </div>
    </footer>
    <!-- FOOTER SECTION END -->

    <!-- libraries JS -->
    <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/splide/splide.min.js"></script>
    <script src="assets/vendor/splide/splide-extension-auto-scroll.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/slim-select/slimselect.min.js"></script>
    <script src="assets/vendor/animate-wow/wow.min.js"></script>
    <script src="assets/vendor/splittype/index.min.js"></script>
    <script src="assets/vendor/mixitup/mixitup.min.js"></script>
    <script src="assets/vendor/fslightbox/fslightbox.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.js"></script>

    <!-- custom JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/accordion.js"></script>
    <script src="assets/js/progressbar.js"></script>
    <script src="assets/js/donate-form.js"></script>
</body>

</html>