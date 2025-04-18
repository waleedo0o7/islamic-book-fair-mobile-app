<?php include 'header.php'; ?>

<div class="page inner-page-layout gallery-images-album">

    <div class="page-header" style="background-image: url(assets/images/book-cover.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-thumbnail-wrapper">
                        <img src="assets/images/book-thum.jpg" class="page-thumbnail">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"> البوم اليوم الأول </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape"></div>
    </div> <!-- page-header -->

    <div class="page-content">

        <div class="container">

            <div class="row">
                <?php foreach (range(1, 8) as $i) { ?>

                    <div class="col-md-3 mb-4">

                        <a
                            data-fancybox="gallery"
                            data-src="assets/images/thums/gallery/0<?php echo $i ?>.jpg"
                            class="co-gallery-card-one-image">

                            <img alt="" class="img-fluid image" src="assets/images/thums/gallery/0<?php echo $i ?>.jpg">

                        </a>

                    </div> <!-- col-md-4 -->

                <?php } ?>

            </div> <!-- row -->

        </div>
    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>

 