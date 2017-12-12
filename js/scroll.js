// Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal('.text-home', { 
    origin: 'top',
    duration: 1500,
    delay: 30,
    distance: '10%',
});

sr.reveal('.presentation', { 
    origin: 'left',
    duration: 1500,
    delay: 30,
    distance: '10%',
});

sr.reveal('.fonctionnement', { 
    origin: 'rigth',
    duration: 1500,
    delay: 30,
    distance: '10%',
});

sr.reveal('.clients', { 
    origin: 'bottom',
    duration: 1500,
    delay: 30,
    distance: '50%',
});