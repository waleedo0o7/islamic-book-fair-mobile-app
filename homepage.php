<?php include 'header.php'; ?>

<div class="page home-layout home">

    <div class="home-page-content">

        <div id="intro-wrapper">

            <section id="intro">

                <div class="container-start-padding h-100 level p-0">

                    <div class="intro-content-wrapper">

                        <div class="top">

                            <div class="start">
                                <div class="text-images-wrapper">
                                    <img src="assets/images/logo2.png" class="intro-logo d-block mb-2">
                                    <img src="assets/images/intro-text-1.png" class="intro-text-1 d-block mb-2">
                                    <img src="assets/images/intro-text-2.png" class="intro-text-2 d-block">
                                </div>
                            </div>

                            <div class="end">


                                <div class="end-content">


                                    <div class="images-wrapper">
                                        <img src="assets/images/sponsor-logo-2.png" class="sponsor-logo-2 d-block mb-4">
                                        <img src="assets/images/sponsor-logo-1.png" class="sponsor-logo-1 d-block mb-4">
                                    </div>

                                    <div class="social-media-and-statistics-wrapper">

                                        <div class="social-media-icons-wrapper bg-primary-icons mb-4">

                                            <ul class="reset-ul">

                                                <li class="item">
                                                    <a class="item-link" href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a class="item-link" href="#">
                                                        <i class="fab fa-x-twitter"></i>
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a class="item-link" href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>


                                                <li class="item">
                                                    <a class="item-link" href="#">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>

                                        <ul class="reset-list statistics-numbers-wrapper d-flex">
                                            <li class="d-block me-4">
                                                <p class="number lead color-primary mb-0 js-count-up" data-value="150"> </p>
                                                <p class="text color-black h4 mb-0"> دار نشر </p>
                                            </li>
                                            <li class="d-block me-4">
                                                <p class="number lead color-primary mb-0 js-count-up" data-value="3000"> + </p>
                                                <p class="text color-black h4 mb-0">المؤلفين </p>
                                            </li>
                                            <li class="d-block">
                                                <p class="number lead color-primary mb-0 js-count-up" data-value="170000"> </p>
                                                <p class="text color-black h4 mb-0"> الكتب </p>
                                            </li>
                                        </ul><!-- statistics-numbers-wrapper -->
                                    </div><!-- social-media-and-statistics-wrapper -->

                                </div>

                            </div>

                        </div> <!-- top -->

                    </div> <!-- intro-content-wrapper -->

                </div> <!-- container-start-padding -->


            </section><!-- intro -->


        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="https://app.islamicbookfairkw.com/compitation">
                            <img src="https://app.islamicbookfairkw.com/storage/imgs/pESi6zBT2S209xanRAB60j4oPz0NiVX3gY9fl9f2.jpg" style="max-height: 18rem;">

                        </a>

                    </div>

                </div>

            </div>
        </section>


        <section id="activities">

            <div class="container">

                <div class="headline-wrapper mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="headline"> الأنشطة والفعاليات </h1>
                        <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                    </div>
                </div> <!-- headline-wrapper -->


                <div class="swiper-slider-wrapper">

                    <div class="swiper activities-swiper ">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php foreach (range(0, 8) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <?php include 'shared-html/activity-card.php' ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                </div><!-- swiper-slider-wrapper -->

                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center align-items-center">
                        <div class="arrows-wrapper custom-arrow w-100px">
                            <div class="activities-swiper-button-prev swiper-button-prev">
                                <img src="assets/images/arrow-left.svg">
                            </div>
                            <div class="activities-swiper-button-next swiper-button-next">
                                <img src="assets/images/arrow-right.svg">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- activities -->

        <section id="publishers">

            <div class="container">

                <div class="headline-wrapper mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h1 class="headline color-white"> دور النشر </h1>
                        <a href="#" class="btn btn-outline-light"> عرض الكل </a>
                    </div>
                </div> <!-- headline-wrapper -->

                <div class="swiper-slider-wrapper swiper-with-bottom-center-arrows">

                    <div class="swiper publishers-swiper ">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php foreach (range(0, 5) as $i) { ?>

                                <div class="swiper-slide">

                                    <div class="slide-content">


                                        <?php include 'shared-html/publisher-card.php' ?>

                                    </div>
                                </div>
                            <?php } ?>




                        </div>
                    </div>

                    <div class="arrows-wrapper">
                        <div class="publishers-swiper-button-prev swiper-button-prev">
                            <img src="assets/images/arrow-left.svg">
                        </div>
                        <div class="publishers-swiper-button-next swiper-button-next">
                            <img src="assets/images/arrow-right.svg">
                        </div>
                    </div>

                </div><!-- swiper-slider-wrapper -->

            </div>

        </section><!-- publishers -->

        <section id="books">

            <div class="container">

                <div class="headline-wrapper mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h1 class="headline"> الكتب </h1>
                        <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                    </div>
                </div> <!-- headline-wrapper -->

                <div class="swiper-slider-wrapper swiper-with-bottom-center-arrows">

                    <div class="swiper books-swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php foreach (range(0, 4) as $i) { ?>

                                <div class="swiper-slide">

                                    <div class="slide-content">
                                        <?php include 'shared-html/book-card.php' ?>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>

                    <div class="arrows-wrapper">
                        <div class="books-swiper-button-prev swiper-button-prev">
                            <img src="assets/images/arrow-left.svg">
                        </div>
                        <div class="books-swiper-button-next swiper-button-next">
                            <img src="assets/images/arrow-right.svg">
                        </div>
                    </div>

                </div><!-- swiper-slider-wrapper -->

            </div> <!-- container -->

        </section><!-- books -->

        <section id="authers">

            <div class="container">

                <div class="headline-wrapper mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h1 class="headline"> المؤلفين </h1>
                        <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                    </div>
                </div> <!-- headline-wrapper -->

                <div class="swiper-slider-wrapper swiper-with-bottom-center-arrows">

                    <div class="swiper authers-swiper">

                        <div class="swiper-wrapper">

                            <?php foreach (range(0, 4) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <?php include 'shared-html/auther-card.php' ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                    <div class="arrows-wrapper">
                        <div class="authers-swiper-button-prev swiper-button-prev">
                            <img src="assets/images/arrow-left.svg">
                        </div>
                        <div class="authers-swiper-button-next swiper-button-next">
                            <img src="assets/images/arrow-right.svg">
                        </div>
                    </div>

                </div><!-- swiper-slider-wrapper -->

            </div> <!-- container -->

        </section><!-- authers -->

        <section id="quotes">

            <div class="container">

                <div class="headline-wrapper mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h1 class="headline"> روائع المقولات </h1>
                        <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                    </div>
                </div> <!-- headline-wrapper -->

                <div class="swiper-slider-wrapper swiper-with-bottom-center-arrows">

                    <div class="swiper quotes-swiper">

                        <div class="swiper-wrapper">

                            <?php foreach (range(0, 4) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <?php include 'shared-html/quote-card.php' ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                    <div class="arrows-wrapper">
                        <div class="quotes-swiper-button-prev swiper-button-prev">
                            <img src="assets/images/arrow-left.svg">
                        </div>
                        <div class="quotes-swiper-button-next swiper-button-next">
                            <img src="assets/images/arrow-right.svg">
                        </div>
                    </div>

                </div><!-- swiper-slider-wrapper -->

            </div> <!-- container -->

        </section><!-- quotes -->

        <section id="infographic">

            <div class="container">

                <div class="headline-wrapper mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h1 class="headline"> انفوجراف </h1>
                        <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                    </div>
                </div> <!-- headline-wrapper -->

                <div class="swiper-slider-wrapper swiper-with-bottom-center-arrows">

                    <div class="swiper infographic-swiper">

                        <div class="swiper-wrapper">

                            <?php foreach (range(0, 4) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <?php include 'shared-html/infographic-card.php' ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                    <div class="arrows-wrapper">
                        <div class="infographic-swiper-button-prev swiper-button-prev">
                            <img src="assets/images/arrow-left.svg">
                        </div>
                        <div class="infographic-swiper-button-next swiper-button-next">
                            <img src="assets/images/arrow-right.svg">
                        </div>
                    </div>

                </div><!-- swiper-slider-wrapper -->

            </div> <!-- container -->

        </section><!-- infographic -->

        <section id="reels">

            <div class="container">

                <div class="headline-wrapper mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h1 class="headline"> ريلزات توعوية </h1>
                        <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                    </div>
                </div> <!-- headline-wrapper -->

                <div class="swiper-slider-wrapper swiper-with-bottom-center-arrows">

                    <div class="swiper reels-swiper">

                        <div class="swiper-wrapper">

                            <?php foreach (range(0, 4) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <?php include 'shared-html/media-video-card-reels.php' ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                    <div class="arrows-wrapper">
                        <div class="reels-swiper-button-prev swiper-button-prev">
                            <img src="assets/images/arrow-left.svg">
                        </div>
                        <div class="reels-swiper-button-next swiper-button-next">
                            <img src="assets/images/arrow-right.svg">
                        </div>
                    </div>

                </div><!-- swiper-slider-wrapper -->

            </div> <!-- container -->

        </section><!-- reels -->


        <section id="exhibition-guide">
            <div class="exhibition-guide-wrapper text-center">

                <div class="text mb-5">
                    <h1 class="display-3 font-weight-400"> دليل المعرض</h1>
                    <h1 class="display-3 font-weight-400"> هل تبحث عن قراءة جديدة؟ </h1>
                    <h3 class="display-4"> هنا ستجد كل ما تحتاجه من كتب لتغذي ذهنك. </h3>
                </div> <!-- text -->

                <div class="search-wrapper p-3">
                    <div class="form-group input-with-start-icon m-0">
                        <div class="relative">
                            <input type="text" class="form-control" placeholder="البحث...">
                            <i class="fa fa-search start-icon"></i>
                        </div>
                    </div>
                </div> <!-- search-wrapper  -->

            </div><!-- exhibition-guide-wrapper -->

            <div class="shape-warpper">
                <img src="assets/images/exhibition-guide-shape.svg" class="w-100">
            </div>

        </section><!-- exhibition-guide -->


        <section id="sponsors">

            <div class="container">

                <div class="headline-wrapper text-center mb-5">
                    <h1 class="headline"> رعاة المعرض </h1>
                </div> <!-- headline-wrapper -->

                <div class="swiper-slider-wrapper swiper-with-start-end-arrows">

                    <div class="swiper sponsors-swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php foreach (range(0, 7) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <?php include 'shared-html/sponsor-card.php' ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                    <div class="arrows-wrapper">
                        <div class="sponsors-swiper-button-prev swiper-button-prev">
                            <img src="assets/images/arrow-left.svg">
                        </div>
                        <div class="sponsors-swiper-button-next swiper-button-next">
                            <img src="assets/images/arrow-right.svg">
                        </div>
                    </div>
                </div><!-- swiper-slider-wrapper -->

            </div>

        </section><!-- sponsors -->


    </div> <!-- home-page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>

<script src="assets/vendors/waypoints/noframework.waypoints.min.js"></script>


<script>
    $(function() {
        initSponsorsSwiper();
        initActivitiesSwiper();
        initPublishersSwiper();
        initBooksSwiper();
        initAuthersSwiper();
        initMediaSwiper();
    });
</script>