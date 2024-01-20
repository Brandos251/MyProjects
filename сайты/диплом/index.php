<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="icon" href="img/ico/chip.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/ico/chip.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/2e749508a3.js" crossorigin="anonymous"></script>
    <title>Телемастер</title>
</head>
<body>
    <!-- шапка -->
    <header>
       <div class="container">
        <!-- верхняя часть шапки -->
        <div class="header-holder">
            <div class="logo">
                <img src="img/logo.svg" alt="">
            </div>
            <div class="navigation">
                <a href="#id-facts" class="nav">О нас</a>
                <a href="#" class="nav">Цены</a>
                <a href="#id-service" class="nav">Услуги</a>
                <a href="#id-questions" class="nav">Частые вопросы</a>
                <a href="#id-company" class="nav">Почему мы</a>
                <a href="#id-reviews" class="nav">Клиенты</a>
                <div class="contact">
                    <a href="#" class="item"><i class="fa-solid fa-bars"></i></a>
                </div>
            </div>
            <!-- спрятанное меню -->
            <div class="hidden-menu">
                <span class="close">
                    <i class="fa-solid fa-xmark"></i>
                </span>
                <h2>Контакты:</h2>
                <ul>
                    <li>Номер: +7(910) 767-15-30</li>
                    <li>Email: TeleMaster@mail.ru</li>
                    <li>Где мы находимся: <a href="#id-map" class="hidden-item">Карта</a></li>
                </ul>
            </div>
        </div>
        <!-- нижняя часть шапки -->
        <div class="header-down">
            <div class="title">
                Ремонт электронной<br>техники
            </div>
            <div class="subtext">
                Быстрый и качественный ремонт 
                всех видов<br>цифровой техники с гарантией
                и бесплатной<br>диагностикой
            </div>
            <div class="btn">
                <button class="main-button" id="myButton">Оставить заявку<i class="fa-solid fa-arrow-right active btn"></i></button>
            </div>
        </div>
       </div>
    </header>

    <!-- карточки -->
    <section>
        <div class="container">
            <div class="cards-holder">
                <!-- первая карточка -->
                <div class="card">
                    <div class="image">
                        <img src="img/chip.svg" alt="Картинка">
                    </div>
                    <div class="card-title">
                        Магическая<span>Aтмосфера!</span>
                    </div>
                    <div class="card-subtext">
                        В нашей мастерской царит<br>профессиональная атмосфера,<br>
                        наполненная надежностью и<br>качеством ремонта электротехники
                    </div>
                </div>
                <!-- вторая карточка -->
                <div class="card">
                    <div class="image">
                        <img src="img/chip.svg" alt="Картинка">
                    </div>
                    <div class="card-title">
                        Починим все<span>Быстро!</span>
                    </div>
                    <div class="card-subtext">
                        Качество наших услуг по ремонту
                        электротехники - безупречно!
                    </div>
                </div>
                <!-- третья карточка -->
                <div class="card">
                    <div class="image">
                        <img src="img/chip.svg" alt="Картинка">
                    </div>
                    <div class="card-title">
                        Ремонт без<span>головной боли!</span>
                    </div>
                    <div class="card-subtext">
                        Стоимость ремонта электротехники определяется исключительно
                        объемом работ. Качество нашего ремонта всегда остается
                        на высшем уровне!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- услуги -->
    <section id="id-service">
        <div class="container">
            <div class="title-service">
                Услуги
            </div>
            <!-- верхний блок услуг -->
                <div class="up-price-holder">
                    <!-- первая услуга -->
                    <div class="price">
                        <div class="image-price">
                            <img src="img/PC.svg" alt="Иконка компьютера">
                        </div>
                        <div class="price-title">
                            Компьютеры
                        </div>
                        <div class="price-description">
                            Наши специалисты<br>осуществляют качественный<br>ремонт
                            компьютеров любых<br>производителей 
                        </div>
                    </div>
                    <!-- вторая услуга -->
                    <div class="price">
                        <div class="image-price">
                            <img src="img/mobile.svg" alt="Иконка телефона">
                        </div>
                        <div class="price-title">
                            Телефоны
                        </div>
                        <div class="price-description">
                            Специалисты сервисного<br>центра осуществляют<br>базовый ремонт
                            сотовых<br>телефонов за 15 минут
                        </div>
                    </div>
                    <!-- третья услуга -->
                    <div class="price">
                        <div class="image-price">
                            <img src="img/tablet.svg" alt="Иконка планшета">
                        </div>
                        <div class="price-title">
                            планшеты
                        </div>
                        <div class="price-description">
                            Ремонтируем неисправные планшеты.<br>
                            Первую диагностику планшета<br>можно произвести
                            сразу же<br>на месте
                        </div>
                    </div>
                </div>
                <!-- нижний блок услуг -->
                <div class="down-price-holder">
                    <!-- четвертая услуга -->
                    <div class="price">
                        <div class="image-price">
                            <img src="img/laptop.svg" alt="Иконка ноутбука">
                        </div>
                        <div class="price-title">
                            Ноутбуки
                        </div>
                        <div class="price-description">
                            Ремонтируем, восстанавливаем,<br>меняем, чистим, 
                            настраиваем и устраняем практически все неисправности 
                        </div>
                    </div>
                    <!-- пятая услуга -->
                    <div class="price">
                        <div class="image-price">
                            <img src="img/radio.svg" alt="Иконка радио">
                        </div>
                        <div class="price-title">
                            Радио
                        </div>
                        <div class="price-description">
                            Наш сервисный центр<br>оказывает полный комплекс профессиональных
                            услуг по ремонту радиоаппаратур
                        </div>
                    </div>
                    <!-- шестая услуга -->
                    <div class="price">
                        <div class="image-price">
                            <img src="img/TV.svg" alt="Иконка телевизора">
                        </div>
                        <div class="price-title">
                            Телевизоры
                        </div>
                        <div class="price-description">
                        Ремонт телевизоров различных марок
                        с предварительной диагностикой
                        и последующим восстановлением
                        </div>
                    </div>
                </div>
                <div class="button">
                    <a href="#" class="btn-service">
                        Стоимость услуг
                    </a>
                </div>
        </div>
    </section>

    <!-- баннер -->
    <section class="banner">
        <div class="container">
            <div class="banner-title">
                -20% на первый ремонт
            </div>
            <div class="banner-subtext">
                оставьте заявку и получите скидку 20%
                на<br>Ваш первый ремонт в нашем сервисном центре! 
            </div>
            <div class="button">
                <a href="registration.php" target="_blank" class="btn-banner active">
                    Получить скидку
                </a>
            </div>
        </div>
    </section>

    <!-- работа сайта -->
    <section class="work">
        <div class="container">
            <div class="work-title">
                Как мы работаем?
            </div>
            <div class="work-holder">
                <div class="work-image">
                    <img src="img/image-work.png" alt="" id="work-image">
                </div>
                <!-- первый текст -->
                <!-- <div class="firstText">
                    <div class="firstText-title">
                        Сообщаете о проблеме
                    </div>
                    <div class="firstText-subText">
                        Звоните в наш центр, описываете Вашу<br>проблему, 
                        в тот же день наш мастер<br>приезжает к Вам
                    </div>
                </div> -->
                <!-- второй текст -->
                <!-- <div class="secondText">
                    <div class="firstText-title">
                        Бесплатная диагностика
                    </div>
                    <div class="firstText-subText">
                        Наш мастер произведет диагностику,<br>
                        сообщит о проблеме и предложит<br>решение
                    </div>
                </div> -->
                <!-- третий текст -->
                <!-- <div class="thirdText">
                    <div class="firstText-title">
                        Ремонт
                    </div>
                    <div class="firstText-subText">
                        Мы договоримся о цене<br>и сроках, мастер начнет работу
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- отзывы -->
    <section class="reviews" id="id-reviews">
        <div class="container">
            <div class="reviews-title">
                Отзывы наших клиентов
            </div>
            <!-- верхний блок отзывов -->
            <div class="up-reviews-holder">
                <!-- первый отзыв -->
                <div class="full">
                    <div class="up-reviews-title">
                        Поменяли заднюю панель и дисплей на iPhone 6, 
                        сделали<br>все быстро, качественно и недорого. 
                        Я попросил мастера<br>приехать ко мне в офис, 
                        и уже через час мой телефон был<br>отремонтирован! 
                        Спасибо большое!
                    </div>
                    <div class="user">
                        <div class="up-name">
                            Михаил Яковлев
                        </div>
                        <div class="user-post">
                            Менеджер
                        </div>
                </div>
                </div>
                 <!-- второй отзыв -->
                <div class="full">
                    <div class="up-reviews-title">
                        Отличный сервис и низкие цены! Ребята<br>помогли мне
                        отремонтировать ноутбук, когда я<br>уже думала что он
                        больше не будет работать!<br>Спасибо!
                    </div>
                    <div class="user">
                        <div class="up-name">
                            Александра Тихонова
                        </div>
                        <div class="user-post">
                            Студентка
                        </div>
                    </div>
                </div>
            </div>
            <!-- нижний блок отзывов -->
            <div class="down-reviews-holder">
                <!-- третий отзыв -->
                <div class="full">
                    <div class="up-reviews-title">
                        Уже не первый раз обращаюсь сюда со своим<br>компьютером.
                        И каждый раз остаюсь доволен работой,<br>
                        обращением и ценовой политикой.Спасибо большое!
                    </div>
                    <div class="user">
                        <div class="up-name">
                            Сергей Быков
                        </div>
                        <div class="user-post">
                            Экономист
                        </div>
                    </div>
                    </div>
                     <!-- четвертый отзыв -->
                    <div class="full">
                        <div class="up-reviews-title">
                            Обратилась в субботу. Сдавала телефон Samsung Galaxy
                            с<br>разбитым стеклом, забрала как новенький, 
                            и цены не<br>завышены. Буду без сомнения рекомендовать Вас!
                        </div>
                        <div class="user">
                            <div class="up-name active">
                                Светлана Климова
                            </div>
                            <div class="user-post">
                                Бухгалтер
                            </div>
                        </div>
                    </div>
            </div>
            <!-- реклама почты -->
            <div class="add-mail">
                Если Вы обращались в наш сервис, 
                пишите нам на<br><span class="mail">TeleMaster@mail.ru</span>. 
                Мы бы очень хотели узнашь Ваше мнение о<br>нашей работе!
            </div>
        </div>
    </section>

    <!--компания-->
    <section class="company" id="id-company">
        <div class="container">
            <div class="company-title">
                Почему выбирают нас?
            </div>
                <div class="first-company">
                    <!-- 1 факт -->
                    <div class="left">
                        <img src="img/сup.svg" alt="">
                    </div>
                    <div class="right">
                        <div class="right-title">
                            10 лет опыта в ремонте электротехники
                        </div>
                        <div class="right-description">
                            Мы обладаем богатым опытом в ремонте электротехники
                            и выполнили множество работ за нашу долгую историю. 
                            Наши мастера быстро и профессионально выполняют свою работу, 
                            что является нашим неоспоримым преимуществом
                        </div>
                    </div>
                </div>
                <div class="second-company">
                    <!-- 2 факт -->
                    <div class="left">
                        <img src="img/heart.svg" alt="">
                    </div>
                    <div class="right">
                        <div class="right-title">
                            Бесплатная диагностика
                        </div>
                        <div class="right-description">
                            В нашем сервисном центре мы предлагаем быструю, 
                            качественную и бесплатную диагностику вашей электротехники
                        </div>
                    </div>
                </div>
                <div class="third-company">
                    <!-- 3 факт -->
                    <div class="left">
                        <img src="img/user.svg" alt="">
                    </div>
                    <div class="right">
                        <div class="right-title">
                            Индивидуальный подход
                        </div>
                        <div class="right-description">
                            Быстрый ремонт в любое удобное для Вас время и место
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- ФАКТЫ -->
    <section class="facts" id="id-facts">
        <div class="container">
            <div class="facts-title">
                Некоторые факты о нас
            </div>
                <div class="up-facts">
                    <div class="facts-description">
                        Мы предлагаем услуги по ремонту и восстановлению электронной техники.<br>
                        Наша команда опытных специалистов готова помочь Вам в любой<br> ситуации,
                        обеспечивая выполнение ремонта в оговоренный срок.
                        Мы занимаемся<br>ремонтом смартфонов марок
                        Nokia, Samsung, Fly, Huawei, а также<br>всех моделей устройств 
                        Apple и другой электроники.<br><br>Наш офис расположен на севере города,
                        рядом со станцией<br>метро "Алтуфьево". Кроме того, мы организуем 
                        доставку после ремонта<br>по всему городу. Просто свяжитесь с нами, 
                        и мы<br>решим Вашу проблему с электроникой.
                    </div>
                </div>
                <div class="down-facts">
                    <div class="down-facts-title">
                        Немного фотографий
                    </div>
                    <div id="slider">
                        <div><img src="img/слайдер/laptop.jpg" alt="картинка ноутбука" class="slider-image"></div>
                        <div><img src="img/слайдер/mobile.jpg" alt="картинка телефона" class="slider-image"></div>
                        <div><img src="img/слайдер/pc.jpg" alt="картинка компьютера" class="slider-image"></div>
                        <div><img src="img/слайдер/tablet.jpg" alt="картинка планшета" class="slider-image"></div>
                    </div>
                </div>
        </div>
    </section>

    <!-- ЧАСТЫЕ ВОПРОСЫ -->
    <section class="questions" id="id-questions">
        <div class="container">
            <div class="questions-title">
                Частые вопросы
            </div>
            <div class="comments-full">
                <!-- первый коммент -->
                <div class="comments-holder">
                    <div class="comments">
                        <div class="user-name">
                            Ульяна:
                        </div>
                        <div class="user-question">
                            Возможно ли оплатить работу с помощью банковской карты?
                        </div>
                    </div>
                    <div class="comments">
                        <div class="user-name">
                            Поддержка:
                        </div>
                        <div class="user-question-company">
                            Работу можно оплатить как наличными, так и с помощью банковской карты.
                        </div>
                    </div>
                </div>
                 <!-- второй коммент -->
                 <div class="comments-holder-two">
                    <div class="comments">
                        <div class="user-name">
                            Ульяна:
                        </div>
                        <div class="user-question">
                            Какой срок гарантии?
                        </div>
                    </div>
                    <div class="comments">
                        <div class="user-name">
                            Поддержка:
                        </div>
                        <div class="user-question-company">
                            На ремонтные работы предоставляется гарантия, 
                            длительность которой зависит от типа работ. 
                            Гарантийный срок для всех работ, кроме тех, 
                            что связаны с обработкой от влаги, составляет 
                            один месяц. Гарантийный срок на работы, связанные 
                            с обработкой от влаги, составляет один день.
                        </div>
                    </div>
                </div>
                 <!-- третий коммент -->
                 <div class="comments-holder-three">
                    <div class="comments">
                        <div class="user-name">
                            Ульяна:
                        </div>
                        <div class="user-question">
                            Вы используете оригинальные запчасти?
                        </div>
                    </div>
                    <div class="comments">
                        <div class="user-name">
                            Поддержка:
                        </div>
                        <div class="user-question-company">
                            Да. Мы работаем только с новыми оригинальными запасными частями, 
                            которые поставляются напрямую от производителей.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--карта и контакты-->
    <section class="map" id="id-map">
        <div class="container">
            <div class="map-title">Где нас искать и как с нами связаться</div>
            <div class="holder">
                <div class="yandex-map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aeb761b3cd755d581126c20353d80c7343f13c9f991aefdc7f1b2b1c31d808099&amp;width=525&amp;height=477&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="yandex-contact">
                    <div class="yandex-title">
                        Контакты:
                    </div>
                    <div class="text-and-number">
                        <div class="yandex-number">
                            +7(910) 767-15-30
                        </div>
                        <div class="yandex-mail">
                            TeleMaster@mail.ru
                        </div>
                        <div class="yandex-description">
                            Мы находимся на севере города, ближайшая станция метро “Алтуфьево”
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- подвал -->
    <footer>
        <div class="container">
            <div class="footer-holder">
                <div class="up-btn">
                    <i class="fa-solid fa-arrow-up"></i>
                </div>
                <div class="copy">
                    Все права защищены &copy;
                </div>
            </div>
        </div>
    </footer>

    <!-- скрипты -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>