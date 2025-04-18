<?php include 'header.php'; ?>

<div class="page inner-page-layout publishers">

    <div class="page-header" style="background-image: url(assets/images/thums/page-header.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-thumbnail-wrapper">
                        <img src="assets/images/thums/thum-03.jpeg" class="page-thumbnail">
                        <div class="text-wrapper">
                            <p class="text m-0">+900 دار نشر </p>
                        </div><!-- text-wrapper -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"> دور النشر </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape"></div>
    </div> <!-- page-header -->

    <div class="page-content">

        <div class="container">

            <div class="d-block mb-4">
                <h2> 916 دار نشر </h2>
            </div>

            <div class="filter-wrapper mb-5">

                <div class="filter-by-inputs mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group input-with-start-icon">
                                <div class="relative">
                                    <input type="text" class="form-control" placeholder="أبحث عن دور نشر">
                                    <i class="fa fa-search start-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control mb-3">
                                    <option selected> أختر القاعة </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!-- filter-by-inputs -->


                <div class="filter-by-chars d-flex w-100">
                    <div class="chars-wrapper w-100">
                        <a href="#" class="one-chart all active w-auto"> الكل </a>
                        <a href="#" class="one-chart"> أ </a>
                        <a href="#" class="one-chart"> ب </a>
                        <a href="#" class="one-chart"> ت </a>
                        <a href="#" class="one-chart"> ث </a>
                        <a href="#" class="one-chart"> ج </a>
                        <a href="#" class="one-chart"> ح </a>
                        <a href="#" class="one-chart"> خ </a>
                        <a href="#" class="one-chart"> د </a>
                        <a href="#" class="one-chart"> ذ </a>
                        <a href="#" class="one-chart"> ر </a>
                        <a href="#" class="one-chart"> ز </a>
                        <a href="#" class="one-chart"> س </a>
                        <a href="#" class="one-chart"> ش </a>
                        <a href="#" class="one-chart"> ص </a>
                        <a href="#" class="one-chart"> ض </a>
                        <a href="#" class="one-chart"> ط </a>
                        <a href="#" class="one-chart"> ظ </a>
                        <a href="#" class="one-chart"> ع </a>
                        <a href="#" class="one-chart"> غ </a>
                        <a href="#" class="one-chart"> ف </a>
                        <a href="#" class="one-chart"> ق </a>
                        <a href="#" class="one-chart"> ك </a>
                        <a href="#" class="one-chart"> ل </a>
                        <a href="#" class="one-chart"> م </a>
                        <a href="#" class="one-chart"> ن </a>
                        <a href="#" class="one-chart"> هـ </a>
                        <a href="#" class="one-chart"> و </a>
                        <a href="#" class="one-chart"> ي </a>
                    </div>
                </div> <!-- filter-by-chars -->

            </div>

            <div class="row mb-4">
                <?php foreach (range(0, 7) as $i) { ?>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <?php include 'shared-html/publisher-card.php' ?>
                    </div>
                <?php } ?>
            </div>

            <div class="pagination-btn-wrapper">
                <div class="text-center">
                    <a href="#" class="btn btn-primary w-300px"> عرض المزيد </a>
                </div>
            </div>

        </div>
    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>