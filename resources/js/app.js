require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let mobMenu = document.getElementById("mob-menu");
let cross = document.getElementById("open");
let hamburgur = document.getElementById("close");
let flag0 = false;
const mobMenu1 = () => {
    if (!flag0) {
        mobMenu.classList.remove("hidden");

        cross.classList.add("hidden");
        hamburgur.classList.remove("hidden");
        flag0 = true;
    } else {
        mobMenu.classList.add("hidden");
        cross.classList.remove("hidden");
        hamburgur.classList.add("hidden");
        flag0 = false;
    }
};
