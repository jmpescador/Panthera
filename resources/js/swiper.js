import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';



var swiper = new Swiper(".mySwiper", {
    rewind: true,
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

var swiper = new Swiper(".mySwiper2", {
    rewind: true,
    slidesPerView: 6,
    slidesPerGroupSkip: 1,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 5000, // Cambia el slide cada 5 segundos (ajusta según necesites)
    },
    breakpoints:{
        769: {
            slidesPerView: 6,
            slidesPerGroup: 6,
        },
    }
    
});
