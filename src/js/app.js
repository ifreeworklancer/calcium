import ScrollReveal from 'scrollreveal';

/**
 * Animate scroll
 */
if (window.outerWidth > 992) {
    ScrollReveal().reveal('.intro-item', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.intro-image', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.composition-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 200,
    });
    ScrollReveal().reveal('.recommendation-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.recommendation-image', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.warning-row', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.warning-description', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
}