<?php include 'header.php'; ?>

<div class="page inner-page-layout sponsors">

    <div class="page-header" style="background-image: url(assets/images/thums/page-header.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-thumbnail-wrapper">
                        <img src="assets/images/thums/thum-03.jpeg" class="page-thumbnail">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"> رعاة المعرض </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape"></div>
    </div> <!-- page-header -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <?php foreach (range(0, 5) as $i) { ?>
                    <div class="col-12 mb-4">
                        <?php include 'shared-html/sponsor-card-wide.php' ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>