$('.bxslider').bxSlider({
    auto: true,
    autoControls: true,
    stopAutoOnClick: true,
    pager: false,
    slideWidth: 1200,
});

// Changing the defaults
window.sr = ScrollReveal({reset: false});

// Customizing a reveal set
sr.reveal('.text-home', {
    origin: 'top',
    duration: 1500,
    delay: 30,
    distance: '10%',
    mobile: false,
});

sr.reveal('.presentation', {
    origin: 'bottom',
    duration: 1500,
    delay: 30,
    distance: '10%',
    mobile: false,
});

sr.reveal('.fonctionnement', {
    origin: 'bottom',
    duration: 1500,
    delay: 30,
    distance: '10%',
    mobile: false,
});

sr.reveal('.clients', {
    origin: 'bottom',
    duration: 1500,
    delay: 30,
    distance: '50%',
    mobile: false,
});

	