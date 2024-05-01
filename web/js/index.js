$(document).ready(function() {
    let splide = new Splide( '.splide', {
        perPage: $(window).width() < 600 ? 1 : 3,
        perMove: 1,
        rewind : true,
    } );

    splide.mount();
});