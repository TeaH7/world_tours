document.getElementById("year").innerHTML = new Date().getFullYear()



$(document).ready(function () {
    $("#tours-dropdown").on("mouseenter", function () {
        $("#tours-dropdown ul").show()
    })
    $("#tours-dropdown").on("mouseleave", function () {
        $("#tours-dropdown ul").hide()
    })


})



const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',

    slidesPerView: 3,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            //spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1000: {
            slidesPerView: 3,
            spaceBetween: 25,
        },

    },


});

