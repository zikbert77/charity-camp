$(document).ready(function() {
    let splide = new Splide( '.splide', {
        perPage: 3,
        perMove: 1,
        rewind : true,
    } );

    splide.mount();


    // const container = document.getElementById("myCarousel2");
    // const options = {
    //     slidesPerPage: 3,
    // };
    //
    // new Carousel(container, options);

    // let galleryCarouselSelector = document.querySelector(".carousel");
    // if (galleryCarouselSelector) {
    //     const galleryCarousel = new Carousel(galleryCarouselSelector, {
    //         slidesPerPage: 3,
    //         center: true,
    //         dots: true,
    //     });
    //
    //     Fancybox.bind('[data-fancybox="gallery"]', {
    //         Carousel: {
    //             on: {
    //                 change: (that) => {
    //                     galleryCarousel.slideTo(galleryCarousel.findPageForSlide(that.page), {
    //                         friction: 0,
    //                     });
    //                 },
    //             },
    //         },
    //     });
    // }
});