<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pro Soccer/&nbsp;Состав</title>
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
                            <li><a href="{{ url('/team') }}">Состав</a></li>
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
								<li class="active">
									<a href="{{ url('/') }}"> Главная</a></li> 
								<li>
                        <a href="#">Сборная</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('/team') }}">Состав</a></li>
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
							<li><a href="#">PRO SOCCER</a></li>
							<li class="active">Состав</li>
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
			<!--************************************
					Top Rated Player Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Игроки</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-player-grid2 tg-haslayout">
								<div id="tg-player-slider" class="tg-player-slider tg-haslayout">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Вратарь</a>
															<div class="tg-section-heading">
															<h3><a href="#">Матвей Сафронов</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 5 сентября 1985г<br>
																	<b>Возраст:</b> 31	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Вратарь<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>
													</figcaption>
												</figure>
											</div>
											<div class="swiper-slide">
												<figure class="tg-postimg">
													<img src="{{ asset('assets/images/player/img-03.jpg') }}" alt="image description">
													<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Защитник</a>
														<div class="tg-section-heading">
															<h3><a href="#">Игорь Дивеев</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 25 июля 1985г<br>
																	<b>Возраст:</b> 31	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Защитник<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>
													</figcaption>
												</figure>
											</div><div class="swiper-slide">
												<figure class="tg-postimg">
													<img src="{{ asset('assets/images/player/img-02.jpg') }}" alt="image description">
													<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Защитник</a>
														<div class="tg-section-heading">
															<h3><a href="#">Алекс Селихов</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 15 августа 1985г<br>
																	<b>Возраст:</b> 31	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Защитник<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>
													</figcaption>
												</figure>
											</div>
											<div class="swiper-slide">
												<figure class="tg-postimg">
													<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
													<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Защитник</a>
														<div class="tg-section-heading">
															<h3><a href="#">Кирилл Заика</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 15 июня 1987г<br>
																	<b>Возраст:</b> 33	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Защитник<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>
													</figcaption>
												</figure>
											</div>
											<div class="swiper-slide">
												<figure class="tg-postimg">
													<img src="{{ asset('assets/images/player/img-03.jpg') }}" alt="image description">
													<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Защитник</a>
														<div class="tg-section-heading">
															<h3><a href="#">Даниил Круговой</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 15 августа 1986г<br>
																	<b>Возраст:</b> 30	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Защитник<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>
													</figcaption>
												</figure>
											</div>
											<div class="swiper-slide">
												<figure class="tg-postimg">
													<img src="{{ asset('assets/images/player/img-02.jpg') }}" alt="image description">
													<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Полузащитник</a>
														<div class="tg-section-heading">
															<h3><a href="#">Ден Глебов</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																	<b>Возраст:</b> 31	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Полузащитник<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>
													</figcaption>
												</figure>
											</div>
											<div class="swiper-slide">
												<figure class="tg-postimg">
													<img src="{{ asset('assets/images/player/img-03.jpg') }}" alt="image description">
													<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Полузащитник</a>
														<div class="tg-section-heading">
															<h3><a href="#">Лимхан Бакаев</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																	<b>Возраст:</b> 31	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Полузащитник<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>
													</figcaption>
												</figure>
											</div>
											<div class="swiper-slide">
												<figure class="tg-postimg">
													<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
													<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Полузащитник</a>
														<div class="tg-section-heading">
															<h3><a href="#">Дмитрий Баринов</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																	<b>Возраст:</b> 31	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Полузащитник<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>
													</figcaption>
												</figure>
											</div>
											<div class="swiper-slide">
												<figure class="tg-postimg">
													<img src="{{ asset('assets/images/player/img-02.jpg') }}" alt="image description">
													<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">Полузащитник</a>
														<div class="tg-section-heading">
															<h3><a href="#">Александр Ерохин</a></h3>
															<div class="tg-description">
																<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																	<b>Возраст:</b> 31	<br>
																	<b>Сборная:</b><br> PRO SOCCER<br>
																	<b>Позиция:</b><br> Полузащитник<br>
																	<b>Прибытие:</b> 01-04-2010</p>
																</div>
															</div>
														<a href="#" class="tg-theme-tag">Основной состав</a>	
													</figcaption>
												</figure>
											</div>
											<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-02.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Нападающий</a>
													<div class="tg-section-heading">
														<h3><a href="#">Иван Сергеев</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 3 марта 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br>PRO SOCCER<br>
																<b>Позиция:</b><br> Нападающий<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Основной состав</a>		
												</figcaption>
											</figure>
										</div>
										
						<!-- ------------------------------------------------------------------------------------------
										                           Запасный состав сборной
						------------------------------------------------------------------------------------------	
															    -->
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-03.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Нападающий</a>
													<div class="tg-section-heading">
														<h3><a href="#">Федор Ом </a></h3>
														<div class="tg-description">
														<p><b>Дата рождения:</b> <br> 13 февраля 1985г<br>
															<b>Возраст:</b> 31	<br>
															<b>Сборная:</b><br> PRO SOCCER<br>
															<b>Позиция:</b><br> Нападающий<br>
															<b>Прибытие:</b> 01-04-2010</p>
														</div>
													</div>
												<a href="#" class="tg-theme-tag">Основной состав</a>
											</figcaption>
										</figure>
									</div>
									<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-02.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Вратарь</a>
													<div class="tg-section-heading">
														<h3><a href="#">Алекс Селихов</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 15 августа 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Вратарь<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>	
													<a href="#" class="tg-theme-tag">Запасной состав</a>			
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Вратарь</a>
													<div class="tg-section-heading">
														<h3><a href="#">Антон Шунин</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 14 августа 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Вратарь<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>		
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Защитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Макс Осипенко</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 15 августа 1986г<br>
																<b>Возраст:</b> 30	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Защитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-02.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Защитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Илья Самошников</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 15 августа 1986г<br>
																<b>Возраст:</b> 30	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Защитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Защитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Макс Осипенко</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 15 августа 1986г<br>
																<b>Возраст:</b> 30	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Защитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-02.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Защитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Алекс Сатормин</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 15 августа 1986г<br>
																<b>Возраст:</b> 30	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Защитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-03.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Защитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Дмитрий Чистяков</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 15 августа 1986г<br>
																<b>Возраст:</b> 30	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Защитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
										<figure class="tg-postimg">
											<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Защитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Алекс Ионов</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 2 мая 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Защитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
													</div>
												<a href="#" class="tg-theme-tag">Запасной состав</a>
											</figcaption>
										</figure>
									</div>
									<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-03.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Полузащитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Ден Фомин</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Полузащитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-03.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Полузащитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Арсен Захарян</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Полузащитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Полузащитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Антон Зинько</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Полузащитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-03.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Полузащитник</a>
													<div class="tg-section-heading">
														<h3><a href="#">Далер Кузяев</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Полузащитник<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-01.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Нападающий</a>
													<div class="tg-section-heading">
														<h3><a href="#">Андрей Мостовой</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Нападающий<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('assets/images/player/img-02.jpg') }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">Нападающий</a>
													<div class="tg-section-heading">
														<h3><a href="#">Влад Сарвелли</a></h3>
														<div class="tg-description">
															<p><b>Дата рождения:</b> <br> 1 апреля 1985г<br>
																<b>Возраст:</b> 31	<br>
																<b>Сборная:</b><br> PRO SOCCER<br>
																<b>Позиция:</b><br> Нападающий<br>
																<b>Прибытие:</b> 01-04-2010</p>
															</div>
														</div>
													<a href="#" class="tg-theme-tag">Запасной состав</a>
												</figcaption>
											</figure>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!--************************************
					Top Rated Player End
			*************************************-->
		</main>
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-testimonial tg-haslayout tg-bgdark">
				<div class="container">
					<div class="row">
						<div id="tg-testimonial-slider" class="tg-testimonial-slider tg-haslayout">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<figure>
										<img src="{{ asset('assets/images/trophy.png') }}" alt="image description">
									</figure>
									<div class="tg-contentbox">
										<div class="tg-section-heading">
											<h2>Лига чемпионов УЕФА 2021/2022</h2>
										</div>
										<div class="tg-description">
											<p>Лига чемпионов УЕФА 2021/22 — 65-й розыгрыш главного футбольного клубного турнира Европы под эгидой УЕФА, а также 28-й розыгрыш с момента переименования Кубка европейских чемпионов в Лигу чемпионов УЕФА. Финальный матч был сыгран на «Эштадиу да Луш» в Лиссабоне 23 августа 2020 года. Победителем турнира в шестой раз в своей истории стала мюнхенская «Бавария», обыграв в финале «Пари Сен-Жермен». </p>
										</div>
										<ul class="tg-socialicons">
										
										</ul>
									</div>
								</div>
								<div class="swiper-slide">
								
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<main id="tg-main" class="tg-main tg-haslayout">
				<!--************************************
						Top Rated Player Start
				*************************************-->
				<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Тренерский штаб</h2>
							</div>
						<div class="col-sm-11 col-xs-11 pull-right">
							<div class="row">
								<div class="tg-topratedplayer tg-haslayout">
									<div class="row">
										<div class="col-md-7 col-sm-12 col-xs-12">
											<div id="tg-playerscrollbar" class="tg-players tg-playerscrollbar">
												<div class="tg-player">
													<div class="col-sm-6 col-xs-6 pull-right">
														<div class="tg-playcontent">
															<a class="tg-theme-tag" href="#">Главный тренер</a>
															<h3><a href="#">В.Г.Карпин</a></h3>
														</div>
													</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="{{ asset('assets/images/player/img-01.png') }}" alt="image description">
														</a>
													</figure>
												</div>
											</div>
												<div class="tg-player">
													<div class="col-sm-6 col-xs-6 pull-right">
														<div class="tg-playcontent">
															<a class="tg-theme-tag" href="#">Тренер</a>
																<h3><a href="#">Hиколай Писарев</a></h3>
														</div>
													</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="{{ asset('assets/images/player/img-02.png') }}" alt="image description">
														</a>
													</figure>
												</div>
											</div>
												<div class="tg-player">
													<div class="col-sm-6 col-xs-6 pull-right">
														<div class="tg-playcontent">
															<a class="tg-theme-tag" href="#">Тренер</a>
															<h3><a href="#">Виктор Онопко</a></h3>
														</div>
													</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="{{ asset('assets/images/player/img-03.png') }}" alt="image description">
														</a>
													</figure>
												</div>
											</div>
										</div>
									</div>
										<div class="col-md-5 col-sm-12 col-xs-12">
											<div class="tg-contentbox">
												<div class="tg-section-heading"><h2>Тренерский состав Pro soccer</h2></div>
													<div class="tg-description">
													<h5>Главный тренер</h5>
													<p>В.Г. Карпин</p>
													<h6>Тренер</h6>
													<p>Николай Писарев</p>
													<p>Виктор Онопко</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</section>

				<!--************************************
					Our Sponser Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Спонсоры</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-latestresult tg-oursponsers">
								<div class="row">
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>Наши спонсоры</h2></div>
												<div class="tg-description">
												<p>ALBIONE, бренд мужской одежды и аксессуаров
													Официальный поставщик деловой одежды сборных России
													</p>
													<p>Бетсити
														Титульный спонсор Кубка России по футболу</p>
														<p>G-Drive
															Официальное топливо Сборной России по футболу</p>
													</div>
												</div>
											</div>
										<div class="col-md-7 col-sm-12 col-xs-12">
										<div id="tg-upcomingmatch-slider" class="tg-upcomingmatch-slider tg-upcomingmatch">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/sponser/img-01.png') }}" alt="image description">
																</strong>
															</div>
														<div class="tg-box">
															<span>спонсор с 2016</span>
																<h3>ALBIONE</h3>
															</div>
														</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/sponser/img-02.png') }}" alt="image description">
																</strong>
															</div>
														<div class="tg-box">
															<span>спонсор с 2019</span>
																<h3>BetCity</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/sponser/img-03.png') }}" alt="image description">
																</strong>
															</div>
															<div class="tg-box">
																<span>спонсор с 2020</span>
																<h3>G-Drive</h3>
															</div>
														</div>
													</div>
												</div>
										</section>
			<!--************************************
					Our Sponser End
			*************************************-->
		
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
							<li><a href="{{ url('/team') }}">Сборная</a></li>
							
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