<?php include 'header.php'; ?>

<div class="page inner-page-layout video-reels-details">

    <div class="page-content p-0">

        <div class="video-reels-pref-wrapper bg-white mb-4 py-5">

            <div class="container">

                <div class="row">

                    <div class="col-lg-8 m-auto">

                        <div class="row d-flex justify-content-center align-items-center mb-4">

                            <div class="col-md-6">
                                <h4 class="color-primary video-reels-title"> عنوان الفيديو .. </h4>
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="d-flex justify-content-start justify-content-md-end align-items-center">
                                    <ul class="d-flex social-media-links-colored links-lg reset-list">
                                        <li class="ml-2"> <a href="#" class="link facebook"> <i class="fab  fa-facebook-f"></i> </a> </li>
                                        <li class="ml-2"> <a href="#" class="link twitter-x"> <i class="fab  fa-x-twitter"></i> </a> </li>
                                        <li class="ml-2"> <a href="#" class="link whatsapp"> <i class="fab  fa-whatsapp"></i> </a> </li>
                                        <li class="ml-2"> <a href="#" class="link telegram"> <i class="fa  fa-paper-plane"></i> </a> </li>
                                    </ul> <!-- social-media-links-colored -->
                                </div> <!-- d-flex -->
                            </div> <!-- col-md-6 -->

                        </div> <!-- row -->

                        <div class="image-wrapper mb-3">

                            <!-- if youtube -->
                            <div class="co-video mb-4">
                                <iframe width="100%" height="460" src="https://www.youtube.com/embed/e6JekDN9KRk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div> <!-- co-video -->

                            <!-- if uploaded video -->
                            <div class="co-video mb-4">
                                <video id="video-item" class="video-js vjs-default-skin" controls poster="assets/images/thums/reel-1.jpg">
                                    <source src="assets/images/reel-1.mp4" type="video/mp4">
                                </video>
                            </div> <!-- co-video -->

                        </div><!-- image-wrapper -->

                        <div class="book-pref-text lead">
                            <p class="mb-0"> تفاصيل الفيديو وما ذلت لغة شعب إلا ذل، ولا انحطت إلا كان أمره في ذهاب وإدبار. </p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="related-wrapper mb-2">
            <div class="container">
                <h4 class="color-primary mb-4"> ريلزات ذات صلة </h4>
                <div class="row">
                    <?php foreach (range(0, 3) as $i) { ?>
                        <div class="col-6 col-md-3 mb-5">
                            <?php include 'shared-html/media-video-card-reels.php' ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div> <!-- related-wrapper -->

        <div class="show-all-btn-wrapper mb-5">
            <div class="text-center">
                <a href="#" class="btn btn-primary w-300px"> عرض الكل </a>
            </div>
        </div> <!-- show-all-btn-wrapper -->

    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>