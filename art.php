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
		<link href="css/bootstrap.min.css" rel="stylesheet"> <!-- меняет шрифт -->
      <link rel="stylesheet" href="css/style_general.css">
      <link rel="stylesheet" href="css/styles.css">
      <!-- Меняем на СВОЙ CSS файл -->
      
      <link rel="stylesheet" href="css/font.css">
      <!-- Меняем на CSS -->
      <link rel="stylesheet" href="css/about.css">
      <!-- Меняем на CSS -->
      <script src="js/modernizr-2.6.2.min.js"></script>
      <script src="https://kit.fontawesome.com/758f841a2f.js"></script> <!-- Подключение Джава-скрипт, чтобы двигалось -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script> <!-- Подключение Джава-скрипт, чтобы двигалось -->
      
      <link rel="shortcut icon" href="/img/Glavnaya/ikonka-logo-min-min.png" type="image/png">
      
      <title>
         Галерея-Art
      </title>
      <link rel="icon" href="img/Glavnaya/Ikonka-Vse2min.png" type="image/png"> <!-- Вставка иконки -->
      
   </head>
   <body>
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
					   <a href="restavration.php" target="_blank"> <!-- Переход на другой сайт при нажатии на 1ю картинку-->
						<div class="carousel-caption">
							<h4>РЕСТАВРАЦИЯ</h4>
							<p>художественно-реставрационные работы на фасадах и в интерьерах - реставрация и воссоздание живописи, штукатурная отделка и роспись стен</p>
						</div><!-- end carousel-caption-->
					   </a>	
					</div><!-- end item -->
					
					<div class="item" id="slide2">
					    <a href="restavration.php" target="_blank">
						<div class="carousel-caption">
							<h4>ЖИВОПИСЬ</h4>
							<p>ПЕЙЗАЖ * НАТЮРМОРТ * ПОРТРЕТ<br>масло, акварель</p>
						</div><!-- end carousel-caption-->
						</a>	
					</div><!-- end item -->
					
					<div class="item" id="slide3">
					    <a href="restavration.php" target="_blank">
						<div class="carousel-caption">
							<h4>ИЛЛЮСТРАЦИЯ</h4>
							<p>разработка иллюстрацмий в зависимости от поставленной зажачи, рисунок, живопись, векторная и растровая отрисовка</p>
						</div><!-- end carousel-caption-->
						</a>
					</div><!-- end item -->
					
					<div class="item" id="slide4">
					    <a href="restavration.php" target="_blank">
						<div class="carousel-caption">
							<h4>ДИЗАЙН</h4>
							<p>	рестайлинг дизайн-концепции упаковки, фудстилистика, брендирование, фирменный стиль, векторная и растровая отрисовка, тиражирование линейки упаковки</p>
						</div><!-- end carousel-caption-->
						</a>
					</div><!-- end item -->
					
					<div class="item" id="slide5">
					    <a href="restavration.php" target="_blank">
						<div class="carousel-caption">
							<h4>ПОРТРЕТ</h4>
							<p>	пертрет на заказ по фото или снатуры в желаемом образе <br>по вашей концепции<br>(живопись, графика)</p>
						</div><!-- end carousel-caption-->
						</a>
					</div><!-- end item -->
					
				</div><!-- carousel-inner -->
				
				
				
				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
			
			</div><!-- end myCarousel -->
      <!-- Конец карусели-->

<div class="container">
            <div class="header-text">
               <h3 align="center">ГАЛЕРЕЯ</h3><br>
               </div>
               </div>
               
     <div class="container">
      <!-- Карточный стол-->
    <div class="card-deck">
  <div class="card">
    <img src="img/Restavration/r04m.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Реставрация</h5>
      
      <p class="card-text"><small class="text-muted">Просмотр</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/Painting/a01m.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Живопись (масло)</h5>
      
      <p class="card-text"><small class="text-muted">Просмотр</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/Painting/n01m.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Живопись (акварель)</h5>
      
      <p class="card-text"><small class="text-muted">Просмотр</small></p>
    </div>
  </div>
</div>
 <!-- конец Карточный стол-->     
 <!-- Карточный стол-->
      <div class="card-deck">
  <div class="card">
    <img src="img/Painting/p01m.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Портрет</h5>
      
      <p class="card-text"><small class="text-muted">Просмотр</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/Dezign/d01m.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Продуктовый дизайн</h5>
      
      <p class="card-text"><small class="text-muted">Просмотр</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/Dezign/d02m.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Фотокнига</h5>
      
      <p class="card-text"><small class="text-muted">Просмотр</small></p>
    </div>
  </div>
</div>
               
 <!-- конец Карточный стол-->  
 
 </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="js/script.js"></script>
	
	<!-- Начало кнопки соцсетей-->
      <div class="container-soc">
         <ul class="submenu">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://vk.com/id160121105"><i class="fa fa-vk" target="_blank"></i></a></li>
            <li><a href="https://vk.com/id160121105"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
         </ul>
      </div>
      <!-- Конец кнопок соцсетей-->
   
   </body>
</html>