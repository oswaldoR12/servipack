(()=>{
    "use strict";
    document.addEventListener("DOMContentLoaded", (()=>{
        for (let e of document.getElementsByClassName("block-slider-swiper")) {
            let t = e.querySelectorAll(".slide").length > 1;
            new Swiper(e,{
                autoHeight: !0,
                slideClass: "slide",
                slidesPerView: 1,
                spaceBetween: 60,
                watchOverflow: !0,
                loop: t,
                preloadImages: !1,
                lazy: !0,
                
                a11y: !!t && {
                    prevSlideMessage: "Diapositiva anterior",
                    nextSlideMessage: "Diapositiva siguiente"
                },
                pagination: !!t && {
                    el: e.querySelector(".swiper-pagination"),
                    clickable: !0
                },
                navigation: !!t && {
                    nextEl: e.querySelector(".swiper-button-next"),
                    prevEl: e.querySelector(".swiper-button-prev")
                }
            })
        }
    }
    ))
}
)();
