<?php include 'header.php'; ?>

<div class="page inner-page-layout publisher-details">

    <div class="page-content pt-5">

        <div class="publisher-pref-wrapper mb-4">

            <div class="container">

                <div class="row">
                    <div class="col-lg-2">
                        <div class="image-wrapper">
                            <img src="assets/images/thums/publishers/03.jpeg" class="publisher-image">
                        </div><!-- image-wrapper -->
                    </div>
                    <div class="col-lg-10">
                        <div class="pref-wrapper">
                            <h1 class="publisher-title mb-3"> دار التنوير </h1>
                            <p class="lead"> 500 كتاب </p>
                        </div><!-- pref-wrapper -->
                    </div>
                </div>

            </div>

        </div> <!-- book-pref-wrapper -->

        <div class="publisher-about-wrapper mb-5">

            <div class="container">

                <div class="row d-flex justify-content-center align-items-center mb-4">

                    <div class="col-md-6">
                        <h4 class="color-primary"> عن دار النشر </h4>
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

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="book-pref-text bg-white p-3 rounded lead">
                            <p class="mb-0"> دار التنوير هي دار نشر عربية تأسست عام 1975، ولها فروع في مصر ولبنان وتونس. تتميز الدار بنشر الأعمال الفكرية والفلسفية والأدبية، وقد ساهمت في تقديم العديد من المفكرين والكتاب البارزين إلى الساحة الثقافية العربية. من بين هؤلاء عبد الله العروي، ومحمد عابد الجابري، ونصر حامد أبو زيد، وإبراهيم الكوني، وغيرهم. دار التنوير هي دار نشر عربية تأسست عام 1975، ولها فروع في مصر ولبنان وتونس. تتميز الدار بنشر الأعمال الفكرية والفلسفية والأدبية. </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="d-block">
                            <h5 class="color-primary mb-3"> الموقع في المعرض </h5>
                            <div class="publisher-pref-text bg-white p-3 rounded lead">
                                <p class="mb-0"> صاله 4 - بلوك A14 </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="d-block">
                            <h5 class="color-primary mb-3"> الروابط </h5>
                            <div class="publisher-pref-text bg-white p-3 rounded lead">

                                <div class="social-media-icons-wrapper bg-primary-icons">
                                    <ul class="reset-ul">

                                        <li class="item">
                                            <a class="item-link" href="#">
                                                <i class="fa fa-globe"></i>
                                            </a>
                                        </li>

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

                            </div>
                        </div>
                    </div>

                </div>

            </div> <!-- container -->

        </div> <!-- book-about-wrapper -->

        <div class="related-wrapper mb-2">
            <div class="container">
                <h4 class="color-primary mb-4"> إصدارات دار النشر </h4>
                <div class="row">
                    <?php foreach (range(0, 3) as $i) { ?>
                        <div class="col-6 col-md-3 mb-5">
                            <?php include 'shared-html/book-card.php' ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div> <!-- related-wrapper -->

        <div class="show-all-btn-wrapper">
            <div class="text-center">
                <a href="#" class="btn btn-primary w-300px"> عرض الكل </a>
            </div>
        </div> <!-- show-all-btn-wrapper -->

    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>