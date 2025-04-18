<?php include 'header.php'; ?>

<div class="page inner-page-layout search-results books-search-results">

    <div class="page-content pt-5">

        <div class="books-search-results-wrapper">

            <div class="container">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"> نتائج البحث </h1>
                    </div>
                    <a href="#" class="btn btn-outline-primary"> العودة إلى البحث </a>
                </div>

                <div class="d-block mb-5">
                    <div class="row mb-0">
                        <?php foreach (range(0, 7) as $i) { ?>
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <?php include 'shared-html/book-card.php' ?>
                            </div>
                        <?php } ?>
                    </div>
                </div><!-- d-block -->

                <div class="pagination-btn-wrapper">
                    <div class="text-center">
                        <a href="#" class="btn btn-primary w-300px"> عرض المزيد </a>
                    </div>
                </div> <!-- pagination-btn-wrapper -->


            </div>


        </div>



    </div><!-- page-content -->

</div> <!-- page default-layout -->

<?php include 'footer.php'; ?>