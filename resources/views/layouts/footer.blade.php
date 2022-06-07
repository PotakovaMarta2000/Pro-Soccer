
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
									@foreach($contacts as $item)
										<li>
										<i class="fa fa-home"></i>
											<address>
											{{ $item->address }}
												</address>
										</li>
										<li>
											<i class="fa fa-envelope-o"></i>
											<mailto>{{ $item->email }}</mailto>.
										</li>

										<li>
											<i class="fa fa-phone"></i>
											<span>{{ $item->phone_number }}</span>
										</li>
										@endforeach
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
	<script src="{{ asset('assets/js/vendor/jquery-library.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/customScrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
	<script src="{{ asset('assets/js/prettyPhoto.js') }}"></script>
	<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('assets/js/countTo.js') }}"></script>
	<script src="{{ asset('assets/js/appear.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>