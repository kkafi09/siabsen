/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                navbarColour: "#F5F6FB",
                backgroundColour: "#E9EDF8",
                purpleDark: "#6D6EE2",
                lightPurple: "#9394EE",
                fontColor: "#6C6DE2",
                semiwhite: "#FDFDFD",
                semiblue: "#F2F2FC",
                purpleInfo: "#4153B6",
                lightPurpleInfo: "#6F82E8",
                gray: "#2E2E64",
                infoOrageDark: "#FF9800",
                infoOrangeLight: "#FCBB5C",
                infoBlueDark: "#2196F3",
                infoBlueLight: "#7CC4FE",
                infoRedDark: "#BB3D2C",
                infoRedLight: "#F06F5D",
                divColor: "#9091ED",
                belumAbsenLight: "#EC9696",
                belumAbsenDark: "#F67777",
                masukLight: "#42C0AA",
                masukDark: "#1A927D",
                tableCol: "#9091ED",
            },
            height: {
                sixty: "60%",
                96: "22.2rem",
            },
            maxHeight: {
                80: "18rem",
            },
            dropShadow: {
                shadowAdi: "0px 2px 5px rgba(99, 100, 218, 0.25)",
            },
            fontFamily: {
                sans: ['"Inter"', '"Poppins"', "sans-serif"],
            },
        },
    },
    daisyui: {
        themes: false,
    },
    plugins: [require("daisyui")],
};
