import Swal from "sweetalert2";
let date = new Date();
let status = document.getElementById("statusAbsen").innerHTML;
const greet = (clock) => {
    if (clock >= 4 && clock <= 11) {
        return "Selamat Pagi!";
    } else if (clock > 11 && clock < 15) {
        return "Selamat Siang!";
    } else if (clock >= 15 && clock <= 18) {
        return "Selamat Sore!";
    } else if (clock > 18 || clock < 3) {
        return "Selamat Malam!";
    }
};

const success = () => {
    Swal.fire({
        icon: "success",
        title: greet(date),
        text: `Status Kehadiran anda: ${status}`,
    });
};

document.getElementById("sweet-alert").addEventListener("load");
Swal.fire({
    icon: "error",
    title: "Error",
    text: `Password dan Email tidak terdaftar`,
});
