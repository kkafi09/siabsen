import "./bootstrap";
const arr = [
    document.querySelector(".hamburger-button"),
    document.querySelector(".closer-button"),
];
arr.forEach((element) => {
    element.addEventListener("click", () => {
        document
            .querySelector(".navbar-toggler")
            .classList.toggle("-translate-x-full");
        document.body.classList.toggle("overflow-hidden");
        document.querySelector(".black-container").classList.toggle("hidden");
        document.querySelector(".hidden-button").classList.toggle("hidden");
    });
});
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
// countdown
let date = new Date();
let dateNow = date.toDateString();
var countDownDate = new Date(dateNow + " 10:00:00").getTime();
var opener = date.getHours();
const absenButton = document.querySelector(".absen-button");
if (opener >= 6 && opener < 10) {
    absenCounter();
} else {
    document.getElementById("countdown").innerHTML = "Absen Ditutup!";
    absenButton.remove();
}

function absenCounter() {
    setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;

        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML =
            hours + "h " + minutes + "m " + seconds + "s ";

        if (distance <= 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "Absen Ditutup!";
            absenButton.remove();
        }
    }, 1000);
}
