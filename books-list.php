<?php include 'header.php'; ?>

<div class="page inner-page-layout books">

    <div class="page-header" style="background-image: url(assets/images/book-cover.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-thumbnail-wrapper">
                        <img src="assets/images/book-thum.jpg" class="page-thumbnail">
                        <div class="text-wrapper">
                            <p class="text m-0"> +10000 كتاب </p>
                        </div><!-- text-wrapper -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"> الكتب </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape"></div>
    </div> <!-- page-header -->

    <div class="page-content">

        <div class="container">

            <div class="d-block mb-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2> الأكثر مشاهدة </h2>
                    <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                </div>
                <div class="row mb-0">
                    <?php foreach (range(0, 7) as $i) { ?>
                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <?php include 'shared-html/book-card.php' ?>
                        </div>
                    <?php } ?>
                </div>
            </div><!-- d-block -->


            <div class="d-block mb-5 d-none">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2> أضيف حديثاً </h2>
                    <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                </div>
                <div class="row mb-0">
                    <?php foreach (range(0, 3) as $i) { ?>
                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                            <?php include 'shared-html/book-card.php' ?>
                        </div>
                    <?php } ?>
                </div>
            </div><!-- d-block -->



            <div class="d-block mb-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2> الأكثر مشاهدة </h2>
                    <a href="#" class="btn btn-outline-primary"> عرض الكل </a>
                </div>
                <div class="row mb-0">
                    <?php foreach (range(0, 3) as $i) { ?>
                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                            <?php include 'shared-html/book-card.php' ?>
                        </div>
                    <?php } ?>
                </div>
            </div><!-- d-block -->


        </div>
    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>