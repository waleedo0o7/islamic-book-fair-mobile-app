<?php include 'header.php'; ?>

<div class="mobile-app-media-top-menu">
    <ul class="menu-list">

        <li class="menu-item">
            <a href="gallery-reels.php" class="menu-link"> ريلزات </a>
        </li>

        <li class="menu-item">
            <a href="gallery-videos.php" class="menu-link"> فيديوهات </a>
        </li>

        <li class="menu-item">
            <a href="quotes.php" class="menu-link active"> روائع المقولات </a>
        </li>

        <li class="menu-item">
            <a href="infographic.php" class="menu-link"> انفوجراف </a>
        </li>

        <li class="menu-item">
            <a href="gallery-videos.php" class="menu-link"> موشن جرافيك </a>
        </li>

        <li class="menu-item">
            <a href="gallery-videos.php" class="menu-link"> وايت بورد </a>
        </li>

        <li class="menu-item">
            <a href="gallery-images.php" class="menu-link"> كتاب وكاتب </a>
        </li>

        <li class="menu-item">
            <a href="#" class="menu-link"> معرض الصور </a>
        </li>

    </ul>
</div><!-- mobile-app-media-top-menu -->

<div class="page primary-bg inner-page-layout gallery-videos">

    <div class="page-content">

        <div class="container">

            <div class="row">

                <?php foreach (range(1, 4) as $i) { ?>

                    <div class="col-md-3 mb-4">

                        <?php include 'shared-html/quote-card.php' ?>

                    </div>


                <?php } ?>

            </div> <!-- row -->



        </div> <!-- container -->

    </div><!-- page-content -->



</div> <!-- page -->

<?php include 'footer.php'; ?>