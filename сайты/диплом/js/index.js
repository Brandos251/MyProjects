// функционал для слайдера
$("document").ready(function(){
    $("#slider").slick({
        dots: false,
        prevArrow: '<div class="arrow-prev"><i class="fa-solid fa-arrow-left"></i></div>',
        nextArrow: '<div class="arrow-next"><i class="fa-solid fa-arrow-right"></i></div>',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 2
    })
})

//----------функционал для скрытого меню----------
// ****Открытие****
$(".item").on("click", function(){
    $(".hidden-menu").animate({
        "right": 0
    },500)
})


// $(document).ready(function() {

//     var mobileBreakpoint = 768;
    
//     // открытие
//     $(".item").on("click", function() {
//       if ($(window).width() < mobileBreakpoint) {
//         $(".hidden-menu").animate({
//           top: 0
//         }, 500);
//       }
//     });
  
//     // закрытие
//     $(".close").on("click", function() {
//       if ($(window).width() < mobileBreakpoint) {
//         $(".hidden-menu").animate({
//           top: "-300px"
//         }, 200);
//       }
//     });
// });

// ****Закрытие****
$(".close").on("click", function(){
    $(".hidden-menu").animate({
        "right": "-300px"
    }, 200)
})
//-----------------------------------------------   

//----------функционал для фиксации главного меню----------
// $(document).scroll(function(){

//     if($(document).width < 1024)
//         return false;

//     if($(document).scrollTop() > $(".cards-holder").height() / 2)
//         $(".header-holder").addClass("fixed")

//     else
//         $(".header-holder").removeClass("fixed")

// })


//----------функционал для кнопки в подвале----------
$(".up-btn").on("click", function(){
    $("html, body").animate({
        scrollTop: 0
    }, 'slow')
})
//--------------------------------------------------

//----------функционал для ссылок в шапке----------
// первая
document.querySelector('a[href="#id-facts"]').addEventListener('click', function(e){
    e.preventDefault();

    document.querySelector('#id-facts').scrollIntoView({
        behavior: 'smooth'
    })
})

// вторая
document.querySelector('a[href="#id-service"]').addEventListener('click', function(e){
    e.preventDefault();

    document.querySelector('#id-service').scrollIntoView({
        behavior: 'smooth'
    })
})

// третья
document.querySelector('a[href="#id-questions"]').addEventListener('click', function(e){
    e.preventDefault();

    document.querySelector("#id-questions").scrollIntoView({
        behavior: 'smooth'
    })
})

// четвертая
document.querySelector('a[href="#id-company"]').addEventListener('click', function(e){
    e.preventDefault();

    document.querySelector("#id-company").scrollIntoView({
        behavior: 'smooth'
    })
})

// пятая
document.querySelector('a[href="#id-reviews"]').addEventListener('click', function(e){
    e.preventDefault();

    document.querySelector("#id-reviews").scrollIntoView({
        behavior: 'smooth'
    })
})

// шестая
document.querySelector('a[href="#id-map"]').addEventListener('click', function(e){
    e.preventDefault();

    document.querySelector("#id-map").scrollIntoView({
        behavior: 'smooth'
    })

})

//--------------------------------------------------

//переход по кнопке на след страницу
document.getElementById("myButton").addEventListener("click", function(){
    window.location.href = "page.php";
});