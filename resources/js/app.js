import "./bootstrap";
import Alpine from "alpinejs";

import AOS from "aos";
import "aos/dist/aos.css";

window.Alpine = Alpine;
Alpine.start();

AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
    mirror: false,
    anchorPlacement: "top-bottom",
    offset: 120,
    disable: window.innerWidth < 768,
});
