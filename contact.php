<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Адаптация под мобильный -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- budstrap css -->

    <!-- Шрифты, прописывается название своего сайта-->
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Philosopher|Rubik|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <!-- budstrap css -->
    <link rel="stylesheet" href="css/font.css">
    <!-- Подключенный CSS файл шрифты -->
    <link rel="stylesheet" href="css/style_general.css">
    <!-- Подключенный CSS файл -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Меняем на СВОЙ CSS файл -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/font.css">
    <!-- CSS файл с подкл шрифтами -->

    <script src="https://kit.fontawesome.com/758f841a2f.js"></script>
    <!-- Подключение Джава-скрипт, чтобы двигалось -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Подключение Джава-скрипт, чтобы двигалось -->
    <link rel="shortcut icon" href="/img/Glavnaya/ikonka-logo-min-min.png" type="image/png">
    <!-- Include Modernizr in the head, before any other Javascript -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <title>
        Контакты-contact
    </title>
    <link rel="icon" href="img/Glavnaya/Ikonka-Vse2min.png" type="image/png">
    <!-- Вставка иконки -->
</head>

<body>
    <!-- БЛОК НАВИГАЦИИ -->
    <div class="page_demo">
        <!-- Блок в блоке -->
        <nav class="menu">
            <!--Навигация по сайту -->
            <!--Навигация (Верхняя панель, список)  -->
            <ul class="menu_list">

                <!-- Переход на ГЛАВНУЮ при нажатии на эту надпись-->
                <li class="menu_group">
                    <a href="glavnaya.php" class="menu_link">Главная</a>
                </li>

                <!-- Переход на О НАС при нажатии на эту надпись-->
                <li class="menu_group">
                    <a href="about.php" class="menu_link">O нас</a>
                </li>

                <!-- Переход на ПОРТФОЛИО при нажатии на эту надпись-->
                <li class="menu_group">
                    <a href="portfolio.php" class="menu_link">Портфолио</a>
                </li>

                <!-- Переход на ТВОРЧЕСТВО при нажатии на эту надпись-->
                <li class="menu_group">
                    <a href="art.php" class="menu_link">Реставрация * Живопись * Иллюстрация * Дизайн</a>
                </li>

                <!-- Переход на БЛОГ при нажатии на эту надпись-->
                <li class="menu_group">
                    <a href="blog.php" class="menu_link">Блог</a>
                </li>

                <!-- Переход на КОНТАКТ при нажатии на эту надпись-->
                <li class="menu_group">
                    <a href="contact.php" class="menu_link">Обратная связь</a>
                </li>

                <!-- target="_blank" Переход на другой сайт в отдельной вкладке, при нажатии на эту картинку-->
            </ul>
        </nav>
    </div>
    <!-- Конец вставки НАВИГАЦИИ-->

    <!-- Начало карусели-->
    <div class="carousel slide" id="myCarousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
            <li data-slide-to="1" data-target="#myCarousel"></li>
            <li data-slide-to="2" data-target="#myCarousel"></li>
            <li data-slide-to="3" data-target="#myCarousel"></li>
            <li data-slide-to="4" data-target="#myCarousel"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" id="slide1">
                <a href="restavration.php" target="_blank">
                    <!-- Переход на другой сайт при нажатии на 1ю картинку-->
                    <div class="carousel-caption">
                    </div>
                    <!-- end carousel-caption-->
                </a>
            </div>
            <!-- end item -->

            <div class="item" id="slide2">
                <a href="restavration.php" target="_blank">
                    <div class="carousel-caption">
                    </div>
                    <!-- end carousel-caption-->
                </a>
            </div>
            <!-- end item -->

            <div class="item" id="slide3">
                <a href="restavration.php" target="_blank">
                    <div class="carousel-caption">
                    </div>
                    <!-- end carousel-caption-->
                </a>
            </div>
            <!-- end item -->

            <div class="item" id="slide4">
                <a href="restavration.php" target="_blank">
                    <div class="carousel-caption">
                    </div>
                    <!-- end carousel-caption-->
                </a>
            </div>
            <!-- end item -->

            <div class="item" id="slide5">
                <a href="restavration.php" target="_blank">
                    <div class="carousel-caption">
                    </div>
                    <!-- end carousel-caption-->
                </a>
            </div>
            <!-- end item -->

        </div>
        <!-- carousel-inner -->

        <!-- Controls -->
        <a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
        <a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>

    </div>
    <!-- end myCarousel -->
    <!-- Конец карусели-->

    <div class="container my-4">
        <div class="row">
            <div id="response" class="col-md-8">
                <!-- response -успешно отправлено-->
                <h2>Напишите нам</h2>
                <form id="send_form" onsubmit="sendForm(); return false;">
                    <!-- добавляем эту строчку!-->
                    <div class="form-group">
                        <input class="form-control" placeholder="Имя" name="name" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="email" type="email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Сообщение" name="text" cols="30" rows="10"></textarea>
                        <div>
                            <input type="file" name="file">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Отправить">
                    <!-- КНОПКА ""Отправить"-->
                </form>
            </div>
            <div class="col-md-4">
                <h2>Контакты</h2>
                <p>C нами можете связаться по телефонам:</p>
                <p>8-915-154-0000 </p>
                <p>8-915-000-0000 </p>
                <p>8-915-000-0000 </p>
                <p>е-mail: nek.av@mail.ru</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2237.0978652128524!2d37.57128631580867!3d55.89566198843233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5375b898274ef%3A0xc391284bf9fe0978!2z0JDQsdGA0LDQvNGG0LXQstGB0LrQsNGPINGD0LsuLCAzLCDQnNC-0YHQutCy0LAsIDEyNzU3Ng!5e0!3m2!1sru!2sru!4v1568376912685!5m2!1sru!2sru" width="420" height="160" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
        <!-- карта -->
    </div>

    <!-- First try for the online version of jQuery-->
    <script src="http://code.jquery.com/jquery.js"></script>

    <!-- If no online access, fallback to our hardcoded version of jQuery -->
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')
    </script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>

    <script>
        function getXmlHttp() { //Объект XMLHttpRequest (или, сокращенно, XHR) дает возможность браузеру делать HTTP-запросы к серверу без перезагрузки страницы. Как правило, XMLHttpRequest используют для загрузки данных.
            var xmlhttp; //Функция перебирает возможные внутренние реализации и возвращает начальный объект XMLHttpRequest. Существует и масса других рабочих кроссбраузерных функций, однако все они по сути делают то же самое.
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                    xmlhttp = false;
                }
            }
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
                xmlhttp = new XMLHttpRequest();
            }
            return xmlhttp;
        }

        function sendForm() {
            var xmlhttp = getXmlHttp(); //объявляем переменную xmlhttp и вызываем функцию getXmlHttp()
            var data = '?';
            for (let i = 0; i < send_form.elements.length - 1; i++) {
                data += send_form.elements[i].name + '=' + send_form.elements[i].value + '&';
            }
            xmlhttp.open('GET', 'send_mail.php' + data, true); //пишет, что данные должны отправиться в наш php файл
            xmlhttp.send(); //отправляет данные в наш php файл
            xmlhttp.onreadystatechange = function() { //функция, которая говорит, что все завершилось
                if (xmlhttp.readyState == 4) { //если кнопка нажата
                    if (xmlhttp.status == 200) { //если все поля заполнены
                        response.innerHTML = '<h1>' + xmlhttp.responseText + '<h1>'; //информация отправляется к нам на почту и нам выходит сообщение, что все отправленно.
                    }
                }
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>