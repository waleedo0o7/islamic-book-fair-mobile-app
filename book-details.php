<?php include 'header.php'; ?>

<div class="page inner-page-layout book-details">

    <div class="page-content pt-5">

        <div class="book-pref-wrapper mb-4">

            <div class="container">

                <div class="row">
                    <div class="col-lg-2">
                        <div class="image-wrapper">
                            <img src="assets/images/thums/books/05.jpg" class="book-image">
                        </div><!-- image-wrapper -->
                    </div>
                    <div class="col-lg-10">
                        <div class="pref-wrapper">
                            <h1 class="book-title h3 mb-4"> الرحيق المختوم</h1>
                            <p class="auther-name"> <span class="color-gray"> المؤلف : </span> <a href="authers-details.php"> صفي الرحمن المباركفورٍي </a> </p>
                            <p class="publisher-name"> <span class="color-gray"> درا النشر : </span> <a href="publisher-details.php"> التنوير </a></p>
                            <p class="date"> <span class="color-gray"> تاريخ النشر : </span> 24/02/2024 </p>
                            <p class="printing-type"> <span class="color-gray"> نوع الطباعة : </span> فاخر </p>
                        </div><!-- pref-wrapper -->
                    </div>
                </div>

            </div>

        </div> <!-- book-pref-wrapper -->

        <div class="book-about-wrapper mb-5">

            <div class="container">

                <div class="row d-flex justify-content-center align-items-center">

                    <div class="col-md-6">
                        <h4 class="color-primary"> نبذة عن الكتاب </h4>
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

                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="book-pref-text bg-white p-3 rounded lead">
                            <p class="mb-0"> علوم القرآن هو مجال دراسي يتناول مختلف العلوم المتعلقة بالقرآن الكريم، بما في ذلك نزوله، وترتيبه، وجمعه، وكتابته، وقراءاته، وتجويده، وتفسيره، ومعرفة المحكم والمتشابه، والناسخ والمنسوخ، وأسباب النزول، وإعجازه، وإعرابه، ورسمه، وعلم غريب القرآن، وغيرها من العلوم المرتبطة بالقرآن. </p>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->

        </div> <!-- book-about-wrapper -->

        <div class="related-wrapper mb-2">
            <div class="container">
                <h4 class="color-primary mb-4"> كتب اخرى </h4>
                <div class="row">
                    <?php foreach (range(0, 3) as $i) { ?>
                        <div class="col-12 col-md-6 col-lg-3 mb-5">
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