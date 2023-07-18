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
    <div class="container" data-page="contacts">
        <?php
            include("components/loader.php");
        ?>

        <?php
            include("components/header.php");
        ?>

        <h3 class="main_heading">Контакти</h3>

        <div class="paragraph">
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Repellat voluptates quod laboriosam ea at temporibus, quis debitis provident qui repellendus eligendi impedit omnis? 
                Ipsum quo, eveniet porro aperiam perspiciatis sit.
            </p>
        </div>

        <div class="map">
            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
            </div>

            <div class="text_wrapper">
                <div class="paragraph">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, inventore?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="btn fill_hover"><a href="tel: +38 097 406 2696"><i class="fas fa-phone"></i>Зв'язатися з нами</a></div>
                <!-- ----------- MAIL ----------- -->
                <div class="btn fill_hover"><a href="mailto:dratuty44@gmail.com"><i class="fas fa-envelope"></i>email@gmail.com</a></div>
            </div>
        </div>

        <?php
            include("components/footer.php");
        ?>
    </div>

    <script>
        (function () {
            var setting = {"height":550,"width":550,"zoom":16,"queryString":"АТБ, Киев, Украина","place_id":"ChIJwVgS04rP1EARrVRXeErA4Js","satellite":false,"centerCoord":[55.88269146166928,37.5705047844373],"cid":"0x9be0c04a785754ad","lang":"ru","cityUrl":"/russia/moscow","cityAnchorText":"Карта [CITY1], Central Federal District, Россия","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"524489"};
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=524489';
            s.async = true;
            s.onload = function (e) {
                window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
        })();
    </script>
    <script src="https://kit.fontawesome.com/3bf4b01626.js" crossorigin="anonymous"></script>
    <script src="js/show_menu.js"></script>
    <script src="js/loader.js"></script>
</body>
</html>