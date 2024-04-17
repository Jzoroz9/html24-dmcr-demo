<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body>

    <div class="global-container">

        <?php include('inc/header.php'); ?>

        <section class="layout-body">
            <div class="bg-top">
                <div class="hero-banner">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <div class="swiper-slide">
                                    <!-- <figure class="cover">
                            </figure> -->
                                    <img src="assets/img/upload/tgp-01.png" alt="">
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="wg-update">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <img src="assets/img/static/img-content-01.png" alt="">
                            </div>
                            <div class="col-6 pt-4 mt-5">
                                <div class="gallery-slide">
                                    <div class="swiper gallery-swiper-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="assets/img/upload/thumb-update-01.jpg" class="link" data-fancybox="gallery">
                                                    <div class="ratio ratio-16x9">
                                                        <img src="assets/img/upload/thumb-update-01.jpg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="assets/img/upload/thumb-update-02.jpg" class="link" data-fancybox="gallery">
                                                    <div class="ratio ratio-16x9">
                                                        <img src="assets/img/upload/thumb-update-02.jpg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="assets/img/upload/thumb-update-03.jpg" class="link" data-fancybox="gallery">
                                                    <div class="ratio ratio-16x9">
                                                        <img src="assets/img/upload/thumb-update-03.jpg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="assets/img/upload/thumb-update-04.jpg" class="link" data-fancybox="gallery">
                                                    <div class="ratio ratio-16x9">
                                                        <img src="assets/img/upload/thumb-update-04.jpg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gallery-slider-nav">
                                        <div thumbsSlider="" class="swiper gallery-swiper-">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="ratio ratio-4x3">
                                                        <img src="assets/img/upload/thumb-update-01.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ratio ratio-4x3">
                                                        <img src="assets/img/upload/thumb-update-02.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ratio ratio-4x3">
                                                        <img src="assets/img/upload/thumb-update-03.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ratio ratio-4x3">
                                                        <img src="assets/img/upload/thumb-update-04.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-nav">
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wg-tc">
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <div class="card-left">
                                    <div class="row">
                                        <div class="col" style=" margin-left: -20px; ">
                                            <img src="assets/img/static/img-title-tc.png" alt="">
                                        </div>
                                        <div class="col-auto">

                                        </div>
                                    </div>
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <?php for ($i = 1; $i <= 8; $i++) { ?>
                                                    <div class="txt">พบหญ้าทะเล เกาะยาวน้อยพังงา กลับมาอยู่ในระดับสมบูรณ์</div>
                                                    <div class="txt">ทช. ร่วมสำรวจประเมินสถานภาพสัตว์ทะเลหายากและติดตามตรวจสุขภาพเบื้องต้น</div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                        <div class="swiper-nav">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                    <div class="m-auto pt-3 text-center">
                                        <img src="assets/img/static/img-see-all.png" alt="" style=" max-width: max-content; ">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-right">
                                    <div class="row" style=" justify-content: space-between; ">
                                        <div class="col-auto pt-5 mt-5">
                                            <div class="mb-4">
                                                <img src="assets/img/static/img-title-tc-02.png" alt="">
                                            </div>
                                            <img src="assets/img/static/img-see-all.png" alt="" style=" max-width: max-content; ">
                                        </div>
                                        <div class="col-auto">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                        <div class="swiper-slide">
                                                            <img src="assets/img/upload/thumb-tc-02.png" alt="">
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wg-rule">
                    <div class="container">
                        <img src="assets/img/static/img-title-rule.png" alt="">
                        <div class="swiper mt-5">
                            <div class="swiper-wrapper">
                                <?php for ($i = 1; $i <= 8; $i++) { ?>
                                    <div class="swiper-slide">
                                        <img src="assets/img/upload/thumb-rule-01.png" alt="">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wg-data-center overflow-hidden">
                <img src="assets/img/static/img-wg-data-center.png" alt="">
                <div class="obj">
                    <img src="assets/img/static/obj-coconut.png" alt="">
                </div>
            </div>
            <div class="wg-project">
                <div class="container">
                    <img src="assets/img/static/img-title-project.png" alt="">
                    <div class="swiper mt-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/img/upload/thumb-project-01.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/upload/thumb-project-02.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/upload/thumb-project-03.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/upload/thumb-project-04.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/upload/thumb-project-05.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/upload/thumb-project-01.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/upload/thumb-project-02.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/upload/thumb-project-03.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="bg-middle">
                <div class="wg-relation">
                    <div class="container">
                        <div class="row gutters-100">
                            <div class="col-6 pt-5 pb-5">
                                <img src="assets/img/static/img-relation-01.png" alt="">
                                <div class="swiper mt-5">
                                    <div class="swiper-wrapper">
                                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                                            <div class="swiper-slide">
                                                <img src="assets/img/upload/img-relation-02.png" alt="" style="width: 100%;">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <img src="assets/img/static/img-relation-update.png" alt="">
                                <div class="card-right">
                                    <img src="assets/img/static/img-relation-03.png" alt="">
                                </div>
                                <img src="assets/img/static/img-relation-more.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wg-events">
                <div class="container">
                    <img src="assets/img/static/img-title-event.png" alt="">
                    <div class="swiper mt-5">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <div class="swiper-slide">
                                    <img src="assets/img/upload/thumb-event.png" alt="">
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="wg-tv">
                <div class="container">
                    <div class="bg">
                        <img src="assets/img/background/bg-tv.png" alt="">
                    </div>
                    <div class="block">
                        <div class="swiper mt-5">
                            <div class="swiper-wrapper">
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <div class="swiper-slide">
                                        <img src="assets/img/upload/img-tv-01.jpg" alt="">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="obj">
                    <img src="assets/img/static/obj-fish.png" alt="">
                </div>
            </div>

            <div class="wg-public">
                <div class="container">
                    <div class="bg">
                        <img src="assets/img/static/img-publicj.jpg" alt="">
                        <div class="swiper mt-5">
                            <div class="swiper-wrapper">
                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                    <div class="swiper-slide">
                                        <a href="" class="link mb-3 d-block">
                                            <img src="assets/img/static/img-public.jpg" alt="" class="default">
                                            <img src="assets/img/static/img-public-hover.jpg" alt="" class="hover">
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wg-celendar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card-left">
                                <img src="assets/img/static/img-calendar-title.jpg" alt="">
                                <img src="assets/img/static/img-calendar-date.jpg" alt="" class="mt-4">
                                <div class="box">
                                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                                        <a href="" class="link mb-3 d-block">
                                            <img src="assets/img/static/img-calendar-list.jpg" alt="" class="default">
                                            <img src="assets/img/static/img-calendar-list-hover.jpg" alt="" class="hover">
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="assets/img/static/img-calendar-vote.jpg" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="wg-sea">
                <img src="assets/img/static/img-sea.jpg" alt="" class="">
            </div>

            <div class="wg-info">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="assets/img/static/img-info-01.jpg" alt="" class="">
                        </div>
                        <div class="col">
                            <img src="assets/img/static/img-info-02.jpg" alt="" class="">
                        </div>
                        <div class="col">
                            <div class="card-right">
                                <img src="assets/img/static/img-info-03.jpg" alt="" class="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </section>

        <?php include('inc/footer.php'); ?>

    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>