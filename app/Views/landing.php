<?= $this->extend('Layouts/main.php') ?>
<?= $this->section('content') ?>
<?php include('Layouts/data.php'); ?>

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
                            In Tanzania, particularly within pastoralist communities across their areas of domicile, there are a number of social and economic problems despite the efforts by various stakeholders to improve living standards, promote gender equality, expand access to education, enhance social welfare, and improve service provision in general.
                            <br><br>
                            The major setbacks that need to be alleviated include prevailing poverty in a holistic perspective, ignorance, injustice, unemployment, land conflicts, lack of social services, unskilled labor, underutilization of resources, and environmental degradation — mostly due to overgrazing. In addition to empowerment efforts, there is also a significant ongoing initiative to support the transition of these communities from overdependence on pastoralism to more diversified and sustainable sources of livelihood, including an agricultural transformation that promotes food security and economic resilience. Narok Nature is committed to supporting the Government of Tanzania to ensure gender equality, access to quality social services, and the sustainable utilization of natural resources in order to attain sustainable development for all.
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

    <!-- HISTORY SECTION START -->
    <section id="history" class="ul-history ul-section-spacing wow animate__fadeInUp" style="background: linear-gradient(135deg, #f7fafc 60%, #e3f0e8 100%);">
        <div class="ul-container">
            <div class="row row-cols-md-2 row-cols-1 align-items-center gy-4">
                <div class="col">
                    <div class="ul-history-img">
                        <div class="col">
                            <div class="ul-why-join-img">
                                <img src="assets/img/1.webp" alt="Image">
                                <div class="ul-history-year-badge position-absolute top-0 start-0 bg-success text-white px-3 py-1 rounded-end" style="font-weight:bold; font-size:1.1em; margin-top:12px;">
                                    Since 2010
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ul-history-txt">
                        <span class="ul-section-sub-title ul-section-sub-title--2">Our History</span>
                        <h2 class="ul-section-title mb-3">A Journey of Growth and Impact</h2>
                        <p class="ul-section-descr text-justify mb-3">
                            Narok Nature began its journey in 2010 under the name <strong>EMARIT</strong>, a grassroots initiative dedicated to empowering the Maasai community through education, restoration, and transformation.
                        </p>
                        <div class="row g-2 mb-3">
                            <?php
                            $pillars = [
                                ['icon' => 'flaticon-book', 'abbr' => 'E', 'title' => 'Education'],
                                ['icon' => 'flaticon-tribe', 'abbr' => 'M', 'title' => 'Maasai'],
                                ['icon' => 'flaticon-water', 'abbr' => 'A', 'title' => 'Aqua (Water)'],
                                ['icon' => 'flaticon-restore', 'abbr' => 'R', 'title' => 'Restoration'],
                                ['icon' => 'flaticon-idea', 'abbr' => 'I', 'title' => 'Initiatives'],
                                ['icon' => 'flaticon-growth', 'abbr' => 'T', 'title' => 'Transformation'],
                            ];
                            foreach ($pillars as $pillar): ?>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex align-items-center gap-2 p-2 bg-white rounded shadow-sm" style="min-height:60px;">
                                        <i class="<?= $pillar['icon'] ?> text-success" style="font-size:1.5em;"></i>
                                        <div>
                                            <span class="fw-bold"><?= $pillar['abbr'] ?></span> – <?= $pillar['title'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <p class="ul-section-descr text-justify mb-3">
                            As our vision evolved, we officially registered as <strong>Narok Nature</strong>, expanding our mission to serve a wider range of pastoralist communities across the region.
                        </p>
                        <blockquote class="blockquote mb-3" style="border-left:4px solid #2e7d32;padding-left:1em;color:#2e7d32;">
                            "Empowering communities, embracing diversity, and creating lasting change."
                        </blockquote>
                        <p class="ul-section-descr text-justify">
                            Today, Narok Nature works collaboratively with churches and faith-based groups, while embracing people of all religions, tribes, and backgrounds. We remain deeply committed to youth empowerment, environmental advocacy, and inclusive community engagement.
                        </p>
                        <a href="#contact" class="ul-btn mt-3"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HISTORY SECTION END -->

    <!-- CTA(CALL TO ACTION) SECTION START -->
    <section class="ul-cta text-center">
        <div class="ul-container">
            <span class="ul-section-sub-title">Word from our Chairman</span>
            <div class="mb-4">
                <img src="assets/img/chairman.jpg" alt="Chairman Photo" style="width:120px;height:120px;object-fit:cover;border-radius:50%;border:4px solid #fff;box-shadow:0 2px 8px rgba(0,0,0,0.1);">
            </div>
            <h2 class="ul-cta-title">
                At Narok Nature, we are committed to driving positive change in our community through passionate advocacy for the environment, women, youth, and children. We believe that a sustainable future starts with empowering every voice and protecting what matters most.
            </h2>
            <a href="#contact" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Join Us</a>
        </div>
        <img src="assets/img/cta-vector.svg" alt="Vector" class="ul-cta-vector">
    </section>
    <!-- CTA(CALL TO ACTION) SECTION END -->

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
                <a href="#contact" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Learn More</a>
            </div>

            <!-- events -->
            <div class="ul-events-wrapper">
                <div class="row ul-bs-row row-cols-lg-2 row-cols-1">
                    <?php shuffle($galleryImages); // Shuffle the gallery images array 
                    ?>
                    <?php foreach ($services as $index => $service): ?>
                        <?php $image = $galleryImages[$index % count($galleryImages)]; ?>
                        <!-- single service -->
                        <div class="col wow animate__fadeInUp">
                            <div class="ul-event">
                                <div class="ul-event-img">
                                    <span class="date"><span><?= $service['id']; ?></span></span>
                                </div>
                                <div class="ul-event-txt">
                                    <h3 class="ul-event-title"><?= $service['title']; ?></h3>
                                    <p class="ul-event-descr"><?= $service['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

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

    <!-- GALLERY SECTION START -->
    <section id="gallery" class=" pt-5 ul-gallery ul-section-spacing wow animate__fadeInUp">
        <div class="ul-gallery overflow-hidden ul-section-spacing mx-auto pt-0">
            <div class="ul-gallery-slider swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($galleryImages as $image): ?>
                        <div class="ul-gallery-item swiper-slide">
                            <img src="<?= $image ?>" alt="Gallery Image">
                            <div class="ul-gallery-item-btn-wrapper">
                                <a href="<?= $image ?>" data-fslightbox="gallery"><i class="flaticon-instagram"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- GALLERY SECTION END -->
    <!-- TEAM SECTION START -->
    <section id="team" class="ul-team ul-section-spacing pt-0">
        <div class="ul-container">
            <!-- Heading -->
            <div class="ul-section-heading justify-content-between">
                <div class="left">
                    <span class="ul-section-sub-title">Our Volunteers</span>
                    <h2 class="ul-section-title">Skilled Personnel Dedicated to You</h2>
                </div>
                <div>
                    <a href="#contact" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Join With us</a>
                </div>
            </div>

            <div class="row row-cols-md-4 row-cols-sm-4 row-cols-2 row-cols-xxs-1 ul-team-row justify-content-center">
                <!-- single member -->
                <?php foreach ($volunteers as $volunteer): ?>
                    <div class="col">
                        <div class="ul-team-member">
                            <div class="ul-team-member-img">
                                <img src="<?= $volunteer['image'] ?>" alt="<?= $volunteer['name'] ?> Image">
                                <div class="ul-team-member-socials">
                                    <a href="#"><i class="flaticon-facebook"></i></a>
                                    <a href="#"><i class="flaticon-twitter"></i></a>
                                    <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                </div>
                            </div>
                            <div class="ul-team-member-info">
                                <h3 class="ul-team-member-name"><?= $volunteer['name'] ?></h3>
                                <p class="ul-team-member-designation"><?= $volunteer['role'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </section>
    <!-- TEAM SECTION END -->

    <!-- DONATE SECTION START -->
    <section id="donate" class="ul-donate ul-section-spacing text-center wow animate__fadeInUp" style="background:#f7fafc;">
        <div class="ul-container">
            <span class="ul-section-sub-title">Support Our Mission</span>
            <h2 class="ul-section-title">Donate to Narok Nature</h2>
            <p class="ul-section-descr mb-4">
                Your contribution helps us empower communities and protect nature. Choose your preferred payment method below.
            </p>

            <div class="mb-4" style="display:flex;justify-content:center;gap:1rem;flex-wrap:wrap;">
                <button class="ul-btn" onclick="showDonationDetails('Mobile')">Donate via Mobile</button>
                <!-- <button class="ul-btn" onclick="showDonationDetails('Airtel')">Donate via Airtel Money</button>
                <button class="ul-btn" onclick="showDonationDetails('Yas')">Donate via Mixx by Yas</button> -->
                <button class="ul-btn" onclick="showDonationDetails('Bank-Tsh')">Donate via Bank (Tsh)</button>
                <button class="ul-btn" onclick="showDonationDetails('Bank-USD')">Donate via Bank (USD)</button>
            </div>
            <p class="mt-3 text-muted" style="font-size:0.95em;">
                For assistance,<br><br></a>
                <a href="#contact" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Contact Us</a>
            </p>
        </div>
    </section>
    <!-- DONATE SECTION END -->



    <!-- FAQ SECTION START -->
    <section id="faq" class="ul-why-join ul-section-spacing">
        <div class="ul-why-join-wrapper ul-section-spacing">
            <div class="ul-container">
                <div class="row row-cols-md-2 row-cols-1 gy-4 align-items-center">
                    <div class="col">
                        <div class="ul-why-join-img">
                            <img src="assets/img/1.webp" alt="Image">
                        </div>
                    </div>

                    <!-- txt -->
                    <div class="col">
                        <div class="ul-why-join-txt">
                            <span class="ul-section-sub-title">FAQs</span>
                            <h2 class="ul-section-title">Have some questions?</h2>
                            <p class="ul-section-descr">Here are some to get you upto speed!</p>

                            <div class="ul-accordion">
                                <?php $first = true; ?>
                                <?php foreach ($faqs as $faq): ?>
                                    <div class="ul-single-accordion-item <?= $first ? 'open' : '' ?>">
                                        <div class="ul-single-accordion-item__header">
                                            <div class="left">
                                                <h3 class="ul-single-accordion-item__title"><?= $faq['question']; ?></h3>
                                            </div>
                                            <span class="icon"><i class="flaticon-next"></i></span>
                                        </div>

                                        <div class="ul-single-accordion-item__body">
                                            <p><?= $faq['answer']; ?></p>
                                        </div>
                                    </div>
                                    <?php $first = false; ?>
                                <?php endforeach; ?>
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
                    <?php foreach ($testimonials as $testimonial): ?>
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
                                <p class="ul-review-descr"><?= $testimonial['testimonial']; ?></p>
                                <div class="ul-review-bottom">
                                    <div class="ul-review-reviewer">
                                        <div class="reviewer-image"><img src="assets/img/member-1.jpg" alt="reviewer image"></div>
                                        <div>
                                            <h3 class="reviewer-name"><?= $testimonial['name']; ?></h3>
                                            <span class="reviewer-role"><?= $testimonial['role']; ?></span>
                                        </div>
                                    </div>

                                    <!-- icon -->
                                    <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="ul-testimonial-slider-pagination"></div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION END -->

</main>
<script>
    function showDonationDetails(method) {
        let title = '',
            html = '';

        switch (method) {
            case 'M-Pesa':
                title = 'M-Pesa Donation';
                html = '<strong>Paybill:</strong> 123456<br><strong>Account:</strong> NAROK';
                break;
            case 'Airtel':
                title = 'Airtel Money Donation';
                html = '<strong>Paybill:</strong> 123456<br><strong>Account:</strong> NAROK';
                break;
            case 'Yas':
                title = 'Mixx by Yas Donation';
                html = '<strong>Paybill:</strong> 123456<br><strong>Account:</strong> NAROK';
                break;
            case 'PayPal':
                title = 'PayPal Donation';
                html = 'Click the button below to donate via PayPal.<br><br><a href="https://www.paypal.com/donate" target="_blank" class="ul-btn">Go to PayPal</a>';
                break;
            case 'Mobile':
                title = 'Mobile Donation';
                html = '<strong>Phone Number:</strong> +255 792 179 984<br><strong>Account:</strong> NAROK NATURE';
                break;
            case 'Bank-Tsh':
                title = 'Bank Transfer (Tsh)';
                html = '<strong>Bank:</strong> NMB<br><strong>Account Number:</strong> 21210091060<br><strong>Account Name:</strong> Narok Nature';
                break;
            case 'Bank-USD':
                title = 'Bank Transfer (USD)';
                html = '<strong>Bank:</strong> NMB<br><strong>Account Number:</strong> 21210091059<br><strong>Account Name:</strong> Narok Nature';
                break;
        }

        Swal.fire({
            title: title,
            html: html,
            icon: 'info',
            confirmButtonText: 'Close'
        });
    }
</script>
<?= $this->endSection('content') ?>