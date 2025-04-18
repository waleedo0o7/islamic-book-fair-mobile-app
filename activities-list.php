<?php include 'header.php'; ?>

<div class="page inner-page-layout activities">

    <div class="page-header" style="background-image: url(assets/images/book-cover.jpg);">
        <div class="container ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-thumbnail-wrapper">
                        <img src="assets/images/thums/thum-03.jpeg" class="page-thumbnail">
                        <div class="text-wrapper">
                            <p class="text m-0"> +1000 فعالية </p> 
                        </div><!-- text-wrapper -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"> الأنشطة والفعاليات </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape"></div>
    </div> <!-- page-header -->

    <div class="page-content">

        <!-- <div class="date-filter-wrapper bg-white mb-5 py-5">

            <div class="container">
                <input type="text" id="datepicker" class="flat-picker datepicker" style="display: none;" />
            </div>

        </div> -->

        <div class="weekly-calendar-wrapper mb-4">

            <div class="container">

                <div class="calendar-container">
                    <button id="prev-week" class="nav-button"> <i class="fa fa-chevron-right"></i> </button>
                    <div id="week-display" class="week-display"></div>
                    <button id="next-week" class="nav-button"><i class="fa fa-chevron-left"></i></button>
                </div>

            </div>

        </div>

        <div class="container">

            <div class="d-block mb-5">

                <div class="row mb-0">
                    <?php foreach (range(0, 7) as $i) { ?>
                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                            <?php include 'shared-html/activity-card.php' ?>
                        </div>
                    <?php } ?>
                </div>

            </div><!-- d-block -->

            <div class="pagination-btn-wrapper">
                <div class="text-center">
                    <a href="#" class="btn btn-primary w-300px"> عرض المزيد </a>
                </div>
            </div> <!-- pagination-btn-wrapper -->

        </div> <!-- container -->

    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>






