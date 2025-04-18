<?php include 'header.php'; ?>

<div class="page inner-page-layout infographic-details">

    <div class="page-content p-0">

        <div class="infographic-pref-wrapper bg-white mb-4 py-5">

            <div class="container">

                <div class="row">

                    <div class="col-lg-8 m-auto">

                        <div class="row d-flex justify-content-center align-items-center mb-4">

                            <div class="col-md-6">
                                <h4 class="color-primary quote-title"> لغات الشعوب.. قوامها </h4>
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
                            <img src="assets/images/thums/infographic-0.jpg" class="infographic-image">
                        </div><!-- image-wrapper -->

                        <div class="book-pref-text lead">
                            <p class="mb-0"> وما ذلت لغة شعب إلا ذل، ولا انحطت إلا كان أمره في ذهاب وإدبار. </p>
                        </div>

                    </div>
                </div>

            </div>

        </div> 

        <div class="related-wrapper mb-2">
            <div class="container">
                <h4 class="color-primary mb-4">  انفوجرافيك ذات صلة   </h4>
                <div class="row">
                    <?php foreach (range(0, 3) as $i) { ?>
                        <div class="col-6 col-md-3 mb-5">
                            <?php include 'shared-html/infographic-card.php' ?>
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