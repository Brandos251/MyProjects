// вешаем обработчик события на класс fixed
$(document).scroll(function(){

    if($(document).width < 1024)
        return false;
    //проверяем в пикселях сколько проскроллили и если больше чем половина высоты то пишем код
    if($(document).scrollTop() > $(".full-page").height() / 2)
        $("header").addClass("fixed")
    else
        $("header").removeClass("fixed") 
})

// обработчик событий при нажатии на класс up-btn
$(".up-btn").on("click", function(){
    $("html, body").animate({
        scrollTop: 0
    }, 'slow')
})

//обработчик событий для выезда меню справа для кнопки show-menu
$("#show-menu").on("click", function(){
    $("#hidden-menu").animate({
        "right": 0
    }, 500)
})

//обработчик событий для заезда меню справа для кнопки .close
$("#hidden-menu .close").on("click", function(){
    $("#hidden-menu").animate({
        "right": "-300px"
    }, 200)
})

//функционал для слайдера
$("document").ready(function(){
    $("#slider").slick({
        dots: false,
        prevArrow: '<div class="arrow-prev"><i class="fa-solid fa-arrow-left"></i></div>', 
        nextArrow: '<div class="arrow-next"><i class="fa-solid fa-arrow-right"></i></div>', 
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 2,
    })
});