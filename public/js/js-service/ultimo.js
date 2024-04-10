// Swiper últimos
'use strict';
document.addEventListener("DOMContentLoaded", () => {
    let selector = '.testimonios-ultimos .swiper';
    for (let sliderWrapper of document.querySelectorAll(selector)) {
        let view5 = sliderWrapper.classList.contains('ult-slider-view-5');
        let sliderElement = sliderWrapper.querySelector('.swiper-container');
        let slidePerView = ("slidesperview" in sliderElement.dataset) ? parseInt(sliderElement.dataset['slidesperview']) : 1;
        let slides = sliderElement.querySelectorAll(".slide");
        let sliding = slides.length > 1;
        if (view5) {
            new Swiper(sliderElement, {
                slideClass: 'slide',
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 10,
                watchSlidesVisibility: sliding && slidePerView > 1,
                watchOverflow: true,
                breakpoints: {
                    992: {
                        slidesPerView: slidePerView,
                        slidesPerGroup: slidePerView,
                        spaceBetween: 20,
                    },
                },
                a11y: (!sliding) ? false : {
                    prevSlideMessage: 'Diapositiva anterior',
                    nextSlideMessage: 'Diapositiva siguiente',
                },
                pagination: (!sliding) ? false : {
                    el: sliderElement.querySelector('.swiper-pagination-outer'),
                    clickable: true,
                },
                navigation: (!sliding) ? false : {
                    nextEl: sliderWrapper.querySelector('.swiper-navigation-outer > .swiper-button-next'),
                    prevEl: sliderWrapper.querySelector('.swiper-navigation-outer > .swiper-button-prev'),
                },
            });
        } else {
            new Swiper(sliderElement, {
                slideClass: 'slide',
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 10,
                watchSlidesVisibility: sliding && slidePerView > 1,
                watchOverflow: true,
                breakpoints: {
                    576: {
                        slidesPerView: (slidePerView > 2) ? 2 : slidePerView,
                        slidesPerGroup: (slidePerView > 2) ? 2 : slidePerView,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: slidePerView,
                        slidesPerGroup: slidePerView,
                        spaceBetween: 20,
                    },
                },
                a11y: (!sliding) ? false : {
                    prevSlideMessage: 'Diapositiva anterior',
                    nextSlideMessage: 'Diapositiva siguiente',
                },
                pagination: (!sliding) ? false : {
                    el: sliderElement.querySelector('.swiper-pagination-outer'),
                    clickable: true,
                },
                navigation: (!sliding) ? false : {
                    nextEl: sliderWrapper.querySelector('.swiper-navigation-outer > .swiper-button-next'),
                    prevEl: sliderWrapper.querySelector('.swiper-navigation-outer > .swiper-button-prev'),
                },
            });
        }
    }
});









