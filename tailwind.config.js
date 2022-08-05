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
            },
            height: {
                sixty: "60%",
            },
        },
    },
    plugins: [],
};
