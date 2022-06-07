@include('layouts.header')
@include('layouts.banner')
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">

			<!--************************************
					Upcoming Match Start
			*************************************-->
			<!-- <div class="header">
				<h2>Предстоящие матчи</h2>
			</div>
			<style>
				H2 { text-align: center }
			</style> -->
			
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
										<div class="tg-section-heading"><h2><span>Предстоящие матчи</span></h2></div>
											<div class="tg-description">
												@foreach($matchies as $matchGame)
													<p>{{ $matchGame->title }} стартует {{ $matchGame->date_time->format('j-m-Y, h:i') }}</p>
												@endforeach
											<div class="tg-section-heading"><h2><span></span></h2></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section> 
			<!--************************************
					Upcoming Match End
			*************************************-->
</main>

		<!-- ************************************
				Main End
		************************************* -->

@include('layouts.footer')
