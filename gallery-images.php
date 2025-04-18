<?php include 'header.php'; ?>

<div class="page inner-page-layout gallery-images">

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
                        <h1 class="page-title"> معرض الصور </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape"></div>
    </div> <!-- page-header -->

    <div class="page-content">

        <div class="container">

            <div class="row">
                <?php foreach (range(1, 6) as $i) { ?>

                    <div class="col-md-4 mb-4">

                        <a href="gallery-images-show-one-album.php" class="co-gallery-card-images d-block">

                            <div class="co-images mb-3">

                                <img alt="" class="img-fluid image-1" src="assets/images/thums/gallery/0<?php echo $i ?>.jpg">

                                <img alt="" class="img-fluid image-2" src="assets/images/thums/gallery/0<?php echo $i ?>.jpg">

                                <img alt="" class="img-fluid image-3" src="assets/images/thums/gallery/0<?php echo $i ?>.jpg">

                            </div> <!-- co-images -->

                            <h5 class="text-center color-primary"> البوم اليوم الأول </h5>

                        </a>

                    </div> <!-- col-md-4 -->

                <?php } ?>

            </div> <!-- row -->

        </div>
    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>