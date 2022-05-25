<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pro Soccer/&nbsp;Главная</title>
	<link type="image/x-icon" rel="shortcut icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
	<link type="image/png" sizes="16x16" rel="icon" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
	<link type="image/png" sizes="32x32" rel="icon" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
	<link type="image/png" sizes="96x96" rel="icon" href="{{ asset('assets/images/favicons/favicon-96x96.png') }}">
	<link type="image/png" sizes="120x120" rel="icon" href="{{ asset('assets/images/favicons/favicon-120x120.png') }}">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/transitions.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/prettyPhoto.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/customScrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Mobile Menu Start
		*************************************-->
		<div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
			<span id="tg-close" class="tg-close fa fa-close"></span>
			<div class="tg-colhalf">
                <ul>
                    <li>
						<a href="{{ url('/') }}">Главная</a>
                    </li>  
                    
                    <li>
                        <a href="#">Сборная</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('/players') }}">Состав</a></li>
                            <li><a href="{{ url('/coaches') }}">Тренерский штаб</a></li>
                        </ul>   
                        
                    </li>
                <li class="active">
                        <a href="#">Турниры</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('/match') }}">Матчи</a></li>
                            <li><a href="{{ url('/news') }}">Новости</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="tg-colhalf">
                <ul>
                
                    <li>
                        <a href="{{ url('/gallery') }}">Галерея</a>
                    </li>
                <li><a href="#myid1">Контакты</a></li>   
                    
                </ul>
            </div>
		</div>
		<!--************************************
				Mobile Menu End
		*************************************-->
<!--************************************
				Header Start
		*************************************-->

		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="row">
						<div class="tg-topbar tg-haslayout">
							<nav id="tg-topaddnav" class="tg-topaddnav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
										<i class="fa fa-arrow-right"></i>
									</button>
								</div>
								<div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
									<div class="tg-colhalf pull-right">
										<nav class="tg-addnav">
										</nav>
									</div>
									<div class="tg-colhalf">
									
									</div>
								</div>
							</nav>
						</div> 
						<nav id="tg-nav" class="tg-nav brand-center">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
									<i class="fa fa-bars"></i>
								</button>
								<strong class="tg-logo">
									<a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="image description"></a>
								</strong>
							</div>
						
							<div id="tg-navigation" class="tg-navigation">
								<div class="tg-colhalf">
                                    <ul>
									<li>
						<a href="{{ url('/') }}">Главная</a>
                    </li>  
                    
                    <li>
                        <a href="#">Сборная</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('/players') }}">Состав</a></li>
                            <li><a href="{{ url('/coaches') }}">Тренерский штаб</a></li>
                        </ul>   
                        
                    </li>
                <li class="active">
                        <a href="#">Турниры</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('/match') }}">Матчи</a></li>
                            <li><a href="{{ url('/news') }}">Новости</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="tg-colhalf">
                <ul>
                
                    <li>
                        <a href="{{ url('/gallery') }}">Галерея</a>
                    </li>
                <li><a href="#myid1">Контакты</a></li>
                                    </ul>
                                </div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Banner Start
		*************************************-->
		<div class="tg-banner tg-haslayout">
			<div class="tg-imglayer">
				<img src="images/bg-pattran.png" alt="image desctription">
			</div>
			<div class="container">
				<div class="row">
					<div class="tg-banner-content tg-haslayout">
						<div class="tg-pagetitle">
							<h1>Футбольная Сборная</h1>
						</div>
						<ol class="tg-breadcrumb">
							<li class="#">PRO SOCCER</li>
							<li class="active">новости</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="tg-twocolumns" class="tg-twocolumns tg-haslayout">
							<div class="col-sm-12 col-xs-12">
								<figure class="tg-postimg tg-postimgdetail">
									<img src="{{ asset('assets/images/blog/img-18.jpg') }}" alt="image description">
									
								</figure>
							</div>
							<div class="tg-player-description tg-haslayout">
								<div class="tg-description">
									<img class="tg-alignleft" src="{{ asset('assets/images/player-detail/img-01.jpg') }}" alt="image description">
									<div class="tg-section-heading">
										<h2>«Россия – футбольная страна!»</h2>
									</div>
									<p>Российский футбольный союз подвел итоги национального этапа Всероссийского смотра-конкурса проектов массового футбола «Россия – футбольная страна!». Все участники национального этапа получат денежные призы и памятные награды. 

										Второй сезон конкурса стартовал во Всемирный день футбола – 10 декабря 2021 года – и традиционно прошел в три этапа. Заявочный период продолжался до 27 февраля, в ходе которого РФС получил 849 заявок. На региональном этапе каждая заявка была рассмотрена на соответствие условиям положения о проведении конкурса, наличие необходимых для участия документов и отсутствие дублирования в нескольких номинациях. В итоге были получены 369 уникальных футбольных проектов из 71 региона России.
										
										В каждом субъекте была создана региональная комиссия, которая определила лучшие проекты в заявленных номинациях. Так, на межрегиональный этап вышли 186 проектов. Единая межрегиональная комиссия завершила свою работу 17 апреля. По её итогам 59 проектов стали участниками финального этапа, где судьбу каждого проекта решала национальная комиссия конкурса во главе с заместителем генерального секретаря, директором по развитию РФС Максимом Митрофановым</p>
									<p>«Это понятно, что все хотят играть! Но есть главный тренер, и только ему решать. Я просто хочу делать свое дело так, как умею. А решение принимать штабу. Любой вратарь держит Чемпионат Мира в уме. И не только вратари, выступающие в нашем чемпионате. Но и за рубежом – тот же Антон Митрюшкин. У Станислава Саламовича непростой выбор.</p>
									<p>Кубок чемпионата мира по футболу добрался до Тулы. </p>
									<div id="tg-playerslider" class="tg-playerslider tg-haslayout">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<figure><img src="{{ asset('assets/images/player-detail/img-02.jpg') }}" alt="image description"></figure>
											</div>
											
										</div>
										
									</div>
									<ul class="tg-detail">
										<li>
											<i class="fa fa-check"></i>
											РФС заключил соглашение о развитии футбола в Сахалинской области
										</li>
										<li>
											<i class="fa fa-check"></i>
											Определена дата заседания исполкома РФС
										</li>
										<li>
											<i class="fa fa-check"></i>
											РФС подаст апелляцию в САS на решения ФИФА и УЕФА 
										</li>
										<li>
											<i class="fa fa-check"></i>
											Заявление РФС
										</li>
										<li>
											<i class="fa fa-check"></i>
											РФС заключил соглашение о развитии футбола в Воронежской области
										</li>
										<li>
											<i class="fa fa-check"></i>
											Ключевые спецпроекты прошедшего года
										</li>
									</ul>
									<ul class="tg-detail">
										<li>
											<i class="fa fa-caret-right"></i>
											РФС заключил соглашение о развитии футбола в Республике Бурятия
										</li>
										<li>
											<i class="fa fa-caret-right"></i>
											Consectetur adipisicing elit do eiusmod tempor
										</li>
										
										<li>
											<i class="fa fa-caret-right"></i>
											РФС заключил соглашение о развитии футбола в Воронежской области
										</li>
										
										<li>
											<i class="fa fa-caret-right"></i>
											РФС заключил соглашение о развитии футбола в Республике Бурятия
										</li>
									</ul>
									<div class="clearfix"></div>
									<p>Защитник лиги и сборной Исландии Рагнар Сигурдссон рассказал, в чём секрет прогресса сборной Исландии.

										«Чемпионат мира — более статусный турнир, чем чемпионат Европы. Очень хорошо помню, как нас встретили в прошлом году. Стояла отличная погода. Мы проехали на автобусе в спальном районе Рейкьявика. На улицах было столько людей, сколько я не видел никогда в жизни. Просто невероятно! Надеюсь, нам удастся повторить успех Евро на чемпионате мира.</p>
								
									</main>							
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->

		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-haslayout tg-footerinfobox">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-footerinfo">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="tg-footercol">
									
											</li>
										</ul>
									</div>
								</div>
							</div>
								
							<div class="col-sm-4">
								<div class="tg-footercol">
									<div class="tg-haslayout">
										<strong class="tg-logo">
											<a href="#">
												<img src="{{ asset('assets/images/logo2.png') }}" alt="image description">
											</a>
										</strong>
									</div>
									<div class="tg-description">
										<span id="myid1">КОНТАКТЫ</span>
									</div>
									<ul class="tg-contactinfo">
										<li>
											<i class="fa fa-home"></i>
											<address>
												115172, Россия, Москва, улица Народная, дом 7 (метро «Таганская»), Дом российского футбола
												</address>
										</li>
										<li>
											<i class="fa fa-envelope-o"></i>
											<mailto>info@domain.com</mailto>.
										</li>	
										
										<li>
											<i class="fa fa-phone"></i>
											<span>+44 123 456 788 - 9</span>
										</li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<span class="tg-copyright">&copy; 2022  |  Футбольная сборная Pro Soccer </span>
					<nav class="tg-footernav">
						<ul>
							<li><a href="{{ url('/') }}">Главная</a></li>
							<li><a href="{{ url('/players') }}">Сборная</a></li>
							
							<li><a href="{{ url('/statistic') }}">Турниры</a></li>
							<li><a href="{{ url('/gallery') }}">Галерея</a></li>
							
							<li><a href="https://rfs.ru/national" target="_blank">Источник материала проекта</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	
	<!--************************************
			Wrapper End
	*************************************-->
	
	<!--************************************
		LightBoxes End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/customScrollbar.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/main.js"></script>
</body>
</html>