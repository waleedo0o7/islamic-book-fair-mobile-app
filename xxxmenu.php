<?php include 'header.php'; ?>

<div class="mobile-bar-wrapper">

    <a href="#" class="open-menu-button" id="openMenu">
        <i class="fa-solid fa-bars"></i>
    </a>

    <a href="#" class="mobile-logo-button">
        <img src="https://static.cdnlogo.com/logos/f/10/facebook.svg" class="mobile-logo-image">
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

            <li>
                <div class="p-3">
                    <button class="btn btn-outline-primary btn-block mb-2"> رابط </button>
                    <button class="btn btn-secondary btn-block"> رابط </button>
                </div>
            </li>


        </ul>
    </nav>
</div>

<?php include 'footer.php'; ?>

<script>
    //////////// MOBILE MENU START ////////////

    const openMenuBtn = document.getElementById("openMenu");
    const closeMenuBtn = document.getElementById("closeMenu");

    openMenuBtn.addEventListener("click", function(e) {
        e.preventDefault();
        $("#mobileMenu").fadeIn("slow");
    });

    closeMenuBtn.addEventListener("click", function(e) {
        e.preventDefault();
        $("#mobileMenu").fadeOut("slow");
    });

    function mobileNavMenuRender() {
        const navExpand = [].slice.call(document.querySelectorAll(".nav-expand"));
        const backLink = `<li class="nav-item">
                                <a class="nav-link nav-back-link" href="javascript:;">
                                    رجوع
                                </a>
                            </li>`;

        navExpand.forEach((item) => {
            item
                .querySelector(".nav-expand-content")
                .insertAdjacentHTML("afterbegin", backLink);
            item
                .querySelector(".nav-link")
                .addEventListener("click", () => item.classList.add("active"));
            item
                .querySelector(".nav-back-link")
                .addEventListener("click", () => item.classList.remove("active"));
        });

        // ---------------------------------------
        // not-so-important stuff starts here

        const openMenuBtn = document.getElementById("openMenu");
        const closeMenuBtn = document.getElementById("closeMenu");

        openMenuBtn.addEventListener("click", function() {
            $(".header__mobile").fadeIn("slow");
        });

        closeMenuBtn.addEventListener("click", function() {
            $(".header__mobile").fadeOut("slow");
        });
    }

    mobileNavMenuRender();

    //////////// MOBILE MENU END ////////////
</script>