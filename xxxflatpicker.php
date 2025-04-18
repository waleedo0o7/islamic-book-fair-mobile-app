<?php include 'header.php'; ?>
<br><br><br><br><br><br><br><br><br><br><br>

<label for="datepicker">اختر التاريخ:</label>
<input type="text" id="datepicker" class="flat-picker datepicker"  />


<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        // تهيئة التقويم باللغة العربية
        $(".flat-picker").flatpickr({
            locale: "ar", // تحديد اللغة العربية
            dateFormat: "d-m-Y", // تنسيق التاريخ
            disableMobile: true, // تعطيل نمط الهاتف المحمول
            defaultDate: "2025-01-05", // تاريخ افتراضي
            enableTime: false, // تمكين الوقت
            inline: false
        });
    });
</script>


