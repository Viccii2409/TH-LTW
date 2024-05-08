//swiper
var swiper = new Swiper(".film-content", {
    slidesPerView: 1, // Thay slidesPerview thành slidesPerView
    spaceBetween: 10,
    autoplay: {
      delay: 755500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        280:{
            slidesPerView: 1, // Thay slidesPerview thành slidesPerView
            spaceBetween:10,
        },
        320:{
            slidesPerView: 2, // Thay slidesPerview thành slidesPerView
            spaceBetween:10,
        },
        510:{
            slidesPerView: 2, // Thay slidesPerview thành slidesPerView
            spaceBetween:10,
        },
        758:{
            slidesPerView: 3, // Thay slidesPerview thành slidesPerView
            spaceBetween:15,
        },
        900:{
            slidesPerView: 4, // Thay slidesPerview thành slidesPerView
            spaceBetween:20,
        },

    },
});