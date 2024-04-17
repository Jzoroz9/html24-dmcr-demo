<!-- Hero Banner -->
<div class="hero-banner">
    <!-- Slider main container -->
    <div class="swiper heroBannerSwiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="swiper-slide">
                    <div class="ratio">
                        <picture>
                            <source media="(min-width: 1441px)" data-srcset="assets/img/static/img-size-desktop-1920.jpg" />
                            <source media="(min-width: 1200px)" data-srcset="assets/img/static/img-size-desktop-1280.jpg" />
                            <source media="(min-width: 992px)" data-srcset="assets/img/static/img-size-tablet-1024.jpg" />
                            <source media="(min-width: 768px)" data-srcset="assets/img/static/img-size-tablet–768.jpg" />
                            <source media="(min-width: 576px)" data-srcset="assets/img/static/img-size-mobile-575.jpg" />
                            <img alt="A lazy image" class="lazy img-ratio" data-src="assets/img/static/img-size-mobile-375.jpg" />
                        </picture>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
    </div>
</div>
<!-- End: Hero Banner -->