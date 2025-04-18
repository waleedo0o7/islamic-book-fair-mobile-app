<?php include 'header.php'; ?>

<div class="page inner-page-layout auther-details">

    <div class="page-content pt-5">

        <div class="auther-pref-wrapper mb-4">

            <div class="container">

                <div class="row">

                    <div class="col-lg-2">
                        <div class="image-wrapper">
                            <img src="assets/images/thums/authers/01.jpg" class="auther-image">
                        </div><!-- image-wrapper -->
                    </div>

                    <div class="col-lg-10">
                        <div class="pref-wrapper">
                            <h1 class="publisher-title mb-3"> طارق سويدان </h1>
                            <p class="lead"> باحث وكاتب وداعية إسلامي ومؤرخ وإعلامي </p>
                        </div><!-- pref-wrapper -->
                    </div>
                </div>

            </div>

        </div> 

        <div class="auther-about-wrapper mb-5">

            <div class="container">

                <div class="row d-flex justify-content-center align-items-center mb-4">

                    <div class="col-md-6">
                        <h4 class="color-primary"> عن الكاتب </h4>
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
                            <p class="mb-0"> الدكتور طارق محمد السويدان، من مواليد الكويت عام 1953، هو باحث وكاتب وداعية إسلامي ومؤرخ وإعلامي ومدرب في مجالات الإدارة والقيادة. حصل على درجة البكالوريوس في هندسة البترول من جامعة ولاية بنسلفانيا عام 1975، ثم نال الماجستير والدكتوراه مع مرتبة الشرف في نفس التخصص من جامعة تلسا في أوكلاهوما عامي 1982 و1990 على التوالي. شغل الدكتور السويدان عدة مناصب، منها مدير عام قناة الرسالة الفضائية حتى عام 2013، ورئيس مجلس إدارة شركة الإبداع الخليجي للاستشارات الإدارية والاقتصادية منذ عام 1992. كما أسس وأدار أكثر من 90 شركة ومنظمة، وقدم العديد من الدورات التدريبية في مجالات الإدارة والقيادة، حيث درب أكثر من 100 ألف شخص.</p>
                        </div>
                    </div>
                </div>


            </div> <!-- container -->

        </div> <!-- book-about-wrapper -->

        <div class="related-wrapper mb-2">
            <div class="container">
                <h4 class="color-primary mb-4"> إصدارات الكاتب </h4>
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