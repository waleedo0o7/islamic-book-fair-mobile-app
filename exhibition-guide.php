<?php include 'header.php'; ?>

<div class="page default-layout exhibition-guide">

    <div class="page-content">

        <div id="exhibition-guide" class="reset-height">

            <div class="exhibition-guide-wrapper text-center">

                <div class="text mb-5">
                    <h1 class="display-3 font-weight-400"> ابحث في دليل المعرض </h1>
                </div> <!-- text -->

                <div class="search-wrapper me-3">
                    <div class="form-group input-with-start-icon m-0">
                        <div class="relative">
                            <input type="text" class="form-control" placeholder="البحث...">
                            <i class="fa fa-search start-icon"></i>
                        </div>
                    </div>
                </div> <!-- search-wrapper  -->

            </div><!-- exhibition-guide-wrapper -->

            <div class="shape-warpper">
                <img src="assets/images/exhibition-guide-shape.svg" class="w-100">
            </div>

        </div><!-- exhibition-guide -->

        <div class="exhibition-guide-table-wrapper py-5">

            <h2 class="text-center mb-4"> دليل المعرض </h2>

            <div class="table-wrapper custom-bg mb-4">

                <div class="container">
                    <div class="table-responsive">

                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">اسم الكتاب </th>
                                    <th scope="col">المؤلف</th>
                                    <th scope="col">دور النشر </th>
                                    <th scope="col">الموقع في المعرض</th>
                                    <th scope="col">التصنيف </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach (range(0, 8) as $i) { ?>
                                    <tr>
                                        <td> <span class="bold"> كتاب علوم القرآن </span> </td>
                                        <td>محمد تقى الدين الهلالي</td>
                                        <td>دار تنوير للنشر والتوزيع</td>
                                        <td>صاله 4 - بلوك A14 </td>
                                        <td>علوم إسلامية </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="pagination-btn-wrapper">
                <div class="text-center">
                    <a href="#" class="btn btn-primary w-300px"> عرض المزيد </a>
                </div>
            </div> <!-- pagination-btn-wrapper -->

        </div> <!-- exhibition-guide-table-wrapper -->

    </div><!-- page-content -->

</div> <!-- page default-layout -->

<?php include 'footer.php'; ?>