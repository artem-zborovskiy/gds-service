<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГДС сервіс</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" href="img/logo.png" /> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
            include("components/loader.php");
        ?>

        <?php
            include("components/header.php");
        ?>
    
        <main class="main">
            <div class="first_screen">
                <div>
                    <h1>Ми - це ТОВ "ГДС Сервіс"!</h1>
                    <div class="paragraph">
                        <p>
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>

                <img src="img/map.png" alt="" class="main_map">
            </div>

            <h3 class="main_heading">Чому ми?</h3>

            <div class="cards_wrapper">
                <div class="card">
                    <div class="front">
                        <i class="fas fa-chart-line fa-7x"></i>
                    </div>

                    <div class="back">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ratione!
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <i class="fas fa-clipboard-check fa-7x"></i>
                    </div>

                    <div class="back">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, nemo.
                    </div>
                </div>

                <div class="card">
                    <div class="front">
                        <i class="fas fa-address-card fa-7x"></i>
                    </div>

                    <div class="back">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, repudiandae?
                    </div>
                </div>
            </div>

            <p class="paragraph">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero, quibusdam eius. Beatae maiores explicabo illo iste eligendi aliquam, architecto aspernatur! Nulla, dolor. 
                Quaerat saepe ullam asperiores sed officia iste hic harum id quisquam. 
                Voluptatum assumenda ipsam impedit, sint cum, rem nostrum consequuntur eligendi iusto laboriosam maiores in, nesciunt debitis quidem.
            </p>
    
            <div class="second_screen">
                <h3 class="main_heading">Наша робота це:</h3>

                <div class="icons">
                    <div class="icons_block">
                        <i class="fas fa-shield-alt"></i>
                        Надійність
                    </div>
                    <div class="icons_block">
                        <i class="fas fa-user-tie"></i>
                        Професіоналізм
                    </div>
                    <div class="icons_block">
                        <i class="fas fa-clock"></i>
                        Швидкість виконання
                    </div>
                    <div class="icons_block">
                        <i class="fas fa-hard-hat"></i>
                        Безпека
                    </div>
                </div> 

                <div class="paragraph">
                    <p>
                        ТОВ «ГДС-Сервіс» зареєстровано в м.Івано-Франківск, Україна, свідоцтво про
                        державну реєстрацію<br> №1 119 102 0000 014526 від 22.11.2016г.
                    </p>

                    <p>
                        В 2018р компанія отримала дозвіл на проведення робіт з підвищеною
                        небезпекою.<br>
                        В 2019р дозвіл на проведення прострільно-вибухових робіт.<br>
                        В 2020р дозвіл на проведення робіт з підвищеною небезпекою на нове
                        обладнання. В цьому ж році отримала ліцензію на використання джерел
                        іонізуючого випромінювання (ДІВ) №ОВ 030497.
                    </p>
                </div>
            </div>

            <div class="third_screen">
                <div class="slideshow_container">
                    <div class="slide fade">
                        <img src="img/slider/slide1.jpeg" alt="slide1">
                        <div class="text">ПОВНИЙ КОМПЛЕКС ДОСЛІДЖЕНЬ У ВІДКРИТОМУ СТВОЛІ СВЕРДЛОВИНИ</div>
                    </div>
    
                    <div class="slide fade">
                        <img src="img/slider/slide2.jpeg" alt="slide1">
                        <div class="text">«ГАЗ? НАФТА? ВОДА?» - ВИЗНАЧАЄМО ПОТОЧНИЙ ХАРАКТЕР НАСИЧЕННЯ ПЛАСТІВ</div>
                    </div>
    
                    <div class="slide fade">
                        <img src="img/slider/slide3.jpg" alt="slide1">
                        <div class="text">БЕЗПЕКА СВЕРДЛОВИНИ - ТЕХНІЧНИЙ СТАН</div>
                    </div>
    
                    <a class="prev" onclick="plusSlides(-1)">&#10094</a>
                    <a class="next" onclick="plusSlides(1)">&#10095</a>
                </div>

                <br>
                
                <div class="menu">
                    <span class="dot " onclick="currentSlide(1)"></span>
                    <span class="dot " onclick="currentSlide(2)"></span>
                    <span class="dot " onclick="currentSlide(3)"></span>
                </div>

                <div class="paragraph">
                    <p>
                        Головним пріоритетом компанії є якісне надання послуг та безпечне
                        проведення робіт на об'єктах Замовника з дотриманням вимог техніки безпеки.
                        Кожне замовлення на виконання робіт розглядається технічним відділом , де
                        враховуються всі ризики, які можуть виникнути під час проведення робіт.
                        Роботи проводяться по плану робіт, попередньо погодженим з Замовником. В
                        компанії проводиться постійний аналіз виконаних робіт з метою покращення
                        послуг.
                    </p>

                    <p>
                        На підприємстві працюють висококваліфіковані спеціалісти з великим
                        досвідом робіт в закордонних компаніях. Всі інженери-геофізики працювали в
                        різних компаніях Республіки Казахстан та Російської Федерації.
                    </p>
                </div>
            </div>
        </main>
    
        <?php
            include("components/footer.php");
        ?>
    </div>

    <script src="https://kit.fontawesome.com/3bf4b01626.js" crossorigin="anonymous"></script>
    <script src="js/carousel.js"></script>
    <script src="js/show_menu.js"></script>
    <script src="js/loader.js"></script>
</body>
</html>