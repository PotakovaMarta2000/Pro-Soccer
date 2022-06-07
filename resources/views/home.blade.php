@include('layouts.header')
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
										<img src="{{ asset('assets/images/blog/img-06.jpg') }}" alt="">
									</figure>
								</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
										<div class="tg-section-heading"><h2>{{ $lastNews->title }}</h2>
									</div>
										<div class="tg-description">
										{!! $lastNews->discription !!}
										<a class="tg-btn" href="{{route('news.show', [$lastNews->slug]) }}"><span>cмотреть</span></a>
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
						<a class="tg-playbtn" href="{{ $lastMatch->video }}" data-rel="prettyPhoto[iframe]"></a>
						<h2> Обзор матча {{ $lastMatch->title }}</h2>
					</figcaption>
				</figure>
			</section>
			<!--************************************
					Video End
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
									<div class="tg-section-heading"><h2>{{ config('app.name') }}</h2></div>
										<div class="tg-description">
										<ul class="tg-detail">
										@foreach($news as $item)
										<li>
											<i class="fa fa-check"></i>
											<a href="{{route('news.show', [$item->slug]) }}">{{ $item->title }}</a>
										</li>
										@endforeach
									</ul>
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
@include('layouts.footer')
