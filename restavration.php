<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Адаптация под мобильный -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Pacifico|Philosopher|Rubik|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <!-- budstrap css -->
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <!-- Шрифты, прописывается название своего сайта-->
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- меняет шрифт -->
    <link rel="stylesheet" href="css/style_general.css">
    <link rel="stylesheet" href="css/styles-restavrat.css">
    <!-- Меняем на СВОЙ CSS файл -->

    <link rel="stylesheet" href="css/font.css">
    <!-- Меняем на CSS -->
    <link rel="stylesheet" href="css/about.css">
    <!-- Меняем на CSS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="https://kit.fontawesome.com/758f841a2f.js"></script>
    <!-- Подключение Джава-скрипт, чтобы двигалось -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Подключение Джава-скрипт, чтобы двигалось -->

    <link rel="shortcut icon" href="/img/Glavnaya/ikonka-logo-min-min.png" type="image/png">

    <title>
        Реставрация-restavration
    </title>
    <link rel="icon" href="img/Glavnaya/Ikonka-Vse2min.png" type="image/png">
    <!-- Вставка иконки -->

</head>

<body>
    <div>
        <div class="page">
            <!-- Блок навигации -->
            <div class="page_demo">
                <!-- Блок в блоке -->
                <nav class="menu">
                    <!--Навигация по сайту -->
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
            </div>
        </div>

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
                    <a href="portfolio.php" target="_blank">
                        <!-- Переход на другой сайт при нажатии на 1ю картинку-->
                        <div class="carousel-caption">
                            <h4>РЕСТАВРАЦИЯ</h4>
                            <p>художественно-реставрационные работы на фасадах и в интерьерах - реставрация и воссоздание живописи, штукатурная отделка и роспись стен</p>
                        </div>
                        <!-- end carousel-caption-->
                    </a>
                </div>
                <!-- end item -->

                <div class="item" id="slide2">
                    <a href="portfolio.php" target="_blank">
                        <div class="carousel-caption">

                        </div>
                        <!-- end carousel-caption-->
                    </a>
                </div>
                <!-- end item -->

                <div class="item" id="slide3">
                    <a href="portfolio.php" target="_blank">
                        <div class="carousel-caption">
                        </div>
                        <!-- end carousel-caption-->
                    </a>
                </div>
                <!-- end item -->

                <div class="item" id="slide4">
                    <a href="portfolio.php" target="_blank">
                        <div class="carousel-caption">
                        </div>
                        <!-- end carousel-caption-->
                    </a>
                </div>
                <!-- end item -->

                <div class="item" id="slide4">
                    <a href="portfolio.php" target="_blank">
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
        <div class="container">
            <div class="header-text">

                <h5 align="center">НЕКРАСОВ АРТЕМ ИГОРЕВИЧ</h5>
                <p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quisquam, quasi, vitae, voluptatibus cupiditate expedita eos quibusdam magnam cum ad doloremque placeat sapiente nam delectus exercitationem vero accusantium soluta officia!</span>
                    <span>Sint vel repudiandae sunt! Architecto, unde, quod, laborum incidunt corrupti ut quo velit nisi delectus excepturi ipsum amet similique harum eum explicabo ducimus aspernatur libero et ex vero praesentium aliquid!</span>
                    <span>Odio, eius, inventore non ducimus veritatis iusto accusantium nesciunt facilis cumque laboriosam officia illo soluta delectus culpa nostrum distinctio assumenda nemo debitis quae ea voluptates laborum optio maxime incidunt alias.</span>
                    <span>Exercitationem, sed officiis autem sit nihil fuga! Quod, possimus, dolorum, soluta dolore voluptatum similique labore sequi praesentium reprehenderit fugit molestiae voluptatem earum perferendis eaque ducimus deleniti adipisci error rerum voluptas.</span>
                    <span>Eveniet, a, ducimus, nobis, molestias rem explicabo sequi quibusdam modi sint facilis ex earum! Obcaecati, quia, doloremque placeat accusamus reprehenderit quas totam laudantium dolorem modi vitae optio porro voluptates velit.</span>
                    <span>Modi nostrum obcaecati ullam natus. Quidem, quod, maxime debitis ipsam excepturi numquam corporis facere voluptate quae recusandae quaerat corrupti voluptas nihil! Fuga, qui in officiis similique nulla. Repellat, quidem obcaecati.</span>
                    <span>Officia, dolore, impedit dicta eveniet blanditiis laboriosam possimus enim quaerat inventore error dolores eum adipisci necessitatibus quidem quis ipsam quasi laborum cumque repellendus ex! Ex, reprehenderit id perspiciatis quae dolore!</span>
                    <span>Sapiente, earum facilis esse ipsam ab excepturi necessitatibus minus amet! Soluta, error adipisci tempora quas molestiae fugiat excepturi rerum dolorum cupiditate architecto neque consequatur. Iste, ratione hic magnam rem consequuntur?</span>
                    <span>Vitae, natus, labore, quam odio odit iusto ipsa rerum quibusdam ducimus ipsam fugiat modi harum ex eum quidem. Deleniti, a laboriosam atque aspernatur dolor eum aperiam ducimus numquam libero tenetur.</span>
                    <span>A, magnam, enim, hic veritatis doloremque placeat ex blanditiis saepe maxime sit itaque quisquam dignissimos quaerat voluptas odit quos quasi est similique perferendis nesciunt reiciendis ipsum vero cupiditate doloribus porro.</span>
                </p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- All Javascript at the bottom of the page for faster page loading -->

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

</body>

</html>