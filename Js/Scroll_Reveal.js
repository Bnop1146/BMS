


(function scrollReveal() {
    const revealChildren = sr.reveal('.card-title, .card-text', {
        duration   : 500,
        scale      : 1,
        distance   : '20px',
        origin     : 'bottom',
        reset      : true,
        easing     : 'ease-out',
        viewFactor : 1,
    }, 75);
    window.sr = ScrollReveal();

    sr.reveal('.card-box', {
        duration   : 600,
        distance   : '20px',
        easing     : 'ease-out',
        origin     : 'bottom',
        reset      : true,
        scale      : 1,
        viewFactor : 0,
        afterReveal  : revealChildren,
    }, 150);

})();



