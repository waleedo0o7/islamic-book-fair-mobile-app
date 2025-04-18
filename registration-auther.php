<?php include 'header.php'; ?>

<div class="page inner-page-layout activities">

    <div class="page-header" style="background-image: url(assets/images/book-cover.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-thumbnail-wrapper">
                        <img src="assets/images/thums/thum-03.jpeg" class="page-thumbnail">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"> تسجيل ناشر </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape"></div>
    </div> <!-- page-header -->

    <div class="page-content">

        <div class="container">

            <div class="form-wrapper">

                <div class="row mb-4">

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label> اسم الناشر </label>
                            <input type="text" class="form-control" placeholder="اسم دار النشر">
                        </div> <!-- form-group -->
                    </div> <!-- col-md-4 -->

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label> الدولة </label>
                            <input type="text" class="form-control" placeholder="الدولة">
                        </div> <!-- form-group -->
                    </div> <!-- col-md-4 -->

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label> ايميل </label>
                            <input type="text" class="form-control" placeholder="ايميل">
                        </div> <!-- form-group -->
                    </div> <!-- col-md-4 -->

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label> كلمة المرور </label>
                            <input type="password" class="form-control" placeholder="كلمة المرور">
                        </div> <!-- form-group -->
                    </div> <!-- col-md-4 -->

                </div>


                <hr />


                <div class="d-block mb-4">
                    <h3> مواقع التواصل الاجتماعي </h3>
                </div>


                <div class="row mb-4">


                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label> فيسبوك </label>
                            <input type="text" class="form-control" placeholder=" فيسبوك    ">
                        </div> <!-- form-group -->
                    </div> <!-- col-md-4 -->

                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label> يو تيوب </label>
                            <input type="text" class="form-control" placeholder=" يو تيوب    ">
                        </div> <!-- form-group -->
                    </div> <!-- col-md-4 -->
                    <div class="col-md-4">

                        <div class="form-group mb-4">
                            <label> اكس \ تويتر </label>
                            <input type="text" class="form-control" placeholder=" اكس \  تويتر    ">
                        </div> <!-- form-group -->
                    </div> <!-- col-md-4 -->


                </div>

                <hr />

                <div class="row mb-4">


                    <div class="col-md-6">

                        <label class="m-0 mb-3"> كتب سبق نشرها </label>

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                    </div>

                    <div class="col-md-6">

                        <label class="m-0 mb-3"> نبذه عن الناشر </label>

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                    </div>

                </div>



                <div class="d-block w-100 text-center">
                    <a href="#" class="btn w-50 btn-primary mb-5 m-auto"> تسجيل </a>
                </div>


            </div> <!-- form-wrapper -->

        </div> <!-- container -->

    </div><!-- page-content -->

</div> <!-- page -->

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        // تهيئة التقويم باللغة العربية
        $(".date-picker").flatpickr({
            locale: "ar", // تحديد اللغة العربية
            dateFormat: "d-m-Y", // تنسيق التاريخ
            disableMobile: true, // تعطيل نمط الهاتف المحمول
            defaultDate: "2025-01-05", // تاريخ افتراضي
            enableTime: false, // تمكين الوقت
            inline: false
        });
    });
</script>