<?php $i = 1; ?>

<!doctype html>

<!-- <?php if (isset($_GET['dir'])) echo $_GET['dir']; ?>  -->

<html dir="rtl">

<head>

    <meta name="robots" content="noindex, nofollow">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" />

    <!-- Font neo-sans-arabic  -->
    <link href="https://fonts.cdnfonts.com/css/neo-sans-arabic" rel="stylesheet">

    <!-- Select2 -->
    <link href="assets/vendors/select2/select2.min.css" rel="stylesheet" />

    <!-- swiper css -->
    <link href="assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" />

    <!-- video-js -->
    <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />

    <!-- fancybox -->
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- page title -->
    <title> معرض الكتاب الأسلامي </title>

</head>


<!-- LOCAL CS ONLY DO NOT PUPLISH IT  -->
<!-- <style>
    .inner-page-layout {
        background-color: rgb(230, 230, 230);
    }
</style> -->

<body class="<?php if (isset($_GET['mode'])) echo $_GET['mode']; ?>">

    <div class="top-bar-wrapper" id="top-bar">
        <div class="container">
            <div class="top-bar">

                <div class="start">
                    <a href="#" class="logo-wrapper me-3">
                        <img src="assets/images/logo.png" class="logo">
                    </a>
                    <div class="menu-wrapper">
                        <ul class="reset-list menu-items">
                            <li class="menu-item"><a href="homepage.php" class="menu-link active"> الرئيسية </a></li>
                            <li class="menu-item"><a href="publishers-list.php" class="menu-link"> دور النشر </a></li>
                            <li class="menu-item"><a href="books-list.php" class="menu-link"> الكتب </a></li>
                            <li class="menu-item"><a href="authers-list.php" class="menu-link"> المؤلفون </a></li>
                            <li class="menu-item has-submenu">
                                <a class="menu-link"> الميديا </a>
                                <ul class="submenu reset-list">
                                    <li><a href="gallery-reels.php"> ريلزات </a></li>
                                    <li><a href="gallery-videos.php"> فيديوهات </a></li>
                                    <li><a href="quotes.php"> روائع المقولات </a></li>
                                    <li><a href="infographic.php"> انفو جراف </a></li>
                                    <li><a href="gallery-videos.php"> موشن جرافيك </a></li>
                                    <li><a href="gallery-videos.php"> وايت بورد </a></li>
                                    <li><a href="gallery-images.php"> الصور </a></li>
                                </ul>
                            </li>


                            <li class="menu-item"><a href="activities-list.php" class="menu-link"> الفعاليات </a></li>
                            <li class="menu-item"><a href="exhibition-guide.php" class="menu-link"> دليل المعرض </a></li>


                            <li class="menu-item has-submenu">
                                <a class="menu-link"> تسجيل جديد </a>
                                <ul class="submenu reset-list">
                                    <li><a href="#"> تسجيل مؤلف </a></li>
                                    <li><a href="#"> تسجيل دار نشر </a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div> <!-- start -->

                <div class="end">

                    <div class="search-wrapper me-2">
                        <div class="form-group input-with-start-icon m-0">
                            <div class="relative">
                                <input type="text" class="form-control form-control-sm" placeholder="البحث...">
                                <i class="fa fa-search start-icon"></i>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-secondary me-2 header-btn"> الدخول لحسابك </a>
                    <a href="#" class="btn btn-secondary header-btn"> الدعم الفني </a>
                </div> <!-- end -->

            </div> <!-- top-bar -->
        </div> <!-- container -->

    </div> <!-- top-bar-wrapper -->

    <div class="mobile-bar-wrapper">
        <a href="#" class="open-menu-button" id="openMenu">
            <i class="fa-solid fa-bars"></i>
        </a>
        <a href="#" class="mobile-logo-button">
            <img src="assets/images/logo.png" class="mobile-logo-image">
        </a>
    </div>

    <div class="mobile-menu-wrapper" id="mobileMenu">

        <nav class="nav-drill">

            <a href="#" class="close-menu" id="closeMenu">
                <i class="fa fa-times"></i>
            </a>

            <ul class="nav-items nav-level-1">
                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item nav-expand">
                    <a class="nav-link nav-expand-link" href="#"> رابط </a>
                    <ul class="nav-items nav-expand-content">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> رابط جديد </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"> رابط جديد </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"> رابط جديد </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"> رابط جديد </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item nav-expand">
                    <a class="nav-link nav-expand-link" href="#"> رابط </a>
                    <ul class="nav-items nav-expand-content">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> رابط جديد </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"> رابط جديد </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"> رابط جديد </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> رابط </a>
                </li>


            </ul>

            <!-- 
            <div class="mobile-menu-footer">

                <div class="search-wrapper me-2">
                    <div class="form-group input-with-start-icon m-0">
                        <div class="relative">
                            <input type="text" class="form-control form-control-sm" placeholder="البحث...">
                            <i class="fa fa-search start-icon"></i>
                        </div>
                    </div>
                </div>

                <a href="#" class="btn btn-secondary me-2 login-btn"> الدخول لحسابك </a>

            </div> -->

        </nav>
    </div>