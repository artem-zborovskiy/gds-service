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
    <div class="container" data-page="about">
        <?php
            include("components/loader.php");
        ?>

        <?php
            include("components/header.php");
        ?>

        <h3 class="main_heading">Про нас:</h3>

        <p class="paragraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nihil in, maxime culpa nulla quasi aperiam ut vitae tenetur rerum modi eligendi quidem, ullam ducimus officia commodi quod autem quis.
            Alias molestiae facere voluptatibus necessitatibus exercitationem consequatur corrupti iusto ad ipsum officia, doloremque, perferendis aperiam minima possimus vitae beatae rem adipisci dolorem delectus in numquam. Veritatis temporibus est similique perferendis.
            Eos a, amet fugiat nemo eaque porro nostrum quod vitae eveniet totam perspiciatis accusantium, explicabo corporis? Unde, magni quos voluptatibus voluptates repellat a quis et voluptatem consequuntur, commodi minima omnis!
        </p>

        <div class="certificates">
            <div id="lightbox_back">
                <div id="lightbox_img"></div>
            </div>

            <div class="certificate_block">
                <div class="certificate_block_block">
                    
                </div>
                <img src="img/certificates/certificate1.png" alt="certificate1" class="zoom">
            </div>
            <div class="certificate_block">
                <img src="img/certificates/certificate2.png" alt="certificate2" class="zoom">
                <img src="img/certificates/certificate3.png" alt="certificate3" class="zoom">
            </div>
            <div class="certificate_block">
                <img src="img/certificates/certificate4.png" alt="certificate4" class="zoom">
                <img src="img/certificates/certificate5.png" alt="certificate5" class="zoom">
            </div>
            <div class="certificate_block">
                <img src="img/certificates/certificate6.png" alt="certificate6" class="zoom">
                <img src="img/certificates/certificate7.png" alt="certificate7" class="zoom">
            </div>
        </div>

        <p class="paragraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nihil in, maxime culpa nulla quasi aperiam ut vitae tenetur rerum modi eligendi quidem, ullam ducimus officia commodi quod autem quis.
            Alias molestiae facere voluptatibus necessitatibus exercitationem consequatur corrupti iusto ad ipsum officia, doloremque, perferendis aperiam minima possimus vitae beatae rem adipisci dolorem delectus in numquam. Veritatis temporibus est similique perferendis.
            Eos a, amet fugiat nemo eaque porro nostrum quod vitae eveniet totam perspiciatis accusantium, explicabo corporis? Unde, magni quos voluptatibus voluptates repellat a quis et voluptatem consequuntur, commodi minima omnis!
        </p>

        <h3 class="main_heading">Замовники</h3>

        <div class="customers_wrapper">
            <div class="customers_block">
                <div class="customer">
                    <img src="img/customers/customer1.png" alt="ТОВ Укрспецгеологія" style="width:30%">
                    ТОВ "Укрспецгеологія"
                </div>
                
                <div class="customer">
                    <img src="img/customers/customer2.png" alt="SELA ENERGY">
                    SELA ENERGY
                </div>
            </div>

            <div class="customers_block">
                <div class="customer">
                    <img src="img/customers/customer3.jpg" alt="Стрийнафтогаз" style="width:30%">
                    Стрийнафтогаз
                </div>

                <div class="customer">
                    <img src="img/customers/customer4.png" alt="EXPERT PETROLEUM">
                    EXPERT PETROLEUM
                </div>
            </div>

            <div class="customers_block">
                <div class="customer">
                    <img src="img/customers/customer5.png" alt="Нафтогаз група">
                    Нафтогаз група
                </div>

                <div class="customer">
                    <img src="img/customers/customer6.jpg" alt="Укрнафта" style="width:35%">
                    Укрнафта
                </div>
            </div>
        </div>

        <p class="paragraph">
            За роки діяльності компанією було виконано більше 500 успішних свердловинних операцій. 
            Роботи проводилися на об'єктах  ГПУ «Шебелинкагазвидобування», ГПУ «Полтавагазвидобування»,  
            БК «Укрбургаз», ПАТ «Укрнафта», ДП «Юсенко-Україна», АТ «Укртрансгаз», ДП «Молтекс нафта і газ»,  
            ПрАТ «Природні Ресурси», ТОВ «Навігатор-Комплект», ТОВ «МАККОМ-ГРУП», ТОВ «Експерт Петролеум Україна», 
            ТОВ «Стрийнафтогаз».
        </p>

        <?php
            include("components/footer.php");
        ?>
    </div>

    <script src="https://kit.fontawesome.com/3bf4b01626.js" crossorigin="anonymous"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/show_menu.js"></script>
    <script src="js/loader.js"></script>
</body>
</html>