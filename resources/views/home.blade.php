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
				Home Slider Start
		*************************************-->
		<div class="tg-sliderbox">
			<div class="tg-imglayer">
				<img src="{{ asset('assets/images/bg-pattran.png') }}" alt="image desctription">
			</div>
			<div id="tg-home-slider" class="tg-home-slider tg-haslayout">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="container">
							<figure class="floating">
								<img src="{{ asset('assets/images/slider/img-01.png') }}" alt="image description">
							</figure>
						<div class="tg-slider-content">
						<h1>Футбoльная<br><span>сборная</span></h1> 
						
							</div>
						</div>
					</div>
				<div class="swiper-slide">
						<div class="container">
							<figure class="floating">
								<img src="{{ asset('assets/images/slider/img-01.png') }}" alt="image description">
							</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Новости</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-aboutussection">
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12">
										<figure>
											<img src="{{ asset('assets/images/gt.jpg') }}" alt="image description">
										</figure>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>Суперлига-2022: самые зрелищные моменты</h2></div>
											<div class="tg-description">
												<p>8-й тур Суперлиги стартует 1 июля. PRO SOCCER сыграет с "Локомотивом", "Чертаново" примет ЦСКА, а "Ростов" встретится со "Звездой-2005". Матчи "Краснодар" – "Рубин" и "Зенит" – "Енисей" пройдут 18 и 19 августа.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!--************************************
					About Us End
			*************************************-->
			<!--************************************
					Video Start
			*************************************-->
			<section class="tg-videobox tg-haslayout">
				<figure>
					<img src="{{ asset('assets/images/bg-video.jpg') }}" alt="image description">
					<figcaption>
						<a class="tg-playbtn" href="https://www.youtube.com/watch?v=K2ud4yrOzeM" data-rel="prettyPhoto[iframe]"></a>
						<h2> Обзор первого матча 1/2 финала PRO SOCCER VS Лиги чемпионов 26.04.2022</h2>
					</figcaption>
				</figure>
			</section>
			<!--************************************
					Video End
			*************************************-->
			
		
			<!--************************************
					Latest Result Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Статистика</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-latestresult">
								<div class="row">
									<div class="col-md-8 col-sm-12 col-xs-12">
										<div class="tab-content tg-tabscontent">
											<div role="tabpanel" class="tab-pane active" id="one">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>6 - 4</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="{{ asset('assets/images/team-logo/logo-01.png') }}" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">PRO SOCCER ( Победа )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Роман Фенлей (15)</li>
																<li>Мигель Беккель (19)</li>
																<li>Джон Уинстон (39)</li>
																
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="{{ asset('assets/images/team-logo/logo-02.png') }}" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Римляне (Поражение)</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Эйдан Руберг (22)</li>
																<li>Вилберт Уинстон (27)</li>
																<li>Вонд Берсович (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											
											<div role="tabpanel" class="tab-pane" id="seven">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>4 - 6</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="{{ asset('assets/images/team-logo/logo-01.png') }}" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">PRO SOCCER (Победа)</a></h4>
															</div>
														
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="{{ asset('assets/images/team-logo/logo-02.png') }}" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">horned grogs ( Поражение )</a></h4>
															</div>
														
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div id="tg-matchscrollbar" class="tg-matchscrollbar tg-allmatchstatus">
											<ul class="tg-matchtabnav" role="tablist">
												<li role="presentation" class="active">
													<a href="#one" aria-controls="one" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-s-01.png') }}" alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-s-01.png') }}" alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#two" aria-controls="two" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-s-01.png') }}" alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 3</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-s-01.png') }}" alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#three" aria-controls="three" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-s-01.png') }}" alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>5 - 2</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-s-01.png') }}" alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#four" aria-controls="four" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-s-01.png') }}" alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>4 - 2</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-s-01.png') }}" alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
											
														</div>
													</a>
												</li>
											</ul>
										</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Latest Result End
			*************************************-->
			<!--************************************
					Statistics Start
			*************************************-->
			<section class="tg-main-section tg-haslayout tg-bgdark">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="tg-statistics">
								<div class="tg-statistic tg-goals">
									<span class="tg-icon icon-Icon1"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="70" data-speed="8000" data-refresh-interval="50">70</span></h2>
									<h3>Голы</h3>
								</div>
								<div class="tg-statistic tg-activeplayers">
									<span class="tg-icon icon-Icon2"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="30" data-speed="8000" data-refresh-interval="50">30</span></h2>
									<h3>Игроки</h3>
								</div>
								<div class="tg-statistic tg-activeteams">
									<span class="tg-icon icon-Icon3"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="1" data-speed="8000" data-refresh-interval="50">1</span></h2>
									<h3>Командa</h3>
								</div>
								<div class="tg-statistic tg-earnedawards">
									<span class="tg-icon icon-Icon4"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="57" data-speed="8000" data-refresh-interval="50">57</span></h2>
									<h3>Награды</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Statistics End
			*************************************-->
			<!--************************************
					Fixtures Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Матчи</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-latestresult">
								<div class="row">
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>Суперкубок Европы 2022</h2></div>
											<div class="tg-description">
												<p>6 июля 2022 в 15:30 Soccer Stadium, Dubai</p>
												<p>18 июля 2022 в 18:30 Soccer Stadium, Dubai</p>
												<p>20 июля 2022 в 20:30 Soccer Stadium, Dubai</p>
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
																	<img src="{{ asset('assets/images/team-logo/logo-l-02.png') }}" alt="image description">
																</strong>
																<h3>PRO SOCCER</h3>
															</div>
															<div class="tg-box">
																<h3> vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-l-02.png') }}" alt="image description">
																</strong>
																<h3>Римляне</h3>
															</div>
														</div>
													</div>
											
											<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-l-02.png') }}" alt="image description">
																</strong>
																<h3>PRO SOCCER</h3>
															</div>
														<div class="tg-box">
																<h3>vs</h3>
															</div>
														<div class="tg-box">
															<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-l-02.png') }}" alt="image description">
																</strong>
															<h3>horned grogs</h3>
														</div>
													</div>
												</div>
												
											<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="{{ asset('assets/images/team-logo/logo-l-02.png') }}" alt="image description">
																</strong>
																<h3>PRO SOCCER</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
														<div class="tg-box">
															<strong class="tg-teamlogo">
																<img src="{{ asset('assets/images/team-logo/logo-l-02.png') }}" alt="image description">
															</strong>
																<h3>Гладиаторы</h3>
															</div>
														</div>
													</div>
												</div>
										</section>
										
			<!--************************************
					Fixtures End
			*************************************-->
				<!--************************************
					Upcoming Match Start
			*************************************-->
			<section class=" tg-haslayout tg-bgstyleone">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-bgpattrant">
					<div class="container">
						<div class="row">
							<div class="tg-upcomingmatch-counter">
								<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
									<figure>
										<img src="{{ asset('assets/images/img-02.png') }}" alt="image description">
									</figure>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<div class="tg-contentbox">
										<div class="tg-section-heading"><h2>Совместная тренировка сборных</h2></div>
										<div class="tg-description">
											<p> На открытой тренировке и спарринге национальной и молодёжной сборных команды поддерживают воспитанники детского дома «Волжский» из Рыбинска Ярославской области и ребята из PRO SOCCER, «Спартака» и ЦСКА с церебральным параличом. После финального свистка пригласим их на поле для мини-тренировки с футболистами сборных.</p>
											<p>Конечно, в теме всех новостей о сборной. Повлиять на отношение к России в мировом футболе мы не можем. Но можем работать над собой – ещё больше, чем раньше. Хочу быть готовым к официальным матчам в любой момент – и с «Зенитом» в еврокубках, и со сборной. Когда бы это ни произошло!</p>
											<p>Начинаем рассказывать о сегодняшнем занятии. Оно будет состоять из совместных упражнений игроков двух команд, а затем состоится спарринг, который будет носить щадящий характер. «Никаких «заруб», мы ни за что не играем. Цель в том, чтобы футболисты получили нагрузку, а тренеры смогли посмотреть на всех», – так прокомментировал задачи главный тренер национальной команды Валерий Карпин. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section> 
		</main>
			<!--************************************
					Upcoming Match End
			*************************************-->
		
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