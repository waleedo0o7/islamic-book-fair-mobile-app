<?php include 'header.php'; ?>



<div class="page inner-page-layout books">


    <div class="page-content">


        <div class="calendar-container">
            <button id="prev-week" class="nav-button">❮</button>
            <div id="week-display" class="week-display"></div>
            <button id="next-week" class="nav-button">❯</button>
        </div>




    </div><!-- page-content -->

</div> <!-- page -->



<?php include 'footer.php'; ?>


<script>
    const weekDisplay = document.getElementById("week-display");
    const prevWeekButton = document.getElementById("prev-week");
    const nextWeekButton = document.getElementById("next-week");

    // Get the current date and calculate the start of the week
    let currentDate = new Date();

    function getStartOfWeek(date) {
        const day = date.getDay();
        const diff = date.getDate() - day + (day === 0 ? -6 : 1); // Adjust when day is Sunday
        return new Date(date.setDate(diff));
    }

    // Generate the week days
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
        weekDisplay.innerHTML = "";
        week.forEach(day => {
            const dayElement = document.createElement("div");
            dayElement.classList.add("week-day");
            dayElement.innerText = day.toLocaleDateString("en-US", {
                weekday: "short",
                day: "numeric",
                month: "short",
            });
            weekDisplay.appendChild(dayElement);
        });
    }

    // Navigate weeks
    prevWeekButton.addEventListener("click", () => {
        currentDate.setDate(currentDate.getDate() - 7);
        renderWeek(getStartOfWeek(currentDate));
    });

    nextWeekButton.addEventListener("click", () => {
        currentDate.setDate(currentDate.getDate() + 7);
        renderWeek(getStartOfWeek(currentDate));
    });

    // Initialize the calendar
    renderWeek(getStartOfWeek(currentDate));
</script>