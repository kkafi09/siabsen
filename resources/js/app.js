import "./bootstrap";
document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        aspectRatio: 1.5,
        headerToolbar: {
            start: "prev",
            center: "title",
            end: "next",
        },
        events: {
            start: "2022-07-10",
            end: "2022-07-13",
            display: "background",
        },
    });
    calendar.render();
});
