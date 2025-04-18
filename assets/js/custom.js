$(function () {

    mobileNavMenuRender();

    pageHeaderEffect();

    stickyTopBar();

    if ($("#video-item").length) {

        initVideoDetails();
    }

    initQuotesSwiper();

    initInfographicSwiper();

    initReelsSwiper();

});

let isRTL = false;
let colorPrimary = '#29C0D5'
let colorSuccess = '#50C879'
let colorDanger = '#EF4D57'
let colorWhite = '#FFF'

function initSponsorsSwiper() {

    const sponsorsSwiper = new Swiper('.sponsors-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,



        // Navigation arrows
        navigation: {
            nextEl: '.sponsors-swiper-button-next',
            prevEl: '.sponsors-swiper-button-prev',
        },

        breakpoints: {

            // when window width is >= 992px
            992: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 10
            }
        }

    });

}

function initActivitiesSwiper() {


    const activitiesSwiper = new Swiper('.activities-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,
        slidesPerView: 2,

        // Navigation arrows
        navigation: {
            nextEl: '.activities-swiper-button-next',
            prevEl: '.activities-swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 992px
            992: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });

}

function initPublishersSwiper() {


    const publishersSwiper = new Swiper('.publishers-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,
        slidesPerView: 2,

        // Navigation arrows
        navigation: {
            nextEl: '.publishers-swiper-button-next',
            prevEl: '.publishers-swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 992px
            992: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });

}

function initBooksSwiper() {

    const booksSwiper = new Swiper('.books-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,
        slidesPerView: 2,

        // Navigation arrows
        navigation: {
            nextEl: '.books-swiper-button-next',
            prevEl: '.books-swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 992px
            992: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });

}

function initAuthersSwiper() {

    const authersSwiper = new Swiper('.authers-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,

        // Navigation arrows
        navigation: {
            nextEl: '.authers-swiper-button-next',
            prevEl: '.authers-swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 992px
            992: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });

}

function initQuotesSwiper() {

    const quotesSwiper = new Swiper('.quotes-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,

        // Navigation arrows
        navigation: {
            nextEl: '.quotes-swiper-button-next',
            prevEl: '.quotes-swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 992px
            992: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });

}

function initInfographicSwiper() {

    const infographicSwiper = new Swiper('.infographic-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,

        // Navigation arrows
        navigation: {
            nextEl: '.infographic-swiper-button-next',
            prevEl: '.infographic-swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 992px
            992: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });

}

function initReelsSwiper() {

    const reelsSwiper = new Swiper('.reels-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,

        // Navigation arrows
        navigation: {
            nextEl: '.reels-swiper-button-next',
            prevEl: '.reels-swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 992px
            992: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });

}

function initMediaSwiper() {

    const mediaSwiper = new Swiper('.media-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,

        // Navigation arrows
        navigation: {
            nextEl: '.media-swiper-button-next',
            prevEl: '.media-swiper-button-prev',
        },

        breakpoints: {

            // when window width is >= 480px
            992: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 640px
            1200: {
                slidesPerView: 2.8,
                spaceBetween: 30
            }
        }

    });

}

function initVideoDetails() {
    let videoDetailsPlayer = videojs('video-item', {
        autoplay: false,
        muted: false,
        controls: true,
        preload: 'auto'
    });

}

//////////// MOBILE MENU START ////////////

const openMenuBtn = document.getElementById("openMenu");
const closeMenuBtn = document.getElementById("closeMenu");

openMenuBtn.addEventListener("click", function (e) {
    e.preventDefault();
    $("#mobileMenu").show();
});

closeMenuBtn.addEventListener("click", function (e) {
    e.preventDefault();
    $("#mobileMenu").hide();
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

    openMenuBtn.addEventListener("click", function () {
        $(".header__mobile").fadeIn("slow");
    });

    closeMenuBtn.addEventListener("click", function () {
        $(".header__mobile").fadeOut("slow");
    });
}

let controller = new ScrollMagic.Controller();

function pageHeaderEffect() {

    let bg = $("#intro-wrapper , .page-header ");

    let bgToZero = TweenMax.to(bg, 1, {
        opacity: 0,
        y: '-60px',
    });

    // Create scrollmagic scene
    let parallaxScene = new ScrollMagic.Scene({
        triggerElement: bg, // <-- Use this to select current element
        triggerHook: 0.5,
        duration: '100%',
    }).setTween(bgToZero).addTo(controller);

}

//////////

function stickyTopBar() {

    var menu = document.getElementById("top-bar");
    var isSticky = false;

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 500 && !isSticky) {
            isSticky = true;
            TweenMax.fromTo(menu, 0.5, { position: "fixed", top: -200, ease: Power1.easeInOut }, { position: "fixed", top: 0, ease: Power1.easeInOut });
        } else if (window.pageYOffset <= 500 && isSticky) {
            isSticky = false;
            TweenMax.to(menu, 0.5, { position: "absolute", top: 0 });
        }
    });
}

//////////// MOBILE MENU END ////////////

//animate ".activity-card"
$(document).ready(function () {
    $(".activity-card").hover(
        function () {
            // Mouse enter
            gsap.to($(this).find(".activity-card-content"), {
                backgroundColor: "#ffffffdb", // Change background color
                color: '#000',
                y: '15%',                 // Move up by 10px
                duration: 1,           // Transition time
                ease: "back.out"       // Smooth easing
            });
        },
        function () {
            // Mouse leave
            gsap.to($(this).find(".activity-card-content"), {
                backgroundColor: "#FFFFFF00", // Reset background color
                color: '#FFF',
                y: '70%',                    // Reset position
                duration: 1,            // Transition time
                ease: "back.out"       // Smooth easing
            });
        }
    );
});

//animate ".news-card"
$(document).ready(function () {
    $(".news-card").hover(
        function () {
            // Mouse enter
            gsap.to($(this).find(".news-card-content"), {
                y: '15%',                 // Move up by 10px
                duration: 1,           // Transition time
                ease: "back.out"       // Smooth easing
            });
        },
        function () {
            // Mouse leave
            gsap.to($(this).find(".news-card-content"), {
                y: '70%',                    // Reset position
                duration: 1,            // Transition time
                ease: "back.out"       // Smooth easing
            });
        }
    );
});

$(document).ready(function () {
    const $weekDisplay = $("#week-display");
    const $prevWeekButton = $("#prev-week");
    const $nextWeekButton = $("#next-week");

    // Define the start date (can be modified)
    let startDate = new Date(); // يمكن تعديل هذا التاريخ كبداية
    let currentDate = new Date(startDate);

    // Generate the next 7 days starting from the current date
    function generateWeek(startDate) {
        const days = [];
        for (let i = 0; i < 7; i++) {
            const day = new Date(startDate);
            day.setDate(startDate.getDate() + i);
            days.push(day);
        }
        return days;
    }

    // Render the week
    function renderWeek(startDate) {
        const week = generateWeek(startDate);
        $weekDisplay.empty(); // Clear previous days
        week.forEach((day, index) => {
            const formattedDate = day.toLocaleDateString("ar-EG", {
                weekday: "long", // اسم اليوم
                day: "numeric",  // رقم اليوم
                month: "long",   // اسم الشهر
            });

            const $dayElement = $("<div>")
                .addClass("week-day")
                .text(formattedDate)
                .click(function () {
                    // Alert the selected date
                    alert(day.toLocaleDateString("ar-EG", {
                        weekday: "long",
                        day: "numeric",
                        month: "long",
                        year: "numeric",
                    }));

                    // Update the active class
                    $(".week-day").removeClass("active");
                    $(this).addClass("active");
                });

            // Set today's date as active by default
            if (
                day.toDateString() === new Date().toDateString() &&
                index === 0 // Optional: Default to today's date only if it's the first rendering
            ) {
                $dayElement.addClass("active");
            }

            $weekDisplay.append($dayElement);
        });
    }

    // Navigate weeks
    $prevWeekButton.click(function () {
        currentDate.setDate(currentDate.getDate() - 7);
        renderWeek(currentDate);
    });

    $nextWeekButton.click(function () {
        currentDate.setDate(currentDate.getDate() + 7);
        renderWeek(currentDate);
    });

    // Initialize the calendar starting from the given start date
    renderWeek(currentDate);
});

$(document).ready(function () {
    Fancybox.bind("[data-fancybox]", {});
});


$(document).ready(function () {

    if ($(this).width() > 992) {

        let player = videojs('intro-video-v2', {
            autoplay: true,
            muted: true,
            controls: false,
            preload: 'auto'
        });

    } else {

        let player = videojs('intro-video-v2', {
            autoplay: false,
            muted: true,
            controls: false,
            preload: 'auto'
        });

    }

});