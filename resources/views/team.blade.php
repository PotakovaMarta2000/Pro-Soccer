@include('layouts.header')
@include('layouts.banner')
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

										@foreach($players as $player)
										<div class="swiper-slide">
											<figure class="tg-postimg">
												<img src="{{ asset('storage/' . $player->thumbnail) }}" alt="image description">
												<figcaption class="tg-img-hover">
														<a href="#" class="tg-theme-tag">{{ $player->position }}</a>
															<div class="tg-section-heading">
																<h3><a href="#">{{ $player->name }}</a></h3>
																<div class="tg-description">
																	<p>
																		<b>Дата рождения:</b> <br>{{ $player->birth_date }}<br>
																		<b>Позиция:</b><br> {{ $player->position }}<br>
																		<b>Прибытие:</b> {{ $player->start_date }}
																	</p>
																</div>
															</div>
												</figcaption>
											</figure>
										</div>
										@endforeach

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
												@foreach($coaches as $coach)
												<div class="tg-player">
													<div class="col-sm-6 col-xs-6 pull-right">
														<div class="tg-playcontent">
															<a class="tg-theme-tag" href="#">{{ $coach->position }}</a>
															<h3><a href="#">{{ $coach->name }}</a></h3>
														</div>
													</div>
													<div class="col-sm-6 col-xs-6">
														<figure>
															<a href="#">
																<img src="{{ asset('storage/' . $coach->thumbnail) }}" alt="image description">
															</a>
														</figure>
													</div>
												</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</section>
		</main>
		<!--************************************
				Main End
		*************************************-->
@include('layouts.footer')
