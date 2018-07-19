window.onscroll = function () {
    toggleStickyNavbar();
};

var navbar = document.getElementById("navbar");

function toggleStickyNavbar() {
    if (window.pageYOffset >= 60) {
        navbar.classList.remove("sticky-navbar");
        navbar.classList.add("fixed-top");
        navbar.classList.add("bg-primary");
    } else {
        navbar.classList.remove("fixed-top");
        navbar.classList.add("sticky-navbar");
        navbar.classList.remove("bg-primary");
    }
}

var scroll = new SmoothScroll('a[href*="#"]', {
    offset: 75,
    clip: true
});

window.sr = ScrollReveal({
    reset: true,
    mobile: false
});

sr.reveal('h1', {
    duration: 1000,
    origin: 'top'
});

sr.reveal('h2, h3, .btn, img', {
    duration: 1000
});

sr.reveal('#planning p', {
    duration: 2000
}, 200);

sr.reveal('.reason-list li', {
    duration: 1200,
}, 120);

sr.reveal('#services p, #about p', {
    duration: 1000
});

sr.reveal('.service-list li', {
    duration: 1000
}, 100);

sr.reveal('.client', {
    duration: 1500
}, 150);

sr.reveal('footer p', {
    duration: 1200
}, 120);
